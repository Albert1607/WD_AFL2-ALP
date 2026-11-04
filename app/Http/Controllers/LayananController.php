<?php

namespace App\Http\Controllers;

use App\Models\KategoriLayanan;
use App\Models\Layanan;
use Illuminate\Contracts\View\View;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Request;

class LayananController extends Controller
{
    /**
     * Display all services, optionally filtered by category slug.
     */
    public function index(Request $request): View
    {
        $kategoriSlug = $request->query('kategori');

        /** @var Collection<int, KategoriLayanan> $categories */
        $categories = KategoriLayanan::with(['layanan'])->get();

        $activeKategori = $kategoriSlug
            ? $categories->firstWhere('slug', $kategoriSlug)
            : null;

        $layananQuery = Layanan::with('kategori');

        if ($activeKategori) {
            $layananQuery->where('kategori_id', $activeKategori->id);
        }

        $layanan = $layananQuery->get();

        return view('layanan.index', compact('categories', 'layanan', 'activeKategori'));
    }

    /**
     * Display a single service with its testimonials and related services.
     */
    public function show(string $slug): View
    {
        /** @var Layanan $layanan */
        $layanan = Layanan::with(['kategori', 'testimoni'])
            ->where('slug', $slug)
            ->firstOrFail();

        $relatedLayanan = Layanan::with('kategori')
            ->where('kategori_id', $layanan->kategori_id)
            ->where('id', '!=', $layanan->id)
            ->limit(3)
            ->get();

        return view('layanan.show', compact('layanan', 'relatedLayanan'));
    }
}
