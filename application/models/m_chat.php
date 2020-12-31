<?php
	class M_chat  extends CI_Model  {


		function load_data()
		{
			$sql=$this->db->query("SELECT `id`,`nama`, `posisi` FROM `pegawai` WHERE status='dokter'");
	        return $sql;
		}

		function kirim_chat($nim,$cht,$pengirim,$waktu,$pegawai_id){
		    $sql=$this->db->query("INSERT INTO `chat`(`pasien_nip_nim`, `cht`, `pengirim`, `waktu`, `pegawai_id`) VALUES ('$nim','".$this->db->escape_str($cht)."','$pengirim','$waktu','$pegawai_id')");
		    return $sql;
		}

		function info_dokter($id){
		    $sql=$this->db->query("SELECT `nama`, `posisi` FROM `pegawai` WHERE id='$id'");
		    return $sql;
		}

		function load_chat($nim,$id_dokter){
		    $sql=$this->db->query("SELECT pasien.nama,pegawai.nama,cht,waktu,pengirim FROM `chat`,pasien,pegawai WHERE pasien.nim_nip=pasien_nip_nim AND pegawai.id=pegawai_id AND pasien_nip_nim='$nim' AND pegawai_id='$id_dokter'");
		    return $sql;
		}


		//Staf Chat

		function staff_load_data($id)
		{
			$sql=$this->db->query("SELECT DISTINCT pasien_nip_nim,pasien.nama FROM `chat`,pasien WHERE chat.pegawai_id='$id' AND pasien_nip_nim=pasien.nim_nip");
	        return $sql;
		}
	}
?>