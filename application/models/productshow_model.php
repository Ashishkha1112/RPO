<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class productshow_model extends CI_Model {

	public function product()
	{
		$sql = "select * from product where product_status = 0;";

		$res = $this->db->query($sql);
		
		return $res->result_array();
	}
	function productforedit($id)
	{
		$sql = "select * from product where product_id = '$id';";

		$res = $this->db->query($sql);
		
		return $res->result();
	}

	function get_product_by_id($id)
	{
		$sql = "select * from product where product_id = '$id';";

		$res = $this->db->query($sql);
		
		return $res->row_array();
	}

	function DeleteProduct($id)
	{

		return $this->db->query("update product set product_status = 1 where product_id='$id'");
	}
	
	function EditProduct($id, $newData)
	{
	    $this->db->where('product_id', $id);
	    return $this->db->update('product', $newData);
	}
function productverify($id)
	{

		return $this->db->query("update product set verify_status = 1 where product_id='$id'");
	}

public function producttt($data)
	{
		$sql = "select * from product where product_status = 0 and  Email = '".$data['email']."' ";

		$res = $this->db->query($sql);
		
		return $res->result_array();
	}
	public function productsell($data)
	{
		$sql = "select * from product where product_status = 2 and  Email = '".$data['email']."' ";

		$res = $this->db->query($sql);
		
		return $res->result_array();
	}


}