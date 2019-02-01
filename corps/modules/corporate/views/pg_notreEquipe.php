<?php

  if(isset($infos_generales)){

  	foreach ($infos_generales as $value) {
  		
       $logo=$value->logo;
       $facebook=$value->facebook; 
       $twitter=$value->twitter; 
       $linkedln=$value->linkedln; 
       $youtube=$value->youtube; 
       $horaire_travail=$value->horaire_travail;
       $pays=$value->pays; 
       $ville=$value->ville;
       $commune=$value->commune; 
       $email=$value->email; 
       $telephone=$value->telephone; 
       $bref_description=$value->bref_description; 
       $slogan=$value->slogan;
       $copyright=$value->copyright;   
       $libelle_organisation=$value->libelle_organisation; 

  }

}


?>



<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js">
<!--<![endif]-->



<head>
	<title>Ong ivoire ménage</title>
	<!-- head -->
			<?php include("tpl_head.php"); ?> 
    <!-- end head -->
</head>

<body>
	<!--[if lt IE 9]>
		<div class="bg-danger text-center">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/" class="highlight">upgrade your browser</a> to improve your experience.</div>
	<![endif]-->
	<div class="preloader">
		<div class="preloader_image"></div>
	</div>
	<!-- search modal -->
	<div class="modal" tabindex="-1" role="dialog" aria-labelledby="search_modal" id="search_modal"> <button type="button" class="close" data-dismiss="modal" aria-label="Close">
		<span aria-hidden="true">
			<i class="rt-icon2-cross2"></i>
		</span>
	</button>
		<div class="widget widget_search">
			<form method="get" class="searchform search-form form-inline" action="http://webdesign-finder.com/html/diversify/">
				<div class="form-group bottommargin_0"> <input type="text" value="" name="search" class="form-control" placeholder="Search keyword" id="modal-search-input"> </div> <button type="submit" class="theme_button no_bg_button">Search</button> </form>
		</div>
	</div>
	<!-- Unyson messages modal -->
	<div class="modal fade" tabindex="-1" role="dialog" id="messages_modal">
		<div class="fw-messages-wrap ls with_padding">
			<!-- Uncomment this UL with LI to show messages in modal popup to your user: -->
			<!--
		<ul class="list-unstyled">
			<li>Message To User</li>
		</ul>
		-->
		</div>
	</div>
	<!-- eof .modal -->
	<!-- wrappers for visual page editor and boxed version of template -->
	<div id="canvas">
		<div id="box_wrapper">
			<!-- template sections -->
			
			<!-- headerTop -->
			<?php include("tpl_headerTop.php"); ?> 
			<!-- end headerTop -->

			<!-- header -->
			<?php include("tpl_header.php"); ?> 
			<!-- end header -->

			<!-- header -->
			<?php include("tpl_slide2.php"); ?> 
			<!-- end header -->

			<section class="ls page_portfolio section_padding_top_100 section_padding_bottom_100">
				<div class="container">
					<div class="row flex-wrap columns_margin_bottom_20">
                       
                       <?php

						if(isset($notreequipe)){

							foreach ($notreequipe as $info) { ?>

						<div class="col-sm-6 col-md-4">
							<article class="vertical-item content-padding big-padding with_border bottom_color_border loop-color text-center">
								<div class="item-media"> <img src="<?php echo base_url(); ?>uploads/equipe/<?php if(isset($info->photo)) echo $info->photo; ?>" alt=""> </div>
								<div class="item-content">
									<header class="entry-header">
										<h3 class="entry-title small bottommargin_0"> <a href="team-single.html"><?php if(isset($info->nom)) echo $info->nom; ?></a> </h3> <span class="small-text highlight"><?php if(isset($info->titre)) echo $info->titre; ?></span> </header>
									<p class="member-social greylinks"> <a class="social-icon socicon-facebook" href="<?php if(isset($info->facebook)) echo $info->facebook; ?>" title="Facebook"></a> <a class="social-icon socicon-twitter" href="<?php if(isset($info->twitter)) echo $info->twitter; ?>" title="Twitter"></a>  </p>
								</div>
							</article>
						</div>

                         <?php }
						   }

						 ?>

					</div>
				</div>
			</section>
			
			<!-- footer -->
			<?php include("tpl_footer.php"); ?> 
			<!-- end footer -->

			<!-- copyright -->
			<?php include("tpl_copyright.php"); ?> 
			<!-- end copyright -->
		</div>
		<!-- eof #box_wrapper -->
	</div>
	<!-- eof #canvas -->
	<script src="<?php echo base_url(); ?>assets/corporate/js/compressed.js"></script>
	<script src="<?php echo base_url(); ?>assets/corporate/js/selectize.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/corporate/js/main.js"></script>
	<script src="<?php echo base_url(); ?>assets/corporate/js/switcher.js"></script>
</body>



</html>