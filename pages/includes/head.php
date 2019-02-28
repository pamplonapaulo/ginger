<?php
    
?>

<!doctype html>
<html class="no-js" lang="en">
    <head>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8">
        <!-- Page Title Here -->
        <title><?php echo TITLE; ?></title>
        <!-- Meta -->
        <!-- Page Description Here -->
        <meta name="description" content="José Antonio Moreira, Founder">

        <!-- Disable screen scaling-->
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, maximum-scale=1, user-scalable=0">
        
        <!-- Twitter Meta -->
        <meta name="twitter:site" content="@ginger">
        <meta name="twitter:creator" content="@ginger">
        <meta name="twitter:card" content="summary">
        <meta name="twitter:title" content="Ginger Strategic Research">
        <meta name="twitter:description" content=<?php echo SECTION; ?>>
        <meta name="twitter:image" content="../img/logo.png">
        
        <!-- Facebook Meta -->
        <meta property="og:url" content="https://www.ginger.com.br">
        <meta property="og:title" content="Ginger Strategic Research">
        <meta property="og:description" content=<?php echo SECTION; ?>>
        <meta property="og:type" content="website">
        <meta property="og:image" content="../img/logo.png">
        <meta property="og:image:secure_url" content="../img/logo.png">
        <meta property="og:image:type" content="image/png">
        <meta property="og:image:width" content="721">
        <meta property="og:image:height" content="751">
        
        <!-- Place favicon.ico and apple-touch-icon(s) in the root directory -->
        <link rel="shortcut icon" href="../img/favicon-32px.png" type="image/x-icon" />
	    <link rel="icon" href="../img/favicon-32px.png" type="image/png" />
        <link href="../img/favicon-32px.png" rel="icon" type="image/x-icon" />
        
        <!-- Web fonts and Web Icons -->
        <link rel="stylesheet" href="../fonts/opensans/stylesheet.css">
        <link rel="stylesheet" href="../fonts/bebas/stylesheet.css">
        <link rel="stylesheet" href="../fonts/ionicons.min.css">
        <link rel="stylesheet" href="../fonts/font-awesome.min.css">

        <!-- Vendor CSS style -->
        <link rel="stylesheet" href="../css/pageloader.css">

        <!-- Uncomment below to load individualy vendor CSS -->
        <link rel="stylesheet" href="../css/bootstrap.min.css">
        <link rel="stylesheet" href="../js/vendor/swiper.min.css">
        <link rel="stylesheet" href="../js/vendor/jquery.fullpage.min.css">
        <link rel="stylesheet" href="../js/vegas/vegas.min.css">

        <!-- Main CSS files -->
        <link rel="stylesheet" href="../css/main.min.css">
       
        <!-- add alt layout here -->
        <link rel="stylesheet" href="../css/style-default.min.css">
        
        <!-- Ginger Custom CSS -->
        <?php echo CSS_INSIDE_PAGES; ?>
        
        <link rel="stylesheet" href="../css/idioms-btns.css">

        <script src="../js/vendor/modernizr-2.7.1.min.js"></script>
        
</head>

<body id="menu" class="body-item" style="<?php echo BODY_BG; ?>">
  <!--[if lt IE 8]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

  <!-- Page Loader : just comment these lines to remove it -->
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
    <a class="navbar-brand" href="../index.php">
      <span class="logo">
        <img class="light-logo" src="../img/logo.png" alt="Logo">
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
            <a title="Switch to English" href="?lang=en" id="idioms-1" idiom-target="en" class="btn btn-outline-white btn-round langEN">EN</a>
            <a title="Mudar para portugês" href="?lang=pt" id="idioms-2" idiom-target="pt" class="btn btn-outline-white btn-round langPT">PT</a>                                   
          </li>
        </ul>
        <!-- End of CTA & Icons menu -->
      </nav>
      <!-- End of top menu -->

      <!-- Begin of hamburger mainmenu menu -->
      <nav class="navbar-mainmenu">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link" href="../index.php">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="../index.php#about"><?php echo $about; ?></a>
            </li>
            <li class="<?php echo BTN_TEAM; ?>">
                <a class="nav-link" href="../index.php#team"><?php echo $team; ?></a>
            </li>
            <li class="<?php echo BTN_SERVICES; ?>">
                <a class="nav-link" href="../index.php#services"><?php echo $services; ?></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="../index.php#clients"><?php echo $clients; ?></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="../index.php#testimonials"><?php echo $testimonials; ?></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="../index.php#contact"><?php echo $contact; ?></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="http://www.tvlink.com.br/ginger" target="_blank">TV Link</a>
            </li>
        </ul>
      </nav>
      <!-- End of hamburger mainmenu menu -->

      <!-- Begin of sidebar nav menu params class: text-only / icon-only-->
      <nav class="navbar-sidebar icon-only">
          <ul class="navbar-nav" id="menu">
            <li class="nav-item" data-menuanchor="home">
                <a title="Home" href="../index.php">
                    <i class="icon ion-ios-home-outline"></i>
                    <span class="txt">Home</span>
                </a>
            </li>
            <li class="nav-item" data-menuanchor="about">
                <a title="Por que a Ginger?" href="../index.php#about">
                    <i class="icon ion-ios-star-outline"></i>
                    <span class="txt"><?php echo $about; ?></span>
                </a>
            </li>
            <li class="<?php echo BTN_TEAM; ?>" data-menuanchor="team">
               <a title="Quem somos" href="../index.php#team">
                   <i class="icon ion-ios-people"></i>
                   <span class="txt"><?php echo $team; ?></span>
               </a>
            </li>
            <li class="<?php echo BTN_SERVICES; ?>" data-menuanchor="services">
               <a title="O que fazemos" href="../index.php#services">
                   <i class="icon ion-ios-list-outline"></i>
                   <span class="txt"><?php echo $services; ?></span>
               </a>
            </li>
            <li class="nav-item" data-menuanchor="clients">
               <a title="Para quem fazemos" href="../index.php#clients">
                   <i class="icon ion-ios-heart-outline"></i>
                   <span class="txt"><?php echo $clients; ?></span>
               </a>
            </li>
            <li class="nav-item" data-menuanchor="testimonials">
               <a title="O que dizem" href="../index.php#testimonials">
                   <i class="icon ion-ios-chatboxes-outline"></i>
                   <span class="txt"><?php echo $testimonials; ?></span>
               </a>
            </li>
            <li class="nav-item" data-menuanchor="contact">
               <a title="Contato" href="../index.php#contact">
                   <i class="icon ion-ios-telephone-outline"></i>
                   <span class="txt"><?php echo $contact; ?></span>
               </a>
            </li>
            <li class="nav-item">
               <a title="TV Link" href="http://www.tvlink.com.br/ginger" target="_blank">
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