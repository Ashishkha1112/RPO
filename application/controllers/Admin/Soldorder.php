<?php 
	defined('BASEPATH') OR exit('No direct script access allowed');
	class Soldorder extends CI_Controller {

		public function __construct()
    	{
        	parent::__construct();
        	$this->load->library('form_validation');
        		$this->load->model('Userview_model');
			    $email = $this->session->userdata('logged_in');
			    $data['useradminn'] = $this->Userview_model->userss(['email' => $email]); // Pass email in an array
			    
			    $this->load->view('Admin/includes/header',$data);
    	}
	
		public function index()
		{
			$this->load->view('Admin/soldorder');
		}
	}
?>