<?php

namespace App\Http\Controllers;

use App\Models\Event;

class HomeController extends Controller
{
    public function index()
    {
        $featuredEvents = Event::where('status', 'upcoming')
            ->orderBy('event_date', 'asc')
            ->take(3)
            ->get();

        return view('home', compact('featuredEvents'));
    }
}
