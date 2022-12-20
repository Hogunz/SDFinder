<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\Admin\Chipset;
use App\Http\Controllers\Controller;

class ChipsetController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $chipsets = Chipset::all();

        return view('admin.chipsets.index', compact('chipsets'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.chipsets.create');
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
            'no_of_cores' => 'required',
            'cpu' => 'required',
            'gpu' => 'required'
        ]);

        Chipset::create($validated);

        return redirect()->route('admin.chipsets.index')->with('status', 'Chipset Successfully Created');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Admin\Chipset  $chipset
     * @return \Illuminate\Http\Response
     */
    public function show(Chipset $chipset)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Admin\Chipset  $chipset
     * @return \Illuminate\Http\Response
     */
    public function edit(Chipset $chipset)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Admin\Chipset  $chipset
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Chipset $chipset)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Admin\Chipset  $chipset
     * @return \Illuminate\Http\Response
     */
    public function destroy(Chipset $chipset)
    {
        //
    }
}
