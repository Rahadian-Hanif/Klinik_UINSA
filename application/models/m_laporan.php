<?php
	class M_laporan  extends CI_Model  {


		function bulan_ini($bulan)
		{
			$sql=$this->db->query("SELECT COUNT(antrian) as bulan FROM `pengunjung` WHERE DATE_FORMAT(tanggal, '%Y/%m')='$bulan'");
	        return $sql;
		}

		function pemasukan($bulan)
		{
			$sql=$this->db->query("SELECT SUM(`biaya`) AS total FROM `rekamedis` WHERE DATE_FORMAT(tanggal, '%Y/%m')='$bulan'");
	        return $sql;
		}

		function pemasukan_tahunan($thn)
		{
			$sql=$this->db->query("SELECT SUM(`biaya`) AS total FROM `rekamedis` WHERE DATE_FORMAT(tanggal, '%Y')='$thn'");
	        return $sql;
		}

		function thn_ini($thn)
		{
			$sql=$this->db->query("SELECT COUNT(antrian) AS bulan FROM `pengunjung` WHERE DATE_FORMAT(tanggal, '%Y')='$thn'");
	        return $sql;
		}

		function tabel($bulan)
		{
			$sql=$this->db->query("SELECT `pasien_nim_nip`,`tanggal`,`poli`,`biaya` FROM `rekamedis` WHERE DATE_FORMAT(tanggal, '%Y/%m')='$bulan'");
	        return $sql;
		}
	}
?>