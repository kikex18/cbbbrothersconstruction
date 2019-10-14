<?php include 'php/section/header.php';include 'php/section/pagename.php'; include 'php/section/click2-to-call.php'; ?>
<div itemscope itemtype="http://schema.org/WebPageElement" itemprop="mainContentOfPage">
	<div class="py-5">
		<div class="container">
			<div id="content" itemprop="text">
				<div class="">
					<div class="container">
						<?php 
						  require_once('portfoliopaginacion.php');
						  $urlImagenes = 'images/portfolio/min/'; // Asignar valor a la variable con la direccion donde se encuentra las imagenes, EJEMPLO: "images/potfolio/min/" 
						  paginacionDePortafolio($urlImagenes);
						?>

						<?php if ($numero_paginas > 1) {?>
				            <ul class="pagination text-center">
				              <li><a class="mx-1 btn bg-color1 t-color1" href="gallery.php?page=<?php echo $prev; ?>">&laquo;</a></li>
				              <?php for ($i = 1; $i <= $numero_paginas; $i++) { ?>
				              <li class="<?php if($pagina_actual==$i){ echo "active"; }?>"><a class="mx-1 btn bg-color1 t-color1" href="gallery.php?page=<?php echo $i; ?>"><?php echo $i; ?></a></li>
				              <?php } ?>
				              <li><a class="mx-1 btn bg-color1 t-color1" href="gallery.php?page=<?php echo $next; ?>">&raquo;</a></li>
				            </ul>
				        <?php } ?>


						<div class="row" data-aos="zoom-in-up" data-aos-offset="200" data-aos-easing="ease-in-sine" data-aos-duration="600" itemscope itemtype="http://schema.org/ImageGallery">
							<?php for ($i=$inicio; $i<=$final; $i++) { ?>
								<div class="col-md-3 col-6">
									<div class="container-overlay">
										<a data-fancybox="gallery" data-caption="<?php echo $Company; ?>" href="images/portfolio/full/<?php echo $i;?>.jpg">
											<img src="images/portfolio/min/<?php echo $i;?>.jpg" class="img-responsive img-thumbnail" alt="Portfolio-<?php echo $i;?>">
										</a>
									</div>
									<p>&nbsp;</p>
								</div>	
							<?php } ?>		
						</div>
						<?php if ($numero_paginas > 1) {?>
				            <ul class="pagination text-center">
				              <li><a class="mx-1 btn bg-color1 t-color1" href="gallery.php?page=<?php echo $prev; ?>">&laquo;</a></li>
				              <?php for ($i = 1; $i <= $numero_paginas; $i++) { ?>
				              <li class="<?php if($pagina_actual==$i){ echo "active"; }?>"><a class="mx-1 btn bg-color1 t-color1" href="gallery.php?page=<?php echo $i; ?>"><?php echo $i; ?></a></li>
				              <?php } ?>
				              <li><a class="mx-1 btn bg-color1 t-color1" href="gallery.php?page=<?php echo $next; ?>">&raquo;</a></li>
				            </ul>
				        <?php } ?>
					</div>
				</div>
			</div>	
		</div>
	</div>
</div>
<?php include 'php/section/footer.php';?>