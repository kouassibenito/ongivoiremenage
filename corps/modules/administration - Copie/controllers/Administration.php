<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Administration extends MX_Controller {
        
    public function __construct()
	{
	
		parent::__construct();
                
          $this->load->model('administration_model');
          $this->load->model('sms_model');  
      	
	}



	
	public function index()
	{

        $data["total_vente"]=$this->administration_model->total_vente();
        $data["total_profit_vente"]=$this->administration_model->total_profit_vente();
        $data["total_produit_en_stock"]=$this->administration_model->total_produit_en_stock();
        $data["total_produit_vendus"]=$this->administration_model->total_produit_vendus();
        $data["Total_produits_vendus"]=$this->administration_model->Total_produits_vendus();
        $data["total_profit_net_maxshop"]=$this->administration_model->total_profit_net_maxshop();
        $data["Total_commande"]=$this->administration_model->Total_commande();
        $data["total_produit_maxshop"]=$this->administration_model->total_produit_maxshop();
        $data["total_produit_maxshop_en_attente"]=$this->administration_model->total_produit_maxshop_en_attente();
        $data["total_produit_maxshop_validé"]=$this->administration_model->total_produit_maxshop_validé();
        $data["total_produit_maxshop_a_livrer"]=$this->administration_model->total_produit_maxshop_a_livrer();
        $data["total_produit_maxshop_livrer"]=$this->administration_model->total_produit_maxshop_livrer();
        $data["total_livraison_annuler_maxshop"]=$this->administration_model->total_livraison_annuler_maxshop();
        $data["total_vendeurs_maxshop"]=$this->administration_model->total_vendeurs_maxshop();

         $data["liste_commande_7"]=$this->administration_model->liste_commande();
        


        if($this->session->userdata('id_admin')){

           $id_profile=$this->session->userdata('id_profile');
           if($id_profile=="1" || $id_profile=="5"){

             $this->load->view("dashboard_manager_view",$data);

           }

           if($id_profile=="2"){

             $this->load->view("dashboard_vendeur_view");

           }

           if($id_profile=="3" || $id_profile=="6"){

             $this->load->view("dashboard_manager_view",$data);

           }

            if($id_profile=="4"){

             $this->load->view("dashboard_livreur_view");

           }


            

        }else{


            redirect("login");
        }

       
        
	}



    


   


    //infos de base


    public function infosBase()
    {
        $data["infos_generales"]= $this->administration_model->infosGenerales();
        $this->load->view("pg_Infos_base",$data);
    }

    public function upload_logo()
    {
        if (!empty($_FILES)) {
            $targetPath = getcwd() . '/uploads/logo';
            $config['allowed_types'] = 'gif|jpg|jpeg|png';
            $config['file_name'] = date("Y_m_d_H_i_s_").rand();
            $config['upload_path'] = $targetPath;
            $config['allowed_types'] = 'jpg|png';
            $this->load->library('upload', $config);
            $this->upload->initialize($config);
            if ($this->upload->do_upload('file')) {
                $fichier = $this->upload->data();
            }
                        
                        
                        $image_name= $fichier['file_name'];
                        
                        
                $data=array( 
                                'url_logo' =>$image_name,
                                
                            );
                
                $this->administration_model->modifier_infos_generale($data);
            

        }
    }

    public function ajaxAjoutInfosGenerale()
    {
          
            $this->form_validation->set_rules('message_bienvenue', 'message_bienvenue', 'trim');
            if ($this->form_validation->run() == FALSE){

            $errors = validation_errors();

            echo json_encode(['error'=>$errors]);

            }else{

               $message_bienvenue=$this->input->post('message_bienvenue');
                $telephone=$this->input->post('telephone');
                $localisation=$this->input->post('localisation');
                $mail_com=$this->input->post('mail_com');
                
                $mail_newsletter=$this->input->post('mail_newsletter');
                $facebook=$this->input->post('facebook');
                $twitter=$this->input->post('twitter');
                
                $googleplus=$this->input->post('googleplus');
                $youtube=$this->input->post('youtube');
                $copyright=$this->input->post('copyright');
                
                $data=array( 
                                'message_bienvenue' =>$message_bienvenue,
                                'telephone' =>$telephone,
                                 'localisation' =>$localisation,
                                 'email_commercial' =>$mail_com,
                    
                                'email_newsletter' =>$mail_newsletter,
                                'facebook' =>$facebook,                            
                                'twitter' =>$twitter,

                                'googleplus' =>$googleplus,
                                'youtube' =>$youtube,
                                'copyright' =>$copyright,

                            );
                
                $data_clean = $this->security->xss_clean($data);
                if($this->administration_model->modifier_infos_generale($data_clean)){

                     echo json_encode(['succes'=>"1"]);

                }else{

                     echo json_encode(['succes'=>"0"]);
                }
                
                

            }
                

       
    }

    //Menu principaux

    public function listeMenusPrincipaux()
    {
           $data["infos_MenusPrincipaux"]= $this->administration_model->infosMenus();         
           $this->load->view("pg_menusPrincipal",$data); 
    }

    public function ajoutMenusPrincipal()
    {     
           $data["id_menu_principale"]= $this->administration_model->clePrimaire(10); 
           $this->load->view("pg_menusPrincipal_ajout",$data); 
    }

    public function editerMenusPrincipal($id_menu_principale)
    {     
           $data["infos_MenusPrincipauxID"]= $this->administration_model->infosMenus_id($id_menu_principale);         
           $this->load->view("pg_menusPrincipal_modifier",$data);
    }

    function ajaxAjoutMenuPrincipale(){
            
            $this->form_validation->set_rules('menu_principale', 'menu_principale', 'trim');
            if ($this->form_validation->run() == FALSE){

            $errors = validation_errors();
            echo json_encode(['error'=>$errors]);

            }else{
                
                $id_menu_principale=$this->input->post('id_menu_principale');
                $menu_principale=$this->input->post('menu_principale');
                $commentaire=$this->input->post('commentaire');
                $nb_menu_principale=intval($this->administration_model->compterMenuPrincipale());
                $position=$nb_menu_principale+1;

                $data=array( 
                                'id_menu_principale' =>$id_menu_principale,
                                'libelle_menu_principale' =>$menu_principale,
                                'commentaire' =>$commentaire,
                                'position' =>$position,
                                
                            );
                
                $data_clean = $this->security->xss_clean($data);
                if($this->administration_model->ajoutMenuPrincipale($data_clean)){
                    
                     echo json_encode(['succes'=>"1"]);
                }else{
                    
                     echo json_encode(['succes'=>"0"]);
                }
            
            
            }
        
        }
    function ajaxediterMenuPrincipale(){
            
            $this->form_validation->set_rules('menu_principale', 'menu_principale', 'trim');
            if ($this->form_validation->run() == FALSE){

            $errors = validation_errors();
            echo json_encode(['error'=>$errors]);

            }else{
                
                $id_menu_principale=$this->input->post('id_menu_principale');
                $menu_principale=$this->input->post('menu_principale');
                $commentaire=$this->input->post('commentaire');
                

                $data=array( 
                                
                                'libelle_menu_principale' =>$menu_principale,
                                'commentaire' =>$commentaire,
                                
                                
                            );
                
                $data_clean = $this->security->xss_clean($data);
                if($this->administration_model->editerMenuPrincipale($id_menu_principale,$data_clean)){
                    
                     echo json_encode(['succes'=>"1"]);
                }else{
                    
                     echo json_encode(['succes'=>"0"]);
                }
            
            
            }
        
        }

    function supprimMenuPrincipal($id_menu_principale){

             $this->administration_model->supprim_menu_principale($id_menu_principale);
             $this->listeMenusPrincipaux();

    }

    //Menu Categories
    public function listeMenusCategories()
    {

           $data["infos_MenusCategories"]= $this->administration_model->infosMenusCategoriePrincipale();         
           $this->load->view("pg_menusCategories",$data); 
    }

     public function editerMenusCategories($id_menu_categorie_principale)
    {

           $data["infos_MenusCategoriesID"]= $this->administration_model->infosMenusCategoriesPrincipale_id($id_menu_categorie_principale);         
           $this->load->view("pg_menusCategories_editer",$data); 
    }

    public function ajoutMenusCategorie()
    {     
           $data["id_menu_categorie_principale"]= $this->administration_model->clePrimaire(10); 
           $this->load->view("pg_menusCategories_ajout",$data); 
    }

      function ajaxAjoutMenusCategoriePrincipale(){


        $this->form_validation->set_rules('id_menu_categorie_principale', 'id_menu_categorie_principale', 'trim');
        if ($this->form_validation->run() == FALSE){

            $errors = validation_errors();
            echo json_encode(['error'=>$errors]);

        }else{

            $id_menu_categorie_principale=$this->input->post('id_menu_categorie_principale');
            $categorie_principale=$this->input->post('categorie_principale');
            $commentaire=$this->input->post('commentaire');
            $nb_menu_categoriePrincipale=intval($this->admin_model->compterMenuCategoriesPrincipale());
            $position=$nb_menu_categoriePrincipale+1;
            $url_img=$this->admin_model->infosCategoriesPrincipaleImg($id_menu_categorie_principale);

            $data=array(
                'id_menu_categorie_principale' =>$id_menu_categorie_principale,
                'libelle_menu_categorie_principale ' =>$categorie_principale,
                'commentaire_menu_categorie_principale' =>$commentaire,
                'url_img_categorie_principale' =>$url_img,
                'position_menu_categorie_principale' =>$position,

            );

            $data_clean = $this->security->xss_clean($data);
            if($this->admin_model->ajoutMenuCategoriesPrincipale($data_clean)){

                echo json_encode(['succes'=>"1"]);
            }else{

                echo json_encode(['succes'=>"0"]);
            }


        }

    }

    function ajaxEditerMenusCategoriePrincipale(){


        $this->form_validation->set_rules('id_menu_categorie_principale', 'id_menu_categorie_principale', 'trim');
        if ($this->form_validation->run() == FALSE){

            $errors = validation_errors();
            echo json_encode(['error'=>$errors]);

        }else{

            $id_menu_categorie_principale=$this->input->post('id_menu_categorie_principale');
            $categorie_principale=$this->input->post('categorie_principale');
            $commentaire=$this->input->post('commentaire');


            
            

            $data=array(
                
                'libelle_menu_categorie_principale ' =>$categorie_principale,
                'commentaire_menu_categorie_principale' =>$commentaire,
               

            );

            print_r($data);




            $data_clean = $this->security->xss_clean($data);
            if($this->administration_model->modifier_MenuCategoriesPrincipale($id_menu_categorie_principale,$data_clean)){


               echo json_encode(['succes'=>"1"]);
            }else{

                echo json_encode(['succes'=>"0"]);
            }


        }

    }

     public function listeLivraison_par_recherche(){

        $recherche_livraisons=$this->input->post('recherche_item');
        $data["infos_commande_vendeur"]=$this->administration_model->recherche_livraison($recherche_livraisons);
        $this->load->view("pg_livraison_filter", $data);

     }

    public function listeProduits_livraison(){


        
        $data["infos_commande_vendeur"]= $this->administration_model->infosProduits_livraison();

        $this->load->view("pg_livraison",$data);


    }


        public function uploadImgMenusCategoriePrincipale()
        {
            if (!empty($_FILES)) {
                $targetPath = getcwd() . '/uploads/menu_categories';
                $config['allowed_types'] = 'gif|jpg|jpeg|png';
                $config['file_name'] = date("Y_m_d_H_i_s_").rand();
                $config['upload_path'] = $targetPath;
                $config['allowed_types'] = 'jpg|png';
                $this->load->library('upload', $config);
                $this->upload->initialize($config);
                if ($this->upload->do_upload('file')) {
                    $fichier = $this->upload->data();
                }


                $image_name= $fichier['file_name'];

         
               

                $id_menu_categorie_principale=$this->input->post('id_menu_categorie_principale');
                $data=array(
                    'id_menu_categorie_principale' =>$id_menu_categorie_principale,
                    'img' =>$image_name,

                );
                if($this->administration_model->ajoutMenuPrincipaleImg($data)){

                    echo json_encode(['succes'=>"1"]);
                }else{

                    echo json_encode(['succes'=>"0"]);
                }

            }
        }

        public function uploadediterImgMenusCategoriePrincipale()
        {
            if (!empty($_FILES)) {
                $targetPath = getcwd() . '/uploads/menu_categories';
                $config['allowed_types'] = 'gif|jpg|jpeg|png';
                $config['file_name'] = date("Y_m_d_H_i_s_").rand();
                $config['upload_path'] = $targetPath;
                $config['allowed_types'] = 'jpg|png';
                $this->load->library('upload', $config);
                $this->upload->initialize($config);
                if ($this->upload->do_upload('file')) {
                    $fichier = $this->upload->data();
                }


                $image_name= $fichier['file_name'];

         
               

                $id_menu_categorie_principale=$this->input->post('id_menu_categorie_principale');  

                
                $data=array(
                    
                    'url_img_categorie_principale' =>$image_name,

                );
                if($this->administration_model->modifier_MenuCategoriesPrincipale($id_menu_categorie_principale,$data)){

                    echo json_encode(['succes'=>"1"]);
                }else{

                    echo json_encode(['succes'=>"0"]);
                }

            }
        }

    function supprim_MenusCategoriePrincipale($id_menu_categorie_principale){


        $this->administration_model->supprim_MenuCategoriesPrincipale($id_menu_categorie_principale);
        $this->listeMenusCategories();


      }

         //flash info

    public function listeFlashInfos()
    {
           $data["infos_FlashInfos"]= $this->administration_model->infosFlashInfos();          
           $this->load->view("pg_flashInfo",$data); 
    }

    public function editerlashInfos($id_flash_infos)
    {

        $data["infos_FlashInfos"]= $this->administration_model->infosFlashInfos_id($id_flash_infos);
        $this->load->view("pg_flashInfo_editer",$data); 
       
    }

    public function ajoutFlashInfos()
    {     
           $data["id_flash_infos"]= $this->administration_model->clePrimaire(10);   
           $this->load->view("pg_flashInfo_ajout",$data); 
    }

    function ajaxAjoutFlashInfos(){
            
          
            $this->form_validation->set_rules('id_flash_infos', 'id_flash_infos', 'trim');
            if ($this->form_validation->run() == FALSE){

            $errors = validation_errors();
            echo json_encode(['error'=>$errors]);

            }else{


                                             
                
        
                $id_flash_infos=$this->input->post('id_flash_infos');
                $titre_flash_info=$this->input->post('titre_flash_info');
                $etiquette_flash_infos=$this->input->post('etiquette_flash_infos');
                $infos_flash_infos=$this->input->post('infos_flash_infos');
                $commentaire=$this->input->post('commentaire');

                $nb_flash_infos=intval($this->administration_model->compterFlashInfos());
                $position=$nb_flash_infos+1;
                

                $data=array( 
                                'id_flash_infos' =>$id_flash_infos,
                                'titre_flash_info' =>$titre_flash_info,
                                'etiquette_flash_infos' =>$etiquette_flash_infos,
                                'infos_flash_infos' =>$infos_flash_infos,
                                'commentaire' =>$commentaire,
                                'position_flash_info' =>$position,
                                
                            );
                
                
                $data_clean = $this->security->xss_clean($data);
                
                
                if($this->administration_model->ajoutFlashInfos($data_clean)){
                    
                     echo json_encode(['succes'=>"1"]);
                }else{
                    
                     echo json_encode(['succes'=>"0"]);
                }
            
            
            }
        
        }

        function ajaxEditerFlashInfos(){
            
          
            $this->form_validation->set_rules('id_flash_infos', 'id_flash_infos', 'trim');
            if ($this->form_validation->run() == FALSE){

            $errors = validation_errors();
            echo json_encode(['error'=>$errors]);

            }else{


                                             
                
        
                $id_flash_infos=$this->input->post('id_flash_infos');
                $titre_flash_info=$this->input->post('titre_flash_info');
                $etiquette_flash_infos=$this->input->post('etiquette_flash_infos');
                $infos_flash_infos=$this->input->post('infos_flash_infos');
                $commentaire=$this->input->post('commentaire');

                
                

                $data=array( 
                                
                                'titre_flash_info' =>$titre_flash_info,
                                'etiquette_flash_infos' =>$etiquette_flash_infos,
                                'infos_flash_infos' =>$infos_flash_infos,
                                'commentaire' =>$commentaire,
                                
                                
                            );
                
                
                $data_clean = $this->security->xss_clean($data);
                
                
                if($this->administration_model->modifierFlashInfos($id_flash_infos,$data_clean)){
                    
                     echo json_encode(['succes'=>"1"]);
                }else{
                    
                     echo json_encode(['succes'=>"0"]);
                }
            
            
            }
        
        }

    function supprim_flashInfo($id_flash_infos){


        $this->administration_model->supprim_flash_info($id_flash_infos);
        $this->listeFlashInfos();


      }

    //Rubriques
    public function listeRubriques()
    {

       
       $data["infos_rubriques"]= $this->administration_model->infosRubriques();          
       $this->load->view("pg_menusRubriques",$data); 
    }


    public function ajoutRubrique()
    {

        $data["id_rubrique"]= $this->administration_model->clePrimaire(10);
        $data["liste_menu_p"]= $this->administration_model->infosMenus();
        $this->load->view("pg_menusRubriques_ajout",$data); 
       
    }

     public function editerRubrique($id_menu_group)
    {

       $data["infos_rubriquesID"]= $this->administration_model->infosRubriquesID($id_menu_group); 
       $data["liste_menu_p"]= $this->administration_model->infosMenus();
       $this->load->view("pg_menusRubriques_editer",$data);  
       
    }

    public function uploadImgRubriques()
    {
        if (!empty($_FILES)) {
            $targetPath = getcwd() . '/uploads/rubrique_menu_principal';
            $config['allowed_types'] = 'gif|jpg|jpeg|png';
            $config['file_name'] = date("Y_m_d_H_i_s_").rand();
            $config['upload_path'] = $targetPath;
            $config['allowed_types'] = 'jpg|png';
            $this->load->library('upload', $config);
            $this->upload->initialize($config);
            if ($this->upload->do_upload('file')) {
                $fichier = $this->upload->data();
            }


            $image_name= $fichier['file_name'];

            $id_menu_group=$this->input->post('id_rubrique');
            $data=array(
                'id_rubrique' =>$id_menu_group,
                'libelle_img' =>$image_name,

            );
            if($this->administration_model->ajoutrubrique_temp($data)){

                echo json_encode(['succes'=>"1"]);
            }else{

                echo json_encode(['succes'=>"0"]);
            }

        }
    }

    public function uploadEditerImgRubriques()
    {
        if (!empty($_FILES)) {
            $targetPath = getcwd() . '/uploads/rubrique_menu_principal';
            $config['allowed_types'] = 'gif|jpg|jpeg|png';
            $config['file_name'] = date("Y_m_d_H_i_s_").rand();
            $config['upload_path'] = $targetPath;
            $config['allowed_types'] = 'jpg|png';
            $this->load->library('upload', $config);
            $this->upload->initialize($config);
            if ($this->upload->do_upload('file')) {
                $fichier = $this->upload->data();
            }


            $image_name= $fichier['file_name'];

            $id_menu_group=$this->input->post('id_rubrique');
            $data=array(
                
                'url_img' =>$image_name,

            );
            if($this->administration_model->modifier_rubrique($id_menu_group,$data)){

                echo json_encode(['succes'=>"1"]);
            }else{

                echo json_encode(['succes'=>"0"]);
            }

        }
    }


    public function uploadEditerCImgRubriques()
    {
        if (!empty($_FILES)) {
            $targetPath = getcwd() . '/uploads/rubrique_menu_principal';
            $config['allowed_types'] = 'gif|jpg|jpeg|png';
            $config['file_name'] = date("Y_m_d_H_i_s_").rand();
            $config['upload_path'] = $targetPath;
            $config['allowed_types'] = 'jpg|png';
            $this->load->library('upload', $config);
            $this->upload->initialize($config);
            if ($this->upload->do_upload('file')) {
                $fichier = $this->upload->data();
            }


            $image_name= $fichier['file_name'];

            $id_menu_group=$this->input->post('id_rubrique');
            $data=array(
                
                'url_img' =>$image_name,

            );
            if($this->administration_model->modifier_rubrique($id_menu_group,$data)){

                echo json_encode(['succes'=>"1"]);
            }else{

                echo json_encode(['succes'=>"0"]);
            }

        }
    }

     function ajaxAjoutRubriques(){


        $this->form_validation->set_rules('libelle_rubrique', 'libelle_rubrique', 'trim');
        if ($this->form_validation->run() == FALSE){

            $errors = validation_errors();
            echo json_encode(['error'=>$errors]);

        }else{

            $libelle_rubrique=$this->input->post('libelle_rubrique');
            $id_menu_principale=$this->input->post('id_menu_principale');
            $id_rubrique=$this->input->post('id_rubrique');
            $commentaire=$this->input->post('commentaire');
            $nb_rubrique=intval($this->administration_model->compterRubrique());
            $position=$nb_rubrique+1;
            $url_img=$this->administration_model->infosImgRubriquesID($id_rubrique);

            $type="0";


            $data=array(
                'id_menu_group' =>$id_rubrique,
                'libelle_menu_group' =>$libelle_rubrique,
                'commentaire' =>$commentaire,
                'id_menu_principale' =>$id_menu_principale,
                'url_img' =>$url_img,
                'position' =>$position,
                'type' =>$type,

            );


            $data_clean = $this->security->xss_clean($data);


            if($this->administration_model->ajoutrubrique($data_clean)){

                echo json_encode(['succes'=>"1"]);
            }else{

                echo json_encode(['succes'=>"0"]);
            }


        }

    }

     function ajaxEditerRubriques(){


        $this->form_validation->set_rules('libelle_rubrique', 'libelle_rubrique', 'trim');
        if ($this->form_validation->run() == FALSE){

            $errors = validation_errors();
            echo json_encode(['error'=>$errors]);

        }else{

            $libelle_rubrique=$this->input->post('libelle_rubrique');
            $id_menu_principale=$this->input->post('id_menu_principale');
            $id_rubrique=$this->input->post('id_rubrique');
            $commentaire=$this->input->post('commentaire');
            

            $type="0";


            $data=array(
                
                'libelle_menu_group' =>$libelle_rubrique,
                'commentaire' =>$commentaire,
                'id_menu_principale' =>$id_menu_principale,
                

            );


            $data_clean = $this->security->xss_clean($data);


            if($this->administration_model->modifier_rubrique($id_rubrique,$data_clean)){

                echo json_encode(['succes'=>"1"]);
            }else{

                echo json_encode(['succes'=>"0"]);
            }


        }

    }

    function supprim_rubrique($id_menu_group){


        $this->administration_model->supprim_rubrique($id_menu_group);
        $this->listeRubriques();


      }



     //Rubriques
    public function listeRubriquesCategorie()
    {

      $data["infos_rubriques"]= $this->administration_model->infosRubriquesCategories();          
      $this->load->view("pg_menusRubriquesCategories",$data); 
    }


    public function editerRubriqueCategorie($id_menu_group)
    {

        $data["infos_rubriquesID"]= $this->administration_model->infosRubriquesIDC($id_menu_group); 
        $data["liste_menu_c"]= $this->administration_model->infosMenuCategoriesPrincipale();
        $this->load->view("pg_menusRubriqueCategorie_editer",$data); 
       
    }

    public function ajoutRubriqueCategorie()
    {

        $data["id_rubrique"]= $this->administration_model->clePrimaire(10);
        $data["liste_menu_c"]= $this->administration_model->infosMenuCategoriesPrincipale();
        $this->load->view("pg_menusRubriqueCategorie_ajout",$data); 
       
    }

    public function uploadImgRubriqueCategorie()
    {
        if (!empty($_FILES)) {
            $targetPath = getcwd() . '/uploads/rubrique_menu_categorie';
            $config['allowed_types'] = 'gif|jpg|jpeg|png';
            $config['file_name'] = date("Y_m_d_H_i_s_").rand();
            $config['upload_path'] = $targetPath;
            $config['allowed_types'] = 'jpg|png';
            $this->load->library('upload', $config);
            $this->upload->initialize($config);
            if ($this->upload->do_upload('file')) {
                $fichier = $this->upload->data();
            }


            $image_name= $fichier['file_name'];

            $id_menu_group=$this->input->post('id_rubrique');
            $data=array(
                'id_rubrique' =>$id_menu_group,
                'libelle_img' =>$image_name,

            );
            if($this->administration_model->ajoutrubrique_temp($data)){

                echo json_encode(['succes'=>"1"]);
            }else{

                echo json_encode(['succes'=>"0"]);
            }

        }
    }

     function ajaxAjoutRubriqueCategorie(){


        $this->form_validation->set_rules('libelle_rubrique', 'libelle_rubrique', 'trim');
        if ($this->form_validation->run() == FALSE){

            $errors = validation_errors();
            echo json_encode(['error'=>$errors]);

        }else{

            $libelle_rubrique=$this->input->post('libelle_rubrique');
            $id_menu_categorie_principale=$this->input->post('id_menu_categorie_principale');
            $id_rubrique=$this->input->post('id_rubrique');
            $commentaire=$this->input->post('commentaire');
            $nb_rubrique=intval($this->administration_model->compterRubriqueCategorie());
            $position=$nb_rubrique+1;
            $url_img=$this->administration_model->infosImgRubriquesID($id_rubrique);
            $type="1";


            $data=array(
                'id_menu_group' =>$id_rubrique,
                'libelle_menu_group' =>$libelle_rubrique,
                'commentaire' =>$commentaire,
                'id_menu_categorie_principale' =>$id_menu_categorie_principale,
                'url_img' =>$url_img,
                'position_categorie' =>$position,
                'type' =>$type,

            );


            $data_clean = $this->security->xss_clean($data);


            if($this->administration_model->ajoutrubrique($data_clean)){

                echo json_encode(['succes'=>"1"]);
            }else{

                echo json_encode(['succes'=>"0"]);
            }


        }

    }

     function ajaxModifierRubriqueCategorie(){


        $this->form_validation->set_rules('libelle_rubrique', 'libelle_rubrique', 'trim');
        if ($this->form_validation->run() == FALSE){

            $errors = validation_errors();
            echo json_encode(['error'=>$errors]);

        }else{

            $libelle_rubrique=$this->input->post('libelle_rubrique');
            $id_menu_categorie_principale=$this->input->post('id_menu_categorie_principale');
            $id_rubrique=$this->input->post('id_rubrique');
            $commentaire=$this->input->post('commentaire');
            


            $data=array(
                'id_menu_group' =>$id_rubrique,
                'libelle_menu_group' =>$libelle_rubrique,
                'commentaire' =>$commentaire,
                'id_menu_categorie_principale' =>$id_menu_categorie_principale,
                

            );


            $data_clean = $this->security->xss_clean($data);


            if($this->administration_model->modifier_rubrique($id_rubrique,$data_clean)){

                echo json_encode(['succes'=>"1"]);
            }else{

                echo json_encode(['succes'=>"0"]);
            }


        }

    }

    function supprim_rubriqueC($id_menu_group){


        $this->administration_model->supprim_rubrique($id_menu_group);
        $this->listeRubriquesCategorie();


      }



    //Sliders
    public function listeSliders()
    {

      $data["infos_sliders"]= $this->administration_model->infosSliders();         
      $this->load->view("pg_Sliders",$data); 
    }


    public function ajoutSlider()
    {

        $data["id_sliders"]= $this->administration_model->clePrimaire(10);
        $this->load->view("pg_Sliders_ajout",$data); 
       
    }

    public function editerSlider($id_sliders)
    {

        $data["infos_slider"]= $this->administration_model->infosSliderID($id_sliders);
        $this->load->view("pg_Sliders_editer",$data); 
       
    }

     public function uploadSlider()
    {
       if (!empty($_FILES)) {
            $targetPath = getcwd() . '/uploads/sliders';
            $config['allowed_types'] = 'gif|jpg|jpeg|png';
            $config['file_name'] = date("Y_m_d_H_i_s_").rand();
            $config['upload_path'] = $targetPath;
            $config['allowed_types'] = 'jpg|png';
            $this->load->library('upload', $config);
            $this->upload->initialize($config);
            if ($this->upload->do_upload('file')) {
                $fichier = $this->upload->data();
            }


            $image_name= $fichier['file_name'];
                         
                  $id_sliders=$this->input->post('id_sliders');

                  $data=array( 
                                
                                'id_sliders' =>$id_sliders,
                                'img' =>$image_name,
 
                               );
                    if($this->administration_model->ajoutMenuPrincipaleImg($data)){
                    
                     echo json_encode(['succes'=>"1"]);
                    }else{

                         echo json_encode(['succes'=>"0"]);
                    }

        }
    }

    public function editer_uploadSlider()
    {
       if (!empty($_FILES)) {
            $targetPath = getcwd() . '/uploads/sliders';
            $config['allowed_types'] = 'gif|jpg|jpeg|png';
            $config['file_name'] = date("Y_m_d_H_i_s_").rand();
            $config['upload_path'] = $targetPath;
            $config['allowed_types'] = 'jpg|png';
            $this->load->library('upload', $config);
            $this->upload->initialize($config);
            if ($this->upload->do_upload('file')) {
                $fichier = $this->upload->data();
            }


            $image_name= $fichier['file_name'];
                         
                  $id_sliders=$this->input->post('id_sliders');
                  $data=array( 
                          
                                'url_img' =>$image_name,
 
                               );
                    if($this->administration_model->modifier_slider($id_sliders,$data)){
                    
                     echo json_encode(['succes'=>"1"]);
                    }else{

                         echo json_encode(['succes'=>"0"]);
                    }

        }
    }

    public function ajaxAjoutSlider(){
            
          
            $this->form_validation->set_rules('id_sliders', 'id_sliders', 'trim');
            if ($this->form_validation->run() == FALSE){

            $errors = validation_errors();
            echo json_encode(['error'=>$errors]);

            }else{

                
                
                $id_sliders=$this->input->post('id_sliders');
        
                $libelle_sliders=$this->input->post('libelle_sliders');

                $lien_clickable=$this->input->post('lien_clickable');
              
                $nb_sliders=intval($this->administration_model->compterSliders());
                $position=$nb_sliders+1;
                $url_img=$this->administration_model->infosSliderImg($id_sliders);
                

                $data=array( 
                                'id_sliders' =>$id_sliders,
                                'libelle_sliders' =>$libelle_sliders,
                                'lien_clickable' =>$lien_clickable,
                                'url_img' =>$url_img,
                                'position' =>$position,
                                
                                
                            );
                
                
                $data_clean = $this->security->xss_clean($data);
                
                
                if($this->administration_model->ajoutSlider($data_clean)){
                    
                     echo json_encode(['succes'=>"1"]);
                }else{
                    
                     echo json_encode(['succes'=>"0"]);
                }
            
            
            }
        
        }

        public function ajaxediterSlider(){
            
          
            $this->form_validation->set_rules('id_sliders', 'id_sliders', 'trim');
            if ($this->form_validation->run() == FALSE){

            $errors = validation_errors();
            echo json_encode(['error'=>$errors]);

            }else{

                
                
                $id_sliders=$this->input->post('id_sliders');
        
                $libelle_sliders=$this->input->post('libelle_sliders');

                $lien_clickable=$this->input->post('lien_clickable');
              
               
               
                

                $data=array( 
                                
                                'libelle_sliders' =>$libelle_sliders,
                                'lien_clickable' =>$lien_clickable,
                               
                                
                                
                            );
                
                
                $data_clean = $this->security->xss_clean($data);
                
                
                if($this->administration_model->modifier_slider($id_sliders,$data_clean)){
                    
                     echo json_encode(['succes'=>"1"]);
                }else{
                    
                     echo json_encode(['succes'=>"0"]);
                }
            
            
            }
        
        }

      function supprim_slider($id_sliders){


        $this->administration_model->supprim_slider($id_sliders);
        $this->listeSliders();


      }

  //Sliders
    public function listeCategoriesProduits()
    {

      $data["infos_categorieProduit"]= $this->administration_model->infosCategorieProduits();        
      $this->load->view("pg_CategorieProduit",$data); 
    }

    public function ajoutCategoriesProduits()
    {

        $data["id_categorie_produit"]= $this->administration_model->clePrimaire(10);
        $data["liste_menu_p"]= $this->administration_model->infosMenus();
        $data["liste_menu_c"]= $this->administration_model->infosMenuCategoriesPrincipale();
        $data["liste_rubrique"]= $this->administration_model->infosRubriques();
        $data["liste_rubriqueCategories"]= $this->administration_model->infosRubriquesC();
        $this->load->view("pg_CategorieProduit_ajout",$data); 
       
    }

    public function editerCategoriesProduits($id_categorie_produit)
    {

        $data["infos_categorieProduitID"]= $this->administration_model->CategorieProduitID($id_categorie_produit);
        $this->load->view("pg_CategorieProduit_editer",$data); 
       
    }

   public function uploadImgCategorieProduits()
    {
        if (!empty($_FILES)) {
            $targetPath = getcwd() . '/uploads/categorie_produit';
            $config['allowed_types'] = 'gif|jpg|jpeg|png';
            $config['file_name'] = date("Y_m_d_H_i_s_").rand();
            $config['upload_path'] = $targetPath;
            $config['allowed_types'] = 'jpg|png';
            $this->load->library('upload', $config);
            $this->upload->initialize($config);
            if ($this->upload->do_upload('file')) {
                $fichier = $this->upload->data();
            }


            $image_name= $fichier['file_name'];
                         
                  $id_categorie_produit=$this->input->post('id_categorie_produit');
                  $data=array( 
                                
                                'id_categorie_produit' =>$id_categorie_produit,
                                'img' =>$image_name,
 
                               );
                    if($this->administration_model->ajoutMenuPrincipaleImg($data)){
                    
                     echo json_encode(['succes'=>"1"]);
                    }else{

                         echo json_encode(['succes'=>"0"]);
                    }

        }
    }

     public function ajaxAjoutCategorieProduits(){

        $this->form_validation->set_rules('id_categorie_produit', 'id_categorie_produit', 'trim');
        if ($this->form_validation->run() == FALSE){

            $errors = validation_errors();
            echo json_encode(['error'=>$errors]);

        }else{


                   

            $id_categorie_produit=$this->input->post('id_categorie_produit');
            $libelle_categorie_produit=$this->input->post('libelle_categorie_produit');

            $id_menu_principale=$this->input->post('id_menu_principale');
            $id_menu_group_categorie=$this->input->post('id_menu_group_categorie');

            $id_menu_categorie_principale=$this->input->post('id_menu_categorie_principale');
            $id_rubrique=$this->input->post('id_rubrique');

           
            $commentaire=$this->input->post('commentaire');
            $url_img=$this->administration_model->infosCategorieProduitImg($id_categorie_produit);
            $nb_rubrique_menu_principale=intval($this->administration_model->compteritemRubriqueMenuPrincipale($id_rubrique));
            $position=$nb_rubrique_menu_principale+1;

            $nb_rubrique_menu_categorie=intval($this->administration_model->compteritemRubriqueMenuPrincipale($id_menu_group_categorie));
            $position_categorie=$nb_rubrique_menu_categorie+1;
                
                

            



            $data=array(

                'url_img_categorie_produit' =>$url_img,
                
                'id_categorie_produit' =>$id_categorie_produit,
                'libelle_categorie_produit' =>$libelle_categorie_produit,

                'id_menu_principale' =>$id_menu_principale,
                'id_menu_group' =>$id_rubrique,

                'id_menu_categorie_principale' =>$id_menu_categorie_principale,
                'id_menu_group_categorie' =>$id_menu_group_categorie,

                'position' =>$position,
                'position_categorie' =>$position_categorie,

                'commentaire' =>$commentaire,
                

            );

            $data_clean = $this->security->xss_clean($data);


            print_r($data_clean);
            if($this->administration_model->ajoutCategorieProduit($data_clean)){

                echo json_encode(['succes'=>"1"]);
            }else{

                echo json_encode(['succes'=>"0"]);
            }


        }

    }

    public function ajaxEditerCategorieProduits(){

        $this->form_validation->set_rules('id_categorie_produit', 'id_categorie_produit', 'trim');
        if ($this->form_validation->run() == FALSE){

            $errors = validation_errors();
            echo json_encode(['error'=>$errors]);

        }else{


                   

            $id_categorie_produit=$this->input->post('id_categorie_produit');
            $libelle_categorie_produit=$this->input->post('libelle_categorie_produit');

         

           
            $commentaire=$this->input->post('commentaire');
           
                
                

            



            $data=array(

                'libelle_categorie_produit' =>$libelle_categorie_produit,
                'commentaire' =>$commentaire,
                

            );

            $data_clean = $this->security->xss_clean($data);


            print_r($data_clean);
            if($this->administration_model->modifier_CategorieProduitF($id_categorie_produit,$data_clean)){

                echo json_encode(['succes'=>"1"]);
            }else{

                echo json_encode(['succes'=>"0"]);
            }


        }

    }

    function supprimCategorieProduit($id_categorie_produit){

             $this->administration_model->supprim_CategorieProduitF($id_categorie_produit);
             $this->listeCategoriesProduits();

    }


    //Publicite block 1X 4

    public function block_14(){


        $this->load->view("pg_pub_14");


    }

    public function upload_logo_block1()
    {
        if (!empty($_FILES)) {
            $targetPath = getcwd() . '/uploads/bloc1234';
            $config['allowed_types'] = 'gif|jpg|jpeg|png';
            $config['file_name'] = date("Y_m_d_H_i_s_").rand();
            $config['upload_path'] = $targetPath;
            $config['allowed_types'] = 'jpg|png';
            $this->load->library('upload', $config);
            $this->upload->initialize($config);
            if ($this->upload->do_upload('file')) {
                $fichier = $this->upload->data();
            }
                        
                        
                        $image_name= $fichier['file_name'];
                        
                        
                $data=array( 
                                'url_image' =>$image_name,
                                
                            );
                
                $this->administration_model->modifier_PubBloc1($data);
            

        }
    }


    public function upload_logo_block2()
    {
        if (!empty($_FILES)) {
            $targetPath = getcwd() . '/uploads/bloc1234';
            $config['allowed_types'] = 'gif|jpg|jpeg|png';
            $config['file_name'] = date("Y_m_d_H_i_s_").rand();
            $config['upload_path'] = $targetPath;
            $config['allowed_types'] = 'jpg|png';
            $this->load->library('upload', $config);
            $this->upload->initialize($config);
            if ($this->upload->do_upload('file')) {
                $fichier = $this->upload->data();
            }
                        
                        
                        $image_name= $fichier['file_name'];
                        
                        
                $data=array( 
                                'url_image' =>$image_name,
                                
                            );
                
                $this->administration_model->modifier_PubBloc2($data);
            

        }
    }

    public function upload_logo_block3()
    {
        if (!empty($_FILES)) {
            $targetPath = getcwd() . '/uploads/bloc1234';
            $config['allowed_types'] = 'gif|jpg|jpeg|png';
            $config['file_name'] = date("Y_m_d_H_i_s_").rand();
            $config['upload_path'] = $targetPath;
            $config['allowed_types'] = 'jpg|png';
            $this->load->library('upload', $config);
            $this->upload->initialize($config);
            if ($this->upload->do_upload('file')) {
                $fichier = $this->upload->data();
            }
                        
                        
                        $image_name= $fichier['file_name'];
                        
                        
                $data=array( 
                                'url_image' =>$image_name,
                                
                            );
                
                $this->administration_model->modifier_PubBloc3($data);
            

        }
    }

    public function upload_logo_block4()
    {
        if (!empty($_FILES)) {
            $targetPath = getcwd() . '/uploads/bloc1234';
            $config['allowed_types'] = 'gif|jpg|jpeg|png';
            $config['file_name'] = date("Y_m_d_H_i_s_").rand();
            $config['upload_path'] = $targetPath;
            $config['allowed_types'] = 'jpg|png';
            $this->load->library('upload', $config);
            $this->upload->initialize($config);
            if ($this->upload->do_upload('file')) {
                $fichier = $this->upload->data();
            }
                        
                        
                        $image_name= $fichier['file_name'];
                        
                        
                $data=array( 
                                'url_image' =>$image_name,
                                
                            );
                
                $this->administration_model->modifier_PubBloc4($data);
            

        }
    }

     public function ajaxAjoutBloc14(){

        $this->form_validation->set_rules('non_value', 'non_value', 'trim');
        if ($this->form_validation->run() == FALSE){

            $errors = validation_errors();
            echo json_encode(['error'=>$errors]);

        }else{


                   

            $url_pub_block1=$this->input->post('url_pub_block1');
            $url_pub_block2=$this->input->post('url_pub_block2');
            $url_pub_block3=$this->input->post('url_pub_block3');
            $url_pub_block4=$this->input->post('url_pub_block4');

            $id_pub_block1="bloc1";
            $id_pub_block2="bloc2";
            $id_pub_block3="bloc3";
            $id_pub_block4="bloc4";
                
            $data_bl1=array(

                'url_pub_block' =>$url_pub_block1,

            ); 
            $data_bl2=array(

                'url_pub_block' =>$url_pub_block2,

            );  
            $data_bl3=array(

                'url_pub_block' =>$url_pub_block3,

            );    
            $data_bl4=array(

                'url_pub_block' =>$url_pub_block4,

            );     



             $this->administration_model->modifier_bloc14($id_pub_block1,$data_bl1);
             $this->administration_model->modifier_bloc14($id_pub_block2,$data_bl2);
             $this->administration_model->modifier_bloc14($id_pub_block3,$data_bl3);
             $this->administration_model->modifier_bloc14($id_pub_block4,$data_bl4);


        }

    }

     public function ajaxAjoutBloc_1(){

        $this->form_validation->set_rules('non_value', 'non_value', 'trim');
        if ($this->form_validation->run() == FALSE){

            $errors = validation_errors();
            echo json_encode(['error'=>$errors]);

        }else{


                   

            $url_pub_block5=$this->input->post('url_pub_block5');
            $url_pub_block6=$this->input->post('url_pub_block6');

            $url_pub_block7=$this->input->post('url_pub_block7');
            $url_pub_block8=$this->input->post('url_pub_block8');
           

            $id_pub_block5="bloc5";
            $id_pub_block6="bloc6";
            $id_pub_block7="bloc7";
            $id_pub_block8="bloc8";
           
                
            $data_bl5=array(

                'url_pub_block' =>$url_pub_block5,

            ); 
            $data_bl6=array(

                'url_pub_block' =>$url_pub_block6,

            ); 

            $data_bl7=array(

                'url_pub_block' =>$url_pub_block7,

            );

            $data_bl8=array(

                'url_pub_block' =>$url_pub_block8,

            );   
           



             $this->administration_model->modifier_bloc14($id_pub_block5,$data_bl5);
             $this->administration_model->modifier_bloc14($id_pub_block6,$data_bl6);
             $this->administration_model->modifier_bloc14($id_pub_block7,$data_bl7);
             $this->administration_model->modifier_bloc14($id_pub_block8,$data_bl8);
             


        }

    }


    //block central 1 et 2

     public function block_1(){
  
        $data["infosBloc_list"]=$this->administration_model->infosBloc_list();
        $this->load->view("pg_pub_central",$data);


    }

    public function upload_logo_block5()
    {
        if (!empty($_FILES)) {
            $targetPath = getcwd() . '/uploads/bloc1234';
            $config['allowed_types'] = 'gif|jpg|jpeg|png';
            $config['file_name'] = date("Y_m_d_H_i_s_").rand();
            $config['upload_path'] = $targetPath;
            $config['allowed_types'] = 'jpg|png';
            $this->load->library('upload', $config);
            $this->upload->initialize($config);
            if ($this->upload->do_upload('file')) {
                $fichier = $this->upload->data();
            }
                        
                        
                        $image_name= $fichier['file_name'];
                        
                        
                $data=array( 
                                'url_image' =>$image_name,
                                
                            );
                
                $this->administration_model->modifier_PubBloc5($data);
            

        }
    }


    public function upload_logo_block6()
    {
        if (!empty($_FILES)) {
            $targetPath = getcwd() . '/uploads/bloc1234';
            $config['allowed_types'] = 'gif|jpg|jpeg|png';
            $config['file_name'] = date("Y_m_d_H_i_s_").rand();
            $config['upload_path'] = $targetPath;
            $config['allowed_types'] = 'jpg|png';
            $this->load->library('upload', $config);
            $this->upload->initialize($config);
            if ($this->upload->do_upload('file')) {
                $fichier = $this->upload->data();
            }
                        
                        
                        $image_name= $fichier['file_name'];
                        
                        
                $data=array( 
                                'url_image' =>$image_name,
                                
                            );
                
                $this->administration_model->modifier_PubBloc6($data);
            

        }
    }


     public function upload_logo_block7()
    {
        if (!empty($_FILES)) {
            $targetPath = getcwd() . '/uploads/bloc1234';
            $config['allowed_types'] = 'gif|jpg|jpeg|png';
            $config['file_name'] = date("Y_m_d_H_i_s_").rand();
            $config['upload_path'] = $targetPath;
            $config['allowed_types'] = 'jpg|png';
            $this->load->library('upload', $config);
            $this->upload->initialize($config);
            if ($this->upload->do_upload('file')) {
                $fichier = $this->upload->data();
            }
                        
                        
                        $image_name= $fichier['file_name'];
                        
                        
                $data=array( 
                                'url_image' =>$image_name,
                                
                            );
                
                $this->administration_model->modifier_PubBloc7($data);
            

        }
    }

     public function upload_logo_block8()
    {
        if (!empty($_FILES)) {
            $targetPath = getcwd() . '/uploads/bloc1234';
            $config['allowed_types'] = 'gif|jpg|jpeg|png';
            $config['file_name'] = date("Y_m_d_H_i_s_").rand();
            $config['upload_path'] = $targetPath;
            $config['allowed_types'] = 'jpg|png';
            $this->load->library('upload', $config);
            $this->upload->initialize($config);
            if ($this->upload->do_upload('file')) {
                $fichier = $this->upload->data();
            }
                        
                        
                        $image_name= $fichier['file_name'];
                        
                        
                $data=array( 
                                'url_image' =>$image_name,
                                
                            );
                
                $this->administration_model->modifier_PubBloc8($data);
            

        }
    }


    //Partenaires

    public function listePartenaires(){

       $data["infos_partenaires"]= $this->administration_model->infosPartenaires();
       $this->load->view("pg_partenaires",$data);

    }


    public function ajoutPartenaires(){
        
       $data["id_partenaires"]= $this->administration_model->clePrimaire(10);
       $this->load->view("pg_partenaires_ajout",$data);

    }

     public function editerPartenaires($id_partenaires){
        
       $data["infos_partenairesID"]= $this->administration_model->infosPartenaires_byID($id_partenaires);
       $this->load->view("pg_partenaires_editer",$data);

    }

     public function uploadImgPartenaires()
    {
        if (!empty($_FILES)) {
            $targetPath = getcwd() . '/uploads/partenaires';
            $config['allowed_types'] = 'gif|jpg|jpeg|png';
            $config['file_name'] = date("Y_m_d_H_i_s_").rand();
            $config['upload_path'] = $targetPath;
            $config['allowed_types'] = 'jpg|png';
            $this->load->library('upload', $config);
            $this->upload->initialize($config);
            if ($this->upload->do_upload('file')) {
                $fichier = $this->upload->data();
            }
                        
                        
                        $image_name= $fichier['file_name'];

                        
            $id_partenaires=$this->input->post('id_partenaires');
            $data=array(
                'id_partenaires' =>$id_partenaires,
                'img' =>$image_name,

            );
            if($this->administration_model->ajoutMenuPrincipaleImg($data)){

                echo json_encode(['succes'=>"1"]);
            }else{

                echo json_encode(['succes'=>"0"]);
            }

        }
    }

    public function uploadEditerImgPartenaires()
    {
        if (!empty($_FILES)) {
            $targetPath = getcwd() . '/uploads/partenaires';
            $config['allowed_types'] = 'gif|jpg|jpeg|png';
            $config['file_name'] = date("Y_m_d_H_i_s_").rand();
            $config['upload_path'] = $targetPath;
            $config['allowed_types'] = 'jpg|png';
            $this->load->library('upload', $config);
            $this->upload->initialize($config);
            if ($this->upload->do_upload('file')) {
                $fichier = $this->upload->data();
            }
                        
                        
                        $image_name= $fichier['file_name'];

                        
            $id_partenaires=$this->input->post('id_partenaires');
            $data=array(
                
                'url_img' =>$image_name,

            );
            if($this->administration_model->modifier_Partenaires_tb($id_partenaires,$data)){

                echo json_encode(['succes'=>"1"]);
            }else{

                echo json_encode(['succes'=>"0"]);
            }

        }
    }

    public function ajaxAjoutPartenaires(){


        $this->form_validation->set_rules('id_partenaires', 'id_partenaires', 'trim');
        if ($this->form_validation->run() == FALSE){

            $errors = validation_errors();
            echo json_encode(['error'=>$errors]);

        }else{

          
           

            $id_partenaires=$this->input->post('id_partenaires');
            $libelle_partenaire=$this->input->post('libelle_partenaire');
         
            $nb_partenaires=intval($this->admin_model->compterPartenaires());
            $position=$nb_partenaires+1;
            $url_img=$this->administration_model->infosImgPartenairesID($id_partenaires);
          
            $data=array(

                'id_partenaires' =>$id_partenaires,
                'libelle_partenaire' =>$libelle_partenaire,
                'url_img' =>$url_img,
                'position' =>$position,
               

            );


            $data_clean = $this->security->xss_clean($data);


            if($this->administration_model->ajoutPartenaires($data_clean)){

                echo json_encode(['succes'=>"1"]);
            }else{

                echo json_encode(['succes'=>"0"]);
            }


        }

    }

     public function ajaxEditerPartenaires(){


        $this->form_validation->set_rules('id_partenaires', 'id_partenaires', 'trim');
        if ($this->form_validation->run() == FALSE){

            $errors = validation_errors();
            echo json_encode(['error'=>$errors]);

        }else{

          
           

            $id_partenaires=$this->input->post('id_partenaires');
            $libelle_partenaire=$this->input->post('libelle_partenaire');
            $commentaire=$this->input->post('commentaire');
         
            
          
            $data=array(

               
                'libelle_partenaire' =>$libelle_partenaire,
                'commentaire' =>$commentaire,
                
               

            );



            $data_clean = $this->security->xss_clean($data);




            if($this->administration_model->modifier_Partenaires_tb($id_partenaires,$data_clean)){

                echo json_encode(['succes'=>"1"]);
            }else{

                echo json_encode(['succes'=>"0"]);
            }


        }

    }

    function supprimPartenaires($id_partenaires){

             $this->administration_model->supprim_Partenaires($id_partenaires);
             $this->listePartenaires();

    }


    //temoignages
    

    public function listeTemoignages(){

         $data["infos_temoignages"]= $this->administration_model->infosTemoignages();
         $this->load->view("pg_temoignages",$data);

    }


    public function ajoutTemoignages(){

          $data["id_temoignages"]= $this->administration_model->clePrimaire(10);
         $this->load->view("pg_temoignages_ajout",$data);

    }

    public function editerTemoignages($id_temoignages){

          $data["id_temoignagesID"]= $this->administration_model->infosTemoignages_byID($id_temoignages);
         $this->load->view("pg_temoignages_editer",$data);

    }

     public function uploadModImgTemoignages()
    {
       if (!empty($_FILES)) {
            $targetPath = getcwd() . '/uploads/temoignages';
            $config['allowed_types'] = 'gif|jpg|jpeg|png';
            $config['file_name'] = date("Y_m_d_H_i_s_").rand();
            $config['upload_path'] = $targetPath;
            $config['allowed_types'] = 'jpg|png';
            $this->load->library('upload', $config);
            $this->upload->initialize($config);
            if ($this->upload->do_upload('file')) {
                $fichier = $this->upload->data();
            }
                        
                        
                        $image_name= $fichier['file_name'];

            $id_temoignages=$this->input->post('id_temoignages');
            $data=array(

                'id_temoignages' =>$id_temoignages,
                'img' =>$image_name,

            );
            if($this->administration_model->ajoutMenuPrincipaleImg($data)){

                echo json_encode(['succes'=>"1"]);
            }else{

                echo json_encode(['succes'=>"0"]);
            }

        }
    }

    public function uploadEditerModImgTemoignages()
    {
       if (!empty($_FILES)) {
            $targetPath = getcwd() . '/uploads/temoignages';
            $config['allowed_types'] = 'gif|jpg|jpeg|png';
            $config['file_name'] = date("Y_m_d_H_i_s_").rand();
            $config['upload_path'] = $targetPath;
            $config['allowed_types'] = 'jpg|png';
            $this->load->library('upload', $config);
            $this->upload->initialize($config);
            if ($this->upload->do_upload('file')) {
                $fichier = $this->upload->data();
            }
                        
                        
                        $image_name= $fichier['file_name'];

            $id_temoignages=$this->input->post('id_temoignages');
            $data=array(

                
                'url_img' =>$image_name,

            );
            if($this->administration_model->modifier_Temoignages($id_temoignages,$data)){

                echo json_encode(['succes'=>"1"]);
            }else{

                echo json_encode(['succes'=>"0"]);
            }

        }
    }

      function ajaxAjoutTemoignage(){


        $this->form_validation->set_rules('id_temoignages', 'id_temoignages', 'trim');
        if ($this->form_validation->run() == FALSE){

            $errors = validation_errors();
            echo json_encode(['error'=>$errors]);

        }else{


           

            $id_temoignages=$this->input->post('id_temoignages');
            $nom_prenom=$this->input->post('nom_prenom');
            $message=$this->input->post('message');

            $nb_temoignages=intval($this->administration_model->compterTemoignages());
            $position=$nb_temoignages+1;
            $url_img=$this->administration_model->infosImgTemoignagesID($id_temoignages);
          
            $data=array(

                'id_temoignages' =>$id_temoignages,
                'nom_prenom' =>$nom_prenom,
                'message' =>$message,
                'url_img' =>$url_img,
                'position' =>$position,
               

            );


            $data_clean = $this->security->xss_clean($data);


            if($this->administration_model->ajoutTemoignages($data_clean)){

                echo json_encode(['succes'=>"1"]);
            }else{

                echo json_encode(['succes'=>"0"]);
            }


        }

    }

    function ajaxEditerTemoignage(){


        $this->form_validation->set_rules('id_temoignages', 'id_temoignages', 'trim');
        if ($this->form_validation->run() == FALSE){

            $errors = validation_errors();
            echo json_encode(['error'=>$errors]);

        }else{


           

            $id_temoignages=$this->input->post('id_temoignages');
            $nom_prenom=$this->input->post('nom_prenom');
            $message=$this->input->post('message');

           
            $data=array(

                
                'nom_prenom' =>$nom_prenom,
                'message' =>$message,
               
               

            );


            $data_clean = $this->security->xss_clean($data);


            if($this->administration_model->modifier_Temoignages($id_temoignages,$data_clean)){

                echo json_encode(['succes'=>"1"]);
            }else{

                echo json_encode(['succes'=>"0"]);
            }


        }

    }


    //zone de produit 1

    public function zone_produit1(){

        $data["id_bloc_principale"]= "1";
        $data["infos_bloc1"]= $this->administration_model->infosBloc1();
         $data["liste_categorie"]= $this->administration_model->infosCategoriesProduits();
        $this->load->view("pg_zone1",$data);
    }


    public function zone_produit4(){

        $data["id_bloc_principale"]= "4";
        $data["infos_bloc1"]= $this->administration_model->infosBloc4();
         $data["liste_categorie"]= $this->administration_model->infosCategoriesProduits();
        $this->load->view("pg_zone4",$data);
    }

    public function zone_produit5(){

        $data["id_bloc_principale"]= "5";
        $data["infos_bloc1"]= $this->administration_model->infosBloc5();
         $data["liste_categorie"]= $this->administration_model->infosCategoriesProduits();
        $this->load->view("pg_zone5",$data);
    }

        public function uploadImgbloc1_gauche()
    {
        if (!empty($_FILES)) {
            $targetPath = getcwd() . '/uploads/blocs/gauche';
            $config['allowed_types'] = 'gif|jpg|jpeg|png';
            $config['file_name'] = date("Y_m_d_H_i_s_").rand();
            $config['upload_path'] = $targetPath;
            $config['allowed_types'] = 'jpg|png';
            $this->load->library('upload', $config);
            $this->upload->initialize($config);
            if ($this->upload->do_upload('file')) {
                $fichier = $this->upload->data();
            }
                 
                        
                        $image_name= $fichier['file_name'];

                        
            $id_bloc_principale=$this->input->post('id_bloc_principale');
            $data=array(
                
                'img_gauche' =>$image_name,

            );
            
            if($this->administration_model->modifier_bloc_info($id_bloc_principale,$data)){

                echo json_encode(['succes'=>"1"]);
            }else{

                echo json_encode(['succes'=>"0"]);
            }

        }
    }


    public function uploadImgbloc1_droite()
    {
        if (!empty($_FILES)) {
            $targetPath = getcwd() . '/uploads/blocs/droite';
            $config['allowed_types'] = 'gif|jpg|jpeg|png';
            $config['file_name'] = date("Y_m_d_H_i_s_").rand();
            $config['upload_path'] = $targetPath;
            $config['allowed_types'] = 'jpg|png';
            $this->load->library('upload', $config);
            $this->upload->initialize($config);
            if ($this->upload->do_upload('file')) {
                $fichier = $this->upload->data();
            }
            
                        
                        
            $image_name= $fichier['file_name'];

                        
            $id_bloc_principale=$this->input->post('id_bloc_principale');
            $data=array(
                
                'img_droite' =>$image_name,

            );

            if($this->administration_model->modifier_bloc_info($id_bloc_principale,$data)){

                echo json_encode(['succes'=>"1"]);
            }else{

                echo json_encode(['succes'=>"0"]);
            }

        }
    }

         function ajaxAjoutBloc1(){


        $this->form_validation->set_rules('id_bloc_principale', 'id_bloc_principale', 'trim');
        if ($this->form_validation->run() == FALSE){

            $errors = validation_errors();
            echo json_encode(['error'=>$errors]);

        }else{

            

            $id_bloc_principale=$this->input->post('id_bloc_principale');
            $titre_bloc_principale=$this->input->post('titre_bloc_principale');
            $sous_titre_bloc_principale=$this->input->post('sous_titre_bloc_principale');
            $statut_visibilite=$this->input->post('statut_visibilite');
            $id_categorie_produit=$this->input->post('id_categorie_produit');
            $id_categorie_s1=$this->input->post('id_categorie_s1');
            $id_categorie_s2=$this->input->post('id_categorie_s2');
            $id_categorie_s3=$this->input->post('id_categorie_s3');
            $id_categorie_s4=$this->input->post('id_categorie_s4');
            $id_categorie_s5=$this->input->post('id_categorie_s5');
            $id_categorie_s6=$this->input->post('id_categorie_s6');


            $url_img_gauche=$this->input->post('url_img_gauche');
            $url_img_droite=$this->input->post('url_img_droite');

            

            


          
            
          
            $data=array(

                'id_bloc_principale' =>$id_bloc_principale,
                'titre_bloc_principale' =>$titre_bloc_principale,
                'sous_titre_bloc_principale' =>$sous_titre_bloc_principale,
                'statut_visibilite' =>$statut_visibilite,
                'id_categorie_produits' =>$id_categorie_produit,
                'id_categorie_s1' =>$id_categorie_s1,
                'id_categorie_s2' =>$id_categorie_s2,
                'id_categorie_s3' =>$id_categorie_s3,
                'id_categorie_s4' =>$id_categorie_s4,
                'id_categorie_s5' =>$id_categorie_s5,
                'id_categorie_s6' =>$id_categorie_s6,

                'url_img_gauche' =>$url_img_gauche,
                'url_img_droite' =>$url_img_droite,

            );


            $data_clean = $this->security->xss_clean($data);




          
            if($this->administration_model->modifier_bloc_info($id_bloc_principale,$data_clean)){

                echo json_encode(['succes'=>"1"]);
            }else{

                echo json_encode(['succes'=>"0"]);
            }


        }

    }


    //zone 2

    public function zone_produit2(){

        $data["id_bloc_principale"]= "2";
        $data["infos_bloc1"]= $this->administration_model->infosBloc1();
         $data["liste_categorie"]= $this->administration_model->infosCategoriesProduits();
        $this->load->view("pg_zone2",$data);
    }


     public function zone_produit3(){

        $data["id_bloc_principale"]= "3";
        $data["infos_bloc1"]= $this->administration_model->infosBloc1();
         $data["liste_categorie"]= $this->administration_model->infosCategoriesProduits();
        $this->load->view("pg_zone3",$data);
    }


    //liste des produits

     public function listeProduits(){

        $data["infos_produit"]= $this->administration_model->infosProduits();

        $this->load->view("pg_produits",$data);


     }

      public function listeProduits_pagination(){



       $data["page_main_title"]="Liste de tous les produits";
       $data["page_main_title1"]="Liste de tous les produits";
       $data["page_main_title2"]="Informations sur les produits";

       $data["compteur_produit"]=0;
   

       $config = array();

        // Set base_url for every links
        $config["base_url"] = base_url()."administration/listeProduits_pagination";

        // Set total rows in the result set you are creating pagination for.
        $config["total_rows"] = $this->administration_model->totalProduits();

        // Number of items you intend to show per page.
        $config["per_page"] = 30;

        // Use pagination number for anchor URL.
        $config['use_page_numbers'] = TRUE;

        //Set that how many number of pages you want to view.
        $config['num_links'] = $this->administration_model->totalProduits();;

        // Open tag for CURRENT link.
        $config['cur_tag_open'] = '&nbsp;<a class="current">';

        // Close tag for CURRENT link.
        $config['cur_tag_close'] = '</a>';

        // By clicking on performing NEXT pagination.
        $config['next_link'] = '&nbsp;&nbsp;&nbsp; Précedent';

        // By clicking on performing PREVIOUS pagination.
        $config['prev_link'] = '&nbsp;&nbsp;&nbsp; Suivant';
        // To initialize "$config" array and set to pagination library.
        $this->pagination->initialize($config);

        if($this->uri->segment(3)){
        $page = ($this->uri->segment(3)) ;
        }
        else{
        $page = 0;
        $data["compteur_produit"]=1;

        }

       
        $data["infos_produit_limit"] = $this->administration_model->infosProduits_limit($config["per_page"],$page);

        
        $str_links = $this->pagination->create_links();
        $data["links"] = explode('&nbsp;&nbsp;&nbsp;',$str_links );
        $data["page_i"] =$page;

        $status_mise_en_ligne=1;
        $status_mise_hors_ligne=0;

        $data["total_produits"]= $this->administration_model->compterProduits_p();
        $data["total_produits_enligne"]= $this->administration_model->compterProduits_enligne_horsligne($status_mise_en_ligne);

        $data["total_produits_horsligne"]= $this->administration_model->compterProduits_enligne_horsligne($status_mise_hors_ligne);

         $data["total_produits_avec_image"]= $this->administration_model->compterProduits_avec_image();

         $data["total_produits_sans_image"]= $this->administration_model->compterProduits_sans_image();

        // View data according to array.
        $this->load->view("pg_produits_pagination", $data);

        
        
       


     }

    public function listeProduits_pagination_par_recherche(){

        $nom_produit=$this->input->post('recherche_item');
        $data["liste_produits"]=$this->administration_model->recherche_produit($nom_produit);
        $this->load->view("pg_produits_filtrer", $data);

     }


      public function listeProduits_pagination_avec_image(){


         $data["page_main_title"]="Liste de tous les produits";
       $data["page_main_title1"]="Liste de tous les produits";
       $data["page_main_title2"]="Informations sur les produits";

       $data["compteur_produit"]=1;

   

       $config = array();

        // Set base_url for every links
        $config["base_url"] = base_url()."administration/listeProduits_pagination";

        // Set total rows in the result set you are creating pagination for.
        $config["total_rows"] = $this->administration_model->totalProduits();

        // Number of items you intend to show per page.
        $config["per_page"] = 30;

        // Use pagination number for anchor URL.
        $config['use_page_numbers'] = TRUE;

        //Set that how many number of pages you want to view.
        $config['num_links'] = $this->administration_model->totalProduits();;

        // Open tag for CURRENT link.
        $config['cur_tag_open'] = '&nbsp;<a class="current">';

        // Close tag for CURRENT link.
        $config['cur_tag_close'] = '</a>';

        // By clicking on performing NEXT pagination.
        $config['next_link'] = '&nbsp;&nbsp;&nbsp; Précedent';

        // By clicking on performing PREVIOUS pagination.
        $config['prev_link'] = '&nbsp;&nbsp;&nbsp; Suivant';
        // To initialize "$config" array and set to pagination library.
        $this->pagination->initialize($config);

        if($this->uri->segment(3)){
        $page = ($this->uri->segment(3)) ;
        }
        else{
        $page = 0;
        $data["compteur_produit"]=1;
        }

        $data["infos_produit_limit"] = $this->administration_model->infosProduits_limit_aI($config["per_page"],$page);

        
        $str_links = $this->pagination->create_links();
        $data["links"] = explode('&nbsp;&nbsp;&nbsp;',$str_links );
        $data["page_i"] =$page;

        $status_mise_en_ligne=1;
        $status_mise_hors_ligne=0;

        $data["total_produits"]= $this->administration_model->compterProduits_p();
        $data["total_produits_enligne"]= $this->administration_model->compterProduits_enligne_horsligne($status_mise_en_ligne);

        $data["total_produits_horsligne"]= $this->administration_model->compterProduits_enligne_horsligne($status_mise_hors_ligne);
         $data["total_produits_avec_image"]= $this->administration_model->compterProduits_avec_image();

         $data["total_produits_sans_image"]= $this->administration_model->compterProduits_sans_image();

        // View data according to array.
        $this->load->view("pg_produits_pagination", $data);

        
        
       


     }

      public function listeProduits_pagination_sans_image(){


         $data["page_main_title"]="Liste de tous les produits";
       $data["page_main_title1"]="Liste de tous les produits";
       $data["page_main_title2"]="Informations sur les produits";

       $data["compteur_produit"]=0;

   

       $config = array();

        // Set base_url for every links
        $config["base_url"] = base_url()."administration/listeProduits_pagination";

        // Set total rows in the result set you are creating pagination for.
        $config["total_rows"] = $this->administration_model->totalProduits();

        // Number of items you intend to show per page.
        $config["per_page"] = 30;

        // Use pagination number for anchor URL.
        $config['use_page_numbers'] = TRUE;

        //Set that how many number of pages you want to view.
        $config['num_links'] = $this->administration_model->totalProduits();;

        // Open tag for CURRENT link.
        $config['cur_tag_open'] = '&nbsp;<a class="current">';

        // Close tag for CURRENT link.
        $config['cur_tag_close'] = '</a>';

        // By clicking on performing NEXT pagination.
        $config['next_link'] = '&nbsp;&nbsp;&nbsp; Précedent';

        // By clicking on performing PREVIOUS pagination.
        $config['prev_link'] = '&nbsp;&nbsp;&nbsp; Suivant';
        // To initialize "$config" array and set to pagination library.
        $this->pagination->initialize($config);

        if($this->uri->segment(3)){
        $page = ($this->uri->segment(3)) ;
        }
        else{
        $page = 0;
        $data["compteur_produit"]=1;
        }

        $data["infos_produit_limit"] = $this->administration_model->infosProduits_limit_sI($config["per_page"],$page);

        
        $str_links = $this->pagination->create_links();
        $data["links"] = explode('&nbsp;&nbsp;&nbsp;',$str_links );
        $data["page_i"] =$page;

        $status_mise_en_ligne=1;
        $status_mise_hors_ligne=0;

        $data["total_produits"]= $this->administration_model->compterProduits_p();
        $data["total_produits_enligne"]= $this->administration_model->compterProduits_enligne_horsligne($status_mise_en_ligne);

        $data["total_produits_horsligne"]= $this->administration_model->compterProduits_enligne_horsligne($status_mise_hors_ligne);
         $data["total_produits_avec_image"]= $this->administration_model->compterProduits_avec_image();

         $data["total_produits_sans_image"]= $this->administration_model->compterProduits_sans_image();

        // View data according to array.
        $this->load->view("pg_produits_pagination", $data);

        
        
       


     }



     public function listeProduits_pagination_enligne(){


       $data["page_main_title"]="Liste de tous les produits en ligne";
       $data["page_main_title1"]="Liste de tous les produits en ligne";
       $data["page_main_title2"]="Informations sur les produits en ligne ";

        $data["compteur_produit"]=1;

       $config = array();

        // Set base_url for every links
        $config["base_url"] = base_url()."administration/listeProduits_pagination";

        // Set total rows in the result set you are creating pagination for.
        $config["total_rows"] = $this->administration_model->totalProduits();

        // Number of items you intend to show per page.
        $config["per_page"] = 30;

        // Use pagination number for anchor URL.
        $config['use_page_numbers'] = TRUE;

        //Set that how many number of pages you want to view.
        $config['num_links'] = $this->administration_model->totalProduits();;

        // Open tag for CURRENT link.
        $config['cur_tag_open'] = '&nbsp;<a class="current">';

        // Close tag for CURRENT link.
        $config['cur_tag_close'] = '</a>';

        // By clicking on performing NEXT pagination.
        $config['next_link'] = '&nbsp;&nbsp;&nbsp; Précedent';

        // By clicking on performing PREVIOUS pagination.
        $config['prev_link'] = '&nbsp;&nbsp;&nbsp; Suivant';
        // To initialize "$config" array and set to pagination library.
        $this->pagination->initialize($config);

        if($this->uri->segment(3)){
        $page = ($this->uri->segment(3)) ;
        }
        else{
        $page = 0;
        $data["compteur_produit"]=1;
        }

        $data["infos_produit_limit"] = $this->administration_model->infosProduits_limit_enligne($config["per_page"],$page);

        
        $str_links = $this->pagination->create_links();
        $data["links"] = explode('&nbsp;&nbsp;&nbsp;',$str_links );
        $data["page_i"] =$page;

        $status_mise_en_ligne=1;
        $status_mise_hors_ligne=0;

        $data["total_produits"]= $this->administration_model->compterProduits_p();
        $data["total_produits_enligne"]= $this->administration_model->compterProduits_enligne_horsligne($status_mise_en_ligne);

        $data["total_produits_horsligne"]= $this->administration_model->compterProduits_enligne_horsligne($status_mise_hors_ligne);

        $data["total_produits_avec_image"]= $this->administration_model->compterProduits_avec_image();

         $data["total_produits_sans_image"]= $this->administration_model->compterProduits_sans_image();


        // View data according to array.
        $this->load->view("pg_produits_pagination", $data);

        
        
       


     }

      public function listeProduits_pagination_horsligne(){


       $data["page_main_title"]="Liste de tous les produits hors ligne";
       $data["page_main_title1"]="Liste de tous les produits hors ligne";
       $data["page_main_title2"]="Informations sur les produits hors ligne ";

       $data["compteur_produit"]=0;

   

       $config = array();

        // Set base_url for every links
        $config["base_url"] = base_url()."administration/listeProduits_pagination";

        // Set total rows in the result set you are creating pagination for.
        $config["total_rows"] = $this->administration_model->totalProduits();

        // Number of items you intend to show per page.
        $config["per_page"] = 30;

        // Use pagination number for anchor URL.
        $config['use_page_numbers'] = TRUE;

        //Set that how many number of pages you want to view.
        $config['num_links'] = $this->administration_model->totalProduits();;

        // Open tag for CURRENT link.
        $config['cur_tag_open'] = '&nbsp;<a class="current">';

        // Close tag for CURRENT link.
        $config['cur_tag_close'] = '</a>';

        // By clicking on performing NEXT pagination.
        $config['next_link'] = '&nbsp;&nbsp;&nbsp; Précedent';

        // By clicking on performing PREVIOUS pagination.
        $config['prev_link'] = '&nbsp;&nbsp;&nbsp; Suivant';
        // To initialize "$config" array and set to pagination library.
        $this->pagination->initialize($config);

        if($this->uri->segment(3)){
        $page = ($this->uri->segment(3)) ;
        }
        else{
        $page = 0;
        $data["compteur_produit"]= 1;
        }

        $data["infos_produit_limit"] = $this->administration_model->infosProduits_limit_horsligne($config["per_page"],$page);

        
        $str_links = $this->pagination->create_links();
        $data["links"] = explode('&nbsp;&nbsp;&nbsp;',$str_links );
        $data["page_i"] =$page;

        $status_mise_en_ligne=1;
        $status_mise_hors_ligne=0;

        $data["total_produits"]= $this->administration_model->compterProduits_p();
        $data["total_produits_enligne"]= $this->administration_model->compterProduits_enligne_horsligne($status_mise_en_ligne);

        $data["total_produits_horsligne"]= $this->administration_model->compterProduits_enligne_horsligne($status_mise_hors_ligne);

        $data["total_produits_avec_image"]= $this->administration_model->compterProduits_avec_image();

         $data["total_produits_sans_image"]= $this->administration_model->compterProduits_sans_image();


        // View data according to array.
        $this->load->view("pg_produits_pagination", $data);

        
        
       


     }

     public function editerProduits($id_produits){

        

        $data["id_produits"]=$id_produits;
        $data["infos_produit"]= $this->administration_model->infosProduits_IDprod($id_produits);

         $data["liste_marque"]= $this->administration_model->infosMarque();
        $data["liste_fournisseur"]= $this->administration_model->infosFournisseur();
        $data["liste_categorie"]= $this->administration_model->infosCategoriesProduits();


        
        $this->load->view("pg_produits_editer",$data);


     }


     public function dupliquerProduits($id_produits){

        

        $data["id_produits"]=$id_produits;
        $data["infos_produit"]= $this->administration_model->infosProduits_IDprod($id_produits);

         $data["liste_marque"]= $this->administration_model->infosMarque();
        $data["liste_fournisseur"]= $this->administration_model->infosFournisseur();
        $data["liste_categorie"]= $this->administration_model->infosCategoriesProduits();


        
        $this->load->view("pg_produits_dupliquer",$data);


     }

//couleur


 public function ajoutCouleur(){

        
        $data["id_couleur"]= $this->administration_model->clePrimaire(10);
         
        $this->load->view("pg_couleur_ajout",$data);


     }

     public function listeCouleur(){

        $data["infos_couleur"]= $this->administration_model->infosCouleur();
        $this->load->view("pg_couleur",$data);


    }


     public function ajaxAjoutCouleur(){


        $this->form_validation->set_rules('id_couleur', 'id_couleur', 'trim');
        if ($this->form_validation->run() == FALSE){

            $errors = validation_errors();
            echo json_encode(['error'=>$errors]);

        }else{


    
           

            $id_couleur=$this->input->post('id_couleur');
            $libelle_couleur=$this->input->post('libelle_couleur');

            $commentaire_couleur=$this->input->post('commentaire_couleur');
            $url_img=$this->administration_model->infosImgCouleurID($id_couleur);
            
            

          
            
          
            $data=array(

                'id_couleur' =>$id_couleur,
                'libelle_couleur' =>$libelle_couleur,
                'commentaire_couleur' =>$commentaire_couleur,
                'url_img' =>$url_img,
               
               

            );


            $data_clean = $this->security->xss_clean($data);

          
            if($this->administration_model->ajoutCouleur($data_clean)){

                echo json_encode(['succes'=>"1"]);
            }else{

                echo json_encode(['succes'=>"0"]);
            }


        }

    }

    public function uploadImgCouleur()
    {
        if (!empty($_FILES)) {
            $targetPath = getcwd() . '/assets/eshop/image/demo/brands';
            $config['allowed_types'] = 'gif|jpg|jpeg|png';
            $config['file_name'] = date("Y_m_d_H_i_s_").rand();
            $config['upload_path'] = $targetPath;
            $config['allowed_types'] = 'jpg|png';
            $this->load->library('upload', $config);
            $this->upload->initialize($config);
            if ($this->upload->do_upload('file')) {
                $fichier = $this->upload->data();
            }
                        
                        
                        $image_name= $fichier['file_name'];

                        
            $id_couleur=$this->input->post('id_couleur');
            $data=array(
                'id_couleur' =>$id_couleur,
                'url_img' =>$image_name,

            );
            if($this->administration_model->ajoutMenuPrincipaleImg($data)){

                echo json_encode(['succes'=>"1"]);
            }else{

                echo json_encode(['succes'=>"0"]);
            }

        }
    }


    public function suppressionCouleur($id_couleur){

        
       $this->administration_model->supprim_produit($id_couleur);
       $data["infos_produit"]= $this->administration_model->infosProduits();
       $this->load->view("pg_couleur",$data);


     }


     public function editerCouleur($id_couleur)
    {

        $data["infos_couleurID"]= $this->administration_model->infosCouleurID($id_couleur);
        $this->load->view("pg_couleur_editer",$data);
    }


     public function ajaxEditerCouleur(){


        $this->form_validation->set_rules('id_couleur', 'id_couleur', 'trim');
        if ($this->form_validation->run() == FALSE){

            $errors = validation_errors();
            echo json_encode(['error'=>$errors]);

        }else{

            $id_marque=$this->input->post('id_couleur');
            $libelle_marque=$this->input->post('libelle_couleur');

            $commentaire=$this->input->post('commentaire_couleur');
            $url_img=$this->administration_model->infosImgCouleurID($id_couleur);
            

          
            
          
            $data=array(

                
                'libelle_couleur' =>$libelle_couleur,
                'url_img' =>$url_img,
                'commentaire_couleur' =>$commentaire_couleur,
               
               

            );


            $data_clean = $this->security->xss_clean($data);

          
            if($this->administration_model->editerCouleur($id_couleur,$data_clean)){

                echo json_encode(['succes'=>"1"]);
            }else{

                echo json_encode(['succes'=>"0"]);
            }


        }

    }


//Taille chemise


 public function ajoutTailleChemise(){

        
        $data["id_taille_chemise"]= $this->administration_model->clePrimaire(10);
         
        $this->load->view("pg_taille_chemise_ajout",$data);


     }


public function ajaxAjoutTailleChemise(){


        $this->form_validation->set_rules('id_taille_chemise', 'id_taille_chemise', 'trim');
        if ($this->form_validation->run() == FALSE){

            $errors = validation_errors();
            echo json_encode(['error'=>$errors]);

        }else{


    
           

            $id_taille_chemise=$this->input->post('id_taille_chemise');
            $libelle_taille_chemise =$this->input->post('libelle_taille_chemise');

            $commentaire_taille_chemise=$this->input->post('commentaire_taille_chemise');
            $url_img=$this->administration_model->infosImgTailleChemiseID($id_taille_chemise);
            
            

          
            
          
            $data=array(

                'id_taille_chemise' =>$id_taille_chemise,
                'libelle_taille_chemise ' =>$libelle_taille_chemise ,
                'commentaire_taille_chemise' =>$commentaire_taille_chemise,
                'url_img' =>$url_img,
               
               

            );


            $data_clean = $this->security->xss_clean($data);

          
            if($this->administration_model->ajoutTailleChemise($data_clean)){

                echo json_encode(['succes'=>"1"]);
            }else{

                echo json_encode(['succes'=>"0"]);
            }


        }

    }

    public function uploadImgTailleChemise()
    {
        if (!empty($_FILES)) {
            $targetPath = getcwd() . '/assets/eshop/image/demo/brands';
            $config['allowed_types'] = 'gif|jpg|jpeg|png';
            $config['file_name'] = date("Y_m_d_H_i_s_").rand();
            $config['upload_path'] = $targetPath;
            $config['allowed_types'] = 'jpg|png';
            $this->load->library('upload', $config);
            $this->upload->initialize($config);
            if ($this->upload->do_upload('file')) {
                $fichier = $this->upload->data();
            }
                        
                        
                        $image_name= $fichier['file_name'];

                        
            $id_taille_chemise=$this->input->post('id_taille_chemise');
            $data=array(
            'id_taille_chemise' =>$id_taille_chemise,
            'url_img' =>$image_name,

            );
            if($this->administration_model->ajoutMenuPrincipaleImg($data)){

                echo json_encode(['succes'=>"1"]);
            }else{

                echo json_encode(['succes'=>"0"]);
            }

        }
    }

     


     public function listeTailleChemise(){

        $data["infos_taille_chemise"]= $this->administration_model->infosTailleChemise();
        $this->load->view("pg_taille_chemise",$data);


    }



//Pointure chaussure


 public function ajoutPointureChaussure(){

        
        $data["id_pointure_chaussure"]= $this->administration_model->clePrimaire(10);
         
        $this->load->view("pg_pointure_chaussure_ajout",$data);


     }




public function ajaxAjoutPointureChaussure(){


        $this->form_validation->set_rules('id_pointure_chaussure', 'id_pointure_chaussure', 'trim');
        if ($this->form_validation->run() == FALSE){

            $errors = validation_errors();
            echo json_encode(['error'=>$errors]);

        }else{


    
           

            $id_pointure_chaussure=$this->input->post('id_pointure_chaussure');
            $libelle_pointure_chaussure=$this->input->post('libelle_pointure_chaussure');

            $commentaire_pointure_chaussure=$this->input->post('commentaire_pointure_chaussure');
            $url_img=$this->administration_model->infosImgPointureChaussureID($id_pointure_chaussure);
            
            

          
            
          
            $data=array(

                'id_pointure_chaussure' =>$id_pointure_chaussure,
                'libelle_pointure_chaussure' =>$libelle_pointure_chaussure ,
                'commentaire_pointure_chaussure' =>$commentaire_pointure_chaussure,
                'url_img' =>$url_img,
               
               

            );


            $data_clean = $this->security->xss_clean($data);

          
            if($this->administration_model->ajoutPointureChaussure($data_clean)){

                echo json_encode(['succes'=>"1"]);
            }else{

                echo json_encode(['succes'=>"0"]);
            }


        }

    }

    public function uploadImgPointureChaussure()
    {
        if (!empty($_FILES)) {
            $targetPath = getcwd() . '/assets/eshop/image/demo/brands';
            $config['allowed_types'] = 'gif|jpg|jpeg|png';
            $config['file_name'] = date("Y_m_d_H_i_s_").rand();
            $config['upload_path'] = $targetPath;
            $config['allowed_types'] = 'jpg|png';
            $this->load->library('upload', $config);
            $this->upload->initialize($config);
            if ($this->upload->do_upload('file')) {
                $fichier = $this->upload->data();
            }
                        
                        
                        $image_name= $fichier['file_name'];

                        
            $id_pointure_chaussure=$this->input->post('id_pointure_chaussure');
            $data=array(
            'id_pointure_chaussure' =>$id_pointure_chaussure,
            'url_img' =>$image_name,

            );
            if($this->administration_model->ajoutMenuPrincipaleImg($data)){

                echo json_encode(['succes'=>"1"]);
            }else{

                echo json_encode(['succes'=>"0"]);
            }

        }
    }



     public function listePointureChaussure(){

        $data["infos_pointure_chaussure"]= $this->administration_model->infosPointureChaussure();
        $this->load->view("pg_pointure_chaussure",$data);


    }


 //   
      public function ajoutProduit(){

        
        $data["id_produits"]= $this->administration_model->clePrimaire(10);
         $data["liste_marque"]= $this->administration_model->infosMarque();
        $data["liste_fournisseur"]= $this->administration_model->infosFournisseur();
        $data["liste_categorie"]= $this->administration_model->infosCategoriesProduits();
        $this->load->view("pg_produits_ajout",$data);


     }

      public function uploadImgProduit()
    {
        if (!empty($_FILES)) {
            $targetPath = getcwd() . '/uploads/produits';
            $config['allowed_types'] = 'gif|jpg|jpeg|png';
            $config['file_name'] = date("Y_m_d_H_i_s_").rand();
            $config['upload_path'] = $targetPath;
            $config['allowed_types'] = 'jpg|png';
            $this->load->library('upload', $config);
            $this->upload->initialize($config);
            if ($this->upload->do_upload('file')) {
                $fichier = $this->upload->data();
            }
            thumb($fichier['full_path'],200,200,"./uploads/produits/main_page/200x200_". $fichier['file_name']);
            thumb($fichier['full_path'],70,70,"./uploads/produits/panier/70x70_". $fichier['file_name']);
                        
                        
                        $image_name= $fichier['file_name'];

                        
            $id_produits=$this->input->post('id_produits');
            $data=array(
                'id_produit' =>$id_produits,
                'img' =>$image_name,

            );

             $status_image=1;

                $data_fin=array(

                        
                        'status_image' =>$status_image,
                       
                    );

                $this->administration_model->modifier_infoss_Produits($id_produits,$data_fin);
            if($this->administration_model->ajoutImgProduit($data)){

                echo json_encode(['succes'=>"1"]);
            }else{

                echo json_encode(['succes'=>"0"]);
            }

        }
    }


    public function ajax_Produit_editer()
    {


        $this->form_validation->set_rules('id_produits', 'id_produits', 'trim');
        if ($this->form_validation->run() == FALSE){

            $errors = validation_errors();
            echo json_encode(['error'=>$errors]);

        }else{

             
    
           

            $id_produits=$this->input->post('id_produits');
            $nom_produit=$this->input->post('nom_produit');
            $prix_produit=$this->input->post('prix_produit');
            $prix_solde=$this->input->post('prix_solde');
            $prix_promotionnel=$this->input->post('prix_promotionnel');
            $quantite_totale=$this->input->post('quantite_totale');
            $nom_produit=$this->input->post('nom_produit');
            $id_marque=$this->input->post('id_marque');
            $id_fournisseur=$this->input->post('id_fournisseur');
            $id_categorie_produit=$this->input->post('id_categorie_produit');
            $status_mise_en_ligne=$this->input->post('status_mise_en_ligne');
            $description_produit=$this->input->post('description_produit');
            $date=date("Y-m-d");


            $youtube_lien=$this->input->post('youtube_lien');
            $reduction_pourcent=$this->input->post('reduction_pourcent');

            $caract_taille=$this->input->post('caract_taille');
            $caract_couleur=$this->input->post('caract_couleur');
            $caract_taille_chaussure=$this->input->post('caract_taille_chaussure');

        
           

          
            
          
            $data=array(

                'id_produits' =>$id_produits,
                'nom_produit' =>$nom_produit,
                'prix_produit' =>$prix_produit,
                'prix_solde' =>$prix_solde,
                'prix_promotionnel' =>$prix_promotionnel,
                'quantite_totale' =>$quantite_totale,
                'nom_produit' =>$nom_produit,
                'id_marque' =>$id_marque,
                'id_fournisseur' =>$id_fournisseur,
                'id_categorie_produit' =>$id_categorie_produit,
                'status_mise_en_ligne' =>$status_mise_en_ligne,
                'description_produit' =>$description_produit,

                'caract_taille' =>$caract_taille,
                'caract_couleur' =>$caract_couleur,
                'caract_taille_chaussure' =>$caract_taille_chaussure,

                'lien_youtube' =>$youtube_lien,
                'reduction_pourcent' =>$reduction_pourcent,
                'date' =>$date,
               
               

            );


            $data_clean = $this->security->xss_clean($data);

          
            if($this->administration_model->modifier_infoss_Produits($id_produits,$data_clean)){

                echo json_encode(['succes'=>"1"]);
            }else{

                echo json_encode(['succes'=>"0"]);
            }


        }
    }


    public function delete_uploadImgProduit($id_produits_modifier)
    {


        $id_produit= $this->administration_model->infosProduits_IDprodID($id_produits_modifier);
        $list_img=$this->administration_model->infosImg_IDprod($id_produit);

        foreach ($list_img as $value) {

            $id_img=$value->id_image_produit;
            $this->administration_model->supprim_img_produit($id_img);
        }

        $status_image=0;

        $data=array(

                
                'status_image' =>$status_image,
               
            );

        $this->administration_model->modifier_infoss_Produits($id_produit,$data);

      
    }

    function corrige_img_status(){


        $list_produits=$this->administration_model->infosProduits();

        $nb_produits=0;
        $nb_produits_traite=0;
        foreach ($list_produits as $valeur) {
            $nb_produits=$nb_produits+1;


            $status_image=$valeur->status_image;

            if($status_image ==0){



                    $id_produit=$valeur->id_produits;
                    $nb_image=$this->administration_model->count_image_produit($id_produit);

                    if($nb_image >0){

                        $nb_produits_traite=$nb_produits_traite+1;

                        $status_image=1;

                            $data=array(

                                
                                'status_image' =>$status_image,
                               
                            );

                        $this->administration_model->modifier_infoss_Produits($id_produit,$data);


                    }

            }
            

            
        }


       echo "Resume nb_produit :".$nb_produits." nb_produits_traite :".$nb_produits_traite;

         
    }

     public function ajaxAjoutProduit(){


        $this->form_validation->set_rules('id_produits', 'id_produits', 'trim');
        if ($this->form_validation->run() == FALSE){

            $errors = validation_errors();
            echo json_encode(['error'=>$errors]);

        }else{

             
    
           

            $id_produits=$this->input->post('id_produits');
            $nom_produit=$this->input->post('nom_produit');
            $prix_produit=$this->input->post('prix_produit');
            $prix_solde=$this->input->post('prix_solde');
            $prix_promotionnel=$this->input->post('prix_promotionnel');
            $quantite_totale=$this->input->post('quantite_totale');
            $nom_produit=$this->input->post('nom_produit');
            $id_marque=$this->input->post('id_marque');
            $id_fournisseur=$this->input->post('id_fournisseur');
            $id_categorie_produit=$this->input->post('id_categorie_produit');
            $status_mise_en_ligne=$this->input->post('status_mise_en_ligne');
            $description_produit=$this->input->post('description_produit');
            $date=date("Y-m-d");

            
            
            $caract_taille=$this->input->post('caract_taille');
            $caract_couleur=$this->input->post('caract_couleur');
            $caract_taille_chaussure=$this->input->post('caract_taille_chaussure');



            $nb_image=$this->administration_model->count_image_produit($id_produits);
            $status_image=0;
            if($nb_image>0){
           
               $status_image=1;

            }


            $youtube_lien=$this->input->post('youtube_lien');
            $reduction_pourcent=$this->input->post('reduction_pourcent');

        
           

          
            
          
            $data=array(

                'id_produits' =>$id_produits,
                'nom_produit' =>$nom_produit,
                'prix_produit' =>$prix_produit,
                'prix_solde' =>$prix_solde,
                'prix_promotionnel' =>$prix_promotionnel,
                'quantite_totale' =>$quantite_totale,
                'quantite_restante' =>$quantite_totale,
                'nom_produit' =>$nom_produit,
                'id_marque' =>$id_marque,
                'id_fournisseur' =>$id_fournisseur,
                'id_categorie_produit' =>$id_categorie_produit,
                'status_mise_en_ligne' =>$status_mise_en_ligne,
                'description_produit' =>$description_produit,

                'lien_youtube' =>$youtube_lien,
                'reduction_pourcent' =>$reduction_pourcent,
                'date' =>$date,

                'status_image' =>$status_image,

                'caract_taille' =>$caract_taille,
                'caract_couleur' =>$caract_couleur,

                'caract_taille_chaussure' =>$caract_taille_chaussure,
               
               

            );



            $data_clean = $this->security->xss_clean($data);

            print_r($data_clean);

          
            // if($this->administration_model->ajoutProduits($data_clean)){

            //     echo json_encode(['succes'=>"1"]);
            // }else{

            //     echo json_encode(['succes'=>"0"]);
            // }


        }

    }



    public function ajaxDupliquerProduit(){


        $this->form_validation->set_rules('id_produits', 'id_produits', 'trim');
        if ($this->form_validation->run() == FALSE){

            $errors = validation_errors();
            echo json_encode(['error'=>$errors]);

        }else{

             
    
           

            $id_produits=$this->administration_model->clePrimaire(10);
            $nom_produit=$this->input->post('nom_produit');
            $prix_produit=$this->input->post('prix_produit');
            $prix_solde=$this->input->post('prix_solde');
            $prix_promotionnel=$this->input->post('prix_promotionnel');
            $quantite_totale=$this->input->post('quantite_totale');
            $nom_produit=$this->input->post('nom_produit');
            $id_marque=$this->input->post('id_marque');
            $id_fournisseur=$this->input->post('id_fournisseur');
            $id_categorie_produit=$this->input->post('id_categorie_produit');
            $status_mise_en_ligne=$this->input->post('status_mise_en_ligne');
            $description_produit=$this->input->post('description_produit');
            $date=date("Y-m-d");

            
            
            $caract_taille=$this->input->post('caract_taille');
            $caract_couleur=$this->input->post('caract_couleur');
            $caract_taille_chaussure=$this->input->post('caract_taille_chaussure');



            $nb_image=$this->administration_model->count_image_produit($id_produits);
            $status_image=0;
            if($nb_image>0){
           
               $status_image=1;

            }


            $youtube_lien=$this->input->post('youtube_lien');
            $reduction_pourcent=$this->input->post('reduction_pourcent');

        
           

          
            
          
            $data=array(

                'id_produits' =>$id_produits,
                'nom_produit' =>$nom_produit,
                'prix_produit' =>$prix_produit,
                'prix_solde' =>$prix_solde,
                'prix_promotionnel' =>$prix_promotionnel,
                'quantite_totale' =>$quantite_totale,
                'quantite_restante' =>$quantite_totale,
                'nom_produit' =>$nom_produit,
                'id_marque' =>$id_marque,
                'id_fournisseur' =>$id_fournisseur,
                'id_categorie_produit' =>$id_categorie_produit,
                'status_mise_en_ligne' =>$status_mise_en_ligne,
                'description_produit' =>$description_produit,

                'lien_youtube' =>$youtube_lien,
                'reduction_pourcent' =>$reduction_pourcent,
                'date' =>$date,

                'status_image' =>$status_image,

                'caract_taille' =>$caract_taille,
                'caract_couleur' =>$caract_couleur,

                'caract_taille_chaussure' =>$caract_taille_chaussure,
               
               

            );



            $data_clean = $this->security->xss_clean($data);

          
            if($this->administration_model->ajoutProduits($data_clean)){

                echo json_encode(['succes'=>"1"]);
            }else{

                echo json_encode(['succes'=>"0"]);
            }


        }

    }

    public function suppressionProduit($id_produits){

        
       $this->administration_model->supprim_produit($id_produits);
       $data["infos_produit"]= $this->administration_model->infosProduits();
       $this->load->view("pg_produits",$data);


     }


     //liste des marques

     public function listeMarques()
    {

        
        $data["infos_marques"]= $this->administration_model->infosMarque();
        $this->load->view("pg_marques",$data);
    }

     public function uploadImgMarques()
    {
        if (!empty($_FILES)) {
            $targetPath = getcwd() . '/assets/eshop/image/demo/brands';
            $config['allowed_types'] = 'gif|jpg|jpeg|png';
            $config['file_name'] = date("Y_m_d_H_i_s_").rand();
            $config['upload_path'] = $targetPath;
            $config['allowed_types'] = 'jpg|png';
            $this->load->library('upload', $config);
            $this->upload->initialize($config);
            if ($this->upload->do_upload('file')) {
                $fichier = $this->upload->data();
            }
                        
                        
                        $image_name= $fichier['file_name'];

                        
            $id_marque=$this->input->post('id_marque');
            $data=array(
                'id_marque' =>$id_marque,
                'img' =>$image_name,

            );
            if($this->administration_model->ajoutMenuPrincipaleImg($data)){

                echo json_encode(['succes'=>"1"]);
            }else{

                echo json_encode(['succes'=>"0"]);
            }

        }
    }

    public function ajoutMarques()
    {


        $data["id_marque"]= $this->administration_model->clePrimaire(10);
        $this->load->view("pg_marques_ajout",$data);
    }

    public function editerMarques($id_marque)
    {

        $data["infos_marquesID"]= $this->administration_model->infosMarqueID($id_marque);
        $this->load->view("pg_marques_editer",$data);
    }


     public function ajaxAjoutMarques(){


        $this->form_validation->set_rules('id_marque', 'id_marque', 'trim');
        if ($this->form_validation->run() == FALSE){

            $errors = validation_errors();
            echo json_encode(['error'=>$errors]);

        }else{


    
           

            $id_marque=$this->input->post('id_marque');
            $libelle_marque=$this->input->post('libelle_marque');

            $commentaire=$this->input->post('commentaire');
            $url_img=$this->administration_model->infosImgMarqueID($id_marque);
            

          
            
          
            $data=array(

                'id_marque' =>$id_marque,
                'libelle_marque' =>$libelle_marque,
                'url_img' =>$url_img,
                'commentaire' =>$commentaire,
               
               

            );


            $data_clean = $this->security->xss_clean($data);

          
            if($this->administration_model->ajoutMarque($data_clean)){

                echo json_encode(['succes'=>"1"]);
            }else{

                echo json_encode(['succes'=>"0"]);
            }


        }

    }


    public function ajaxEditerMarques(){


        $this->form_validation->set_rules('id_marque', 'id_marque', 'trim');
        if ($this->form_validation->run() == FALSE){

            $errors = validation_errors();
            echo json_encode(['error'=>$errors]);

        }else{

            $id_marque=$this->input->post('id_marque');
            $libelle_marque=$this->input->post('libelle_marque');

            $commentaire=$this->input->post('commentaire');
            $url_img=$this->administration_model->infosImgMarqueID($id_marque);
            

          
            
          
            $data=array(

                
                'libelle_marque' =>$libelle_marque,
                'url_img' =>$url_img,
                'commentaire' =>$commentaire,
               
               

            );


            $data_clean = $this->security->xss_clean($data);

          
            if($this->administration_model->editerMarque($id_marque,$data_clean)){

                echo json_encode(['succes'=>"1"]);
            }else{

                echo json_encode(['succes'=>"0"]);
            }


        }

    }

    //liste fournisseurs

     public function listeFournisseurs()
    {

        
        $data["infos_Fournisseur"]= $this->administration_model->infosFournisseur();
        $this->load->view("pg_fournisseurs",$data);
    }

    public function ajoutFournisseurs()
    {

        
         $data["id_fournisseur"]= $this->administration_model->clePrimaire(10);
        $this->load->view("pg_fournisseurs_ajout",$data);
    }

     public function ajaxAjoutFournisseurs(){


        $this->form_validation->set_rules('id_partenaires', 'id_partenaires', 'trim');
        if ($this->form_validation->run() == FALSE){

            $errors = validation_errors();
            echo json_encode(['error'=>$errors]);

        }else{

            
          
           

            $id_fournisseur=$this->input->post('id_fournisseur');
            $entreprise_fournisseur=$this->input->post('entreprise_fournisseur');

            $nom_fournisseur=$this->input->post('nom_fournisseur');
            $prenom_fournisseur=$this->input->post('prenom_fournisseur');
            $tel_fournisseur=$this->input->post('tel_fournisseur');
            $email_fournisseur=$this->input->post('email_fournisseur');
            $localisation=$this->input->post('localisation');
         
            
          
            $data=array(

                'id_fournisseur' =>$id_fournisseur,
                'entreprise_fournisseur' =>$entreprise_fournisseur,
                'nom_fournisseur' =>$nom_fournisseur,
                'prenom_fournisseur' =>$prenom_fournisseur,
                'tel_fournisseur' =>$tel_fournisseur,
                'email_fournisseur' =>$email_fournisseur,
                'localisation' =>$localisation,
               

            );


            $data_clean = $this->security->xss_clean($data);

          
            if($this->administration_model->ajoutFournisseur($data_clean)){

                echo json_encode(['succes'=>"1"]);
            }else{

                echo json_encode(['succes'=>"0"]);
            }


        }

    }

     //Utilisateurs 
    public function infosUtilisateurs()
    {
        $data["infos_Utilisateurs"]= $this->administration_model->infosUtilisateurs();
        $this->load->view("pg_utilisateurs",$data);
    }


    public function listeUtilisateur_par_recherche(){

        $recherche_utilisateurs=$this->input->post('recherche_item');
        $data["infos_Utilisateurs"]=$this->administration_model->recherche_utilisateurs($recherche_utilisateurs);
        $this->load->view("pg_utilisateurs_filter_view", $data);

     }


    public function ajoutUtilisateur()
    {

        
        $data["id_administrateur"]= $this->administration_model->clePrimaire(10);
        $data["password"]= $this->administration_model->clePrimaire(10);
        $data["liste_profile"]= $this->administration_model->liste_profile_utilisateurs();
        $this->load->view("pg_utilisateurs_ajout",$data);
    }

    public function ajaxAjoutUtilisateur(){


        $this->form_validation->set_rules('id_administrateur', 'id_administrateur', 'trim');
        if ($this->form_validation->run() == FALSE){

            $errors = validation_errors();
            echo json_encode(['error'=>$errors]);

        }else{

 
           

            $id_administrateur=$this->input->post('id_administrateur');
            $nom_administrateur=$this->input->post('nom_administrateur');
            $prenom_administrateur=$this->input->post('prenom_administrateur');

            $fonction_administrateur=$this->input->post('fonction_administrateur');
            $email_administrateur=$this->input->post('email_administrateur');
            $telephone_administrateur=$this->input->post('telephone_administrateur');

            $password_administrateur=$this->administration_model->clePrimaire(8);

            $id_profile=$this->input->post('id_profile');
            $status=1;
           
            

          
            
          
            $data=array(

                'id_administrateur' =>$id_administrateur,
                'nom_administrateur' =>$nom_administrateur,
                'prenom_administrateur' =>$prenom_administrateur,
                'fonction_administrateur' =>$fonction_administrateur,
                'email_administrateur' =>$email_administrateur,
                'password_administrateur' =>$password_administrateur,
                'telephone_administrateur' =>$telephone_administrateur,
                'id_profile' =>$id_profile,
                'status' =>$status,
               
               

            );


            $data_clean = $this->security->xss_clean($data);

          
            if($this->administration_model->ajoutUtilisateur($data_clean)){

                echo json_encode(['succes'=>"1"]);
            }else{

                echo json_encode(['succes'=>"0"]);
            }


        }

    }

    public function editerUtilisateur($id_administrateur)
    {

        
        $data["id_administrateur"]= $id_administrateur;
        $data["infos_Utilisateur"]= $this->administration_model->infosUtilisateur($id_administrateur);
        $data["liste_profile"]= $this->administration_model->liste_profile_utilisateurs();
        $this->load->view("pg_utilisateurs_modifier",$data);
    }

    public function ajaxModifierUtilisateur(){


        $this->form_validation->set_rules('id_administrateur', 'id_administrateur', 'trim');
        if ($this->form_validation->run() == FALSE){

            $errors = validation_errors();
            echo json_encode(['error'=>$errors]);

        }else{

 
           

            $id_administrateur=$this->input->post('id_administrateur');
            $nom_administrateur=$this->input->post('nom_administrateur');
            $prenom_administrateur=$this->input->post('prenom_administrateur');

            $fonction_administrateur=$this->input->post('fonction_administrateur');
            $email_administrateur=$this->input->post('email_administrateur');
            $telephone_administrateur=$this->input->post('telephone_administrateur');

            $password_administrateur=$this->input->post('password_administrateur');

            $id_profile=$this->input->post('id_profile');
            $status=1;
           
            

          
            
          
            $data=array(

                
                'nom_administrateur' =>$nom_administrateur,
                'prenom_administrateur' =>$prenom_administrateur,
                'fonction_administrateur' =>$fonction_administrateur,
                'email_administrateur' =>$email_administrateur,
                'password_administrateur' =>$password_administrateur,
                'telephone_administrateur' =>$telephone_administrateur,
                'id_profile' =>$id_profile,
                'status' =>$status,
               
               

            );


            $data_clean = $this->security->xss_clean($data);

            print_r($data_clean);

          
            if($this->administration_model->modifier_Utilisateur($id_administrateur,$data_clean)){

                echo json_encode(['succes'=>"1"]);
            }else{

                echo json_encode(['succes'=>"0"]);
            }


        }

    }

     public function suppressionUtilisateur($id_administrateur){

        
       $this->administration_model->supprim_utilisateur($id_administrateur);
       $data["infos_Utilisateurs"]= $this->administration_model->infosUtilisateurs();
        $this->load->view("pg_utilisateurs",$data);


     }


    //magasin

     public function infosMagasins()
    {
        $data["infos_Magasins"]= $this->administration_model->infosMagasins();
        $this->load->view("pg_magasins",$data);
    }


    public function ajoutMagasin()
    {

        
        $data["id_magasin"]= $this->administration_model->clePrimaire(10);
        $data["liste_magasins"]= $this->administration_model->infosMagasins();
        $data["liste_type_magasin"]= $this->administration_model->infosMagasins_type_mod();
        $this->load->view("pg_magasin_ajout",$data);
    }

    public function editerMagasin($id_magasin)
    {

        
        $data["infoMagasin"]= $this->administration_model->editerMagasin($id_magasin);
        $this->load->view("pg_magasin_editer",$data);
    }

    public function ajaxAjoutMagasin(){


        $this->form_validation->set_rules('id_magasin', 'id_magasin', 'trim');
        if ($this->form_validation->run() == FALSE){

            $errors = validation_errors();
            echo json_encode(['error'=>$errors]);

        }else{

 
           

            $id_magasin=$this->input->post('id_magasin');
            $libelle_magasin=$this->input->post('libelle_magasin');
            $telephone_magasin=$this->input->post('telephone_magasin');

            $email_magasin=$this->input->post('email_magasin');
            $type_magasin=$this->input->post('type_magasin');
            $nom_gerant_magasin=$this->input->post('nom_gerant_magasin');
            $prenom_gerant_magasin=$this->input->post('prenom_gerant_magasin');
            $telephone_gerant_magasin=$this->input->post('telephone_gerant_magasin');

            

            
            $status=1;
           
            
          
          
            
          
            $data=array(

                'id_magasin' =>$id_magasin,
                'libelle_magasin' =>$libelle_magasin,
                'telephone_magasin' =>$telephone_magasin,
                'email_magasin' =>$email_magasin,
                'type_magasin' =>$type_magasin,
                'nom_gerant_magasin' =>$nom_gerant_magasin,
                'prenom_gerant_magasin' =>$prenom_gerant_magasin,
                'telephone_gerant_magasin' =>$telephone_gerant_magasin,
                'status' =>$status,
               
               

            );


            $data_clean = $this->security->xss_clean($data);

          
            if($this->administration_model->ajoutMagasin($data_clean)){

                echo json_encode(['succes'=>"1"]);
            }else{

                echo json_encode(['succes'=>"0"]);
            }


        }

    }

    public function ajaxEditerMagasin(){


        $this->form_validation->set_rules('id_magasin', 'id_magasin', 'trim');
        if ($this->form_validation->run() == FALSE){

            $errors = validation_errors();
            echo json_encode(['error'=>$errors]);

        }else{

 
           

            $id_magasin=$this->input->post('id_magasin');
            $libelle_magasin=$this->input->post('libelle_magasin');
            $telephone_magasin=$this->input->post('telephone_magasin');

            $email_magasin=$this->input->post('email_magasin');
            $type_magasin=$this->input->post('type_magasin');
            $nom_gerant_magasin=$this->input->post('nom_gerant_magasin');
            $prenom_gerant_magasin=$this->input->post('prenom_gerant_magasin');
            $telephone_gerant_magasin=$this->input->post('telephone_gerant_magasin');
            $email_gerant_magasin=$this->input->post('email_gerant_magasin');

            

            
            $status=$this->input->post('status');;
           
            
          
          
            
          
            $data=array(

                'id_magasin' =>$id_magasin,
                'libelle_magasin' =>$libelle_magasin,
                'telephone_magasin' =>$telephone_magasin,
                'email_magasin' =>$email_magasin,
                'type_magasin' =>$type_magasin,
                'nom_gerant_magasin' =>$nom_gerant_magasin,
                'prenom_gerant_magasin' =>$prenom_gerant_magasin,
                'telephone_gerant_magasin' =>$telephone_gerant_magasin,
                'email_gerant_magasin' =>$email_gerant_magasin,
                'status' =>$status,
               
               

            );


            $data_clean = $this->security->xss_clean($data);

          
            if($this->administration_model->modifier_infos_magasin($id_magasin,$data_clean)){

                echo json_encode(['succes'=>"1"]);
            }else{

                echo json_encode(['succes'=>"0"]);
            }


        }

    }

     //magasin type

     public function infosMagasins_type()
    {
        $data["infosMagasins_type"]= $this->administration_model->infosMagasins_type();
        $this->load->view("pg_magasins_type",$data);
    }


    public function ajoutMagasin_type()
    {

        
        $data["id_magasin_type"]= $this->administration_model->clePrimaire(10);
        $this->load->view("pg_magasin_type_ajout",$data);
    }

    public function editerMagasin_type($id_magasin)
    {

        
        $data["infoMagasin"]= $this->administration_model->editerMagasin($id_magasin);
        $this->load->view("pg_magasin_editer",$data);
    }

    public function ajaxAjoutMagasin_type(){


        $this->form_validation->set_rules('id_magasin', 'id_magasin', 'trim');
        if ($this->form_validation->run() == FALSE){

            $errors = validation_errors();
            echo json_encode(['error'=>$errors]);

        }else{

 
           

            $id_magasin=$this->input->post('id_magasin');
            $libelle_magasin=$this->input->post('libelle_magasin');
            $telephone_magasin=$this->input->post('telephone_magasin');

            $email_magasin=$this->input->post('email_magasin');
            $type_magasin=$this->input->post('type_magasin');
            $nom_gerant_magasin=$this->input->post('nom_gerant_magasin');
            $prenom_gerant_magasin=$this->input->post('prenom_gerant_magasin');
            $telephone_gerant_magasin=$this->input->post('telephone_gerant_magasin');
            $id_type_magasin=$this->input->post('id_type_magasin');

            

            
            $status=1;
           
            
          
          
            
          
            $data=array(

                'id_magasin' =>$id_magasin,
                'libelle_magasin' =>$libelle_magasin,
                'telephone_magasin' =>$telephone_magasin,
                'email_magasin' =>$email_magasin,
                'type_magasin' =>$type_magasin,
                'nom_gerant_magasin' =>$nom_gerant_magasin,
                'prenom_gerant_magasin' =>$prenom_gerant_magasin,
                'telephone_gerant_magasin' =>$telephone_gerant_magasin,
                'id_type_magasin' =>$id_type_magasin,
                'status' =>$status,
               
               

            );


            $data_clean = $this->security->xss_clean($data);

          
            if($this->administration_model->ajoutMagasin($data_clean)){

                echo json_encode(['succes'=>"1"]);
            }else{

                echo json_encode(['succes'=>"0"]);
            }


        }

    }

    public function ajaxEditerMagasin_type(){


        $this->form_validation->set_rules('id_magasin', 'id_magasin', 'trim');
        if ($this->form_validation->run() == FALSE){

            $errors = validation_errors();
            echo json_encode(['error'=>$errors]);

        }else{

 
           

            $id_magasin=$this->input->post('id_magasin');
            $libelle_magasin=$this->input->post('libelle_magasin');
            $telephone_magasin=$this->input->post('telephone_magasin');

            $email_magasin=$this->input->post('email_magasin');
            $type_magasin=$this->input->post('type_magasin');
            $nom_gerant_magasin=$this->input->post('nom_gerant_magasin');
            $prenom_gerant_magasin=$this->input->post('prenom_gerant_magasin');
            $telephone_gerant_magasin=$this->input->post('telephone_gerant_magasin');
            $email_gerant_magasin=$this->input->post('email_gerant_magasin');

            

            
            $status=$this->input->post('status');;
           
            
          
          
            
          
            $data=array(

                'id_magasin' =>$id_magasin,
                'libelle_magasin' =>$libelle_magasin,
                'telephone_magasin' =>$telephone_magasin,
                'email_magasin' =>$email_magasin,
                'type_magasin' =>$type_magasin,
                'nom_gerant_magasin' =>$nom_gerant_magasin,
                'prenom_gerant_magasin' =>$prenom_gerant_magasin,
                'telephone_gerant_magasin' =>$telephone_gerant_magasin,
                'email_gerant_magasin' =>$email_gerant_magasin,
                'status' =>$status,
               
               

            );


            $data_clean = $this->security->xss_clean($data);

          
            if($this->administration_model->modifier_infos_magasin($id_magasin,$data_clean)){

                echo json_encode(['succes'=>"1"]);
            }else{

                echo json_encode(['succes'=>"0"]);
            }


        }

    }


     //magasin categories stock

     public function infosCategories_stock()
    {
        $data["infosCategories_stock"]= $this->administration_model->infosCategories_stock();
        $this->load->view("pg_categorie_stock",$data);
    }


    public function ajoutCategories_stock()
    {
     
        $data["infosCategories_stock"]= $this->administration_model->infosCategories_stock(); 


        $data["id_categorie_produit"]= $this->administration_model->clePrimaire(10);
        $this->load->view("pg_categorie_stock_ajout",$data);
    }

    public function editerCategories_stock($id_magasin)
    {

        
        $data["infoMagasin"]= $this->administration_model->editerMagasin($id_magasin);
        $this->load->view("pg_magasin_editer",$data);
    }

    public function ajaxCategories_stock(){


        $this->form_validation->set_rules('id_categorie_produit', 'id_categorie_produit', 'trim');
        if ($this->form_validation->run() == FALSE){

            $errors = validation_errors();
            echo json_encode(['error'=>$errors]);

        }else{

 
           

            $id_categorie_produit=$this->input->post('id_categorie_produit');
            $libelle_categorie_produit=$this->input->post('libelle_categorie_produit');
            $id_categorie_principale=$this->input->post('id_categorie_principale');

            $Commentaire=$this->input->post('Commentaire');
            $en_stock=1;
           

            
            
           
            
          
          
            
          
            $data=array(

                'id_categorie_produit' =>$id_categorie_produit,
                'libelle_categorie_produit' =>$libelle_categorie_produit,
                'en_stock' =>$en_stock,
                'Commentaire' =>$Commentaire,
            );

            if($id_categorie_principale <> "0"){

                $nb_id_categorie_produit=$this->administration_model->compterCategories_stock();
                $id_categorie_secondaire=$nb_id_categorie_produit+1;

                 $data_sc=array(

                'id_categorie_principale' =>$id_categorie_principale,
                'id_categorie_secondaire' =>$id_categorie_secondaire,
               
                 );
             $this->administration_model->ajoutCategories_stock_sc($data_sc);

            }


            $data_clean = $this->security->xss_clean($data);

          
            if($this->administration_model->ajoutCategories_stock($data_clean)){

                echo json_encode(['succes'=>"1"]);
            }else{

                echo json_encode(['succes'=>"0"]);
            }


        }

    }

    public function ajaxEditerCategories_stock(){


        $this->form_validation->set_rules('id_magasin', 'id_magasin', 'trim');
        if ($this->form_validation->run() == FALSE){

            $errors = validation_errors();
            echo json_encode(['error'=>$errors]);

        }else{

 
           

            $id_magasin=$this->input->post('id_magasin');
            $libelle_magasin=$this->input->post('libelle_magasin');
            $telephone_magasin=$this->input->post('telephone_magasin');

            $email_magasin=$this->input->post('email_magasin');
            $type_magasin=$this->input->post('type_magasin');
            $nom_gerant_magasin=$this->input->post('nom_gerant_magasin');
            $prenom_gerant_magasin=$this->input->post('prenom_gerant_magasin');
            $telephone_gerant_magasin=$this->input->post('telephone_gerant_magasin');
            $email_gerant_magasin=$this->input->post('email_gerant_magasin');

            

            
            $status=$this->input->post('status');;
           
            
          
          
            
          
            $data=array(

                'id_magasin' =>$id_magasin,
                'libelle_magasin' =>$libelle_magasin,
                'telephone_magasin' =>$telephone_magasin,
                'email_magasin' =>$email_magasin,
                'type_magasin' =>$type_magasin,
                'nom_gerant_magasin' =>$nom_gerant_magasin,
                'prenom_gerant_magasin' =>$prenom_gerant_magasin,
                'telephone_gerant_magasin' =>$telephone_gerant_magasin,
                'email_gerant_magasin' =>$email_gerant_magasin,
                'status' =>$status,
               
               

            );


            $data_clean = $this->security->xss_clean($data);

          
            if($this->administration_model->modifier_infos_magasin($id_magasin,$data_clean)){

                echo json_encode(['succes'=>"1"]);
            }else{

                echo json_encode(['succes'=>"0"]);
            }


        }

    }


         //groupe produits -sc

     public function infosGroupe_stock()
    {
        $data["infosGroupe_stock"]= $this->administration_model->infosGroupe_stock();
        $this->load->view("pg_groupe_stock",$data);
    }


    public function ajoutGroupe_stock()
    {
     
       
        $data["infosGroupe_stock"]= $this->administration_model->infosGroupe_stock();
        $data["id_groupe"]= $this->administration_model->clePrimaire(10);
        $this->load->view("pg_groupe_stock_ajout",$data);
    }

    public function editerGroupe_stock($id_magasin)
    {

        
        $data["infoMagasin"]= $this->administration_model->editerMagasin($id_magasin);
        $this->load->view("pg_magasin_editer",$data);
    }

    public function ajaxGroupe_stock(){


        $this->form_validation->set_rules('id_groupe', 'id_groupe', 'trim');
        if ($this->form_validation->run() == FALSE){

            $errors = validation_errors();
            echo json_encode(['error'=>$errors]);

        }else{

             
           

            $id_groupe=$this->input->post('id_groupe');
            $libelle_groupe=$this->input->post('libelle_groupe');
            $id_groupe_principale=$this->input->post('id_groupe_principale');

            $commentaire_groupe=$this->input->post('commentaire_groupe');
           
          
            $data=array(

                'id_groupe' =>$id_groupe,
                'libelle_groupe' =>$libelle_groupe,
                'commentaire_groupe' =>$commentaire_groupe,
            );

            if($id_groupe_principale <> "0"){

               

                 $data_sc=array(

                'id_groupe_principale' =>$id_groupe_principale,
                'id_groupe_secondaire' =>$id_groupe,
               
                 );
             $this->administration_model->ajoutGroupe_stock_sc($data_sc);

            }


            $data_clean = $this->security->xss_clean($data);

          
            if($this->administration_model->ajoutGroupe_stock($data_clean)){

                echo json_encode(['succes'=>"1"]);
            }else{

                echo json_encode(['succes'=>"0"]);
            }


        }

    }

    public function ajaxEditerGroupe_stock(){


        $this->form_validation->set_rules('id_magasin', 'id_magasin', 'trim');
        if ($this->form_validation->run() == FALSE){

            $errors = validation_errors();
            echo json_encode(['error'=>$errors]);

        }else{

 
           

            $id_magasin=$this->input->post('id_magasin');
            $libelle_magasin=$this->input->post('libelle_magasin');
            $telephone_magasin=$this->input->post('telephone_magasin');

            $email_magasin=$this->input->post('email_magasin');
            $type_magasin=$this->input->post('type_magasin');
            $nom_gerant_magasin=$this->input->post('nom_gerant_magasin');
            $prenom_gerant_magasin=$this->input->post('prenom_gerant_magasin');
            $telephone_gerant_magasin=$this->input->post('telephone_gerant_magasin');
            $email_gerant_magasin=$this->input->post('email_gerant_magasin');

            

            
            $status=$this->input->post('status');;
           
            
          
          
            
          
            $data=array(

                'id_magasin' =>$id_magasin,
                'libelle_magasin' =>$libelle_magasin,
                'telephone_magasin' =>$telephone_magasin,
                'email_magasin' =>$email_magasin,
                'type_magasin' =>$type_magasin,
                'nom_gerant_magasin' =>$nom_gerant_magasin,
                'prenom_gerant_magasin' =>$prenom_gerant_magasin,
                'telephone_gerant_magasin' =>$telephone_gerant_magasin,
                'email_gerant_magasin' =>$email_gerant_magasin,
                'status' =>$status,
               
               

            );


            $data_clean = $this->security->xss_clean($data);

          
            if($this->administration_model->modifier_infos_magasin($id_magasin,$data_clean)){

                echo json_encode(['succes'=>"1"]);
            }else{

                echo json_encode(['succes'=>"0"]);
            }


        }

    }


           //groupe famille -sc

     public function infosFamille_stock()
    {
        $data["infosFamille_stock"]= $this->administration_model->infosFamille_stock();
        $this->load->view("pg_famille_stock",$data);
    }


    public function ajoutFamille_stock()
    {
     
       
        $data["infosFamille_stock"]= $this->administration_model->infosFamille_stock();
        $data["id_famille_produit"]= $this->administration_model->clePrimaire(10);
        $this->load->view("pg_famille_stock_ajout",$data);
    }

    public function editerFamille_stock($id_magasin)
    {

        
        $data["infoMagasin"]= $this->administration_model->editerMagasin($id_magasin);
        $this->load->view("pg_magasin_editer",$data);
    }

    public function ajaxFamille_stock(){


        $this->form_validation->set_rules('id_famille_produit', 'id_famille_produit', 'trim');
        if ($this->form_validation->run() == FALSE){

            $errors = validation_errors();
            echo json_encode(['error'=>$errors]);

        }else{

             
          

            $id_famille_produit=$this->input->post('id_famille_produit');
            $id_famille_principale=$this->input->post('id_famille_principale'); 
            $libelle_famille_produit=$this->input->post('libelle_famille_produit');
            $commentaire=$this->input->post('commentaire');
          
             $data=array(

                'id_famille_produit' =>$id_famille_produit,
                'libelle_famille_produit' =>$libelle_famille_produit,
                'commentaire' =>$commentaire,
               

            );



            if($id_famille_principale <> "0"){

               

                 $data_sc=array(

                'id_famille_principale' =>$id_famille_principale,
                'id_famille_secondaire' =>$id_famille_produit,
               
                 );
             $this->administration_model->ajoutFamille_stock_sc($data_sc);

            }


            $data_clean = $this->security->xss_clean($data);

          
            if($this->administration_model->ajoutFamille_stock($data_clean)){

                echo json_encode(['succes'=>"1"]);
            }else{

                echo json_encode(['succes'=>"0"]);
            }


        }

    }

    public function ajaxEditerFamille_stock(){


        $this->form_validation->set_rules('id_Famille', 'id_Famille', 'trim');
        if ($this->form_validation->run() == FALSE){

            $errors = validation_errors();
            echo json_encode(['error'=>$errors]);

        }else{

 
            
                                              

            $id_Famille=$this->input->post('id_Famille');
            $id_Famille_principale=$this->input->post('id_Famille_principale');
            $libelle_Famille=$this->input->post('libelle_Famille');

            $commentaire_Famille=$this->input->post('commentaire_Famille');
      
            
          
          
            
          
            $data=array(

                'id_famille_produit' =>$id_Famille,
                'libelle_famille_produit' =>$libelle_Famille,
                'commentaire' =>$commentaire_Famille,
               

            );


            $data_clean = $this->security->xss_clean($data);

          
            if($this->administration_model->modifier_infos_magasin($id_magasin,$data_clean)){

                echo json_encode(['succes'=>"1"]);
            }else{

                echo json_encode(['succes'=>"0"]);
            }


        }

    }


       //groupe depots

     public function infosDepot_stock()
    {
        $data["infosDepot_stock"]= $this->administration_model->infosDepot_stock();
        $this->load->view("pg_depots",$data);
    }


    public function ajoutDepot_stock()
    {
     
       
        $data["infosMagasins"]= $this->administration_model->infosMagasins();
        $data["id_depot"]= $this->administration_model->clePrimaire(10);
        $this->load->view("pg_depot_ajout",$data);
    }

    public function editerDepot_stock($id_magasin)
    {

        
        $data["infoMagasin"]= $this->administration_model->editerMagasin($id_magasin);
        $this->load->view("pg_magasin_editer",$data);
    }

    public function ajaxDepot_stock(){


        $this->form_validation->set_rules('id_depot', 'id_depot', 'trim');
        if ($this->form_validation->run() == FALSE){

            $errors = validation_errors();
            echo json_encode(['error'=>$errors]);

        }else{

             
            
            $id_depot=$this->input->post('id_depot');
            $id_magasin=$this->input->post('id_magasin');
            $libelle_depot=$this->input->post('libelle_depot'); 
            $localisation=$this->input->post('localisation');
           
          
             $data=array(


                'id_depot' =>$id_depot,
                'id_magasin' =>$id_magasin,
                'libelle_depot' =>$libelle_depot,
                'localisation' =>$localisation,
               

            );





            $data_clean = $this->security->xss_clean($data);

          
            if($this->administration_model->ajoutDepot_stock($data_clean)){

                echo json_encode(['succes'=>"1"]);
            }else{

                echo json_encode(['succes'=>"0"]);
            }


        }

    }

    public function ajaxEditerDepot_stock(){


        $this->form_validation->set_rules('id_Famille', 'id_Famille', 'trim');
        if ($this->form_validation->run() == FALSE){

            $errors = validation_errors();
            echo json_encode(['error'=>$errors]);

        }else{

 
            
                                              

            $id_Famille=$this->input->post('id_Famille');
            $id_Famille_principale=$this->input->post('id_Famille_principale');
            $libelle_Famille=$this->input->post('libelle_Famille');

            $commentaire_Famille=$this->input->post('commentaire_Famille');
      
            
          
          
            
          
            $data=array(

                'id_famille_produit' =>$id_Famille,
                'libelle_famille_produit' =>$libelle_Famille,
                'commentaire' =>$commentaire_Famille,
               

            );


            $data_clean = $this->security->xss_clean($data);

          
            if($this->administration_model->modifier_infos_magasin($id_magasin,$data_clean)){

                echo json_encode(['succes'=>"1"]);
            }else{

                echo json_encode(['succes'=>"0"]);
            }


        }

    }

    //produits stock

    public function listeProduits_stock(){

        $data["infos_produit"]= $this->administration_model->infosProduits_enstock();
        $this->load->view("pg_produits_stock",$data);


    }


    public function ajoutProduit_stock(){

        
        $data["id_produits"]= $this->administration_model->clePrimaire(10);
         $data["liste_marque"]= $this->administration_model->infosMarque();
        $data["liste_fournisseur"]= $this->administration_model->infosFournisseur();
        $data["liste_categorie"]= $this->administration_model->infosCategoriesProduits();

        $data["liste_famille"]= $this->administration_model->infosFamille_stock();
        $data["liste_groupe"]= $this->administration_model->infosGroupe_stock();
      
        $this->load->view("pg_produit_stock_ajout",$data);


     }

      public function ajaxAjoutProduit_stock(){


        $this->form_validation->set_rules('id_produits', 'id_produits', 'trim');
        if ($this->form_validation->run() == FALSE){

            $errors = validation_errors();
            echo json_encode(['error'=>$errors]);

        }else{

             
    
           

            $id_produits=$this->input->post('id_produits');
            $nom_produit=$this->input->post('nom_produit');
            $prix_produit=$this->input->post('prix_produit');
            $prix_solde=$this->input->post('prix_solde');
            $prix_promotionnel=$this->input->post('prix_promotionnel');
            $quantite_totale=$this->input->post('quantite_totale');
            $nom_produit=$this->input->post('nom_produit');
            $id_marque=$this->input->post('id_marque');
            $id_fournisseur=$this->input->post('id_fournisseur');
            $id_categorie_produit=$this->input->post('id_categorie_produit');
            $status_mise_en_ligne=$this->input->post('status_mise_en_ligne');
            $description_produit=$this->input->post('description_produit');
            $date=date("Y-m-d");

            $code_produit=$this->input->post('code_produit');
            $stock_minimum=$this->input->post('stock_minimum');
            $quantite_par_emballage=$this->input->post('quantite_par_emballage');
            $poids_unitaire=$this->input->post('poids_unitaire');
            $id_sous_categorie=$this->input->post('id_sous_categorie');
            $id_famille=$this->input->post('id_famille');
            $id_sous_famille=$this->input->post('id_sous_famille');
            $id_groupe=$this->input->post('id_groupe');
            $prix_achat=$this->input->post('prix_achat');
            $code_barre_recu=$this->input->post('code_barre');
            $code_barre=trim($code_barre_recu);
            $reduction_pourcent=$this->input->post('reduction_pourcent');
            


            $id_sous_groupe=$this->input->post('youtube_lien');
            
           

          
            
          
            $data=array(

                'id_produits' =>$id_produits,
                'nom_produit' =>$nom_produit,
                'prix_produit' =>$prix_produit,
                'prix_solde' =>$prix_solde,
                'prix_promotionnel' =>$prix_promotionnel,
                'quantite_totale' =>$quantite_totale,
                'id_marque' =>$id_marque,
                'id_fournisseur' =>$id_fournisseur,
                'id_categorie_produit' =>$id_categorie_produit,
                'status_mise_en_ligne' =>$status_mise_en_ligne,
                'description_produit' =>$description_produit,
                'lien_youtube' =>$youtube_lien,
                'reduction_pourcent' =>$reduction_pourcent,
                'date' =>$date,

                'code_produit' =>$code_produit,
                'stock_minimum' =>$stock_minimum,
                'quantite_par_emballage' =>$quantite_par_emballage,
                
                'id_famille' =>$id_famille,
                'id_groupe' =>$id_groupe,
                
                'prix_achat' =>$prix_achat,
                'code_barre' =>$code_barre,
               
               

            );


            $data_clean = $this->security->xss_clean($data);

          
            if($this->administration_model->ajoutProduits($data_clean)){

                echo json_encode(['succes'=>"1"]);
            }else{

                echo json_encode(['succes'=>"0"]);
            }


        }

    }

    //produits commande

    

    public function listeProduits_commande()
    {

         $critere_recherche=$this->input->post('search_input');
            if(isset($critere_recherche)){

                  if($critere_recherche ==""){

                     $data["infos_commande"]= $this->administration_model->infosProduits_commande();
                     $this->load->view("pg_commande_ajax",$data);


                  }else{



                      $data["infos_commande"]= $this->administration_model->infosCommande_ajax($critere_recherche);
                      $this->load->view("pg_commande_ajax",$data);



                  }

            }else{

              $data["infos_commande"]= $this->administration_model->infosProduits_commande();
              $this->load->view("pg_commande",$data);
            }

        
        
    }


     //produits commande

    public function editer_commande($id_commande){

        $data["id_commande"]=$id_commande;
        $data["infos_commande_id"]= $this->administration_model->infosProduits_commande_ID($id_commande);
        $this->load->view("pg_commande_editer",$data);


    }

    function transfere_commande_client($id_liaison_com_pro){


        $data["id_liaison_com_pro"]=$id_liaison_com_pro;
        $data["liste_fournisseur"]=$this->administration_model->infosFournisseur();
        $this->load->view("pg_transferer_commande",$data);

    }

    function ajaxTranferFournisseur(){


        $id_fournisseur=$this->input->post('id_fournisseur');
        $id_liaison_com_pro=$this->input->post('id_liaison_com_pro');

         $data_nouv_fournisseur=array(

                                'id_fournisseur' =>$id_fournisseur,

                              
                             );

         echo $id_liaison_com_pro;
         echo $id_fournisseur;

         print_r($data_nouv_fournisseur);
        

        $this->administration_model->modifier_infos_commande_prodID($id_liaison_com_pro,$data_nouv_fournisseur);


          
        



    }


    function supprimer_commande_client($id_produit,$id_commande,$id_liaison_com_pro){

    

        if($this->administration_model->supprimLiaison_produit($id_liaison_com_pro)){

            $nouv_montant_commande=$this->administration_model->infosProduits_livraison_montant($id_commande);

                

                

                $data_nouv_commande=array(

                                'montant_commande' =>$nouv_montant_commande,

                              
                             );

               


                $this->administration_model->modifier_infos_commande($id_commande,$data_nouv_commande);

                $this->editer_commande($id_commande);




        }

        




    }


    function confirmation_commande_client($id_commande,$status){



        $status_commande=$status;
        $data=array(

                'status_commande' =>$status_commande,
              
            );

        if($this->administration_model->modifier_infos_commande($id_commande,$data)){


        $id_client=$this->administration_model->get_idclient_commande($id_commande);
        $montant_commande=$this->administration_model->get_montant_commande($id_commande);
        $tel_client=$this->administration_model->get_telclient($id_client);
        $tel_client_complet="225".$tel_client;

        $message="Votre commande N° ".$id_commande." pour un montant de ".$montant_commande." Fcfa a été confirmée, Notre equipe de livraison vous contactera dans de tres brefs délai.";

       $this->sms_model->envoie_unitaire($tel_client_complet,$message);
       
                
            if($status_commande == "1"){

                $list_comd_produit=$this->administration_model->get_informations_commande_produit($id_commande);

                foreach ($list_comd_produit as $value) {


                    $id_produit=$value->id_produit;
                    $id_fournisseur=$this->administration_model->infosProduits_IDfournisseur($id_produit);

                    $tel_fournisseur=$this->administration_model->get_telfournisseur($id_fournisseur);
                    $tel_fournisseur_complet="225".$tel_fournisseur;

                    echo $tel_fournisseur." /";

                    $nomprod=$this->administration_model->get_designation_produit($id_produit);

                    $comp_nom_produit=strlen ($nomprod);
                    if($comp_nom_produit > 18){
                
                      $nom_prod_reduit=substr($nomprod, 0,18);

                    }else{

                      $nom_prod_reduit=$nomprod;


                    }

                    $message_fournisseur="Votre produit '".$nom_prod_reduit."'  fait l'objet d'une commande par un client. Nous vous prions de bien vouloir le transferer dans nos locaux, Maxshop CI.";

                    $this->sms_model->envoie_unitaire($tel_fournisseur_complet,$message_fournisseur);
                    
                    
                    
                    
                   
                }


            }



            if($status_commande == "10"){

                $list_comd_produit=$this->administration_model->get_informations_commande_produit($id_commande);

                foreach ($list_comd_produit as $value) {


                    $id_produit=$value->id_produit;
                    $id_fournisseur=$this->administration_model->infosProduits_IDfournisseur($id_produit);
                    
                    $status_fournisseur=10;
                     $data_fournisseur=array(

                        'id_fournisseur' =>$id_fournisseur,
                        'status_fournisseur' =>$status_fournisseur,

                      
                     );



                    $this->administration_model->modifier_infos_commande_prod($id_commande,$data_fournisseur);
                   
                }


            }


            if($status_commande == "4"){

                $list_comd_produit=$this->administration_model->get_informations_commande_produit($id_commande);

                foreach ($list_comd_produit as $value) {


                    $id_produit=$value->id_produit;
                    $montant=$value->montant;
                    $montant_frais_livraison=1000;
                    $montant_frais_commission=($montant*10)/100;
                    $profit_net_fournisseur=$montant - $montant_frais_livraison - $montant_frais_commission;
                    $profit_net_maxshop=$montant_frais_livraison + $montant_frais_commission;
                    $id_fournisseur=$this->administration_model->infosProduits_IDfournisseur($id_produit);
                    
                   
                     $data_portefeuille=array(

                        'id_commande' =>$id_commande,
                        'id_produit' =>$id_produit,
                        'id_fournisseur' =>$id_fournisseur,



                        'montant_frais_livraison' =>$montant_frais_livraison,
                        'montant_frais_commission' =>$montant_frais_commission,
                        'profit_net_fournisseur' =>$profit_net_fournisseur,

                        'profit_net_maxshop' =>$profit_net_maxshop

                      
                     );

                     $this->administration_model->ajoutInfosPortefeuille($data_portefeuille);


                    



                   
                   
                }


            }

            if($status_commande == "5"){


                $this->administration_model->modifier_infos_commande($id_commande,$data);


            }
           

            redirect("administration/listeProduits_commande");

        }
       
    }


    function livraison_commande_client($id_commande,$id_liaison_com_pro,$status){



        $status_fournisseur=$status;
        $data=array(

                'status_fournisseur' =>$status_fournisseur,
              
            );

        if($this->administration_model->modifier_infos_commande_prodID($id_liaison_com_pro,$data)){

          if($status == "1"){


            $nb_nn_connecte=$this->administration_model->compterProduitNonLivre($id_commande);

            echo $id_commande;


            if($nb_nn_connecte == "0"){

                $status_commande="2";

                $datacmd=array(

                'status_commande' =>$status_commande,
              
               );

               $this->administration_model->modifier_infos_commande($id_commande,$datacmd);

            }


          }

            

           redirect("administration/editer_commande/$id_commande");

        }
       
    }

   

     

    //pg caisse
    public function caisse(){

        
        $this->load->view("pg_caisse");


    }

    public function facture(){

        
        $this->load->view("pg_facture");


    }

     public function ajaxCodebarre(){


       $code_barre=$this->input->post('code_barre');




          
            if($this->administration_model->infosProduits_enstock_codebarre($code_barre)){

                 $info_code_barre=$this->administration_model->infosProduits_enstock_codebarre($code_barre);

                 


                 foreach ($info_code_barre as $value) {

                    $id_produits=$value->id_produits;
                    $nom_produit=$value->nom_produit;
                    $prix_produit=$value->prix_produit;
                    
                    
                       
                 }

               
                $arr = array('succes'=>"1",
                             'id_produits' => $id_produits,
                             'designation_produit' => $nom_produit,
                             'prix_unitaire' => $prix_produit,
                             );

                $data = array(
                    'id'      => $id_produits,
                    'name'      => $nom_produit,
                    'price'   => $prix_produit,
                    'qty'   => 1,
                    'options' => array('type' => 'paiement_caisse')
                    
                    
                 );
 
                $this->cart->insert($data);


                echo json_encode($arr);
            }else{

                echo json_encode(['succes'=>"0"]);
            }


            

    }


      public function ajaxCommande(){


      $list_souhaits=$this->cart->contents();
      echo "<pre>";
      print_r($list_souhaits);
      echo "</pre>";

    

            $date=date("Y-m-d");
            $code_commande=$this->administration_model->clePrimaire(4);
            $id_commande="C".$date.$code_commande;
    
      $montant_commande_t=0;
      foreach ($list_souhaits as $value) {


           $type_paiement=$value["options"]["type"];
           if($type_paiement =="paiement_caisse"){

             $id_produit=$value["id"];
             $prix_unitaire=$value["price"];
             $quantite=$value["qty"];
             $montant=$value["subtotal"];
             $montant_commande_t=$montant_commande_t+$montant;
             $id_fournisseur=$this->administration_model->get_id_fournisseur_produit($id_produit);


             $liaison_command_produit = array(
                                                'id_commande' => $id_commande,
                                                'id_produit' => $id_produit,
                                                'date' => $date,
                                                'prix_unitaire' => $prix_unitaire,
                                                'quantite' => $quantite,
                                                'id_fournisseur' => $id_fournisseur,
                                                'montant' => $montant,
                                              );

             $this->administration_model->ajoutCommandeLiaisonProduit($liaison_command_produit);


             $infos_produit=$this->administration_model->infosProduits_IDprod($id_produit);

            


            $quantite_prod_depart=0;
             foreach ($infos_produit as $val) {
               
                  $quantite_prod_depart=$val->quantite_totale;
             }

              $quantite_prod_restante=$quantite_prod_depart-$quantite;



             $status_produit = array(
                                                'en_stock' => 1,
                                                'quantite_restante' => $quantite_prod_restante,
                                               
                                    );

             $this->administration_model->modifier_produit($id_produit,$status_produit);
           
           
          }

        }
      



      $data_commande = array(
                                                'id_commande' => $id_commande,
                                                'montant_commande' => $montant_commande_t,
                                                'date' => $date,
                                                'status_commande' => 1,
                                                
                            );

      $this->administration_model->ajoutCommandePrd($data_commande);

  }

  //vendeurs

   public function listeVendeurs()
    {

         $critere_recherche=$this->input->post('search_input');
            if(isset($critere_recherche)){

                  if($critere_recherche ==""){

                    $data["infos_Fournisseur"]= $this->administration_model->infosFournisseur_vendeur();
                    $this->load->view("pg_vendeur_ajax",$data);


                  }else{



                     $data["infos_Fournisseur"]= $this->administration_model->infosVendeur_ajax($critere_recherche);
                     $this->load->view("pg_vendeur_ajax",$data);



                  }

            }else{

              $data["infos_Fournisseur"]= $this->administration_model->infosFournisseur_vendeur();
              $this->load->view("pg_vendeurs",$data);
            }

        
        
    }

    

    public function ajoutVendeurs()
    {

        
         $data["id_fournisseur"]= $this->administration_model->clePrimaire(10);
        $this->load->view("pg_vendeurs_ajout",$data);
    }

    public function editerVendeurs($id_fournisseur)
    {

        
         $data["infos_FournisseurID"]= $this->administration_model->infosFournisseur_vendeurID($id_fournisseur);
        $this->load->view("pg_vendeurs_editer",$data);
    }

     public function ajaxAjoutVendeurs(){


        $this->form_validation->set_rules('id_partenaires', 'id_partenaires', 'trim');
        if ($this->form_validation->run() == FALSE){

            $errors = validation_errors();
            echo json_encode(['error'=>$errors]);

        }else{

            
          
           

            $id_fournisseur=$this->input->post('id_fournisseur');
            $entreprise_fournisseur=$this->input->post('entreprise_fournisseur');

            $nom_fournisseur=$this->input->post('nom_fournisseur');
            $prenom_fournisseur=$this->input->post('prenom_fournisseur');
            $tel_fournisseur=$this->input->post('tel_fournisseur');
            $email_fournisseur=$this->input->post('email_fournisseur');
            $localisation=$this->input->post('localisation');

            $pass_fournisseur=$this->administration_model->clePrimaire(8);
            $status_vendeur=1;


         
            
          
            $data=array(

                'id_fournisseur' =>$id_fournisseur,
                'entreprise_fournisseur' =>$entreprise_fournisseur,
                'nom_fournisseur' =>$nom_fournisseur,
                'prenom_fournisseur' =>$prenom_fournisseur,
                'tel_fournisseur' =>$tel_fournisseur,
                'email_fournisseur' =>$email_fournisseur,
                'localisation' =>$localisation,
                'pass_fournisseur' =>$pass_fournisseur,
                'status_vendeur' =>$status_vendeur,
               

            );


            $data_clean = $this->security->xss_clean($data);

          
            if($this->administration_model->ajoutFournisseur($data_clean)){

                echo json_encode(['succes'=>"1"]);
            }else{

                echo json_encode(['succes'=>"0"]);
            }


        }

    }

    public function ajaxEditerVendeurs(){


        $this->form_validation->set_rules('id_partenaires', 'id_partenaires', 'trim');
        if ($this->form_validation->run() == FALSE){

            $errors = validation_errors();
            echo json_encode(['error'=>$errors]);

        }else{

            
          
           

            $id_fournisseur=$this->input->post('id_fournisseur');
            $entreprise_fournisseur=$this->input->post('entreprise_fournisseur');

            $nom_fournisseur=$this->input->post('nom_fournisseur');
            $prenom_fournisseur=$this->input->post('prenom_fournisseur');
            $tel_fournisseur=$this->input->post('tel_fournisseur');
            $email_fournisseur=$this->input->post('email_fournisseur');
            $localisation=$this->input->post('localisation');
            $pass_fournisseur=$this->input->post('pass_fournisseur');
            

            


         
            
          
            $data=array(

                
                'entreprise_fournisseur' =>$entreprise_fournisseur,
                'nom_fournisseur' =>$nom_fournisseur,
                'prenom_fournisseur' =>$prenom_fournisseur,
                'tel_fournisseur' =>$tel_fournisseur,
                'email_fournisseur' =>$email_fournisseur,
                'localisation' =>$localisation,
                'pass_fournisseur' =>$pass_fournisseur,
               
               

            );


            $data_clean = $this->security->xss_clean($data);

          
            if($this->administration_model->modifier_Fournisseur($id_fournisseur,$data_clean)){

                echo json_encode(['succes'=>"1"]);
            }else{

                echo json_encode(['succes'=>"0"]);
            }


        }

    }


    function supprimVendeur($id_fournisseur){

             $this->administration_model->supprim_vendeur($id_fournisseur);
             $this->listeVendeurs();

    }


    function generate_bon_livraison($id_commande){

        $data["id_commande"]=$id_commande;
        $data["infos_commande_id"]= $this->administration_model->infosProduits_commande_ID($id_commande);
        $this->load->view("pg_doc_bon_livraison",$data);



    }


    function generate_bon_commande($id_commande){

         $data["id_commande"]=$id_commande;
        $data["infos_commande_id"]= $this->administration_model->infosProduits_commande_ID($id_commande);
        $this->load->view("pg_doc_bon_commande",$data);

        
    }

    function generate_facture($id_commande){

         $data["id_commande"]=$id_commande;
        $data["infos_commande_id"]= $this->administration_model->infosProduits_commande_ID($id_commande);
        $this->load->view("pg_doc_facture",$data);

        
    }



    

   // gestion des sms


    function sms_test(){
        $phoneNumbers=['22507592827','22549126618'];
 
        $message="Votre commande N° 1527603872 pour un montant de 170000 Fcfa a été confirmée, Notre equipe de livraison vous contactera dans de tres brefs délai.";

        $this->sms_model->envoie_multiple($phoneNumbers,$message);
                    
    }


    function envoi_sms(){
        
        $this->load->view("pg_envoi_sms");
                    
    }

    function envoi_sms_groupe(){
        
        $this->load->view("");
                    
    }

    function ajax_envoi_sms_simple(){


        
          $tel_mobile=$this->input->post('tel_mobile');
          $messageID=$this->input->post('messageID');
          $this->sms_model->envoie_unitaire($tel_mobile,$messageID);
                    
    }





            

    





















    function logout(){


        session_destroy();
        redirect("login");
    }


    
        
   
        


        
        
    

   









 





}
