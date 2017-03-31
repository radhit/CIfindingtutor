<?php
	class getkeahlian_model extends CI_Model
	{
		function __construct()
		{
			parent::__construct();
		}
		public function getKeahlian($username)
		{
			$query = "SELECT * FROM `keahlian_tutor` WHERE `username_keahlian` = '$username'";
			$hasil = $this->db->query($query);
			return $hasil->result();
		}

	}
?>