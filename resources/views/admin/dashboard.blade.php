<x-app-layout>

    <div class="grid grid-cols-4 gap-4 text-center  ">
        <a href="" class="border rounded-lg place-content-center flex flex-col h-24 hover:bg-slate-600">
            Store Owners
            <div class="font-bold text-2xl "> {{ $vendorInformations->count() }} </div>
        </a>
        <a href="" class="border rounded-lg place-content-center flex flex-col h-24 hover:bg-slate-600">
            Number of Visits
            <div class="font-bold text-2xl">{{ $visit->visits }}</div>
        </a>
        <a href="{{ route('admin.phones.index') }}"
            class="border rounded-lg place-content-center flex flex-col h-24 hover:bg-slate-600">
            Number of Phones
            <div class="font-bold text-2xl">{{ $phones }}</div>
        </a>
        <a href="{{ route('admin.laptops.index') }}"
            class="border rounded-lg place-content-center flex flex-col h-24 hover:bg-slate-600">
            Number of Laptops
            <div class="font-bold text-2xl">{{ $laptops }}</div>
        </a>

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
            document.getElementById('myChart'), {
                type: 'doughnut',
                data: {
                    labels: data.map(row => row.label),
                    datasets: [{
                        label: 'Brand',
                        data: data.map(row => row.count),
                        backgroundColor: generateColors(data.length)
                    }],

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

    function generateColors(length) {
        const colors = [];
        for (let i = 0; i < length; i++) {
            colors.push(getRandomColor());
        }
        return colors;
    }

    function getRandomColor() {
        const letters = '0123456789ABCDEF';
        let color = '#';
        for (let i = 0; i < 6; i++) {
            color += letters[Math.floor(Math.random() * 16)];
        }
        return color;
    }
</script>
