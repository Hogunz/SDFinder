<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <title>SDFinder</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        
        <title>{{ config('app.name', 'Laravel') }}</title>
        
        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">
        
        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <link rel="shortcut icon" href="img/title-bar-img/title1.png" type="image/x-icon">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" />
        <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tw-elements/dist/css/index.min.css" /> -->
        <link href="http://fonts.cdnfonts.com/css/aquire" rel="stylesheet">

    </head>
   
    <body class="dark:bg-gray-500">

        <div class="flex flex-col h-screen justify-between">
            <header>@include('layouts.guest-navigation')</header>
            <main>
                {{ $slot }}
            </main>
            @include('layouts.guest-footer')
        </div>

    </body>
    <!-- Scripts  STORE-PROFILE CAROUSEL-->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="https://unpkg.com/flowbite@1.5.3/dist/flowbite.js"></script>
    <script>
        // On page load or when changing themes, best to add inline in `head` to avoid FOUC
        if (localStorage.getItem('color-theme') === 'dark' || (!('color-theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
            document.documentElement.classList.add('dark');
        } else {
            document.documentElement.classList.remove('dark')
        }
    </script>
    <!-- SCRIPT -->
    <script>
        var themeToggleDarkIcon = document.getElementById('theme-toggle-dark-icon');
        var themeToggleLightIcon = document.getElementById('theme-toggle-light-icon');

        // Change the icons inside the button based on previous settings
        if (localStorage.getItem('color-theme') === 'dark' || (!('color-theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
            themeToggleLightIcon.classList.remove('hidden');
        } else {
            themeToggleDarkIcon.classList.remove('hidden');
        }

        var themeToggleBtn = document.getElementById('theme-toggle');

        themeToggleBtn.addEventListener('click', function() {

            // toggle icons inside button
            themeToggleDarkIcon.classList.toggle('hidden');
            themeToggleLightIcon.classList.toggle('hidden');

            // if set via local storage previously
            if (localStorage.getItem('color-theme')) {
                if (localStorage.getItem('color-theme') === 'light') {
                    document.documentElement.classList.add('dark');
                    localStorage.setItem('color-theme', 'dark');
                } else {
                    document.documentElement.classList.remove('dark');
                    localStorage.setItem('color-theme', 'light');
                }

            // if NOT set via local storage previously
            } else {
                if (document.documentElement.classList.contains('dark')) {
                    document.documentElement.classList.remove('dark');
                    localStorage.setItem('color-theme', 'light');
                } else {
                    document.documentElement.classList.add('dark');
                    localStorage.setItem('color-theme', 'dark');
                }
            }
            
        });
    </script>
    <script>
        function showFilters() {
            var fSection = document.getElementById("filterSection");
            if (fSection.classList.contains("hidden")) {
                fSection.classList.remove("hidden");
                fSection.classList.add("block");
            } else {
                fSection.classList.add("hidden");
            }
        }

        function applyFilters() {
            document.querySelectorAll("input[type=checkbox]").forEach((el) => (el.checked = false));
        }

        function closeFilterSection() {
            var fSection = document.getElementById("filterSection");
            fSection.classList.add("hidden");
        }

    </script>
    <!-- CAROUSEL -->
    <script>
        let defaultTransform = 0;
        function goNext() {
            defaultTransform = defaultTransform - 398;
            var slider = document.getElementById("slider");
            if (Math.abs(defaultTransform) >= slider.scrollWidth / 1.7) defaultTransform = 0;
            slider.style.transform = "translateX(" + defaultTransform + "px)";
        }
        next.addEventListener("click", goNext);
        function goPrev() {
            var slider = document.getElementById("slider");
            if (Math.abs(defaultTransform) === 0) defaultTransform = 0;
            else defaultTransform = defaultTransform + 398;
            slider.style.transform = "translateX(" + defaultTransform + "px)";
        }
        prev.addEventListener("click", goPrev);
    </script>
    <!-- NAVBAR -->
    <script>

        function dropdownHandler(element) {
            let single = element.getElementsByTagName("ul")[0];
            single.classList.toggle("hidden");
        }
        function MenuHandler(el, val) {
            let MainList = el.parentElement.getElementsByTagName("ul")[0];
            let closeIcon = el.parentElement.getElementsByClassName("close-m-menu")[0];
            let showIcon = el.parentElement.getElementsByClassName("show-m-menu")[0];
            if (val) {
                MainList.classList.remove("hidden");
                el.classList.add("hidden");
                closeIcon.classList.remove("hidden");
            } else {
                showIcon.classList.remove("hidden");
                MainList.classList.add("hidden");
                el.classList.add("hidden");
            }
        }
        let sideBar = document.getElementById("mobile-nav");
        let menu = document.getElementById("menu");
        let cross = document.getElementById("cross");
        sideBar.style.transform = "translateX(-100%)";
        const sidebarHandler = (check) => {
            if (check) {
                sideBar.style.transform = "translateX(0px)";
                menu.classList.add("hidden");
                cross.classList.remove("hidden");
            } else {
                sideBar.style.transform = "translateX(-100%)";
                menu.classList.remove("hidden");
                cross.classList.add("hidden");
            }
        };
        let list = document.getElementById("list");
        let chevrondown = document.getElementById("chevrondown");
        let chevronup = document.getElementById("chevronup");
        const listHandler = (check) => {
            if (check) {
                list.classList.remove("hidden");
                chevrondown.classList.remove("hidden");
                chevronup.classList.add("hidden");
            } else {
                list.classList.add("hidden");
                chevrondown.classList.add("hidden");
                chevronup.classList.remove("hidden");
            }
        };
        let list2 = document.getElementById("list2");
        let chevrondown2 = document.getElementById("chevrondown2");
        let chevronup2 = document.getElementById("chevronup2");
        const listHandler2 = (check) => {
            if (check) {
                list2.classList.remove("hidden");
                chevrondown2.classList.remove("hidden");
                chevronup2.classList.add("hidden");
            } else {
                list2.classList.add("hidden");
                chevrondown2.classList.add("hidden");
                chevronup2.classList.remove("hidden");
            }
        };
    </script>
    <!-- SCRIPT -->
</html>
