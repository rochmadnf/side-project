<nav class="absolute w-full left-0 top-0 bg-rose-500/30 shadow-sm shadow-rose-300/80 border-b-rose-400 border-b-2">
    <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
        <a href="{{ env('APP_URL') }}" class="flex items-center">
            <img src="{{ asset('logo-onion.png') }}" class="h-8 mr-3" alt="Logo" />
            <span
                class="self-center text-2xl font-alatsi text-gray-800 font-semibold tracking-wide whitespace-nowrap">{{ env('APP_NAME') }}</span>
        </a>

        <div id="fullscreen-btn" data-open="false">
            @svg('icon-corners-out-bold', 'fullscreen-on w-6 h-6 cursor-pointer text-gray-950 hover:text-white')
            @svg('icon-corners-in-bold', 'fullscreen-off hidden w-6 h-6 cursor-pointer text-gray-950 hover:text-white')
        </div>
    </div>
</nav>
