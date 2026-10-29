@extends('layouts.app')

@section('title', 'Tentang Kami - Profil Perusahaan AutoDrive Quick Service')

@section('content')

<!-- Header banner (Solid Black, sharp) -->
<div class="bg-black text-white py-16 border-b-4 border-red-600">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-left">
        <span class="text-xs font-black text-amber-400 uppercase tracking-widest block mb-2">
            PROFIL PERUSAHAAN
        </span>
        <h1 class="text-3xl sm:text-5xl font-black uppercase tracking-tight">
            Pelopor Konsep Quick Service Mobil di Indonesia
        </h1>
        <p class="text-slate-300 text-xs sm:text-sm max-w-2xl mt-3">
            Didirikan dengan komitmen memberikan kemudahan, kecepatan, dan kepastian suku cadang asli bergaransi resmi bagi jutaan pemilik mobil di Indonesia.
        </p>
    </div>
</div>

<!-- Story Section -->
<section class="py-16 bg-white border-b-2 border-slate-200">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-start">
            <div class="lg:col-span-7 space-y-4">
                <span class="text-xs font-black text-red-600 uppercase tracking-widest">
                    SEJARAH & KOMITMEN KAMI
                </span>
                <h2 class="text-2xl sm:text-3xl font-black text-slate-950 uppercase tracking-tight leading-tight">
                    Mengubah Pengalaman Perawatan Mobil Menjadi Cepat, Bersih & Pasti
                </h2>
                <p class="text-slate-700 text-xs sm:text-sm leading-relaxed">
                    AutoDrive Quick Service hadir sebagai jawaban atas tantangan yang dihadapi para pemilik mobil: waktu antre servis berkala yang memakan waktu berjam-jam di bengkel konvensional, ketidakpastian harga, serta kekhawatiran terhadap maraknya suku cadang tiruan di pasaran bebas.
                </p>
                <p class="text-slate-700 text-xs sm:text-sm leading-relaxed">
                    Mengadopsi standar mutu ritel modern berstandar Astra Otoparts, AutoDrive memfokuskan layanannya pada komponen perawatan rutin (*fast-moving parts*) seperti penggantian aki mobil, ganti pelumas mesin sistem vacuum suction, shock absorber, dan ban. Setiap gerai dirancang bersih, transparan, dengan fasilitas ruang tunggu nyaman ber-AC dan sistem data servis digital.
                </p>
                <p class="text-slate-700 text-xs sm:text-sm leading-relaxed">
                    Hingga saat ini, dengan lebih dari <strong>120 gerai</strong> yang beroperasi di kota-kota besar Indonesia, AutoDrive telah dipercaya menangani lebih dari <strong>850.000 unit kendaraan</strong> dengan kepuasan pelanggan mencapai 4.9/5.0.
                </p>
            </div>

            <div class="lg:col-span-5 bg-slate-900 text-white p-6 sm:p-8 border-2 border-slate-800 space-y-6">
                <div class="border-b-2 border-red-600 pb-3">
                    <h3 class="text-lg font-black uppercase text-amber-400">Visi & Misi Perusahaan</h3>
                </div>

                <div class="space-y-4 text-xs">
                    <div>
                        <h4 class="font-black uppercase text-white tracking-wider mb-1">Visi:</h4>
                        <p class="text-slate-300 leading-relaxed">
                            Menjadi jaringan bengkel servis cepat mobil modern nomor satu di Indonesia yang terdepan dalam hal keaslian produk, kecepatan pengerjaan, dan kepuasan pelanggan.
                        </p>
                    </div>

                    <div class="pt-4 border-t border-slate-800">
                        <h4 class="font-black uppercase text-white tracking-wider mb-2">Misi:</h4>
                        <ul class="space-y-2 text-slate-300">
                            <li class="flex items-start gap-2">
                                <span class="text-red-500 font-bold">•</span>
                                <span>Menyediakan 100% suku cadang dan oli resmi berstandar pabrikan internasional.</span>
                            </li>
                            <li class="flex items-start gap-2">
                                <span class="text-red-500 font-bold">•</span>
                                <span>Menjamin pengerjaan kilat 15–45 menit dengan mekanik tersertifikasi.</span>
                            </li>
                            <li class="flex items-start gap-2">
                                <span class="text-red-500 font-bold">•</span>
                                <span>Menerapkan garansi resmi yang terintegrasi dan dapat diklaim di seluruh gerai nasional.</span>
                            </li>
                            <li class="flex items-start gap-2">
                                <span class="text-red-500 font-bold">•</span>
                                <span>Menyediakan layanan darurat dan Home Service 24 jam bebas biaya antar dan pasang.</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- 5 Pillars of Excellence (Solid Boxes, Sharp) -->
