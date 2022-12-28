<?php

namespace App\Http\Controllers;

use App\Models\Admin\Brand;
use App\Models\Admin\Phone;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function welcome()
    {
        $phones = Phone::inRandomOrder()->get()->take(4);
        return view('welcome', compact('phones'));
    }

    public function brands()
    {
        $brands = Brand::all();
        return view('brands', compact('brands'));
    }
}
