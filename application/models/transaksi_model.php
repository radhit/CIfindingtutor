<?php
	class Transaksi_model extends CI_Model
	{
		function __construct()
		{
			parent::__construct();
		}
		
		public function createTransaction($idpencarian, $usernametutor, $durasi, $qrcodes)
		{
			$query = "INSERT INTO `transaksi`(`id_transaksi`, `id_pencariantutor`, `username_tutor`,`status_transaksi`, `durasi_transaksi`, `qr_codes`) VALUES (NULL,'$idpencarian','$usernametutor',0,'$durasi','$qrcodes')";

				if($this->db->query($query))
				{
					return true;
				}
				else
				{
					return false;
				}		
		}
		public function updateStatusPermintaan($id_pencarian, $biaya)
		{
			$query = "UPDATE `pencarian_tutor` SET `status_pencarian` = 1, `biayatutor_pencarian`='$biaya' WHERE `id_pencariantutor` = '$id_pencarian'";
			 if ($this->db->query($query))
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