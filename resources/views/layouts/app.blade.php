<!DOCTYPE html>
<html lang="id" class="h-full">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>@yield('title', config('bengkel.name') . ' – ' . config('bengkel.tagline'))</title>
    <meta name="description" content="@yield('meta_description', config('bengkel.name') . ' adalah bengkel mobil terpercaya dengan mekanik berpengalaman, sparepart asli, dan garansi servis. Hubungi kami sekarang!')">

    {{-- Open Graph --}}
    <meta property="og:type"        content="website">
    <meta property="og:site_name"   content="{{ config('bengkel.name') }}">
    <meta property="og:title"       content="@yield('og_title', config('bengkel.name') . ' – ' . config('bengkel.tagline'))">
    <meta property="og:description" content="@yield('og_description', 'Bengkel mobil terpercaya – servis cepat, harga transparan, sparepart asli, garansi resmi.')">
    <meta property="og:image"       content="{{ asset('images/global/og-image.jpg') }}">
    <meta property="og:url"         content="{{ url()->current() }}">
    <meta name="twitter:card"       content="summary_large_image">

    {{-- Favicon --}}
    <link rel="icon" type="image/jpeg" href="{{ asset('images/global/logo-kardiputramotor.jpeg') }}">

    {{-- Preload Fonts --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Sora:wght@400;500;600;700;800&family=Inter:wght@400;500;600&display=swap" rel="stylesheet">

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    @stack('head')
</head>
<body class="min-h-full flex flex-col bg-[#0B0D10] text-slate-200 antialiased selection:bg-brand-blue selection:text-white">

    {{-- Radial background glows --}}
    <div class="fixed inset-0 pointer-events-none overflow-hidden" aria-hidden="true">
        <div class="glow-red -top-32 -right-32"></div>
        <div class="glow-blue bottom-0 -left-48"></div>
    </div>

    {{-- Navbar --}}
    <x-navbar />

    {{-- Main content --}}
    <main class="flex-1 relative z-10">
        @yield('content')
    </main>

    {{-- Footer --}}
    <x-footer />

    @stack('scripts')
</body>
</html>
