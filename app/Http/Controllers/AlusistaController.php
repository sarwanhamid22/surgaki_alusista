<?php

namespace App\Http\Controllers;

use App\Models\Alusista;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AlusistaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('data_alusista.index', [
            'alusista' => Alusista::latest()->paginate(5),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('data_alusista.create');
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
            'nama_alusista' => 'required',
            'jenis' => 'required',
            'produsen' => 'required',
            'tahun_pembuatan' => 'required',
            'status_operasional' => 'required',
            'lokasi' => 'required',
            'kapasitas' => 'required',
            'spesifikasi_utama' => 'required',
            'gambar' => 'image|file|',

        ]);

        if ($request->file('gambar')) {
            $validateData['gambar'] = $request->file('gambar')->store('post-images', 'public');
        }


        Alusista::create($validateData);
        return redirect('alusista')->with('success', 'berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('data_alusista.edit', [
            'alusista' => Alusista::find($id),
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
            'nama_alusista' => 'required',
            'jenis' => 'required',
            'produsen' => 'required',
            'tahun_pembuatan' => 'required',
            'status_operasional' => 'required',
            'lokasi' => 'required',
            'kapasitas' => 'required',
            'spesifikasi_utama' => 'required',
            'gambar' => 'image|file|',

        ];
        $validateData = $request->validate($rules);
        if ($request->file('gambar')) {
            if ($request->oldImage) {
                Storage::delete([$request->oldImage]);
            }


            $validateData['gambar'] = $request->file('gambar')->store('post-images');
        }


        Alusista::where('id', $id)->update($validateData);
        return redirect('alusista')->with('success', 'Berhasil Di edit ');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function getAlusistaName($id)
    {
        $alusista = Alusista::find($id);
        return response()->json(['nama_alusista' => $alusista->nama_alusista]);
    }
}
