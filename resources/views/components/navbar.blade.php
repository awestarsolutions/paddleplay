<nav class="fixed top-0 left-0 w-full z-50 bg-white/90 backdrop-blur-[20px] border-b border-[#0a214d]/5 transition-all duration-300">
    <div class="max-w-7xl mx-auto px-6 h-24 flex items-center justify-between">
        <a href="{{ route('home') }}" class="font-manrope font-extrabold text-xl tracking-[0.2em] uppercase">
            PaddlePlay
        </a>

        <div class="hidden md:flex items-center space-x-12">
            <a href="{{ route('home') }}" class="label-md hover:text-[#0a214d] transition-colors">Home</a>
            <a href="{{ route('events.index') }}" class="label-md hover:text-[#0a214d] transition-colors">Events</a>
            <a href="{{ route('shop.index') }}" class="label-md hover:text-[#0a214d] transition-colors">Shop</a>
            <a href="{{ route('about') }}" class="label-md hover:text-[#0a214d] transition-colors">About</a>
        </div>

        <div>
            <a href="{{ route('events.index') }}" class="btn-primary">View Events</a>
        </div>
    </div>
</nav>
<div class="h-24"></div>