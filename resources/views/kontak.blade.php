@extends('layouts.app')

@section('title', 'Kontak & Lokasi – ' . config('bengkel.name'))
@section('meta_description', 'Hubungi ' . config('bengkel.name') . ' via WhatsApp atau telepon. Temukan lokasi bengkel kami di ' . config('bengkel.address'))

@section('content')
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16 space-y-14">

    {{-- Header --}}
    <div class="fade-up">
        <x-section-title
            label="Kontak"
            title='Hubungi <span class="text-brand-red">Kami</span>'
            subtitle="Ada pertanyaan atau ingin konsultasi? Kami siap membantu Anda. Pilih cara komunikasi yang paling mudah untuk Anda."
        />
    </div>

    <div class="grid grid-cols-1 lg:grid-cols-2 gap-10">

        {{-- Left: Contact info --}}
        <div class="space-y-6 fade-up">

            {{-- WhatsApp CTA (primary) --}}
            <div class="glass-card p-6 space-y-4">
                <div class="flex items-center gap-4">
                    <div class="w-12 h-12 bg-green-500/15 flex items-center justify-center shrink-0">
                        <svg class="w-6 h-6 text-green-400" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path d="M12.04 2c-5.46 0-9.91 4.45-9.91 9.91 0 1.75.46 3.45 1.32 4.95L2.05 22l5.25-1.38c1.45.79 3.08 1.21 4.74 1.21 5.46 0 9.91-4.45 9.91-9.91 0-2.65-1.03-5.14-2.9-7.01A9.816 9.816 0 0012.04 2zm4.6 13.38c-.19.52-1.1.98-1.52 1.04-.39.06-.88.08-1.42-.09a13.08 13.08 0 01-1.28-.48c-2.25-1-3.72-3.28-3.84-3.44-.12-.16-.95-1.26-.95-2.4 0-1.15.6-1.71.81-1.95.21-.23.46-.29.61-.29.15 0 .31.01.44.01.14.01.34-.05.52.4.19.47.65 1.6.71 1.72.06.11.1.25.02.4-.08.14-.12.23-.24.35-.12.12-.25.27-.36.36-.12.1-.24.21-.1.42.14.21.61.95 1.31 1.54.9.77 1.65 1.01 1.89 1.12.24.11.38.09.52-.06.14-.15.59-.69.75-.93.16-.24.31-.2.52-.12.21.08 1.34.63 1.57.75.23.11.38.17.44.26.06.1.06.56-.13 1.09z"/>
                        </svg>
                    </div>
                    <div>
                        <h3 class="font-semibold text-white font-heading">WhatsApp</h3>
                        <p class="text-sm text-slate-400">Chat langsung, respon cepat</p>
                    </div>
                </div>
                <a href="https://wa.me/{{ config('bengkel.wa') }}?text={{ config('bengkel.wa_message') }}"
                   target="_blank" rel="noopener noreferrer"
                   class="flex items-center justify-center gap-2 w-full bg-green-600 hover:bg-green-700 text-white font-semibold py-3.5 transition-colors">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                        <path d="M12.04 2c-5.46 0-9.91 4.45-9.91 9.91 0 1.75.46 3.45 1.32 4.95L2.05 22l5.25-1.38c1.45.79 3.08 1.21 4.74 1.21 5.46 0 9.91-4.45 9.91-9.91 0-2.65-1.03-5.14-2.9-7.01A9.816 9.816 0 0012.04 2z"/>
                    </svg>
                    Mulai Chat WhatsApp
                </a>
            </div>

            {{-- Info cards --}}
            <div class="glass-card p-6 space-y-5">
                <h3 class="font-semibold text-white font-heading text-sm uppercase tracking-wider">Informasi Bengkel</h3>

                <div class="space-y-4 text-sm">
                    <div class="flex items-start gap-3">
                        <div class="w-8 h-8 bg-brand-red/15 flex items-center justify-center shrink-0 mt-0.5">
                            <svg class="w-4 h-4 text-brand-red" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                            </svg>
                        </div>
                        <div>
                            <div class="font-medium text-white mb-0.5">Alamat</div>
                            <p class="text-slate-400 leading-relaxed">{{ config('bengkel.address') }}</p>
                        </div>
                    </div>

                    <div class="flex items-start gap-3">
                        <div class="w-8 h-8 bg-brand-red/15 flex items-center justify-center shrink-0 mt-0.5">
                            <svg class="w-4 h-4 text-brand-red" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                            </svg>
                        </div>
                        <div>
                            <div class="font-medium text-white mb-0.5">Telepon & WhatsApp</div>
                            <a href="tel:{{ config('bengkel.phone') }}" class="text-slate-400 hover:text-white transition-colors block">
                                {{ config('bengkel.phone') }} (WA / Call)
                            </a>
                            <a href="tel:0317590586" class="text-slate-500 hover:text-white transition-colors text-xs block mt-0.5">
                                Kantor: {{ config('bengkel.tel_office') }}
                            </a>
                        </div>
                    </div>

                    <div class="flex items-start gap-3">
                        <div class="w-8 h-8 bg-brand-red/15 flex items-center justify-center shrink-0 mt-0.5">
                            <svg class="w-4 h-4 text-brand-red" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                <circle cx="12" cy="12" r="10" stroke-width="2"/>
                                <path d="M12 6v6l4 2" stroke-linecap="round" stroke-width="2"/>
                            </svg>
                        </div>
                        <div>
                            <div class="font-medium text-white mb-1">Jam Operasional</div>
                            <p class="text-slate-400">{{ config('bengkel.hours.weekday') }}</p>
                            <p class="text-slate-400">{{ config('bengkel.hours.weekend') }}</p>
                        </div>
                    </div>

                    <div class="flex items-start gap-3">
                        <div class="w-8 h-8 bg-brand-red/15 flex items-center justify-center shrink-0 mt-0.5">
                            <svg class="w-4 h-4 text-brand-red" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zM12 0C8.741 0 8.333.014 7.053.072 2.695.272.273 2.69.073 7.052.014 8.333 0 8.741 0 12c0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98C8.333 23.986 8.741 24 12 24c3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98C15.668.014 15.259 0 12 0zm0 5.838a6.162 6.162 0 100 12.324 6.162 6.162 0 000-12.324zM12 16a4 4 0 110-8 4 4 0 010 8zm6.406-11.845a1.44 1.44 0 100 2.881 1.44 1.44 0 000-2.881z"/>
                            </svg>
                        </div>
                        <div>
                            <div class="font-medium text-white mb-0.5">Instagram</div>
                            <a href="https://instagram.com/{{ config('bengkel.instagram') }}"
                               target="_blank" rel="noopener noreferrer"
                               class="text-slate-400 hover:text-white transition-colors">
                                @{{ config('bengkel.instagram') }}
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Phone CTA --}}
            <a href="tel:{{ config('bengkel.phone') }}"
               class="flex items-center justify-center gap-2 glass-card py-4 text-white font-semibold hover:bg-white/12 transition-colors">
                <svg class="w-5 h-5 text-brand-red" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                </svg>
                Hubungi: {{ config('bengkel.phone') }}
            </a>
        </div>

        {{-- Right: Google Maps --}}
        <div class="fade-up space-y-5">
            <div class="glass-card overflow-hidden">
                <iframe
                    src="{{ config('bengkel.maps_embed') }}"
                    width="100%"
                    height="420"
                    style="border:0;"
                    allowfullscreen=""
                    loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"
                    title="Lokasi Kardi Putra Motor di Google Maps"
                    class="w-full block">
                </iframe>
            </div>
            <a href="https://maps.google.com/?q={{ urlencode(config('bengkel.address')) }}"
               target="_blank" rel="noopener noreferrer"
               class="flex items-center justify-center gap-2 glass-card py-3.5 text-sm text-slate-300 hover:text-white font-medium hover:bg-white/12 transition-colors">
                <svg class="w-4 h-4 text-brand-red" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                </svg>
                Buka di Google Maps
            </a>
        </div>
    </div>
</div>
@endsection
