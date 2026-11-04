{{-- x-section-title component --}}
@props(['label' => null, 'title', 'subtitle' => null, 'align' => 'center'])

@php $alignClass = $align === 'left' ? 'text-left' : 'text-center'; @endphp

<div class="space-y-3 {{ $alignClass }}">
    @if($label)
        <span class="inline-flex items-center gap-2 text-xs font-semibold text-brand-blue uppercase tracking-widest">
            <span class="w-6 h-px bg-brand-blue"></span>
            {{ $label }}
            <span class="w-6 h-px bg-brand-blue"></span>
        </span>
    @endif

    <h2 class="text-3xl sm:text-4xl font-bold text-white font-heading">
        {!! $title !!}
    </h2>

    @if($subtitle)
        <p class="text-slate-400 text-base leading-relaxed max-w-2xl {{ $align === 'center' ? 'mx-auto' : '' }}">
            {{ $subtitle }}
        </p>
    @endif
</div>
