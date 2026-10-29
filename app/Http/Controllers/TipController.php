<?php

namespace App\Http\Controllers;

use App\Services\MechanicDataService;
use Illuminate\Contracts\View\View;

class TipController extends Controller
{
    /**
     * Display automotive care tips.
     */
    public function index(): View
    {
        $tips = MechanicDataService::getTips();

        return view('tips.index', compact('tips'));
    }

    /**
     * Display an individual tips article.
     */
    public function show(string $slug): View
    {
        $allTips = MechanicDataService::getTips();
        $tip = collect($allTips)->firstWhere('slug', $slug);

        if (! $tip) {
            abort(404, 'Artikel tips tidak ditemukan.');
        }

        $otherTips = collect($allTips)->where('slug', '!=', $slug)->values()->all();

        return view('tips.show', compact('tip', 'otherTips'));
    }
}
