<?php

namespace Database\Seeders;

use App\Models\Layanan;
use App\Models\Testimoni;
use Illuminate\Database\Seeder;

class TestimoniSeeder extends Seeder
{
    /**
     * Seed the testimoni table with 10 realistic customer reviews averaging 4.6 (matching Google Maps).
     */
    public function run(): void
    {
        $gantiOli = Layanan::where('slug', 'ganti-oli-mesin')->first();
        $servisRingan = Layanan::where('slug', 'servis-ringan')->first();
        $servisBesar = Layanan::where('slug', 'servis-besar-overhaul')->first();
        $tuneUp = Layanan::where('slug', 'tune-up-injeksi')->first();
        $transmisi = Layanan::where('slug', 'servis-transmisi-otomatis')->first();
        $kampasRem = Layanan::where('slug', 'ganti-kampas-rem')->first();
        $gantiAki = Layanan::where('slug', 'ganti-aki')->first();
        $busiListrik = Layanan::where('slug', 'ganti-busi-cek-kelistrikan')->first();
        $spooring = Layanan::where('slug', 'spooring-balancing')->first();
        $gantiBan = Layanan::where('slug', 'ganti-ban')->first();

        // 6 fives + 4 fours = 46 / 10 = exactly 4.6 average rating
        $testimoni = [
            [
                'layanan_id' => $gantiOli->id,
                'nama_pelanggan' => 'Budi Santoso',
                'jenis_kendaraan' => 'Toyota Avanza 1.3 G 2021',
                'rating' => 5,
                'komentar' => 'Servis sangat cepat dan mekaniknya ramah! Ganti oli cuma 30 menit, langsung beres. Harga sesuai yang tertulis, tidak ada biaya tambahan tersembunyi. Pasti balik lagi ke Kardi Putra Motor.',
            ],
            [
                'layanan_id' => $servisRingan->id,
                'nama_pelanggan' => 'Dian Rahayu',
                'jenis_kendaraan' => 'Honda Jazz RS 2020',
                'rating' => 5,
                'komentar' => 'Paket servis ringannya lengkap banget, ganti filter kabin AC dan cek rem. Mobil jadi terasa dingin dan tarikannya enteng. Ruang tunggu ber-AC bersih. Recommended bengkel mobil di Driyorejo!',
            ],
            [
                'layanan_id' => $tuneUp->id,
                'nama_pelanggan' => 'Rizky Pratama',
                'jenis_kendaraan' => 'Honda Civic 1.5T 2022',
                'rating' => 5,
                'komentar' => 'Mobil saya brebet dan ada check engine menyala. Di-scan pake alat diagnostik OBD langsung ketahuan sensornya kotor. Setelah tune up dan kalibrasi, tarikan balik halus seperti baru.',
            ],
            [
                'layanan_id' => $transmisi->id,
                'nama_pelanggan' => 'Siti Nurhaliza',
                'jenis_kendaraan' => 'Toyota Corolla Cross 2023',
                'rating' => 4,
                'komentar' => 'Servis transmisi otomatis dan kuras oli matic di sini rapi. Hasilnya perpindahan gigi jadi jauh lebih halus. Pengerjaan teliti walau saat itu bengkel agak ramai.',
            ],
            [
                'layanan_id' => $servisBesar->id,
                'nama_pelanggan' => 'Agus Firmansyah',
                'jenis_kendaraan' => 'Daihatsu Xenia 1.3 R 2019',
                'rating' => 4,
                'komentar' => 'Servis besar yang komprehensif. Mobil saya yang sudah 5 tahun jadi segar lagi performanya. Mekanik menjelaskan kondisi setiap komponen dengan transparan sebelum diganti.',
            ],
            [
                'layanan_id' => $kampasRem->id,
                'nama_pelanggan' => 'Linda Kusuma',
                'jenis_kendaraan' => 'Mitsubishi Xpander 1.5 Ultimate 2021',
                'rating' => 5,
                'komentar' => 'Rem mobil mulai bunyi gesekan dan kurang pakem. Ganti kampas rem depan di sini cepat hanya 45 menit. Cakram juga dibersihkan dan dicek ketebalannya sekalian.',
            ],
            [
                'layanan_id' => $gantiAki->id,
                'nama_pelanggan' => 'Hendra Wijaya',
                'jenis_kendaraan' => 'Toyota Innova Reborn 2.0 G 2020',
                'rating' => 5,
                'komentar' => 'Mobil sempat susah distarter pagi hari karena aki sudah 3 tahun. Di Kardi Putra Motor dicek voltasenya, langsung diganti aki GS Astra original bergaransi. Mantap pelayanannya!',
            ],
            [
                'layanan_id' => $busiListrik->id,
                'nama_pelanggan' => 'Fitri Handayani',
                'jenis_kendaraan' => 'Suzuki Ertiga GX 2022',
                'rating' => 4,
                'komentar' => 'AC mobil kurang dingin dan lampu kabin redup. Diperiksa ternyata freon berkurang dan filter AC penuh debu. Setelah di-service AC-nya dingin menusuk lagi. Harga ramah di kantong.',
            ],
            [
                'layanan_id' => $spooring->id,
                'nama_pelanggan' => 'Fajar Nugroho',
                'jenis_kendaraan' => 'Toyota Rush TRD 2020',
                'rating' => 5,
                'komentar' => 'Setir sempat narik ke kiri di jalan tol. Setelah spooring dan balancing 4 roda di sini, setir langsung lurus mantap tanpa getar sama sekali. Alatnya modern dan computerized.',
            ],
            [
                'layanan_id' => $gantiBan->id,
                'nama_pelanggan' => 'Ani Setianingsih',
                'jenis_kendaraan' => 'Honda HR-V 1.5 SE 2021',
                'rating' => 4,
                'komentar' => 'Ganti ban depan di sini alatnya hidrolik aman untuk velg racing. Pilihan merk ban cukup lengkap dan dapat bonus pengisian nitrogen. Sangat puas dengan hasilnya!',
            ],
        ];

        foreach ($testimoni as $item) {
            Testimoni::create($item);
        }
    }
}
