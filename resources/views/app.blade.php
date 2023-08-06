<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="utf-8">
    <meta name="author" content="Rochmad Nurul Fahmi" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="antialiased text-gray-900">

    <main class="min-h-screen w-full flex items-center justify-center md:mt-0">
        <section
            class="relative overflow-hidden h-screen unmobile:h-[650px] border-y-4 border-y-rose-400 md:rounded-2xl w-screen md:w-[320px] md:border-[5px] border-rose-400 bg-slate-50 shadow-xl shadow-rose-500/40">

            <nav class="bg-rose-500/30 shadow-sm shadow-rose-300/80 border-b-rose-400 border-b-2">
                <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
                    <a href="{{ env('APP_URL') }}" class="flex items-center">
                        <img src="{{ asset('logo-onion.png') }}" class="h-8 mr-3" alt="Logo" />
                        <span
                            class="self-center text-2xl font-semibold tracking-wide whitespace-nowrap dark:text-white">Bawang
                            Merah</span>
                    </a>
                </div>
            </nav>

            <footer class="absolute w-full h-14 bg-rose-500/30 bottom-0 left-0">

            </footer>

        </section>
    </main>

</body>

</html>
