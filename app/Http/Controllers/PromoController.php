<?php

namespace App\Http\Controllers;

use App\Services\MechanicDataService;
use Illuminate\Contracts\View\View;

class PromoController extends Controller
{
    /**
     * Display promotional campaigns and packages.
     */
    public function index(): View
    {
        $promotions = MechanicDataService::getPromotions();
        $services = MechanicDataService::getServices();

        return view('promos.index', compact('promotions', 'services'));
    }
}
