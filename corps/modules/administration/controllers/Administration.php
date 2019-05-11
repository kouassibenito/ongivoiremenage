<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Administration extends MX_Controller {
        
    public function __construct()
	{
	
		parent::__construct();
        $this->load->model('administration_model');
    
	}

    function index(){

      if($this->session->userdata('id_admin')){

        $data["pg_content"]="pg_dashboard_view";
        $this->load->view("main_view",$data);
      }else{

        redirect("login");
      }


        
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

        $id_infos="1234";
        $data=array( 
                          
                          'logo' =>$image_name,
                                
                    );
                        
                        
            

        
        $this->administration_model->modifier_infos_generale($id_infos,$data);
                
        }
  }

  
     function infosGenerales(){

      if($this->session->userdata('id_admin')){

       $this->form_validation->set_rules('libelle_organisation', 'Libellé Organisation', 'trim|required');
        $this->form_validation->set_rules('pays', 'pays', 'trim');
        $this->form_validation->set_rules('ville', 'ville', 'trim');
        $this->form_validation->set_rules('commune', 'commune', 'trim');
        $this->form_validation->set_rules('email', 'email', 'trim');

        $this->form_validation->set_rules('telephone', 'Telephone organisation ', 'trim');
        $this->form_validation->set_rules('horaire_travail', 'Heure de travail', 'trim');
        $this->form_validation->set_rules('copyright', 'copyright', 'trim');
        $this->form_validation->set_rules('facebook', 'Facebook', 'trim');
        $this->form_validation->set_rules('twitter', 'Twitter', 'trim');

        $this->form_validation->set_rules('instagram', 'Instagram', 'trim');
        $this->form_validation->set_rules('youtube', 'Youtube', 'trim');
        $this->form_validation->set_rules('slogan', 'slogan', 'trim');
        $this->form_validation->set_rules('bref_description', 'Bref description', 'trim');
        
        if ($this->form_validation->run()){

            $libelle_organisation=$this->input->post('libelle_organisation');
            $pays=$this->input->post('pays');
            $ville=$this->input->post('ville');
            $commune=$this->input->post('commune');
            $email=$this->input->post('email');

            $telephone=$this->input->post('telephone');
            $horaire_travail=$this->input->post('horaire_travail');
            $copyright=$this->input->post('copyright');
            $facebook=$this->input->post('facebook');
            $twitter=$this->input->post('twitter');

            $instagram=$this->input->post('instagram');
            $youtube=$this->input->post('youtube');
            $slogan=$this->input->post('slogan');
            $bref_description=$this->input->post('bref_description');

             $data=array( 
                          'libelle_organisation' =>$libelle_organisation,
                          'pays' =>$pays,
                          'ville' =>$ville,
                          'commune' =>$commune,
                          'email' =>$email,

                          'telephone' =>$telephone,
                          'horaire_travail' =>$horaire_travail,
                          'copyright' =>$copyright,
                          'facebook' =>$facebook,
                          'twitter' =>$twitter,

                          'instagram' =>$instagram,
                          'youtube' =>$youtube,
                          'slogan' =>$slogan,
                          'bref_description' =>$bref_description,
                                
                        );


            $config = array(
            'upload_path' => '/uploads/logo',
            'allowed_types' => "gif|jpg|png|jpeg|pdf",
            'overwrite' => TRUE,
            'max_size' => "2048000", // Can be set to particular file size , here it is 2 MB(2048 Kb)
            'max_height' => "768",
            'max_width' => "1024"
            );
 
            $this->load->library('upload', $config);
            if($this->upload->do_upload())
            {
            $data = array('upload_data' => $this->upload->data());
            $this->load->view('upload_success',$data);
            }
            else
            {
            $error = array('error' => $this->upload->display_errors());
               
            }

            

             $id_infos="1234";

             $this->administration_model->modifier_infos_generale($id_infos,$data);
            

             $data["pg_content"]="pg_infos_generales_view";
             $data["infosGenerales"]=$this->administration_model->getInfo_generales();
             $this->load->view("main_view",$data);



            

        }else{


              $data["pg_content"]="pg_infos_generales_view";
             $data["infosGenerales"]=$this->administration_model->getInfo_generales();
             $this->load->view("main_view",$data);

              
                
                

       }
      }else{

        redirect("login");
      }

        

       
    }

    function sliders(){
        

        $this->form_validation->set_rules('titre1', 'Titre 1', 'trim');
        $this->form_validation->set_rules('titre2', 'Titre 2', 'trim');
        $this->form_validation->set_rules('titre3', 'Titre 3', 'trim');
        $this->form_validation->set_rules('titre4', 'Titre 4', 'trim');
       
        
        if ($this->form_validation->run()){

            $titre1=$this->input->post('titre1');
            $titre2=$this->input->post('titre2');
            $titre3=$this->input->post('titre3');
            $titre4=$this->input->post('titre4');
            $cle_img=$this->input->post('cle_img');
            
            

             $data=array( 
                          'titre1' =>$titre1,
                          'titre2' =>$titre2,
                          'titre3' =>$titre3,
                          'titre4' =>$titre4,
                          'cle_img' =>$cle_img,
                          
                                
                        );


           

            

             $this->administration_model->ajoutSlider($data);
            

              $data["listeSliders"]=$this->administration_model->getInfo_sliders();
              $data["pg_content"]="pg_sliders_liste_view";  
              $this->load->view("main_view",$data);



            

        }else{

         
        $data["cle_img"]=$this->administration_model->clePrimaire(8);
        $data["pg_content"]="pg_sliders_ajouter_view";
        $this->load->view("main_view",$data);
       

       }

        
    }

     function slidersModifier($id_slide){

        $this->form_validation->set_rules('titre1', 'Titre 1', 'trim|required');
        $this->form_validation->set_rules('titre2', 'Titre 2', 'trim');
        $this->form_validation->set_rules('titre3', 'Titre 3', 'trim');
        $this->form_validation->set_rules('titre4', 'Titre 4', 'trim');
        
        if ($this->form_validation->run()){

            $titre1=$this->input->post('titre1');
            $titre2=$this->input->post('titre2');
            $titre3=$this->input->post('titre3');
            $titre4=$this->input->post('titre4');
            
             $data=array( 
                          'titre1' =>$titre1,
                          'titre2' =>$titre2,
                          'titre3' =>$titre3,
                          'titre4' =>$titre4,
                          
                                
                        );


            
             $this->administration_model->modifier_sliders($id_slide,$data);


            

              $data["listeSliders"]=$this->administration_model->getInfo_sliders();
              $data["pg_content"]="pg_sliders_liste_view";  
              $this->load->view("main_view",$data);




            

        }else{


             $data["info_slide_id"]=$this->administration_model->getInfo_sliders_id($id_slide);
             $data["id_slide"]=$id_slide;
             $data["pg_content"]="pg_sliders_modifier_view";
             $this->load->view("main_view",$data);

              
                
                

       }
        
        
    }

    function supprim_slider($id_slide){
     
      if($this->administration_model->delete_slider($id_slide)){

        redirect("administration/slidersListes");

      }else{
        
        redirect("administration/slidersListes");
      }

   }

   public function upload_equipe()
    {
        if (!empty($_FILES)) {
            $targetPath = getcwd() . '/uploads/equipe';
            $config['allowed_types'] = 'gif|jpg|jpeg|png';
            $config['file_name'] = date("Y_m_d_H_i_s_").rand();
            $config['upload_path'] = $targetPath;
            $config['allowed_types'] = 'jpg|png';
            $this->load->library('upload', $config);
            $this->upload->initialize($config);
            if ($this->upload->do_upload('file')) {
                $fichier = $this->upload->data();
            }
                  $cle_img=$this->input->post('cle_img');
                        $image_name= $fichier['file_name'];

                        $data=array( 
                          'cle_img' =>$cle_img,
                          'img' =>$image_name,
                        );

          $this->administration_model->ajoutImage($data);
       
      }

    }


    public function upload_notreEquipe_modifier()
    {
        if (!empty($_FILES)) {
            $targetPath = getcwd() . '/uploads/equipe';
            $config['allowed_types'] = 'gif|jpg|jpeg|png';
            $config['file_name'] = date("Y_m_d_H_i_s_").rand();
            $config['upload_path'] = $targetPath;
            $config['allowed_types'] = 'jpg|png';
            $this->load->library('upload', $config);
            $this->upload->initialize($config);
            if ($this->upload->do_upload('file')) {
                $fichier = $this->upload->data();
            }
                        $cle_img=$this->input->post('cle_img');
                        $image_name= $fichier['file_name'];

                        $data=array( 
                          
                          'img' =>$image_name,
                        );

          $this->administration_model->modifier_image($cle_img,$data);

       
      }

    }


    function notreEquipe(){



        $this->form_validation->set_rules('nom', 'Nom', 'trim');
        $this->form_validation->set_rules('titre', 'Titre', 'trim');
        $this->form_validation->set_rules('facebook', 'Facebook', 'trim');
        $this->form_validation->set_rules('twitter', 'Twitter', 'trim');
       
        
        if ($this->form_validation->run()){

            $nom=$this->input->post('nom');
            $titre=$this->input->post('titre');
            $facebook=$this->input->post('facebook');
            $twitter=$this->input->post('twitter');
            $cle_img=$this->input->post('cle_img');
            

             $data=array( 
                          'nom' =>$nom,
                          'titre' =>$titre,
                          'facebook' =>$facebook,
                          'twitter' =>$twitter,
                          'cle_img' =>$cle_img,
                          
                                
                        );


            

             $this->administration_model->ajoutEquipe($data);
            

              $data["listeEquipe"]=$this->administration_model->getInfo_equipe();
              $data["pg_content"]="pg_notre_equipe_ajouter_view";
              $this->load->view("main_view",$data);



            

        }else{

        $data["cle_img"]=$this->administration_model->clePrimaire(8);
        $data["pg_content"]="pg_notre_equipe_ajouter_view";
        $this->load->view("main_view",$data);
       

       }


        
    }


    function equipeModifier($id_equipe){

        $this->form_validation->set_rules('nom', 'Nom', 'trim|required');
        $this->form_validation->set_rules('titre', 'Titre', 'trim');
        $this->form_validation->set_rules('facebook', 'Facebook', 'trim');
        $this->form_validation->set_rules('twitter', 'Twitter', 'trim');
        
        if ($this->form_validation->run()){

            $nom=$this->input->post('nom');
            $titre=$this->input->post('titre');
            $facebook=$this->input->post('facebook');
            $twitter=$this->input->post('twitter');
            
             $data=array( 
                          'nom' =>$nom,
                          'titre' =>$titre,
                          'facebook' =>$facebook,
                          'twitter' =>$twitter,
                          
                                
                        );




             $this->administration_model->modifier_equipe($id_equipe,$data);



            $data["listeEquipe"]=$this->administration_model->getInfo_equipe();
            $data["pg_content"]="pg_notre_equipe_liste_view";
            $this->load->view("main_view",$data);


        }else{


             $data["info_equipe_id"]=$this->administration_model->getInfo_equipe_id($id_equipe);
             $data["id_equipe"]=$id_equipe;
             $data["pg_content"]="pg_notre_equipe_modifier_view";
             $this->load->view("main_view",$data);

       }
        
    }


    function supprim_equipe($id_equipe){
     
      if($this->administration_model->delete_equipe($id_equipe)){

        redirect("administration/notreEquipeListes");

      }else{
        
        redirect("administration/notreEquipeListes");
      }

   }




    function nosActualites(){

        $this->form_validation->set_rules('titre', 'Titre', 'trim');
        $this->form_validation->set_rules('date_actualite', 'date actualite', 'trim');
        $this->form_validation->set_rules('auteur', 'auteur', 'trim');
        $this->form_validation->set_rules('cible', 'cible', 'trim');
        $this->form_validation->set_rules('description_court', 'description courte', 'trim');
        $this->form_validation->set_rules('description_complete', 'description complète', 'trim');
       
        
        if ($this->form_validation->run()){

            $titre=$this->input->post('titre');
            $date_actualite=$this->input->post('date_actualite');
            $auteur=$this->input->post('auteur');
            $cible=$this->input->post('cible');
            $description_court=$this->input->post('description_court');
            $description_complete=$this->input->post('description_complete');
            $cle_img=$this->input->post('cle_img');
            

             $data=array( 
                          'titre' =>$titre,
                          'date_actualite' =>$date_actualite,
                          'auteur' =>$auteur,
                          'cible' =>$cible,
                          'description_court' =>$description_court,
                          'description_complete' =>$description_complete,
                          'cle_img' =>$cle_img,
                          
                                
                        );


            
            

             $this->administration_model->ajoutActualite($data);
            

              $data["listeActualite"]=$this->administration_model->getInfo_actualite();
              $data["pg_content"]="pg_nos_actualites_ajouter_view";
              $this->load->view("main_view",$data);



            

        }else{

        $data["cle_img"]=$this->administration_model->clePrimaire(8);
        $data["pg_content"]="pg_nos_actualites_ajouter_view";
        $this->load->view("main_view",$data);

        }
    }


    function nosActualitesModifier($id_actualite){

        $this->form_validation->set_rules('titre', 'Titre', 'trim|required');
        $this->form_validation->set_rules('date_actualite', 'Date actualité', 'trim');
        $this->form_validation->set_rules('auteur', 'Auteur', 'trim');

        $this->form_validation->set_rules('cible', 'Cible', 'trim');
        $this->form_validation->set_rules('description_court', 'Description courte', 'trim');
        $this->form_validation->set_rules('description_complete', 'Description complète', 'trim');
        
        if ($this->form_validation->run()){

            $titre=$this->input->post('titre');
            $date_actualite=$this->input->post('date_actualite');
            $auteur=$this->input->post('auteur');

            $cible=$this->input->post('cible');
            $description_court=$this->input->post('description_court');
            $description_complete=$this->input->post('description_complete');
            $id_actualite=$this->input->post('id_actualite');
            
            
             $data=array( 
                          'titre' =>$titre,
                          'date_actualite' =>$date_actualite,
                          'auteur' =>$auteur,

                          'cible' =>$cible,
                          'description_court' =>$description_court,
                          'description_complete' =>$description_complete,
                          
                                
                        );



             $this->administration_model->modifier_actualite($id_actualite,$data);


        $data["id_actualite"]=$id_actualite; 
        $data["info_actualite_id"]=$this->administration_model->getInfo_actualite_id($id_actualite);
        $data["pg_content"]="pg_nos_actualites_modifier_view";
        $this->load->view("main_view",$data);
        }else{
        

        $data["id_actualite"]=$id_actualite;  
        $data["info_actualite_id"]=$this->administration_model->getInfo_actualite_id($id_actualite);
        $data["pg_content"]="pg_nos_actualites_modifier_view";
        $this->load->view("main_view",$data);

       }
        
        
    }




    function supprim_actualite($id_actualite){
     
      if($this->administration_model->delete_actualite($id_actualite)){

        redirect("administration/nosActualitesListes");

      }else{
        
        redirect("administration/nosActualitesListes");
      }

   }



    function nosActivites(){

        $this->form_validation->set_rules('nom_activite', 'Nom activité', 'trim');
        $this->form_validation->set_rules('description_court', 'description courte', 'trim');
        $this->form_validation->set_rules('description_complete', 'description complète', 'trim');
        
        
        if ($this->form_validation->run()){

            $nom_activite=$this->input->post('nom_activite');
            $description_court=$this->input->post('description_court');
            $description_complete=$this->input->post('description_complete');
            $cle_img=$this->input->post('cle_img');
            

             $data=array( 
                          'nom_activite' =>$nom_activite,
                          'description_court' =>$description_court,
                          'description_complete' =>$description_complete,
                          'cle_img' =>$cle_img,
                          

                          
                                
                        );


            


            

             $this->administration_model->ajoutActivite($data);
            

              $data["listeActivite"]=$this->administration_model->getInfo_activite();
              $data["pg_content"]="pg_nos_activites_ajouter_view";
              $this->load->view("main_view",$data);



            

        }else{

        $data["cle_img"]=$this->administration_model->clePrimaire(8);
        $data["pg_content"]="pg_nos_activites_ajouter_view";
        $this->load->view("main_view",$data);

        }

        
    }


    function activiteModifier($id_activite){
        $this->form_validation->set_rules('nom_activite', 'nom activite', 'trim');
        $this->form_validation->set_rules('description_court', 'Description courte', 'trim');
        $this->form_validation->set_rules('description_complete', 'Description complète', 'trim');
       
        
        if ($this->form_validation->run()){

            $nom_activite=$this->input->post('nom_activite');
            $description_court=$this->input->post('description_court');
            $description_complete=$this->input->post('description_complete');
            
             $data=array( 
                          'nom_activite' =>$nom_activite,
                          'description_court' =>$description_court,
                          'description_complete' =>$description_complete,

                          
                                
                        );


            

        $this->administration_model->modifier_activite($id_activite,$data);

         $data["id_activite"]=$id_activite;
        $data["info_activite_id"]=$this->administration_model->getInfo_activite_id($id_activite);
        $data["pg_content"]="pg_nos_activites_modifier_view";
        $this->load->view("main_view",$data);
            

        }else{

        $data["id_activite"]=$id_activite;
        $data["info_activite_id"]=$this->administration_model->getInfo_activite_id($id_activite);
        $data["pg_content"]="pg_nos_activites_modifier_view";
        $this->load->view("main_view",$data);

        }
        
        
    }



    function supprim_activites($id_activite){
     
      if($this->administration_model->delete_activite($id_activite)){

        redirect("administration/nosActivitesListes");

      }else{
        
        redirect("administration/nosActivitesListes");
      }

   }



    function nosProjets(){

        $this->form_validation->set_rules('nom_projet', 'Nom projet', 'trim');
        $this->form_validation->set_rules('description_court', 'description courte', 'trim');
        $this->form_validation->set_rules('description_complete', 'description complète', 'trim');
        
        
        if ($this->form_validation->run()){

            $nom_projet=$this->input->post('nom_projet');
            $description_court=$this->input->post('description_court');
            $description_complete=$this->input->post('description_complete');
            $cle_img=$this->input->post('cle_img');
            

             $data=array( 
                          'nom_projet' =>$nom_projet,
                          'description_court' =>$description_court,
                          'description_complete' =>$description_complete,
                          'cle_img' =>$cle_img,
                          

                          
                                
                        );


            

             $this->administration_model->ajoutProjet($data);
            

              $data["listeProjets"]=$this->administration_model->getInfo_projets();
              $data["pg_content"]="pg_nos_projets_ajouter_view";
              $this->load->view("main_view",$data);

  

        }else{

        $data["cle_img"]=$this->administration_model->clePrimaire(8);
        $data["pg_content"]="pg_nos_projets_ajouter_view";
        $this->load->view("main_view",$data);

        }

        
    }


    function projetModifier($id_projet){
        $this->form_validation->set_rules('nom_projet', 'nom projet', 'trim');
        $this->form_validation->set_rules('description_court', 'Description courte', 'trim');
        $this->form_validation->set_rules('description_complete', 'Description complète', 'trim');
       
        
        if ($this->form_validation->run()){

            $nom_projet=$this->input->post('nom_projet');
            $description_court=$this->input->post('description_court');
            $description_complete=$this->input->post('description_complete');
            
             $data=array( 
                          'nom_projet' =>$nom_projet,
                          'description_court' =>$description_court,
                          'description_complete' =>$description_complete,

                          
                                
                        );

            

        $this->administration_model->modifier_projet($id_projet,$data);

        $data["id_projet"]=$id_projet;
        $data["info_projet_id"]=$this->administration_model->getInfo_projet_id($id_projet);
        $data["pg_content"]="pg_nos_projets_modifier_view";
        $this->load->view("main_view",$data);
            

        }else{
        
        $data["id_projet"]=$id_projet;
        $data["info_projet_id"]=$this->administration_model->getInfo_projet_id($id_projet);
        $data["pg_content"]="pg_nos_projets_modifier_view";
        $this->load->view("main_view",$data);

        }
        
    }


    function supprim_projet($id_projet){
     
      if($this->administration_model->delete_projet($id_projet)){

        redirect("administration/nosProjetsListes");

      }else{
        
        redirect("administration/nosProjetsListes");
      }

   }



    function nosFormations(){
        
        $this->form_validation->set_rules('titre', 'Titre', 'trim');
        $this->form_validation->set_rules('date_formation', 'Date formation', 'trim');
        $this->form_validation->set_rules(' auteur', ' auteur', 'trim');
        
        $this->form_validation->set_rules('cible', 'cible', 'trim');
        $this->form_validation->set_rules('description_court', 'Description courte', 'trim');
        $this->form_validation->set_rules(' description_complete', 'Description complète', 'trim');
        
        if ($this->form_validation->run()){

            $titre=$this->input->post('titre');
            $date_formation=$this->input->post('date_formation');
            $auteur=$this->input->post('auteur');

            $cible=$this->input->post('cible');
            $description_court=$this->input->post('description_court');
            $description_complete=$this->input->post('description_complete');
            $cle_img=$this->input->post('cle_img');
            
            

             $data=array( 
                          'titre' =>$titre,
                          'date_formation' =>$description_court,
                          'auteur' =>$description_complete,

                          'cible' =>$cible,
                          'description_court' =>$description_court,
                          'description_complete' =>$description_complete,
                          'cle_img' =>$cle_img,
                          
                        );


            

            

             $this->administration_model->ajoutFormation($data);
              $data["listeFormation"]=$this->administration_model->getInfo_formation();
              $data["pg_content"]="pg_nos_formations_ajouter_view";
              $this->load->view("main_view",$data);

  

        }else{

        $data["cle_img"]=$this->administration_model->clePrimaire(8);
        $data["pg_content"]="pg_nos_formations_ajouter_view";
        $this->load->view("main_view",$data);

        }


        
    }


    function formationModifier($id_formation){

        $this->form_validation->set_rules('titre', 'Titre', 'trim');
        $this->form_validation->set_rules('date_formation', 'Date formation', 'trim');
        $this->form_validation->set_rules('auteur', 'auteur', 'trim');

        $this->form_validation->set_rules('cible', 'cible', 'trim');
        $this->form_validation->set_rules('description_court', 'Description courte', 'trim');
        $this->form_validation->set_rules('description_complete', 'Description complète', 'trim');
       
        
        if ($this->form_validation->run()){

            $titre=$this->input->post('titre');
            $date_formation=$this->input->post('date_formation');
            $auteur=$this->input->post('auteur');

            $cible=$this->input->post('cible');
            $description_court=$this->input->post('description_court');
            $description_complete=$this->input->post('description_complete');
            
             $data=array( 
                          'titre' =>$titre,
                          'date_formation' =>$date_formation,
                          'auteur' =>$auteur,

                          'cible' =>$cible,
                          'description_court' =>$description_court,
                          'description_complete' =>$description_complete,

                          
                                
                        );

            

        $this->administration_model->modifier_formation($id_formation,$data);

        $data["id_formation"]=$id_formation;
        $data["info_formation_id"]=$this->administration_model->getInfo_formation_id($id_formation);
        $data["pg_content"]="pg_nos_formations_modifier_view";
        $this->load->view("main_view",$data);
            

        }else{

        $data["id_formation"]=$id_formation;
        $data["info_formation_id"]=$this->administration_model->getInfo_formation_id($id_formation);
        $data["pg_content"]="pg_nos_formations_modifier_view";
        $this->load->view("main_view",$data);

        }
        
    }


    function supprim_formation($id_formation){
     
      if($this->administration_model->delete_formation($id_formation)){

        redirect("administration/nosFormationsListes");

      }else{
        
        redirect("administration/nosFormationsListes");
      }

   }


    function nosPhotos(){
        $this->form_validation->set_rules('titre_photo', 'Titre photo', 'trim');
        $this->form_validation->set_rules('id_categorie_photo', 'Catégorie photo', 'trim');
        
        
        if ($this->form_validation->run()){

            $titre_photo=$this->input->post('titre_photo');
            $id_categorie_photo=$this->input->post('id_categorie_photo');
            $cle_img=$this->input->post('cle_img');
            
             $data=array( 
                          'titre_photo' =>$titre_photo,
                          'id_categorie_photo' =>$id_categorie_photo,
                          'cle_img' =>$cle_img,
                          
                             
                        );


            
            

             $this->administration_model->ajoutPhoto($data);
            

              $data["listePhotos"]=$this->administration_model->getInfo_photos();
              $data["pg_content"]="pg_nos_photos_ajouter_view";
              $this->load->view("main_view",$data);

  

        }else{

        $data["cle_img"]=$this->administration_model->clePrimaire(8);
        $data["pg_content"]="pg_nos_photos_ajouter_view";
        $this->load->view("main_view",$data);

        }

    }


    function photoModifier($id_photo){

        $this->form_validation->set_rules('titre_photo', 'Titre photo', 'trim');
        $this->form_validation->set_rules('id_categorie_photo', 'Catégorie photo', 'trim');
        if ($this->form_validation->run()){

            $titre_photo=$this->input->post('titre_photo');
            $id_categorie_photo=$this->input->post('id_categorie_photo');
            
             $data=array( 
                          'titre_photo' =>$titre_photo,
                          'id_categorie_photo' =>$id_categorie_photo,
                              
                        );


        $this->administration_model->modifier_photo($id_photo,$data);

        $data["id_photo"]=$id_photo;
        $data["info_photo_id"]=$this->administration_model->getInfo_photo_id($id_photo);
        $data["pg_content"]="pg_nos_photos_modifier_view";
        $this->load->view("main_view",$data);
            

        }else{

        $data["id_photo"]=$id_photo;
        $data["info_photo_id"]=$this->administration_model->getInfo_photo_id($id_photo);
        $data["pg_content"]="pg_nos_photos_modifier_view";
        $this->load->view("main_view",$data);

        }
    }


    function supprim_photo($id_photo){
     
      if($this->administration_model->delete_photo($id_photo)){

        redirect("administration/nosPhotosListes");

      }else{
        
        redirect("administration/nosPhotosListes");
      }

   }


    function nosVideos(){

        $this->form_validation->set_rules('titre_video', 'Titre video', 'trim');
        $this->form_validation->set_rules('id_categorie_video', 'Catégorie video', 'trim');
        
        
        if ($this->form_validation->run()){

            $titre_video=$this->input->post('titre_video');
            $id_categorie_video=$this->input->post('id_categorie_video');
             $iframe_youtube=$this->input->post('iframe_youtube');
            
             $data=array( 
                          'titre_video' =>$titre_video,
                          'id_categorie_video' =>$id_categorie_video,
                          'iframe_youtube' =>$iframe_youtube,
                          
                             
                        );


           
             $this->administration_model->ajoutVideo($data);
            

              $data["listeVideos"]=$this->administration_model->getInfo_videos();
              $data["pg_content"]="pg_nos_videos_ajouter_view";
              $this->load->view("main_view",$data);

  

        }else{

        $data["cle_img"]=$this->administration_model->clePrimaire(8);
        $data["pg_content"]="pg_nos_videos_ajouter_view";
        $this->load->view("main_view",$data);

        }

    }


    function videoModifier($id_video){
      $this->form_validation->set_rules('titre_video', 'Titre video', 'trim');
        $this->form_validation->set_rules('id_categorie_video', 'Catégorie video', 'trim');
        if ($this->form_validation->run()){

            $titre_video=$this->input->post('titre_video');
            $id_categorie_video=$this->input->post('id_categorie_video');
            $iframe_youtube=$this->input->post('iframe_youtube');
            
             $data=array( 
                          'titre_video' =>$titre_video,
                          'id_categorie_video' =>$id_categorie_video,
                          'iframe_youtube' =>$iframe_youtube,
                              
                        );


            
            

        $this->administration_model->modifier_video($id_video,$data);

        $data["id_video"]=$id_video;
        $data["info_video_id"]=$this->administration_model->getInfo_video_id($id_video);
        $data["pg_content"]="pg_nos_videos_modifier_view";
        $this->load->view("main_view",$data);
            

        }else{

        $data["id_video"]=$id_video;
        $data["info_video_id"]=$this->administration_model->getInfo_video_id($id_video);
        $data["pg_content"]="pg_nos_videos_modifier_view";
        $this->load->view("main_view",$data);

        }
    }

    function supprim_video($id_video){
     
      if($this->administration_model->delete_video($id_video)){

        redirect("administration/nosVideosListes");

      }else{
        
        redirect("administration/nosVideosListes");
      }

   }

    function adminAjouter(){

        $this->form_validation->set_rules('nom_administrateur', 'Nom administrateur', 'trim');
        $this->form_validation->set_rules('prenom_administrateur', 'Prénom administrateur', 'trim');
        $this->form_validation->set_rules('email_administrateur', 'email administrateur', 'trim');
        $this->form_validation->set_rules('telephone_administrateur', 'Téléphone administrateur', 'trim');

        $this->form_validation->set_rules('password_administrateur', 'Password administrateur', 'trim');
        $this->form_validation->set_rules('fonction_administrateur', 'Fonction administrateur', 'trim');
        

        if ($this->form_validation->run()){

            $nom_administrateur=$this->input->post('nom_administrateur');
            $prenom_administrateur=$this->input->post('prenom_administrateur');
            $email_administrateur=$this->input->post('email_administrateur');
            $telephone_administrateur=$this->input->post('telephone_administrateur');

            $password_administrateur=$this->input->post('password_administrateur');
            $fonction_administrateur=$this->input->post('fonction_administrateur');
            $cle_img=$this->input->post('cle_img');
            
            $data=array( 
                          'nom_administrateur' =>$nom_administrateur,
                          'prenom_administrateur' =>$prenom_administrateur,
                          'email_administrateur' =>$email_administrateur,
                          'telephone_administrateur' =>$telephone_administrateur,

                          'password_administrateur' =>$password_administrateur,
                          'fonction_administrateur' =>$fonction_administrateur,
                          'cle_img' =>$cle_img,
                          
                          
                             
                        );


            
            

             $this->administration_model->ajoutAdmin($data);
            

              $data["listeAdmin"]=$this->administration_model->getInfo_admin();
              $data["pg_content"]="pg_administrateurs_ajouter_view";
              $this->load->view("main_view",$data);

  

        }else{

             $data["cle_img"]=$this->administration_model->clePrimaire(8);
             $data["pg_content"]="pg_administrateurs_ajouter_view";
             $this->load->view("main_view",$data);

        }

    }


    function modifierAdmin($id_administrateur){
      $this->form_validation->set_rules('nom_administrateur', 'nom administrateur', 'trim');
        $this->form_validation->set_rules('prenom_administrateur', 'prénoms administrateur', 'trim');
        $this->form_validation->set_rules('email_administrateur', 'email_administrateur', 'trim');

        $this->form_validation->set_rules('telephone_administrateur', 'telephone administrateur', 'trim');
        $this->form_validation->set_rules('password_administrateur', 'password administrateur', 'trim');
        $this->form_validation->set_rules('fonction_administrateur', 'Fonction administrateur', 'trim');
       
        
        if ($this->form_validation->run()){

            $nom_administrateur=$this->input->post('nom_administrateur');
            $prenom_administrateur=$this->input->post('prenom_administrateur');
            $email_administrateur=$this->input->post('email_administrateur');

            $telephone_administrateur=$this->input->post('telephone_administrateur');
            $password_administrateur=$this->input->post('password_administrateur');
            $fonction_administrateur=$this->input->post('fonction_administrateur');
            
             $data=array( 
                          'nom_administrateur' =>$nom_administrateur,
                          'prenom_administrateur' =>$prenom_administrateur,
                          'email_administrateur' =>$email_administrateur,

                          'telephone_administrateur' =>$telephone_administrateur,
                          'password_administrateur' =>$password_administrateur,
                          'fonction_administrateur' =>$fonction_administrateur,

                          
                                
                        );

            

        $this->administration_model->modifier_admin($id_administrateur,$data);

        $data["id_administrateur"]=$id_administrateur;
        $data["info_admin_id"]=$this->administration_model->getInfo_admin_id($id_administrateur);
        $data["pg_content"]="pg_administrateurs_modifier_view";
        $this->load->view("main_view",$data);
            

        }else{

        $data["id_administrateur"]=$id_administrateur;
        $data["info_admin_id"]=$this->administration_model->getInfo_admin_id($id_administrateur);
        $data["pg_content"]="pg_administrateurs_modifier_view";
        $this->load->view("main_view",$data);

        }
        
       
    }


    function supprim_admin($id_administrateur){
     
      if($this->administration_model->delete_admin($id_administrateur)){

        redirect("administration/adminListes");

      }else{
        
        redirect("administration/adminListes");
      }

   }


