

<!DOCTYPE html>
<html>
<!-- Mirrored from light.pinsupreme.com/forms_regular.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 10 Mar 2018 13:28:40 GMT -->

<head>
    <?php include("templates/tpl_head_form.php"); ?>
</head>

<body class="menu-position-side menu-side-left full-screen">
    <div class="all-wrapper solid-bg-all">
        <div class="search-with-suggestions-w">
            
        </div>
        <div class="layout-w">
            <!--------------------
START - Mobile Menu
-------------------->
            <?php include("templates/tpl_mobile_resp.php"); ?>
            <!--------------------
END - Mobile Menu
-------------------->
            <!--------------------
START - Main Menu
-------------------->
            <?php include("templates/tpl_main_menu.php"); ?>
            <!--------------------
END - Main Menu
-------------------->
            <div class="content-w">
                <!--------------------
START - Top Bar
-------------------->
                <div class="top-bar color-scheme-transparent">
                    <!--------------------
START - Top Menu Controls
-------------------->
                    <div class="top-menu-controls">
                        <div class="element-search autosuggest-search-activator">
                            <input placeholder="Start typing to search..." type="text">
                        </div>
                        <!--------------------
START - Messages Link in secondary top menu
-------------------->
                        <div class="messages-notifications os-dropdown-trigger os-dropdown-position-left"><i class="os-icon os-icon-mail-14"></i>
                            <div class="new-messages-count">12</div>
                            <div class="os-dropdown light message-list">
                                <ul>
                                    <li>
                                        <a href="#">
                                            <div class="user-avatar-w"><img alt="" src="img/avatar1.jpg"></div>
                                            <div class="message-content">
                                                <h6 class="message-from">John Mayers</h6>
                                                <h6 class="message-title">Account Update</h6></div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <div class="user-avatar-w"><img alt="" src="img/avatar2.jpg"></div>
                                            <div class="message-content">
                                                <h6 class="message-from">Phil Jones</h6>
                                                <h6 class="message-title">Secutiry Updates</h6></div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <div class="user-avatar-w"><img alt="" src="img/avatar3.jpg"></div>
                                            <div class="message-content">
                                                <h6 class="message-from">Bekky Simpson</h6>
                                                <h6 class="message-title">Vacation Rentals</h6></div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <div class="user-avatar-w"><img alt="" src="img/avatar4.jpg"></div>
                                            <div class="message-content">
                                                <h6 class="message-from">Alice Priskon</h6>
                                                <h6 class="message-title">Payment Confirmation</h6></div>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!--------------------
END - Messages Link in secondary top menu
-------------------->
                        <!--------------------
START - Settings Link in secondary top menu
-------------------->
                        <div class="top-icon top-settings os-dropdown-trigger os-dropdown-position-left"><i class="os-icon os-icon-ui-46"></i>
                            <div class="os-dropdown">
                                <div class="icon-w"><i class="os-icon os-icon-ui-46"></i></div>
                                <ul>
                                    <li><a href="users_profile_small.html"><i class="os-icon os-icon-ui-49"></i><span>Profile Settings</span></a></li>
                                    <li><a href="users_profile_small.html"><i class="os-icon os-icon-grid-10"></i><span>Billing Info</span></a></li>
                                    <li><a href="users_profile_small.html"><i class="os-icon os-icon-ui-44"></i><span>My Invoices</span></a></li>
                                    <li><a href="users_profile_small.html"><i class="os-icon os-icon-ui-15"></i><span>Cancel Account</span></a></li>
                                </ul>
                            </div>
                        </div>
                        <!--------------------
END - Settings Link in secondary top menu
-------------------->
                        <!--------------------
START - User avatar and menu in secondary top menu
-------------------->
                        <div class="logged-user-w">
                            <div class="logged-user-i">
                                <div class="avatar-w"><img alt="" src="img/avatar1.jpg"></div>
                                <div class="logged-user-menu color-style-bright">
                                    <div class="logged-user-avatar-info">
                                        <div class="avatar-w"><img alt="" src="img/avatar1.jpg"></div>
                                        <div class="logged-user-info-w">
                                            <div class="logged-user-name">Maria Gomez</div>
                                            <div class="logged-user-role">Administrator</div>
                                        </div>
                                    </div>
                                    <div class="bg-icon"><i class="os-icon os-icon-wallet-loaded"></i></div>
                                    <ul>
                                        <li><a href="apps_email.html"><i class="os-icon os-icon-mail-01"></i><span>Incoming Mail</span></a></li>
                                        <li><a href="users_profile_big.html"><i class="os-icon os-icon-user-male-circle2"></i><span>Profile Details</span></a></li>
                                        <li><a href="users_profile_small.html"><i class="os-icon os-icon-coins-4"></i><span>Billing Details</span></a></li>
                                        <li><a href="#"><i class="os-icon os-icon-others-43"></i><span>Notifications</span></a></li>
                                        <li><a href="#"><i class="os-icon os-icon-signs-11"></i><span>Logout</span></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!--------------------
END - User avatar and menu in secondary top menu
-------------------->
                    </div>
                    <!--------------------
END - Top Menu Controls
-------------------->
                </div>
                <!--------------------
