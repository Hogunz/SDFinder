<x-app-layout>

    <div class="grid grid-cols-4 gap-4 text-center">
        <div class="border rounded-lg place-content-center flex flex-col h-24">
            Store Owners
            <div class="font-bold text-2xl"> {{ $vendorInformations->count() }} </div>
        </div>
        <div class="border rounded-lg place-content-center flex flex-col h-24">
            Number of Visits
            <div class="font-bold text-2xl">{{ $visit->visits }}</div>
        </div>
        <div class="border rounded-lg place-content-center flex flex-col h-24">
            Number of Phones
            <div class="font-bold text-2xl">{{ $phones }}</div>
        </div>
        <div class="border rounded-lg place-content-center flex flex-col h-24">
            Number of Laptops
            <div class="font-bold text-2xl">{{ $laptops }}</div>
        </div>

    </div>

    <div class="max-w-3xl mx-auto mt-10">
        <canvas id="myChart" width="500" height="500"></canvas>
    </div>

</x-app-layout>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    (async function() {
        const data = @json($data);

        new Chart(
            document.getElementById('myChart'),
            {
                type: 'doughnut',
                data: {
                    labels: data.map(row => row.label),
                    datasets: [
                    {
                        label: 'Brand',
                        data: data.map(row => row.count)

                    }
                    ],

                },
                options: {
                    maintainAspectRatio: false,
                    plugins: {
                        legend: {
                            position: 'right',
                        }
                    },
                }
            }
        );
    })();
</script>
