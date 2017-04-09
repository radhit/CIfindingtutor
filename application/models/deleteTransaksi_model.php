<?php
	class deleteTransaksi_model extends CI_Model
	{
		function __construct()
		{
			parent::__construct();
		}

		public function deleteByTransaksi($qr_codes)
		{
			$query = "DELETE FROM `transaksi` WHERE `qr_codes` = '$qr_codes'";
			$hasil = $this->db->query($query);
			if($hasil)
			{
				return true;
			}
			else
			{
				return false;
			}	
		}
	}
?>