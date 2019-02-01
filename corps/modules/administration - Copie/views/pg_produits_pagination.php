<!DOCTYPE html>
<html>


<head>
    <?php include("templates/tpl_head_table.php"); ?>
</head>

<body class="menu-position-side menu-side-left full-screen with-content-panel">
    <div class="all-wrapper with-side-panel solid-bg-all">
        <div class="search-with-suggestions-w">
            <div class="search-with-suggestions-modal">
                <div class="element-search">
                    <input class="search-suggest-input" placeholder="Start typing to search..." type="text">
                    <div class="close-search-suggestions"><i class="os-icon os-icon-x"></i></div>
                    </input>
                </div>
                <div class="search-suggestions-group">
                    <div class="ssg-header">
                        <div class="ssg-icon">
                            <div class="os-icon os-icon-box"></div>
                        </div>
                        <div class="ssg-name">Projects</div>
                        <div class="ssg-info">24 Total</div>
                    </div>
                    <div class="ssg-content">
                        <div class="ssg-items ssg-items-boxed">
                            <a class="ssg-item" href="users_profile_big.html">
                                <div class="item-media" style="background-image: url(img/company6.png)"></div>
                                <div class="item-name">Integ<span>ration</span> with API</div>
                            </a>
                            <a class="ssg-item" href="users_profile_big.html">
                                <div class="item-media" style="background-image: url(img/company7.png)"></div>
                                <div class="item-name">Deve<span>lopm</span>ent Project</div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="search-suggestions-group">
                    <div class="ssg-header">
                        <div class="ssg-icon">
                            <div class="os-icon os-icon-users"></div>
                        </div>
                        <div class="ssg-name">Customers</div>
                        <div class="ssg-info">12 Total</div>
                    </div>
                    <div class="ssg-content">
                        <div class="ssg-items ssg-items-list">
                            <a class="ssg-item" href="users_profile_big.html">
                                <div class="item-media" style="background-image: url(img/avatar1.jpg)"></div>
                                <div class="item-name">John Ma<span>yer</span>s</div>
                            </a>
                            <a class="ssg-item" href="users_profile_big.html">
                                <div class="item-media" style="background-image: url(img/avatar2.jpg)"></div>
                                <div class="item-name">Th<span>omas</span> Mullier</div>
                            </a>
                            <a class="ssg-item" href="users_profile_big.html">
                                <div class="item-media" style="background-image: url(img/avatar3.jpg)"></div>
                                <div class="item-name">Kim C<span>olli</span>ns</div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="search-suggestions-group">
                    <div class="ssg-header">
                        <div class="ssg-icon">
                            <div class="os-icon os-icon-folder"></div>
                        </div>
                        <div class="ssg-name">Files</div>
                        <div class="ssg-info">17 Total</div>
                    </div>
                    <div class="ssg-content">
                        <div class="ssg-items ssg-items-blocks">
                            <a class="ssg-item" href="#">
                                <div class="item-icon"><i class="os-icon os-icon-file-text"></i></div>
                                <div class="item-name">Work<span>Not</span>e.txt</div>
                            </a>
                            <a class="ssg-item" href="#">
                                <div class="item-icon"><i class="os-icon os-icon-film"></i></div>
                                <div class="item-name">V<span>ideo</span>.avi</div>
                            </a>
                            <a class="ssg-item" href="#">
                                <div class="item-icon"><i class="os-icon os-icon-database"></i></div>
                                <div class="item-name">User<span>Tabl</span>e.sql</div>
                            </a>
                            <a class="ssg-item" href="#">
                                <div class="item-icon"><i class="os-icon os-icon-image"></i></div>
                                <div class="item-name">wed<span>din</span>g.jpg</div>
                            </a>
                        </div>
                        <div class="ssg-nothing-found">
                            <div class="icon-w"><i class="os-icon os-icon-eye-off"></i></div><span>No files were found. Try changing your query...</span></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="layout-w">
            <!--------------------
START - Mobile Menu
-------------------->
           <?php //include("templates/tpl_mobile_resp.php"); ?>
            <!--------------------
END - Mobile Menu
-------------------->
            <!--------------------
START - Main Menu
-------------------->
           <?php //include("templates/tpl_main_menu.php"); ?>
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
                <!--------------------
