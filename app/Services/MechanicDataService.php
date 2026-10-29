<?php

namespace App\Services;

class MechanicDataService
{
    /**
     * Get all primary quick services.
     *
     * @return array<string, array<string, mixed>>
     */
    public static function getServices(): array
    {
        return [
            'ganti-aki' => [
                'slug' => 'ganti-aki',
                'title' => 'Ganti Aki Mobil & Battery Care',
                'short_title' => 'Ganti Aki',
                'badge' => 'Garansi s/d 24 Bulan',
                'duration' => '15 Menit',
                'price_start' => 'Rp 780.000',
                'icon' => 'battery',
                'summary' => 'Layanan penggantian aki mobil bergaransi resmi nasional. Termasuk gratis tes kondisi aki, alternator, tukar tambah aki lama, dan pemasangan bebas antri.',
                'description' => 'Aki mobil adalah jantung kelistrikan kendaraan Anda. AutoDrive menyediakan aki mobil 100% original dari merek terkemuka seperti GS Astra dan Incoe dengan jaminan garansi resmi nasional hingga 24 bulan yang dapat diklaim di seluruh gerai kami di Indonesia. Teknisi kami menggunakan alat Battery Tester digital presisi tinggi untuk memeriksa kondisi kesehatan aki (SOH) dan pengisian alternator sebelum penggantian.',
                'benefits' => [
                    'Garansi Resmi Nasional hingga 24 bulan (bisa klaim di seluruh outlet)',
                    'Gratis pengetesan voltase aki, cranking test, dan alternator',
                    'Tukar tambah aki lama dihargai tinggi hingga Rp 150.000',
                    'Gratis biaya pemasangan dan pembersihan terminal aki anti-karat',
                    'Layanan Antar Pasang Cepat (Home Service) siap meluncur ke lokasi Anda',
                ],
                'products' => [
                    ['brand' => 'GS Astra Calcium', 'type' => 'Maintenance Free (Kering)', 'warranty' => '24 Bulan', 'best_for' => 'Mobil modern dengan fitur Idling Stop / start-stop'],
                    ['brand' => 'GS Astra MF (Maintenance Free)', 'type' => 'Bebas Perawatan', 'warranty' => '18 Bulan', 'best_for' => 'Mobil keluarga & harian serbaguna'],
                    ['brand' => 'GS Astra Hybrid', 'type' => 'Penguapan Rendah', 'warranty' => '12 Bulan', 'best_for' => 'Ketahanan iklim tropis & mobilitas tinggi'],
                    ['brand' => 'Incoe Gold & MF', 'type' => 'Aki Handal Ekonomis', 'warranty' => '12 Bulan', 'best_for' => 'Kebutuhan mobil harian dengan efisiensi biaya'],
                ],
                'faqs' => [
                    ['q' => 'Berapa lama proses penggantian aki mobil?', 'a' => 'Hanya memerlukan waktu 10 hingga 15 menit saja dengan metode back-up memory ECU sehingga pengaturan audio dan jam mobil tetap aman.'],
                    ['q' => 'Apakah aki lama saya bisa ditukar tambah?', 'a' => 'Bisa, aki bekas Anda akan dihargai hingga Rp 150.000 dan langsung memotong harga pembelian aki baru.'],
                    ['q' => 'Bagaimana jika mobil saya mogok di rumah atau jalan?', 'a' => 'Cukup pesan via Layanan Home Service atau Hotline Darurat 24 Jam, mekanik kami akan segera mengantar dan memasang aki baru langsung di tempat Anda.'],
                ],
            ],

            'ganti-oli' => [
                'slug' => 'ganti-oli',
                'title' => 'Quick Oil Change & Filter',
                'short_title' => 'Ganti Oli',
                'badge' => '100% Oli Original',
                'duration' => '20 Menit',
                'price_start' => 'Rp 320.000',
                'icon' => 'oil',
                'summary' => 'Penggantian oli mesin berstandar pabrikan menggunakan mesin vacuum suction modern tanpa merusak baut karter oli. Termasuk gratis 11 poin cek vital mobil.',
                'description' => 'Menjaga pelumasan mesin adalah kunci usia panjang kendaraan Anda. Kami hanya menyalurkan pelumas resmi tersertifikasi API SN/SP dan ILSAC GF-6 dari produsen pelumas terkemuka di dunia. Dengan metode penyedotan vakum terkomputerisasi, seluruh endapan oli bekas di dasar karter mesin terhisap tuntas tanpa resiko slek pada ulir baut karter.',
                'benefits' => [
                    'Jaminan 100% Oli Original tersegel resmi (Shell, Motul, Mobil 1, Castrol, Fastron)',
                    'Pengurasan vacuum suction higienis dan tuntas tanpa tetesan kotor',
                    'Gratis penggantian gasket baut karter baru',
                    'Gratis pengecekan filter oli mesin dan filter udara',
                    'Termasuk Gratis 11 Poin Pengecekan Vital Kendaraan',
                ],
                'products' => [
                    ['brand' => 'Shell Helix Ultra 0W-20 / 5W-30', 'type' => 'Fully Synthetic PurePlus', 'warranty' => '10.000 KM', 'best_for' => 'Mobil modern LCGC, Sedan, MPV bensin terbaru'],
                    ['brand' => 'Motul H-Tech 100 Plus 0W-20 / 5W-30', 'type' => '100% Synthetic Premium', 'warranty' => '10.000 KM', 'best_for' => 'Performa akselerasi tinggi & perlindungan gesekan ekstrem'],
                    ['brand' => 'Mobil 1 Triple Action Power+ 0W-20 / 5W-30', 'type' => 'Advanced Synthetic', 'warranty' => '10.000 KM', 'best_for' => 'SUV, MPV Mewah & Mesin Turbo'],
                    ['brand' => 'Pertamina Fastron Gold / Diesel', 'type' => 'Synthetic Force', 'warranty' => '10.000 KM', 'best_for' => 'Kendaraan bensin & diesel common rail populer'],
                ],
                'faqs' => [
                    ['q' => 'Berapa interval waktu terbaik untuk ganti oli?', 'a' => 'Direkomendasikan setiap 5.000 km atau 6 bulan untuk oli semi sintetik, dan 10.000 km atau 6-12 bulan untuk oli fully synthetic.'],
                    ['q' => 'Apakah filter oli harus diganti setiap kali ganti oli?', 'a' => 'Sangat dianjurkan ganti filter oli bersamaan dengan penggantian oli mesin agar kotoran yang tertampung di filter lama tidak mencemari oli baru.'],
                ],
            ],

            'shock-absorber' => [
                'slug' => 'shock-absorber',
                'title' => 'Shock Absorber & Suspensi Kaki-Kaki',
                'short_title' => 'Shock Absorber',
                'badge' => 'Partner Resmi KYB',
                'duration' => '45 - 60 Menit',
                'price_start' => 'Rp 550.000',
                'icon' => 'shock',
                'summary' => 'Pemeriksaan performa suspensi gratis dan penggantian shock absorber presisi menggunakan suku cadang original Kayaba (KYB) bergaransi resmi.',
                'description' => 'Sistem peredam kejut menjamin stabilitas berkendara dan kenyamanan seluruh penumpang di berbagai kontur jalan. Kami merupakan mitra distribusi resmi Kayaba (KYB) Indonesia. Pemeriksaan suspensi dilakukan dengan teliti memeriksa kebocoran oli suspensi, karet boot, bushing arm, dan stabilitas rebound.',
                'benefits' => [
                    'Gratis pengetesan kebocoran dan daya redam shock absorber',
                    'Suku cadang 100% Original KYB (Kayaba Astra Otoparts)',
                    'Garansi resmi hingga 6 bulan untuk pemasangan di outlet kami',
                    'Meningkatkan pengendalian mobil saat menikung tajam dan pengereman',
                    'Mencegah keausan telapak ban yang bergelombang atau tidak merata',
                ],
                'products' => [
                    ['brand' => 'KYB Excel-G (Gas)', 'type' => 'Twin Tube Gas Shock', 'warranty' => '6 Bulan', 'best_for' => 'Kenyamanan empuk & kestabilan kecepatan tinggi'],
                    ['brand' => 'KYB Ultra (Gas)', 'type' => 'Heavy Duty Gas Shock', 'warranty' => '6 Bulan', 'best_for' => 'Muatan berat, MPV keluarga, dan jalanan bergelombang'],
                    ['brand' => 'KYB Premium (Oil)', 'type' => 'Hydraulic Oil Shock', 'warranty' => '6 Bulan', 'best_for' => 'Karakter suspensi lembut untuk kenyamanan harian'],
                ],
                'faqs' => [
                    ['q' => 'Apa gejala shock absorber mobil sudah rusak?', 'a' => 'Mobil terasa limbung saat belok, timbul bunyi gluduk di jalan rusak, jarak pengereman bertambah, atau terlihat rembesan oli pada tabung shock.'],
                ],
            ],

            'ban-spooring' => [
                'slug' => 'ban-spooring',
                'title' => 'Ban, Spooring 3D & Balancing Roda',
                'short_title' => 'Ban & Spooring',
                'badge' => '3D Laser Alignment',
                'duration' => '30 - 45 Menit',
                'price_start' => 'Rp 180.000',
                'icon' => 'tire',
                'summary' => 'Penyetelan sudut roda presisi komputer 3D, penyeimbangan dinamis roda, dan pilihan ban original berkualitas tinggi untuk kenyamanan dan keselamatan berkendara.',
                'description' => 'Sudut keselarasan roda (Camber, Caster, Toe) yang berubah akibat benturan jalanan berlubang menyebabkan stir membuang ke satu sisi dan ban cepat habis sebelah. Di gerai Super Service kami, peralatan 3D Laser Alignment mutakhir mengembalikan posisi roda ke spesifikasi pabrikan secara presisi.',
                'benefits' => [
                    'Teknologi 3D Computerized Laser Alignment dengan database seluruh mobil',
                    'Dynamic wheel balancing untuk menghilangkan getaran pada stir',
                    'Pilihan ban baru original Bridgestone, Dunlop, GT Radial, Michelin',
                    'Gratis pengisian Nitrogen murni (N2) untuk menjaga suhu ban stabil',
                    'Pemeriksaan ketebalan tapak dan indikator batas keausan ban (TWI)',
                ],
                'products' => [
                    ['brand' => 'Bridgestone Ecopia & Turanza', 'type' => 'Quiet & Fuel Efficiency', 'warranty' => 'Garansi Pabrik', 'best_for' => 'Mobil keluarga dengan efisiensi BBM tinggi & kesenyapan maksimal'],
                    ['brand' => 'Dunlop Enasave & SP Touring', 'type' => 'Durable & All-weather', 'warranty' => 'Garansi Pabrik', 'best_for' => 'Daya tahan tinggi di segala kondisi jalan Indonesia'],
                    ['brand' => 'GT Radial Champiro', 'type' => 'Comfort & Value', 'warranty' => 'Garansi Pabrik', 'best_for' => 'Pilihan ban ekonomis dengan performa cengkeram optimal'],
                ],
                'faqs' => [
                    ['q' => 'Kapan mobil harus dilakukan spooring dan balancing?', 'a' => 'Disarankan setiap 10.000 km atau saat setir terasa menarik ke kiri/kanan, atau ketika setir bergetar pada kecepatan 60-100 km/jam.'],
                ],
            ],

            'tune-up' => [
                'slug' => 'tune-up',
                'title' => 'Tune Up & Carbon Clean Mesin',
                'short_title' => 'Tune Up',
                'badge' => 'Performa Kembali Baru',
                'duration' => '35 Menit',
                'price_start' => 'Rp 250.000',
                'icon' => 'tuneup',
                'summary' => 'Pembersihan ruang bakar dari kerak karbon, injector cleaner, pembersihan throttle body, dan pengecekan pengapian untuk tarikan enteng dan konsumsi BBM hemat.',
                'description' => 'Kerak karbon yang menumpuk di piston dan klep akibat sisa pembakaran membuat mesin knocking (ngelitik), tarikan lemot, dan konsumsi bensin boros. Layanan Tune Up & Carbon Clean kami membersihkan kerak tanpa perlu turun mesin (overhaul).',
                'benefits' => [
                    'Membersihkan deposit kerak karbon di ruang bakar mesin',
                    'Pembersihan throttle body & sensor intake udara',
                    'Mengatasi keluhan mesin ngelitik (knocking) & tarikan berat',
                    'Mengoptimalkan efisiensi konsumsi bahan bakar hingga 15%',
                    'Pengecekan dan pembersihan celah busi dan koil pengapian',
                ],
                'products' => [
                    ['brand' => 'AutoDrive Carbon Cleaner Pro', 'type' => 'Chemical Foam Descaling', 'warranty' => 'Formula Aman Katup', 'best_for' => 'Membersihkan kepala piston & ruang bakar'],
                    ['brand' => 'Injector Cleaner Treatment', 'type' => 'Fuel System Purge', 'warranty' => 'Aman untuk O2 Sensor', 'best_for' => 'Mengembalikan semprotan nosel injektor agar kabut halus'],
                ],
                'faqs' => [
                    ['q' => 'Apakah pembersihan carbon clean aman untuk mesin?', 'a' => 'Sangat aman. Kami menggunakan cairan chemical formula khusus non-korosif yang melunakkan deposit karbon lalu disedot tuntas dengan tabung vakum.'],
                ],
            ],

            'gratis-11-poin-cek' => [
                'slug' => 'gratis-11-poin-cek',
                'title' => 'Gratis 11 Poin Pengecekan Vital Mobil',
                'short_title' => '11 Poin Cek Gratis',
                'badge' => '100% GRATIS (Rp 0)',
                'duration' => '10 Menit',
                'price_start' => 'GRATIS',
                'icon' => 'check-shield',
                'summary' => 'Pemeriksaan standar komprehensif tanpa biaya di setiap transaksi untuk memastikan mobil Anda selalu siap jalan aman dan nyaman.',
                'description' => 'Di AutoDrive Quick Service, keselamatan dan ketenangan berkendara pelanggan adalah prioritas utama kami. Oleh karena itu, setiap mobil yang datang ke outlet kami berhak mendapatkan pemeriksaan 11 komponen vital secara GRATIS oleh mekanik tersertifikasi.',
                'benefits' => [
                    'Pengecekan Tegangan & Kondisi Aki (Battery Health)',
                    'Pengecekan Level & Kondisi Fisik Oli Mesin',
                    'Pengecekan Volume Minyak Rem & Minyak Kopling',
                    'Pengecekan Air Radiator Coolant & Tabung Reservoir',
                    'Pengecekan Tekanan & Kondisi Telapak Ban',
                    'Pengecekan Karet Wiper & Air Pembersih Kaca',
                    'Pengecekan Kebersihan Filter Udara Mesin',
                    'Pengecekan Kebersihan Filter AC Kabin',
                    'Pengecekan Fungsi Seluruh Lampu Eksterior Mobil',
                    'Pengecekan Kekencangan & Keretakan Fanbelt Mesin',
                    'Poles Semir Ban Gratis (Tire Dressing Glossy)',
                ],
                'products' => [],
                'faqs' => [
                    ['q' => 'Apakah ada syarat untuk mendapatkan 11 Poin Cek Gratis?', 'a' => 'Tidak ada syarat khusus. Setiap transaksi layanan apa pun atau kunjungan cek ringan berhak menerima 11 poin inspeksi ini.'],
                ],
            ],

            'home-service' => [
                'slug' => 'home-service',
                'title' => 'Layanan Antar Pasang Aki & Oli (Home Service 24/7)',
                'short_title' => 'Home Service',
                'badge' => 'Bebas Biaya Kirim & Pasang',
                'duration' => 'Tiba 30 - 45 Menit',
                'price_start' => 'Hanya Bayar Produk',
                'icon' => 'van',
                'summary' => 'Mobil mogok di rumah, kantor, atau pinggir jalan? Mekanik profesional kami siap datang mengantar dan memasang aki atau ganti oli di lokasi Anda.',
                'description' => 'Nikmati kemudahan perawatan mobil tanpa perlu keluar rumah atau membuang waktu di kemacetan. Layanan Home Service AutoDrive siap melayani panggilan ganti aki dan ganti oli ke tempat tinggal, kantor, mall, maupun kondisi darurat di jalanan.',
                'benefits' => [
                    'Bebas biaya antar dan biaya pasang (hanya bayar produk yang dibeli)',
                    'Teknisi berseragam resmi dan peralatan kerja berstandar tinggi',
                    'Estimasi kedatangan mekanik 30 - 45 menit setelah konfirmasi',
                    'Pilihan pembayaran mudah: Cash, Transfer Bank, QRIS, atau Kartu EDC',
                    'Tetap mendapatkan struk resmi dan kartu garansi nasional',
                ],
                'products' => [],
                'faqs' => [
                    ['q' => 'Berapa biaya tambahan untuk layanan Home Service?', 'a' => 'GRATIS! Anda hanya membayar harga aki atau oli sesuai harga resmi toko tanpa biaya antar atau biaya jasa pasang.'],
                    ['q' => 'Bagaimana cara memanggil Home Service?', 'a' => 'Anda bisa mengisi form booking online di website ini, klik tombol WhatsApp, atau langsung menghubungi hotline darurat 24 jam kami di 1500-015.'],
                ],
            ],
        ];
    }

