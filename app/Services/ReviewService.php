<?php

namespace App\Services;

use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class ReviewService
{
    protected int $totalWanted = 10;

    /**
     * Récupère jusqu'à 10 avis : App Store (iOS) et Play Store (config ou API).
     *
     * @return array<int, array{author: string, text: string, rating: int, source: string}>
     */
    public function getReviews(): array
    {
        $cacheKey = 'reviews_slider_' . config('reviews.app_store.app_id');
        $ttl = config('reviews.app_store.cache_ttl_minutes', 60) * 60;

        try {
            $store = Cache::store('file');
            return $store->remember($cacheKey, $ttl, function () {
                return $this->buildReviews();
            });
        } catch (\Throwable $e) {
            Log::warning('ReviewService: cache indisponible, chargement direct.', ['error' => $e->getMessage()]);
            return $this->buildReviews();
        }
    }

    /**
     * Construit la liste des avis (App Store, Play Store, repli).
     *
     * @return array<int, array{author: string, text: string, rating: int, source: string}>
     */
    protected function buildReviews(): array
    {
        $reviews = [];
        $ios = $this->fetchFromAppStore();
        $android = $this->getPlayStoreReviews();
        foreach (array_merge($ios, $android) as $r) {
            $reviews[] = $r;
            if (count($reviews) >= $this->totalWanted) {
                break;
            }
        }
        $fallback = config('reviews.fallback', []);
        foreach ($fallback as $r) {
            if (count($reviews) >= $this->totalWanted) {
                break;
            }
            $reviews[] = [
                'author' => $r['author'] ?? 'Utilisateur',
                'text' => $r['text'] ?? '',
                'rating' => min(5, max(1, (int) ($r['rating'] ?? 5))),
                'source' => $r['source'] ?? 'App Store',
            ];
        }
        return array_slice($reviews, 0, $this->totalWanted);
    }

    /**
     * Avis depuis l’App Store (flux RSS iTunes).
     *
     * @return array<int, array{author: string, text: string, rating: int, source: string}>
     */
    public function fetchFromAppStore(): array
    {
        $appId = config('reviews.app_store.app_id');
        $country = config('reviews.app_store.country');
        $url = "https://itunes.apple.com/{$country}/rss/customerreviews/page=1/id={$appId}/sortBy=mostrecent/json";

        try {
            $response = Http::timeout(10)->get($url);
            if (! $response->successful()) {
                return [];
            }
            $data = $response->json();
            return $this->parseAppStoreFeed($data);
        } catch (\Throwable $e) {
            Log::warning('ReviewService: impossible de récupérer les avis App Store.', ['url' => $url, 'error' => $e->getMessage()]);
            return [];
        }
    }

    /**
     * @param array<string, mixed> $data
     * @return array<int, array{author: string, text: string, rating: int, source: string}>
     */
    protected function parseAppStoreFeed(array $data): array
    {
        $reviews = [];
        $entries = $data['feed']['entry'] ?? [];
        foreach ($entries as $index => $entry) {
            if ($index === 0) {
                continue;
            }
            if (empty($entry['content']['label'] ?? '')) {
                continue;
            }
            $author = $entry['author']['name']['label'] ?? 'Utilisateur';
            $text = $entry['content']['label'] ?? '';
            $rating = (int) ($entry['im:rating']['label'] ?? 5);
            if ($text === '') {
                continue;
            }
            $reviews[] = [
                'author' => $author,
                'text' => $text,
                'rating' => min(5, max(1, $rating)),
                'source' => 'App Store',
            ];
        }
        return $reviews;
    }

    /**
     * Avis Play Store : depuis la config (ou plus tard API Google).
     *
     * @return array<int, array{author: string, text: string, rating: int, source: string}>
     */
    public function getPlayStoreReviews(): array
    {
        $configured = config('reviews.play_store.reviews', []);
        $reviews = [];
        foreach ($configured as $r) {
            $reviews[] = [
                'author' => $r['author'] ?? 'Utilisateur',
                'text' => $r['text'] ?? '',
                'rating' => min(5, max(1, (int) ($r['rating'] ?? 5))),
                'source' => 'Play Store',
            ];
        }
        return $reviews;
    }
}