END - Top Bar
-------------------->
               
                <div class="content-i">


                    <div class="content-box">

                         <div class="alert alert-success" id="succes_box" role="alert"><strong>Succès! </strong> Produit ajouté avec succès.
                         </div>

                   <div id="zone_id">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="element-wrapper">
                                    <h6 class="element-header">editer un produit</h6>
                                    <div class="element-box">

                                         <div class="element-wrapper">
                                             <div class="element-box-content">
                                                <button class="mr-2 mb-2 btn btn-outline-primary" id="supp_image">Supprimer les images précédente</button>
                                               
                                            </div>
                           
                                                    <div class="element-box">
                                                       
                                                        <form action="<?php echo base_url('administration/uploadImgProduit');?>" class="dropzone" id="my-awesome-dropzone" method="POST">
                                                            <input class="form-control" id="id_produits" name="id_produits"  type="hidden" value="<?php if(isset($id_produits)) echo $id_produits; ?>">
                                                            <div class="dz-message">
                                                                <div>
                                                                    <h4>Glisser et deposer le image pour le replacer.</h4>
                                                                    <div class="text-muted"></div>
                                                                </div>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>

                                        <form>
                                            <h5 class="form-header">Ajouter un produit</h5>
                                            <div class="form-desc">Ajouter un produit ...</div>

    




<?php

