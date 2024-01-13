@extends('layouts.app')
@section('content')


@can('is-admin')






<div class="container px-6 mx-auto grid">
    <h2 class="my-6 text-2xl font-semibold text-gray-700">
        Berita Terbaru Alusista
    </h2>
    <!-- CTA -->


    <a class="flex items-center justify-between p-4 mb-8 text-sm font-semibold text-purple-100 bg-purple-600 rounded-lg shadow-md focus:outline-none focus:shadow-outline-purple"
        href="{{route('berita.create')}}">
        <div class="flex items-center">
            <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 20 20">
                <path
                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                </path>
            </svg>
            <span>Tambah Berita</span>
        </div>
        <span>Tambah &RightArrow;</span>
    </a>

    @can('is-admin')
    <div class="w-full overflow-hidden rounded-lg shadow-xs">
        <div class="w-full overflow-x-auto">
            <table class="w-full whitespace-no-wrap">
                <thead>
                    <tr
                        class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b bg-gray-50">
                        <th class="px-4 py-3">Judul Berita</th>
                        <th class="px-4 py-3">Kategori</th>
                        <th class="px-4 py-3">Tanggal Publikasi</th>
                        <th class="px-4 py-3">Penulis</th>
                        <th class="px-4 py-3">Action</th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y">
                    @foreach($berita as $data)
                    <tr class="text-gray-700">
                        <td class="px-4 py-3">
                            <div class="flex items-center text-sm">
                                <!-- Avatar with inset shadow -->
                                <div>
                                    <p class="font-semibold">{{ $data->judul_berita }}</p>

                                </div>
                            </div>
                        </td>
                        <td class="px-4 py-3 text-sm">
                            {{ $data->kategori }}
                        </td>
                        <td class="px-4 py-3 text-xs">
                            {{ $data->tanggal_publikasi }}
                        </td>
                        <td class="px-4 py-3 text-sm">
                            {{ $data->penulis }}
                        </td>
                        <td class="px-4 py-3 text-sm">
                            <div class="flex">
                                <a href="berita/{{ $data->id }} ">
                                    <span
                                        class="bg-blue-100 text-blue-800 text-xs font-medium inline-flex items-center px-2.5 py-0.5 rounded">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" style="fill: rgba(0, 0, 0, 1);transform: ;msFilter:;">
                                            <path
                                                d="M12 9a3.02 3.02 0 0 0-3 3c0 1.642 1.358 3 3 3 1.641 0 3-1.358 3-3 0-1.641-1.359-3-3-3z">
                                            </path>
                                            <path
                                                d="M12 5c-7.633 0-9.927 6.617-9.948 6.684L1.946 12l.105.316C2.073 12.383 4.367 19 12 19s9.927-6.617 9.948-6.684l.106-.316-.105-.316C21.927 11.617 19.633 5 12 5zm0 12c-5.351 0-7.424-3.846-7.926-5C4.578 10.842 6.652 7 12 7c5.351 0 7.424 3.846 7.926 5-.504 1.158-2.578 5-7.926 5z">
                                            </path>
                                        </svg>

                                    </span>

                                </a>

                                <a href="berita/{{ $data->id }}/edit " class="mx-2">
                                    <span
                                        class="bg-blue-100 text-blue-800 text-xs font-medium inline-flex items-center px-2.5 py-0.5 rounded">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" style="fill: rgba(0, 0, 0, 1);transform: ;msFilter:;">
                                            <path
                                                d="m7 17.013 4.413-.015 9.632-9.54c.378-.378.586-.88.586-1.414s-.208-1.036-.586-1.414l-1.586-1.586c-.756-.756-2.075-.752-2.825-.003L7 12.583v4.43zM18.045 4.458l1.589 1.583-1.597 1.582-1.586-1.585 1.594-1.58zM9 13.417l6.03-5.973 1.586 1.586-6.029 5.971L9 15.006v-1.589z">
                                            </path>
                                            <path
                                                d="M5 21h14c1.103 0 2-.897 2-2v-8.668l-2 2V19H8.158c-.026 0-.053.01-.079.01-.033 0-.066-.009-.1-.01H5V5h6.847l2-2H5c-1.103 0-2 .897-2 2v14c0 1.103.897 2 2 2z">
                                            </path>
                                        </svg>

                                    </span>

                                </a>

                                <form action="{{ route('berita.destroy',$data->id) }}" method="POST">
                                    @method('delete')
                                    @csrf


                                    <button id="delete" type="button" onclick="deleteArtikel({{  $data->id }})"><span
                                            class="bg-blue-100 text-blue-800 delete text-xs font-medium inline-flex items-center px-2.5 py-0.5 rounded">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24"
                                                style="fill: rgba(0, 0, 0, 1);transform: ;msFilter:;">
                                                <path
                                                    d="M20 2H4c-1.103 0-2 .897-2 2v12c0 1.103.897 2 2 2h3v3.767L13.277 18H20c1.103 0 2-.897 2-2V4c0-1.103-.897-2-2-2zm0 14h-7.277L9 18.233V16H4V4h16v12z">
                                                </path>
                                                <path
                                                    d="M9.707 13.707 12 11.414l2.293 2.293 1.414-1.414L13.414 10l2.293-2.293-1.414-1.414L12 8.586 9.707 6.293 8.293 7.707 10.586 10l-2.293 2.293z">
                                                </path>
                                            </svg>

                                        </span></button>
                                </form>

                                {{-- <a href="admin-artikel/{{ $post->id }}">


                                </a> --}}

                            </div>

                        </td>
                    </tr>

                    @endforeach





                </tbody>
            </table>
        </div>

        <div class="mx-10 mt-5">
            {{ $berita->links() }}

        </div>
    </div>
    @endcan


    <!-- Charts -->


