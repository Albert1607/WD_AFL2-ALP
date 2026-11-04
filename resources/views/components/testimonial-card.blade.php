{{-- x-testimonial-card component --}}
@props(['testimoni'])

<article class="glass-card p-6 flex flex-col gap-4">
    {{-- Stars --}}
    <div class="flex items-center gap-0.5" aria-label="Rating: {{ $testimoni->rating }} dari 5 bintang">
        @for($i = 1; $i <= 5; $i++)
            <svg class="w-4 h-4 {{ $i <= $testimoni->rating ? 'star-filled' : 'star-empty' }}"
                 fill="currentColor" viewBox="0 0 20 20" aria-hidden="true">
                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
            </svg>
        @endfor
    </div>

    {{-- Comment --}}
    <blockquote class="text-sm text-slate-300 leading-relaxed flex-1">
        "{{ $testimoni->komentar }}"
    </blockquote>

    {{-- Customer info --}}
    <footer class="flex items-center gap-3 pt-3 border-t border-white/8">
        {{-- Avatar initial --}}
        <div class="w-9 h-9 bg-brand-red/20 border border-brand-red/30 flex items-center justify-center text-brand-red font-bold text-sm font-heading shrink-0">
            {{ mb_strtoupper(mb_substr($testimoni->nama_pelanggan, 0, 1)) }}
        </div>
        <div class="min-w-0">
            <div class="text-sm font-semibold text-white truncate">{{ $testimoni->nama_pelanggan }}</div>
            <div class="text-xs text-slate-500 truncate flex items-center gap-1.5">
                {{-- Car icon --}}
                <svg class="w-3.5 h-3.5 text-brand-red" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7h-3l-2-4H9L7 7H4a1 1 0 00-1 1v8a1 1 0 001 1h1a2 2 0 004 0h6a2 2 0 004 0h1a1 1 0 001-1V8a1 1 0 00-1-1z"/>
                </svg>
                {{ $testimoni->jenis_kendaraan }}
            </div>
            @if($testimoni->layanan)
                <div class="text-[10px] text-slate-600 mt-0.5">{{ $testimoni->layanan->nama_layanan }}</div>
            @endif
        </div>
    </footer>
</article>
