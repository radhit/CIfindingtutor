<?php

	class Operation
	{
		private $con;
		function __construct()
		{
			require_once dirname(__FILE__).'/Connection.php';
			$db = new Connection;
			$this->con = $db->connect();
		}

		function createUser($nama,$alamat,$jeniskelamin,$usia,$telp,$email,$jenis,$username,$pass)
		{
			//$query = "INSERT INTO user (id_user, nama_user, alamat_user, usia_user, telp_user, emai_user, jenis_user, username_user, password_user) VALUES (NULL, '".$nama."', '".$alamat."', '".$usia."', '".$telp."', '".$email."', '".$jenis."', '".$username."', '".$pass."')";
			//$run = mysqli_query($con,$query);
			if($this->cekUser($username,$email))
			{
				return 0;
			}
			else
			{
				$query = $this->con->prepare("INSERT INTO `findingtutor`.`user` (`id_user`, `nama_user`, `alamat_user`, `jeniskelamin_user`,`usia_user`, `telp_user`, `email_user`, `jenis_user`, `username_user`, `password_user`) VALUES (NULL, ?, ?, ?, ?, ?, ?, ?, ?, ?);");
				$query->bind_param("sssssssss",$nama,$alamat,$jeniskelamin,$usia,$telp,$email,$jenis,$username,$pass);

				if($query->execute())
				{
					return true;
				}
				else
				{
					return false;
				}				
			}
		}
		private function cekUser($username,$email)
		{
			$query = $this->con->prepare("SELECT id_user FROM user WHERE username_user = ? OR email_user = ?");
			$query->bind_param("ss",$username,$email);
			$query->execute();
			$query->store_result();
			return $query->num_rows > 0;
		}
		public function userLogin($username, $pass)
		{
			$query = $this->con->prepare("SELECT id_user FROM user WHERE username_user = ? AND password_user = ?");
			$query->bind_param("ss",$username,$pass);
			$query->execute();
			$query->store_result();
			return $query->num_rows > 0;
		}
		public function getUser($username)
		{
			$query = $this->con->prepare("SELECT * FROM user WHERE username_user = ?");
			$query->bind_param("s",$username);
			$query->execute();
			return $query->get_result()->fetch_assoc();
		}

		public function tambahKeahlian($username, $kelas, $pelajaran, $keterbatasanhari, $jam)
		{
			$query = $this->con->prepare("INSERT INTO `keahlian_tutor`(`id_keahlian`, `username_keahlian`, `kelas_keahlian`, `pelajaran_keahlian`, `keterbatasanhari_keahlian`, `jam_keahlian`) VALUES (NULL, ?, ?, ?, ?, ?);");
				$query->bind_param("sssss",$username,$kelas,$pelajaran,$keterbatasanhari,$jam);

				if($query->execute())
				{
					return true;
				}
				else
				{
					return false;
				}		
		}

		public function pencarianTutor($username, $kelas, $pelajaran, $alamat, $tanggal, $hari, $jam, $jeniskelamin, $usia)
		{
			$query = $this->con->prepare("INSERT INTO `pencarian_tutor`(`id_pencarian`, `username_pencarian`, `kelas_pencarian`, `pelajaran_pencarian`, `alamat_pencarian`, `tanggal_pencarian`, `hari_pencarian`, `jam_pencarian`, `jktutor_pencarian`, `usiatutor_pencarian`) VALUES (NULL,?,?,?,?,?,?,?,?,?)");
			$query->bind_param("sssssssss", $username, $kelas, $pelajaran, $alamat, $tanggal, $hari, $jam, $jeniskelamin, $usia);
			if($query->execute())
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
			$query = $this->con->prepare("INSERT INTO `history_kriteria`(`id_kriteria`, `username_history`, `haripencarian_history`, `jam_history`, `jktutor_history`, `usiatutor_history`) VALUES (NULL,?,?,?,?,?);");
			$query->bind_param("sssss", $username, $hari, $jam, $jeniskelamin, $usia);
			if($query->execute())
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