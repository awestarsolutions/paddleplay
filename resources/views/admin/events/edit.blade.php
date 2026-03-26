<x-app-layout>
    <x-slot name="header">
        <h2 class="font-manrope font-extrabold text-2xl text-[#2c3433] uppercase tracking-tight">
            {{ __('Refine Session') }}: {{ $event->title }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-4xl mx-auto px-6">
            <div class="bg-white border border-[#abb4b3]/15 p-12">
                <form action="{{ route('admin.events.update', $event) }}" method="POST" enctype="multipart/form-data" class="space-y-12">
                    @csrf @method('PUT')
                    
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-12">
                        <div class="col-span-2">
                            <label for="title" class="label-md block mb-4">Session Title</label>
                            <input type="text" name="title" id="title" value="{{ old('title', $event->title) }}" required class="w-full bg-[#f9f9f8] border-none px-6 py-4 font-inter">
                        </div>

                        <div>
                            <label for="event_date" class="label-md block mb-4">Date & Time</label>
                            <input type="datetime-local" name="event_date" id="event_date" value="{{ old('event_date', $event->event_date->format('Y-m-d\TH:i')) }}" required class="w-full bg-[#f9f9f8] border-none px-6 py-4 font-inter">
                        </div>

                        <div>
                            <label for="skill_level" class="label-md block mb-4">Skill Level</label>
                            <select name="skill_level" id="skill_level" class="w-full bg-[#f9f9f8] border-none px-6 py-4 font-inter">
                                <option value="All Levels" {{ $event->skill_level == 'All Levels' ? 'selected' : '' }}>All Levels</option>
                                <option value="Beginner" {{ $event->skill_level == 'Beginner' ? 'selected' : '' }}>Beginner</option>
                                <option value="Intermediate" {{ $event->skill_level == 'Intermediate' ? 'selected' : '' }}>Intermediate</option>
                                <option value="Advanced" {{ $event->skill_level == 'Advanced' ? 'selected' : '' }}>Advanced</option>
                            </select>
                        </div>

                        <div>
                            <label for="location" class="label-md block mb-4">Location</label>
                            <input type="text" name="location" id="location" value="{{ old('location', $event->location) }}" required class="w-full bg-[#f9f9f8] border-none px-6 py-4 font-inter">
                        </div>

                        <div>
                            <label for="price" class="label-md block mb-4">Price (INR)</label>
                            <input type="number" name="price" id="price" value="{{ old('price', $event->price) }}" required class="w-full bg-[#f9f9f8] border-none px-6 py-4 font-inter">
                        </div>

                        <div class="col-span-2">
                            <label for="description" class="label-md block mb-4">Description</label>
                            <textarea name="description" id="description" required class="w-full bg-[#f9f9f8] border-none px-6 py-4 font-inter min-h-[150px]">{{ old('description', $event->description) }}</textarea>
                        </div>

                        <div class="col-span-2">
                            <label for="image" class="label-md block mb-4">Update Image</label>
                            @if($event->image_path)
                                <img src="{{ asset('storage/' . $event->image_path) }}" class="w-32 h-20 object-cover grayscale mb-6">
                            @endif
                            <input type="file" name="image" id="image" class="w-full bg-[#f9f9f8] border-none px-6 py-4 font-inter">
                        </div>
                    </div>

                    <div class="pt-12 border-t border-[#abb4b3]/15 flex space-x-8">
                        <button type="submit" class="btn-primary">Update Session</button>
                        <a href="{{ route('admin.events.index') }}" class="label-md py-4">Cancel</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
