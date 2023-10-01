@extends('_layouts.landing')
@section('title', 'Bienvenid@')
@section('content')
    <div class="grid lg:grid-cols-2 items-center">
        <div
            class="flex flex-col justify-items-center items-center font-sans bg-white p-5 rounded-lg border-gray-200 border-2 shadow dark:bg-gray-800 dark:border-gray-700 dark:shadow-gray-700">
            <h1 class="font-bold text-3xl md:text-4xl lg:text-5xl text-center text-gray-800 dark:text-gray-300">¡Saludos en
                Ever Green Paper - Tu Suministro de Papel Ecológico Reciclado!</h1>
            <p class="px-2 md:px-1 text-gray-700 dark:text-gray-400 text-lg md:text-md text-center py-5">¡Bienvenido a Ever
                Green Paper: Tu Proveedor de Papel Reciclado Sustentable! Nos alegra recibirte en nuestra tienda virtual,
                enfocada en ofrecerte papel reciclado de excelente calidad, manteniendo un firme compromiso con la
                preservación ambiental. Nuestro nombre representa nuestra dedicación constante a suministrar productos que
                preserven la vitalidad de nuestro planeta y, al mismo tiempo, atiendan tus necesidades de papel.</p>
            <a href="#" class="button button-success py-3 px-5 text-lg">Saber más</a>
        </div>
        <div>
            <img src="{{ asset('assets/images/landing-images-frame/frame-3.svg') }}" alt="Frame 3">
        </div>
    </div>
    <div class="flex flex-col lg:grid lg:grid-cols-2 justify-items-center items-center mt-10">
        <div class="w-full m-5 flex flex-col sm:flex-row rounded-lg justify-items-center items-center bg-white shadow border-2 dark:bg-gray-800 dark:border-gray-700 dark:shadow-gray-700 max-w-lg">
            <img src="{{ asset('assets/images/landing-images-frame/frame-4.svg') }}" alt="Frame 4" class="max-w-xs w-64">
            <div class="p-2 flex flex-col items-center sm:items-start">
                <h2 class="font-bold text-3xl text-gray-800 text-center sm:text-left dark:text-gray-300">Productos</h2>
                <p class="text-gray-700 text-base py-4 text-center sm:text-start dark:text-gray-400">Gran diversidad de artículos completamente reciclados</p>
                <a href="" class="button button-secundary py-2 px-3 text-center">Leer más</a>
            </div>
        </div>
        <div class="w-full m-5 flex flex-col sm:flex-row rounded-lg justify-items-center items-center bg-white shadow border-2 dark:bg-gray-800 dark:border-gray-700 dark:shadow-gray-700 max-w-lg">
            <img src="{{ asset('assets/images/landing-images-frame/frame-5.svg') }}" alt="Frame 4" class="max-w-xs w-64">
            <div class="p-2 flex flex-col items-center sm:items-start">
                <h2 class="font-bold text-3xl text-gray-800 text-center sm:text-left dark:text-gray-300">Herramientas</h2>
                <p class="text-gray-700 text-base py-4 text-center sm:text-start dark:text-gray-400">Descubre cómo reciclar tu papel utilizando las herramientas que brindamos</p>
                <a href="" class="button button-secundary py-2 px-3 text-center">Leer más</a>
            </div>
        </div>
    </div>
@endsection
