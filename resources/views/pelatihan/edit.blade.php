@extends('layouts.app')
@section('content')

<div class="container px-6 mx-auto grid">
    <h2 class="my-6 text-2xl font-semibold text-gray-700">
        Edit Materi Pelatihan
    </h2>
    <!-- CTA -->
    <a class="flex items-center justify-between p-4 mb-8 text-sm font-semibold text-purple-100 bg-purple-600 rounded-lg shadow-md focus:outline-none focus:shadow-outline-purple"
        href="{{route('pelatihan.index')}}">
        <div class="flex items-center">
            <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 20 20">
                <path
                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                </path>
            </svg>
            <span>Edit Materi Pelatihan</span>
        </div>
        <span>Kembali &RightArrow;</span>
    </a>


    <form action="{{route('pelatihan.update',$pelatihan->id)}}" method="POST" enctype="multipart/form-data">
        @method('PUT')
        @csrf
        <div class="grid gap-6 mb-6 md:grid-cols-2">
            <div>
                <label for="judul_pelatihan" class="block mb-2 text-sm font-medium text-gray-900">Judul
                    Pelatihan</label>
                <input type="text" id="judul_pelatihan" name="judul_pelatihan"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                    placeholder="test" value="{{$pelatihan->judul_pelatihan}}">
            </div>
            <div>

                <label for="kategori" class="block mb-2 text-sm font-medium text-gray-900">Status
                    Operasional</label>
                <select id="kategori" name="kategori"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                    <option selected>pilih kategori</option>
                    <option value="pertahanan_nasional">Pertahanan Nasional</option>
                    <option value="teknologi_militer">Teknologi Militer</option>
                    <option value="kerjasama_internasional:">Kerjasama Internasional:</option>
                    <option value="latihan_militer">Latihan Militer</option>
                </select>


            </div>
            <div>
                <label for="link" class="block mb-2 text-sm font-medium text-gray-900">Link
                    Materi</label>
                <input type="text" id="link" name="link"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                    placeholder="Doe" value="{{$pelatihan->link}}">
            </div>




        </div>


        <div class="mb-5">
            <label class="block mb-2 text-sm font-medium text-gray-900" for="gambar">Upload
                Gambar</label>
            <input type="hidden" name="oldImage" value="{{ $pelatihan->gambar }}">
            @if($pelatihan->gambar)
            <img src="{{asset('storage/'.$pelatihan->gambar)}}" class="w-80 rounded-md img-preview" alt="image">
            @else
            <img class="w-80 rounded-md img-preview">

            @endif
            <input
                class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 focus:outline-none"
                id="gambar" type="file" name="gambar" onchange="previewImage()">

        </div>

        <div class="mb-3">
            <div>
                <label for="deskripsi_pelatihan"
                    class="block mb-2 text-sm font-medium text-gray-900">Isi Materi Pelatihan</label>
                <input id="deskripsi_pelatihan" type="hidden" name="deskripsi_pelatihan"
                    value="{!!html_entity_decode($pelatihan->deskripsi_pelatihan)!!}">
                <trix-editor input="deskripsi_pelatihan"></trix-editor>

            </div>
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