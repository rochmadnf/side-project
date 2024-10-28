@extends('layouts.app')

@section('title', 'Peta Kluster')

@section('content')
    <x-main-card>
        <div class="h-full w-full space-y-10">
            <div class="flex h-full w-full items-center justify-center gap-x-6">
                <div class="flex h-[540px] w-1/2 flex-col items-center justify-between gap-y-10 rounded-xl bg-rose-100 py-6">
                    <x-logo />

                    <img src="{{ asset('assets/illustration/asset-5.png') }}" class="w-72" alt="Map">

                    <h1 class="select-none border-b-4 border-b-gray-900 text-3xl font-bold uppercase tracking-wide">Peta
                        Kluster
                    </h1>
                </div>

                <div class="flex h-[540px] w-1/2 flex-col gap-y-2 rounded-xl border border-slate-200 p-4">
                    <div class="mb-1.5 w-full space-y-2 border-b border-slate-200 pb-1.5">
                        <div role="article"
                            class="prose transition-colors duration-200 prose-p:text-justify prose-a:text-blue-500 hover:prose-a:text-blue-600 prose-strong:text-lg">
                            <p><strong>Peta Kluster</strong> &mdash; didapatkan berdasarkan hasil dari penelitian dengan
                                judul "<a
                                    href="https://pubs.aip.org/aip/acp/article-abstract/2719/1/040003/2887822/Clustering-the-quality-of-Palu-Shallot-Allium?redirectedFrom=fulltext">Clustering
                                    the quality of Palu Shallot (Allium ascalonium l.) using
                                    the
                                    Kohonen algorithm</a>"</p>
                        </div>
                        <div>
                            <h6 class="text-lg font-bold">Keterangan:</h6>
                            <div class="ml-2 flex items-center justify-start gap-x-2">
                                <span class="h-2 w-8 bg-[#EA1522]"></span>
                                <p class="text-base font-light tracking-wide">Kelompok Daerah Bermutu I</p>
                            </div>
                            <div class="ml-2 flex items-center justify-start gap-x-2">
                                <span class="h-2 w-8 bg-[#B7E523]"></span>
                                <p class="text-base font-light tracking-wide">Kelompok Daerah Bermutu II</p>
                            </div>
                        </div>
                    </div>
                    <div class="w-full grow overflow-y-auto">
                        <img src="{{ asset('assets/cluster-map.jpg') }}" alt="Peta Kluster"
                            class="rounded-xl shadow-md shadow-gray-200">
                    </div>
                </div>

            </div>
        </div>
    </x-main-card>
@endsection
