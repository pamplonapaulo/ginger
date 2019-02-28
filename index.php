<?php 
session_start();
include_once('pages/lang.php');
?>



<!doctype html>

<html class="no-js" lang="pt-br">

<head>
  <meta http-equiv="content-type" content="text/html; charset=UTF-8">

  <!-- Page Title Here -->
  <title>Ginger Strategic Research | A boutique Market Research agency with client’s perspective.</title>

  <!-- Meta -->
  <!-- Page Description Here -->
  <meta name="Ginger Strategic Research" content="A boutique Market Research agency with client’s perspective.">

  <!-- Disable screen scaling-->
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, maximum-scale=1, user-scalable=0">

  <!-- Twitter Meta -->
  <meta name="twitter:site" content="@ginger">
  <meta name="twitter:creator" content="@ginger">
  <meta name="twitter:card" content="summary">
  <meta name="twitter:title" content="Ginger Strategic Research">
  <meta name="twitter:description" content="A boutique Market Research agency with client’s perspective.">
  <meta name="twitter:image" content="/img/logo.png">

  <!-- Facebook Meta -->
  <meta property="og:url" content="https://www.ginger.com.br">
  <meta property="og:title" content="Ginger Strategic Research">
  <meta property="og:description" content="A boutique Market Research agency with client’s perspective.">
  <meta property="og:type" content="website">
  <meta property="og:image" content="img/logo.png">
  <meta property="og:image:secure_url" content="img/logo.png">
  <meta property="og:image:type" content="image/png">
  <meta property="og:image:width" content="721">
  <meta property="og:image:height" content="751">
  
  <!-- Place favicon.ico and apple-touch-icon(s) in the root directory -->
  <link rel="shortcut icon" href="img/favicon-32px.png" type="image/x-icon" />
  <link rel="icon" href="img/favicon-32px.png" type="image/png" />
  <link rel="icon" href="img/favicon-32px.png" type="image/x-icon" />        

  <!-- Place favicon.ico and apple-touch-icon(s) in the root directory -->
  <!-- Web fonts and Web Icons -->
  <link rel="stylesheet" href="./fonts/opensans/stylesheet.css">
  <link rel="stylesheet" href="./fonts/bebas/stylesheet.css">
  <link rel="stylesheet" href="./fonts/ionicons.min.css">
  <link rel="stylesheet" href="./fonts/font-awesome.min.css">

  <!-- Vendor CSS style -->
  <link rel="stylesheet" href="./css/pageloader.css">

  <!-- Uncomment below to load individualy vendor CSS -->
  <link rel="stylesheet" href="./css/bootstrap.min.css">
  <link rel="stylesheet" href="./js/vendor/swiper.min.css">
  <link rel="stylesheet" href="./js/vendor/jquery.fullpage.min.css">
  <link rel="stylesheet" href="./js/vegas/vegas.min.css">

  <!-- Main CSS files -->
  <link rel="stylesheet" href="./css/main.min.css">

  <!-- add alt layout here -->
  <link rel="stylesheet" href="./css/style-default.min.css">
  
  <!-- Ginger Custom CSS -->
  <link rel="stylesheet" href="./css/ginger-bg.min.css" />
  <link rel="stylesheet" href="./css/owl.carousel.min.css" />
  <link rel="stylesheet" href="./css/ginger.min.css" />
  <link rel="stylesheet" href="./css/idioms-btns.css">

  <script src="./js/vendor/modernizr-2.7.1.min.js"></script>
  
  
</head>