<section class="py-16 sm:py-24 bg-slate-100 border-b-2 border-slate-200">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="mb-12 text-left">
            <span class="text-xs font-black text-red-600 uppercase tracking-widest block mb-1">
                NILAI UTAMA KAMI
            </span>
            <h2 class="text-3xl sm:text-4xl font-black text-slate-950 uppercase tracking-tight">
                5 Pilar Standar Kualitas AutoDrive
            </h2>
            <p class="text-slate-600 text-xs sm:text-sm mt-1">
                Landasan integritas dalam setiap pelayanan mekanik kepada konsumen kami.
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-5 gap-4">
            <div class="bg-white border-2 border-slate-300 p-6 text-left border-t-4 border-t-red-600">
                <span class="text-xs font-black text-red-600 block mb-2">PILAR 01</span>
                <h3 class="font-black text-slate-900 text-sm uppercase mb-2">Kecepatan 15–45 Menit</h3>
                <p class="text-xs text-slate-600 leading-relaxed">
                    Sistem pengerjaan terstandarisasi memastikan pergantian aki, pelumas, dan peredam kejut selesai tanpa antrean panjang.
                </p>
            </div>

            <div class="bg-white border-2 border-slate-300 p-6 text-left border-t-4 border-t-red-600">
                <span class="text-xs font-black text-red-600 block mb-2">PILAR 02</span>
                <h3 class="font-black text-slate-900 text-sm uppercase mb-2">100% Produk Asli</h3>
                <p class="text-xs text-slate-600 leading-relaxed">
                    Aki GS Astra, oli Shell/Motul/Mobil1, shock absorber KYB dipasok langsung dari distributor resmi pemegang merk.
                </p>
            </div>

            <div class="bg-white border-2 border-slate-300 p-6 text-left border-t-4 border-t-red-600">
                <span class="text-xs font-black text-red-600 block mb-2">PILAR 03</span>
                <h3 class="font-black text-slate-900 text-sm uppercase mb-2">Garansi Nasional</h3>
                <p class="text-xs text-slate-600 leading-relaxed">
                    Riwayat servis dan garansi aki tersimpan online, dapat diklaim di seluruh outlet di mana pun Anda berada di Indonesia.
                </p>
            </div>

            <div class="bg-white border-2 border-slate-300 p-6 text-left border-t-4 border-t-red-600">
                <span class="text-xs font-black text-red-600 block mb-2">PILAR 04</span>
                <h3 class="font-black text-slate-900 text-sm uppercase mb-2">Mekanik Handal</h3>
                <p class="text-xs text-slate-600 leading-relaxed">
                    Mekanik kami melalui pelatihan intensif dan sertifikasi kompetensi standar teknis otomotif nasional.
                </p>
            </div>

            <div class="bg-white border-2 border-slate-300 p-6 text-left border-t-4 border-t-red-600">
                <span class="text-xs font-black text-red-600 block mb-2">PILAR 05</span>
                <h3 class="font-black text-slate-900 text-sm uppercase mb-2">Harga Pasti</h3>
                <p class="text-xs text-slate-600 leading-relaxed">
                    Harga transparan tanpa biaya tersembunyi. Tidak ada penggantian suku cadang tanpa persetujuan eksplisit pemilik mobil.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Read-Only Contact Prompt -->
<section class="py-16 bg-black text-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 flex flex-col sm:flex-row items-center justify-between gap-6">
        <div>
            <h2 class="text-2xl sm:text-3xl font-black uppercase tracking-tight">
                Hubungi Kantor Layanan Konsumen Kami
            </h2>
            <p class="text-xs sm:text-sm text-slate-400 mt-1">
                Layanan pelanggan bebas pulsa 24 jam di 1500-015 atau kunjungi outlet bengkel terdekat.
            </p>
        </div>
        <div class="flex items-center gap-3 flex-shrink-0">
            <a href="{{ route('outlets.index') }}" class="bg-red-600 hover:bg-red-700 text-white font-black text-xs uppercase tracking-wider px-5 py-3 transition-colors">
                Daftar Outlet Bengkel
            </a>
            <a href="{{ route('contact') }}" class="bg-white hover:bg-slate-100 text-black font-black text-xs uppercase tracking-wider px-5 py-3 transition-colors">
                Kontak & Alamat
            </a>
        </div>
    </div>
</section>

@endsection
