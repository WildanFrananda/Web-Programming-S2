<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
    integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

  <!-- Main CSS -->
  <link rel="stylesheet" href="css/style.css">

  <!-- Owl Carousel -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous" />

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Alegreya:wght@800&display=swap" rel="stylesheet">
  <link
    href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
    rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400, 500,700" rel="stylesheet" type="text/css" />
  <link href="https://fonts.googleapis.com/css2?family=Courgette&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Merriweather+Sans:wght@400;700&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic" rel="stylesheet"
    type="text/css" />
  <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />

  <!-- Fontawesome -->
  <script src="https://kit.fontawesome.com/eb447e5792.js" crossorigin="anonymous"></script>

  <title>Project2 | Wisata Rekreasi</title>
</head>

<body>
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg text-dark" id="secNav">
    <div class="container">
      <a class="navbar-brand" href="index">project2</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item">
            <a class="nav-link" href="index">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="wisata_rekreasi.php">jenis wisata</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Registrasi
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <a class="dropdown-item" href="registrasi_rekreasi.php">Wisata Rekreasi</a>
            </div>
          </li>  
        </ul>
        <span class="navbar-text">
          <a class="nav-link" href="login.php">Login</a>
        </span>
      </div>
    </div> 
  </nav>
  <!-- akhir Navbar -->

  <!-- Header -->
  <header class="header">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <h2 class="section-heading">Daftar Wisata Rekreasi</h2>
        </div>
        <div class="col-md-6">
          <div class="breadcrumb-link">
            <a class="b-link" href="index">Home</a>
            <span>Daftar Wisata Reskreasi</span>
          </div>
        </div>
      </div>
    </div>
  </header>
  <!-- akhir Header -->

  <!-- Daftar Wisata -->
  <section class="daftar-section pt-4">
    <div class="container-fluid p-0">
      <div class="row no-gutters">
        <!-- Wisata Rekreasi 1 -->
        <div class="col-12 col-sm-12 col-lg-3 order-sm-1 order-xl-1">
          <img class="img-fluid" src="assets/imgs/wisata-1/kolam3.jpg" alt="">
        </div>
        <div class="col-12 col-sm-6 col-lg-3 order-sm-2 order-xl-2 point-left">
          <div class="item-desc">
            <h1>Water Park Ceria</h1>
            <p>merupakan wisata air yang cocok anak-anak. Berlokasi di Kota Depok, Jawa Barat. Karena dirancang untuk anak-anak sehingga tidak ada wahana yang terlalu ekstrem...</p>
            <button type="button" class="btn btn-outline-light" data-toggle="modal" data-target="#staticBackdrop1">Detail</button>
          </div>
        </div>
        <!-- Wisata Rekreasi 2 -->
        <div class="col-12 col-sm-12 col-lg-3 order-sm-2 order-xl-3">
          <img class="img-fluid" src="assets/imgs/wisata-2/TamanBungaWiladatika.jpg" alt="">
        </div>
        <div class="col-12 col-sm-6 col-lg-3 order-sm-4 order-xl-4 point-left">
          <div class="item-desc">
            <h1>Taman Wiladatika</h1>
            <p>Taman bunga Wiladatika ini sangat cocok untuk anggota keluarga menghabiskan waktu weekend bersama
              keluarga untuk berekreasi..</p>
            <button type="button" class="btn btn-outline-light" data-toggle="modal" data-target="#staticBackdrop2">Detail</button>
          </div>
        </div>
      </div>
      <div class="row no-gutters">
        <!-- Wisata Rekreasi 3 -->
        <div class="col-12 col-sm-12 col-lg-3 order-sm-3 order-xl-2">
          <img class="img-fluid" src="assets/imgs/wisata-3/rabbiton.jpg" alt="">
        </div>
        <div class="col-12 col-sm-6 col-lg-3 order-sm-6 order-xl-1 point-right">
          <div class="item-desc">
            <h1>Pemancingan Rabbiton</h1>
            <p>Sebuah Pemancingan untuk menghabiskan waktu bersama keluarga..</p>
            <button type="button" class="btn btn-outline-light" data-toggle="modal" data-target="#staticBackdrop3">Detail</button>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- akhir Daftar Wisata -->

  <!-- Modal 1 -->
  <div class="modal fade" id="staticBackdrop1" data-backdrop="static" data-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <div class="container-fluid">
            <div class="row">
              <div class="col-12 col-lg-10">
                <h5 class="modal-title text-white" id="staticBackdropLabel">Water Park Ceria</h5>
              </div>
              <div class="col-12 col-lg-2">
                <ul class="list-inline small">
                  <li class="list-inline-item m-0"><i class="fas fa-star text-warning"></i></li>
                  <li class="list-inline-item m-0"><i class="fas fa-star text-warning"></i></li>
                  <li class="list-inline-item m-0"><i class="fas fa-star text-warning"></i></li>
                  <li class="list-inline-item m-0"><i class="fas fa-star text-warning"></i></li>
                  <li class="list-inline-item m-0"><i class="fas fa-star text-warning"></i></li>
                </ul>
              </div>
            </div>
          </div>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span class="text-white" aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="container">
            <div class="row">
              <!-- Carousel -->
              <div class="owl-carousel owl-theme" id="mini">
                <div class="col-md-12 thumb">
                  <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="" data-image="img-1.jpg" data-target="#image-gallery">
                    <img class="img-thumbnail" src="assets/imgs/wisata-1/kolam.jpg" alt="Another alt text">
                  </a>
                </div>
                <div class="col-md-12 thumb">
                  <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="" data-image="img-1.jpg" data-target="#image-gallery">
                    <img class="img-thumbnail" src="assets/imgs/wisata-1/kolam2.jpg" alt="Another alt text">
                  </a>
                </div>
                <div class="col-md-12 thumb">
                  <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="" data-image="img-1.jpg" data-target="#image-gallery">
                    <img class="img-thumbnail" src="assets/imgs/wisata-1/kolam3.jpg" alt="Another alt text">
                  </a>
                </div>
                <div class="col-md-12 thumb">
                  <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="" data-image="img-1.jpg" data-target="#image-gallery">
                    <img class="img-thumbnail" src="assets/imgs/wisata-1/kolam4.jpg" alt="Another alt text">
                  </a>
                </div>
              </div>
              <!-- akhir Carousel -->
            </div>
          </div>
          <!-- Deskripsi dan Lokasi -->
          <div class="container-fluid pt-3">
            <div class="row">
              <!-- Deskripsi -->
              <div class="col-12 col-lg-6 col-sm-12">
                <h5>Deskripsi</h5>
                <p>Waterpark yang menawarkan beberapa permainan air menarik ini memiliki dua jenis kolam, yaitu kolam renang untuk dewasa dan anak-anak. Dengan begitu, orang tua yang ingin ikut berenang atau mengajarkan anaknya berenang bisa menggunakan kolam dewasa tersebut.</p>
              </div>
              <!-- akhir Deskripsi -->
              <!-- Lokasi -->
              <div class="col-12 col-lg-6 col-sm-12">
                <h5>Lokasi</h5>
                <p>Jl. K.H.M. Usman No.110, Kukusan, Kecamatan Beji, Kota Depok, Jawa Barat 16425</p>
                <div class="embed-responsive embed-responsive-16by9">
                  <iframe
                    src="https://goo.gl/maps/heUo6mcHwmiPRwug8"
                    width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false"
                    tabindex="0"></iframe>
                </div>
              </div>
              <!-- akhir Lokasi -->
            </div>
          </div>
          <!-- akhir Deskripsi dan lokasi -->
          <!-- Testimoni -->
          <div class="container pt-5">
            <h5 class="text-center">Testimoni</h5>
            <div id="carouselExampleControls" class="carousel slide pt-3" data-ride="carousel">
              <div class="text-center carousel-inner">
                <div class="carousel-item active">
                  <img src="assets/imgs/artis.jpg" class="img-thumbnail rounded-circle" width="125px" alt="...">
                  <figure>
                    <blockquote class="blockquote">
                      <p>"Tempatnya bagus sekali"</p>
                    </blockquote>
                    <figcaption class="blockquote-footer">
                      Han Jipyeong
                    </figcaption>
                  </figure>
                </div>
                <div class="carousel-item">
                  <img src="assets/imgs/pejabat.jpg" class="img-thumbnail rounded-circle" width="125px" alt="...">
                  <figure>
                    <blockquote class="blockquote">
                      <p>"Wahananya sangat mengasikkan"</p>
                    </blockquote>
                    <figcaption class="blockquote-footer">
                      Kim Jong Un
                    </figcaption>
                  </figure>
                </div>
                <div class="carousel-item">
                  <img src="assets/imgs/warga.jpeg" class="img-thumbnail rounded-circle" width="125px" alt="...">
                  <figure>
                    <blockquote class="blockquote">
                      <p>"Membawa Keluarga anak-anak sangat suka"</p>
                    </blockquote>
                    <figcaption class="blockquote-footer">
                      Nam Dosan
                    </figcaption>
                  </figure>
                </div>
              </div>
              <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
              </a>
            </div>
          </div>
          <!-- akhir Testimoni -->
        </div>
      </div>
    </div>
  </div>
  <!-- akhir Modal 1 -->

  <!-- Footer -->
  <footer class="footer py-4 text-white">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">© Cah Lanang 2022</div>
        </div>
    </div>
  </footer>
  <!-- Akhir Footer -->

  <!-- jQuery, Popper.js, and Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>

  <!-- Owl Carousel JS -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous"></script>

  <!-- Main JS -->
  <script src="js/script.js"></script>
</body>

</html>
