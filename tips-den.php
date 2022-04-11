<?php 
  include "koneksi.php";
  $id = $_GET["id"];
  $tips = "select * from tips where id_tips = $id ";
  $data_tips = $conn->query($tips)->fetch_assoc();
  

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
    <title>Document</title>
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
                        <a class="nav-link active  text-white" aria-current="page" href="#">Berita</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="hobby.php">Hobby</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white fw-bold" href="tips.php">Tips</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Akhir Navbar -->
  

    <!-- About 1-->
    <section id="header_tips">
        <div class="container">
            <div class="row"></div>
            <div class="row justify-content-center">
                <div class="col-md">
                    <a href="tips.php"><img src="img/backarr.svg"></a>
                    <p><br></p>
                    <p><br></p>
                    <p class="fs-1 fw-bold lh-sm mt-3 text-white"><?= $data_tips["judul_tips"] ?></p>
                </div>
                <div class="col-md mb-3">
                </div>
            </div>
        </div>
        </div>
    </section>
    <!-- Akhir About -->
      <!-- Foto -->
    <div class="col-md-12 justify-content-center d-flex">
        <div class="mt-5">
            <img src="assets/<?php echo $data_tips['foto_tips'] ?>">
        </div>
        </div>
    <!-- foto -->

    <div class="container mb-5">
        <h5 class="isihobiden text-justify" style="text-indent: 5em; line-height: 2em;">
        <?= $data_tips["isi_tips"] ?>
        </h5>
    </div>
    <!-- konten -->
 
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
                                otomotif. Yang menyediakan berbagai macam artikel mengenai bagaimana cara memulai terjun
                                di bidang
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