
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class forgotpass_model extends CI_Model {

	public function forgotpass($data)
	{
		$sql = "select * from useradmin where email = '".$data['email']."' AND usertype = 'Admin'";

		$res = $this->db->query($sql);
		return $res->num_rows();
	}
	public function insert($OTPcode){
		$this->db->insert('tbL_otp',$OTPcode);
	}
public function forgotpass1($data)
	{
		$sql = "select * from useradmin where email = '".$data['email']."' AND usertype = 'User'";

		$res = $this->db->query($sql);
		return $res->num_rows();
	}
}
?>