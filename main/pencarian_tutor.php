<?php
	require_once '../include/Operation.php';
	$respon = array();
	if($_SERVER['REQUEST_METHOD']=='POST')
	{
		if(isset($_POST['username']) and isset($_POST['kelas']) and isset($_POST['pelajaran']) and isset($_POST['alamat']) 
			and isset($_POST['tanggal']) and isset($_POST['hari']) and isset($_POST['jam']) and isset($_POST['jeniskelamin']) 
			and isset($_POST['usia']))
		{
			$db = new Operation();
			$cek = $db->pencarianTutor(
				$_POST['username'],
				$_POST['kelas'],
				$_POST['pelajaran'],
				$_POST['alamat'],
				$_POST['tanggal'],
				$_POST['hari'],
				$_POST['jam'],
				$_POST['jeniskelamin'],
				$_POST['usia']);

			$post = $db->historyPencarian(
				$_POST['username'],
				$_POST['hari'],
				$_POST['jam'],
				$_POST['jeniskelamin'],
				$_POST['usia']);

				$respon['error'] = false;
				$respon['message'] = "Data pencarian telah ditambah";
		}
		else
		{
			$respon['error'] = true;
			$respon['message'] = "Something wrong";
		}
	}
	else
	{
		$respon['error'] = true;
		$respon['message'] = "Invalid Request";
	}
	echo json_encode($respon);
?>