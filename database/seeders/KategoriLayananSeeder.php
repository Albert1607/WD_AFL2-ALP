<?php

namespace Database\Seeders;

use App\Models\KategoriLayanan;
use Illuminate\Database\Seeder;

class KategoriLayananSeeder extends Seeder
{
    /**
     * Seed the kategori_layanan table with 4 service categories.
     */
    public function run(): void
    {
        $categories = [
            [
                'nama_kategori' => 'Perawatan Rutin',
                'slug' => 'perawatan-rutin',
                'deskripsi' => 'Layanan perawatan berkala untuk menjaga performa mobil tetap prima. Meliputi ganti oli, tune up, dan pengecekan rutin agar mobil selalu dalam kondisi terbaik.',
            ],
            [
                'nama_kategori' => 'Mesin & Injeksi',
                'slug' => 'mesin-injeksi',
                'deskripsi' => 'Servis mendalam untuk sistem mesin dan injeksi bahan bakar. Dari tune up injeksi hingga perawatan transmisi untuk performa dan efisiensi bahan bakar yang optimal.',
            ],
            [
                'nama_kategori' => 'Kaki-kaki & Rem',
                'slug' => 'kaki-kaki-rem',
                'deskripsi' => 'Perawatan sistem suspensi, spooring balancing, pengereman, dan roda mobil. Pastikan kenyamanan berkendara dan keselamatan Anda di jalan.',
            ],
            [
                'nama_kategori' => 'Kelistrikan & Aki',
                'slug' => 'kelistrikan-aki',
                'deskripsi' => 'Diagnosis dan perbaikan sistem kelistrikan mobil, penggantian aki, busi, dan komponen kelistrikan lainnya agar mobil tidak mogok di jalan.',
            ],
        ];

        foreach ($categories as $category) {
            KategoriLayanan::create($category);
        }
    }
}
