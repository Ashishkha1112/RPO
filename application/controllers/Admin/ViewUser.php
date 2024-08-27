<?php 
	defined('BASEPATH') OR exit('No direct script access allowed');
	class ViewUser extends CI_Controller {
		public $useremail;
		public $username;
		public function __construct()
		{
			parent::__construct();
			$this->load->library('session');
			$this->load->model('Userview_model');
			$this->load->model('Userview_model');

		    $email = $this->session->userdata('logged_in');
		    $data['useradminn'] = $this->Userview_model->userss(['email' => $email]); // Pass email in an array
		    $this->load->view('Admin/includes/header',$data);


		}
		public function index()
		{
		//echo "hello";
			
			//$user['useradmin']=$this->Userview_model->users();
			//echo "hi";
			//echo '<pre>';print_r($user); 
			//exit;
		
//this->load->view('admin/viewuser',$user);
			$data['useradmin']= $this->Userview_model->users();
			$this->load->view('Admin/viewuser',$data);
		}
			

		
 function deleteuser($id){


			$result=$this->Userview_model->Deleteuser($id);
			echo $result;

			if($result==true)
			{
				//echo "hello";exit;
				$this->session->set_flashdata("message","User Delete successful");
				//$this->load->view('admin/viewuser');
				redirect('Admin/viewuser');
			
			}
			else
			{
				//echo "hello1";exit;
				$this->session->set_flashdata("message","User Delete usuccessful");
				redirect('Admin/viewuser');
			}
		}

		public function users(){

			$data['useradmin']= $this->Userview_model->user1();
			$this->load->view('Admin/viewuser1',$data);
		}
}




	
?>