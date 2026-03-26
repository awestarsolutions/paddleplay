<footer class="bg-[#eaefee] pt-24 pb-12">
    <div class="max-w-7xl mx-auto px-6">
        <div class="grid grid-cols-1 md:grid-cols-4 gap-16 mb-24">
            <div class="col-span-1 md:col-span-2">
                <h3 class="font-manrope font-extrabold text-2xl uppercase tracking-[0.1em] mb-6">PaddlePlay</h3>
                <p class="body-lg max-w-md text-[#404948]">
                    Structured sessions. Quality courts. A growing community in Mumbai.
                </p>
            </div>
            <div>
                <h4 class="label-md mb-8">Navigation</h4>
                <div class="flex flex-col space-y-4">
                    <a href="{{ route('home') }}" class="body-md hover:text-[#46655d] transition-colors">Home</a>
                    <a href="{{ route('events.index') }}" class="body-md hover:text-[#46655d] transition-colors">Events</a>
                    <a href="{{ route('shop.index') }}" class="body-md hover:text-[#46655d] transition-colors">Shop</a>
                    <a href="{{ route('about') }}" class="body-md hover:text-[#46655d] transition-colors">About</a>
                </div>
            </div>
            <div>
                <h4 class="label-md mb-8">Connect</h4>
                <div class="flex flex-col space-y-4">
                    <a href="https://instagram.com/paddleplay" class="body-md hover:text-[#46655d] transition-colors">Instagram</a>
                    <a href="{{ route('contact') }}" class="body-md hover:text-[#46655d] transition-colors">WhatsApp</a>
                </div>
            </div>
        </div>
        <div class="border-t border-[#abb4b3]/15 pt-12 flex flex-col md:row justify-between items-center">
            <p class="label-sm opacity-50">&copy; {{ date('Y') }} PaddlePlay. All rights reserved.</p>
        </div>
    </div>
</footer>