<?php

namespace App\Http\Controllers;

use App\Models\Alusista;
use App\Models\riwayat_operasi;
use Illuminate\Http\Request;

class RiwayatOperasiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('riwayat_operasi.index', [
            'alusistas' => Alusista::all(),
            'riwayat' => riwayat_operasi::latest()->paginate(5)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('riwayat_operasi.create', [
            'alusistas' => Alusista::all()
        ]);
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
            'alusista_id' => 'required',
            'tanggal_operasi' => 'required',
            'lokasi_operasi' => 'required',
            'jumlah' => 'required',
            'tujuan' => 'required',
            'durasi' => 'required',
            'catatan' => 'nullable'
        ]);

        riwayat_operasi::create($validateData);
        return redirect('riwayat')->with('success', 'berhasil ditambahkan');
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
        //
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
        //
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
}
