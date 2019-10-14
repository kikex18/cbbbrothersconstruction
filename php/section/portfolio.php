<div class="container py-5">
	<div class="row px-3">
		<div class="col-12 col-sm-12 col-md-10 col-lg-9 text-center mx-auto pb-3" data-aos="zoom-in-up" data-aos-offset="200" data-aos-easing="ease-in-sine" data-aos-duration="600">
            <h3 class="t-color3">Portfolio</h3>
            <p class="t-color2"><?php echo $Experience; ?></p>
        </div>
    </div>
	<div class="row px-3">
		<?php for($i=1;$i<=8;$i++){ ?>
			<div class="col-md-3 col-6 p-2" data-aos="zoom-in-up" data-aos-offset="200" data-aos-easing="ease-in-sine" data-aos-duration="600">
				<div class="container-overlay">
					<a data-fancybox="gallery" data-caption="<?php echo $Company; ?>" href="images/portfolio/full/<?php echo $i;?>.jpg">
						<img src="images/portfolio/min/<?php echo $i;?>.jpg" class="img-fluid" alt="Portfolio-<?php echo $i;?>">
					</a>
				</div>
			</div>	
		<?php }?>
		<div class="col-12 text-center mt-3">
			<a href="gallery.php" class="btn bg-color1 bg-color2-hover text-white"> <i class="fa fa-camera"></i> View All Portfolio</a>
		</div>
	</div>
</div>