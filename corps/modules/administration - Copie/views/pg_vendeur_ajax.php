 <br></br>
                                   
                                      
                                   
                                    <br></br>
                                    <table class="table table-bordered table-lg table-v2 table-striped">


                                            <thead>
                                                <tr>
                                                  <th>#</th>
                                                                    <th>Entreprise</th>
                                                                    <th>Nom et prenom(s)</th>
                                                                    <th>email vendeur</th>
                                                                    <th>Mot de passe</th>
                                                                    <th>tel vendeur</th>
                                                                    <th>localisation</th>
                                                                 
                                                                    <th> Action </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                                                                                            <?php
                                                                                     $compt=0;
                                                                                      if(isset($infos_Fournisseur)){
                                                                                          
                                                                                          foreach ($infos_Fournisseur as $fournisseur){ 
                                                                                              
                                                                                 $id_fournisseur=$fournisseur->id_fournisseur;
                                                                                              
                                                                                 $nom_fournisseur=$fournisseur->nom_fournisseur." ".$fournisseur->prenom_fournisseur;
                                                                                 $email_fournisseur=$fournisseur->email_fournisseur;
                                                                                  $pass_fournisseur=$fournisseur->pass_fournisseur;
                                                                                 $tel_fournisseur=$fournisseur->tel_fournisseur;
                                                                                 $entreprise_fournisseur=$fournisseur->entreprise_fournisseur;
                                                                                 $localisation=$fournisseur->localisation;
                                                                                              
                                                                                 $compt=$compt+1;
                                                                                     
                                                                                          
?>
                                                <tr>
                                           <td class="left"><?php echo $compt; ?></td>
                                                                    <td class="left"><?php echo $entreprise_fournisseur; ?></td>
                                                                    <td class="left"><?php echo $nom_fournisseur; ?></td>
                                                                    <td class="left"><?php echo $email_fournisseur; ?></td>
                                                                    <td class="left"><?php echo $pass_fournisseur; ?></td>
                                                                    <td class="left"><?php echo $tel_fournisseur; ?></td>
                                                                     <td class="left"><?php echo $localisation; ?></td>
                                                  <td class="row-actions">
                                                    <a href="editerVendeurs/<?php echo $id_fournisseur; ?>"><i class="os-icon os-icon-ui-49"></i></a>
                                                    <!--<a href="#"><i class="os-icon os-icon-grid-10"></i></a> -->
                                                    <a class="danger" href="supprimVendeur/<?php echo $id_fournisseur; ?>"><i class="os-icon os-icon-ui-15"></i></a>
                                                  </td>
                                                </tr>
                                                

                                                <?php }
                                                    }
                                                ?>
                                            </tbody>
                                        </table>
                                
                                </div>
                            </div>