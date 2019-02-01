

<?php

    if(isset($infos_commande_id)){


     foreach($infos_commande_id as $info){

         $date=$info->date_heure;
         $montant=$info->montant_commande;
         $montant_final=$info->montant_commande;
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
<head>
	<title>Bon de commande</title>
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css">
</head>
<body>
<div class="container-fluid">
    <br>

    <div class="row">
        <div class="col-md-4"></div>
        <form>
            <input type=button name=print value="Imprimer en pdf" onClick="window.print()" class="col-md-4">
        </form>
        <div class="col-md-4"></div>
        
    </div>
	
	<div class="row">
		<div class="col-md-1"></div>
		<div class="col-md-4" style="margin-top: 20px; text-align: left;"><img src="https://maxshop.ci/uploads/logo/2018_03_19_16_36_05_95526765.png"></div>
		
		<div class="col-md-6" style="margin-top: 20px;">
			<h4>Bon de Livraison Num . <b><?php if(isset($id_commande)) echo $id_commande; ?></b></h4>
			<h4>Client .<b> <?php if(isset($client)) echo $client; ?> </b></h4>
		</div>
		<div class="col-md-1" style="margin-top: 20px; text-align: right;"></div>
		
	</div>
	<br>
	<div class="row">
		<div class="col-md-1"></div>
		<div class="col-md-10">
			<table class="table table-striped">
				<tr>
					<th style="text-align: center;">Informations sur la commande</th>
					<th style="text-align: center;">Informations sur le client</th>
					
				</tr>
				<tr>
					<td style="text-align: center;">
						<br>Date : <?php if(isset($date)) echo $date; ?>
                                                        <br>Montant : <?php if(isset($montant)) echo $montant; ?> Fcfa
					</td>
					<td style="text-align: center;">
						 <br>Client : <?php if(isset($client)) echo $client; ?>
                                                        <br>Téléphone : <?php if(isset($telephone_client)) echo $telephone_client; ?>
                                                        <br>Email : <?php if(isset($email_client)) echo $email_client; ?>
                                                        <br>Adresse : <?php if(isset($adresse)) echo $adresse; ?>

                                                        <br>Informations de livraisons : <?php if(isset($adresse_client)) echo $adresse_client; ?>
					</td>
					
				</tr>
  
            </table>

		</div>
		<div class="col-md-1"></div>
		
	</div>

	<div class="row">
		<div class="col-md-1"></div>
		<div class="col-md-10">
			 <table class="table table-bordered table-lg table-v2 table-striped">


                                            <thead>
                                                <tr>
                                                  <th>#</th>
                                                  
                                                  <th>Désignation</th>
                                                  <th>Coût unitaire</th>
                                                  <th>Quantité</th>
                                                  <th>Montant</th>
                                                  <th>Status</th>
                                                 
                                                </tr>
                                            </thead>
                                            <tbody>

                                    <?php

                    $list_produit_commande=$this->administration_model->get_informations_commande_produit($id_commande);

                    $compt=0;



                    if(isset($list_produit_commande)){



                      $compt=$compt+1;
                      foreach($list_produit_commande as $info){

                        $id_liaison_com_pro=$info->id_liaison_com_pro;

                        $id_produit=$info->id_produit;
                        $designation_produit=$this->administration_model->get_designation_produit($id_produit);
                        $prix_unitaire=$info->prix_unitaire;
                        $id_fournisseur=$this->administration_model->get_id_fournisseur_produit($id_produit);
                        $designation_fournisseur=$this->administration_model->get_nom_fournisseur_produit($id_fournisseur);
                        $contact_fournisseur=$this->administration_model->get_contact_fournisseur_produit($id_fournisseur);
                        $quantite=$info->quantite;

                        $status_fournisseur=$info->status_fournisseur;
                        $montant=$info->montant;

                       ?>
                        <tr>
                                                                    <td class="left"><?php echo $compt; ?></td>
                                                                   
                                                                    
                                                                    <td class="left"><?php echo $designation_produit; ?></td>
                                                                    <td class="left"><?php echo $prix_unitaire; ?></td>
                                                                    <td class="left"><?php echo $quantite; ?></td>
                                                                    <td class="left"><?php echo $montant; ?></td>
                                                                    <td class="left"></td>
                                                                   
                                                                      


                                                                
                                                           </tr>

                          

                     <?php }
                     
                      
                    

                                    ?>
                                                                        
                                                         

                                    <?php

                                }

                                    ?>
                                                

                                               
                                            </tbody>
                                        </table>
		</div>
		<div class="col-md-1"></div>
	</div>
	<div class="row">
		<div class="col-md-8"></div>
		<div class="col-md-3" style="text-align: right;">
			 <table class="table table-bordered table-lg table-v2 table-striped">
			 	<tr>
			 		<td>Frais de livraison </td>
			 		<td>Livraison offerte</td>
			 	</tr>

			 	<tr>
			 		<td>Montant TTC</td>
			 		<td><?php if(isset($montant_final)) echo $montant_final; ?> Fcfa</td>
			 	</tr>

                <tr>
                    <td>Date de livraison</td>
                    <td></td>
                </tr>

                 <tr>
                    <td>Signature client</td>
                    <td></td>
                </tr>
			 </table>
		</div>
		<div class="col-md-1"></div>
	</div>

   <div class="row">
        <div class="col-md-12" style="margin-top: 50px; text-align: center;">
            GNN SARL Riviéra rue du lycée Français <br>SERVICE APRES VENTE(SAV): 22 00 15 38
        </div>
    </div>

</div>

<script
			  src="https://code.jquery.com/jquery-3.3.1.js"
			  integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
			  crossorigin="anonymous"></script>
		
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>
</body>
</html>