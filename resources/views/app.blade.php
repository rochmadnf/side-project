<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="utf-8">
    <meta name="author" content="Rochmad Nurul Fahmi" />
    <title>{{ env('APP_NAME') }}</title>
    <link rel="shortcut icon" href="{{ asset('logo-onion.png') }}" type="image/png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @yield('vite_resource')
</head>

<body class="antialiased text-gray-900">

    <main class="min-h-screen w-full flex items-center justify-center md:mt-0">
        <section
            class="relative overflow-hidden h-screen unmobile:h-[650px] md:rounded-2xl w-screen md:w-[320px] md:border-[5px] border-rose-400 bg-slate-50 shadow-xl shadow-rose-500/40">
            @include('layouts.navigation')
            <div class="h-[calc(100%-142px)] p-4 overflow-y-auto">
                @if ($pageTitle)
                    <h1 class="text-center font-bold text-xl border-b-2 border-b-slate-700 pb-1 mb-6 uppercase">
                        {{ $pageTitle }}
                    </h1>
                @endif
                @yield('content')
            </div>

            @if ($pageTitle)
                @include('layouts.footer')
            @else
                @yield('self_footer')
            @endif
        </section>
    </main>

</body>

</html>