//modifier

   

    function notreEquipeModifier(){

        $data["pg_content"]="pg_notre_equipe_modifier_view";
        $this->load->view("main_view",$data);
    }

    

    function nosProjetsModifier(){

        $data["pg_content"]="pg_nos_projets_modifier_view";
        $this->load->view("main_view",$data);
    }


    function nosActivitesModifier(){

        $data["pg_content"]="pg_nos_activites_modifier_view";
        $this->load->view("main_view",$data);
    }


    function nosFormationsModifier(){

        $data["pg_content"]="pg_nos_formations_modifier_view";
        $this->load->view("main_view",$data);
    }


    function nosPhotosModifier(){

        $data["pg_content"]="pg_nos_photos_modifier_view";
        $this->load->view("main_view",$data);
    }


    function nosVideosModifier(){

        $data["pg_content"]="pg_nos_videos_modifier_view";
        $this->load->view("main_view",$data);
    }

    function adminModifier(){

        $data["pg_content"]="pg_administrateurs_modifier_view";
        $this->load->view("main_view",$data);
    }


    //liste

 public function upload_slide()
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
                        $cle_img=$this->input->post('cle_img');
                        $image_name= $fichier['file_name'];

                        $data=array( 
                          'cle_img' =>$cle_img,
                          'img' =>$image_name,
                        );

          $this->administration_model->ajoutImage($data);

       
      }

    }

     public function upload_slide_modifier()
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
                        $cle_img=$this->input->post('cle_img');
                        $image_name= $fichier['file_name'];

                        $data=array( 
                          
                          'img' =>$image_name,
                        );

          $this->administration_model->modifier_image($cle_img,$data);

       
      }

    }



