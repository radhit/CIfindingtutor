<?php
	class Tambahkeahlian_model extends CI_Model
	{
		function __construct()
		{
			parent::__construct();
		}
		public function tambahKeahlian($username, $kelas, $pelajaran)
		{
			$query = "INSERT INTO `keahlian_tutor`(`id_keahlian`, `username_keahlian`, `kelas_keahlian`, `pelajaran_keahlian`) VALUES (NULL, '$username', '$kelas', '$pelajaran');";

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