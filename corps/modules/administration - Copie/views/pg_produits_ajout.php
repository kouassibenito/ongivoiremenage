

<!DOCTYPE html>
<html>


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
                                    <h6 class="element-header">Ajouter un produit</h6>
                                    <div class="element-box">

                                         <div class="element-wrapper">
                           
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

    







            

 
                      
                                          
                                            <div class="row">
                                                <div class="col-sm-8">
                                                    <div class="form-group">
                                                        <label for="">libelle produit</label>
                                                       
                                                        <input class="form-control" id="nom_produit"  type="text" value="">
                                                    </div>
                                                </div>

                                            </div>

                                             <div class="row">
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <label for="">Prix produit</label>
                                                       
                                                        <input class="form-control" id="prix_produit"  type="text" value="">
                                                    </div>
                                                </div>

                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <label for="">Prix solde produit</label>
                                                       
                                                        <input class="form-control" id="prix_solde"  type="text" value="">
                                                    </div>
                                                </div>

                                            </div>

                                             <div class="row">
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <label for="">Prix promotionnel</label>
                                                       
                                                        <input class="form-control" id="prix_promotionnel"  type="text" value="">
                                                    </div>
                                                </div>

                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <label for="">Quantité totale</label>
                                                       
                                                        <input class="form-control" id="quantite_totale"  type="text" value="">
                                                    </div>
                                                </div>

                                            </div>



                                             <div class="row">
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <label for="">Lien youtube</label>
                                                       
                                                        <input class="form-control" id="youtube_lien"  type="text" value="">
                                                    </div>
                                                </div>

                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <label for="">Pourcentage de reduction</label>
                                                       
                                                        <input class="form-control" id="reduction_pourcent"  type="text" value="">
                                                    </div>
                                                </div>

                                            </div>

                                             <div class="row">
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <label for=""> Selectionner la marque</label>
                                                        <select class="form-control" id="id_marque">
                                                            <option value="">Selectionner la marque</option>



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
                                                            <option value="">Selectionner le fournisseur</option>


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
                                                            <option value="">Selectionner la categorie </option>



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

                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <label> description</label>
                                                        <textarea id="description_produit" class="form-control" rows="3"></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                             <h4>Indiquer les options de tailles de chemises</h4>

                                            <div class="row">

                                               
                                                <div class="col-sm-3">
                                                    <div class="checkbox">
                                                        <label>
                                                          <input type="checkbox" name="taille[]" class="taille" value="M">Taille M
                                                        </label>
                                                    </div>
                                                </div>

                                                <div class="col-sm-3">
                                                    <div class="checkbox">
                                                        <label>
                                                          <input type="checkbox" name="taille[]" class="taille" value="L">Taille L
                                                        </label>
                                                    </div>
                                                </div>


                                               

                                                <div class="col-sm-3">
                                                     <div class="checkbox">
                                                        <label>
                                                          <input type="checkbox" name="taille[]" class="taille" value="S">Taille S
                                                        </label>
                                                    </div>
                                                </div>

                                                <div class="col-sm-3">
                                                     <div class="checkbox">
                                                        <label>
                                                          <input type="checkbox" name="taille[]" class="taille"value="X">Taille X
                                                        </label>
                                                    </div>
                                                </div>

                                               
                                               
                                                
                                            </div>

                                            <div class="row">

                                                 

                                               
                                                <div class="col-sm-3">
                                                    <div class="checkbox">
                                                        <label>
                                                          <input type="checkbox" name="taille[]" class="taille" value="XL">Taille XL
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="col-sm-3">
                                                     <div class="checkbox">
                                                        <label>
                                                          <input type="checkbox" name="taille[]" class="taille" value="XXL">Taille XXL
                                                        </label>
                                                    </div>
                                                </div>

                                               
                                               
                                                
                                            </div>

                                              <h4>Indiquer les options de couleurs</h4>

                                            <div class="row">

                                               
                                                <div class="col-sm-3">
                                                    <div class="checkbox">
                                                        <label>
                                                          <input type="checkbox" name="couleur[]" class="couleur" value="Blanc">Blanc
                                                        </label>
                                                    </div>
                                                </div>

                                                <div class="col-sm-3">
                                                    <div class="checkbox">
                                                        <label>
                                                          <input type="checkbox" name="couleur[]"  class="couleur"value="Noir">Noir
                                                        </label>
                                                    </div>
                                                </div>


                                                <div class="col-sm-3">
                                                     <div class="checkbox">
                                                        <label>
                                                          <input type="checkbox" name="couleur[]" class="couleur" value="Rouge">Rouge
                                                        </label>
                                                    </div>
                                                </div>

                                                <div class="col-sm-3">
                                                     <div class="checkbox">
                                                        <label>
                                                          <input type="checkbox" name="couleur[]" class="couleur" value="Vert">Vert
                                                        </label>
                                                    </div>
                                                </div>

                                                
 
                                            </div>

                                            <div class="row">

                                                 <div class="col-sm-3">
                                                     <div class="checkbox">
                                                        <label>
                                                          <input type="checkbox" name="couleur[]" class="couleur" value="bleu">bleu
                                                        </label>
                                                    </div>
                                                </div>

                                                <div class="col-sm-3">
                                                     <div class="checkbox">
                                                        <label>
                                                          <input type="checkbox" name="couleur[]" class="couleur" value="Gris">Gris
                                                        </label>
                                                    </div>
                                                </div>

                                                <div class="col-sm-3">
                                                     <div class="checkbox">
                                                        <label>
                                                          <input type="checkbox" name="couleur[]"  class="couleur"value="Marron">Marron
                                                        </label>
                                                    </div>
                                                </div>

                                                <div class="col-sm-3">
                                                     <div class="checkbox">
                                                        <label>
                                                          <input type="checkbox" name="couleur[]" class="couleur"value="Violet">Violet
                                                        </label>
                                                    </div>
                                                </div>


                                               
                                               
                                                
                                            </div>

                                               <h4>Indiquer les options de taille de chaussures</h4>

                                            <div class="row">

                                               
                                                <div class="col-sm-3">
                                                    <div class="checkbox">
                                                        <label>
                                                          <input type="checkbox" name="taille_chaussure[]" class="taille_chaussure" value="25">25
                                                        </label>
                                                    </div>
                                                </div>

                                                <div class="col-sm-3">
                                                    <div class="checkbox">
                                                        <label>
                                                          <input type="checkbox" name="taille_chaussure[]" class="taille_chaussure" value="26">26
                                                        </label>
                                                    </div>
                                                </div>


                                                <div class="col-sm-3">
                                                     <div class="checkbox">
                                                        <label>
                                                          <input type="checkbox" name="taille_chaussure[]" class="taille_chaussure" value="27">27
                                                        </label>
                                                    </div>
                                                </div>

                                                <div class="col-sm-3">
                                                     <div class="checkbox">
                                                        <label>
                                                          <input type="checkbox" name="taille_chaussure[]" class="taille_chaussure" value="28">28
                                                        </label>
                                                    </div>
                                                </div>

                                                
 
                                            </div>

                                            <div class="row">

                                                 <div class="col-sm-3">
                                                     <div class="checkbox">
                                                        <label>
                                                          <input type="checkbox" name="taille_chaussure[]" class="taille_chaussure" value="29">29
                                                        </label>
                                                    </div>
                                                </div>

                                                <div class="col-sm-3">
                                                     <div class="checkbox">
                                                        <label>
                                                          <input type="checkbox" name="taille_chaussure[]" class="taille_chaussure" value="30">30
                                                        </label>
                                                    </div>
                                                </div>

                                                 <div class="col-sm-3">
                                                     <div class="checkbox">
                                                        <label>
                                                          <input type="checkbox" name="taille_chaussure[]" class="taille_chaussure" value="31">31
                                                        </label>
                                                    </div>
                                                </div>

                                                <div class="col-sm-3">
                                                     <div class="checkbox">
                                                        <label>
                                                          <input type="checkbox" name="taille_chaussure[]" class="taille_chaussure" value="32">32
                                                        </label>
                                                    </div>
                                                </div>

                                               


                                               
                                               
                                                
                                            </div>

                                             <div class="row">

                                                 <div class="col-sm-3">
                                                     <div class="checkbox">
                                                        <label>
                                                          <input type="checkbox" name="taille_chaussure[]" class="taille_chaussure" value="33">33
                                                        </label>
                                                    </div>
                                                </div>

                                                <div class="col-sm-3">
                                                     <div class="checkbox">
                                                        <label>
                                                          <input type="checkbox" name="taille_chaussure[]" class="taille_chaussure" value="34">34
                                                        </label>
                                                    </div>
                                                </div>

                                                 <div class="col-sm-3">
                                                     <div class="checkbox">
                                                        <label>
                                                          <input type="checkbox" name="taille_chaussure[]" class="taille_chaussure" value="35">35
                                                        </label>
                                                    </div>
                                                </div>

                                                <div class="col-sm-3">
                                                     <div class="checkbox">
                                                        <label>
                                                          <input type="checkbox" name="taille_chaussure[]" class="taille_chaussure" value="36">36
                                                        </label>
                                                    </div>
                                                </div>

                                               


                                               
                                               
                                                
                                            </div>

                                            <div class="row">

                                                 <div class="col-sm-3">
                                                     <div class="checkbox">
                                                        <label>
                                                          <input type="checkbox" name="taille_chaussure[]" class="taille_chaussure" value="37">37
                                                        </label>
                                                    </div>
                                                </div>

                                                <div class="col-sm-3">
                                                     <div class="checkbox">
                                                        <label>
                                                          <input type="checkbox" name="taille_chaussure[]" class="taille_chaussure" value="38">38
                                                        </label>
                                                    </div>
                                                </div>

                                                 <div class="col-sm-3">
                                                     <div class="checkbox">
                                                        <label>
                                                          <input type="checkbox" name="taille_chaussure[]" class="taille_chaussure" value="39">39
                                                        </label>
                                                    </div>
                                                </div>

                                                <div class="col-sm-3">
                                                     <div class="checkbox">
                                                        <label>
                                                          <input type="checkbox" name="taille_chaussure[]" class="taille_chaussure" value="40">40
                                                        </label>
                                                    </div>
                                                </div>

                                               


                                               
                                               
                                                
                                            </div>

                                             <div class="row">

                                                 <div class="col-sm-3">
                                                     <div class="checkbox">
                                                        <label>
                                                          <input type="checkbox" name="taille_chaussure[]" class="taille_chaussure" value="41">41
                                                        </label>
                                                    </div>
                                                </div>

                                                <div class="col-sm-3">
                                                     <div class="checkbox">
                                                        <label>
                                                          <input type="checkbox" name="taille_chaussure[]" class="taille_chaussure" value="42">42
                                                        </label>
                                                    </div>
                                                </div>

                                                 <div class="col-sm-3">
                                                     <div class="checkbox">
                                                        <label>
                                                          <input type="checkbox" name="taille_chaussure[]" class="taille_chaussure" value="43">43
                                                        </label>
                                                    </div>
                                                </div>

                                                <div class="col-sm-3">
                                                     <div class="checkbox">
                                                        <label>
                                                          <input type="checkbox" name="taille_chaussure[]" class="taille_chaussure" value="44">44
                                                        </label>
                                                    </div>
                                                </div>

                                               


                                               
                                               
                                                
                                            </div>


                                             <div class="row">

                                                 <div class="col-sm-3">
                                                     <div class="checkbox">
                                                        <label>
                                                          <input type="checkbox" name="taille_chaussure[]" class="taille_chaussure" value="45">45
                                                        </label>
                                                    </div>
                                                </div>

                                                <div class="col-sm-3">
                                                     <div class="checkbox">
                                                        <label>
                                                          <input type="checkbox" name="taille_chaussure[]" class="taille_chaussure" value="46">46
                                                        </label>
                                                    </div>
                                                </div>

                                                 <div class="col-sm-3">
                                                     <div class="checkbox">
                                                        <label>
                                                          <input type="checkbox" name="taille_chaussure[]" class="taille_chaussure" value="47">47
                                                        </label>
                                                    </div>
                                                </div>

                                                <div class="col-sm-3">
                                                     <div class="checkbox">
                                                        <label>
                                                          <input type="checkbox" name="taille_chaussure[]" class="taille_chaussure" value="48">48
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

    $("#succes_box").hide();

    var init_taille="";
    localStorage.setItem('taille', init_taille);

    var init_couleur="";
    localStorage.setItem('couleur', init_couleur);
    var init_taille_chaussure="";
    localStorage.setItem('taille_chaussure', init_taille_chaussure);

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

                    


                    var caract_couleur=localStorage.getItem('couleur');
                    var caract_taille=localStorage.getItem('taille');

                    var caract_taille_chaussure=localStorage.getItem('taille_chaussure');

                     var youtube_lien=$("#youtube_lien").val();
                    var reduction_pourcent=$("#reduction_pourcent").val();
                    

                    var id_marque=$("#id_marque").val();
                    var id_fournisseur=$("#id_fournisseur").val();
                    var id_categorie_produit=$("#id_categorie_produit").val();

                    var status_mise_en_ligne=$("#status_mise_en_ligne").val();

                  

                   

                    

                   

                  
                    
                   
                    
                    
                    
                    
                $.ajax({

                                           type: 'POST',
                                           url: '<?php echo base_url(); ?>administration/ajaxAjoutProduit',
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


                    var taille=localStorage.getItem('taille');

                    var nouvelle_valeur_taille=taille+"/"+($(this).val());

                    localStorage.setItem('taille', nouvelle_valeur_taille);

                    console.log(nouvelle_valeur_taille);

                     
               
                      

                    });

                  $( ".couleur" ).click(function() {


                    var couleur=localStorage.getItem('couleur');

                    var nouvelle_valeur_couleur=couleur+"/"+($(this).val());

                    localStorage.setItem('couleur', nouvelle_valeur_couleur);

                    console.log(nouvelle_valeur_couleur);

                     
               
                      

                    });

                   $( ".taille_chaussure" ).click(function() {


                    var taille_chaussure=localStorage.getItem('taille_chaussure');

                    var nouvelle_valeur_taille_chaussure=taille_chaussure+"/"+($(this).val());

                    localStorage.setItem('taille_chaussure', nouvelle_valeur_taille_chaussure);

                    console.log(nouvelle_valeur_taille_chaussure);

                     
               
                      

                    });

        (function(i, s, o, g, r, a, m) {
            i['GoogleAnalyticsObject'] = r;
            i[r] = i[r] || function() {
                (i[r].q = i[r].q || []).push(arguments)
            }, i[r].l = 1 * new Date();
            a = s.createElement(o),
                m = s.getElementsByTagName(o)[0];
            a.async = 1;
            a.src = g;
            m.parentNode.insertBefore(a, m)
        })(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');

        ga('create', 'UA-42863888-9', 'auto');
        ga('send', 'pageview');
    </script>
</body>
<!-- Mirrored from light.pinsupreme.com/forms_regular.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 10 Mar 2018 13:28:40 GMT -->

</html>