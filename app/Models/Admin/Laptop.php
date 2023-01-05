<?php

namespace App\Models\Admin;

use App\Models\Review;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Laptop extends Model
{
    use HasFactory, SoftDeletes;

    protected $guarded = [];

    protected $casts = [
        'galleries' => 'array',
        'features' => 'array',
    ];

    public function review()
    {
        return $this->morphOne(Review::class, 'reviewable');
    }
    public function brand(){
        return $this->belongsTo(Brand::class);
    }
}
