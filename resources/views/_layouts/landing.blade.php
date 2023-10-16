<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="{{ asset('favicon.png') }}" type="image/svg">
    <title>@yield('title') | EverGreen Paper</title>
    {{-- <link rel="stylesheet" href="{{ asset('build/assets/app-e53ba5d8.css') }}"> --}}
    {{-- <link rel="stylesheet" href="{{ asset('assets/fontawesome-free-6.4.2-web/css/all.min.css') }}"> --}}
    <!-- Styles -->
    @vite(['resources/css/app.css'])
    @yield('styles')
    <!-- End Styles -->
</head>
<body class="bg-img-app bg-gray-50/70 dark:bg-gray-900/95 dark:bg-img-app-dark">
    <!-- Content -->
    @include('_layouts._partials.landing.nav')
    <main class="mx-auto w-full max-w-screen-xl px-2 py-24">
        @yield('content')
    </main>
    @include('_layouts._partials.landing.footer')
    <!-- End Content -->

    <!-- Scripts -->
    @vite(['resources/js/app.js'])
    {{-- <script src="{{ asset('build/assets/app-3d518e32.js') }}"></-script> --}}
    @yield('scripts')
    <!-- End Scripts -->
</body>
</html>