public function upload_slideModifier()
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
                        $cle_img=$this->input->post('cle_img');
                        $image_name= $fichier['file_name'];

                        $data=array( 
                          'cle_img' =>$cle_img,
                          'img' =>$image_name,
                        );

          $this->administration_model->ajoutImage($data);

       
      }

    }



    
    function slidersListes(){

        $data["listeSliders"]=$this->administration_model->getInfo_sliders();
        $data["pg_content"]="pg_sliders_liste_view";  
        $this->load->view("main_view",$data);
    }

    function notreEquipeListes(){

        $data["listeEquipe"]=$this->administration_model->getInfo_equipe();
        $data["pg_content"]="pg_notre_equipe_liste_view";
        $this->load->view("main_view",$data);

        
    }


    public function upload_actualite()
    {
        if (!empty($_FILES)) {
            $targetPath = getcwd() . '/uploads/actualites';
            $config['allowed_types'] = 'gif|jpg|jpeg|png';
            $config['file_name'] = date("Y_m_d_H_i_s_").rand();
            $config['upload_path'] = $targetPath;
            $config['allowed_types'] = 'jpg|png';
            $this->load->library('upload', $config);
            $this->upload->initialize($config);
            if ($this->upload->do_upload('file')) {
                $fichier = $this->upload->data();
            }
                        
                $cle_img=$this->input->post('cle_img');
                        $image_name= $fichier['file_name'];
                $data=array( 
                          'cle_img' =>$cle_img,
                          'img' =>$image_name,
                        );

          $this->administration_model->ajoutImage($data);
       
      }

    }


