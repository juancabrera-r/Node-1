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

    <header class="navbar navbar-2 navbar-white boxed">
      <div class="navbar-bg"></div>
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>

      <a class="brand">
        <img id="logo-white" class="brand-img" alt="" src="images/brand.png">
        <img id="logo" class="brand-img-white" alt="" src="images/brand-white-2.png">
        <div class="brand-info">
          <!--<div class="brand-name">NODE GESTIÓN</div>-->
          <div class="brand-text"><?php echo $lang['MENU_BRAND_TEXT']; ?></div>
        </div>
      </a>
      <address class="navbar-address visible-lg"><?php echo $lang['ADDRESS_CONTACT']; ?><span class="text-dark">828 908 650</span></address>
      <div class="social-list hidden-xs">
        <a href="https://www.facebook.com/NODEGestion/" class="icon ion-social-facebook" target="_blank"></a>
        <a href="https://www.linkedin.com/company/11175329/" class="icon ion-social-linkedin" target="_blank"></a>

      </div>
    </header>
    <div class="copy-bottom white boxed">© COGESA S.L. 2017.</div>
    <div class="lang-bottom white boxed">
      <div class="menu-lang">
        <a href="index.php?lang=es">Esp</a>
        <a href="index.php?lang=en">Eng</a>
      </div>
    </div>
    <div class="pagepiling">
      <div class="pp-scrollable text-white section section-1">
        <div class="scroll-wrap">
          <div id="Carousel" class="section-bg carousel slide" data-ride="carousel" data-interval="3000">
              <div class="carousel-inner" role="listbox">
                <div class="item active">
                  <img src="images/bg/bg1-min.jpg" alt="Chania" width="100%" height="100%">
                </div>

                <div class="item">
                  <img src="images/bg/bg3-min.png" alt="Chania" width="100%" height="100%">
                </div>

                <div class="item">
                  <img src="images/bg/bg2-6-min.JPG" alt="Flower" width="100%" height="100%">
                </div>

                <div class="item">
                  <img src="images/bg/bg2-3-min.JPG" alt="Flower" width="100%" height="100%">
                </div>
              </div>
          </div>

<!--    MAIN    -->
          <div class="scrollable-content">
            <div class="vertical-centred">
              <div class="boxed boxed-inner">
                <div class="vertical-title hidden-xs hidden-sm"><span><?php echo $lang['VERTICAL_MENU_1']; ?></span></div>
                <div class="boxed">
                  <div class="container">
                    <div class="intro">
                      <div class="row">
                        <div class="col-md-8 col-lg-6">
                          <p class="subtitle-top"> <?php echo $lang['SUBTITLE']; ?><br>NODE GESTIÓN</p>
                          <h1 class="display-2 text-white"><?php echo $lang['LEMA_1']; ?><span class="text-primary"><?php echo $lang['LEMA_2']; ?></span></h1>
                          <div class="hr-bottom"></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

<!--    SERVICES   -->
      <div class="pp-scrollable section section-1">
        <div class="scroll-wrap">
          <div class="scrollable-content">
            <div class="vertical-centred">
              <div class="boxed boxed-inner">
                <div class="vertical-title text-dark hidden-xs hidden-sm"><span><?php echo $lang['VERTICAL_MENU_2']; ?></span></div>
                <div class="boxed">
                  <div class="container">
                    <div class="intro">
                      <div class="row">
                        <div class="col-md-5 col-lg-5">
                          <h2 class="title-uppercase text-primary"><?php echo $lang['TITLE_SECTION_2_1']; ?></h2>
                          <ul class="service-list">
                            <li><a href=""><?php echo $lang['SERVICE_SECTION_2_1']; ?></a></li>
                            <li><a href=""><?php echo $lang['SERVICE_SECTION_2_2']; ?></a></li>
                            <li><a href=""><?php echo $lang['SERVICE_SECTION_2_3']; ?></a></li>
                            <li><a href=""><?php echo $lang['SERVICE_SECTION_2_4']; ?></a></li>
                            <li><a href=""><?php echo $lang['SERVICE_SECTION_2_5']; ?></a></li>
                            <li><a href=""><?php echo $lang['SERVICE_SECTION_2_6']; ?></a></li>
                          </ul>
                        </div>
                        <div class="col-md-4 col-lg-6 col-md-offset-1 col-lg-offset-1">
                          <h2 class="title-uppercase text-primary"><?php echo $lang['TITLE_SECTION_2_2']; ?></h2>
                          <ul class="service-list">
                            <li><a href="particulares.php"><?php echo $lang['SERVICE_CLIENTE_1']; ?></a></li>
                            <li><a href="empresa.php"><?php echo $lang['SERVICE_CLIENTE_2']; ?></a></li>
                            <li><a href="comunidades.php"><?php echo $lang['SERVICE_CLIENTE_3']; ?></a></li>
                            <li><a href=""><?php echo $lang['SERVICE_CLIENTE_4']; ?></a></li>
                            <li><a href=""><?php echo $lang['SERVICE_CLIENTE_5']; ?></a></li>
                            <li><a href=""><?php echo $lang['SERVICE_CLIENTE_6']; ?></a></li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