$list_produit=$this->administration_model->infosProduits_IDprod($id_produits);
foreach($list_produit as $itemprod){ 

   $id_marque=$itemprod->id_marque;
   $marque=$this->administration_model->infosmarque_m($id_marque);



   $id_categorie_produit=$itemprod->id_categorie_produit;
   $categorie_produit=$this->administration_model->infosCategorie($id_categorie_produit);

   $id_fournisseur=$itemprod->id_fournisseur;
   $fournisseur=$this->administration_model->infos_nom_fournisseur($id_fournisseur);

   $caract_taille=$itemprod->caract_taille;
   $caract_couleur=$itemprod->caract_couleur;;
   $caract_taille_chaussure=$itemprod->caract_taille_chaussure;


   
   $list_explode_taille=explode("/", $caract_taille);

   $list_explode_couleur=explode("/", $caract_couleur);

   $list_explode_taille_chaussure=explode("/", $caract_taille_chaussure);






?>


    



            

 
                      
                                          
                                            <div class="row">
                                                <div class="col-sm-8">
                                                    <div class="form-group">
                                                        <label for="">libelle produit</label>
                                                       
                                                        <input class="form-control" id="nom_produit"  type="text" value="<?php echo $itemprod->nom_produit; ?>">
                                                    </div>
                                                </div>

                                            </div>

                                             <div class="row">
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <label for="">Prix produit</label>
                                                       
                                                        <input class="form-control" id="prix_produit"  type="text" value="<?php echo $itemprod->prix_produit; ?>">
                                                    </div>
                                                </div>

                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <label for="">Prix solde produit</label>
                                                       
                                                        <input class="form-control" id="prix_solde"  type="text" value="<?php echo $itemprod->prix_solde; ?>">
                                                    </div>
                                                </div>

                                            </div>

                                             <div class="row">
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <label for="">Prix promotionnel</label>
                                                       
                                                        <input class="form-control" id="prix_promotionnel"  type="text" value="<?php echo $itemprod->prix_promotionnel; ?>">
                                                    </div>
                                                </div>

                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <label for="">Quantité totale</label>
                                                       
                                                        <input class="form-control" id="quantite_totale"  type="text" value="<?php echo $itemprod->quantite_totale; ?>">
                                                    </div>
                                                </div>

                                            </div>



                                             <div class="row">
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <label for="">Lien youtube</label>
                                                       
                                                        <input class="form-control" id="youtube_lien"  type="text" value="<?php echo $itemprod->lien_youtube; ?>">
                                                    </div>
                                                </div>

                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <label for="">Pourcentage de reduction</label>
                                                       
                                                        <input class="form-control" id="reduction_pourcent"  type="text" value="<?php echo $itemprod->reduction_pourcent; ?>">
                                                    </div>
                                                </div>

                                            </div>

                                             <div class="row">
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <label for=""> Selectionner la marque</label>
                                                        <select class="form-control" id="id_marque">

                                                            

                                                            <option value="<?php echo $id_marque; ?>"><?php echo $marque; ?></option>



                                                            <?php
                                                                if(isset($liste_marque)){ 
                                                                                         
                                                                    foreach ($liste_marque as $menu){
                                                            ?>
                                                                                    
                                                                 <option value="<?php echo $menu->id_marque; ?>"><?php echo $menu->libelle_marque; ?></option>

                                                             <?php
                                                                                     
                                                                 }
                                                             }
                                                                                    ?>
                                                           
                                                           
                                                        </select>
                                                    </div>
                                                </div>
 
                                                <div class="col-sm-6">
                                                   <div class="form-group">
                                                        <label for=""> Selectionner le fournisseur</label>
                                                        <select class="form-control" id="id_fournisseur">
                                                            <option value="<?php echo $id_fournisseur; ?>"><?php echo $fournisseur; ?></option>



 <?php
                                                                if(isset($liste_fournisseur)){ 
                                                                                         
                                                                    foreach ($liste_fournisseur as $menu){
                                                            ?>
                                                                                    
                                                                 <option value="<?php echo $menu->id_fournisseur; ?>"><?php echo $menu->entreprise_fournisseur." ".$menu->nom_fournisseur." ".$menu->prenom_fournisseur; ?></option>

                                                             <?php
                                                                                     
                                                                 }
                                                             }
                                                                                    ?>
                                                           
                                                           
                                                        </select>
                                                    </div>
                                                </div>

                                            </div>


                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <label for=""> Selectionner la categorie</label>
                                                        <select class="form-control" id="id_categorie_produit">
                                                            
                                                             <option value="<?php echo $id_categorie_produit; ?>"><?php echo $categorie_produit; ?></option>




                                                             <?php
                                                                if(isset($liste_categorie)){ 
                                                                                         
                                                                    foreach ($liste_categorie as $menu){
                                                            ?>
                                                                                    
                                                                 <option value="<?php echo $menu->id_categorie_produit; ?>"><?php echo $menu->libelle_categorie_produit; ?></option>

                                                             <?php
                                                                                     
                                                                 }
                                                             }
                                                                                    ?>
                                                           
                                                           
                                                        </select>
                                                    </div>
                                                </div>




  
                                                

                                            </div>


                                              <div class="form-group">
                                                    <label> description</label>
                                                    <textarea id="description_produit" class="form-control" rows="3"><?php echo $itemprod->description_produit; ?></textarea>
                                                </div>

                                                <h4>Indiquer les options de tailles</h4>

                                            <div class="row">

                                               
                                                <div class="col-sm-3">
                                                    <div class="checkbox">
                                                        <label>

                                                        <?php

                                                            if (in_array("M", $list_explode_taille)) { ?>

                                                             <input type="checkbox" name="taille[]" class="taille" value="M" checked>Taille M
                                                               
                                                            <?php }else{ ?>

                                                             <input type="checkbox" name="taille[]" class="taille" value="M">Taille M

                                                            <?php }

                                                         ?>
                                                         
                                                        </label>
                                                    </div>
                                                </div>

                                                <div class="col-sm-3">
                                                    <div class="checkbox">
                                                        <label>
                                                         <?php

                                                            if (in_array("L", $list_explode_taille)) { ?>

                                                             <input type="checkbox" name="taille[]" class="taille" value="M" checked>Taille L
                                                               
                                                            <?php }else{ ?>

                                                             <input type="checkbox" name="taille[]" class="taille" value="L">Taille L

                                                            <?php }

                                                         ?>
                                                        </label>
                                                    </div>
                                                </div>


                                               

                                                <div class="col-sm-3">
                                                     <div class="checkbox">
                                                        <label>
                                                         <?php

                                                            if (in_array("S", $list_explode_taille)) { ?>

                                                             <input type="checkbox" name="taille[]" class="taille" value="S" checked>Taille S
                                                               
                                                            <?php }else{ ?>

                                                             <input type="checkbox" name="taille[]" class="taille" value="S">Taille S

                                                            <?php }

                                                         ?>
                                                        </label>
                                                    </div>
                                                </div>

                                                <div class="col-sm-3">
                                                     <div class="checkbox">
                                                        <label>
                                                         <?php

                                                            if (in_array("X", $list_explode_taille)) { ?>

                                                             <input type="checkbox" name="taille[]" class="taille" value="X" checked>Taille X
                                                               
                                                            <?php }else{ ?>

                                                             <input type="checkbox" name="taille[]" class="taille" value="X">Taille X

                                                            <?php }

                                                         ?>
                                                        </label>
                                                    </div>
                                                </div>

                                               
                                               
                                                
                                            </div>

                                            <div class="row">

                                                 

                                               
                                                <div class="col-sm-3">
                                                    <div class="checkbox">
                                                        <label>
                                                         <?php

                                                            if (in_array("XL", $list_explode_taille)) { ?>

                                                             <input type="checkbox" name="taille[]" class="taille" value="XJ" checked>Taille XL
                                                               
                                                            <?php }else{ ?>

                                                             <input type="checkbox" name="taille[]" class="taille" value="XL">Taille XL

                                                            <?php }

                                                         ?>
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="col-sm-3">
                                                     <div class="checkbox">
                                                        <label>
                                                         <?php

                                                            if (in_array("XXL", $list_explode_taille)) { ?>

                                                             <input type="checkbox" name="taille[]" class="taille" value="XXL" checked>Taille XXL
                                                               
                                                            <?php }else{ ?>

                                                             <input type="checkbox" name="taille[]" class="taille" value="XXL">Taille XXL

                                                            <?php }

                                                         ?>
                                                        </label>
                                                    </div>
                                                </div>

                                               
                                               
                                                
                                            </div>

                                              <h4>Indiquer les options de couleurs</h4>

                                            <div class="row">

                                               
                                                <div class="col-sm-3">
                                                    <div class="checkbox">
                                                        <label>
                                                         <?php

                                                            if (in_array("Blanc", $list_explode_couleur)) { ?>

                                                             <input type="checkbox" name="couleur[]" class="couleur" value="Blanc" checked>Blanc
                                                               
                                                            <?php }else{ ?>

                                                             <input type="checkbox" name="couleur[]" class="couleur" value="Blanc">Blanc

                                                            <?php }

                                                         ?>
                                                        </label>
                                                    </div>
                                                </div>

                                                <div class="col-sm-3">
                                                    <div class="checkbox">
                                                        <label>
                                                          <?php

                                                            if (in_array("Noir", $list_explode_couleur)) { ?>

                                                             <input type="checkbox" name="couleur[]" class="couleur" value="Noir" checked>Noir
                                                               
                                                            <?php }else{ ?>

                                                             <input type="checkbox" name="couleur[]" class="couleur" value="Noir">Noir

                                                            <?php }

                                                         ?>
                                                        </label>
                                                    </div>
                                                </div>


                                                <div class="col-sm-3">
                                                     <div class="checkbox">
                                                        <label>
                                                           <?php

                                                            if (in_array("Rouge", $list_explode_couleur)) { ?>

                                                             <input type="checkbox" name="couleur[]" class="couleur" value="Rouge" checked>Rouge
                                                               
                                                            <?php }else{ ?>

                                                             <input type="checkbox" name="couleur[]" class="couleur" value="Rouge">Rouge

                                                            <?php }

                                                         ?>
                                                        </label>
                                                    </div>
                                                </div>

                                                <div class="col-sm-3">
                                                     <div class="checkbox">
                                                        <label>
                                                         <?php

                                                            if (in_array("Vert", $list_explode_couleur)) { ?>

                                                             <input type="checkbox" name="couleur[]" class="couleur" value="Vert" checked>Vert
                                                               
                                                            <?php }else{ ?>

                                                             <input type="checkbox" name="couleur[]" class="couleur" value="Vert">Vert

                                                            <?php }

                                                         ?>
                                                        </label>
                                                    </div>
                                                </div>

                                                
 
                                            </div>

                                            <div class="row">

                                                 <div class="col-sm-3">
                                                     <div class="checkbox">
                                                        <label>
                                                          <?php

                                                            if (in_array("bleu", $list_explode_couleur)) { ?>

                                                             <input type="checkbox" name="couleur[]" class="couleur" value="Bleu" checked>Bleu
                                                              
                                                            <?php }else{ ?>

                                                             <input type="checkbox" name="couleur[]" class="couleur" value="Bleu">Bleu

                                                            <?php }

                                                         ?>
                                                        </label>
                                                    </div>
                                                </div>

                                                <div class="col-sm-3">
                                                     <div class="checkbox">
                                                        <label>
                                                          <?php

                                                            if (in_array("Gris", $list_explode_couleur)) { ?>

                                                             <input type="checkbox" name="couleur[]" class="couleur" value="Gris" checked>Gris
                                                               
                                                            <?php }else{ ?>

                                                             <input type="checkbox" name="couleur[]" class="couleur" value="Gris">Gris

                                                            <?php }

                                                         ?>
                                                        </label>
                                                    </div>
                                                </div>

                                                <div class="col-sm-3">
                                                     <div class="checkbox">
                                                        <label>
                                                           <?php

                                                            if (in_array("Marron", $list_explode_couleur)) { ?>

                                                             <input type="checkbox" name="couleur[]" class="couleur" value="Marron" checked>Marron
                                                               
                                                            <?php }else{ ?>

                                                             <input type="checkbox" name="couleur[]" class="couleur" value="Marron">Marron

                                                            <?php }

                                                         ?>
                                                        </label>
                                                    </div>
                                                </div>

                                                <div class="col-sm-3">
                                                     <div class="checkbox">
                                                        <label>
                                                          <?php

                                                            if (in_array("Violet", $list_explode_couleur)) { ?>

                                                             <input type="checkbox" name="couleur[]" class="couleur" value="Violet" checked>Violet
                                                               
                                                            <?php }else{ ?>

                                                             <input type="checkbox" name="couleur[]" class="couleur" value="Violet">Violet

                                                            <?php }

                                                         ?>
                                                        </label>
                                                    </div>
                                                </div>


                                               
                                               
                                                
                                            </div>

                                               <h4>Indiquer les options de taille</h4>

                                            <div class="row">

                                               
                                                <div class="col-sm-3">
                                                    <div class="checkbox">
                                                        <label>
                                                          <?php

                                                            if (in_array("25", $list_explode_taille_chaussure)) { ?>

                                                             <input type="checkbox" name="taille_chaussure[]" class="taille_chaussure" value="25" checked>25
                                                               
                                                            <?php }else{ ?>

                                                             <input type="checkbox" name="taille_chaussure[]" class="taille_chaussure" value="25">25

                                                            <?php }

                                                         ?>
                                                        </label>
                                                    </div>
                                                </div>

                                                <div class="col-sm-3">
                                                    <div class="checkbox">
                                                        <label>
                                                          <?php

                                                            if (in_array("26", $list_explode_taille_chaussure)) { ?>

                                                             <input type="checkbox" name="taille_chaussure[]" class="taille_chaussure" value="26" checked>26
                                                               
                                                            <?php }else{ ?>

                                                             <input type="checkbox" name="taille_chaussure[]" class="taille_chaussure" value="26">26

                                                            <?php }

                                                         ?>
                                                        </label>
                                                    </div>
                                                </div>


                                                <div class="col-sm-3">
                                                     <div class="checkbox">
                                                        <label>
                                                          <?php

                                                            if (in_array("27", $list_explode_taille_chaussure)) { ?>

                                                             <input type="checkbox" name="taille_chaussure[]" class="taille_chaussure" value="27" checked>27
                                                               
                                                            <?php }else{ ?>

                                                             <input type="checkbox" name="taille_chaussure[]" class="taille_chaussure" value="27">27

                                                            <?php }

                                                         ?>
                                                        </label>
                                                    </div>
                                                </div>

                                                <div class="col-sm-3">
                                                     <div class="checkbox">
                                                        <label>
                                                          <?php

                                                            if (in_array("28", $list_explode_taille_chaussure)) { ?>

                                                             <input type="checkbox" name="taille_chaussure[]" class="taille_chaussure" value="28" checked>28
                                                               
                                                            <?php }else{ ?>

                                                             <input type="checkbox" name="taille_chaussure[]" class="taille_chaussure" value="28">28

                                                            <?php }

                                                         ?>
                                                        </label>
                                                    </div>
                                                </div>

                                                
 
                                            </div>

                                            <div class="row">

                                                 <div class="col-sm-3">
                                                     <div class="checkbox">
                                                        <label>
                                                          <?php

                                                            if (in_array("29", $list_explode_taille_chaussure)) { ?>

                                                             <input type="checkbox" name="taille_chaussure[]" class="taille_chaussure" value="29" checked>29
                                                               
                                                            <?php }else{ ?>

                                                             <input type="checkbox" name="taille_chaussure[]" class="taille_chaussure" value="29">29

                                                            <?php }

                                                         ?>
                                                        </label>
                                                    </div>
                                                </div>

                                                <div class="col-sm-3">
                                                     <div class="checkbox">
                                                        <label>
                                                          <?php

                                                            if (in_array("30", $list_explode_taille_chaussure)) { ?>

                                                             <input type="checkbox" name="taille_chaussure[]" class="taille_chaussure" value="30" checked>30
                                                               
                                                            <?php }else{ ?>

                                                             <input type="checkbox" name="taille_chaussure[]" class="taille_chaussure" value="30">30

                                                            <?php }

                                                         ?>
                                                        </label>
                                                    </div>
                                                </div>

                                                 <div class="col-sm-3">
                                                     <div class="checkbox">
                                                        <label>
                                                          <?php

                                                            if (in_array("31", $list_explode_taille_chaussure)) { ?>

                                                             <input type="checkbox" name="taille_chaussure[]" class="taille_chaussure" value="31" checked>31
                                                               
                                                            <?php }else{ ?>

                                                             <input type="checkbox" name="taille_chaussure[]" class="taille_chaussure" value="31">31

                                                            <?php }

                                                         ?>
                                                        </label>
                                                    </div>
                                                </div>

                                                <div class="col-sm-3">
                                                     <div class="checkbox">
                                                        <label>
                                                          <?php

                                                            if (in_array("32", $list_explode_taille_chaussure)) { ?>

                                                             <input type="checkbox" name="taille_chaussure[]" class="taille_chaussure" value="32" checked>32
                                                               
                                                            <?php }else{ ?>

                                                             <input type="checkbox" name="taille_chaussure[]" class="taille_chaussure" value="32">32

                                                            <?php }

                                                         ?>
                                                        </label>
                                                    </div>
                                                </div>

                                               


                                               
                                               
                                                
                                            </div>

                                             <div class="row">

                                                 <div class="col-sm-3">
                                                     <div class="checkbox">
                                                        <label>
                                                          <?php

                                                            if (in_array("33", $list_explode_taille_chaussure)) { ?>

                                                             <input type="checkbox" name="taille_chaussure[]" class="taille_chaussure" value="33" checked>33
                                                               
                                                            <?php }else{ ?>

                                                             <input type="checkbox" name="taille_chaussure[]" class="taille_chaussure" value="33">33

                                                            <?php }

                                                         ?>
                                                        </label>
                                                    </div>
                                                </div>

                                                <div class="col-sm-3">
                                                     <div class="checkbox">
                                                        <label>
                                                           <?php

                                                            if (in_array("34", $list_explode_taille_chaussure)) { ?>

                                                             <input type="checkbox" name="taille_chaussure[]" class="taille_chaussure" value="34" checked>34
                                                               
                                                            <?php }else{ ?>

                                                             <input type="checkbox" name="taille_chaussure[]" class="taille_chaussure" value="34">34

                                                            <?php }

                                                         ?>
                                                        </label>
                                                    </div>
                                                </div>

                                                 <div class="col-sm-3">
                                                     <div class="checkbox">
                                                        <label>
                                                          <?php

                                                            if (in_array("35", $list_explode_taille_chaussure)) { ?>

                                                             <input type="checkbox" name="taille_chaussure[]" class="taille_chaussure" value="35" checked>35
                                                               
                                                            <?php }else{ ?>

                                                             <input type="checkbox" name="taille_chaussure[]" class="taille_chaussure" value="35">35

                                                            <?php }

                                                         ?>
                                                        </label>
                                                    </div>
                                                </div>

                                                <div class="col-sm-3">
                                                     <div class="checkbox">
                                                        <label>
                                                          <?php

                                                            if (in_array("36", $list_explode_taille_chaussure)) { ?>

                                                             <input type="checkbox" name="taille_chaussuretaille_chaussure[]" class="taille_chaussuretaille_chaussure" value="36" checked>36
                                                               
                                                            <?php }else{ ?>

                                                             <input type="checkbox" name="taille_chaussuretaille_chaussure[]" class="taille_chaussuretaille_chaussure" value="36">36

                                                            <?php }

                                                         ?>
                                                        </label>
                                                    </div>
                                                </div>

                                               


                                               
                                               
                                                
                                            </div>

                                            <div class="row">

                                                 <div class="col-sm-3">
                                                     <div class="checkbox">
                                                        <label>
                                                          <?php

                                                            if (in_array("37", $list_explode_taille_chaussure)) { ?>

                                                             <input type="checkbox" name="taille_chaussure[]" class="taille_chaussure" value="37" checked>37
                                                               
                                                            <?php }else{ ?>

                                                             <input type="checkbox" name="taille_chaussure[]" class="taille_chaussure" value="37">37

                                                            <?php }

                                                         ?>
                                                        </label>
                                                    </div>
                                                </div>

                                                <div class="col-sm-3">
                                                     <div class="checkbox">
                                                        <label>
                                                          <?php

                                                            if (in_array("38", $list_explode_taille_chaussure)) { ?>

                                                             <input type="checkbox" name="taille_chaussuretaille_chaussuretaille_chaussure[]" class="taille_chaussuretaille_chaussuretaille_chaussure" value="38" checked>38
                                                            <?php }else{ ?>

                                                             <input type="checkbox" name="taille_chaussuretaille_chaussuretaille_chaussure[]" class="taille_chaussuretaille_chaussuretaille_chaussure" value="38">38

                                                            <?php }

                                                         ?>
                                                        </label>
                                                    </div>
                                                </div>

                                                 <div class="col-sm-3">
                                                     <div class="checkbox">
                                                        <label>
                                                          <?php

                                                            if (in_array("39", $list_explode_taille_chaussure)) { ?>

                                                             <input type="checkbox" name="taille_chaussuretaille_chaussuretaille_chaussure[]" class="taille_chaussuretaille_chaussuretaille_chaussure" value="39" checked>39
                                                               
                                                            <?php }else{ ?>

                                                             <input type="checkbox" name="taille_chaussuretaille_chaussuretaille_chaussure[]" class="taille_chaussuretaille_chaussuretaille_chaussure" value="39">39

                                                            <?php }

                                                         ?>
                                                        </label>
                                                    </div>
                                                </div>

                                                <div class="col-sm-3">
                                                     <div class="checkbox">
                                                        <label>
                                                          <?php

                                                            if (in_array("40", $list_explode_taille_chaussure)) { ?>

                                                             <input type="checkbox" name="taille_chaussuretaille_chaussure[]" class="taille_chaussuretaille_chaussure" value="40" checked>40
                                                               
                                                            <?php }else{ ?>

                                                             <input type="checkbox" name="taille_chaussuretaille_chaussure[]" class="taille_chaussuretaille_chaussure" value="40">40

                                                            <?php }

                                                         ?>
                                                        </label>
                                                    </div>
                                                </div>

                                               


                                               
                                               
                                                
                                            </div>

                                             <div class="row">

                                                 <div class="col-sm-3">
                                                     <div class="checkbox">
                                                        <label>
                                                          <?php

                                                            if (in_array("41", $list_explode_taille_chaussure)) { ?>

                                                             <input type="checkbox" name="taille_chaussuretaille_chaussure[]" class="taille_chaussuretaille_chaussure" value="41" checked>41
                                                               
                                                            <?php }else{ ?>

                                                             <input type="checkbox" name="taille_chaussure[]" class="taille_chaussure" value="41">41

                                                            <?php }

                                                         ?>
                                                        </label>
                                                    </div>
                                                </div>

                                                <div class="col-sm-3">
                                                     <div class="checkbox">
                                                        <label>
                                                          <?php

                                                            if (in_array("42", $list_explode_taille_chaussure)) { ?>

                                                             <input type="checkbox" name="taille_chaussure[]" class="taille_chaussure" value="42" checked>42
                                                               
                                                            <?php }else{ ?>

                                                             <input type="checkbox" name="taille_chaussure[]" class="taille_chaussure" value="42">42

                                                            <?php }

                                                         ?>
                                                        </label>
                                                    </div>
                                                </div>

                                                 <div class="col-sm-3">
                                                     <div class="checkbox">
                                                        <label>
                                                          <?php

                                                            if (in_array("43", $list_explode_taille_chaussure)) { ?>

                                                             <input type="checkbox" name="taille_chaussuretaille_chaussure[]" class="taille_chaussuretaille_chaussure" value="43" checked>43
                                                               
                                                            <?php }else{ ?>

                                                             <input type="checkbox" name="taille_chaussuretaille_chaussure[]" class="taille_chaussuretaille_chaussure" value="43">43

                                                            <?php }

                                                         ?>
                                                        </label>
                                                    </div>
                                                </div>

                                                <div class="col-sm-3">
                                                     <div class="checkbox">
                                                        <label>
                                                          <?php

                                                            if (in_array("44", $list_explode_taille_chaussure)) { ?>

                                                             <input type="checkbox" name="taille_chaussuretaille_chaussure[]" class="taille_chaussuretaille_chaussure" value="44" checked>44
                                                               
                                                            <?php }else{ ?>

                                                             <input type="checkbox" name="taille_chaussuretaille_chaussure[]" class="taille_chaussuretaille_chaussure" value="44">44

                                                            <?php }

                                                         ?>
                                                        </label>
                                                    </div>
                                                </div>

                                               


                                               
                                               
                                                
                                            </div>


                                             <div class="row">

                                                 <div class="col-sm-3">
                                                     <div class="checkbox">
                                                        <label>
                                                          <?php

                                                            if (in_array("45", $list_explode_taille_chaussure)) { ?>

                                                             <input type="checkbox" name="taille_chaussure[]" class="taille_chaussure" value="45" checked>45
                                                               
                                                            <?php }else{ ?>

                                                             <input type="checkbox" name="taille_chaussure[]" class="taille_chaussure" value="45">45

                                                            <?php }

                                                         ?>
                                                        </label>
                                                    </div>
                                                </div>

                                                <div class="col-sm-3">
                                                     <div class="checkbox">
                                                        <label>
                                                         <?php

                                                            if (in_array("46", $list_explode_taille_chaussure)) { ?>

                                                             <input type="checkbox" name="taille_chaussure[]" class="taille_chaussure" value="46" checked>46
                                                               
                                                            <?php }else{ ?>

                                                             <input type="checkbox" name="taille_chaussure[]" class="taille_chaussure" value="46">46

                                                            <?php }

                                                         ?>
                                                        </label>
                                                    </div>
                                                </div>

                                                 <div class="col-sm-3">
                                                     <div class="checkbox">
                                                        <label>
                                                          <?php

                                                            if (in_array("47", $list_explode_taille_chaussure)) { ?>

                                                             <input type="checkbox" name="taille_chaussure[]" class="taille_chaussure" value="47" checked>47
                                                               
                                                            <?php }else{ ?>

                                                             <input type="checkbox" name="taille_chaussure[]" class="taille_chaussure" value="47">47

                                                            <?php }

                                                         ?>
                                                        </label>
                                                    </div>
                                                </div>

                                                <div class="col-sm-3">
                                                     <div class="checkbox">
                                                        <label>
                                                          <?php

                                                            if (in_array("48", $list_explode_taille_chaussure)) { ?>

                                                             <input type="checkbox" name="taille_chaussure[]" class="taille_chaussure" value="48" checked>48
                                                               
                                                            <?php }else{ ?>

                                                             <input type="checkbox" name="taille_chaussure[]" class="taille_chaussure" value="48">48

                                                            <?php }

                                                         ?>
                                                        </label>
                                                    </div>
                                                </div>

                                               


                                               
                                               
                                                
                                            </div>
                                                 




                                               <div class="row">
                                                <div class="col-sm-6">
                                                   <div class="form-group">
                                                        <label for=""> Selectionner mise en ligne</label>
                                                        <select class="form-control" id="status_mise_en_ligne">
                                                           

                                                                                    
                                                                 <option value="1">En ligne</option>
                                                                 <option value="0">Hors ligne</option>

                                                            
                                                           
                                                           
                                                        </select>
                                                    </div>
                                                </div>
                                              </div>

                                            </div>
<?php
}


