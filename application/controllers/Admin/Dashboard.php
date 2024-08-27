<?php 
	defined('BASEPATH') OR exit('No direct script access allowed');
	class Dashboard extends CI_Controller {
		public function __construct()
		{
			parent::__construct();
			$this->load->library('session');
			$this->load->model('Userview_model');
			$this->load->model('dashboard_model'); // Load the model
			    $email = $this->session->userdata('logged_in');
			    $data['useradminn'] = $this->Userview_model->userss(['email' => $email]); // Pass email in an array
			    
			    $this->load->view('Admin/includes/header',$data);
		}
		public function index()
		{
			if (!isset($this->session->userdata['logged_in'])){
				    
		redirect('admin/Login');
		}
		else{
			$data['product_count'] = $this->dashboard_model->count_products();
			$data['sell_count']=$this->dashboard_model->count_sell();
			$data['order_count']=$this->dashboard_model->count_order();
			$revenue_result = $this->dashboard_model->count_revenue();
   		    $data['total_revenue'] = $revenue_result->row()->total_price;
			//$data['revenue_count']=$this->dashboard_model->count_revenue();
			

			$this->load->view('Admin/dashboard', $data);	
		}
	}
	}
?>