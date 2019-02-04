<section id="blog" class="ls section_padding_top_90 section_padding_bottom_110">
				<div class="container">
					<div class="row flex-wrap v-center">
						<div class="col-sm-8 to_animate" data-animation="fadeInRight">
							<h2 class="section_header">Actualités récentes</h2>
						</div>
						<div class="col-sm-4 text-right hidden-xs to_animate" data-animation="fadeInRight"> <a href="blog-full.html" class="view-more">Voir plus</a> </div>
						<div class="col-sm-12 topmargin_30">
							<div class="loop-colors">

                           	<?php

						            if(isset($actualites_limite3)){

						            	$compt=0;
							            foreach ($actualites_limite3 as $info) { 

							            $compt=$compt + 1;

							            if($compt == 1){ ?>


							            	<article class="post format-small-image to_animate" data-animation="fadeInRight">
												<div class="side-item side-md content-padding big-padding with_border bottom_color_border left">
													<div class="row">
														<div class="col-md-5 col-lg-4">
															<div class="item-media entry-thumbnail"> <img src="<?php echo base_url(); ?>uploads/actualites/<?php if(isset($info->image)) echo $info->image; ?>" alt=""> </div>
														</div>
														<div class="col-md-7 col-lg-8">
															<div class="item-content">
																<header class="entry-header">
																	<h3 class="entry-title small"> <a href="blog-single-right.html" rel="bookmark"><?php if(isset($info->titre)) echo $info->titre; ?></a> </h3>
																	<div class="entry-meta inline-content greylinks"> <span>
																<i class="fa fa-calendar highlight rightpadding_5" aria-hidden="true"></i>
																<a href="blog-single-right.html">
																	<time datetime="2017-10-03T08:50:40+00:00">
																	<?php if(isset($info->date_actualite)) echo $info->date_actualite; ?></time>
																</a>
															</span> <span>
																<i class="fa fa-user highlight rightpadding_5" aria-hidden="true"></i>
																<a href="blog-right.html"><?php if(isset($info->auteur)) echo $info->auteur; ?></a>
															</span> <span class="categories-links">
																<i class="fa fa-tags highlight rightpadding_5" aria-hidden="true"></i>
																<a href="blog-right.html"><?php if(isset($info->cible)) echo $info->cible; ?></a>
															</span> </div>
																</header>
																<div class="entry-content md-content-3lines-ellipsis">
																	<p><?php if(isset($info->description_court)) echo $info->description_court; ?></p>
																</div>
															</div>
														</div>
													</div>
												</div>
								</article>




							           <?php }


							           if($compt == 2){ ?>

							           	<article class="post format-small-image topmargin_30 to_animate" data-animation="fadeInLeft">
									<div class="side-item side-md content-padding big-padding with_border bottom_color_border right">
										<div class="row">
											<div class="col-md-5 col-lg-4">
												<div class="item-media entry-thumbnail"> <img src="<?php echo base_url(); ?>uploads/actualites/<?php if(isset($info->image)) echo $info->image; ?>" alt=""> </div>
											</div>
											<div class="col-md-7 col-lg-8">
												<div class="item-content">
													<header class="entry-header">
														<h3 class="entry-title small"> <a href="blog-single-right.html" rel="bookmark"><?php if(isset($info->titre)) echo $info->titre; ?></a> </h3>
														<div class="entry-meta inline-content greylinks"> <span>
													<i class="fa fa-calendar highlight rightpadding_5" aria-hidden="true"></i>
													<a href="blog-single-right.html">
														<time datetime="2017-10-03T08:50:40+00:00">
														<?php if(isset($info->date_actualite)) echo $info->date_actualite; ?></time>
													</a>
												</span> <span>
													<i class="fa fa-user highlight rightpadding_5" aria-hidden="true"></i>
													<a href="blog-right.html"><?php if(isset($info->auteur)) echo $info->auteur; ?></a>
												</span> <span class="categories-links">
													<i class="fa fa-tags highlight rightpadding_5" aria-hidden="true"></i>
													<a href="blog-right.html"><?php if(isset($info->cible)) echo $info->cible; ?></a>
												</span> </div>
													</header>
													<div class="entry-content md-content-3lines-ellipsis">
														<p><?php if(isset($info->description_court)) echo $info->description_court; ?></p>
													</div>
												</div>
											</div>
										</div>
									</div>
								</article>




							         <?php  }


							         if($compt == 3){ ?>

							         	<article class="post format-small-image topmargin_30 to_animate" data-animation="fadeInRight">
									<div class="side-item side-md content-padding big-padding with_border bottom_color_border left">
										<div class="row">
											<div class="col-md-5 col-lg-4">
												<div class="item-media entry-thumbnail"> <img src="<?php echo base_url(); ?>uploads/actualites/<?php if(isset($info->image)) echo $info->image; ?>" alt=""> </div>
											</div>
											<div class="col-md-7 col-lg-8">
												<div class="item-content">
													<header class="entry-header">
														<h3 class="entry-title small"> <a href="blog-single-right.html" rel="bookmark"><?php if(isset($info->titre)) echo $info->titre; ?></a> </h3>
														<div class="entry-meta inline-content greylinks"> <span>
													<i class="fa fa-calendar highlight rightpadding_5" aria-hidden="true"></i>
													<a href="blog-single-right.html">
														<time datetime="2017-10-03T08:50:40+00:00">
														<?php if(isset($info->date_actualite)) echo $info->date_actualite; ?></time>
													</a>
												</span> <span>
													<i class="fa fa-user highlight rightpadding_5" aria-hidden="true"></i>
													<a href="blog-right.html"><?php if(isset($info->auteur)) echo $info->auteur; ?></a>
												</span> <span class="categories-links">
													<i class="fa fa-tags highlight rightpadding_5" aria-hidden="true"></i>
													<a href="blog-right.html"><?php if(isset($info->cible)) echo $info->cible; ?></a>
												</span> </div>
													</header>
													<div class="entry-content md-content-3lines-ellipsis">
														<p><?php if(isset($info->description_court)) echo $info->description_court; ?>
															</p>
													</div>
												</div>
											</div>
										</div>
									</div>
								</article>




							         <?php }


							         ?>


								


								


								
							 <?php
							                                           }
						            }

						    ?>

							</div>
						</div>
					</div>
				</div>
			</section>