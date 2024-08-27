<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_model extends CI_Model {

	public function loginadmin($data)
	{
	 	$sql = "select * from useradmin where email = '".$data['email']."' AND password = '".md5($data['password'])."' AND status = 0  AND usertype ='Admin' ";

		$res = $this->db->query($sql);
		return $res->num_rows();
	}
	   public function login($data)
	    {
	       $sql = "select * from useradmin where email = '".$data['email']."' AND password = '".md5($data['password'])."' AND status = 0";

		$res = $this->db->query($sql);
		return $res->num_rows();
	    }
}
