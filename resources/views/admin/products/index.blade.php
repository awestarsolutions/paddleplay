<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <h2 class="font-manrope font-extrabold text-2xl text-[#2c3433] uppercase tracking-tight">
                {{ __('Shop Inventory') }}
            </h2>
            <a href="{{ route('admin.products.create') }}" class="btn-primary">Add Product</a>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto px-6">
            @if(session('success'))
                <div class="bg-green-50 text-green-800 p-6 mb-8 label-md border border-green-100">
                    {{ session('success') }}
                </div>
            @endif

            <div class="bg-white border border-[#abb4b3]/15 overflow-hidden">
                <table class="w-full text-left">
                    <thead>
                        <tr class="bg-[#f1f4f3] label-sm uppercase tracking-widest opacity-50">
                            <th class="px-8 py-4">Product</th>
                            <th class="px-8 py-4">Price</th>
                            <th class="px-8 py-4">Stock</th>
                            <th class="px-8 py-4 text-right">Actions</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-[#abb4b3]/15">
                        @forelse($products as $product)
                            <tr class="hover:bg-[#fafafa] transition-colors">
                                <td class="px-8 py-6">
                                    <div class="flex items-center space-x-4">
                                        @if($product->image_path)
                                            <img src="{{ str_starts_with($product->image_path, 'http') ? $product->image_path : asset('storage/' . $product->image_path) }}" 
                                                 class="w-12 h-12 object-cover grayscale">
                                        @endif
                                        <div>
                                            <p class="font-bold text-[#2c3433]">{{ $product->name }}</p>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-8 py-6 body-md font-bold text-[#46655d]">₹{{ number_format($product->price) }}</td>
                                <td class="px-8 py-6 body-md">
                                    <span class="{{ $product->stock_quantity < 5 ? 'text-red-500 font-bold' : '' }}">
                                        {{ $product->stock_quantity }} units
                                    </span>
                                </td>
                                <td class="px-8 py-6 text-right space-x-4">
                                    <a href="{{ route('admin.products.edit', $product) }}" class="label-md text-[#5f5e5e] hover:text-[#46655d]">Edit</a>
                                    <form action="{{ route('admin.products.destroy', $product) }}" method="POST" class="inline">
                                        @csrf @method('DELETE')
                                        <button type="submit" class="label-md text-red-500 hover:text-red-700" onclick="return confirm('Remove product?')">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <tr><td colspan="4" class="px-8 py-12 text-center opacity-50">No products in inventory.</td></tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
            <div class="mt-8">
                {{ $products->links() }}
            </div>
        </div>
    </div>
</x-app-layout>
