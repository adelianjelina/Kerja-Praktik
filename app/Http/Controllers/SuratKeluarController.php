<?php

namespace App\Http\Controllers;


use App\Models\SuratKeluar;
use Illuminate\Http\Request;

class SuratKeluarController extends Controller
{
     public function index(){
        $data = SuratKeluar::all();
        return view('suratkeluar',compact('data'));
    }
     public function tambahkeluar(){
        return view('tambahkeluar');
    }
    public function insertdata1(Request $request){
        // dd($request->all());
        SuratKeluar::create($request->all());
        return redirect() ->route('suratkeluar'); 
    }
     public function tampilkandatakeluar ($id){
        $data=SuratKeluar::find($id);
        // dd($data);
        return view('tampildataKeluar', compact(('data')));
    }
     public function updatekeluar(Request $request, $id) {
        $data = SuratKeluar::find($id);
        $data->update($request->all());
         return redirect() ->route('suratkeluar')->with('succes','data berhasil diupdate'); 
    }
     public function tampilkeluar ($id){
        $data=SuratKeluar::find($id);
        // dd($data);
        return view('tampilkeluar', compact(('data')));
    }
    public function delete1($id){
        $data = SuratKeluar::find($id);
        $data->delete();
        return redirect()->route('suratkeluar')->with('succes','Data Berhasil di hapus');
    }
}
