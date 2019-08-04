<!DOCTYPE html>
<html lang="en">

<head>

  <!-- Basic Page Needs
	================================================== -->
  <meta charset="utf-8">
  <title>BizCraft - Responsive Html5 Template</title>
  <meta name="description" content="">
  <meta name="author" content="">

  <!-- Mobile Specific Metas
	================================================== -->
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

  <!-- Favicons
	================================================== -->
  <link rel="icon" href="<?php echo base_url(); ?>assets/TrailerStream/images/favicon.ico" type="image/x-icon" />
  <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo base_url(); ?>assets/TrailerStream/images/favicon.ico">
  <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo base_url(); ?>assets/TrailerStream/images/favicon.ico">
  <link rel="apple-touch-icon-precomposed" href="<?php echo base_url(); ?>assets/TrailerStream/images/favicon.ico">

  <!-- CSS
	================================================== -->

  <!-- Bootstrap -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/TrailerStream/css/bootstrap.min.css">
  <!-- Template styles-->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/TrailerStream/css/style.css">
  <!-- Responsive styles-->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/TrailerStream/css/responsive.css">
  <!-- FontAwesome -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/TrailerStream/css/font-awesome.min.css">
  <!-- Animation -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/TrailerStream/css/animate.css">
  <!-- Prettyphoto -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/TrailerStream/css/prettyPhoto.css">
  <!-- Owl Carousel -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/TrailerStream/css/owl.carousel.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/TrailerStream/css/owl.theme.css">
  <!-- Flexslider -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/TrailerStream/css/flexslider.css">
  <!-- Flexslider -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/TrailerStream/css/cd-hero.css">
  <!-- Style Swicther -->
  <link id="style-switch" href="<?php echo base_url(); ?>assets/TrailerStream/css/presets/preset3.css" media="screen" rel="stylesheet" type="text/css">

  <!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->
  <!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
      <script src="js/respond.min.js"></script>
    <![endif]-->

</head>

