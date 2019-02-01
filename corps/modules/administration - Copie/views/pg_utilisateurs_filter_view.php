  <table class="table table-bordered table-lg table-v2 table-striped">


                                            <thead>
                                                <tr>
                                                  <th>#</th>
                                                                   
                                                                    <th>Nom et prenom(s)</th>
                                                                    <th>email </th>
                                                                    <th>Tel </th>
                                                                    <th>Fonction</th>
                                                                   
                                                                    <th>status</th>
                                                                 
                                                                    <th> Action </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                                                                                            <?php
                                                                                     $compt=0;
                                                                                      if(isset($infos_Utilisateurs)){
                                                                                          
                                                                                          foreach ($infos_Utilisateurs as $utilisateur){ 
                                                                                              
                                                                                 $id_administrateur=$utilisateur->id_administrateur;
                                                                                              
                                                                                 $nom_administrateur=$utilisateur->nom_administrateur." ".$utilisateur->prenom_administrateur;
                                                                                 $email_utilisateur=$utilisateur->email_administrateur;
                                                                                 $telephone_administrateur=$utilisateur->telephone_administrateur;
                                                                                 $fonction_administrateur=$utilisateur->fonction_administrateur;
                                                                                 $id_profile=$utilisateur->id_profile;
                                                                                 $profile=$this->administration_model->get_profile_utilisateur($id_profile);
                                                                                 $status=$utilisateur->status;
                                                                                              
                                                                                 $compt=$compt+1;


                                                                                     
                                                                                          
																			?>
                                                <tr>
                                           							<td class="left"><?php echo $compt; ?></td>
                                                                    <td class="left"><?php echo $nom_administrateur; ?></td>
                                                                    <td class="left"><?php echo $email_utilisateur; ?></td>
                                                                    <td class="left"><?php echo $telephone_administrateur; ?></td>
                                                                    
                                                                    <td class="left"><?php echo $profile; ?></td>
                                                                    <td class="text-center">
                                                                    	<?php if($status == "1"){ ?>
                                                                        
                                                                              
                                                           					 <div class="status-pill green" data-title="Complete" data-toggle="tooltip" data-original-title="" title=""></div>
                                                        

                                                                        <?php

                                                                    	}else{ ?>


                                                                            
                                                            				<div class="status-pill red" data-title="Cancelled" data-toggle="tooltip" data-original-title="" title=""></div>
                                                        
                                                                        <?php
                                                                    	} ?>
                                                                    		
                                                                    	</td>
					                                                  <td class="row-actions">
					                                                    <a href="#"><i class="os-icon os-icon-ui-49"></i></a>
					                                                    <!--<a href="#"><i class="os-icon os-icon-grid-10"></i></a> -->
					                                                    <a class="danger" href="#"><i class="os-icon os-icon-ui-15"></i></a>
					                                                  </td>
                                                </tr>
                                                

                                                <?php }
                                                    }
                                                ?>
                                            </tbody>
                                        </table>