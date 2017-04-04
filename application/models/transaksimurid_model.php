<?php
	class transaksimurid_model extends CI_Model
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
		public function getData($username)
		{
			$getusernametutor = "SELECT * FROM `transaksi` WHERE `username_murid` = '$username'";
			$usernametutor = $this->db->query($getusernametutor)->result();
			foreach ($usernametutor as $row) {
				$tutor=$row->username_tutor;
				$idpencariantutor = $row->id_pencariantutor;
				$qrcode = $row->qr_codes;
			}

			$datatutor = "SELECT * FROM `user` WHERE `username_user`= '$tutor'";
			$query = "SELECT * FROM `pencarian_tutor` WHERE `id_pencarian` = '$idpencariantutor'";
			$hasil = array();
			$hasil['data_transaksi'] = $qrcode;
			$hasil['transaksi'] = $this->db->query($query)->result();
			$hasil['data_tutor'] = $this->db->query($datatutor)->result();
			return $hasil;
		}
	}
?>