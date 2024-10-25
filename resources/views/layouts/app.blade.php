<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Program Studi Matematika Jurusan Matematika Fakultas MIPA Universitas Tadulako" />
    <meta name="description"
        content="{{ config('app.name') }} &mdash; merupakan aplikasi yang dibuat dengan tujuan mempermudah petani atau masyarakat umum untuk mengecek Standar Mutu dari Bawang Merah yang hasilkan saat panen." />

    <title>@yield('title') &mdash; {{ config('app.name') }}</title>

    <link rel="shortcut icon" href="{{ asset('favicon.png') }}" type="image/png" sizes="32x32">

    @vite(['resources/css/app.css'])
    @yield('vite')
</head>

<body class="bg-slate-50 text-gray-900 antialiased">
    <main class="flex min-h-screen w-full flex-col items-center justify-center gap-y-6">
        <section class="flex flex-row items-center justify-center gap-x-8">
            @yield('content')
            <x-sidebar-nav :visibility="$sidebarVisibility ?? true" />
        </section>
        <footer class="text-sm font-light text-gray-700">&copy; 2024 Prodi Matematika Jurusan Matematika Fakultas MIPA
            Universitas
            Tadulako</footer>
    </main>
</body>

</html>
