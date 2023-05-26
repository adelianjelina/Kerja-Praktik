<?php

namespace App\Http\Controllers;

use App\Models\Klasifikasi;
use Illuminate\Http\Request;

class KlasifikasiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('klasifikasi/index', [
            'dataKlasifikasi' => Klasifikasi::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('klasifikasi/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //

        $validatedData = $request->validate([
            'kode_klasifikasi' => 'required|unique:klasifikasis|max:255',
            'judul_klasifikasi' => 'required',
            'keterangan' => 'required',
        ]);

        Klasifikasi::create($validatedData);

        return redirect('/klasifikasi')->with('success', 'Data berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Klasifikasi  $klasifikasi
     * @return \Illuminate\Http\Response
     */
    public function show(Klasifikasi $klasifikasi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Klasifikasi  $klasifikasi
     * @return \Illuminate\Http\Response
     */
    public function edit(Klasifikasi $klasifikasi)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Klasifikasi  $klasifikasi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Klasifikasi $klasifikasi)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Klasifikasi  $klasifikasi
     * @return \Illuminate\Http\Response
     */
    public function destroy(Klasifikasi $klasifikasi)
    {
        //
    }
}
