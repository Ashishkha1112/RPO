<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Category extends CI_Controller {

		public function __construct()
    	{
        parent::__construct();
        $this->load->model('product_retrive_user_model');
        $this->load->model('category_model');
        $this->load->model('product_model');
        $this->load->library('form_validation');
        $this->load->library('session');
        $this->load->model('Userview_model');
    	}
	
		public function show($id)
		{
			$data['product']= $this->product_retrive_user_model->product_by_category($id);
			$data['categories'] = $this->category_model->get_all_categories();
			$this->load->view('User/home',$data);
		}
		public function productdetail($id, $cid)
		{
			$data['product']= $this->product_retrive_user_model->productfordetail($id);
			// echo "<pre>"; print_r($data); exit;
			$data['related_product']= $this->product_retrive_user_model->product_by_category($cid);
			$this->load->view('User/productdetailuser',$data);
		}
		//for billing page
		public function placeorder($id){
			if(!isset($this->session->userdata['logged_inn'])){
				$this->load->view('user/userLogin');
			}
			else
			{
				 $email = $this->session->userdata('logged_inn');
			 $data['usersss'] = $this->Userview_model->userss(['email' => $email]); 

			$data['product']= $this->product_retrive_user_model->productfordetaill($id);
			$this->load->view('user/purchase',$data);
			}	

			
		}

		//for placing order
		public function place_order($id)

		{
			    $data = array(
		        'ordered_by' => $this->input->post('firstName'),
		        'username' => $this->input->post('email'),
		        'phone' => $this->input->post('phone'),
		        'address' => $this->input->post('address'),
		        'city' => $this->input->post('city'),
		        'product_id' => $id,
		        'order_date' => date('Y-m-d H:i:s')
		    );


			$result =$this->product_retrive_user_model->checkorder($data);

			if($result==true){

				$this->session->set_flashdata('place','Order is already placed for this product ');
				redirect('welcome');

			}else{

			
		
		    $order_id = $this->product_retrive_user_model->place_order($data);

		    if ($order_id == true) {
		    	$this->session->set_flashdata('place_order','Order placed successfully. ');
		    	redirect('welcome');
		        //echo "Order placed successfully. Order ID: " . $order_id;
		    } else {
		    	$this->session->set_flashdata('place_order','Order placed failed.');
		    	redirect('welcome');
		        
		    }

			}
		}
		public function sell(){
			if(!isset($this->session->userdata['logged_inn'])){
				$this->load->view('user/userLogin');
			}
			else
			{
				$data['categories']  = $this->category_model->get_all_categories();

			$this->load->view('user/usersell',$data);
			}	
			
		}

    public function add_product()
        {
        	  $email= $this->session->userdata('logged_inn');

        $this->form_validation->set_rules('product_category', 'Product category', 'required');
        $this->form_validation->set_rules('product_name', 'Product Name', 'required|trim|min_length[3]|max_length[20]');
        $this->form_validation->set_rules('product_price', 'Product price', 'required|regex_match[/^\d+(\.\d{1,2})?$/]');
        $this->form_validation->set_rules('product_description', 'Product Description', 'required');

        if ($this->form_validation->run() === false)
        {
            $this->session->set_flashdata("message", "Data does not saved");
            $this->load->view('User/usersell');
            //redirect('category/sell');
        }
        else
        {
            $config['upload_path']   = './assets/uploads/productimg/';
            $config['allowed_types'] = 'gif|jpg|png';
            $config['max_size']      = 1024;
            $config['max_width']     = 1280;
            $config['max_height']    = 720;

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
            redirect('welcome');
        }
    }
    public function search()
	    {
		    $data['product'] = $this->product_retrive_user_model->searchbyname($this->input->post('search'));
			$this->load->view('User/searchedproduct',$data);
	    }

	}
?>
