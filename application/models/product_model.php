<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class product_model extends CI_Model {
	public function insert($data){
	//	applicable only of data is already stored in array in controller 
		$this->db->insert('product',$data);
	}

	//   public function getCategories()
    // {
    //     $sql = "select * from categories";
    //     $res = $this->db->query($sql);
    //     return $res->num_rows();
    // }
}