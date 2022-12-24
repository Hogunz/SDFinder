<?php

namespace App\Models\Vendor;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\Pivot;

class PhoneUser extends Pivot
{
    use HasFactory;

    protected $table = ['phone_user'];

    protected $casts = [
        'variant' => 'array',
    ];

    public function getPriceStringAttribute()
    {
        return "Php ". number_format($this->attributes['price'], 2, '.', ',');
    }
}
