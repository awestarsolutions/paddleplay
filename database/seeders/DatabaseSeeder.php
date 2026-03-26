<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Event;
use App\Models\Product;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Admin User
        User::factory()->create([
            'name' => 'Admin User',
            'email' => 'admin@paddleplay.in',
            'password' => Hash::make('password'),
            'email_verified_at' => now(),
        ]);

        // Sample Events
        Event::create([
            'title' => 'Open Paddle Session',
            'description' => 'A relaxed evening of paddle tennis for all skill levels. Great for meeting fellow players.',
            'image_path' => 'https://images.unsplash.com/photo-1626224583764-f87db24ac4ea?q=80&w=2070&auto=format&fit=crop',
            'event_date' => now()->addDays(2)->setHour(18)->setMinute(0),
            'location' => 'Willingdon Catholic Gymkhana',
            'price' => 1200,
            'skill_level' => 'All Levels',
        ]);

        Event::create([
            'title' => 'Competitive Pickleball Night',
            'description' => 'High intensity pickleball for intermediate to advanced players. Tournament style scoring.',
            'image_path' => 'https://images.unsplash.com/photo-1599586120429-48281b6f0ece?q=80&w=2070&auto=format&fit=crop',
            'event_date' => now()->addDays(4)->setHour(19)->setMinute(30),
            'location' => 'NSCI, Worli',
            'price' => 1500,
            'skill_level' => 'Intermediate+',
        ]);

        Event::create([
            'title' => 'Weekend Morning Paddle',
            'description' => 'Start your weekend right with a sunrise session. Includes post-game refreshments.',
            'image_path' => 'https://images.unsplash.com/photo-1554068865-24cecd4e34b8?q=80&w=2070&auto=format&fit=crop',
            'event_date' => now()->addDays(6)->setHour(7)->setMinute(0),
            'location' => 'Juhu Vile Parle Gymkhana',
            'price' => 1000,
            'skill_level' => 'Beginner Friendly',
        ]);

        // Sample Products
        Product::create([
            'name' => 'Elite Carbon Paddle',
            'description' => 'Professional grade carbon fiber paddle for maximum control and power.',
            'price' => 18000,
            'category' => 'Paddles',
            'image_path' => 'https://images.unsplash.com/photo-1617083277977-bc210f19932d?q=80&w=2070&auto=format&fit=crop',
        ]);

        Product::create([
            'name' => 'Premium Pickleball Set',
            'description' => 'Set of 4 high-performance outdoor pickleballs with consistent bounce.',
            'price' => 1200,
            'category' => 'Accessories',
            'image_path' => 'https://images.unsplash.com/photo-1628155930542-3c7a64e2c833?q=80&w=2070&auto=format&fit=crop',
        ]);

        Product::create([
            'name' => 'PaddlePlay Performance Tee',
            'description' => 'Breathable, moisture-wicking fabric designed for high-intensity movement on the court.',
            'price' => 1500,
            'stock_quantity' => 50,
        ]);
    }
}
