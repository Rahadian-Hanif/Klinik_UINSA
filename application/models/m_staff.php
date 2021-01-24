<?php
	class M_staff  extends CI_Model  {


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

		function count_tunggu($tanggal)
		{
			$sql=$this->db->query("SELECT COUNT(no_pengunjung)-1 as total FROM `pengunjung` WHERE tanggal='$tanggal' AND status='menunggu'");
	        return $sql;
		}

		function count_selesai($tanggal)
		{
			$sql=$this->db->query("SELECT COUNT(no_pengunjung) as total FROM `pengunjung` WHERE tanggal='$tanggal' AND status='selesai'");
	        return $sql;
		}

		function antrian_sekarang($tanggal)
		{
			$sql=$this->db->query("SELECT no_pengunjung FROM `pengunjung` WHERE `tanggal`='$tanggal' AND `status`='menunggu' ORDER BY no_pengunjung ASC LIMIT 1");
	        return $sql;
		}

		function update($no,$tanggal)
		{
			$sql=$this->db->query("UPDATE `pengunjung` SET `status`='selesai' WHERE `no_pengunjung`='$no' AND `tanggal`='$tanggal'");
	        return $sql;
		}

		function no($tanggal)
		{
			$sql=$this->db->query("SELECT no_pengunjung FROM `pengunjung` WHERE `tanggal`='$tanggal' AND `status`='menunggu' ORDER BY no_pengunjung ASC LIMIT 1");
	        return $sql;
		}
	}
?>