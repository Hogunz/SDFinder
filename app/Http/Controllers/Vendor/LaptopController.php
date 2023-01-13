<?php

namespace App\Http\Controllers\Vendor;

use App\Models\Admin\Brand;
use App\Models\Admin\Laptop;
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
    public function edit(Laptop $laptop)
    {
        return view('vendors.laptops.edit', compact('laptop'));

    }
    public function update(Request $request, Laptop $laptop)
    {
       Auth::user()->laptops()->updateExistingPivot($laptop->id, ['price' => $request->price]);
       return redirect()->route('vendor.laptops.index');
    }

    public function destroy(Laptop $laptop)
    {
        Auth::user()->laptops()->detach($laptop->id);
        return redirect()->route('vendor.laptops.index');

    }

}
