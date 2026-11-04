<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;

class PageController extends Controller
{
    /**
     * Display the contact page with address, map, and WhatsApp link.
     */
    public function kontak(): View
    {
        return view('kontak');
    }
}
