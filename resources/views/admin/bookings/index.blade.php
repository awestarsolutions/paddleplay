<x-app-layout>
    <x-slot name="header">
        <h2 class="font-manrope font-extrabold text-2xl text-[#2c3433] uppercase tracking-tight">
            {{ __('Booking Registry') }}
        </h2>
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
                            <th class="px-8 py-4">Player Details</th>
                            <th class="px-8 py-4">Session</th>
                            <th class="px-8 py-4">Status</th>
                            <th class="px-8 py-4 text-right">Manage</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-[#abb4b3]/15">
                        @forelse($bookings as $booking)
                            <tr class="hover:bg-[#fafafa] transition-colors">
                                <td class="px-8 py-6">
                                    <p class="font-bold text-[#2c3433]">{{ $booking->user_name }}</p>
                                    <p class="text-xs opacity-50">{{ $booking->user_email }}</p>
                                    <p class="text-[10px] opacity-30 mt-1 uppercase">{{ $booking->user_phone }}</p>
                                </td>
                                <td class="px-8 py-6">
                                    <p class="body-md font-medium text-[#2c3433]">{{ $booking->event->title ?? 'N/A' }}</p>
                                    <p class="text-[10px] opacity-50 uppercase tracking-tighter">{{ $booking->event->event_date->format('M d, Y') }}</p>
                                </td>
                                <td class="px-8 py-6">
                                    <form action="{{ route('admin.bookings.update', $booking) }}" method="POST">
                                        @csrf @method('PUT')
                                        <select name="status" onchange="this.form.submit()" class="text-[10px] font-extrabold uppercase tracking-widest bg-transparent border-none p-0 focus:ring-0 cursor-pointer
                                            @if($booking->status == 'confirmed') text-green-600 
                                            @elseif($booking->status == 'cancelled') text-red-600
                                            @else text-yellow-600 @endif">
                                            <option value="pending" {{ $booking->status == 'pending' ? 'selected' : '' }}>Pending</option>
                                            <option value="confirmed" {{ $booking->status == 'confirmed' ? 'selected' : '' }}>Confirmed</option>
                                            <option value="cancelled" {{ $booking->status == 'cancelled' ? 'selected' : '' }}>Cancelled</option>
                                        </select>
                                    </form>
                                </td>
                                <td class="px-8 py-6 text-right">
                                    <form action="{{ route('admin.bookings.destroy', $booking) }}" method="POST" class="inline">
                                        @csrf @method('DELETE')
                                        <button type="submit" class="label-md text-red-500 hover:text-red-700 opacity-20 hover:opacity-100 transition-opacity" onclick="return confirm('Delete record?')">Archive</button>
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <tr><td colspan="4" class="px-8 py-12 text-center opacity-50">Registry is empty.</td></tr>
                        @endforelse
                    </tbody>
                </table>
            </div>

            <div class="mt-8">
                {{ $bookings->links() }}
            </div>
        </div>
    </div>
</x-app-layout>
