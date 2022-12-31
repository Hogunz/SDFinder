<?php

namespace App\Models\Admin;

use App\Models\Review;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Laptop extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $casts = [
        'galleries' => 'array',
        'features' => 'array',
    ];

    public function review()
    {
        return $this->morphOne(Review::class, 'reviewable');
    }
}
