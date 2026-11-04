@extends('layouts.app')

@section('title', 'Layanan Servis Mobil – ' . config('bengkel.name'))
@section('meta_description', 'Lihat semua layanan servis mobil di ' . config('bengkel.name') . '. Perawatan rutin, mesin & injeksi, kaki-kaki & rem, kelistrikan & aki.')

@section('content')
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16 space-y-12">

    {{-- Page header --}}
    <div class="fade-up space-y-3">
        <x-section-title
            label="Layanan Kami"
            title='Semua <span class="text-brand-blue">Layanan</span> Servis Mobil'
            subtitle="Pilih kategori layanan yang Anda butuhkan. Semua dikerjakan oleh mekanik berpengalaman dengan sparepart original."
            align="left"
        />
    </div>

    {{-- Category filter tabs --}}
    <nav class="flex flex-wrap gap-2 fade-up" aria-label="Filter kategori layanan">
        <a href="{{ route('layanan.index') }}"
           class="px-4 py-2 text-sm font-medium transition-all duration-200
                  {{ !$activeKategori ? 'bg-brand-blue text-white shadow-lg shadow-blue-900/40' : 'glass-card text-slate-400 hover:text-white hover:bg-white/12' }}">
            Semua Layanan
        </a>
        @foreach($categories as $kategori)
            <a href="{{ route('layanan.index') }}?kategori={{ $kategori->slug }}"
               class="px-4 py-2 text-sm font-medium transition-all duration-200
                      {{ $activeKategori?->id === $kategori->id
                           ? 'bg-brand-blue text-white shadow-lg shadow-blue-900/40'
                           : 'glass-card text-slate-400 hover:text-white hover:bg-white/12' }}">
                {{ $kategori->nama_kategori }}
                <span class="ml-1 text-xs opacity-60">({{ $kategori->layanan->count() }})</span>
            </a>
        @endforeach
    </nav>

    {{-- Active category description --}}
    @if($activeKategori)
        <div class="glass-card p-5 flex items-start gap-4 fade-up">
            <div class="w-8 h-8 bg-brand-blue/15 flex items-center justify-center shrink-0 mt-0.5">
                <svg class="w-4 h-4 text-brand-blue" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                </svg>
            </div>
            <div>
                <h2 class="font-semibold text-white font-heading">{{ $activeKategori->nama_kategori }}</h2>
                <p class="text-sm text-slate-400 mt-1 leading-relaxed">{{ $activeKategori->deskripsi }}</p>
            </div>
        </div>
    @endif

    {{-- Services grid --}}
    @if($layanan->isEmpty())
        <div class="glass-card p-12 text-center">
            <svg class="w-12 h-12 text-slate-600 mx-auto mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9.172 16.172a4 4 0 015.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
            </svg>
            <p class="text-slate-400">Tidak ada layanan dalam kategori ini.</p>
        </div>
    @else
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach($layanan as $item)
                <div class="fade-up" style="transition-delay: {{ $loop->index * 60 }}ms">
                    <x-service-card :layanan="$item" />
                </div>
            @endforeach
        </div>
    @endif

    {{-- CTA --}}
    <div class="glass-card p-8 flex flex-col sm:flex-row items-center justify-between gap-6 fade-up">
        <div>
            <h3 class="font-bold text-white font-heading text-lg">Tidak yakin layanan apa yang dibutuhkan?</h3>
            <p class="text-slate-400 text-sm mt-1">Konsultasi gratis dengan mekanik kami via WhatsApp!</p>
        </div>
        <a href="https://wa.me/{{ config('bengkel.wa') }}?text={{ config('bengkel.wa_message') }}"
           target="_blank" rel="noopener noreferrer"
           class="shrink-0 inline-flex items-center gap-2 bg-brand-blue hover:bg-blue-700 text-white font-semibold px-6 py-3 transition-colors shadow-lg shadow-blue-900/40">
            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                <path d="M12.04 2c-5.46 0-9.91 4.45-9.91 9.91 0 1.75.46 3.45 1.32 4.95L2.05 22l5.25-1.38c1.45.79 3.08 1.21 4.74 1.21 5.46 0 9.91-4.45 9.91-9.91 0-2.65-1.03-5.14-2.9-7.01A9.816 9.816 0 0012.04 2z"/>
            </svg>
            Konsultasi Sekarang
        </a>
    </div>
</div>
@endsection
