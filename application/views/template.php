
<?php
  $tit="InfoClim";
  if(isset($title)) $tit=$title;
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>InfoClim - <?php echo $tit ?></title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="<?php echo assets_url("/img/favicon.png") ?>" rel="icon">
  <link href="<?php echo assets_url("/img/apple-touch-icon.png") ?>" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="<?php echo assets_url("/vendor/animate.css/animate.min.css") ?>" rel="stylesheet">
  <link href="<?php echo assets_url("/vendor/bootstrap/css/bootstrap.min.css") ?>" rel="stylesheet">
  <link href="<?php echo assets_url("/vendor/bootstrap-icons/bootstrap-icons.css") ?>" rel="stylesheet">
  <link href="<?php echo assets_url("/vendor/boxicons/css/boxicons.min.css") ?>" rel="stylesheet">
  <link href="<?php echo assets_url("/vendor/glightbox/css/glightbox.min.css") ?>" rel="stylesheet">
  <link href="<?php echo assets_url("/vendor/swiper/swiper-bundle.min.css") ?>" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="<?php echo assets_url("/style.css") ?>" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Green - v4.7.0
  * Template URL: https://bootstrapmade.com/green-free-one-page-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Top Bar ======= -->
  <section id="topbar" class="d-flex align-items-center">
    <div class="container d-flex justify-content-center justify-content-md-between">
      <div class="contact-info d-flex align-items-center">
        <i class="bi bi-envelope-fill"></i><a href="mailto:contact@example.com">info@example.com</a>
        <i class="bi bi-phone-fill phone-icon"></i> +261 33 33 555 55
      </div>
      <div class="social-links d-none d-md-block">
        <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
        <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
        <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
        <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></i></a>
      </div>
    </div>
  </section>

  <!-- ======= Header ======= -->
  <header id="header" class="d-flex align-items-center">
    <div class="container d-flex align-items-center">

      <h1 class="logo me-auto"><a href="<?php echo site_url("Welcome") ?>">InfoClim</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto"><img src="<?php echo assets_url("/img/logo.png") ?>" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="<?php echo site_url("actualites.php") ?>">Actualités</a></li>
          <li><a class="nav-link scrollto" href="<?php echo site_url("impacts-du-rechauffement-climatique.php") ?>">Impacts du réchauffement climatique</a></li>
          <li><a class="getstarted scrollto" href="<?php echo site_url("sensibilisation-pour-rechauffement-climatique.php") ?>">Sensibilisations</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">

      <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

      <div class="carousel-inner" role="listbox">

        <!-- Slide 1 -->
        <div class="carousel-item active" style="background-image: url(<?php echo assets_url("/img/slides/slide-1.jpg") ?>)">
          <div class="carousel-container">
            <div class="container">
              <h2 class="animate__animated animate__fadeInDown">Bienvenue dans <span>Info Clim</span></h2>
              <p class="animate__animated animate__fadeInUp">Information sur le rechauffement Climatique</p>
              
            </div>
          </div>
        </div>

        <!-- Slide 2 -->
        <div class="carousel-item" style="background-image: url(<?php echo assets_url("/img/slides/slide-2.jpg") ?>)">
          <div class="carousel-container">
            <div class="container">
			<h2 class="animate__animated animate__fadeInDown">Bienvenue dans <span>Info Clim</span></h2>
              <p class="animate__animated animate__fadeInUp">Information sur le rechauffement Climatique</p>
              
            </div>
          </div>
        </div>

        <!-- Slide 3 -->
        <div class="carousel-item" style="background-image: url(<?php echo assets_url("/img/slides/slide-3.jpg") ?>)">
          <div class="carousel-container">
            <div class="container">
			<h2 class="animate__animated animate__fadeInDown">Bienvenue dans <span>Info Clim</span></h2>
              <p class="animate__animated animate__fadeInUp">Information sur le rechauffement Climatique</p>
              
            </div>
          </div>
        </div>

      </div>

      <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
        <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
      </a>

      <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
        <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
      </a>

    </div>
  </section><!-- End Hero -->
  
  <main id="main">
  <?php
                if (isset($vue)) $this->load->view($vue);
                ?>
	</main>


  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container">
      <h3>Info Clim</h3>
      <p>Merci.</p>
      <div class="social-links">
        <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
        <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
        <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
        <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
      </div>
      <div class="copyright">
        &copy; Copyright <strong><span>InfoClim</span></strong>. ETU1161
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/green-free-one-page-bootstrap-template/ -->
      
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="<?php echo assets_url("/vendor/bootstrap/js/bootstrap.bundle.min.js") ?>"></script>
  <script src="<?php echo assets_url("/vendor/glightbox/js/glightbox.min.js") ?>"></script>
  <script src="<?php echo assets_url("/vendor/isotope-layout/isotope.pkgd.min.js") ?>"></script>
  <script src="<?php echo assets_url("/vendor/swiper/swiper-bundle.min.js") ?>"></script>
  <script src="<?php echo assets_url("/vendor/php-email-form/validate.js") ?>"></script>

  <!-- Template Main JS File -->
  <script src="<?php echo assets_url("/js/main.js") ?>"></script>

</body>

</html>