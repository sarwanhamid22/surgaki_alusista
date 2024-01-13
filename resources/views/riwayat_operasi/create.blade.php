@extends('layouts.app')
@section('content')

<div class="container px-6 mx-auto grid">
    <h2 class="my-6 text-2xl font-semibold text-gray-700">
        Tambah Data Riwayat Operasi Alusista
    </h2>
    <!-- CTA -->
    <a class="flex items-center justify-between p-4 mb-8 text-sm font-semibold text-purple-100 bg-purple-600 rounded-lg shadow-md focus:outline-none focus:shadow-outline-purple"
        href="{{route('riwayat.index')}}">
        <div class="flex items-center">
            <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 20 20">
                <path
                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                </path>
            </svg>
            <span>Tambah Data Riwayat Operasi Alusista</span>
        </div>
        <span>Kembali &RightArrow;</span>
    </a>


    <form action="{{route('riwayat.store')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="grid gap-6 mb-6 md:grid-cols-2">
            <div>

                <label for="alusista_id" class="block mb-2 text-sm font-medium text-gray-900">ID
                    Alusista</label>
                <select id="alusista_id" name="alusista_id"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                    <option selected>Pilih ID Alusista</option>
                    @foreach ($alusistas as $alusista)
                    <option value={{ $alusista->id }}>ALU00{{ $alusista->id }}</option>
                    @endforeach
                </select>


            </div>
            <div>
                <label for="nama_alusista" class="block mb-2 text-sm font-medium text-gray-900">Nama
                    Alusista</label>
                <input type="text" id="nama_alusista" name="nama_alusista"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                    placeholder="test" readonly>
            </div>
            <div>
                <label for="tanggal_operasi"
                    class="block mb-2 text-sm font-medium text-gray-900">Tanggal Operasi</label>
                <input type="date" id="tanggal_operasi" name="tanggal_operasi"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                    placeholder="Doe" required>
            </div>
            <div>
                <label for="lokasi_operasi" class="block mb-2 text-sm font-medium text-gray-900">Lokasi
                    Operasi</label>
                <input type="text" id="lokasi_operasi" name="lokasi_operasi"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                    placeholder="Flowbite" required>
            </div>
            <div>
                <label for="jumlah" class="block mb-2 text-sm font-medium text-gray-900">Jumlah</label>
                <input type="text" id="jumlah" name="jumlah"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                    placeholder="123-45-678" required>
            </div>
            <div>
                <label for="durasi" class="block mb-2 text-sm font-medium text-gray-900">Durasi</label>
                <input type="text" id="durasi" name="durasi"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                    placeholder="123-45-678" required>
            </div>


        </div>
        <div>
            <label for="tujuan" class="block mb-2 text-sm font-medium text-gray-900">Tujuan </label>
            <input type="text" id="tujuan" name="tujuan"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                placeholder="test" required>
        </div>
        <div class="mb-3">
            <div>
                <label for="catatan" class="block mb-2 text-sm font-medium text-gray-900">Isi
                    Catatan</label>
                <input id="catatan" type="hidden" name="catatan" required>
                <trix-editor input="catatan"></trix-editor>

            </div>
        </div>





        <button type="submit"
            class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center">Submit</button>
    </form>



</div>

<script>
    document.getElementById('alusista_id').addEventListener('change', function() {
        var alusistaId = this.value;

        fetch('/get-alusista-name/' + alusistaId)
            .then(response => response.json())
            .then(data => {
                document.getElementById('nama_alusista').value = data.nama_alusista;
            })
            .catch(error => console.error('Error:', error));
    });
</script>


@endsection