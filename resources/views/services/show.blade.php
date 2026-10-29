@extends('layouts.app')

@section('title', $service['title'] . ' - AutoDrive Quick Service')

@section('content')

<!-- Header banner (Solid Black, sharp) -->
<div class="bg-black text-white py-14 border-b-4 border-red-600">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <nav class="flex items-center gap-2 text-xs text-slate-400 mb-4 uppercase font-bold">
            <a href="{{ route('home') }}" class="hover:text-red-500">Beranda</a>
            <span>/</span>
            <a href="{{ route('services.index') }}" class="hover:text-red-500">Layanan</a>
            <span>/</span>
            <span class="text-white">{{ $service['short_title'] }}</span>
        </nav>

        <div class="flex flex-wrap items-center gap-2 mb-3">
            <span class="px-2.5 py-1 text-[11px] font-black uppercase tracking-wider {{ $service['slug'] === 'gratis-11-poin-cek' ? 'bg-emerald-600 text-white' : 'bg-red-600 text-white' }}">
                {{ $service['badge'] }}
            </span>
            <span class="text-xs text-slate-300 font-bold uppercase border border-slate-700 px-2 py-0.5">
                Estimasi Waktu: {{ $service['duration'] }}
            </span>
        </div>

        <h1 class="text-3xl sm:text-5xl font-black uppercase tracking-tight text-white">
            {{ $service['title'] }}
        </h1>
        <p class="text-slate-300 text-xs sm:text-sm max-w-2xl mt-3 leading-relaxed">
            {{ $service['summary'] }}
        </p>
    </div>
</div>

<!-- Main Detail Content -->
<section class="py-16 bg-slate-100">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-8">
            <!-- Left: Service details & FAQs -->
            <div class="lg:col-span-8 space-y-8">
                <!-- Description -->
                <div class="bg-white border-2 border-slate-300 p-6 sm:p-8 space-y-4">
                    <h2 class="text-xl font-black text-slate-900 uppercase">Deskripsi & Standar Pengerjaan</h2>
                    <p class="text-slate-600 text-xs sm:text-sm leading-relaxed">
                        {{ $service['description'] }}
                    </p>

                    <!-- Benefits list -->
                    <div class="pt-6 border-t border-slate-200">
                        <h3 class="text-xs font-black uppercase tracking-wider text-slate-900 mb-4">
                            Keuntungan Servis di AutoDrive:
                        </h3>
                        <div class="space-y-2.5">
                            @foreach($service['benefits'] as $benefit)
                                <div class="flex items-start gap-2.5 text-xs sm:text-sm text-slate-700">
                                    <span class="text-red-600 font-black text-base leading-none">•</span>
                                    <span>{{ $benefit }}</span>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>

                <!-- Products table if present -->
                @if(!empty($service['products']))
                    <div class="bg-white border-2 border-slate-300 p-6 sm:p-8">
                        <h2 class="text-xl font-black text-slate-900 uppercase mb-4">Varian Suku Cadang & Pelumas Resmi</h2>
                        <div class="overflow-x-auto border border-slate-200">
                            <table class="w-full text-left text-xs">
                                <thead>
                                    <tr class="bg-black text-white uppercase text-[11px]">
                                        <th class="py-3 px-4 border-r border-slate-800">Merk & Tipe</th>
                                        <th class="py-3 px-4 border-r border-slate-800">Karakteristik</th>
                                        <th class="py-3 px-4 border-r border-slate-800">Masa Garansi</th>
                                        <th class="py-3 px-4">Peruntukan Kendaraan</th>
                                    </tr>
                                </thead>
                                <tbody class="divide-y divide-slate-200 bg-white">
                                    @foreach($service['products'] as $prod)
                                        <tr class="hover:bg-slate-50">
                                            <td class="py-3 px-4 font-bold text-slate-900 border-r border-slate-200">{{ $prod['brand'] }}</td>
                                            <td class="py-3 px-4 text-slate-600 border-r border-slate-200">{{ $prod['type'] }}</td>
                                            <td class="py-3 px-4 font-black text-red-600 border-r border-slate-200">{{ $prod['warranty'] }}</td>
                                            <td class="py-3 px-4 text-slate-500">{{ $prod['best_for'] }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                @endif

                <!-- FAQs Accordion -->
                @if(!empty($service['faqs']))
                    <div class="bg-white border-2 border-slate-300 p-6 sm:p-8 space-y-4">
                        <h2 class="text-xl font-black text-slate-900 uppercase mb-4">Pertanyaan Seputar Layanan Ini (FAQ)</h2>
                        <div class="space-y-3">
                            @foreach($service['faqs'] as $faq)
                                <div class="bg-slate-50 border border-slate-200 p-4">
                                    <h4 class="font-bold text-slate-900 text-xs sm:text-sm mb-1">
                                        <span class="text-red-600 font-black">Q:</span>
                                        {{ $faq['q'] }}
                                    </h4>
                                    <p class="text-xs text-slate-600 leading-relaxed pl-4">
                                        {{ $faq['a'] }}
                                    </p>
                                </div>
                            @endforeach
                        </div>
                    </div>
                @endif
            </div>

            <!-- Right: Action & Other Services -->
            <div class="lg:col-span-4 space-y-6">
                <!-- Info Box -->
                <div class="bg-white border-2 border-slate-300 p-6 space-y-4">
                    <div>
                        <span class="text-[10px] font-black uppercase text-slate-400 block mb-1">Tarif Mulai</span>
                        <p class="text-3xl font-black text-slate-900 mb-1">{{ $service['price_start'] }}</p>
                        <p class="text-xs text-slate-500">
                            Pengerjaan kilat {{ $service['duration'] }} langsung ditangani mekanik profesional.
                        </p>
                    </div>

                    <div class="space-y-2 pt-4 border-t border-slate-200">
                        <a href="tel:1500015" class="w-full block text-center bg-red-600 hover:bg-red-700 text-white font-black text-xs uppercase tracking-wider py-3 px-4 transition-colors">
                            Hotline 24 Jam: 1500-015
                        </a>
                        <a href="https://wa.me/6281234567890?text=Halo%20AutoDrive%2C%20saya%20ingin%20tanya%20layanan%20{{ urlencode($service['title']) }}" target="_blank" class="w-full block text-center bg-emerald-600 hover:bg-emerald-700 text-white font-bold text-xs uppercase tracking-wider py-3 px-4 transition-colors">
                            Chat WhatsApp Cabang
                        </a>
                        <a href="{{ route('outlets.index') }}" class="w-full block text-center bg-black hover:bg-slate-800 text-white font-bold text-xs uppercase tracking-wider py-2.5 px-4 transition-colors">
                            Lihat Lokasi Bengkel
                        </a>
                    </div>

                    <!-- Other quick services -->
                    <div class="pt-6 mt-6 border-t border-slate-200">
                        <h4 class="text-xs font-black uppercase tracking-wider text-slate-900 mb-3">Layanan Lainnya</h4>
                        <div class="space-y-2">
                            @foreach($allServices as $otherSlug => $otherSvc)
                                @if($otherSlug !== $service['slug'])
                                    <a href="{{ route('services.show', $otherSlug) }}" class="flex items-center justify-between text-xs text-slate-700 hover:text-red-600 py-1.5 border-b border-slate-100 transition-colors">
                                        <span class="font-bold">{{ $otherSvc['short_title'] }}</span>
                                        <span class="text-slate-400">&rarr;</span>
                                    </a>
                                @endif
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
