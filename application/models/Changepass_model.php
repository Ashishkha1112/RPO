<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Changepass_model extends CI_Model {

	public function update($data)
	{
		$sql = "update useradmin set Password ='".$data['password']."' where Email = '".$data['email']."'";

		$res = $this->db->query($sql);

		return $res;
	}
}