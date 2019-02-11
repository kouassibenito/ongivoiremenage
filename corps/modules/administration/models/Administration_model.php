<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Administration_model extends CI_Model {

    function __construct() {

        parent::__construct();

    }


     function getInfo_generales(){

      $id_infos="1234";
      $this->db->where('id_infos',$id_infos);
      $q = $this->db->get('infos_generales');
      if($q->num_rows()>0)
      {
          foreach ($q->result() as $lign)
          {
              $data[]=$lign;
          }
          
          return $data;
      }
    }

     function getInfo_sliders(){

      $q = $this->db->get('sliders');
      if($q->num_rows()>0)
      {
          foreach ($q->result() as $lign)
          {
              $data[]=$lign;
          }
          
          return $data;
      }
    }

     function getInfo_sliders_id($id_slide){
   
      $this->db->where('id_slide',$id_slide);
      $q = $this->db->get('sliders');
      if($q->num_rows()>0)
      {
          foreach ($q->result() as $lign)
          {
              $data[]=$lign;
          }
          
          return $data;
      }
    }

     function delete_slider($id_slide){
     
      $this->db->delete('sliders', array('id_slide' => $id_slide));
      return True; 

   }


    function getInfo_equipe(){

      $q = $this->db->get('equipe');
      if($q->num_rows()>0)
      {
          foreach ($q->result() as $lign)
          {
              $data[]=$lign;
          }
          
          return $data;
      }
    }


    function delete_equipe($id_equipe){
     
      $this->db->delete('equipe', array('id_equipe' => $id_equipe));
      return True; 

   }


    function getInfo_actualite(){

      $q = $this->db->get('actualite');
      if($q->num_rows()>0)
      {
          foreach ($q->result() as $lign)
          {
              $data[]=$lign;
          }
          
          return $data;
      }
    }

     function getInfo_actualite_id($id_actualite){
      
      $this->db->where('id_actualite',$id_actualite);
      $q = $this->db->get('actualite');
      if($q->num_rows()>0)
      {
          foreach ($q->result() as $lign)
          {
              $data[]=$lign;
          }
          
          return $data;
      }
    }

    function delete_actualite($id_actualite){
     
      $this->db->delete('actualite', array('id_actualite' => $id_actualite));
      return True; 

   }



    function getInfo_activite(){

      $q = $this->db->get('activite');
      if($q->num_rows()>0)
      {
          foreach ($q->result() as $lign)
          {
              $data[]=$lign;
          }
          
          return $data;
      }
    }


    function getInfo_projets(){

      $q = $this->db->get('projet');
      if($q->num_rows()>0)
      {
          foreach ($q->result() as $lign)
          {
              $data[]=$lign;
          }
          
          return $data;
      }
    }


    function getInfo_formation(){

      $q = $this->db->get('formation');
      if($q->num_rows()>0)
      {
          foreach ($q->result() as $lign)
          {
              $data[]=$lign;
          }
          
          return $data;
      }
    }


    function getInfo_photos(){

      $q = $this->db->get('photo');
      if($q->num_rows()>0)
      {
          foreach ($q->result() as $lign)
          {
              $data[]=$lign;
          }
          
          return $data;
      }
    }


     function getInfo_videos(){

      $q = $this->db->get('video');
      if($q->num_rows()>0)
      {
          foreach ($q->result() as $lign)
          {
              $data[]=$lign;
          }
          
          return $data;
      }
    }


    function getInfo_admin(){

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