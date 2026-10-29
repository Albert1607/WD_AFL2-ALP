<?php

namespace App\Http\Controllers;

use App\Services\MechanicDataService;
use Illuminate\Contracts\View\View;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class ServiceController extends Controller
{
    /**
     * Display a listing of all quick services.
     */
    public function index(): View
    {
        $services = MechanicDataService::getServices();
        $promotions = MechanicDataService::getPromotions();

        return view('services.index', compact('services', 'promotions'));
    }

    /**
     * Display a specific service detail.
     *
     * @throws NotFoundHttpException
     */
    public function show(string $slug): View
    {
        $service = MechanicDataService::getServiceBySlug($slug);

        if (! $service) {
            abort(404, 'Layanan tidak ditemukan.');
        }

        $allServices = MechanicDataService::getServices();
        $outlets = MechanicDataService::getOutlets();

        return view('services.show', compact('service', 'allServices', 'outlets'));
    }
}
