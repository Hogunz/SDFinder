<?php

namespace App\Models\Admin;

use App\Models\User;
use App\Models\Review;
use App\Models\Vendor\LaptopUser;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

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

    public function graphicsCard(){
        return $this->belongsTo(GraphicsCard::class);
    }

    public function processor(){
        return $this->belongsTo(Processor::class);
    }

    public function users()
    {
        return $this->belongsToMany(User::class, 'laptop_user')->using(LaptopUser::class)->withPivot(['price'])->withTimestamps();
    }

    public function getGpuAttribute()
    {

        $gpu = $this->graphicsCard->name;
        return $gpu;
    }
    public function getCpuAttribute()
    {
        $cpu = $this->processor->name;

        return $cpu;
    }
    public function getDisplayAttribute()
    {
        $type = $this->display_type;
        $size = $this->screen_size;
        $resolution = "{$this->display_resolution} {$this->display_width}x{$this->display_height},  {$this->display_description}";

        return trim("$type; $size inches; $resolution");
    }

    public function getStorageMemAttribute()
    {
        $storage = "{$this->ram}GB, {$this->storage}GB Storage, {$this->storage_description} ";
       return $storage;
    }

    public function getBatteryAttribute()
    {
        $battery = "{$this->battery_capacity}Wh, {$this->battery_description}";
       return trim("$battery");
    }

    public function getCameraDisAttribute()
    {
        $camera = "{$this->camera}, {$this->camera_description}";
       return trim("$camera");
    }

    public function getFeaturesDisAttribute()
    {
        $feature = "{$this->features}, {$this->features_description}";
       return trim("$feature");
    }
}