?>
                                             

     
                                            <div class="form-buttons-w">
                                                <button class="btn btn-primary" id="button_submit" type="submit"> Ajouter</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                          
                        </div>


                    </div>
                       
                       
                        
                       
                    </div>
                </div>
            </div>
        </div>
        <div class="display-type"></div>
    </div>
    <script src="<?php echo base_url(); ?>bower_components/jquery/dist/jquery.min.js"></script>
    <script src="<?php echo base_url(); ?>bower_components/popper.js/dist/umd/popper.min.js"></script>
    <script src="<?php echo base_url(); ?>bower_components/moment/moment.js"></script>
    <script src="<?php echo base_url(); ?>bower_components/chart.js/dist/Chart.min.js"></script>
    <script src="<?php echo base_url(); ?>bower_components/select2/dist/js/select2.full.min.js"></script>
    <script src="<?php echo base_url(); ?>bower_components/jquery-bar-rating/dist/jquery.barrating.min.js"></script>
    <script src="<?php echo base_url(); ?>bower_components/ckeditor/ckeditor.js"></script>
    <script src="<?php echo base_url(); ?>bower_components/bootstrap-validator/dist/validator.min.js"></script>
    <script src="<?php echo base_url(); ?>bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
    <script src="<?php echo base_url(); ?>bower_components/ion.rangeSlider/js/ion.rangeSlider.min.js"></script>
    <script src="<?php echo base_url(); ?>bower_components/dropzone/dist/dropzone.js"></script>
    <script src="<?php echo base_url(); ?>bower_components/editable-table/mindmup-editabletable.js"></script>
    <script src="<?php echo base_url(); ?>bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="<?php echo base_url(); ?>bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
    <script src="<?php echo base_url(); ?>bower_components/fullcalendar/dist/fullcalendar.min.js"></script>
    <script src="<?php echo base_url(); ?>bower_components/perfect-scrollbar/js/perfect-scrollbar.jquery.min.js"></script>
    <script src="<?php echo base_url(); ?>bower_components/tether/dist/js/tether.min.js"></script>
    <script src="<?php echo base_url(); ?>bower_components/slick-carousel/slick/slick.min.js"></script>
    <script src="<?php echo base_url(); ?>bower_components/bootstrap/js/dist/util.js"></script>
    <script src="<?php echo base_url(); ?>bower_components/bootstrap/js/dist/alert.js"></script>
    <script src="<?php echo base_url(); ?>bower_components/bootstrap/js/dist/button.js"></script>
    <script src="<?php echo base_url(); ?>bower_components/bootstrap/js/dist/carousel.js"></script>
    <script src="<?php echo base_url(); ?>bower_components/bootstrap/js/dist/collapse.js"></script>
    <script src="<?php echo base_url(); ?>bower_components/bootstrap/js/dist/dropdown.js"></script>
    <script src="<?php echo base_url(); ?>bower_components/bootstrap/js/dist/modal.js"></script>
    <script src="<?php echo base_url(); ?>bower_components/bootstrap/js/dist/tab.js"></script>
    <script src="<?php echo base_url(); ?>bower_components/bootstrap/js/dist/tooltip.js"></script>
    <script src="<?php echo base_url(); ?>bower_components/bootstrap/js/dist/popover.js"></script>
    <script src="<?php echo base_url(); ?>js/demo_customizer4a76.js?version=4.3.0"></script>
    <script src="<?php echo base_url(); ?>js/main4a76.js?version=4.3.0"></script>
    <script>

