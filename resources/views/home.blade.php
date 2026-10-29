@extends('layouts.app')

@section('title', 'AutoDrive Quick Service - Profil Bengkel Mobil Cepat & Suku Cadang Resmi')

@section('content')

<!-- Hero Section (Sharp, Solid Black & Red, No Gradients, No Rounded) -->
<section class="bg-black text-white border-b-4 border-red-600">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16 sm:py-24">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">
            <!-- Left Hero Content -->
            <div class="lg:col-span-7 space-y-6 text-left">
                <!-- Trust badge -->
                <div class="inline-flex items-center gap-2 px-3 py-1.5 bg-slate-900 border-l-4 border-amber-500 text-amber-400 text-xs font-black tracking-widest uppercase">
                    JARINGAN SERVIS CEPAT MOBIL TERPERCAYA DI INDONESIA
                </div>

                <h1 class="text-3xl sm:text-5xl lg:text-6xl font-black tracking-tight leading-tight uppercase">
                    Solusi Servis Cepat & <br>
                    <span class="text-red-600">Suku Cadang Resmi</span> <br>
                    Bergaransi Nasional.
                </h1>

                <p class="text-sm sm:text-base text-slate-300 max-w-2xl leading-relaxed">
                    AutoDrive Quick Service menghadirkan konsep bengkel ritel modern untuk perawatan mobil Anda tanpa perlu antre seharian. Spesialis ganti aki, oli mesin vacuum, shock absorber, dan ban dengan waktu pengerjaan <strong>15–45 menit</strong> dan jaminan 100% suku cadang original.
                </p>

                <!-- Value Props Pillars (Solid, Sharp Boxes) -->
                <div class="grid grid-cols-2 sm:grid-cols-4 gap-3 pt-2">
                    <div class="bg-slate-900 border border-slate-800 p-3.5 border-t-2 border-t-amber-500">
                        <div class="text-amber-400 text-xs font-black uppercase mb-1">
                            15–45 Menit
                        </div>
                        <p class="text-[11px] text-slate-400 leading-snug">Quick service tanpa antri lama</p>
                    </div>

                    <div class="bg-slate-900 border border-slate-800 p-3.5 border-t-2 border-t-red-600">
                        <div class="text-red-500 text-xs font-black uppercase mb-1">
                            Garansi 24 Bulan
                        </div>
                        <p class="text-[11px] text-slate-400 leading-snug">Klaim resmi di seluruh cabang</p>
                    </div>

                    <div class="bg-slate-900 border border-slate-800 p-3.5 border-t-2 border-t-emerald-500">
                        <div class="text-emerald-400 text-xs font-black uppercase mb-1">
                            Home Service
                        </div>
                        <p class="text-[11px] text-slate-400 leading-snug">Mekanik datang ke lokasi Anda</p>
                    </div>

                    <div class="bg-slate-900 border border-slate-800 p-3.5 border-t-2 border-t-blue-500">
                        <div class="text-blue-400 text-xs font-black uppercase mb-1">
                            Gratis 11 Poin
                        </div>
                        <p class="text-[11px] text-slate-400 leading-snug">Cek vital mobil tanpa biaya</p>
                    </div>
                </div>

                <!-- Read-Only Action CTAs -->
                <div class="flex flex-col sm:flex-row items-center gap-3 pt-4">
                    <a href="{{ route('outlets.index') }}" class="w-full sm:w-auto text-center bg-red-600 hover:bg-red-700 text-white font-black text-xs uppercase tracking-wider px-6 py-3.5 transition-colors">
                        Lihat Lokasi Bengkel
                    </a>
                    <a href="tel:1500015" class="w-full sm:w-auto text-center bg-amber-500 hover:bg-amber-600 text-black font-black text-xs uppercase tracking-wider px-6 py-3.5 transition-colors">
                        Hotline Darurat: 1500-015
                    </a>
                    <a href="https://wa.me/6281234567890?text=Halo%20AutoDrive%2C%20saya%20ingin%20konsultasi%20servis" target="_blank" class="w-full sm:w-auto text-center bg-slate-900 hover:bg-slate-800 border border-slate-700 text-white font-bold text-xs uppercase tracking-wider px-5 py-3.5 transition-colors">
                        Chat WhatsApp
                    </a>
                </div>
            </div>

            <!-- Right Hero Card (Solid Slate box, sharp edges) -->
            <div class="lg:col-span-5">
                <div class="bg-slate-900 border-2 border-slate-800 p-6 sm:p-8 space-y-6">
                    <div class="flex items-center justify-between pb-4 border-b border-slate-800">
                        <div>
                            <span class="text-[10px] font-black text-amber-400 uppercase tracking-widest">LAYANAN DARURAT 24 JAM</span>
                            <h2 class="text-lg font-black text-white mt-1 uppercase">Mobil Mogok? Kami Siaga</h2>
                        </div>
                        <div class="w-10 h-10 bg-red-600 text-white flex items-center justify-center font-bold">
                            SOS
                        </div>
                    </div>

                    <div class="space-y-4 text-xs">
                        <div class="p-3 bg-black border-l-4 border-amber-500">
                            <strong class="text-white block font-bold mb-1">1. Hubungi Hotline Bebas Pulsa</strong>
                            <p class="text-slate-400">Tekan 1500-015 atau hubungi WhatsApp Customer Care dengan memberitahukan tipe kendaraan Anda.</p>
                        </div>

                        <div class="p-3 bg-black border-l-4 border-red-600">
                            <strong class="text-white block font-bold mb-1">2. Mekanik Meluncur Dalam 30–45 Menit</strong>
                            <p class="text-slate-400">Armada teknisi membawa aki baru tersegel garansi dan alat digital Battery Tester berstandar Astra.</p>
                        </div>

                        <div class="p-3 bg-black border-l-4 border-emerald-500">
                            <strong class="text-white block font-bold mb-1">3. Gratis Biaya Antar & Pasang</strong>
                            <p class="text-slate-400">Hanya bayar produk yang Anda beli. Aki lama dihargai tinggi hingga Rp 150.000 langsung potong harga.</p>
                        </div>
                    </div>

                    <div class="pt-4 border-t border-slate-800 flex items-center justify-between text-xs">
                        <span class="text-slate-400">Status Armada: <strong class="text-emerald-400">Siaga Aktif</strong></span>
                        <a href="tel:1500015" class="text-amber-400 hover:text-amber-300 font-bold uppercase">
                            Panggil Sekarang &rarr;
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Quick Stats Strip (Solid borders, sharp) -->
        <div class="grid grid-cols-2 md:grid-cols-4 gap-4 pt-12 mt-12 border-t border-slate-800 text-center">
            <div class="p-4 bg-slate-900 border border-slate-800">
                <p class="text-3xl font-black text-amber-400">{{ $stats['outlets_count'] }}</p>
                <p class="text-xs font-bold text-slate-400 uppercase mt-1">Outlet di Seluruh Indonesia</p>
            </div>
            <div class="p-4 bg-slate-900 border border-slate-800">
                <p class="text-3xl font-black text-white">{{ $stats['cars_served'] }}</p>
                <p class="text-xs font-bold text-slate-400 uppercase mt-1">Kendaraan Ditangani</p>
            </div>
            <div class="p-4 bg-slate-900 border border-slate-800">
                <p class="text-3xl font-black text-red-500">{{ $stats['warranty_days'] }}</p>
                <p class="text-xs font-bold text-slate-400 uppercase mt-1">Garansi Resmi Nasional</p>
            </div>
            <div class="p-4 bg-slate-900 border border-slate-800">
                <p class="text-3xl font-black text-emerald-400">{{ $stats['customer_rating'] }}</p>
                <p class="text-xs font-bold text-slate-400 uppercase mt-1">Rating Kepuasan Konsumen</p>
            </div>
        </div>
    </div>
