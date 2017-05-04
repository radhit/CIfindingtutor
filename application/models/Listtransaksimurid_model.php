<?php
	class Listtransaksimurid_model extends CI_Model
	{
		function __construct()
		{
			parent::__construct();
		}
		public function cekData($id_user)
		{
			$query = "SELECT * FROM `pencarian_tutor` WHERE `id_user` = '$id_user' AND `status_pencarian` = 1";
			$hasil = $this->db->query($query);
			return $hasil->num_rows();
		}
		public function getTransaksi($id_user)
		{
			$history = "SELECT * FROM `pencarian_tutor` pt, `transaksi` t, `user` u WHERE pt.`id_pencariantutor` = t.`id_pencariantutor` AND u.`username_user` = t.`username_tutor` AND pt.`id_user` = '$id_user'";
			// $usernametutor = "SELECT `username_tutor` FROM `history_transaksi` WHERE ``"
			// $hasil = array();
			// $hasil['user'] = $this->db->query($history)->result();
			$hasil = $this->db->query($history);
			return $hasil->result();
		}

	}
?>