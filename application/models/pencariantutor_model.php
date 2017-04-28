<?php
	class Pencariantutor_model extends CI_Model
	{
		function __construct()
		{
			parent::__construct();
		}
		public function pencarianTutor($id, $name, $kelas, $pelajaran, $alamat, $tanggal, $hari, $jam, $durasi, $jeniskelamin, $usia, $biaya)
		{
			$query = "INSERT INTO `pencarian_tutor`(`id_pencariantutor`, `id_user`, `nameuser_pencarian`, `kelas_pencarian`, `pelajaran_pencarian`, `alamat_pencarian`, `tanggal_pencarian`, `hari_pencarian`, `jam_pencarian`, `durasi_pencarian` , `jktutor_pencarian`, `usiatutor_pencarian`, `biayatutor_pencarian`) VALUES (NULL,'$id','$name','$kelas','$pelajaran','$alamat','$tanggal','$hari','$jam','$durasi','$jeniskelamin','$usia', '$biaya')";

				if($this->db->query($query))
				{
					return true;
				}
				else
				{
					return false;
				}		
		}
		public function historyPencarian($username, $hari, $jam, $jeniskelamin, $usia)
		{
			$query = "INSERT INTO `history_kriteria`(`id_kriteria`, `id_user`, `haripencarian_history`, `jam_history`, `jktutor_history`, `usiatutor_history`) VALUES (NULL,'$username','$hari','$jam','$jeniskelamin','$usia');";
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