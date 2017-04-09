<?php
	class punishMurid_model extends CI_Model
	{
		function __construct()
		{
			parent::__construct();
		}
		public function getstatus($username)
		{
			$query = "SELECT * FROM `transaksi` WHERE `username_murid` = '$username'";
			$hasil = $this->db->query($query);
			return $hasil->result();
		}
	}
?>