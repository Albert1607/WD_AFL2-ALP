<?php

namespace Database\Seeders;

use App\Models\KategoriLayanan;
use App\Models\Layanan;
use Illuminate\Database\Seeder;

class LayananSeeder extends Seeder
{
    /**
     * Seed the layanan table with 12 realistic car services.
     */
    public function run(): void
    {
        $rutin = KategoriLayanan::where('slug', 'perawatan-rutin')->first();
        $mesin = KategoriLayanan::where('slug', 'mesin-injeksi')->first();
        $kaki = KategoriLayanan::where('slug', 'kaki-kaki-rem')->first();
        $listrik = KategoriLayanan::where('slug', 'kelistrikan-aki')->first();

        $layanan = [
            // ── Perawatan Rutin ──────────────────────────────────────────
            [
                'kategori_id' => $rutin->id,
                'nama_layanan' => 'Ganti Oli Mesin',
                'slug' => 'ganti-oli-mesin',
                'deskripsi' => 'Penggantian oli mesin mobil menggunakan oli berkualitas tinggi (Shell Helix, Castrol GTX, Mobil 1) sesuai spesifikasi pabrikan. Termasuk pengecekan level oli, filter oli, dan kondisi mesin secara umum. Menjaga mesin tetap terlumasi sempurna dan mengurangi keausan komponen internal.',
                'harga_mulai' => 150000,
                'estimasi_durasi' => '30–45 menit',
                'gambar' => 'layanan-ganti-oli.jpg',
            ],
            [
                'kategori_id' => $rutin->id,
                'nama_layanan' => 'Servis Ringan',
                'slug' => 'servis-ringan',
                'deskripsi' => 'Paket servis rutin mencakup ganti oli mesin, cek dan setel rem depan/belakang, cek kondisi ban dan tekanan angin, pengecekan lampu-lampu, pengecekan air radiator, serta pembersihan throttle body. Ideal dilakukan setiap 5.000–10.000 km.',
                'harga_mulai' => 250000,
                'estimasi_durasi' => '60–90 menit',
                'gambar' => 'layanan-servis-ringan.jpg',
            ],
            [
                'kategori_id' => $rutin->id,
                'nama_layanan' => 'Servis Besar (Overhaul)',
                'slug' => 'servis-besar-overhaul',
                'deskripsi' => 'Paket servis menyeluruh meliputi bongkar mesin ringan, pembersihan ruang bakar, penggantian paking kepala silinder, cek klep dan setel celah klep, penggantian filter oli, busi, filter udara, serta kalibrasi semua sistem. Direkomendasikan setiap 40.000–60.000 km atau dua tahun sekali.',
                'harga_mulai' => 800000,
                'estimasi_durasi' => '4–8 jam',
                'gambar' => 'layanan-servis-besar.jpg',
            ],

            // ── Mesin & Injeksi ──────────────────────────────────────────
            [
                'kategori_id' => $mesin->id,
                'nama_layanan' => 'Tune Up Injeksi',
                'slug' => 'tune-up-injeksi',
                'deskripsi' => 'Optimasi performa mesin injeksi menggunakan alat diagnostik digital OBD-II. Proses meliputi pembersihan injektor, throttle body, intake manifold, pemrograman ulang ECU (jika diperlukan), serta penyetelan idle speed agar mesin halus, bertenaga, dan irit bahan bakar.',
                'harga_mulai' => 350000,
                'estimasi_durasi' => '90–120 menit',
                'gambar' => 'layanan-tune-up-injeksi.jpg',
            ],
            [
                'kategori_id' => $mesin->id,
                'nama_layanan' => 'Servis Transmisi Otomatis',
                'slug' => 'servis-transmisi-otomatis',
                'deskripsi' => 'Perawatan sistem transmisi otomatis (AT) dan CVT mobil. Meliputi penggantian oli transmisi, pengecekan kondisi torque converter, valve body, dan sensor-sensor terkait. Mencegah selip, hentakan, dan perpindahan gigi yang kasar pada transmisi otomatis Anda.',
                'harga_mulai' => 500000,
                'estimasi_durasi' => '2–3 jam',
                'gambar' => 'layanan-servis-transmisi.jpg',
            ],

            // ── Kaki-kaki & Rem ──────────────────────────────────────────
            [
                'kategori_id' => $kaki->id,
                'nama_layanan' => 'Ganti Kampas Rem',
                'slug' => 'ganti-kampas-rem',
                'deskripsi' => 'Penggantian kampas rem depan dan/atau belakang menggunakan kampas rem original sesuai tipe mobil. Disertai pengecekan cakram/tromol, penyetelan jarak main rem, dan bleeding minyak rem (untuk rem cakram). Keselamatan berkendara dimulai dari rem yang pakem.',
                'harga_mulai' => 180000,
                'estimasi_durasi' => '45–60 menit',
                'gambar' => 'layanan-kampas-rem.jpg',
            ],
            [
                'kategori_id' => $kaki->id,
                'nama_layanan' => 'Servis Rem Cakram',
                'slug' => 'servis-rem-cakram',
                'deskripsi' => 'Perawatan lengkap sistem rem cakram meliputi pembersihan dan pelumasan kaliper rem, pengecekan dan penggantian piston kaliper, bleeding dan penggantian minyak rem DOT4, serta pengecekan kondisi cakram. Rem cakram terawat memberikan daya henti maksimal.',
                'harga_mulai' => 300000,
                'estimasi_durasi' => '60–90 menit',
                'gambar' => 'layanan-rem-cakram.jpg',
            ],
            [
                'kategori_id' => $kaki->id,
                'nama_layanan' => 'Spooring & Balancing',
                'slug' => 'spooring-balancing',
                'deskripsi' => 'Penyetelan geometri roda (spooring/wheel alignment) menggunakan mesin computerized untuk memastikan keempat roda sejajar sempurna. Dilengkapi dengan balancing roda untuk menghilangkan getaran di setir. Memperpanjang usia ban dan meningkatkan kenyamanan berkendara.',
                'harga_mulai' => 250000,
                'estimasi_durasi' => '60–90 menit',
                'gambar' => 'layanan-spooring.jpg',
            ],
            [
                'kategori_id' => $kaki->id,
                'nama_layanan' => 'Ganti Ban',
                'slug' => 'ganti-ban',
                'deskripsi' => 'Penggantian ban tubeless dengan merek pilihan (Bridgestone, Michelin, Dunlop, Achilles). Proses menggunakan alat profesional untuk mencegah kerusakan velg. Termasuk pengecekan tekanan angin, pemasangan valve baru, dan balancing setelah pemasangan.',
                'harga_mulai' => 350000,
                'estimasi_durasi' => '45–60 menit',
                'gambar' => 'layanan-ganti-ban.jpg',
            ],
            [
                'kategori_id' => $kaki->id,
                'nama_layanan' => 'Servis Suspensi & Kaki-kaki',
                'slug' => 'servis-suspensi-kaki-kaki',
                'deskripsi' => 'Perawatan dan perbaikan sistem suspensi meliputi pengecekan dan penggantian shock absorber, ball joint, tie rod, control arm bushing, serta stabilizer link. Suspensi prima memberikan kenyamanan, kestabilan, dan keamanan berkendara yang optimal.',
                'harga_mulai' => 400000,
                'estimasi_durasi' => '2–4 jam',
                'gambar' => 'layanan-suspensi.jpg',
            ],

            // ── Kelistrikan & Aki ─────────────────────────────────────────
            [
                'kategori_id' => $listrik->id,
                'nama_layanan' => 'Ganti Aki',
                'slug' => 'ganti-aki',
                'deskripsi' => 'Penggantian aki mobil (Maintenance Free maupun konvensional) dengan aki original bervolt dan kapasitas sesuai spesifikasi mobil. Tersedia merek GS Astra, Yuasa, Panasonic. Termasuk pengecekan sistem pengisian (alternator) agar aki baru tidak cepat rusak.',
                'harga_mulai' => 400000,
                'estimasi_durasi' => '30–45 menit',
                'gambar' => 'layanan-ganti-aki.jpg',
            ],
            [
                'kategori_id' => $listrik->id,
                'nama_layanan' => 'Ganti Busi & Cek Kelistrikan',
                'slug' => 'ganti-busi-cek-kelistrikan',
                'deskripsi' => 'Penggantian busi dengan tipe original (NGK, Denso, Bosch) sesuai rekomendasi pabrikan, disertai pengecekan menyeluruh sistem kelistrikan: lampu utama, sein, klakson, AC, power window, dan sistem pengisian daya. Mencegah mobil mogok akibat gangguan kelistrikan.',
                'harga_mulai' => 200000,
                'estimasi_durasi' => '45–60 menit',
                'gambar' => 'layanan-busi-listrik.jpg',
            ],
        ];

        foreach ($layanan as $item) {
            Layanan::create($item);
        }
    }
}
