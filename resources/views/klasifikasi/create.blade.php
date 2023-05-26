@extends('template/master')
@section('title', 'Create Klasifikasi')
@section('content')
    <div class="card card-secondary">
        <div class="card-header">
            <h3 class="card-title">Tambah Data Klasifikasi</h3>
        </div>
        <form action="{{ route('klasifikasi.store') }}" method="POST">
            @csrf
            <div class="card-body">
                <div class="form-group">
                    <label for="">Kode Klasifikasi</label>
                    <input type="text" class="form-control" id="" placeholder="Masukkan Kode Klasifikasi"
                        name="kode_klasifikasi">
                </div>
                <div class="form-group">
                    <label for="">Judul Klasifikasi</label>
                    <input type="text" class="form-control" id="" placeholder="Masukkan Judul Klasifikasi"
                        name="judul_klasifikasi">
                </div>
                <div class="form-group">
                    <label>Keterangan</label>
                    <textarea class="form-control" rows="3" placeholder="Keterangan" name="keterangan"></textarea>
                </div>

                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
        </form>
    </div>
@endsection
