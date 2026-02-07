<?php

namespace App\Http\Controllers;

use App\Models\Partner;
use Illuminate\View\View;

class HomeController extends Controller
{
    public function __invoke(): View
    {
        $partners = Partner::active()->ordered()->get();

        return view('frontend.home', compact('partners'));
    }
}
