<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
</head>
<body class="font-sans antialiased">
    <div class="min-h-screen bg-gray-100">

        <!-- Page Content -->
        <main class="max-w-7xl p-12 mx-auto">
            <form action="{{ route('admin.chipsets.store') }}" method="post">
                @csrf

                <div class="mt-1">
                    <x-label for="name" value="Name"></x-label>
                    <x-input type="text" name="name" id="name" class="w-full block"></x-input>
                </div>

                <div class="mt-1">
                    <x-label for="no_of_cores" value="Number of Cores"></x-label>
                    <x-input type="number" name="no_of_cores" id="no_of_cores" class="w-full block"></x-input>
                </div>

                <div class="mt-1">
                    <x-label for="cpu" value="CPU"></x-label>
                    <x-input type="text" name="cpu" id="cpu" class="w-full block"></x-input>
                </div>

                <div class="mt-1">
                    <x-label for="gpu" value="GPU"></x-label>
                    <x-input type="text" name="gpu" id="gpu" class="w-full block"></x-input>
                </div>

                <div class="mt-1">
                    <x-button>Submit</x-button>
                </div>
            </form>
        </main>
    </div>
</body>