$( document ).ready(function() {

    var init_taille="";
    localStorage.setItem('taille', init_taille);

    var init_couleur="";
    localStorage.setItem('couleur', init_couleur);
    var init_taille_chaussure="";
    localStorage.setItem('taille_chaussure', init_taille_chaussure);

    $("#succes_box").hide();
    console.log( "ready!" );
});

                              $( "#button_submit" ).click(function(e) {
                    e.preventDefault();
                   

          
                    var id_produits=$( "#id_produits" ).val();
                    var nom_produit=$( "#nom_produit" ).val();
                    var prix_produit=$( "#prix_produit" ).val();
                    var prix_solde=$( "#prix_solde" ).val();
                    var quantite_totale=$("#quantite_totale").val();
                    var description_produit=$("#description_produit").val();
                    var prix_promotionnel=$("#prix_promotionnel").val();

                     var youtube_lien=$("#youtube_lien").val();
                    var reduction_pourcent=$("#reduction_pourcent").val();
                    

                    var id_marque=$("#id_marque").val();
                    var id_fournisseur=$("#id_fournisseur").val();
                    var id_categorie_produit=$("#id_categorie_produit").val();

                    var status_mise_en_ligne=$("#status_mise_en_ligne").val();

                     var caract_couleur=localStorage.getItem('couleur');
                    var caract_taille=localStorage.getItem('taille');

                    var caract_taille_chaussure=localStorage.getItem('taille_chaussure');

                    console.log(status_mise_en_ligne);



                  
                    
                   
                    
                    
                    
                    
                $.ajax({

                                           type: 'POST',
                                           url: '<?php echo base_url(); ?>administration/ajax_Produit_editer',
                                           dataType:'html',
                                           data: {
                                               
                                               id_produits:id_produits,
                                               nom_produit:nom_produit,
                                               prix_produit:prix_produit,
                                               prix_solde:prix_solde,
                                               quantite_totale:quantite_totale,
                                               id_marque:id_marque,
                                               id_fournisseur:id_fournisseur,
                                               id_categorie_produit:id_categorie_produit,
                                               status_mise_en_ligne:status_mise_en_ligne,
                                               description_produit:description_produit,
                                               prix_promotionnel:prix_promotionnel,
                                               youtube_lien:youtube_lien,
                                               reduction_pourcent:reduction_pourcent,
                                               caract_taille:caract_taille,
                                               caract_couleur:caract_couleur,
                                               caract_taille_chaussure:caract_taille_chaussure,
                                               
                                             
                                              
                                    
                                           },
                                           success: function(response) {

                                              
                                               
                                               console.log(response);
                                               

                                              

                                           },
                                            complete: function(){
                                                
                                                $("#zone_id").hide();
                                                $("#succes_box").show();
                                               
                                            },
                                            beforeSend: function(){
                                                
                                                
                                              

                                            },
                                           error: function (xhr, ajaxOptions, thrownError) {
                                               alert(xhr.status);
                                               alert(thrownError);
                                           }

                                 });
                    
                    
                });

                $( ".taille" ).click(function() {
                    if (this.checked) {
                            var taille=localStorage.getItem('taille');

                            var nouvelle_valeur_taille=taille+"/"+($(this).val());

                            localStorage.setItem('taille', nouvelle_valeur_taille);

                            console.log(nouvelle_valeur_taille);
                        }



                    });

                  $( ".couleur" ).click(function() {

                    if (this.checked) {
                       var couleur=localStorage.getItem('couleur');

                    var nouvelle_valeur_couleur=couleur+"/"+($(this).val());

                    localStorage.setItem('couleur', nouvelle_valeur_couleur);

                    console.log(nouvelle_valeur_couleur);

                       

                    }


                    
                    });

                   $( ".taille_chaussure" ).click(function() {


                    if (this.checked) {
                        var taille_chaussure=localStorage.getItem('taille_chaussure');

                    var nouvelle_valeur_taille_chaussure=taille_chaussure+"/"+($(this).val());

                    localStorage.setItem('taille_chaussure', nouvelle_valeur_taille_chaussure);

                    console.log(nouvelle_valeur_taille_chaussure);

                    }

                    });

                $( "#supp_image" ).click(function(e) {

                 e.preventDefault();

                 var id_produits=$( "#id_produits" ).val();
                  //console.log("bouton click");
                  $.ajax({

                                           type: 'POST',
                                           url: '<?php echo base_url(); ?>administration/delete_uploadImgProduit/'+id_produits,
                                           dataType:'html',
                                           data: {
  
                                    
                                           },
                                           success: function(response) {

                                              
                                               
                                               console.log(response);
                                               alert("Images supprimée avec succès");
                                               

                                              

                                           },
                                            complete: function(){
                                                
                                                // $("#zone_id").hide();
                                                // $("#succes_box").show();
                                               
                                            },
                                            beforeSend: function(){
                                                
                                                
                                              

                                            },
                                           error: function (xhr, ajaxOptions, thrownError) {
                                               alert(xhr.status);
                                               alert(thrownError);
                                           }

                                 });


                });

       
    </script>
</body>
<!-- Mirrored from light.pinsupreme.com/forms_regular.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 10 Mar 2018 13:28:40 GMT -->

</html>