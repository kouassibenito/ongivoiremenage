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

			
			<section id="about" class="ls section_padding_top_110 columns_padding_30">
				<div class="container">
					<div class="row">
						
						<div class="col-md-12" data-animation="fadeInRight" data-delay="300">
							<h2 class="section_header color4"> Nos missions </h2>
							<p class="section-excerpt grey">
               <ul class="section-excerpt grey">
            <li>Renforcer les compétences et le professionnalisme du personnel domestique;</li>

            <li>Faciliter l’insertion du personnel domestique dans le tissu socio-professionnel;</li>

            <li>Aider à l’acquisition d’une autonomie financière.</li>
      </ul>
</p>
						</div>
					</div>
				</div>
			</section>

			<section id="about" class="ls section_padding_top_110 columns_padding_30">
				<div class="container">
					<div class="row">
						
						<div class="col-md-12" data-animation="fadeInRight" data-delay="300">
							<h2 class="section_header color4"> Nos visions </h2>
							<p class="section-excerpt grey">
               <ul class="section-excerpt grey">
            <li>Mettre en place un Centre de Formation et d’Éducation dédié au personnel de ménage ;</li>

            <li>Créer des antennes de formation sur tout le territoire Ivoirien ;</li>

            <li>Valoriser et Professionnaliser le métier de personnel de ménage.</li>
      </ul>
</p>
						</div>
					</div>
				</div>
			</section>

			<section id="about" class="ls section_padding_top_110 columns_padding_30">
				<div class="container">
					<div class="row">
						
						<div class="col-md-12" data-animation="fadeInRight" data-delay="300">
							<h2 class="section_header color4"> Nos valeurs fondamentales </h2>
							<p class="section-excerpt grey">
               <ul class="section-excerpt grey">
            <li>Intégrité;</li>

            <li>Service;</li>

            <li>Responsabilité;</li>

            <li>Rigueur.</li>
      </ul>
</p>
						</div>
					</div>
				</div>
			</section>
			
			

			<!-- actualite2 -->
			<?php// include("tpl_actualites2.php"); ?> 
			<!-- end actualite2 -->
			

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