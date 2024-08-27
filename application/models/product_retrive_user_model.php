<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class product_retrive_user_model extends CI_Model {

	public function product()
	{
		$sql = "select * from product where product_status = 0 AND verify_status =1;";

		$res = $this->db->query($sql);
		

		//Result in array
		return $res->result_array();
	}
	//
	public function productformodal()
	{
		$sql = "select * from product where product_status = 0 AND  verify_status = 1;";

		$res = $this->db->query($sql);
		

		//Result in array
		return $res->result();
	}
	//productbycategoryid
	public function product_by_category($id){
		$sql = "select * from product where category_id = $id and product_status= 0 and verify_status =1";
		$res = $this->db->query($sql);
		return $res->result_array();
	}
	//productbyproductid
	public function productfordetail($id)
	{
		$sql = "select * from product left join categories on categories.category_id = product.category_id where product.product_id = $id and product.product_status = 0  and verify_status =1 ";

		$res = $this->db->query($sql);
		

		//Result in array
		return $res->row_array();	
	}
	//for place order to fetch the price and product name
	public function productfordetaill($id)
	{
		$sql = "select * from product left join categories on categories.category_id = product.category_id where product.product_id = $id and product.product_status = 0  and verify_status =1 ";

		$res = $this->db->query($sql);
		

		//Result in array
		return $res->result_array();	
	}
	//for order
	public function place_order($data)
	{
	    $this->db->insert('orders', $data);

	    return $this->db->insert_id(); // Return the ID of the inserted order
	}
	function checkorder($data){
	$sql = "select * from orders where product_id ='".$data['product_id']."' and  username= '".$data['username']."' ";
	$res = $this->db->query($sql);
	return $res->num_rows();
	}
		function searchbyname($s)
		{
		    $this->db->select('*');
		    $this->db->from('product');
		    $this->db->like('product_name', $s);
		    $this->db->where('product_status', 0);
		    $this->db->where('verify_status', 1);

		    return $this->db->get()->result_array();
		}
}
?>