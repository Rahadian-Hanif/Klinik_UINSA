<?php
	class m_pasien  extends CI_Model  {


		function validate($nim,$password){
		    $this->db->where('nim_nip',$nim);
		    $this->db->where('password',$password);
		    $result = $this->db->get('pasien',1);
		    return $result;
		}

		function load_data($tanggal)
		{
			$sql=$this->db->query("SELECT COUNT(no_pengunjung) as total FROM `pengunjung` WHERE tanggal='$tanggal'");
	        return $sql;
		}

		function riwayat_antrian($nim)
		{
			$sql=$this->db->query("SELECT `antrian`, `tanggal` FROM `pengunjung` WHERE pasien_nim_nip='$nim' ORDER BY tanggal DESC LIMIT 5");
	        return $sql;
		}

		function daftar($nim,$tanggal,$antrian,$jam)
		{
			$sql=$this->db->query("INSERT INTO `pengunjung`(`pasien_nim_nip`, `no_pengunjung`, `tanggal`, `antrian`, `jam`) SELECT '$nim',COUNT(antrian)+1,'$tanggal','$antrian','$jam'  FROM pengunjung WHERE tanggal='$tanggal'");
	        return $sql;
		}
	}