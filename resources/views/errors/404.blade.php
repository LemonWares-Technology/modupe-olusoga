@extends('layouts.app')

@section('title', 'Page Not Found — 404 | Modupe Olusoga')

@section('content')
    <section class="min-h-[70vh] flex items-center justify-center py-20 px-4 text-center">
        <div class="max-w-xl mx-auto space-y-6">
            <x-eyebrow :dot="true" class="justify-center">Error 404 &bull; Page Not Found</x-eyebrow>
            <h1 class="font-serif text-4xl sm:text-6xl text-brand-navy font-normal">
                An Untrodden Path
            </h1>
            <p class="text-sm sm:text-base text-brand-charcoal/80 font-light leading-relaxed">
                The monograph page or dispatch you requested cannot be located in the current institutional archives. It may have been archived or restructured.
            </p>
            <div class="pt-4 flex justify-center gap-4">
                <x-button variant="primary" size="md" href="{{ route('home') }}" arrow="true">
                    Return to Home
                </x-button>
                <x-button variant="secondary" size="md" href="{{ route('insights.index') }}">
                    Browse Insights
                </x-button>
            </div>
        </div>
    </section>
@endsection
