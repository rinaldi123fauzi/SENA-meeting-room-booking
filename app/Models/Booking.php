<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Booking extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'user_id',
        'room_id',
        'booked_by',
        'email',
        'meeting_description',
        'status',
        'start_time',
        'end_time',
    ];

    public function user() 
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function room() 
    {
        return $this->belongsTo(Room::class, 'room_id', 'id');
    }

}
