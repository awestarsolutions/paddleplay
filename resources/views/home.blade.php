<x-public-layout>
    {{-- Hero Section Redesign --}}
    <section class="relative h-screen min-h-[800px] flex items-center justify-center overflow-hidden bg-[#0a214d]">
        {{-- Background Image with subtle Ken Burns effect --}}
        <div class="absolute inset-0 z-0 scale-110">
            <img src="https://images.unsplash.com/photo-1554068865-24cecd4e34b8?q=80&w=2070&auto=format&fit=crop" 
                 alt="PaddlePlay Elite" 
                 class="w-full h-full object-cover opacity-40">
            <div class="absolute inset-0 bg-gradient-to-b from-[#0a214d]/80 via-transparent to-[#0a214d]/90"></div>
        </div>
        
        <div class="max-w-7xl mx-auto px-6 relative z-10 text-center">
            {{-- Glassmorphism Hero Card --}}
            <div class="inline-block p-12 md:p-20 bg-white/5 backdrop-blur-[40px] border border-white/10 shadow-2xl animate-fade-up">
                <span class="label-md mb-8 inline-block tracking-[0.3em] text-white/60 animate-fade-in">Mumbai's Premier Elite Sports Community</span>
                
                <h1 class="font-manrope font-extrabold text-7xl md:text-9xl uppercase tracking-tighter leading-[0.85] mb-12 text-white">
                    Elevate <br>
                    <span class="text-[#1e3a8a] text-glow" style="text-shadow: 0 0 30px rgba(30, 58, 138, 0.5);">Your Game</span>
                </h1>
                
                <p class="body-lg text-xl md:text-2xl font-light mb-16 text-white/70 max-w-2xl mx-auto leading-relaxed">
                    Experience luxury paddle and pickleball in the heart of Mumbai. <br>
                    Structured sessions. Elite facilities. Unrivaled community.
                </p>
                
                <div class="flex flex-col md:flex-row items-center justify-center space-y-6 md:space-y-0 md:space-x-12">
                    <a href="{{ route('events.index') }}" class="w-full md:w-auto bg-white text-[#0a214d] px-12 py-6 font-manrope font-extrabold uppercase tracking-widest hover:bg-[#1e3a8a] hover:text-white transition-all text-lg shadow-xl">
                        Join Next Session
                    </a>
                    <a href="#featured" class="label-md font-extrabold text-white border-b-2 border-white/20 hover:border-white transition-all py-2">
                        Explore Facilities &rarr;
                    </a>
                </div>
            </div>
            
            {{-- Scroll Indicator --}}
            <div class="absolute bottom-12 left-1/2 -translate-x-1/2 animate-bounce opacity-30">
                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3" />
                </svg>
            </div>
        </div>
    </section>

    <div id="featured"></div>

    {{-- Featured Events Section --}}
    <section class="py-32 bg-[#f9f9f8]">
        <div class="max-w-7xl mx-auto px-6">
            <div class="flex justify-between items-end mb-20">
                <div>
                    <span class="label-md mb-4 block">Upcoming Play</span>
                    <h2 class="font-manrope font-extrabold text-5xl uppercase tracking-tight">Featured Sessions</h2>
                </div>
                <a href="{{ route('events.index') }}" class="label-md font-extrabold pb-2 border-b-2 border-[#0a214d]">See All Events</a>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-12">
                @forelse($featuredEvents as $event)
                    <x-event-card :event="$event" />
                @empty
                    <div class="col-span-3 py-12 text-center border-2 border-dashed border-[#abb4b3]/15">
                        <p class="body-lg opacity-50">No upcoming sessions scheduled. Check back soon.</p>
                    </div>
                @endforelse
            </div>
        </div>
    </section>

    {{-- Community Section --}}
    <section class="py-32 bg-[#f1f4f3]">
        <div class="max-w-7xl mx-auto px-6">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-24 items-center">
                <div class="relative aspect-square bg-[#eaefee] overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1626224583764-f87db24ac4ea?q=80&w=2070&auto=format&fit=crop" alt="PaddlePlay Community" class="w-full h-full object-cover">
                    <div class="absolute inset-0 bg-[#0a214d]/10"></div>
                </div>
                <div>
                    <span class="label-md mb-8 block">Our Philosophy</span>
                    <h2 class="font-manrope font-extrabold text-6xl uppercase tracking-tight mb-12 leading-none">
                        Community <br>
                        Over <br>
                        Competition
                    </h2>
                    <p class="body-lg text-xl text-[#404948] mb-12 leading-relaxed">
                        PaddlePlay was started to make paddle and pickleball more accessible in Mumbai through structured, well-organised sessions. We value consistency, quality, and connection.
                    </p>
                    <a href="{{ route('about') }}" class="btn-tertiary">Our Story</a>
                </div>
            </div>
        </div>
    </section>

    {{-- Testimonials --}}
    <section class="py-32 bg-[#f9f9f8]">
        <div class="max-w-7xl mx-auto px-6">
            <div class="max-w-4xl mx-auto text-center">
                <span class="label-md mb-12 block">Player Perspectives</span>
                <div class="relative px-20">
                    <span class="absolute top-0 left-0 text-[10rem] font-manrope font-extrabold opacity-5 leading-none mt-[-4rem]">“</span>
                    <p class="font-manrope font-bold text-4xl uppercase tracking-tight leading-snug mb-12 text-[#0a214d]">
                        Well-organised sessions and a GREAT group of people. Truly elevates the sport.
                    </p>
                    <span class="label-md block">- Rahul M., Mumbai</span>
                </div>
            </div>
        </div>
    </section>

    {{-- CTA Section --}}
    <section class="py-32 bg-[#0a214d] text-white">
        <div class="max-w-7xl mx-auto px-6 text-center">
            <h2 class="font-manrope font-extrabold text-7xl uppercase tracking-tighter mb-12">Ready to Play?</h2>
            <p class="body-lg text-2xl opacity-80 mb-16 max-w-2xl mx-auto text-white/90">
                Join our next session and experience the best organized paddle and pickleball in the city.
            </p>
            <a href="{{ route('events.index') }}" class="bg-white text-[#0a214d] px-12 py-6 rounded-[0.125rem] font-manrope font-extrabold uppercase tracking-widest hover:bg-[#1e3a8a] transition-all text-xl">
                Book a Spot
            </a>
        </div>
    </section>
</x-public-layout>
