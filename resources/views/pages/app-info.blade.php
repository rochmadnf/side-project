@extends('app')

@section('content')
    <article class="prose prose-slate prose-p:text-justify prose-sm prose-a:text-blue-500 prose-a:font-medium">
        <h6 class="font-bold text-lg"></h6>
        <p>
            <b>{{ env('APP_NAME') }}</b> merupakan aplikasi yang dibuat dengan tujuan mempermudah petani
            atau
            masyarakat umum untuk mengecek <a href="{{ route('standardMutu') }}">Standar Mutu</a> dari <b>Bawang
                Merah</b>
            yang hasilkan saat panen.
        </p>

        <p>
            Aplikasi ini dipelopori oleh <a href="{{ route('researcher') }}">Tim
                Peneliti</a> terbaik dari Program Studi Matematika Jurusan Matematika Fakultas Matematika dan Ilmu
            Pengetahuan Alam Universitas Tadulako.
        </p>

        <h3>Credit</h3>
        <ul class="-ml-2 font-medium">
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
    </article>
    <x-btn-back-home />
@endsection
