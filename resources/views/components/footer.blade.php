{{-- x-footer component --}}
@php
    $wa    = config('bengkel.wa');
    $waMsg = config('bengkel.wa_message');
    $ig    = config('bengkel.instagram');
@endphp

<footer class="relative z-10 border-t border-white/8 mt-24" role="contentinfo">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-10">

            {{-- Brand Column --}}
            <div class="lg:col-span-1 space-y-5">
                <div class="flex items-center gap-3">
                    <div class="w-10 h-10 bg-brand-red flex items-center justify-center">
                        {{-- Car icon --}}
                        <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7h-3l-2-4H9L7 7H4a1 1 0 00-1 1v8a1 1 0 001 1h1a2 2 0 004 0h6a2 2 0 004 0h1a1 1 0 001-1V8a1 1 0 00-1-1z"/>
                            <circle cx="7" cy="17" r="1" fill="currentColor"/>
                            <circle cx="17" cy="17" r="1" fill="currentColor"/>
                        </svg>
                    </div>
                    <div>
                        <div class="font-bold text-white font-heading">{{ config('bengkel.name') }}</div>
                        <div class="text-xs text-brand-red font-semibold">Bengkel Mobil Terpercaya</div>
                    </div>
                </div>
                <p class="text-sm text-slate-400 leading-relaxed">{{ config('bengkel.tagline') }}</p>
                {{-- Social --}}
                <div class="flex items-center gap-3">
                    <a href="https://instagram.com/{{ $ig }}"
                       target="_blank" rel="noopener noreferrer"
                       aria-label="Instagram {{ config('bengkel.name') }}"
                       class="w-9 h-9 bg-white/8 hover:bg-brand-red flex items-center justify-center transition-colors text-slate-400 hover:text-white">
                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zM12 0C8.741 0 8.333.014 7.053.072 2.695.272.273 2.69.073 7.052.014 8.333 0 8.741 0 12c0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98C8.333 23.986 8.741 24 12 24c3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98C15.668.014 15.259 0 12 0zm0 5.838a6.162 6.162 0 100 12.324 6.162 6.162 0 000-12.324zM12 16a4 4 0 110-8 4 4 0 010 8zm6.406-11.845a1.44 1.44 0 100 2.881 1.44 1.44 0 000-2.881z"/>
                        </svg>
                    </a>
                    <a href="https://wa.me/{{ $wa }}?text={{ $waMsg }}"
                       target="_blank" rel="noopener noreferrer"
                       aria-label="WhatsApp {{ config('bengkel.name') }}"
                       class="w-9 h-9 bg-white/8 hover:bg-green-600 flex items-center justify-center transition-colors text-slate-400 hover:text-white">
                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path d="M12.04 2c-5.46 0-9.91 4.45-9.91 9.91 0 1.75.46 3.45 1.32 4.95L2.05 22l5.25-1.38c1.45.79 3.08 1.21 4.74 1.21 5.46 0 9.91-4.45 9.91-9.91 0-2.65-1.03-5.14-2.9-7.01A9.816 9.816 0 0012.04 2z"/>
                        </svg>
                    </a>
                </div>
            </div>

            {{-- Layanan Column --}}
            <div>
                <h3 class="text-sm font-semibold text-white font-heading mb-5 uppercase tracking-wider">Layanan</h3>
                <ul class="space-y-3 text-sm text-slate-400">
                    <li><a href="{{ route('layanan.index') }}?kategori=perawatan-rutin" class="hover:text-white hover:pl-1 transition-all">Perawatan Rutin</a></li>
                    <li><a href="{{ route('layanan.index') }}?kategori=mesin-injeksi" class="hover:text-white hover:pl-1 transition-all">Mesin &amp; Injeksi</a></li>
                    <li><a href="{{ route('layanan.index') }}?kategori=kaki-kaki-rem" class="hover:text-white hover:pl-1 transition-all">Kaki-kaki &amp; Rem</a></li>
                    <li><a href="{{ route('layanan.index') }}?kategori=kelistrikan-aki" class="hover:text-white hover:pl-1 transition-all">Kelistrikan &amp; Aki</a></li>
                </ul>
            </div>

            {{-- Jam Buka Column --}}
            <div>
                <h3 class="text-sm font-semibold text-white font-heading mb-5 uppercase tracking-wider">Jam Operasional</h3>
                <ul class="space-y-3 text-sm text-slate-400">
                    <li class="flex items-start gap-2">
                        <svg class="w-4 h-4 text-brand-red mt-0.5 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <circle cx="12" cy="12" r="10" stroke-width="2"/>
                            <path d="M12 6v6l4 2" stroke-linecap="round" stroke-width="2"/>
                        </svg>
                        {{ config('bengkel.hours.weekday') }}
                    </li>
                    <li class="flex items-start gap-2">
                        <svg class="w-4 h-4 text-brand-red mt-0.5 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <circle cx="12" cy="12" r="10" stroke-width="2"/>
                            <path d="M12 6v6l4 2" stroke-linecap="round" stroke-width="2"/>
                        </svg>
                        {{ config('bengkel.hours.weekend') }}
                    </li>
                </ul>
            </div>

            {{-- Kontak Column --}}
            <div>
                <h3 class="text-sm font-semibold text-white font-heading mb-5 uppercase tracking-wider">Kontak</h3>
                <ul class="space-y-3 text-sm text-slate-400">
                    <li class="flex items-start gap-2">
                        <svg class="w-4 h-4 text-brand-red mt-0.5 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                        </svg>
                        <span>{{ config('bengkel.address') }}</span>
                    </li>
                    <li class="flex items-center gap-2">
                        <svg class="w-4 h-4 text-brand-red shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                        </svg>
                        <a href="tel:{{ config('bengkel.phone') }}" class="hover:text-white transition-colors">
                            {{ config('bengkel.phone') }}
                        </a>
                    </li>
                    <li class="flex items-center gap-2">
                        <svg class="w-4 h-4 text-brand-red shrink-0" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path d="M12.04 2c-5.46 0-9.91 4.45-9.91 9.91 0 1.75.46 3.45 1.32 4.95L2.05 22l5.25-1.38c1.45.79 3.08 1.21 4.74 1.21 5.46 0 9.91-4.45 9.91-9.91 0-2.65-1.03-5.14-2.9-7.01A9.816 9.816 0 0012.04 2z"/>
                        </svg>
                        <a href="https://wa.me/{{ $wa }}?text={{ $waMsg }}" target="_blank" rel="noopener noreferrer" class="hover:text-white transition-colors">
                            WhatsApp: {{ config('bengkel.phone') }}
                        </a>
                    </li>
                </ul>
            </div>
        </div>

        {{-- Bottom bar --}}
        <div class="mt-12 pt-8 border-t border-white/8 flex flex-col sm:flex-row items-center justify-between gap-4 text-xs text-slate-500">
            <p>&copy; {{ date('Y') }} {{ config('bengkel.name') }}. Hak cipta dilindungi.</p>
        </div>
    </div>
</footer>
