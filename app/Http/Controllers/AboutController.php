<?php

namespace App\Http\Controllers;

use App\Services\MechanicDataService;
use Illuminate\Contracts\View\View;

class AboutController extends Controller
{
    /**
     * Show company profile & background.
     */
    public function index(): View
    {
        $stats = MechanicDataService::getCompanyStats();
        $testimonials = MechanicDataService::getTestimonials();

        return view('about', compact('stats', 'testimonials'));
    }
}
