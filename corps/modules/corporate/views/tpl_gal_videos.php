<section class="ls page_portfolio section_padding_top_100 section_padding_bottom_0 columns_padding_0 container_padding_0">
				<div class="container-fluid">
					<div class="row">
						<div class="col-sm-12">
							<div class="filters isotope_filters"> <a href="#" class="selected" data-filter="*">Tous</a> <a href="#" data-filter=".category-1">Catégorie 1</a> <a href="#" data-filter=".category-2">Catégorie 2</a> <a href="#" data-filter=".category-3">Catégorie 3</a> <a href="#" data-filter=".category-4">Catégorie 4</a>								</div>

							

							<div class="isotope_container isotope row masonry-layout columns_margin_0" data-filters=".isotope_filters">

								<?php

						          if(isset($video)){

							       foreach ($video as $info) { ?>

								<div class="isotope-item col-lg-4 col-md-6 col-sm-6 category-1">
									<article class="vertical-item content-padding text-center bottommargin_20 loop-color">
										<div class="item-media"> <img src="<?php echo base_url(); ?>uploads/video/<?php if(isset($info->video)) echo $info->video; ?>" alt="">
											<div class="media-links">
												<div class="links-wrap"> <a class="p-view prettyPhoto " title="" data-gal="prettyPhoto[gal]" href="<?php echo base_url(); ?>uploads/video/<?php if(isset($info->video)) echo $info->video; ?>"></a> </div>
											</div>
										</div>
										<div class="item-content">
											<header class="entry-header">
												<div class="categories-links small-text highlightlinks"> <a href="#"><?php if(isset($info->id_categorie_video)) echo $info->id_categorie_video; ?></a> </div>
												<h3 class="entry-title small bottommargin_0"> <a href="gallery-single.html" rel="bookmark">
									<?php if(isset($info->titre_video)) echo $info->titre_video; ?>
								</a> </h3>
											</header>
										</div>
									</article>
								</div>

								
                                 <?php }
						            }

						            ?>

							</div>


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