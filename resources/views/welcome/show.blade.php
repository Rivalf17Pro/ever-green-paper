@extends('_layouts.landing')

@section('title')
    {{ $post->title }}
@endsection

@section('content')
    <div class="bg-white dark:bg-gray-900">
        <div class="relative overflow-hidden bg-cover bg-no-repeat rounded-2xl"
            style="background-position: 50%; background-image: url('{{ $post->image }}'); height: 350px;">
            <div class="absolute bottom-0 left-0 right-0 top-0 h-full w-full overflow-hidden bg-fixed"
                style="background-color: rgba(17, 146, 49, 0.75)">
                <div class="flex h-full items-center justify-center">
                    <div class="px-6 text-center text-white md:px-12">
                        <h1 class="mb-6 text-5xl font-bold">{{ $post->title }}</h1>
                        <h4 class="mb-8 text-3xl font-bold">{{ $post->description }}</h4>
                        <a href="{{ route('welcome.index') }}"
                            class="inline-block rounded border-2 border-neutral-50 px-6 pb-[6px] pt-2 text-xs font-medium uppercase leading-normal text-neutral-50 transition duration-150 ease-in-out hover:border-neutral-100 hover:bg-neutral-500 hover:bg-opacity-10 hover:text-neutral-100 focus:border-neutral-100 focus:text-neutral-100 focus:outline-none focus:ring-0 active:border-neutral-200 active:text-neutral-200 dark:hover:bg-neutral-100 dark:hover:bg-opacity-10"
                            data-te-ripple-init data-te-ripple-color="light">
                            Volver
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div>
            
        </div>
    </div>
@endsection
