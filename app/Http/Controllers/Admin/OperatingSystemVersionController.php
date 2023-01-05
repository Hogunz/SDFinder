<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Admin\OperatingSystem;
use App\Models\Admin\OperatingSystemVersion;

class OperatingSystemVersionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(OperatingSystem $operatingSystem)
    {

        return view('admin.operating_systems.versions.create', compact('operatingSystem'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, OperatingSystem $operatingSystem)
    {
        $validated = $request->validate([
            'name' => 'required',
        ]);

        $operatingSystem->versions()->create($validated);

        return redirect()->route('admin.os.show', $operatingSystem)->with('status', 'Version successfully created');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Admin\OperatingSystemVersion  $operatingSystemVersion
     * @return \Illuminate\Http\Response
     */
    public function show(OperatingSystemVersion $operatingSystemVersion)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Admin\OperatingSystemVersion  $operatingSystemVersion
     * @return \Illuminate\Http\Response
     */
    public function edit(OperatingSystemVersion $operatingSystemVersion)
    {
        return view('admin.operating_systems.versions.edit', compact('operatingSystemVersion'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Admin\OperatingSystemVersion  $operatingSystemVersion
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, OperatingSystemVersion $operatingSystemVersion)
    {
        $operatingSystemVersion ->update([
            'name'=> $request-> name,
        ]);
            return redirect()->route('admin.os.show', $operatingSystemVersion->operatingSystem);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Admin\OperatingSystemVersion  $operatingSystemVersion
     * @return \Illuminate\Http\Response
     */
    public function destroy(OperatingSystemVersion $operatingSystemVersion)
    {
        //
    }
}
