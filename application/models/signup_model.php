<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class signup_model extends CI_Model {
	public function signup($data){
		$this->db->insert('useradmin',$data);
	}
}