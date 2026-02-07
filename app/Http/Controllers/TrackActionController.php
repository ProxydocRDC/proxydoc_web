<?php

namespace App\Http\Controllers;

use App\Services\TrackingService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class TrackActionController extends Controller
{
    /**
     * Enregistre un clic sur une action (appelé en AJAX depuis le front).
     */
    public function __invoke(Request $request): JsonResponse
    {
        $request->validate([
            'action' => ['required', 'string', 'max:100'],
            'context' => ['nullable', 'string', 'max:255'],
        ]);

        TrackingService::recordActionClick(
            $request->input('action'),
            $request->input('context'),
            $request->session()->getId()
        );

        return response()->json(['ok' => true]);
    }
}
