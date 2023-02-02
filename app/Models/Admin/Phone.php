<?php

namespace App\Models\Admin;

use App\Models\User;
use App\Models\Review;
use App\Models\Vendor\PhoneUser;
use Illuminate\Database\Eloquent\Model;
use App\Models\Admin\OperatingSystemVersion;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

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
        'features' => 'array',
        'misc' => 'array',
    ];

    public function brand()
    {
        return $this->belongsTo(Brand::class)->withTrashed();
    }

    public function chipset()
    {
        return $this->belongsTo(Chipset::class);
    }

    public function operatingSystemVersion()
    {
        return $this->belongsTo(OperatingSystemVersion::class);
    }

    public function users()
    {
        return $this->belongsToMany(User::class, 'phone_user')->using(PhoneUser::class)->withPivot(['variant', 'price', 'device_description'])->withTimestamps();
    }

    public function review()
    {
        return $this->morphOne(Review::class, 'reviewable');
    }


    public function setDescriptionAttribute($value)
    {
        $this->attributes['description'] = preg_replace('/\t/', '', $value);
    }

    public function getBodyAttribute()
    {
        $dimensions = "{$this->length}x{$this->width}x{$this->thickness}mm";
        $weight = "{$this->weight}g";
        $materials = "{$this->front_material} front, {$this->back_material} back, {$this->frame_material} frame";
        $description = $this->body_description;

        return trim("$dimensions; $weight; $materials; $description");
    }

    public function getDisplayAttribute()
    {
        $description = $this->display_description;
        $size = "{$this->size}\"";
        $resolution = "{$this->display_width}x{$this->display_height}px";

        return trim("$resolution $size $description");
    }

    public function getOsAttribute()
    {
        return "{$this->operatingSystemVersion->name}";
    }

    public function getMemoryAttribute()
    {
        $text = "";
        $variants = collect($this->variants);
        foreach ($variants as $variant) {
            $text .= "{$variant['storage']}GB {$variant['ram']}GB";
            if ($variants->last() != $variant)
                $text .= ", ";
        }

        return $text;
    }

    public function getRearCameraAttribute()
    {
        $text = "";
        $camera_resolutions = collect($this->camera_resolutions);
        foreach ($camera_resolutions as $back) {
            $text .= "{$back}MP";
            if ($camera_resolutions->last() != $back)
                $text .= ", ";
        }
        $text .= " {$this->camera_description}";
        $text .= " {$this->video_quality}";

        return trim($text);
    }

    public function getFrontCameraAttribute()
    {
        $text = "";
        $selfie_camera_resolutions = collect($this->selfie_camera_resolutions);
        foreach ($selfie_camera_resolutions as $front) {
            $text .= "{$front}MP";
            if ($selfie_camera_resolutions->last() != $front)
                $text .= ", ";
        }
        $text .= " {$this->selfie_cameras_description}";

        return trim($text);
    }

    public function getBatteryInfoAttribute()
    {
        $text = "";

        $text .= "{$this->battery_capacity}mAh";
        $text .= ", Wired Charging Power: {$this->wired_charging_power}mAh";
        $text .= $this->wireless_charging_power ? " Wireless Charging Power: {$this->wireless_charging_power}mAh" : "";
        $text .= " {$this->battery_description}";

        return trim($text);
    }

    public function getOtherFeaturesAttribute()
    {
        $text = "";
        $features = collect($this->features);
        foreach ($features as $feature) {
            $text .= "{$feature['key']}: {$feature['value']}";
        }

        return trim($text);
    }
}
