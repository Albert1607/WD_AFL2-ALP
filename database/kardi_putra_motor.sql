-- ============================================================
-- Database Dump: Kardi Putra Motor (MySQL / phpMyAdmin)
-- Generated: 2026-11-04 09:16:17
-- Application: Laravel 11 Company Profile
-- Tables: kategori_layanan, layanan, testimoni, logo_brands
-- ============================================================

SET FOREIGN_KEY_CHECKS=0;
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

-- ------------------------------------------------------------
-- 1. Struktur Tabel `kategori_layanan`
-- ------------------------------------------------------------
DROP TABLE IF EXISTS `kategori_layanan`;
CREATE TABLE `kategori_layanan` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `nama_kategori` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `kategori_layanan_slug_unique` (`slug`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data untuk tabel `kategori_layanan`
INSERT INTO `kategori_layanan` (`id`, `nama_kategori`, `slug`, `deskripsi`, `created_at`, `updated_at`) VALUES
(1, 'Perawatan Rutin', 'perawatan-rutin', 'Layanan perawatan berkala untuk menjaga performa mobil tetap prima. Meliputi ganti oli, tune up, dan pengecekan rutin agar mobil selalu dalam kondisi terbaik.', '2026-11-04 08:59:11', '2026-11-04 08:59:11'),
(2, 'Mesin & Injeksi', 'mesin-injeksi', 'Servis mendalam untuk sistem mesin dan injeksi bahan bakar. Dari tune up injeksi hingga perawatan transmisi untuk performa dan efisiensi bahan bakar yang optimal.', '2026-11-04 08:59:11', '2026-11-04 08:59:11'),
(3, 'Kaki-kaki & Rem', 'kaki-kaki-rem', 'Perawatan sistem suspensi, spooring balancing, pengereman, dan roda mobil. Pastikan kenyamanan berkendara dan keselamatan Anda di jalan.', '2026-11-04 08:59:11', '2026-11-04 08:59:11'),
(4, 'Kelistrikan & Aki', 'kelistrikan-aki', 'Diagnosis dan perbaikan sistem kelistrikan mobil, penggantian aki, busi, dan komponen kelistrikan lainnya agar mobil tidak mogok di jalan.', '2026-11-04 08:59:11', '2026-11-04 08:59:11');

-- ------------------------------------------------------------
-- 2. Struktur Tabel `layanan`
-- ------------------------------------------------------------
DROP TABLE IF EXISTS `layanan`;
CREATE TABLE `layanan` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `kategori_id` bigint(20) UNSIGNED NOT NULL,
  `nama_layanan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `harga_mulai` decimal(10,2) NOT NULL,
  `estimasi_durasi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gambar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `layanan_slug_unique` (`slug`),
  KEY `layanan_kategori_id_index` (`kategori_id`),
  CONSTRAINT `layanan_kategori_id_foreign` FOREIGN KEY (`kategori_id`) REFERENCES `kategori_layanan` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data untuk tabel `layanan`
INSERT INTO `layanan` (`id`, `kategori_id`, `nama_layanan`, `slug`, `deskripsi`, `harga_mulai`, `estimasi_durasi`, `gambar`, `created_at`, `updated_at`) VALUES
(1, 1, 'Ganti Oli Mesin (Oil Service)', 'ganti-oli-mesin', 'Penggantian oli mesin mobil menggunakan oli berkualitas tinggi (Shell Helix, Castrol GTX, Mobil 1) sesuai spesifikasi pabrikan. Termasuk pengecekan level oli, filter oli, dan kondisi mesin secara umum. Menjaga mesin tetap terlumasi sempurna dan mengurangi keausan komponen internal.', 150000.00, '30–45 menit', 'layanan-ganti-oli.jpg', '2026-11-04 08:59:11', '2026-11-04 08:59:11'),
(2, 1, 'Servis Ringan & Filter Kabin', 'servis-ringan', 'Paket servis rutin mencakup ganti oli, pembersihan/penggantian air and cabin filter (filter udara & filter kabin AC), pengecekan rem, tekanan ban, air radiator, serta pembersihan throttle body. Ideal dilakukan berkala setiap 5.000–10.000 km.', 250000.00, '60–90 menit', 'layanan-servis-ringan.jpg', '2026-11-04 08:59:11', '2026-11-04 08:59:11'),
(3, 1, 'Servis Besar (Overhaul)', 'servis-besar-overhaul', 'Paket servis menyeluruh meliputi bongkar mesin ringan, pembersihan ruang bakar (decarbonizing), penggantian paking kepala silinder, setel celah klep, penggantian filter oli, busi, filter udara, serta kalibrasi semua sistem.', 800000.00, '4–8 jam', 'layanan-servis-besar.jpg', '2026-11-04 08:59:11', '2026-11-04 08:59:11'),
(4, 2, 'Vehicle Engine Diagnostic & Tune Up', 'tune-up-injeksi', 'Diagnosis mendalam sistem mesin menggunakan scanner diagnostik digital OBD-II (Vehicle engine diagnostic). Menemukan kode error DTC, membersihkan injektor, throttle body, intake manifold, serta kalibrasi ECU agar mesin bertenaga dan irit bahan bakar.', 350000.00, '90–120 menit', 'layanan-tune-up-injeksi.jpg', '2026-11-04 08:59:11', '2026-11-04 08:59:11'),
(5, 2, 'Servis Transmisi Otomatis', 'servis-transmisi-otomatis', 'Perawatan sistem transmisi otomatis (AT) dan CVT mobil. Meliputi penggantian / flushing oli transmisi, pengecekan torque converter, valve body, dan sensor transmisi. Mencegah selip, hentakan kasar, dan memperpanjang usia gearbox.', 500000.00, '2–3 jam', 'layanan-servis-transmisi.jpg', '2026-11-04 08:59:11', '2026-11-04 08:59:11'),
(6, 3, 'Ganti Kampas Rem (Brakes)', 'ganti-kampas-rem', 'Penggantian kampas rem (brake pads) depan dan/atau belakang original sesuai tipe mobil. Disertai pembersihan kaliper, pengecekan ketebalan piringan cakram, penyetelan rem tangan, dan bleeding minyak rem untuk keselamatan berkendara maksimal.', 180000.00, '45–60 menit', 'layanan-kampas-rem.jpg', '2026-11-04 08:59:11', '2026-11-04 08:59:11'),
(7, 3, 'Servis Rem Cakram & Kaliper', 'servis-rem-cakram', 'Perawatan menyeluruh sistem rem cakram meliputi pembongkaran, pembersihan, dan pelumasan pin kaliper, penggantian seal piston jika bocor, pengurasan minyak rem dengan standar DOT4, serta tes daya henti pengereman.', 300000.00, '60–90 menit', 'layanan-rem-cakram.jpg', '2026-11-04 08:59:11', '2026-11-04 08:59:11'),
(8, 3, 'Spooring & Balancing Roda', 'spooring-balancing', 'Penyetelan sudut keselarasan roda (camber, caster, toe) menggunakan komputer 3D wheel alignment presisi tinggi, serta balancing roda untuk mengeliminasi getaran pada setir dan mencegah ban aus tidak merata.', 250000.00, '60–90 menit', 'layanan-spooring.jpg', '2026-11-04 08:59:11', '2026-11-04 08:59:11'),
(9, 3, 'Ganti Ban Mobil', 'ganti-ban', 'Penggantian ban mobil baru dari berbagai merk ternama (Bridgestone, Dunlop, GT Radial, Hankook). Pemasangan dilakukan dengan tyre changer hidrolik tanpa merusak bibir velg, lengkap dengan pentil tubeless baru dan pengisian nitrogen.', 350000.00, '45–60 menit', 'layanan-ganti-ban.jpg', '2026-11-04 08:59:11', '2026-11-04 08:59:11'),
(10, 3, 'Servis Suspensi & Kaki-kaki', 'servis-suspensi-kaki-kaki', 'Perbaikan dan rekondisi suspensi: shock absorber, link stabilizer, tie rod, rack end, ball joint, dan bushing arm. Menghilangkan bunyi gludug-gludug pada jalan bergelombang dan memulihkan kestabilan berkendara.', 400000.00, '2–4 jam', 'layanan-suspensi.jpg', '2026-11-04 08:59:11', '2026-11-04 08:59:11'),
(11, 4, 'Ganti Aki Mobil (Battery Care)', 'ganti-aki', 'Penggantian aki mobil bergaransi resmi (GS Astra, Yuasa, Incoe) tipe basah maupun Maintenance Free (kering). Termasuk uji voltase alternator, pengetesan cold cranking amps (CCA), dan pembersihan klem aki dari korosi.', 400000.00, '30–45 menit', 'layanan-ganti-aki.jpg', '2026-11-04 08:59:11', '2026-11-04 08:59:11'),
(12, 4, 'Servis AC Mobil & Kelistrikan (Air Conditioning & Electrical)', 'ganti-busi-cek-kelistrikan', 'Perawatan komprehensif sistem pendingin udara (Air Conditioning) dan kelistrikan mobil. Meliputi pengisian freon R134a, pembersihan blower & evaporator, penggantian busi iridium, pengecekan sekring, relay, alternator, dan motor starter.', 250000.00, '60–90 menit', 'layanan-busi-listrik.jpg', '2026-11-04 08:59:11', '2026-11-04 08:59:11');

-- ------------------------------------------------------------
-- 3. Struktur Tabel `testimoni`
-- ------------------------------------------------------------
DROP TABLE IF EXISTS `testimoni`;
CREATE TABLE `testimoni` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `layanan_id` bigint(20) UNSIGNED NOT NULL,
  `nama_pelanggan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenis_kendaraan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rating` tinyint(3) UNSIGNED NOT NULL DEFAULT 5,
  `komentar` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `testimoni_layanan_id_index` (`layanan_id`),
  CONSTRAINT `testimoni_layanan_id_foreign` FOREIGN KEY (`layanan_id`) REFERENCES `layanan` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data untuk tabel `testimoni`
INSERT INTO `testimoni` (`id`, `layanan_id`, `nama_pelanggan`, `jenis_kendaraan`, `rating`, `komentar`, `created_at`, `updated_at`) VALUES
(1, 1, 'Budi Santoso', 'Toyota Avanza 1.3 G 2021', 5, 'Servis sangat cepat dan mekaniknya ramah! Ganti oli cuma 30 menit, langsung beres. Harga sesuai yang tertulis, tidak ada biaya tambahan tersembunyi. Pasti balik lagi ke Kardi Putra Motor.', '2026-11-04 08:59:11', '2026-11-04 08:59:11'),
(2, 2, 'Dian Rahayu', 'Honda Jazz RS 2020', 5, 'Paket servis ringannya lengkap banget, ganti filter kabin AC dan cek rem. Mobil jadi terasa dingin dan tarikannya enteng. Ruang tunggu ber-AC bersih. Recommended bengkel mobil di Driyorejo!', '2026-11-04 08:59:11', '2026-11-04 08:59:11'),
(3, 4, 'Rizky Pratama', 'Honda Civic 1.5T 2022', 5, 'Mobil saya brebet dan ada check engine menyala. Di-scan pake alat diagnostik OBD langsung ketahuan sensornya kotor. Setelah tune up dan kalibrasi, tarikan balik halus seperti baru.', '2026-11-04 08:59:11', '2026-11-04 08:59:11'),
(4, 5, 'Siti Nurhaliza', 'Toyota Corolla Cross 2023', 4, 'Servis transmisi otomatis dan kuras oli matic di sini rapi. Hasilnya perpindahan gigi jadi jauh lebih halus. Pengerjaan teliti walau saat itu bengkel agak ramai.', '2026-11-04 08:59:11', '2026-11-04 08:59:11'),
(5, 3, 'Agus Firmansyah', 'Daihatsu Xenia 1.3 R 2019', 4, 'Servis besar yang komprehensif. Mobil saya yang sudah 5 tahun jadi segar lagi performanya. Mekanik menjelaskan kondisi setiap komponen dengan transparan sebelum diganti.', '2026-11-04 08:59:11', '2026-11-04 08:59:11'),
(6, 6, 'Linda Kusuma', 'Mitsubishi Xpander 1.5 Ultimate 2021', 5, 'Rem mobil mulai bunyi gesekan dan kurang pakem. Ganti kampas rem depan di sini cepat hanya 45 menit. Cakram juga dibersihkan dan dicek ketebalannya sekalian.', '2026-11-04 08:59:11', '2026-11-04 08:59:11'),
(7, 11, 'Hendra Wijaya', 'Toyota Innova Reborn 2.0 G 2020', 5, 'Mobil sempat susah distarter pagi hari karena aki sudah 3 tahun. Di Kardi Putra Motor dicek voltasenya, langsung diganti aki GS Astra original bergaransi. Mantap pelayanannya!', '2026-11-04 08:59:11', '2026-11-04 08:59:11'),
(8, 12, 'Fitri Handayani', 'Suzuki Ertiga GX 2022', 4, 'AC mobil kurang dingin dan lampu kabin redup. Diperiksa ternyata freon berkurang dan filter AC penuh debu. Setelah di-service AC-nya dingin menusuk lagi. Harga ramah di kantong.', '2026-11-04 08:59:11', '2026-11-04 08:59:11'),
(9, 8, 'Fajar Nugroho', 'Toyota Rush TRD 2020', 5, 'Setir sempat narik ke kiri di jalan tol. Setelah spooring dan balancing 4 roda di sini, setir langsung lurus mantap tanpa getar sama sekali. Alatnya modern dan computerized.', '2026-11-04 08:59:11', '2026-11-04 08:59:11'),
(10, 9, 'Ani Setianingsih', 'Honda HR-V 1.5 SE 2021', 4, 'Ganti ban depan di sini alatnya hidrolik aman untuk velg racing. Pilihan merk ban cukup lengkap dan dapat bonus pengisian nitrogen. Sangat puas dengan hasilnya!', '2026-11-04 08:59:11', '2026-11-04 08:59:11');

-- ------------------------------------------------------------
-- 4. Struktur Tabel `logo_brands`
-- ------------------------------------------------------------
DROP TABLE IF EXISTS `logo_brands`;
CREATE TABLE `logo_brands` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `nama_brand` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `logo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenis` enum('kendaraan','sparepart_oli') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data untuk tabel `logo_brands`
INSERT INTO `logo_brands` (`id`, `nama_brand`, `logo`, `jenis`, `created_at`, `updated_at`) VALUES
(1, 'Toyota', 'Toyota_Logo.svg.webp', 'kendaraan', '2026-11-04 16:15:00', '2026-11-04 16:15:00'),
(2, 'Honda', 'Honda-Logo-2000-present.png', 'kendaraan', '2026-11-04 16:15:00', '2026-11-04 16:15:00'),
(3, 'Daihatsu', 'daihatsu-logo-png.png', 'kendaraan', '2026-11-04 16:15:00', '2026-11-04 16:15:00'),
(4, 'Mitsubishi', 'mitsubishi-logo-png.png', 'kendaraan', '2026-11-04 16:15:00', '2026-11-04 16:15:00'),
(5, 'Suzuki', 'suzuki-black-logo.png', 'kendaraan', '2026-11-04 16:15:00', '2026-11-04 16:15:00'),
(6, 'Shell', 'shell-white-logo-oil-and-gas-company-icon-emblem-premium-quality-transparent-background-free-png.webp', 'sparepart_oli', '2026-11-04 16:15:00', '2026-11-04 16:15:00'),
(7, 'Castrol', 'castrol-logo-png.png', 'sparepart_oli', '2026-11-04 16:15:00', '2026-11-04 16:15:00'),
(8, 'Mobil 1', 'mobil-1-logo-black-and-white.png', 'sparepart_oli', '2026-11-04 16:15:00', '2026-11-04 16:15:00'),
(9, 'NGK', 'ngk-logo-black-and-white-1.png', 'sparepart_oli', '2026-11-04 16:15:00', '2026-11-04 16:15:00'),
(10, 'Denso', 'DENSO-Logo.png', 'sparepart_oli', '2026-11-04 16:15:00', '2026-11-04 16:15:00');

SET FOREIGN_KEY_CHECKS=1;
COMMIT;
