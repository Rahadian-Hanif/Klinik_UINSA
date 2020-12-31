<?php
	class M_rekamedis  extends CI_Model  {


		function load_data()
		{
			$sql=$this->db->query("SELECT * FROM pasien");
	        return $sql;
		}

		function search($nama)
		{
			$sql=$this->db->query("SELECT * FROM `pasien` WHERE `nama` LIKE '$nama%'");
	        return $sql;
		}

		function view($nim)
		{
			$sql=$this->db->query("SELECT * FROM `rekamedis` WHERE pasien_nim_nip ='$nim'");
	        return $sql;
		}

		function view_bio($nim)
		{
			$sql=$this->db->query("SELECT nama, tgl_lahir,riwayat FROM `pasien` WHERE nim_nip='$nim'");
	        return $sql;
		}

		function tambah($nim,$penanganan,$tanggal,$diagnosis)
		{
			$sql=$this->db->query("INSERT INTO `rekamedis`(`pasien_nim_nip`, `penanganan`, `tanggal`, `diagnosis`) VALUES ('$nim','".$this->db->escape_str($penanganan)."',DATE_FORMAT('$tanggal', '%Y/%m/%d'),'".$this->db->escape_str($diagnosis)."')");
	        return $sql;
		}

		function hapus($id)
		{
			$sql=$this->db->query("DELETE FROM `rekamedis` WHERE id='$id'");
	        return $sql;
		}
	}
?>