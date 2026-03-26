<aside class="w-64 bg-white border-r border-[#abb4b3]/15 min-h-screen sticky top-0">
    <div class="p-8">
        <h3 class="label-md opacity-30 mb-12 uppercase tracking-[0.2em]">Management</h3>
        
        <nav class="space-y-6">
            <a href="{{ route('admin.dashboard') }}" class="flex items-center space-x-4 group">
                <span class="w-1 h-1 bg-[#2c3433] rounded-full opacity-0 group-hover:opacity-100 transition-opacity"></span>
                <span class="label-md lowercase {{ request()->routeIs('admin.dashboard') ? 'font-bold' : '' }}">Overview</span>
            </a>
            
            <a href="{{ route('admin.events.index') }}" class="flex items-center space-x-4 group">
                <span class="w-1 h-1 bg-[#2c3433] rounded-full opacity-0 group-hover:opacity-100 transition-opacity"></span>
                <span class="label-md lowercase {{ request()->routeIs('admin.events.*') ? 'font-bold' : '' }}">Sessions</span>
            </a>
            
            <a href="{{ route('admin.products.index') }}" class="flex items-center space-x-4 group">
                <span class="w-1 h-1 bg-[#2c3433] rounded-full opacity-0 group-hover:opacity-100 transition-opacity"></span>
                <span class="label-md lowercase {{ request()->routeIs('admin.products.*') ? 'font-bold' : '' }}">Inventory</span>
            </a>
            
            <a href="{{ route('admin.bookings.index') }}" class="flex items-center space-x-4 group">
                <span class="w-1 h-1 bg-[#2c3433] rounded-full opacity-0 group-hover:opacity-100 transition-opacity"></span>
                <span class="label-md lowercase {{ request()->routeIs('admin.bookings.*') ? 'font-bold' : '' }}">Registrations</span>
            </a>
        </nav>

        <div class="mt-24 pt-12 border-t border-[#abb4b3]/10">
            <a href="{{ route('home') }}" class="label-md lowercase opacity-50 hover:opacity-100 flex items-center space-x-2">
                <span>&larr;</span> <span>Back to Site</span>
            </a>
        </div>
    </div>
</aside>