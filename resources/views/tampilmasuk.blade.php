
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
      <script src="{{ asset('js/custom.js') }}"></script>
  </head>
  <body>     
  
    <a href="#" class="btn btn-create"></a>
  <body>
    <form  enctype="multipart/form-data" class="form" action="" method="POST" class="form">
    @csrf 
         <div class="logo">
          <img src="{{ asset('logo.png') }}" alt="Logo" />
        </div>
    <div class="form-group">
      
        <label for="nomor_surat">Nomor Surat</label>
        <input type="text" name="nomor_surat" name="nomor_surat" id="nomor_surat" class="form-control" required value="{{ $data->nomor_surat }}">
    </div>

    <div class="form-group">
        <label for="pengirim">pengirim</label>
        <input type="text" name="pengirim" id="pengirim" class="form-control" required value="{{ $data->pengirim }}">
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
   <button>  <a href="" onclick="window.print()">Cetak</a></button>
</form>


<html>
<head>
  
</head>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.7.0/dist/js/bootstrap.min.js"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

  </body>
</html>