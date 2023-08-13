@extends('app')

@section('page_title', 'Tim Peneliti')

@section('content')
    @foreach ($researcher as $research)
        <div class="flex flex-col justify-center items-center p-4 mb-4 rounded-md shadow-0 bg-slate-50/30 shadow-slate-300">
            <div class="mb-4">
                <img class="rounded-full h-24 w-24 border-2 border-rose-500 p-0.5"
                    src="{{ asset('images/' . $research['avatar']) }}" alt="Avatar {{ $research['name'] }}">
            </div>
            <h2 class="text-md font-bold">{{ $research['name'] }}</h2>
            <h3 class="text-sm">{{ $research['expertise'] }}</h3>

            {{-- scholar link --}}
            <a class="flex justify-center items-center mt-2 hover:text-blue-500 transition duration-150"
                href="{{ $research['google_scholar'] }}">
                <img src="https://upload.wikimedia.org/wikipedia/commons/c/c7/Google_Scholar_logo.svg" alt="scholar"
                    class="h-6 w-6 mr-2">
                <span class="text-sm">Google Scholar</span>
            </a>

        </div>
    @endforeach
@endsection
