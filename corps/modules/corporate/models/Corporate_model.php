<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Corporate_model extends CI_Model {

    function __construct() {
        parent::__construct();
    }


     //Infos general
    function infosGenerales(){
       
      $id_infos=1234;
      $this->db->limit(1);
      $this->db->where('id_infos',$id_infos);
      $this->db->select()->from('infos_generales');
       
      $q = $this->db->get();

        if($q->num_rows()>0)
        {
            foreach ($q->result() as $lign)
            {
                $data[]=$lign;
            }
            
            return $data;
        }

   }

     //Infos sliders
    function sliders(){
      
      $this->db->select()->from('sliders');
       
      $q = $this->db->get();

        if($q->num_rows()>0)
        {
            foreach ($q->result() as $lign)
            {
                $data[]=$lign;
            }
            
            return $data;
        }

   }


     //Infos caracteristiques 1
    function caracteristiques1(){
       
	      $id_caracteristiques=1;
	      $this->db->limit(1);
	      $this->db->where('id_caracteristiques',$id_caracteristiques);
	      $this->db->select()->from('accueil_caracteristiques');
	       
	      $q = $this->db->get();

	        if($q->num_rows()>0)
	        {
	            foreach ($q->result() as $lign)
	            {
	                $data[]=$lign;
	            }
	            
	            return $data;
	        }

	   }


	    //Infos caracteristiques 2
    function caracteristiques2(){
       
	      $id_caracteristiques=2;
	      $this->db->limit(1);
	      $this->db->where('id_caracteristiques',$id_caracteristiques);
	      $this->db->select()->from('accueil_caracteristiques');
	       
	      $q = $this->db->get();

	        if($q->num_rows()>0)
	        {
	            foreach ($q->result() as $lign)
	            {
	                $data[]=$lign;
	            }
	            
	            return $data;
	        }

	   }

	
 //Infos caracteristiques 3
    function caracteristiques3(){
       
	      $id_caracteristiques=3;
	      $this->db->limit(1);
	      $this->db->where('id_caracteristiques',$id_caracteristiques);
	      $this->db->select()->from('accueil_caracteristiques');
	       
	      $q = $this->db->get();

	        if($q->num_rows()>0)
	        {
	            foreach ($q->result() as $lign)
	            {
	                $data[]=$lign;
	            }
	            
	            return $data;
	        }

	   }

 //Infos caracteristiques 4
    function caracteristiques4(){
       
	      $id_caracteristiques=4;
	      $this->db->limit(1);
	      $this->db->where('id_caracteristiques',$id_caracteristiques);
	      $this->db->select()->from('accueil_caracteristiques');
	       
	      $q = $this->db->get();

	        if($q->num_rows()>0)
	        {
	            foreach ($q->result() as $lign)
	            {
	                $data[]=$lign;
	            }
	            
	            return $data;
	        }

	   }



 //qui sommes nous accueil
    function quisommesnous(){
       
      $id_quisommesnous=1;
      $this->db->limit(1);
      $this->db->where('id_quisommesnous',$id_quisommesnous);
      $this->db->select()->from('accueil_quisommesnous');
       
      $q = $this->db->get();

        if($q->num_rows()>0)
        {
            foreach ($q->result() as $lign)
            {
                $data[]=$lign;
            }
            
            return $data;
        }

   }


//besoin d'aide accueil
    function besoindaide(){
       
      $id_demande_aide=1;
      $this->db->limit(1);
      $this->db->where('id_demande_aide',$id_demande_aide);
      $this->db->select()->from('demande_aide');
       
      $q = $this->db->get();

        if($q->num_rows()>0)
        {
            foreach ($q->result() as $lign)
            {
                $data[]=$lign;
            }
            
            return $data;
        }

   }


//equipe accueil
    function equipe_accueil(){
       

      $this->db->select()->from('equipe');
       
      $q = $this->db->get();

        if($q->num_rows()>0)
        {
            foreach ($q->result() as $lign)
            {
                $data[]=$lign;
            }
            
            return $data;
        }

   }


   //Page equipe
    function notreequipe(){
       

      $this->db->select()->from('equipe');
       
      $q = $this->db->get();

        if($q->num_rows()>0)
        {
            foreach ($q->result() as $lign)
            {
                $data[]=$lign;
            }
            
            return $data;
        }

   }



//Page contact
    function contact(){
       
	      $id_contact=1;
	      $this->db->limit(1);
	      $this->db->where('id_contact',$id_contact);
	      $this->db->select()->from('contact');
	       
	      $q = $this->db->get();

	        if($q->num_rows()>0)
	        {
	            foreach ($q->result() as $lign)
	            {
	                $data[]=$lign;
	            }
	            
	            return $data;
	        }

	   }

 //Page photo
    function photo(){
       

      $this->db->select()->from('photo');
       
      $q = $this->db->get();

        if($q->num_rows()>0)
        {
            foreach ($q->result() as $lign)
            {
                $data[]=$lign;
            }
            
            return $data;
        }

   }


//Page video
    function video(){
       

      $this->db->select()->from('video');
       
      $q = $this->db->get();

        if($q->num_rows()>0)
        {
            foreach ($q->result() as $lign)
            {
                $data[]=$lign;
            }
            
            return $data;
        }

   }



   //Page actualites
    function actualite(){
       

      $this->db->select()->from('actualite');
       
      $q = $this->db->get();

        if($q->num_rows()>0)
        {
            foreach ($q->result() as $lign)
            {
                $data[]=$lign;
            }
            
            return $data;
        }

   }

   


   //Page actualités description
    function actualites_description($id_actualite){
       
      $this->db->where('id_actualite',$id_actualite);
      $this->db->select()->from('actualite');
       
      $q = $this->db->get();

        if($q->num_rows()>0)
        {
            foreach ($q->result() as $lign)
            {
                $data[]=$lign;
            }
            
            return $data;
        }

   }

   

//actualites accueil limite 2
    function actualites_limite2(){
       
      
      $this->db->limit(2);
      $this->db->select()->from('actualite');
       
      $q = $this->db->get();

        if($q->num_rows()>0)
        {
            foreach ($q->result() as $lign)
            {
                $data[]=$lign;
            }
            
            return $data;
        }

   }


   //actualites accueil limite 3
    function actualites_limite3(){
       
   
      $this->db->limit(3); 
      $this->db->select()->from('actualite');
       
      $q = $this->db->get();

        if($q->num_rows()>0)
        {
            foreach ($q->result() as $lign)
            {
                $data[]=$lign;
            }
            
            return $data;
        }

   }



//Page module de formation
    function moduleformation(){
       

      $this->db->select()->from('formation');
       
      $q = $this->db->get();

        if($q->num_rows()>0)
        {
            foreach ($q->result() as $lign)
            {
                $data[]=$lign;
            }
            
            return $data;
        }

   }


   //Page nos modules de formation description
    function formation_description($id_formation){
       
      
      $this->db->where('id_formation',$id_formation);
      $this->db->select()->from('formation');
       
      $q = $this->db->get();

        if($q->num_rows()>0)
        {
            foreach ($q->result() as $lign)
            {
                $data[]=$lign;
            }
            
            return $data;
        }

   }



//Page activités
    function activite(){
       

      $this->db->select()->from('activite');
       
      $q = $this->db->get();

        if($q->num_rows()>0)
        {
            foreach ($q->result() as $lign)
            {
                $data[]=$lign;
            }
            
            return $data;
        }

   }


//Page activités description
    function activite_description($id_activite){
       
      
      $this->db->where('id_activite',$id_activite);
      $this->db->select()->from('activite');
       
      $q = $this->db->get();

        if($q->num_rows()>0)
        {
            foreach ($q->result() as $lign)
            {
                $data[]=$lign;
            }
            
            return $data;
        }

   }

//Page projets
    function projets(){
       

      $this->db->select()->from('projet');
       
      $q = $this->db->get();

        if($q->num_rows()>0)
        {
            foreach ($q->result() as $lign)
            {
                $data[]=$lign;
            }
            
            return $data;
        }

   }


//Page projet description
    function projet_description($id_projet){
       
      
      $this->db->where('id_projet',$id_projet);
      $this->db->select()->from('projet');
       
      $q = $this->db->get();

        if($q->num_rows()>0)
        {
            foreach ($q->result() as $lign)
            {
                $data[]=$lign;
            }
            
            return $data;
        }

   }






//Page cible
   function cible(){
       
      $id_cible=1;
      $this->db->limit(3);
      $this->db->where('id_cible',$id_cible);
      $this->db->select()->from('cible');
       
      $q = $this->db->get();

        if($q->num_rows()>0)
        {
            foreach ($q->result() as $lign)
            {
                $data[]=$lign;
            }
            
            return $data;
        }

   }




public function envoi_mail($to_email,$message){

        

            $from_email = "infoongivoiremenage@gmail.com";
            
            $nom ="ONG ivoire ménage";
           
            $subject2 = 'ONG ivoire ménage - message internaute';
           
            $message_final = $message;
             
            $config['protocol'] = 'smtp';
            $config['smtp_host'] = 'ssl://smtp.googlemail.com';
            $config['smtp_port'] = '465';
            $config['smtp_user'] = 'infoongivoiremenage@gmail.com';
            $config['smtp_pass'] = 'Kouassi2013';
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













}