  <?php if ($page_name!='contact.php') { ?>
    <footer class="bg-color2">
      <div class="pt-5 pb-3">
        <div class="container">
          <div class="row">
            <div class="col-12 col-sm-6 col-lg-4 t-color1 d-none d-lg-block">
              <h3 class="t-color1 h4">Our Portfolio</h3>              
              <div class="row">
                <?php for($i=1;$i<=6;$i++){ ?>
                  <div class="col-md-4 col-6">
                    <div class="img-thumbnail m-1">
                      <a href="portfolio.php">
                        <img src="images/portfolio/min/<?php echo $i;?>.jpg" class="img-fluid" alt="Portfolio-<?php echo $i;?>">
                      </a>
                    </div>
                  </div>
                <?php }?>
              </div>
            </div>
            <div class="col-12 col-sm-12 col-md-6 col-lg-4 t-color1 pt-2 pt-md-0">
              <h3 class="t-color1 h4">Our Services</h3>
              <ul class="icon-align-ul">
                <li> <i class="fa fa-check-square icon-align"></i> <a class="t-color1 t-color1-hover" href="services.php"><?php echo $SN[1];?></a> </li>
                <li> <i class="fa fa-check-square icon-align"></i> <a class="t-color1 t-color1-hover" href="services.php"><?php echo $SN[2];?></a> </li>
                <li> <i class="fa fa-check-square icon-align"></i> <a class="t-color1 t-color1-hover" href="services.php"><?php echo $SN[3];?></a> </li>
                <li> <i class="fa fa-check-square icon-align"></i> <a class="t-color1 t-color1-hover" href="services.php"><?php echo $SN[4];?></a> </li>
                <li> <i class="fa fa-check-square icon-align"></i> <a class="t-color1 t-color1-hover" href="services.php"><?php echo $SN[5];?></a> </li>
              </ul>
              <a href="contact.php" class="btn bg-light text-dark"><i class="fa fa-pencil"></i> Schedule An  Appointment</a>
            </div>
            <div class="col-12 col-sm-12 col-md-6 col-lg-4 t-color1 pt-2 pt-md-0">
              <h3 class="t-color1 h4">Get In Touch</h3>
              <ul class="icon-align-ul">
                <li> 
                  <i class="fa fa-phone icon-align"></i> <a href="<?php echo $PhoneRef;?>" class="t-color1 t-color1-hover"><?php echo $Phone; ?></a>
                </li>
                <?php if ($Phone2!='') { ?>
                  <li> 
                    <i class="fa fa-phone icon-align"></i> <a href="<?php echo $Phone2Ref;?>" class="t-color1 t-color1-hover"><?php echo $Phone2Name.$Phone2; ?></a>
                  </li>
                <?php } ?>
                <li> 
                  <i class="fa fa-envelope icon-align"></i> <a href="<?php echo "$MailRef";?>" title="<?php echo "$Mail";?>" class="t-color1 t-color1-hover d-none d-md-block"><?php echo $Mail;?></a>
                  <a href="<?php echo "$MailRef";?>" title="<?php echo "$Mail";?>" class="t-color1 t-color1-hover d-block d-md-none">Send an E-Mail</a>
                </li>
                <?php if ($Schedule!='') { ?>
                  <li class="d-none d-md-block"> <i class="fa fa-clock-o icon-align"></i> <?php echo "$Schedule";?> </li>
                  <li class="d-block d-md-none"> <i class="fa fa-clock-o icon-align"></i> <?php echo "$ScheduleMobile";?> </li>
                <?php } ?>
                <?php if ($Schedule2!='') { ?>
                  <li> <i class="fa fa-clock-o icon-align"></i> <?php echo "$Schedule2";?> </li>
                <?php } ?>
               
                <?php if ($License!=""): ?>
                  <li> <i class="fa fa-check icon-align"></i> <?php echo "$License";?> </li>
                <?php endif ?>
               
                <?php if ($PaymentMobile!=""): ?>
                  <li class="d-md-none d-block"> <i class="fa fa-money icon-align"></i> <?php echo "$PaymentMobile";?> </li>
                <?php endif ?>
              </ul> 

                         
              <img src="images/elements/cards.png" class="img-fluid"/>
            </div>            
          </div>
      </div>
    </div>
  </footer>
  <?php } ?>
        
    <div class="bg-color2">
      <button onclick="topFunction()" id="myBtn" title="Go to top"><i class="fa fa-arrow-up"></i></button>
      
      <div class="container py-1 text-center">
        <span class="t-color1 font10">Copyright &copy; <span itemprop="copyrightYear"><?php echo date('Y');?></span> <br class="d-block d-md-none"> <a href="index.php" class="text-white" title="Inicio" itemprop="creator"><?php echo "$Company";?></a></span>    
      </div>
    </div>  

    <!-- Bootstrap core JavaScript -->
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="js/bootstrap.min.js"></script>
    
    <script src="js/aos.js"></script>
    <script src="js/jquery.fancybox.min.js"></script>
   
     <script src="js/main.js"></script>   
	  
    
    <script  src="https://apis.owenscorning.com/client/widget.js" async></script>
    
  </body>
</html>
