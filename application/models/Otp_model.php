<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Otp_model extends CI_Model {

	public function verify($data)
	{ 
		// print_r($data);
		// exit;
		$sql = "select * from tbl_otp where email = '".$data['email']."' and  Otp ='".$data['Otp']."' ";

		$res = $this->db->query($sql);
		return $res->num_rows();
	}
	public function delete_otp($data)
	{
		$delsql = "delete  from tbl_otp where email= '".$data['email']."'";
		$this->db->query($delsql);

	}
}