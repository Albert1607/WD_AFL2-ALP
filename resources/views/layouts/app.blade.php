<!DOCTYPE html>
<html lang="id" class="h-full scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'AutoDrive Quick Service - Profil Bengkel Mobil Cepat & Suku Cadang Resmi')</title>
    <meta name="description" content="@yield('meta_description', 'AutoDrive Quick Service adalah jaringan bengkel modern spesialis perawatan cepat mobil berstandar resmi Astra. Menyediakan aki GS Astra, oli Shell/Motul, shock absorber KYB, ban, dan layanan 24 jam.')">

    <!-- Favicon -->
    <link rel="icon" type="image/svg+xml" href="data:image/svg+xml,<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24' fill='%23dc2626'><path d='M18.92 6.01C18.72 5.42 18.16 5 17.5 5h-11c-.66 0-1.21.42-1.42 1.01L3 12v8c0 .55.45 1 1 1h1c.55 0 1-.45 1-1v-1h12v1c0 .55.45 1 1 1h1c.55 0 1-.45 1-1v-8l-2.08-5.99zM6.5 16c-.83 0-1.5-.67-1.5-1.5S5.67 13 6.5 13s1.5.67 1.5 1.5S7.33 16 6.5 16zm11 0c-.83 0-1.5-.67-1.5-1.5s.67-1.5 1.5-1.5 1.5.67 1.5 1.5-.67 1.5-1.5 1.5zM5 11l1.5-4.5h11L19 11H5z'/></svg>">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600,700" rel="stylesheet" />

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="min-h-full flex flex-col bg-slate-100 text-slate-900 font-sans antialiased selection:bg-red-600 selection:text-white">

    <!-- Top Announcement Bar (Emergency & Hotline) -->
    <aside aria-label="Informasi Hotline" class="bg-black text-slate-200 text-xs py-2.5 px-4 border-b border-slate-800">
        <div class="max-w-7xl mx-auto flex flex-wrap items-center justify-between gap-3">
            <div class="flex items-center gap-4 flex-wrap">
                <span class="inline-flex items-center gap-2 text-amber-400 font-bold tracking-wide">
                    <span class="inline-block w-2 h-2 bg-amber-400"></span>
                    JARINGAN BENGKEL QUICK SERVICE RESMI
                </span>
                <span class="hidden md:inline text-slate-600">|</span>
                <span class="hidden md:inline-flex items-center gap-1.5 text-slate-300">
                    <svg class="w-3.5 h-3.5 text-red-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7" />
                    </svg>
                    100% Produk Original Bergaransi Nasional di Seluruh Cabang
                </span>
            </div>
            <div class="flex items-center gap-5 text-xs font-bold">
                <a href="tel:1500015" class="inline-flex items-center gap-1.5 hover:text-red-500 transition-colors">
                    <svg class="w-3.5 h-3.5 text-red-600" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M6.62 10.79c1.44 2.83 3.76 5.14 6.59 6.59l2.2-2.2c.27-.27.67-.36 1.02-.24 1.12.37 2.33.57 3.57.57.55 0 1 .45 1 1V20c0 .55-.45 1-1 1-9.39 0-17-7.61-17-17 0-.55.45-1 1-1h3.5c.55 0 1 .45 1 1 0 1.25.2 2.45.57 3.57.11.35.03.74-.25 1.02l-2.2 2.2z"/>
                    </svg>
                    <span>Emergency 24 Jam: <span class="text-white">1500-015</span></span>
                </a>
                <a href="https://wa.me/6281234567890?text=Halo%20AutoDrive%20Quick%20Service" target="_blank" class="inline-flex items-center gap-1.5 text-emerald-400 hover:text-emerald-300 transition-colors">
                    <svg class="w-3.5 h-3.5" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M12.04 2c-5.46 0-9.91 4.45-9.91 9.91 0 1.75.46 3.45 1.32 4.95L2.05 22l5.25-1.38c1.45.79 3.08 1.21 4.74 1.21 5.46 0 9.91-4.45 9.91-9.91 0-2.65-1.03-5.14-2.9-7.01A9.816 9.816 0 0012.04 2z"/>
                    </svg>
                    <span>WhatsApp Service</span>
                </a>
            </div>
        </div>
    </aside>

    <!-- Main Navigation Header -->
    <header class="sticky top-0 z-40 bg-white border-b-2 border-slate-200">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between h-20">
                <!-- Brand Logo (Sharp square block, solid colors) -->
                <a href="{{ route('home') }}" class="flex items-center gap-3 group">
                    <div class="w-11 h-11 bg-red-600 flex items-center justify-center text-white font-black text-xl shadow-none">
                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="square" stroke-linejoin="miter" stroke-width="2.5" d="M13 10V3L4 14h7v7l9-11h-7z"/>
                        </svg>
                    </div>
                    <div class="flex flex-col">
                        <span class="text-2xl font-black tracking-tight text-slate-950 uppercase leading-none">
                            AUTO<span class="text-red-600">DRIVE</span>
                        </span>
                        <span class="text-[10px] font-bold tracking-widest uppercase text-slate-600 mt-1">
                            Quick Service & Parts
                        </span>
                    </div>
                </a>

                <!-- Desktop Navigation Links -->
                <nav class="hidden lg:flex items-center gap-1">
                    <a href="{{ route('home') }}" class="px-3.5 py-2 text-xs font-bold uppercase tracking-wider transition-colors {{ request()->routeIs('home') ? 'bg-red-600 text-white' : 'text-slate-700 hover:bg-slate-100 hover:text-red-600' }}">
                        Beranda
                    </a>
                    <a href="{{ route('about') }}" class="px-3.5 py-2 text-xs font-bold uppercase tracking-wider transition-colors {{ request()->routeIs('about') ? 'bg-red-600 text-white' : 'text-slate-700 hover:bg-slate-100 hover:text-red-600' }}">
                        Tentang Kami
                    </a>
                    <a href="{{ route('services.index') }}" class="px-3.5 py-2 text-xs font-bold uppercase tracking-wider transition-colors {{ request()->routeIs('services.*') ? 'bg-red-600 text-white' : 'text-slate-700 hover:bg-slate-100 hover:text-red-600' }}">
                        Layanan Servis
                    </a>
                    <a href="{{ route('promos.index') }}" class="px-3.5 py-2 text-xs font-bold uppercase tracking-wider transition-colors {{ request()->routeIs('promos.*') ? 'bg-red-600 text-white' : 'text-slate-700 hover:bg-slate-100 hover:text-red-600' }}">
                        Promo Spesial
                    </a>
                    <a href="{{ route('outlets.index') }}" class="px-3.5 py-2 text-xs font-bold uppercase tracking-wider transition-colors {{ request()->routeIs('outlets.*') ? 'bg-red-600 text-white' : 'text-slate-700 hover:bg-slate-100 hover:text-red-600' }}">
                        Lokasi Bengkel
                    </a>
                    <a href="{{ route('tips.index') }}" class="px-3.5 py-2 text-xs font-bold uppercase tracking-wider transition-colors {{ request()->routeIs('tips.*') ? 'bg-red-600 text-white' : 'text-slate-700 hover:bg-slate-100 hover:text-red-600' }}">
                        Tips Otomotif
                    </a>
                    <a href="{{ route('contact') }}" class="px-3.5 py-2 text-xs font-bold uppercase tracking-wider transition-colors {{ request()->routeIs('contact') ? 'bg-red-600 text-white' : 'text-slate-700 hover:bg-slate-100 hover:text-red-600' }}">
                        Kontak
                    </a>
                </nav>

                <!-- Action CTA (Direct Contact) -->
                <div class="hidden sm:flex items-center gap-3">
                    <a href="{{ route('outlets.index') }}" class="text-xs font-bold uppercase tracking-wider text-slate-800 px-4 py-2.5 border-2 border-slate-900 hover:bg-slate-900 hover:text-white transition-colors">
                        Cari Bengkel
                    </a>
                    <a href="tel:1500015" class="inline-flex items-center gap-2 bg-red-600 hover:bg-red-700 text-white text-xs font-black uppercase tracking-wider px-4 py-2.5 transition-colors">
                        <svg class="w-3.5 h-3.5" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M6.62 10.79c1.44 2.83 3.76 5.14 6.59 6.59l2.2-2.2c.27-.27.67-.36 1.02-.24 1.12.37 2.33.57 3.57.57.55 0 1 .45 1 1V20c0 .55-.45 1-1 1-9.39 0-17-7.61-17-17 0-.55.45-1 1-1h3.5c.55 0 1 .45 1 1 0 1.25.2 2.45.57 3.57.11.35.03.74-.25 1.02l-2.2 2.2z"/>
                        </svg>
                        Call: 1500-015
                    </a>
                </div>

                <!-- Mobile Menu Button -->
                <div class="flex items-center lg:hidden gap-2">
                    <a href="tel:1500015" class="bg-red-600 text-white text-xs font-bold px-3 py-2">
                        1500-015
                    </a>
                    <button type="button" id="mobile-menu-btn" aria-label="Buka Menu" class="p-2 text-slate-900 hover:bg-slate-100 border border-slate-300">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="square" stroke-linejoin="miter" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
                        </svg>
                    </button>
                </div>
            </div>
        </div>

        <!-- Mobile Drawer Menu -->
        <div id="mobile-menu" class="hidden lg:hidden border-t-2 border-slate-200 bg-white px-4 py-4 space-y-1">
            <a href="{{ route('home') }}" class="block px-3 py-2 text-xs font-bold uppercase tracking-wider {{ request()->routeIs('home') ? 'bg-red-600 text-white' : 'text-slate-800 hover:bg-slate-100' }}">
                Beranda
            </a>
            <a href="{{ route('about') }}" class="block px-3 py-2 text-xs font-bold uppercase tracking-wider {{ request()->routeIs('about') ? 'bg-red-600 text-white' : 'text-slate-800 hover:bg-slate-100' }}">
                Tentang Kami
            </a>
            <a href="{{ route('services.index') }}" class="block px-3 py-2 text-xs font-bold uppercase tracking-wider {{ request()->routeIs('services.*') ? 'bg-red-600 text-white' : 'text-slate-800 hover:bg-slate-100' }}">
                Layanan Servis
            </a>
            <a href="{{ route('promos.index') }}" class="block px-3 py-2 text-xs font-bold uppercase tracking-wider {{ request()->routeIs('promos.*') ? 'bg-red-600 text-white' : 'text-slate-800 hover:bg-slate-100' }}">
                Promo Spesial
            </a>
            <a href="{{ route('outlets.index') }}" class="block px-3 py-2 text-xs font-bold uppercase tracking-wider {{ request()->routeIs('outlets.*') ? 'bg-red-600 text-white' : 'text-slate-800 hover:bg-slate-100' }}">
                Lokasi Bengkel
            </a>
            <a href="{{ route('tips.index') }}" class="block px-3 py-2 text-xs font-bold uppercase tracking-wider {{ request()->routeIs('tips.*') ? 'bg-red-600 text-white' : 'text-slate-800 hover:bg-slate-100' }}">
                Tips Otomotif
            </a>
            <a href="{{ route('contact') }}" class="block px-3 py-2 text-xs font-bold uppercase tracking-wider {{ request()->routeIs('contact') ? 'bg-red-600 text-white' : 'text-slate-800 hover:bg-slate-100' }}">
                Kontak
            </a>
            <div class="pt-3 border-t border-slate-200 flex flex-col gap-2">
                <a href="tel:1500015" class="text-center bg-red-600 text-white text-xs font-bold py-2.5">
                    Hubungi Hotline: 1500-015
                </a>
            </div>
        </div>
    </header>

    <!-- Main Body Content -->
    <main class="flex-1">
        @yield('content')
    </main>

    <!-- Floating Action Assistance (WhatsApp & 24h Call) -->
    <div class="fixed bottom-6 right-6 z-50 flex flex-col items-end gap-2">
        <a href="https://wa.me/6281234567890?text=Halo%20AutoDrive%2C%20saya%20ingin%20informasi%20layanan%20bengkel" target="_blank" class="flex items-center gap-2 bg-emerald-600 hover:bg-emerald-700 text-white font-bold px-4 py-3 border border-emerald-500 shadow-md transition-colors" title="Chat WhatsApp Customer Care">
            <svg class="w-5 h-5 flex-shrink-0" fill="currentColor" viewBox="0 0 24 24">
                <path d="M12.04 2c-5.46 0-9.91 4.45-9.91 9.91 0 1.75.46 3.45 1.32 4.95L2.05 22l5.25-1.38c1.45.79 3.08 1.21 4.74 1.21 5.46 0 9.91-4.45 9.91-9.91 0-2.65-1.03-5.14-2.9-7.01A9.816 9.816 0 0012.04 2zM17.46 16.5c-.24.68-1.2 1.26-1.78 1.34-.54.08-1.22.11-3.56-.86-2.98-1.24-4.89-4.29-5.04-4.49-.15-.2-1.21-1.61-1.21-3.07 0-1.46.77-2.18 1.04-2.48.27-.3.59-.37.79-.37.2 0 .4 0 .58.01.19.01.44-.07.69.53.26.62.88 2.14.96 2.3.08.16.13.35.03.56-.1.21-.15.34-.3.51-.15.17-.32.38-.46.51-.15.15-.31.31-.13.62.18.31.79 1.3 1.7 2.11 1.17 1.04 2.15 1.36 2.46 1.51.31.15.49.13.67-.08.18-.21.77-.9 1-.98.23-.08.46.03.62.1.16.07 1.05.5 1.23.59.18.09.3.14.35.22.05.08.05.46-.19 1.14z"/>
            </svg>
            <span class="text-xs uppercase tracking-wider hidden sm:inline">WhatsApp Darurat</span>
        </a>
    </div>

    <!-- Main Footer -->
    <footer class="bg-black text-slate-300 pt-16 pb-8 border-t-4 border-red-600">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Brand Partners Strip -->
            <div class="pb-10 border-b border-slate-800">
                <p class="text-xs font-bold text-center tracking-widest text-slate-400 uppercase mb-5">
                    Mitra Distribusi Resmi Suku Cadang & Pelumas Berstandar Pabrikan
                </p>
                <div class="flex flex-wrap items-center justify-center gap-6 sm:gap-10 text-xs font-black tracking-widest text-slate-300">
                    <span class="p-2 border border-slate-800 bg-slate-900">GS ASTRA</span>
                    <span class="p-2 border border-slate-800 bg-slate-900">INCOE BATTERY</span>
                    <span class="p-2 border border-slate-800 bg-slate-900">SHELL HELIX</span>
                    <span class="p-2 border border-slate-800 bg-slate-900">MOTUL</span>
                    <span class="p-2 border border-slate-800 bg-slate-900">MOBIL 1</span>
                    <span class="p-2 border border-slate-800 bg-slate-900">PERTAMINA FASTRON</span>
                    <span class="p-2 border border-slate-800 bg-slate-900">KAYABA (KYB)</span>
                    <span class="p-2 border border-slate-800 bg-slate-900">BRIDGESTONE</span>
                    <span class="p-2 border border-slate-800 bg-slate-900">ASPIRA</span>
                </div>
            </div>

            <!-- Main Footer Columns -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-5 gap-10 py-12">
                <!-- Col 1: Bio -->
                <div class="lg:col-span-2 space-y-4">
                    <div class="flex items-center gap-3">
                        <div class="w-10 h-10 bg-red-600 flex items-center justify-center text-white font-black text-xl">
                            <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="square" stroke-linejoin="miter" stroke-width="2.5" d="M13 10V3L4 14h7v7l9-11h-7z"/>
                            </svg>
                        </div>
                        <span class="text-2xl font-black text-white tracking-tight uppercase">
                            AUTO<span class="text-red-600">DRIVE</span>
                        </span>
                    </div>
                    <p class="text-xs text-slate-400 leading-relaxed max-w-sm">
                        Jaringan bengkel modern spesialis Quick Service mobil terkemuka di Indonesia. Menghadirkan solusi ganti aki, oli mesin, kaki-kaki suspensi, dan ban dengan waktu pengerjaan 15-45 menit, suku cadang 100% original, dan garansi resmi nasional.
                    </p>
                    <div class="pt-2">
                        <div class="p-4 bg-slate-900 border border-slate-800 flex items-center gap-3">
                            <div class="w-8 h-8 bg-red-600 text-white flex items-center justify-center flex-shrink-0">
                                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M6.62 10.79c1.44 2.83 3.76 5.14 6.59 6.59l2.2-2.2c.27-.27.67-.36 1.02-.24 1.12.37 2.33.57 3.57.57.55 0 1 .45 1 1V20c0 .55-.45 1-1 1-9.39 0-17-7.61-17-17 0-.55.45-1 1-1h3.5c.55 0 1 .45 1 1 0 1.25.2 2.45.57 3.57.11.35.03.74-.25 1.02l-2.2 2.2z"/>
                                </svg>
                            </div>
                            <div>
                                <p class="text-[11px] text-slate-400 uppercase font-bold">Hotline Bebas Pulsa (24 Jam)</p>
                                <p class="text-base font-black text-white">1500-015</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Col 2: Services -->
                <div>
                    <h3 class="text-xs font-black text-white uppercase tracking-wider mb-4 border-b border-red-600 pb-1 inline-block">
                        Layanan Servis
                    </h3>
                    <ul class="space-y-2 text-xs text-slate-400">
                        <li><a href="{{ route('services.show', 'ganti-aki') }}" class="hover:text-red-500 transition-colors">Ganti Aki Mobil & Garansi</a></li>
                        <li><a href="{{ route('services.show', 'ganti-oli') }}" class="hover:text-red-500 transition-colors">Ganti Oli Vacuum Cepat</a></li>
                        <li><a href="{{ route('services.show', 'shock-absorber') }}" class="hover:text-red-500 transition-colors">Shock Absorber KYB</a></li>
                        <li><a href="{{ route('services.show', 'ban-spooring') }}" class="hover:text-red-500 transition-colors">Ban, Spooring & Balancing</a></li>
                        <li><a href="{{ route('services.show', 'tune-up') }}" class="hover:text-red-500 transition-colors">Tune Up & Carbon Clean</a></li>
                        <li><a href="{{ route('services.show', 'gratis-11-poin-cek') }}" class="hover:text-red-500 transition-colors">Gratis 11 Poin Cek Vital</a></li>
                        <li><a href="{{ route('services.show', 'home-service') }}" class="hover:text-red-500 transition-colors">Home Service 24/7</a></li>
                    </ul>
                </div>

                <!-- Col 3: Company & Information -->
                <div>
                    <h3 class="text-xs font-black text-white uppercase tracking-wider mb-4 border-b border-red-600 pb-1 inline-block">
                        Profil & Navigasi
                    </h3>
                    <ul class="space-y-2 text-xs text-slate-400">
                        <li><a href="{{ route('about') }}" class="hover:text-red-500 transition-colors">Profil Perusahaan</a></li>
                        <li><a href="{{ route('promos.index') }}" class="hover:text-red-500 transition-colors">Katalog Promo</a></li>
                        <li><a href="{{ route('outlets.index') }}" class="hover:text-red-500 transition-colors">Direktori Lokasi Bengkel</a></li>
                        <li><a href="{{ route('tips.index') }}" class="hover:text-red-500 transition-colors">Artikel Tips Otomotif</a></li>
                        <li><a href="{{ route('contact') }}" class="hover:text-red-500 transition-colors">Hubungi Kami</a></li>
                    </ul>
                </div>

                <!-- Col 4: Keunggulan Layanan -->
                <div>
                    <h3 class="text-xs font-black text-white uppercase tracking-wider mb-4 border-b border-red-600 pb-1 inline-block">
                        Standar Servis
                    </h3>
                    <div class="space-y-2 text-xs text-slate-400">
                        <div class="p-3 bg-slate-900 border border-slate-800">
                            <strong class="text-amber-400 block mb-0.5">⏱️ 15–45 Menit</strong>
                            Layanan servis cepat terstandar.
                        </div>
                        <div class="p-3 bg-slate-900 border border-slate-800">
                            <strong class="text-red-500 block mb-0.5">🛡️ Garansi Nasional</strong>
                            Klaim resmi di seluruh outlet Indonesia.
                        </div>
                        <div class="p-3 bg-slate-900 border border-slate-800">
                            <strong class="text-emerald-400 block mb-0.5">🏠 Home Service</strong>
                            Mekanik siaga datang ke lokasi Anda.
                        </div>
                    </div>
                </div>
            </div>

            <!-- Bottom Copyright & Disclaimer -->
            <div class="pt-6 border-t border-slate-900 flex flex-col sm:flex-row items-center justify-between text-xs text-slate-500 gap-4">
                <p>&copy; {{ date('Y') }} AutoDrive Quick Service Indonesia. Seluruh hak cipta dilindungi.</p>
                <div class="flex items-center gap-6">
                    <a href="{{ route('about') }}" class="hover:text-slate-400 transition-colors">Kebijakan Mutu</a>
                    <a href="{{ route('about') }}" class="hover:text-slate-400 transition-colors">Ketentuan Garansi</a>
                    <a href="{{ route('contact') }}" class="hover:text-slate-400 transition-colors">Pusat Bantuan</a>
                </div>
            </div>
        </div>
    </footer>

    <!-- JS for Mobile Menu Toggle -->
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const btn = document.getElementById('mobile-menu-btn');
            const menu = document.getElementById('mobile-menu');
            if (btn && menu) {
                btn.addEventListener('click', function () {
                    menu.classList.toggle('hidden');
                });
            }
        });
    </script>
</body>
</html>
