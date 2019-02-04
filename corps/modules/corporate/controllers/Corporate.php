<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Corporate extends MX_Controller {
        
    public function __construct()
	{
	
		parent::__construct();             
        $this->load->model('corporate_model');	
	}

    function index(){

        $data["infos_generales"]=$this->corporate_model->infosGenerales();
        $data["sliders"]=$this->corporate_model->sliders();
        $data["carateristique_acceuil1"]=$this->corporate_model->caracteristiques1();
        $data["carateristique_acceuil2"]=$this->corporate_model->caracteristiques2();
        $data["carateristique_acceuil3"]=$this->corporate_model->caracteristiques3();
        $data["carateristique_acceuil4"]=$this->corporate_model->caracteristiques4();
        $data["quisommesnous"]=$this->corporate_model->quisommesnous();
        $data["besoindaide"]=$this->corporate_model->besoindaide();
        $data["equipe_accueil"]=$this->corporate_model->equipe_accueil();
        $data["actualites_limite2"]=$this->corporate_model->actualites_limite2();
        $data["actualites_limite3"]=$this->corporate_model->actualites_limite3();
        $this->load->view("main_view",$data);
    }

     function quiSommesNous(){



        $data["infos_generales"]=$this->corporate_model->infosGenerales();
        $data["slide_title"]="Qui sommes nous ?";
        $data["slide_link1"]="Accueil";
        $data["slide_link2"]="Qui sommes nous ?";

        $this->load->view("pg_quiSommesNous",$data);
    }

    function nosMissions(){

          $data["infos_generales"]=$this->corporate_model->infosGenerales();  
          $data["slide_title"]="Nos missions";
          $data["slide_link1"]="Accueil";
          $data["slide_link2"]="Nos missions";

            $this->load->view("pg_nosMissions",$data);
        }


        function notreEquipe(){
           
           $data["infos_generales"]=$this->corporate_model->infosGenerales();
           $data["notreequipe"]=$this->corporate_model->notreequipe();
           $data["slide_title"]="Notre équipe";
           $data["slide_link1"]="Accueil";
           $data["slide_link2"]="Notre équipe";

            $this->load->view("pg_notreEquipe",$data);
        }


        function nosObjectifs(){
           
           $data["infos_generales"]=$this->corporate_model->infosGenerales();
           $data["slide_title"]="Nos objectifs";
           $data["slide_link1"]="Accueil";
           $data["slide_link2"]="Nos objectifs";

            $this->load->view("pg_nosObjectifs",$data);
        }

        
        function contact(){
           
           $data["infos_generales"]=$this->corporate_model->infosGenerales();
           $data["contact"]=$this->corporate_model->contact();
           $data["slide_title"]="Contacts";
           $data["slide_link1"]="Accueil";
           $data["slide_link2"]="Contacts";

            $this->load->view("pg_contact",$data);
        }

        function photos(){
           
           $data["infos_generales"]=$this->corporate_model->infosGenerales();
           $data["photo"]=$this->corporate_model->photo();
           $data["slide_title"]="Galerie Photo";
           $data["slide_link1"]="Accueil";
           $data["slide_link2"]="Photos";

            $this->load->view("pg_photos",$data);
        }

        function videos(){
           
           $data["infos_generales"]=$this->corporate_model->infosGenerales();
           $data["video"]=$this->corporate_model->video();
           $data["slide_title"]="Galerie vidéos";
           $data["slide_link1"]="Accueil";
           $data["slide_link2"]="videos";

            $this->load->view("pg_videos",$data);
        }

        function actualites(){
           
           $data["infos_generales"]=$this->corporate_model->infosGenerales();
           $data["actualite"]=$this->corporate_model->actualite();
           $data["slide_title"]="Actualités";
           $data["slide_link1"]="Accueil";
           $data["slide_link2"]="Actualités";

            $this->load->view("pg_Actualites",$data);
        }


        function nosActualites_descrip_complete($id_actualite){

           $data["infos_generales"]=$this->corporate_model->infosGenerales(); 
           $data["actualites_description"]=$this->corporate_model->actualites_description($id_actualite);
           $data["slide_title"]="Nos Actualités";
           $data["slide_link1"]="Accueil";
           $data["slide_link2"]="Nos Actualités";
           $data["slide_link3"]="Actualités description complète";

            $this->load->view("pg_actualites_description_complete",$data);
        }


        function nosProjets(){
           
           $data["infos_generales"]=$this->corporate_model->infosGenerales();
           $data["projets"]=$this->corporate_model->projets();
           $data["slide_title"]="Nos projets";
           $data["slide_link1"]="Accueil";
           $data["slide_link2"]="Nos projets";

            $this->load->view("pg_nosProjets",$data);
        }


        function nosProjet_description($id_projet){

           $data["infos_generales"]=$this->corporate_model->infosGenerales(); 
           $data["projet_description"]=$this->corporate_model->projet_description($id_projet);
           $data["slide_title"]="Nos Projets";
           $data["slide_link1"]="Accueil";
           $data["slide_link2"]="Nos Projets";
           $data["slide_link3"]="Projets description complète";

            $this->load->view("pg_projet_description_complete",$data);
        }



        function nosActivites(){
           
           $data["infos_generales"]=$this->corporate_model->infosGenerales();
           $data["activite"]=$this->corporate_model->activite();
           $data["slide_title"]="Nos Activités";
           $data["slide_link1"]="Accueil";
           $data["slide_link2"]="Nos Activités";

            $this->load->view("pg_nosActivites",$data);
        }


        function nosActivites_descrip_complete($id_activite){

           $data["infos_generales"]=$this->corporate_model->infosGenerales(); 
           $data["activite_description"]=$this->corporate_model->activite_description($id_activite);
           $data["slide_title"]="Nos Activités";
           $data["slide_link1"]="Accueil";
           $data["slide_link2"]="Nos Activités";
           $data["slide_link3"]="Activités description complète";

            $this->load->view("pg_activites_description_complete",$data);
        }


        function modulesFormations(){
           
           $data["infos_generales"]=$this->corporate_model->infosGenerales();
           $data["moduleformation"]=$this->corporate_model->moduleformation();
           $data["slide_title"]="Nos modules de formations";
           $data["slide_link1"]="Accueil";
           $data["slide_link2"]="Nos modules de formations";

            $this->load->view("pg_modulesFormations",$data);
        }


        function nosCibles(){
           
           $data["infos_generales"]=$this->corporate_model->infosGenerales();
           $data["cible"]=$this->corporate_model->cible();
           $data["slide_title"]="Nos cibles";
           $data["slide_link1"]="Accueil";
           $data["slide_link2"]="Nos cibles";

            $this->load->view("pg_nosCibles",$data);
        }









}
