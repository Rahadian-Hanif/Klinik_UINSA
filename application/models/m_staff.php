<?php
	class m_staff  extends CI_Model  {


		function validate($username,$password){
		    $this->db->where('username',$username);
		    $this->db->where('password',$password);
		    $result = $this->db->get('pegawai',1);
		    return $result;
		}

		function load_data($tanggal)
		{
			$sql=$this->db->query("SELECT COUNT(no_pengunjung) as total FROM `pengunjung` WHERE tanggal='$tanggal'");
	        return $sql;
		}
	}
?>