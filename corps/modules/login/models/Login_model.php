<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login_model extends CI_Model {

    function __construct() {
        parent::__construct();
    }
    

    
    function check_connection($login,$password){

      $this->db->where('email_administrateur',$login);
      $this->db->where('password_administrateur', $password);
      $q = $this->db->get('mickr_administrateur');
    
      $count=0;

      if($q->num_rows()>0)
      {
         return True;        
      }
      else
      {
        return False;
      }


    }

    function check_connection_vendeur($login,$password){
        
      $status_vendeur="1";
      $this->db->where('status_vendeur',$status_vendeur);
      $this->db->where('email_fournisseur',$login);
      $this->db->where('pass_fournisseur', $password);
      $q = $this->db->get('mickr_fournisseur');
    
      $count=0;

      if($q->num_rows()>0)
      {
         return True;        
      }
      else
      {
        return False;
      }


    }

    function getInfo_user($login,$password){

     
      $this->db->where('email_administrateur',$login);
      $this->db->where('password_administrateur', $password);
      $q = $this->db->get('mickr_administrateur');
      if($q->num_rows()>0)
      {
          foreach ($q->result() as $lign)
          {
              $data[]=$lign;
          }
          
          return $data;
      }
    }

    function getInfo_vendeur($login,$password){

      $this->db->where('email_fournisseur',$login);
      $this->db->where('pass_fournisseur', $password);
      $q = $this->db->get('mickr_fournisseur');
      if($q->num_rows()>0)
      {
          foreach ($q->result() as $lign)
          {
              $data[]=$lign;
          }
          
          return $data;
      }
    }
	
			  
  
   }