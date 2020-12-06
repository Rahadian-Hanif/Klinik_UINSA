<?php
	class m_daftar  extends CI_Model  {


		function daftar($nim,$pegawai_id,$tanggal,$antrian,$jam)
		{
			$sql=$this->db->query(
				"INSERT INTO `pengunjung`(`pasien_nim_nip`, `pegawai_id`, `no_pengunjung`, `tanggal`, `antrian`, `jam`) SELECT '$nim','$pegawai_id',COUNT(antrian)+1,'$tanggal','$antrian','$jam'  FROM pengunjung WHERE tanggal='$tanggal'"
			);
	        return $sql;
		}
	}
?>