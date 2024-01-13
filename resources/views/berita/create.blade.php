@extends('layouts.app')
@section('content')

<div class="container px-6 mx-auto grid">
    <h2 class="my-6 text-2xl font-semibold text-gray-700">
        Tambah Berita Alusista
    </h2>
    <!-- CTA -->
    <a class="flex items-center justify-between p-4 mb-8 text-sm font-semibold text-purple-100 bg-purple-600 rounded-lg shadow-md focus:outline-none focus:shadow-outline-purple"
        href="{{route('berita.index')}}">
        <div class="flex items-center">
            <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 20 20">
                <path
                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                </path>
            </svg>
            <span>Tambah Berita Alusista</span>
        </div>
        <span>Kembali &RightArrow;</span>
    </a>


    <form action="{{route('berita.store')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="grid gap-6 mb-6 md:grid-cols-2">
            <div>
                <label for="judul_berita" class="block mb-2 text-sm font-medium text-gray-900">Judul
                    Berita</label>
                <input type="text" id="judul_berita" name="judul_berita"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                    placeholder="test" required>
            </div>
            <div>
                <label for="penulis"
                    class="block mb-2 text-sm font-medium text-gray-900">Penulis</label>
                <input type="text" id="penulis" name="penulis"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                    placeholder="Doe" required>
            </div>
            <div>
                <label for="tanggal_publikasi"
                    class="block mb-2 text-sm font-medium text-gray-900">Penulis</label>
                <input type="date" id="tanggal_publikasi" name="tanggal_publikasi"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                    placeholder="Doe" required>
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


        </div>


        <div class="mb-3">
            <label class="block mb-2 text-sm font-medium text-gray-900" for="gambar">Upload
                file</label>
            <input
                class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 focus:outline-none"
                aria-describedby="gambar" id="gambar" name="gambar" type="file">
            <p class="mt-1 text-sm text-gray-500" id="gambar">SVG, PNG, JPG or GIF (MAX.
                800x400px).</p>


        </div>

        <div class="mb-3">
            <div>
                <label for="deskripsi_berita" class="block mb-2 text-sm font-medium text-gray-900">Isi
                    Berita</label>
                <input id="deskripsi_berita" type="hidden" name="deskripsi_berita" required>
                <trix-editor input="deskripsi_berita"></trix-editor>

            </div>
        </div>



        <button type="submit"
            class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center">Submit</button>
    </form>



</div>
@endsection