    /**
     * Get a specific service by slug.
     */
    public static function getServiceBySlug(string $slug): ?array
    {
        $services = self::getServices();

        return $services[$slug] ?? null;
    }

    /**
     * Get active promotions.
     *
     * @return list<array<string, mixed>>
     */
    public static function getPromotions(): array
    {
        return [
            [
                'id' => 1,
                'title' => 'Promo Tukar Tambah Aki Untung Maksimal',
                'category' => 'Aki Mobil',
                'discount' => 'Diskon s/d Rp 150.000',
                'valid_until' => '31 Desember 2026',
                'badge' => 'Terpopuler',
                'solid_color' => 'bg-red-700',
                'description' => 'Tukarkan aki lama mobil Anda merek apa pun dan kondisi apa pun dengan Aki GS Astra Calcium / MF baru. Dapatkan potongan langsung hingga Rp 150.000 + Garansi Resmi 24 Bulan.',
                'terms' => [
                    'Berlaku untuk semua jenis aki mobil lama (kondisi mati/rusak tetap diterima)',
                    'Berlaku untuk pembelian aki GS Astra MF, Calcium, atau Incoe MF',
                    'Berlaku di seluruh outlet AutoDrive dan layanan Home Service',
                    'Gratis pengetesan alternator kelistrikan sebelum pemasangan',
                ],
            ],
            [
                'id' => 2,
                'title' => 'Paket Ganti Oli Hemat + Gratis Filter Oli',
                'category' => 'Oli Mesin',
                'discount' => 'Hemat Rp 85.000',
                'valid_until' => '15 November 2026',
                'badge' => 'Paket Hemat',
                'solid_color' => 'bg-slate-900',
                'description' => 'Beli 4 Liter Oli Shell Helix / Motul Fully Synthetic, gratis 1 buah Filter Oli Original + Gratis 11 Poin Pengecekan Vital Kendaraan.',
                'terms' => [
                    'Berlaku untuk pembelian oli 4 Liter tipe Shell Helix HX7, HX8, Ultra atau Motul H-Tech',
                    'Gratis filter oli standar mobil bensin (Toyota, Daihatsu, Honda, Suzuki, Mitsubishi)',
                    'Pengurasan menggunakan mesin vacuum modern tanpa ongkos jasa',
                ],
            ],
            [
                'id' => 3,
                'title' => 'Super Combo Spooring 3D + Balancing + Nitrogen',
                'category' => 'Kaki-kaki & Ban',
                'discount' => 'Diskon 30%',
                'valid_until' => '30 November 2026',
                'badge' => 'Super Service',
                'solid_color' => 'bg-emerald-800',
                'description' => 'Penyetelan sudut roda 3D laser wheel alignment untuk 4 roda + balancing 2 roda depan + gratis kuras & isi nitrogen murni 4 ban.',
                'terms' => [
                    'Khusus berlaku di outlet Super Shop AutoDrive yang memiliki fasilitas spooring',
                    'Maksimum ukuran velg ring 20',
                    'Termasuk gratis pemeriksaan ketebalan ban dan rotasi ban',
                ],
            ],
            [
                'id' => 4,
                'title' => 'Paket Perjalanan Aman: Tune Up + Carbon Clean',
                'category' => 'Performa Mesin',
                'discount' => 'Spesial Rp 349.000',
                'valid_until' => '31 Desember 2026',
                'badge' => 'Rekomendasi Mekanik',
                'solid_color' => 'bg-amber-600',
                'description' => 'Paket lengkap pembersihan kerak ruang bakar mesin dengan chemical foam + injector cleaner purge + pembersihan throttle body.',
                'terms' => [
                    'Berlaku untuk semua mobil bensin 3-silinder dan 4-silinder',
                    'Mengembalikan akselerasi tarikan dan konsumsi bensin yang boros',
                    'Pengerjaan 35-45 menit tanpa bongkar mesin',
                ],
            ],
        ];
    }

