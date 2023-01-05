<?php

namespace App\Http\Controllers\Admin;

use App\Models\Admin\GraphicsCard;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class GraphicsCardController extends Controller
{

    private $brands = ['Amd', 'Intel', 'NVidia','Apple'];

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $graphicsCards = GraphicsCard::all();

        return view('admin.graphics_cards.index', compact('graphicsCards'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $brands = $this->brands;
        return view('admin.graphics_cards.create', compact('brands'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        GraphicsCard::create([
            'brand' => $request->brand,
            'name' => $request->name,

        ]);

        return redirect()->route('admin.graphics_cards.index')->with('status', 'Grahpics Card successfully added');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\GraphicsCard  $graphicsCard
     * @return \Illuminate\Http\Response
     */
    public function show(GraphicsCard $graphicsCard)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\GraphicsCard  $graphicsCard
     * @return \Illuminate\Http\Response
     */
    public function edit(GraphicsCard $graphicsCard)
    {
        return view('admin.graphics_cards.edit', compact('graphicsCard'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\GraphicsCard  $graphicsCard
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, GraphicsCard $graphicsCard)
    {
        $graphicsCard ->update([
            'brand' =>$request-> brand,
            'name' =>$request-> name,
        ]);
        return redirect()->route('admin.graphics_cards.index')->with('status', 'Graphics Card Successfully Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\GraphicsCard  $graphicsCard
     * @return \Illuminate\Http\Response
     */
    public function destroy(GraphicsCard $graphicsCard)
    {
        //
    }
}
