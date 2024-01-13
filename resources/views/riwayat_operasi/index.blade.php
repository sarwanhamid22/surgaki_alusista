@extends('layouts.app')
@section('content')

<div class="container px-6 mx-auto grid">
    <h2 class="my-6 text-2xl font-semibold text-gray-700">
        Riwayat Operasi Alusista
    </h2>
    <!-- CTA -->
    <a class="flex items-center justify-between p-4 mb-8 text-sm font-semibold text-purple-100 bg-purple-600 rounded-lg shadow-md focus:outline-none focus:shadow-outline-purple"
        href="{{route('riwayat.create')}}">
        <div class="flex items-center">
            <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 20 20">
                <path
                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                </path>
            </svg>
            <span>Riwayat Operasi Alusista</span>
        </div>
        <span>Tambah &RightArrow;</span>
    </a>

    <div class="w-full overflow-hidden rounded-lg shadow-xs">
        <div class="w-full overflow-x-auto">
            <table class="w-full whitespace-no-wrap">
                <thead>
                    <tr
                        class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b bg-gray-50">
                        <th class="px-4 py-3">ID Alusista</th>
                        <th class="px-4 py-3">Tanggal Operasi</th>
                        <th class="px-4 py-3">Lokasi Operasi</th>
                        <th class="px-4 py-3">Jumlah</th>
                        <th class="px-4 py-3">Tujuan</th>
                        <th class="px-4 py-3">durasi</th>
                        <th class="px-4 py-3">Detail</th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y">
                    @foreach($riwayat as $data)


                    <tr class="text-gray-700">
                        <td class="px-4 py-3">
                            <div class="flex items-center text-sm">
                                <!-- Avatar with inset shadow -->
                                <div class="relative hidden w-8 h-8 mr-3 rounded-full md:block">
                                    <img class="object-cover w-full h-full rounded-full"
                                        src="{{ asset('storage/' . $data->alusista->gambar) }}" alt="" loading="lazy" />
                                    <div class="absolute inset-0 rounded-full shadow-inner" aria-hidden="true"></div>
                                </div>
                                <div>
                                    <p class="font-semibold">{{ $data->alusista->nama_alusista }}</p>
                                    <p class="text-xs text-gray-600">
                                        ALU00{{ $data->alusista_id }}
                                    </p>
                                </div>
                            </div>
                        </td>
                        <td class="px-4 py-3 text-sm">
                            {{ $data->tanggal_operasi }}
                        </td>
                        <td class="px-4 py-3 text-xs">
                            {{ $data->lokasi_operasi }}
                        </td>
                        <td class="px-4 py-3 text-sm">
                            {{ $data->jumlah }}
                        </td>
                        <td class="px-4 py-3 text-sm">
                            {{ $data->tujuan }}
                        </td>
                        <td class="px-4 py-3 text-sm">
                            {{ $data->durasi }}
                        </td>

                        <td class="px-4 py-3 text-sm">


                            <!-- Modal toggle -->
                            <button data-modal-target="default{{ $data->id }}"
                                data-modal-toggle="default{{ $data->id }}"
                                class="block text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center"
                                type="button">
                                Detail
                            </button>

                            <!-- Main modal -->
                            <div id="default{{ $data->id }}" tabindex="-1" aria-hidden="true"
                                class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                                <div class="relative p-4 w-full max-w-2xl max-h-full">
                                    <!-- Modal content -->
                                    <div class="relative bg-white rounded-lg shadow">
                                        <!-- Modal header -->
                                        <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t">
                                            <h3 class="text-xl font-semibold text-gray-900">
                                                Detail Data Operasi {{ $data->alusista->nama_alusista }}
                                            </h3>
                                            <button type="button"
                                                class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center"
                                                data-modal-hide="default{{ $data->id }}">
                                                <svg class="w-3 h-3" aria-hidden="true"
                                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                                    <path stroke="currentColor" stroke-linecap="round"
                                                        stroke-linejoin="round" stroke-width="2"
                                                        d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                                                </svg>
                                                <span class="sr-only">Close modal</span>
                                            </button>
                                        </div>
                                        <!-- Modal body -->
                                        <div class="p-4 md:p-5 space-y-4">
                                            <img class="w-75" src="{{ asset('storage/' . $data->alusista->gambar) }}"
                                                alt="">
                                            <div>

                                                <p class="mb-3 text-gray-500">Nama Alusista: {{
                                                    $data->alusista->nama_alusista }}. Ini adalah
                                                    sebuah {{ $data->alusista->jenis }} yang diproduksi oleh <br> {{
                                                    $data->alusista->produsen }} pada tahun {{
                                                    $data->alusista->tahun_pembuatan }}. Saat ini, status
                                                    operasionalnya
                                                    adalah {{ $data->alusista->status_operasional }} dan berlokasi di {{
                                                    $data->alusista->lokasi }}.<br> Alusista ini memiliki kapasitas {{
                                                    $data->alusista->Kapasitas }} dan spesifikasi utama sebagai berikut:
                                                    <br>
                                                    {{
                                                    $data->alusista->spesifikasi_utama }}.
                                                </p>
                                                <br>
                                                <p>Terkait dengan riwayat operasinya, Alusista ini terakhir kali
                                                    dioperasikan pada {{ $data->tanggal_operasi }} <br> di lokasi {{
                                                    $data->lokasi_operasi }}. Jumlah yang digunakan adalah {{
                                                    $data->jumlah }} dengan tujuan {{ $data->tujuan }}. <br> Durasi
                                                    operasi
                                                    mencapai {{ $data->durasi }}.<br> Catatan
                                                    tambahan:{!!html_entity_decode($data->catatan)!!}.</p>

                                            </div>


                                        </div>
                                        <!-- Modal footer -->
                                        <div class="flex items-center p-4 md:p-5 border-t border-gray-200 rounded-b">
                                            <button data-modal-hide="default{{ $data->id }}" type="button"
                                                class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">I
                                                accept</button>
                                            <button data-modal-hide="default{{ $data->id }}" type="button"
                                                class="ms-3 text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10">Decline</button>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            {{-- <div>
                                <a href="{{ route('alusista.edit', $data->id) }}">Edit</a>
                            </div> --}}


                        </td>

                    </tr>
                    @endforeach




                </tbody>
            </table>
        </div>

    </div>

    <!-- Charts -->


</div>
@endsection