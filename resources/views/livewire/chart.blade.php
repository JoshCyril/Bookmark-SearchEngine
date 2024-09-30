<div>
    <canvas id="myChart"></canvas>

    @push('scripts')
        <script>

            const data = @json($data);

            // Extract X and Y values from the data
            const chartData = data.map(point => ({ x: point[0], y: point[1] }));

            // Create the scatter plot using Chart.js
            const ctx = document.getElementById('myChart').getContext('2d');
            const myChart = new Chart(ctx, {
                type: 'scatter',
                data: {
                    datasets: [{
                        label: '2D Points',
                        data: chartData,
                        backgroundColor: 'rgba(75, 192, 192, 0.6)',
                        borderColor: 'rgba(75, 192, 192, 1)',
                        pointRadius: 5
                    }]
                },
                options: {
                    scales: {
                        x: {
                            type: 'linear',
                            position: 'bottom',
                            title: {
                                display: true,
                                text: 'X-Axis'
                            }
                        },
                        y: {
                            type: 'linear',
                            title: {
                                display: true,
                                text: 'Y-Axis'
                            }
                        }
                    },
                    plugins: {
                        legend: {
                            display: true
                        }
                    }
                }
            });
        </script>
    @endpush
</div>
