<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="h-full bg-[#f6f3ed] text-[#1c232c]">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title', 'Executive Studio') | Modupe Olusoga Admin</title>

    <!-- Vite Styles and Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="min-h-full flex flex-col font-sans antialiased bg-[#f6f3ed] text-[#1c232c] selection:bg-brand-gold selection:text-white">

    <!-- Top Executive Navigation Bar -->
    <header class="bg-brand-navy text-white sticky top-0 z-40 border-b border-white/10 shadow-sm">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between h-16">
                
                <!-- Left: Identity & Badges -->
                <div class="flex items-center gap-6">
                    <a href="{{ route('admin.dashboard') }}" class="flex items-center gap-3 group">
                        <div class="w-8 h-8 rounded-full bg-brand-gold/20 border border-brand-gold/60 flex items-center justify-center text-brand-gold font-serif text-sm font-semibold group-hover:bg-brand-gold group-hover:text-brand-navy transition-colors">
                            MO
                        </div>
                        <div class="leading-tight">
                            <span class="font-serif text-base font-normal tracking-wide text-white block">MODUPE OLUSOGA</span>
                            <span class="text-[9px] uppercase tracking-[0.2em] text-brand-gold font-medium block">Executive Suite</span>
                        </div>
                    </a>

                    <!-- Section Links (Desktop) -->
                    <nav class="hidden md:flex items-center gap-1 pl-4 border-l border-white/10 text-xs">
                        <a href="{{ route('admin.dashboard') }}" class="px-3 py-1.5 rounded-full {{ request()->routeIs('admin.dashboard') ? 'bg-white/10 text-brand-gold font-medium' : 'text-brand-stone/70 hover:text-white hover:bg-white/5' }} transition-colors">
                            Dashboard
                        </a>
                        <a href="{{ route('admin.insights.index') }}" class="px-3 py-1.5 rounded-full {{ request()->routeIs('admin.insights.*') ? 'bg-white/10 text-brand-gold font-medium' : 'text-brand-stone/70 hover:text-white hover:bg-white/5' }} transition-colors">
                            Insights &amp; Essays
                        </a>
                        <a href="{{ route('admin.submissions.mentorship') }}" class="px-3 py-1.5 rounded-full {{ request()->routeIs('admin.submissions.mentorship') ? 'bg-white/10 text-brand-gold font-medium' : 'text-brand-stone/70 hover:text-white hover:bg-white/5' }} transition-colors">
                            Mentorship
                        </a>
                        <a href="{{ route('admin.submissions.speaking') }}" class="px-3 py-1.5 rounded-full {{ request()->routeIs('admin.submissions.speaking') ? 'bg-white/10 text-brand-gold font-medium' : 'text-brand-stone/70 hover:text-white hover:bg-white/5' }} transition-colors">
                            Speaking
                        </a>
                        <a href="{{ route('admin.submissions.book-waitlist') }}" class="px-3 py-1.5 rounded-full {{ request()->routeIs('admin.submissions.book-waitlist') ? 'bg-white/10 text-brand-gold font-medium' : 'text-brand-stone/70 hover:text-white hover:bg-white/5' }} transition-colors">
                            Book Waitlist
                        </a>
                        <a href="{{ route('admin.submissions.subscribers') }}" class="px-3 py-1.5 rounded-full {{ request()->routeIs('admin.submissions.subscribers') ? 'bg-white/10 text-brand-gold font-medium' : 'text-brand-stone/70 hover:text-white hover:bg-white/5' }} transition-colors">
                            Subscribers
                        </a>
                    </nav>
                </div>

                <!-- Right: Utilities & User -->
                <div class="flex items-center gap-4">
                    <a href="{{ route('home') }}" target="_blank" class="hidden sm:inline-flex items-center gap-1.5 text-xs text-brand-stone/70 hover:text-white transition-colors px-3 py-1 rounded border border-white/15 hover:border-white/30">
                        <span>View Public Site</span>
                        <span class="text-brand-gold">&nearr;</span>
                    </a>

                    <div class="flex items-center gap-3 pl-3 border-l border-white/10">
                        <div class="hidden sm:block text-right text-xs leading-none">
                            <span class="text-white block font-medium">{{ Auth::user()->name ?? 'Modupe Olusoga' }}</span>
                            <span class="text-[10px] text-brand-stone/50 block mt-0.5">{{ Auth::user()->email ?? 'admin' }}</span>
                        </div>
                        <form action="{{ route('admin.logout') }}" method="POST">
                            @csrf
                            <button type="submit" class="text-xs text-brand-stone/70 hover:text-brand-gold transition-colors px-2.5 py-1 rounded hover:bg-white/5" title="Sign out of executive suite">
                                Sign Out &rarr;
                            </button>
                        </form>
                    </div>

                </div>

            </div>
        </div>
    </header>

    <!-- Sub-navigation for Mobile Devices -->
    <nav class="md:hidden bg-brand-midnight text-brand-stone/80 border-b border-white/10 overflow-x-auto text-xs py-2 px-4 flex gap-2">
        <a href="{{ route('admin.dashboard') }}" class="whitespace-nowrap px-3 py-1 rounded {{ request()->routeIs('admin.dashboard') ? 'bg-white/10 text-brand-gold font-semibold' : '' }}">Dashboard</a>
        <a href="{{ route('admin.insights.index') }}" class="whitespace-nowrap px-3 py-1 rounded {{ request()->routeIs('admin.insights.*') ? 'bg-white/10 text-brand-gold font-semibold' : '' }}">Insights</a>
        <a href="{{ route('admin.submissions.mentorship') }}" class="whitespace-nowrap px-3 py-1 rounded {{ request()->routeIs('admin.submissions.mentorship') ? 'bg-white/10 text-brand-gold font-semibold' : '' }}">Mentorship</a>
        <a href="{{ route('admin.submissions.speaking') }}" class="whitespace-nowrap px-3 py-1 rounded {{ request()->routeIs('admin.submissions.speaking') ? 'bg-white/10 text-brand-gold font-semibold' : '' }}">Speaking</a>
        <a href="{{ route('admin.submissions.book-waitlist') }}" class="whitespace-nowrap px-3 py-1 rounded {{ request()->routeIs('admin.submissions.book-waitlist') ? 'bg-white/10 text-brand-gold font-semibold' : '' }}">Book Waitlist</a>
        <a href="{{ route('admin.submissions.subscribers') }}" class="whitespace-nowrap px-3 py-1 rounded {{ request()->routeIs('admin.submissions.subscribers') ? 'bg-white/10 text-brand-gold font-semibold' : '' }}">Subscribers</a>
    </nav>

    <!-- Flash Notifications -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 mt-6 w-full">
        @if(session('success'))
            <div class="p-4 rounded-lg bg-emerald-50 border border-emerald-200 text-emerald-800 text-sm flex items-center justify-between mb-4 shadow-sm animate-fade-in">
                <div class="flex items-center gap-2">
                    <span class="w-2 h-2 rounded-full bg-emerald-500"></span>
                    <span>{{ session('success') }}</span>
                </div>
                <button type="button" onclick="this.parentElement.remove()" class="text-emerald-500 hover:text-emerald-800 text-xs font-bold">&times;</button>
            </div>
        @endif

        @if(session('info'))
            <div class="p-4 rounded-lg bg-blue-50 border border-blue-200 text-blue-800 text-sm flex items-center justify-between mb-4 shadow-sm animate-fade-in">
                <div class="flex items-center gap-2">
                    <span class="w-2 h-2 rounded-full bg-blue-500"></span>
                    <span>{{ session('info') }}</span>
                </div>
                <button type="button" onclick="this.parentElement.remove()" class="text-blue-500 hover:text-blue-800 text-xs font-bold">&times;</button>
            </div>
        @endif

        @if($errors->any())
            <div class="p-4 rounded-lg bg-red-50 border border-red-200 text-red-800 text-sm mb-4 shadow-sm">
                <p class="font-semibold mb-1">Please review the following errors:</p>
                <ul class="list-disc list-inside space-y-0.5 text-xs">
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
    </div>

    <!-- Main Workspace Content -->
    <main class="flex-grow max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-6 w-full">
        @yield('content')
    </main>

    <!-- Administrative Footer -->
    <footer class="mt-auto border-t border-brand-stone/60 py-6 text-xs text-brand-muted/80 bg-white/40">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 flex flex-col sm:flex-row items-center justify-between gap-3">
            <p>&copy; {{ date('Y') }} Modupe Olusoga. Official Thought Leadership &amp; Governance Suite.</p>
            <div class="flex items-center gap-4 text-xs font-medium">
                <a href="{{ route('insights.index') }}" target="_blank" class="hover:text-brand-navy">Live Insights Directory &nearr;</a>
                <span>&bull;</span>
                <span class="text-brand-gold-dark font-mono text-[11px]">System v1.2</span>
            </div>
        </div>
    </footer>

    @stack('scripts')
</body>
</html>
