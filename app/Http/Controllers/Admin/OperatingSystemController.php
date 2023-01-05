<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Admin\OperatingSystem;

class OperatingSystemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $operatingSystems = OperatingSystem::all();

        return view('admin.operating_systems.index', compact('operatingSystems'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.operating_systems.create');
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
        ]);

        OperatingSystem::create($validated);

        return redirect()->route('admin.os.index')->with('status', 'Successfully created OS');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Admin\OperatingSystem  $operatingSystem
     * @return \Illuminate\Http\Response
     */
    public function show(OperatingSystem $operatingSystem)
    {
        return view('admin.operating_systems.show', compact('operatingSystem'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Admin\OperatingSystem  $operatingSystem
     * @return \Illuminate\Http\Response
     */
    public function edit(OperatingSystem $operatingSystem)
    {
        return view('admin.operating_systems.edit', compact('operatingSystem'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Admin\OperatingSystem  $operatingSystem
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, OperatingSystem $operatingSystem)
    {
        $operatingSystem->update([
            'name' => $request->name,

    ]);
    return redirect()->route('admin.os.index')->with('status', 'Chipset Successfully Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Admin\OperatingSystem  $operatingSystem
     * @return \Illuminate\Http\Response
     */
    public function destroy(OperatingSystem $operatingSystem)
    {
        //
    }
}
