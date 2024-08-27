<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Logout extends CI_Controller {
public function __construct()
		{
		parent::__construct();
        $this->load->library('session');
       
		
		
			//parent::__construct();
			//$this->useremail = $this->session->userdata('logged_in');
			//$this->load->model('login_model');
			//calling function for fetching data of user
			// $this->username = $this->login_model->getUsername($this->useremail);
		}
	public function index()
	
	{
		$this->session->unset_userdata('logged_in');
		$this->load->view('admin/Login');
	}
	
}