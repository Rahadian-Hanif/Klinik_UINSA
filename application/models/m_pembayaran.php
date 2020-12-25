<?php
	class m_pembayaran  extends CI_Model  {

		function pasien($tanggal)
		{
			$sql=$this->db->query("SELECT * FROM `rekamedis` WHERE `tanggal`='$tanggal'");
	        return $sql;
		}
	}		