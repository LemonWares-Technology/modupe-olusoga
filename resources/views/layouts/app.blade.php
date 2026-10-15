<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="h-full bg-brand-cream text-brand-charcoal">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title', 'Modupe Olusoga | Institutional Leader, Executive & Thought Leader')</title>
    <meta name="description" content="@yield('meta_description', 'Official platform of Modupe Olusoga — Institutional Leader, COO of Streamsowers & Köhn, ALAN President, speaker, coach, and author of Building the Transgenerational Law Firm.')">

    <!-- Open Graph / Meta -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:title" content="@yield('title', 'Modupe Olusoga | Institutional Leader')">
    <meta property="og:description" content="@yield('meta_description', 'Building institutions and leaders that endure.')">
    <meta property="og:image" content="{{ asset('images/modupe_portrait.jpg') }}">

    <!-- Preconnect / CDN hints if needed -->
    <link rel="canonical" href="{{ url()->current() }}">

    <!-- Vite Styles and Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="min-h-full flex flex-col font-sans antialiased bg-brand-cream selection:bg-brand-gold selection:text-white relative">

    <!-- Archival Film Grain Texture -->
    <div class="grain-overlay" aria-hidden="true"></div>

    <!-- Desktop Minimal Custom Cursor -->
    <div class="custom-cursor-dot" aria-hidden="true"></div>
    <div class="custom-cursor-ring" aria-hidden="true"></div>

    <!-- Master Header Navigation -->
    <x-nav />

    <!-- System Flash Notifications -->
    <x-flash />

    <!-- Main Dynamic Swup Content Container -->
    <main id="swup" class="transition-fade flex-grow focus:outline-none" tabindex="-1">
        @yield('content')
    </main>

    <!-- Master Architectural Footer -->
    <x-footer />

    @stack('scripts')
</body>
</html>
