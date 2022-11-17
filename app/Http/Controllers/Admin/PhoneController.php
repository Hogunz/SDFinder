<?php

namespace App\Http\Controllers\Admin;

use App\Models\Admin\Brand;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Admin\Chipset;
use App\Models\Admin\OperatingSystem;

class PhoneController extends Controller
{
    public function index()
    {

    }

    public function create()
    {
        $brands = Brand::orderBy('name')->get();
        $operatingSystems = OperatingSystem::with(['versions'])->get();
        $chipsets = Chipset::all();

        return view('admin.phones.create', compact(
            'brands',
            'operatingSystems',
            'chipsets'
        ));
    }

    public function store(Request $request)
    {

    }
}
