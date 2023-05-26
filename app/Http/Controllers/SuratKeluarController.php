<?php

namespace App\Http\Controllers;

use App\Models\SuratKeluar;
use App\Models\Klasifikasi;
use Illuminate\Http\Request;

class SuratKeluarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('suratKeluar/index', [
            'dataSuratKeluar' => SuratKeluar::all()
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
        return view('suratKeluar/create', [
            'dataKlasifikasi' => Klasifikasi::all()
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
        //
        $validatedData = $request->validate([
            'nomor_surat' => 'required',
            'tanggal_surat' => 'required',
            'perihal' => 'required',
            'klasifikasi_id' => 'required',
            'file_surat' => 'required|mimes:pdf|max:2048',
            'keterangan' => 'required',
            'pengirim' => 'required',

        ]);

        if ($request->hasFile('file_surat')) {
            // Mengambil file yang diunggah
            $file = $request->file('file_surat');

            // Mengenerate nama file unik dengan timestamp
            $fileName = time() . '_' . $file->getClientOriginalName();

            // Menyimpan file ke direktori yang diinginkan (misalnya, public/uploads)
            $file->storeAs('uploads', $fileName);

            // Proses selanjutnya untuk menyimpan data surat beserta nama file

            // Contoh: menyimpan nama file ke dalam field 'nama_file' pada tabel 'surat'
            $surat = new SuratKeluar();
            $surat->nomor_surat = $validatedData['nomor_surat'];
            $surat->tanggal_surat = $validatedData['tanggal_surat'];
            $surat->perihal = $validatedData['perihal'];
            $surat->klasifikasi_id = $validatedData['klasifikasi_id'];
            $surat->file_surat = $fileName; // Nama file disimpan dalam field 'file_surat'
            $surat->keterangan = $validatedData['keterangan'];
            $surat->pengirim = $validatedData['pengirim'];
            $surat->save();

            // Proses lainnya setelah menyimpan data surat

            return redirect('surat-keluar')->with('success', 'Surat berhasil ditambahkan.');
        } else {
            // Jika tidak ada file yang dikirim, tampilkan pesan error atau lakukan tindakan yang sesuai
            return response()->json(['error' => 'File surat tidak ditemukan.'], 400);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\SuratKeluar  $suratKeluar
     * @return \Illuminate\Http\Response
     */
    public function show(SuratKeluar $suratKeluar)
    {
        //
        return view('suratKeluar/show', [
            'dataSuratKeluar' => $suratKeluar
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\SuratKeluar  $suratKeluar
     * @return \Illuminate\Http\Response
     */
    public function edit(SuratKeluar $suratKeluar)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\SuratKeluar  $suratKeluar
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SuratKeluar $suratKeluar)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SuratKeluar  $suratKeluar
     * @return \Illuminate\Http\Response
     */
    public function destroy(SuratKeluar $suratKeluar)
    {
        //
    }
}
