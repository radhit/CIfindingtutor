<?php
	class Profile_model extends CI_Model
	{
		function __construct()
		{
			parent::__construct();
		}
		public function getProfile($id_user)
		{
			$query = "SELECT * FROM `user`WHERE `id_user` = '$id_user'";
			$hasil = array();
			$hasil['user'] = $this->db->query($query)->result();
			$hari = "SELECT `hari_tutor`FROM `ketersediaan_hari` WHERE `id_user` = '$id_user'";
			$hasil['hari'] = $this->db->query($hari)->result();
			return $hasil;
		}


		public function getProfileMurid($id_user)
		{
			$query = "SELECT * FROM `user` WHERE `id_user` = '$id_user'";
			$hasil = $this->db->query($query);
			return $hasil->result();
		}
	}
?>