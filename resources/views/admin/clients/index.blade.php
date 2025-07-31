@extends('admin.layouts.app')

@section('head')
<!-- Tailwind CSS CDN (if not already included in your layout) -->
<link href="https://cdn.jsdelivr.net/npm/tailwindcss@3.3.2/dist/tailwind.min.css" rel="stylesheet" />
@endsection

@section('body')
<div class="container mx-auto p-4">
    <h1 class="text-3xl font-bold mb-6">Clients</h1>

    <a href="{{ route('admin.clients.create') }}" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">+ Add Client</a>

    <div class="mt-6 overflow-x-auto">
        <table class="min-w-full bg-white shadow-md rounded-lg overflow-hidden">
            <thead class="bg-gray-100">
                <tr>
                    <th class="px-6 py-3 text-left text-sm font-semibold text-gray-700">Name</th>
                    <th class="px-6 py-3 text-left text-sm font-semibold text-gray-700">Email</th>
                    <th class="px-6 py-3 text-left text-sm font-semibold text-gray-700">Phone</th>
                    <th class="px-6 py-3 text-left text-sm font-semibold text-gray-700">Deal Done</th>
                    <th class="px-6 py-3 text-left text-sm font-semibold text-gray-700">Percentage</th>
                    <th class="px-6 py-3 text-left text-sm font-semibold text-gray-700">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($clients as $client)
                    <tr class="border-b hover:bg-gray-50">
                        <td class="px-6 py-4">{{ $client->name }}</td>
                        <td class="px-6 py-4">{{ $client->email }}</td>
                        <td class="px-6 py-4">{{ $client->phone }}</td>
                        <td class="px-6 py-4">
                            @if($client->deal_done)
                                <span class="text-green-600 font-semibold">Deal Done</span>
                            @else
                                <span class="text-red-600 font-semibold">Not Done</span>
                            @endif
                        </td>
                        <td class="px-6 py-4">{{ $client->percentage }}%</td>
                        <td class="px-6 py-4 flex gap-2">
                            <a href="{{ route('admin.clients.edit', $client) }}" class="bg-yellow-400 hover:bg-yellow-500 text-white px-3 py-1 rounded">Edit</a>
                            <form action="{{ route('admin.clients.destroy', $client) }}" method="POST" onsubmit="return confirm('Are you sure?')" class="inline">
                                @csrf
                                @method('DELETE')
                                <button class="bg-red-500 hover:bg-red-600 text-white px-3 py-1 rounded">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <div class="mt-4">
            {{ $clients->links('vendor.pagination.tailwind') }}
        </div>
    </div>

    <div class="mt-10 max-w-4xl mx-auto">
        <h2 class="text-2xl font-bold mb-4 text-center">Deal Status Overview</h2>

        <div class="flex justify-around gap-8">
            <!-- Pie Chart -->
            <div class="w-1/2">
                <canvas id="dealPieChart" width="400" height="400" style="background-color: #f9fafb;"></canvas>
            </div>

            <!-- Bar Chart -->
            <div class="w-1/2">
                {{-- <canvas id="dealBarChart" width="400" height="400" style="background-color: #f9fafb;"></canvas> --}}
                <canvas id="dealPieChart" width="400" height="400"></canvas>

            </div>
        </div>

        {{-- Debug counts --}}
        <pre class="mt-6 text-center">Deal Done: {{ $clients->where('deal_done', 1)->count() }} | Not Done: {{ $clients->where('deal_done', 0)->count() }}</pre>
    </div>
</div>
@endsection

@section('scripts')
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
document.addEventListener('DOMContentLoaded', function() {
    const dataDone = @json($clients->where('deal_done', 1)->count());
    const dataNotDone = @json($clients->where('deal_done', 0)->count());

    // Pie Chart
    const pieCanvas = document.getElementById('dealPieChart');
    if (pieCanvas) {
        new Chart(pieCanvas.getContext('2d'), {
            type: 'pie',
            data: {
                labels: ['Deal Done', 'Not Done'],
                datasets: [{
                    data: [dataDone, dataNotDone],
                    backgroundColor: [
                        'rgba(34, 197, 94, 0.8)',  // Green
                        'rgba(239, 68, 68, 0.8)'   // Red
                    ],
                    borderColor: [
                        'rgba(34, 197, 94, 1)',
                        'rgba(239, 68, 68, 1)'
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                responsive: false,
                plugins: {
                    legend: { position: 'top' }
                }
            }
        });
    }

    // Bar Chart
    const barCanvas = document.getElementById('dealBarChart');
    if (barCanvas) {
        new Chart(barCanvas.getContext('2d'), {
            type: 'bar',
            data: {
                labels: ['Deal Done', 'Not Done'],
                datasets: [{
                    label: 'Number of Clients',
                    data: [dataDone, dataNotDone],
                    backgroundColor: [
                        'rgba(34, 197, 94, 0.8)',
                        'rgba(239, 68, 68, 0.8)'
                    ],
                    borderColor: [
                        'rgba(34, 197, 94, 1)',
                        'rgba(239, 68, 68, 1)'
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                responsive: false,
                plugins: {
                    legend: { display: false }
                },
                scales: {
                    y: { beginAtZero: true }
                }
            }
        });
    }
});
</script>
@endsection


<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
document.addEventListener('DOMContentLoaded', function () {
    console.log("DOM is ready!");

    const dataDone = @json($clients->where('deal_done', 1)->count());
    const dataNotDone = @json($clients->where('deal_done', 0)->count());

    const pieCanvas = document.getElementById('dealPieChart');
    if (pieCanvas) {
        const pieCtx = pieCanvas.getContext('2d');
        new Chart(pieCtx, {
            type: 'pie',
            data: {
                labels: ['Deal Done', 'Not Done'],
                datasets: [{
                    data: [dataDone, dataNotDone],
                    backgroundColor: ['#22c55e', '#ef4444'],
                }]
            },
            options: {
                responsive: false
            }
        });
    }
});
</script>
