@extends('layouts.app')

@section('title', 'Katalog Promo & Diskon Spesial Servis Mobil - AutoDrive')

@section('content')

<!-- Header banner (Solid Black, sharp) -->
<div class="bg-black text-white py-16 border-b-4 border-red-600">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-left">
        <span class="text-xs font-black text-amber-400 uppercase tracking-widest block mb-2">
            PENAWARAN TERBAIK
        </span>
        <h1 class="text-3xl sm:text-5xl font-black uppercase tracking-tight">
            Katalog Promo & Paket Servis Hemat
        </h1>
        <p class="text-slate-300 text-xs sm:text-sm max-w-2xl mt-3">
            Program penawaran resmi dari AutoDrive untuk penggantian aki mobil, oli sintetik, spooring balancing, dan tune up. Hemat biaya tanpa mengurangi kualitas garansi resmi.
        </p>
    </div>
</div>

<!-- Promo List Section -->
<section class="py-16 bg-slate-100">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            @foreach($promotions as $promo)
                <div class="bg-white border-2 border-slate-300 flex flex-col justify-between">
                    <div>
                        <!-- Promo Header Solid Block -->
                        <div class="{{ $promo['solid_color'] }} text-white p-6 sm:p-8">
                            <div class="flex items-center justify-between mb-3 pb-2 border-b border-white/20">
                                <span class="bg-black text-white px-2 py-0.5 text-[10px] font-black uppercase tracking-wider">
                                    {{ $promo['category'] }}
                                </span>
                                <span class="bg-white text-black px-2 py-0.5 text-[10px] font-black uppercase tracking-wider">
                                    {{ $promo['badge'] }}
                                </span>
                            </div>
                            <h2 class="text-2xl font-black uppercase mb-2">{{ $promo['title'] }}</h2>
                            <p class="text-white/90 text-xs sm:text-sm leading-relaxed">{{ $promo['description'] }}</p>
                        </div>

                        <!-- Terms & Conditions -->
                        <div class="p-6 sm:p-8 space-y-4">
                            <h4 class="text-xs font-black uppercase tracking-wider text-slate-900">Syarat & Ketentuan Promo:</h4>
                            <ul class="space-y-2 text-xs text-slate-700">
                                @foreach($promo['terms'] as $term)
                                    <li class="flex items-start gap-2">
                                        <span class="text-red-600 font-bold">•</span>
                                        <span>{{ $term }}</span>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>

                    <!-- Footer Action (Pure Read-Only Contact Link) -->
                    <div class="p-6 sm:p-8 pt-0 bg-white flex flex-col sm:flex-row items-center justify-between gap-4 border-t border-slate-200">
                        <div>
                            <span class="text-[10px] uppercase font-bold text-slate-400 block">Periode Berlaku:</span>
                            <span class="text-xs font-black text-slate-900">{{ $promo['valid_until'] }}</span>
                        </div>
                        <div class="flex items-center gap-2 w-full sm:w-auto">
                            <a href="https://wa.me/6281234567890?text=Halo%20AutoDrive%2C%20saya%20ingin%20tanya%20klaim%20{{ urlencode($promo['title']) }}" target="_blank" class="w-full sm:w-auto text-center bg-red-600 hover:bg-red-700 text-white font-black text-xs uppercase tracking-wider px-5 py-2.5 transition-colors">
                                Tanya Promo via WhatsApp
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>

@endsection
