<?php
	class M_daftar  extends CI_Model  {


		function daftar($nim,$pegawai_id,$tanggal,$antrian,$jam,$status)
		{
			$sql=$this->db->query(
				"INSERT INTO `pengunjung`(`pasien_nim_nip`, `pegawai_id`, `no_pengunjung`, `tanggal`, `antrian`, `jam`,`status`) SELECT '$nim','$pegawai_id',COUNT(antrian)+1,'$tanggal','$antrian','$jam','$status'  FROM pengunjung WHERE tanggal='$tanggal'"
			);
	        return $sql;
		}

		function load_data($tanggal)
		{
			$sql=$this->db->query("SELECT * FROM `pengunjung` WHERE tanggal='$tanggal' ORDER BY no_pengunjung DESC LIMIT 20 ");
	        return $sql;
		}

		function validate($nim){
		    $this->db->where('nim_nip',$nim);
		    $result = $this->db->get('pasien',1);
		    return $result;
		}
	}
?>