    /**
     * Get branch outlets list.
     *
     * @return list<array<string, mixed>>
     */
    public static function getOutlets(): array
    {
        return [
            [
                'id' => 1,
                'name' => 'AutoDrive Fatmawati (Super Outlet 24 Jam)',
                'city' => 'Jakarta Selatan',
                'region' => 'DKI Jakarta',
                'address' => 'Jl. RS Fatmawati No. 42B, Cilandak, Jakarta Selatan',
                'phone' => '(021) 7590-1234',
                'whatsapp' => '6281234567801',
                'is_24_hours' => true,
                'is_super_shop' => true,
                'features' => ['Buka 24 Jam Non-Stop', 'Super Shop (Ban & Spooring 3D)', 'Home Service', 'Ruang Tunggu AC & Free WiFi'],
                'google_maps' => 'https://maps.google.com/?q=AutoDrive+Fatmawati+Jakarta',
            ],
            [
                'id' => 2,
                'name' => 'AutoDrive Kebon Jeruk (Super Outlet)',
                'city' => 'Jakarta Barat',
                'region' => 'DKI Jakarta',
                'address' => 'Jl. Panjang No. 88, Kebon Jeruk, Jakarta Barat',
                'phone' => '(021) 5367-5678',
                'whatsapp' => '6281234567802',
                'is_24_hours' => false,
                'is_super_shop' => true,
                'features' => ['Buka Setiap Hari (08.00 - 21.00)', 'Super Shop (Ban & Spooring 3D)', 'Home Service', 'Free Coffee'],
                'google_maps' => 'https://maps.google.com/?q=AutoDrive+Kebon+Jeruk+Jakarta',
            ],
            [
                'id' => 3,
                'name' => 'AutoDrive Rawamangun (Buka 24 Jam)',
                'city' => 'Jakarta Timur',
                'region' => 'DKI Jakarta',
                'address' => 'Jl. Pemuda No. 12, Rawamangun, Jakarta Timur',
                'phone' => '(021) 4786-9012',
                'whatsapp' => '6281234567803',
                'is_24_hours' => true,
                'is_super_shop' => false,
                'features' => ['Buka 24 Jam Non-Stop', 'Quick Service Aki & Oli', 'Home Service 24 Jam', 'Ruang Tunggu'],
                'google_maps' => 'https://maps.google.com/?q=AutoDrive+Rawamangun+Jakarta',
            ],
            [
                'id' => 4,
                'name' => 'AutoDrive Kelapa Gading (Super Outlet)',
                'city' => 'Jakarta Utara',
                'region' => 'DKI Jakarta',
                'address' => 'Jl. Boulevard Barat Raya Blok LC7 No. 2, Kelapa Gading, Jakarta Utara',
                'phone' => '(021) 4584-3456',
                'whatsapp' => '6281234567804',
                'is_24_hours' => false,
                'is_super_shop' => true,
                'features' => ['Buka Setiap Hari (08.00 - 21.00)', 'Super Shop (Ban & Spooring 3D)', 'Home Service', 'Musholla & Toilet'],
                'google_maps' => 'https://maps.google.com/?q=AutoDrive+Kelapa+Gading+Jakarta',
            ],
            [
                'id' => 5,
                'name' => 'AutoDrive BSD City (Super Outlet)',
                'city' => 'Tangerang Selatan',
                'region' => 'Banten',
                'address' => 'Ruko BSD Sektor VII Blok RN No. 15, BSD City, Tangerang Selatan',
                'phone' => '(021) 537-8899',
                'whatsapp' => '6281234567805',
                'is_24_hours' => false,
                'is_super_shop' => true,
                'features' => ['Buka Setiap Hari (08.00 - 20.00)', 'Super Shop (Ban & Spooring 3D)', 'Home Service', 'Koneksi WiFi Cepat'],
                'google_maps' => 'https://maps.google.com/?q=AutoDrive+BSD+City',
            ],
            [
                'id' => 6,
                'name' => 'AutoDrive Dago (Ir. H. Djuanda)',
                'city' => 'Bandung',
                'region' => 'Jawa Barat',
                'address' => 'Jl. Ir. H. Djuanda No. 195, Dago, Bandung',
                'phone' => '(022) 250-4567',
                'whatsapp' => '6281234567806',
                'is_24_hours' => false,
                'is_super_shop' => false,
                'features' => ['Buka Setiap Hari (08.00 - 20.00)', 'Quick Service Aki & Oli', 'Home Service', 'Pusat Kota'],
                'google_maps' => 'https://maps.google.com/?q=AutoDrive+Dago+Bandung',
            ],
            [
                'id' => 7,
                'name' => 'AutoDrive Soekarno Hatta (Super Outlet)',
                'city' => 'Bandung',
                'region' => 'Jawa Barat',
                'address' => 'Jl. Soekarno Hatta No. 472, Batununggal, Bandung',
                'phone' => '(022) 731-8901',
                'whatsapp' => '6281234567807',
                'is_24_hours' => true,
                'is_super_shop' => true,
                'features' => ['Buka 24 Jam Non-Stop', 'Super Shop (Ban & Spooring 3D)', 'Home Service', 'Akses Mudah Jalur Bypass'],
                'google_maps' => 'https://maps.google.com/?q=AutoDrive+Soekarno+Hatta+Bandung',
            ],
            [
                'id' => 8,
                'name' => 'AutoDrive Manyar Kertoarjo (Super Outlet 24 Jam)',
                'city' => 'Surabaya',
                'region' => 'Jawa Timur',
                'address' => 'Jl. Manyar Kertoarjo No. 58, Gubeng, Surabaya',
                'phone' => '(031) 592-3456',
                'whatsapp' => '6281234567808',
                'is_24_hours' => true,
                'is_super_shop' => true,
                'features' => ['Buka 24 Jam Non-Stop', 'Super Shop (Ban & Spooring 3D)', 'Home Service Surabaya Timur', 'Lounge Nyaman'],
                'google_maps' => 'https://maps.google.com/?q=AutoDrive+Manyar+Surabaya',
            ],
            [
                'id' => 9,
                'name' => 'AutoDrive HR Muhammad (Super Outlet)',
                'city' => 'Surabaya',
                'region' => 'Jawa Timur',
                'address' => 'Jl. HR Muhammad No. 92, Sukomanunggal, Surabaya Barat',
                'phone' => '(031) 734-7890',
                'whatsapp' => '6281234567809',
                'is_24_hours' => false,
                'is_super_shop' => true,
                'features' => ['Buka Setiap Hari (08.00 - 21.00)', 'Super Shop (Ban & Spooring 3D)', 'Home Service Surabaya Barat'],
                'google_maps' => 'https://maps.google.com/?q=AutoDrive+HR+Muhammad+Surabaya',
            ],
            [
                'id' => 10,
                'name' => 'AutoDrive Pemuda (Super Outlet)',
                'city' => 'Semarang',
                'region' => 'Jawa Tengah',
                'address' => 'Jl. Pemuda No. 138, Sekayu, Semarang Tengah',
                'phone' => '(024) 355-6789',
                'whatsapp' => '6281234567810',
                'is_24_hours' => false,
                'is_super_shop' => true,
                'features' => ['Buka Setiap Hari (08.00 - 20.00)', 'Super Shop (Ban & Spooring 3D)', 'Home Service'],
                'google_maps' => 'https://maps.google.com/?q=AutoDrive+Pemuda+Semarang',
            ],
            [
                'id' => 11,
                'name' => 'AutoDrive Gatot Subroto (Super Outlet)',
                'city' => 'Medan',
                'region' => 'Sumatera Utara',
                'address' => 'Jl. Gatot Subroto No. 204, Medan Sunggal, Medan',
                'phone' => '(061) 845-2345',
                'whatsapp' => '6281234567811',
                'is_24_hours' => false,
                'is_super_shop' => true,
                'features' => ['Buka Setiap Hari (08.00 - 20.00)', 'Super Shop (Ban & Spooring 3D)', 'Home Service Medan'],
                'google_maps' => 'https://maps.google.com/?q=AutoDrive+Medan',
            ],
            [
                'id' => 12,
                'name' => 'AutoDrive Sunset Road (Super Outlet)',
                'city' => 'Denpasar & Badung',
                'region' => 'Bali',
                'address' => 'Jl. Sunset Road No. 88X, Kuta, Badung, Bali',
                'phone' => '(0361) 765-4321',
                'whatsapp' => '6281234567812',
                'is_24_hours' => true,
                'is_super_shop' => true,
                'features' => ['Buka 24 Jam Non-Stop', 'Super Shop (Ban & Spooring 3D)', 'Emergency Roadside Assistance Bali'],
                'google_maps' => 'https://maps.google.com/?q=AutoDrive+Sunset+Road+Bali',
            ],
        ];
    }

