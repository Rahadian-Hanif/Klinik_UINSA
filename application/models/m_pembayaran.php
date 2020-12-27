<?php
	class m_pembayaran  extends CI_Model  {

		function pasien($tanggal)
		{
			$sql=$this->db->query("SELECT * FROM `rekamedis` WHERE `tanggal`='$tanggal'");
	        return $sql;
		}

		function load_bayar($id)
		{
			$sql=$this->db->query("SELECT * FROM `rekamedis` WHERE `id`='$id'");
	        return $sql;
		}

		function update_bayar($id,$biaya,$poli)
		{
			$sql=$this->db->query("UPDATE `rekamedis` SET `biaya`='$biaya',`poli`='$poli' WHERE `id`='$id'");
	        return $sql;
		}
	}		