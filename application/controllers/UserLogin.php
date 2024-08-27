<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
	class UserLogin extends CI_Controller {
		
		public function __construct()
		{
			parent::__construct();
			$this->load->library('form_validation');
			$this->load->library('email');
			$this->load->model('Login_model');
			$this->load->model('forgotpass_model');
			$this->load->model('Otp_model');
					$this->load->model('signup_model');
					$this->load->model('Changepass_model');
					$this->load->library('session');
					$this->load->model('Userview_model');
					$this->load->model('productshow_model');
					  
		}


		public function index()
		{
			if(!isset($this->session->userdata['logged_inn'])){
				$this->load->view('user/userLogin');
			}
			else
			{
			    redirect('welcome');
			}	
		}


		function login()
		{
			
			$this->form_validation->set_rules('uemail','Email','required|valid_email');
			$this->form_validation->set_rules('upassword', 'Password', 'required');
			
			if ($this-> form_validation->run()==false){
				$this->load->view('user/userLogin');
				}
			else{
				$usertyp="user";
				$data= array(
					'email'=> $this->input->post('uemail'),
					'password'=> $this->input->post('upassword'),
					'usertype'=> "user"
					);
				$result = $this->Login_model->login($data);
				if ($result == true)
					{
					$session_data = $this->input->post('uemail');
					$this->session->set_userdata('logged_inn',$session_data);

					redirect('welcome');
					}
				else{
					$this->session->set_flashdata('message','Sorry username and password are incorrect');
					redirect('UserLogin');
				} 	
			}
		}

		public function signup(){
			$this->load->view('user/userSignUp');
		}
		public function insert(){
			$this->form_validation->set_rules('name','Name', 'required|trim|min_length[3]|max_length[20]');
			$this->form_validation->set_rules('email1','Email','required|valid_email');
			 $this->form_validation->set_rules('phone','Phone Number', 'required|regex_match[/^(98|97)\d{8}$/]');
			 $this->form_validation->set_rules('dob', 'Date of Birth', 'required|callback_validate_age');
			 $this->form_validation->set_rules('address','Address', 'required|trim|min_length[3]|max_length[50]');
			 $this->form_validation->set_rules('radio1','Gender', 'required');
			 $this->form_validation->set_rules('password1','Password', 'required|min_length[8]|regex_match[/^(?=.*[A-Z])(?=.*[a-z])(?=.*\d)(?=.*[@#$%^&+=!]).*$/]');

			 if ($this->form_validation->run() === FALSE) { 
			 	$this->session->set_flashdata("message","Data does not inserted successful");
			 	$this->load->view('User/userSignUp');
		          

			 }

		      else{
		      	$usertyp ="User";

					//echo "hi"; exit;
	      		 	$config['upload_path']          = './assets/uploads/';
	                $config['allowed_types']        = 'gif|jpg|png';
	            	$config['max_size']	=1024;
	                $config['max_width']            = 1024;
	                $config['max_height']           = 768;

	                $this->load->library('upload', $config);

	                $this->upload->do_upload('profile');

	                $data = array('upload_data' => $this->upload->data());

	                $file_name = $data['upload_data']['file_name'];

		        	$data = array(
					'Name' => $this->input->post('name'),
					'Email' => $this->input->post('email1'),
					'Phone' => $this->input->post('phone'),
					'Dob' => $this->input->post('dob'),
					'Address' => $this->input->post('address'),
					'Gender' => $this->input->post('radio1'),
					
					'Profile' => $file_name,

					'Password' => md5($this->input->post('password1')),
					'usertype'=>$usertyp
					);
		       
            // Call the model to add the category to the database
     			 $this->signup_model->signup($data);

            // Redirect to a success page or show a success message
     		$this->session->set_flashdata("message","User added successful");
          	redirect('UserLogin');
		          
		        }
	}
	public function forgot(){
		$this->load->view('user/forgot');

	}
	public function sendotp(){

		//validation of data 
		$this->form_validation->set_rules('email','Email','required|valid_email');
		if ($this-> form_validation->run()==false){
				$this->load->view('user/userforgot');

				
		}
		else{
			$data= array(
				'email'=> $this->input->post('email')	
			);

			$result = $this->forgotpass_model->forgotpass1($data);

			if ($result == true){
					
					$session_data = $this->input->post('email');
	
					// sending input data  to another page using session 
					$this->session->set_userdata('forgotpass_attemptt',$session_data);
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
            redirect('UserLogin/showotp');
        } else {
      		$this->session->set_flashdata('message','Error Occurred');
            echo $this->email->print_debugger();
        }					
				}
      		else{
					$this->session->set_flashdata('message','Invalid Email');
					redirect('UserLogin/forgot');
			} 	
		}				


	}
	public function showotp(){
		$this->load->view('user/userotp');
	}
	public function verifyotp(){

			 	$data=array(
			 		'Otp' => $this->input->post('otp'),
					'email'=>$this->session->userdata('forgotpass_attemptt')	
			 	);
		
			 $result=$this->Otp_model->verify($data);
			 if($result==true)
			 {
			 		$this->Otp_model->delete_otp($data);
			 		redirect('UserLogin/changepass');
			 }
			 else{
			 		redirect('UserLogin/showotp');
			 }
	}

	public function changepass()
	{
		$this->load->view('user/changepassword');
	}

	public function changePasss(){
		 $this->form_validation->set_rules('password', 'Password', 'required|min_length[8]|regex_match[/^(?=.*[A-Z])(?=.*[a-z])(?=.*\d)(?=.*[@#$%^&+=!]).*$/]');
		if ($this-> form_validation->run()==false){		
				$this->load->view('user/changepassword');
			}
			else{
				$data= array(
				'password'=> md5($this->input->post('password')),
				'email'=>$this->session->userdata('forgotpass_attemptt')	
			);

			$result = $this->Changepass_model->update($data);
			if($result == true)
			{
				 $this->session->set_flashdata('message','Password change Successfully');
				 $this->session->unset_userdata('forgotpass_attemptt');
				redirect('UserLogin');
			 }
			else{
				$this->session->set_flashdata('message_pl','Password is not changed');
				redirect('UserLogin/changepass');
			}
	}

	
}
public function logout(){

	if(!isset($this->session->userdata['logged_inn']))
	{
		redirect('welcome');
	}
	else
	{
		
		$this->session->unset_userdata('logged_inn');
		redirect('welcome');
	}	

	}
	function profile()
			{
				if(!isset($this->session->userdata['logged_inn'])){
					 redirect('UserLogin');
				}
				else{

	  				$email = $this->session->userdata('logged_inn');
	  				// print_r($email);
	  				// exit;

	  				$data['productt'] = $this->productshow_model->producttt(['email' => $email]);
	  				$data['producttt'] = $this->productshow_model->productsell(['email' => $email]);
	  				// print_r($data);
	  				// exit;
			   		 $data['useradmin'] = $this->Userview_model->userss(['email' => $email]);
					$this->load->view('User/profile', $data);
			  }

			}
	function contact(){
		$this->load->view('user/contactinfo');
	}
	function about(){
		$this->load->view('user/aboutus');
	}
	public function validate_age($date)
		{
		    // Convert the date string to a DateTime object
		    $dob = new DateTime($date);

		    // Calculate the difference between the date of birth and today's date
		    $now = new DateTime();
		    $age = $now->diff($dob)->y;

		    // Check if the user is at least 16 years old
		    if ($age >= 16) {
		        return true;
		    } else {
		        $this->form_validation->set_message('validate_age', 'You must be at least 16 years old to register.');
		        return false;
		    }
		}

}
?>