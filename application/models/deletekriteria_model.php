<?php
	class deletekriteria_model extends CI_Model
	{
		function __construct()
		{
			parent::__construct();
		}
		public function getKriteria($username)
		{
			$query = "SELECT * FROM `history_kriteria` WHERE `username_history` = '$username'";
			$hasil = $this->db->query($query);
			return $hasil->num_rows();
		}
		public function deleteKriteria($username)
		{
			$query = "DELETE FROM `history_kriteria` WHERE `username_history` = '$username'";

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