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

                         <div class="alert alert-success" id="succes_box" role="alert"><strong>Succès! </strong> zone produit 1 ajouté avec succès.
                         </div>

                   <div id="zone_id">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="element-wrapper">
                                    <h6 class="element-header">Ajout/modifier zone produit 1</h6>
                                    <div class="element-box">

                                        

                                              <div class="row">

                                                <div class="col-sm-4">
                                                    <div class="element-wrapper">
                           
                                                    <div class="element-box">


                                                       
                                                        <form action="<?php echo base_url('administration/uploadImgbloc1_gauche');?>" class="dropzone" id="my-awesome-dropzone" method="POST">
                                                            <input class="form-control" id="id_bloc_principale" name="id_bloc_principale"  type="hidden" value="<?php if(isset($id_bloc_principale)) echo $id_bloc_principale; ?>">
                                                            <div class="dz-message">
                                                                <div>
                                                                    <h3>Image gauche.</h3>
                                                                    <div class="text-muted"></div>
                                                                </div>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                                </div>

                                                <div class="col-sm-8">

                                                    <div class="form-group">
                                                         <div class="element-wrapper">
                           
                                                    <div class="element-box">
                                                       
                                                        <form action="<?php echo base_url('administration/uploadImgbloc1_droite');?>" class="dropzone" id="my-awesome-dropzone" method="POST">
                                                            <input class="form-control" id="id_bloc_principale" name="id_bloc_principale"  type="hidden" value="<?php if(isset($id_bloc_principale)) echo $id_bloc_principale; ?>">
                                                            <div class="dz-message">
                                                                <div>
                                                                    <h3>Image droite.</h3>
                                                                    <div class="text-muted"></div>
                                                                </div>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                                </div>
                                               
                                               
                                            </div>


                                           
                                       </div>

                                         <div class="row">
                                               

       
                                       <div class="col-sm-6">

                                                    <div class="form-group">
                                                        <label for=""> Selectionner le status de visibilité</label>
                                                        <select class="form-control" id="statut_visibilite">
                                                           
                                                                                    
                                                                 <option value="1">Afficher</option>
                                                                  <option value="0">Masquer</option>

                                                        </select>
                                                    </div>
                                                </div>
                                               
                                               
                                            </div>

                                            <div class="row">
                                               

                                                <div class="col-sm-6">

                                                     <div class="form-group">
                                                        <label for="">Url image gauche</label>
                                                       
                                                        <input class="form-control" id="url_img_gauche"  type="text" value="">
                                                    </div>
                                                </div>

                                                 <div class="col-sm-6">

                                                     <div class="form-group">
                                                        <label for="">Url image droite</label>
                                                       
                                                        <input class="form-control" id="url_img_droite"  type="text" value="">
                                                    </div>
                                                </div>
 





                                                
                                               
                                            </div>

                                             <div class="row">
                                               

                                                <div class="col-sm-6">

                                                     <div class="form-group">
                                                        <label for="">Titre du bloc</label>
                                                       
                                                        <input class="form-control" id="titre_bloc_principale"  type="text" value="">
                                                    </div>
                                                </div>

                                                 <div class="col-sm-6">

                                                     <div class="form-group">
                                                        <label for="">Sous-titre du bloc</label>
                                                       
                                                        <input class="form-control" id="sous_titre_bloc_principale"  type="text" value="">
                                                    </div>
                                                </div>
                                               
                                               
                                            </div>

                                             <div class="row">
                                               <div class="col-sm-12">
                                                <div class="form-group">
                                                        <label for=""> Selectionner la catégorie à afficher</label>
                                                        <select class="form-control" id="id_categorie_produit">
                                                            <option value="">Selectionner la catégorie à afficher</option>



                                                             <?php
                                                                if(isset($liste_categorie)){ 
                                                                                         
                                                                    foreach ($liste_categorie as $categorie){
                                                            ?>
                                                                                    
                                                                 <option value="<?php echo $categorie->id_categorie_produit; ?>"><?php echo $categorie->libelle_categorie_produit; ?></option>

                                                             <?php
                                                                                     
                                                                 }
                                                             }
                                                                                    ?>
                                                           

                                                           
                                                        </select>
                                                    </div>
                                               
                                                 </div>   
                                               
                                            </div>

                                            <div class="row">
                                               

                                                <div class="col-sm-4">

                                                     <div class="form-group">
                                                        <label for=""> Selectionner la catégorie s1</label>
                                                        <select class="form-control" id="id_categorie_s1">
                                                            <option value="">Selectionner la catégorie s1</option>


  <?php
                                                                if(isset($liste_categorie)){ 
                                                                                         
                                                                    foreach ($liste_categorie as $categorie){
                                                            ?>
                                                                                    
                                                                 <option value="<?php echo $categorie->id_categorie_produit; ?>"><?php echo $categorie->libelle_categorie_produit; ?></option>

                                                             <?php
                                                                                     
                                                                 }
                                                             }
                                                                                    ?>
                                                           
                                                           
                                                        </select>
                                                    </div>
                                                </div>

                                                 <div class="col-sm-4">

                                                     <div class="form-group">
                                                        <label for=""> Selectionner la catégorie s2</label>
                                                        <select class="form-control" id="id_categorie_s2">
                                                            <option value="">Selectionner la catégorie s2</option>



                                                            <?php
                                                                if(isset($liste_categorie)){ 
                                                                                         
                                                                    foreach ($liste_categorie as $categorie){
                                                            ?>
                                                                                    
                                                                 <option value="<?php echo $categorie->id_categorie_produit; ?>"><?php echo $categorie->libelle_categorie_produit; ?></option>

                                                             <?php
                                                                                     
                                                                 }
                                                             }
                                                                                    ?>
                                                           
                                                           
                                                        </select>
                                                    </div>
                                                </div>
                                               
                                                <div class="col-sm-4">

                                                     <div class="form-group">
                                                        <label for=""> Selectionner la catégorie s3</label>
                                                        <select class="form-control" id="id_categorie_s3">
                                                            <option value="">Selectionner la catégorie s3</option>



                                                              <?php
                                                                if(isset($liste_categorie)){ 
                                                                                         
                                                                    foreach ($liste_categorie as $categorie){
                                                            ?>
                                                                                    
                                                                 <option value="<?php echo $categorie->id_categorie_produit; ?>"><?php echo $categorie->libelle_categorie_produit; ?></option>

                                                             <?php
                                                                                     
                                                                 }
                                                             }
                                                                                    ?>
                                                           
                                                           
                                                        </select>
                                                    </div>
                                                </div>


                                                 <div class="col-sm-4">

                                                     <div class="form-group">
                                                        <label for=""> Selectionner la catégorie s4</label>
                                                        <select class="form-control" id="id_categorie_s4">
                                                            <option value="">Selectionner la catégorie s4</option>



                                                             <?php
                                                                if(isset($liste_categorie)){ 
                                                                                         
                                                                    foreach ($liste_categorie as $categorie){
                                                            ?>
                                                                                    
                                                                 <option value="<?php echo $categorie->id_categorie_produit; ?>"><?php echo $categorie->libelle_categorie_produit; ?></option>

                                                             <?php
                                                                                     
                                                                 }
                                                             }
                                                                                    ?>
                                                           
                                                           
                                                        </select>
                                                    </div>
                                                </div>

                                                 <div class="col-sm-4">

                                                     <div class="form-group">
                                                        <label for=""> Selectionner la catégorie s5</label>
                                                        <select class="form-control" id="id_categorie_s5">
                                                            <option value="">Selectionner la catégorie s5</option>



                                                             <?php
                                                                if(isset($liste_categorie)){ 
                                                                                         
                                                                    foreach ($liste_categorie as $categorie){
                                                            ?>
                                                                                    
                                                                 <option value="<?php echo $categorie->id_categorie_produit; ?>"><?php echo $categorie->libelle_categorie_produit; ?></option>

                                                             <?php
                                                                                     
                                                                 }
                                                             }
                                                                                    ?>
                                                           
                                                           
                                                        </select>
                                                    </div>
                                                </div>
                                               
                                                <div class="col-sm-4">

                                                     <div class="form-group">
                                                        <label for=""> Selectionner la catégorie s6</label>
                                                        <select class="form-control" id="id_categorie_s6">
                                                            <option value="">Selectionner la catégorie s6</option>



                                                              <?php
                                                                if(isset($liste_categorie)){ 
                                                                                         
                                                                    foreach ($liste_categorie as $categorie){
                                                            ?>
                                                                                    
                                                                 <option value="<?php echo $categorie->id_categorie_produit; ?>"><?php echo $categorie->libelle_categorie_produit; ?></option>

                                                             <?php
                                                                                     
                                                                 }
                                                             }
                                                                                    ?>
                                                           
                                                           
                                                        </select>
                                                    </div>
                                                </div>
                                               
                                            </div>

                                            <div class="form-buttons-w">
                                                <button class="btn btn-primary" id="button_submit" type="submit"> Modifier</button>
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
    console.log( "ready!" );
});

               $( "#button_submit" ).click(function(e) {
                    e.preventDefault();

                   

          
                    var id_bloc_principale="1";
                    var titre_bloc_principale=$( "#titre_bloc_principale" ).val();
                    var sous_titre_bloc_principale=$( "#sous_titre_bloc_principale" ).val();

                    var statut_visibilite=$( "#statut_visibilite" ).val();

                    var id_categorie_produit=$( "#id_categorie_produit" ).val();

                    var id_categorie_s1=$( "#id_categorie_s1" ).val();
                    var id_categorie_s2=$( "#id_categorie_s2" ).val();
                    var id_categorie_s3=$( "#id_categorie_s3" ).val();

                    var id_categorie_s4=$( "#id_categorie_s4" ).val();
                    var id_categorie_s5=$( "#id_categorie_s5" ).val();
                    var id_categorie_s6=$( "#id_categorie_s6" ).val();

                    var url_img_droite=$( "#url_img_droite" ).val();
                    var url_img_gauche=$( "#url_img_gauche" ).val();

                    


                    

                    
                    
                $.ajax({

                                           type: 'POST',
                                           url: '<?php echo base_url(); ?>administration/ajaxAjoutBloc1',
                                           dataType:'html',
                                           data: {
                                               
                                               id_bloc_principale:id_bloc_principale,
                                               titre_bloc_principale:titre_bloc_principale,
                                               sous_titre_bloc_principale:sous_titre_bloc_principale,
                                               statut_visibilite:statut_visibilite,
                                               id_categorie_produit:id_categorie_produit,
                                               id_categorie_s1:id_categorie_s1,
                                               id_categorie_s2:id_categorie_s2,
                                               id_categorie_s3:id_categorie_s3,
                                               id_categorie_s4:id_categorie_s4,
                                               id_categorie_s5:id_categorie_s5,
                                               id_categorie_s6:id_categorie_s6,

                                               url_img_gauche:url_img_gauche,
                                               url_img_droite:url_img_droite,
                                               
                                               
                                             
                                              
                                    
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


</html>