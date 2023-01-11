<?php

namespace App\Models\Vendor;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\Pivot;

class LaptopUser extends Pivot
{
    use HasFactory;

    protected $table = "laptop_user";

    protected $guarded = [];

    public function getPriceStringAttribute()
    {
        return "Php ". number_format($this->attributes['price'], 2, '.', ',');
    }

}
