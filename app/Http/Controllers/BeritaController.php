<?php

namespace App\Http\Controllers;

use App\Models\berita;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Carbon\Carbon;


class BeritaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('berita.index', [
            'berita' => berita::latest()->paginate(5),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('berita.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validateData =  $request->validate([
            'judul_berita' => 'required',
            'penulis' => 'required',
            'tanggal_publikasi' => 'required',
            'deskripsi_berita' => 'required',
            'gambar' => 'file|mimes:jpeg,png,gif,bmp,svg,webp,tiff',
            'kategori' => 'required',


        ]);

        if ($request->file('gambar')) {
            $validateData['gambar'] = $request->file('gambar')->store('post-images', 'public');
        }


        berita::create($validateData);
        return redirect('berita')->with('success', 'berhasil ditambahkan');
    }



    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('berita.show', [
            'berita' => berita::find($id),
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('berita.edit', [
            'berita' => berita::find($id),
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $rules = [
            'judul_berita' => 'required',
            'penulis' => 'required',
            'tanggal_publikasi' => 'required',
            'deskripsi_berita' => 'required',
            'gambar' => 'file|mimes:jpeg,png,gif,bmp,svg,webp,tiff',
            'kategori' => 'required',

        ];
        $validateData = $request->validate($rules);
        if ($request->file('gambar')) {
            if ($request->oldImage) {
                Storage::delete([$request->oldImage]);
            }


            $validateData['gambar'] = $request->file('gambar')->store('post-images');
        }


        berita::where('id', $id)->update($validateData);
        return redirect('berita')->with('success', 'Berhasil Di edit ');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        berita::where('id', $id)->delete();
        return response()->json(['success' => 'berita berhasil dihapus!']);
    }
}