<body id="menu" class="body-page">
  <!--[if lt IE 8]>
    <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
 <![endif]-->

  <!-- Page Loader -->
  <div class="page-loader" id="page-loader">
    <div>
      <div class="icon ion-spin"></div>
      <p><?php echo $page_loader; ?></p>
    </div>
  </div>

  <!-- BEGIN OF site header Menu -->
  <header class="page-header navbar page-header-alpha scrolled-white menu-right topmenu-right">

    <!-- Begin of menu icon toggler -->
    <button class="navbar-toggler site-menu-icon" id="navMenuIcon">
      <span class="menu-icon menu-icon-random">
        <span class="bars">
          <span class="bar1"></span>
          <span class="bar2"></span>
          <span class="bar3"></span>
        </span>
      </span>
    </button>
    <!-- End of menu icon toggler -->

    <!-- Begin of logo/brand -->
    <a class="navbar-brand" href="#home">
      <span class="logo">
        <img class="light-logo" src="img/logo.png" alt="Logo">
      </span>
    </a>
    <!-- End of logo/brand -->

    <!-- begin of menu wrapper -->
    <div class="all-menu-wrapper" id="navbarMenu">
      <!-- Begin of top menu -->
      <nav class="navbar-topmenu">
        <!-- Begin of CTA Actions, & Icons menu -->
        <ul class="navbar-nav navbar-nav-actions">
          <li class="nav-item">
