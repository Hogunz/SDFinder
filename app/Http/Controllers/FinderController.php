<?php

namespace App\Http\Controllers;

use App\Models\Admin\Brand;
use App\Models\Admin\Phone;
use App\Models\Admin\Laptop;
use Illuminate\Http\Request;
use App\Models\Admin\Chipset;
use App\Models\Admin\GraphicsCard;
use App\Models\Vendor\PhoneUser;
use App\Models\Admin\OperatingSystem;
use App\Models\Admin\Processor;

class FinderController extends Controller
{
    private $networks = ['2G', '3G', '4G', '5G'];
    private $multiples = [1 => 'Single', 2 => 'Dual', 3 => 'Triple', 4 => 'Quad'];
    private $sims = ['Nano', 'Micro', 'Mini'];
    private $types = ['IPS', 'OLED', 'AMOLED','IPS LCD','Retina','None'];
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
        $cpus = Processor::all();
        $gpus = GraphicsCard::all();
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
            'cpus',
            'gpus',
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
    public function viewLaptops(Request $request )
    {
        $laptops = Laptop::all();
        $brands = Brand::all();

        if($request->brands) {
            $laptops->whereIn('brand_id', $request->brands);

        }
        return view('view-laptops', compact('laptops','brands'));

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

    public function viewMobiles(Request $request)
    {

        $brands = Brand::all();
        $mobiles = [];

        $phones = Phone::query();
        $laptops = Laptop::query();

        //Brands
        if($request->brands) {
            $phones->whereIn('brand_id', $request->brands);
            $laptops->whereIn('brand_id', $request->brands);
        }

        if($request->search) {
            $phones->where('name', 'like', "%{$request->search}%");
            $laptops->where('name', 'like', "%{$request->search}%");
        }


        if($request->phone)
        {
            $laptops = [];

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
        }

        if($request->laptop)
        {
            $phones = [];
            //Price
            if($request->price){
                if($request->price['min'] || $request->price['max'] ) {
                    $laptops->whereHas('users', function ($query) use ($request) {
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

            //CPU
            if($request->cpus) {
                $laptops->whereIn('processor_id', $request->cpus);
            }

            //GPU
            if($request->gpus) {
                $laptops->whereIn('graphics_card_id', $request->gpus);
            }

            //Memory
            if($request->rams) {
                $laptops->whereIn('ram', $request->rams);
            }

            //Storage
            if($request->storages) {
                $laptops->whereIn('storage', $request->storages);
            }

            //Type
            if($request->types) {
                $laptops->whereIn('display_type', $request->types);
            }

            //Resolution
            if($request->resolutions) {
                $laptops->whereIn('display_resolution', $request->resolutions);
            }
        }

        if($phones && $phones->exists()) {
            $phones = $phones->get()->map(function ($phone) {
                $array = [];
                $array['id'] = $phone->id;
                $array['name'] = strtoupper($phone->name);
                $array['url'] = "/mobile-finder/{$phone->id}/view";
                $array['img'] = $phone->img;
                $array['type'] = 'phone';

                return collect($array);
            });
        }

        if($laptops && $laptops->exists()) {
            $laptops = $laptops->get()->map(function ($laptop) {
                $array = [];
                $array['id'] = $laptop->id;
                $array['name'] = strtoupper($laptop->name);
                $array['url'] = "/laptop-finder/{$laptop->id}/view";
                $array['img'] = $laptop->img;
                $array['type'] = 'laptop';

                return collect($array);
            });
        }

        if(($phones && $phones->count() > 0) || ($laptops && $laptops->count() == 0)) $mobiles = $phones;
        if(($phones && $phones->count() == 0) || ($laptops && $laptops->count() > 0)) $mobiles = $laptops;
        if(($phones && $phones->count() > 0) && ($laptops && $laptops->count() > 0)) $mobiles = $phones->merge($laptops);

        $laptops = $mobiles->count() > 0 ? $mobiles->sortBy([ ['name', 'asc'] ])->toArray() : [];


        return view('view-mobiles', compact('brands', 'mobiles'));
    }

    public function viewPhone(Phone $phone)
    {
        return view('phone-profile', compact('phone'));
    }

    public function viewLaptop(Laptop $laptop)
    {
        return view('laptop-profile', compact('laptop'));
    }



}
