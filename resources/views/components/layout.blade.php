<!doctype html>

<head>
    <title>Life & live music (blog)</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Merriweather+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700&family=Merriweather:ital,wght@0,300;0,400;0,700;0,900;1,300;1,400;1,700;1,900&display=swap"
        rel="stylesheet">
    <script src="//unpkg.com/alpinejs" defer></script>
    <!-- Scripts -->
    @vite('resources/css/app.css')
</head>
<style>
    html {
        scroll-behavior: smooth;
    }

    body {

        font-family: 'Lato', sans-serif;
        font-family: 'Merriweather', serif;
    }
</style>

<body>
    {{-- Navbar --}}
    <x-navbar />

    {{-- Page content --}}
    <div class="flex justify-center">
        <div class="md:w-2/3 px-2">
            {{ $slot }}
        </div>
    </div>

    {{-- Footer --}}
    <x-footer />
</body>