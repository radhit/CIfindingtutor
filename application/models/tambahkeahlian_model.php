<?php
	class Tambahkeahlian_model extends CI_Model
	{
		function __construct()
		{
			parent::__construct();
		}
		public function tambahKeahlian($id_user, $kelas, $pelajaran)
		{
			$query = "INSERT INTO `keahlian_tutor`(`id_keahlian`, `id_user`, `kelas_keahlian`, `pelajaran_keahlian`) VALUES (NULL, '$id_user', '$kelas', '$pelajaran');";

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