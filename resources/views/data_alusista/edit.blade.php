@extends('layouts.app')
@section('content')

<div class="container px-6 mx-auto grid">
    <h2 class="my-6 text-2xl font-semibold text-gray-700">
        Edit Data Alusista
    </h2>
    <!-- CTA -->
    <a class="flex items-center justify-between p-4 mb-8 text-sm font-semibold text-purple-100 bg-purple-600 rounded-lg shadow-md focus:outline-none focus:shadow-outline-purple"
        href="{{route('alusista.index')}}">
        <div class="flex items-center">
            <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 20 20">
                <path
                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                </path>
            </svg>
            <span>Edit Data Alusista</span>
        </div>
        <span>Kembali &RightArrow;</span>
    </a>

    <form method="POST" action="{{ route('alusista.update',$alusista->id) }}" enctype="multipart/form-data">
        @method('put')
        @csrf
        <div class="grid gap-6 mb-6 md:grid-cols-2">
            <div>
                <label for="nama_alusista" class="block mb-2 text-sm font-medium text-gray-900">Nama
                    Alusista</label>
                <input type="text" id="nama_alusista" name="nama_alusista"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                    placeholder="test" value="{{$alusista->nama_alusista}}">
            </div>
            <div>
                <label for="jenis" class="block mb-2 text-sm font-medium text-gray-900">Jenis</label>
                <input type="text" id="jenis" name="jenis"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                    placeholder="Doe" value="{{$alusista->jenis}}">
            </div>
            <div>
                <label for="produsen"
                    class="block mb-2 text-sm font-medium text-gray-900">Produsen</label>
                <input type="text" id="produsen" name="produsen"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                    placeholder="Flowbite" value="{{$alusista->produsen}}">
            </div>
            <div>
                <label for="tahun_pembuatan" class="block mb-2 text-sm font-medium text-gray-900">Tahun
                    Pembuatan</label>
                <input type="text" id="tahun_pembuatan" name="tahun_pembuatan"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                    placeholder="123-45-678" value="{{$alusista->tahun_pembuatan}}">
            </div>
            <div>

                <label for="status_operasional"
                    class="block mb-2 text-sm font-medium text-gray-900">Status Operasional</label>
                <select id="status_operasional" name="status_operasional"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                    <option value="aktif" {{ $alusista->status_operasional == 'aktif' ? 'selected' : '' }}>Aktif
                    </option>
                    <option value="pensiun" {{ $alusista->status_operasional == 'pensiun' ? 'selected' : '' }}>Pensiun
                    </option>
                    <option value="dalam_pemeliharaan" {{ $alusista->status_operasional == 'dalam_pemeliharaan' ?
                        'selected' : '' }}>Dalam Pemeliharaan</option>
                    <option value="dalam_peningkatan" {{ $alusista->status_operasional == 'dalam_peningkatan' ?
                        'selected' : '' }}>Dalam Peningkatan</option>
                    <option value="cadangan" {{ $alusista->status_operasional == 'cadangan' ? 'selected' : ''
                        }}>Cadangan</option>
                    <option value="tidak_aktif" {{ $alusista->status_operasional == 'tidak_aktif' ? 'selected' : ''
                        }}>Tidak Aktif</option>
                </select>



            </div>
            <div>
                <label for="lokasi" class="block mb-2 text-sm font-medium text-gray-900">Lokasi</label>
                <input type="text" id="lokasi" name="lokasi"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                    placeholder="" value="{{$alusista->lokasi}}">
            </div>
            <div>
                <label for="kapasitas"
                    class="block mb-2 text-sm font-medium text-gray-900">Kapasitas</label>
                <input type="text" id="kapasitas" name="kapasitas"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                    placeholder="" value="{{$alusista->kapasitas}}">
            </div>
            <div>
                <label for="spesifikasi_utama"
                    class="block mb-2 text-sm font-medium text-gray-900">Spesifikasi Utama</label>
                <input type="text" id="spesifikasi_utama" name="spesifikasi_utama"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                    placeholder="" value="{{$alusista->spesifikasi_utama}}">
            </div>
        </div>

        <div class="mb-5">
            <label class="block mb-2 text-sm font-medium text-gray-900" for="gambar">Upload
                Gambar</label>
            <input type="hidden" name="oldImage" value="{{ $alusista->gambar }}">
            @if($alusista->gambar)
            <img src="{{asset('storage/'.$alusista->gambar)}}" class="w-80 rounded-md img-preview" alt="image">
            @else
            <img class="w-80 rounded-md img-preview">

            @endif
            <input
                class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 focus:outline-none"
                id="gambar" type="file" name="gambar" onchange="previewImage()">

        </div>



        <button type="submit"
            class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center">Submit</button>
    </form>



</div>

<script>
    function previewImage() {
        const image = document.querySelector('#gambar');
        const imgPreview = document.querySelector('.img-preview');

        imgPreview.style.display = 'block';

        const oFReader = new FileReader();
        oFReader.readAsDataURL(image.files[0]);

        oFReader.onload = function(oFREvent) {
            imgPreview.src = oFREvent.target.result;
        };
    }

   
</script>


@endsection