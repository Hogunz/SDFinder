<?php

namespace App\Models;

use App\Models\Admin\Phone;
use App\Models\Admin\Laptop;
use App\Models\Vendor\PhoneUser;
use App\Models\Vendor\LaptopUser;
use Laravel\Sanctum\HasApiTokens;
use Spatie\Permission\Traits\HasRoles;
use App\Models\Vendor\VendorInformation;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable, HasRoles;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'phones.pivot.variant' => 'array'
    ];

    public function vendorInformation()
    {
        return $this->hasOne(VendorInformation::class);
    }

    public function phones()
    {
        return $this->belongsToMany(Phone::class, 'phone_user')->using(PhoneUser::class)->withPivot(['variant', 'price'])->withTimestamps();
    }

    public function laptops()
    {
        return $this->belongsToMany(Laptop::class, 'laptop_user')->using(LaptopUser::class)->withPivot(['price'])->withTimestamps();
    }

    public function getMobiles()
    {
        $mobiles = [];

        $phones = $this->phones();
        $laptops = $this->laptops();

        if($phones) {
            $phones = $phones->get()->map(function ($phone) {
                $array = [];
                $array['id'] = $phone->id;
                $array['name'] = strtoupper($phone->name);
                $array['url'] = "/mobile-finder/{$phone->id}/view";
                $array['img'] = $phone->img;
                $array['type'] = 'phone';
                $array['price'] = $phone->pivot->price_string;
                $array['variant'] = $phone->pivot->variant['ram']."GB ".$phone->pivot->variant['storage']." GB";

                return collect($array);
            });

            $mobiles = $phones;
        }

        if($laptops) {
            $laptops = $laptops->get()->map(function ($laptop) {
                $array = [];
                $array['id'] = $laptop->id;
                $array['name'] = strtoupper($laptop->name);
                $array['url'] = "/laptop-finder/{$laptop->id}/view";
                $array['img'] = $laptop->img;
                $array['type'] = 'laptop';
                $array['price'] = $laptop->pivot->price_string;
                $array['variant'] = $laptop->ram."GB ".$laptop->storage."GB";

                return collect($array);
            });

            $mobiles = $laptops;
        }

        if($phones && $laptops)
            $mobiles = $phones->merge($laptops);

        return $mobiles;
    }
}
