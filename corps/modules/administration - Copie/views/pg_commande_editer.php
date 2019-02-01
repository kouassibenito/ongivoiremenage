

<?php

    if(isset($infos_commande_id)){


     foreach($infos_commande_id as $info){

         $date=$info->date_heure;
         $montant=$info->montant_commande;
         $status=$info->status_commande;

         
         $id_client=$info->id_client;

         


         if($this->administration_model->get_informations_client_total($id_client)){

         $infos_client=$this->administration_model->get_informations_client_total($id_client);

           foreach($infos_client as $info_client){

             $client=$info_client->nom_client." ".$info_client->prenom_client;
             $telephone_client=$info_client->telephone_client;
             $email_client=$info_client->email_client;
             $adresse=$info_client->ville_client." ".$info_client->region_etat_client;
             $adresse_client=$info_client->adresse1_client;
             


             
             

           }

         }

         


     }

    }

        

    

?>

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
           
            <!--------------------
END - Mobile Menu
-------------------->
            <!--------------------
START - Main Menu
-------------------->
           
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

                         <div class="alert alert-success" id="succes_box" role="alert"><strong>Succès! </strong> commande edité avec succès.
                         </div>

                   <div id="zone_id">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="element-wrapper">
                                    <h6 class="element-header">editer une commande</h6>
                                     <a href="<?php echo base_url(); ?>administration/listeProduits_commande" class="btn btn-primary"> Retour à la page des commandes</a>
                                     <div class="form-buttons-w">
                                               
                                            </div>
                                    <div class="element-box">

                                        <h3 class="form-header">Informations sur la commande</h3>

                                        <form>

                                            
        
       
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="form-desc">
                                                        <h4 style="color: blue;">Informations Commande</h4>
                                                        <br>Date : <?php if(isset($date)) echo $date; ?>
                                                        <br>Montant : <?php if(isset($montant)) echo $montant; ?>
                                                        <br>Nombre de produits :
                                                        <br>Status :
                                                        <?php
                                                          if($status=="0"){ ?>

                                                          <span style="color: red">En attente de confirmation client</span>


                                                          <?php }

                                                         ?>

                                                          <?php
                                                          if($status=="1"){ ?>

                                                          <span style="color: orange">En attente de livraison fournisseur</span>


                                                          <?php }

                                                         ?>
                                                          <?php
                                                          if($status=="10"){ ?>

                                                          <span style="color: red">Commande annulée par le client</span>


                                                          <?php }

                                                         ?>

                                                         <?php
                                                          if($status=="2"){ ?>

                                                          <span style="color: blue">En attente de recuperation partenaire</span>


                                                          <?php }

                                                         ?>
                                                         <br>

                                                          <?php
                                                          if($status=="0"){ ?>

                                                          <div class="row" style="margin-bottom: 10px;">
                                                                 <a href="<?php echo base_url();?>administration/confirmation_commande_client/<?php echo $id_commande; ?>/1" class="btn btn-success">Confirmation de la commande par le client</a> 
                                                                
                                                            </div>

                                                          <?php }

                                                         ?>

                                                          <?php
                                                          if($status=="0" || $status=="1"){ ?>

                                                            <div class="row">
                                                                  <a href="<?php echo base_url();?>administration/confirmation_commande_client/<?php echo $id_commande; ?>/10" class="btn btn-danger">Annulation de la commande par le client</a>
                                                                
                                                            </div>

                                                            <?php }

                                                         ?>

                                                         <?php
                                                          if($status=="2"){ ?>

                                                            <div class="row">
                                                                  <a href="<?php echo base_url();?>administration/confirmation_commande_client/<?php echo $id_commande; ?>/3" class="btn btn-primary">En attente de recuperation partenaire</a>
                                                                
                                                            </div>

                                                            <?php }

                                                         ?>

                                                         <?php
                                                          if($status=="3"){ ?>

                                                            <div class="row">
                                                                  <a href="<?php echo base_url();?>administration/confirmation_commande_client/<?php echo $id_commande; ?>/4" class="btn btn-warning">En attente de livraison client</a>
                                                                  <br>
                                                                 
                                                                       <a href="<?php echo base_url();?>administration/confirmation_commande_client/<?php echo $id_commande; ?>/5" class="btn btn-danger" style="color: white;"> Echec livraison</a>
                                                                
                                                            </div>

                                                            <?php }

                                                         ?>

                                                         <?php
                                                          if($status=="4"){ ?>

                                                            <div class="row">
                                                                  <bouton  class="btn btn-success">Livré au client</bouton>
                                                                
                                                            </div>

                                                            <?php }

                                                         ?>

                                                          <?php

                                                          
                                                          if($status=="5"){ ?>

                                                            <div class="row">
                                                                  <bouton  class="btn btn-danger">Echec à la livraison client</bouton>
                                                                
                                                            </div>

                                                            <?php }

                                                         ?>



                                                        
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-desc">
                                                        <h4 style="color: blue;">Informations clients</h4>
                                                        
                                                           
                                                       
                                                      
                                                       
                                                        <br>Client : <?php if(isset($client)) echo $client; ?>
                                                        <br>Téléphone : <?php if(isset($telephone_client)) echo $telephone_client; ?>
                                                        <br>Email : <?php if(isset($email_client)) echo $email_client; ?>
                                                        <br>Adresse : <?php if(isset($adresse)) echo $adresse; ?>

                                                        <br>Informations de livraisons : <?php if(isset($adresse_client)) echo $adresse_client; ?>


                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-desc">
                                                        <h4 style="color: blue;">Facturation</h4>
                                                        <br>
                                                        <br>
                                                       <a href="<?php echo base_url(); ?>administration/generate_bon_commande/<?php echo $id_commande; ?>" class="btn btn-secondary">Bon de commande</a>&nbsp;&nbsp;
                                                       <a href="<?php echo base_url(); ?>administration/generate_bon_livraison/<?php echo $id_commande; ?>" class="btn btn-secondary">Bon de livraison</a>&nbsp;&nbsp;
                                                        <a href="<?php echo base_url(); ?>administration/generate_facture/<?php echo $id_commande; ?>"  class="btn btn-secondary">Facture</a


                                                      
                                                    </div>
                                                </div>
                                               
                                            </div>
                                            <div class="row">
                                                                                <div class="table-responsive">
                                    <table class="table table-bordered table-lg table-v2 table-striped">


                                            <thead>
                                                <tr>
                                                  <th>#</th>
                                                  <th>ID produit</th>
                                                  <th>Désignation</th>
                                                  <th>Coût unitaire</th>
                                                  <th>Quantité</th>
                                                  <th>Montant</th>
                                                  <th>Fournisseur</th>
                                                  <th>Contact fournisseur</th>
                                                  <th>Status</th>
                                                  <th> Action </th>
                                                </tr>
                                            </thead>
                                            <tbody>

                                    <?php

                    $list_produit_commande=$this->administration_model->get_informations_commande_produit($id_commande);

                    $compt=0;



                    if(isset($list_produit_commande)){



                      
                      foreach($list_produit_commande as $info){
                        $compt=$compt+1;

                        $id_liaison_com_pro=$info->id_liaison_com_pro;

                        $id_produit=$info->id_produit;
                        $designation_produit=$this->administration_model->get_designation_produit($id_produit);
                        $prix_unitaire=$info->prix_unitaire;
                        $id_fournisseur=$info->id_fournisseur;


                        $designation_fournisseur=$this->administration_model->get_nom_fournisseur_produit($id_fournisseur);
                        $contact_fournisseur=$this->administration_model->get_contact_fournisseur_produit($id_fournisseur);
                        $quantite=$info->quantite;

                        $status_fournisseur=$info->status_fournisseur;
                        $montant=$info->montant;

                       ?>
                        <tr>
                                                                    <td class="left"><?php echo $compt; ?></td>
                                                                    <td class="left"><?php echo $id_produit; ?></td>
                                                                    
                                                                    <td class="left"><?php echo $designation_produit; ?></td>
                                                                    <td class="left"><?php echo $prix_unitaire; ?></td>
                                                                    <td class="left"><?php echo $quantite; ?></td>
                                                                    <td class="left"><?php echo $montant; ?></td>
                                                                    <td class="left"><?php echo $designation_fournisseur; ?></td>
                                                                    <td class="left"><?php echo $contact_fournisseur; ?></td>
                                                                    <td class="left">En attente de livraison</td>
                                                                    <br>
                                                                      
                                                                    
                                                                   <?php
                                                                   if($status_fournisseur=="10"){ ?>
                                                                      
                                                                      <td class="row-actions">
                                                                       <button type="button" class="btn btn-danger"> Livraison annulée</button>
                                                                       <br>
                                                                       <a href="<?php echo base_url();?>administration/transfere_commande_client/<?php echo $id_liaison_com_pro; ?>" class="btn btn-info" style="color: white;"> A transferer</a><br>
                                                                       <a href="<?php echo base_url();?>administration/supprimer_commande_client/<?php echo $id_produit; ?>/<?php echo $id_commande; ?>/<?php echo $id_liaison_com_pro; ?>" class="btn btn-warning" style="color: white;"> Supprimer</a>
                                                                      </td>

                                                                   <?php } ?>

                                                                    <?php
                                                                   if($status_fournisseur=="0"){ ?>
                                                                      
                                                                     <td class="row-actions">
                                                                       <a href="<?php echo base_url();?>administration/livraison_commande_client/<?php echo $id_commande; ?>/<?php echo $id_liaison_com_pro; ?>/1" class="btn btn-danger" style="color: white;"> A Livré</a> <br>
                                                                       <a href="<?php echo base_url();?>administration/transfere_commande_client/<?php echo $id_liaison_com_pro; ?>" class="btn btn-info" style="color: white;"> A transferer</a><br>
                                                                       <a href="<?php echo base_url();?>administration/supprimer_commande_client/<?php echo $id_produit; ?>/<?php echo $id_commande; ?>/<?php echo $id_liaison_com_pro; ?>" class="btn btn-warning" style="color: white;"> Supprimer</a>
                                                                      </td>

                                                                   <?php } ?>

                                                                    <?php
                                                                   if($status_fournisseur=="1"){ ?>
                                                                      
                                                                     <td class="row-actions">
                                                                       <a href="<?php echo base_url();?>administration/livraison_commande_client/<?php echo $id_commande; ?>/<?php echo $id_liaison_com_pro; ?>/1" class="btn btn-success" style="color: white;"> Déjà Livré</a>
                                                                      </td>

                                                                   <?php } ?>

                                                                      


                                                                
                                                           </tr>

                          

                     <?php }
                     
                      
                    

                                    ?>
                                                                        
                                                         

                                    <?php

                                }

                                    ?>
                                                

                                               
                                            </tbody>
                                        </table>
                                
                                </div>
                                            </div>

                                            
                                            
    
        

                                             

     
                                            <div class="form-buttons-w">
                                                <a href="<?php echo base_url(); ?>vendeur/listeProduits_commande"> Retour à la page des commandes</a>
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

                $( "#other" ).click(function() {
                  $( "#target" ).click();
                });

       
    </script>
</body>
<!-- Mirrored from light.pinsupreme.com/forms_regular.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 10 Mar 2018 13:28:40 GMT -->

</html>