public function upload_actualite_modifier()
    {
        if (!empty($_FILES)) {
            $targetPath = getcwd() . '/uploads/actualites';
            $config['allowed_types'] = 'gif|jpg|jpeg|png';
            $config['file_name'] = date("Y_m_d_H_i_s_").rand();
            $config['upload_path'] = $targetPath;
            $config['allowed_types'] = 'jpg|png';
            $this->load->library('upload', $config);
            $this->upload->initialize($config);
            if ($this->upload->do_upload('file')) {
                $fichier = $this->upload->data();
            }
                        $cle_img=$this->input->post('cle_img');
                        $image_name= $fichier['file_name'];

                        $data=array( 
                          
                          'img' =>$image_name,
                        );

          $this->administration_model->modifier_image($cle_img,$data);

       
      }

    }


    function nosActualitesListes(){

        $data["listeActualite"]=$this->administration_model->getInfo_actualite();
        $data["pg_content"]="pg_nos_actualites_liste_view";
        $this->load->view("main_view",$data);
    }

   public function upload_activite()
    {
        if (!empty($_FILES)) {
            $targetPath = getcwd() . '/uploads/activite';
            $config['allowed_types'] = 'gif|jpg|jpeg|png';
            $config['file_name'] = date("Y_m_d_H_i_s_").rand();
            $config['upload_path'] = $targetPath;
            $config['allowed_types'] = 'jpg|png';
            $this->load->library('upload', $config);
            $this->upload->initialize($config);
            if ($this->upload->do_upload('file')) {
                $fichier = $this->upload->data();
            }
                        
                  $cle_img=$this->input->post('cle_img');
                        $image_name= $fichier['file_name'];
                $data=array( 
                          'cle_img' =>$cle_img,
                          'img' =>$image_name,
                        );

          $this->administration_model->ajoutImage($data);
       
      }

    }



