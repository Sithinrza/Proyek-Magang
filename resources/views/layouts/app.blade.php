<!DOCTYPE html>
<html data-theme="light">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
         @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>Document</title>
</head>
<body class="bg-gray-50 flex flex-col min-h-screen">

    @include("sections.nav")

    <main class="flex-grow pb-56">
        @yield('content')


        <script src="../path/to/flowbite/dist/flowbite.min.js"></script>
    </main>

    @include("sections.footer")
</body>
</html>
