<?php
	class Editprofile_model extends CI_Model
	{
		function __construct()
		{
			parent::__construct();
		}
		public function updateProfile($username, $nama, $alamat, $telp, $email)
		{
			$query = "UPDATE `user` SET `nama_user`='$nama',`alamat_user`='$alamat',`telp_user`='$telp',`email_user`='$email'WHERE `username_user` = '$username'";

				if($this->db->query($query))
				{
					return true;
				}
				else
				{
					return false;
				}		
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
		public function deleteHari($username)
		{
			$query = "DELETE FROM `ketersediaan_hari` WHERE username_tutor='$username'";
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