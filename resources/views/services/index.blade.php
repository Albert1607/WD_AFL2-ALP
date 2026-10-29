@extends('layouts.app')

@section('title', 'Katalog Layanan Servis Mobil Cepat - AutoDrive')

@section('content')

<!-- Header banner (Solid Black, sharp) -->
<div class="bg-black text-white py-16 border-b-4 border-red-600">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-left">
        <span class="text-xs font-black text-amber-400 uppercase tracking-widest block mb-2">
            KATALOG PERAWATAN MOBIL
        </span>
        <h1 class="text-3xl sm:text-5xl font-black uppercase tracking-tight">
            Layanan Quick Service & Suku Cadang Resmi
        </h1>
        <p class="text-slate-300 text-xs sm:text-sm max-w-2xl mt-3">
            Perawatan mobil cepat 15–45 menit dengan jaminan 100% suku cadang original bergaransi nasional di seluruh gerai AutoDrive.
        </p>
    </div>
</div>

<!-- Main Services Listing -->
<section class="py-16 bg-slate-100">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="space-y-8">
            @foreach($services as $slug => $svc)
                <div id="{{ $slug }}" class="bg-white border-2 border-slate-300 p-6 sm:p-8">
                    <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-start">
                        <!-- Service Info -->
                        <div class="lg:col-span-8 space-y-4">
                            <div class="flex flex-wrap items-center gap-2">
                                <span class="px-2.5 py-1 text-[11px] font-black uppercase tracking-wider {{ $svc['slug'] === 'gratis-11-poin-cek' ? 'bg-emerald-600 text-white' : 'bg-red-600 text-white' }}">
                                    {{ $svc['badge'] }}
                                </span>
                                <span class="text-xs font-bold text-slate-600 uppercase border border-slate-300 px-2 py-0.5">
                                    ⏱️ Waktu Pengerjaan: {{ $svc['duration'] }}
                                </span>
                            </div>

                            <h2 class="text-2xl font-black text-slate-900 uppercase">
                                <a href="{{ route('services.show', $svc['slug']) }}" class="hover:text-red-600 transition-colors">
                                    {{ $svc['title'] }}
                                </a>
                            </h2>

                            <p class="text-slate-600 text-xs sm:text-sm leading-relaxed">
                                {{ $svc['description'] }}
                            </p>

                            <!-- Key Benefits Checklist -->
                            <div class="pt-2">
                                <h4 class="text-xs font-black uppercase text-slate-900 tracking-wider mb-2">Keunggulan Layanan:</h4>
                                <div class="grid grid-cols-1 sm:grid-cols-2 gap-2">
                                    @foreach($svc['benefits'] as $benefit)
                                        <div class="text-xs text-slate-700 flex items-start gap-2">
                                            <span class="text-red-600 font-bold">•</span>
                                            <span>{{ $benefit }}</span>
                                        </div>
                                    @endforeach
                                </div>
                            </div>

                            <!-- Products preview if any -->
                            @if(!empty($svc['products']))
                                <div class="pt-4 border-t border-slate-200">
                                    <h4 class="text-xs font-black uppercase text-slate-900 tracking-wider mb-3">Varian Suku Cadang & Pelumas Resmi:</h4>
                                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-3">
                                        @foreach($svc['products'] as $prod)
                                            <div class="bg-slate-50 border border-slate-200 p-3 text-xs">
                                                <p class="font-black text-slate-900 uppercase">{{ $prod['brand'] }}</p>
                                                <p class="text-slate-500 text-[11px]">{{ $prod['type'] }} • Garansi: <strong class="text-red-600">{{ $prod['warranty'] }}</strong></p>
                                                <p class="text-[11px] text-slate-600 mt-1 italic">{{ $prod['best_for'] }}</p>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            @endif
                        </div>

                        <!-- Sidebar / Price & Action Box -->
                        <div class="lg:col-span-4 bg-slate-50 border-2 border-slate-300 p-6 flex flex-col justify-between h-full space-y-4">
                            <div>
                                <span class="text-[10px] font-black uppercase text-slate-400 block mb-1">Estimasi Tarif Mulai</span>
                                <p class="text-3xl font-black text-slate-900 mb-2">{{ $svc['price_start'] }}</p>
                                <p class="text-xs text-slate-500 leading-relaxed">
                                    *Tarif disesuaikan dengan volume oli dan kapasitas amper aki kendaraan Anda.
                                </p>
                            </div>

                            <div class="space-y-2 pt-4 border-t border-slate-200">
                                <a href="{{ route('services.show', $svc['slug']) }}" class="w-full block text-center bg-slate-900 hover:bg-black text-white font-bold text-xs uppercase tracking-wider py-3 px-4 transition-colors">
                                    Lihat Penjelasan Detail
                                </a>
                                <a href="tel:1500015" class="w-full block text-center bg-red-600 hover:bg-red-700 text-white font-bold text-xs uppercase tracking-wider py-3 px-4 transition-colors">
                                    Hubungi Hotline: 1500-015
                                </a>
                                <a href="https://wa.me/6281234567890?text=Halo%20AutoDrive%2C%20saya%20ingin%20tanya%20layanan%20{{ urlencode($svc['title']) }}" target="_blank" class="w-full block text-center bg-emerald-600 hover:bg-emerald-700 text-white font-bold text-xs uppercase tracking-wider py-2.5 px-4 transition-colors">
                                    Chat WhatsApp
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>

@endsection
