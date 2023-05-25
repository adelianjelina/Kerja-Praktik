
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="suratmasuk.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.7.0/dist/css/bootstrap.min.css">
     <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <title>Surat Keluar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
  <body>
     <div class="container">
      <div class="sidebar">
        <div class="logo">
          <img src="logo.png" alt="Logo" />
        </div>

        <ul>
          <li><a href="http://127.0.0.1:8000/">Dashboard</a></li>
          <li>
            <a href="http://127.0.0.1:8000/masuk">Surat masuk</a>
          </li>
          <li><a href="http://127.0.0.1:8000/keluar"class="active">Surat keluar</a></li>
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
   <h1>Tambah Surat Masuk</h1>
    <a href="#" class="btn btn-create"></a>
  <body>
    <form  enctype="multipart/form-data" class="form" action="/insertdata1" method="POST">
    @csrf

    <div class="form-group">
        <label for="nomor_surat">Nomor Surat</label>
        <input type="text" name="nomor_surat" id="nomor_surat" class="form-control" required>
    </div>

    <div class="form-group">
        <label for="penerima">Penerima</label>
        <input type="text" name="penerima" id="penerima" class="form-control" required>
    </div>

    <div class="form-group">
        <label for="perihal">Perihal</label>
        <input type="text" name="perihal" id="perihal" class="form-control" required>
    </div>

    <div class="form-group">
        <label for="kategori">Kategori</label>
        <input type="text" name="kategori" id="kategori" class="form-control" required>
    </div>

    <div class="form-group">
        <label for="tanggal">Tanggal</label>
        <input type="date" name="tanggal" id="tanggal" class="form-control" required>
    </div>

    <div class="form-group">
        <label for="keterangan">Keterangan</label>
        <textarea name="keterangan" id="keterangan" class="form-control"></textarea>
    </div>

    <div class="form-group">
        <label for="file">File PDF</label>
        <input type="file" name="file" id="file" class="form-control-file" accept="application/pdf" required>
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
</form>

<html>
<head>
  
</head>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.7.0/dist/js/bootstrap.min.js"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
  </body>
</html>