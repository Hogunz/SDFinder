<?php

namespace App\Http\Controllers\Admin;

use App\Models\Admin\Brand;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class BrandController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $brands = Brand::withTrashed()->orderBy('name')->get();
        return view('admin.brands.index', compact('brands'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.brands.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required',
            'image' => ['required', 'image'],
        ]);

        $path = $request->file('image')->store('brands', 'public');

        Brand::create(collect($validated)->merge(['image' => $path])->toArray());

        return redirect()->route('admin.brands.index')->with('status', 'Brand Successfully created');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Admin\Brand  $brand
     * @return \Illuminate\Http\Response
     */
    public function show(Brand $brand)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Admin\Brand  $brand
     * @return \Illuminate\Http\Response
     */
    public function edit(Brand $brand)
    {
        return view('admin.brands.edit', compact('brand'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Admin\Brand  $brand
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Brand $brand)
    {

        $request->validate([
            'name' => 'required',
        ]);

        if($request->file('image'))
        {
            if(Storage::exists($brand->image))
                Storage::delete($brand->image);

            $path = $request->file('image')->store('brands', 'public');
            $brand->image = $path;
        }

        $brand->name = $request->name;
        $brand->save();


        return redirect()->route('admin.brands.index')->with('status', 'Brand Successfully updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Admin\Brand  $brand
     * @return \Illuminate\Http\Response
     */
    public function destroy(Brand $brand)
    {
        $brand->delete();
        return redirect()->route('admin.brands.index')->with('status', 'Brand Successfully Updated');
    }
    public function restore($id){
        Brand::withTrashed()
        ->where('id', $id)
        ->restore();
    return redirect()->route('admin.brands.index');
    }
}
