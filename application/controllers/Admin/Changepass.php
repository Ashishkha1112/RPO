<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Changepass extends CI_Controller {
 function __construct() {
        parent::__construct();
        $this->load->library("session");
        $this->load->helper("form");
        $this->load->library('form_validation');
		$this->load->model('Changepass_model');
		$this->load->library('email');
    }


	public function index()
	{
		$this->load->view('admin/changepass');

	}
	public function changePass(){
		 $this->form_validation->set_rules('password', 'Password', 'required|min_length[8]|regex_match[/^(?=.*[A-Z])(?=.*[a-z])(?=.*\d)(?=.*[@#$%^&+=!]).*$/]');

		if ($this-> form_validation->run()==false)
		{
		$this->load->view('admin/changepass');
		}
		else{
			// echo "exit"; exit;
			$data= array(
				'password'=> md5($this->input->post('password')),
				'email'=>$this->session->userdata('forgotpass_attempt')	
			);

			//echo "heloo";
			//exit;

			$result = $this->Changepass_model->update($data);
			if($result == true)
			{
			//	echo "hello";
			//	exit;
				 $this->session->set_flashdata('message','Password change Successfully');
				redirect('admin/login');
			 }
			else{
				$this->session->set_flashdata('message_pl','Password is not changed');
				redirect('admin/changepass');

			}


	}

	
}
}	