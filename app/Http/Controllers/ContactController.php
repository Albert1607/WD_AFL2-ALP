<?php

namespace App\Http\Controllers;

use App\Services\MechanicDataService;
use Illuminate\Contracts\View\View;

class ContactController extends Controller
{
    /**
     * Show contact information & customer support profile.
     */
    public function index(): View
    {
        $outlets = MechanicDataService::getOutlets();

        return view('contact', compact('outlets'));
    }
}
