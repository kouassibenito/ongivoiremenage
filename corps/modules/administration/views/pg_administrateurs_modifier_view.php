<div class="page-header mt-0 shadow p-3">
	<ol class="breadcrumb mb-sm-0">
									<li class="breadcrumb-item"><a href="#">Forms</a></li>
									<li class="breadcrumb-item active" aria-current="page">File Uploads</li>
								</ol>
								<div class="btn-group mb-0">
									<button type="button" class="btn btn-primary btn-sm dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Actions</button>
									<div class="dropdown-menu">
										<a class="dropdown-item" href="<?php echo base_url(); ?>administration/adminListes"><i class="fas fa-eye mr-2"></i>Voir la liste des administrateurs</a>
										
										
										<div class="dropdown-divider"></div>
										<a class="dropdown-item" href="#"><i class="fas fa-cog mr-2"></i> Paramètres</a>
									</div>
								</div>
                             </div>

                             <?php  

											if(isset($info_admin_id)){

												foreach ($info_admin_id as $info) { 


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
				                           <form action="<?php echo base_url(); ?>administration/upload_admin_modifier" method="POST" class="dropzone">
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
									
                                    <img width="80%" src="<?php echo base_url(); ?>uploads/img_admin/<?php echo $img; ?>">
								</div>
                                    
							</div>

							<div class="row">
								<div class="col-md-12">
									<div class="card shadow">
										<div class="card-header">
											<h2 class="mb-0">Formulaire</h2>
										</div>
										<div class="card-body">


											<form action="<?php echo base_url(); ?>administration/modifierAdmin/<?php echo $id_administrateur; ?>" method="POST">

											


											<div class="row">
												<div class="col-md-6">

													<input type="hidden" name="id_administrateur" value="<?php if(isset($id_administrateur)) echo $id_administrateur; ?>">

													<div class="form-group">
														<input type="text" class="form-control is-invalid state-invalid" name="nom_administrateur" placeholder="Nom" value="<?php if(isset($info->nom_administrateur)) echo $info->nom_administrateur; ?>">
													</div>
													<div class="form-group">
														<input type="text" class="form-control is-invalid state-invalid" name="prenom_administrateur" placeholder="Prénoms" value="<?php if(isset($info->prenom_administrateur)) echo $info->prenom_administrateur; ?>" >
													</div>
													<div class="form-group">
														<input type="text" class="form-control is-invalid state-invalid" name="email_administrateur" placeholder="E-mail" value="<?php if(isset($info->email_administrateur)) echo $info->email_administrateur; ?>" >
													</div>
													
												</div>

                                                <div class="col-md-6">
												  <div class="form-group">
														<input type="text" class="form-control is-invalid state-invalid" name="telephone_administrateur" placeholder="Téléphone" value="<?php if(isset($info->telephone_administrateur)) echo $info->telephone_administrateur; ?>" >
													</div>


													<div class="form-group">
														<input type="text" class="form-control is-invalid state-invalid" name="fonction_administrateur" placeholder="Fonction" value="<?php if(isset($info->fonction_administrateur)) echo $info->fonction_administrateur; ?>" >
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