public function upload_activite_modifier()
    {
        if (!empty($_FILES)) {
            $targetPath = getcwd() . '/uploads/activite';
            $config['allowed_types'] = 'gif|jpg|jpeg|png';
            $config['file_name'] = date("Y_m_d_H_i_s_").rand();
            $config['upload_path'] = $targetPath;
            $config['allowed_types'] = 'jpg|png';
            $this->load->library('upload', $config);
            $this->upload->initialize($config);
            if ($this->upload->do_upload('file')) {
                $fichier = $this->upload->data();
            }
                        $cle_img=$this->input->post('cle_img');
                        $image_name= $fichier['file_name'];

                        $data=array( 
                          
                          'img' =>$image_name,
                        );

          $this->administration_model->modifier_image($cle_img,$data);

       
      }

    }


    function nosActivitesListes(){
        
        $data["listeActivite"]=$this->administration_model->getInfo_activite();
        $data["pg_content"]="pg_nos_activites_listes_view";
        $this->load->view("main_view",$data);
    }

public function upload_projet()
    {
        if (!empty($_FILES)) {
            $targetPath = getcwd() . '/uploads/projet';
            $config['allowed_types'] = 'gif|jpg|jpeg|png';
            $config['file_name'] = date("Y_m_d_H_i_s_").rand();
            $config['upload_path'] = $targetPath;
            $config['allowed_types'] = 'jpg|png';
            $this->load->library('upload', $config);
            $this->upload->initialize($config);
            if ($this->upload->do_upload('file')) {
                $fichier = $this->upload->data();
            }
                        
                     
            $cle_img=$this->input->post('cle_img');
                        $image_name= $fichier['file_name'];
                $data=array( 
                          'cle_img' =>$cle_img,
                          'img' =>$image_name,
                        );

          $this->administration_model->ajoutImage($data);
       
      }

    }