<!--    INSTALATIONS    -->
      <div class="pp-scrollable text-white section section-1">
        <div class="scroll-wrap">
          <div class="section-bg" style="background-image:url(images/bg/bg2-2-min.jpg);"></div>
          <div class="scrollable-content ">
            <div class="vertical-centred">
              <div class="boxed boxed-inner">
                <div class="vertical-title hidden-xs hidden-sm"><span><?php echo $lang['VERTICAL_MENU_3']; ?></span></div>
                <div class="boxed">
                  <div class="container">
                    <div class="intro">
                      <div class="row">
                        <div class="col-md-5 col-lg-5">
                          <!--  <p class="subtitle-top text-dark">Nuestro producto especial</p>-->
                          <h2 class="title-uppercase text-white"><?php echo $lang['TITLE_SECTION_3_1']; ?><br> <span class="text-primary"><?php echo $lang['TITLE_SECTION_3_2']; ?></span><?php echo $lang['TITLE_SECTION_3_3']; ?></h2>
                          <ul class="service-list">
                            <li><a href=""><?php echo $lang['SERVICE_SECTION_3_1']; ?></a></li>
                            <li><a href=""><?php echo $lang['SERVICE_SECTION_3_2']; ?></a></li>
                            <li><a href=""><?php echo $lang['SERVICE_SECTION_3_3']; ?></a></li>
                          </ul>
                        </div>
                        <div class="col-md-6 col-lg-5 col-md-offset-1 col-lg-offset-2">
                          <div class="dots-image-2">
                            <div class="dots"></div>
                            <div class="experience-info">
                              <div class="number text-white">10</div>
                              <div class="text text-white "><?php echo $lang['LEMA_SECTION_3_1']; ?><br><?php echo $lang['LEMA_SECTION_3_2']; ?><br><?php echo $lang['LEMA_SECTION_3_3']; ?></div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

<!--    LAST PROJECTS    -->
      <div class="pp-scrollable section section-1">
        <div class="scroll-wrap">
          <div class="scrollable-content">
            <div class="vertical-centred">
              <div class="boxed boxed-inner">
                <div class="vertical-title hidden-xs hidden-sm"><span><?php echo $lang['VERTICAL_MENU_4']; ?></span></div>
                <div class="boxed">
                  <div class="container">
                    <div class="intro">
                      <div class="row">
                        <div class="col-md-12">
                          <h2 class="title-uppercase"><?php echo $lang['TITLE_SECTION_4_1']; ?></h2>
                          <div class="row-project-box row">
                            <div class="grid-item col-sm-6 col-md-4 col-lg-3 exterior js-isotope-item js-grid-item">
                              <div class="project-item item-shadow">
                                <img alt="" class="img-responsive" src="proyectos/reforma-duplex/muro-pergola-reparado-min.JPG">
                                <div class="project-hover">
                                  <div class="project-hover-content">
                                    <h3 class="project-title"><?php echo $lang['PROJECT_TITLE_1']; ?></h3>
                                    <p class="project-description"><?php echo $lang['PROJECT_DESCRIPTION_1']; ?></p>
                                  </div>
                                </div>
                                <a href="works.php" class="link-arrow"><?php echo $lang['LINK_ARROW']; ?><i class="icon ion-ios-arrow-right"></i></a>
                              </div>
                            </div>
                            <div class="grid-item col-sm-6 col-md-4 col-lg-3 exterior js-isotope-item js-grid-item">
                              <div class="project-item item-shadow">
                                <img alt="" class="img-responsive" src="proyectos/fachada-piedra/fachada-piedra-min.JPG">
                                <div class="project-hover">
                                  <div class="project-hover-content">
                                    <h3 class="project-title"><?php echo $lang['PROJECT_TITLE_2']; ?></h3>
                                    <p class="project-description"><?php echo $lang['PROJECT_DESCRIPTION_2']; ?></p>
                                  </div>
                                </div>
                                <a href="works.php" class="link-arrow"><?php echo $lang['LINK_ARROW']; ?><i class="icon ion-ios-arrow-right"></i></a>
                              </div>
                            </div>
                            <div class="grid-item col-sm-6 col-md-4 col-lg-3 exterior js-isotope-item js-grid-item">
                              <div class="project-item item-shadow">
                                <img alt="" class="img-responsive" src="proyectos/cuarto-apero/cuarto-apero-min.JPG">
                                <div class="project-hover">
                                  <div class="project-hover-content">
                                    <h3 class="project-title"><?php echo $lang['PROJECT_TITLE_3']; ?></h3>
                                    <p class="project-description"><?php echo $lang['PROJECT_DESCRIPTION_3']; ?></p>
                                  </div>
                                </div>
                                <a href="works.php" class="link-arrow"><?php echo $lang['LINK_ARROW']; ?><i class="icon ion-ios-arrow-right"></i></a>
                              </div>
                            </div>
                            <div class="grid-item col-sm-6 col-md-4 col-lg-3 exterior js-isotope-item js-grid-item">
                              <div class="project-item item-shadow">
                                <img alt="" class="img-responsive" src="proyectos/reforma-baño/baño-min.jpg">
                                <div class="project-hover">
                                  <div class="project-hover-content">
                                    <h3 class="project-title"><?php echo $lang['PROJECT_TITLE_4']; ?></h3>
                                    <p class="project-description"><?php echo $lang['PROJECT_DESCRIPTION_4']; ?></p>
                                  </div>
                                </div>
                                <a href="works.php" class="link-arrow"><?php echo $lang['LINK_ARROW']; ?><i class="icon ion-ios-arrow-right"></i></a>
                              </div>
                            </div>
                          </div>
                          <!--<a href="#" class="h5 link-arrow text-white">Ver todos los proyectos <i class="icon icon-chevron-right"></i></a>-->
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

