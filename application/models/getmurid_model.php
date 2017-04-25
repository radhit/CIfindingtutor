<?php
	class Getmurid_model extends CI_Model
	{
		function __construct()
		{
			parent::__construct();
		}
		public function getMurid()
		{
			$query = "SELECT * FROM `pencarian_tutor` WHERE `status_pencarian` = '0' ORDER BY `id_pencarian` DESC";
			$hasil = $this->db->query($query);
			return $hasil->result();
		}
		public function getMuridByJarak()
		{
			$query = "SELECT * FROM `pencarian_tutor` WHERE `status_pencarian` = '0'";
			$hasil = $this->db->query($query);
			return $hasil->result();
		}
		public function getMuridByUsia($username)
		{
			$queryUsia = "SELECT `usia_user` FROM `user` WHERE `username_user` = '$username'";
			$get = $this->db->query($queryUsia);
			$arrayUsia = $get->result_array();
			$usia = $arrayUsia[0]["usia_user"];
			$queryMurid = "SELECT * FROM `pencarian_tutor` WHERE `status_pencarian` = '0' AND `usiatutor_pencarian` = '$usia' ORDER BY `id_pencarian` DESC";
			$hasil = $this->db->query($queryMurid);
			return $hasil->result();
		}
		public function getMuridByJK($username)
		{
			$queryJK = "SELECT `jeniskelamin_user` FROM `user` WHERE `username_user` = '$username'";
			$get = $this->db->query($queryJK);
			$arrayKelamin = $get->result_array();
			$jeniskelamin = $arrayKelamin[0]["jeniskelamin_user"];
			$queryMurid = "SELECT * FROM `pencarian_tutor` WHERE `status_pencarian` = '0' AND `jktutor_pencarian` = '$jeniskelamin' ORDER BY `id_pencarian` DESC";
			$hasil = $this->db->query($queryMurid);
			return $hasil->result();
		}
		public function getKelas($username)
		{
			$queryKelas = "SELECT `kelas_keahlian` FROM `keahlian_tutor` WHERE `username_keahlian` = '$username' ";
			$hasil = $this->db->query($queryKelas);
			return $hasil->result();

		}
		public function getMuridByKelas($kelas)
		{
			$query = "SELECT * FROM `pencarian_tutor` WHERE `status_pencarian` = '0' AND `kelas_pencarian` IN ($kelas) ORDER BY `id_pencarian` DESC";
			$hasil = $this->db->query($query);
			return $hasil->result();
		}

		public function getHari($username)
		{
			$queryHari = "SELECT `hari_tutor` FROM `ketersediaan_hari` WHERE `username_tutor` = '$username'";
			$hasil = $this->db->query($queryHari);
			return $hasil->result();

		}
		public function getMuridByHari($hari)
		{
			$query = "SELECT * FROM `pencarian_tutor` WHERE `status_pencarian` = '0' AND `hari_pencarian` IN ($hari) ORDER BY `id_pencarian` DESC";
			$hasil = $this->db->query($query);
			return $hasil->result();
		}

		public function getPelajaran($username)
		{
			$queryPelajaran = "SELECT `pelajaran_keahlian` FROM `keahlian_tutor` WHERE `username_keahlian` = '$username'";
			$hasil = $this->db->query($queryPelajaran);
			return $hasil->result();
		}
		public function getMuridByKeahlian($hari)
		{
			$query = "SELECT * FROM `pencarian_tutor` WHERE `status_pencarian` = '0' AND `pelajaran_pencarian` IN ($hari) ORDER BY `id_pencarian` DESC";
			$hasil = $this->db->query($query);
			return $hasil->result();
		}
		//SELECT * FROM `pencarian_tutor` WHERE `status_pencarian` = 0 AND `hari_pencarian` IN ('Sabtu')

	}
?>