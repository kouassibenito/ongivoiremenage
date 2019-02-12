<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Administration extends MX_Controller {
        
    public function __construct()
	{
	
		parent::__construct();
        $this->load->model('administration_model');
    
	}

    function index(){

        $data["pg_content"]="pg_dashboard_view";
        $this->load->view("main_view",$data);
    }

    function infosGenerales(){

        $data["pg_content"]="pg_infos_generales_view";
        $data["infosGenerales"]=$this->administration_model->getInfo_generales();
        $this->load->view("main_view",$data);
    }

    function sliders(){

        $data["pg_content"]="pg_sliders_ajouter_view";
        $this->load->view("main_view",$data);
    }

     function slidersModifier($id_slide){
        
        $data["info_slide_id"]=$this->administration_model->getInfo_sliders_id($id_slide);
        $data["pg_content"]="pg_sliders_modifier_view";
        $this->load->view("main_view",$data);
    }

    function supprim_slider($id_slide){
     
      if($this->administration_model->delete_slider($id_slide)){

        redirect("administration/slidersListes");

      }else{
        
        redirect("administration/slidersListes");
      }

   }


    function notreEquipe(){

        $data["pg_content"]="pg_notre_equipe_ajouter_view";
        $this->load->view("main_view",$data);
    }


    function equipeModifier($id_equipe){
        
        $data["info_equipe_id"]=$this->administration_model->getInfo_equipe_id($id_equipe);
        $data["pg_content"]="pg_notre_equipe_modifier_view";
        $this->load->view("main_view",$data);
    }


    function supprim_equipe($id_equipe){
     
      if($this->administration_model->delete_equipe($id_equipe)){

        redirect("administration/notreEquipeListes");

      }else{
        
        redirect("administration/notreEquipeListes");
      }

   }




    function nosActualites(){

        $data["pg_content"]="pg_nos_actualites_ajouter_view";
        $this->load->view("main_view",$data);
    }


    function nosActualitesModifier($id_actualite){
        
        $data["info_actualite_id"]=$this->administration_model->getInfo_actualite_id($id_actualite);
        $data["pg_content"]="pg_nos_actualites_modifier_view";
        $this->load->view("main_view",$data);
    }




    function supprim_actualite($id_actualite){
     
      if($this->administration_model->delete_actualite($id_actualite)){

        redirect("administration/nosActualitesListes");

      }else{
        
        redirect("administration/nosActualitesListes");
      }

   }



    function nosActivites(){

        $data["pg_content"]="pg_nos_activites_ajouter_view";
        $this->load->view("main_view",$data);
    }


    function activiteModifier($id_activite){
        
        $data["info_activite_id"]=$this->administration_model->getInfo_activite_id($id_activite);
        $data["pg_content"]="pg_nos_activites_modifier_view";
        $this->load->view("main_view",$data);
    }



    function supprim_activites($id_activite){
     
      if($this->administration_model->delete_activite($id_activite)){

        redirect("administration/nosActivitesListes");

      }else{
        
        redirect("administration/nosActivitesListes");
      }

   }



    function nosProjets(){

        $data["pg_content"]="pg_nos_projets_ajouter_view";
        $this->load->view("main_view",$data);
    }

    function projetModifier($id_projet){
        
        $data["info_projet_id"]=$this->administration_model->getInfo_projet_id($id_projet);
        $data["pg_content"]="pg_nos_projets_modifier_view";
        $this->load->view("main_view",$data);
    }


    function supprim_projet($id_projet){
     
      if($this->administration_model->delete_projet($id_projet)){

        redirect("administration/nosProjetsListes");

      }else{
        
        redirect("administration/nosProjetsListes");
      }

   }



    function nosFormations(){

        $data["pg_content"]="pg_nos_formations_ajouter_view";
        $this->load->view("main_view",$data);
    }


    function formationModifier($id_formation){
        
        $data["info_formation_id"]=$this->administration_model->getInfo_formation_id($id_formation);
        $data["pg_content"]="pg_nos_formations_modifier_view";
        $this->load->view("main_view",$data);
    }


    function supprim_formation($id_formation){
     
      if($this->administration_model->delete_formation($id_formation)){

        redirect("administration/nosFormationsListes");

      }else{
        
        redirect("administration/nosFormationsListes");
      }

   }


    function nosPhotos(){

        $data["pg_content"]="pg_nos_photos_ajouter_view";
        $this->load->view("main_view",$data);
    }


    function photoModifier($id_photo){
        
        $data["info_photo_id"]=$this->administration_model->getInfo_photo_id($id_photo);
        $data["pg_content"]="pg_nos_photos_modifier_view";
        $this->load->view("main_view",$data);
    }


    function supprim_photo($id_photo){
     
      if($this->administration_model->delete_photo($id_photo)){

        redirect("administration/nosPhotosListes");

      }else{
        
        redirect("administration/nosPhotosListes");
      }

   }


    function nosVideos(){

        $data["pg_content"]="pg_nos_videos_ajouter_view";
        $this->load->view("main_view",$data);
    }


    function videoModifier($id_video){
        
        $data["info_video_id"]=$this->administration_model->getInfo_video_id($id_video);
        $data["pg_content"]="pg_nos_videos_modifier_view";
        $this->load->view("main_view",$data);
    }

    function supprim_video($id_video){
     
      if($this->administration_model->delete_video($id_video)){

        redirect("administration/nosVideosListes");

      }else{
        
        redirect("administration/nosVideosListes");
      }

   }

    function adminAjouter(){

        $data["pg_content"]="pg_administrateurs_ajouter_view";
        $this->load->view("main_view",$data);
    }


    function modifierAdmin($id_administrateur){
        
       $data["info_admin_id"]=$this->administration_model->getInfo_admin_id($id_administrateur);
        $data["pg_content"]="pg_administrateurs_modifier_view";
        $this->load->view("main_view",$data);
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

    function nosActualitesListes(){

        $data["listeActualite"]=$this->administration_model->getInfo_actualite();
        $data["pg_content"]="pg_nos_actualites_liste_view";
        $this->load->view("main_view",$data);
    }


    function nosActivitesListes(){
        
        $data["listeActivite"]=$this->administration_model->getInfo_activite();
        $data["pg_content"]="pg_nos_activites_listes_view";
        $this->load->view("main_view",$data);
    }


    function nosProjetsListes(){

        $data["listeProjets"]=$this->administration_model->getInfo_projets();
        $data["pg_content"]="pg_nos_projets_liste_view";
        $this->load->view("main_view",$data);
    }



    function nosFormationsListes(){

        $data["listeFormation"]=$this->administration_model->getInfo_formation();
        $data["pg_content"]="pg_nos_formations_liste_view";
        $this->load->view("main_view",$data);
    }


    function nosPhotosListes(){

        $data["listePhotos"]=$this->administration_model->getInfo_photos();
        $data["pg_content"]="pg_nos_photos_liste_view";
        $this->load->view("main_view",$data);
    }


    function nosVideosListes(){

        $data["listeVideos"]=$this->administration_model->getInfo_videos();
        $data["pg_content"]="pg_nos_videos_liste_view";
        $this->load->view("main_view",$data);
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
