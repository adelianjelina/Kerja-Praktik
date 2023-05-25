
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="suratkeluar.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.7.0/dist/css/bootstrap.min.css">
     <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <title>Surat keluar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
  <body>
     <head>
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
          <li><a href="http://127.0.0.1:8000/keluar" >Surat keluar</a></li>
          <li>
            <a href="http://127.0.0.1:8000/kategori"class="active"
              >Kategoori Surat</a
            >
            <a href="http://127.0.0.1:8000/kategori"
              >Laporan Surat masuk</a
            >
            <a href="http://127.0.0.1:8000/kategori"
              >Laporan Surat masuk</a
            >
          </li>
        </ul>
      </div>

      <div class="content">
        <div class="navbar-1">
          <img src="profile.png" alt="Profile Picture" class="img-profile" />
          <h2 class="h2-1">Selamat Datang</h2>
        </div>  <title>Tabel Surat</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        
        th, td {
            padding: 8px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        
        th {
            background-color: #f2f2f2;
        }
        
        .btn {
            display: inline-block;
            padding: 6px 12px;
            margin-bottom: 0;
            font-size: 14px;
            font-weight: normal;
            line-height: 1.42857143;
            text-align: center;
            white-space: nowrap;
            vertical-align: middle;
            cursor: pointer;
            border: 1px solid transparent;
            border-radius: 4px;
            background-color: #337ab7;
            color: #fff;
        }
        
        .btn-edit {
            background-color: #5cb85c;
        }
        
        .btn-create {
            background-color: #337ab7;
        }
    </style>
  </head>
   <h1>Tabel Surat</h1>
    <a href="#" class="btn btn-create">Buat Surat Baru</a>
    <table>
        <thead>
            <tr>
                <th>Nomor</th>
                <th>Nomor Surat</th>
                <th>Pengirim</th>
                <th>Perihal</th>
                <th>Kategori ID</th>
                <th>Tanggal</th>
                <th>Keterangan</th>
                <th>File</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>2021/001</td>
                <td>John Doe</td>
                <td>Perihal Surat</td>
                <td>1</td>
                <td>2021-01-01</td>
                <td>Keterangan Surat</td>
                <td>file.pdf</td>
                <td>
                    <a href="#" class="btn btn-edit">Edit</a>
                    <a href="#" class="btn btn-edit">hapus</a>
                </td>
            </tr>
            <tr>
                <td>2</td>
                <td>2021/002</td>
                <td>Jane Smith</td>
                <td>Perihal Surat</td>
                <td>2</td>
                <td>2021-02-01</td>
                <td>Keterangan Surat</td>
                <td>file.docx</td>
                <td>
                    <a href="#" class="btn btn-edit">Edit</a>
                            <a href="#" class="btn btn-edit">hapus</a>
                </td>
            </tr>
            <!-- Tambahkan baris lainnya sesuai data yang Anda miliki -->
        </tbody>
    </table>
  <body>
<html>
<head>
  
</head>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.7.0/dist/js/bootstrap.min.js"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
  </body>
</html>