<?php

namespace App\Models\Admin;

use App\Models\User;
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
    ];

    public function brand(){
        return $this->belongsTo(Brand::class);
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
        return $this->belongsToMany(User::class, 'phone_user')->using(PhoneUser::class)->withPivot(['variant', 'price'])->withTimestamps();
    }
}
