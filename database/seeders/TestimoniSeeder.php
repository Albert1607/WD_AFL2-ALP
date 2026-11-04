<?php

namespace Database\Seeders;

use App\Models\Layanan;
use App\Models\Testimoni;
use Illuminate\Database\Seeder;

class TestimoniSeeder extends Seeder
{
    /**
     * Seed the testimoni table with 10 realistic customer reviews.
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
                'komentar' => 'Paket servis ringannya lengkap banget, semua dicek mulai dari rem sampai tekanan ban. Mobil jadi terasa lebih ringan dan responsif. Bengkelnya bersih, ada ruang tunggunya juga. Recommended!',
            ],
            [
                'layanan_id' => $tuneUp->id,
                'nama_pelanggan' => 'Rizky Pratama',
                'jenis_kendaraan' => 'Honda Civic 1.5T 2022',
                'rating' => 5,
                'komentar' => 'Mobil saya sering brebet waktu pagi hari. Setelah tune up injeksi di sini, langsung mulus seperti mobil baru! Mekaniknya paham betul soal sistem injeksi Honda. Harga juga terjangkau untuk kualitas segini.',
            ],
            [
                'layanan_id' => $transmisi->id,
                'nama_pelanggan' => 'Siti Nurhaliza',
                'jenis_kendaraan' => 'Toyota Corolla Cross 2023',
                'rating' => 5,
                'komentar' => 'Sebelumnya transmisi CVT mobil saya terasa hentakan saat akselerasi dan kurang smooth. Setelah servis transmisi di sini, masalah langsung teratasi. Mekaniknya profesional dan menjelaskan dengan detail kondisi transmisi saya.',
            ],
            [
                'layanan_id' => $servisBesar->id,
                'nama_pelanggan' => 'Agus Firmansyah',
                'jenis_kendaraan' => 'Daihatsu Xenia 1.3 R 2019',
                'rating' => 4,
                'komentar' => 'Servis besar yang cukup komprehensif. Mobil saya yang sudah 5 tahun jadi seperti mobil baru lagi. Waktu pengerjaan sekitar 6 jam sesuai estimasi. Mekanik menjelaskan kondisi setiap komponen dengan jelas. Worth it!',
            ],
            [
                'layanan_id' => $kampasRem->id,
                'nama_pelanggan' => 'Linda Kusuma',
                'jenis_kendaraan' => 'Mitsubishi Xpander 1.5 Ultimate 2021',
                'rating' => 5,
                'komentar' => 'Rem mobil saya mulai bunyi dan kurang pakem. Langsung ganti kampas rem di sini, pelayanan super cepat hanya 45 menit. Mekaniknya juga ngecek kondisi cakram sekalian tanpa biaya tambahan. Sangat profesional!',
            ],
            [
                'layanan_id' => $gantiAki->id,
                'nama_pelanggan' => 'Hendra Wijaya',
                'jenis_kendaraan' => 'Toyota Innova Reborn 2.0 G 2020',
                'rating' => 5,
                'komentar' => 'Mobil mogok pagi-pagi gara-gara aki soak. Langsung bawa ke Kardi Putra Motor, akinya langsung diganti dan dicek juga sistem pengisian listriknya. Sekarang starter mobil sangat responsif. Terima kasih tim KPM!',
            ],
            [
                'layanan_id' => $busiListrik->id,
                'nama_pelanggan' => 'Fitri Handayani',
                'jenis_kendaraan' => 'Suzuki Ertiga GX 2022',
                'rating' => 5,
                'komentar' => 'Lampu mobil saya berkedip-kedip dan sesekali mati. Mekanik di sini cek kelistrikan secara menyeluruh dan menemukan ada koneksi yang longgar. Busi juga ikut diganti. Harga sangat bersahabat dan mobilnya langsung beres!',
            ],
            [
                'layanan_id' => $spooring->id,
                'nama_pelanggan' => 'Fajar Nugroho',
                'jenis_kendaraan' => 'Toyota Rush TRD 2020',
                'rating' => 5,
                'komentar' => 'Setir mobil saya miring ke kiri dan ban cepat aus tidak merata. Setelah spooring dan balancing di sini, mobil langsung lurus sempurna dan getaran di setir hilang. Proses pengerjaannya rapi dan mekaniknya berpengalaman.',
            ],
            [
                'layanan_id' => $gantiBan->id,
                'nama_pelanggan' => 'Ani Setianingsih',
                'jenis_kendaraan' => 'Honda HR-V 1.5 SE 2021',
                'rating' => 4,
                'komentar' => 'Ganti ban belakang di sini, prosesnya cepat dan aman. Velg mobil saya tidak lecet sama sekali. Ada banyak pilihan merek ban dengan harga berbeda-beda. Termasuk balancing setelah pasang ban, puas dengan hasilnya!',
            ],
        ];

        foreach ($testimoni as $item) {
            Testimoni::create($item);
        }
    }
}
