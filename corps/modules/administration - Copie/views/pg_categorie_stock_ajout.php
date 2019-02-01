

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

                         <div class="alert alert-success" id="succes_box" role="alert"><strong>Succès! </strong> catégorie stock ajouté avec succès</div>

                   <div id="zone_id">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="element-wrapper">
                                    <h6 class="element-header">Ajout nouveau catégorie stock</h6>
                                    <div class="element-box">

                                         <div class="element-wrapper">
                  

 <input class="form-control" id="id_categorie_produit"  type="hidden" value="<?php echo $id_categorie_produit; ?>">
         
                                
                                                </div>

                                        <form>
                                            <h5 class="form-header">Ajout nouveau catégorie stock</h5>
                                            <div class="form-desc">Ajout nouveau catégorie stock</div>


                
                                          
                                            <div class="row">
                                                 <div class="col-sm-4">
                                                    <div class="form-group">
                                                        <label for=""> Selectionner Categorie principale</label>
                                                        <select class="form-control" id="id_categorie_principale">
                                                            <option value="0">Aucun catégorie principale</option>
                                                            <?php 

                                                              if(isset($infosCategories_stock)){
                                                                 foreach($infosCategories_stock as $elmet){ 


                                                                 ?>

                                                                   <option value="<?php echo $elmet->id_categorie_produit;  ?>"><?php echo $elmet->libelle_categorie_produit;  ?></option>

                                                                <?php }

                                                                }

                                                            
                                                            ?>
                                                                  
                                                                 
                                                        </select>
                                                    </div>
                                                </div>   
                                                <div class="col-sm-4">
                                                    <div class="form-group">
                                                        <label for="">Categorie</label>
                                                       
                                                        <input class="form-control" id="libelle_categorie_produit"  type="text" value="">
                                                    </div>
                                                </div>
                                                </div>
                                                
                                              


                                             <div class="row">
                                                <div class="col-sm-8">
                                                    <div class="form-group">
                                                        <label for="">Commentaire</label>
                                                       
                                                        <input class="form-control" id="Commentaire"  type="text" value="">
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

   
    console.log( "ready!" );
    $("#succes_box").hide();
});

                       
$( "#button_submit" ).click(function(e) {
                    e.preventDefault();




                    var id_categorie_produit=$( "#id_categorie_produit" ).val();
                    var id_categorie_principale=$( "#id_categorie_principale" ).val();
                    var libelle_categorie_produit=$( "#libelle_categorie_produit" ).val();
                    var Commentaire=$( "#Commentaire" ).val();

                  
           
                    
                $.ajax({

                                           type: 'POST',
                                           url: '<?php echo base_url(); ?>administration/ajaxCategories_stock',
                                           dataType:'html',
                                           data: {
                                               
                                               id_categorie_produit:id_categorie_produit,
                                               id_categorie_principale:id_categorie_principale,
                                               libelle_categorie_produit:libelle_categorie_produit,
                                               Commentaire:Commentaire,
                                               
                                    
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
<!-- Mirrored from light.pinsupreme.com/forms_regular.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 10 Mar 2018 13:28:40 GMT -->

</html>