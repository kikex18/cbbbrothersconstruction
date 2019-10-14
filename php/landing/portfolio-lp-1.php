<div class="container">
	<div class="row" itemscope itemtype="http://schema.org/ImageGallery">
		<?php for ($i=1; $i <=4; $i++) {?>
		<div class="col-md-3 bright">
			<a data-rel="prettyPhoto" href="images/portfolio/full/<?php echo $i;?>.jpg">
				<img src="images/portfolio/min/<?php echo $i;?>.jpg" class="img-responsive img-thumbnail" alt="Portfolio-<?php echo $i;?>">
			</a>
			<p>&nbsp;</p>
		</div>	
		<?php } ?>		
	</div>
</div>
	