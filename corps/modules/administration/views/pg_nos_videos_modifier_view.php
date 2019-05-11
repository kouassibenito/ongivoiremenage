<div class="page-header mt-0 shadow p-3">
	<ol class="breadcrumb mb-sm-0">
									<li class="breadcrumb-item"><a href="#">Formulaire</a></li>
									
								</ol>
								<div class="btn-group mb-0">
									<button type="button" class="btn btn-primary btn-sm dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Actions</button>
									<div class="dropdown-menu">
										<a class="dropdown-item" href="<?php echo base_url(); ?>administration/nosVideosListes"><i class="fas fa-eye mr-2"></i>Voir la liste des Vidéos</a>
										
										
										<div class="dropdown-divider"></div>
										<a class="dropdown-item" href="#"><i class="fas fa-cog mr-2"></i> Paramètres</a>
									</div>
								</div>
</div>
							<div class="row">
								
								<div class="col-lg-12">
									<div class="card shadow">
										<div class="card-header">
											<h2 class="mb-0">Ajouter/Modifier la vidéo</h2>
										</div>
 
									</div>
								</div>
                                    
							</div>
							<div class="row">
								<div class="col-md-12">
									<div class="card shadow">
										<div class="card-header">
											<h2 class="mb-0">Formulaire</h2>
										</div>
										<div class="card-body">

									<form action="<?php echo base_url(); ?>administration/videoModifier/<?php echo $id_video; ?>" method="POST">

											<?php  

											if(isset($info_video_id)){

												foreach ($info_video_id as $info) { ?>

											<div class="row">
												<div class="col-md-6">
													<div class="form-group">
														<input type="text" class="form-control is-invalid state-invalid" name="titre_video" placeholder="Titre de la vidéo" value="<?php if(isset($info->titre_video)) echo $info->titre_video; ?>">
													</div>
													
												</div>
												
												<div class="col-md-6">
													

													<div class="form-group">
														<input type="text" class="form-control is-invalid state-invalid" name="id_categorie_video" placeholder="Catégorie de la vidéo" value="<?php if(isset($info->id_categorie_video)) echo $info->id_categorie_video; ?>" >
													</div>

												
												</div>

                                         <div class="col-md-6">
													

													<div class="form-group">
														<textarea class="form-control is-invalid state-invalid" rows="5" name="iframe_youtube" placeholder="Lien youtube"><?php if(isset($info->iframe_youtube)) echo $info->iframe_youtube; ?></textarea> 
													</div>

												
												</div>


											</div>

											<?php }
											}

											?>
												
												                
											</div>
											<div class="row" style="margin-top: 20px;">
                                                <div class="col-md-12">
													<ul class="list-inline wizard mb-0">
															
															<li class="next list-inline-item float-right"><button type="submit" class="btn btn-primary mb-0 waves-effect waves-light">Modifier</button></li>
														</ul>
												</div>
											</div>

										</form>
										
										</div>
									</div>
									
								</div>
							</div>
<!-- file uploads js -->
<script src="<?php echo base_url(); ?>assets/administration/plugins/jquery/dist/jquery.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/administration/plugins/fileuploads/js/dropify.min.js"></script>
							<script>
		$('.dropify').dropify({
			messages: {
				
				'replace': 'Cliquer/déposer ou remplacer le logo',
				'remove': 'Supprimer',
				'error': 'Ooops, something wrong appended.'
			},
			error: {
				'fileSize': 'The file size is too big (2M max).'
			}
		});
	</script>