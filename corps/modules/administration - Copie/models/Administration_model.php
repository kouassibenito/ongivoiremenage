<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Administration_model extends CI_Model {

    function __construct() {
        parent::__construct();
    }


    //Infos general
    function infosGenerales(){
       
      $id_infos_generales=1;
      $this->db->limit(1);
      $this->db->where('id_infos_generales',$id_infos_generales);
      $this->db->select()->from('mickr_infos_generales');
       
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


   function statut_ecommerce(){

        $id_magasin="NDC001";

        $this->db->where("id_magasin", $id_magasin);
        $this->db->select()->from('mickr_magasin');

        $q = $this->db->get();
        $data="";
        if($q->num_rows()>0)
        {
            foreach ($q->result() as $lign)
            {
                $data=$lign->status;
            }

            return $data;
        }

    }
   
   function modifier_infos_generale($data){

       $id_infos_generales="1";
       
        $this->db->where('id_infos_generales',$id_infos_generales);
        $this->db->update('mickr_infos_generales', $data);
        return True;

   }
  
  function modifier_menu_principale($id_menu_principale,$data){
       

        $this->db->where('id_menu_principale',$id_menu_principale);
        $this->db->update('mickr_menu_principale', $data);
        return True;

  }


  //Flash infos

   
    function infosFlashInfos(){
       
      $this->db->order_by("position_flash_info", "asc"); 
      $this->db->select()->from('mickr_flash_infos');
       
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

    function infosFlashInfos_id($id_flash_infos){

        $this->db->where("id_flash_infos",$id_flash_infos);
        $this->db->select()->from('mickr_flash_infos');

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
   
   function infosFlashInfosID($id_menu_categorie_principale){
       
      $this->db->where("id_menu_categorie_principale", $id_menu_categorie_principale); 
      $this->db->select()->from('mickr_menu_categorie_principale');
      
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

   function supprim_flash_info($id_flash_infos){
     
      $this->db->delete('mickr_flash_infos', array('id_flash_infos' => $id_flash_infos)); 

   }

   function infosFlashInfos_liblle($id_menu_categorie_principale){
       
      $this->db->where("id_menu_categorie_principale", $id_menu_categorie_principale); 
      $this->db->select()->from('mickr_menu_categorie_principale');
      
        $q = $this->db->get();

        $data="";

        if($q->num_rows()>0)
        {
            foreach ($q->result() as $lign)
            {
                $data=$lign->libelle_menu_categorie_principale;
            }
            
            return $data;
        }

   }

   function infosFlashInfosImg($id_menu_categorie_principale){

        $this->db->where("id_menu_categorie_principale", $id_menu_categorie_principale);
        $this->db->select()->from('mickr_menu_principale_img');

        $q = $this->db->get();
        $data="";
        if($q->num_rows()>0)
        {
            foreach ($q->result() as $lign)
            {
                $data=$lign->img;
            }

            return $data;
        }

    }
   
   function modifier_FlashInfos($id_menu_categorie_principale,$data){
       
        $this->db->where('id_menu_categorie_principale ',$id_menu_categorie_principale);
        $this->db->update('mickr_menu_categorie_principale', $data);
        return True;

   }
   
   function compterFlashInfos(){
       
      $nb_categories=$this->db->count_all_results('mickr_flash_infos');
      return $nb_categories;

   }


  
  
   
   function ajoutFlashInfos($data){
       
     $this->db->insert('mickr_flash_infos', $data); 
     return True;

   }

   function modifierFlashInfos($id_flash_infos,$data){
       
        $this->db->where('id_flash_infos',$id_flash_infos);
        $this->db->update('mickr_flash_infos', $data);
        return True;

   }

   function ajoutCommandeLiaisonProduit($data){
       
     $this->db->insert('mickr_liaison_commande_produit', $data); 
     return True;

   }
   function ajoutCommandePrd($data){
       
     $this->db->insert('mickr_commande', $data); 
     return True;

   }

   function supprimLiaison_produit($id_liaison_com_pro){
     
      $this->db->delete('mickr_liaison_commande_produit', array('id_liaison_com_pro' => $id_liaison_com_pro));

      return True; 

   }

   function modifier_produit($id_produits,$data){
       
        $this->db->where('id_produits',$id_produits);
        $this->db->update('mickr_admin_produit', $data);
        return True;

   }

   function count_image_produit($id_produit){

        $this->db->where("id_produit", $id_produit);
        $nb_image=$this->db->count_all_results('mickr_image_produit');

        return $nb_image;

    }
   function recherche_produit($nom_produit){

       
        $array = array('nom_produit' => $nom_produit);
        $this->db->like($array);
        $this->db->order_by("date_ajout", "desc"); 
        $this->db->select()->from('mickr_admin_produit');

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

    //Menus principale
  
  function infosMenus(){
       
      $this->db->order_by("position", "asc"); 
      $this->db->select()->from('mickr_menu_principale');
       
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

   
   
   function liste_menus_position_sup($position){
      
      $this->db->where("position >",$position); 
      $this->db->select()->from('mickr_menu_principale');
       
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
 
   
   function infosMenus_id($id_menu_principale){

    $this->db->where("id_menu_principale",$id_menu_principale);
    $this->db->select()->from('mickr_menu_principale');

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

   function infosMenus_id_nom($id_menu_principale){

    $this->db->where("id_menu_principale",$id_menu_principale);
    $this->db->select()->from('mickr_menu_principale');

    $q = $this->db->get();

    if($q->num_rows()>0)
    {
        foreach ($q->result() as $lign)
        {
            $data=$lign->libelle_menu_principale;
        }

        return $data;
    }

   }

    function infosMenusC_id_nom($id_menu_categorie_principale){

    $this->db->where("id_menu_categorie_principale",$id_menu_categorie_principale);
    $this->db->select()->from('mickr_menu_categorie_principale');

    $q = $this->db->get();

    if($q->num_rows()>0)
    {
        foreach ($q->result() as $lign)
        {
            $data=$lign->libelle_menu_categorie_principale;
        }

        return $data;
    }

   }



   
   function supprim_menu_principale($id_menu_principale){
     
      $this->db->delete('mickr_menu_principale', array('id_menu_principale' => $id_menu_principale)); 

   }
   
   
   
   function editerMenuPrincipale($id_menu_principale,$data){
       
    $this->db->where('id_menu_principale',$id_menu_principale);
    $this->db->update('mickr_menu_principale', $data);
        return True;

   }

   function ajoutMenuPrincipale($data){
       
     $this->db->insert('mickr_menu_principale', $data); 
     return True;

   }
   
   function ajoutMenuPrincipaleImg($data){
       
     $this->db->insert('mickr_menu_principale_img', $data); 
     return True;

   }

   function supprimMenuPrincipaleImg_menuC($id_menu_categorie_principale){
     
      $this->db->delete('mickr_menu_principale_img', array('id_menu_categorie_principale' => $id_menu_categorie_principale)); 

   }


   
   function compterRubriqueMenuPrincipale($id_menu_principale){
       
      $this->db->where("id_menu_principale",$id_menu_principale); 
      $nb_sous_menus=$this->db->count_all_results('mickr_menu_group');
       
      return $nb_sous_menus;

   }
   
   function compterSousMenu($id_menu_principale){
       
      $this->db->where("id_menu_principale",$id_menu_principale); 
      $nb_sous_menus=$this->db->count_all_results('mickr_categorie_produit');
       
      return $nb_sous_menus;

   }
   
   function compterMenuPrincipale(){
       
      $nb_menus_principale=$this->db->count_all_results('mickr_menu_principale');
      return $nb_menus_principale;

   }


  function image_menu_principale($id_menu_principale){

        $this->db->where("id_menu_principale", $id_menu_principale);
        $this->db->select()->from('mickr_menu_principale');

        $q = $this->db->get();
        $data="";
        if($q->num_rows()>0)
        {
            foreach ($q->result() as $lign)
            {
                $data=$lign->url_menu_principale;
            }

            return $data;
        }

    }


     //Categoris principale

    function infosMenusCategoriePrincipale(){

        $this->db->order_by("position_menu_categorie_principale", "asc");
        $this->db->select()->from('mickr_menu_categorie_principale');

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

    function infosMenusCategoriesPrincipale_id($id_menu_categorie_principale){

        $this->db->where("id_menu_categorie_principale",$id_menu_categorie_principale);
        $this->db->select()->from('mickr_menu_categorie_principale');

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


     //rubriques
   function infosMenuRubriques($id_menu_principale){
       
      $this->db->where("id_menu_principale", $id_menu_principale); 
      $this->db->select()->from('mickr_menu_principale');
       
      $q = $this->db->get();
      $data="";
        if($q->num_rows()>0)
        {
            foreach ($q->result() as $lign)
            {
                $data=$lign->libelle_menu_principale;
            }
            
            return $data;
        }

   }


   function infosCategoriesPrinc($id_menu_categorie_principale){
       
      $this->db->where("id_menu_categorie_principale", $id_menu_categorie_principale); 
      $this->db->select()->from('mickr_menu_categorie_principale');
       
      $q = $this->db->get();
      $data="";
        if($q->num_rows()>0)
        {
            foreach ($q->result() as $lign)
            {
                $data=$lign->libelle_menu_categorie_principale;
            }
            
            return $data;
        }

   }



   
    function infosMenuRubriquesID($id_menu_group){
       
      $this->db->where("id_menu_group", $id_menu_group); 
      $this->db->select()->from('mickr_menu_group');
       
      $q = $this->db->get();
      $data="";
        if($q->num_rows()>0)
        {
            foreach ($q->result() as $lign)
            {
                $data=$lign->libelle_menu_group;
            }
            
            return $data;
        }

   }

    function infosImgRubriquesID($id_rubrique){

        $this->db->where("id_rubrique", $id_rubrique);
        $this->db->select()->from('mickr_image');

        $q = $this->db->get();
        $data="";
        if($q->num_rows()>0)
        {
            foreach ($q->result() as $lign)
            {
                $data=$lign->libelle_img;
            }

            return $data;
        }

    }
   
   function infosRubriques(){
       
      $type="0";
      $this->db->where("type",$type);
      $this->db->order_by("position", "asc"); 
      $this->db->select()->from('mickr_menu_group');
       
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

   function infosRubriquesID($id_menu_group){
       
      $type="0";
      $this->db->where("type",$type);
      $this->db->where("id_menu_group",$id_menu_group);
      $this->db->select()->from('mickr_menu_group');
       
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
   function infosRubriquesIDC($id_menu_group){
       
      $type="1";
      $this->db->where("type",$type);
      $this->db->where("id_menu_group",$id_menu_group);
      $this->db->select()->from('mickr_menu_group');
       
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

   function infosRubriquesCategories(){
       
      $type="1";
      $this->db->where("type",$type);
      $this->db->order_by("position_categorie", "asc"); 
      $this->db->select()->from('mickr_menu_group');
       
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
   
   function ajoutrubrique($data){
       
     $this->db->insert('mickr_menu_group', $data); 
     return True;

   }

    function ajoutrubrique_temp($data){

        $this->db->insert('mickr_image', $data);
        return True;

    }
   
    function infosRubrique_id($id_menu_group){
      
      $this->db->where("id_menu_group",$id_menu_group); 
      $this->db->select()->from('mickr_menu_group');
       
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
   
   function modifier_rubrique($id_menu_group,$data){
       
        $this->db->where('id_menu_group',$id_menu_group);
        $this->db->update('mickr_menu_group', $data);
        return True;

   }

   

   function supprim_rubrique($id_menu_group){
     
      $this->db->delete('mickr_menu_group', array('id_menu_group' => $id_menu_group)); 

   }
   
   function compterRubrique(){
       
      $type="0";
      $this->db->where("type",$type); 
      $nb_rubriques=$this->db->count_all_results('mickr_menu_group');
      return $nb_rubriques;

   }

   function compterRubriqueCategorie(){
       
      $type="1";
      $this->db->where("type",$type); 
      $nb_rubriques=$this->db->count_all_results('mickr_menu_group');
      return $nb_rubriques;

   }


    //Gestion menu categorie principale
   
    function infosMenuCategoriesPrincipale(){
       
      $this->db->order_by("position_menu_categorie_principale", "asc"); 
      $this->db->select()->from('mickr_menu_categorie_principale');
       
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

    function infosMenuCategoriesPrincipale_id($id_menu_categorie_principale){

        $this->db->where("id_menu_categorie_principale",$id_menu_categorie_principale);
        $this->db->select()->from('mickr_menu_categorie_principale');

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
   
   function infosMenuCategoriesPrincipaleID($id_menu_categorie_principale){
       
      $this->db->where("id_menu_categorie_principale", $id_menu_categorie_principale); 
      $this->db->select()->from('mickr_menu_categorie_principale');
      
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

   function infosMenuCategoriesPrincipale_liblle($id_menu_categorie_principale){
       
      $this->db->where("id_menu_categorie_principale", $id_menu_categorie_principale); 
      $this->db->select()->from('mickr_menu_categorie_principale');
      
        $q = $this->db->get();

        $data="";

        if($q->num_rows()>0)
        {
            foreach ($q->result() as $lign)
            {
                $data=$lign->libelle_menu_categorie_principale;
            }
            
            return $data;
        }

   }

   function infosCategoriesPrincipaleImg($id_menu_categorie_principale){

        $this->db->where("id_menu_categorie_principale", $id_menu_categorie_principale);
        $this->db->select()->from('mickr_menu_principale_img');

        $q = $this->db->get();
        $data="";
        if($q->num_rows()>0)
        {
            foreach ($q->result() as $lign)
            {
                $data=$lign->img;
            }

            return $data;
        }

    }
   
   function modifier_MenuCategoriesPrincipale($id_menu_categorie_principale,$data){
       
        $this->db->where('id_menu_categorie_principale ',$id_menu_categorie_principale);
        $this->db->update('mickr_menu_categorie_principale', $data);
        return True;

   }

   function supprim_MenuCategoriesPrincipale($id_menu_categorie_principale){
     
      $this->db->delete('mickr_menu_categorie_principale', array('id_menu_categorie_principale' => $id_menu_categorie_principale)); 

   }
   
   function compterMenuCategoriesPrincipale(){
       
      $nb_categories=$this->db->count_all_results('mickr_menu_categorie_principale');
      return $nb_categories;

   }
   
  
   
   function ajoutMenuCategoriesPrincipale($data){
       
     $this->db->insert('mickr_menu_categorie_principale', $data); 
     return True;

   }


   //Sliders
   function infosSliders(){
       
      $this->db->order_by("position", "asc"); 
      $this->db->select()->from('mickr_sliders');
       
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
   
    function infosSliderID($id_sliders){
       
      $this->db->where("id_sliders", $id_sliders); 
      $this->db->select()->from('mickr_sliders');
      
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

   function ajoutSlider($data){
       
     $this->db->insert('mickr_sliders', $data); 
     return True;

   }
   
   function modifier_slider($id_sliders,$data){
       
        $this->db->where('id_sliders',$id_sliders);
        $this->db->update('mickr_sliders', $data);
        return True;

  }

  function supprim_slider($id_sliders){
     
      $this->db->delete('mickr_sliders', array('id_sliders' => $id_sliders)); 

   }

  function compterSliders(){
       
      $nb_sliders=$this->db->count_all_results('mickr_sliders');
      return $nb_sliders;

   }

   function infosSliderImg($id_sliders){

        $this->db->where("id_sliders", $id_sliders);
        $this->db->select()->from('mickr_menu_principale_img');

        $q = $this->db->get();
        $data="";
        if($q->num_rows()>0)
        {
            foreach ($q->result() as $lign)
            {
                $data=$lign->img;
            }

            return $data;
        }

    }

    //Categories produits

    function infosCategorieProduits(){

        $this->db->order_by("position", "asc");
        $this->db->select()->from('mickr_categorie_produit');

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

    function CategorieProduitID($id_categorie_produit){

        $this->db->where("id_categorie_produit",$id_categorie_produit);
        $this->db->select()->from('mickr_categorie_produit');

        $q = $this->db->get();
        $data="";
        if($q->num_rows()>0)
        {
            foreach ($q->result() as $lign)
            {
                $data[]=$lign;
            }

            return $data;
        }

    }

    function infosCategorieProduitID($id_menu_group){

        $this->db->where("id_menu_group",$id_menu_group);
        $this->db->select()->from('mickr_menu_group');

        $q = $this->db->get();
        $data="";
        if($q->num_rows()>0)
        {
            foreach ($q->result() as $lign)
            {
                $data=$lign->libelle_menu_group;
            }

            return $data;
        }

    }


    function infosCategorieProduitImg($id_categorie_produit){

        $this->db->where("id_categorie_produit", $id_categorie_produit);
        $this->db->select()->from('mickr_menu_principale_img');

        $q = $this->db->get();
        $data="";
        if($q->num_rows()>0)
        {
            foreach ($q->result() as $lign)
            {
                $data=$lign->img;
            }

            return $data;
        }

    }


    function infosCategorie($id_categorie_produit){

        $this->db->where("id_categorie_produit", $id_categorie_produit);
        $this->db->select()->from('mickr_categorie_produit');

        $q = $this->db->get();
        $data="";
        if($q->num_rows()>0)
        {
            foreach ($q->result() as $lign)
            {
                $data=$lign->libelle_categorie_produit;
            }

            return $data;
        }

    }






    function infoRubriquesAss($id_menu_group){

        $this->db->where("id_menu_group", $id_menu_group);
        $this->db->select()->from('mickr_menu_group');

        $q = $this->db->get();
        $data="";
        if($q->num_rows()>0)
        {
            foreach ($q->result() as $lign)
            {
                $data=$lign->libelle_menu_group;
            }

            return $data;
        }

    }

     

   function infosRubriquesC(){

      $type="1";
      $this->db->where("type", $type);
      $this->db->order_by("position", "asc"); 
      $this->db->select()->from('mickr_menu_group');
       
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

    //publicite Bloc1

   function modifier_bloc14($id_pub_block,$data){
       
        $this->db->where('id_pub_block',$id_pub_block);
        $this->db->update('mickr_pub_block', $data);
        return True;

   }

   function infosPubBloc1(){
       
       $id_pub_block="bloc1";
      $this->db->limit(1);
      $this->db->where('id_pub_block',$id_pub_block);
      $this->db->select()->from('mickr_pub_block');
       
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

   function modifier_PubBloc1($data){

       $id_pub_block="bloc1";
       
        $this->db->where('id_pub_block',$id_pub_block);
        $this->db->update('mickr_pub_block', $data);
        return True;

  }


   //publicite Bloc2

   function infosPubBloc2(){
       
       $id_pub_block="bloc2";
      $this->db->limit(1);
      $this->db->where('id_pub_block',$id_pub_block);
      $this->db->select()->from('mickr_pub_block');
       
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

   function modifier_PubBloc2($data){

       $id_pub_block="bloc2";
       
        $this->db->where('id_pub_block',$id_pub_block);
        $this->db->update('mickr_pub_block', $data);
        return True;

  }


   //publicite Bloc3

   function infosPubBloc3(){
       
       $id_pub_block="bloc3";
      $this->db->limit(1);
      $this->db->where('id_pub_block',$id_pub_block);
      $this->db->select()->from('mickr_pub_block');
       
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

   function modifier_PubBloc3($data){

       $id_pub_block="bloc3";
       
        $this->db->where('id_pub_block',$id_pub_block);
        $this->db->update('mickr_pub_block', $data);
        return True;

  }


   //publicite Bloc4

   function infosPubBloc4(){
       
       $id_pub_block="bloc4";
      $this->db->limit(1);
      $this->db->where('id_pub_block',$id_pub_block);
      $this->db->select()->from('mickr_pub_block');
       
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

   function modifier_PubBloc4($data){

       $id_pub_block="bloc4";
       
        $this->db->where('id_pub_block',$id_pub_block);
        $this->db->update('mickr_pub_block', $data);
        return True;

  }

   //publicite Bloc5

   function infosPubBloc5(){
       
       $id_pub_block="bloc5";
      $this->db->limit(1);
      $this->db->where('id_pub_block',$id_pub_block);
      $this->db->select()->from('mickr_pub_block');
       
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

   function modifier_PubBloc5($data){

       $id_pub_block="bloc5";
       
        $this->db->where('id_pub_block',$id_pub_block);
        $this->db->update('mickr_pub_block', $data);
        return True;

  }


  //publicite Bloc6

   function infosPubBloc6(){
       
       $id_pub_block="bloc6";
      $this->db->limit(1);
      $this->db->where('id_pub_block',$id_pub_block);
      $this->db->select()->from('mickr_pub_block');
       
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

   function modifier_PubBloc6($data){

       $id_pub_block="bloc6";
       
        $this->db->where('id_pub_block',$id_pub_block);
        $this->db->update('mickr_pub_block', $data);
        return True;

  }

  function modifier_PubBloc7($data){

       $id_pub_block="bloc7";
       
        $this->db->where('id_pub_block',$id_pub_block);
        $this->db->update('mickr_pub_block', $data);
        return True;

  }

  function modifier_PubBloc8($data){

       $id_pub_block="bloc8";
       
        $this->db->where('id_pub_block',$id_pub_block);
        $this->db->update('mickr_pub_block', $data);
        return True;

  }

   //Partenaires
   
   
    function infosPartenairesID($id_menu_group){
       
      $this->db->where("id_menu_group", $id_menu_group); 
      $this->db->select()->from('mickr_menu_group');
       
      $q = $this->db->get();
      $data="";
        if($q->num_rows()>0)
        {
            foreach ($q->result() as $lign)
            {
                $data=$lign->libelle_menu_group;
            }
            
            return $data;
        }

   }

    function infosImgPartenairesID($id_partenaires){

        $this->db->where("id_partenaires", $id_partenaires);
        $this->db->select()->from('mickr_menu_principale_img');

        $q = $this->db->get();
        $data="";
        if($q->num_rows()>0)
        {
            foreach ($q->result() as $lign)
            {
                $data=$lign->img;
            }

            return $data;
        }

    }
   
   function infosPartenaires(){
       
       $this->db->order_by("position", "asc"); 
      $this->db->select()->from('mickr_partenaires');
       
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

   function infosPartenaires_byID($id_partenaires){
       
       $this->db->where("id_partenaires",$id_partenaires); 
      $this->db->select()->from('mickr_partenaires');
       
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
   
   function ajoutPartenaires($data){
       
     $this->db->insert('mickr_partenaires', $data); 
     return True;

   }

    
   
    function infosPartenaires_id($id_menu_group){
      
      $this->db->where("id_menu_group",$id_menu_group); 
      $this->db->select()->from('mickr_menu_group');
       
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
   
   function modifier_Partenaires($id_menu_group,$data){
       
        $this->db->where('id_menu_group',$id_menu_group);
        $this->db->update('mickr_menu_group', $data);
        return True;

   }

   function modifier_Partenaires_tb($id_partenaires,$data){
       
        $this->db->where('id_partenaires',$id_partenaires);
        $this->db->update('mickr_partenaires', $data);
        return True;

   }
   
   function compterPartenaires(){
       
      $nb_rubriques=$this->db->count_all_results('mickr_partenaires');
      return $nb_rubriques;

   }

   function supprim_Partenaires($id_menu_principale){
     
      $this->db->delete('mickr_partenaires', array('id_partenaires' => $id_partenaires)); 

   }

   //Temoignages
   
   
    function infosTemoignagesID($id_menu_group){
       
      $this->db->where("id_menu_group", $id_menu_group); 
      $this->db->select()->from('mickr_menu_group');
       
      $q = $this->db->get();
      $data="";
        if($q->num_rows()>0)
        {
            foreach ($q->result() as $lign)
            {
                $data=$lign->libelle_menu_group;
            }
            
            return $data;
        }

   }

    function infosImgTemoignagesID($id_temoignages){

        $this->db->where("id_temoignages", $id_temoignages);
        $this->db->select()->from('mickr_menu_principale_img');

        $q = $this->db->get();
        $data="";
        if($q->num_rows()>0)
        {
            foreach ($q->result() as $lign)
            {
                $data=$lign->img;
            }

            return $data;
        }

    }
   
   function infosTemoignages(){
       
       $this->db->order_by("position", "asc"); 
      $this->db->select()->from('mickr_temoignages');
       
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

   function infosTemoignages_byID($id_temoignages){
       
       $this->db->where("id_temoignages", $id_temoignages); 
      $this->db->select()->from('mickr_temoignages');
       
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
   
   function ajoutTemoignages($data){
       
     $this->db->insert('mickr_temoignages', $data); 
     return True;

   }

    
   
    function infosTemoignages_id($id_menu_group){
      
      $this->db->where("id_menu_group",$id_menu_group); 
      $this->db->select()->from('mickr_menu_group');
       
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
   
   function modifier_Temoignages($id_temoignages,$data){
       
        $this->db->where('id_temoignages',$id_temoignages);
        $this->db->update('mickr_temoignages', $data);
        return True;

   }
   
   function compterTemoignages(){
       
      $nb_rubriques=$this->db->count_all_results('mickr_temoignages');
      return $nb_rubriques;

   }


   //Infos bloc
    function infosBloc_list(){
       
      $this->db->select()->from('mickr_pub_block');
       
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


   //Infos bloc1
    function infosBloc1(){
       
      $id_bloc_principale=1;
      $this->db->limit(1);
      $this->db->where('id_bloc_principale',$id_bloc_principale);
      $this->db->select()->from('mickr_bloc_principale');
       
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

     function infosBloc4(){
       
      $id_bloc_principale=4;
      $this->db->limit(1);
      $this->db->where('id_bloc_principale',$id_bloc_principale);
      $this->db->select()->from('mickr_bloc_principale');
       
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

     function infosBloc5(){
       
      $id_bloc_principale=5;
      $this->db->limit(1);
      $this->db->where('id_bloc_principale',$id_bloc_principale);
      $this->db->select()->from('mickr_bloc_principale');
       
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

   function modifier_bloc_info($id_bloc_principale,$data){
       
        $this->db->where('id_bloc_principale',$id_bloc_principale);
        $this->db->update('mickr_bloc_principale', $data);
        return True;

   }


    //categories produit
   
    function infosCategoriesProduits(){
       
      $this->db->order_by("position", "asc"); 
      $this->db->select()->from('mickr_categorie_produit');
       
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

    function infosCategorieProduit_id($id_categorie_produit){

        $this->db->where("id_categorie_produit",$id_categorie_produit);
        $this->db->select()->from('mickr_categorie_produit');

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
   
   function infosCategoriesProduitID($id_categorie_produit){
       
      $this->db->where("id_categorie_produit", $id_categorie_produit); 
      $this->db->select()->from('mickr_categorie_produit');
      
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
   
   function modifier_categorieProduit($id_categorie_produit,$data){
       
        $this->db->where('id_categorie_produit',$id_categorie_produit);
        $this->db->update('mickr_categorie_produit', $data);
        return True;

   }
   
   function compterCategorieProduit(){
       
      $nb_categories=$this->db->count_all_results('mickr_categorie_produit');
      return $nb_categories;

   }
   
   function infosMenu_group($id_menu_group){
       
      $this->db->where("id_menu_principale", $id_menu_group); 
      $this->db->select()->from('mickr_categorie_produit');
       
      $q = $this->db->get();
      $data="";
        if($q->num_rows()>0)
        {
            foreach ($q->result() as $lign)
            {
                $data=$lign->id_menu_principale;
            }
            
            return $data;
        }

   }

   function compteritemRubriqueMenuPrincipale($id_menu_group){
       
      $this->db->where("id_menu_group",$id_menu_group); 
      $nb_sous_menus=$this->db->count_all_results('mickr_categorie_produit');
       
      return $nb_sous_menus;

   }


   
   function ajoutCategorieProduit($data){
       
     $this->db->insert('mickr_categorie_produit', $data); 
     return True;

   }

   function modifier_CategorieProduitF($id_categorie_produit,$data){
       
        $this->db->where('id_categorie_produit',$id_categorie_produit);
        $this->db->update('mickr_categorie_produit', $data);
        return True;

   }

   function supprim_CategorieProduitF($id_categorie_produit){
     
      $this->db->delete('mickr_categorie_produit', array('id_categorie_produit' => $id_categorie_produit)); 

   }


   //Produits
   
   
    function infosProduitsID($id_menu_group){
       
      $this->db->where("id_menu_group", $id_menu_group); 
      $this->db->select()->from('mickr_menu_group');
       
      $q = $this->db->get();
      $data="";
        if($q->num_rows()>0)
        {
            foreach ($q->result() as $lign)
            {
                $data=$lign->libelle_menu_group;
            }
            
            return $data;
        }

   }

    function infosImgProduitsID($id_marque){

        $this->db->where("id_marque", $id_marque);
        $this->db->select()->from('mickr_menu_principale_img');

        $q = $this->db->get();
        $data="";
        if($q->num_rows()>0)
        {
            foreach ($q->result() as $lign)
            {
                $data=$lign->img;
            }

            return $data;
        }

    }


     function infosmarque_m($id_marque){

        $this->db->where("id_marque", $id_marque);
        $this->db->select()->from('mickr_marque');

        $q = $this->db->get();
        $data="";
        if($q->num_rows()>0)
        {
            foreach ($q->result() as $lign)
            {
                $data=$lign->libelle_marque;
            }

            return $data;
        }

    }
   
   function infosProduits(){
       
    
      $this->db->select()->from('mickr_admin_produit');
       
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


   function infosProduits_limit($limit,$page){


    
       
      $this->db->limit($limit,$page);
      $this->db->order_by("date_ajout", "desc"); 
      $this->db->select()->from('mickr_admin_produit');
       
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

   function infosProduits_limit_aI($limit,$page){

      $status_image=1;
    
      $this->db->where('status_image',$status_image);
      $this->db->limit($limit,$page);
      $this->db->select()->from('mickr_admin_produit');
       
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

    function infosProduits_limit_sI($limit,$page){

      $status_image="0";
    
      $this->db->where('status_image',$status_image);
      $this->db->limit($limit,$page);
      $this->db->select()->from('mickr_admin_produit');
       
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

    function infosProduits_limit_enligne($limit,$page){
       
      $status_mise_en_ligne=1;
      $this->db->where('status_mise_en_ligne',$status_mise_en_ligne);
      $this->db->limit($limit,$page);
      $this->db->select()->from('mickr_admin_produit');
       
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

   function infosProduits_limit_horsligne($limit,$page){
       
      $status_mise_en_ligne=0;
      $this->db->where('status_mise_en_ligne',$status_mise_en_ligne);
      $this->db->limit($limit,$page);
      $this->db->select()->from('mickr_admin_produit');
       
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

   

   function infosProduits_enligne_horsligne($status_mise_en_ligne){

       
      $this->db->where('status_mise_en_ligne',$status_mise_en_ligne);
      $this->db->select()->from('mickr_admin_produit');
       
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

   function compterProduits_p(){


      
      $nb_produits=$this->db->count_all_results('mickr_admin_produit');
      return $nb_produits;

   }

   function compterProduits_enligne_horsligne($status_mise_en_ligne){


      $this->db->where('status_mise_en_ligne',$status_mise_en_ligne);    
      $nb_produits=$this->db->count_all_results('mickr_admin_produit');
      return $nb_produits;

   }

   function compterProduits_avec_image(){
   
     $status_image=1;

      $this->db->where('status_image',$status_image);    
      $nb_produits=$this->db->count_all_results('mickr_admin_produit');
      return $nb_produits;

   }

   function compterProduits_sans_image(){
   
     $status_image=0;

      $this->db->where('status_image',$status_image);    
      $nb_produits=$this->db->count_all_results('mickr_admin_produit');
      return $nb_produits;

   }




   function compterProduits_avec_sansImage($status_mise_en_ligne){


      $this->db->where('status_mise_en_ligne',$status_mise_en_ligne);    
      $nb_produits=$this->db->count_all_results('mickr_admin_produit');
      return $nb_produits;

   }

   function infosProduits_IDprod($id_produits){
       
      $this->db->where("id_produits", $id_produits);
      $this->db->select()->from('mickr_admin_produit');
       
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

   function liste_commande(){
       
      
      $this->db->select()->from('mickr_commande');
       
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

   function infosProduits_livraison(){
       
      $this->db->select()->from('mickr_liaison_commande_produit');
       
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

   function recherche_livraison($id_commande){

       
        $array = array('id_commande' => $id_commande);
        $this->db->like($array);
        $this->db->limit(7);
        $this->db->select()->from('mickr_liaison_commande_produit');

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

   function infosProduits_livraison_IdCom($id_commande){


      $this->db->where("id_commande", $id_commande);
      $this->db->select()->from('mickr_liaison_commande_produit');
       
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


   function infosProduits_livraison_montant($id_commande){


      $this->db->where("id_commande", $id_commande);
      $this->db->select()->from('mickr_liaison_commande_produit');
       
      $q = $this->db->get();

        $data=0;

        if($q->num_rows()>0)
        {
            foreach ($q->result() as $lign)
            {
                $data=$data+$lign->montant;
            }
            
            
        }


        return $data;


   }

    


   function infosProduits_IDprodID($id_produits){
       
      $this->db->where("id_produits", $id_produits);
      $this->db->select()->from('mickr_admin_produit');
       
      $q = $this->db->get();

        if($q->num_rows()>0)
        {
            foreach ($q->result() as $lign)
            {
                $data=$lign->id_produits;
            }
            
            return $data;
        }


   }

   function infosProduits_IDfournisseur($id_produits){
       
      $this->db->where("id_produits", $id_produits);
      $this->db->select()->from('mickr_admin_produit');
       
      $q = $this->db->get();

        if($q->num_rows()>0)
        {
            foreach ($q->result() as $lign)
            {
                $data=$lign->id_fournisseur;
            }
            
            return $data;
        }


   }

   function getMontantdu_fournisseur($id_fournisseur){
       
      $this->db->where("id_fournisseur", $id_fournisseur);
      $this->db->select()->from('mickr_portefeuille');
       
      $q = $this->db->get();
      $montant=0;

        if($q->num_rows()>0)
        {
            foreach ($q->result() as $lign)
            {
                $montant=$montant+$lign->profit_net_fournisseur;
            }
            
            
        }

      return $montant;

   }

    function infosVendeur_ajax($recherche){
  
       
        $array = array('entreprise_fournisseur' => $recherche);
        $this->db->like($array);
        $this->db->limit(30);
       
        
        $this->db->select()->from('mickr_fournisseur');

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

    function infosCommande_ajax($recherche){
  
       
        $array = array('id_commande' => $recherche);
        $this->db->like($array);
        $this->db->limit(30);
       
        
        $this->db->select()->from('mickr_commande');

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
   //couleur
     function ajoutCouleur($data){
       
     $this->db->insert('mickr_couleur', $data); 
     return True;

   }   

   function infosImgCouleurID($id_couleur){

        $this->db->where("id_couleur", $id_couleur);
        $this->db->select()->from('mickr_couleur');

        $q = $this->db->get();
        $data="";
        if($q->num_rows()>0)
        {
            foreach ($q->result() as $lign)
            {
                $data=$lign->img;
            }

            return $data;
        }

    }


function infosCouleurID($id_couleur){
       
      $this->db->where("id_couleur", $id_couleur); 
      $this->db->select()->from('mickr_couleur');
       
      $q = $this->db->get();
      $data="";
        if($q->num_rows()>0)
        {
            foreach ($q->result() as $lign)
            {
                $data[]=$lign;
            }
            
            return $data;
        }

   }

// liste des couleurs

   function infosCouleur(){
       
      $this->db->select()->from('mickr_couleur');
       
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


   function supprim_couleur($id_couleur){
     
      $this->db->delete('mickr_couleur', array('id_couleur' => $id_couleur)); 

   }

//Taille chemise
     function ajoutTailleChemise($data){
       
     $this->db->insert('mickr_taille_chemise', $data); 
     return True;

   }

   function supprim_taille_chemise($id_taille_chemise){
     
      $this->db->delete('mickr_taille_chemise', array('id_taille_chemise' => $id_taille_chemise)); 

   }


   function infosImgTailleChemiseID($id_taille_chemise){

        $this->db->where("id_taille_chemise", $id_taille_chemise);
        $this->db->select()->from('mickr_taille_chemise');

        $q = $this->db->get();
        $data="";
        if($q->num_rows()>0)
        {
            foreach ($q->result() as $lign)
            {
                $data=$lign->img;
            }

            return $data;
        }

    }



   // liste des Tailles de chemise

   function infosTailleChemise(){
       
      $this->db->select()->from('mickr_taille_chemise');
       
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


//Pointure chaussure
     function ajoutPointureChaussure($data){
       
     $this->db->insert('mickr_pointure_chaussure', $data); 
     return True;

   }

   function supprim_pointure_chaussure($id_pointure_chaussure){
     
      $this->db->delete('mickr_pointure_chaussure', array('id_pointure_chaussure' => $id_pointure_chaussure)); 

   }

   function infosImgPointureChaussureID($id_pointure_chaussure){

        $this->db->where("id_pointure_chaussure", $id_pointure_chaussure);
        $this->db->select()->from('mickr_pointure_chaussure');

        $q = $this->db->get();
        $data="";
        if($q->num_rows()>0)
        {
            foreach ($q->result() as $lign)
            {
                $data=$lign->img;
            }

            return $data;
        }

    }


// liste des pointures de chaussure

   function infosPointureChaussure(){
       
      $this->db->select()->from('mickr_pointure_chaussure');
       
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




  //
   function ajoutProduits($data){
       
     $this->db->insert('mickr_admin_produit', $data); 
     return True;

   }


   function ajoutImgProduit($data){
       
     $this->db->insert('mickr_image_produit', $data); 
     return True;

   }

   function infosImg_IDprod($id_produit){
       
      $this->db->where("id_produit", $id_produit);
      $this->db->select()->from('mickr_image_produit');
       
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

   function modifier_infoss_Produits($id_produits,$data){
       
        $this->db->where('id_produits',$id_produits);
        $this->db->update('mickr_admin_produit', $data);
        return True;

   }

   function supprim_img_produit($id_image_produit){
     
      $this->db->delete('mickr_image_produit', array('id_image_produit' => $id_image_produit)); 

   }

    
   
    function infosProduits_id($id_menu_group){
      
      $this->db->where("id_menu_group",$id_menu_group); 
      $this->db->select()->from('mickr_menu_group');
       
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
   
   function modifier_Produits($id_menu_group,$data){
       
        $this->db->where('id_menu_group',$id_menu_group);
        $this->db->update('mickr_menu_group', $data);
        return True;

   }
   
   function compterProduits(){
       
      $nb_rubriques=$this->db->count_all_results('mickr_fournisseur');
      return $nb_rubriques;

   }

   function compterProduitsImg($id_produit){
       
      

      $nb_produits=0;
      if($this->db->count_all_results('mickr_image_produit')){

        $this->db->where('id_produit',$id_produit);
        $nb_rubriques=$this->db->count_all_results('mickr_image_produit');
        return $nb_rubriques;


      }else{


          return $nb_produits;
      }
      

   }

   function supprim_produit($id_produits){
     
      $this->db->delete('mickr_admin_produit', array('id_produits' => $id_produits)); 

   }

   function totalProduits(){
       
      $totalProduits=$this->db->count_all_results('mickr_admin_produit');
       
      return $totalProduits;

   }

    //Marques
   
   
    function infosMarqueID($id_marque){
       
      $this->db->where("id_marque", $id_marque); 
      $this->db->select()->from('mickr_marque');
       
      $q = $this->db->get();
      $data="";
        if($q->num_rows()>0)
        {
            foreach ($q->result() as $lign)
            {
                $data[]=$lign;
            }
            
            return $data;
        }

   }

   function editerMarque($id_marque,$data){
       
    $this->db->where('id_marque',$id_marque);
    $this->db->update('mickr_marque', $data);
        return True;

   }

    function infosImgMarqueID($id_marque){

        $this->db->where("id_marque", $id_marque);
        $this->db->select()->from('mickr_menu_principale_img');

        $q = $this->db->get();
        $data="";
        if($q->num_rows()>0)
        {
            foreach ($q->result() as $lign)
            {
                $data=$lign->img;
            }

            return $data;
        }

    }
   
   function infosMarque(){
       
    
      $this->db->select()->from('mickr_marque');
       
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
   
   function ajoutMarque($data){
       
     $this->db->insert('mickr_marque', $data); 
     return True;

   }

    
   
    function infosMarque_id($id_menu_group){
      
      $this->db->where("id_menu_group",$id_menu_group); 
      $this->db->select()->from('mickr_menu_group');
       
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
   
   function modifier_Marque($id_menu_group,$data){
       
        $this->db->where('id_menu_group',$id_menu_group);
        $this->db->update('mickr_menu_group', $data);
        return True;

   }
   
   function compterMarque(){
       
      $nb_rubriques=$this->db->count_all_results('mickr_fournisseur');
      return $nb_rubriques;

   }

   //Fournisseur
   
   
    function infosFournisseurID($id_menu_group){
       
      $this->db->where("id_menu_group", $id_menu_group); 
      $this->db->select()->from('mickr_menu_group');
       
      $q = $this->db->get();
      $data="";
        if($q->num_rows()>0)
        {
            foreach ($q->result() as $lign)
            {
                $data=$lign->libelle_menu_group;
            }
            
            return $data;
        }

   }

    function infosImgFournisseurID($id_partenaires){

        $this->db->where("id_partenaires", $id_partenaires);
        $this->db->select()->from('mickr_menu_principale_img');

        $q = $this->db->get();
        $data="";
        if($q->num_rows()>0)
        {
            foreach ($q->result() as $lign)
            {
                $data=$lign->img;
            }

            return $data;
        }

    }

    function get_designation_nomfournisseur($id_fournisseur){


    $this->db->where("id_fournisseur", $id_fournisseur); 
      $this->db->select()->from('mickr_fournisseur');
       
      $q = $this->db->get();
      $data="";
        if($q->num_rows()>0)
        {
            foreach ($q->result() as $lign)
            {
                $data=$lign->nom_fournisseur;
            }
            
            return $data;
        }



   }

   function get_designation_telfournisseur($id_fournisseur){


    $this->db->where("id_fournisseur", $id_fournisseur); 
      $this->db->select()->from('mickr_fournisseur');
       
      $q = $this->db->get();
      $data="";
        if($q->num_rows()>0)
        {
            foreach ($q->result() as $lign)
            {
                $data=$lign->tel_fournisseur;
            }
            
            return $data;
        }



   }
   
   function infosFournisseur(){
       
    
      $this->db->select()->from('mickr_fournisseur');
       
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

   function infosFournisseur_vendeur(){

      $status_vendeur="1";
       
      $this->db->where("status_vendeur",$status_vendeur); 
      $this->db->select()->from('mickr_fournisseur');
       
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

   function infosFournisseur_vendeurID($id_fournisseur){

      $status_vendeur="1";
       
      $this->db->where("id_fournisseur",$id_fournisseur); 
      $this->db->where("status_vendeur",$status_vendeur); 
      $this->db->select()->from('mickr_fournisseur');
       
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


   function infos_nom_fournisseur($id_fournisseur){
       
      
      $this->db->where("id_fournisseur",$id_fournisseur); 
      $this->db->select()->from('mickr_fournisseur');
       
      $q = $this->db->get();

        if($q->num_rows()>0)
        {
            foreach ($q->result() as $lign)
            {
                $data=$lign->nom_fournisseur;
            }
            
            return $data;
        }


   }
   
   function ajoutFournisseur($data){
       
     $this->db->insert('mickr_fournisseur', $data); 
     return True;

   }

    
   
    function infosFournisseur_id($id_menu_group){
      
      $this->db->where("id_menu_group",$id_menu_group); 
      $this->db->select()->from('mickr_menu_group');
       
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
   
   function modifier_Fournisseur($id_fournisseur,$data){
       
        $this->db->where('id_fournisseur',$id_fournisseur);
        $this->db->update('mickr_fournisseur', $data);
        return True;

   }
   
   function compterFournisseur(){
       
      $nb_rubriques=$this->db->count_all_results('mickr_fournisseur');
      return $nb_rubriques;

   }

   //Utilisateurs

   function infosUtilisateurs(){
       
      $this->db->select()->from('mickr_administrateur');
       
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

    function infosUtilisateur($id_administrateur){
       
      $this->db->where('id_administrateur',$id_administrateur);
      $this->db->select()->from('mickr_administrateur');
       
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

   function recherche_utilisateurs($nom_administrateur){

       
        $array = array('nom_administrateur' => $nom_administrateur);
        $this->db->like($array);
        $this->db->limit(7);
        $this->db->select()->from('mickr_administrateur');

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

   function liste_profile_utilisateurs(){


      $this->db->select()->from('mickr_administrateur_profile');
       
      $q = $this->db->get();
      $data="";
        if($q->num_rows()>0)
        {
            foreach ($q->result() as $lign)
            {
                $data[]=$lign;
            }
            
            return $data;
        }



   }

   function get_profile_utilisateur($id_administrateur_profile){


    $this->db->where("id_administrateur_profile", $id_administrateur_profile); 
      $this->db->select()->from('mickr_administrateur_profile');
       
      $q = $this->db->get();
      $data="";
        if($q->num_rows()>0)
        {
            foreach ($q->result() as $lign)
            {
                $data=$lign->libelle_administrateur_profile;
            }
            
            return $data;
        }



   }

   function ajoutUtilisateur($data){
       
     $this->db->insert('mickr_administrateur', $data); 
     return True;

   }

   function modifier_Utilisateur($id_administrateur,$data){      
       
        $this->db->where('id_administrateur',$id_administrateur);
        $this->db->update('mickr_administrateur', $data);
        return True;

  }

   function supprim_utilisateur($id_administrateur){
     
      $this->db->delete('mickr_administrateur', array('id_administrateur' => $id_administrateur)); 

   }


    //magasin

    function infosMagasins(){
       
    
      $this->db->select()->from('mickr_magasin');
       
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



    function editerMagasin($id_magasin){
       
      $this->db->where('id_magasin',$id_magasin);
      $this->db->select()->from('mickr_magasin');
       
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

   function modifier_infos_magasin($id_magasin,$data){      
       
        $this->db->where('id_magasin',$id_magasin);
        $this->db->update('mickr_magasin', $data);
        return True;

  }

 

   function ajoutMagasin($data){
       
     $this->db->insert('mickr_magasin', $data); 
     return True;

   }


   //type de magasin

    function infosMagasins_type(){
       
    
      $this->db->select()->from('mickr_magasin_type');
       
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

    function infosMagasins_type_mod(){
      
      $id_magasin_type="TNDC001";


      $this->db->where('id_magasin_type !=', $id_magasin_type);
      $this->db->select()->from('mickr_magasin_type');
       
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



    function editerMagasin_type($id_magasin){
       
      $this->db->where('id_magasin_type',$id_magasin);
      $this->db->select()->from('mickr_magasin_type');
       
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

   function modifier_infos_magasin_type($id_magasin,$data){      
       
        $this->db->where('id_magasin_type',$id_magasin);
        $this->db->update('mickr_magasin_type', $data);
        return True;

  }

 

   function ajoutMagasin_type($data){
       
     $this->db->insert('mickr_categorie_produit', $data); 
     return True;

   }


   //categorie stock

    function infosCategories_stock(){
       
    
      $en_stock="1";
      $this->db->where('en_stock',$en_stock);
      $this->db->select()->from('mickr_categorie_produit');
       
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

   


    function editerCategories_stock($id_magasin){

      $en_stock="1";
      $this->db->where('en_stock',$en_stock);
       
      $this->db->where('id_categorie_produit',$id_magasin);
      $this->db->select()->from('mickr_categorie_produit');
       
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

   function modifier_infos_Categories_stock($id_magasin,$data){      
       
        $this->db->where('id_categorie_produit',$id_magasin);
        $this->db->update('mickr_categorie_produit', $data);
        return True;

  }

 

   function ajoutCategories_stock($data){
       
     $this->db->insert('mickr_categorie_produit', $data); 
     return True;

   }

   function compterCategories_stock(){
       
      $nb_categories=$this->db->count_all_results('mickr_categorie_produit');
      return $nb_categories;

   }

   function ajoutCategories_stock_sc($data){
       
     $this->db->insert('mickr_categorie_sc', $data); 
     return True;

   }


   // groupe

    function infosGroupe_stock(){
       
    
      $this->db->select()->from('mickr_groupe');
       
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

   


    function editerGroupe_stock($id_magasin){

    
      $this->db->where('id_groupe',$id_magasin);
      $this->db->select()->from('mickr_groupe');
       
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

   function modifier_infos_Groupe_stock($id_groupe,$data){      
       
        $this->db->where('id_groupe',$id_magasin);
        $this->db->update('mickr_groupe', $data);
        return True;

  }

 

   function ajoutGroupe_stock($data){
       
     $this->db->insert('mickr_groupe', $data); 
     return True;

   }

   function compterGroupe_stock(){
       
      $nb_categories=$this->db->count_all_results('mickr_groupe');
      return $nb_categories;

   }

   function ajoutGroupe_stock_sc($data){
       
     $this->db->insert('mickr_groupe_sc', $data); 
     return True;

   }


   // Depots

    function infosDepot_stock(){
       
    
      $this->db->select()->from('mickr_depot');
       
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

   function get_magasin_info($id_magasin){


    $this->db->where("id_magasin", $id_magasin); 
      $this->db->select()->from('mickr_magasin');
       
      $q = $this->db->get();
      $data="";
        if($q->num_rows()>0)
        {
            foreach ($q->result() as $lign)
            {
                $data=$lign->libelle_magasin;
            }
            
            return $data;
        }



   }

   


    function editerDepot_stock($id_famille_produit){

    
      $this->db->where('id_famille_produit',$id_famille_produit);
      $this->db->select()->from('mickr_depot');
       
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

   function modifier_infos_Depot_stock($id_groupe,$data){      
       
        $this->db->where('id_groupe',$id_magasin);
        $this->db->update('mickr_depot', $data);
        return True;

  }

 

   function ajoutDepot_stock($data){
       
     $this->db->insert('mickr_depot', $data); 
     return True;

   }

   function compterDepot_stock(){
       
      $nb_categories=$this->db->count_all_results('mickr_depot');
      return $nb_categories;

   }

   


   // famille

    function infosFamille_stock(){
       
    
      $this->db->select()->from('mickr_famille_produit');
       
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

   


    function editerFamille_stock($id_famille_produit){

    
      $this->db->where('id_famille_produit',$id_famille_produit);
      $this->db->select()->from('mickr_famille_produit');
       
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

   function modifier_infos_Famille_stock($id_groupe,$data){      
       
        $this->db->where('id_groupe',$id_magasin);
        $this->db->update('mickr_groupe', $data);
        return True;

  }

 

   function ajoutFamille_stock($data){
       
     $this->db->insert('mickr_famille_produit', $data); 
     return True;

   }

   function compterFamille_stock(){
       
      $nb_categories=$this->db->count_all_results('mickr_famille_produit');
      return $nb_categories;

   }

   function ajoutFamille_stock_sc($data){
       
     $this->db->insert('mickr_famille_sc', $data); 
     return True;


   }


   //produit en stock

   function infosProduits_enstock(){
       
       $status_mise_en_ligne="0";
    
      $this->db->where('status_mise_en_ligne',$status_mise_en_ligne);
      $this->db->select()->from('mickr_admin_produit');
       
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


   function infosProduits_enstock_codebarre($code_barre){
       
       $status_mise_en_ligne="0";
      
      
      $this->db->where('code_barre',$code_barre);
      $this->db->where('status_mise_en_ligne',$status_mise_en_ligne);
      $this->db->select()->from('mickr_admin_produit');
       
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


   // liste des produits commandes

   function infosProduits_commande(){
       
      $this->db->select()->from('mickr_commande');
       
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
   function infosProduits_commande_ID($id_commande){
       
      $this->db->where("id_commande", $id_commande); 
      $this->db->select()->from('mickr_commande');
       
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


   function total_vente(){
       
      $this->db->select()->from('mickr_commande');
       
      $q = $this->db->get();


       $montant_vente_total=0;
        if($q->num_rows()>0)
        {
            foreach ($q->result() as $lign)
            {
                $montant_vente_total=$montant_vente_total+$lign->montant_commande;
            }
            
            return $montant_vente_total;
        }


   }

   function total_profit_vente(){
       
      $this->db->select()->from('mickr_admin_produit');
       
      $q = $this->db->get();


       $quantite_total=0;
       $quantite_restante=0;
       $quantite_vendus=0; 

       $prix_achat=0;
       $prix_produit=0;
       $prix_marge=0; 

       $prix_diff=0;

       $marge_brut=0;      
        if($q->num_rows()>0)
        {
            foreach ($q->result() as $lign)
            {
                $quantite_total=$lign->quantite_totale;
                $quantite_restante=$lign->quantite_restante;

                $quantite_vendus=$quantite_total-$quantite_restante;


                $prix_produit=$lign->prix_produit;
                $prix_achat=$lign->prix_achat;

                $prix_diff=$prix_produit - $prix_achat;
                

                $marge_brut=$marge_brut+($quantite_vendus*$prix_diff);


            }
            
            return $marge_brut;
        }


   }

   function total_produit_en_stock(){
       
      $this->db->select()->from('mickr_admin_produit');
       
      $q = $this->db->get();


       $somme_prod_restante=0;
       

       
        if($q->num_rows()>0)
        {
            foreach ($q->result() as $lign)
            {
               
                $quantite_restante=$lign->quantite_restante;

                $somme_prod_restante=$somme_prod_restante+$quantite_restante;

              


            }
            
            return $somme_prod_restante;
        }


   }

   function total_produit_vendus(){
       
      $this->db->select()->from('mickr_liaison_commande_produit');
       
      $q = $this->db->get();


       $somme_prod_vendus=0;
       

       
        if($q->num_rows()>0)
        {
            foreach ($q->result() as $lign)
            {
               
                $quantite=$lign->quantite;

                $somme_prod_vendus=$somme_prod_vendus+$quantite;

              


            }
            
            return $somme_prod_vendus;
        }


   }


   function get_informations_client($id_client){


    $this->db->where("id_client", $id_client); 
      $this->db->select()->from('mickr_client');
       
      $q = $this->db->get();
      $data="";
        if($q->num_rows()>0)
        {
            foreach ($q->result() as $lign)
            {
                $data=$lign->nom_client." ".$lign->prenom_client;
            }
            
            return $data;
        }



   }


   function get_idclient_commande($id_commande){


    $this->db->where("id_commande", $id_commande); 
      $this->db->select()->from('mickr_commande');
       
      $q = $this->db->get();
      $data="";
        if($q->num_rows()>0)
        {
            foreach ($q->result() as $lign)
            {
                $data=$lign->id_client;
            }
            
            return $data;
        }



   }
   function get_montant_commande($id_commande){


    $this->db->where("id_commande", $id_commande); 
      $this->db->select()->from('mickr_commande');
       
      $q = $this->db->get();
      $data="";
        if($q->num_rows()>0)
        {
            foreach ($q->result() as $lign)
            {
                $data=$lign->montant_commande;
            }
            
            return $data;
        }



   }

   function get_telclient($id_client){


    $this->db->where("id_client", $id_client); 
      $this->db->select()->from('mickr_client');
       
      $q = $this->db->get();
      $data="";
        if($q->num_rows()>0)
        {
            foreach ($q->result() as $lign)
            {
                $data=$lign->telephone_client;
            }
            
            return $data;
        }



   }

   function get_telfournisseur($id_fournisseur){


    $this->db->where("id_fournisseur", $id_fournisseur); 
      $this->db->select()->from('mickr_fournisseur');
       
      $q = $this->db->get();
      $data="";
        if($q->num_rows()>0)
        {
            foreach ($q->result() as $lign)
            {
                $data=$lign->tel_fournisseur;
            }
            
            return $data;
        }



   }

    function get_designation_produit($id_produits){


    $this->db->where("id_produits", $id_produits); 
      $this->db->select()->from('mickr_admin_produit');
       
      $q = $this->db->get();
      $data="";
        if($q->num_rows()>0)
        {
            foreach ($q->result() as $lign)
            {
                $data=$lign->nom_produit;
            }
            
            return $data;
        }



   }

   function get_fournisseur_produit($id_fournisseur){


    $this->db->where("id_fournisseur", $id_fournisseur); 
      $this->db->select()->from('mickr_fournisseur');
       
      
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

   function get_id_fournisseur_produit($id_produits){


    $this->db->where("id_produits", $id_produits); 
      $this->db->select()->from('mickr_admin_produit');
       
      
      $q = $this->db->get();
      $data="";
       if($q->num_rows()>0)
        {
            foreach ($q->result() as $lign)
            {
                $data=$lign->id_fournisseur;
            }
            
            return $data;
        }



   }

   function get_nom_fournisseur_produit($id_fournisseur){


    $this->db->where("id_fournisseur", $id_fournisseur); 
      $this->db->select()->from('mickr_fournisseur');
       
      
      $q = $this->db->get();
      $data="";
       if($q->num_rows()>0)
        {
            foreach ($q->result() as $lign)
            {
                $data=$lign->entreprise_fournisseur;
            }
            
            return $data;
        }



   }

   function get_contact_fournisseur_produit($id_fournisseur){


    $this->db->where("id_fournisseur", $id_fournisseur); 
      $this->db->select()->from('mickr_fournisseur');
       
      
      $q = $this->db->get();
      $data="";
       if($q->num_rows()>0)
        {
            foreach ($q->result() as $lign)
            {
                $data=$lign->tel_fournisseur;
            }
            
            return $data;
        }



   }

   function get_informations_client_total($id_client){


    $this->db->where("id_client", $id_client); 
      $this->db->select()->from('mickr_client');
       
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


   function get_informations_commande_produit($id_commande){


    $this->db->where("id_commande", $id_commande); 
      $this->db->select()->from('mickr_liaison_commande_produit');
       
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

   function compterProduitNonLivre($id_commande){
       
      $status_fournisseur="0";
      $this->db->where("id_commande", $id_commande); 
      $this->db->where("status_fournisseur", $status_fournisseur); 
      $nb_cmd_nn_livre=$this->db->count_all_results('mickr_liaison_commande_produit');
      return $nb_cmd_nn_livre;

   }

   function ajoutInfosPortefeuille($data){
       
     $this->db->insert('mickr_portefeuille', $data); 
     return True;

   }

   function modifier_infos_commande($id_commande,$data){

      
       
        $this->db->where('id_commande',$id_commande);
        $this->db->update('mickr_commande', $data);
        return True;

  }

  function modifier_infos_commande_prod($id_commande,$data){

      
       
        $this->db->where('id_commande',$id_commande);
        $this->db->update('mickr_liaison_commande_produit', $data);
        return True;

  }

  function modifier_infos_commande_prodID($id_liaison_com_pro,$data){

      
       
        $this->db->where('id_liaison_com_pro',$id_liaison_com_pro);
        $this->db->update('mickr_liaison_commande_produit', $data);
        return True;

  }

  



   function supprim_vendeur($id_fournisseur){
     
      $this->db->delete('mickr_fournisseur', array('id_fournisseur' => $id_fournisseur)); 

   }




//statistique administration

   function Total_produits_vendus(){

      $nb_categories=$this->db->count_all_results('mickr_portefeuille');
      return $nb_categories;

   }

   function total_profit_net_maxshop(){

   
      $this->db->select()->from('mickr_portefeuille');
       
      $q = $this->db->get();
      $data="";

      $compt=0;
        if($q->num_rows()>0)
        {
            foreach ($q->result() as $lign)
            {
                $compt=$compt+$lign->profit_net_maxshop;
            }
            
            
        }

        return $compt;



   }

     function Total_commande(){

      $nb_categories=$this->db->count_all_results('mickr_commande');
      return $nb_categories;

   }

   function total_produit_maxshop(){
   
      $nb_categories=$this->db->count_all_results('mickr_admin_produit');
      return $nb_categories;

   }


   function total_produit_maxshop_en_attente(){

      $status_mise_en_ligne=0;
      $this->db->where("status_mise_en_ligne", $status_mise_en_ligne);
       
      $nb_categories=$this->db->count_all_results('mickr_admin_produit');
      return $nb_categories;

   }

    function total_produit_maxshop_validé(){

      $status_mise_en_ligne=1;
      $this->db->where("status_mise_en_ligne", $status_mise_en_ligne);
       
      $nb_categories=$this->db->count_all_results('mickr_admin_produit');
      return $nb_categories;

   }

   function total_produit_maxshop_a_livrer(){

      $status_fournisseur=0;
      $this->db->where("status_fournisseur", $status_fournisseur);
      $nb_categories=$this->db->count_all_results('mickr_liaison_commande_produit');
      return $nb_categories;

   }


   function total_produit_maxshop_livrer(){

      $status_fournisseur=1;
      $this->db->where("status_fournisseur", $status_fournisseur);
      $nb_categories=$this->db->count_all_results('mickr_liaison_commande_produit');
      return $nb_categories;

   }


   function total_livraison_annuler_maxshop(){

      $status_fournisseur=10;
      $this->db->where("status_fournisseur", $status_fournisseur);
      $nb_categories=$this->db->count_all_results('mickr_liaison_commande_produit');
      return $nb_categories;

   }


   function total_vendeurs_maxshop(){

      $nb_categories=$this->db->count_all_results('mickr_fournisseur');
      return $nb_categories;

   }







  





    // generateur de clé primaire
   function clePrimaire( $taille ) {

    $chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
    return substr(str_shuffle($chars),0,$taille);

   }

   
    
  


  

}