<x-vendor-layout>
    <div class="mt-2">

        @if(!auth()->user()->vendorInformation)
            <span>You do not have profile yet. You can't add phone yet.
                <a href="{{ route('vendor.profile.create') }}" class="hover:underline text-indigo-500 hover:text-indigo-300">
                    Click here to start
                </a>
            </span>

        @else
            <div class="float-right">
                <a href="{{ route('vendor.profile.edit') }}">
                    <x-button>Edit</x-button>
                </a>
            </div>
            <div class="flex space-x-2">
                <div>
                    <img src="{{ asset('storage/'.auth()->user()->vendorInformation->avatar) }}" alt="Avatar"  class="shadow sm:w-24 sm:h-24 w-24 h-24  bg-gray-100">
                </div>
                <div>
                    <h2 class="font-bold uppercase">{{ auth()->user()->name }}</h2>
                    <div class="text-sm">{{ auth()->user()->vendorInformation->type }}</div>
                    <div class="text-sm">{{ auth()->user()->vendorInformation->main_products }}</div>
                    <div class="text-sm">{{ auth()->user()->vendorInformation->address }}</div>
                    <div class="text-sm">{{ auth()->user()->vendorInformation->contact }}</div>
                    <div class="text-sm">{{ auth()->user()->vendorInformation->website }}</div>
                </div>
            </div>
            <hr>
            <p class="indent-3">
                {!! auth()->user()->vendorInformation->information !!}
            </p>
            <h1 class="mt-10 uppercase font-bold text-center">Galleries</h1>
            <div class="grid lg:grid-cols-4 sm:grid-cols-2 grid-cols-1 lg:grap-8 md:gap-6 gap-4">
                @foreach (auth()->user()->vendorInformation->galleries as $gallery)
                    <img src="{{ asset('storage/'.$gallery) }}" alt="A picture of a sitting dog" class="lg:block hidden w-full h-52 object-fit" />
                    <img src="{{ asset('storage/'.$gallery) }}" alt="A picture of a sitting dog" class="lg:hidden block w-full h-52 object-fit" />
                @endforeach
            </div>

            <iframe class="w-full mt-2 h-80" src="{{ auth()->user()->vendorInformation->embed_google_map }}" height="600" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>


        @endif


    </div>
</x-vendor-layout>