public function upload_projet_modifier()
    {
        if (!empty($_FILES)) {
            $targetPath = getcwd() . '/uploads/projet';
            $config['allowed_types'] = 'gif|jpg|jpeg|png';
            $config['file_name'] = date("Y_m_d_H_i_s_").rand();
            $config['upload_path'] = $targetPath;
            $config['allowed_types'] = 'jpg|png';
            $this->load->library('upload', $config);
            $this->upload->initialize($config);
            if ($this->upload->do_upload('file')) {
                $fichier = $this->upload->data();
            }
                        $cle_img=$this->input->post('cle_img');
                        $image_name= $fichier['file_name'];

                        $data=array( 
                          
                          'img' =>$image_name,
                        );

          $this->administration_model->modifier_image($cle_img,$data);

       
      }

    }



    function nosProjetsListes(){

        $data["listeProjets"]=$this->administration_model->getInfo_projets();
        $data["pg_content"]="pg_nos_projets_liste_view";
        $this->load->view("main_view",$data);
    }


public function upload_formation()
    {
        if (!empty($_FILES)) {
            $targetPath = getcwd() . '/uploads/modules de formation';
            $config['allowed_types'] = 'gif|jpg|jpeg|png';
            $config['file_name'] = date("Y_m_d_H_i_s_").rand();
            $config['upload_path'] = $targetPath;
            $config['allowed_types'] = 'jpg|png';
            $this->load->library('upload', $config);
            $this->upload->initialize($config);
            if ($this->upload->do_upload('file')) {
                $fichier = $this->upload->data();
            }
                        
                     
            
        $cle_img=$this->input->post('cle_img');
                        $image_name= $fichier['file_name'];
                $data=array( 
                          'cle_img' =>$cle_img,
                          'img' =>$image_name,
                        );

          $this->administration_model->ajoutImage($data);
       
      }

    }



