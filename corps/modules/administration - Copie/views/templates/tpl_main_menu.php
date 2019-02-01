  <?php

      $id_profile=$this->session->userdata('id_profile');

      $status_ecommerce=$this->administration_model->statut_ecommerce();

      echo $status_ecommerce;
  ?>      


            <div class="menu-w color-scheme-light color-style-transparent menu-position-side menu-side-left menu-layout-compact sub-menu-style-over sub-menu-color-bright selected-menu-color-light menu-activated-on-hover menu-has-selected-link">
                <div class="logo-w">
                    <a class="logo" href="index-2.html">
                        <div class="logo-element"></div>
                        <div class="logo-label">Chameleon</div>
                    </a>
                </div>
                <div class="logged-user-w avatar-inline">
                    <div class="logged-user-i">
                        <div class="avatar-w"><img alt="" src="img/avatar1.jpg"></div>
                        <div class="logged-user-info-w">
                            <div class="logged-user-name"><?php echo $this->session->userdata('nom_prenom'); ?></div>
                            <div class="logged-user-role">
                                <?php 
                                        
                                        $Profile=$this->administration_model->get_profile_utilisateur($id_profile);
                                        echo $Profile;
                                 ?>
                                 
                             </div>
                        </div>
                        <div class="logged-user-toggler-arrow">
                            <div class="os-icon os-icon-chevron-down"></div>
                        </div>
                        <div class="logged-user-menu color-style-bright">
                            <div class="logged-user-avatar-info">
                                <div class="avatar-w"><img alt="" src="img/avatar1.jpg"></div>
                                <div class="logged-user-info-w">
                                    <div class="logged-user-name"><?php echo $this->session->userdata('nom_prenom'); ?></div>
                                    <div class="logged-user-role">
                                         <?php 
                                       
                                        $Profile=$this->administration_model->get_profile_utilisateur($id_profile);
                                        echo $Profile;
                                         ?>
                                    </div>
                                </div>
                            </div>
                            <div class="bg-icon"><i class="os-icon os-icon-wallet-loaded"></i></div>
                            <ul>
                                <!-- <li><a href="apps_email.html"><i class="os-icon os-icon-mail-01"></i><span>Incoming Mail</span></a></li>
                                <li><a href="users_profile_big.html"><i class="os-icon os-icon-user-male-circle2"></i><span>Profile Details</span></a></li>
                                <li><a href="users_profile_small.html"><i class="os-icon os-icon-coins-4"></i><span>Billing Details</span></a></li>
                                <li><a href="#"><i class="os-icon os-icon-others-43"></i><span>Notifications</span></a></li> -->
                                <li><a href="<?php echo base_url(); ?>administration/logout"><i class="os-icon os-icon-signs-11"></i><span>Se deconnecter</span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="menu-actions">
                    <!--------------------
START - Messages Link in secondary top menu
-------------------->
                
                    <!--------------------
END - Messages Link in secondary top menu
-------------------->
                    <!--------------------
START - Settings Link in secondary top menu
-------------------->
                  
                    <!--------------------
END - Settings Link in secondary top menu
-------------------->
                    <!--------------------
START - Messages Link in secondary top menu
-------------------->
                   
                    <!--------------------
