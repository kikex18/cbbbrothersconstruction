<?php include 'php/section/header.php'; include 'php/section/pagename.php';include 'php/section/click2-to-call.php'; ?>
	<div itemscope itemtype="http://schema.org/WebPageElement" itemprop="mainContentOfPage">
		<?php include('conexion.php');?>
		<?php
			$sql = "SELECT * FROM reviews ORDER BY rdate DESC" ;
			$result=mysqli_query($link,$sql);
			$total = mysqli_num_rows ($result);
			$total_registro = $total;
			$total_registro_mostrar = 5;
			$numero_paginas = ceil($total_registro / $total_registro_mostrar);
			$pagina_actual = isset( $_GET['page']) ? $_GET['page'] : 1;
			$paginacion_parametros =  $pagina_actual*$total_registro_mostrar - $total_registro_mostrar;
			$sql .= " LIMIT " . $paginacion_parametros . "," .$total_registro_mostrar;
			$sql2 = "SELECT SUM(start) as total FROM reviews";
		?>
		<div class="container py-5" itemprop="text">
			<div class="row">
				<div class="col-md-3 bg-light my-5">
					<h3 class="text-center t-color3 py-3">Give us a Review</h3>
					<form id="captcha" class="rating-form" action="guardar.php" method="post" name="rating-movie">
						
						<input name="firstname" type="text" id="firstname" class="customclass" hidden>
						<input type="text" name="name" placeholder="Name" class="form-control" required><br>
						<input type="text" name="city" placeholder="City" class="form-control" required><br>
						<input type="hidden" name="date" value='<?php echo @date('Y-m-d')?>'>
						<input type="text" name="project" placeholder="Project" class="form-control" required><br>
						<textarea class="form-control" name="review" placeholder="Comment" required></textarea><br>
						
						<div class="form-group">
							Write the code - <img src="captcha.php" width="60" /><br>
							<input name="captcha" class="form-control" type="text" required><br>
						</div>

						<input type="hidden" name="token" value="<?php echo $_SESSION['token'];?>">

						<fieldset class="form-group">
							<legend class="form-legend">Rating:</legend>
							<div class="form-item">
								<input id="rating-5" name="rating" type="radio" value="5"/>
								<label for="rating-5" data-value="5">
									<span class="rating-star">
										<i class="fa fa-star-o"></i>
										<i class="fa fa-star"></i>
									</span>
									<span class="ir">5</span>
								</label>
								<input id="rating-4" name="rating" type="radio" value="4"/>
								<label for="rating-4" data-value="4">
									<span class="rating-star">
										<i class="fa fa-star-o"></i>
										<i class="fa fa-star"></i>
									</span>
									<span class="ir">4</span>
								</label>
								<input id="rating-3" name="rating" type="radio" value="3"/>
								<label for="rating-3" data-value="3">
									<span class="rating-star">
										<i class="fa fa-star-o"></i>
										<i class="fa fa-star"></i>
									</span>
									<span class="ir">3</span>
								</label>
								<input id="rating-2" name="rating" type="radio" value="2"/>
								<label for="rating-2" data-value="2">
									<span class="rating-star">
										<i class="fa fa-star-o"></i>
										<i class="fa fa-star"></i>
									</span>
									<span class="ir">2</span>
								</label>
								<input id="rating-1" name="rating" type="radio" value="1"/>
								<label for="rating-1" data-value="1">
									<span class="rating-star">
										<i class="fa fa-star-o"></i>
										<i class="fa fa-star"></i>
									</span>
									<span class="ir">1</span>
								</label>
							</div>
						</fieldset>

						<button name="submit" type="submit" class="btn btn-lg bg-color1 bg-color4-hover text-white" id="submit"> Publish</button>
					</form>
				</div>
				<div class="col-md-9">
					<div class="row text-center">
						<?php if (empty($total_registro)) { }else{ ?>
						<?php if ($result2=mysqli_query($link,$sql2)) {
							$row=mysqli_fetch_row($result2);
							$format_number = number_format($row[0]/$total_registro, 2, '.', '');
							$contador=0;
						?>
						<div class="col-md-12 text-center">
							<h3 class="t-color3">Reviews: <?php for ($i=1; $i <= $format_number ; $i++) {echo "<i class='fa fa-star t-gold'></i>"; $contador++;}
							//a continuacioon agregar estrella parcialmente llena
							if(abs($contador - $format_number) > abs(0.0))
							{
										
								$porcentaje = 100*(1+($format_number-$i));?>
								<i class='fa fa-star' style="background: linear-gradient(90deg, gold 0%, gold <?php echo $porcentaje; ?>%,#000 <?php echo $porcentaje+1; ?>%, #000000 100%);-webkit-background-clip: text;-webkit-text-fill-color: transparent;"></i> 
							<?php } ?>
							<?php $faltan=5-ceil($format_number); ?>
							<?php if(ceil($format_number)<5){for ($i=1; $i <= $faltan ; $i++) {
								echo "<i class='fa fa-star t-gold'></i>";
							}
						} ?> - <?php echo $format_number; ?> <small><?php echo $total_registro; ?> User Reviews </small></h3>
						</div>
						<?php } ?>

			         	<div class="col-md-12 text-center">
							<p>Showing <?php if($paginacion_parametros==0){echo "1";}else{ echo $paginacion_parametros; } ?>-<?php echo $total_registro_mostrar*$pagina_actual; ?> of <?php echo $total_registro ?></p>
			        	</div>

				        <div class="col-md-12 text-center">
							<nav aria-label="Page navigation">
								<ul class="pagination">
									<?php for ($i = 1; $i <= $numero_paginas; $i++) { ?>
									<li class="<?php if($pagina_actual==$i){ echo "t-color3"; }elseif($pagina_actual==0){ echo "t-color3"; } ?>"><a class="btn mx-1 bg-color3 text-white" href="reviews.php?page=<?php echo $i; ?>" ><?php echo $i; ?></a></li>
									<?php } ?>
								</ul>
							</nav>
				        </div>
						<?php } ?>
					</div>
					<div class="comment">
						<?php
							if ($result=mysqli_query($link,$sql)) {
							while($row=mysqli_fetch_row($result)) {?>
							<div class="col-md-12 well py-4 mt-3">
								<h3><?php echo $row[0]. ' in '.$row[1]; ?> <small><?php for ($i=1; $i <= $row[5] ; $i++) {
								echo "<i class='fa fa-star t-gold'></i>";
								} 
								//a continuacion pongo las estrellas vacias
								if(ceil($format_number)<5){
									for ($i=1; $i <= (5-$row[5]) ; $i++) {
										echo "<i class='fa fa-star t-gold'></i>";
									}
								}

								?> - <?php echo $row[5].'.0'; ?> </small></h3>
								<em>
									Date: <?php echo $row[3] ?><br>
									Project: <strong><?php echo $row[2]; ?></strong>
								</em>
								<p class="mt-3 pb-0 mb-0"><?php echo $row[4] ?></p>
							</div>
						<?php  }
						mysqli_free_result($result);
						} else {
							echo "0 results";
						}
						
						mysqli_close($link);
						?>
					</div>
					<br>
					<div class="col-md-12 text-center">
						<nav aria-label="Page navigation">
							<ul class="pagination">
								<?php for ($i = 1; $i <= $numero_paginas; $i++) { ?>
								<li class="<?php if($pagina_actual==$i){ echo "t-color3"; }elseif($pagina_actual==0){ echo "t-color3"; } ?>"><a class="btn mx-1 bg-color3 text-white" href="reviews.php?page=<?php echo $i; ?>" ><?php echo $i; ?></a></li>
								<?php } ?>
							</ul>
						</nav>
					</div>
				</div>
			</div>
		</div>
	</div>
<?php include 'php/section/footer.php';?>