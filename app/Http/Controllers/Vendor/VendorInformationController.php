<?php

namespace App\Http\Controllers\Vendor;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Vendor\VendorInformation;
use Illuminate\Support\Facades\Auth;

class VendorInformationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('vendors.profile');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('vendors.create-profile');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $id = Auth::id();
        $path = $request->file('avatar')->store("store/$id", 'public');

        foreach($request->file('galleries') as $gallery)
        {
            $galleries_path[] = $gallery->store("store/$id", 'public');
        }

        Auth::user()->vendorInformation()->create([
            'street' => $request->street,
            'city' => $request->city,
            'province' => $request->province,
            'zip_code' => $request->zip_code,
            'contact' => $request->contact,
            'avatar' => $path,
            'galleries' => $galleries_path,
            'type' => $request->type,
            'main_products' => $request->products,
            'website' => $request->website,
            'information' => $request->information,
            'embed_google_map' => $request->embed_google_map,
        ]);

        return redirect()->route('vendor.profile.index');
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\VendorInformation  $vendorInformation
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
        return view('vendors.edit-profile');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\VendorInformation  $vendorInformation
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $id = Auth::id();
        if($request->file('avatar')) {

            $path = $request->file('avatar')->store("store/$id", 'public');
            Auth::user()->vendorInformation()->update([
                'avatar' => $path,
            ]);
        }

        if($request->file('galleries')) {

            foreach($request->file('galleries') as $gallery)
            {
                $galleries_path[] = $gallery->store("store/$id", 'public');
            }
            Auth::user()->vendorInformation()->update([
                'galleries' => $galleries_path,
            ]);
        }

        Auth::user()->vendorInformation()->update([
            'street' => $request->street,
            'city' => $request->city,
            'province' => $request->province,
            'zip_code' => $request->zip_code,
            'contact' => $request->contact,
            'type' => $request->type,
            'main_products' => $request->products,
            'website' => $request->website,
            'information' => $request->information,
            'embed_google_map' => $request->embed_google_map,
        ]);

        return redirect()->route('vendor.profile.index');
    }

}