</section>

<!-- Pure Read-Only Specification Guide Table (No Inputs!) -->
<section class="py-16 bg-white border-b-2 border-slate-200">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="mb-8">
            <span class="text-xs font-black text-red-600 uppercase tracking-widest block mb-1">
                PANDUAN SPESIFIKASI MOBIL RESMI
            </span>
            <h2 class="text-2xl sm:text-3xl font-black text-slate-950 uppercase">
                Tabel Rekomendasi Tipe Aki & Oli Mesin Mobil Populer
            </h2>
            <p class="text-slate-600 text-xs sm:text-sm mt-1">
                Referensi standar pabrikan untuk penggantian aki dan oli mesin pada mobil keluarga Indonesia.
            </p>
        </div>

        <div class="overflow-x-auto border-2 border-slate-900">
            <table class="w-full text-left text-xs border-collapse">
                <thead>
                    <tr class="bg-black text-white uppercase tracking-wider text-[11px]">
                        <th class="py-3.5 px-4 border-r border-slate-800">Merk & Tipe Kendaraan</th>
                        <th class="py-3.5 px-4 border-r border-slate-800">Tipe Mesin</th>
                        <th class="py-3.5 px-4 border-r border-slate-800">Rekomendasi Aki</th>
                        <th class="py-3.5 px-4 border-r border-slate-800">Oli Mesin & Kapasitas</th>
                        <th class="py-3.5 px-4">Pilihan Pelumas</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-slate-200 bg-white">
                    @foreach($cars as $idx => $car)
                        <tr class="{{ $idx % 2 === 0 ? 'bg-white' : 'bg-slate-50' }} hover:bg-red-50/50">
                            <td class="py-3 px-4 font-black text-slate-900 border-r border-slate-200">
                                <span class="text-[10px] text-red-600 uppercase block font-bold">{{ $car['brand'] }}</span>
                                {{ $car['model'] }}
                            </td>
                            <td class="py-3 px-4 text-slate-600 border-r border-slate-200 font-medium">
                                {{ $car['engine'] }}
                            </td>
                            <td class="py-3 px-4 border-r border-slate-200">
                                <span class="font-bold text-slate-900 block">{{ $car['battery_type'] }}</span>
                                <span class="text-[11px] text-slate-500">{{ $car['battery_rec'] }}</span>
                            </td>
                            <td class="py-3 px-4 border-r border-slate-200">
                                <span class="font-bold text-slate-900 block">{{ $car['oil_viscosity'] }}</span>
                                <span class="text-[11px] text-slate-500">{{ $car['oil_capacity'] }}</span>
                            </td>
                            <td class="py-3 px-4 text-slate-700 font-semibold">
                                {{ $car['oil_rec'] }}
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="mt-4 p-4 bg-slate-100 border border-slate-300 text-xs text-slate-700 flex flex-col sm:flex-row items-center justify-between gap-3">
            <span>Mobil Anda tidak ada di dalam daftar di atas? Konsultasikan spesifikasi aki dan oli mobil Anda bersama customer care kami.</span>
            <a href="tel:1500015" class="bg-black hover:bg-slate-800 text-white font-bold text-xs uppercase px-4 py-2 transition-colors flex-shrink-0">
                Tanya Spesifikasi: 1500-015
            </a>
        </div>
    </div>
