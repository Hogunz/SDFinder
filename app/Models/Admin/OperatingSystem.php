<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OperatingSystem extends Model
{
    use HasFactory;

    protected $fillable = ['name'];

    public function versions()
    {
        return $this->hasMany(OperatingSystemVersion::class, 'operating_system_id');
    }
}
