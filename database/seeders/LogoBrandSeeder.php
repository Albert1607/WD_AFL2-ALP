<?php

namespace Database\Seeders;

use App\Models\LogoBrand;
use Illuminate\Database\Seeder;

class LogoBrandSeeder extends Seeder
{
    /**
     * Seed the logo_brands table from the files in public/images/logo-brand.
     */
    public function run(): void
    {
        $brands = [
            ['Toyota', 'Toyota_Logo.svg.webp', 'kendaraan'],
            ['Honda', 'Honda-Logo-2000-present.png', 'kendaraan'],
            ['Daihatsu', 'daihatsu-logo-png.png', 'kendaraan'],
            ['Mitsubishi', 'mitsubishi-logo-png.png', 'kendaraan'],
            ['Suzuki', 'suzuki-black-logo.png', 'kendaraan'],
            ['Shell', 'shell-white-logo-oil-and-gas-company-icon-emblem-premium-quality-transparent-background-free-png.webp', 'sparepart_oli'],
            ['Castrol', 'castrol-logo-png.png', 'sparepart_oli'],
            ['Mobil 1', 'mobil-1-logo-black-and-white.png', 'sparepart_oli'],
            ['NGK', 'ngk-logo-black-and-white-1.png', 'sparepart_oli'],
            ['Denso', 'DENSO-Logo.png', 'sparepart_oli'],
        ];

        foreach ($brands as [$nama, $logo, $jenis]) {
            LogoBrand::create([
                'nama_brand' => $nama,
                'logo' => $logo,
                'jenis' => $jenis,
            ]);
        }
    }
}
