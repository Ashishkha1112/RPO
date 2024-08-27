<?php 
	defined('BASEPATH') OR exit('No direct script access allowed');
	class Productshow extends CI_Controller {

		public function __construct()
    	{
        parent::__construct();
        $this->load->model('productshow_model');
        $this->load->library('form_validation');
        	$this->load->model('Userview_model');
			    $email = $this->session->userdata('logged_in');
			    $data['useradminn'] = $this->Userview_model->userss(['email' => $email]); // Pass email in an array
			    
			    $this->load->view('Admin/includes/header',$data);

    	}
	
		public function index()
		{
			$data['product']= $this->productshow_model->product();

			$this->load->view('Admin/productshow',$data);
		}

		public function deleteproduct($id)
		{
			//$idd = $this->input->post($id);
			// echo '<pre>';print_r($id); exit;

			$result=$this->productshow_model->DeleteProduct($id);

			if($result==true)
			{
				$this->session->set_flashdata("message","Product Delete successful");
				redirect('admin/productshow');
			}
			else
			{
				$this->session->set_flashdata("message","Product Delete usuccessful");
				redirect('admin/productshow');
			}
		}
	

		public function editproduct($id)
			{
			    $data['product'] = $this->productshow_model->productforedit($id);
			    $this->load->view('Admin/editproduct', $data);
			}

		public function saveproduct($id)
		{	
		    $this->form_validation->set_rules('ProductName','Product Name','required|trim|min_length[3]|max_length[20]');
		    $this->form_validation->set_rules('ProductPrice','Product price','required|regex_match[/^\d+(\.\d{1,2})?$/]');
		    $this->form_validation->set_rules('ProductDescription','Product Description','required');
		    
		    $product = $this->productshow_model->get_product_by_id($id);

		    // echo "<pre>"; print_r($_FILES); exit;

		    if ($this->form_validation->run() === false)
		    {
		    	$a = $product['product_id'];
		        $this->session->set_flashdata("message","Data does not saved");
		        //for loading view with data
		        $data['product'] = $this->productshow_model->productforedit($a);
			    $this->load->view('Admin/editproduct', $data);
		    } 
		    else{
	        $config['upload_path']   = './assets/uploads/productimg/';
	        $config['allowed_types'] = 'gif|jpg|png';
	        $config['max_size']      = 1024;
	     
	        $this->load->library('upload', $config);

	        if($_FILES['new_product_image_front']['name'] != ""){
		        // Upload and process images one by one
		        $this->upload->do_upload('new_product_image_front');
	            $data1 = array('upload_data' => $this->upload->data());
	        }else{
	        	$data1['upload_data']['file_name'] = $product['product_image_front'];
	        }

	        if($_FILES['new_product_image_back']['name'] != ""){

            	$this->upload->do_upload('new_product_image_back');
            	$data2 = array('upload_data' => $this->upload->data());
    		}else{
    			$data2['upload_data']['file_name'] = $product['product_image_back'];
    		}

    		if($_FILES['new_product_image_top']['name'] != ""){

	            $this->upload->do_upload('new_product_image_top');
	            $data3 = array('upload_data' => $this->upload->data());
            }else{
            	$data3['upload_data']['file_name'] = $product['product_image_top'];
            }
            if($_FILES['new_product_image_bottom']['name'] != ""){

	            $this->upload->do_upload('new_product_image_bottom');
	            $data4 = array('upload_data' => $this->upload->data());

	        }else{
	        	$data4['upload_data']['file_name'] = $product['product_image_bottom'];
	        }


		    $newData = array(
		        'product_name' => $this->input->post('ProductName'),
		        'product_price' => $this->input->post('ProductPrice'),
		        'product_description' => $this->input->post('ProductDescription'),
		        'product_image_front' => $data1['upload_data']['file_name'],
                'product_image_back' => $data2['upload_data']['file_name'],
                'product_image_top' => $data3['upload_data']['file_name'],
                'product_image_bottom' => $data4['upload_data']['file_name']
		    );
			    $result = $this->productshow_model->EditProduct($id, $newData);

			    if ($result == true) {
			        $this->session->set_flashdata("message", "Product edit successful");
			        redirect('admin/productshow');
			    } else {
			        $this->session->set_flashdata("message", "Product edit unsuccessful");
			        redirect('admin/editproduct/' . $id);
			    }
			}	
	}
	public function verify($id){

		$result = $this->productshow_model->productverify($id);
			   // $this->load->view('Admin/editproduct', $data);
			    if($result==true)
			{
				$this->session->set_flashdata("message","Product verified successfully");
				redirect('admin/productshow');
			}
	}
}

?>