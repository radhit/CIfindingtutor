<?php
	class Getkeahlian_model extends CI_Model
	{
		function __construct()
		{
			parent::__construct();
		}
		public function getKeahlian($id_user)
		{
			$query = "SELECT * FROM `keahlian_tutor` WHERE `id_user` = '$id_user'";
			$hasil = $this->db->query($query);
			return $hasil->result();
		}

	}
?>