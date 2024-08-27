<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
	class Otp extends CI_Controller {
		public function __construct(){
			parent::__construct();
			$this->load->library('session');
			$this->load->model('Otp_model');
			$this->load->library('form_validation');
		}


		public function index()
		{
			
			$this->load->view('admin/otpconfirm');
		}

		public function verify(){		


			 	$data=array(
			 		'Otp' => $this->input->post('otp'),
					'email'=>$this->session->userdata('forgotpass_attempt')	
			 	);
		
			 $result=$this->Otp_model->verify($data);
			

			 if($result==true)
			 {
			 		$this->Otp_model->delete_otp($data);
			 		redirect('admin/Changepass');
			 }
			 else{
			 		redirect('Admin/Forgotpass');
			 }
}
}
?>