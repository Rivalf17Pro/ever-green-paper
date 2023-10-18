<div
    class="max-w-sm bg-white border border-gray-200 rounded-lg shadow-md hover:shadow-lg dark:hover:shadow-green-700 dark:bg-gray-900 dark:border-gray-700 dark:shadow-green-700/90">
    @if (!empty($img))
        <img class="rounded-t-lg" src="{{ $img }}" alt="{{ $alt }}" />
    @endif
    <div class="p-5">
        <div class="flex justify-between mb-2">
            <h5 class="text-2xl font-bold tracking-tight text-gray-900 dark:text-gray-300">{{ $title }}</h5>
            @if (!empty($date))
                <div
                    class="bg-green-600 text-green-600 px-2 py-1 flex items-center justify-center overflow-hidden rounded-full bg-opacity-5 text-sm font-medium">
                    <p class="hidden lg:block">{{ $date }}</p>
                    <i class="fa-regular fa-calendar block lg:hidden" title="{{ $date }}"></i>
                </div>
            @endif
        </div>
        <p class="mb-3 font-light text-gray-700 dark:text-gray-400">{{ $description }}</p>
        @if (!empty($url))
            <a href="{{ $url }}"
                class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-green-700 rounded-lg hover:bg-green-600 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-green-800">
                {{ $button }}
                <i class="{{ $icon }} ml-2"></i>
            </a>
        @endif
    </div>
</div>
