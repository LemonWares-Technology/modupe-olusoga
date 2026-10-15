<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="h-full bg-brand-cream text-brand-charcoal">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Executive Access | Modupe Olusoga</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="min-h-full flex items-center justify-center p-4 bg-gradient-to-b from-[#f9f6f0] via-brand-cream to-[#ede7dc]">

    <div class="w-full max-w-md">
        
        <!-- Executive Emblem Header -->
        <div class="text-center mb-8 space-y-3">
            <div class="inline-flex items-center justify-center w-14 h-14 rounded-full bg-brand-navy border border-brand-gold/60 text-brand-gold font-serif text-xl font-bold shadow-md">
                MO
            </div>
            <div class="space-y-1">
                <h1 class="font-serif text-2xl sm:text-3xl font-normal text-brand-navy tracking-tight">
                    Modupe Olusoga
                </h1>
                <p class="text-xs uppercase tracking-[0.25em] text-brand-gold-dark font-medium">
                    Executive Suite &bull; Content Studio
                </p>
            </div>
        </div>

        <!-- Card Container -->
        <div class="bg-white/80 backdrop-blur border border-brand-stone/80 rounded-2xl p-8 sm:p-10 shadow-xl shadow-brand-navy/5">
            
            @if(session('info'))
                <div class="mb-6 p-3.5 rounded-lg bg-blue-50 border border-blue-200 text-blue-900 text-xs">
                    {{ session('info') }}
                </div>
            @endif

            @if($errors->any())
                <div class="mb-6 p-3.5 rounded-lg bg-red-50 border border-red-200 text-red-800 text-xs">
                    {{ $errors->first() }}
                </div>
            @endif

            <form action="{{ route('admin.login.post') }}" method="POST" class="space-y-5">
                @csrf

                <!-- Email Field -->
                <div class="space-y-1.5">
                    <label for="email" class="block text-xs uppercase tracking-wider font-semibold text-brand-navy">
                        Executive Email
                    </label>
                    <input
                        type="email"
                        id="email"
                        name="email"
                        value="{{ old('email', 'admin@modupeolusoga.com') }}"
                        required
                        autofocus
                        class="w-full px-4 py-3 rounded-lg border border-brand-stone bg-brand-cream/40 text-sm text-brand-charcoal focus:bg-white focus:outline-none focus:ring-2 focus:ring-brand-gold/50 focus:border-brand-gold transition-all"
                        placeholder="admin@modupeolusoga.com"
                    >
                </div>

                <!-- Password Field -->
                <div class="space-y-1.5">
                    <div class="flex items-center justify-between">
                        <label for="password" class="block text-xs uppercase tracking-wider font-semibold text-brand-navy">
                            Access Security Key
                        </label>
                    </div>
                    <input
                        type="password"
                        id="password"
                        name="password"
                        required
                        class="w-full px-4 py-3 rounded-lg border border-brand-stone bg-brand-cream/40 text-sm text-brand-charcoal focus:bg-white focus:outline-none focus:ring-2 focus:ring-brand-gold/50 focus:border-brand-gold transition-all"
                        placeholder="••••••••••••"
                    >
                </div>

                <!-- Remember Me -->
                <div class="flex items-center justify-between pt-1">
                    <label class="flex items-center gap-2.5 text-xs text-brand-charcoal/80 cursor-pointer">
                        <input
                            type="checkbox"
                            name="remember"
                            class="w-4 h-4 rounded text-brand-gold border-brand-stone focus:ring-brand-gold"
                        >
                        <span>Maintain session on this workstation</span>
                    </label>
                </div>

                <!-- Submit Button -->
                <div class="pt-2">
                    <button
                        type="submit"
                        class="w-full py-3.5 px-6 rounded-lg bg-brand-navy hover:bg-brand-charcoal text-white text-xs uppercase tracking-[0.2em] font-semibold transition-all duration-200 shadow-md hover:shadow-lg flex items-center justify-center gap-2 group"
                    >
                        <span>Access Dashboard</span>
                        <span class="text-brand-gold group-hover:translate-x-1 transition-transform">&rarr;</span>
                    </button>
                </div>

            </form>

            <div class="mt-8 pt-6 border-t border-brand-stone/60 text-center">
                <a href="{{ route('home') }}" class="text-xs text-brand-muted hover:text-brand-navy transition-colors inline-flex items-center gap-1.5">
                    &larr; Return to public platform
                </a>
            </div>

        </div>

        <!-- Default Credentials Notice -->
        <div class="mt-6 p-4 rounded-xl bg-brand-parchment/80 border border-brand-gold/30 text-center text-xs text-brand-charcoal/70">
            <span class="font-semibold text-brand-navy">Default Initial Access:</span>
            <span class="font-mono text-brand-gold-dark font-medium ml-1">admin@modupeolusoga.com</span>
            <span class="mx-1">&bull;</span>
            <span class="font-mono text-brand-gold-dark font-medium">Modupe2026!</span>
        </div>

    </div>

</body>
</html>
