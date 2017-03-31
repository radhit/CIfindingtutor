<?php
	class transaksiDurasi_model extends CI_Model
	{
		function __construct()
		{
			parent::__construct();
		}
		public function updateStatus($qr_codes)
		{
			$query = "UPDATE `transaksi` SET `status_transaksi`= `status_transaksi`+1 WHERE `qr_codes` = '$qr_codes'";

			if($this->db->query($query))
			{
				return true;
			}
			else
			{
				return false;
			}		
		}

		public function getDurasiByTransaksi($qr_codes)
		{
			$query = "SELECT * FROM transaksi WHERE qr_codes = '$qr_codes'";
			$hasil = $this->db->query($query);
			return $hasil->result();
		}


	}
?>