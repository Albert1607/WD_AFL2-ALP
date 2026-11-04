<?php

namespace App\Http\Controllers;

use App\Models\Testimoni;
use Illuminate\Contracts\View\View;

class TestimoniController extends Controller
{
    /**
     * Display a paginated list of all testimonials.
     */
    public function index(): View
    {
        $testimoni = Testimoni::with('layanan')
            ->latest()
            ->paginate(9);

        $averageRating = Testimoni::avg('rating');
        $totalCount = Testimoni::count();

        return view('testimoni.index', compact('testimoni', 'averageRating', 'totalCount'));
    }
}
