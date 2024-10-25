@extends('layouts.app')

@section('title', 'Uji Data')

@section('vite')
    @vite('resources/js/pages/mutu-check.js')
@endsection

@section('content')
    <x-main-card>
        <div class="h-full w-full space-y-10">
            <div class="flex h-full w-full items-center justify-center gap-x-6">
                <div class="flex h-[540px] w-1/2 flex-col items-center justify-between gap-y-10 rounded-xl bg-rose-100 py-6">
                    <x-logo />

                    <img src="{{ asset('assets/illustration/asset-6.png') }}" class="w-72" alt="Map">

                    <h1 class="select-none border-b-4 border-b-gray-900 text-3xl font-bold uppercase tracking-wide">Uji Data
                    </h1>
                </div>

                @if (session()->has('success'))
                    <input class="hidden" type="hidden" id="flashMessage" value="{{ session('success') }}" />
                @endif

                <div class="h-[540px] w-1/2 overflow-y-auto rounded-xl border border-slate-200 px-6 py-4">
                    <p class="border-b border-slate-200 pb-2 text-justify tracking-wide">Silakan jawab pertanyaan dibawah
                        ini
                        untuk mengetahui
                        <strong>Mutu Bawang Merah</strong>
                        Anda.
                    </p>

                    <form class="mt-6 space-y-4" action="{{ route('k-means') }}" method="POST">
                        @csrf
                        <x-select name="uniform" label="Bagaimana kesamaan sifat pada Bawang Merah?" :multiple="false"
                            optionLabel="Seragam" disabled />

                        <x-input name="hst" label="Berapa Hari Setelah Tanam (HST) pada Bawang Merah?" placeholder="60"
                            :value="old('hst') ?? ''" autofocus />

                        <x-select name="texture" label="Bagaimana tekstur kekerasan pada Bawang Merah?">
                            <option value="keras" selected>Keras</option>
                            <option value="cukup keras">Cukup Keras</option>
                        </x-select>

                        <x-select name="is_dry" label="Bagaimana kondisi pada saat Bawang Merah disimpan?"
                            :multiple="false" optionLabel="Simpan Kering" disabled />

                        <x-select name="is_dirty" label="Apakah terdapat kotoran pada Bawang Merah?" :multiple="false"
                            optionLabel="Tidak Ada" disabled />

                        <x-select name="is_rotting" label="Apakah kondisi Bawang Merah busuk?">
                            <option value="tidak busuk" selected>Tidak</option>
                            <option value="busuk">Ya</option>
                        </x-select>

                        <x-select name="is_damage" label="Apakah kondisi Bawang Merah rusak?">
                            <option value="tidak rusak" selected>Tidak</option>
                            <option value="rusak">Ya</option>
                        </x-select>

                        <x-input name="moisture_content" label="Berapa jumlah kadar air pada Bawang Merah?"
                            placeholder="79,23" :value="old('moisture_content') ?? ''" />
                        <x-input name="diameter" label="Berapa ukuran diameter pada Bawang Merah?" placeholder="0,532"
                            :value="old('diameter') ?? ''" />


                        <button type="submit"
                            class="w-full rounded-md bg-blue-500 px-6 py-2 font-medium text-white transition-colors duration-200 hover:bg-blue-500/70">Uji</button>
                    </form>

                </div>

            </div>
        </div>
    </x-main-card>
@endsection