</section>

<!-- Layanan Unggulan (Core Quick Services) - Sharp, Solid Cards -->
<section class="py-16 sm:py-24 bg-slate-100 border-b-2 border-slate-200">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="mb-12 text-left">
            <span class="text-xs font-black text-red-600 uppercase tracking-widest block mb-1">
                KATALOG QUICK SERVICE
            </span>
            <h2 class="text-3xl sm:text-4xl font-black text-slate-950 uppercase tracking-tight">
                Layanan Perawatan Cepat & Bergaransi
            </h2>
            <p class="text-slate-600 text-sm mt-1">
                Fokus pada fast-moving parts mobil yang dapat diselesaikan cepat tanpa mengorbankan standar mutu.
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach($services as $svc)
                <div class="bg-white border-2 border-slate-300 p-6 sm:p-7 flex flex-col justify-between hover:border-red-600 transition-colors">
                    <div>
                        <!-- Header badge & duration -->
                        <div class="flex items-center justify-between mb-4 pb-3 border-b border-slate-200">
                            <span class="px-2.5 py-1 text-[11px] font-black uppercase tracking-wider {{ $svc['slug'] === 'gratis-11-poin-cek' ? 'bg-emerald-600 text-white' : 'bg-red-600 text-white' }}">
                                {{ $svc['badge'] }}
                            </span>
                            <span class="text-xs font-bold text-slate-600 uppercase">
                                ⏱️ {{ $svc['duration'] }}
                            </span>
                        </div>

                        <!-- Service Title -->
                        <h3 class="text-xl font-black text-slate-900 uppercase mb-2">
                            <a href="{{ route('services.show', $svc['slug']) }}" class="hover:text-red-600 transition-colors">
                                {{ $svc['title'] }}
                            </a>
                        </h3>

                        <p class="text-xs text-slate-600 leading-relaxed mb-4">
                            {{ $svc['summary'] }}
                        </p>

                        <!-- Key benefits preview -->
                        <ul class="space-y-1.5 mb-6">
                            @foreach(array_slice($svc['benefits'], 0, 3) as $benefit)
                                <li class="text-xs text-slate-700 flex items-start gap-2">
                                    <span class="text-red-600 font-black">•</span>
                                    <span>{{ $benefit }}</span>
                                </li>
                            @endforeach
                        </ul>
                    </div>

                    <div class="pt-4 border-t border-slate-200 flex items-center justify-between">
                        <div>
                            <span class="text-[10px] uppercase font-bold text-slate-400 block">Tarif Mulai</span>
                            <span class="text-base font-black text-slate-900">{{ $svc['price_start'] }}</span>
                        </div>
                        <a href="{{ route('services.show', $svc['slug']) }}" class="text-xs font-bold uppercase tracking-wider text-white bg-slate-900 hover:bg-red-600 px-4 py-2 transition-colors">
                            Lihat Detail &rarr;
                        </a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>

