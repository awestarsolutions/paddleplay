<x-public-layout>
    <section class="py-24 bg-[#f8fafc] border-b border-[#0a214d]/5">
        <div class="max-w-7xl mx-auto px-6">
            <span class="label-md mb-8 block">Pro Shop</span>
            <h1 class="font-manrope font-extrabold text-7xl uppercase tracking-tighter mb-12">Essential Gear</h1>
            <p class="body-lg text-2xl text-[#404948] max-w-2xl">
                Curated equipment for the Mumbai player. Quality tested by our community.
            </p>
        </div>
    </section>

    <section class="py-32 bg-white">
        <div class="max-w-7xl mx-auto px-6">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-12">
                @forelse($products as $product)
                    <a href="{{ route('shop.index') }}" class="group border border-[#0a214d]/10 p-8 bg-white hover:bg-[#fafafa] transition-all block no-underline">
                        @if($product->image_path)
                            <div class="aspect-square mb-8 bg-[#f1f4f3] overflow-hidden">
                                <img src="{{ str_starts_with($product->image_path, 'http') ? $product->image_path : asset('storage/' . $product->image_path) }}" 
                                     alt="{{ $product->name }}" 
                                     class="w-full h-full object-cover transition-all group-hover:scale-105">
                            </div>
                        @endif
                        
                        <h3 class="font-manrope font-bold text-xl uppercase mb-4 tracking-tight group-hover:text-[#0a214d] transition-colors">
                            {{ $product->name }}
                        </h3>
                        
                        <p class="body-md text-[#404948]/70 mb-8 line-clamp-2">{{ $product->description }}</p>

                        <div class="flex justify-between items-center pt-8 border-t border-[#0a214d]/10">
                            <span class="label-md font-bold text-lg text-[#0a214d]">₹{{ number_format($product->price) }}</span>
                            <span class="label-sm opacity-50 uppercase tracking-widest">
                                {{ $product->stock_quantity > 0 ? 'In Stock' : 'Out of Stock' }}
                            </span>
                        </div>
                    </a>
                @empty
                    <div class="col-span-4 py-24 text-center border-2 border-dashed border-[#abb4b3]/15">
                        <p class="body-lg opacity-50 text-xl font-light">Inventory arriving soon. Stay tuned.</p>
                    </div>
                @endforelse
            </div>
        </div>
    </section>
</x-public-layout>
