<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

		public function __construct()
    	{
        parent::__construct();
        $this->load->model('product_retrive_user_model');
        $this->load->model('category_model');
    	}
	
		public function index()
		{
			$data['product']= $this->product_retrive_user_model->product();
			$data['categories'] = $this->category_model->get_all_categories();
			// $dataa['product']= $this->product_retrive_user_model->productformodal();
			$this->load->view('User/home',$data);
		}
	}

