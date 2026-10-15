@extends('layouts.app')

@section('title', 'Book a Session & Executive Enquiries | Modupe Olusoga')
@section('meta_description', 'Executive office enquiries for advisory sessions, partner retreats, mentorship inquiries, speaking requests, or institutional collaborations with Modupe Olusoga.')

@section('content')
    <!-- Contact Hero -->
    <section class="relative pt-12 pb-20 lg:pt-20 lg:pb-28 border-b border-brand-stone/70 overflow-hidden">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center space-y-4">
            <div data-reveal-hero class="flex justify-center">
                <x-eyebrow>Executive Office &bull; Concierge</x-eyebrow>
            </div>
            <h1 data-reveal-hero class="font-serif text-4xl sm:text-6xl text-brand-navy font-normal leading-[1.12]">
                Book a Session &amp; Advisory Enquiries
            </h1>
            <p data-reveal-hero class="text-base sm:text-lg text-brand-charcoal/80 font-light max-w-2xl mx-auto leading-relaxed">
                To protect focus and ensure strategic alignment, all engagements are scheduled following preliminary review by Modupe's executive team.
            </p>
        </div>
    </section>

    <!-- Contact & Enquiry Grid -->
    <section class="py-24 bg-brand-cream border-b border-brand-stone/70">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-12">
                
                <!-- Left: Information & Channels -->
                <div class="lg:col-span-5 space-y-8">
                    <div class="p-8 rounded bg-white border border-brand-stone/80 shadow-sm space-y-6">
                        <div class="space-y-1">
                            <span class="text-[10px] uppercase tracking-widest font-bold text-brand-gold block">Executive Office</span>
                            <h2 class="font-serif text-2xl font-normal text-brand-navy">Engagement Concierge</h2>
                        </div>

                        <p class="text-xs sm:text-sm text-brand-charcoal/80 leading-relaxed font-light">
                            Please use this channel for confidential enquiries regarding:
                        </p>

                        <ul class="space-y-2.5 text-xs text-brand-charcoal/90 font-light">
                            <li class="flex items-start gap-2.5"><span class="text-brand-gold font-bold">&bull;</span> Keynote speaking &amp; panel moderation</li>
                            <li class="flex items-start gap-2.5"><span class="text-brand-gold font-bold">&bull;</span> Law firm partner retreats &amp; offsites</li>
                            <li class="flex items-start gap-2.5"><span class="text-brand-gold font-bold">&bull;</span> Institution-building &amp; governance advisory</li>
                            <li class="flex items-start gap-2.5"><span class="text-brand-gold font-bold">&bull;</span> Succession &amp; leadership pipeline design</li>
                            <li class="flex items-start gap-2.5"><span class="text-brand-gold font-bold">&bull;</span> Press, podcasts &amp; strategic interviews</li>
                        </ul>

                        <div class="pt-6 border-t border-brand-stone/60 space-y-4 text-xs font-light">
                            <div>
                                <span class="text-brand-muted block uppercase text-[10px] tracking-wider font-semibold">Executive Email</span>
                                <a href="mailto:office@modupeolusoga.com" class="text-brand-navy font-medium hover:text-brand-gold-dark transition-colors">office@modupeolusoga.com</a>
                            </div>
                            <div>
                                <span class="text-brand-muted block uppercase text-[10px] tracking-wider font-semibold">Primary Base</span>
                                <span class="text-brand-charcoal">Lagos, Nigeria &bull; Available for global and virtual engagements</span>
                            </div>
                            <div>
                                <span class="text-brand-muted block uppercase text-[10px] tracking-wider font-semibold">Response Horizon</span>
                                <span class="text-brand-charcoal">Typically within 2 business days</span>
                            </div>
                        </div>
                    </div>

                    <!-- Direct Mentorship Link -->
                    <div class="p-8 rounded bg-brand-navy text-white space-y-3 shadow-md">
                        <span class="text-[10px] uppercase tracking-widest font-bold text-brand-gold block">Individual Mentorship</span>
                        <p class="text-xs sm:text-sm text-brand-stone/80 font-light leading-relaxed">
                            Looking to join the 6-Month Mentorship Programme (February–July)? Please submit via the dedicated questionnaire.
                        </p>
                        <a href="{{ route('mentorship') }}#apply" class="inline-flex items-center gap-2 pt-2 text-xs uppercase font-semibold tracking-wider text-brand-gold hover:text-white transition-colors">
                            <span>Open Mentorship Application</span>
                            <span>&rarr;</span>
                        </a>
                    </div>
                </div>

                <!-- Right: Unified Interactive Form -->
                <div class="lg:col-span-7 bg-white p-8 sm:p-12 rounded border border-brand-stone/80 shadow-xl">
                    <form action="{{ route('speaking.enquire') }}" method="POST" class="space-y-6">
                        @csrf

                        <div class="border-b border-brand-stone/80 pb-4 mb-2">
                            <h3 class="font-serif text-2xl font-normal text-brand-navy">Submit Engagement Request</h3>
                            <p class="text-xs text-brand-muted mt-1 font-light">Please supply complete particulars so we can properly review and schedule your session.</p>
                        </div>

                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                            <div>
                                <label for="full_name" class="block text-[11px] uppercase tracking-wider font-semibold text-brand-charcoal mb-2">
                                    Your Full Name <span class="text-red-500">*</span>
                                </label>
                                <input type="text" id="full_name" name="full_name" required value="{{ old('full_name') }}" placeholder="e.g. Modupe Olusoga" class="w-full text-xs sm:text-sm px-4 py-3 rounded border border-brand-stone bg-brand-cream/40 focus:outline-none focus:border-brand-gold focus:bg-white transition-colors">
                                @error('full_name') <p class="text-xs text-red-500 mt-1">{{ $message }}</p> @enderror
                            </div>

                            <div>
                                <label for="email" class="block text-[11px] uppercase tracking-wider font-semibold text-brand-charcoal mb-2">
                                    Professional Email <span class="text-red-500">*</span>
                                </label>
                                <input type="email" id="email" name="email" required value="{{ old('email') }}" placeholder="office@organisation.com" class="w-full text-xs sm:text-sm px-4 py-3 rounded border border-brand-stone bg-brand-cream/40 focus:outline-none focus:border-brand-gold focus:bg-white transition-colors">
                                @error('email') <p class="text-xs text-red-500 mt-1">{{ $message }}</p> @enderror
                            </div>

                            <div>
                                <label for="phone" class="block text-[11px] uppercase tracking-wider font-semibold text-brand-charcoal mb-2">
                                    Phone / WhatsApp
                                </label>
                                <input type="text" id="phone" name="phone" value="{{ old('phone') }}" placeholder="+234 ..." class="w-full text-xs sm:text-sm px-4 py-3 rounded border border-brand-stone bg-brand-cream/40 focus:outline-none focus:border-brand-gold focus:bg-white transition-colors">
                            </div>

                            <div>
                                <label for="organisation" class="block text-[11px] uppercase tracking-wider font-semibold text-brand-charcoal mb-2">
                                    Organisation / Body <span class="text-red-500">*</span>
                                </label>
                                <input type="text" id="organisation" name="organisation" required value="{{ old('organisation') }}" placeholder="e.g. Nigerian Bar Association" class="w-full text-xs sm:text-sm px-4 py-3 rounded border border-brand-stone bg-brand-cream/40 focus:outline-none focus:border-brand-gold focus:bg-white transition-colors">
                                @error('organisation') <p class="text-xs text-red-500 mt-1">{{ $message }}</p> @enderror
                            </div>

                            <div class="sm:col-span-2">
                                <label for="engagement_type" class="block text-[11px] uppercase tracking-wider font-semibold text-brand-charcoal mb-2">
                                    Nature of Engagement <span class="text-red-500">*</span>
                                </label>
                                <select id="engagement_type" name="engagement_type" required class="w-full text-xs sm:text-sm px-4 py-3 rounded border border-brand-stone bg-brand-cream/40 focus:outline-none focus:border-brand-gold focus:bg-white transition-colors">
                                    <option value="">Select Engagement Type...</option>
                                    <option value="Keynote Address">Conference / Keynote Address</option>
                                    <option value="Panel Participation & Moderation">Panel Participation &amp; Moderation</option>
                                    <option value="Partner & Leadership Retreat">Partner &amp; Leadership Retreat Facilitation</option>
                                    <option value="Law Firm Strategy Session">Law Firm / Strategy Session</option>
                                    <option value="Governance & Succession Advisory">Governance &amp; Succession Advisory</option>
                                    <option value="Organisational Workshop">Organisational Workshop</option>
                                    <option value="Podcast or Media Interview">Podcast or Media Interview</option>
                                    <option value="Strategic Collaboration">Strategic Collaboration</option>
                                </select>
                                @error('engagement_type') <p class="text-xs text-red-500 mt-1">{{ $message }}</p> @enderror
                            </div>
                        </div>

                        <div>
                            <label for="topic_objectives" class="block text-[11px] uppercase tracking-wider font-semibold text-brand-charcoal mb-2">
                                Session Objectives or Request Brief <span class="text-red-500">*</span>
                            </label>
                            <textarea id="topic_objectives" name="topic_objectives" rows="4" required placeholder="Please describe the core objectives, context, or expected outcomes for this session." class="w-full text-xs sm:text-sm p-4 rounded border border-brand-stone bg-brand-cream/40 focus:outline-none focus:border-brand-gold focus:bg-white transition-colors">{{ old('topic_objectives') }}</textarea>
                            @error('topic_objectives') <p class="text-xs text-red-500 mt-1">{{ $message }}</p> @enderror
                        </div>

                        <div class="pt-2">
                            <x-button variant="primary" size="lg" type="submit" arrow="true" class="w-full">
                                Submit Engagement Request
                            </x-button>
                        </div>

                    </form>
                </div>

            </div>
        </div>
    </section>
@endsection
