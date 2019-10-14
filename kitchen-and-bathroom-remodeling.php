<?php include 'php/section/header.php'; include 'php/section/pagename.php'; include 'php/section/click2-to-call.php'; ?>
<div itemscope itemtype="http://schema.org/WebPageElement" itemprop="mainContentOfPage">
    <div class="container py-5">       
        <div class="row">
            <div class="col-12 col-sm-12 col-md-8 col-lg-8 col-xl-8" itemscope itemtype="http://schema.org/Service">
                 <div class="row">
                    <div class="col-12"  data-aos="fade-down" data-aos-offset="200" data-aos-easing="ease-in-sine" data-aos-duration="600">
                        <img src="images/landing/3.jpg" alt="<?php echo "$LN[3]";?>" class="img-fluid  img-thumbnail text-center"/>
                        <a href="services.php">
                            <div class="servicesHover">
                                <span class="h4 text-uppercase text-white stroke1 d-none d-md-inline-block"><?php echo $LN[3];?></span> 
                                <span class="text-uppercase text-white stroke1 d-inline-block d-md-none"><?php echo $LN[3];?></span> 
                            </div>
                        </a>
                    </div>
                </div>
                <h4 class="t-color3 pt-3"><?php echo $License.' - '.$Phrase[4]; ?></h4>
                <?php echo $LD[3];?>
            </div>
            <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 pt-5 pt-md-0" itemscope itemtype="http://schema.org/Service">
                 <?php include 'php/widgets/call2.php'; ?> 
                <?php include 'php/widgets/contact3.php'; ?>
            </div>
        </div>
    </div>
</div>

<?php  include 'php/section/footer.php'; ?>