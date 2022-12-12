<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Phone extends Model
{
    use HasFactory, SoftDeletes;

    protected $guarded = [];

    protected $casts = [
        'galleries' => 'array',
        'networks' => 'array',
        'sims' => 'array',
        'variants' => 'array',
        'camera_resolutions' => 'array',
        'selfie_camera_resolutions' => 'array',
    ];

    public function brand(){
        return $this->belongsTo(Brand::class);
    }
}