    /**
     * Database of car specifications for the interactive recommendation tool.
     *
     * @return list<array<string, mixed>>
     */
    public static function getCarDatabase(): array
    {
        return [
            [
                'brand' => 'Toyota',
                'model' => 'Avanza / Veloz (2012 - Sekarang)',
                'engine' => '1.3L & 1.5L Dual VVT-i',
                'battery_type' => 'NS40 / 34B19R',
                'battery_spec' => '12V 32Ah - 35Ah',
                'battery_rec' => 'GS Astra MF NS40 / Calcium',
                'oil_viscosity' => '0W-20 / 5W-30 Fully Synthetic',
                'oil_capacity' => '3.5 Liter (termasuk filter oli)',
                'oil_rec' => 'Shell Helix Ultra 0W-20 / Motul H-Tech 5W-30',
                'shock_rec' => 'KYB Excel-G Gas Shock',
                'tire_size' => '185/65 R15 atau 195/60 R16',
            ],
            [
                'brand' => 'Toyota',
                'model' => 'Innova Reborn Bensin (2016 - Sekarang)',
                'engine' => '2.0L 1TR-FE Dual VVT-i',
                'battery_type' => '55D23L / 65D23L',
                'battery_spec' => '12V 60Ah - 65Ah',
                'battery_rec' => 'GS Astra MF 55D23L / Incoe MF',
                'oil_viscosity' => '5W-30 / 0W-20 Fully Synthetic',
                'oil_capacity' => '5.6 Liter',
                'oil_rec' => 'Mobil 1 Triple Action 5W-30',
                'shock_rec' => 'KYB Ultra Heavy Duty Gas',
                'tire_size' => '205/65 R16 atau 215/55 R17',
            ],
            [
                'brand' => 'Toyota',
                'model' => 'Innova Reborn Diesel (2016 - Sekarang)',
                'engine' => '2.4L 2GD-FTV Turbo Diesel',
                'battery_type' => '80D26L / NX110-5L',
                'battery_spec' => '12V 70Ah - 75Ah High CCA',
                'battery_rec' => 'GS Astra MF 80D26L High Durability',
                'oil_viscosity' => '5W-30 / 10W-40 Common Rail Diesel',
                'oil_capacity' => '6.5 Liter',
                'oil_rec' => 'Pertamina Fastron Diesel 5W-30 / Mobil Delvac',
                'shock_rec' => 'KYB Ultra Heavy Duty Gas',
                'tire_size' => '205/65 R16 atau 215/55 R17',
            ],
            [
                'brand' => 'Toyota',
                'model' => 'Calya / Daihatsu Sigra',
                'engine' => '1.0L 1KR-VE / 1.2L 3NR-VE',
                'battery_type' => 'NS40ZL / 34B19L',
                'battery_spec' => '12V 35Ah Pole Kiri',
                'battery_rec' => 'GS Astra MF NS40ZL / Hybrid',
                'oil_viscosity' => '0W-20 Eco Engine Oil',
                'oil_capacity' => '3.2 Liter',
                'oil_rec' => 'Shell Helix Eco 0W-20',
                'shock_rec' => 'KYB Excel-G Gas',
                'tire_size' => '175/65 R14',
            ],
            [
                'brand' => 'Toyota',
                'model' => 'Raize / Daihatsu Rocky',
                'engine' => '1.0L Turbo 1KR-VET / 1.2L WA-VE',
                'battery_type' => 'NS40ZL (Q85 jika Start-Stop ISS)',
                'battery_spec' => '12V 35Ah - 45Ah EFB',
                'battery_rec' => 'GS Astra Calcium MF NS40ZL',
                'oil_viscosity' => '0W-20 Fully Synthetic',
                'oil_capacity' => '3.3 Liter',
                'oil_rec' => 'Motul H-Tech 0W-20',
                'shock_rec' => 'KYB Excel-G',
                'tire_size' => '205/60 R17 atau 205/65 R16',
            ],
            [
                'brand' => 'Honda',
                'model' => 'Brio / Mobilio / BR-V',
                'engine' => '1.2L & 1.5L i-VTEC',
                'battery_type' => '34B19L / NS40ZL',
                'battery_spec' => '12V 35Ah',
                'battery_rec' => 'GS Astra MF 34B19L / Calcium',
                'oil_viscosity' => '0W-20 / 5W-30 Fully Synthetic',
                'oil_capacity' => '3.6 Liter',
                'oil_rec' => 'Shell Helix Ultra 0W-20 / Motul 0W-20',
                'shock_rec' => 'KYB Excel-G Gas Shock',
                'tire_size' => '175/65 R14 atau 185/55 R15',
            ],
            [
                'brand' => 'Honda',
                'model' => 'HR-V (Gen 2 & Gen 3)',
                'engine' => '1.5L i-VTEC / 1.5L VTEC Turbo',
                'battery_type' => '46B24L / NS60L',
                'battery_spec' => '12V 45Ah',
                'battery_rec' => 'GS Astra MF 46B24L Maintenance Free',
                'oil_viscosity' => '0W-20 Fully Synthetic',
                'oil_capacity' => '3.8 Liter',
                'oil_rec' => 'Mobil 1 0W-20 / Motul H-Tech 0W-20',
                'shock_rec' => 'KYB Excel-G',
                'tire_size' => '215/55 R17 atau 225/50 R18',
            ],
            [
                'brand' => 'Mitsubishi',
                'model' => 'Xpander / Xpander Cross',
                'engine' => '1.5L MIVEC DOHC',
                'battery_type' => '55D23L',
                'battery_spec' => '12V 60Ah',
                'battery_rec' => 'GS Astra MF 55D23L / Incoe MF',
                'oil_viscosity' => '0W-20 / 5W-30 Fully Synthetic',
                'oil_capacity' => '4.0 Liter',
                'oil_rec' => 'Shell Helix Ultra 0W-20 / Motul 5W-30',
                'shock_rec' => 'KYB Excel-G Gas Shock',
                'tire_size' => '205/55 R17 atau 195/65 R15',
            ],
            [
                'brand' => 'Mitsubishi',
                'model' => 'Pajero Sport Diesel',
                'engine' => '2.4L 4N15 MIVEC Turbo Diesel',
                'battery_type' => '105D31L / NX120-7L',
                'battery_spec' => '12V 80Ah - 90Ah High Crank',
                'battery_rec' => 'GS Astra MF 105D31L Heavy Duty',
                'oil_viscosity' => '5W-30 Fully Synthetic Diesel',
                'oil_capacity' => '8.0 Liter',
                'oil_rec' => 'Pertamina Fastron Diesel / Shell Rimula R6',
                'shock_rec' => 'KYB Ultra Heavy Duty',
                'tire_size' => '265/60 R18',
            ],
            [
                'brand' => 'Suzuki',
                'model' => 'Ertiga / XL7 (Bensin & Hybrid)',
                'engine' => '1.5L K15B / K15C SHVS',
                'battery_type' => 'NS40ZL / 42B19L',
                'battery_spec' => '12V 35Ah - 42Ah',
                'battery_rec' => 'GS Astra Calcium MF NS40ZL',
                'oil_viscosity' => '0W-20 Fully Synthetic',
                'oil_capacity' => '3.5 Liter',
                'oil_rec' => 'Shell Helix Ultra 0W-20',
                'shock_rec' => 'KYB Excel-G',
                'tire_size' => '185/65 R15 atau 195/60 R16',
            ],
            [
                'brand' => 'Hyundai',
                'model' => 'Creta / Stargazer',
                'engine' => 'Smartstream G 1.5L MPI',
                'battery_type' => 'DIN 55 / DIN 60 (LBN2)',
                'battery_spec' => '12V 55Ah - 60Ah Tipe DIN Eropa/Korea',
                'battery_rec' => 'GS Astra DIN 55 MF / Incoe DIN',
                'oil_viscosity' => '0W-20 Fully Synthetic',
                'oil_capacity' => '3.8 Liter',
                'oil_rec' => 'Shell Helix Ultra 0W-20',
                'shock_rec' => 'KYB Excel-G',
                'tire_size' => '215/60 R17 atau 205/65 R16',
            ],
            [
                'brand' => 'Wuling',
                'model' => 'Confero / Cortez 1.5 Turbo',
                'engine' => '1.5L DVVT / 1.5L Turbo',
                'battery_type' => 'DIN 55 / 55D23L',
                'battery_spec' => '12V 55Ah - 60Ah',
                'battery_rec' => 'GS Astra DIN 55 / MF 55D23L',
                'oil_viscosity' => '5W-30 Fully Synthetic',
                'oil_capacity' => '4.0 Liter',
                'oil_rec' => 'Motul H-Tech 5W-30',
                'shock_rec' => 'KYB Excel-G',
                'tire_size' => '195/60 R15 atau 205/55 R16',
            ],
        ];
    }

