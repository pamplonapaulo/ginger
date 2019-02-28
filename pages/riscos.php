<?php 
session_start();
include_once('lang.php');
define("TITLE", $riscos);
define("SECTION", $services);
define("CSS_INSIDE_PAGES", $css_services);
define("BODY_BG", $bg_riscos);
define("BTN_SERVICES", $servicesBtn_servicesPage);
define("BTN_TEAM", $teamBtn_servicesPage);
include('includes/head.php');
?>

  <!-- BEGIN OF page main content -->
  <main class="page-main page-fullpage main-anim" id="itempage">

    <!-- Begin of list two side 1 section -->
    <div class="section section-twoside fp-auto-height-responsive section-item" data-section="item-alpha" style="<?php echo $bg_riscos; ?>">
     
      <div class="section-cover-tier mask-black" style="background-image:url('../img/projects/riscos.jpg')">
        <div class="cover-content">
          <div class="title-desc">
          </div>
        </div>
      </div>
      
      <!-- Begin of section wrapper -->
      <div class="section-wrapper largewidth">

        <!-- begin of item -->
        <div class="item row">
          <!-- margi reservation -->
          <div class="col-12 col-md-4">
          </div>

          <!-- begin of text content -->
          <div class="col-12 col-md-8 center-vh">
            <!-- content -->
            <div class="section-content anim scrollable">

              <article id="touchsurface" class="article article-light">
                <div class="article-content">
                 
                  <div class="wrapper">
                                      
                    <h5><?php echo $riscos_h1; ?></h5>
                                       
                    <p><?php echo $riscos_p1; ?></p>
                    
                   <p><i class="icon ion-ios-chatbubble"></i><?php echo $riscos_p2; ?><br>
                    <i class="icon ion-ios-person"></i><?php echo $riscos_p3; ?><br>
                    <i class="icon ion-checkmark-circled"></i><?php echo $riscos_p4; ?><br>
                    <i class="icon ion-android-desktop"></i><?php echo $riscos_p5; ?></p>
                    
                    <h5><?php echo $riscos_h2; ?></h5>
                    
                    <p><?php echo $riscos_p6; ?></p>
                    
                    <p><i class="icon ion-ios-paper"></i><?php echo $riscos_p7; ?><br>
                    <i class="icon ion-cube"></i><?php echo $riscos_p8; ?><br>
                    <i class="icon ion-ios-star"></i><?php echo $riscos_p9; ?><br>
                    <i class="icon ion-ios-color-wand"></i><?php echo $riscos_p10; ?><br>
                    <i class="icon ion-ios-cart"></i><?php echo $riscos_p11; ?><br>
                    <i class="icon ion-speakerphone"></i><?php echo $riscos_p12; ?></p>

                  </div>
                </div>
              </article>

              <!-- team navigation -->
              <div class="btns-action mt-4">
                <a class="btn btn-transp-arrow btn-primary icon-left btn-outline btn-round" href="performance.php">
                  <span class="icon arrow-left"></span>
                  <span class="text"><?php echo $prev_btn; ?></span>
                </a>
                <a class="btn btn-transp-arrow btn-primary btn-outline btn-round" href="oportunidades.php">
                  <span class="icon arrow-right"></span>
                  <span class="text"><?php echo $next_btn; ?></span>
                </a>
              </div>
              
            </div>
          </div>
          <!-- end of text content -->
        </div>
        <!-- end of item -->

      </div>
      <!-- End of section wrapper -->
            
    </div>
    <!-- End of list two side 1 section -->
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
  <script src="../js/vendor/jquery-1.12.4.min.js"></script>

  <!-- All vendor scripts -->
  <script src="../js/vendor/scrolloverflow.min.js"></script>
  
  <script src="../js/vendor/all.js"></script>


  <!-- Countdown script -->
 <script src="../js/jquery.downCount.js"></script>

  
  <script src="../js/form_script.js"></script>

  <!-- Javascript main files -->
  <script src="../js/main.js"></script>
  
  <script type="text/javascript">
      window.proximo = "./oportunidades.php";
      window.anterior = "./performance.php";
    </script>

  <script type="text/javascript" src="../js/page-swiper.js"></script>

</body>

</html>