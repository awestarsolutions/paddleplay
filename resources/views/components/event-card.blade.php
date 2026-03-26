@props(['event'])
<a href="{{ route('events.show', $event) }}" class="card-architectural group block no-underline">
    @if($event->image_path)
        <div class="aspect-[4/5] bg-[#f1f4f3] mb-8 overflow-hidden group">
            <img src="{{ str_starts_with($event->image_path, 'http') ? $event->image_path : asset('storage/' . $event->image_path) }}" 
                 alt="{{ $event->title }}" 
                 class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105">
        </div>
    @endif

    <div class="flex flex-col h-full">
        <div class="flex justify-between items-start mb-4">
            <span class="label-md text-[#0a214d]">{{ $event->event_date->format('M d, Y') }}</span>
            <span class="label-sm opacity-50 uppercase tracking-widest">{{ $event->skill_level }}</span>
        </div>
        
        <h3 class="font-manrope font-bold text-2xl mb-6 uppercase tracking-tight group-hover:text-[#0a214d] transition-colors">
            {{ $event->title }}
        </h3>
        
        <p class="body-md text-[#404948] mb-8 line-clamp-2">
            {{ Str::limit(strip_tags($event->description), 100) }}
        </p>

        <div class="mt-auto pt-8 border-t border-[#abb4b3]/15 flex justify-between items-center">
            <span class="label-md font-bold text-lg text-[#0a214d]">₹{{ number_format($event->price) }}</span>
            <span class="label-md font-extrabold group-hover:translate-x-2 transition-transform">
                Book Spot &rarr;
            </span>
        </div>
    </div>
</a>