<?php
defined('BASEPATH') OR exit('No direct script access allowed ');

class Userview_model extends CI_Model{

public function users(){

	$sql ="select * from useradmin where usertype = 'Admin';";

	$res= $this->db->query($sql);
	return $res->result_array();
}
//for profile information
public function userss($data){

	$sql ="select * from useradmin where Email = '".$data['email']."'";

	$res= $this->db->query($sql);
	return $res->result_array(); 
}

public function Deleteuser($id){


	return $this->db->query("update useradmin set status = 1 where id='$id'");
}
public function user1(){

	$sql ="select * from useradmin where usertype = 'User';";

	$res= $this->db->query($sql);
	return $res->result_array();
}

}