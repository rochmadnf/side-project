@extends('app')

@section('page_title', 'Tim Peneliti')

@section('content')
    @foreach ($researcher as $research)
        <div class="flex flex-col justify-center items-center p-4 mb-4 rounded-md shadow-md bg-slate-50/30 shadow-gray-400">
            <div class="mb-4">
                <img class="rounded-full" src="https://ui-avatars.com/api/?name=BM&background=random"
                    alt="Avatar {{ $research['name'] }}">
            </div>
            <h2 class="text-md font-bold">{{ $research['name'] }}</h2>
            <h3 class="text-sm">{{ $research['expertise'] }}</h3>

            {{-- scholar link --}}
            <a class="flex justify-center items-center mt-2 hover:text-blue-500" href="{{ $research['google_scholar'] }}">
                <img src="https://upload.wikimedia.org/wikipedia/commons/c/c7/Google_Scholar_logo.svg" alt="scholar"
                    class="h-6 w-6 mr-2">
                <span class="text-sm">Google Scholar</span>
            </a>

        </div>
    @endforeach
@endsection
