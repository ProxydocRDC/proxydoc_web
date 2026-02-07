<?php

namespace App\Services;

use App\Models\ActionClick;
use App\Models\PageVisit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Cache;

class TrackingService
{
    /**
     * Enregistre une visite de page (appelé par le middleware).
     */
    public static function recordVisit(Request $request): void
    {
        $path = $request->path();
        if (str_starts_with($path, 'admin') || str_starts_with($path, '_ignition') || str_starts_with($path, 'horizon')) {
            return;
        }
        $sessionId = $request->session()->getId();
        $ip = $request->ip();
        $ipHash = $ip ? hash('sha256', $ip . config('app.key')) : null;
        $country = self::getCountryFromIp($ip);
        try {
            PageVisit::create([
                'path' => '/' . $path,
                'session_id' => $sessionId,
                'ip_hash' => $ipHash,
                'ip' => $ip,
                'country' => $country,
            ]);
        } catch (\Throwable $e) {
            report($e);
        }
    }

    /**
     * Récupère le pays depuis l'IP (cache 24h par IP).
     */
    public static function getCountryFromIp(?string $ip): ?string
    {
        if (! $ip || $ip === '127.0.0.1' || $ip === '::1') {
            return 'Local';
        }
        $cacheKey = 'geo_ip_' . md5($ip);
        return Cache::remember($cacheKey, now()->addDay(), function () use ($ip) {
            try {
                $response = Http::timeout(2)->get("https://ip-api.com/json/{$ip}", [
                    'fields' => 'country',
                ]);
                if ($response->successful()) {
                    $data = $response->json();
                    return $data['country'] ?? null;
                }
            } catch (\Throwable $e) {
                // ignore
            }
            return null;
        });
    }

    /**
     * Enregistre un clic sur une action (bouton App Store, Play Store, contact, etc.).
     */
    public static function recordActionClick(string $actionName, ?string $context = null, ?string $sessionId = null): void
    {
        try {
            ActionClick::create([
                'action_name' => $actionName,
                'context' => $context,
                'session_id' => $sessionId,
            ]);
        } catch (\Throwable $e) {
            report($e);
        }
    }

    /**
     * Nombre total de pages vues.
     */
    public static function totalPageViews(): int
    {
        return PageVisit::count();
    }

    /**
     * Nombre de visiteurs uniques (sessions distinctes).
     */
    public static function uniqueVisitors(): int
    {
        return PageVisit::distinct('session_id')->count('session_id');
    }

    /**
     * Nombre de clics par action.
     */
    public static function clicksByAction(): \Illuminate\Support\Collection
    {
        return ActionClick::query()
            ->selectRaw('action_name, count(*) as total')
            ->groupBy('action_name')
            ->pluck('total', 'action_name');
    }

    /**
     * Liste des pages les plus visitées (path => nombre de vues), triée par ordre décroissant.
     */
    public static function mostVisitedPages(): \Illuminate\Support\Collection
    {
        return PageVisit::query()
            ->selectRaw('path, count(*) as visits')
            ->groupBy('path')
            ->orderByDesc('visits')
            ->get();
    }

    /**
     * Liste des visiteurs uniques : par session_id, avec pays, IP, temps passé (en secondes), nombre de pages vues.
     */
    public static function visitorsList(): \Illuminate\Support\Collection
    {
        return PageVisit::query()
            ->selectRaw('
                session_id,
                max(ip) as ip,
                max(country) as country,
                min(created_at) as first_visit,
                max(created_at) as last_visit,
                count(*) as page_views
            ')
            ->groupBy('session_id')
            ->orderByDesc('last_visit')
            ->get()
            ->map(function ($row) {
                $first = \Carbon\Carbon::parse($row->first_visit);
                $last = \Carbon\Carbon::parse($row->last_visit);
                $row->time_spent_seconds = $last->diffInSeconds($first);
                return $row;
            });
    }
}
