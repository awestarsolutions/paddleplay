<x-app-layout>
    <x-slot name="header">
        <h2 class="font-manrope font-extrabold text-2xl text-[#0a214d] uppercase tracking-tight">
            {{ __('Administration Overview') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto px-6">
            {{-- Stats Grid --}}
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8 mb-12">
                <div class="bg-white p-8 border border-[#0a214d]/10">
                    <span class="label-sm opacity-50 uppercase mb-2 block tracking-widest">Sessions</span>
                    <span class="font-manrope font-extrabold text-5xl text-[#0a214d]">{{ $eventCount }}</span>
                </div>
                <div class="bg-white p-8 border border-[#0a214d]/10">
                    <span class="label-sm opacity-50 uppercase mb-2 block tracking-widest">Bookings</span>
                    <span class="font-manrope font-extrabold text-5xl text-[#0a214d]">{{ $bookingCount }}</span>
                </div>
                <div class="bg-white p-8 border border-[#0a214d]/10">
                    <span class="label-sm opacity-50 uppercase mb-2 block tracking-widest">Inventory</span>
                    <span class="font-manrope font-extrabold text-5xl text-[#0a214d]">{{ $productCount }}</span>
                </div>
                <div class="bg-white p-8 border border-[#0a214d]/10">
                    <span class="label-sm opacity-50 uppercase mb-2 block tracking-widest">Orders</span>
                    <span class="font-manrope font-extrabold text-5xl text-[#1e3a8a]">{{ $orderCount }}</span>
                </div>
            </div>

            {{-- Recent Bookings --}}
            <div class="bg-white border border-[#0a214d]/10 overflow-hidden">
                <div class="p-8 border-b border-[#0a214d]/10 flex justify-between items-center bg-[#f8fafc]">
                    <h3 class="font-manrope font-extrabold text-xl uppercase tracking-tight text-[#0a214d]">Recent Activity</h3>
                    <a href="{{ route('admin.bookings.index') }}" class="label-md border-b border-[#0a214d]/20 text-[#0a214d]/60 hover:text-[#0a214d] transition-colors">View All Bookings</a>
                </div>
                <table class="w-full text-left">
                    <thead>
                        <tr class="bg-[#f1f4f3] label-sm uppercase tracking-widest opacity-50">
                            <th class="px-8 py-4">Player</th>
                            <th class="px-8 py-4">Session</th>
                            <th class="px-8 py-4">Status</th>
                            <th class="px-8 py-4 text-right">Date</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-[#abb4b3]/15">
                        @forelse($recentBookings as $booking)
                            <tr class="hover:bg-[#fafafa] transition-colors">
                                <td class="px-8 py-6">
                                    <p class="font-bold text-[#2c3433]">{{ $booking->user_name }}</p>
                                    <p class="text-xs opacity-50">{{ $booking->user_email }}</p>
                                </td>
                                <td class="px-8 py-6 body-md">{{ $booking->event->title ?? 'N/A' }}</td>
                                <td class="px-8 py-6">
                                    <span class="px-3 py-1 text-[10px] font-extrabold uppercase tracking-widest rounded-full 
                                        @if($booking->status == 'confirmed') bg-green-100 text-green-800 
                                        @elseif($booking->status == 'cancelled') bg-red-100 text-red-800
                                        @else bg-yellow-100 text-yellow-800 @endif">
                                        {{ $booking->status }}
                                    </span>
                                </td>
                                <td class="px-8 py-6 text-right body-md opacity-50">
                                    {{ $booking->created_at->format('M d, H:i') }}
                                </td>
                            </tr>
                        @empty
                            <tr><td colspan="4" class="px-8 py-12 text-center opacity-50">No recent activity detected.</td></tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-app-layout>
