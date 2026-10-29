@extends('layouts.app')

@section('title', 'Tips & Panduan Perawatan Mobil - AutoDrive')

@section('content')

<!-- Header banner (Solid Black, sharp) -->
<div class="bg-black text-white py-16 border-b-4 border-red-600">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-left">
        <span class="text-xs font-black text-amber-400 uppercase tracking-widest block mb-2">
            EDUKASI OTOMOTIF
        </span>
        <h1 class="text-3xl sm:text-5xl font-black uppercase tracking-tight">
            Tips & Panduan Perawatan Mobil
        </h1>
        <p class="text-slate-300 text-xs sm:text-sm max-w-2xl mt-3">
            Kumpulan panduan praktis dari para mekanik profesional AutoDrive untuk menjaga kendaraan Anda tetap awet, prima, dan aman dikendarai.
        </p>
    </div>
</div>

<!-- Tips Articles Grid -->
<section class="py-16 bg-slate-100">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            @foreach($tips as $tip)
                <article class="bg-white border-2 border-slate-300 p-6 flex flex-col justify-between hover:border-red-600 transition-colors">
                    <div>
                        <div class="flex items-center justify-between text-xs text-slate-500 mb-3 pb-2 border-b border-slate-100">
                            <span class="font-black text-red-600 uppercase text-[10px]">{{ $tip['category'] }}</span>
                            <span class="font-medium">{{ $tip['read_time'] }}</span>
                        </div>
                        <h2 class="text-base font-black text-slate-900 uppercase hover:text-red-600 transition-colors mb-3 leading-snug">
                            <a href="{{ route('tips.show', $tip['slug']) }}">
                                {{ $tip['title'] }}
                            </a>
                        </h2>
                        <p class="text-xs text-slate-600 leading-relaxed mb-6">
                            {{ $tip['excerpt'] }}
                        </p>
                    </div>

                    <div class="pt-4 border-t border-slate-200 flex items-center justify-between text-xs">
                        <span class="text-slate-400 text-[11px]">{{ $tip['date'] }}</span>
                        <a href="{{ route('tips.show', $tip['slug']) }}" class="font-bold text-red-600 hover:text-red-700 uppercase">
                            Baca Ulasan &rarr;
                        </a>
                    </div>
                </article>
            @endforeach
        </div>
    </div>
</section>

@endsection
