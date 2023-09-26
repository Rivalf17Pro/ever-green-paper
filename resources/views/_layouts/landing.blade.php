<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="{{ asset('favicon.svg') }}" type="image/svg">
    <title>@yield('title') | EverGreen Paper</title>

    <!-- Styles -->
    @vite(['resources/css/app.css'])
    @yield('styles')
    <!-- End Styles -->
</head>
<body class="bg-gray-50 dark:bg-gray-900/95">
    <!-- Content -->
    @include('_layouts._partials.landing.nav')
    <main class="container mx-auto py-20 px-5">
        @yield('content')
    </main>
    @include('_layouts._partials.landing.footer')
    <!-- End Content -->

    <!-- Scripts -->
    @vite(['resources/js/app.js'])
    @yield('scripts')
    <!-- End Scripts -->
</body>
</html>