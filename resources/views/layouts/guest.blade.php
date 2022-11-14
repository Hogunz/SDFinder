<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <title>SDFinder</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        
       
        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">
        
        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <link rel="shortcut icon" href="img/title-bar-img/title1.png" type="image/x-icon">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" />
        <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tw-elements/dist/css/index.min.css" /> -->
        <!-- LOGO FONT -->
        <link href="https://fonts.cdnfonts.com/css/bronson-2" rel="stylesheet">
           <style>
/* This example part of kwd-dashboard see https://kamona-wd.github.io/kwd-dashboard/ */
/* So here we will write some classes to simulate dark mode and some of tailwind css config in our project */
:root {
  --light: #edf2f9;
  --dark: #152e4d;
  --darker: #12263f;
}

.dark .dark\:text-light {
  color: var(--light);
}

.dark .dark\:bg-dark {
  background-color: var(--dark);
}

.dark .dark\:bg-darker {
  background-color: var(--darker);
}

.dark .dark\:text-gray-300 {
  color: #d1d5db;
}

.dark .dark\:text-indigo-500 {
  color: #6366f1;
}

.dark .dark\:text-indigo-100 {
  color: #e0e7ff;
}

.dark .dark\:hover\:text-light:hover {
    color: var(--light);
}

.dark .dark\:border-indigo-800 {
  border-color: #3730a3;
}

.dark .dark\:border-indigo-700 {
  border-color: #4338ca;
}

.dark .dark\:bg-indigo-600 {
  background-color: #4f46e5;
}

.dark .dark\:hover\:bg-indigo-600:hover {
  background-color: #4f46e5;
}

.dark .dark\:border-indigo-500 {
  border-color: #6366f1;
}

.hover\:overflow-y-auto:hover {
  overflow-y: auto;
}

</style>
        
    </head>
   
    <body class="dark:bg-gray-500">

        <div class="flex flex-col h-screen justify-between font-sans bg-scroll  scroll-smooth">
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
<!-- login form -->
<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.js"></script>

<!-- STORE OWNSER -->
<!-- store-dashboard -->

<script src="https://cdn.jsdelivr.net/gh/alpine-collective/alpine-magic-helpers@0.6.x/dist/component.min.js"></script>
<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.8.0/dist/alpine.min.js" defer></script>

<script>

    const setup = () => {
    const getTheme = () => {
        if (window.localStorage.getItem('dark')) {
        return JSON.parse(window.localStorage.getItem('dark'))
        }
        return !!window.matchMedia && window.matchMedia('(prefers-color-scheme: dark)').matches
    }

    const setTheme = (value) => {
        window.localStorage.setItem('dark', value)
    }

    return {
        loading: true,
        isDark: getTheme(),
        toggleTheme() {
        this.isDark = !this.isDark
        setTheme(this.isDark)
        },
        setLightTheme() {
        this.isDark = false
        setTheme(this.isDark)
        },
        setDarkTheme() {
        this.isDark = true
        setTheme(this.isDark)
        },
        watchScreen() {
        if (window.innerWidth <= 1024) {
            this.isSidebarOpen = false
        } else if (window.innerWidth >= 1024) {
            this.isSidebarOpen = true
        }
        },
        isSidebarOpen: window.innerWidth >= 1024 ? true : false,
        toggleSidbarMenu() {
        this.isSidebarOpen = !this.isSidebarOpen
        },
        isNotificationsPanelOpen: false,
        openNotificationsPanel() {
        this.isNotificationsPanelOpen = true
        this.$nextTick(() => {
            this.$refs.notificationsPanel.focus()
        })
        },
        isSettingsPanelOpen: false,
        openSettingsPanel() {
        this.isSettingsPanelOpen = true
        this.$nextTick(() => {
            this.$refs.settingsPanel.focus()
        })
        },
        isSearchPanelOpen: false,
        openSearchPanel() {
        this.isSearchPanelOpen = true
        this.$nextTick(() => {
            this.$refs.searchInput.focus()
        })
        },
    }
    }
</script>

<!-- Required chart.js -->
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<!-- Chart bar -->
<script>
  const labelsBarChart = [
    "January",
    "February",
    "March",
    "April",
    "May",
    "June",
    "July",
    "August",
    "September",
    "October",
    "November",
    "December",
  ];
  const dataBarChart = {
    labels: labelsBarChart,
    datasets: [
      {
        label: "test",
        backgroundColor: "hsl(252, 82.9%, 67.8%)",
        borderColor: "hsl(252, 82.9%, 67.8%)",
        data: [2, 10, 5, 2, 20, 30, 45],
      },
    ],
  };

  const configBarChart = {
    type: "bar",
    data: dataBarChart,
    options: {},
  };

  var chartBar = new Chart(
    document.getElementById("chartBar"),
    configBarChart
  );
</script>
<!-- SCRIPT -->

<!-- doughnut CHART -->
<!-- Required chart.js -->
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<!-- Chart doughnut -->
<script>
  const dataDoughnut = {
    labels: ["Phone", "Laptop", "Tablet"],
    datasets: [
      {
        label: "My First Dataset",
        data: [300, 50, 100],
        backgroundColor: [
          "rgb(133, 105, 241)",
          "rgb(164, 101, 241)",
          "rgb(101, 143, 241)",
        ],
        hoverOffset: 4,
      },
    ],
  };

  const configDoughnut = {
    type: "doughnut",
    data: dataDoughnut,
    options: {},
  };

  var chartBar = new Chart(
    document.getElementById("chartDoughnut"),
    configDoughnut
  );
</script>
</html>
