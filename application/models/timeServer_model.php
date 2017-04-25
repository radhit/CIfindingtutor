<?php
	class TimeServer_model extends CI_Model
	{
		function __construct()
		{
			parent::__construct();
		}

		public function getDurasiByTransaksi($qr_codes)
		{
			$query = "SELECT * FROM transaksi WHERE qr_codes = '$qr_codes'";
			$hasil = $this->db->query($query);
			return $hasil->result();
		}
	}
?>