<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends MX_Controller {

	public function __construct()
	{
	
		parent::__construct();
	    $this->load->model('login_model');
		
	}

	public function index()
	{
   	
     $this->load->model('login_model');

		$this->form_validation->set_rules('login', 'nom d\'utilisateur', 'trim|required');
	    $this->form_validation->set_rules('pass', 'Mot de passe', 'trim|required');
	   
	      
	    if($this->form_validation->run()) 
	    {
			    if($this->login_model->check_connection($this->input->post('login'),$this->input->post('pass')))
	               {
	                   
	                   $data['admin_informations']=$this->login_model->getInfo_user($this->input->post('login'),$this->input->post('pass'));
	                   
	                   foreach ($data['admin_informations'] as $lign) {

	                       
	                        $data['id_admin']=$lign->id_administrateur;	                        
	                        $data['nom_prenom']=$lign->nom_administrateur.' '.$lign->prenom_administrateur;
	                        $data['id_profile']=$lign->id_profile;
                            $data['status']=$lign->status;
	                         
	                        
	                        


	                   }

	                    $store_data_inSession = array(

	                                            'id_admin'  => $data['id_admin'],            
	                                            'nom_prenom'=> $data['nom_prenom'],
	                                            'id_profile'=> $data['id_profile'],
	                                            'status'  => $data['status'],	                                            
	                                            
	                                            
	                     );

	                    $this->session->set_userdata($store_data_inSession);
	                    redirect('administration');

                      
	                   
	               }
	               else {
	                   

	                   $data["mot_de_passe_erronee"]="erreur"; 
	                   $this->load->view('log_admins',$data);
	                   
	               }

	      }else
	      {
	        $this->load->view('log_admins');

	      }
	}


	public function vendeur()
	{
   	
     $this->load->model('login_model');


		$this->form_validation->set_rules('login', 'nom d\'utilisateur', 'trim|required');
	    $this->form_validation->set_rules('pass', 'Mot de passe', 'trim|required');
	   
	      
	    if($this->form_validation->run()) 
	    {
			    if($this->login_model->check_connection_vendeur($this->input->post('login'),$this->input->post('pass')))
	               {
	                   
	                   $data['admin_informations']=$this->login_model->getInfo_vendeur($this->input->post('login'),$this->input->post('pass'));
	                   
	                   foreach ($data['admin_informations'] as $lign) {

	                       
	                        $data['id_admin']=$lign->id_fournisseur;	                        
	                        $data['nom_prenom']=$lign->nom_fournisseur.' '.$lign->prenom_fournisseur;
	                        $data['id_profile']=7;
                            
	                         
	                        
	                        


	                   }

	                    $store_data_inSession = array(

	                                            'id_admin'  => $data['id_admin'],            
	                                            'nom_prenom'=> $data['nom_prenom'],
	                                            'id_profile'=> $data['id_profile'],
	                                            	                                            
	                                            
	                                            
	                     );

	                    $this->session->set_userdata($store_data_inSession);
	                    redirect('vendeur');

                      
	                   
	               }
	               else {
	                   

	                   $data["mot_de_passe_erronee"]="erreur"; 
	                   $this->load->view('log_admins_vendeur',$data);
	                   
	               }

	      }else
	      {
	        $this->load->view('log_admins_vendeur');

	      }
	}





	
   

  

	
	

	




}