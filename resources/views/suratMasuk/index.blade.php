@extends('template/master')
@section('title', 'Surat Masuk')
@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">
                <a href="{{ route('surat-masuk.create') }}" class="btn btn-primary">Tambah</a>
            </h3>
        </div>

        <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>No Surat</th>
                        <th>Pengirim</th>
                        <th>Tanggal Surat</th>
                        <th>Kategori</th>
                        <th>Perihal</th>
                        <th>File Surat</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($dataSuratMasuk as $item)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $item->nomor_surat }}</td>
                            <td>{{ $item->pengirim }}</td>
                            <td>{{ $item->tanggal_surat }}</td>
                            <td>{{ $item->klasifikasi->judul_klasifikasi }}</td>
                            <td>{{ $item->perihal }}</td>
                            <td>
                                <a href="{{ asset('storage/uploads/' . $item->file_surat) }}"
                                    download>{{ $item->file_surat }}</a>
                            </td>
                            <td>
                                <a href="surat-masuk/show/{{ $item->id }}" class="btn btn-info">Show</a>
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
