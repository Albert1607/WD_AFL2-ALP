@extends('layouts.app')

@section('title', 'Kontak & Informasi Layanan Darurat 24 Jam - AutoDrive')

@section('content')

<!-- Header banner (Solid Black, sharp) -->
<div class="bg-black text-white py-16 border-b-4 border-red-600">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-left">
        <span class="text-xs font-black text-amber-400 uppercase tracking-widest block mb-2">
            LAYANAN PELANGGAN & DARURAT
        </span>
        <h1 class="text-3xl sm:text-5xl font-black uppercase tracking-tight">
            Pusat Informasi & Bantuan 24 Jam
        </h1>
        <p class="text-slate-300 text-xs sm:text-sm max-w-2xl mt-3">
            Customer Care dan armada mekanik darurat AutoDrive siaga 24 jam setiap hari melayani bantuan aki mogok, jump-start, dan layanan antar pasang ke lokasi Anda.
        </p>
    </div>
</div>

<!-- Main Contact Section (Pure Read-Only, No Input Forms!) -->
<section class="py-16 bg-slate-100">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-start">
            <!-- Left: Hotlines & Emergency Cards -->
            <div class="lg:col-span-5 space-y-6">
                <!-- 24H Hotline Card (Solid Red) -->
                <div class="bg-red-600 text-white p-6 sm:p-8 border-2 border-red-700 space-y-4">
                    <span class="bg-black text-amber-400 text-[10px] font-black uppercase px-2 py-0.5 tracking-wider">
                        HOTLINE BEBAS PULSA 24 JAM
                    </span>
                    <h2 class="text-3xl font-black tracking-tight">1500-015</h2>
                    <p class="text-xs text-red-100 leading-relaxed">
                        Layanan telepon darurat untuk bantuan aki drop, starter mati, atau permintaan Home Service mekanik datang langsung ke rumah atau kantor.
                    </p>
                    <a href="tel:1500015" class="inline-block bg-white text-red-600 hover:bg-slate-100 font-black text-xs uppercase tracking-wider px-5 py-3 transition-colors">
                        Telepon Sekarang &rarr;
                    </a>
                </div>

                <!-- WhatsApp Card (Solid Emerald) -->
                <div class="bg-emerald-600 text-white p-6 sm:p-8 border-2 border-emerald-700 space-y-4">
                    <span class="bg-black text-white text-[10px] font-black uppercase px-2 py-0.5 tracking-wider">
                        WHATSAPP RESMI CUSTOMER CARE
                    </span>
                    <h2 class="text-2xl font-black tracking-tight">+62 812-3456-7890</h2>
                    <p class="text-xs text-emerald-100 leading-relaxed">
                        Hubungi admin melalui pesan WhatsApp untuk konsultasi rekomendasi aki, jenis pelumas mesin, dan informasi ketersediaan suku cadang.
                    </p>
                    <a href="https://wa.me/6281234567890?text=Halo%20AutoDrive%2C%20saya%20ingin%20konsultasi%20layanan%20bengkel" target="_blank" class="inline-block bg-white text-emerald-700 hover:bg-slate-100 font-black text-xs uppercase tracking-wider px-5 py-3 transition-colors">
                        Kirim Pesan WhatsApp &rarr;
                    </a>
                </div>

                <!-- Office Operating Hours Card -->
                <div class="bg-white border-2 border-slate-300 p-6 space-y-3 text-xs text-slate-700">
                    <h3 class="font-black text-slate-900 uppercase text-sm border-b border-slate-200 pb-2">
                        Waktu Operasional Bengkel
                    </h3>
                    <div class="space-y-1.5">
                        <p><strong class="text-slate-900">Gerai Reguler:</strong> Buka Setiap Hari (08.00 - 20.00 WIB)</p>
                        <p><strong class="text-slate-900">Gerai Super 24 Jam:</strong> Beroperasi 24 Jam Non-Stop</p>
                        <p><strong class="text-slate-900">Hari Libur & Tanggal Merah:</strong> Tetap Buka Melayani</p>
                        <p><strong class="text-slate-900">Call Center & Home Service:</strong> Siaga 24 Jam Penuh</p>
                    </div>
                </div>
            </div>

            <!-- Right: Corporate Office & Department Contacts -->
            <div class="lg:col-span-7 space-y-6">
                <!-- Head Office Info -->
                <div class="bg-white border-2 border-slate-300 p-6 sm:p-8 space-y-4">
                    <span class="text-xs font-black text-red-600 uppercase tracking-widest block">
                        KANTOR PUSAT MANAJEMEN
                    </span>
                    <h2 class="text-xl font-black text-slate-900 uppercase">
                        PT AutoDrive Retail Otomotif Indonesia
                    </h2>
                    <p class="text-xs text-slate-600 leading-relaxed">
                        Gedung AutoDrive Tower Lantai 8, Kawasan Niaga Terpadu TB Simatupang Kav. 42, Cilandak Barat, Jakarta Selatan, DKI Jakarta 12430.
                    </p>

                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 pt-4 border-t border-slate-200 text-xs">
                        <div class="p-4 bg-slate-50 border border-slate-200">
                            <span class="text-[10px] font-black uppercase text-slate-400 block mb-1">Telepon Kantor</span>
                            <strong class="text-slate-900 font-bold">(021) 7590-1100 (Hunting)</strong>
                        </div>

                        <div class="p-4 bg-slate-50 border border-slate-200">
                            <span class="text-[10px] font-black uppercase text-slate-400 block mb-1">Email Layanan Konsumen</span>
                            <strong class="text-slate-900 font-bold">customercare@autodrive.co.id</strong>
                        </div>

                        <div class="p-4 bg-slate-50 border border-slate-200">
                            <span class="text-[10px] font-black uppercase text-slate-400 block mb-1">Kerjasama Corporate Fleet</span>
                            <strong class="text-slate-900 font-bold">corporate@autodrive.co.id</strong>
                        </div>

                        <div class="p-4 bg-slate-50 border border-slate-200">
                            <span class="text-[10px] font-black uppercase text-slate-400 block mb-1">Kemitraan Distributor</span>
                            <strong class="text-slate-900 font-bold">partner@autodrive.co.id</strong>
                        </div>
                    </div>
                </div>

                <!-- Emergency FAQs Box -->
                <div class="bg-white border-2 border-slate-300 p-6 sm:p-8 space-y-4">
                    <h3 class="font-black text-slate-900 uppercase text-base border-b border-slate-200 pb-2">
                        Panduan Bantuan Darurat & Home Service
                    </h3>

                    <div class="space-y-4 text-xs text-slate-700">
                        <div>
                            <strong class="font-bold text-slate-900 block mb-1">Q: Apa saja layanan yang bisa dipanggil ke rumah atau lokasi mogok?</strong>
                            <p class="text-slate-600 leading-relaxed">
                                Layanan Home Service siap melayani penggantian aki mobil baru, pengetesan aki/alternator, jump-start aki darurat, dan penggantian oli mesin vacuum.
                            </p>
                        </div>

                        <div>
                            <strong class="font-bold text-slate-900 block mb-1">Q: Berapa ongkos kirim dan jasa pasang untuk Home Service?</strong>
                            <p class="text-slate-600 leading-relaxed">
                                Gratis biaya antar dan gratis biaya pasang dalam radius 15 km dari cabang AutoDrive terdekat. Anda hanya membayar harga suku cadang resmi sesuai harga toko.
                            </p>
                        </div>

                        <div>
                            <strong class="font-bold text-slate-900 block mb-1">Q: Metode pembayaran apa saja yang diterima teknisi di lokasi?</strong>
                            <p class="text-slate-600 leading-relaxed">
                                Teknisi kami membawa mesin EDC portable dan QRIS dinamis. Pembayaran dapat dilakukan via Tunai, QRIS (BCA, Mandiri, GoPay, OVO, dll), Transfer Bank, serta Kartu Debit / Kredit (Visa & Mastercard).
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
