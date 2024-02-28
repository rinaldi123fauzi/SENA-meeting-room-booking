<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class BookingStatus extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'booking_id',
        'status',
    ];

    public function booking() {
        return $this->belongsTo(Booking::class, 'booking_id', 'id');
    }
}
