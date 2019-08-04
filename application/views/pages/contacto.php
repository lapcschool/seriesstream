<!DOCTYPE html>
<html lang="en">

<head>

  <!-- Basic Page Needs
	================================================== -->
  <meta charset="utf-8">
  <title>TrailersStream</title>
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
              <a href="<?php echo base_url(); ?>">
                <img class="img-responsive" src="<?php echo base_url(); ?>assets/TrailerStream/images/logo.png" alt="logo">
              </a>
            </div>
          </div>
          <!--/ Logo end -->
          <nav class="collapse navbar-collapse clearfix" role="navigation">
            <ul class="nav navbar-nav navbar-right">
              <li class="active"><a href="<?php echo base_url(); ?>">Inicio</a></li>
              <li><a href="<?php echo base_url(); ?>home/trailers">Trailers</a></li>
              <li><a href="<?php echo base_url(); ?>home/nosotros">Nosotros</a></li>
              <li><a href="<?php echo base_url(); ?>home/contacto">Contacto</a></li>
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
          <h2><?php echo $title ?></h2>
        </div>
      </div><!-- Subpage title end -->
    </div><!-- Banner area end -->

    <!-- Main container start -->

    <section id="main-container">
      <div class="container">

        <div class="row">
          <!-- Map start here -->
          <div id="map-wrapper" class="no-padding">
            <div class="map" id="map"></div>
          </div>
          <!--/ Map end here -->

        </div><!-- Content row  end -->

        <div class="gap-40"></div>

        <div class="row">
          <div class="col-md-7">
            <form id="contact-form" action="contact-form.php" method="post" role="form">
              <div class="row">
                <div class="col-md-4">
                  <div class="form-group">
                    <label>Nombre</label>
                    <input class="form-control" name="name" id="name" placeholder="" type="text" required>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    <label>Email</label>
                    <input class="form-control" name="email" id="email" placeholder="" type="email" required>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    <label>Asunto</label>
                    <input class="form-control" name="subject" id="subject" placeholder="" required>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <label>Mensaje</label>
                <textarea class="form-control" name="message" id="message" placeholder="" rows="10" required></textarea>
              </div>
              <div class="text-right"><br>
                <button class="btn btn-primary solid blank" type="submit">Enviar Mensaje</button>
              </div>
            </form>
          </div>
          <div class="col-md-5">
            <div class="contact-info">
              <h3>Detalles de contacto</h3>
              <p>TrailerStream tu mejor elección para ver Trailers.</p>
              <br>
              <p><i class="fa fa-home info"></i> Autopista Las Américas, Km. 27, PCSD, La Caleta, Boca Chica 11606 </p>
              <p><i class="fa fa-envelope-o info"></i> 20175295@itla.edu.do</p>
              <p><i class="fa fa-envelope-o info"></i> 20175379@itla.edu.do</p>
              <p><i class="fa fa-envelope-o info"></i> 20175180@itla.edu.do</p>
              <p><i class="fa fa-envelope-o info"></i> 20174449@itla.edu.do</p>
              <p><i class="fa fa-envelope-o info"></i> 20175541@itla.edu.do</p>
            </div>
          </div>
        </div>

      </div>
      <!--/ container end -->

    </section>
    <!--/ Main container end -->