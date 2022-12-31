<?php

namespace App\Http\Controllers;

use App\Models\Review;
use App\Models\Admin\Brand;
use App\Models\Admin\Phone;
use App\Models\Admin\Laptop;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Providers\RouteServiceProvider;

class DashboardController extends Controller
{
    public function dashboard()
    {
        if(Auth::user()->hasRole('vendor'))
            return redirect()->route('vendor.dashboard');

        return redirect()->route('admin.dashboard');
    }

    public function welcome()
    {
        $phones = Phone::inRandomOrder()->get()->take(4);
        $laptops = Laptop::inRandomOrder()->get()->take(4);
        return view('welcome', compact('phones', 'laptops'));
    }

    public function brands()
    {
        $brands = Brand::all();
        return view('brands', compact('brands'));
    }

    public function reviews()
    {
        $reviews = Review::latest()->get();

        return view('reviews', compact('reviews'));
    }
}
