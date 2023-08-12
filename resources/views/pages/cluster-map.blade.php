@extends('app')

@section('page_title', 'Peta Kluster')

@section('content')
    <div class="mb-4">
        <img class="rounded-md" src="{{ asset('images/cluster-map.jpg') }}" alt="Cluster Map" />
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
