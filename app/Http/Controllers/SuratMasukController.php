<?php

namespace App\Http\Controllers;
use App\Models\SuratMasuk;
use Illuminate\Http\Request;

class SuratMasukController extends Controller
{
    public function index(){
        $data = SuratMasuk::all();
        return view('suratmasuk',compact('data'));
    }

    public function tambahmasuk(){
        return view('tambah');
    }
    public function insertdata(Request $request){
        // dd($request->all());
        SuratMasuk::create($request->all());
        return redirect() ->route('suratmasuk')->with('succes','data berhasil ditambahkan'); 
    }
    public function tampilkandata ($id){
        $data=SuratMasuk::find($id);
        // dd($data);
        return view('tampildata', compact(('data')));
    }

    public function updatemasuk(Request $request, $id) {
        $data = SuratMasuk::find($id);
        $data->update($request->all());
         return redirect() ->route('suratmasuk')->with('succes','data berhasil diupdate'); 
    }
       public function tampilmasuk ($id){
        $data=SuratMasuk::find($id);
        // dd($data);
        return view('tampilmasuk', compact(('data')));
    }
    
    public function delete($id){
        $data = SuratMasuk::find($id);
        $data->delete();
        return redirect()->route('suratmasuk')->with('succes','Data Berhasil di hapus');
    }
}