public function upload_formation_modifier()
    {
        if (!empty($_FILES)) {
            $targetPath = getcwd() . '/uploads/modules de formation';
            $config['allowed_types'] = 'gif|jpg|jpeg|png';
            $config['file_name'] = date("Y_m_d_H_i_s_").rand();
            $config['upload_path'] = $targetPath;
            $config['allowed_types'] = 'jpg|png';
            $this->load->library('upload', $config);
            $this->upload->initialize($config);
            if ($this->upload->do_upload('file')) {
                $fichier = $this->upload->data();
            }
                        $cle_img=$this->input->post('cle_img');
                        $image_name= $fichier['file_name'];

                        $data=array( 
                          
                          'img' =>$image_name,
                        );

          $this->administration_model->modifier_image($cle_img,$data);

       
      }

    }


    function nosFormationsListes(){

        $data["listeFormation"]=$this->administration_model->getInfo_formation();
        $data["pg_content"]="pg_nos_formations_liste_view";
        $this->load->view("main_view",$data);
    }

    public function upload_photo()
      {
          if (!empty($_FILES)) {
              $targetPath = getcwd() . '/uploads/photo';
              $config['allowed_types'] = 'gif|jpg|jpeg|png';
              $config['file_name'] = date("Y_m_d_H_i_s_").rand();
              $config['upload_path'] = $targetPath;
              $config['allowed_types'] = 'jpg|png';
              $this->load->library('upload', $config);
              $this->upload->initialize($config);
              if ($this->upload->do_upload('file')) {
                  $fichier = $this->upload->data();
              }
                          
                       
              
            $cle_img=$this->input->post('cle_img');
                        $image_name= $fichier['file_name'];
                $data=array( 
                          'cle_img' =>$cle_img,
                          'img' =>$image_name,
                        );

          $this->administration_model->ajoutImage($data);

         
        }

      }


    public function upload_photo_modifier()
        {
          if (!empty($_FILES)) {
            $targetPath = getcwd() . '/uploads/photo';
            $config['allowed_types'] = 'gif|jpg|jpeg|png';
            $config['file_name'] = date("Y_m_d_H_i_s_").rand();
            $config['upload_path'] = $targetPath;
            $config['allowed_types'] = 'jpg|png';
            $this->load->library('upload', $config);
            $this->upload->initialize($config);
            if ($this->upload->do_upload('file')) {
                $fichier = $this->upload->data();
            }
                        $cle_img=$this->input->post('cle_img');
                        $image_name= $fichier['file_name'];

                        $data=array( 
                          
                          'img' =>$image_name,
                        );

          $this->administration_model->modifier_image($cle_img,$data);

       
      }

    }

    function nosPhotosListes(){

        $data["listePhotos"]=$this->administration_model->getInfo_photos();
        $data["pg_content"]="pg_nos_photos_liste_view";
        $this->load->view("main_view",$data);
    }

