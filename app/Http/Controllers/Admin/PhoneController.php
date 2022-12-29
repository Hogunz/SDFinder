<?php

namespace App\Http\Controllers\Admin;

use Exception;
use App\Models\Admin\Brand;
use App\Models\Admin\Phone;
use Illuminate\Http\Request;
use App\Models\Admin\Chipset;
use App\Http\Controllers\Controller;
use App\Models\Admin\OperatingSystem;
use Illuminate\Support\Facades\Storage;

class PhoneController extends Controller
{
    private $networks = ['2G', '3G', '4G', '5G'];
    private $multiples = ['Single', 'Dual', 'Triple', 'Quad'];
    private $sims = ['Nano', 'Micro', 'Mini'];
    private $types = ['IPS', 'OLED', 'AMOLED','IPS LCD'];
    private $resolutions = [
        'hd' => 'HD',
        'fhd' => 'FHD',
        '2k' => '2K, Quad HD',
        '4k' => '4K, Ultra HD'
    ];

    private $rams = ['1', '2', '3', '4', '6', '8', '10', '12', '16'];
    private $storages = ['1', '2', '4', '8', '16', '32', '64', '128', '256', '512', '1024', '2048'];

    public function index()
    {
        $phones = Phone::all();

        return view("admin.phones.index", compact('phones'));
    }

