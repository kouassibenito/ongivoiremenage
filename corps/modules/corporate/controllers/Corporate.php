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
        $data["actualites_limite2"]=$this->corporate_model->actualites_limite2();

        $this->load->view("pg_quiSommesNous",$data);
    }

    function nosMissions(){

          $data["infos_generales"]=$this->corporate_model->infosGenerales();
          $data["actualites_limite2"]=$this->corporate_model->actualites_limite2();  
          $data["slide_title"]="Nos missions";
          $data["slide_link1"]="Accueil";
          $data["slide_link2"]="Nos missions";

            $this->load->view("pg_nosMissions",$data);
        }


        function notreEquipe(){
           
           $data["infos_generales"]=$this->corporate_model->infosGenerales();
           $data["notreequipe"]=$this->corporate_model->notreequipe();
           $data["actualites_limite2"]=$this->corporate_model->actualites_limite2();
           $data["slide_title"]="Notre équipe";
           $data["slide_link1"]="Accueil";
           $data["slide_link2"]="Notre équipe";

            $this->load->view("pg_notreEquipe",$data);
        }


        function nosObjectifs(){
           
           $data["infos_generales"]=$this->corporate_model->infosGenerales();
           $data["actualites_limite2"]=$this->corporate_model->actualites_limite2();
           $data["slide_title"]="Nos objectifs";
           $data["slide_link1"]="Accueil";
           $data["slide_link2"]="Nos objectifs";

            $this->load->view("pg_nosObjectifs",$data);
        }

        
        function contact(){
           
           $data["infos_generales"]=$this->corporate_model->infosGenerales();
           $data["actualites_limite2"]=$this->corporate_model->actualites_limite2();
           $data["contact"]=$this->corporate_model->contact();
           $data["slide_title"]="Contacts";
           $data["slide_link1"]="Accueil";
           $data["slide_link2"]="Contacts";

            $this->load->view("pg_contact",$data);
        }

        function photos(){
           
           $data["infos_generales"]=$this->corporate_model->infosGenerales();
           $data["actualites_limite2"]=$this->corporate_model->actualites_limite2();
           $data["photo"]=$this->corporate_model->photo();
           $data["slide_title"]="Galerie Photo";
           $data["slide_link1"]="Accueil";
           $data["slide_link2"]="Photos";

            $this->load->view("pg_photos",$data);
        }

        function videos(){
           
           $data["infos_generales"]=$this->corporate_model->infosGenerales();
           $data["actualites_limite2"]=$this->corporate_model->actualites_limite2();
           $data["video"]=$this->corporate_model->video();
           $data["slide_title"]="Galerie vidéos";
           $data["slide_link1"]="Accueil";
           $data["slide_link2"]="videos";

            $this->load->view("pg_videos",$data);
        }

        function actualites(){
           
           $data["infos_generales"]=$this->corporate_model->infosGenerales();
           $data["actualite"]=$this->corporate_model->actualite();
           $data["actualites_limite2"]=$this->corporate_model->actualites_limite2();
           $data["slide_title"]="Actualités";
           $data["slide_link1"]="Accueil";
           $data["slide_link2"]="Actualités";

            $this->load->view("pg_actualites",$data);
        }


        function nosActualites_descrip_complete($id_actualite){

           $data["infos_generales"]=$this->corporate_model->infosGenerales(); 
           $data["actualites_description"]=$this->corporate_model->actualites_description($id_actualite);
           $data["actualites_limite2"]=$this->corporate_model->actualites_limite2();
           $data["slide_title"]="Nos Actualités";
           $data["slide_link1"]="Accueil";
           $data["slide_link2"]="Nos Actualités";
           $data["slide_link3"]="Actualités description complète";

            $this->load->view("pg_actualites_description_complete",$data);
        }


        function nosProjets(){
           
           $data["infos_generales"]=$this->corporate_model->infosGenerales();
           $data["projets"]=$this->corporate_model->projets();
           $data["actualites_limite2"]=$this->corporate_model->actualites_limite2();
           $data["slide_title"]="Nos projets";
           $data["slide_link1"]="Accueil";
           $data["slide_link2"]="Nos projets";

            $this->load->view("pg_nosProjets",$data);
        }


        function nosProjet_description($id_projet){

           $data["infos_generales"]=$this->corporate_model->infosGenerales(); 
           $data["projet_description"]=$this->corporate_model->projet_description($id_projet);
           $data["actualites_limite2"]=$this->corporate_model->actualites_limite2();
           $data["slide_title"]="Nos Projets";
           $data["slide_link1"]="Accueil";
           $data["slide_link2"]="Nos Projets";
           $data["slide_link3"]="Projets description complète";

            $this->load->view("pg_projet_description_complete",$data);
        }



        function nosActivites(){
           
           $data["infos_generales"]=$this->corporate_model->infosGenerales();
           $data["activite"]=$this->corporate_model->activite();
           $data["actualites_limite2"]=$this->corporate_model->actualites_limite2();
           $data["slide_title"]="Nos Activités";
           $data["slide_link1"]="Accueil";
           $data["slide_link2"]="Nos Activités";

            $this->load->view("pg_nosActivites",$data);
        }


        function nosActivites_descrip_complete($id_activite){

           $data["infos_generales"]=$this->corporate_model->infosGenerales(); 
           $data["activite_description"]=$this->corporate_model->activite_description($id_activite);
           $data["actualites_limite2"]=$this->corporate_model->actualites_limite2();
           $data["slide_title"]="Nos Activités";
           $data["slide_link1"]="Accueil";
           $data["slide_link2"]="Nos Activités";
           $data["slide_link3"]="Activités description complète";

            $this->load->view("pg_activites_description_complete",$data);
        }


        function modulesFormations(){
           
           $data["infos_generales"]=$this->corporate_model->infosGenerales();
           $data["moduleformation"]=$this->corporate_model->moduleformation();
           $data["actualites_limite2"]=$this->corporate_model->actualites_limite2();
           $data["slide_title"]="Nos modules de formations";
           $data["slide_link1"]="Accueil";
           $data["slide_link2"]="Nos modules de formations";

            $this->load->view("pg_modulesFormations",$data);
        }


        function moduleFormations_descrip_complete($id_formation){

           $data["infos_generales"]=$this->corporate_model->infosGenerales(); 
           $data["formation_description"]=$this->corporate_model->formation_description($id_formation);
           $data["actualites_limite2"]=$this->corporate_model->actualites_limite2();
           $data["slide_title"]="Nos modules de formations";
           $data["slide_link1"]="Accueil";
           $data["slide_link2"]="Nos modules de formations";
           $data["slide_link3"]="Formation description complète";

            $this->load->view("pg_formation_description_complete",$data);
        }


        function nosCibles(){
           
           $data["infos_generales"]=$this->corporate_model->infosGenerales();
           $data["cible"]=$this->corporate_model->cible();
           $data["actualites_limite2"]=$this->corporate_model->actualites_limite2();
           $data["slide_title"]="Nos cibles";
           $data["slide_link1"]="Accueil";
           $data["slide_link2"]="Nos cibles";

            $this->load->view("pg_nosCibles",$data);
        }



  


