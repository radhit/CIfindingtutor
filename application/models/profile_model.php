<?php
	class profile_model extends CI_Model
	{
		function __construct()
		{
			parent::__construct();
		}
		public function getProfile($username)
		{
			$query = "SELECT * FROM `user`WHERE `username_user` = '$username'";
			$hasil = array();
			$hasil['user'] = $this->db->query($query)->result();
			$hari = "SELECT `hari_tutor`FROM `ketersediaan_hari` WHERE `username_tutor` = '$username'";
			$hasil['hari'] = $this->db->query($hari)->result();
			return $hasil;
		}


		public function getProfileMurid($username)
		{
			$query = "SELECT * FROM `user` WHERE `username_user` = '$username'";
			$hasil = $this->db->query($query);
			return $hasil->result();
		}
	}
?>