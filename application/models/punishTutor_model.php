<?php
	class punishTutor_model extends CI_Model
	{
		function __construct()
		{
			parent::__construct();
		}
		public function getstatus($username)
		{
			$query = "SELECT * FROM `transaksi` WHERE `username_tutor` = '$username'";
			$hasil = $this->db->query($query);
			return $hasil->result();
		}
	}
?>