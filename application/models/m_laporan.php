<?php
	class m_laporan  extends CI_Model  {


		function bulan_ini($bulan)
		{
			$sql=$this->db->query("SELECT COUNT(antrian) as bulan FROM `pengunjung` WHERE DATE_FORMAT(tanggal, '%Y/%m')='$bulan'");
	        return $sql;
		}

		function bulan_lalu($bulan)
		{
			$sql=$this->db->query("SELECT COUNT(antrian) as bulan FROM `pengunjung` WHERE DATE_FORMAT(tanggal, '%m')='$bulan'");
	        return $sql;
		}
	}
?>