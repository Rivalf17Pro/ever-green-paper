<!-- component -->
<header class="fixed z-30 bg-gray-100 font-sans w-full mt-0">
    <nav class="bg-white shadow-md dark:bg-gray-900 dark:shadow-green-700/60">
        <div class="container mx-auto px-4">
            <div class="flex items-center justify-between py-4">
                <div>
                    <a href="{{ route('welcome.index') }}"><img class="w-40"
                            src="{{ asset('assets/images/logo/EverGreenPaperLogo.svg') }}"
                            alt="Logo Ever Green Paper"></a>
                </div>

                <div class="hidden md:flex sm:items-center">
                    @section('about-nav')
                        <a href="#" class="button-inline">Acerca de </a>
                    @show
                    @section('contact-nav')
                        <a href="{{ route('contact.index') }}" class="button-inline">Contato</a>
                    @show
                    @section('donations-nav')
                        <a href="#" class="button-inline">Donaciones</a>
                    @show
                </div>

                <div class="hidden md:flex sm:items-center">
                    <a href="#" class="button">Ingresar</a>
                    <a href="#" class="button-online">Registrarse</a>
                </div>

                <button class="md:hidden cursor-pointer dark:text-gray-500" id="navbarSupportedContentButton">
                    <i class="fa-solid fa-bars"></i>
                </button>
            </div>
            <div class="nav-md" id="navbarSupportedContent">
                <div class="block border-2 rounded-lg dark:border-gray-800">
                    <div class="flex flex-col">
                        @section('about-nav')
                            <a href="#" class="button-inline">Acerca de </a>
                        @show
                        @section('contact-nav')
                        <a href="{{ route('contact.index') }}" class="button-inline">Contato</a>
                        @show
                        @section('donations-nav')
                            <a href="#" class="button-inline">Donaciones</a>
                        @show
                    </div>
                </div>
                <div class="flex justify-between items-center pt-2">
                    <a href="#" class="button">Ingresar</a>
                    <a href="#" class="button-online">Registrarse</a>
                </div>
            </div>
        </div>
    </nav>
</header>
