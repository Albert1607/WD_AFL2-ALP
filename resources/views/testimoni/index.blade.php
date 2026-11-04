@extends('layouts.app')

@section('title', 'Testimoni Pelanggan – ' . config('bengkel.name'))
@section('meta_description', 'Baca testimoni pelanggan ' . config('bengkel.name') . '. Mobil mereka sudah diservis dan mereka puas. Rating rata-rata ' . number_format($averageRating, 1) . '/5.')

@section('content')
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16 space-y-12">

    {{-- Header --}}
    <div class="fade-up">
        <x-section-title
            label="Testimoni"
            title='Kata Mereka tentang <span class="text-brand-red">KPM</span>'
            subtitle="Kepuasan pelanggan adalah prioritas kami. Baca pengalaman nyata dari pelanggan yang telah mempercayakan mobilnya kepada kami."
        />
    </div>

    {{-- Rating summary --}}
    <div class="glass-card p-8 flex flex-col sm:flex-row items-center gap-8 fade-up max-w-2xl mx-auto">
        <div class="text-center shrink-0">
            <div class="text-6xl font-extrabold text-brand-red font-heading">{{ number_format($averageRating, 1) }}</div>
            <div class="flex items-center justify-center gap-0.5 mt-2" aria-label="Rating rata-rata {{ number_format($averageRating, 1) }} bintang">
                @for($i = 1; $i <= 5; $i++)
                    <svg class="w-5 h-5 {{ $i <= round($averageRating) ? 'star-filled' : 'star-empty' }}"
                         fill="currentColor" viewBox="0 0 20 20" aria-hidden="true">
                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                    </svg>
                @endfor
            </div>
            <div class="text-sm text-slate-500 mt-2">dari 5 bintang</div>
        </div>
        <div class="flex-1 w-full space-y-2">
            @for($star = 5; $star >= 1; $star--)
                @php
                    $count = $testimoni->where('rating', $star)->count();
                    $pct   = $totalCount > 0 ? ($count / $totalCount) * 100 : 0;
                @endphp
                <div class="flex items-center gap-3 text-sm">
                    <span class="text-slate-400 w-4 text-right shrink-0">{{ $star }}</span>
                    <svg class="w-4 h-4 star-filled shrink-0" fill="currentColor" viewBox="0 0 20 20" aria-hidden="true">
                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                    </svg>
                    <div class="flex-1 bg-white/8 h-2 overflow-hidden">
                        <div class="h-full bg-brand-red transition-all duration-700" style="width: {{ $pct }}%"></div>
                    </div>
                    <span class="text-slate-500 w-6 text-right shrink-0">{{ $count }}</span>
                </div>
            @endfor
        </div>
    </div>

    {{-- Testimonials grid --}}
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        @foreach($testimoni as $t)
            <div class="fade-up" style="transition-delay: {{ ($loop->index % 3) * 80 }}ms">
                <x-testimonial-card :testimoni="$t" />
            </div>
        @endforeach
    </div>

    {{-- Pagination --}}
    @if($testimoni->hasPages())
        <div class="flex justify-center fade-up">
            {{ $testimoni->links() }}
        </div>
    @endif

    {{-- CTA --}}
    <div class="text-center space-y-4 fade-up pt-8 border-t border-white/8">
        <p class="text-slate-400">Punya pengalaman servis di Kardi Putra Motor?</p>
        <a href="https://wa.me/{{ config('bengkel.wa') }}?text=Halo%20KPM%2C%20saya%20ingin%20memberikan%20testimoni"
           target="_blank" rel="noopener noreferrer"
           class="inline-flex items-center gap-2 bg-brand-red hover:bg-red-700 text-white font-semibold px-6 py-3 transition-colors">
            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                <path d="M12.04 2c-5.46 0-9.91 4.45-9.91 9.91 0 1.75.46 3.45 1.32 4.95L2.05 22l5.25-1.38c1.45.79 3.08 1.21 4.74 1.21 5.46 0 9.91-4.45 9.91-9.91 0-2.65-1.03-5.14-2.9-7.01A9.816 9.816 0 0012.04 2z"/>
            </svg>
            Bagikan Pengalaman Anda
        </a>
    </div>
</div>
@endsection
