<nav class="bg-rose-500/30 shadow-sm shadow-rose-300/80 border-b-rose-400 border-b-2">
    <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
        <a href="{{ env('APP_URL') }}" class="flex items-center">
            <img src="{{ asset('logo-onion.png') }}" class="h-8 mr-3" alt="Logo" />
            <span
                class="self-center text-2xl font-semibold tracking-wide whitespace-nowrap dark:text-white">{{ env('APP_NAME') }}</span>
        </a>
    </div>
</nav>
