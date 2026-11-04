# Kardi Putra Motor – Company Profile Website

Profil perusahaan bengkel motor **Kardi Putra Motor** dibangun dengan Laravel 11, Blade, dan Tailwind CSS v4. Desain dark glassmorphism dengan aksen merah premium.

---

## Stack

| Layer | Teknologi |
|-------|-----------|
| Framework | Laravel 11 (PHP 8.2+) |
| Frontend | Blade + Tailwind CSS v4 (via Vite) |
| Database | MySQL (produksi) / SQLite (lokal dev) |
| Fonts | Sora (heading) + Inter (body) via Google Fonts |
| Icons | Inline SVG (Heroicons / Lucide style) |

---

## Setup Lokal (Development)

### 1. Clone & Install Dependencies

```bash
git clone <repo-url> kardi-putra-motor
cd kardi-putra-motor

composer install
npm install
```

### 2. Konfigurasi Environment

```bash
cp .env.example .env
php artisan key:generate
```

Edit `.env` sesuai kebutuhan. Untuk **SQLite lokal** (siap pakai tanpa MySQL):

```env
DB_CONNECTION=sqlite
SESSION_DRIVER=file
CACHE_STORE=file
```

Untuk **MySQL lokal**:

```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=kardi_putra_motor
DB_USERNAME=root
DB_PASSWORD=your_password
SESSION_DRIVER=database
CACHE_STORE=database
```

### 3. Database

```bash
php artisan migrate --seed
```

Ini akan membuat 3 tabel (`kategori_layanan`, `layanan`, `testimoni`) dan mengisi dengan data sample realistis.

### 4. Build Assets

```bash
npm run build
```

### 5. Jalankan Server

```bash
php artisan serve
```

Buka: http://localhost:8000

---

## Halaman Tersedia

| URL | Nama |
|-----|------|
| `/` | Beranda (Hero, Layanan, Testimoni, dll.) |
| `/layanan` | Daftar semua layanan (filter by kategori) |
| `/layanan/{slug}` | Detail layanan + testimoni |
| `/testimoni` | Semua testimoni (paginated) |
| `/kontak` | Kontak, peta, WhatsApp |

---

## Struktur Database

```
kategori_layanan (4 kategori)
  └── layanan (12 layanan, FK → kategori_layanan)
        └── testimoni (10 testimoni, FK → layanan)
```

---

## Konfigurasi Bisnis

Semua data bisnis tersimpan di [`config/bengkel.php`](config/bengkel.php):

```php
// Nama, tagline, alamat, nomor WA, jam buka, link maps, dll.
config('bengkel.name')    // "Kardi Putra Motor"
config('bengkel.wa')      // nomor WA untuk link wa.me
config('bengkel.address') // alamat lengkap
```

---

## Mengganti Foto

Letakkan foto di `public/images/`. Nama file sudah ditentukan:

| File | Digunakan untuk |
|------|-----------------|
| `hero-workshop.jpg` | Foto hero (mekanik + motor) |
| `layanan-ganti-oli.jpg` | Layanan ganti oli |
| `layanan-servis-ringan.jpg` | Servis ringan |
| `layanan-servis-besar.jpg` | Servis besar/overhaul |
| `layanan-tune-up-injeksi.jpg` | Tune up injeksi |
| `layanan-servis-cvt.jpg` | Servis CVT matic |
| `layanan-kampas-rem.jpg` | Ganti kampas rem |
| `layanan-rem-cakram.jpg` | Servis rem cakram |
| `layanan-rantai-gear.jpg` | Ganti rantai & gear |
| `layanan-ganti-ban.jpg` | Ganti ban |
| `layanan-shock.jpg` | Servis shock absorber |
| `layanan-ganti-aki.jpg` | Ganti aki |
| `layanan-busi-listrik.jpg` | Ganti busi & kelistrikan |
| `og-image.jpg` | Open Graph (1200×630px) |

---

## Komponen Blade

| Komponen | Deskripsi |
|----------|-----------|
| `x-navbar` | Navbar sticky glass dengan hamburger mobile |
| `x-footer` | Footer dengan kolom layanan, jam, kontak |
| `x-glass-card` | Wrapper glass card reusable |
| `x-service-card` | Kartu layanan dengan image, harga, CTA |
| `x-testimonial-card` | Kartu testimoni dengan rating bintang |
| `x-section-title` | Title section dengan label merah |

---

## Perintah Berguna

```bash
# Reset & isi ulang database
php artisan migrate:fresh --seed

# Bersihkan cache views
php artisan view:clear

# Lihat semua route
php artisan route:list --except-vendor

# Format kode PHP
vendor/bin/pint --dirty

# Dev server dengan HMR
npm run dev
```
