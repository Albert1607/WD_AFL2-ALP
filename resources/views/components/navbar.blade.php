{{-- x-navbar component --}}
@php
    $navLinks = [
        ['route' => 'home',           'label' => 'Beranda'],
        ['route' => 'layanan.index',  'label' => 'Layanan'],
        ['route' => 'testimoni.index','label' => 'Testimoni'],
        ['route' => 'kontak',         'label' => 'Kontak'],
    ];
    $wa = config('bengkel.wa');
    $waMsg = config('bengkel.wa_message');
@endphp

<header id="main-navbar" class="sticky top-0 z-50 glass-nav transition-all duration-300">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex items-center justify-between h-16 md:h-18">

            {{-- Logo --}}
            <a href="{{ route('home') }}" class="flex items-center gap-3 group">
                <div class="w-9 h-9 bg-brand-red flex items-center justify-center shadow-lg group-hover:scale-105 transition-transform">
                    {{-- Car icon --}}
                    <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7h-3l-2-4H9L7 7H4a1 1 0 00-1 1v8a1 1 0 001 1h1a2 2 0 004 0h6a2 2 0 004 0h1a1 1 0 001-1V8a1 1 0 00-1-1z"/>
                        <circle cx="7" cy="17" r="1" fill="currentColor"/>
                        <circle cx="17" cy="17" r="1" fill="currentColor"/>
                    </svg>
                </div>
                <div class="leading-tight">
                    <span class="block text-sm font-bold text-white font-heading tracking-tight">Kardi Putra</span>
                    <span class="block text-[10px] text-brand-red font-semibold uppercase tracking-widest">Motor</span>
                </div>
            </a>

            {{-- Desktop Nav --}}
            <nav class="hidden md:flex items-center gap-1" aria-label="Navigasi utama">
                @foreach($navLinks as $link)
                    <a href="{{ route($link['route']) }}"
                       class="px-4 py-2 text-sm font-medium transition-all duration-200
                              {{ request()->routeIs($link['route'])
                                   ? 'text-white bg-white/10'
                                   : 'text-slate-400 hover:text-white hover:bg-white/8' }}">
                        {{ $link['label'] }}
                    </a>
                @endforeach
            </nav>

            {{-- CTA + hamburger --}}
            <div class="flex items-center gap-3">
                <a href="https://wa.me/{{ $wa }}?text={{ $waMsg }}"
                   target="_blank" rel="noopener noreferrer"
                   class="hidden sm:inline-flex items-center gap-2 bg-brand-red hover:bg-red-700 text-white text-sm font-semibold px-4 py-2 transition-colors duration-200 shadow-lg shadow-red-900/40">
                    {{-- WhatsApp icon --}}
                    <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                        <path d="M12.04 2c-5.46 0-9.91 4.45-9.91 9.91 0 1.75.46 3.45 1.32 4.95L2.05 22l5.25-1.38c1.45.79 3.08 1.21 4.74 1.21 5.46 0 9.91-4.45 9.91-9.91 0-2.65-1.03-5.14-2.9-7.01A9.816 9.816 0 0012.04 2zm4.6 13.38c-.19.52-1.1.98-1.52 1.04-.39.06-.88.08-1.42-.09a13.08 13.08 0 01-1.28-.48c-2.25-1-3.72-3.28-3.84-3.44-.12-.16-.95-1.26-.95-2.4 0-1.15.6-1.71.81-1.95.21-.23.46-.29.61-.29.15 0 .31.01.44.01.14.01.34-.05.52.4.19.47.65 1.6.71 1.72.06.11.1.25.02.4-.08.14-.12.23-.24.35-.12.12-.25.27-.36.36-.12.1-.24.21-.1.42.14.21.61.95 1.31 1.54.9.77 1.65 1.01 1.89 1.12.24.11.38.09.52-.06.14-.15.59-.69.75-.93.16-.24.31-.2.52-.12.21.08 1.34.63 1.57.75.23.11.38.17.44.26.06.1.06.56-.13 1.09z"/>
                    </svg>
                    Hubungi Kami
                </a>

                {{-- Hamburger --}}
                <button id="hamburger-btn"
                        aria-controls="mobile-menu"
                        aria-expanded="false"
                        aria-label="Buka menu navigasi"
                        class="md:hidden p-2 text-slate-400 hover:text-white hover:bg-white/8 transition-colors">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
                    </svg>
                </button>
            </div>
        </div>
    </div>

    {{-- Mobile menu --}}
    <div id="mobile-menu"
         class="hidden md:hidden glass-card mx-4 mb-3 p-4"
         role="navigation" aria-label="Menu mobile">
        <nav class="flex flex-col gap-1">
            @foreach($navLinks as $link)
                <a href="{{ route($link['route']) }}"
                   class="px-4 py-3 text-sm font-medium transition-colors
                          {{ request()->routeIs($link['route'])
                               ? 'text-white bg-white/10'
                               : 'text-slate-400 hover:text-white hover:bg-white/8' }}">
                    {{ $link['label'] }}
                </a>
            @endforeach
            <a href="https://wa.me/{{ $wa }}?text={{ $waMsg }}"
               target="_blank" rel="noopener noreferrer"
               class="mt-2 flex items-center justify-center gap-2 bg-brand-red text-white text-sm font-semibold px-4 py-3 transition-colors hover:bg-red-700">
                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                    <path d="M12.04 2c-5.46 0-9.91 4.45-9.91 9.91 0 1.75.46 3.45 1.32 4.95L2.05 22l5.25-1.38c1.45.79 3.08 1.21 4.74 1.21 5.46 0 9.91-4.45 9.91-9.91 0-2.65-1.03-5.14-2.9-7.01A9.816 9.816 0 0012.04 2z"/>
                </svg>
                Hubungi Kami
            </a>
        </nav>
    </div>
</header>
