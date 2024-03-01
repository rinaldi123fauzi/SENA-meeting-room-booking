<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class OfficeLayout extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'map_id',
        'location',
        'user_name',
        'department',
    ];

    public function office_map()
    {
        return $this->belongsTo(Map::class, 'map_id', 'id');
    }
}
