<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Event;
use App\Models\Booking;
use App\Models\Product;
use App\Models\Order;

class AdminDashboardController extends Controller
{
    public function index()
    {
        $eventCount = Event::count();
        $bookingCount = Booking::count();
        $productCount = Product::count();
        $orderCount = Order::count();
        $recentBookings = Booking::with('event')->orderBy('created_at', 'desc')->take(5)->get();

        return view('admin.dashboard', compact('eventCount', 'bookingCount', 'productCount', 'orderCount', 'recentBookings'));
    }
}
