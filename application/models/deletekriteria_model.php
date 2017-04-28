<?php
	class Deletekriteria_model extends CI_Model
	{
		function __construct()
		{
			parent::__construct();
		}
		public function getKriteria($id_user)
		{
			$query = "SELECT * FROM `history_kriteria` WHERE `id_user` = '$id_user'";
			$hasil = $this->db->query($query);
			return $hasil->num_rows();
		}
		public function deleteKriteria($id_user)
		{
			$query = "DELETE FROM `history_kriteria` WHERE `id_user` = '$id_user'";

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