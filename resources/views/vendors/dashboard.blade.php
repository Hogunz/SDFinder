<x-vendor-layout>
    <!-- Section 1 -->
    <div class="mt-2 ">
        <!-- State cards -->
        <div class=" grid grid-cols-1 gap-8 p-4 lg:grid-cols-3 xl:grid-cols-3">
            <!-- Value card -->
            <div class="flex items-center justify-between p-4 bg-white rounded-md dark:bg-darker">
                <div>
                    <h6
                        class="text-xs font-medium leading-none tracking-wider text-gray-500  dark:text-primary-light">
                        Count of all products
                    </h6>
                    <span class="text-xl font-semibold">30,000</span>
                    <span
                        class="inline-block px-2 py-px ml-2 text-xs text-green-500 bg-green-100 rounded-md">
                        +4.4%
                    </span>
                </div>
                <div>

                </div>
            </div>

            <!-- Users card -->
            <div class="flex items-center justify-between p-4 bg-white rounded-md dark:bg-darker">
                <div>
                    <h6
                        class="text-xs font-medium leading-none tracking-wider text-gray-500  dark:text-primary-light">
                        Counts of stock
                    </h6>
                    <span class="text-xl font-semibold">50,021</span>
                    <span
                        class="inline-block px-2 py-px ml-2 text-xs text-green-500 bg-green-100 rounded-md">
                        +2.6%
                    </span>
                </div>
                <div>

                </div>
            </div>

            <!-- Orders card -->
            <div class="flex items-center justify-between p-4 bg-white rounded-md dark:bg-darker">
                <div>
                    <h6
                        class="text-xs font-medium leading-none tracking-wider text-gray-500  dark:text-primary-light">
                        Product overstock
                    </h6>
                    <span class="text-xl font-semibold">0</span>
                    <span
                        class="inline-block px-2 py-px ml-2 text-xs text-green-500 bg-green-100 rounded-md">
                        +3.1%
                    </span>
                </div>
                <div>

                </div>
            </div>

        </div>

        <!-- Charts -->
        <div class=" grid grid-cols-1 p-8 space-y-8 lg:gap-8 lg:space-y-0 lg:grid-cols-3">
            <!-- Bar chart card -->
            <div class="col-span-2 bg-white rounded-md dark:bg-darker" x-data="{ isOn: false }">
                <!-- Card header -->
                <div class="flex items-center justify-between p-4 border-b dark:border-primary">
                    <h4 class="text-lg font-semibold text-gray-500 dark:text-light">Most Search</h4>
                    <div class="flex items-center space-x-2">
                        <span class="text-sm text-gray-500 dark:text-light">Last year</span>

                        <label for="default-toggle1"
                            class="inline-flex relative items-center cursor-pointer">
                            <input type="checkbox" value="" id="default-toggle1"
                                class="sr-only peer">
                            <div
                                class="w-11 h-6 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-blue-300 dark:peer-focus:ring-blue-800 rounded-full peer dark:bg-gray-700 peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-blue-600">
                            </div>
                        </label>

                    </div>
                </div>
                <!-- BAR CHART CONTENT -->
                <div class="shadow-lg rounded-lg overflow-hidden">
                    <canvas class="" id="chartBar"></canvas>
                </div>
            </div>

            <!-- Content chart card -->
            <div class="bg-white rounded-md dark:bg-darker" x-data="{ isOn: false }">
                <!-- Card header -->
                <div class="flex items-center justify-between p-4 border-b dark:border-primary">
                    <h4 class="text-lg font-semibold text-gray-500 dark:text-light">Most Rated</h4>
                    <div class="flex items-center">

                        <label for="default-toggle2"
                            class="inline-flex relative items-center cursor-pointer">
                            <input type="checkbox" value="" id="default-toggle2"
                                class="sr-only peer">
                            <div
                                class="w-11 h-6 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-blue-300 dark:peer-focus:ring-blue-800 rounded-full peer dark:bg-gray-700 peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-blue-600">
                            </div>

                        </label>

                    </div>
                </div>
                <!-- Doughnut Chart -->
                <div class="shadow-lg rounded-lg overflow-hidden">
                    <canvas class="p-12 " id="chartDoughnut"></canvas>
                </div>
            </div>
        </div>


    </div>

</x-vendor-layout>



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
        datasets: [{
            label: "test",
            backgroundColor: "hsl(252, 82.9%, 67.8%)",
            borderColor: "hsl(252, 82.9%, 67.8%)",
            data: [2, 10, 5, 2, 20, 30, 45],
        }, ],
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
        datasets: [{
            label: "My First Dataset",
            data: [300, 50, 100],
            backgroundColor: [
                "rgb(133, 105, 241)",
                "rgb(164, 101, 241)",
                "rgb(101, 143, 241)",
            ],
            hoverOffset: 4,
        }, ],
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
