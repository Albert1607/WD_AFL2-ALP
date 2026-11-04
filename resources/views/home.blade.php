@extends('layouts.app')

@section('title', config('bengkel.name') . ' – ' . config('bengkel.tagline'))
@section('meta_description', 'Kardi Putra Motor – bengkel mobil terpercaya di Driyorejo, Gresik. Mekanik berpengalaman, sparepart asli, servis cepat, dan garansi resmi. Hubungi kami sekarang!')

@push('head')
{{-- LocalBusiness JSON-LD structured data --}}
<script type="application/ld+json">
{
  "@@context": "https://schema.org",
  "@@type": "AutoRepair",
  "name": "{{ config('bengkel.name') }}",
  "description": "{{ config('bengkel.tagline') }}",
  "url": "{{ url('/') }}",
  "telephone": "{{ config('bengkel.phone') }}",
  "address": {
    "@@type": "PostalAddress",
    "streetAddress": "Jl. Raya Cangkir No. KM 22",
    "addressLocality": "Driyorejo, Gresik",
    "addressRegion": "Jawa Timur",
    "postalCode": "61177",
    "addressCountry": "ID"
  },
  "openingHours": ["Mo-Sa 08:00-16:00"],
  "priceRange": "Rp 150.000 \u2013 Rp 1.500.000",
  "image": "{{ asset('images/kardiputramotor_landscape.jpeg') }}"
}
</script>
@endpush

@section('content')

{{-- ═══════════════════════════════════════════════════════════
     HERO SECTION
     ══════════════════════════════════════════════════════════ --}}