<body>
  <div class="body-inner">
    <!-- Header start -->
    <header id="header" class="navbar-fixed-top header" role="banner">
      <div class="container">
        <div class="row">
          <!-- Logo start -->
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
              <span class="sr-only">TrailerStream</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <div class="navbar-brand navbar-bg">
              <a href="index.html">
                <img class="img-responsive" src="<?php echo base_url(); ?>assets/TrailerStream/images/logo.png" alt="logo">
              </a>
            </div>
          </div>
          <!--/ Logo end -->
          <nav class="collapse navbar-collapse clearfix" role="navigation">
            <ul class="nav navbar-nav navbar-right">
              <li class="active"><a href="<?php echo base_url(); ?>">Inicio</a></li>
              <li><a href="<?php echo base_url(); ?>home/trailers">Trailers</a></li>
              <li><a href="team.html">Nosotros</a></li>
              <li><a href="contact.html">Contacto</a></li>
            </ul>
          </nav>
          <!--/ Navigation end -->
        </div>
        <!--/ Row end -->
      </div>
      <!--/ Container end -->
    </header>
    <!--/ Header end -->

    <div id="banner-area">
      <img src="<?php echo base_url(); ?>assets/TrailerStream/images/banner/banner2.jpg" alt="" />
      <div class="parallax-overlay"></div>
      <!-- Subpage title start -->
      <div class="banner-title-content">
        <div class="text-center">
          <h2>Trailers</h2>
        </div>
      </div><!-- Subpage title end -->
    </div><!-- Banner area end -->

    <!-- Portfolio start -->
    <section id="main-container" class="portfolio-static">
      <div class="container">
        <div class="row">
          <div class="col-md-12 heading">
            <span class="title-icon classic pull-left"><i class="fa fa-film"></i></span>
            <h2 class="title classic">Trailers Disponibles</h2>
          </div>
        </div> <!-- Title row end -->
      </div>

      <div class="container">
        <div class="row">

          <div class="col-sm-3 portfolio-static-item">
            <div class="grid">
              <figure class="effect-oscar">
                <img src="<?php echo base_url(); ?>assets/TrailerStream/images/portfolio/portfolio1.jpg" alt="">
                <figcaption>
                  <a class="link icon-pentagon" href="portfolio-item.html"><i class="fa fa-link"></i></a>
                  <a class="view icon-pentagon" data-rel="prettyPhoto" href="<?php echo base_url(); ?>assets/TrailerStream/images/portfolio/portfolio-bg1.jpg"><i class="fa fa-search"></i></a>
                </figcaption>
              </figure>
              <div class="portfolio-static-desc">
                <h3>Startup Business</h3>
                <span><a href="#">Illustrations</a></span>
              </div>
            </div>
            <!--/ grid end -->
          </div>
          <!--/ item 1 end -->

        </div><!-- Content row end -->

        <div class="col-md-12 text-center">
          <nav aria-label="Page navigation">
            <ul class="pagination justify-content-center">
              <li class="page-item disabled">
                <a class="page-link" href="#" tabindex="-1">Previous</a>
              </li>
              <li class="page-item"><a class="page-link" href="#">1</a></li>
              <li class="page-item"><a class="page-link" href="#">2</a></li>
              <li class="page-item"><a class="page-link" href="#">3</a></li>
              <li class="page-item">
                <a class="page-link" href="#">Next</a>
              </li>
            </ul>
          </nav>
        </div>
      </div><!-- Container end -->
    </section><!-- Portfolio end -->

    <!-- Footer start -->
    <section id="footer" class="footer footer-map">
      <div class="container">
        <div class="row">
          <div class="col-md-12 text-center">
            <div class="footer-logo">
              <img src="<?php echo base_url(); ?>assets/TrailerStream/images/logo.png" width="170px" alt="logo">
            </div>
            <div class="gap-20"></div>
            <ul class="dark unstyled">
              <li>
                <a title="Twitter" href="#">
                  <span class="icon-pentagon wow bounceIn"><i class="fa fa-github"></i></span>
                </a>
                <a title="linkedin" href="#">
                  <span class="icon-pentagon wow bounceIn"><i class="fa fa-linkedin"></i></span>
                </a>
              </li>
            </ul>
          </div>
        </div>
        <!--/ Row end -->
        <div class="row">
          <div class="col-md-12 text-center">
            <div class="copyright-info">
              &copy; Copyright 2019 Themefisher. <span>Designed by <a href="https://themefisher.com">THEMEFISHER</a></span>
            </div>
          </div>
        </div>
        <!--/ Row end -->
        <div id="back-to-top" data-spy="affix" data-offset-top="10" class="back-to-top affix">
          <button class="btn btn-primary" title="Back to Top"><i class="fa fa-angle-double-up"></i></button>
        </div>
      </div>
      <!--/ Container end -->
    </section>
    <!--/ Footer end -->

    <!-- Javascript Files
  ================================================== -->

    <!-- initialize jQuery Library -->
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/TrailerStream/js/jquery.js"></script>
    <!-- Bootstrap jQuery -->
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/TrailerStream/js/bootstrap.min.js"></script>
    <!-- Style Switcher -->
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/TrailerStream/js/style-switcher.js"></script>
    <!-- Owl Carousel -->
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/TrailerStream/js/owl.carousel.js"></script>
    <!-- PrettyPhoto -->
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/TrailerStream/js/jquery.prettyPhoto.js"></script>
    <!-- Bxslider -->
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/TrailerStream/js/jquery.flexslider.js"></script>
    <!-- CD Hero slider -->
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/TrailerStream/js/cd-hero.js"></script>
    <!-- Isotope -->
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/TrailerStream/js/isotope.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/TrailerStream/js/ini.isotope.js"></script>
    <!-- Wow Animation -->
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/TrailerStream/js/wow.min.js"></script>
    <!-- SmoothScroll -->
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/TrailerStream/js/smoothscroll.js"></script>
    <!-- Eeasing -->
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/TrailerStream/js/jquery.easing.1.3.js"></script>
    <!-- Counter -->
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/TrailerStream/js/jquery.counterup.min.js"></script>
    <!-- Waypoints -->
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/TrailerStream/js/waypoints.min.js"></script>
    <!-- Template custom -->
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/TrailerStream/js/custom.js"></script>
  </div><!-- Body inner end -->
</body>

</html>