<!--    TESTIMONIOS    -->
      <div class="pp-scrollable text-white section section-4">
        <div class="scroll-wrap">
          <div class="section-bg" style="background-image:url(images/bg/bg3.png);"></div>
          <div class="scrollable-content">
            <div class="vertical-centred">
              <div class="boxed boxed-inner">
                <div class="vertical-title hidden-xs hidden-sm"><span><?php echo $lang['VERTICAL_MENU_5']; ?></span></div>
                <div class="boxed">
                  <div class="container">
                    <div class="intro">
                      <div class="row">
                        <div class="col-md-6 col-lg-5">
                          <span class="icon-quote ion-quote"></span>
                          <h2 class="title-uppercase-2"><?php echo $lang['LEMA_SECTION_5']; ?></h2>
                        </div>
                        <div class="col-md-5 col-lg-5  col-md-offset-1 col-lg-offset-2">
                          <div class="review-carousel owl-carousel">
                            <div class="review-carousel-item">
                              <div class="text">
                              <p><?php echo $lang['TESTIMONIO_1_TEXT_1']; ?></p>
                              <p><?php echo $lang['TESTIMONIO_1_TEXT_2']; ?></p>
                              </div>
                              <div class="review-author">
                                <div class="author-name"><?php echo $lang['TESTIMONIO_1_NAME']; ?></div>
                                <i><?php echo $lang['TESTIMONIO_1_DESCRIPTION_WORK']; ?><br><?php echo $lang['TESTIMONIO_1_FUENTE']; ?></i>
                              </div>
                            </div>
                            <div class="review-carousel-item">
                              <div class="text">
                              <p><?php echo $lang['TESTIMONIO_2_TEXT_1']; ?></p>
                              <p><?php echo $lang['TESTIMONIO_2_TEXT_2']; ?></p>
                              </div>
                              <div class="review-author">
                                <div class="author-name"><?php echo $lang['TESTIMONIO_2_NAME']; ?></div>
                                <i><?php echo $lang['TESTIMONIO_2_DESCRIPTION_WORK']; ?><br><?php echo $lang['TESTIMONIO_2_FUENTE']; ?></i>
                              </div>
                            </div>
                            <div class="review-carousel-item">
                              <div class="text">
                                <p><?php echo $lang['TESTIMONIO_3_TEXT_1']; ?></p>
                                <p><?php echo $lang['TESTIMONIO_3_TEXT_2']; ?></p>                              </div>
                              <div class="review-author">
                                <div class="author-name"><?php echo $lang['TESTIMONIO_3_NAME']; ?></div>
                                <i><?php echo $lang['TESTIMONIO_3_DESCRIPTION_WORK']; ?><br><?php echo $lang['TESTIMONIO_3_FUENTE']; ?></i>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!--    CONTACT    -->
      <div class="pp-scrollable section section-1">
        <div class="scroll-wrap bg-dots">
          <div class="scrollable-content">
            <div class="vertical-centred">
              <div class="boxed boxed-inner">
                <div class="vertical-title text-dark hidden-xs hidden-sm contact-span"><span><?php echo $lang['VERTICAL_MENU_6']; ?></span></div>
                <div class="boxed">
                  <div class="container">
                    <div class="intro overflow-hidden">
                      <div class="row">
                        <div class="col-md-12">
                          <h2 class="title-uppercase"><?php echo $lang['WE_ARE']; ?></h2>
                          <div id="map" class="map-2"></div>
                          <div class="contact-info">
                            <div class="row-contact-info row">
                              <div class="col-contact-info col-md-6 col-lg-4">
                                <div class="row">
                                  <h3 class="col-sm-3 col-md-4">Email</h3>
                                  <div class="col-right col-sm-8 col-md-7 col-sm-offset-1 col-md-offset-1">
                                    <div class="contact-info-row col-sm-6 col-md-12">
                                      <strong class="text-dark"><?php echo $lang['ADMINISTRATION_NAME']; ?></strong><br>
                                      info@nodegestion.es
                                    </div>
                                    <div class="contact-info-row col-sm-6 col-md-12 ">
                                      <strong class="text-dark"><?php echo $lang['OBRAS_NAME']; ?></strong><br>
                                      obras@nodegestion.es
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="col-contact-info col-md-6 col-lg-4">
                                <div class="row">
                                  <h3 class="col-sm-3 col-md-4">Tlf.</h3>
                                  <div class="col-right col-sm-8 col-md-7 col-sm-offset-1 col-md-offset-1">
                                    <div class="contact-info-row col-sm-6 col-md-12">
                                      <strong class="text-dark"><?php echo $lang['OFFICE']; ?></strong><br>
                                      828 908 650
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="col-contact-info col-md-6 col-lg-4">
                                <div class="row">
                                  <h3 class="col-sm-3 col-md-4"><?php echo $lang['ADDRESS_FOOTER']; ?></h3>
                                  <div class="col-right col-sm-8 col-md-7 col-sm-offset-1 col-md-offset-1">
                                    <div class="contact-info-row col-sm-6 col-md-12">
                                      C./Isla la Graciosa, nº2, local izq.
                                      Puerto del Rosario
                                      Fuerteventura
                                      Las Palmas
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
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
<script src="js/isotope.pkgd.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/jquery.pagepiling.js"></script>

