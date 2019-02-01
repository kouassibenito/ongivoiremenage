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
        $this->load->view("main_view",$data);
    }

    function sliders(){

        $data["pg_content"]="pg_sliders_ajouter_view";
        $this->load->view("main_view",$data);
    }

    function notreEquipe(){

        $data["pg_content"]="pg_notre_equipe_ajouter_view";
        $this->load->view("main_view",$data);
    }

    function nosActualites(){

        $data["pg_content"]="pg_nos_actualites_ajouter_view";
        $this->load->view("main_view",$data);
    }


    function nosProjets(){

        $data["pg_content"]="pg_nos_projets_ajouter_view";
        $this->load->view("main_view",$data);
    }


    function nosActivites(){

        $data["pg_content"]="pg_nos_activites_ajouter_view";
        $this->load->view("main_view",$data);
    }


    function nosFormations(){

        $data["pg_content"]="pg_nos_formations_ajouter_view";
        $this->load->view("main_view",$data);
    }


    function nosPhotos(){

        $data["pg_content"]="pg_nos_photos_ajouter_view";
        $this->load->view("main_view",$data);
    }


    function nosVideos(){

        $data["pg_content"]="pg_nos_videos_ajouter_view";
        $this->load->view("main_view",$data);
    }

    function adminAjouter(){

        $data["pg_content"]="pg_administrateurs_ajouter_view";
        $this->load->view("main_view",$data);
    }


//modifier

    function slidersModifier(){

        $data["pg_content"]="pg_sliders_modifier_view";
        $this->load->view("main_view",$data);
    }

    function notreEquipeModifier(){

        $data["pg_content"]="pg_notre_equipe_modifier_view";
        $this->load->view("main_view",$data);
    }

    function nosActualitesModifier(){

        $data["pg_content"]="pg_nos_actualites_modifier_view";
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

        $data["pg_content"]="pg_sliders_liste_view";
        $this->load->view("main_view",$data);
    }

    function notreEquipeListes(){

          $data["pg_content"]="pg_notre_equipe_liste_view";
        $this->load->view("main_view",$data);

        
    }

    function nosActualitesListes(){

        
        $data["pg_content"]="pg_nos_actualites_liste_view";
        $this->load->view("main_view",$data);
    }


    function nosProjetsListes(){

         $data["pg_content"]="pg_nos_projets_liste_view";
        $this->load->view("main_view",$data);
    }


    function nosActivitesListes(){

        $data["pg_content"]="pg_nos_activites_listes_view";
        $this->load->view("main_view",$data);
    }



    function nosFormationsListes(){

        $data["pg_content"]="pg_nos_formations_liste_view";
        $this->load->view("main_view",$data);
    }


    function nosPhotosListes(){

         $data["pg_content"]="pg_nos_photos_liste_view";
        $this->load->view("main_view",$data);
    }


    function nosVideosListes(){

        $data["pg_content"]="pg_nos_videos_liste_view";
        $this->load->view("main_view",$data);
    }

    function adminListes(){

        $data["pg_content"]="pg_administrateurs_liste_view";
        $this->load->view("main_view",$data);
    }




}
