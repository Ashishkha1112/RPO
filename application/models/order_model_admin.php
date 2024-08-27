<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class order_model_admin extends CI_Model {

	public function get_all_orders(){
		
		$sql = "select * from orders left join product on product.product_id = orders.product_id where orders.order_status=0 ";

		$query = $this->db->query($sql);

		//returns value as array
		return $query->result_array();
	}
	public function sell($id){

		return $this->db->query("update orders set order_status = 1 where product_id='$id'");
	}
	public function update($id){

		 $this->db->query("update product set product_status = 2 where product_id='$id'");

	}
	public function get_all_soldorders(){
		
		$sql = "select * from orders left join product on product.product_id = orders.product_id where orders.order_status= 1 ";

		$query = $this->db->query($sql);

		//returns value as array
		return $query->result_array();
	}
	public function deleteorder($id){

		 $this->db->query("delete from orders where order_id='$id'");

	}

}
?>