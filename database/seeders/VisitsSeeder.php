<?php

namespace Database\Seeders;

use App\Models\Visitor;
use Illuminate\Database\Seeder;

class VisitsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Visitor::create();
    }
}
