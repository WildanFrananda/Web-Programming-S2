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
  <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400, 500,700" rel="stylesheet" type="text/css" />
  <link href="https://fonts.googleapis.com/css2?family=Courgette&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Merriweather+Sans:wght@400;700&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
  <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />

  <!-- Fontawesome -->
  <script src="https://kit.fontawesome.com/eb447e5792.js" crossorigin="anonymous"></script>

  <title>Project2 | Registrasi Wisata Rekreasi</title>
</head>

<body>
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg text-dark" id="secNav">
    <div class="container">
      <a class="navbar-brand" href="index">Project2 | Cah Lanang</a>
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
            <a class="nav-link active dropdown-toggle" href="registrasi_rekreasi.php" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Registrasi
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <a class="dropdown-item" href="registrasi_rekreasi.php">Wisata Rekreasi</a>
            </div>
          </li>  
        </ul>
        <span class="navbar">
          <a class="nav-link js-scroll-trigger" href="login.php">Login</a>
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
          <h2 class="section-heading">Registrasi Wisata Rekreasi</h2>
        </div>
        <div class="col-md-6">
          <div class="breadcrumb-link">
            <a class="b-link" href="index">Home</a>
            <span>Registrasi Wisata Reskreasi</span>
          </div>
        </div>
      </div>
    </div>
  </header>
  <!-- akhir Header -->

  <!-- Form -->
  <div class="container">
    <form name="registForm" class="pl-5 pt-5 pb-5" onsubmit="return formValidation()" method="post">
      <div class="form-group row">
        <label for="text" class="col-4 col-lg-3 col-form-label">Nama Tempat Wisata</label>
        <div class="col-8">
          <input id="nama" name="nama" type="text" class="form-control" required="required">
          <p id="textvalid" class="text-danger"></p>
        </div>
      </div>
      <div class="form-group row">
        <label for="select" class="col-4 col-lg-3 col-form-label">Jenis Wisata</label>
        <div class="col-8 col-lg-3">
          <select id="select" name="select" class="custom-select" required="required">
            <option hidden value="">-- Pilih Jenis Wisata --</option>
            <option value="taman">Taman Kota</option>
            <option value="mancing">Pemancingan</option>
            <option value="kolamrenang">Kolam Renang</option>
          </select>
          <p id="selvalid" class="text-danger"></p>
        </div>
      </div>
      <div class="form-group row">
        <label for="textarea" class="col-4 col-lg-3 col-form-label">Deskripsi Wisata</label>
        <div class="col-8">
          <textarea id="deskripsi" name="desc" cols="40" rows="5" class="form-control" required="required"></textarea>
          <p id="deskvalid" class="text-danger"></p>
        </div>
      </div>
      <div class="form-group row">
        <label for="text1" class="col-4 col-lg-3 col-form-label">Kontak Person</label>
        <div class="col-8 col-lg-4">
          <input id="cp" name="cp" type="text" class="form-control" required="required">
          <p id="cpvalid" class="text-danger"></p>
        </div>
      </div>
      <div class="form-group row">
        <label for="text2" class="col-4 col-lg-3 col-form-label">No. HP/Telpon</label>
        <div class="col-8 col-lg-4">
          <input id="phone" name="phone" type="text" class="form-control" required="required">
          <p id="phonevalid" class="text-danger"></p>
        </div>
      </div>
      <div class="form-group row">
        <label for="email" class="col-4 col-lg-3 col-form-label">Email</label>
        <div class="col-8 col-lg-4">
          <input id="email" name="email" type="email" class="form-control" required="required">
          <p id="emailvalid" class="text-danger"></p>
        </div>
      </div>
      <div class="form-group row">
        <label for="text4" class="col-4 col-lg-3 col-form-label">Alamat Web</label>
        <div class="col-8 col-lg-6">
          <div class="input-group">
            <input id="url" name="url" type="url" class="form-control" required="required">
            <p id="urlvalid" class="text-danger"></p>
          </div>
        </div>
      </div>
      <div class="form-group row">
        <label for="textarea1" class="col-4 col-lg-3 col-form-label">Alamat Lengkap</label>
        <div class="col-8">
          <textarea id="alamat" name="alamat" cols="40" rows="2" class="form-control" required="required"></textarea>
          <p id="alamatvalid" class="text-danger"></p>
        </div>
      </div>
      <div class="form-group row">
        <label for="text5" class="col-4 col-lg-3 col-form-label">Latitude, Longtitude</label>
        <div class="col-8 col-lg-4">
          <input id="titude" name="titude" type="text" class="form-control">
          <p id="titudevalid" class="text-danger"></p>
        </div>
      </div>
      <div class="form-group row">
        <div class="offset-3 col-8 pt-3">
          <button name="submit" type="submit" class="btn btn-outline-primary" onclick="formValidation()">Submit</button>
        </div>
      </div>
    </form>
  </div>
  <!-- akhir Form -->

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
