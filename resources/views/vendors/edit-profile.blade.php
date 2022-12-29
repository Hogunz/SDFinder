<x-vendor-layout>
    <div class="mt-2">
        <h1 class="font-bold text-lg">Create Profile</h1>

        <form action="{{ route('vendor.profile.update') }}" method="post" enctype="multipart/form-data">
            @csrf
            @method('put')
            <div class="mt-2">
                <x-label for="contact" value="Avatar"></x-label>
                <x-input type="file" name="avatar" class="w-full block mt-2"></x-input>
            </div>

            <div class="mt-2">
                <x-label for="contact" value="Type of Business"></x-label>
                <x-input type="text" name="type" class="w-full block mt-2 dark:text-black" placeholder="Manufacturer, Distributor, Wholesaler" value="{{ auth()->user()->vendorInformation->type }}"></x-input>
            </div>

            <div class="mt-2">
                <x-label for="contact" value="Products"></x-label>
                <x-input type="text" name="products" class="w-full block mt-2 dark:text-black" placeholder="Computer Parts, Cellphone, Tablets, Laptops" value="{{ auth()->user()->vendorInformation->main_products }}"></x-input>
            </div>


            <div class="mt-2">
                <x-label for="contact" value="Store Information"></x-label>
                <textarea type="text" name="information" class="w-full block mt-2 dark:text-black" rows="5">{{ auth()->user()->vendorInformation->information }}</textarea>
            </div>

            <div class="mt-2">
                <x-label for="contact" value="Galleries"></x-label>
                <x-input type="file" name="galleries[]" multiple class="w-full block mt-2"></x-input>
            </div>

            <div class="mt-2">
                <x-label for="address" value="Address"></x-label>
                <x-input type="text" name="street" class="w-full block mt-2 dark:text-black" placeholder="House No./Building/Street" value="{{ auth()->user()->vendorInformation->street }}"></x-input>
                <x-input type="text" name="city" class="w-full block mt-2 dark:text-black" placeholder="City/Town" value="{{ auth()->user()->vendorInformation->city }}"></x-input>
                <x-input type="text" name="province" class="w-full block mt-2 dark:text-black" placeholder="Province" value="{{ auth()->user()->vendorInformation->province }}"></x-input>
                <x-input type="text" name="zip_code" class="w-full block mt-2 dark:text-black" placeholder="Zip Code" value="{{ auth()->user()->vendorInformation->zip_code }}"></x-input>
            </div>

            <div class="mt-2">
                <x-label for="contact" value="Embed Google Map"></x-label>
                <x-input type="text" name="embed_google_map" class="w-full block mt-2 dark:text-black" value="{{ auth()->user()->vendorInformation->embed_google_map }}" placeholder="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3834.271183019917!2d120.33991921536096!3d16.051411444177468!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x339167fd132ad42b%3A0xa16f95fe87a2cdbc!2sOCTAGON!5e0!3m2!1sen!2sph!4v1667443542989!5m2!1sen!2sph"></x-input>
            </div>

            <div class="mt-2">
                <x-label for="contact" value="Website"></x-label>
                <x-input type="text" name="website" class="w-full block mt-2 dark:text-black" placeholder="http://www.pccartelcomputers.com/" value="{{ auth()->user()->vendorInformation->website }}"></x-input>
            </div>

            <div class="mt-2">
                <x-label for="contact" value="Contact Number"></x-label>
                <x-input type="text" name="contact" class="w-full block mt-2 dark:text-black" placeholder="Contact Number" value="{{ auth()->user()->vendorInformation->contact }}"></x-input>
            </div>

            <div class="mt-2">
                <x-button>Save</x-button>
            </div>
        </form>
    </div>
</x-vendor-layout>
