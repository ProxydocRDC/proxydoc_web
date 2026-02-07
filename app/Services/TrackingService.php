<?php

namespace App\Services;

use App\Models\ActionClick;
use App\Models\PageVisit;
use Illuminate\Http\Request;

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
        $ipHash = $request->ip() ? hash('sha256', $request->ip() . config('app.key')) : null;
        try {
            PageVisit::create([
                'path' => '/' . $path,
                'session_id' => $sessionId,
                'ip_hash' => $ipHash,
            ]);
        } catch (\Throwable $e) {
            report($e);
        }
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
}
