<?php
	class Login_model extends CI_Model
	{
		function __construct()
		{
			parent::__construct();
		}
		public function userLogin($username, $pass)
		{
			$query = "SELECT id_user FROM user WHERE username_user = '$username' AND password_user = '$pass'";
			//$query->bind_param("ss",$username,$pass);
			$hasil = $this->db->query($query);
			// $query->execute();
			// $query->store_result();
			return $hasil->num_rows();
		}
		public function getUser($username)
		{
			$query = "SELECT * FROM user WHERE username_user = '$username'";
			$hasil = $this->db->query($query);
			return $hasil->result();
		}
	}
?>