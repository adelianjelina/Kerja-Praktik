@extends('template/master')
@section('title', 'Klasifikasi')
@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">
                <a href="{{ route('klasifikasi.create') }}" class="btn btn-primary">Tambah</a>
            </h3>
        </div>

        <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Kode Klasifikasi</th>
                        <th>Judul Klasifikasi</th>
                        <th>Keterangan</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($dataKlasifikasi as $item)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $item->kode_klasifikasi }}</td>
                            <td>{{ $item->judul_klasifikasi }}</td>
                            <td>{{ $item->keterangan }}</td>
                            <td>
                                <a href="" class="btn btn-warning">Edit</a>
                                <a href="" class="btn btn-danger">Hapus</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

@endsection
