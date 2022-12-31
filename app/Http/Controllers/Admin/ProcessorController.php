<?php

namespace App\Http\Controllers\Admin;

use App\Models\Admin\Processor;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProcessorController extends Controller
{

    private $brands = ['Amd', 'Intel', 'NVidia'];

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $processors = Processor::all();

        return view('admin.processors.index', compact('processors'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $brands = $this->brands;
        return view('admin.processors.create', compact('brands'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Processor::create([
            'brand' => $request->brand,
            'name' => $request->name,
            'no_of_cores' => $request->no_of_cores,
            'no_of_threads' => $request->no_of_threads,
            'base_clock' => $request->base_clock,
            'max_boost_clock' => $request->max_boost_clock,
        ]);

        return redirect()->route('admin.processors.index')->with('status', 'Processor successfully added');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Processor  $processor
     * @return \Illuminate\Http\Response
     */
    public function show(Processor $processor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Processor  $processor
     * @return \Illuminate\Http\Response
     */
    public function edit(Processor $processor)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Processor  $processor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Processor $processor)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Processor  $processor
     * @return \Illuminate\Http\Response
     */
    public function destroy(Processor $processor)
    {
        //
    }
}