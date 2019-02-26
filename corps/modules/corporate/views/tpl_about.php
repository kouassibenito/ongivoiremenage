<section id="about" class="ls section_padding_top_110 columns_padding_30">
				<div class="container">

					<?php

						if(isset($quisommesnous)){

							foreach ($quisommesnous as $info) { ?>
								
					<div class="row">
						<div class="col-md-6 col-md-push-6 to_animate" data-animation="fadeInUp" data-delay="600">
							<div class="embed-responsive embed-responsive-3by2"> <a href="<?php if(isset($info->video )) echo $info->video ; ?>" class="embed-placeholder">
						<img src="<?php echo base_url(); ?>uploads/quisommesnous/<?php if(isset($info->img )) echo $info->img  ; ?>" alt="">
					</a> </div>
						</div>

						

						<div class="col-md-6 col-md-pull-6 to_animate" data-animation="fadeInRight" data-delay="300">
							<h2 class="section_header color4"> <?php if(isset($info->titre)) echo $info->titre; ?></h2>
							<p class="section-excerpt grey"><?php if(isset($info->description_gras)) echo $info->description_gras; ?></p>
							<p class="section-excerpt grey"><?php if(isset($info->description_simple)) echo $info->description_simple; ?><br/>
								
						
             <a href="<?php echo base_url(); ?>corporate/quiSommesNous" class="more-link">Lire plus</a></p>
						</div>

						

					</div>

					<?php }
						   }

						 ?>

				</div>
			</section>