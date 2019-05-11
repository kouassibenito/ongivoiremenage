<section id="team" class="ls section_padding_top_90">
				<div class="container">
					<div class="row">
						<div class="col-sm-12 bottommargin_0 to_animate" data-animation="fadeInUp">
							<h2 class="section_header color">Notre équipe dirigeante</h2>
							<div class="owl-carousel loop-colors topmargin_40" data-dots="false" data-nav="true" data-responsive-lg="3">
                                <?php

						if(isset($equipe_accueil)){

							foreach ($equipe_accueil as $dallas) { 

                                    $cle_img=$dallas->cle_img;
			                       $nom_image=$this->corporate_model->nom_images($cle_img);
								?>
								<article class="vertical-item content-padding big-padding with_border bottom_color_border text-center">
									<div class="item-media"> <img src="<?php echo base_url(); ?>uploads/equipe/<?php if(isset($nom_image)) echo $nom_image; ?>" alt=""> </div>
									<div class="item-content">
										<header class="entry-header">
											<h3 class="entry-title small bottommargin_0"> <a href="#"><?php if(isset($dallas->nom )) echo $dallas->nom ; ?></a> </h3> <span class="small-text highlight"><?php if(isset($dallas->titre )) echo $dallas->titre ; ?></span> </header>
										<p class="member-social greylinks"> <a class="social-icon socicon-facebook" href="<?php if(isset($dallas->facebook )) echo $dallas->facebook ; ?>" title="Facebook"></a> <a class="social-icon socicon-twitter" href="<?php if(isset($dallas->twitter )) echo $dallas->twitter ; ?>" title="Twitter"></a> </p>
									</div>
								</article>
                          <?php }
						   }

						 ?>
								
							</div>
						</div>
					</div>
				</div>
			</section>