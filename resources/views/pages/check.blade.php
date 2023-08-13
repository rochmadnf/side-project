@extends('app')

@section('vite_resource')
    @vite('resources/js/check.js')
@endsection

@section('content')
    <p class="text-sm text-justify text-gray-900 -mt-4">Silakan jawab pertanyaan dibawah ini untuk mengetahui
        <strong>Mutu Bawang Merah</strong>
        Anda.
    </p>

    <form id="formCheck" class="mt-6 shadow-0 shadow-slate-300 py-4 px-4 rounded-md bg-white">
        <div class="mb-4">
            <label class="text-sm block mb-2" for="ketuaan">Berapa hari setelah tanam (HST) Bawang Merah Anda?</label>
            <input placeholder="1" required
                class="block w-full p-2 text-gray-900 border border-gray-300 rounded-lg sm:text-xs focus:ring-rose-500 focus:border-rose-500"
                type="text" inputmode="tel" name="ketuaan" id="ketuaan">
        </div>

        <div class="mb-4">
            <label class="text-sm block mb-2" for="kekerasan">Bagaimana tekstur kekerasan Bawang Merah?</label>
            <select id="kekerasan" name="kekerasan" required
                class="border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-rose-500 focus:border-rose-500 block w-full p-2">
                <option disabled>--Pilih Kekerasan--</option>
                <option value="0">Keras</option>
                <option value="1">Cukup Keras</option>
            </select>
        </div>

        <div class="mb-4">
            <label class="text-sm block mb-2" for="kebusukan">Kondisi Bawang Merah busuk?</label>
            <select id="kebusukan" name="kebusukan" required
                class="border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-rose-500 focus:border-rose-500 block w-full p-2">
                <option disabled>--Pilih Kebusukan--</option>
                <option value="1">Ya</option>
                <option value="0">Tidak</option>
            </select>
        </div>

        <div class="mb-4">
            <label class="text-sm block mb-2" for="kerusakan">Kondisi Bawang Merah rusak?</label>
            <select id="kerusakan" name="kerusakan" required
                class="border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-rose-500 focus:border-rose-500 block w-full p-2">
                <option disabled>--Pilih Kerusakan--</option>
                <option value="1">Ya</option>
                <option value="0">Tidak</option>
            </select>
        </div>

        <div class="mb-4">
            <label class="text-sm block mb-2" for="kadar_air">Jumlah kadar air pada Bawang Merah?</label>
            <input required
                class="block w-full p-2 text-gray-900 border border-gray-300 rounded-lg sm:text-xs focus:ring-rose-500 focus:border-rose-500"
                type="text" name="kadar_air" id="kadar_air" placeholder="0">
        </div>

        <div class="mb-4">
            <label class="text-sm block mb-2" for="diameter">Ukuran diameter Bawang Merah?</label>
            <input required
                class="block w-full p-2 text-gray-900 border border-gray-300 rounded-lg sm:text-xs focus:ring-rose-500 focus:border-rose-500"
                type="text" name="diameter" id="diameter" placeholder="0">
        </div>

        <button type="submit"
            class="w-full text-white bg-gradient-to-r from-rose-400 via-rose-500 to-rose-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-rose-300 dark:focus:ring-rose-800 font-semibold tracking-wider rounded-lg text-sm px-4 py-2 text-center mr-2 mb-2">Cek
            Mutu</button>
    </form>
@endsection
