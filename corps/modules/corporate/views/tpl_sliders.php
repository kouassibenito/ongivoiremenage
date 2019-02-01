<section class="intro_section page_mainslider ds all-scr-cover bottom-overlap-teasers">
				<div class="flexslider" data-dots="true" data-nav="true">
					<ul class="slides">

						<?php 



						if(isset($sliders)){


							foreach ($sliders as $slide_item) { ?>
							
							<li>
							<div class="slide-image-wrap"> <img src="<?php echo base_url(); ?>uploads/sliders/<?php if(isset($slide_item->img)) echo $slide_item->img; ?>" alt="" /> </div>
							<div class="container">
								<div class="row">
									<div class="col-sm-12 text-center">
										<div class="slide_description_wrapper">
											<div class="slide_description">
												<div class="intro-layer" data-animation="fadeInRight"> <?php if(isset($slide_item->titre1)) echo $slide_item->titre1; ?> </div>
												<div class="intro-layer" data-animation="fadeInLeft">
													<h2> <span class="highlight3"><?php if(isset($slide_item->titre2)) echo $slide_item->titre2; ?> </span><br> <?php if(isset($slide_item->titre3)) echo $slide_item->titre3; ?> </h2>
												</div>
												<div class="intro-layer" data-animation="fadeInRight">
													<p class="thin"><em><?php if(isset($slide_item->titre4)) echo $slide_item->titre4; ?></em></p>
												</div>
												
											</div>
											<!-- eof .slide_description -->
										</div>
										<!-- eof .slide_description_wrapper -->
									</div>
									<!-- eof .col-* -->
								</div>
								<!-- eof .row -->
							</div>
							<!-- eof .container -->
						</li>
							

						<?php	}



						}


						?>
						
						
					</ul>
				</div>
				<!-- eof flexslider -->
			</section>