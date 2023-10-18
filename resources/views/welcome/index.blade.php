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
    <div
        class="flex flex-col gap-5 md:grid md:grid-cols-3 justify-items-center items-center justify-center content-center mt-8">
        @if (!empty($posts))
            @foreach ($posts as $post)
                <x-card title="{{ $post->title }}" description="{{ $post->description }}" img="{{ $post->image }}"
                    alt="{{ Str::upper($post->title) }}" button="Leer más" url="{{ route('welcome.show', $post->id) }}"
                    icon="fa-solid fa-arrow-right" date="{{ $post->created_at }}" />
            @endforeach
        @endif
        {{-- 
        <x-card title="Productos" pre="Gran diversidad de artículos completamente reciclados" img="{{ asset('assets/images/landing-images-frame/frame-4.svg') }}" alt="Frame 4" button="Leér más" url="#" icon="fa-solid fa-arrow-right"></x-card>
        <x-card title="Herramientas" pre="Descubre cómo reciclar tu papel utilizando las herramientas que brindamos" img="{{ asset('assets/images/landing-images-frame/frame-5.svg') }}" alt="Frame 5" button="Leer más" url="#" icon="fa-solid fa-arrow-right" date="14/05/2022"></x-card>
        --}}
    </div>
@endsection
