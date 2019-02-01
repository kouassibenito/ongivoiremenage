
                                    <table class="table table-bordered table-lg table-v2 table-striped">


                                            <thead>
                                                <tr>
                                                                   <th>#</th>
                                                                   
                                                                    <th>N° Commande</th>
                                                                    <th>Client</th>
                                                                    <th>Montant</th>
                                                                    <th>date</th>
                                                                    <th>status</th>
                                                                    
                                                                   
                                                                 
                                                                    <th> Action </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                                          <?php
                                                                                     $compt=0;
                                                                                      if(isset($infos_commande)){
                                                                                          
                                                                                          foreach ($infos_commande as $mag){ 
                                                                                              
                                                                                             $id_commande=$mag->id_commande;  
                                                                                             $id_client=$mag->id_client;
                                                                                             $infos_client=$this->administration_model->get_informations_client($id_client);
                                                                                             $montant_commande=$mag->montant_commande;
                                                                                             $date_heure=$mag->date_heure;
                                                                                             $status_commande=$mag->status_commande;
                                                                                            
                                                                                             
                                                                                             
                                                                                             
                                                                                         
                                                                                         
                                                                                                      
                                                                                         $compt=$compt+1;


                                                                                     
                                                                                          
																			?>
                                                          <tr>
                                           							<td class="left"><?php echo $compt; ?></td>
                                                                    <td class="left"><?php echo $id_commande; ?></td>
                                                                    
                                                                    <td class="left"><?php echo $infos_client; ?></td>
                                                                    <td class="left"><?php echo $montant_commande; ?></td>
                                                                    <td class="left"><?php echo $date_heure; ?></td>

                                                                      <td class="text-center">
                                                                        <?php
                                                                         if($status_commande == "1"){ ?>
                                                                        
                                                                              
                                                                             <span style="color: orange">En attente de livraison fournisseur</span>
                                                        

                                                                        <?php

                                                                        } 

                                                                        ?>

                                                                         <?php
                                                                         if($status_commande == "10"){ ?>
                                                                        
                                                                              
                                                                             <span style="color: red">Commande annulé par le client</span>
                                                        

                                                                        <?php

                                                                        } 

                                                                        ?>

                                                                          <?php
                                                                         if($status_commande == "0"){ ?>
                                                                        
                                                                              
                                                                             <span style="color: red">En attente de confirmation client</span>
                                                        

                                                                        <?php

                                                                        } 

                                                                        ?>

                                                                         <?php
                                                                         if($status_commande == "2"){ ?>
                                                                        
                                                                              
                                                                             <span style="color: blue">En attente de recuperation partenaire</span>
                                                        

                                                                        <?php

                                                                        } 

                                                                        ?>

                                                                         <?php
                                                                         if($status_commande == "3"){ ?>
                                                                        
                                                                              
                                                                             <span style="color: #8A4B08">En attente de livraison client</span>
                                                        

                                                                        <?php

                                                                        } 

                                                                        ?>

                                                                         <?php
                                                                         if($status_commande == "4"){ ?>
                                                                        
                                                                              
                                                                             <span style="color: green">Livré au client</span>
                                                        

                                                                        <?php

                                                                        } 

                                                                        ?>


                                                                            
                                                                           
                                                                            
                                                                        </td>

                                                                      



                                                                    
                                                                   
                                                                      
					                                                  <td class="row-actions">
					                                                    <a href="<?php echo base_url(); ?>administration/editer_commande/<?php echo $id_commande; ?>"><i class="os-icon os-icon-ui-49"></i></a>
					                                                    <!--<a href="#"><i class="os-icon os-icon-grid-10"></i></a> -->
					                                                   
					                                                  </td>
                                                           </tr>
                                                

                                                <?php }
                                                    }
                                                ?>
                                            </tbody>
                                        </table>