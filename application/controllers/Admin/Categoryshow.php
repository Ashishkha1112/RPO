<?php 
	defined('BASEPATH') OR exit('No direct script access allowed');
	class Categoryshow extends CI_Controller {

		public function __construct()
    	{
        parent::__construct();
        $this->load->model('category_model');
        $this->load->model('Userview_model');
        $this->load->library('form_validation');
	    $email = $this->session->userdata('logged_in');
	    $data['useradminn'] = $this->Userview_model->userss(['email' => $email]); // Pass email in an array
	    
	    $this->load->view('Admin/includes/header',$data);
    	}
	
		public function index()
		{

			$data['categories']= $this->category_model->get_all_categories();
			$this->load->view('Admin/categoryshow',$data);
		}
		public function deletecategory($id)
		{
			//$idd = $this->input->post($id);
			//echo '<pre>';print_r($id); exit;

			$result=$this->category_model->DeleteCategory($id);

			if($result==true)
			{
				$this->session->set_flashdata("message","Category Delete successful");
				redirect('admin/categoryshow');
			}
			else
			{
				$this->session->set_flashdata("message","Category Delete usuccessful");
				redirect('admin/categoryshow');
			}
		}

		// Function for retriving the data from database when edit button is clicked
			 function EditCategory($id)
			{
			     $data['categories'] = $this->category_model->categoryforedit($id);
			     $this->load->view('Admin/editcategory', $data);
			}



			public function savecategory($id)
				{ 

				$categories = $this->category_model->categorybyidforimage($id);

				$a = $categories['category_id'];
				$this->form_validation->set_rules('newcategoryname','Category Name','required|trim|min_length[3]|max_length[20]');
			    $this->form_validation->set_rules('newcategorydescription','Category Description','required');
			   
		    	if ($this->form_validation->run() === false)
			    {
			        $this->session->set_flashdata("message","Data does not saved");
			        //for reloading form with validation error;
			        $data['categories'] = $this->category_model->categoryforedit($a);
			     	$this->load->view('Admin/editcategory', $data);
			    }else{
			    	$config['upload_path']   = './assets/uploads/';
			        $config['allowed_types'] = 'gif|jpg|png';
			        $config['max_size']      = 1024;
				    
				    $this->load->library('upload', $config);

				    if($_FILES['newcategoryimage']['name'] != ""){
				        // Upload and process images one by one
				        $this->upload->do_upload('newcategoryimage');
			            $data1 = array('upload_data' => $this->upload->data());
			        }else{
			        	$data1['upload_data']['file_name'] = $categories['category_image'];
			        }

				    $newData = array(
				        'category_name' => $this->input->post('newcategoryname'),
				        'category_description' => $this->input->post('newcategorydescription'),
				        'category_image' => $data1['upload_data']['file_name']
				    );
			    


			    $result = $this->category_model->EditCategory($id, $newData);

			    if ($result) {
			        $this->session->set_flashdata("message", "Category edit successful");
			        redirect('admin/categoryshow');
			    } else {
			        $this->session->set_flashdata("message", "Category edit unsuccessful");
			        redirect('admin/editcategory/' . $id);
			    }
			}
		}
	}
?>