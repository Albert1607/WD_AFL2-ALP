@extends('layouts.app')

@section('title', $layanan->nama_layanan . ' – ' . config('bengkel.name'))
@section('meta_description', Str::limit($layanan->deskripsi, 160))
@section('og_title', $layanan->nama_layanan . ' – ' . config('bengkel.name'))
@section('og_description', Str::limit($layanan->deskripsi, 160))

@section('content')
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16">

    {{-- Breadcrumb --}}
    <nav class="flex items-center gap-2 text-sm text-slate-500 mb-10 fade-up" aria-label="Breadcrumb">
        <a href="{{ route('home') }}" class="hover:text-white transition-colors">Beranda</a>
        <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
        <a href="{{ route('layanan.index') }}" class="hover:text-white transition-colors">Layanan</a>
        @if($layanan->kategori)
            <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
            <a href="{{ route('layanan.index') }}?kategori={{ $layanan->kategori->slug }}" class="hover:text-white transition-colors">{{ $layanan->kategori->nama_kategori }}</a>
        @endif
        <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
        <span class="text-slate-300">{{ $layanan->nama_layanan }}</span>
    </nav>

    <div class="grid grid-cols-1 lg:grid-cols-3 gap-10">

        {{-- Main content --}}
        <div class="lg:col-span-2 space-y-8">

            {{-- Service image --}}
            <div class="relative h-72 sm:h-96 glass-card overflow-hidden fade-up">
                <img src="{{ $layanan->gambar_url }}"
                     alt="Foto layanan {{ $layanan->nama_layanan }}"
                     class="w-full h-full object-cover"
                     width="800" height="384"
                     loading="lazy">
                <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent"></div>
                @if($layanan->kategori)
                    <div class="absolute top-4 left-4 px-3 py-1.5 bg-brand-blue text-white text-xs font-semibold">
                        {{ $layanan->kategori->nama_kategori }}
                    </div>
                @endif
            </div>

            {{-- Title & price --}}
            <div class="fade-up space-y-3">
                <h1 class="text-3xl sm:text-4xl font-bold text-white font-heading">{{ $layanan->nama_layanan }}</h1>
                <div class="flex flex-wrap items-center gap-4 text-sm text-slate-400">
                    <span class="flex items-center gap-1.5">
                        <svg class="w-4 h-4 text-brand-blue" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <circle cx="12" cy="12" r="10" stroke-width="2"/>
                            <path d="M12 6v6l4 2" stroke-linecap="round" stroke-width="2"/>
                        </svg>
                        Estimasi: {{ $layanan->estimasi_durasi }}
                    </span>
                    <span class="flex items-center gap-1.5">
                        <svg class="w-4 h-4 text-brand-blue" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                        </svg>
                        Mulai dari <span class="text-brand-blue font-bold ml-1">{{ $layanan->harga_formatted }}</span>
                    </span>
                </div>
            </div>

            {{-- Description --}}
            <div class="glass-card p-6 fade-up">
                <h2 class="text-sm font-semibold text-white uppercase tracking-wider mb-4 font-heading">Deskripsi Layanan</h2>
                <p class="text-slate-300 leading-relaxed">{{ $layanan->deskripsi }}</p>
            </div>

            {{-- Testimonials --}}
            @if($layanan->testimoni->isNotEmpty())
                <div class="space-y-5 fade-up">
                    <h2 class="text-xl font-bold text-white font-heading">
                        Ulasan Pelanggan
                        <span class="text-sm font-normal text-slate-500 ml-2">({{ $layanan->testimoni->count() }} ulasan)</span>
                    </h2>
                    <div class="grid gap-4">
                        @foreach($layanan->testimoni as $t)
                            <x-testimonial-card :testimoni="$t" />
                        @endforeach
                    </div>
                </div>
            @endif
        </div>

        {{-- Sidebar --}}
        <aside class="space-y-6">

            {{-- Price card --}}
            <div class="glass-card p-6 space-y-5 fade-up sticky top-24">
                <div class="text-center space-y-1 pb-4 border-b border-white/8">
                    <div class="text-xs text-slate-500 uppercase tracking-wider">Harga Mulai</div>
                    <div class="text-3xl font-extrabold text-brand-blue font-heading">{{ $layanan->harga_formatted }}</div>
                    <div class="text-xs text-slate-500">*Estimasi biaya sebelum inspeksi</div>
                </div>

                <div class="space-y-3 text-sm">
                    <div class="flex items-center gap-3 text-slate-300">
                        <svg class="w-4 h-4 text-green-400 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/>
                        </svg>
                        Sparepart original bergaransi
                    </div>
                    <div class="flex items-center gap-3 text-slate-300">
                        <svg class="w-4 h-4 text-green-400 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/>
                        </svg>
                        Estimasi biaya sebelum pengerjaan
                    </div>
                    <div class="flex items-center gap-3 text-slate-300">
                        <svg class="w-4 h-4 text-green-400 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/>
                        </svg>
                        Garansi servis resmi
                    </div>
                    <div class="flex items-center gap-3 text-slate-400">
                        <svg class="w-4 h-4 text-brand-blue shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <circle cx="12" cy="12" r="10" stroke-width="2"/>
                            <path d="M12 6v6l4 2" stroke-linecap="round" stroke-width="2"/>
                        </svg>
                        Waktu: {{ $layanan->estimasi_durasi }}
                    </div>
                </div>

                <a href="https://wa.me/{{ config('bengkel.wa') }}?text=Halo%20Kardi%20Putra%20Motor%2C%20saya%20ingin%20servis%20{{ urlencode($layanan->nama_layanan) }}"
                   target="_blank" rel="noopener noreferrer"
                   class="flex items-center justify-center gap-2 w-full bg-brand-blue hover:bg-blue-700 text-white font-semibold py-3.5 transition-colors shadow-lg shadow-blue-900/40">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                        <path d="M12.04 2c-5.46 0-9.91 4.45-9.91 9.91 0 1.75.46 3.45 1.32 4.95L2.05 22l5.25-1.38c1.45.79 3.08 1.21 4.74 1.21 5.46 0 9.91-4.45 9.91-9.91 0-2.65-1.03-5.14-2.9-7.01A9.816 9.816 0 0012.04 2z"/>
                    </svg>
                    Pesan via WhatsApp
                </a>
                <a href="tel:{{ config('bengkel.phone') }}"
                   class="flex items-center justify-center gap-2 w-full glass-card text-white font-semibold py-3 hover:bg-white/12 transition-colors text-sm">
                    <svg class="w-4 h-4 text-brand-blue" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                    </svg>
                    Telepon Langsung
                </a>
            </div>
        </aside>
    </div>

    {{-- Related services --}}
    @if($relatedLayanan->isNotEmpty())
        <div class="mt-16 space-y-8 fade-up">
            <h2 class="text-2xl font-bold text-white font-heading">Layanan Serupa</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                @foreach($relatedLayanan as $related)
                    <x-service-card :layanan="$related" />
                @endforeach
            </div>
        </div>
    @endif
</div>
@endsection
