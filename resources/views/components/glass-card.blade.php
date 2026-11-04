{{-- x-glass-card component --}}
@props(['class' => '', 'as' => 'div'])

<{{ $as }} {{ $attributes->merge(['class' => 'glass-card ' . $class]) }}>
    {{ $slot }}
</{{ $as }}>