<!--            <a id="idioms" idiom-target="en" class="btn btn-outline-white btn-round"></a>-->
            
            <a href="?lang=en" id="idioms-1" idiom-target="en" class="btn btn-outline-white btn-round langEN">EN</a>
            
            <a href="?lang=pt" id="idioms-2" idiom-target="pt" class="btn btn-outline-white btn-round langPT">PT</a>                                   
            
          </li>
        </ul>
        <!-- End of CTA & Icons menu -->
      </nav>
      <!-- End of top menu -->

      <!-- Begin of sidebar nav menu params class: text-only / icon-only-->
      <nav class="navbar-sidebar ">
        <ul class="navbar-nav" id="qmenu">
          <li class="nav-item" data-menuanchor="home">
            <a href="#home">
              <i class="icon ion-ios-home-outline"></i>
              <span class="txt">Home</span>
            </a>
          </li>
          <li class="nav-item" data-menuanchor="about">
            <a href="#about">
              <i class="icon ion-ios-star-outline"></i>
              <span class="txt"><?php echo $about; ?></span>
            </a>
          </li>
          <li class="nav-item" data-menuanchor="team">
            <a href="#team">
              <i class="icon ion-ios-people"></i>
              <span class="txt"><?php echo $team; ?></span>
            </a>
          </li>          
          <li class="nav-item" data-menuanchor="services">
            <a href="#services">
              <i class="icon ion-ios-list-outline"></i>
              <span class="txt"><?php echo $services; ?></span>
            </a>
          </li>
          <li class="nav-item" data-menuanchor="clients">
            <a href="#clients">
              <i class="icon ion-ios-heart-outline"></i>
              <span class="txt"><?php echo $clients; ?></span>
            </a>
          </li>
          <li class="nav-item" data-menuanchor="testimonials">
            <a href="#testimonials">
              <i class="icon ion-ios-chatboxes-outline"></i>
              <span class="txt"><?php echo $testimonials; ?></span>
            </a>
          </li>
          <li class="nav-item" data-menuanchor="contact">
            <a href="#contact">
              <i class="icon ion-ios-telephone-outline"></i>
              <span class="txt"><?php echo $contact; ?></span>
            </a>
          </li>
          <li class="nav-item" data-menuanchor="tvlink">
            <a href="http://www.tvlink.com.br/ginger" target="_blank">
              <i class="icon ion-ios-monitor-outline"></i>
              <span class="txt">TV Link</span>
            </a>
          </li>
        </ul>
      </nav>
      <!-- End of sidebar nav menu -->
    </div>
    <!-- end of menu wrapper -->

  </header>
  <!-- END OF site header Menu-->

  <!-- BEGIN OF page cover -->
  <div class="page-cover">
    <!-- Cover Background -->
    <div class="cover-bg bg-img" data-image-src="img/bg-default.jpg"></div>
  </div>
  <!--END OF page cover -->

  <!-- BEGIN OF page main content -->
  <main class="page-main page-fullpage main-anim" id="mainpage">
      
      <!-- Begin of HOME section -->
    <div class="section section-home fullscreen-md fp-auto-height-responsive main-home" data-section="home">
      <!-- Begin of section wrapper -->
      <div class="section-wrapper">
       
        <div class="section-content anim">
          <div class="row">
           
            <div class="col-12 col-md-6 text-left">
            
                <div class="vertical-wrapper">
                   
                  <!-- title and description -->
                  <div class="title-desc">
                    <h2 class="display-4 display-title home-title anim-1"><?php echo $home_h; ?></h2>
                    <p class="anim-2"><?php echo $home_p1; ?></p>
                  </div>
                                   
                </div>
            </div>

            <!-- begin of right content -->
            <div class="col-12 col-md-6 right-content hidden-sm center-vh">
              <!-- content -->
              <div class="section-content">
                <!-- illustartion -->
                <div class="illustr zoomout-1">
                  <img class="logo" src="img/_temperos.png" alt="Ilustração Temperos">
                </div>
              </div>
            </div>
            <!-- end of right content -->
            
          </div>
        </div>                            

        <!-- Arrows scroll down/up -->
        <footer class="section-footer scrolldown">
          <a class="down">
            <span class="icon"></span>
            <span class="txt"><?php echo $about; ?></span>
          </a>
        </footer>
                            
      </div>
      <!-- End of section wrapper -->
    </div>
    <!-- End of HOME section -->

      <!-- Begin of ABOUT section -->
    <div class="section section-description fp-auto-height-responsive " data-section="about">
        <!-- Begin of section wrapper -->
        <div class="section-wrapper center-vh dir-col anim">
       
            <!-- title -->
            <div class="section-title text-center">
              <h2 class="display-4 display-title"><?php echo $about; ?></h2>
            </div>

            <!-- content -->
            <div class="section-content reduced anim text-center">
              <!-- title and description -->
                <div class="title-desc anim-3 why-ginger-p"> 
                    <p><?php echo $about_p1; ?></p>
                    <p><?php echo $about_p2; ?></p>
                    <p><?php echo $about_p3; ?></p>
                    <p><?php echo $about_p4; ?></p>
                </div>
            </div>

            <!-- Arrows scroll down/up -->
            <footer class="section-footer scrolldown">
              <a class="down">
                <span class="icon"></span>
                <span class="txt"><?php echo $team; ?></span>
              </a>
            </footer>
        
        </div>
        <!-- End of section wrapper -->
    </div>
    <!-- End of ABOUT section -->

      <!-- Begin of TEAM section -->
    <div class="section section-description fp-auto-height-responsive " data-section="team">
      <!-- Begin of section wrapper -->
      <div class="section-wrapper center-vh dir-col anim">
        <!-- title -->
        <div class="section-title text-center">
          <h2 class="display-4 display-title"><?php echo $team; ?></h2>
        </div>

        <!-- content -->
        <div class="section-content anim text-center">
            <!-- begin of owl-carousel -->
               <div class="owl-carousel team-carousel row">
                <div class="item" data-hash="team">
                    <div class="section-content anim translateUp">
                        <div class="images text-center">
                            <div class="img-avatar-alpha">
                                <div class="img-1">
                                    <a href="pages/jose.php">
                                        <img alt="Leia perfil José Antonio Moreira" class="img" src="img/team/thumb/_jose.png"/>
                                    </a>
                                </div>
                                <div class="legend text-center pos-abs">
                                    <h5>Jos&eacute; Antonio Moreira</h5>
                                    <p class="small">Founder</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="section-content anim">
                        <div class="images text-center">
                            <div class="img-avatar-alpha">
                                <div class="img-1 shadow">
                                    <a href="pages/ana_amelia.php">
                                        <img alt="Image" class="img" src="img/team/thumb/_ana_amelia.png" />
                                    </a>
                                </div>
                                <div class="legend text-center pos-abs">
                                    <h5>Ana Amélia Figueiredo</h5>
                                    <p class="small">Quantitative Research Consultant</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="section-content anim">
                        <div class="images text-center">
                            <div class="img-avatar-alpha">
                                <div class="img-1 shadow">
                                    <a href="pages/ines.php">
                                        <img alt="Image" class="img" src="img/team/thumb/_ines.png" />
                                    </a>
                                </div>
                                <div class="legend text-center pos-abs">
                                    <h5>Inês Biazzi</h5>
                                    <p class="small">Finance & HR</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="section-content anim">
                        <div class="images text-center">
                            <div class="img-avatar-alpha">
                                <div class="img-1 shadow">
                                    <a href="pages/alejandrina.php">
                                        <img alt="Image" class="img" src="img/team/thumb/_alejandrina.png" />
                                    </a>
                                </div>
                                <div class="legend text-center pos-abs">
                                    <h5>Alejandrina Bosch</h5>
                                    <p class="small">Qualitative Research Consultant</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="section-content anim">
                        <div class="images text-center">
                            <div class="img-avatar-alpha">
                                <div class="img-1 shadow">
                                    <a href="pages/denis.php">
                                        <img alt="Image" class="img" src="img/team/thumb/_denis.png" />
                                    </a>
                                </div>
                                <div class="legend text-center pos-abs">
                                    <h5>Denis Nascimento</h5>
                                    <p class="small">Quantitative Research Consultant</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="section-content anim">
                        <div class="images text-center">
                            <div class="img-avatar-alpha">
                                <div class="img-1 shadow">
                                    <a href="pages/laure.php">
                                        <img alt="Image" class="img" src="img/team/thumb/_laure.png" />
                                    </a>
                                </div>
                                <div class="legend text-center pos-abs">
                                    <h5>Laure Castelnau</h5>
                                    <p class="small">Business Development<br></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="section-content anim">
                        <div class="images text-center">
                            <div class="img-avatar-alpha">
                                <div class="img-1 shadow">
                                    <a href="pages/tassia.php">
                                        <img alt="Image" class="img" src="img/team/thumb/_tassia.png" />
                                    </a>
                                </div>
                                <div class="legend text-center pos-abs">
                                    <h5>Tássia Bittar</h5>
                                    <p class="small">Qualitative Research Consultant</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="section-content anim">
                        <div class="images text-center">
                            <div class="img-avatar-alpha">
                                <div class="img-1 shadow">
                                    <a href="pages/dani.php">
                                        <img alt="Image" class="img" src="img/team/thumb/_dani.png" />
                                    </a>
                                </div>
                                <div class="legend text-center pos-abs">
                                    <h5>Daniella Pugliesi</h5>
                                    <p class="small">Qualitative Research Consultant</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="section-content anim">
                        <div class="images text-center">
                            <div class="img-avatar-alpha">
                                <div class="img-1 shadow">
                                    <a href="pages/mariana.php">
                                        <img alt="Image" class="img" src="img/team/thumb/_mariana.png" />
                                    </a>
                                </div>
                                <div class="legend text-center pos-abs">
                                    <h5>Mariana Galler</h5>
                                    <p class="small">Quantitative Operations<br></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="section-content anim">
                        <div class="images text-center">
                            <div class="img-avatar-alpha">
                                <div class="img-1 shadow">
                                    <a href="pages/ana_costa.php">
                                        <img alt="Image" class="img" src="img/team/thumb/_ana_costa.png" />
                                    </a>
                                </div>
                                <div class="legend text-center pos-abs">
                                    <h5>Ana Cristina Costa</h5>
                                    <p class="small">Qualitative Research Consultant</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="section-content anim">
                        <div class="images text-center">
                            <div class="img-avatar-alpha">
                                <div class="img-1 shadow">
                                    <a href="pages/clara.php">
                                        <img alt="Image" class="img" src="img/team/thumb/_clara.png" />
                                    </a>
                                </div>
                                <div class="legend text-center pos-abs">
                                    <h5>Clara Dias Kolhy</h5>
                                    <p class="small">Commercial</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="section-content anim">
                        <div class="images text-center">
                            <div class="img-avatar-alpha">
                                <div class="img-1 shadow">
                                    <a href="pages/maisa.php">
                                        <img alt="Image" class="img" src="img/team/thumb/_maisa.png" />
                                    </a>
                                </div>
                                <div class="legend text-center pos-abs">
                                    <h5>Maísa Romero</h5>
                                    <p class="small">Qualitative Research Consultant</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="section-content anim">
                        <div class="images text-center">
                            <div class="img-avatar-alpha">
                                <div class="img-1 shadow">
                                    <a href="pages/marcia.php">
                                        <img alt="Image" class="img" src="img/team/thumb/_marcia.png" />
                                    </a>
                                </div>
                                <div class="legend text-center pos-abs">
                                    <h5>Márcia Souza</h5>
                                    <p class="small">Qualitative Operations</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="section-content anim">
                        <div class="images text-center">
                            <div class="img-avatar-alpha">
                                <div class="img-1 shadow">
                                    <a href="pages/giuliana.php">
                                        <img alt="Image" class="img" src="img/team/thumb/_giuliana.png" />
                                    </a>
                                </div>
                                <div class="legend text-center pos-abs">
                                    <h5>Giuliana Valim</h5>
                                    <p class="small">Qualitative Research Consultant</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="section-content anim">
                        <div class="images text-center">
                            <div class="img-avatar-alpha">
                                <div class="img-1 shadow">
                                    <a href="pages/suely.php">
                                        <img alt="Image" class="img" src="img/team/thumb/_suely.png" />
                                    </a>
                                </div>
                                <div class="legend text-center pos-abs">
                                    <h5>Suely Camilo</h5>
                                    <p class="small">Office Support</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="section-content anim">
                        <div class="images text-center">
                            <div class="img-avatar-alpha">
                                <div class="img-1 shadow">
                                    <a href="pages/neide.php">
                                        <img alt="Image" class="img" src="img/team/thumb/_neide.png" />
                                    </a>
                                </div>
                                <div class="legend text-center pos-abs">
                                    <h5>Ivoneide Santos</h5>
                                    <p class="small">Office Support</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="section-content anim">
                        <div class="images text-center">
                            <div class="img-avatar-alpha">
                                <div class="img-1 shadow">
                                    <a href="pages/carol.php">
                                        <img alt="Image" class="img" src="img/team/thumb/_carol.png" />
                                    </a>
                                </div>
                                <div class="legend text-center pos-abs">
                                    <h5>Maria Carolina Ferreira Costa</h5>
                                    <p class="small">Administrative</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <!-- end of owl-carousel -->
            </div>            
        </div>

        <!-- Arrows scroll down/up -->
        <footer class="section-footer scrolldown">
          <a class="down">
            <span class="icon"></span>
            <span class="txt"><?php echo $services; ?></span>
          </a>
        </footer>
      </div>
      <!-- End of section wrapper -->
    </div>
    <!-- End of TEAM section -->

      <!-- Begin of SERVICES section -->
    <div class="section section-description fp-auto-height-responsive " data-section="services">
      <!-- Begin of section wrapper -->
      <div class="section-wrapper center-vh dir-col anim">
        <!-- title -->
        <div class="section-title text-center">
          <h2 class="display-4 display-title"><?php echo $services; ?></h2>
        </div>
        
        <!-- content -->
        <div class="section-content anim text-center">
            <div class="row justify-content-between fade-1">               
                <div class="col-sm">
                    <div class="img-frame-normal">
                        <div class="img-1">
                            <a href="./pages/riscos.php">
                                <img class="img" src="img/projects/thumb/_riscos.png" alt="Image">
                            </a>
                        </div>
                        <div class="legend text-center">
                            <h5><?php echo $services_p1; ?></h5>
                            <p class="small"></p>
                        </div>
                    </div>
                </div>
                
                <div class="col-sm">
                    <div class="img-frame-normal">
                        <div class="img-1">
                            <a href="./pages/oportunidades.php">
                                <img class="img" src="img/projects/thumb/_oprtunidades.png" alt="Image">
                            </a>
                        </div>
                        <div class="legend text-center">
                            <h5><?php echo $services_p2; ?></h5>
                            <p class="small"></p>
                        </div>
                    </div>
                </div>
                
                <div class="col-sm">
                    <div class="img-frame-normal">
                        <div class="img-1">
                            <a href="./pages/performance.php">
                                <img class="img" src="img/projects/thumb/_performance.png" alt="Image">
                            </a>
                        </div>
                        <div class="legend text-center">
                            <h5><?php echo $services_p3; ?></h5>
                            <p class="small"></p>
                        </div>
                    </div>
                </div>
                
            </div>
        
        </div>  

        <!-- Arrows scroll down/up -->
        <footer class="section-footer scrolldown">
          <a class="down">
            <span class="icon"></span>
            <span class="txt"><?php echo $clients; ?></span>
          </a>
        </footer>
      </div>
      <!-- End of section wrapper -->
    </div>
    <!-- End of SERVICES section -->

      <!-- Begin of CLIENTS section -->
    <div class="section section-description fp-auto-height-responsive " data-section="clients">
      <!-- Begin of section wrapper -->
      <div class="section-wrapper center-vh dir-col anim">
        <!-- title -->
        <div class="section-title text-center">
          <h2 class="display-4 display-title"><?php echo $clients; ?></h2>
        </div>

        <!-- content -->
        <div class="section-content anim text-center">
            <div class="row align-items-center justify-content-center">
                <div class="all-clients-img"></div>
            </div>
        </div>
        
        <!-- Arrows scroll down/up -->
        <footer class="section-footer scrolldown">
          <a class="down">
            <span class="icon"></span>
            <span class="txt"><?php echo $testimonials; ?></span>
          </a>
        </footer>
        
      </div>
      <!-- End of section wrapper -->
    </div>
    <!-- End of CLIENTS section -->
      
    <!-- Begin of TESTIMONIALS section -->
    <div class="section section-description fp-auto-height-responsive " data-section="testimonials">
      <!-- Begin of section wrapper -->
      <div class="section-wrapper center-vh dir-col anim">
        <!-- title -->
        <div class="section-title text-center">
          <h2 class="display-4 display-title"><?php echo $testimonials; ?></h2>
        </div>

        <!-- content -->
        <div class="section-content anim text-center fullwidth">
            
            <!-- begin of carousel-swiper-beta -->
            <div class="slider-wrapper carousel-swiper-beta carousel-smalls carousel-swiper-beta-demo">
              <!-- slider -->
              <div class="slider-container swiper-container">
                <ul class="item-list swiper-wrapper">
                 
                  <li class="slide-item swiper-slide">
                    <div class="item-wrapper">
                      
                      <div class="text-testimonials" href="#">
                          <div class="verticalFixWrapper">
                              <div class="verticalFixObjs">
                                   <p>We presented our final report last week and the level of cultural insight, strategic thinking and detail across the report was very impressive and a massive help. The feedback from the GSK team was “outstanding.</p>
                                   <p>Oskar Marcus, Firefish UK</p>
                              </div>
                          </div>
                      </div>
                    </div>
                  </li>
                  
                  <li class="slide-item swiper-slide">
                    <div class="item-wrapper">
                      
                      <div class="text-testimonials" href="#">
                          <div class="verticalFixWrapper">
                              <div class="verticalFixObjs">
                                   <p>Thank you for your cooperation and support - it was a pleasure  and we hope to work again soon, with more customers.</p>
                                   <p>Josipa Manjic, CEO ID Guardian</p>
                              </div>
                          </div>
                      </div>
                    </div>
                  </li>                  
                 
                  <li class="slide-item swiper-slide">
                    <div class="item-wrapper">
                      
                      <div class="text-testimonials" href="#">
                          <div class="verticalFixWrapper">
                              <div class="verticalFixObjs">
                                   <p><?php echo $testimonials_p1; ?></p>
                                   <p>Thaina Luciana Vindonssky Ferreti, Consumer Insight Seara-JBS</p>
                              </div>
                          </div>
                      </div>
                    </div>
                  </li>
                  
                  <li class="slide-item swiper-slide">
                    <div class="item-wrapper">
                      
                      <div class="text-testimonials" href="#">
                          <div class="verticalFixWrapper">
                              <div class="verticalFixObjs">
                                   <p><?php echo $testimonials_p2; ?></p>
                                   <p>Luis Miguel Dominguez Espinoza, UX Design Research Telefonica CCDO</p>
                              </div>
                          </div>
                      </div>
                    </div>
                  </li>
                 
                  <li class="slide-item swiper-slide">
                    <div class="item-wrapper">
                      
                      <div class="text-testimonials" href="#">
                          <div class="verticalFixWrapper">
                              <div class="verticalFixObjs">
                                   <p>We have debriefed the global insights and are now moving onto the next stage of our project to build and refine opportunities in workshops with our clients. It was a great pleasure to work with you all.</p>
                                   <p>Rebecca Wright, Director at Mash UK</p>
                              </div>
                          </div>
                      </div>
                    </div>
                  </li>
                  
                  <li class="slide-item swiper-slide">
                    <div class="item-wrapper">
                      
                      <div class="text-testimonials" href="#">
                          <div class="verticalFixWrapper">
                              <div class="verticalFixObjs">
                                   <p>Thank you for going that extra mile and helping drive our CMI Vision of inspiring, provoking and creating transformational action. We are very grateful to work with you and we look forward to continued success together.</p>
                                   <p>Stan Sthanunathan, Executive Vice President Consumer Marketing Insight Unilever</p>
                              </div>
                          </div>
                      </div>
                    </div>
                  </li>                                    
                 
                  <li class="slide-item swiper-slide">
                    <div class="item-wrapper">
                      
                      <div class="text-testimonials" href="#">
                          <div class="verticalFixWrapper">
                              <div class="verticalFixObjs">
                                   <p><?php echo $testimonials_p3; ?></p>
                                   <p>Mariana Albuquerque, Consumer Data&Insights Reckitt Benckiser</p>
                              </div>
                          </div>
                      </div>
                    </div>
                  </li>
                                    
                </ul>
              </div>
              
              <div class="slider-controls-wrapper">
                 
                  <!-- navigation -->
                  <div class="items-button bottom fit items-button-prev">
                    <a class="btn btn-transp-arrow btn-primary icon-left" href="">
                      <span class="icon arrow-left"></span>
                    </a>
                  </div>
                  
                  <!-- pagination -->
                  <div class="items-pagination bar"></div>
                  
                  <!-- navigation -->
                  <div class="items-button bottom fit items-button-next">
                    <a class="btn btn-transp-arrow btn-primary" href="">
                      <span class="icon arrow-right"></span>
                    </a>
                  </div>                    
                  
              </div>
              
            </div>
            <!-- end of carousel-swiper-beta -->
            
        </div>
        
        <!-- Arrows scroll down/up -->
        <footer class="section-footer scrolldown">
          <a class="down">
            <span class="icon"></span>
            <span class="txt"><?php echo $contact; ?></span>
          </a>
        </footer>
        
      </div>
      <!-- End of section wrapper -->
    </div>
    <!-- End of TESTIMONIALS section -->      

      <!-- Begin of CONTACT section -->
    <div class="section section-contact fp-auto-height-responsive no-slide-arrows " data-section="contact">

        <!-- Begin of section wrapper -->
        <div class="section-wrapper">
          <!-- title -->
            <div class="section-title text-center">
                <h2 class="display-4 display-title"><?php echo $contact; ?></h2>
            </div>
            
            <div class="contact-wrapper">
                               
                <div class="row" style="margin: 0;">
                   
                    <div class="col-sm">
                        <p><?php echo $contact_p1; ?><br><?php echo $contact_p2; ?></p>
                    </div>
                   
                    <div class="col-sm orange">
                        <p>
                            <i class="icon fa fa-phone"></i>&nbsp;
                            <a href="tel:1130872474">
                                <font>(11) 3087-2474</font>
                            </a>
                            <br />
                            <i class="icon fa fa-whatsapp"></i>&nbsp;
                            <a href="https://wa.me/5511941961017">
                                <font>(11) 94196-1017</font>
                            </a>
                            <br />
                            <i class="icon fa fa-envelope"></i>&nbsp;
                            <a href="mailto:ginger@ginger.com.br">
                                <font>ginger@ginger.com</font>
                            </a>
                        </p>
                    </div>
                    <div class="col-sm">
                        <p>
                            <i class="icon fa fa-home"></i>
                            &nbsp;Rua Oscar Freire, 379
                            <br />
                            Conj. 151 - Jardins
                            <br />
                            S&atilde;o Paulo-SP | Brasil
                        </p>                        
                    </div>
                </div>

                    <div class="col-12" style="margin: 0;">
                       <div class="gMapBorderHackOuter">
                           <div class="gMapBorderHackInner">
                               <iframe id="google-maps" allowfullscreen="" frameborder="0" height="300" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d29256.426651297017!2d-46.683118460449215!3d-23.566527999999998!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce57803c3d1db9%3A0x116da6360fd8f3ad!2sGinger+Market+Research!5e0!3m2!1spt-BR!2sbr!4v1537832717108" style="border:0" width="800"></iframe>
                            </div>                                              
                       </div>
                    </div>
                
            </div>

        </div>
        <!-- End of slide section wrapper -->

    </div>
    <!-- End of CONTACT section -->

    
    
    </main>
  <!-- END OF page main content -->

  <!-- BEGIN OF page footer -->
  <footer id="site-footer" class="page-footer">
    <!-- Left content -->
    <div class="footer-left">
      <p>Copyright © 2018 Ginger</p>
    </div>

    <!-- Right content -->
    <div class="footer-right">
      <ul class="social">
        <li>
          <a href="https://www.facebook.com/gingermarketingresearch">
            <i class="icon fa fa-facebook"></i>
          </a>
        </li>
        <li>
          <a href="https://www.linkedin.com/company/ginger-strategic-research">
            <i class="icon fa fa-linkedin"></i>
          </a>
        </li>
        <li>
          <a href="mailto:ginger@ginger.com.br">
            <i class="icon fa fa-envelope"></i>
          </a>
        </li>
        <li>
         <a href="https://wa.me/5511941961017">
            <i class="icon fa fa-whatsapp"></i>
          </a>
        </li>
      </ul>
    </div>
  </footer>
  <!-- END OF site footer -->

  <!-- scripts -->
  <!-- All Javascript plugins goes here -->
  <script src="./js/vendor/jquery-1.12.4.min.js"></script>

  <!-- All vendor scripts -->
  <script src="./js/vendor/scrolloverflow.min.js"></script>
  <script src="./js/vendor/all.js"></script>

  <!-- Countdown script -->
<!--  <script src="./js/jquery.downCount.js"></script>-->

  <!-- Javascript main files -->
  <script src="./js/main.js"></script>
  
  <!-- Ginger Animated Background-->
  <script src="./js/ginger-bg.js"></script>
  
  <!-- Owl Carousel ('#team') -->
  <script src="./js/owl.carousel.js"></script>
  
</body>

</html>