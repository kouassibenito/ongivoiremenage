

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

                         <div class="alert alert-success" id="succes_box" role="alert"><strong>Succès! </strong> utilisateur modifié avec succès</div>

                   <div id="zone_id">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="element-wrapper">
                                    <h6 class="element-header">Modifier utilisateur</h6>
                                    <div class="element-box">

                                         <div class="element-wrapper">
                  

                                                </div>

                                        <form>
                                            <h5 class="form-header">Modifier utilisateur</h5>
                                            <div class="form-desc">Modifier utilisateur</div>

                      <?php

                        if(isset($infos_Utilisateur)){ 


                         foreach($infos_Utilisateur as $item_u){



                        ?>
                          <input class="form-control" id="id_administrateur"  type="hidden" value="<?php echo $id_administrateur;  ?>">
                                       <div class="row">
                                                <div class="col-sm-4">
                                                    <div class="form-group">
                                                        <label for="">Nom</label>
                                                       
                                                        <input class="form-control" id="nom_administrateur"  type="text" value="<?php echo $item_u->nom_administrateur;  ?>">
                                                    </div>
                                                </div>
                                                <div class="col-sm-4">
                                                    <div class="form-group">
                                                        <label for="">Prenom(s)</label>
                                                       
                                                        <input class="form-control" id="prenom_administrateur"  type="text" value="<?php echo $item_u->prenom_administrateur;  ?>">
                                                    </div>
                                                </div>
                                                <div class="col-sm-4">
                                                    <div class="form-group">
                                                        <label for="">Fonction</label>
                                                       
                                                        <input class="form-control" id="fonction_administrateur"  type="text" value="<?php echo $item_u->fonction_administrateur;  ?>">
                                                    </div>
                                                </div>   
                                            </div>


                                             <div class="row">
                                                <div class="col-sm-4">
                                                    <div class="form-group">
                                                        <label for="">Email</label>
                                                       
                                                        <input class="form-control" id="email_administrateur"  type="text" value="<?php echo $item_u->email_administrateur;  ?>">
                                                    </div>
                                                </div>
                                                <div class="col-sm-4">
                                                    <div class="form-group">
                                                        <label for="">Telephone</label>
                                                       
                                                        <input class="form-control" id="telephone_administrateur"  type="text" value="<?php echo $item_u->telephone_administrateur;  ?>">
                                                    </div>
                                                </div>

                                                 <div class="col-sm-4">
                                                    <div class="form-group">
                                                        <label for="">Mot de passe</label>
                                                       
                                                        <input class="form-control" id="password_administrateur"  type="text" value="<?php echo $item_u->password_administrateur;  ?>">
                                                    </div>
                                                </div>
                                                <div class="col-sm-4">
                                                    <div class="form-group">
                                                        <label for=""> Selectionner le profile utilisateur</label>
                                                        <select class="form-control" id="id_profile">
                                                            <option value="">selectionner un profile utilisateur</option>

                                                             <?php
                                                                if(isset($liste_profile)){ 
                                                                                         
                                                                    foreach ($liste_profile as $profile){
                                                            ?>
                                                                                    
                                                                 <option value="<?php echo $profile->id_administrateur_profile; ?>"><?php echo $profile->libelle_administrateur_profile; ?></option>

                                                             <?php
                                                                                     
                                                                 }
                                                             }
                                                                                    ?>
                                                           
                                                           
                                                        </select>
                                                    </div>
                                                </div>   
                                            </div>

                        <?php }

                         }

                       ?>
                           

                                            
                                             

     
                                            <div class="form-buttons-w">
                                                <button class="btn btn-primary" id="button_submit" type="submit"> Modifier</button>
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

   
    console.log( "ready!" );
    $("#succes_box").hide();
});

                       
$( "#button_submit" ).click(function(e) {
                    e.preventDefault();



                    var id_administrateur=$( "#id_administrateur" ).val();
                    var nom_administrateur=$( "#nom_administrateur" ).val();
                    var prenom_administrateur=$( "#prenom_administrateur" ).val();
                    var fonction_administrateur=$( "#fonction_administrateur" ).val();
                    var email_administrateur=$( "#email_administrateur" ).val();
                    var telephone_administrateur=$( "#telephone_administrateur" ).val();
                    var password_administrateur=$( "#password_administrateur" ).val();
                    var id_profile=$( "#id_profile" ).val();
                  
           
                    
                $.ajax({

                                           type: 'POST',
                                           url: '<?php echo base_url(); ?>administration/ajaxModifierUtilisateur',
                                           dataType:'html',
                                           data: {
                                               
                                               id_administrateur:id_administrateur,
                                               nom_administrateur:nom_administrateur,
                                               prenom_administrateur:prenom_administrateur,
                                               fonction_administrateur:fonction_administrateur,
                                               email_administrateur:email_administrateur,
                                               password_administrateur:password_administrateur,
                                               telephone_administrateur:telephone_administrateur,
                                               id_profile:id_profile,
                                               
                                    
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
       
    </script>
</body>

</html>