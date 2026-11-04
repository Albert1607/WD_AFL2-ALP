# DEPLOY.md – Panduan Deployment Kardi Putra Motor

---

## A. Shared Hosting (cPanel / DirectAdmin)

### 1. Upload Files

Upload seluruh isi project ke server. **Jangan** taruh di dalam `public_html` langsung — taruh satu level di atasnya:

```
/home/username/
├── kardi-putra-motor/        ← project Laravel (semua file)
│   ├── app/
│   ├── config/
│   ├── ...
│   └── public/               ← ini yang akan dipoint ke public_html
└── public_html → symlink atau isi dari public/
```

**Opsi 1 – Symlink (direkomendasikan jika host support):**
```bash
ln -s /home/username/kardi-putra-motor/public /home/username/public_html
```

**Opsi 2 – Salin isi `public/` ke `public_html/`**, lalu edit `public_html/index.php`:
```php
// Ubah path ini:
require __DIR__.'/../vendor/autoload.php';
// Menjadi (sesuaikan path):
require __DIR__.'/../../kardi-putra-motor/vendor/autoload.php';
```

### 2. Konfigurasi .env

Buat `.env` dari `.env.example` dan isi:

```env
APP_NAME="Kardi Putra Motor"
APP_ENV=production
APP_KEY=            ← generate dengan: php artisan key:generate
APP_DEBUG=false
APP_URL=https://yourdomain.com

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=namadb
DB_USERNAME=namauser
DB_PASSWORD=passworddb

SESSION_DRIVER=file
CACHE_STORE=file
```

### 3. Jalankan via SSH (atau via cPanel Terminal)

```bash
cd /home/username/kardi-putra-motor

composer install --no-dev --optimize-autoloader
php artisan key:generate
php artisan migrate --seed --force
php artisan storage:link

# Cache untuk performa produksi
php artisan config:cache
php artisan route:cache
php artisan view:cache
```

### 4. Permissions

```bash
chmod -R 755 storage bootstrap/cache
```

---

## B. VPS (Ubuntu/Debian dengan Nginx + PHP-FPM)

### 1. Prasyarat

```bash
# PHP 8.2+
sudo apt install php8.2 php8.2-fpm php8.2-mysql php8.2-mbstring php8.2-xml php8.2-curl php8.2-zip php8.2-gd php8.2-sqlite3

# Nginx
sudo apt install nginx

# Composer
curl -sS https://getcomposer.org/installer | php
sudo mv composer.phar /usr/local/bin/composer

# Node.js (untuk build assets)
curl -fsSL https://deb.nodesource.com/setup_20.x | sudo bash -
sudo apt install nodejs
```

### 2. Upload Project

```bash
cd /var/www
sudo git clone <repo-url> kardi-putra-motor
cd kardi-putra-motor
```

### 3. Install Dependencies & Build

```bash
composer install --no-dev --optimize-autoloader
npm install
npm run build
```

### 4. Konfigurasi .env

```bash
cp .env.example .env
# Edit .env dengan nilai produksi
nano .env
php artisan key:generate
```

### 5. Migrate & Seed

```bash
php artisan migrate --seed --force
php artisan storage:link
```

### 6. Cache Produksi

```bash
php artisan config:cache
php artisan route:cache
php artisan view:cache
php artisan event:cache
```

### 7. Konfigurasi Nginx

```nginx
server {
    listen 80;
    server_name yourdomain.com www.yourdomain.com;
    root /var/www/kardi-putra-motor/public;

    add_header X-Frame-Options "SAMEORIGIN";
    add_header X-Content-Type-Options "nosniff";

    index index.php;
    charset utf-8;

    location / {
        try_files $uri $uri/ /index.php?$query_string;
    }

    location = /favicon.ico { access_log off; log_not_found off; }
    location = /robots.txt  { access_log off; log_not_found off; }

    error_page 404 /index.php;

    location ~ \.php$ {
        fastcgi_pass unix:/var/run/php/php8.2-fpm.sock;
        fastcgi_param SCRIPT_FILENAME $realpath_root$fastcgi_script_name;
        include fastcgi_params;
        fastcgi_hide_header X-Powered-By;
    }

    location ~ /\.(?!well-known).* {
        deny all;
    }
}
```

```bash
sudo ln -s /etc/nginx/sites-available/kardi-putra-motor /etc/nginx/sites-enabled/
sudo nginx -t
sudo systemctl restart nginx
```

### 8. Permissions

```bash
sudo chown -R www-data:www-data /var/www/kardi-putra-motor
sudo chmod -R 755 /var/www/kardi-putra-motor/storage
sudo chmod -R 755 /var/www/kardi-putra-motor/bootstrap/cache
```

### 9. HTTPS (Let's Encrypt)

```bash
sudo apt install certbot python3-certbot-nginx
sudo certbot --nginx -d yourdomain.com -d www.yourdomain.com
```

---

## C. Mengganti Data Kontak & Foto

### Data Bisnis
Edit [`config/bengkel.php`](config/bengkel.php) lalu jalankan:
```bash
php artisan config:cache
```

### Foto
Upload file JPG layanan ke `public/images/layanan/` dan foto umum/branding ke `public/images/global/` (lihat README.md untuk daftar nama file).  
Tidak perlu restart server — foto langsung tampil.

### Data Layanan & Testimoni
Edit via phpMyAdmin atau MySQL CLI, langsung di tabel `layanan` dan `testimoni`.

---

## D. Checklist Pre-Launch

- [ ] `APP_DEBUG=false` di `.env`
- [ ] `APP_ENV=production` di `.env`
- [ ] `APP_URL` sudah benar (https://)
- [ ] Database terisi (`migrate --seed`)
- [ ] `storage:link` sudah dijalankan
- [ ] `config:cache`, `route:cache`, `view:cache` sudah dijalankan
- [ ] Nomor WA di `config/bengkel.php` sudah benar
- [ ] Foto hero dan layanan sudah diupload
- [ ] Google Maps embed URL sudah benar di `config/bengkel.php`
- [ ] SSL/HTTPS aktif
