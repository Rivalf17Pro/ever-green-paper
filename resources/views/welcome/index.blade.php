@extends('_layouts.landing')
@section('title', 'Bienvenid@')
@section('content')
    <div class="grid md:grid-cols-2 items-center">
        <div class="flex flex-col justify-items-center items-center font-sans">
            <h1 class="font-bold text-4xl md:text-5xl text-center text-gray-800 dark:text-gray-300">¡Saludos en Ever Green Paper - Tu Suministro de Papel Ecológico Reciclado!</h1>
            <p class="px-2 md:px-1 text-gray-700 dark:text-gray-400 text-lg md:text-md text-center py-5">¡Bienvenido a Ever Green Paper: Tu Proveedor de Papel Reciclado Sustentable! Nos alegra recibirte en nuestra tienda virtual, enfocada en ofrecerte papel reciclado de excelente calidad, manteniendo un firme compromiso con la preservación ambiental. Nuestro nombre representa nuestra dedicación constante a suministrar productos que preserven la vitalidad de nuestro planeta y, al mismo tiempo, atiendan tus necesidades de papel.</p>
            <a href="#" class="button button-success py-3 px-5 text-lg">Saber más<i class="fa-solid fa-arrow-right ml-1"></i></a>
        </div>
        <div>
            <img src="{{ asset('assets/images/landing-images-frame/frame-3.svg') }}" alt="">
        </div>
    </div>
@endsection
