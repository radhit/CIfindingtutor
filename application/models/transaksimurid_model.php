<?php
	class Transaksimurid_model extends CI_Model
	{
		function __construct()
		{
			parent::__construct();
		}

		public function getData($id)
		{
			$getusernametutor = "SELECT * FROM `transaksi` WHERE `id_transaksi` = '$id'";
			$usernametutor = $this->db->query($getusernametutor)->result();
			foreach ($usernametutor as $row) {
				$tutor=$row->username_tutor;
				$idpencariantutor = $row->id_pencariantutor;
				$qrcode = $row->qr_codes;
			}

			$datatutor = "SELECT * FROM `user` WHERE `username_user`= '$tutor'";
			$query = "SELECT * FROM `pencarian_tutor` WHERE `id_pencariantutor` = '$idpencariantutor'";
			$hasil = array();
			$hasil['data_transaksi'] = $qrcode;
			$hasil['transaksi'] = $this->db->query($query)->result();
			$hasil['data_tutor'] = $this->db->query($datatutor)->result();
			return $hasil;
		}
	}
?>