<?php

namespace App\Http\Controllers;

use App\Models\pelatihan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PelatihanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pelatihan.index', [
            'pelatihan' => pelatihan::latest()->paginate(5)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pelatihan.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validateData = $request->validate([
            'judul_pelatihan' => 'required',
            'kategori' => 'required',
            'link' => 'required',
            'deskripsi_pelatihan' => 'required',
            'gambar' => 'image|file|',

        ]);
        if ($request->file('gambar')) {
            $validateData['gambar'] = $request->file('gambar')->store('post-images', 'public');
        }


        pelatihan::create($validateData);
        return redirect('pelatihan')->with('success', 'berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('pelatihan.show', [
            'pelatihan' => pelatihan::find($id),
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
        return view('pelatihan.edit', [
            'pelatihan' => pelatihan::find($id),
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
            'judul_pelatihan' => 'required',
            'kategori' => 'required',
            'link' => 'required',
            'deskripsi_pelatihan' => 'required',
            'gambar' => 'image|file|',

        ];
        $validateData = $request->validate($rules);
        if ($request->file('gambar')) {
            if ($request->oldImage) {
                Storage::delete([$request->oldImage]);
            }


            $validateData['gambar'] = $request->file('gambar')->store('post-images');
        }


        pelatihan::where('id', $id)->update($validateData);
        return redirect('pelatihan')->with('success', 'Berhasil Di edit ');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        pelatihan::where('id', $id)->delete();
        return response()->json(['success' => 'pelatihan berhasil dihapus!']);
    }
}