<section class="relative min-h-[90vh] flex items-center overflow-hidden" aria-label="Hero">
    {{-- Background image with dark overlay --}}
    <div class="absolute inset-0">
        <img src="{{ asset('images/kardiputramotor_landscape.jpeg') }}"
             alt="Bengkel Mobil Kardi Putra Motor di Driyorejo Gresik"
             class="w-full h-full object-cover object-center lg:object-[center_right]"
             width="1600" height="900"
             fetchpriority="high">
        {{-- Layered gradients for optimal text contrast and natural photo visibility --}}
        <div class="absolute inset-0 bg-gradient-to-t sm:bg-gradient-to-r from-[#0B0D10] via-[#0B0D10]/85 via-55% to-[#0B0D10]/30"></div>
        <div class="absolute inset-0 bg-gradient-to-t from-[#0B0D10] via-[#0B0D10]/60 to-transparent"></div>
        <div class="absolute inset-0 bg-gradient-to-b from-[#0B0D10]/85 via-transparent to-transparent"></div>
        <div class="absolute inset-0 bg-[radial-gradient(ellipse_at_top_left,_rgba(229,37,42,0.14),_transparent_60%)] pointer-events-none"></div>
    </div>

    {{-- Hero content --}}
    <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pt-28 pb-36 sm:pb-36 lg:py-32 w-full">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-center">
            {{-- Left column: Headline & CTAs --}}
            <div class="lg:col-span-7 space-y-7">
                {{-- Location / Trust Badge --}}
                <div class="inline-flex items-center gap-2.5 px-3.5 py-1.5 bg-brand-red/10 border border-brand-red/30 text-white text-xs sm:text-sm font-semibold tracking-wide backdrop-blur-md">
                    <span class="w-2 h-2 bg-brand-red inline-block animate-pulse" aria-hidden="true"></span>
                    <span class="text-brand-red font-bold">BENGKEL RESMI &amp; TERPERCAYA</span>
                    <span class="text-slate-500" aria-hidden="true">|</span>
                    <span class="text-slate-200">Driyorejo, Gresik</span>
                </div>

                {{-- Headline --}}
                <h1 class="text-4xl sm:text-5xl lg:text-6xl font-extrabold text-white font-heading leading-tight drop-shadow-sm">
                    Servis Mobil Cepat,<br>
                    <span class="text-brand-red">Jujur</span>, &amp; Bergaransi
                </h1>

                {{-- Subtitle --}}
                <p class="text-base sm:text-lg text-slate-300 leading-relaxed max-w-xl">
                    Mekanik berpengalaman, sparepart asli, estimasi biaya transparan.<br class="hidden sm:block">
                    Percayakan perawatan mobil Anda langsung di bengkel Kardi Putra Motor.
                </p>

                {{-- Quick Feature Highlights --}}
                <div class="flex flex-wrap gap-2 pt-1 text-xs text-slate-300">
                    <span class="inline-flex items-center gap-1.5 px-3 py-1 bg-white/5 border border-white/10">
                        <svg class="w-3.5 h-3.5 text-brand-red shrink-0" fill="currentColor" viewBox="0 0 20 20" aria-hidden="true"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>
                        Estimasi Transparan di Awal
                    </span>
                    <span class="inline-flex items-center gap-1.5 px-3 py-1 bg-white/5 border border-white/10">
                        <svg class="w-3.5 h-3.5 text-brand-red shrink-0" fill="currentColor" viewBox="0 0 20 20" aria-hidden="true"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>
                        Mekanik Berpengalaman
                    </span>
                    <span class="inline-flex items-center gap-1.5 px-3 py-1 bg-white/5 border border-white/10">
                        <svg class="w-3.5 h-3.5 text-brand-red shrink-0" fill="currentColor" viewBox="0 0 20 20" aria-hidden="true"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>
                        Garansi Servis Resmi
                    </span>
                </div>

                {{-- CTAs --}}
                <div class="flex flex-col sm:flex-row gap-3 pt-2">
                    <a href="https://wa.me/{{ config('bengkel.wa') }}?text={{ config('bengkel.wa_message') }}"
                       target="_blank" rel="noopener noreferrer"
                       class="inline-flex items-center justify-center gap-2 bg-brand-red hover:bg-red-700 text-white font-semibold px-6 py-3.5 transition-all duration-200 shadow-lg shadow-red-900/50 hover:shadow-red-900/70 hover:-translate-y-0.5">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path d="M12.04 2c-5.46 0-9.91 4.45-9.91 9.91 0 1.75.46 3.45 1.32 4.95L2.05 22l5.25-1.38c1.45.79 3.08 1.21 4.74 1.21 5.46 0 9.91-4.45 9.91-9.91 0-2.65-1.03-5.14-2.9-7.01A9.816 9.816 0 0012.04 2z"/>
                        </svg>
                        Konsultasi via WhatsApp
                    </a>
                    <a href="{{ route('layanan.index') }}"
                       class="inline-flex items-center justify-center gap-2 glass-card text-white font-semibold px-6 py-3.5 hover:bg-white/12 transition-all duration-200 hover:-translate-y-0.5">
                        Lihat Semua Layanan
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                        </svg>
                    </a>
                </div>
            </div>

            {{-- Right column: Workshop Info Glass Card (Visible on desktop) --}}
            <div class="hidden lg:flex lg:col-span-5 flex-col items-end justify-center">
                <div class="glass-card p-6 max-w-sm w-full space-y-4 border-l-2 border-l-brand-red backdrop-blur-xl">
                    <div class="flex items-center justify-between">
                        <span class="text-xs uppercase tracking-wider font-semibold text-brand-red">Lokasi Bengkel</span>
                        <span class="inline-flex items-center gap-1.5 text-xs text-emerald-400 font-medium">
                            <span class="w-2 h-2 bg-emerald-400 inline-block animate-pulse" aria-hidden="true"></span>
                            Buka Hari Ini
                        </span>
                    </div>
                    <div>
                        <h2 class="text-lg font-bold text-white font-heading">Kardi Putra Motor</h2>
                        <p class="text-xs text-slate-300 mt-1 leading-relaxed">
                            {{ config('bengkel.address') }}
                        </p>
                    </div>
                    <div class="pt-3 border-t border-white/10 flex items-center justify-between text-xs text-slate-400">
                        <span>Senin – Sabtu</span>
                        <span class="font-semibold text-white">08:00 – 16:00 WIB</span>
                    </div>
                    <a href="https://maps.google.com/?q={{ urlencode(config('bengkel.address')) }}"
                       target="_blank" rel="noopener noreferrer"
                       class="inline-flex items-center justify-center gap-2 w-full py-2.5 bg-white/5 hover:bg-white/10 border border-white/10 text-xs font-semibold text-white transition-all hover:border-brand-red/50">
                        <svg class="w-4 h-4 text-brand-red" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                        </svg>
                        Petunjuk Arah Google Maps
                    </a>
                </div>
            </div>
        </div>
    </div>

    {{-- Trust bar --}}
    <div class="absolute bottom-0 left-0 right-0 z-10">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pb-0">
            <div class="glass-card border-b-0 px-6 py-4 grid grid-cols-2 md:grid-cols-4 gap-4">
                @php
                    $trustItems = [
                        ['icon' => 'bolt',   'text' => 'Servis Cepat & Tepat'],
                        ['icon' => 'wrench', 'text' => 'Mekanik Berpengalaman'],
                        ['icon' => 'shield', 'text' => 'Sparepart Asli 100%'],
                        ['icon' => 'star',   'text' => 'Garansi Resmi'],
                    ];
                @endphp
                @foreach($trustItems as $item)
                    <div class="flex items-center gap-3">
                        <div class="w-8 h-8 bg-brand-red/15 flex items-center justify-center shrink-0">
                            @if($item['icon'] === 'bolt')
                                <svg class="w-4 h-4 text-brand-red" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/>
                                </svg>
                            @elseif($item['icon'] === 'wrench')
                                <svg class="w-4 h-4 text-brand-red" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"/><circle cx="12" cy="12" r="3" stroke-width="2"/>
                                </svg>
                            @elseif($item['icon'] === 'shield')
                                <svg class="w-4 h-4 text-brand-red" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>
                                </svg>
                            @else
                                <svg class="w-4 h-4 text-brand-red" fill="currentColor" viewBox="0 0 20 20" aria-hidden="true">
                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                </svg>
                            @endif
                        </div>
                        <span class="text-sm font-medium text-white">{{ $item['text'] }}</span>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</section>

