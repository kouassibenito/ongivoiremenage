<section class="ls section_padding_top_100 section_padding_bottom_100">
				<div class="container">


					<?php

						if(isset($contact)){

							foreach ($contact as $info) { ?>


					<div class="row">
						<div class="col-sm-4 to_animate" data-animation="pullDown">
							<div class="teaser text-center">
								<div class="teaser_icon highlight size_small"> <i class="rt-icon2-phone5"></i> </div>
								<p> <span class="grey">Téléphone:</span><?php if(isset($info->telephone)) echo $info->telephone; ?>  <br> <span class="grey">Fax:</span><?php if(isset($info->fax)) echo $info->fax; ?>   </p>
							</div>
						</div>
						<div class="col-sm-4 to_animate" data-animation="pullDown">
							<div class="teaser text-center">
								<div class="teaser_icon highlight size_small"> <i class="rt-icon2-location2"></i> </div>  
								<p> <?php if(isset($info->pays)) echo $info->pays; ?>,<br> <?php if(isset($info->ville)) echo $info->ville; ?>,<br><?php if(isset($info->commune)) echo $info->commune; ?> <br><?php if(isset($info->quartier)) echo $info->quartier; ?> </p>
							</div>
						</div>
						<div class="col-sm-4 to_animate" data-animation="pullDown">
							<div class="teaser text-center">
								<div class="teaser_icon highlight size_small"> <i class="rt-icon2-world"></i> </div>
								<p><?php if(isset($info->email)) echo $info->email; ?></p>
								<p> <a href="<?php if(isset($twitter)) echo $twitter; ?>" class="social-icon color-icon socicon-twitter"></a> <a href="<?php if(isset($facebook)) echo $facebook; ?>" class="social-icon color-icon socicon-facebook"></a> 									</p>
							</div>
						</div>
					</div>
                         
                         <?php }
						   }

						 ?>
						
<?php 	
  if(isset($mail)){
       if($mail == "success"){ ?>

       	<div style="width: 100%; height: 50px; background-color: green; text-align: center; padding-top: 10px; border-radius: 10px; margin-top: 20px;">
			 <h5 style="color:white;">Mail envoyé avec succès</h5>
		</div>

      <?php }
     }
?>
						
                       <form action="<?php echo base_url(); ?>corporate/envoiemail_formulaire" method="POST">
					<div class="row topmargin_60">
						<div class="col-sm-12 to_animate">
							<div class="contact-form cs parallax overlay_color columns_padding_5 rounded overflow_hidden" method="post" action="http://webdesign-finder.com/html/diversify/">
								<div class="row">
									<div class="col-sm-6">
										<p class="form-group"> <label for="name">Nom complet <span class="required">*</span></label> <i class="fa fa-user grey" aria-hidden="true"></i> <input type="text" aria-required="true" size="30" value="" name="nom" id="name" class="form-control" placeholder="Nom complet">											</p>
										<p class="form-group"> <label for="email">Adresse e-mail<span class="required">*</span></label> <i class="fa fa-envelope grey" aria-hidden="true"></i> <input type="email" aria-required="true" size="30" value="" name="mail_internaute" id="email" class="form-control" placeholder="Adresse e-mail">											</p>
										<p class="form-group"> <label for="subject">Sujet<span class="required">*</span></label> <i class="fa fa-flag grey" aria-hidden="true"></i> <input type="text" aria-required="true" size="30" value="" name="sujet" id="subject" class="form-control" placeholder="Sujet">											</p>
									</div>
									<div class="col-sm-6">
										<p class="contact-form-message form-group"> <label for="message">Message</label> <i class="fa fa-comment grey" aria-hidden="true"></i> <textarea aria-required="true" rows="3" cols="45" name="message" id="message" class="form-control" placeholder="Message"></textarea> </p>
									</div>
								</div>
								<div class="row">
									<div class="col-sm-12">
										<p class="contact-form-submit text-center topmargin_30"> <button type="submit" id="contact_form_submit" name="contact_submit" class="theme_button color1">Envoyer message</button> </p>
									</div>
								</div>
							</div>
						</div>
					</div>
					</form>
				</div>
			</section>