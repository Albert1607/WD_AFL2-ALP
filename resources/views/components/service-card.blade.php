{{-- x-service-card component --}}
@props(['layanan'])

@php
    $imagePath = 'images/' . ($layanan->gambar ?? 'layanan-default.jpg');
    $imageUrl  = asset($imagePath);
    $detailUrl = route('layanan.show', $layanan->slug);
@endphp

<article class="glass-card service-card overflow-hidden flex flex-col h-full group">
    {{-- Image --}}
    <div class="relative h-48 overflow-hidden">
        <img src="{{ $imageUrl }}"
             alt="Foto layanan {{ $layanan->nama_layanan }}"
             class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105"
             width="400" height="192"
             loading="lazy">
        {{-- Gradient overlay --}}
        <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/20 to-transparent"></div>
        {{-- Category badge --}}
        @if($layanan->kategori)
            <span class="absolute top-3 left-3 px-2.5 py-1 bg-brand-red/90 text-white text-[10px] font-semibold uppercase tracking-wide backdrop-blur-sm">
                {{ $layanan->kategori->nama_kategori }}
            </span>
        @endif
    </div>

    {{-- Body --}}
    <div class="p-5 flex flex-col flex-1 gap-3">
        <h3 class="text-base font-bold text-white font-heading leading-snug">
            {{ $layanan->nama_layanan }}
        </h3>
        <p class="text-sm text-slate-400 leading-relaxed line-clamp-2 flex-1">
            {{ $layanan->deskripsi }}
        </p>

        {{-- Meta --}}
        <div class="flex items-center gap-4 text-xs text-slate-500 pt-1">
            <span class="flex items-center gap-1.5">
                {{-- Clock icon --}}
                <svg class="w-3.5 h-3.5 text-brand-red" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                    <circle cx="12" cy="12" r="10" stroke-width="2"/>
                    <path d="M12 6v6l4 2" stroke-linecap="round" stroke-width="2"/>
                </svg>
                {{ $layanan->estimasi_durasi }}
            </span>
        </div>

        {{-- Price + CTA --}}
        <div class="flex items-center justify-between pt-2 border-t border-white/8 mt-auto">
            <div>
                <span class="text-[10px] text-slate-500 uppercase tracking-wide">Mulai dari</span>
                <div class="text-brand-red font-bold text-sm font-heading">
                    {{ $layanan->harga_formatted }}
                </div>
            </div>
            <a href="{{ $detailUrl }}"
               class="text-xs font-semibold text-white bg-white/10 hover:bg-brand-red px-3 py-1.5 transition-colors duration-200">
                Detail →
            </a>
        </div>
    </div>
</article>
