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

    'address' => 'Jl. Raya Pahlawan No. 88, Kel. Sukamaju, Kec. Cimanggis, Depok, Jawa Barat 16451',
    'phone' => '+6281234567890',
    'wa' => '6281234567890',
    'hours' => [
        'weekday' => 'Senin – Sabtu: 08.00 – 17.00',
        'weekend' => 'Minggu & Libur: 08.00 – 14.00',
    ],

    'email' => 'info@kardiputramotor.com',
    'instagram' => 'kardiputramotor',

    'maps_embed' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3963.4!2d106.85!3d-6.37!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zBsKwMjInMTIuMCJTIDEwNsKwNTEnMDAuMCJF!5e0!3m2!1sid!2sid!4v1699999999999',

    'wa_message' => 'Halo%20Kardi%20Putra%20Motor%2C%20saya%20ingin%20konsultasi%20servis%20mobil',

    'stats' => [
        ['value' => '10+',   'label' => 'Tahun Pengalaman'],
        ['value' => '5.000+', 'label' => 'Mobil Diservis'],
        ['value' => '4.9',   'label' => 'Rating Pelanggan'],
        ['value' => '100%',  'label' => 'Sparepart Asli'],
    ],

    'why_us' => [
        ['icon' => 'wrench', 'title' => 'Mekanik Berpengalaman',  'desc' => 'Teknisi bersertifikat dengan pengalaman lebih dari 10 tahun menangani berbagai merek mobil.'],
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