<!-- Banner Layanan Home Service (Solid Red, Sharp) -->
<section class="py-12 bg-red-600 text-white border-b-2 border-red-700">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex flex-col lg:flex-row items-center justify-between gap-6">
            <div class="space-y-2 text-left">
                <span class="px-2 py-0.5 bg-black text-amber-400 text-xs font-black uppercase tracking-wider">
                    LAYANAN HOME SERVICE 24 JAM
                </span>
                <h2 class="text-2xl sm:text-3xl font-black uppercase tracking-tight">
                    Butuh Ganti Aki atau Oli Tanpa Keluar Rumah?
                </h2>
                <p class="text-xs sm:text-sm text-red-100 max-w-2xl">
                    Mekanik profesional kami siap datang ke rumah, kantor, atau lokasi mogok. <strong>Bebas biaya antar dan pasang</strong> dalam radius cabang.
                </p>
            </div>
            <div class="flex items-center gap-3 flex-shrink-0">
                <a href="tel:1500015" class="bg-white hover:bg-slate-100 text-red-600 font-black text-xs uppercase tracking-wider px-5 py-3 transition-colors">
                    Telepon 1500-015
                </a>
                <a href="https://wa.me/6281234567890?text=Halo%20AutoDrive%2C%20saya%20butuh%20layanan%20Home%20Service" target="_blank" class="bg-black hover:bg-slate-900 text-white font-bold text-xs uppercase tracking-wider px-5 py-3 transition-colors border border-black">
                    Pesan via WhatsApp
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Promo & Paket Hemat Terkini (Solid Boxes, Sharp) -->
<section class="py-16 sm:py-24 bg-white border-b-2 border-slate-200">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex flex-col sm:flex-row sm:items-end justify-between mb-12 gap-4">
            <div>
                <span class="text-xs font-black text-red-600 uppercase tracking-widest block mb-1">
                    PROGRAM PROMO & DISKON
                </span>
                <h2 class="text-3xl sm:text-4xl font-black text-slate-950 uppercase tracking-tight">
                    Paket Promo Perawatan Berkala
                </h2>
            </div>
            <a href="{{ route('promos.index') }}" class="text-xs font-black uppercase text-red-600 hover:text-red-700 tracking-wider">
                Lihat Semua Promo ({{ count($promotions) }}) &rarr;
            </a>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            @foreach(array_slice($promotions, 0, 3) as $promo)
                <div class="{{ $promo['solid_color'] }} text-white p-6 border-2 border-black flex flex-col justify-between">
                    <div>
                        <div class="flex items-center justify-between mb-4 pb-2 border-b border-white/20">
                            <span class="bg-black text-white text-[10px] font-black px-2 py-0.5 uppercase tracking-wider">
                                {{ $promo['category'] }}
                            </span>
                            <span class="bg-white text-black text-[10px] font-black px-2 py-0.5 uppercase tracking-wider">
                                {{ $promo['badge'] }}
                            </span>
                        </div>
                        <h3 class="text-xl font-black uppercase leading-tight mb-2">{{ $promo['title'] }}</h3>
                        <p class="text-xs text-white/90 leading-relaxed mb-6">{{ $promo['description'] }}</p>
                    </div>

                    <div class="pt-4 border-t border-white/20 flex items-center justify-between text-xs">
                        <div>
                            <span class="text-[10px] text-white/70 block uppercase">Berlaku Sampai:</span>
                            <span class="font-bold">{{ $promo['valid_until'] }}</span>
                        </div>
                        <a href="{{ route('promos.index') }}" class="bg-white text-black hover:bg-amber-400 font-black text-[11px] uppercase tracking-wider px-3.5 py-2 transition-colors">
                            Syarat & Ketentuan
                        </a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>

