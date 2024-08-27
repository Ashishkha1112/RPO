<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product extends CI_Controller {

	public function __construct()
    	{
        parent::__construct();
        //load model
        $this->load->library('session');
        $this->load->model('product_model');
        //load form validation library
        $this->load->library('form_validation');
        //load category model for dropdown
        $this->load->model('category_model');
            $this->load->model('Userview_model');
                $email = $this->session->userdata('logged_in');
                $data['useradminn'] = $this->Userview_model->userss(['email' => $email]); // Pass email in an array
                
                $this->load->view('Admin/includes/header',$data);
    	}

	
	public function index()
	{
		//fetch data from model into categories
		$data['categories']  = $this->category_model->get_all_categories();
		
		//data bind to the view
 		$this->load->view('admin/product_add',$data);
	}


    public function add_product()
        {
        $email= $this->session->userdata('logged_in');
        $this->form_validation->set_rules('product_category', 'Product category', 'required');
        $this->form_validation->set_rules('product_name', 'Product Name', 'required|trim|min_length[3]|max_length[20]');
        $this->form_validation->set_rules('product_price', 'Product price', 'required|regex_match[/^\d+(\.\d{1,2})?$/]');
        $this->form_validation->set_rules('product_description', 'Product Description', 'required');
        // $this->form_validation->set_rules('product_image_front', 'Product Image Front', 'required');
        // $this->form_validation->set_rules('product_image_back', 'Product Image Back', 'required');
        // $this->form_validation->set_rules('product_image_top', 'Product Image Top', 'required');
        // $this->form_validation->set_rules('product_image_bottom', 'Product Image Bottom', 'required');

        if ($this->form_validation->run() === false)
        {
            $this->session->set_flashdata("message", "Data does not saved");
            $this->load->view('Admin/product_add');
        }
        else
        {
            $config['upload_path']   = './assets/uploads/productimg/';
            $config['allowed_types'] = 'gif|jpg|png';
            $config['max_size']      = 1024;
            $this->load->library('upload', $config);

            $this->upload->do_upload('product_image_front');
            $data1 = array('upload_data' => $this->upload->data());

            $this->upload->do_upload('product_image_back');
            $data2 = array('upload_data' => $this->upload->data());

            $this->upload->do_upload('product_image_top');
            $data3 = array('upload_data' => $this->upload->data());

            $this->upload->do_upload('product_image_bottom');
            $data4 = array('upload_data' => $this->upload->data());

            $data = array(
                'category_id' => $this->input->post('product_category'),
                'product_name' => $this->input->post('product_name'),
                'product_price' => $this->input->post('product_price'),
                'product_description' => $this->input->post('product_description'),
                'product_image_front' => $data1['upload_data']['file_name'],
                'product_image_back' => $data2['upload_data']['file_name'],
                'product_image_top' => $data3['upload_data']['file_name'],
                'product_image_bottom' => $data4['upload_data']['file_name'],
                 'Email'=>$email

            );

            // Call the model to add the product to the database
            $this->product_model->insert($data);

            // Redirect to a success page or show a success message
            $this->session->set_flashdata("message", "Product added successfully");
            redirect('Admin/productshow');
        }
    }
}
