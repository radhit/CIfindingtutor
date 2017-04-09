<?php
	class cancelTransaksi_model extends CI_Model
	{
		function __construct()
		{
			parent::__construct();
		}

		public function cancelByTransaksi($qr_codes)
		{
			$query = "UPDATE transaksi SET status_transaksi = 'cancel' WHERE qr_codes = '$qr_codes'";
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