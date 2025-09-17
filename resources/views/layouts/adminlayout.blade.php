<!DOCTYPE html>
<html data-theme="light">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'Admin Dashboard' }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-100">


@include('layouts.partials.adminnav')

@include('layouts.partials.adminsidebar')

<div class="p-4 sm:ml-64">
   {{ $slot }}
</div>

<script src="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.js"></script>

</body>
</html>
