@extends('app')

@section('content')
    <div class="flex flex-col justify-center items-center p-2">
        <img class="block mt-2 h-36 w-36" src="{{ asset('images/hello_farmer.png') }}" alt="Hello Farmer">
        <h1 class="font-bold text-xl">Halo, Farmers</h1>
        <p class="text-center text-sm font-light mt-1">Selamat Datang di Aplikasi Bamer Palu</p>

        <div class="mt-16 flex flex-col gap-4">
            <a href="#" type="button"
                class="
                    bg-gradient-to-r from-sky-500 via-sky-600 to-sky-700
                    shadow-md shadow-sky-500/50
                    hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-sky-300
                    text-white rounded-xl font-medium text-sm px-5 py-2.5 text-center inline-flex items-center">
                <x-icon-info-fill class="w-5 h-5 mr-2" />
                Info Aplikasi
            </a>

            <a href="#" type="button"
                class="
                    bg-gradient-to-r from-emerald-500 via-emerald-600 to-emerald-700
                    shadow-md shadow-emerald-500/50
                    hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-emerald-300
                    text-white rounded-xl font-medium text-sm px-5 py-2.5 text-center inline-flex items-center">
                <x-icon-flask-fill class="w-5 h-5 mr-2" />
                Standar Mutu
            </a>

            <a href="{{ route('check') }}" type="button"
                class="
                    bg-gradient-to-r from-rose-500 via-rose-600 to-rose-700
                    shadow-md shadow-rose-500/50
                    hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-rose-300
                    text-white rounded-xl font-medium text-sm px-5 py-2.5 text-center inline-flex items-center">
                <x-icon-sparkle-fill class="w-5 h-5 mr-2" />
                Cek Mutu
            </a>

            <a href="{{ route('cluster') }}" type="button"
                class="
                    bg-gradient-to-r from-orange-500 via-orange-600 to-orange-700
                    shadow-md shadow-orange-500/50
                    hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-orange-300
                    text-white rounded-xl font-medium text-sm px-5 py-2.5 text-center inline-flex items-center">
                <x-icon-map-trifold-fill class="w-5 h-5 mr-2" />
                Peta Kluster
            </a>
        </div>
    </div>
@endsection

@section('self_footer')
    <footer id="bottom_navigation" class="absolute w-full h-fit bg-rose-500/30 bottom-0 left-0">
        <p class="text-xs font-medium text-center py-3 px-1.5 leading-5 text-gray-500">&copy; 2023 Jurusan Matematika Prodi
            Matematika
            Fakultas
            MIPA
            Universitas
            Tadulako</p>
    </footer>
@endsection
