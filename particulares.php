<?php
include_once 'common.php';
?>

<!DOCTYPE HTML>
<html lang="es">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="<?php echo $lang['META_DESCRIPTION']; ?>" />
<meta  charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- Favicons -->
<link rel="shortcut icon" href="favicon.png">
<link rel="apple-touch-icon" href="apple-touch-icon.png">
<link rel="apple-touch-icon" sizes="72x72" href="apple-touch-icon-72x72.png">
<link rel="apple-touch-icon" sizes="114x114" href="apple-touch-icon-114x114.png">

<title>Node</title>

<!-- Styles -->
<link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400i,700,700i|Poppins:300,400,500,600,700" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Libre+Baskerville:400i" rel="stylesheet">
<link href="css/style.css" rel="stylesheet" media="screen">
</head>
<body>

<div class="animsition">

    <!-- Content CLick Capture-->

    <div class="click-capture"></div>

    <!-- Sidebar Menu-->

    <div class="menu">
      <span class="close-menu icon-cross2 right-boxed"></span>
      <div class="menu-lang right-boxed">
        <a href="index.php?lang=es">Esp</a>
        <a href="index.php?lang=en">Eng</a>
      </div>
      <ul class="menu-list right-boxed">
        <li class="active">
          <a  href="./index.php"><?php echo $lang['MENU_INDEX']; ?></a>
        </li>
        <li>
          <a  href="./about.php"><?php echo $lang['MENU_ABOUT']; ?></a>
        </li>
        <li>
          <a  href="./works.php"><?php echo $lang['MENU_WORKS']; ?></a>
        </li>
        <li>
          <a  href="./contact.php"><?php echo $lang['MENU_CONTACT']; ?></a>
        </li>
      </ul>
      <div class="menu-footer right-boxed">
        <div class="social-list">
          <a href="https://www.facebook.com/NODEGestion/" class="icon ion-social-facebook" target="_blank"></a>
          <a href="https://www.linkedin.com/company/11175329/" class="icon ion-social-linkedin" target="_blank"></a>
        </div>
        <div class="copy"><?php echo $lang['MENU_FOOTER']; ?></div>
      </div>
    </div>

    <!-- Navbar -->

    <header class="navbar navbar-2  boxed">
      <div class="navbar-bg"></div>
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>

      <a class="brand" href="#">
        <img id="logo-white" class="brand-img" alt="" src="images/brand.png">
        <img id="logo" class="brand-img-white" alt="" src="images/brand.png">
        <div class="brand-info">
          <!--<div class="brand-name">NODE GESTIÓN</div>-->
          <div class="brand-text"><?php echo $lang['MENU_BRAND_TEXT']; ?></div>
        </div>
      </a>
      <address class="navbar-address visible-lg"><?php echo $lang['ADDRESS_CONTACT']; ?><span class="text-dark"><?php echo $lang['ADDRESS_CONTACT_PHONE']; ?></span></address>
      <div class="social-list hidden-xs">
        <a href="https://www.facebook.com/NODEGestion/" class="icon ion-social-facebook" target=""></a>
        <a href="https://www.linkedin.com/company/11175329/" class="icon ion-social-linkedin" target="_blank"></a>

      </div>
    </header>

    <!-- Pageheader -->

    <section class="section section-mod bg-dots">
      <main class="page-header-3">
        <div class="container">
          <div class="row">
            <div class="col-md-3">
              <div class="title-hr"></div>
            </div>
            <div class="col-md-8 col-lg-8"><h1><?php echo $lang['PARTICULARES_TITLE']; ?></h1></div>
          </div>
        </div>
      </main>
    </section>

          <section class="section section-mod about-info">
            <div class="container">
              <div class="row">
                <div class="col-md-12">
                  <div class="row-services row">
                    <div class="col-service col-sm-6 col-lg-3">
                      <span class="text-dark icon-medium icon-apartment"></span>
                      <h4><?php echo $lang['ALL_SERVICE_TITLE_ARQ']; ?></h4>
                      <p class="text-dark"><?php echo $lang['ALL_SERVICE_DESCRIPTION_ARQ']; ?></p>
                    </div>
                    <div class="col-service col-sm-6 col-lg-3">
                      <span class="text-dark icon-medium icon-paint-roller"></span>
                      <h4><?php echo $lang['ALL_SERVICE_TITLE_CONST']; ?></h4>
                      <p class="text-dark"><?php echo $lang['ALL_SERVICE_DESCRIPTION_CONST']; ?></p>
                    </div>
                    <div class="col-service col-sm-6 col-lg-3">
                      <span class="text-dark icon-medium icon-paint-roller"></span>
                      <h4><?php echo $lang['All_SERVICE_TITLE_REFORMA']; ?></h4>
                      <p class="text-dark"><?php echo $lang['ALL_SERVICE_DESCRIPTION_REFORMA']; ?></p>
                    </div>
                    <div class="col-service col-sm-6 col-lg-3">
                      <span class="text-dark icon-medium icon-paint-roller"></span>
                      <h4><?php echo $lang['ALL_SERVICE_TITLE_REHA']; ?></h4>
                      <p class="text-dark"><?php echo $lang['ALL_SERVICE_DESCRIPTION_REHA']; ?></p>
                    </div>
                    <div class="col-service col-sm-6 col-lg-3">
                      <span class="text-dark icon-medium icon-paint-roller"></span>
                      <h4><?php echo $lang['ALL_SERVICE_TITLE_DOM']; ?></h4>
                      <p class="text-dark"><?php echo $lang['ALL_SERVICE_DESCRIPTION_DOM']; ?></p>
                    </div>
                    <div class="clearfix visible-sm visible-md"></div>
                    <div class="col-service col-sm-6 col-lg-3">
                      <span class="text-dark icon-medium icon-pencil-ruler"></span>
                      <h4><?php echo $lang['ALL_SERVICE_TITLE_TELEC']; ?></h4>
                      <p class="text-dark"><?php echo $lang['ALL_SERVICE_DESCRIPTION_TELEC']; ?></p>
                    </div>
                  </div>
                </div>
              </div>
            </section>

        <section class="section section-mod about-info">
          <div class="content bg-dots">
          <div class=""></div>
          <div class="page-inner">
            <section class="section about-info">
              <div class="container">
                <div class="row">
                  <div class="col-md-3">
                    <div class="section-info">
                      <div class="title-hr"></div>
                      <div class="info-title"><?php echo $lang['PARTICULARES_NUEVA_OBRA']; ?></div>
                    </div>
                  </div>
                  <div class="col-md-9">
                    <div class="text-display-1 text-dark"><?php echo $lang['PARTICULARES_NUEVA_OBRA_DESCRIPTION']; ?> </div>
                      <li class="text-display-2 text-dark"><?php echo $lang['PARTICULARES_NUEVA_OBRA_1']; ?></li>
                      <li class="text-display-2 text-dark"><?php echo $lang['PARTICULARES_NUEVA_OBRA_2']; ?></li>
                      <li class="text-display-2 text-dark"><?php echo $lang['PARTICULARES_NUEVA_OBRA_3']; ?></li>
                      <li class="text-display-2 text-dark"><?php echo $lang['PARTICULARES_NUEVA_OBRA_4']; ?></li>
                      <li class="text-display-2 text-dark"><?php echo $lang['PARTICULARES_NUEVA_OBRA_5']; ?></li>
                  </div>
                </div>
              </div>
        </section>

        <section class="section about-info">
          <div class="container">
            <div class="row">
              <div class="col-md-3">
                <div class="section-info">
                  <div class="title-hr"></div>
                  <div class="info-title"><?php echo $lang['PARTICULARES_REFORMA_TITLE']; ?></div>
                </div>
              </div>
              <div class="col-md-9">
                <div class="text-display-1 text-dark"><?php echo $lang['PARTICULARES_REFORMA_DESCRIPTION']; ?> </div>
                  <li class="text-display-2 text-dark"><?php echo $lang['PARTICULARES_REFORMA_1']; ?></li>
                  <li class="text-display-2 text-dark"><?php echo $lang['PARTICULARES_REFORMA_2']; ?></li>
                  <li class="text-display-2 text-dark"><?php echo $lang['PARTICULARES_REFORMA_3']; ?></li>
              </div>
            </div>
          </div>
        </section>

        <section class="section about-info">
          <div class="container">
            <div class="row">
              <div class="col-md-3">
                <div class="section-info">
                  <div class="title-hr"></div>
                  <div class="info-title"><?php echo $lang['PARTICULARES_TECH_TITLE']; ?></div>
                </div>
              </div>
              <div class="col-md-9">
                <div class="text-display-1 text-dark"><?php echo $lang['PARTICULARES_TECH_DESCRIPTION']; ?> </div>
                  <li class="text-display-2 text-dark"><?php echo $lang['PARTICULARES_TECH_1']; ?></li>
                  <li class="text-display-2 text-dark"><?php echo $lang['PARTICULARES_TECH_2']; ?></li>
                  <li class="text-display-2 text-dark"><?php echo $lang['PARTICULARES_TECH_3']; ?></li>
                  <li class="text-display-2 text-dark"><?php echo $lang['PARTICULARES_TECH_4']; ?></li>
              </div>
            </div>
          </div>
        </section>
    <!-- Footer -->

        <footer id="footer" class="footer section">
          <div class="footer-flex">
            <div class="flex-item">
              <a class="brand pull-left" href="./index.php">
                <img alt="" src="images/brand.png">
              </a>
            </div>
            <div class="flex-item">
              <div class="inline-block"><?php echo $lang['MENU_FOOTER']; ?></div>
            </div>
            <!--
            <div class="flex-item">
              <ul>
                <li><a href="">Site Map</a></li>
                <li><a href="">Term & Conditions</a></li>
                <li><a href="">Privacy Policy</a></li>
                <li><a href="">Help</a></li>
                <li><a href="">Affiliatep</a></li>
              </ul>
            </div>
            <div class="flex-item">
              <ul>
                <li><a href="">Our Location</a></li>
                <li><a href="">Career</a></li>
                <li><a href="">About</a></li>
                <li><a href="">Contact</a></li>
              </ul>
            </div>
          -->
            <div class="flex-item">
              <ul>
                <li><a href="works.php?lang=es">Esp</a></li>
                <li><a href="works.php?lang=en">Eng</a></li>
              </ul>
            </div>
            <div class="flex-item">
              <div class="social-list">
                <a href="https://www.facebook.com/NODEGestion/" class="icon ion-social-facebook" target="_blank"></a>
              </div>
            </div>
          </div>
        </footer>
      </div>
    </div>

