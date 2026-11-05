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

        $averageRating = (float) (Testimoni::avg('rating') ?? 0);
        $totalCount = Testimoni::count();
        $ratingCounts = Testimoni::query()
            ->selectRaw('rating, count(*) as count')
            ->groupBy('rating')
            ->pluck('count', 'rating')
            ->all();

        return view('testimoni.index', compact('testimoni', 'averageRating', 'totalCount', 'ratingCounts'));
    }
}
