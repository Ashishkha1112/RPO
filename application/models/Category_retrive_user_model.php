<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Category_retrive_user_model extends CI_Model {


	public function get_all_categories()
	{	
		$sql = "select * from categories where category_status=0";

		$query = $this->db->query($sql);

		//returns value as array
		return $query->result_array();
	}
}