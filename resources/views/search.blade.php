
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data List</title>
    @vite('resources/css/app.css') 
</head>
<body class="bg-gray-100 min-h-screen flex flex-col items-center">
    <div class="container mx-auto p-4">
        <h1 class="text-3xl font-bold text-center mb-6 text-gray-800">Data List</h1>

        <!-- Grid Container -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            @forelse ($projects as $project)
                <!-- Card Component -->
                <div class="bg-white border border-gray-300 rounded-lg p-4 shadow-sm hover:shadow-lg transition-shadow duration-300">
                    <h2 class="text-lg font-bold text-gray-700">{{ $project->title }}</h2>
                    <p class="text-sm text-gray-500 mt-1">ID: {{ $project->id }}</p>
                    <p class="text-sm text-gray-500 mt-1">Created By: {{ $project->user->name }}</p>
                </div>
            @empty
                <!-- Empty State -->
                <div class="col-span-full text-center">
                    <p class="text-gray-500">No data available</p>
                </div>
            @endforelse
        </div>
    </div>
</body>
</html>