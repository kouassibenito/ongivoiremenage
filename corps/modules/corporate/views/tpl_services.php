<section id="services" class="ls section_intro_overlap columns_padding_0 columns_margin_0 container_padding_0">
				<div class="container-fluid">
					<div class="row flex-wrap v-center-content">


						<?php

						if(isset($carateristique_acceuil1)){

							foreach ($carateristique_acceuil1 as $caract1) { ?>

								<div class="col-lg-3 col-sm-6 col-xs-12 to_animate" data-animation="fadeInUp">
									<div class="teaser main_bg_color transp with_padding big-padding margin_0">
										<div class="media xxs-media-left">
											<div class="media-left media-middle">
												<div class="teaser_icon size_small round light_bg_color thick_border_icon big_wrapper"> <i class="fa fa-twitter highlight" aria-hidden="true"></i> </div>
											</div>
											<div class="media-body media-middle">
												<h4><a href="#0"><?php if(isset($caract1->titre)) echo $caract1->titre; ?></a></h4>
												<p><?php if(isset($caract1->description)) echo $caract1->description; ?></p>
											</div>
										</div>
									</div>
								</div>
								
							<?php }
						   }

						 ?>


						 <?php

						if(isset($carateristique_acceuil2)){

							foreach ($carateristique_acceuil2 as $caract2) { ?>
						
						<div class="col-lg-3 col-sm-6 col-xs-12 to_animate" data-animation="fadeInUp">
							<div class="teaser main_bg_color2 transp with_padding big-padding margin_0">
								<div class="media xxs-media-left">
									<div class="media-left media-middle">
										<div class="teaser_icon size_small round light_bg_color thick_border_icon big_wrapper"> <i class="fa fa-rocket highlight2" aria-hidden="true"></i> </div>
									</div>
									<div class="media-body media-middle">
										<h4><a href="#0"><?php if(isset($caract2->titre)) echo $caract2->titre; ?></a></h4>
										<p><?php if(isset($caract2->description)) echo $caract2->description; ?></p>
									</div>
								</div>
							</div>
						</div>

						<?php }
						   }

						 ?>

                      


                      <?php

						if(isset($carateristique_acceuil3)){

							foreach ($carateristique_acceuil3 as $caract3) { ?>
						<div class="col-lg-3 col-sm-6 col-xs-12 to_animate" data-animation="fadeInUp">
							<div class="teaser main_bg_color3 transp with_padding big-padding margin_0">
								<div class="media xxs-media-left">
									<div class="media-left media-middle">
										<div class="teaser_icon size_small round light_bg_color thick_border_icon big_wrapper"> <i class="fa fa-users highlight3" aria-hidden="true"></i> </div>
									</div>
									<div class="media-body media-middle">
										<h4><a href="#0"><?php if(isset($caract3->titre)) echo $caract3->titre; ?></a></h4>
										<p><?php if(isset($caract3->description)) echo $caract3->description; ?></p>
									</div>
								</div>
							</div>
						</div>

                       <?php }
						   }

						 ?>

                         

                         <?php

						if(isset($carateristique_acceuil4)){

							foreach ($carateristique_acceuil4 as $caract4) { ?>
						<div class="col-lg-3 col-sm-6 col-xs-12 to_animate" data-animation="fadeInUp">
							<div class="teaser main_bg_color4 transp with_padding big-padding margin_0">
								<div class="media xxs-media-left">
									<div class="media-left media-middle">
										<div class="teaser_icon size_small round light_bg_color thick_border_icon big_wrapper"> <i class="fa fa-briefcase highlight4" aria-hidden="true"></i> </div>
									</div>
									<div class="media-body media-middle">
										<h4><a href="#0"><?php if(isset($caract4->titre)) echo $caract4->titre; ?></a></h4>
										<p><?php if(isset($caract4->description)) echo $caract4->description; ?></p>
									</div>
								</div>
							</div>
						</div>


						<?php }
						   }

						 ?>

					</div>
				</div>
			</section>