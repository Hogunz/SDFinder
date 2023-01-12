<?php

namespace App\Http\Controllers\Vendor;

use App\Models\Admin\Brand;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class PhoneController extends Controller
{
    public function index()
    {
        $phones = Auth::user()->phones;

        return view('vendors.phones.index', compact('phones'));
    }

    public function create()
    {
        $brands = Brand::with([
            'phones',
        ])->orderBy('name')->get();
        return view('vendors.phones.create', compact('brands'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'brand_id' => ['required'],
            'phone_id' => ['required'],
            'variant' => ['required', 'json'],
            'price' => ['required', 'numeric', 'min:0'],
        ]);

        // dd(json_decode($request->variant, true));
        $variant = json_decode($request->variant, true);
        // $variant = $request->variant;

        Auth::user()->phones()->attach($request->phone_id, ['variant' => $variant, 'price' => $request->price]);

        return redirect()->route('vendor.phones.index')->with('status', 'Successfully added phone');
    }
}