    /**
     * Get automotive care tips and articles.
     *
     * @return list<array<string, mixed>>
     */
    public static function getTips(): array
    {
        return [
            [
                'slug' => '5-tanda-aki-mobil-mulai-lemah',
                'title' => '5 Tanda Aki Mobil Mulai Lemah Sebelum Tiba-tiba Mogok di Jalan',
                'date' => '24 Oktober 2026',
                'category' => 'Tips Kelistrikan',
                'read_time' => '4 menit baca',
                'excerpt' => 'Aki mobil sering kali mati mendadak saat hendak bepergian penting. Kenali 5 sinyal peringatan dini dari kondisi starter hingga bau menyengat.',
                'content' => [
                    'Sering kali pemilik kendaraan baru menyadari aki mobil bermasalah ketika mobil sama sekali tidak bisa distarter saat terburu-buru hendak berangkat ke kantor atau saat berada di parkiran umum. Padahal sebelum benar-benar drop atau mati total, aki mobil sebenarnya selalu memberikan indikasi awal yang mudah dideteksi.',
                    '1. Suara Putaran Starter Terdengar Berat atau Melambat: Ketika Anda memutar kunci kontak atau menekan tombol start-stop, dinamo starter membutuhkan arus listrik yang sangat besar dari aki. Jika putarannya lambat ("ngik-ngik-ngik"), itu pertanda daya Cold Cranking Amps (CCA) aki sudah menurun drastis.',
                    '2. Lampu Utama dan Indikator Dashboard Meredup: Perhatikan sorot lampu depan (headlamp) saat mobil idle sebelum jalan. Jika nyalanya redup dan baru kembali terang ketika pedal gas ditekan, ini menunjukkan pasokan arus dari aki mulai tidak stabil.',
                    '3. Usia Pemakaian Aki Sudah Melampaui 1,5 hingga 2 Tahun: Umur pakai rata-rata aki basah maupun aki kering (Maintenance Free) di iklim tropis berkisar antara 18 hingga 24 bulan. Bila usia aki mobil Anda sudah mendekati batas ini, sangat disarankan melakukan pengetesan voltase berkala di bengkel terpercaya.',
                    '4. Bau Menyengat Seperti Belerang atau Telur Busuk: Bau tidak sedap di sekitar kap mesin menandakan adanya penguapan berlebih akibat overcharging atau sel internal aki yang mulai rusak dan bocor.',
                    '5. Dinding Fisik Aki Terlihat Kembung / Menggelembung: Panas ekstrem di ruang mesin dan over-charging dapat membuat casing plastik aki menggembung. Bila ini terjadi, aki harus segera diganti karena beresiko korsleting atau meledak.',
                ],
            ],
            [
                'slug' => 'kapan-waktu-tepat-spooring-dan-balancing',
                'title' => 'Kapan Waktu Tepat Spooring dan Balancing Mobil Anda?',
                'date' => '18 Oktober 2026',
                'category' => 'Kaki-kaki & Ban',
                'read_time' => '5 menit baca',
                'excerpt' => 'Setir bergetar atau mobil melenceng sendiri ke tepi jalan? Pahami perbedaan spooring vs balancing serta jadwal ideal penyetelannya.',
                'content' => [
                    'Banyak pengemudi menganggap spooring dan balancing adalah hal yang sama. Padahal keduanya merupakan dua perawatan yang berbeda namun saling melengkapi untuk keselamatan dan keawetan ban kendaraan Anda.',
                    'Apa Perbedaan Spooring dan Balancing?',
                    'Spooring (Wheel Alignment) adalah proses penyelarasan sudut-sudut roda (Camber, Caster, dan Toe) agar kembali sesuai dengan standar presisi pabrikan. Tujuannya adalah agar kendaraan dapat melaju lurus tanpa condong menarik ke satu sisi saat kemudi dilepas sejenak.',
                    'Balancing (Wheel Balancing) adalah proses penyeimbangan bobot dinamis pada roda dengan memasang timah penyeimbang (balance weight). Tujuannya adalah menghilangkan getaran pada roda dan kemudi saat mobil melaju pada kecepatan menengah hingga tinggi (60 - 100 km/jam).',
                    'Tanda Mobil Wajib Segera Dilakukan Spooring & Balancing:',
                    '• Setir terasa menarik ke kiri atau ke kanan saat melaju di jalan datar dan lurus.',
                    '• Posisi palang stir miring padahal mobil sedang melaju lurus ke depan.',
                    '• Setir bergetar hebat ketika memasuki kecepatan tertentu di jalan tol.',
                    '• Pola keausan tapak ban tidak rata (misal: habis sebelah dalam atau luar saja).',
                    '• Mobil baru saja menghantam lubang jalan yang dalam atau melindas polisi tidur dengan kecepatan tinggi.',
                ],
            ],
            [
                'slug' => 'bahaya-sludge-oli-dan-cara-mencegahnya',
                'title' => 'Kenapa Wajib Rutin Ganti Oli Tepat Waktu? Ini Bahaya Oil Sludge!',
                'date' => '10 Oktober 2026',
                'category' => 'Perawatan Mesin',
                'read_time' => '4 menit baca',
                'excerpt' => 'Oli yang terlambat diganti akan mengental menjadi lumpur oli hitam pekat (sludge) yang dapat menyumbat jalur pelumasan dan memicu turun mesin.',
                'content' => [
                    'Oli mesin bukan hanya berfungsi sebagai pelumas untuk mengurangi gesekan antar komponen logam di dalam mesin. Oli juga memegang peranan krusial sebagai pendingin temperatur mesin, pembersih jelaga deposit, pelindung korosi karat, dan perapat celah ring piston.',
                    'Seiring berjalannya waktu dan tingginya temperatur kerja mesin dalam kondisi lalu lintas perkotaan yang sering macet (stop-and-go), zat aditif oli akan teroksidasi dan menguap. Bila jadwal ganti oli diabaikan, molekul oli yang rusak akan bercampur dengan residu karbon pembakaran dan berubah wujud menjadi lumpur oli hitam kental yang lengket (dikenal sebagai Oil Sludge).',
                    'Dampak Buruk Terjadinya Oil Sludge:',
                    '1. Tersumbatnya Jalur Saringan Oli (Oil Strainer): Pompa oli tidak mampu menyedot oli kental ini, sehingga komponen vital seperti noken as (camshaft), metal duduk, dan dinding silinder kehilangan pelumasan total.',
                    '2. Suara Mesin Kasar dan Berisik: Timbul suara ketukan logam tajam dari dalam blok mesin.',
                    '3. Overheat Parah & Mesin Terkunci (Jam): Gesekan kering antar logam memicu panas ekstrem hingga piston memuai dan mengunci silinder, yang berujung pada biaya perbaikan turun mesin (overhaul) puluhan juta rupiah.',
                    'Cara Terbaik Menjaga Mesin Tetap Sehat:',
                    'Ganti oli secara teratur setiap 5.000 - 10.000 KM atau maksimal 6 bulan sekali. Di AutoDrive, kami menggunakan metode vacuum suction bertekanan tinggi yang menyedot habis oli bekas hingga ke dasar karter, serta memeriksa filter oli agar mesin selalu teraliri pelumas murni.',
                ],
            ],
        ];
    }

