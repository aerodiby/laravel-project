<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite('resources/css/app.css')

</head>
<body>

<script src="https://cdn.jsdelivr.net/npm/flowbite@4.0.1/dist/flowbite.min.js"></script>


    <div class="antialiased bg-gray-50 dark:bg-gray-900">

    <x-admin.navbar />


    <!-- Sidebar -->
    <x-admin.sidebar />


    <main class="p-4 md:ml-64 min-h-screen pt-20 bg-gray-50 dark:bg-gray-900">
        <div class="p-4 border-2 border-gray-200 border-dashed rounded-lg dark:border-gray-700">
        {{ $slot }}
        </div>
    </main>
  </div>
</body>
</html>
