<?php
	class m_staff  extends CI_Model  {


		function validate($username,$password){
		    $this->db->where('username',$username);
		    $this->db->where('password',$password);
		    $result = $this->db->get('pegawai',1);
		    return $result;
		}
	}
?>