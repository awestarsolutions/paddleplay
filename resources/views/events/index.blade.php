<x-public-layout>
    <section class="py-24 bg-[#f8fafc] border-b border-[#0a214d]/5">
        <div class="max-w-7xl mx-auto px-6">
            <span class="label-md mb-8 block">Join a Session</span>
            <h1 class="font-manrope font-extrabold text-7xl uppercase tracking-tighter mb-12">Upcoming Events</h1>
            <p class="body-lg text-2xl text-[#404948] max-w-2xl">
                Browse our scheduled sessions and book your spot. From beginners to advanced players, we have something for everyone.
            </p>
        </div>
    </section>

    <section class="py-32 bg-white">
        <div class="max-w-7xl mx-auto px-6">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-12">
                @forelse($events as $event)
                    <x-event-card :event="$event" />
                @empty
                    <div class="col-span-3 py-24 text-center border-2 border-dashed border-[#abb4b3]/15">
                        <p class="body-lg opacity-50 text-xl font-light">No sessions scheduled at the moment. Check back soon for new dates.</p>
                    </div>
                @endforelse
            </div>

            <div class="mt-24">
                {{ $events->links() }}
            </div>
        </div>
    </section>
</x-public-layout>
