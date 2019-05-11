<section class="ls page_portfolio section_padding_top_100 section_padding_bottom_100">
				<div class="container">
					<div class="row">
						<div class="col-sm-12">

							<div class="filters isotope_filters"> <a href="#" class="selected" data-filter="*">Tous</a> <a href="#" data-filter=".category-1">Catégorie 1</a> <a href="#" data-filter=".category-2">Catégorie 2</a> <a href="#" data-filter=".category-3">Catégorie 3</a> <a href="#" data-filter=".category-4">Catégorie 4</a>								</div>

							<div class="isotope_container isotope row masonry-layout columns_margin_bottom_20" data-filters=".isotope_filters">
                                 
                                 <?php

						              if(isset($photo)){

							             foreach ($photo as $info) { 
                                            
                                             $cle_img=$info->cle_img;
			                       $nom_image=$this->corporate_model->nom_images($cle_img);

							             	?>

								<div class="isotope-item col-lg-4 col-md-6 col-sm-12 category-1">
									<div class="vertical-item gallery-item content-absolute text-center ds">
										<div class="item-media"> <img src="<?php echo base_url(); ?>uploads/photo/<?php if(isset($nom_image)) echo $nom_image; ?>" alt="">
											<div class="media-links">
												<div class="links-wrap"> <a class="p-view prettyPhoto" title="" data-gal="prettyPhoto[gal]" href="<?php echo base_url(); ?>uploads/photo/<?php if(isset($info->photo)) echo $info->photo; ?>"></a> </div>
											</div>
										</div>
										<div class="item-content">
											<h4> <a href=""><?php if(isset($info->titre_photo)) echo $info->titre_photo; ?></a> </h4>
										</div>
									</div>
								</div>

								<?php }
						          }

						         ?>

							</div>
							<!-- eof .isotope_container.row -->
							<div class="row">
								<div class="col-sm-12 text-center">
									<div class="topmargin_30">
										<ul class="pagination">
											<li><a href="#"><span class="sr-only">Prev</span><i class="fa fa-angle-left" aria-hidden="true"></i></a></li>
											<li class="active"><a href="#">1</a></li>
											<li><a href="#">2</a></li>
											<li><a href="#">3</a></li>
											<li><a href="#">4</a></li>
											<li><a href="#">5</a></li>
											<li><a href="#"><span class="sr-only">Next</span><i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
										</ul>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>