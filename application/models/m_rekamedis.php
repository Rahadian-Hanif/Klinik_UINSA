<?php
	class m_rekamedis  extends CI_Model  {


		function load_data()
		{
			$sql=$this->db->query("SELECT * FROM pasien");
	        return $sql;
		}

		function view($nim)
		{
			$sql=$this->db->query("SELECT * FROM `rekamedis` WHERE pasien_nim_nip ='$nim'");
	        return $sql;
		}

		function view_bio($nim)
		{
			$sql=$this->db->query("SELECT nama, tgl_lahir,alergi FROM `pasien` WHERE nim_nip='$nim'");
	        return $sql;
		}

		function tambah($nim,$penanganan,$tanggal,$diagnosis)
		{
			$sql=$this->db->query("INSERT INTO `rekamedis`(`pasien_nim_nip`, `penanganan`, `tanggal`, `diagnosis`) VALUES ('$nim','$penanganan',DATE_FORMAT('$tanggal', '%Y/%m/%d'),'$diagnosis')");
	        return $sql;
		}

		function hapus($id)
		{
			$sql=$this->db->query("DELETE FROM `rekamedis` WHERE id='$id'");
	        return $sql;
		}
	}
?>