<!-- Google Analytics -->
<script>(function(b,l,e,g,h,f){1!==parseInt(e.msDoNotTrack||b.doNotTrack||e.doNotTrack,10)&&b.addEventListener("load",function(){var r=(new Date).getTime();b.galite=b.galite||{};var m=new XMLHttpRequest,n="https://www.google-analytics.com/collect?cid="+(l.uid=l.uid||Math.random()+"."+Math.random())+"&v=1&tid="+galite.UA+"&dl="+f(h.location.href)+"&ul=en-us&de=UTF-8",a=function(b){var d="",c;for(c in b){if(void 0===b[c])return!1;d+=f(b[c])}return d},p={dt:[h.title],sd:[g.colorDepth,"-bit"],sr:[g.availHeight,"x",g.availWidth],vp:[innerWidth,"x",innerHeight],dr:[h.referrer]},k;for(k in p){var q=k+"="+a(p[k]);q&&(n+="&"+q)}a=function(b,d){var c="",a;for(a in d)c="&"+a+"="+f(d[a]);return function(){var a=n+c+(galite.anonymizeIp?"&aip=1":"")+"&t="+f(b)+"&z="+(new Date).getTime();if(e.sendBeacon)e.sendBeacon(a);else try{m.open("GET",a,!1),m.send()}catch(t){(new Image).src=a}}};setTimeout(a("pageview",null),100);b.addEventListener("unload",a("timing",{utc:"JS Dependencies",utv:"unload",utt:(new Date).getTime()- r}))})})(window,localStorage,navigator,screen,document,encodeURIComponent);</script>
<!-- End Google Analytics -->
<script src="https://maps.google.com/maps/api/js?key=AIzaSyCEprRgdAfS753As69Wak04p2fvCzKbXQU"></script>
<script src="js/gmap.js"></script>

<!-- Scripts -->
<script src="js/scripts.js"></script>


</body>
</html>
