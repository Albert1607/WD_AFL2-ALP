<?php

namespace App\Http\Controllers;

use App\Services\MechanicDataService;
use Illuminate\Contracts\View\View;

class HomeController extends Controller
{
    /**
     * Show the main company profile homepage.
     */
    public function index(): View
    {
        $services = MechanicDataService::getServices();
        $promotions = MechanicDataService::getPromotions();
        $outlets = MechanicDataService::getOutlets();
        $cars = MechanicDataService::getCarDatabase();
        $testimonials = MechanicDataService::getTestimonials();
        $tips = MechanicDataService::getTips();
        $stats = MechanicDataService::getCompanyStats();

        return view('home', compact(
            'services',
            'promotions',
            'outlets',
            'cars',
            'testimonials',
            'tips',
            'stats'
        ));
    }
}