<!-- Mengapa Memilih AutoDrive (4 Standar Pilar Layanan) -->
<section class="py-16 sm:py-24 bg-black text-white border-b-2 border-slate-800">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="mb-12 text-left">
            <span class="text-xs font-black text-amber-400 uppercase tracking-widest block mb-1">
                STANDAR MUTU TERPERCAYA
            </span>
            <h2 class="text-3xl sm:text-4xl font-black uppercase tracking-tight">
                Mengapa Mempercayakan Mobil Anda Pada Kami?
            </h2>
            <p class="text-slate-400 text-xs sm:text-sm mt-1">
                Komitmen keaslian, kepastian waktu, dan garansi resmi tanpa kompromi.
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
            <div class="bg-slate-900 border border-slate-800 p-6 border-t-4 border-t-amber-500">
                <span class="text-amber-400 text-xs font-black uppercase block mb-1">01. KECEPATAN</span>
                <h3 class="text-base font-black text-white uppercase mb-2">Quick Service 15–45 Menit</h3>
                <p class="text-xs text-slate-400 leading-relaxed">
                    Sistem pengerjaan terstruktur memastikan pergantian aki, pelumas, dan komponen fast moving selesai tanpa membuang waktu Anda.
                </p>
            </div>

            <div class="bg-slate-900 border border-slate-800 p-6 border-t-4 border-t-red-600">
                <span class="text-red-500 text-xs font-black uppercase block mb-1">02. KEASLIAN</span>
                <h3 class="text-base font-black text-white uppercase mb-2">100% Suku Cadang Original</h3>
                <p class="text-xs text-slate-400 leading-relaxed">
                    Semua aki GS Astra, pelumas Shell/Motul, dan shock absorber KYB dipasok langsung dari distributor resmi Astra Otoparts.
                </p>
            </div>

            <div class="bg-slate-900 border border-slate-800 p-6 border-t-4 border-t-blue-500">
                <span class="text-blue-400 text-xs font-black uppercase block mb-1">03. GARANSI</span>
                <h3 class="text-base font-black text-white uppercase mb-2">Garansi Berlaku Nasional</h3>
                <p class="text-xs text-slate-400 leading-relaxed">
                    Beli aki di Jakarta, klaim garansi di Surabaya, Bandung, atau Bali. Terintegrasi secara digital di seluruh outlet kami.
                </p>
            </div>

            <div class="bg-slate-900 border border-slate-800 p-6 border-t-4 border-t-emerald-500">
                <span class="text-emerald-400 text-xs font-black uppercase block mb-1">04. TRANSPARANSI</span>
                <h3 class="text-base font-black text-white uppercase mb-2">Harga Pasti Tanpa Trik</h3>
                <p class="text-xs text-slate-400 leading-relaxed">
                    Struk pembayaran tercetak jelas dari sistem komputerisasi. Tidak ada penggantian suku cadang tanpa persetujuan Anda.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Jaringan Bengkel / Cabang Terdekat (Pure Read-Only) -->
<section class="py-16 sm:py-24 bg-slate-100 border-b-2 border-slate-200">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex flex-col sm:flex-row sm:items-end justify-between mb-12 gap-4">
            <div>
                <span class="text-xs font-black text-red-600 uppercase tracking-widest block mb-1">
                    JARINGAN OUTLET KAMI
                </span>
                <h2 class="text-3xl sm:text-4xl font-black text-slate-950 uppercase tracking-tight">
                    Gerai Bengkel AutoDrive
                </h2>
                <p class="text-slate-600 text-xs sm:text-sm mt-1">Lebih dari 120 cabang strategis tersebar di seluruh Indonesia.</p>
            </div>
            <a href="{{ route('outlets.index') }}" class="text-xs font-black uppercase text-red-600 hover:text-red-700 tracking-wider">
                Buka Direktori Lengkap ({{ count($outlets) }}) &rarr;
            </a>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
            @foreach(array_slice($outlets, 0, 4) as $outlet)
                <div class="bg-white border-2 border-slate-300 p-6 flex flex-col justify-between">
                    <div>
                        <div class="flex items-center gap-1.5 mb-3">
                            <span class="bg-black text-white text-[10px] font-black px-2 py-0.5 uppercase">
                                {{ $outlet['city'] }}
                            </span>
                            @if($outlet['is_24_hours'])
                                <span class="bg-red-600 text-white text-[10px] font-black px-2 py-0.5 uppercase">
                                    24 JAM
                                </span>
                            @endif
                        </div>
                        <h3 class="font-black text-slate-900 text-base uppercase mb-2">{{ $outlet['name'] }}</h3>
                        <p class="text-xs text-slate-600 mb-4 leading-relaxed">{{ $outlet['address'] }}</p>
                        <p class="text-xs text-slate-900 font-bold mb-4">
                            Telp: {{ $outlet['phone'] }}
                        </p>
                    </div>

                    <div class="pt-4 border-t border-slate-200 flex items-center justify-between text-xs">
                        <a href="{{ $outlet['google_maps'] }}" target="_blank" class="font-bold text-slate-700 hover:text-red-600 underline">
                            Google Maps
                        </a>
                        <a href="https://wa.me/{{ $outlet['whatsapp'] }}" target="_blank" class="font-bold text-emerald-600 hover:text-emerald-700">
                            WhatsApp Cabang &rarr;
                        </a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>

