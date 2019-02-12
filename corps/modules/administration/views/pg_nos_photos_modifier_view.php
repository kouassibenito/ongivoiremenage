<div class="page-header mt-0 shadow p-3">
	<ol class="breadcrumb mb-sm-0">
									<li class="breadcrumb-item"><a href="#">Formulaire</a></li>
									
								</ol>
								<div class="btn-group mb-0">
									<button type="button" class="btn btn-primary btn-sm dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Actions</button>
									<div class="dropdown-menu">
										<a class="dropdown-item" href="<?php echo base_url(); ?>administration/nosPhotosListes"><i class="fas fa-eye mr-2"></i>Voir la liste des photos</a>
										
										
										<div class="dropdown-divider"></div>
										<a class="dropdown-item" href="#"><i class="fas fa-cog mr-2"></i> Paramètres</a>
									</div>
								</div>
								</div>
</div>
							<div class="row">


								<?php

														             if(isset($info_photo_id)){
                                                                        
															            foreach ($info_photo_id as $info) {

															            	 $imgs =$info->photo ;
				                                                              if(empty($imgs) || $imgs==""){

				                                                              	$photo="1.jpg";

				                                                              }else{

				                                                                $photo=$imgs;
				                                                              }
															            	
			                                                              
															    ?>
								
								<div class="col-lg-12">
									<div class="card shadow">
										<div class="card-header">
											<h2 class="mb-0">Ajouter/Modifier l'image</h2>
										</div>
										<div class="card-body">
											<input type="file" class="dropify" data-default-file="<?php echo base_url(); ?>uploads/photo/<?php if(isset($photo)) echo $photo; ?>" data-height="300"  />
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
											<div class="row">
												<div class="col-md-6">

													<input type="hidden" name="id_photo" value="<?php if(isset($info->id_photo)) echo $info->id_photo; ?>">


													<div class="form-group">
														<input type="text" class="form-control is-invalid state-invalid" name="input" placeholder="Titre de la photo" value="<?php if(isset($info->titre_photo)) echo $info->titre_photo; ?>">
													</div>
													
												</div>
												
												<div class="col-md-6">
													

													<div class="form-group">
														<input type="text" class="form-control is-invalid state-invalid" name="input" placeholder="Catégorie de la photo" value="<?php if(isset($info->id_categorie_photo)) echo $info->id_categorie_photo; ?>" >
													</div>

													<?php }
												                    }

												                ?>
												</div>
											</div>
											<div class="row" style="margin-top: 20px;">
                                                <div class="col-md-12">
													<ul class="list-inline wizard mb-0">
															
															<li class="next list-inline-item float-right"><a href="#" class="btn btn-primary mb-0 waves-effect waves-light">Modifier</a></li>
														</ul>
												</div>
											</div>
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