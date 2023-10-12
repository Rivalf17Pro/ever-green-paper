@extends('_layouts.landing')
@section('title', 'Bienvenid@')
@section('content')
    <div class="grid md:grid-cols-2 items-center">
        <div
            class="flex flex-col justify-items-center items-center font-sans bg-white p-5 rounded-lg border-gray-200 border shadow-md dark:bg-gray-900 dark:border-gray-700 dark:shadow-green-700/90 order-2">
            <h1 class="font-bold text-2xl md:text-3xl lg:text-4xl text-center text-gray-800 dark:text-gray-300">¡Saludos en
                Ever Green Paper - Tu Suministro de Papel Ecológico Reciclado!</h1>
            <p class="px-2 md:px-8 py-5 font-light text-center text-gray-500 dark:text-gray-400 sm:text-xl">¡Bienvenido a
                Ever
                Green Paper: Tu Proveedor de Papel Reciclado Sustentable! Nos alegra recibirte en nuestra tienda virtual,
                enfocada en ofrecerte papel reciclado de excelente calidad, manteniendo un firme compromiso con la
                preservación ambiental. Nuestro nombre representa nuestra dedicación constante a suministrar productos que
                preserven la vitalidad de nuestro planeta y, al mismo tiempo, atiendan tus necesidades de papel.</p>
            <a href="#" class="button button-success text-lg py-2">Saber más</a>
        </div>
        <div class="order-1 md:order-2">
            <img src="{{ asset('assets/images/landing-images-frame/frame-3.svg') }}" alt="Frame 3" class="w-full md:w-auto">
        </div>
    </div>
    <div class="flex flex-col gap-5 md:grid md:grid-cols-3 justify-items-center items-center justify-center content-center mt-8">
        <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow-md dark:bg-gray-900 dark:border-gray-700 dark:shadow-green-700/90"> 
            <a href="#">
                <img class="rounded-t-lg" src="{{ asset('assets/images/landing-images-frame/frame-4.svg') }}"
                    alt="Frame 5" />
            </a>
            <div class="p-5">
                <a href="#">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-gray-300">Productos</h5>
                </a>
                <p class="mb-3 font-light text-gray-700 dark:text-gray-400">Gran diversidad de
                    artículos completamente reciclados</p>
                <a href="#"
                    class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-green-700 rounded-lg hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">
                    Leer más
                    <svg class="w-3.5 h-3.5 ml-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 14 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M1 5h12m0 0L9 1m4 4L9 9" />
                    </svg>
                </a>
            </div>
        </div>
        <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow-md dark:bg-gray-900 dark:border-gray-700 dark:shadow-green-700/90">
            <a href="#">
                <img class="rounded-t-lg" src="{{ asset('assets/images/landing-images-frame/frame-5.svg') }}"
                    alt="Frame 5" />
            </a>
            <div class="p-5">
                <a href="#">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-gray-300">Herramientas</h5>
                </a>
                <p class="mb-3 font-light text-gray-700 dark:text-gray-400">Descubre cómo reciclar tu
                    papel utilizando las herramientas que brindamos</p>
                <a href="#"
                    class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-green-700 rounded-lg hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">
                    Leer más
                    <svg class="w-3.5 h-3.5 ml-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 14 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M1 5h12m0 0L9 1m4 4L9 9" />
                    </svg>
                </a>
            </div>
        </div>
    </div>
@endsection
