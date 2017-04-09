<?php
	class addhistory_model extends CI_Model
	{
		function __construct()
		{
			parent::__construct();
		}
		public function getUsernameTutor($qrcode)
		{
			$query = "SELECT * FROM `transaksi` WHERE `qr_codes` = '$qrcode'";
			$hasil = $this->db->query($query);
			return $hasil->result();
		}
		public function tambahHistory($id, $username)
		{
			$query = "INSERT INTO `history_transaksi`(`id_pencariantutor`, `username_tutor`) VALUES ('$id', '$username');";

				if($this->db->query($query))
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