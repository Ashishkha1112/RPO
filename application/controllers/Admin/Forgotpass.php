<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
	class Forgotpass extends CI_Controller {

		public function __construct()
		{
			parent::__construct();
			$this->load->model('forgotpass_model');
			$this->load->library("session");
	        $this->load->helper("form");
	        $this->load->library('form_validation');
			//$this->load->model('reset_model');
			$this->load->library('email');
		}

		public function index()
		{
			$this->load->view('admin/forgotpassword');
		}

		

		public function forgot()
		{

		
		//validation of data 
		$this->form_validation->set_rules('email','Email','required|valid_email');
		if ($this-> form_validation->run()==false){
				
				$this->load->view('admin/forgotpassword');
		}
		else{
			$data= array(
				'email'=> $this->input->post('email')	
			);

			$result = $this->forgotpass_model->forgotpass($data);

			if ($result == true){
					
					$session_data = $this->input->post('email');
	
					// sending input data  to another page using session 
					$this->session->set_userdata('forgotpass_attempt',$session_data);
					//generating otp
					$otprand = mt_rand(100000,999999);
					//echo $otp;

					$email = $this->input->post('email');

	        
		$OTPcode= array(
	//left ma database ko column right ma form ko name ;
	// all database column accepting lower case

				'email'=> $this->input->post('email'),
				'Otp'=> $otprand
			);
		$this->forgotpass_model->insert($OTPcode);

		$this->email->from('reconditionproductoutlet2023@gmail.com', 'RPO');
		$this->email->to($email);


		$this->email->subject('Otp Code to change your password');
		$this->email->message('Your Otp code is '. $otprand);




        // Send the email
        if ($this->email->send()) {
            
            
           	$this->session->set_flashdata('message','Otp Send Successfully');
            redirect('admin/otpconfirm');
        } else {
      		$this->session->set_flashdata('message','Error Occurred');
            echo $this->email->print_debugger();
        }
						

										
				}
				
      		else{
					$this->session->set_flashdata('message','Invalid Email');
					redirect('admin/forgotpassword');
			} 	
		}				
    }


	}
?>