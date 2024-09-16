<x-app-layout admin="true">
    <div class="py-10">

        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 flex gap-4">
            <div class="card basis-1/4 border-0 shadow !rounded-[15px] !overflow-hidden">
                <div class="card-body">
                    <div class="d-flex align-items-center justify-content-between">
                        <div class="subheader fs-4">تعداد کاربران</div>
                        <h3 class="m-0">{{ array_sum($users_history["totals"]) }}</h3>
                    </div>
                </div>
                <div id="small_chart_1" class="chart-sm"></div>
            </div>
        </div>

    </div>
    @section("style")
        @vite(["resources/sass/app.scss"])
    @endsection
    @section("script")
        <script src="{{ asset("assets/js/apexcharts.js") }}"></script>
        <script>
            document.addEventListener("DOMContentLoaded", function () {
                window.ApexCharts && (new ApexCharts(document.getElementById('small_chart_1'), {
                    chart: {
                        type: "area",
                        fontFamily: 'inherit',
                        height: 70.0,
                        sparkline: {
                            enabled: true
                        },
                        animations: {
                            enabled: true
                        },
                    },
                    dataLabels: {
                        enabled: false,
                    },
                    fill: {
                        opacity: .16,
                        type: 'solid'
                    },
                    stroke: {
                        width: 2,
                        lineCap: "round",
                        curve: "smooth",
                    },
                    series: [{
                        name: "تعداد",
                        data: @json($users_history["totals"])
                    }],
                    tooltip: {
                        theme: 'dark'
                    },
                    grid: {
                        strokeDashArray: 4,
                    },
                    xaxis: {
                        labels: {
                            padding: 0,
                        },
                        tooltip: {
                            enabled: false
                        },
                        axisBorder: {
                            show: false,
                        },
                        type: 'datetime',
                    },
                    yaxis: {
                        labels: {
                            padding: 4
                        },
                    },
                    labels: @json($users_history["dates"]),
                    colors: ["#FF5C00"],
                    legend: {
                        show: false,
                    },
                })).render();
            });
        </script>
    @endsection
</x-app-layout>