<!-- Testimoni Pelanggan (Sharp, Solid) -->
<section class="py-16 sm:py-24 bg-white border-b-2 border-slate-200">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="mb-12 text-left">
            <span class="text-xs font-black text-red-600 uppercase tracking-widest block mb-1">
                REPUTASI & KEPUASAN
            </span>
            <h2 class="text-3xl sm:text-4xl font-black text-slate-950 uppercase tracking-tight">
                Ulasan Konsumen Terverifikasi
            </h2>
            <p class="text-xs text-slate-500 mt-1">Berdasarkan ulasan asli pelanggan di gerai AutoDrive se-Indonesia.</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
            @foreach($testimonials as $t)
                <div class="bg-slate-50 border-2 border-slate-200 p-6 flex flex-col justify-between">
                    <div>
                        <div class="text-amber-500 text-sm font-black mb-3">
                            ★ ★ ★ ★ ★
                        </div>
                        <p class="text-xs text-slate-700 leading-relaxed mb-6">
                            "{{ $t['text'] }}"
                        </p>
                    </div>

                    <div class="pt-4 border-t border-slate-200">
                        <p class="text-xs font-black text-slate-900 uppercase">{{ $t['name'] }}</p>
                        <p class="text-[11px] text-slate-500">{{ $t['car'] }} • {{ $t['city'] }}</p>
                        <span class="inline-block mt-2 text-[10px] font-bold text-red-600 bg-red-100 px-2 py-0.5">
                            {{ $t['service'] }}
                        </span>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>

<!-- Tips Otomotif Edukasi -->
<section class="py-16 sm:py-24 bg-slate-100">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex flex-col sm:flex-row sm:items-end justify-between mb-12 gap-4">
            <div>
                <span class="text-xs font-black text-red-600 uppercase tracking-widest block mb-1">
                    EDUKASI PERAWATAN
                </span>
                <h2 class="text-3xl sm:text-4xl font-black text-slate-950 uppercase tracking-tight">
                    Artikel & Panduan Berkendara
                </h2>
            </div>
            <a href="{{ route('tips.index') }}" class="text-xs font-black uppercase text-red-600 hover:text-red-700 tracking-wider">
                Lihat Semua Artikel &rarr;
            </a>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            @foreach($tips as $tip)
                <article class="bg-white border-2 border-slate-300 p-6 flex flex-col justify-between">
                    <div>
                        <div class="flex items-center justify-between text-xs text-slate-400 mb-3">
                            <span class="font-black text-red-600 uppercase text-[10px]">{{ $tip['category'] }}</span>
                            <span>{{ $tip['read_time'] }}</span>
                        </div>
                        <h3 class="text-base font-black text-slate-900 uppercase hover:text-red-600 transition-colors mb-3 leading-snug">
                            <a href="{{ route('tips.show', $tip['slug']) }}">
                                {{ $tip['title'] }}
                            </a>
                        </h3>
                        <p class="text-xs text-slate-600 leading-relaxed mb-6">
                            {{ $tip['excerpt'] }}
                        </p>
                    </div>

                    <div class="pt-4 border-t border-slate-200 flex items-center justify-between text-xs">
                        <span class="text-slate-400">{{ $tip['date'] }}</span>
                        <a href="{{ route('tips.show', $tip['slug']) }}" class="font-bold text-red-600 hover:text-red-700">
                            Baca Ulasan &rarr;
                        </a>
                    </div>
                </article>
            @endforeach
        </div>
    </div>
</section>

@endsection
