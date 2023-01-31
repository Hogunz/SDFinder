<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class OperatingSystem extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = ['name'];

    public function versions()
    {
        return $this->hasMany(OperatingSystemVersion::class, 'operating_system_id');
    }
}
