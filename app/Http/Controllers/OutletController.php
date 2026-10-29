<?php

namespace App\Http\Controllers;

use App\Services\MechanicDataService;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class OutletController extends Controller
{
    /**
     * Display a listing of workshop outlets categorized by region/city.
     */
    public function index(Request $request): View
    {
        $allOutlets = MechanicDataService::getOutlets();
        $selectedCity = $request->query('city', 'all');

        $filteredOutlets = array_filter($allOutlets, function (array $outlet) use ($selectedCity): bool {
            if ($selectedCity !== 'all' && strtolower($outlet['city']) !== strtolower($selectedCity)) {
                return false;
            }

            return true;
        });

        $cities = array_values(array_unique(array_map(fn ($o) => $o['city'], $allOutlets)));

        return view('outlets.index', [
            'outlets' => array_values($filteredOutlets),
            'allOutletsCount' => count($allOutlets),
            'cities' => $cities,
            'selectedCity' => $selectedCity,
        ]);
    }
}