</div>





@else

<section class="dark:bg-gray-800">
    <div class="container max-w-6xl p-6 mx-auto space-y-6 sm:space-y-12">
        <a rel="noopener noreferrer" href="#"
            class="block max-w-sm gap-3 mx-auto sm:max-w-full group hover:no-underline focus:no-underline lg:grid lg:grid-cols-12">
            <img src="https://source.unsplash.com/random/480x360" alt=""
                class="object-cover w-full h-64 rounded sm:h-96 lg:col-span-7">
            <div class="p-6 space-y-2 lg:col-span-5">
                <h3 class="text-2xl font-semibold sm:text-4xl group-hover:underline group-focus:underline">Noster
                    tincidunt reprimique ad pro</h3>
                <span class="text-xs">February 19, 2021</span>
                <p>Ei delenit sensibus liberavisse pri. Quod suscipit no nam. Est in graece fuisset, eos affert putent
                    doctus id.</p>
            </div>
        </a>
        <div class="grid justify-center grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-3">
            @foreach($berita as $data)


            <a rel="noopener noreferrer" href="{{ route('berita.show', $data->id) }}"
                class="border shadow max-w-sm group hover:no-underline focus:no-underline">
                <img role="presentation" class="object-cover w-full rounded h-44"
                    src="{{ asset('storage/' . $data->gambar) }}">
                <div class="p-6 space-y-2">
                    <h3 class="text-2xl font-semibold group-hover:underline group-focus:underline">{{
                        Str::limit($data->judul_berita, 20, '...') }} </h3>
                    <span class="text-xs"><span class="text-xs">{{
                            \Carbon\Carbon::parse($data->tanggal_publikasi)->format('d
                            F Y') }}
                        </span>
                    </span>
                    <p>{!!html_entity_decode($data->deskripsi_berita)!!}</p>
                </div>
            </a>
            @endforeach

        </div>
        <div class="mx-10 mt-5">
            {{ $berita->links() }}
        </div>
    </div>
</section>

@endcan


<script>
    function deleteArtikel(id){
        console.log(id);
        swal({
            title: "Apakah Anda yakin?",
            text: "Setelah dihapus, Anda tidak akan dapat memulihkan file imajiner ini!",
            icon: "warning",
            buttons: true,
            dangerMode: true,
        })
        .then((willDelete) => {
            
            if (willDelete) {
                
                $.ajax({
                    url: '/berita/' + id,
                    type: 'DELETE',
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    success: function(result) {
                       
                        swal("Bsehasil! Obat telah berhasil dihapus!", {
                            icon: "success",
                        });
                        window.location.href = '/berita';
                    }
                });

                
                
                
            } else {
                swal("berita Batal Di Hapus");
            }
        });
    }
    
   
                            
</script>
@endsection