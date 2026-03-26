<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    /** @use HasFactory<\Database\Factories\EventFactory> */
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'image_path',
        'event_date',
        'location',
        'price',
        'skill_level',
        'status',
    ];

    protected $casts = [
        'event_date' => 'datetime',
    ];

    public function bookings()
    {
        return $this->hasMany(Booking::class);
    }
}