public function upload_video()
      {
          if (!empty($_FILES)) {
              $targetPath = getcwd() . '/uploads/video';
              $config['allowed_types'] = 'gif|jpg|jpeg|png';
              $config['file_name'] = date("Y_m_d_H_i_s_").rand();
              $config['upload_path'] = $targetPath;
              $config['allowed_types'] = 'jpg|png';
              $this->load->library('upload', $config);
              $this->upload->initialize($config);
              if ($this->upload->do_upload('file')) {
                  $fichier = $this->upload->data();
              }
                          
                       
              $cle_img=$this->input->post('cle_img');
                        $image_name= $fichier['file_name'];
                $data=array( 
                          'cle_img' =>$cle_img,
                          'img' =>$image_name,
                        );

          $this->administration_model->ajoutImage($data);

         
        }

      }


public function upload_video_modifier()
        {
          if (!empty($_FILES)) {
            $targetPath = getcwd() . '/uploads/video';
            $config['allowed_types'] = 'gif|jpg|jpeg|png';
            $config['file_name'] = date("Y_m_d_H_i_s_").rand();
            $config['upload_path'] = $targetPath;
            $config['allowed_types'] = 'jpg|png';
            $this->load->library('upload', $config);
            $this->upload->initialize($config);
            if ($this->upload->do_upload('file')) {
                $fichier = $this->upload->data();
            }
                        $cle_img=$this->input->post('cle_img');
                        $image_name= $fichier['file_name'];

                        $data=array( 
                          
                          'img' =>$image_name,
                        );

          $this->administration_model->modifier_image($cle_img,$data);

       
      }

    }



    function nosVideosListes(){

        $data["listeVideos"]=$this->administration_model->getInfo_videos();
        $data["pg_content"]="pg_nos_videos_liste_view";
        $this->load->view("main_view",$data);
    }

    public function upload_admin()
    {
        if (!empty($_FILES)) {
            $targetPath = getcwd() . '/uploads/img_admin';
            $config['allowed_types'] = 'gif|jpg|jpeg|png';
            $config['file_name'] = date("Y_m_d_H_i_s_").rand();
            $config['upload_path'] = $targetPath;
            $config['allowed_types'] = 'jpg|png';
            $this->load->library('upload', $config);
            $this->upload->initialize($config);
            if ($this->upload->do_upload('file')) {
                $fichier = $this->upload->data();
            }
                        
                     
            $cle_img=$this->input->post('cle_img');
                        $image_name= $fichier['file_name'];
                $data=array( 
                          'cle_img' =>$cle_img,
                          'img' =>$image_name,
                        );

          $this->administration_model->ajoutImage($data);

       
      }

    }


public function upload_admin_modifier()
        {
          if (!empty($_FILES)) {
            $targetPath = getcwd() . '/uploads/img_admin';
            $config['allowed_types'] = 'gif|jpg|jpeg|png';
            $config['file_name'] = date("Y_m_d_H_i_s_").rand();
            $config['upload_path'] = $targetPath;
            $config['allowed_types'] = 'jpg|png';
            $this->load->library('upload', $config);
            $this->upload->initialize($config);
            if ($this->upload->do_upload('file')) {
                $fichier = $this->upload->data();
            }
                        $cle_img=$this->input->post('cle_img');
                        $image_name= $fichier['file_name'];

                        $data=array( 
                          
                          'img' =>$image_name,
                        );

          $this->administration_model->modifier_image($cle_img,$data);

       
      }

    }



    function adminListes(){

        $data["listeAdmin"]=$this->administration_model->getInfo_admin();
        $data["pg_content"]="pg_administrateurs_liste_view";
        $this->load->view("main_view",$data);
    }

    

     function seDeconnecter(){

        session_destroy();
        redirect("login");
    } 


}
