<?php include 'php/section/header.php'; include 'php/section/pagename.php'; include 'php/section/click2-to-call.php';?>
<div itemscope itemtype="http://schema.org/WebPageElement" itemprop="mainContentOfPage">
     <div class="py-5">
        <div class="container pt-3">  
            <div class="row mb-3">
                <div class="col-12 text-center" data-aos="zoom-in-down" data-aos-offset="200" data-aos-easing="ease-in-sine" data-aos-duration="600">
                    <h3 class="t-color3 pb-3"><?php echo $Phrase[2];?></h3>
                </div>
                <div class="col-12 col-sm-12 col-lg-10 mx-auto pt-2 text-center2" itemscope itemtype="http://schema.org/Service">
                    <?php for ($i=7; $i <=12; $i++) { ?>
                    <div class="row align-items-center" data-aos="slide-up" data-aos-offset="200" data-aos-easing="ease-in-sine" data-aos-duration="300">
                        <meta itemprop="serviceType" content="<?php echo $SN[$i];?>"/>
                        <div class="col-12 col-sm-12 col-md-12 col-lg-5 text-center2 mb-3"> 
                            <img src="images/services/box<?php echo $i; ?>.jpg" alt="<?php echo "$SN[$i]";?>" class="img-fluid img-thumbnail mb-2"/>
                        </div>
                        <div class="col-12 col-sm-12 col-md-12 col-lg-7">
                            <h3 class="t-color2 h5"><?php echo "$SN[$i]";?></h3>
                            <p class="t-color2"><?php echo "$SD[$i]";?></p>
                        </div>
                    </div>
                    <br>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include 'php/section/footer.php'; ?>