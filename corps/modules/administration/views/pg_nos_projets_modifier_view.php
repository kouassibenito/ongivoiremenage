<div class="page-header mt-0 shadow p-3">
	<ol class="breadcrumb mb-sm-0">
									<li class="breadcrumb-item"><a href="#">Formulaire</a></li>
									
								</ol>
								<div class="btn-group mb-0">
									<button type="button" class="btn btn-primary btn-sm dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Actions</button>
									<div class="dropdown-menu">
										<a class="dropdown-item" href="<?php echo base_url(); ?>administration/nosProjetsListes"><i class="fas fa-eye mr-2"></i>Voir la liste des Projets</a>
										
										
										<div class="dropdown-divider"></div>
										<a class="dropdown-item" href="#"><i class="fas fa-cog mr-2"></i> Paramètres</a>
									</div>
								</div>
							</div>

							<?php  

											if(isset($info_projet_id)){

												foreach ($info_projet_id as $info) { 


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
				                           <form action="<?php echo base_url(); ?>administration/upload_projet_modifier" method="POST" class="dropzone">
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
									
                                    <img width="80%" src="<?php echo base_url(); ?>uploads/projet/<?php echo $img; ?>">
								</div>
                                    
							</div>
							<div class="row">
								<div class="col-md-12">
									<div class="card shadow">
										<div class="card-header">
											<h2 class="mb-0">Formulaire</h2>
										</div>
										<div class="card-body">

											<form action="<?php echo base_url(); ?>administration/projetModifier/<?php echo $id_projet; ?>" method="POST">



											<div class="row">
												<div class="col-md-6">

													<input type="hidden" name="id_projet" value="<?php if(isset($id_projet)) echo $id_projet; ?>">

													<div class="form-group">
														<input type="text" class="form-control is-invalid state-invalid" name="nom_projet" placeholder="Nom projet" value="<?php if(isset($info->nom_projet)) echo $info->nom_projet; ?>">
													</div>
													
												</div>

												<div class="col-md-6">
													<div class="form-group">
														<input type="text" class="form-control is-invalid state-invalid" name="description_court" placeholder="Description courte" value="<?php if(isset($info->description_court)) echo $info->description_court; ?>">
													</div>
													
												</div>
												
												<div class="col-md-12">
													<textarea class="form-control is-invalid state-invalid" name="description_complete" id="exampleFormControlTextarea1" rows="3" placeholder="Description complète ..."><?php if(isset($info->description_complete)) echo $info->description_complete; ?></textarea>
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