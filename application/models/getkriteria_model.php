<?php
	class getkriteria_model extends CI_Model
	{
		function __construct()
		{
			parent::__construct();
		}
		public function getKriteria($username)
		{
			$query = "SELECT * FROM `history_kriteria` WHERE `username_history` = '$username'";
			$hasil = $this->db->query($query);
			return $hasil->result();
		}
		public function jumlahKriteria($username)
		{
			$query = "SELECT * FROM `history_kriteria` WHERE `username_history` = '$username'";
			$hasil = $this->db->query($query);
			return $hasil->num_rows();
		}

	}
?>