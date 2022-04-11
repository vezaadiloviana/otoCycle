<?php 
  include "koneksi.php";
  $tips = "select * from tips";
  $data_tips = $conn->query($tips);

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous" />

  <!-- Bootstrap Icons -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">

  <!-- CSS -->
  <link rel="stylesheet" href="css/style.css">

  <title>OtoCycle</title>
  <link rel="icon" href="img/icon2.png" />
</head>

<body>
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-light shadow-sm fixed-top">
    <div class="container">
      <a class="navbar-brand text-white mb-0 h1" href="index.php">OtoCycle</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto fw-normal navbar-center">
        <li class="nav-item">
            <a class="nav-link text-white" aria-current="page" href="berita.php">Berita</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="hobby.php">Hobby</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="tips.php">Tips</a>
        </ul>
      </div>
    </div>
  </nav>
  <!-- Akhir Navbar -->
  

  <!-- About 1-->
  <section id="judultips">
    <div class="container">
        <div class="row"></div>
      <div class="row justify-content-center">
        <div class="col-md">
            <p><br></p>
            <p><br></p>
            <p class="fs-1 fw-bold lh-sm mt-3 text-white">Tips</p>
          <div class="col-10">
            <p class="lh-sm mt-3 text-white" style="text-align: justify;">Beranda > Tips</p>
          </div>
          
        </div>

        <div class="col-md mb-3">
          
        </div>

      </div>
    </div>
    </div>
  </section>
  <!-- Akhir About -->
  

<!-- Recent Update -->
<section id="recent">
    <div class="container">
      <div class="row mb-3">
        <div class="col">
          <h6 class="fw-bold text-dark">Terbaru</h6>
        </div>

        <div class="col text-end">
        </div>
      </div>

      <div class="row justify-content-evenly">
      <?php
          foreach($data_tips as $index => $value){
      ?>
        <div class="col-md-4 mb-4">
          <div class="card">
            <a href="#"><img src="assets/<?php echo $value['foto_tips'] ?>" class="card-img-top" alt="card blog 1" /> </a>
            <div class="card-body">
              <h5 class="card-title"><?php echo $value['judul_tips'] ?></h5>
              <p class="card-text" style="text-indent: 0.5in; text-align: justify;"><?php echo $value['deskripsi_tips'] ?></p>
              <a href="tips-den.php?id=<?php echo $value['id_tips']?>" class="text-dark">Learn more <i class="bi bi-arrow-right-circle"></i></a>
            </div>
          </div>
        </div>
        <?php
          }
       ?>  
      </div>
    </div>
  </section>
  <!-- Akhir Recent Update -->

  <!-- Footer -->
  <section id="footer">
    <div class="container">
      <div class="row justify-content-center">

        <div class="col-md mb-3">

          <div class="row justify-content-evenly">
            <div class="col-3">
              <h5 class="fw-bold">OtoCycle</h5>
            </div>
            <div class="col-7">
              <h7 class="fw-bold mb-2">Tentang Kami</h7>
              <p class="lh-sm mt-3">OtoCycle merupakan wadah informasi
                seputar dunia
                otomotif. Yang menyediakan berbagai macam artikel mengenai bagaimana cara memulai terjun di bidang
                otomotif. Dan tersedia juga berita-berita terbaru seputar dunia perotomotifan.</p>
            </div>
          </div>
        </div>


        <div class="col">
          <div class="row justify-content-evenly">

            <div class="col-md-4">
              <h7 class="fw-bold mb-2">Informasi</h7>
              <p class="mt-1">Privasi <br>Syarat dan Ketentuan </p>
            </div>
            <div class="col-md-3">
              <h7 class="fw-bold mb-2">Links</h7>
              <p class="mt-1">Beranda <br>Berita <br>Hobi <br>Tips <br>Kontak</p>
            </div>
            <div class="col-md">
              <h7 class="fw-bold mb-2">Punya Pertanyaan?</h7>
              <p class="mt-1">Jl. Jalan doang tapi gajadi <br>0821456783 <br>otocycle@gmail.com</p>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="text-center">
          <p>Copyright 2021-2021 Privacy - Terms</p>
        </div>
      </div>
    </div>

  </section>
  <!-- Akhir Footer -->

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4"
    crossorigin="anonymous"></script>
</body>

</html>