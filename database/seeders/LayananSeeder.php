<?php

namespace Database\Seeders;

use App\Models\KategoriLayanan;
use App\Models\Layanan;
use Illuminate\Database\Seeder;

class LayananSeeder extends Seeder
{
    /**
     * Seed the layanan table with 12 realistic car services matching Google profile.
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
                'nama_layanan' => 'Ganti Oli Mesin (Oil Service)',
                'slug' => 'ganti-oli-mesin',
                'deskripsi' => 'Penggantian oli mesin mobil menggunakan oli berkualitas tinggi (Shell Helix, Castrol GTX, Mobil 1) sesuai spesifikasi pabrikan. Termasuk pengecekan level oli, filter oli, dan kondisi mesin secara umum. Menjaga mesin tetap terlumasi sempurna dan mengurangi keausan komponen internal.',
                'harga_mulai' => 150000,
                'estimasi_durasi' => '30–45 menit',
                'gambar' => 'layanan-ganti-oli.jpg',
            ],
            [
                'kategori_id' => $rutin->id,
                'nama_layanan' => 'Servis Ringan & Filter Kabin',
                'slug' => 'servis-ringan',
                'deskripsi' => 'Paket servis rutin mencakup ganti oli, pembersihan/penggantian air and cabin filter (filter udara & filter kabin AC), pengecekan rem, tekanan ban, air radiator, serta pembersihan throttle body. Ideal dilakukan berkala setiap 5.000–10.000 km.',
                'harga_mulai' => 250000,
                'estimasi_durasi' => '60–90 menit',
                'gambar' => 'layanan-servis-ringan.jpg',
            ],
            [
                'kategori_id' => $rutin->id,
                'nama_layanan' => 'Servis Besar (Overhaul)',
                'slug' => 'servis-besar-overhaul',
                'deskripsi' => 'Paket servis menyeluruh meliputi bongkar mesin ringan, pembersihan ruang bakar (decarbonizing), penggantian paking kepala silinder, setel celah klep, penggantian filter oli, busi, filter udara, serta kalibrasi semua sistem.',
                'harga_mulai' => 800000,
                'estimasi_durasi' => '4–8 jam',
                'gambar' => 'layanan-servis-besar.jpg',
            ],

            // ── Mesin & Injeksi ──────────────────────────────────────────
            [
                'kategori_id' => $mesin->id,
                'nama_layanan' => 'Vehicle Engine Diagnostic & Tune Up',
                'slug' => 'tune-up-injeksi',
                'deskripsi' => 'Diagnosis mendalam sistem mesin menggunakan scanner diagnostik digital OBD-II (Vehicle engine diagnostic). Menemukan kode error DTC, membersihkan injektor, throttle body, intake manifold, serta kalibrasi ECU agar mesin bertenaga dan irit bahan bakar.',
                'harga_mulai' => 350000,
                'estimasi_durasi' => '90–120 menit',
                'gambar' => 'layanan-tune-up-injeksi.jpg',
            ],
            [
                'kategori_id' => $mesin->id,
                'nama_layanan' => 'Servis Transmisi Otomatis',
                'slug' => 'servis-transmisi-otomatis',
                'deskripsi' => 'Perawatan sistem transmisi otomatis (AT) dan CVT mobil. Meliputi penggantian / flushing oli transmisi, pengecekan torque converter, valve body, dan sensor transmisi. Mencegah selip, hentakan kasar, dan memperpanjang usia gearbox.',
                'harga_mulai' => 500000,
                'estimasi_durasi' => '2–3 jam',
                'gambar' => 'layanan-servis-transmisi.jpg',
            ],

            // ── Kaki-kaki & Rem ──────────────────────────────────────────
            [
                'kategori_id' => $kaki->id,
                'nama_layanan' => 'Ganti Kampas Rem (Brakes)',
                'slug' => 'ganti-kampas-rem',
                'deskripsi' => 'Penggantian kampas rem (brake pads) depan dan/atau belakang original sesuai tipe mobil. Disertai pembersihan kaliper, pengecekan ketebalan piringan cakram, penyetelan rem tangan, dan bleeding minyak rem untuk keselamatan berkendara maksimal.',
                'harga_mulai' => 180000,
                'estimasi_durasi' => '45–60 menit',
                'gambar' => 'layanan-kampas-rem.jpg',
            ],
            [
                'kategori_id' => $kaki->id,
                'nama_layanan' => 'Servis Rem Cakram & Kaliper',
                'slug' => 'servis-rem-cakram',
                'deskripsi' => 'Perawatan menyeluruh sistem rem cakram meliputi pembongkaran, pembersihan, dan pelumasan pin kaliper, penggantian seal piston jika bocor, pengurasan minyak rem dengan standar DOT4, serta tes daya henti pengereman.',
                'harga_mulai' => 300000,
                'estimasi_durasi' => '60–90 menit',
                'gambar' => 'layanan-rem-cakram.jpg',
            ],
            [
                'kategori_id' => $kaki->id,
                'nama_layanan' => 'Spooring & Balancing Roda',
                'slug' => 'spooring-balancing',
                'deskripsi' => 'Penyetelan sudut keselarasan roda (camber, caster, toe) menggunakan komputer 3D wheel alignment presisi tinggi, serta balancing roda untuk mengeliminasi getaran pada setir dan mencegah ban aus tidak merata.',
                'harga_mulai' => 250000,
                'estimasi_durasi' => '60–90 menit',
                'gambar' => 'layanan-spooring.jpg',
            ],
            [
                'kategori_id' => $kaki->id,
                'nama_layanan' => 'Ganti Ban Mobil',
                'slug' => 'ganti-ban',
                'deskripsi' => 'Penggantian ban mobil baru dari berbagai merk ternama (Bridgestone, Dunlop, GT Radial, Hankook). Pemasangan dilakukan dengan tyre changer hidrolik tanpa merusak bibir velg, lengkap dengan pentil tubeless baru dan pengisian nitrogen.',
                'harga_mulai' => 350000,
                'estimasi_durasi' => '45–60 menit',
                'gambar' => 'layanan-ganti-ban.jpg',
            ],
            [
                'kategori_id' => $kaki->id,
                'nama_layanan' => 'Servis Suspensi & Kaki-kaki',
                'slug' => 'servis-suspensi-kaki-kaki',
                'deskripsi' => 'Perbaikan dan rekondisi suspensi: shock absorber, link stabilizer, tie rod, rack end, ball joint, dan bushing arm. Menghilangkan bunyi gludug-gludug pada jalan bergelombang dan memulihkan kestabilan berkendara.',
                'harga_mulai' => 400000,
                'estimasi_durasi' => '2–4 jam',
                'gambar' => 'layanan-suspensi.jpg',
            ],

            // ── Kelistrikan & Aki ─────────────────────────────────────────
            [
                'kategori_id' => $listrik->id,
                'nama_layanan' => 'Ganti Aki Mobil (Battery Care)',
                'slug' => 'ganti-aki',
                'deskripsi' => 'Penggantian aki mobil bergaransi resmi (GS Astra, Yuasa, Incoe) tipe basah maupun Maintenance Free (kering). Termasuk uji voltase alternator, pengetesan cold cranking amps (CCA), dan pembersihan klem aki dari korosi.',
                'harga_mulai' => 400000,
                'estimasi_durasi' => '30–45 menit',
                'gambar' => 'layanan-ganti-aki.jpg',
            ],
            [
                'kategori_id' => $listrik->id,
                'nama_layanan' => 'Servis AC Mobil & Kelistrikan (Air Conditioning & Electrical)',
                'slug' => 'ganti-busi-cek-kelistrikan',
                'deskripsi' => 'Perawatan komprehensif sistem pendingin udara (Air Conditioning) dan kelistrikan mobil. Meliputi pengisian freon R134a, pembersihan blower & evaporator, penggantian busi iridium, pengecekan sekring, relay, alternator, dan motor starter.',
                'harga_mulai' => 250000,
                'estimasi_durasi' => '60–90 menit',
                'gambar' => 'layanan-busi-listrik.jpg',
            ],
        ];

        foreach ($layanan as $item) {
            Layanan::create($item);
        }
    }
}