START - Breadcrumbs
-------------------->
                
                <!--------------------
END - Breadcrumbs
-------------------->
                <div class="content-panel-toggler"><i class="os-icon os-icon-grid-squares-22"></i><span>Sidebar</span></div>
                <div class="content-i">
                    <div class="content-box">
                        <div class="element-wrapper">
                            


                            <h6 class="element-header"><?php echo $page_main_title; ?></h6>
                             <a href="<?php echo base_url(); ?>administration" class="mr-2 mb-2 btn btn-outline-primary" type="button"> Retour au tableau de bords</a>
                            <div class="element-box">
                                <h5 class="form-header"><?php echo $page_main_title1; ?></h5>
                                <div class="form-desc"><?php echo $page_main_title2; ?> </div>

                                <div class="element-box-content">
                                    <a href="<?php echo base_url();?>administration/ajoutProduit" class="mr-2 mb-2 btn btn-outline-primary" type="button"> Ajouter un nouveau produit</a>
                                   
                                </div>


                                 <div class="element-box-content">
                                    <a href="<?php echo base_url();?>administration/listeProduits_pagination" class="mr-2 mb-2 btn btn-outline-primary" type="button"> Tous les produits (<?php echo $total_produits; ?>)</a>

                                     <a href="<?php echo base_url();?>administration/listeProduits_pagination_enligne" class="mr-2 mb-2 btn btn-outline-primary" type="button"> Produit(s) en ligne (<?php echo $total_produits_enligne; ?>)</a>
                                    <a href="<?php echo base_url();?>administration/listeProduits_pagination_horsligne" class="mr-2 mb-2 btn btn-outline-primary" type="button"> Produit(s) hors ligne (<?php echo $total_produits_horsligne;; ?>)</a>

                                     <a href="<?php echo base_url();?>administration/listeProduits_pagination_avec_image" class="mr-2 mb-2 btn btn-outline-primary" type="button"> Produit(s) avec images (<?php echo $total_produits_avec_image;; ?>)</a>


                                     <a href="<?php echo base_url();?>administration/listeProduits_pagination_sans_image" class="mr-2 mb-2 btn btn-outline-primary" type="button"> Produits sans images (<?php echo $total_produits_sans_image;; ?>)</a>
                                   
                                </div>
                                <br><br/>
                                Rechercher un produit:<input type="text" id="search_boxID" placeholder="" size="80">
                                 <br><br/>
                               
                                <div class="table-responsive" id="tabl_filtre">
                                    <table class="table table-bordered table-lg table-v2 table-striped">


       

   

                                            <thead>
                                                <tr>
                                                <th>#</th>
                                                <th>Libellé produit </th>
                                                <th>Prix produit</th>
                                                <th>prix solde</th>
                                                <th>categorie</th>
                                                <th>Date ajout</th>
                                                <th>Status en ligne</th>
                                                <th>Image</th>
                                                                 
                                                <th> Action </th>
                                                </tr>
                                            </thead>
                                            <tbody>

                                            <?php
                                              $page_index=0;
                                              $min_i=0;
                                              $max_i=0;
                                              if(isset($page_i)){



                                                if($page_i ==1){


                                                  $compt=0;


                                                 }else{


                                                   $max_i=$page_i * 30;
                                                   $min_i=$max_i - 30;

                                                  $compt=$min_i;





                                               }


                                              }


                                            ?>
                                           <?php

                                                                                           $nb_produit_sI=0;
                                                                                           $nb_produit_aI=0;

                                                                                           if($compteur_produit ==1){

                                                                                             $compt=0;
                                                                                           }
                                                                                     
                                                                                      if(isset($infos_produit_limit)){
                                                                                      

                                                                                          foreach ($infos_produit_limit as $produit){ 
                                                                                              
                                                                                              $id_produits=$produit->id_produits;
                                                                                              $nom_produit=$produit->nom_produit;
                                                                                              $prix_produit=$produit->prix_produit;
                                                                                              $prix_solde=$produit->prix_solde;

                                                                                              $id_categorie_produit=$produit->id_categorie_produit;

                                                                                              $categorie=$this->administration_model->infosCategorie($id_categorie_produit);

                                                                                              $status_mise_en_ligne=$produit->status_mise_en_ligne;


                                                                                              $status_image=$produit->status_image;



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
                                                    
                                                  ?> </td>
                                                                                        
                                               <td class="left"><?php echo $prix_produit; ?></td>
                                               <td class="left"><?php echo $prix_solde; ?></td>
                                               <td class="left"><?php echo $categorie; ?></td>
                                               <td class="left"><?php echo $date_ajout; ?></td>

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
                                                 
                                                  <td class="row-actions">
                                                    <a href="<?php echo base_url(); ?>administration/editerProduits/<?php echo $id_produits; ?>"><i class="os-icon os-icon-ui-49"></i></a>
                                                    <!--<a href="#"><i class="os-icon os-icon-grid-10"></i></a> -->
                                                    <a class="danger" href="<?php echo base_url(); ?>administration/suppressionProduit/<?php echo $id_produits; ?>"><i class="os-icon os-icon-ui-15"></i></a>
                                                    <a href="<?php echo base_url(); ?>administration/dupliquerProduits/<?php echo $id_produits; ?>" class="mr-2 mb-2 btn btn-outline-primary"> Dupliquer</a>
                                                  </td>
                                                </tr>
                                                

                                                <?php }
                                                    }
                                                ?>
                                            </tbody>
                                        </table>
                                
                                </div>
                            </div>
                        </div>
                        <div class="table-responsive">
                                        
                        </div>

                        

                        <input type="hidden" value="<?php echo $nb_produit_sI; ?>" id="nb_produit_sI">
                        <input type="hidden" value="<?php echo $nb_produit_aI; ?>" id="nb_produit_aI">
                                    <!--------------------
