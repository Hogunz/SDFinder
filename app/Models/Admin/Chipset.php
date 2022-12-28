<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chipset extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'no_of_cores', 'cpu', 'gpu'];

    public function getDescriptionAttribute()
    {

        $cpu = "{$this->no_of_cores} Cores {$this->cpu}";
        $gpu = $this->gpu;

        return trim("{$this->name}: $cpu; $gpu");
    }
}