{{-- ═══════════════════════════════════════════════════════════
     STATS BAR
     ══════════════════════════════════════════════════════════ --}}
<section class="py-16 relative" aria-label="Statistik">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
            @foreach($stats as $stat)
                <div class="glass-card p-6 text-center fade-up">
                    <div class="text-3xl sm:text-4xl font-extrabold text-brand-red font-heading">{{ $stat['value'] }}</div>
                    <div class="text-sm text-slate-400 mt-1">{{ $stat['label'] }}</div>
                </div>
            @endforeach
        </div>
    </div>
</section>

{{-- ═══════════════════════════════════════════════════════════
     FEATURED SERVICES
     ══════════════════════════════════════════════════════════ --}}
<section class="py-20 relative" aria-labelledby="layanan-heading">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 space-y-12">
        <div class="fade-up">
            <x-section-title
                label="Layanan Kami"
                title='Layanan Unggulan <span class="text-brand-red">Mobil</span> Anda'
                subtitle="Dari servis rutin hingga overhaul mesin, kami siap menangani semua kebutuhan perawatan mobil Anda dengan profesional."
            />
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach($featuredLayanan as $layanan)
                <div class="fade-up" style="transition-delay: {{ $loop->index * 80 }}ms">
                    <x-service-card :layanan="$layanan" />
                </div>
            @endforeach
        </div>

        <div class="text-center fade-up">
            <a href="{{ route('layanan.index') }}"
               class="inline-flex items-center gap-2 glass-card px-8 py-3.5 text-white font-semibold hover:bg-white/12 transition-all duration-200 hover:-translate-y-0.5">
                Lihat Semua Layanan
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                </svg>
            </a>
        </div>
    </div>
</section>

{{-- ═══════════════════════════════════════════════════════════
     WHY CHOOSE US
     ══════════════════════════════════════════════════════════ --}}
