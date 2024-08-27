<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Forgot extends CI_Controller {

	 function __construct() {
        parent::__construct();
        $this->load->library("session");
        $this->load->helper("form");
        $this->load->library('form_validation');
		$this->load->model('reset_model');
		$this->load->library('email');
    }

	public function index()
	{
		$this->load->view('admin/forgot');
	
	}
	public function test()
	{

		// echo "test"; exit;
		//validation of data 
		$this->form_validation->set_rules('email','Email','required|valid_email');
		if ($this-> form_validation->run()==false){
				
				$this->load->view('admin/forgot');
		}
		else{
			// echo "exit"; exit;
			$data= array(
				'email'=> $this->input->post('email')	
			);

			$result = $this->reset_model->reset($data);

			if ($result == true){
					$session_data = array(
					'email'=> $data['email']
					);
					// sending input data  to another page using session 
					$this->session->set_userdata($session_data);
					//generating otp
					$otprand = mt_rand(100000,999999);
					//echo $otp;

					$email = $this->input->post('email');

				// echo $email; exit;

        // Set the email parameters
        //	$this->email->from('reconditionproductoutlet2023@gmail.com', 'RPO');
	       // $this->email->to('edevpuspa@gmail.com');
	     //   $this->email->subject('This is the subject of the email');
	      //  $this->email->message('This is the body of the email');


	        
		$OTPcode= array(
	//left ma database ko column right ma form ko name ;
	// all database column accepting lower case

				'email'=> $this->input->post('email'),
				'Otp'=> $otprand
			);
		$this->reset_model->insert($OTPcode);

		$this->email->from('reconditionproductoutlet2023@gmail.com', 'RPO');
		$this->email->to($email);


		$this->email->subject('Otp Code to change your password');
		$this->email->message('Your Otp code is '. $otprand);

// $this->email->send(); 


        // Send the email
        if ($this->email->send()) {
            
            
           	$this->session->set_flashdata('message','Otp Send Successfully');
            redirect('admin/Otp');
        } else {
      		$this->session->set_flashdata('message','Error Occurred');
            echo $this->email->print_debugger();
        }
							
				}
      		else{
					$this->session->set_flashdata('message','Invalid Email');
					redirect('admin/forgot');
			} 	
		}				
    }
}
	
	
	
	


