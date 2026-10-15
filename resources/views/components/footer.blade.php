<footer class="bg-brand-navy text-brand-stone border-t border-brand-stone/15 pt-20 pb-12 mt-24">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <!-- Top Editorial Masthead Statement -->
        <div class="border-b border-white/10 pb-12 mb-16 flex flex-col lg:flex-row lg:items-end justify-between gap-8">
            <div class="max-w-2xl space-y-3">
                <span class="text-[10px] uppercase tracking-[0.25em] text-brand-gold font-semibold">Institutional Monograph &bull; Official Platform</span>
                <h2 class="font-serif text-3xl sm:text-4xl lg:text-5xl text-white font-normal leading-[1.12]">
                    Building people and institutions that <span class="italic text-brand-gold font-light">thrive beyond individuals.</span>
                </h2>
            </div>
            <div>
                <button type="button" onclick="window.scrollTo({top: 0, behavior: 'smooth'})" class="inline-flex items-center gap-2 text-xs uppercase tracking-widest text-brand-gold hover:text-white transition-colors border-b border-brand-gold/40 pb-1">
                    <span>Back to Top</span>
                    <span>&uarr;</span>
                </button>
            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-5 gap-10 pb-16 border-b border-white/10">
            
            <!-- Column 1: Brand & Bio -->
            <div class="lg:col-span-2 space-y-4">
                <div class="space-y-1">
                    <h3 class="font-serif text-2xl text-white tracking-wide font-normal">MODUPE OLUSOGA</h3>
                    <p class="text-xs uppercase tracking-[0.25em] text-brand-gold font-medium">Institutional Leader &bull; Author &bull; Speaker</p>
                </div>
                <p class="text-sm text-brand-stone/80 leading-relaxed max-w-md font-light">
                    Operating at the intersection of institution building and human potential: creating organisations with the governance and structures to outlive their founders, and equipping professionals with the discipline to turn aspirations into sustainable outcomes.
                </p>
                <div class="pt-2 text-xs text-white/50 space-y-1 font-light">
                    <p>&bull; Chief Operating Officer, Streamsowers &amp; Köhn</p>
                    <p>&bull; President, Association of Law Firm Administrators Nigeria (ALAN)</p>
                    <p>&bull; African Regional Forum Liaison Officer, IBA Law Firm Management Committee</p>
                </div>
            </div>

            <!-- Column 2: Navigation -->
            <div class="space-y-4">
                <h4 class="text-xs uppercase tracking-widest text-brand-gold font-semibold">Navigation</h4>
                <ul class="space-y-2.5 text-xs uppercase tracking-wider text-brand-stone/80 font-light">
                    <li><a href="{{ route('home') }}" class="hover:text-white transition-colors">Home</a></li>
                    <li><a href="{{ route('about') }}" class="hover:text-white transition-colors">About &amp; Philosophy</a></li>
                    <li><a href="{{ route('mentorship') }}" class="hover:text-white transition-colors text-brand-gold font-medium">Mentorship Programme</a></li>
                    <li><a href="{{ route('speaking') }}" class="hover:text-white transition-colors">Speaking &amp; Advisory</a></li>
                    <li><a href="{{ route('book') }}" class="hover:text-white transition-colors">The Forthcoming Book</a></li>
                    <li><a href="{{ route('insights.index') }}" class="hover:text-white transition-colors">Insights &amp; Journal</a></li>
                    <li><a href="{{ route('impact') }}" class="hover:text-white transition-colors">Leadership &amp; Impact</a></li>
                    <li><a href="{{ route('podcast') }}" class="hover:text-white transition-colors">Media &amp; Podcast</a></li>
                </ul>
            </div>

            <!-- Column 3: Priority Pathways -->
            <div class="space-y-4">
                <h4 class="text-xs uppercase tracking-widest text-brand-gold font-semibold">Priority Pathways</h4>
                <ul class="space-y-2.5 text-xs text-brand-stone/80 font-light">
                    <li><a href="{{ route('mentorship') }}#apply" class="hover:text-white transition-colors">Apply for Mentorship (₦200,000)</a></li>
                    <li><a href="{{ route('speaking') }}#enquiry" class="hover:text-white transition-colors">Invite to Keynote / Moderation</a></li>
                    <li><a href="{{ route('book') }}#waitlist" class="hover:text-white transition-colors">Join Book Waiting List</a></li>
                    <li><a href="{{ route('contact') }}" class="hover:text-white transition-colors">Request Executive Session</a></li>
                    <li><a href="{{ route('podcast') }}#press" class="hover:text-white transition-colors">Download Press &amp; Media Kit</a></li>
                </ul>
                
                <div class="pt-3">
                    <h5 class="text-[10px] uppercase tracking-wider text-white/50 font-semibold mb-2">Affiliations</h5>
                    <div class="flex flex-wrap gap-x-2 gap-y-1 text-xs text-brand-gold">
                        <span>Streamsowers &amp; Köhn</span> &bull;
                        <span>ALAN</span> &bull;
                        <span>The Strides Platform</span> &bull;
                        <span>Project CHAM</span>
                    </div>
                </div>
            </div>

            <!-- Column 4: Private Executive Journal -->
            <div class="space-y-4">
                <h4 class="text-xs uppercase tracking-widest text-brand-gold font-semibold">Executive Journal</h4>
                <p class="text-xs text-brand-stone/80 leading-relaxed font-light">
                    Receive periodic essays on governance, institution building, succession, and deliberate leadership.
                </p>
                <form action="{{ route('newsletter.subscribe') }}" method="POST" class="space-y-2">
                    @csrf
                    <div>
                        <label for="newsletter-footer-email" class="sr-only">Executive email</label>
                        <input id="newsletter-footer-email" name="email" type="email" required placeholder="Enter executive email..." class="w-full text-xs px-3.5 py-3 rounded bg-white/5 border border-white/20 text-white placeholder-white/40 focus:outline-none focus:border-brand-gold transition-colors">
                    </div>
                    <button type="submit" class="w-full text-[11px] font-semibold uppercase tracking-widest py-3 rounded bg-brand-gold text-brand-navy hover:bg-brand-gold-light transition-colors">
                        Subscribe to Journal
                    </button>
                </form>
            </div>

        </div>

        <!-- Colophon & Copyright -->
        <div class="pt-8 flex flex-col sm:flex-row items-center justify-between text-xs text-white/50 gap-4">
            <p>&copy; {{ date('Y') }} Modupe Olusoga. All rights reserved. &bull; <a href="{{ route('admin.login') }}" class="hover:text-brand-gold transition-colors text-[11px]">Executive Access</a></p>
            <p class="tracking-wide">Institutional Governance &bull; Professional Services &bull; Longevity Architecture</p>
        </div>

    </div>
</footer>
