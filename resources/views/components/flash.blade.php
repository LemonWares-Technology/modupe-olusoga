@if(session('success'))
    <aside aria-label="Notification" id="flash-banner" class="bg-brand-navy text-white border-b border-brand-gold/60 shadow-lg transition-all duration-300">
        <div class="max-w-7xl mx-auto py-3.5 px-4 sm:px-6 lg:px-8 flex items-start sm:items-center justify-between gap-4">
            <div class="flex items-center gap-3">
                <span class="p-1 rounded-full bg-brand-gold text-brand-navy flex-shrink-0">
                    <svg class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/>
                    </svg>
                </span>
                <p class="text-xs sm:text-sm font-medium text-brand-stone leading-relaxed">
                    {{ session('success') }}
                </p>
            </div>
            <button type="button" onclick="document.getElementById('flash-banner').remove()" class="text-white/60 hover:text-white p-1" aria-label="Dismiss">
                <svg class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                </svg>
            </button>
        </div>
    </aside>
@endif

@if($errors->any())
    <aside aria-label="Errors" id="error-banner" class="bg-red-950 text-white border-b border-red-500/50 shadow-md">
        <div class="max-w-7xl mx-auto py-3.5 px-4 sm:px-6 lg:px-8 flex items-center justify-between">
            <div class="flex items-center gap-3">
                <span class="p-1 rounded-full bg-red-600 text-white flex-shrink-0">
                    <svg class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"/>
                    </svg>
                </span>
                <span class="text-xs sm:text-sm font-medium text-red-200">
                    Please review the required details highlighted in the form below.
                </span>
            </div>
            <button type="button" onclick="document.getElementById('error-banner').remove()" class="text-white/60 hover:text-white p-1" aria-label="Dismiss">
                <svg class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                </svg>
            </button>
        </div>
    </aside>
@endif
