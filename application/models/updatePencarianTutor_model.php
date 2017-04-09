<?php
	class updatePencarianTutor_model extends CI_Model
	{
		function __construct()
		{
			parent::__construct();
		}
		public function getId($qr_codes)
		{
			$query = "SELECT id_pencariantutor FROM transaksi WHERE qr_codes='$qr_codes'";
			$id = $this->db->query($query);
			return $id->result();
		}

		public function updatePencarian($id_pencariantutor)
		{
			$query = "UPDATE `pencarian_tutor` SET `status_pencarian` = 0,`biayatutor_pencarian`= 0 WHERE `id_pencarian` = '$id_pencariantutor'";
			$hasil = $this->db->query($query);
			if($hasil)
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