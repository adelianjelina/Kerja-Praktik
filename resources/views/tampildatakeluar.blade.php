
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="{{ asset('edit.css') }}" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.7.0/dist/css/bootstrap.min.css">
     <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <title>Surat Masuk</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
  <body>
     <div class="container">
      <div class="sidebar">
        <div class="logo">
          <img src="{{ asset('logo.png') }}" alt="Logo" />
        </div>

        <ul>
          <li><a href="http://127.0.0.1:8000/">Dashboard</a></li>
          <li>
            <a href="http://127.0.0.1:8000/masuk"class="active">Surat masuk</a>
          </li>
          <li><a href="http://127.0.0.1:8000/keluar">Surat keluar</a></li>
          <li>
            <a href="http://127.0.0.1:8000/kategori"
              >Kategoori Surat</a
            >
          </li>
        </ul>
      </div>

      <div class="content">
        <div class="navbar-1">
          <img src="profile.png" alt="Profile Picture" class="img-profile" />
          <h2 class="h2-1">Selamat Datang</h2>
        </div> 
   <h1>Edit Surat </h1>
    <a href="#" class="btn btn-create"></a>
  <body>
    <form  enctype="multipart/form-data" class="form" action="/updatekeluar/{{ $data->id }}" method="POST">
    @csrf

    <div class="form-group">
      
        <label for="nomor_surat">Nomor Surat</label>
        <input type="text" name="nomor_surat" name="nomor_surat" id="nomor_surat" class="form-control" required value="{{ $data->nomor_surat }}">
    </div>

    <div class="form-group">
        <label for="penerima">Penerima</label>
        <input type="text" name="penerima" id="penerima" class="form-control" required value="{{ $data->penerima }}">
    </div>

    <div class="form-group">
        <label for="perihal">Perihal</label>
        <input type="text" name="perihal" id="perihal" class="form-control" required value="{{ $data->perihal }}">
    </div>

    <div class="form-group">
        <label for="kategori">Kategori</label>
        <input type="text" name="kategori" id="kategori" class="form-control" required value="{{ $data->kategori }}">
    </div>

    <div class="form-group">
        <label for="tanggal">Tanggal</label>
        <input type="date" name="tanggal" id="tanggal" class="form-control" required value="{{ $data->tanggal}}">
    </div>

    <div class="form-group">
        <label for="keterangan">Keterangan</label>
        <textarea name="keterangan" id="keterangan" class="form-control">@if(isset($data)){{ $data->keterangan }}@endif</textarea>
    </div>

    <div class="form-group">
        <label for="file">File PDF</label>
        <input type="file" name="file" id="file" class="form-control-file" accept="application/pdf" required value="{{ $data->pdf }} disabled">
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
   <button>  <a href="#" onclick="window.print()">Cetak</a></button>
</form>


<html>
<head>
  
</head>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.7.0/dist/js/bootstrap.min.js"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
  </body>
</html>