<?php
	class register_model extends CI_Model
	{
		function __construct()
		{
			parent::__construct();
		}
		function createUser($nama,$alamat,$jeniskelamin,$usia,$telp,$email,$jenis,$username,$pass)
		{
			$query = "INSERT INTO `findingtutor`.`user` (`id_user`, `nama_user`, `alamat_user`, `jeniskelamin_user`,`usia_user`, `telp_user`, `email_user`, `jenis_user`, `username_user`, `password_user`) VALUES (NULL, '$nama', '$alamat', '$jeniskelamin', '$usia', '$telp', '$email', '$jenis', '$username', '$pass');";
			if($this->db->query($query))
			{
				return true;
			}
			else
			{
				return false;
			}				
		}
		function cekUser($username,$email)
		{
			$query = "SELECT id_user FROM user WHERE username_user = '$username' OR email_user = '$email'";
			$hasil = $this->db->query($query);
			return $hasil->num_rows();
		}
	}
?>