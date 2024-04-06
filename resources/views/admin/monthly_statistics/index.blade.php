@extends('admin.layout.app')
@section('admin_home')

<div class="container">
    <h2>Monthly Statistics</h2>

    <canvas id="monthlyChart" width="400" height="200"></canvas>

    <table class="table mt-4">
        <thead>
            <tr>
                <th>Month</th>
                <th>Year</th>
                <th>Visitor Count</th>
            </tr>
        </thead>
        <tbody>
            @forelse($monthlyStatistics as $statistic)
                <tr>
                    <td>{{ date('F', mktime(0, 0, 0, $statistic->month, 1)) }}</td>
                    <td>{{ $statistic->year }}</td>
                    <td>{{ $statistic->visitor_count }}</td>
                </tr>
            @empty
                <tr>
                    <td colspan="3">No monthly statistics available.</td>
                </tr>
            @endforelse
        </tbody>
    </table>

    <div class="mt-4">
        <p>Total Visitors: {{ $monthlyStatistics->sum('visitor_count') }}</p>
        @if($mostVisitedMonth = $monthlyStatistics->first())
            <p>Most Visited Month: {{ date('F', mktime(0, 0, 0, $mostVisitedMonth->month, 1)) }} {{ $mostVisitedMonth->year }}</p>
        @else
            <p>No monthly statistics available.</p>
        @endif
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    // JavaScript to initialize the chart
    var ctx = document.getElementById('monthlyChart').getContext('2d');
    var labels = {!! json_encode($monthlyStatistics->pluck('month')->map(function ($month) {
        return date('F', mktime(0, 0, 0, $month, 1));
    })) !!};
    var data = {!! json_encode($monthlyStatistics->pluck('visitor_count')) !!};

    var chart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: labels,
            datasets: [{
                label: 'Visitor Count',
                data: data,
                backgroundColor: 'rgba(75, 192, 192, 0.2)',
                borderColor: 'rgba(75, 192, 192, 1)',
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });
</script>

@endsection