// function testmail(){

//       $to_email="kouassiyaofabricehonorat@gmail.com";
//       $message="test1";
//       $this->envoi_mail($to_email,$message);
//   }

  public function envoi_mail($to_email,$message){

        

    $from_email = "infoongivoiremenage@gmail.com";
    
    $nom ="Finasys - E library";
     
    $subject2 = 'Ong ivoire menage - Formulaire contact';
     
    $message_final = $message;
     
    $config['protocol'] = 'smtp';
    $config['smtp_host'] = 'ssl://smtp.googlemail.com';
    $config['smtp_port'] = '465';
    $config['smtp_user'] = 'infoongivoiremenage@gmail.com';
    $config['smtp_pass'] = 'ongivoiremenage2019';
    $config['mailtype'] = 'html';
    $config['charset'] = 'utf-8';
    $config['wordwrap'] = TRUE;
    $config['newline'] = "\r\n"; //use double quotes
    $this->load->library('email', $config);
    
    $this->email->initialize($config);
     //send mail
    $this->email->from($from_email, $nom);
    $this->email->to($to_email);
    //$this->email->cc($list);
    $this->email->subject($subject2);
    $this->email->message($message_final);

    if (!$this->email->send()) { 
      show_error($this->email->print_debugger()); 
     } else { 
         echo 'Your e-mail has been sent!'; 
        }

 }


function envoiemail_formulaire(){



        $this->form_validation->set_rules('nom', 'Nom', 'trim');
        $this->form_validation->set_rules('mail_internaute', 'mail internaute', 'trim');
        $this->form_validation->set_rules('sujet', 'sujet', 'trim');
        $this->form_validation->set_rules('message', 'message', 'trim');
        
       
        
        if ($this->form_validation->run()){

            $nom=$this->input->post('nom');
            $mail_internaute=$this->input->post('mail_internaute');
            $sujet=$this->input->post('sujet');
            $message=$this->input->post('message');
            
            $message_envoye=$nom."<br/>".$mail_internaute."<br/>".$sujet."<br/>".$message;
            
           

            $this->envoi_mail($mail_internaute,$message_envoye);

             
            $data["mail"]="success";
            $data["pg_content"]="tpl_form_contact";
            $this->load->view("main_view",$data);
            

        }else{


            $data["pg_content"]="tpl_form_contact";
            $this->load->view("main_view",$data);
       

       }


        
    }




}
