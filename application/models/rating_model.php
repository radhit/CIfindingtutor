<?php
	class rating_model extends CI_Model
	{
		function __construct()
		{
			parent::__construct();
		}
		public function updateRating($id, $rating, $komentar)
		{
			$query = "UPDATE `history_transaksi` SET `rating_tutor`='$rating',`komentar_tutor`='$komentar' WHERE `id_historytransaksi` = '$id'";

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