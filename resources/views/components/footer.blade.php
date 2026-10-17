<footer class="bg-brand-navy text-brand-stone border-t border-white/8 pt-20 pb-12 mt-24">
    <div class="max-w-screen-xl mx-auto px-6 lg:px-10">

        {{-- Top masthead — plain statement, gold accent removed from tail --}}
        <div class="border-b border-white/10 pb-14 mb-16 flex flex-col lg:flex-row lg:items-end justify-between gap-8">
            <div class="max-w-2xl space-y-3">
                <span class="block w-8 h-0.5 bg-brand-gold mb-5" aria-hidden="true"></span>
                <h2 class="font-serif font-bold text-white text-3xl sm:text-4xl lg:text-5xl leading-[1.1] tracking-tight">
                    Building people and institutions that thrive beyond individuals.
                </h2>
            </div>
            <button
                type="button"
                onclick="window.scrollTo({top: 0, behavior: 'smooth'})"
                class="inline-flex items-center gap-2 text-xs text-white/40 hover:text-white/80 transition-colors border-b border-white/15 pb-1 self-start lg:self-auto shrink-0"
                aria-label="Back to top"
            >
                <span>Back to top</span>
                <span aria-hidden="true">&uarr;</span>
            </button>
        </div>

        {{-- 5-column grid --}}
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-5 gap-10 pb-16 border-b border-white/10">

            {{-- Brand & bio --}}
            <div class="lg:col-span-2 space-y-5">
                <div>
                    <h3 class="font-serif text-xl text-white font-bold tracking-wide">MODUPE OLUSOGA</h3>
                    <p class="section-label text-brand-gold mt-1">Institutional Leader &bull; Author &bull; Speaker</p>
                </div>
                <p class="text-sm text-brand-stone/70 leading-relaxed font-light max-w-md">
                    Operating at the intersection of institution building and human potential — creating organisations with the governance and structures to outlive their founders, and equipping professionals with the discipline to turn aspirations into sustainable outcomes.
                </p>
                <ul class="text-xs text-white/40 space-y-1 font-light">
                    <li>Chief Operating Officer, Streamsowers &amp; Köhn</li>
                    <li>President, Association of Law Firm Administrators Nigeria (ALAN)</li>
                    <li>African Regional Forum Liaison Officer, IBA Law Firm Management Committee</li>
                </ul>
            </div>

            {{-- Navigation --}}
            <div class="space-y-4">
                <h4 class="section-label text-brand-gold">Navigation</h4>
                <ul class="space-y-2.5 text-sm text-brand-stone/70 font-light">
                    <li><a href="{{ route('home') }}"            class="hover:text-white transition-colors">Home</a></li>
                    <li><a href="{{ route('about') }}"           class="hover:text-white transition-colors">About &amp; Philosophy</a></li>
                    <li><a href="{{ route('mentorship') }}"      class="hover:text-white transition-colors text-brand-gold font-medium">Mentorship Programme</a></li>
                    <li><a href="{{ route('speaking') }}"        class="hover:text-white transition-colors">Speaking &amp; Advisory</a></li>
                    <li><a href="{{ route('book') }}"            class="hover:text-white transition-colors">The Forthcoming Book</a></li>
                    <li><a href="{{ route('insights.index') }}"  class="hover:text-white transition-colors">Insights &amp; Journal</a></li>
                    <li><a href="{{ route('impact') }}"          class="hover:text-white transition-colors">Leadership &amp; Impact</a></li>
                    <li><a href="{{ route('podcast') }}"         class="hover:text-white transition-colors">Media &amp; Podcast</a></li>
                </ul>
            </div>

            {{-- Priority pathways --}}
            <div class="space-y-4">
                <h4 class="section-label text-brand-gold">Priority Pathways</h4>
                <ul class="space-y-2.5 text-sm text-brand-stone/70 font-light">
                    <li><a href="{{ route('mentorship') }}#apply"    class="hover:text-white transition-colors">Apply for Mentorship (&#8358;200,000)</a></li>
                    <li><a href="{{ route('speaking') }}#enquiry"    class="hover:text-white transition-colors">Invite to Keynote / Moderation</a></li>
                    <li><a href="{{ route('book') }}#waitlist"       class="hover:text-white transition-colors">Join Book Waiting List</a></li>
                    <li><a href="{{ route('contact') }}"             class="hover:text-white transition-colors">Request Executive Session</a></li>
                    <li><a href="{{ route('podcast') }}#press"       class="hover:text-white transition-colors">Download Press &amp; Media Kit</a></li>
                </ul>

                <div class="pt-3">
                    <h5 class="section-label text-white/35 mb-2">Affiliations</h5>
                    <p class="text-xs text-brand-gold/80 leading-relaxed">
                        Streamsowers &amp; Köhn &bull; ALAN &bull; The Strides Platform &bull; Project CHAM
                    </p>
                </div>
            </div>

            {{-- Newsletter — inline submit arrow, no button below --}}
            <div class="space-y-4">
                <h4 class="section-label text-brand-gold">Executive Journal</h4>
                <p class="text-sm text-brand-stone/65 leading-relaxed font-light">
                    Periodic essays on governance, institution building, succession, and deliberate leadership.
                </p>
                <form action="{{ route('newsletter.subscribe') }}" method="POST" class="space-y-3">
                    @csrf
                    <label for="newsletter-footer-email" class="sr-only">Executive email</label>
                    {{-- Inline field + arrow submit --}}
                    <div class="flex items-center border border-white/20 focus-within:border-brand-gold transition-colors" style="border-radius:2px;">
                        <input
                            id="newsletter-footer-email"
                            name="email"
                            type="email"
                            required
                            placeholder="Your email"
                            class="flex-1 min-w-0 text-sm px-4 py-3 bg-transparent text-white placeholder-white/30 focus:outline-none"
                        >
                        <button
                            type="submit"
                            class="px-4 py-3 text-brand-gold hover:text-white transition-colors text-base shrink-0"
                            aria-label="Subscribe"
                        >
                            &rarr;
                        </button>
                    </div>
                </form>
            </div>

        </div>

        {{-- Colophon --}}
        <div class="pt-8 flex flex-col sm:flex-row items-start sm:items-center justify-between text-xs text-white/35 gap-4 font-light">
            <p>&copy; {{ date('Y') }} Modupe Olusoga. All rights reserved. &bull;
                <a href="{{ route('admin.login') }}" class="hover:text-white/60 transition-colors ml-1">Executive Access</a>
            </p>
            <p class="tracking-wide">Institutional Governance &bull; Professional Services &bull; Longevity Architecture</p>
        </div>

    </div>
</footer>
