<?php

namespace App\Http\Controllers;

use App\Models\Team;
use App\Services\ReviewService;
use Illuminate\View\View;

class AboutController extends Controller
{
    public function __invoke(ReviewService $reviewService): View
    {
        $reviews = $reviewService->getReviews();
        $teams = Team::active()->ordered()->get();

        return view('frontend.about', [
            'reviews' => $reviews,
            'teams' => $teams,
        ]);
    }
}
