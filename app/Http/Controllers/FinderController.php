<?php

namespace App\Http\Controllers;

use App\Models\Admin\Brand;
use App\Models\Admin\Phone;
use Illuminate\Http\Request;
use App\Models\Admin\Chipset;
use App\Models\Vendor\PhoneUser;
use App\Models\Admin\OperatingSystem;

class FinderController extends Controller
{
    private $networks = ['2G', '3G', '4G', '5G'];
    private $multiples = [1 => 'Single', 2 => 'Dual', 3 => 'Triple', 4 => 'Quad'];
    private $sims = ['Nano', 'Micro', 'Mini'];
    private $types = ['IPS', 'OLED', 'AMOLED','IPS LCD'];
    private $resolutions = [
        'hd' => 'HD',
        'fhd' => 'FHD',
        '2k' => '2K, Quad HD',
        '4k' => '4K, Ultra HD'
    ];
    private $videos = ['720p', '1080p', '4K', '8K'];
    private $rams = ['1', '2', '3', '4', '6', '8', '10', '12', '16'];
    private $storages = ['1', '2', '4', '8', '16', '32', '64', '128', '256', '512', '1024', '2048'];

    public function phoneFinder()
    {
        $brands = Brand::all();
        $operatingSystems = OperatingSystem::with(['versions'])->get();
        $chipsets = Chipset::all();
        $phones = Phone::all();

        $cores = $chipsets->pluck('no_of_cores')->unique()->sort();
        $cameraResolutions = $phones->pluck('camera_resolutions')->flatten()->unique()->sort();
        $selfieResolutions = $phones->pluck('selfie_camera_resolutions')->flatten()->unique()->sort();
        $phoneUsers = Phone::with(['users'])->get()->pluck('users')->flatten()->pluck('pivot.price');

        $min = $phoneUsers->min();
        $max = $phoneUsers->max();

        $networks = $this->networks;
        $multiples = $this->multiples;
        $sims = $this->sims;
        $types = $this->types;
        $resolutions = $this->resolutions;
        $rams = $this->rams;
        $storages = $this->storages;
        $videos = $this->videos;

        return view('filter', compact(
            'brands',
            'min',
            'max',
            'operatingSystems',
            'chipsets',
            'cores',
            'networks',
            'multiples',
            'sims',
            'types',
            'resolutions',
            'rams',
            'storages',
            'cameraResolutions',
            'videos',
            'selfieResolutions',
        ));
    }

    public function phoneFinderOld()
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
        // dd($request->input());
        $phones = Phone::with(['users', 'operatingSystemVersion']);

        //Brands
        if($request->brands) {
            $phones->whereIn('brand_id', $request->brands);
        }

        //Price
        if($request->price){
            if($request->price['min'] || $request->price['max'] ) {
                $phones->whereHas('users', function ($query) use ($request) {
                    if($request->price['min'] && $request->price['max']) {
                        $query->whereBetween('price', $request->price);
                    }else if($request->price['min']) {
                        $query->where('price', '>=', $request->price['min']);
                    }else if($request->price['max']) {
                        $query->where('price', '<=', $request->price['max']);
                    }else {
                        return false;
                    }
                });
            }
        }

        //Networks
        if($request->networks) {
            $phones->whereJsonContains('networks', $request->networks);
        }
        //Sims
        if($request->sims) {
            $phones->whereJsonContains('sims', $request->sims);
        }
        //Multiples
        if($request->multiples) {
            $phones->whereIn('sim_count', $request->multiples);
        }

        //OS
        if($request->os) {
            $phones->whereHas('operatingSystemVersion', function ($query) use ($request) {
                $query->whereIn('operating_system_id', $request->os);
            });
        }
        //Version
        if($request->versions) {
            $phones->whereIn('operating_system_version_id', $request->versions);
        }
        //Chipset
        if($request->chipsets) {
            $phones->whereIn('chipset_id', $request->chipsets);
        }
        //Cores
        if($request->cores) {
            $phones->whereHas('chipsets', function ($query) use ($request) {
                $query->whereIn('no_of_cores', $request->os);
            });
        }
        //Memory
        if($request->rams) {
            $rams = collect($request->rams)->map(function ($ram) {
                return ["ram" => $ram];
            })->toArray();

            $phones->whereJsonContains('variants', $rams);
        }

        //Card Slot
        if(!is_null($request->card_slot)) {
            $phones->where('card_slot', $request->card_slot);
        }

        //Storage
        if($request->storages) {
            $storages = collect($request->storages)->map(function ($storage) {
                return ["storage" => $storage];
            })->toArray();
            $phones->whereJsonContains('variants', $storages);
        }

        //Type
        if($request->types) {
            $phones->whereIn('display_type', $request->types);
        }

        //Resolution
        if($request->resolutions) {
            $phones->whereIn('resolution', $request->resolutions);
        }
        //Main Cam
        if($request->cameraResolutions) {
            $phones->whereJsonContains('camera_resolutions', $request->cameraResolutions);
        }
        //Video
        if($request->videos) {
            foreach($request->videos as $video) {
                $phones->orWhere('video_quality', 'like', "%$video%");
            }
        }
        //Camera Count
        if($request->cameraCounts) {
            $phones->whereIn('camera_count', $request->cameraCounts);
        }
        //Selfie Cam
        if($request->selfieResolutions) {
            $phones->whereJsonContains('selfie_camera_resolutions', $request->selfieResolutions);
        }
        //Dual Cam
        if(!is_null($request->dualCamera)) {
            $phones->where('selfie_camera_count', $request->dualCamera);
        }

        if($request->search) {
            $phones->where('name', 'like', "%{$request->search}%");
        }

        $phones = $phones->get();
        $brands = Brand::all();

        return view('view-phones', compact('phones', 'brands'));
    }

    public function viewPhone(Phone $phone)
    {
        return view('phone-profile', compact('phone'));
    }
}
