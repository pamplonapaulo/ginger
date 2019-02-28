<?php 
session_start();
include_once('lang.php');
define("TITLE", $mariana);
define("SECTION", $team);
define("CSS_INSIDE_PAGES", $css_team);
define("BODY_BG", $bg_mariana);
define("BTN_SERVICES", $servicesBtn_teamPage);
define("BTN_TEAM", $teamBtn_teamPage);
include('includes/head.php');
?>


  <!-- BEGIN OF page main content -->
  <main class="page-main page-fullpage main-anim" id="itempage">

    <!-- Begin of list two side 1 section -->
    <div class="section section-twoside fp-auto-height-responsive section-item" data-section="item-alpha" style="background: rgb(205,105,24);">
      <div class="section-cover-tier mask-black team" style="background-image:url('../img/team/mariana.jpg')">
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
                <header class="article-header">
                  <div class="wrapper">
                    <div class="media media-article-title">
                     
                      <img class="media-image d-flex align-self-center mr-3" src="../img/team/thumb/_mariana.png"
                      alt="Mariana Galler">
                      
                      <div class="media-body align-self-center">
                       
                        <h5 class="mt-0 media-title">
                          <strong>Mariana Galler</strong>
                        </h5>
                        
                        <p class="mb-0">Quantitative Operations</p>
                        
                        <p class="mb-0 t-nowrap"><a href="mailto:mariana@ginger.com.br">mariana@ginger.com.br</a></p>
                        
                        <div class="icons">
                            <a class="icon-btn" href="skype:mariana.galler?chat">
                                <i class="icon fa fa-skype"></i>
                            </a>
                        </div>
                        
                      </div>
                    </div>
                  </div>
                </header>
                <div class="article-content">
                 
                  <div class="wrapper">
                    
                    <p><?php echo $mariana_p1; ?></p>                    
                    <p><?php echo $mariana_p2; ?></p>                    
                    <p><?php echo $mariana_p3; ?></p>

                  </div>
                </div>
              </article>

              <!-- team navigation -->
              <div class="btns-action mt-4">
                <a class="btn btn-transp-arrow btn-primary icon-left btn-outline btn-round" href="dani.php">
                  <span class="icon arrow-left"></span>
                  <span class="text"><?php echo $prev_btn; ?></span>
                </a>
                <a class="btn btn-transp-arrow btn-primary btn-outline btn-round" href="ana_costa.php">
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
  <script type="text/javascript" src="../js/vendor/jquery-1.12.4.min.js"></script>

  <!-- All vendor scripts -->
  <script type="text/javascript" src="../js/vendor/scrolloverflow.min.js"></script>
  
  <script type="text/javascript" src="../js/vendor/all.js"></script>


  <!-- Countdown script -->
 <script src="../js/jquery.downCount.js"></script>

  
  

  <!-- Javascript main files -->
  <script type="text/javascript" src="../js/main.js"></script>
  
  <script type="text/javascript">
      window.proximo = "./ana_costa.php";
      window.anterior = "./dani.php";
    </script>
  
  <script type="text/javascript" src="../js/page-swiper.js"></script>

</body>

</html>