END - Messages Link in secondary top menu
-------------------->
                </div>
               
                <h1 class="menu-page-header">Page Header</h1>
                <ul class="main-menu">
                    <li class="sub-header"><span>Général</span></li>
                    <li class="selected has-sub-menu">
                        <a href="<?php echo base_url(); ?>administration">
                            <div class="icon-w">
                                <div class="os-icon os-icon-layout"></div>
                            </div><span>Tableau de bords</span></a>
                        
                    </li>


                    <?php 
                           if($id_profile =="2" || $id_profile =="5" || $id_profile =="6"){

                          

                     ?>

                     <li class=" has-sub-menu">
                        <a href="#">
                            <div class="icon-w">
                                <div class="os-icon os-icon-layers"></div>
                            </div><span>Configuration de base</span></a>
                        <div class="sub-menu-w">
                            <div class="sub-menu-header">Configuration de base de l'entreprise</div>
                            <div class="sub-menu-icon"><i class="os-icon os-icon-layers"></i></div>
                            <div class="sub-menu-i">
                                <ul class="sub-menu">
                                   
                                    <li><a href="<?php echo base_url();?>administration/infosMagasins">Listes des boutiques / magasins</a></li>
                                     <li><a href="<?php echo base_url();?>administration/ajoutMagasin">Ajouter une boutique / Magasin</a></li>
                                   




                                </ul>
                                 <ul class="sub-menu">
                                   
                                    <li><a href="<?php echo base_url();?>administration/infosMagasins_type">Listes types boutiques / magasins</a></li>
                                    
                                   



                                </ul>


                               
                            </div>
                        </div>
                    </li>

                    <li class=" has-sub-menu">
                        <a href="#">
                            <div class="icon-w">
                                <div class="os-icon os-icon-layers"></div>
                            </div><span>Gestion des caisses</span></a>
                        <div class="sub-menu-w">
                            <div class="sub-menu-header">Gestion des caisses</div>
                            <div class="sub-menu-icon"><i class="os-icon os-icon-layers"></i></div>
                            <div class="sub-menu-i">

                                <ul class="sub-menu">
                                   
                                    <li><a href="<?php echo base_url();?>administration/caisse">Ouvrir la caisse</a></li>
                                    
                                   



                                </ul>
                                <!-- <ul class="sub-menu">
                                   
                                    <li><a href="<?php echo base_url();?>administration/infosMagasins">Ajouter une caisse</a></li>
                                     <li><a href="<?php echo base_url();?>administration/ajoutMagasin">Liste des caisses</a></li>
                                   



                                </ul>

                                <ul class="sub-menu">
                                   
                                    <li><a href="<?php echo base_url();?>administration/infosMagasins">Ajouter un(e) caissier(e)</a></li>
                                     <li><a href="<?php echo base_url();?>administration/ajoutMagasin">Liste des caissier(e)s</a></li>

                                </ul>
                                <ul class="sub-menu">
                                   
                                    <li><a href="<?php echo base_url();?>administration/infosMagasins">Versements</a></li>
                                    

                                </ul> -->
                               
                            </div>
                        </div>
                    </li>


                    <?php 
                    if($status_ecommerce >0){ ?>

                    <li class=" has-sub-menu">
                        <a href="#">
                            <div class="icon-w">
                                <div class="os-icon os-icon-layers"></div>
                            </div><span>Interface e-boutique</span></a>
                        <div class="sub-menu-w">
                            <div class="sub-menu-header">Interface de la boutique</div>
                            <div class="sub-menu-icon"><i class="os-icon os-icon-layers"></i></div>
                            <div class="sub-menu-i">
                                <ul class="sub-menu">
                                    <li><a href="<?php echo base_url();?>administration/infosBase">Informations de base</a></li>
                                    <li><a href="<?php echo base_url();?>administration/listeFlashInfos">Gestion des flash infos</a></li>
                                    <li><a href="<?php echo base_url();?>administration/listeMenusPrincipaux">Gestion menus principaux</a></li>
                                    <li><a href="<?php echo base_url();?>administration/listeMenusCategories">Gestion menus categories</a></li>
                                    <li><a href="<?php echo base_url();?>administration/listeRubriques">Gestion rubriques menus</a></li>

                                    <li><a href="<?php echo base_url();?>administration/listeRubriquesCategorie">Gestion rubriques categories</a></li>
                                    
                                    
                                   
                                    
                                </ul>
                                <ul class="sub-menu">

                                    <li><a href="<?php echo base_url();?>administration/listeSliders">Gestion des sliders</a></li>
                                    <li><a href="<?php echo base_url();?>administration/block_14">Gestion publicité 4 blocks</a></li>
                                    <li><a href="<?php echo base_url();?>administration/block_1">Gestion publicité 1 block central 1er et 2 e</a></li>

                                    <li><a href="<?php echo base_url();?>administration/zone_produit1">Zone produit 1</a></li>
                                    <li><a href="<?php echo base_url();?>administration/zone_produit2">Zone produit 2</a></li>
                                    <li><a href="<?php echo base_url();?>administration/zone_produit3">Zone produit 3</a></li>

                                    <li><a href="<?php echo base_url();?>administration/zone_produit4">Zone produit 4</a></li>
                                    <li><a href="<?php echo base_url();?>administration/zone_produit5">Zone produit 5</a></li>
                                   
                                    
                                   
                                </ul>
                                <ul class="sub-menu">

                                    <li><a href="<?php echo base_url();?>administration/listePartenaires">Gestions des partenaires</a></li>
                                    
                                    <li><a href="<?php echo base_url();?>administration/listeTemoignages">Temoignages</a></li>
                                   <!--  <li><a href="#">Actualités</a></li> -->
                                   
                                </ul>
                            </div>
                        </div>
                    </li>


                     <?php }

                     ?>
                    
                     <?php 
                           
                            
                           }



                     ?>



                    <li class="sub-header"><span>VENTES</span></li>
                    <?php 
                           if($id_profile =="1" || $id_profile =="2" || $id_profile =="3" || $id_profile =="4" || $id_profile =="5" || $id_profile =="6"){

                          

                     ?>


                    <?php 
                    if($status_ecommerce >0){ ?>
                    <li class=" has-sub-menu">
                        <a href="#">
                            <div class="icon-w">
                                <div class="os-icon os-icon-package"></div>
                            </div><span>Gestions des produits</span></a>
                        <div class="sub-menu-w">
                            <div class="sub-menu-header">Gestions des produits</div>
                            <div class="sub-menu-icon"><i class="os-icon os-icon-package"></i></div>
                            <div class="sub-menu-i">
                                <ul class="sub-menu">
                                     <li><a href="<?php echo base_url();?>administration/listeCategoriesProduits">Gestion categories produits</a></li>
                                      <li><a href="<?php echo base_url();?>administration/listeMarques">Gestion des marques</a></li>
                                      
                                    <li><a href="<?php echo base_url();?>administration/listeProduits_pagination">Gestion des produits</a></li>
                                   
                                  
                                </ul>
                                
                            </div>
                        </div>
                    </li>
                     <?php } 
                     ?>
 

                     <?php 
                           
                            
                           }

                     ?>

                      <?php 
                           if($id_profile =="1" || $id_profile =="2" || $id_profile =="3" || $id_profile =="4" || $id_profile =="5"){

                          

                     ?>
                    <li class=" has-sub-menu">
                        <a href="#">
                            <div class="icon-w">
                                <div class="os-icon os-icon-file-text"></div>
                            </div><span>Commandes</span></a>
                        <div class="sub-menu-w">
                            <div class="sub-menu-header">Gestion des commandes</div>
                            <div class="sub-menu-icon"><i class="os-icon os-icon-file-text"></i></div>
                            <div class="sub-menu-i">
                                <ul class="sub-menu">
                                    <li><a href="<?php echo base_url();?>administration/listeProduits_commande">Listes de toutes les commandes</a></li>

                                    <?php 
                                        if($status_ecommerce >0){ ?>
                                   <!--  <li><a href="rentals_index_grid.html">Listes des commandes en attente de validation. </a></li>
                                    <li><a href="misc_charts.html">Listes des commandes terminées</a></li>
                                    <li><a href="auth_login.html">Listes des commandes annulées</a></li> -->
                                     <?php } 
                                      ?>
                                </ul>
                               
                            </div>
                        </div>
                    </li>
                     <?php 
                           
                            
                           }

                     ?>

                     <?php 
                           if($id_profile =="1" || $id_profile =="2" || $id_profile =="3" || $id_profile =="4" || $id_profile =="5"){

                          

                     ?>
                    

                    
                     <?php 
                           
                            
                           }

                     ?>

                      <?php 
                           if($id_profile =="1" || $id_profile =="2" || $id_profile =="3" || $id_profile =="4" || $id_profile =="5"){

                          

                     ?>


                     <?php 
                        if($status_ecommerce >0){ ?>

                    <li class="sub-header"><span>Gestion des livraisons</span></li>
                    <li class=" has-sub-menu">
                        <a href="#">
                            <div class="icon-w">
                                <div class="os-icon os-icon-mail"></div>
                            </div><span>Gestions des livraisons</span></a>
                        <div class="sub-menu-w">
                            <div class="sub-menu-header">Gestions des livraisons</div>
                            <div class="sub-menu-icon"><i class="os-icon os-icon-mail"></i></div>
                            <div class="sub-menu-i">
                                <ul class="sub-menu">
                                    <li><a href="<?php echo base_url();?>administration/listeProduits_livraison">Liste de toutes les livraisons</a></li>
                                    
                                 
                                </ul>
                            </div>
                        </div>
                    </li>
                     <?php } 
                     ?>
                     
                     <?php 
                           
                            
                           }

                     ?>

                     <li class="sub-header"><span>Gestion des tickets</span></li>
                    <li class=" has-sub-menu">
                        <a href="#">
                            <div class="icon-w">
                                <div class="os-icon os-icon-mail"></div>
                            </div><span>Gestions des tickets</span></a>
                        <div class="sub-menu-w">
                            <div class="sub-menu-header">Gestions des tickets</div>
                            <div class="sub-menu-icon"><i class="os-icon os-icon-mail"></i></div>
                            <div class="sub-menu-i">
                                <ul class="sub-menu">
                                    <li><a href="#">Liste de toutes les tickets</a></li>
                                    <li><a href="#">Liste des tickets en ouvert</a></li>
                                    <li><a href="#">Liste des tickets fermés</a></li>
                                     <li><a href="#">Liste des tickets abandonnés</a></li>
                                 
                                </ul>
                            </div>
                        </div>
                    </li>

                      <?php 
                           if($id_profile =="1" || $id_profile =="2" || $id_profile =="3" || $id_profile =="4" || $id_profile =="5"){

                          

                     ?>

                     <?php 
                        if($status_ecommerce >0){ ?>
                     <li class="sub-header"><span>Gestion des vendeurs</span></li>
                    <li class=" has-sub-menu">
                        <a href="#">
                            <div class="icon-w">
                                <div class="os-icon os-icon-mail"></div>
                            </div><span>Gestion des vendeurs</span></a>
                        <div class="sub-menu-w">
                            <div class="sub-menu-header">Gestion des vendeurs</div>
                            <div class="sub-menu-icon"><i class="os-icon os-icon-mail"></i></div>
                            <div class="sub-menu-i">
                                <ul class="sub-menu">
                                    <li><a href="<?php echo base_url();?>administration/ajoutVendeurs">Ajouter un nouveau vendeur</a></li>
                                   <!--  <li><a href="#">Liste des vendeurs ayant soumis des produits</a></li> -->
                                    <li><a href="<?php echo base_url();?>administration/listeVendeurs">Liste de tous les vendeurs</a></li>
                                    <!--  <li><a href="#">Paiements</a></li> -->
                                 
                                </ul>
                            </div>
                        </div>
                    </li>
                     <?php } 
                     ?>
                     <?php 
                           
                            
                           }

                     ?>

                     <?php 
                           if($id_profile =="5"){

                          

                     ?>
                       <li class="sub-header"><span>Communications</span></li>
                       <li class=" has-sub-menu">
                        <a href="#">
                            <div class="icon-w">
                                <div class="os-icon os-icon-layers"></div>
                            </div><span>Gestion des SMS</span></a>
                        <div class="sub-menu-w">
                            <div class="sub-menu-header">Gestion des sms</div>
                            <div class="sub-menu-icon"><i class="os-icon os-icon-layers"></i></div>
                            <div class="sub-menu-i">
                                <ul class="sub-menu">
                                    <li><a href="<?php echo base_url();?>administration/envoi_sms">Envoi un sms simple</a></li>
                                    <!-- <li><a href="<?php echo base_url();?>administration/listeFlashInfos">Envoi un sms groupe</a></li> -->
                                   
                                   
                                    
                                    
                                   
                                    
                                </ul>
                               <!--  <ul class="sub-menu">

                                    <li><a href="<?php echo base_url();?>administration/listeSliders">Creer un groupe</a></li>
                                    <li><a href="<?php echo base_url();?>administration/block_14">Liste des groupes</a></li>
                          
                                   
                                </ul> -->
                               
                            </div>
                        </div>
                    </li>

                    <li class="sub-header"><span>Facturations</span></li>
                       <li class=" has-sub-menu">
                        <a href="#">
                            <div class="icon-w">
                                <div class="os-icon os-icon-layers"></div>
                            </div><span>Facturations</span></a>
                        <div class="sub-menu-w">
                            <div class="sub-menu-header">Fournisseurs</div>
                            <div class="sub-menu-icon"><i class="os-icon os-icon-layers"></i></div>
                            <div class="sub-menu-i">
                                <ul class="sub-menu">
                                    <li><a href="<?php echo base_url();?>administration/listeFournisseurs">A payer aux fournisseurs</a></li>
                                    <!-- <li><a href="<?php echo base_url();?>administration/listeFlashInfos">Envoi un sms groupe</a></li> -->
                                   
                                   
                                    
                                    
                                   
                                    
                                </ul>
                               <!--  <ul class="sub-menu">

                                    <li><a href="<?php echo base_url();?>administration/listeSliders">Creer un groupe</a></li>
                                    <li><a href="<?php echo base_url();?>administration/block_14">Liste des groupes</a></li>
                          
                                   
                                </ul> -->
                               
                            </div>
                        </div>
                    </li>


                     <li class="sub-header"><span>Paramètres</span></li>
                    <li class=" has-sub-menu">
                        <a href="#">
                            <div class="icon-w">
                                <div class="os-icon os-icon-mail"></div>
                            </div><span>Gestion des utilisateurs</span></a>
                        <div class="sub-menu-w">
                            <div class="sub-menu-header">Gestion des utilisateurs</div>
                            <div class="sub-menu-icon"><i class="os-icon os-icon-mail"></i></div>
                            <div class="sub-menu-i">
                                <ul class="sub-menu">
                                    <li><a href="<?php echo base_url();?>administration/ajoutUtilisateur">Ajouter un nouveau utilisateur</a></li>
                                    <li><a href="<?php echo base_url();?>administration/infosUtilisateurs">Liste des utilisateurs</a></li>
                                   
                                    

                                 
                                </ul>
                            </div>
                        </div>
                    </li>
                     <?php 
                           
                            
                           }

                     ?>
                  
                   
                    
                </ul>
                
            </div>