@extends('app')

@section('page_title', 'Peta Kluster')

@section('vite_resource')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/zoom-vanilla.js/dist/zoom.css">
    <script src="https://cdn.jsdelivr.net/npm/zoom-vanilla.js/dist/zoom-vanilla.min.js" defer></script>
@endsection

@section('content')
    <div class="mb-4">
        <img data-action="zoom" class="rounded-md shadow-md shadow-gray-400" src="{{ asset('images/cluster-map.jpg') }}"
            alt="Cluster Map" />
    </div>

    <div class="flex flex-col gap-2">
        <h6 class="font-bold text-md">Keterangan:</h6>

        <div class="flex justify-start items-center">
            <span class="h-2 w-10 bg-[#EA1522] mr-2"></span>
            <p>Kelompok Daerah Bermutu I</p>
        </div>

        <div class="flex justify-start items-center">
            <span class="h-2 w-10 bg-[#B7E523] mr-2"></span>
            <p>Kelompok Daerah Bermutu II</p>
        </div>
    </div>
@endsection
