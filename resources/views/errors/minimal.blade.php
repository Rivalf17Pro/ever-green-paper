<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="{{ asset('favicon.png') }}" type="image/x-icon">
    <title>@yield('title') | EverGreenPaper</title>
    {{-- Styles --}}
    @vite(['resources/css/app.css'])
    <style>
        body {
            font-family: ui-sans-serif, system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
        }
    </style>
    {{-- End Styles --}}
</head>

<body class="bg-img-app bg-gray-50/70 dark:bg-gray-900/95 dark:bg-img-app-dark">
    <section class="max-w-screen-2xl flex flex-col justify-items-center items-center my-20">
        <div class="py-8 px-4 max-w-screen-sm lg:py-16 lg:px-6 bg-white shadow-md rounded-lg dark:bg-gray-900 border-gray-200 dark:border-gray-700 dark:shadow-green-700/90">
            <div class="mx-auto max-w-screen-sm text-center">
                <h1
                    class="mb-4 text-7xl tracking-tight font-extrabold lg:text-9xl text-green-600 dark:text-green-500">
                    @yield('code')</h1>
                <p class="mb-4 text-3xl tracking-tight font-bold text-gray-900 md:text-4xl dark:text-white">
                    @yield('message')</p>
                <p class="mb-4 text-lg font-light text-gray-500 dark:text-gray-400">Lo sentimos.
                    Encontrarás mucho para explorar en la página de inicio.</p>
                <a href="{{ route('welcome.index') }}"
                    class="inline-flex text-white bg-green-600 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:focus:ring-green-900 my-4"><i class="fa-solid fa-arrow-left-long mr-2 mt-1"></i> Volver al inició</a>
            </div>
        </div>
    </section>
    {{-- Scripts --}}
    @vite(['resources/js/app.js'])
    {{-- End Scripts --}}
</body>

</html>
