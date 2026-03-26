<x-app-layout>
    <x-slot name="header">
        <h2 class="font-manrope font-extrabold text-2xl text-[#2c3433] uppercase tracking-tight">
            {{ __('New Inventory Item') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-4xl mx-auto px-6">
            <div class="bg-white border border-[#abb4b3]/15 p-12">
                <form action="{{ route('admin.products.store') }}" method="POST" enctype="multipart/form-data" class="space-y-12">
                    @csrf
                    
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-12">
                        <div class="col-span-2">
                            <label for="name" class="label-md block mb-4">Product Name</label>
                            <input type="text" name="name" id="name" required class="w-full bg-[#f9f9f8] border-none px-6 py-4 font-inter" placeholder="Premium Carbon Paddle V1">
                        </div>

                        <div>
                            <label for="price" class="label-md block mb-4">Price (INR)</label>
                            <input type="number" name="price" id="price" required class="w-full bg-[#f9f9f8] border-none px-6 py-4 font-inter" placeholder="8500">
                        </div>

                        <div>
                            <label for="stock_quantity" class="label-md block mb-4">Initial Stock</label>
                            <input type="number" name="stock_quantity" id="stock_quantity" required class="w-full bg-[#f9f9f8] border-none px-6 py-4 font-inter" placeholder="10">
                        </div>

                        <div class="col-span-2">
                            <label for="description" class="label-md block mb-4">Short Description</label>
                            <textarea name="description" id="description" required class="w-full bg-[#f9f9f8] border-none px-6 py-4 font-inter min-h-[100px]" placeholder="Brief professional description..."></textarea>
                        </div>

                        <div class="col-span-2">
                            <label for="image" class="label-md block mb-4">Product Image</label>
                            <input type="file" name="image" id="image" class="w-full bg-[#f9f9f8] border-none px-6 py-4 font-inter">
                        </div>
                    </div>

                    <div class="pt-12 border-t border-[#abb4b3]/15 flex space-x-8">
                        <button type="submit" class="btn-primary">Add to Shop</button>
                        <a href="{{ route('admin.products.index') }}" class="label-md py-4">Cancel</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