    /**
     * Get satisfied customer testimonials.
     *
     * @return list<array<string, mixed>>
     */
    public static function getTestimonials(): array
    {
        return [
            [
                'name' => 'Bambang Sudibyo',
                'city' => 'Jakarta Selatan',
                'car' => 'Toyota Innova Reborn 2.4 Diesel',
                'rating' => 5,
                'service' => 'Ganti Aki GS Astra MF & Cek 11 Poin',
                'text' => 'Pagi-pagi mobil mogok pas mau antar anak sekolah. Coba kontak Hotline AutoDrive, dalam 35 menit mekanik datang lengkap bawa aki baru dan tester digital. Cepat, ramah, dan aki bekas saya dihargai Rp 150.000 langsung dipotong harga. Luar biasa profesional!',
            ],
            [
                'name' => 'Rina Wijaya',
                'city' => 'Surabaya',
                'car' => 'Honda HR-V 1.5 Prestige',
                'rating' => 5,
                'service' => 'Ganti Oli Shell Ultra & Spooring 3D',
                'text' => 'Bengkelnya sangat bersih dan rapi persis kayak bengkel resmi ATPM ternama. Ruang tunggunya adem ber-AC dengan kopi gratis. Pengerjaan vacuum oli cepat cuma 20 menit dan ada lembar hasil cek 11 poin kendaraan. Sangat transparan tanpa getok harga.',
            ],
            [
                'name' => 'Hendro Setiawan',
                'city' => 'Bandung',
                'car' => 'Mitsubishi Xpander Ultimate',
                'rating' => 5,
                'service' => 'Ganti Shock Absorber KYB & Tune Up',
                'text' => 'Mobil sempat limbung dan berdecit di jalan tol. Teknisi AutoDrive cek suspensi dan rekomendasi ganti shock KYB original. Harganya jauh lebih terjangkau daripada bengkel resmi, ada kartu garansi resminya, dan tarikan mesin langsung enteng lagi setelah tune up!',
            ],
            [
                'name' => 'Agnes Cynthia',
                'city' => 'Tangerang',
                'car' => 'Suzuki Baleno Hatchback',
                'rating' => 5,
                'service' => 'Home Service Ganti Aki',
                'text' => 'Gak perlu repot macet-macetan ke bengkel di hari Sabtu. Booking lewat website malamnya, besok jam 10 mekanik sudah stand by di rumah. Bayar bisa langsung scan QRIS di tempat. Pelayanan bintang lima!',
            ],
        ];
    }

    /**
     * Key company stats.
     *
     * @return array<string, string>
     */
    public static function getCompanyStats(): array
    {
        return [
            'outlets_count' => '120+',
            'cities_count' => '24',
            'cars_served' => '850.000+',
            'years_experience' => '22',
            'warranty_days' => '730 Hari',
            'customer_rating' => '4.9 / 5.0',
        ];
    }
}
