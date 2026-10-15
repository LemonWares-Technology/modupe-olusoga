@extends('layouts.app')

@section('title', 'System Restraint — 500 | Modupe Olusoga')

@section('content')
    <section class="min-h-[70vh] flex items-center justify-center py-20 px-4 text-center">
        <div class="max-w-xl mx-auto space-y-6">
            <x-eyebrow :dot="true" class="justify-center">Error 500 &bull; System Disruption</x-eyebrow>
            <h1 class="font-serif text-4xl sm:text-6xl text-brand-navy font-normal">
                Momentary Disruption
            </h1>
            <p class="text-sm sm:text-base text-brand-charcoal/80 font-light leading-relaxed">
                The institutional servers encountered an unforeseen condition. Our systems have logged the occurrence, and service will be restored shortly.
            </p>
            <div class="pt-4 flex justify-center gap-4">
                <x-button variant="primary" size="md" href="{{ route('home') }}" arrow="true">
                    Return to Home
                </x-button>
            </div>
        </div>
    </section>
@endsection
