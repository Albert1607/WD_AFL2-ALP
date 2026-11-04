@extends('layouts.app')

@section('title', 'Halaman Tidak Ditemukan – ' . config('bengkel.name'))

@section('content')
<div class="min-h-[70vh] flex items-center justify-center px-4">
    <div class="text-center space-y-6 max-w-md">
        <div class="text-8xl font-extrabold text-brand-blue font-heading opacity-30">404</div>
        <h1 class="text-2xl font-bold text-white font-heading">Halaman Tidak Ditemukan</h1>
        <p class="text-slate-400 leading-relaxed">
            Maaf, halaman yang Anda cari tidak ada atau sudah dipindahkan.
            Mungkin Anda ingin kembali ke halaman utama?
        </p>
        <div class="flex flex-col sm:flex-row items-center justify-center gap-3 pt-2">
            <a href="{{ route('home') }}"
               class="inline-flex items-center gap-2 bg-brand-blue hover:bg-blue-700 text-white font-semibold px-6 py-3 transition-colors">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"/>
                </svg>
                Kembali ke Beranda
            </a>
            <a href="{{ route('layanan.index') }}"
               class="inline-flex items-center gap-2 glass-card text-white font-semibold px-6 py-3 hover:bg-white/12 transition-colors">
                Lihat Layanan
            </a>
        </div>
    </div>
</div>
@endsection
