<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title> Gritinai - Artificial Intelligence in benin </title>
  <meta name="description"
    content="GritinAI manages companies database and bridge the gap between businesses and their customers, also conducting trainings, building products and mentoring.">
  <!-- <meta content="GritinAI is a startup that brings the light of Artificial Intelligence in different fields, 
  centered on conducting trainings, building products and help matching mentees with mentors" name="description"> -->
  <meta content="startup,Gritinai,machine learning, technology, data scientist, data Science,Learn Data Science,Artificial Intelligence" name="keywords">
  <meta name="google-site-verification" content="kBzvVl4J539Jh_ylqXHfBilQDJKoPQtNlG2mzwgDdDI" />
  <!-- Favicons -->
  <link href="assets/img/logo.png" rel="icon">
  <link href="assets/img/logo.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Raleway:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
    rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">
@livewireStyles
</head>
<!-- Google tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-237007603-1">
</script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag() { dataLayer.push(arguments); }
  gtag('js', new Date());

  gtag('config', 'UA-237007603-1');
</script>

<body class="page-index">

  <!-- ======= Header ======= -->
  <header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

      <a href="/" class="logo d-flex align-items-center">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <img src="/assets/img/logo.png" alt="">
        <h1 class="d-flex align-items-center"> Gritinai</h1>
      </a>

      <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
      <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="/" class="active">Home</a></li>
          <li><a href="/about">About</a></li>
          <li><a href="/services">Services</a></li>
          <!-- <li><a href="blog.html">Events</a></li> -->
          <li><a href="contact.html">Contact</a></li>
        </ul>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->


  @yield('hero')

  <main id="main">

    @yield('breadcrumbs')
    @yield('content')
 
  </main>  

 <!-- ======= Footer ======= -->
 <footer id="footer" class="footer">

    <div class="footer-content">
      <div class="container">
        <div class="row gy-4">
          <div class="col-lg-5 col-md-12 footer-info">
            <a href="/" class="logo d-flex align-items-center">
              <span>Gritinai</span>
            </a>
            <p>
              GritinAI manages companies database and bridge the gap between businesses and their customers, also
              conducting trainings, building products and mentoring.
            </p>
            <h3 class="fw-bolder fs-5">Motto:&nbsp; <span>Your data is your power</span></h3>
            <div class="social-links d-flex  mt-3">
              <a href="https://twitter.com/GritinAI?t=MExR6i1aZAuyPwV0XRQ2_g&s=09" class="twitter"><i
                  class="bi bi-twitter"></i></a>
              <a href="https://www.facebook.com/GritinAI" class="facebook"><i class="bi bi-facebook"></i></a>
              <a href=" https://instagram.com/gritinai?igshid=YmMyMTA2M2Y=" class="instagram"><i
                  class="bi bi-instagram"></i></a>
              <a href="https://www.linkedin.com/company/gritinai/" class="linkedin"><i class="bi bi-linkedin"></i></a>
              <a href="https://www.youtube.com/channel/UCht6n_8ZkqwcFWlcMUdho5A" class="linkedin"><i
                  class="bi bi-youtube"></i></a>
              <a href="https://medium.com/@gritinai" class="linkedin"><i class="bi bi-medium"></i></a>
              <a href="https://github.com/GritinAI" class="Github"><i class="bi bi-github"></i></a>
              <a href="https://discord.gg/QkU33teM" class="Github"><i class="bi bi-discord"></i></a>
            </div>
          </div>

          <div class="col-lg-2 col-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bi bi-dash"></i> <a href="/">Home</a></li>
              <li><i class="bi bi-dash"></i> <a href="about.html">About us</a></li>
              <li><i class="bi bi-dash"></i> <a href="/services">Services</a></li>
              <li><i class="bi bi-dash"></i> <a href="https://forms.gle/YwZX8LmzZ3wNNXac8">Support</a></li>
              <!-- <li><i class="bi bi-dash"></i> <a href="#">Privacy policy</a></li> -->
            </ul>
          </div>

          <div class="col-lg-2 col-6 footer-links">
            <h4>Our Services</h4>
            <ul>
              <li><i class="bi bi-dash"></i> <a href="/services">Mentoring</a></li>
              <li><i class="bi bi-dash"></i> <a href="/services">Building products</a></li>
              <li><i class="bi bi-dash"></i> <a href="/services">Training</a></li>
              <li><i class="bi bi-dash"></i> <a href="/services">Grow your business</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-12 footer-contact text-center text-md-start">
            <h4>Contact Us</h4>
            <!-- <p>
              A108 Adam Street <br>
              New York, NY 535022<br>
              United States <br><br> -->
            <strong>Whatsapp:</strong> +2348076899750<br>
            <strong>Email:</strong> gritinai@gmail.com<br>
            <!-- <strong>Medium:</strong> https://medium.com/@gritinai<br> -->
            </p>

          </div>

        </div>
      </div>
    </div>

    <div class="footer-legal">
      <div class="container">
        <div class="copyright">
          &copy;2022 Copyright <strong><span>Gritinai</span></strong>. All Rights Reserved
        </div>
        <!-- <div class="credits">
          Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
        </div> -->
      </div>
    </div>
  </footer><!-- End Footer -->
  <!-- End Footer -->

  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i
      class="bi bi-arrow-up-short"></i></a>

  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>


@livewireScripts
</body>

</html>  