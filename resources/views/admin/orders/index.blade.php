<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <h2 class="font-manrope font-extrabold text-3xl uppercase tracking-tight text-[#0a214d]">
                {{ __('Shop Orders') }}
            </h2>
        </div>
    </x-slot>

    <div class="py-12">
    <div class="max-w-7xl mx-auto px-6">
        @if(session('success'))
            <div class="mb-8 p-4 bg-green-50 text-green-700 border border-green-200">
                {{ session('success') }}
            </div>
        @endif

        <div class="bg-white border border-[#0a214d]/10 overflow-hidden">
            <table class="w-full text-left border-collapse">
                <thead>
                    <tr class="border-b border-[#0a214d]/10">
                        <th class="p-6 label-md">Order ID</th>
                        <th class="p-6 label-md">Customer</th>
                        <th class="p-6 label-md">Product</th>
                        <th class="p-6 label-md">Total</th>
                        <th class="p-6 label-md">Status</th>
                        <th class="p-6 label-md text-right">Actions</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-[#0a214d]/5">
                    @forelse($orders as $order)
                        <tr class="hover:bg-[#f8fafc] transition-colors">
                            <td class="p-6 font-mono text-sm">#ORD-{{ str_pad($order->id, 5, '0', STR_PAD_LEFT) }}</td>
                            <td class="p-6">
                                <div class="font-bold text-[#0a214d]">{{ $order->user_name }}</div>
                                <div class="text-sm opacity-60">{{ $order->user_email }}</div>
                                <div class="text-sm opacity-60">{{ $order->user_phone }}</div>
                            </td>
                            <td class="p-6">
                                <div class="font-medium">{{ $order->product->name }}</div>
                                <div class="text-sm opacity-60">Qty: {{ $order->quantity }}</div>
                            </td>
                            <td class="p-6 font-bold">₹{{ number_format($order->total_price) }}</td>
                            <td class="p-6">
                                <span class="px-3 py-1 text-xs font-bold uppercase tracking-widest 
                                    @if($order->status === 'pending') bg-yellow-100 text-yellow-800
                                    @elseif($order->status === 'dispatched') bg-blue-100 text-blue-800
                                    @elseif($order->status === 'delivered') bg-green-100 text-green-800
                                    @else bg-red-100 text-red-800 @endif">
                                    {{ $order->status }}
                                </span>
                            </td>
                            <td class="p-6 text-right">
                                <div class="flex justify-end items-center space-x-4">
                                    <form action="{{ route('admin.orders.update', $order) }}" method="POST" class="inline-flex">
                                        @csrf
                                        @method('PATCH')
                                        <select name="status" onchange="this.form.submit()" class="text-xs border-[#0a214d]/10 focus:ring-[#0a214d] focus:border-[#0a214d] rounded-none px-2 py-1">
                                            <option value="pending" {{ $order->status == 'pending' ? 'selected' : '' }}>Pending</option>
                                            <option value="dispatched" {{ $order->status == 'dispatched' ? 'selected' : '' }}>Dispatch</option>
                                            <option value="delivered" {{ $order->status == 'delivered' ? 'selected' : '' }}>Delivered</option>
                                            <option value="cancelled" {{ $order->status == 'cancelled' ? 'selected' : '' }}>Cancel</option>
                                        </select>
                                    </form>
                                    
                                    <form action="{{ route('admin.orders.destroy', $order) }}" method="POST" onsubmit="return confirm('Archive this order?')" class="inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="text-red-400 hover:text-red-600 transition-colors">
                                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" /></svg>
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                        <tr class="bg-[#f8fafc]/50">
                            <td colspan="6" class="px-6 py-3 text-xs opacity-60 italic">
                                <strong>Shipping Address:</strong> {{ $order->shipping_address }}
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="6" class="p-12 text-center opacity-50">No orders found.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

        <div class="mt-8">
            {{ $orders->links() }}
        </div>
    </div>
</x-app-layout>
