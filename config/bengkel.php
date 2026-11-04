<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Kardi Putra Motor – Business Configuration
    |--------------------------------------------------------------------------
    |
    | All shop-specific constants live here so views and controllers can
    | reference them via config('bengkel.*') without hard-coding values.
    |
    */

    'name' => 'Kardi Putra Motor',
    'tagline' => 'Servis Mobil Cepat, Jujur, dan Bergaransi',
    'short' => 'KPM',

    'address' => 'Jl. Raya Cangkir No. KM 22, Dusun Gading, Cangkir, Kec. Driyorejo, Kabupaten Gresik, Jawa Timur 61177',
    'phone' => '+6282329840652',
    'tel_office' => '(031) 7590586',
    'wa' => '6282329840652',
    'gmaps' => 'https://maps.app.goo.gl/UTbZkoLiiiVQPBRGA',
    'hours' => [
        'weekday' => 'Senin – Sabtu: 08.00 – 16.00 WIB',
        'weekend' => 'Minggu: Tutup (Konsultasi via WA)',
    ],

    'email' => 'info@kardiputramotor.com',
    'instagram' => 'kpmcare.id',

    'maps_embed' => 'https://maps.google.com/maps?q=Kardi+Putra+Motor+Service+%26+Variasi,+Driyorejo,+Gresik&t=&z=16&ie=UTF8&iwloc=&output=embed',

    'wa_message' => 'Halo%20Kardi%20Putra%20Motor%2C%20saya%20ingin%20konsultasi%20servis%20mobil',

    'stats' => [
        ['value' => '15+',   'label' => 'Tahun Pengalaman'],
        ['value' => '5.000+', 'label' => 'Mobil Diservis'],
        ['value' => '4.9',   'label' => 'Rating Pelanggan'],
        ['value' => '100%',  'label' => 'Sparepart Asli'],
    ],

    'why_us' => [
        ['icon' => 'wrench', 'title' => 'Mekanik Berpengalaman',  'desc' => 'Teknisi bersertifikat dengan pengalaman bertahun-tahun menangani berbagai merek mobil.'],
        ['icon' => 'currency', 'title' => 'Harga Transparan',      'desc' => 'Estimasi biaya diberikan sebelum pengerjaan dimulai. Tidak ada biaya tersembunyi.'],
        ['icon' => 'shield', 'title' => 'Sparepart Asli',          'desc' => 'Kami hanya menggunakan suku cadang original bergaransi dari distributor resmi.'],
        ['icon' => 'clock',  'title' => 'Servis Cepat & Tepat',   'desc' => 'Pengerjaan efisien tanpa mengorbankan kualitas. Mobil Anda selesai tepat waktu.'],
        ['icon' => 'star',   'title' => 'Garansi Servis',          'desc' => 'Setiap pekerjaan dilindungi garansi resmi. Jika ada masalah, kami tangani tanpa biaya tambahan.'],
        ['icon' => 'home',   'title' => 'Bengkel Bersih & Rapi',  'desc' => 'Ruang tunggu nyaman, area kerja bersih, dan mobil Anda kami jaga kebersihannya.'],
    ],

    'how_it_works' => [
        ['step' => '01', 'title' => 'Hubungi via WhatsApp', 'desc' => 'Chat atau telepon kami untuk konsultasi gratis kapan saja.'],
        ['step' => '02', 'title' => 'Ceritakan Keluhan',    'desc' => 'Deskripsikan masalah mobil Anda agar kami bisa menyiapkan solusi terbaik.'],
        ['step' => '03', 'title' => 'Inspeksi & Estimasi',  'desc' => 'Mekanik inspeksi menyeluruh dan memberikan estimasi biaya sebelum pengerjaan.'],
        ['step' => '04', 'title' => 'Selesai & Bergaransi', 'desc' => 'Mobil beres, Anda puas. Setiap servis dilindungi garansi resmi Kardi Putra Motor.'],
    ],

    'brands' => [
        'Toyota', 'Honda', 'Daihatsu', 'Mitsubishi', 'Suzuki',
        'Shell', 'Castrol', 'Mobil 1', 'NGK', 'Denso',
    ],
];