<section class="py-20 relative overflow-hidden" aria-labelledby="why-heading">
    {{-- Glow accent --}}
    <div class="glow-blue absolute -right-48 top-0" aria-hidden="true"></div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 space-y-12">
        <div class="fade-up">
            <x-section-title
                label="Keunggulan Kami"
                title='Mengapa Pilih <span class="text-brand-red">Kardi Putra Motor</span>?'
                subtitle="Kami berkomitmen memberikan servis terbaik dengan standar kualitas tinggi dan kepuasan pelanggan sebagai prioritas utama."
            />
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-5">
            @foreach($whyUs as $item)
                <div class="glass-card p-6 flex gap-4 items-start fade-up hover:border-brand-red/30 transition-colors duration-300" style="transition-delay: {{ $loop->index * 60 }}ms">
                    <div class="w-10 h-10 bg-brand-red/15 flex items-center justify-center shrink-0 mt-0.5">
                        @if($item['icon'] === 'wrench')
                            <svg class="w-5 h-5 text-brand-red" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"/><circle cx="12" cy="12" r="3" stroke-width="2"/>
                            </svg>
                        @elseif($item['icon'] === 'currency')
                            <svg class="w-5 h-5 text-brand-red" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                            </svg>
                        @elseif($item['icon'] === 'shield')
                            <svg class="w-5 h-5 text-brand-red" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>
                            </svg>
                        @elseif($item['icon'] === 'clock')
                            <svg class="w-5 h-5 text-brand-red" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                <circle cx="12" cy="12" r="10" stroke-width="2"/>
                                <path d="M12 6v6l4 2" stroke-linecap="round" stroke-width="2"/>
                            </svg>
                        @elseif($item['icon'] === 'star')
                            <svg class="w-5 h-5 text-brand-red" fill="currentColor" viewBox="0 0 20 20" aria-hidden="true">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                            </svg>
                        @else
                            <svg class="w-5 h-5 text-brand-red" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"/>
                            </svg>
                        @endif
                    </div>
                    <div>
                        <h3 class="font-semibold text-white font-heading mb-1">{{ $item['title'] }}</h3>
                        <p class="text-sm text-slate-400 leading-relaxed">{{ $item['desc'] }}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>

{{-- ═══════════════════════════════════════════════════════════
     TESTIMONIALS
     ══════════════════════════════════════════════════════════ --}}
<section class="py-20 relative overflow-hidden" aria-labelledby="testimoni-heading">
    <div class="glow-red absolute -left-48 top-20" aria-hidden="true"></div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 space-y-12">
        <div class="fade-up">
            <x-section-title
                label="Testimoni"
                title='Apa Kata <span class="text-brand-red">Pelanggan</span> Kami'
                subtitle="Ribuan pelanggan telah mempercayakan mobil mereka kepada kami. Ini yang mereka katakan."
            />
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            @foreach($latestTestimoni as $testimoni)
                <div class="fade-up" style="transition-delay: {{ $loop->index * 100 }}ms">
                    <x-testimonial-card :testimoni="$testimoni" />
                </div>
            @endforeach
        </div>

        <div class="text-center fade-up">
            <a href="{{ route('testimoni.index') }}"
               class="inline-flex items-center gap-2 glass-card px-8 py-3.5 text-white font-semibold hover:bg-white/12 transition-all duration-200 hover:-translate-y-0.5">
                Lihat Semua Testimoni
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                </svg>
            </a>
        </div>
    </div>
</section>

{{-- ═══════════════════════════════════════════════════════════
     HOW IT WORKS
     ══════════════════════════════════════════════════════════ --}}
<section class="py-20 relative" aria-labelledby="how-heading">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 space-y-12">
        <div class="fade-up">
            <x-section-title
                label="Cara Kerja"
                title='Cara <span class="text-brand-red">Mudah</span> Servis di KPM'
                subtitle="Proses servis yang sederhana, transparan, dan tanpa kerumitan."
            />
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 relative">
            @foreach($howItWorks as $step)
                <div class="fade-up text-center relative" style="transition-delay: {{ $loop->index * 100 }}ms">
                    {{-- Connector line (desktop only, not last) --}}
                    @if(!$loop->last)
                        <div class="hidden lg:block absolute top-6 left-[calc(50%+2.5rem)] right-0 h-px bg-gradient-to-r from-brand-red/40 to-transparent" aria-hidden="true"></div>
                    @endif

                    <div class="glass-card p-6 space-y-4 h-full">
                        {{-- Step number --}}
                        <div class="w-12 h-12 mx-auto bg-brand-red/15 border border-brand-red/30 flex items-center justify-center">
                            <span class="text-brand-red font-extrabold text-sm font-heading">{{ $step['step'] }}</span>
                        </div>
                        <h3 class="font-semibold text-white font-heading">{{ $step['title'] }}</h3>
                        <p class="text-sm text-slate-400 leading-relaxed">{{ $step['desc'] }}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>