    public function create()
    {
        $brands = Brand::orderBy('name')->get();
        $operatingSystems = OperatingSystem::with(['versions'])->get();
        $chipsets = Chipset::all();

        $networks = $this->networks;
        $multiples = $this->multiples;
        $sims = $this->sims;
        $types = $this->types;
        $resolutions = $this->resolutions;
        $rams = $this->rams;
        $storages = $this->storages;


        return view('admin.phones.create', compact(
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

    public function store(Request $request)
    {
        
        $request->validate([
            'name' => ['required'],
            'brand_id' => ['required'],
            'img' => ['required', 'image'],
            'galleries' => ['required', 'array'],
            'galleries.*' => ['image'],
            'networks' => ['required', 'array'],
            'length' => ['required'],
            'width' => ['required'],
            'thickness' => ['required'],
            'weight' => ['required'],
            'front_material' => ['nullable'],
            'back_material' => ['nullable'],
            'frame_material' => ['nullable'],
            'sim_count' => ['required'],
            'sims' => ['required', 'array'],
            'display_type' => ['required'],
            'size' => ['required', 'numeric'],
            'display_width' => ['required', 'numeric'],
            'display_height' => ['required', 'numeric'],
            'resolution' => ['required'],
            'operating_system_version_id' => ['required'],
            'chipset_id' => ['required'],
            'card_slot' => ['required'],
            'variants' => ['required'],
            'camera_count' => ['required'],
            'camera_resolutions' => ['required', 'array'],
            'video_quality' => ['required'],
            'selfie_camera_count' => ['required'],
            'selfie_pop_up' => ['nullable'],
            'selfie_camera_resolutions' => ['required', 'array'],
            'loud_speaker' => ['required'],
            'jack' => ['required'],
            'battery_capacity' => ['required'],
            'wired_charging_power' => ['required'],
            'wireless_charging_power' => ['nullable'],
            'removable_battery' => ['required'],
            'description' => ['nullable'],
            'body_description' => ['nullable'],
            'display_description' => ['nullable'],
            'camera_description' => ['nullable'],
            'selfie_cameras_description' => ['nullable'],
            'battery_type' => ['nullable'],
            'battery_description' => ['nullable'],
            'features' => ['nullable'],
            'misc' => ['nullable'],
        ]);


        $path = $request->file('img')->store('phones', 'public');

        foreach($request->file('galleries') as $gallery)
        {
            $galleries_path[] = $gallery->store('phones', 'public');
        }

        Phone::create([
            
            'name' => $request->name,
            'brand_id' => $request->brand_id,
            'img' => $path,
            'galleries' => $galleries_path,
            'networks' => $request->networks,
            'length' => $request->length,
            'width' => $request->width,
            'thickness' => $request->thickness,
            'weight' => $request->weight,
            'front_material' => $request->front_material,
            'back_material' => $request->back_material,
            'frame_material' => $request->frame_material,
            'sim_count' => $request->sim_count,
            'sims' => $request->sims,
            'display_type' => $request->display_type,
            'size' => $request->size,
            'display_width' => $request->display_width,
            'display_height' => $request->display_height,
            'resolution' => $request->resolution,
            'operating_system_version_id' => $request->operating_system_version_id,
            'chipset_id' => $request->chipset_id,
            'card_slot' => $request->card_slot,
            'variants' => $request->variants,
            'camera_count' => $request->camera_count,
            'camera_resolutions' => $request->camera_resolutions,
            'video_quality' => $request->video_quality,
            'selfie_camera_count' => $request->selfie_camera_count,
            'selfie_pop_up' => $request->selfie_pop_up ?? false,
            'selfie_camera_resolutions' => $request->selfie_camera_resolutions,
            'loud_speaker' => $request->loud_speaker ?? false,
            'jack' => $request->jack ?? false,
            'battery_capacity' => $request->battery_capacity,
            'wired_charging_power' => $request->wired_charging_power,
            'wireless_charging_power' => $request->wireless_charging_power,
            'removable_battery' => $request->removable_battery,
            'description'=> $request->description,
            'body_description' => $request->body_description,
            'display_description' => $request->display_description,
            'camera_description' => $request->camera_description,
            'selfie_cameras_description' => $request->selfie_cameras_description,
            'battery_type' => $request->battery_type,
            'battery_description' => $request->battery_description,
            'features' => $request->features,
            'misc' => $request->miscs,

        ]);

        return redirect()->route('admin.phones.index')->with('status', 'Phone successfully added');

    }

    public function show(Phone $phone)
    {

    }

    public function edit(Phone $phone)
    {
        $brands = Brand::orderBy('name')->get();
        $operatingSystems = OperatingSystem::with(['versions'])->get();
        $chipsets = Chipset::all();

        $networks = $this->networks;
        $multiples = $this->multiples;
        $sims = $this->sims;
        $types = $this->types;
        $resolutions = $this->resolutions;
        $rams = $this->rams;
        $storages = $this->storages;

        return view('admin.phones.edit', compact(
            'phone',
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

    public function update(Request $request, Phone $phone)
    {
        $request->validate([
            'name' => ['required'],
            'brand_id' => ['required'],
            'img' => ['nullable', 'image'],
            'galleries' => ['nullable', 'array'],
            'galleries.*' => ['image'],
            'networks' => ['required', 'array'],
            'length' => ['required'],
            'width' => ['required'],
            'thickness' => ['required'],
            'weight' => ['required'],
            'front_material' => ['nullable'],
            'back_material' => ['nullable'],
            'frame_material' => ['nullable'],
            'sim_count' => ['required'],
            'sims' => ['required', 'array'],
            'display_type' => ['required'],
            'size' => ['required', 'numeric'],
            'display_width' => ['required', 'numeric'],
            'display_height' => ['required', 'numeric'],
            'resolution' => ['required'],
            'operating_system_version_id' => ['required'],
            'chipset_id' => ['required'],
            'card_slot' => ['required'],
            'variants' => ['required'],
            'camera_count' => ['required'],
            'camera_resolutions' => ['required', 'array'],
            'video_quality' => ['required'],
            'selfie_camera_count' => ['required'],
            'selfie_pop_up' => ['nullable'],
            'selfie_camera_resolutions' => ['required', 'array'],
            'loud_speaker' => ['required'],
            'jack' => ['required'],
            'battery_capacity' => ['required'],
            'wired_charging_power' => ['required'],
            'wireless_charging_power' => ['nullable'],
            'removable_battery' => ['required'],
            'description' => ['nullable'],
            'body_description' => ['nullable'],
            'display_description' => ['nullable'],
            'camera_description' => ['nullable'],
            'selfie_cameras_description' => ['nullable'],
            'battery_type' => ['nullable'],
            'battery_description' => ['nullable'],
            'features' => ['nullable'],
            'misc' => ['nullable'],
        ]);

        if($request->file('img')) {
            $path = $request->file('img')->store('phones', 'public');

            if(Storage::exists($phone->img)) {
                Storage::delete($phone->img);
            }

            $phone->update([
                'img' => $path,
            ]);
        }

        if($request->file('galleries')) {

            foreach($phone->galleries as $g) {
                if(Storage::exists($g))
                    Storage::delete($g);
            }
            foreach($request->file('galleries') as $gallery) {
                $galleries_path[] = $gallery->store('phones', 'public');
            }

            $phone->update([
                'galleries' => $galleries_path,
            ]);
        }

        $phone->update([
            'name' => $request->name,
            'brand_id' => $request->brand_id,
            'networks' => $request->networks,
            'length' => $request->length,
            'width' => $request->width,
            'thickness' => $request->thickness,
            'weight' => $request->weight,
            'front_material' => $request->front_material,
            'back_material' => $request->back_material,
            'frame_material' => $request->frame_material,
            'sim_count' => $request->sim_count,
            'sims' => $request->sims,
            'display_type' => $request->display_type,
            'size' => $request->size,
            'display_width' => $request->display_width,
            'display_height' => $request->display_height,
            'resolution' => $request->resolution,
            'operating_system_version_id' => $request->operating_system_version_id,
            'chipset_id' => $request->chipset_id,
            'card_slot' => $request->card_slot,
            'variants' => $request->variants,
            'camera_count' => $request->camera_count,
            'camera_resolutions' => $request->camera_resolutions,
            'video_quality' => $request->video_quality,
            'selfie_camera_count' => $request->selfie_camera_count,
            'selfie_pop_up' => $request->selfie_pop_up ?? false,
            'selfie_camera_resolutions' => $request->selfie_camera_resolutions,
            'loud_speaker' => $request->loud_speaker ?? false,
            'jack' => $request->jack ?? false,
            'battery_capacity' => $request->battery_capacity,
            'wired_charging_power' => $request->wired_charging_power,
            'wireless_charging_power' => $request->wireless_charging_power,
            'removable_battery' => $request->removable_battery,
            'description' => $request->description,
            'body_description' => $request->body_description,
            'display_description' => $request->display_description,
            'camera_description' => $request->camera_description,
            'selfie_cameras_description' => $request->selfie_cameras_description,
            'battery_type' => $request->battery_type,
            'battery_description' => $request->battery_description,
            'features' => $request->features,
            'misc' => $request->miscs,

        ]);


        return redirect()->route('admin.phones.index')->with('status', 'Successfully edit phone');
    }

    public function destroy(Phone $phone)
    {
        $phone->delete();

        return redirect()->route('admin.phones.index')->with('status', 'Phone successfully deleted');
    }
}
