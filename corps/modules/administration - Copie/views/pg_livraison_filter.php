 <table class="table table-bordered table-lg table-v2 table-striped" id="tabl_filtre">


                                            <thead>
                                                <tr>
                                                                   <th>#</th>
                                                                   
                                                                    <th>N° Commande</th>
                                                                    <th>Designation produit</th>
                                                                    <th>Prix Unitaire</th>
                                                                    <th>Quantité</th>
                                                                    <th>Montant</th>

                                                                    <th>Fournisseur</th>
                                                                    <th>Numero </th>

                                                                    <th>date</th>
                                                                
                                                                    <th> status </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                                          <?php
                                                                                     $compt=0;
                                                                                      if(isset($infos_commande_vendeur)){
                                                                                          
                                                                                          foreach ($infos_commande_vendeur as $mag){ 
                                                                                              
                                                                                             $id_commande=$mag->id_commande; 
                                                                                              $id_fournisseur=$mag->     id_fournisseur; 
                                                                                            $id_produit=$mag->id_produit;
                    $designation_produit=$this->administration_model->get_designation_produit($id_produit);
                    $designation_nomfournisseur=$this->administration_model->get_designation_nomfournisseur($id_fournisseur);

                    $designation_telfournisseur=$this->administration_model->get_designation_telfournisseur($id_fournisseur);
                                                                                             $prix_unitaire=$mag->prix_unitaire;
                                                                                            
                                                                                             $quantite=$mag->quantite;
                                                                                             $montant=$mag->montant;

                                                                                             $date=$mag->date;
                                                                                             $status_fournisseur=$mag->status_fournisseur;
                                                                                            
                                                                                             
                                                                                             
                                                                                             
                                                                                         
                                                                                         
                                                                                                      
                                                                                         $compt=$compt+1;


                                                                                     
                                                                                          
																			?>
                                                          <tr>
                                           							<td class="left"><?php echo $compt; ?></td>
                                                                    <td class="left"><?php echo $id_commande; ?></td>
                                                                    
                                                                    <td class="left"><?php echo $designation_produit; ?></td>
                                                                    <td class="left"><?php echo $prix_unitaire; ?></td>
                                                                    <td class="left"><?php echo $quantite; ?></td>
                                                                    <td class="left"><?php echo $montant; ?></td>

                                                                    <td class="left"><?php echo $designation_nomfournisseur; ?></td>

                                                                    <td class="left"><?php echo $designation_telfournisseur; ?></td>
                                                                     <td class="left"><?php echo $date; ?></td>

                                                                      <td class="text-center">
                                                                        <?php if($status_fournisseur == "1"){ ?>
                                                                        
                                                                              
                                                                             <a href="" style="color: green;">Disponible</a>&nbsp;&nbsp;&nbsp;
                                                                             
                                                        

                                                                        <?php

                                                                        }
                                                                         ?>
                                                                            
                                                                        </td>

                                                                        



                                                                    
                                                                   
                                                                      
					                                                
                                                           </tr>
                                                

                                                <?php }
                                                    }
                                                ?>
                                            </tbody>
                                        </table>