<!-- jQuery -->

<script src="js/jquery.min.js"></script>
<script src="js/animsition.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/smoothscroll.js"></script>
<script src="js/jquery.validate.min.js"></script>
<script src="js/wow.min.js"></script>
<script src="js/jquery.stellar.min.js"></script>
<script src="js/jquery.magnific-popup.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/isotope.pkgd.min.js"></script>
<script src="js/imagesloaded.pkgd.min.js"></script>
<script src="js/plugins.js"></script>
<script src="js/sly.min.js"></script>


<!-- Slider revolution -->
<script src="js/rev-slider/jquery.themepunch.tools.min.js"></script>
<script src="js/rev-slider/jquery.themepunch.revolution.min.js"></script>

<!-- Slider revolution 5x Extensions   -->
<script src="js/rev-slider/revolution.extension.actions.min.js"></script>
<script src="js/rev-slider/revolution.extension.carousel.min.js"></script>
<script src="js/rev-slider/revolution.extension.kenburn.min.js"></script>
<script src="js/rev-slider/revolution.extension.layeranimation.min.js"></script>
<script src="js/rev-slider/revolution.extension.migration.min.js"></script>
<script src="js/rev-slider/revolution.extension.navigation.min.js"></script>
<script src="js/rev-slider/revolution.extension.parallax.min.js"></script>
<script src="js/rev-slider/revolution.extension.slideanims.min.js"></script>
<script src="js/rev-slider/revolution.extension.video.min.js"></script>


<!-- Scripts -->
<script src="js/scripts.js"></script>
<script src="js/rev-slider-init.js"></script>
</body>
</html>
