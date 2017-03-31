<?php
	require_once '../include/Operation.php';
	$respon = array();
	if($_SERVER['REQUEST_METHOD']=='POST')
	{
		if(isset($_POST['username']) and isset($_POST['kelas']) and isset($_POST['pelajaran']) and isset($_POST['keterbatasanhari']) 
			and isset($_POST['jam']))
		{
			$db = new Operation();
			$cek = $db->tambahKeahlian(
				$_POST['username'],
				$_POST['kelas'],
				$_POST['pelajaran'],
				$_POST['keterbatasanhari'],
				$_POST['jam']);
				$respon['error'] = false;
				$respon['message'] = "Data keahlian telah ditambah";
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