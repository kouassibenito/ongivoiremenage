<div class="page-header mt-0 shadow p-3">
	<ol class="breadcrumb mb-sm-0">
									<li class="breadcrumb-item"><a href="#">Formulaire</a></li>
									
								</ol>
								<div class="btn-group mb-0">
									<button type="button" class="btn btn-primary btn-sm dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Actions</button>
									<div class="dropdown-menu">
										<a class="dropdown-item" href="<?php echo base_url(); ?>administration/notreEquipeListes"><i class="fas fa-eye mr-2"></i>Voir la liste de l'équipe</a>
										
										
										<div class="dropdown-divider"></div>
										<a class="dropdown-item" href="#"><i class="fas fa-cog mr-2"></i> Paramètres</a>
									</div>
								</div>
						</div>


						<?php  

											if(isset($info_equipe_id)){

												foreach ($info_equipe_id as $info) { 

													$cle_images=$info->cle_img;
                                                    
                                                    if($this->administration_model->nom_images($cle_images)){

                                                    	$img=$this->administration_model->nom_images($cle_images);

                                                    }else{

                                                    	$img="sans.jpg";
                                                    }

													?>
							<div class="row">
								
								<div class="col-md-6">
									<div class="card shadow">
										<div class="card-header">
											<h2 class="mb-0">Ajouter/Modifier le slider</h2>
										</div>

										
									

										 	<div class="card-body">
											
											<div  class="row">
				                                    <div class="col-sm">
				                           <form action="<?php echo base_url(); ?>administration/upload_notreEquipe_modifier" method="POST" class="dropzone">
				                           		<input name="cle_img" type="hidden" value="<?php echo $cle_images; ?>">
				                                            <div class="fallback">
				                                                <input name="file" type="file" multiple />
				                                            </div>
				                                        </form>
				                                    </div>
                                               </div>
										</div>

										 
									</div>
								</div>

								<div class="col-md-6" style="padding-left:10px;">
									
                                    <img width="80%" src="<?php echo base_url(); ?>uploads/equipe/<?php echo $img; ?>">
								</div>
                                    
							</div>
							<div class="row">
								<div class="col-md-12">
									<div class="card shadow">
										<div class="card-header">
											<h2 class="mb-0">Formulaire</h2>
										</div>
										<div class="card-body">

                                            <form action="<?php echo base_url(); ?>administration/equipeModifier/<?php echo $id_equipe; ?>" method="POST">

											

											<div class="row">
												<div class="col-md-6">

													<input type="hidden" name="id_equipe" value="<?php if(isset($info->id_equipe)) echo $info->id_equipe; ?>">

													<div class="form-group">
														<input type="text" class="form-control is-invalid state-invalid" name="nom" placeholder="Nom complet" value="<?php if(isset($info->nom)) echo $info->nom; ?>">
													</div>
													<div class="form-group">
														<input type="text" class="form-control is-invalid state-invalid" name="titre" placeholder="Titre" value="<?php if(isset($info->titre)) echo $info->titre; ?>" >
													</div>
													
												</div>
												<div class="col-md-6">
													

													<div class="form-group">
														<input type="text" class="form-control is-invalid state-invalid" name="facebook" placeholder="Lien Facebook" value="<?php if(isset($info->facebook)) echo $info->facebook; ?>" >
													</div>

													<div class="form-group">
														<input type="text" class="form-control is-invalid state-invalid" name="twitter" placeholder="Lien Twitter" value="<?php if(isset($info->twitter)) echo $info->twitter; ?>" >
													</div>

													
												</div>
											
												
											</div>

                                       
                                          <?php }
											}

										 	?>

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