<?php include 'php/section/header.php'; include 'php/section/pagename.php'; include 'php/section/click2-to-call.php'; ?>
<div itemscope itemtype="http://schema.org/WebPageElement" itemprop="mainContentOfPage">
    <div class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-7" data-aos="zoom-in-down" data-aos-offset="200" data-aos-easing="ease-in-sine" data-aos-duration="600">
                    <h3 class="t-color3"><?php echo $Company;?></h3>
                    <p class="t-color2 pt-2"><?php echo "$About[0]";?></p>
                    <p class="t-color2"><?php echo "$About[1]";?></p>
                    <p class="t-color2"><?php echo "$About[2]";?></p>
                </div>
           
                <div class="col-12 col-lg-5" data-aos="zoom-in-up" data-aos-offset="200" data-aos-easing="ease-in-sine" data-aos-duration="600">
                    <div class="row">
                        <?php for($i=1;$i<=4;$i++){ ?>
                            <div class="col-lg-6 col-md-3 col-6 p-1">
                            <div class="container-overlay">
                                <a data-fancybox="gallery" data-caption="<?php echo $Company; ?>" href="images/portfolio/full/<?php echo $i;?>.jpg">
                                    <img src="images/portfolio/min/<?php echo $i;?>.jpg" class="img-fluid" alt="Portfolio-<?php echo $i;?>">
                                </a>
                            </div>
                        </div>
                        <?php }?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include 'php/section/parallax1.php'; ?>
<?php include 'php/section/footer.php'; ?>