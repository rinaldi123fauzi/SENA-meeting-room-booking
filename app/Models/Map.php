<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Map extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'building_id',
        'image_url'
    ];

    public function office_layout() 
    {
        return $this->hasMany(OfficeLayout::class, 'map_id', 'id');
    }
}
