@extends('layouts.app')

@section('title', $tip['title'] . ' - AutoDrive')

@section('content')

<!-- Header banner (Solid Black, sharp) -->
<div class="bg-black text-white py-14 border-b-4 border-red-600">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-left">
        <nav class="flex items-center gap-2 text-xs text-slate-400 mb-4 uppercase font-bold">
            <a href="{{ route('home') }}" class="hover:text-red-500">Beranda</a>
            <span>/</span>
            <a href="{{ route('tips.index') }}" class="hover:text-red-500">Tips</a>
            <span>/</span>
            <span class="text-white">Artikel</span>
        </nav>

        <div class="flex items-center gap-3 text-xs text-slate-400 mb-3">
            <span class="bg-red-600 text-white font-black px-2 py-0.5 text-[10px] uppercase">{{ $tip['category'] }}</span>
            <span>{{ $tip['date'] }}</span>
            <span>•</span>
            <span>{{ $tip['read_time'] }}</span>
        </div>

        <h1 class="text-2xl sm:text-4xl font-black uppercase tracking-tight text-white leading-tight">
            {{ $tip['title'] }}
        </h1>
    </div>
</div>

<!-- Main Article Body -->
<section class="py-16 bg-slate-100">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="bg-white border-2 border-slate-300 p-6 sm:p-12 space-y-6 text-slate-700 text-xs sm:text-sm leading-relaxed">
            @foreach($tip['content'] as $paragraph)
                <p>{{ $paragraph }}</p>
            @endforeach

            <!-- Advice Box (Solid Yellow, sharp) -->
            <div class="mt-8 p-6 bg-amber-50 border-l-4 border-amber-500">
                <h4 class="font-black uppercase text-amber-950 text-xs mb-1">
                    SARAN MEKANIK AHLI AUTODRIVE:
                </h4>
                <p class="text-xs text-amber-900 leading-relaxed">
                    Jangan menunggu mobil sampai mogok total di tengah jalan. Manfaatkan <strong>Gratis 11 Poin Pengecekan</strong> di seluruh outlet AutoDrive terdekat kami untuk memeriksa kesehatan aki, sistem pelumasan, dan kaki-kaki mobil Anda secara cuma-cuma.
                </p>
                <div class="mt-4 flex items-center gap-3">
                    <a href="{{ route('outlets.index') }}" class="bg-red-600 hover:bg-red-700 text-white font-bold text-xs uppercase px-4 py-2 transition-colors">
                        Kunjungi Bengkel Terdekat &rarr;
                    </a>
                </div>
            </div>
        </div>

        <!-- Related Tips -->
        @if(!empty($otherTips))
            <div class="mt-12">
                <h3 class="text-lg font-black uppercase text-slate-900 mb-6">Artikel Tips Lainnya</h3>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    @foreach($otherTips as $other)
                        <div class="bg-white border-2 border-slate-300 p-6">
                            <span class="text-[10px] font-black text-red-600 uppercase">{{ $other['category'] }}</span>
                            <h4 class="text-sm font-black text-slate-900 uppercase mt-1 mb-2 hover:text-red-600">
                                <a href="{{ route('tips.show', $other['slug']) }}">{{ $other['title'] }}</a>
                            </h4>
                            <p class="text-xs text-slate-500 mb-4 line-clamp-2 leading-relaxed">{{ $other['excerpt'] }}</p>
                            <a href="{{ route('tips.show', $other['slug']) }}" class="text-xs font-bold text-red-600 hover:text-red-700 uppercase">
                                Baca Tips &rarr;
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
        @endif
    </div>
</section>

@endsection