END - Table with actions
------------------            -->
                                    <!--------------------
START - Controls below table
------------------  -->
                                    <div class="controls-below-table">
                                        <div class="table-records-info">
                                            <?php
                                              $page_index=0;
                                              $min_i=0;
                                              $max_i=0;
                                              if(isset($page_i)){



                                                if($page_i ==1){


                                                echo "Affichage des enregistrements 1 - 5";


                                                 }else{


                                                   $max_i=$page_i * 30;
                                                   $min_i=$max_i - 30;

                                                   echo "Affichage des enregistrements ".$min_i." - ".$max_i;





                                               }


                                              }


                                            ?>
                                        
                                    </div>
                                        <div class="table-records-pages">
                                            <ul>
                                                
                                               

                                                <?php foreach ($links as $link) {
                                                echo "<li>". $link."</li>";
                                                } ?>
                                               
                                            </ul>
                                        </div>
                                    </div>
                                    <!--------------------
END - Controls below table
-------------------->
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
    <script src="bower_components/bootstrap/js/dist/tooltip.js"></script>
    <script src="<?php echo base_url(); ?>bower_components/bootstrap/js/dist/popover.js"></script>
    <script src="<?php echo base_url(); ?>js/demo_customizer4a76.js?version=4.3.0"></script>
    <script src="<?php echo base_url(); ?>js/main4a76.js?version=4.3.0"></script>
    <script>
        $( document ).ready(function() {
            console.log( "ready!" );

            var nb_produit_aI=$( "#nb_produit_aI" ).val();
              console.log(nb_produit_aI);

            var nb_produit_sI=$( "#nb_produit_sI" ).val();
              console.log(nb_produit_sI);


              $( "#lbl_si" ).text(nb_produit_sI);
              $( "#lbl_ai" ).text(nb_produit_aI);

              


        });
        $('#search_boxID').on('input', function(){


          var recherche_item=$('#search_boxID').val();
          $('#tabl_filtre').empty();

      

      

      //console.log(recherche_item);




      $.ajax({

                                           type: 'POST',
                                           url: '<?php echo base_url(); ?>administration/listeProduits_pagination_par_recherche',
                                           dataType:'html',
                                           data: {
                                               
                                               recherche_item:recherche_item,
                                              
                                               
                                    
                                           },
                                           success: function(response) {
                                            $('#tabl_filtre').empty();

                                             
                                               
                                               console.log(response);
                                               $(response).appendTo( $( "#tabl_filtre" ) );

                                               
                                               

                                              

                                           },
                                            complete: function(){
                                                
                                               
                                               
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
<!-- Mirrored from light.pinsupreme.com/tables_regular.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 10 Mar 2018 13:28:40 GMT -->

</html>