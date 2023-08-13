@extends('app')

@section('content')
    <h6 class="font-bold text-lg">{{ env('APP_NAME') }}</h6>
    <p class="text-justify leading-snug mb-4">merupakan aplikasi yang dibuat dengan tujuan mempermudah petani atau
        masyarakat umum untuk mengecek <a href="#" class="text-blue-500 font-medium">Standar Mutu</a> dari <b>Bawang
            Merah</b>
        yang hasilkan saat panen.
    </p>

    <p class="text-justify leading-snug">
        Aplikasi ini dipelopori oleh <a href="{{ route('researcher') }}" class="text-blue-500 font-medium">Tim
            Peneliti</a> terbaik dari Program Studi Matematika Jurusan Matematika Fakultas Matematika dan Ilmu
        Pengetahuan Alam Universitas Tadulako.
    </p>

    <h6 class="mt-6 font-bold text-lg">Credit</h6>
    <ul class="ml-4 text-sm font-medium list-disc mb-6">
        <li>
            <a href="https://untad.ac.id">Universitas Tadulako</a>
        </li>

        <li>
            <a href="https://instagram.com/rochmadnf">Rochmad Nurul Fahmi</a>
        </li>
        <li>
            <a
                href="https://www.freepik.com/free-vector/farmers-using-agricultural-technology-vector_16340308.htm#query=farmer&position=8&from_view=search&track=sph">Image
                by rawpixel.com on Freepik</a>
        </li>
    </ul>

    <x-btn-back-home />
@endsection
