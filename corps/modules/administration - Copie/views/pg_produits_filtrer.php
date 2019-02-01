
     <table class="table table-bordered table-lg table-v2 table-striped">


       

   

                                            <thead>
                                                <tr>
                                                <th>#</th>
                                                <th>Libellé produit </th>
                                                <th>Prix produit</th>
                                                <th>prix solde</th>
                                                <th>Status en ligne</th>
                                                <th>Image</th>
                                                <th>Date ajout</th>
                                                                 
                                                <th> Action </th>
                                                </tr>
                                            </thead>
                                            <tbody>

                                            
                                           <?php

                                                                                           
                                                                                     
                                         if(isset($liste_produits)){
                                                                                      
                                        $compt=0;
                                        $nb_produit_aI=0;
                                        $nb_produit_sI=0;
                                        foreach ($liste_produits as $produit){ 
                                                                                              
                                                                                              $id_produits=$produit->id_produits;
                                                                                              $nom_produit=$produit->nom_produit;
                                                                                              $prix_produit=$produit->prix_produit;
                                                                                              $prix_solde=$produit->prix_solde;

                                                                                              $status_mise_en_ligne=$produit->status_mise_en_ligne;


                                                                                              $status_image=$this->administration_model->compterProduitsImg($id_produits);



                                                                                              $date_ajout=$produit->date_ajout;
                                                                                              
                                                                                              $compt=$compt+1;
                                                                                     
                                                                                          
?>


                                                <tr>
                                                    
                                               <td class="left"><?php echo $compt; ?></td>
                                                <td class="left">
                                                	 <?php
                                                    $taille=strlen($nom_produit);
                                                    if($taille > 52){

                                                        echo substr($nom_produit, 0,52)."...";
                                                    }else{

                                                       echo $nom_produit;

                                                    }
                                                    
                                                  ?> 
                                                </td>
                                                                                        
                                               <td class="left"><?php echo $prix_produit; ?></td>
                                               <td class="left"><?php echo $prix_solde; ?></td>

                                               <td class="left">
                                                   <?php if($status_mise_en_ligne == "1"){ ?>
                                                                        
                                                                              
                                                                             <div class="status-pill green" data-title="Complete" data-toggle="tooltip" data-original-title="" title=""></div>
                                                        

                                                                        <?php

                                                                        }else{ ?>


                                                                            
                                                                            <div class="status-pill red" data-title="Cancelled" data-toggle="tooltip" data-original-title="" title=""></div>
                                                        
                                                                        <?php
                                                                        } ?>
                                               </td>

                                                <td class="left">
                                                   <?php if($status_image >0){ 
                                                           
                                                           $nb_produit_aI=$nb_produit_aI+1;

                                                    ?>
                                                                        
                                                                              
                                                                             <div class="status-pill green" data-title="Complete" data-toggle="tooltip" data-original-title="" title=""></div>
                                                        

                                                                        <?php

                                                                        }else{ 

                                                                            $nb_produit_sI=$nb_produit_sI+1;

                                                                            ?>


                                                                            
                                                                            <div class="status-pill red" data-title="Cancelled" data-toggle="tooltip" data-original-title="" title=""></div>
                                                        
                                                                        <?php
                                                                        } ?>
                                               </td>
                                                 <td class="left"><?php echo $date_ajout; ?></td>
                                                  <td class="row-actions">
                                                    <a href="<?php echo base_url(); ?>administration/editerProduits/<?php echo $id_produits; ?>"><i class="os-icon os-icon-ui-49"></i></a>
                                                    <!--<a href="#"><i class="os-icon os-icon-grid-10"></i></a> -->
                                                    <a class="danger" href="<?php echo base_url(); ?>administration/suppressionProduit/<?php echo $id_produits; ?>"><i class="os-icon os-icon-ui-15"></i></a>
                                                  </td>
                                                </tr>
                                                

                                                <?php }
                                                    }
                                                ?>
                                            </tbody>
                                        </table>
                                
                              