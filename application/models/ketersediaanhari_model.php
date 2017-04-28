<?php
	class Ketersediaanhari_model extends CI_Model
	{
		function __construct()
		{
			parent::__construct();
		}
		public function cekHari($id_user)
		{
			$query= "SELECT * FROM `ketersediaan_hari` WHERE `id_user`='$id_user'";
			$hasil = $this->db->query($query);
			return $hasil->num_rows();
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