<?php
	class Editprofile_model extends CI_Model
	{
		function __construct()
		{
			parent::__construct();
		}
		public function updateProfile($id_user, $nama, $alamat, $telp, $email)
		{
			$query = "UPDATE `user` SET `nama_user`='$nama',`alamat_user`='$alamat',`telp_user`='$telp',`email_user`='$email'WHERE `id_user` = '$id_user'";

				if($this->db->query($query))
				{
					return true;
				}
				else
				{
					return false;
				}		
		}
		public function tambahHari($id_user, $hari)
		{
			$query = "INSERT INTO `ketersediaan_hari`(`hari_tutor`, `id_user`) VALUES ('$hari','$id_user')";

				if($this->db->query($query))
				{
					return true;
				}
				else
				{
					return false;
				}		
		}
		public function deleteHari($id_user)
		{
			$query = "DELETE FROM `ketersediaan_hari` WHERE id_user='$id_user'";
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