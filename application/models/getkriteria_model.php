<?php
	class Getkriteria_model extends CI_Model
	{
		function __construct()
		{
			parent::__construct();
		}
		public function getKriteria($id_user)
		{
			$query = "SELECT * FROM `history_kriteria` WHERE `id_user` = '$id_user'";
			$hasil = $this->db->query($query);
			return $hasil->result();
		}
		public function jumlahKriteria($username)
		{
			$query = "SELECT * FROM `history_kriteria` WHERE `id_user` = '$id_user'";
			$hasil = $this->db->query($query);
			return $hasil->num_rows();
		}

	}
?>