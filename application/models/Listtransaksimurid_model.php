<?php
	class Listtransaksimurid_model extends CI_Model
	{
		function __construct()
		{
			parent::__construct();
		}
		public function cekData($username)
		{
			$query = "SELECT * FROM `transaksi` WHERE `username_murid` = '$username' AND `status_transaksi` = 0";
			$hasil = $this->db->query($query);
			return $hasil->num_rows();
		}
		public function getTransaksi($username)
		{
			$history = "SELECT * FROM `pencarian_tutor` pt, `transaksi` t, `user` u WHERE pt.`id_pencarian`=t.`id_pencariantutor` AND pt.`username_pencarian` = '$username' AND t.`username_tutor` = u.`username_user`";
			// $usernametutor = "SELECT `username_tutor` FROM `history_transaksi` WHERE ``"
			// $hasil = array();
			// $hasil['user'] = $this->db->query($history)->result();
			$hasil = $this->db->query($history);
			return $hasil->result();
		}

	}
?>