<div
    class="max-w-sm bg-white border border-gray-200 rounded-lg shadow-md hover:shadow-lg dark:hover:shadow-green-700 dark:bg-gray-900 dark:border-gray-700 dark:shadow-green-700/90">
    @if (!empty($img))
        <a href="#">
            <img class="rounded-t-lg" src="{{ $img }}" alt="{{ $alt }}" />
        </a>
    @endif
    <div class="p-5">
        <div class="flex justify-between">
            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-gray-300">{{ $title }}</h5>
            @if (!empty($date))
                <p class="font-light text-base text-gray-600 dark:text-gray-400">{{ $date }}</p>
            @endif
        </div>
        <p class="mb-3 font-light text-gray-700 dark:text-gray-400">{{ $pre }}</p>
        @if (!empty($url))
            <a href="{{ $url }}"
                class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-green-700 rounded-lg hover:bg-green-600 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-green-800">
                {{ $button }}
                <i class="{{ $icon }} ml-2"></i>
            </a>
        @endif
    </div>
</div>
