@extends('webview')

@section('content')
    <article
        class="prose prose-slate prose-td:border prose-tr:border prose-th:border prose-th:align-middle unmobile:prose-sm prose-p:text-justify prose-th:text-center">
        <p>
            <strong>Standar Mutu</strong> &mdash; adalah kesepakatan yang telah disepakati bersama oleh sekelompok orang
            atau
            organisasi
            dan telah didokumentasikan yang terdiri dari spesifikasi teknis dan kriteria akurat yang digunakan sebagai
            peraturan, petunjuk atau definisi tertentu untuk menjamin kualitas suatu barang, produk, proses atau jasa sesuai
            dengan yang telah dinyatakan dan disepakati.
        </p>

        <p>
            <strong>Pemerintah</strong> melalui
            <strong>Badan Standardisasi Nasional</strong> mengeluarkan standar mutu untuk komoditas bawang merah yang
            tercantum pada
            <strong>Standar Nasional Indonesia 01-3159-1992 </strong> sebagai berikut :
        </p>

        <table class="border">
            <caption class="caption-top mb-1">
                Tabel Standar Mutu Bawang Merah
            </caption>
            <thead>
                <tr>
                    <th rowspan="2">Karakteristik</th>
                    <th colspan="2">Syarat</th>
                </tr>
                <tr>
                    <th>Mutu I</th>
                    <th>Mutu I</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($items as $item)
                    <tr>
                        <td>{{ $item[0] }}</td>
                        <td>{{ $item[1] }}</td>
                        <td>{{ $item[2] }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <p>Berikut penjelasan dari karakteristik pada tabel diatas, yaitu : </p>
        <ol class="-ml-2">
            <li>
                <b class="block">Kesamaan Sifat Varietas</b>
                <span>
                    Kesamaan Sifat Varietas dinyatakan seragam apabila bawang merah dalam satu slot
                    seragam dalam bentuk umbi yang umum.
                </span>
            </li>

            <li>
                <b class="block">Ketuaan</b>
                <span>
                    Bawang merah dinyatakan tua, apabila bawang merah telah mencapai tingkat
                    pertumbuhan fisiologis yang cukup tua, dimana umbinya padat dan tidak lunak.
                </span>
            </li>

            <li>
                <b class="block">
                    Kekerasan
                </b>
                <span>
                    Bawang merah setelah mengalami curing dengan baik cukup keras dan tidak lunak apabila
                    ditekan dengan jari. Pengukuran kekerasan bawang merah bisa secara organoleptik
                    maupun menggunakan alat penetrometer.
                </span>
            </li>

            <li>
                <b class="block">
                    Diameter
                </b>
                <span>
                    Diameter adalah dimensi terbesar diukur tegak lurus pada garis lurus sepanjang batang
                    sampai akar. Pengukuran diameter menggunakan alat jangka sorong nst 0,05 mm.
                    Rumus :
                    <span class="bg-gray-400 text-white rounded-md block p-1 text-[0.675rem] leading-[1rem]">Skala utama +
                        (banyaknya
                        skala nonius
                        ×
                        nst)</span>
                </span>
            </li>

            <li>
                <b class="block">
                    Kerusakan
                </b>
                <span>
                    Bawang merah dinyatakan rusak apabila mengalami kerusakan atau cacat oleh sebab
                    fisiologis, mekanis dan lain-lain yang terlihat pada permukaan.
                </span>
            </li>

            <li>
                <b class="block">
                    Kebusukan
                </b>
                <span>
                    Bawang merah dinyatakan busuk apabila mengalami pembusukan akibat kerusakan
                    biologis.
                </span>
            </li>

            <li>
                <b class="block">
                    Kotoran
                </b>
                <span>
                    Yang dimaksud kotoran adalah semua bahan bukan bawang merah atau benda asing
                    lainnya yang menempel atau berada dalam kemasan, yang mempengaruhi
                    kenampakannya, bahan penyekat/pembungkus tidak dianggap sebagai kotoran.
                </span>
            </li>

            <li>
                <b class="block">
                    Kekeringan
                </b>
                <span>
                    Kekeringan pada bawang merah adalah berdasarkan pada lamanya masa penyimpanan.
                </span>
            </li>

            <li>
                <b class="block">
                    Kadar Air
                </b>
                <span>
                    Kadar air adalah banyaknya air yang terkandung dalam bahan yang dinyatakan dalam
                    persen.Kadar air merupakan salah satu faktor yang memegang peranan penting pada bahan
                    pangan karena dapat mempengaruhi kualitas pada bahan pangan.
                </span>
            </li>
        </ol>

    </article>
@endsection
