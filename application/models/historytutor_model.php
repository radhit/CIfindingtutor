<?php
	class Historytutor_model extends CI_Model
	{
		function __construct()
		{
			parent::__construct();
		}
		public function getHistory($username)
		{
			$history = "SELECT * FROM `pencarian_tutor` pt, `history_transaksi` ht WHERE pt.`id_pencarian`=ht.`id_pencariantutor` AND ht.`username_tutor`='$username'";
			// $usernametutor = "SELECT `username_tutor` FROM `history_transaksi` WHERE ``"
			// $hasil = array();
			// $hasil['user'] = $this->db->query($history)->result();
			$hasil = $this->db->query($history);
			return $hasil->result();
		}

	}
?>