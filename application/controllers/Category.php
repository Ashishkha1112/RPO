<?php 
	defined('BASEPATH') OR exit('No direct script access allowed');
	class Category extends CI_Controller {

		public function __construct()
    	{
        parent::__construct();
        $this->load->model('category_model');
        $this->load->library('form_validation');
        $this->load->model('Userview_model');

			    $email = $this->session->userdata('logged_in');
			    $data['useradminn'] = $this->Userview_model->userss(['email' => $email]); // Pass email in an array
			    $this->load->view('Admin/includes/header',$data);

    	}
	
		public function index()
		{
					
			$this->load->view('Admin/category_add');
		}
		public function add_new()
		{	
			 // Set validation rules
        	$this->form_validation->set_rules('category_name', 'Category Name', 'required|trim|min_length[3]|max_length[20]');
        	$this->form_validation->set_rules('category_description', 'Category Description', 'required');


		    if ($this->form_validation->run() === false) {
		    	$this->load->view('Admin/category_add');
		        $this->session->set_flashdata("message", "Data does not saved");
		        
		    } else {
		    	// Check if the category name already exists
		        $category_name = $this->input->post('category_name');
		        $category_exists = $this->category_model->check_category_exists($category_name);

		        if ($category_exists) {
		            $this->session->set_flashdata("message", "Category with the same name already exists");
		            $this->load->view('Admin/category_add');
		        } else {

		        $config['upload_path']          = './assets/uploads/';
		        $config['allowed_types']        = 'gif|jpg|png';
		        $config['max_size']             = 1024;
		        $this->load->library('upload', $config);

	                $this->upload->do_upload('userfile');

	                $data = array('upload_data' => $this->upload->data());

	                $file_name = $data['upload_data']['file_name'];

		        	$data = array(
					'category_name' => $this->input->post('category_name'),
					'category_description' => $this->input->post('category_description'),
					'category_image' => $file_name
				);
		        $this->category_model->insert($data);

		        $this->session->set_flashdata("message", "category added successful");
		        redirect('Admin/Categoryshow');
		   	 }
			}
		}
			// function profile()
			// {
			//     $email = $this->session->userdata('logged_in');
			//     $data['useradmin'] = $this->Userview_model->userss(['email' => $email]); // Pass email in an array
			//     $this->load->view('Admin/profileadmin', $data);
			//     $this->load->view('Admin/includes/header',$data);

			// }

	}
?>