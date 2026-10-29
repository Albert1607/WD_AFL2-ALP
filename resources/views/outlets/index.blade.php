@extends('layouts.app')

@section('title', 'Direktori Lokasi Cabang & Gerai Bengkel - AutoDrive')

@section('content')

<!-- Header banner (Solid Black, sharp) -->
<div class="bg-black text-white py-16 border-b-4 border-red-600">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-left">
        <span class="text-xs font-black text-amber-400 uppercase tracking-widest block mb-2">
            JARINGAN OUTLET NASIONAL
        </span>
        <h1 class="text-3xl sm:text-5xl font-black uppercase tracking-tight">
            Direktori Lokasi Bengkel AutoDrive
        </h1>
        <p class="text-slate-300 text-xs sm:text-sm max-w-2xl mt-3">
            Hadir di lebih dari 120 lokasi strategis di kota-kota besar Indonesia. Dilengkapi fasilitas pengerjaan modern, ruang tunggu ber-AC, dan suku cadang asli bergaransi nasional.
        </p>
    </div>
</div>

<!-- City Filter Navigation (Read-Only Clickable Tabs, No Form Inputs) -->
<section class="bg-white border-b-2 border-slate-200 py-4 sticky top-20 z-30 shadow-none">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex items-center gap-2 overflow-x-auto text-xs pb-1">
            <span class="text-slate-500 font-black uppercase text-[11px] whitespace-nowrap mr-2">Pilih Wilayah:</span>
            <a href="{{ route('outlets.index') }}" class="px-4 py-2 font-bold uppercase tracking-wider whitespace-nowrap transition-colors {{ $selectedCity === 'all' ? 'bg-red-600 text-white' : 'bg-slate-100 text-slate-700 hover:bg-slate-200' }}">
                Semua Kota ({{ $allOutletsCount }})
            </a>
            @foreach($cities as $c)
                <a href="{{ route('outlets.index', ['city' => $c]) }}" class="px-4 py-2 font-bold uppercase tracking-wider whitespace-nowrap transition-colors {{ strtolower($selectedCity) === strtolower($c) ? 'bg-red-600 text-white' : 'bg-slate-100 text-slate-700 hover:bg-slate-200' }}">
                    {{ $c }}
                </a>
            @endforeach
        </div>
    </div>
</section>

<!-- Outlets Grid (Sharp, Solid) -->
<section class="py-16 bg-slate-100">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="mb-6 flex items-center justify-between">
            <p class="text-xs font-bold uppercase text-slate-500">
                Menampilkan <strong>{{ count($outlets) }}</strong> cabang outlet AutoDrive:
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach($outlets as $outlet)
                <div class="bg-white border-2 border-slate-300 p-6 flex flex-col justify-between hover:border-red-600 transition-colors">
                    <div>
                        <!-- Tags -->
                        <div class="flex flex-wrap items-center gap-1.5 mb-3">
                            <span class="bg-black text-white text-[10px] font-black px-2 py-0.5 uppercase">
                                {{ $outlet['city'] }}
                            </span>
                            @if($outlet['is_24_hours'])
                                <span class="bg-red-600 text-white text-[10px] font-black px-2 py-0.5 uppercase">
                                    BUKA 24 JAM
                                </span>
                            @endif
                            @if($outlet['is_super_shop'])
                                <span class="bg-amber-500 text-black text-[10px] font-black px-2 py-0.5 uppercase">
                                    SUPER SHOP
                                </span>
                            @endif
                        </div>

                        <h3 class="text-base font-black text-slate-900 uppercase mb-2 leading-snug">{{ $outlet['name'] }}</h3>
                        <p class="text-xs text-slate-600 mb-4 leading-relaxed">{{ $outlet['address'] }}</p>

                        <!-- Features badges -->
                        <div class="space-y-1.5 mb-6 border-t border-slate-100 pt-3">
                            @foreach($outlet['features'] as $f)
                                <div class="text-[11px] text-slate-500 flex items-center gap-1.5 font-medium">
                                    <span class="text-red-600 font-bold">•</span>
                                    <span>{{ $f }}</span>
                                </div>
                            @endforeach
                        </div>
                    </div>

                    <!-- Footer Actions -->
                    <div class="pt-4 border-t border-slate-200 space-y-3">
                        <div class="flex items-center justify-between text-xs">
                            <span class="text-slate-500 font-bold uppercase text-[10px]">Telepon:</span>
                            <a href="tel:{{ preg_replace('/[^0-9]/', '', $outlet['phone']) }}" class="font-black text-slate-900 hover:text-red-600">
                                {{ $outlet['phone'] }}
                            </a>
                        </div>

                        <div class="grid grid-cols-2 gap-2">
                            <a href="{{ $outlet['google_maps'] }}" target="_blank" class="text-center bg-slate-900 hover:bg-black text-white font-bold text-xs uppercase tracking-wider py-2.5 transition-colors">
                                Petunjuk Arah
                            </a>
                            <a href="https://wa.me/{{ $outlet['whatsapp'] }}?text=Halo%20AutoDrive%20{{ urlencode($outlet['name']) }}" target="_blank" class="text-center bg-emerald-600 hover:bg-emerald-700 text-white font-bold text-xs uppercase tracking-wider py-2.5 transition-colors">
                                WhatsApp
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>

@endsection
