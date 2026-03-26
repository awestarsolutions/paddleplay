<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <h2 class="font-manrope font-extrabold text-2xl text-[#2c3433] uppercase tracking-tight">
                {{ __('Manage Sessions') }}
            </h2>
            <a href="{{ route('admin.events.create') }}" class="btn-primary">Create Session</a>
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
                            <th class="px-8 py-4">Session</th>
                            <th class="px-8 py-4">Date & Time</th>
                            <th class="px-8 py-4">Location</th>
                            <th class="px-8 py-4">Price</th>
                            <th class="px-8 py-4 text-right">Actions</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-[#abb4b3]/15">
                        @forelse($events as $event)
                            <tr class="hover:bg-[#fafafa] transition-colors">
                                <td class="px-8 py-6">
                                    <div class="flex items-center space-x-4">
                                        @if($event->image_path)
                                            <img src="{{ str_starts_with($event->image_path, 'http') ? $event->image_path : asset('storage/' . $event->image_path) }}" 
                                                 class="w-12 h-12 object-cover grayscale">
                                        @endif
                                        <div>
                                            <p class="font-bold text-[#2c3433]">{{ $event->title }}</p>
                                            <p class="text-xs opacity-50 uppercase">{{ $event->skill_level }}</p>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-8 py-6 body-md">{{ $event->event_date->format('M d, Y H:i') }}</td>
                                <td class="px-8 py-6 body-md">{{ $event->location }}</td>
                                <td class="px-8 py-6 body-md font-bold text-[#46655d]">₹{{ number_format($event->price) }}</td>
                                <td class="px-8 py-6 text-right space-x-4">
                                    <a href="{{ route('admin.events.edit', $event) }}" class="label-md text-[#5f5e5e] hover:text-[#46655d]">Edit</a>
                                    <form action="{{ route('admin.events.destroy', $event) }}" method="POST" class="inline">
                                        @csrf @method('DELETE')
                                        <button type="submit" class="label-md text-red-500 hover:text-red-700" onclick="return confirm('Archive this session?')">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <tr><td colspan="5" class="px-8 py-12 text-center opacity-50">No sessions found. Start by creating one.</td></tr>
                        @endforelse
                    </tbody>
                </table>
            </div>

            <div class="mt-8">
                {{ $events->links() }}
            </div>
        </div>
    </div>
</x-app-layout>
