<div class="page-header mt-0 shadow p-3">
	<ol class="breadcrumb mb-sm-0">
									<li class="breadcrumb-item"><a href="#">Forms</a></li>
									<li class="breadcrumb-item active" aria-current="page">File Uploads</li>
								</ol>
								
</div>
							<div class="row">
								
								<div class="col-lg-12">
									<div class="card shadow">
										<div class="card-header">
											<h2 class="mb-0">Ajouter/Modifier le logo</h2>
										</div>
										<div class="card-body">
											<input type="file" class="dropify" data-default-file="<?php echo base_url(); ?>assets/administration/img/photos/1.jpg" data-height="300"  />
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

											<?php echo form_open('login'); ?> 
											<div class="row">
												<div class="col-md-6">
													 
                                                    <div class="form-group">
														<input type="text" class="form-control is-invalid state-invalid" name="input" placeholder="Libellé organisation" value="" >
													</div>

													<div class="form-group">
														<input type="text" class="form-control is-invalid state-invalid" name="input" placeholder="Pays" value="">
													</div>
													<div class="form-group">
														<input type="text" class="form-control is-invalid state-invalid" name="input" placeholder="Ville" value="" >
													</div>
													<div class="form-group">
														<input type="text" class="form-control is-invalid state-invalid" name="input" placeholder="Commune" value="" >
													</div>
													<div class="form-group">
														<input type="text" class="form-control is-invalid state-invalid" name="input" placeholder="Email" value="" >
													</div>

													<div class="form-group">
														<input type="text" class="form-control is-invalid state-invalid" name="input" placeholder="Numéro de téléphone" value="" >
													</div>

													<div class="form-group">
														<input type="text" class="form-control is-invalid state-invalid" name="input" placeholder="Horaire de travail" value="" >
													</div>
												</div>
												<div class="col-md-6">
													

													<div class="form-group">
														<input type="text" class="form-control is-invalid state-invalid" name="input" placeholder="Copyright" value="" >
													</div>

													<div class="form-group">
														<input type="text" class="form-control is-invalid state-invalid" name="input" placeholder="Lien Facebook" value="" >
													</div>

													<div class="form-group">
														<input type="text" class="form-control is-invalid state-invalid" name="input" placeholder="Lien Twitter" value="" >
													</div>

													<div class="form-group">
														<input type="text" class="form-control is-invalid state-invalid" name="input" placeholder="Lien Instagram" value="" >
													</div>

													<div class="form-group">
														<input type="text" class="form-control is-invalid state-invalid" name="input" placeholder="Lien Youtube" value="" >
													</div>

													<div class="form-group">
														<input type="text" class="form-control is-invalid state-invalid" name="input" placeholder="Slogan" value="" >
													</div>
												</div>
												<div class="col-md-12">
													<textarea class="form-control is-invalid state-invalid" id="exampleFormControlTextarea1" rows="3" placeholder="Bref description ..."></textarea>
												</div>

												
												
											</div>
											<div class="row" style="margin-top: 20px;">
                                                <div class="col-md-12">
													<ul class="list-inline wizard mb-0">
															
															<li class="next list-inline-item float-right"><a href="#" class="btn btn-primary mb-0 waves-effect waves-light">Valider</a></li>
														</ul>
												</div>
											</div>
											<?php echo form_close(); ?>
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