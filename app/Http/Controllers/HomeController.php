<?php

namespace App\Http\Controllers;

use App\Models\Layanan;
use App\Models\LogoBrand;
use App\Models\Testimoni;
use Illuminate\Contracts\View\View;

class HomeController extends Controller
{
    /**
     * Display the company profile homepage.
     */
    public function index(): View
    {
        $featuredLayanan = Layanan::with('kategori')
            ->limit(6)
            ->get();

        $latestTestimoni = Testimoni::with('layanan')
            ->latest()
            ->limit(3)
            ->get();

        $stats = config('bengkel.stats');
        $whyUs = config('bengkel.why_us');
        $howItWorks = config('bengkel.how_it_works');

        $brands = LogoBrand::orderBy('id')->get();

        return view('home', compact(
            'featuredLayanan',
            'latestTestimoni',
            'stats',
            'whyUs',
            'howItWorks',
            'brands',
        ));
    }
}
