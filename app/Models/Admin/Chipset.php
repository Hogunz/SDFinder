<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chipset extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'no_of_cores', 'cpu', 'gpu'];

}
