<section class="ls page_portfolio section_padding_top_100 section_padding_bottom_0 columns_padding_0 container_padding_0">
				<div class="container-fluid">
					<div class="row">
						<div class="col-sm-12">

								<?php

						          if(isset($video)){

							       foreach ($video as $info) {

							       	?>

								<div class="isotope-item col-lg-4 col-md-6 col-sm-6 category-1">
									<article class="vertical-item content-padding text-center bottommargin_20 loop-color">
										<div class="item-media"> 
											<?php echo $info->iframe_youtube; ?>
										</div>
										<div class="item-content">
											<header class="entry-header">
												<div class="categories-links small-text highlightlinks"> <?php if(isset($info->id_categorie_video)) echo $info->id_categorie_video; ?> </div>
												<h3 class="entry-title small bottommargin_0"> 
									<?php if(isset($info->titre_video)) echo $info->titre_video; ?>
								 </h3>
											</header>
										</div>
									</article>
								</div>

								
                                 <?php }
						            }

						            ?>

							


							<!-- eof .isotope_container.row -->
						</div>
					</div>
				</div>
			</section>
			<section class="ls section_padding_bottom_100">
				<div class="container">
					<div class="row">
						<div class="col-sm-12 text-center"> <a href="#" class="theme_button color1 min_width_button margin_0">Charger plus</a> </div>
					</div>
				</div>
			</section>