<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
	class Admin extends CI_Controller {
		
		public function __construct()
		{
			parent::__construct();
			$this->load->model('login_model');
			$this->load->library('session');
			$this->load->model('Userview_model');
			$email = $this->session->userdata('logged_in');
			$data['useradmin'] = $this->Userview_model->userss(['email' => $email]); // Pass email in an array
			    $this->load->view('Admin/includes/header',$data);
		}


		public function index()
		{
			$this->load->view('admin/Login');
		}


		public function login()
		{

			$this->load->library('form_validation');
			$this->form_validation->set_rules('email','Email','required|valid_email');
			$this->form_validation->set_rules('password', 'Password', 'required');


			if ($this-> form_validation->run()==false){
				$this->load->view('admin/Login');
				}
			else{
				$usertyp = "Admin";
				$data= array(
					'email'=> $this->input->post('email'),
					'password'=> $this->input->post('password'),
					'usertype' => $usertyp
					);

				$result = $this->login_model->loginadmin($data);
				if ($result == true)
					{
					$session_data = $this->input->post('email');
					
					$this->session->set_userdata('logged_in',$session_data);
					redirect('admin/dashboard',);
					}
				else{
					$this->session->set_flashdata('message','Sorry username and password are incorrect');
					redirect('admin/login');
				} 	
			}
		}

		function profile()
			{
			    $email = $this->session->userdata('logged_in');
			    $data['useradmin'] = $this->Userview_model->userss(['email' => $email]); // Pass email in an array
			    $this->load->view('Admin/profileadmin', $data);
			   // $this->load->view('Admin/includes/header',$data);

			}
	}
?>