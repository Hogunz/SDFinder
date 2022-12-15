<?php

namespace App\Http\Controllers;

use App\Models\Admin\Brand;
use Illuminate\Http\Request;
use App\Models\Admin\Chipset;
use App\Models\Admin\OperatingSystem;

class FinderController extends Controller
{
    private $networks = ['2G', '3G', '4G', '5G'];
    private $multiples = ['Single', 'Dual', 'Triple', 'Quad'];
    private $sims = ['Nano', 'Micro', 'Mini'];
    private $types = ['IPS', 'OLED'];
    private $resolutions = [
        'hd' => 'HD',
        'fhd' => 'FHD',
        '2k' => '2K, Quad HD',
        '4k' => '4K, Ultra HD'
    ];
    private $rams = ['1', '2', '3', '4', '6', '8', '10', '12', '16'];
    private $storages = ['1', '2', '4', '8', '16', '32', '64', '128', '256', '512', '1024'];

    public function phoneFinder()
    {
        $brands = Brand::all();
        $operatingSystems = OperatingSystem::with(['versions'])->get();
        $chipsets = Chipset::all();

        $networks = $this->networks;
        $multiples = $this->multiples;
        $sims = $this->sims;
        $types = $this->types;
        $resolutions = $this->resolutions;
        $rams = $this->rams;
        $storages = $this->storages;

        return view('mobile-finder', compact(
            'brands',
            'operatingSystems',
            'chipsets',
            'networks',
            'multiples',
            'sims',
            'types',
            'resolutions',
            'rams',
            'storages',
        ));
    }

    public function viewPhones(Request $request)
    {

    }
}