{{-- ═══════════════════════════════════════════════════════════
     BRAND STRIP
     ══════════════════════════════════════════════════════════ --}}
<section class="py-14 border-y border-white/8" aria-label="Brand mitra kami">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <p class="text-center text-xs text-slate-600 uppercase tracking-widest mb-8 font-semibold">
            Sparepart & Oli yang kami gunakan
        </p>
        <div class="flex flex-wrap items-center justify-center gap-6 sm:gap-10">
            @foreach($brands as $brand)
                <span class="brand-item text-slate-400 font-bold text-sm sm:text-base font-heading cursor-default select-none">
                    {{ $brand }}
                </span>
            @endforeach
        </div>
    </div>
</section>

{{-- ═══════════════════════════════════════════════════════════
     CTA BAND (replaces booking form)
     ══════════════════════════════════════════════════════════ --}}
<section class="py-20 relative overflow-hidden" aria-label="Call to action">
    <div class="glow-red absolute top-0 right-0 translate-x-1/2 -translate-y-1/2" aria-hidden="true"></div>

    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="glass-card p-10 sm:p-14 text-center space-y-7 relative overflow-hidden">
            {{-- Inner glow --}}
            <div class="absolute inset-0 bg-gradient-to-br from-brand-red/8 via-transparent to-transparent pointer-events-none"></div>

            <div class="relative space-y-5">
                <span class="inline-flex items-center gap-2 text-xs font-semibold text-brand-red uppercase tracking-widest">
                    <span class="w-6 h-px bg-brand-red"></span>
                    Siap Diservis?
                    <span class="w-6 h-px bg-brand-red"></span>
                </span>
                <h2 class="text-3xl sm:text-4xl font-bold text-white font-heading">
                    Mobil Anda Butuh Perhatian?<br>
                    <span class="text-brand-red">Hubungi Kami Sekarang</span>
                </h2>
                <p class="text-slate-400 max-w-xl mx-auto leading-relaxed">
                    Konsultasi gratis via WhatsApp. Mekanik kami siap memberikan estimasi biaya dan waktu pengerjaan sebelum Anda memutuskan.
                </p>
                <div class="flex flex-col sm:flex-row items-center justify-center gap-4 pt-2">
                    <a href="https://wa.me/{{ config('bengkel.wa') }}?text={{ config('bengkel.wa_message') }}"
                       target="_blank" rel="noopener noreferrer"
                       class="inline-flex items-center gap-3 bg-brand-red hover:bg-red-700 text-white font-semibold px-8 py-4 transition-all duration-200 shadow-xl shadow-red-900/50 hover:-translate-y-0.5">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path d="M12.04 2c-5.46 0-9.91 4.45-9.91 9.91 0 1.75.46 3.45 1.32 4.95L2.05 22l5.25-1.38c1.45.79 3.08 1.21 4.74 1.21 5.46 0 9.91-4.45 9.91-9.91 0-2.65-1.03-5.14-2.9-7.01A9.816 9.816 0 0012.04 2z"/>
                        </svg>
                        Chat via WhatsApp
                    </a>
                    <a href="tel:{{ config('bengkel.phone') }}"
                       class="inline-flex items-center gap-2 text-white font-semibold px-6 py-4 glass-card hover:bg-white/12 transition-all duration-200 hover:-translate-y-0.5">
                        <svg class="w-5 h-5 text-brand-red" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                        </svg>
                        Telepon Langsung
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
