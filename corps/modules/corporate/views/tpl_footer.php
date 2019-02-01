<footer class="page_footer template_footer ds ms parallax overlay_color section_padding_top_110 section_padding_bottom_100 columns_padding_25">
				<div class="container">
					<div class="row">
						<div class="col-xs-12">
							<div id="subscribe" class="widget widget_mailchimp with_padding cs main_color2 parallax overlay_color topmargin_0">
								<h3 class="widget-title">Notre Newsletter</h3>
								<form class="signup" action="http://webdesign-finder.com/html/diversify/" method="get">
									<div class="form-group-wrap">
										<div class="form-group"> <label for="mailchimp" class="sr-only"> </label> <input name="email" type="email" id="mailchimp" class="mailchimp_email form-control text-center" placeholder="Renseigner votre e-mail et cliquer sur souscrire"> </div> <button type="submit" class="theme_button color2">Souscrire maintenant</button>										</div>
									<div class="response"></div>
								</form>
							</div>
						</div>
						<div class="col-md-4 col-sm-6 col-xs-12 col-md-push-4 text-center">
							<div class="widget widget_text widget_about">
								<div class="logo logo_with_text bottommargin_10"> <img src="<?php echo base_url(); ?>uploads/logo/<?php if(isset($logo)) echo $logo; ?>" alt=""> <span class="logo_text">
                            <?php if(isset($libelle_organisation)) echo $libelle_organisation; ?>
                            <small class="highlight4"><?php if(isset($slogan)) echo $slogan; ?></small>
                        </span> </div>
								<p><?php if(isset($bref_description)) echo $bref_description; ?></p>
								<p class="topmargin_25"> <a class="social-icon border-icon rounded-icon socicon-facebook" href="<?php if(isset($facebook)) echo $facebook; ?>" title="Facebook"></a> <a class="social-icon border-icon rounded-icon socicon-twitter" href="<?php if(isset($twitter)) echo $twitter; ?>" title="Twitter"></a>  <a class="social-icon border-icon rounded-icon socicon-linkedin" href="<?php if(isset($linkedln)) echo $linkedln; ?>" title="Linkedin"></a> <a class="social-icon border-icon rounded-icon socicon-youtube" href="<?php if(isset($youtube)) echo $youtube; ?>" title="Youtube"></a> </p>
							</div>
						</div>
						<div class="col-md-4 col-sm-6 col-xs-12 col-md-pull-4 text-center">
							<div class="widget widget_text">
								<h3 class="widget-title">Nos Contacts</h3>
								<ul class="list-unstyled greylinks">
									<li class="media"> <i class="fa fa-map-marker highlight rightpadding_5" aria-hidden="true"></i><?php if(isset($pays)) echo $pays; ?>, <?php if(isset($ville )) echo $ville; ?>, <?php if(isset($commune )) echo $commune; ?></li>
									<li class="media"> <i class="fa fa-phone highlight rightpadding_5" aria-hidden="true"></i><?php if(isset($telephone )) echo $telephone; ?> </li>
									<li class="media"> <i class="fa fa-pencil highlight rightpadding_5" aria-hidden="true"></i> <a href="mailto:info@ongivoiremenage.org"><?php if(isset($email )) echo $email; ?></a> </li>
									<li class="media"> <i class="fa fa-clock-o highlight rightpadding_5" aria-hidden="true"></i><?php if(isset($horaire_travail)) echo $horaire_travail; ?> </li>
								</ul>
							</div>
						</div>
						<div class="col-md-4 col-sm-6 col-xs-12 hidden-xs hidden-sm text-center">
							<div class="widget widget_recent_posts">
								<h3 class="widget-title">Actualités récentes</h3>
								<ul class="list-unstyled greylinks">
									<li>
										<p> <a href="blog-single-left.html">Leberkas beef kielbasa kevin turkey chicken alcatra. Ground round chicken.</a> </p>
										<div class="entry-meta inline-content greylinks"> <span>
									<i class="fa fa-calendar highlight3 rightpadding_5" aria-hidden="true"></i>
									<a href="blog-single-right.html">
										<time datetime="2017-10-03T08:50:40+00:00">
										17 jan, 2018</time>
									</a>
								</span> <span>
									<i class="fa fa-user highlight3 rightpadding_5" aria-hidden="true"></i>
									<a href="blog-right.html">Admin</a>
								</span> <span class="categories-links">
									<i class="fa fa-tags highlight3 rightpadding_5" aria-hidden="true"></i>
									<a href="blog-right.html">lgbt</a>
								</span> </div>
									</li>
									<li>
										<p> <a href="blog-single-left.html">Ball tip leberkas salami jowl ham pork  tri-tip tail.</a> </p>
										<div class="entry-meta inline-content greylinks"> <span>
									<i class="fa fa-calendar highlight3 rightpadding_5" aria-hidden="true"></i>
									<a href="blog-single-right.html">
										<time datetime="2017-10-03T08:50:40+00:00">
										17 jan, 2018</time>
									</a>
								</span> <span>
									<i class="fa fa-user highlight3 rightpadding_5" aria-hidden="true"></i>
									<a href="blog-right.html">Admin</a>
								</span> <span class="categories-links">
									<i class="fa fa-tags highlight3 rightpadding_5" aria-hidden="true"></i>
									<a href="blog-right.html">Serivces</a>
								</span> </div>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</footer>