<?php

namespace App\Http\Controllers\Vendor;

use App\Models\Admin\Brand;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class LaptopController extends Controller
{
    public function index()
    {
        $laptops = Auth::user()->laptops;

        return view('vendors.laptops.index', compact('laptops'));
    }

    public function create()
    {
        $brands = Brand::with(['laptops'])->orderBy('name')->get();

        return view('vendors.laptops.create', compact('brands'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'brand_id' => ['required'],
            'laptop_id' => ['required'],
            'price' => ['required', 'numeric', 'min:0'],
        ]);


        Auth::user()->laptops()->attach($request->laptop_id, ['price' => $request->price]);

        return redirect()->route('vendor.laptops.index')->with('status', 'Successfully added laptop');
    }


}
