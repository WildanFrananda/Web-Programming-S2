<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <!-- Main CSS -->
    <link rel="stylesheet" href="css/style.css">

    <!-- Owl Carousel -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous"/>
    
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Alegreya:wght@800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400, 500,700" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css2?family=Courgette&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Merriweather+Sans:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />

    <!-- Fontawesome -->
    <script src="https://kit.fontawesome.com/eb447e5792.js" crossorigin="anonymous"></script>

    <title>project2 | Admin</title>
  </head>
  <body>
    <!-- Navbar -->
  <nav class="navbar navbar-expand-lg text-dark" id="secNav">
    <div class="container">
      <a class="navbar-brand" href="#">project2</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item">
            <a class="nav-link" href="index">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="wisata_rekreasi.php">Wisata Rekreasi</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="registrasi_rekreasi.php" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Registrasi
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <a class="dropdown-item" href="wisata_rekreasi.php">Wisata Rekreasi</a>
            </div>
          </li>  
        </ul>
        <span class="navbar nav-item dropdown">
          <a class="nav-link" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-user-circle"></i> Admin
          </a>
          <div class="dropdown-menu text-center" aria-labelledby="navbarDropdownMenuLink">
            <a class="dropdown-item" href="kelola-rekreasi.php">Kelola Wisata Rekreasi</a>
            <a class="dropdown-item" href="index.php">Logout</a>
          </div>
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
          <h2 class="section-heading">Kelola Wisata Rekreasi</h2>
        </div>
        <div class="col-md-6">
          <div class="breadcrumb-link">
            <a class="b-link" href="#">Home</a>
            <a class="b-link" href="#">Admin</a>
            <span>Kelola Wisata Rekreasi</span>
          </div>
        </div>
      </div>
    </div>
  </header>
  <!-- akhir Header -->

  <!-- Tabel -->
  <section class="kelola-section">
    <div class="container pt-5">
      <div class="table-responsive"> 
        <table class="table table-sm table-bordered text-center">
          <thead class="thead text-white">
            <tr>
              <th scope="col">No</th>
              <th scope="col">Nama</th>
              <th scope="col">Jenis Wisata</th>
              <th scope="col">Rating</th>
              <th scope="col">Kontak</th>
              <th scope="col">Foto</th>
              <th scope="col">Action</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row">1</th>
              <td>Water Park Ceria</td>
              <td>Kolam Renang</td>
              <td>
                <ul class="list-inline small">
                  <li class="list-inline-item m-0"><i class="fas fa-star text-warning"></i></li>
                  <li class="list-inline-item m-0"><i class="fas fa-star text-warning"></i></li>
                  <li class="list-inline-item m-0"><i class="fas fa-star text-warning"></i></li>
                  <li class="list-inline-item m-0"><i class="fas fa-star text-warning"></i></li>
                  <li class="list-inline-item m-0"><i class="fas fa-star text-warning"></i></li>
                </ul>
              </td>
              <td>Hamba Allah</td>
              <td>None</td>
              <td>
                <a href=""><i class="fas fa-eye text-info"></i></a>
                <a href=""><i class="fas fa-edit text-success"></i></a>
                <a href=""><i class="fas fa-trash-alt text-danger"></i></a>
              </td>
            </tr>
            <tr>
              <th scope="row">2</th>
              <td>Taman Wiladatika</td>
              <td>Taman Kota  </td>
              <td>
                <ul class="list-inline small">
                  <li class="list-inline-item m-0"><i class="fas fa-star text-warning"></i></li>
                  <li class="list-inline-item m-0"><i class="fas fa-star text-warning"></i></li>
                  <li class="list-inline-item m-0"><i class="fas fa-star text-warning"></i></li>
                  <li class="list-inline-item m-0"><i class="fas fa-star text-warning"></i></li>
                  <li class="list-inline-item m-0"><i class="far fa-star text-warning"></i></li>
                </ul>
              </td>
              <td>Asep</td>
              <td>None</td>
              <td>
                <a href=""><i class="fas fa-eye text-info"></i></a>
                <a href=""><i class="fas fa-edit text-success"></i></a>
                <a href=""><i class="fas fa-trash-alt text-danger"></i></a>
              </td>
            </tr>
            <tr>
              <th scope="row">3</th>
              <td>Rabbiton</td>
              <td>Pemancingan</td>
              <td>
                <ul class="list-inline small">
                  <li class="list-inline-item m-0"><i class="fas fa-star text-warning"></i></li>
                  <li class="list-inline-item m-0"><i class="fas fa-star text-warning"></i></li>
                  <li class="list-inline-item m-0"><i class="fas fa-star text-warning"></i></li>
                  <li class="list-inline-item m-0"><i class="fas fa-star text-warning"></i></li>
                  <li class="list-inline-item m-0"><i class="far fa-star text-warning"></i></li>
                </ul>
              </td>
              <td>Bambang</td>
              <td>None</td>
              <td>
                <a href=""><i class="fas fa-eye text-info"></i></a>
                <a href=""><i class="fas fa-edit text-success"></i></a>
                <a href=""><i class="fas fa-trash-alt text-danger"></i></a>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
      
      <button name="submit" type="submit" class="btn btn-outline-dark">Tambah</button>
    </div>
  </section>
  <!-- akhir Tabel -->
  
  <!-- Footer -->
  <footer class="footer py-4 text-white">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">© Cah Lanang 2022</div>
        </div>
    </div>
  </footer>
  <!-- Akhir Footer -->

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
  
    <!-- Main JS -->
    <script src="js/script.js"></script>
  </body>
</html>
