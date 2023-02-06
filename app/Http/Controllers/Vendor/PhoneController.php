<?php

namespace App\Http\Controllers\Vendor;

use App\Models\Admin\Brand;
use App\Models\Admin\Phone;
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
            'price' => ['required', 'numeric', 'min:0', 'max:305254'],
        ]);

        // dd(json_decode($request->variant, true));
        $variant = json_decode($request->variant, true);
        // $variant = $request->variant;

        Auth::user()->phones()->attach($request->phone_id, ['variant' => $variant, 'price' => $request->price, 'device_description' => $request->device_description]);

        return redirect()->route('vendor.phones.index')->with('status', 'Successfully added phone');
    }

    public function edit(Request $request, Phone $phone)
    {
        $variant = $request->variant;
        return view('vendors.phones.edit', compact('phone', 'variant'));
    }
    public function update(Request $request, Phone $phone)
    {
        $request->validate([
            'price' => ['required', 'numeric', 'min:0', 'max:305254'],
        ]);
        $variant = $request->variant;
        $pivotPhone = Auth::user()->phones()->wherePivot('phone_id', $phone->id)->wherePivot('variant->ram', $variant['ram'])->wherePivot('variant->storage', $variant['storage'])->first();
        $pivotPhone->pivot->where('variant->ram', $variant['ram'])->where('variant->storage', $variant['storage'])->update([
            'price' => $request->price,
        ]);
        return redirect()->route('vendor.phones.index')->with('status', 'Successfully phone updated');
    }
    public function destroy(Request $request, Phone $phone)
    {
        $variant = $request->variant;
        $pivotPhone = Auth::user()->phones()->wherePivot('phone_id', $phone->id)->wherePivot('variant->ram', $variant['ram'])->wherePivot('variant->storage', $variant['storage'])->first();
        $pivotPhone->pivot->where('variant->ram', $variant['ram'])->where('variant->storage', $variant['storage'])->delete();
        return redirect()->route('vendor.phones.index')->with('status', 'Successfully deleted');
    }
}
