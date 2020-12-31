<?php
	class M_pasien  extends CI_Model  {


		function validate($nim,$password){
		    $this->db->where('nim_nip',$nim);
		    $this->db->where('password',$password);
		    $result = $this->db->get('pasien',1);
		    return $result;
		}

		function riwayat_antrian($nim)
		{
			$sql=$this->db->query("SELECT antrian,status,DATE_FORMAT(tanggal, '%d %M %Y') as tanggal FROM `pengunjung` WHERE pasien_nim_nip='$nim' ORDER BY id DESC LIMIT 5");
	        return $sql;
		}

		function daftar($nim,$tanggal,$antrian,$jam,$status)
		{
			$sql=$this->db->query("INSERT INTO `pengunjung`(`pasien_nim_nip`, `no_pengunjung`, `tanggal`, `antrian`, `jam`,`status`) SELECT '$nim',COUNT(antrian)+1,'$tanggal','$antrian','$jam','$status'  FROM pengunjung WHERE tanggal='$tanggal'");
	        return $sql;
		}

		function print($nim)
		{
			$sql=$this->db->query("SELECT * FROM `pengunjung` WHERE pasien_nim_nip='$nim' ORDER BY id DESC LIMIT 1");
	        return $sql;
		}
	}		