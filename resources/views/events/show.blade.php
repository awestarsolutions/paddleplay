<x-public-layout>
    <section class="relative pt-24 pb-32 bg-[#f9f9f8]">
        <div class="max-w-7xl mx-auto px-6">
            <div class="grid grid-cols-1 md:grid-cols-12 gap-24">
                {{-- Event Info --}}
                <div class="md:col-span-7">
                    <a href="{{ route('events.index') }}" class="label-md mb-12 inline-block border-b border-[#5f5e5e]">&larr; Back to all events</a>
                    
                    <div class="flex items-center space-x-4 mb-8">
                        <span class="label-md text-[#46655d]">{{ $event->event_date->format('l, F d, Y') }}</span>
                        <span class="w-1 h-1 bg-[#46655d] rounded-full"></span>
                        <span class="label-md opacity-50 uppercase tracking-widest">{{ $event->skill_level }}</span>
                    </div>

                    <h1 class="font-manrope font-extrabold text-6xl md:text-7xl uppercase tracking-tighter leading-none mb-12">
                        {{ $event->title }}
                    </h1>

                    @if($event->image_path)
                        <div class="aspect-[16/9] mb-12 bg-[#f1f4f3] overflow-hidden">
                            <img src="{{ str_starts_with($event->image_path, 'http') ? $event->image_path : asset('storage/' . $event->image_path) }}" 
                                 alt="{{ $event->title }}" 
                                 class="w-full h-full object-cover">
                        </div>
                    @endif

                    <div class="prose prose-lg max-w-none text-[#404948] body-lg leading-relaxed">
                        {!! nl2br(e($event->description)) !!}
                    </div>

                    <div class="mt-24 pt-12 border-t border-[#abb4b3]/15 grid grid-cols-2 gap-12">
                        <div>
                            <span class="label-md block mb-4">Location</span>
                            <p class="body-lg font-bold">{{ $event->location }}</p>
                        </div>
                        <div>
                            <span class="label-md block mb-4">Investment</span>
                            <p class="body-lg font-bold">₹{{ number_format($event->price) }}</p>
                        </div>
                    </div>
                </div>

                {{-- Booking Form Side --}}
                <div class="md:col-span-5 relative">
                    <div class="sticky top-32 bg-white p-12 border border-[#abb4b3]/15">
                        <h3 class="font-manrope font-extrabold text-3xl uppercase tracking-tight mb-8">Reserve a Spot</h3>
                        
                        @if(session('success'))
                            <div class="bg-green-50 text-green-800 p-6 mb-8 label-md border border-green-100">
                                {{ session('success') }}
                            </div>
                        @endif

                        <form action="{{ route('bookings.store') }}" method="POST" class="space-y-8">
                            @csrf
                            <input type="hidden" name="event_id" value="{{ $event->id }}">
                            
                            <div>
                                <label for="user_name" class="label-md block mb-4">Full Name</label>
                                <input type="text" name="user_name" id="user_name" required class="w-full bg-[#f9f9f8] border-none px-6 py-4 focus:ring-2 focus:ring-[#46655d]/10 transition-all font-inter" placeholder="Your Name">
                                @error('user_name')<p class="text-red-500 text-xs mt-2">{{ $message }}</p>@enderror
                            </div>

                            <div>
                                <label for="user_email" class="label-md block mb-4">Email Address</label>
                                <input type="email" name="user_email" id="user_email" required class="w-full bg-[#f9f9f8] border-none px-6 py-4 focus:ring-2 focus:ring-[#46655d]/10 transition-all font-inter" placeholder="your@email.com">
                                @error('user_email')<p class="text-red-500 text-xs mt-2">{{ $message }}</p>@enderror
                            </div>

                            <div>
                                <label for="user_phone" class="label-md block mb-4">Phone Number</label>
                                <input type="text" name="user_phone" id="user_phone" required class="w-full bg-[#f9f9f8] border-none px-6 py-4 focus:ring-2 focus:ring-[#46655d]/10 transition-all font-inter" placeholder="+91 XXXX XXX XXX">
                                @error('user_phone')<p class="text-red-500 text-xs mt-2">{{ $message }}</p>@enderror
                            </div>

                            <button type="submit" class="w-full btn-tertiary py-5 text-lg font-extrabold">Confirm Booking</button>
                            
                            <p class="label-sm opacity-50 text-center mt-8 px-4">
                                You'll receive a confirmation email with session details and payment link after registration.
                            </p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-public-layout>
