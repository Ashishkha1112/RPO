<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Category_model extends CI_Model {
	public function insert($data){
	//	applicable only of data is already stored in array in controller 
		$this->db->insert('categories',$data);
	}
	public function get_all_categories(){
		
		$sql = "select * from categories where category_status=0;";

		$query = $this->db->query($sql);

		//returns value as array
		return $query->result_array();
	}

	// For fecthing the data of particular id on edit
	function categoryforedit($id)
	{
		$sql = "select * from categories where category_id = '$id';";

		$res = $this->db->query($sql);
		
		return $res->result();
	}
	function categorybyidforimage($id)
	{
		$sql = "select * from categories where category_id = '$id';";

		$res = $this->db->query($sql);
		
		return $res->row_array();
	}
	
	// For Saving the data that is edit
	function EditCategory($id, $newData)
	{
	    $this->db->where('category_id', $id);
	    return $this->db->update('categories', $newData);
	}

	function DeleteCategory($id)
	{

		return $this->db->query("update categories set category_status = 1 where category_id='$id'");
	}

	public function check_category_exists($category_name)
	{
	    $this->db->where('category_name', $category_name);
	    $query = $this->db->get('categories');

	    return ($query->num_rows() > 0);
	}


}