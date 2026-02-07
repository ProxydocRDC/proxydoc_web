<?php

namespace App\Http\Controllers;

use App\Models\Faq;
use Illuminate\View\View;

class FaqController extends Controller
{
    public function __invoke(): View
    {
        $faqs = Faq::active()->ordered()->get();

        return view('frontend.faq', compact('faqs'));
    }
}
