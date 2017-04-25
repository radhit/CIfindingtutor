<?php
	class Ketersediaanhari_model extends CI_Model
	{
		function __construct()
		{
			parent::__construct();
		}
		public function tambahHari($username, $hari)
		{
			$query = "INSERT INTO `ketersediaan_hari`(`hari_tutor`, `username_tutor`) VALUES ('$hari','$username')";

			if($this->db->query($query))
			{
				return true;
			}
			else
			{
				return false;
			}		
		}
		public function cekHari($username)
		{
			$query= "SELECT * FROM `ketersediaan_hari` WHERE `username_tutor`='$username'";
			$hasil = $this->db->query($query);
			return $hasil->num_rows();
		}
		public function deleteHari($username)
		{
			$query = "DELETE FROM `ketersediaan_hari` WHERE `username_tutor` = '$username'";
			if($this->db->query($query))
			{
				return true;
			}
			else
			{
				return false;
			}	
		}
	}
?>