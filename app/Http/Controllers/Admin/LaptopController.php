<?php

namespace App\Http\Controllers\Admin;

use App\Models\Review;
use App\Models\Admin\Brand;
use App\Models\Admin\Laptop;
use Illuminate\Http\Request;
use App\Models\Admin\Processor;
use App\Models\Admin\GraphicsCard;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class LaptopController extends Controller
{
    private $types = ['IPS', 'OLED', 'AMOLED','IPS LCD','None'];
    private $resolutions = [
        'hd' => 'HD',
        'fhd' => 'FHD',
        '2k' => '2K, Quad HD',
        '4k' => '4K, Ultra HD'
    ];
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $laptops = Laptop::withTrashed()->get();

        return view('admin.laptops.index', compact('laptops'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $brands = Brand::all();
        $processors = Processor::all();
        $graphicsCards = GraphicsCard::all();

        $types = $this->types;
        $resolutions = $this->resolutions;

        return view('admin.laptops.create', compact('brands', 'processors', 'graphicsCards', 'types', 'resolutions'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        // dd($request->all());
        $request->validate([
            'brand_id' => ['required'],
            'name' => ['required'],
            'image' => ['required', 'image'],
            'galleries' => ['required', 'array'],
            'galleries.*' => ['image'],
            'processor_id' => ['required'],
            'graphics_id' => ['nullable'],
            'ram' => ['required'],
            'storage' => ['required'],
            'storage_description' => ['nullable'],
            'screen_size' => ['required'],
            'display_width' => ['required'],
            'display_height' => ['required'],
            'display_type' => ['required'],
            'display_resolution' => ['required'],
            'display_description' => ['nullable'],
            'camera' => ['nullable'],
            'camera_description' => ['nullable'],
            'battery_capacity' => ['required'],
            'battery_description' => ['nullable'],
            'features' => ['nullable'],
            'description' => ['nullable'],
        ]);


        $path = $request->file('image')->store('laptops', 'public');

        foreach($request->file('galleries') as $gallery)
        {
            $galleries_path[] = $gallery->store('laptops', 'public');
        }

        Laptop::create([
            'brand_id' => $request->brand_id,
            'name' => $request->name,
            'img' => $path,
            'galleries' => $galleries_path,
            'processor_id' => $request->processor_id,
            'graphics_card_id' => $request->graphics_card_id,
            'ram' => $request->ram,
            'storage' => $request->storage,
            'storage_description' => $request->storage_description,
            'screen_size' => $request->screen_size,
            'display_width' => $request->display_width,
            'display_height' => $request->display_height,
            'display_type' => $request->display_type,
            'display_resolution' => $request->display_resolution,
            'display_description' => $request->display_description,
            'camera' => $request->camera ?? null,
            'camera_description' => $request->camera_description,
            'battery_capacity' => $request->battery_capacity,
            'battery_description' => $request->battery_description,
            'features' => $request->features,
            'description' => $request->description,
        ]);


        return redirect()->route('admin.laptops.index')->with('status', 'Laptop Successfully added');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Admin\Laptop  $laptop
     * @return \Illuminate\Http\Response
     */
    public function show(Laptop $laptop)
    {
        return view('admin.laptops.show', compact('laptop'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Admin\Laptop  $laptop
     * @return \Illuminate\Http\Response
     */
    public function edit(Laptop $laptop)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Admin\Laptop  $laptop
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Laptop $laptop)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Admin\Laptop  $laptop
     * @return \Illuminate\Http\Response
     */
    public function destroy(Laptop $laptop)
    {
        $laptop->review()->delete();
        $laptop->delete();

        return back()->with('status', 'Laptop successfully deleted');
    }

    public function restore($laptop)
    {
        Laptop::withTrashed()->find($laptop)->restore();

        Review::withTrashed()->where('reviewable_id', $laptop)->where('reviewable_type', 'App\Models\Admin\Laptop')->restore();

        return redirect()->route('admin.phones.index')->with('status', 'Phone successfully deleted');
    }

    public function review(Request $request, Laptop $laptop)
    {
        $laptop->review()->updateOrCreate(
            ['reviewable_id' => $laptop->id, 'reviewable_type' => 'App\Models\Admin\Laptop'],
        [
            'review' => $request->review,
            'user_id' => Auth::id(),
        ]);

        return back()->with('status', 'Laptop successfully reviewed');
    }
}
