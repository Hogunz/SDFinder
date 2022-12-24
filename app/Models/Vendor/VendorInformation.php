<?php

namespace App\Models\Vendor;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VendorInformation extends Model
{
    use HasFactory;

    protected $fillable = [
        'avatar',
        'type',
        'main_products',
        'street',
        'city',
        'province',
        'zip_code',
        'contact',
        'website',
        'information',
        'galleries',
        'embed_google_map',
    ];

    protected $casts = [
        'galleries' => 'array',
    ];

    public function getAddressAttribute()
    {
        return "{$this->street}, {$this->city}, {$this->province}, {$this->zip_code}";
    }
}
