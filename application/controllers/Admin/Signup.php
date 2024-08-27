<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
	class Signup extends CI_Controller {
		public function __construct()
		{
			parent::__construct();
			$this->load->library('form_validation');
			$this->load->model('signup_model');
			$this->load->model('Userview_model');
			$this->load->library('session');
			    $email = $this->session->userdata('logged_in');
			    $data['useradminn'] = $this->Userview_model->userss(['email' => $email]); // Pass email in an array
			    
			    $this->load->view('Admin/includes/header',$data);
			
		}

		public function index()
		{
			
			//echo "i am here";
			$this->load->view('admin/signup');
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
			 //	echo "hello"; exit;
			//  	$this->session->set_flashdata("message","Data does not inserted successful");
          	// redirect('Admin/Signup');
		          $this->load->view('Admin/signup');

			 }

		      else{
		      	$usertyp ="Admin";

					//echo "hi"; exit;
	      		 	$config['upload_path']          = './assets/uploads/';
	                $config['allowed_types']        = 'gif|jpg|png';
	                $config['max_size']            = 1024;

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
          	redirect('Admin/dashboard');
		          
		        }
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