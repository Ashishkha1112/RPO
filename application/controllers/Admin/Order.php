<?php 
	defined('BASEPATH') OR exit('No direct script access allowed');
	class Order extends CI_Controller {

		public function __construct()
    	{
        	parent::__construct();
        	$this->load->library('form_validation');
        	$this->load->model('order_model_admin');
        	$this->load->model('product_retrive_user_model');
        	$this->load->model('product_model');
        		$this->load->model('Userview_model');
			    $email = $this->session->userdata('logged_in');
			    $data['useradminn'] = $this->Userview_model->userss(['email' => $email]); // Pass email in an array
			    
			    $this->load->view('Admin/includes/header',$data);
    	}
	
		public function index()
		{
			// $data['orders'] = $this->order_model_admin->get_all_orders();
			// $data['product'] = $this->product_retrive_user_model->productfordetail(35);
			// $this->load->view('Admin/order',$data);

			$data['orders'] = $this->order_model_admin->get_all_orders();
			// $data['products'] = array(); // Initialize an empty array to store products

			// foreach($data['orders'] as $order) {
			//     $product_id = $order['product_id'];

			//     $product = $this->product_retrive_user_model->productfordetail($product_id);
			    
			// }
			// $data['products'][] = $product; // Store each product in the array
			$this->load->view('Admin/order', $data);

					}
	
	public function sell($id){
		$result =$this->order_model_admin->sell($id);


		if($result == true){
			$this->order_model_admin->update($id);
			redirect('Admin/Order');


		}
		else{
			redirect('Admin/Order');

		}


	}
	 public function soldorder()
	{
		  $email = $this->session->userdata('logged_in');
		$data['orders'] = $this->order_model_admin->get_all_soldorders();
		$data['user'] = $email;
		$this->load->view('Admin/soldorder', $data);
	}
	public function delete($id){
		$this->order_model_admin->deleteorder($id);

		redirect('Admin/Order');

	}

}
?>