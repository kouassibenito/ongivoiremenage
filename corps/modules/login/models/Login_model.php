<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login_model extends CI_Model {

    function __construct() {
        parent::__construct();
    }
    

    
    function check_connection($login,$password){

      $this->db->where('email_administrateur',$login);
      $this->db->where('password_administrateur', $password);
      $q = $this->db->get('administrateur');
    
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
      $q = $this->db->get('administrateur');
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