
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
   
      <link href="dashboard.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  </head>
  <body>
     <head>
    <title>Admin Dashboard</title>
 
  </head>
  <body>
    <div class="container">
      <div class="sidebar">
        <div class="logo">
          <img src="logo.png" alt="Logo" />
        </div>

        <ul>
          <li><a href="#" class="active">Dashboard</a></li>
          <li>
            <a href="http://127.0.0.1:8000/masuk">Surat masuk</a>
          </li>
          <li>
            <a href="http://127.0.0.1:8000/keluar">Surat keluar</a>
          </li>
          <li>
            <a href="http://127.0.0.1:8000/kategori"
              >Kategori Surat</a
            >
          </li>
           <li>
            <a href="http://127.0.0.1:8000/kategori"
              >Laporan Surat Masuk</a
            >
          </li>
           <li>
            <a href="http://127.0.0.1:8000/kategori"
              >Laporan surat keluar</a
            >
          </li>
        </ul>
        <div class="footer1"><p class="p1"></p></div>
      </div>

      <div class="content">
        <div class="navbar-1">
          <img src="profile.png" alt="Profile Picture" class="img-profile" />
          <h2 class="h2-1">Selamat Datang</h2>
        </div>

        <div class="cards">
          <div class="card">
            <a href="http://127.0.0.1:5500/dashboard.html">
              <img src="surat keluar.png" class="img-sm1" />
            </a>
            <h3>Total Surat keluar</h3>
            <p id="totalSurat">100</p>
          </div>
          <div class="card1">
            <img src="surat masuk.png" class="img-sm" />
            <h3 class="h3-sm">Total Surat masuk</h3>
            <p id="totalSurat">100</p>
          </div>
          <div class="card2">
            <div class="peng">
              <h1 id="totalSurat">4</h1>
              <h3>Pengguna</h3>
            </div>
          </div>
        </div>
        <div>
          <h1 class="h1chart">Grafik Surat Masuk & Keluar Per Bulan</h1>
        </div>

        <div class="chart-container">
          <div class="d1"></div>
          <div class="d2"></div>
          <div class="d3"></div>
          <div class="d4"></div>
          <div class="d5"></div>
          <div class="d6"></div>
          <div class="d7"></div>
          <div class="d8"></div>
          <div class="d9"></div>
          <div class="d10"></div>
          <div class="d11"></div>
          <div class="d12"></div>
          <ul class="contentchart">
            <li><div>10</div></li>
            <li><div>20</div></li>
            <li><div>30</div></li>
            <li><div>40</div></li>
            <li><div>50</div></li>
          </ul>
          <div class="bulan"><p>januari</p></div>
        </div>
      </div>
    </div>

    <script src="dashboard.js"></script>
  </body>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  </body>
</html>
