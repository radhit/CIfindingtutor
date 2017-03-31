<?php
	require_once '../include/Operation.php';
	$respon = array();
	if($_SERVER['REQUEST_METHOD']=='POST')
	{
		if(isset($_POST['nama']) and isset($_POST['alamat']) and isset($_POST['usia']) and isset($_POST['telp']) and isset($_POST['email']) and isset($_POST['jenis']) and isset($_POST['username']) and isset($_POST['password']))
		{
			$db = new Operation();
			$cek = $db->createUser(
				$_POST['nama'],
				$_POST['alamat'],
				$_POST['usia'],
				$_POST['telp'],
				$_POST['email'],
				$_POST['jenis'],
				$_POST['username'],
				$_POST['password']);
			if($cek)
			{
				$respon['error'] = false;
				$respon['message'] = "Succes";
			}
			elseif($cek==0)
			{
				$respon['error'] = true;
				$respon['message'] = "Usernmae atau Email sudah terdaftar";
			}
			else
			{
				$respon['error'] = true;
				$respon['message'] = "Ada masalah, Ulangi lagi!";
			}
		}
		else
		{
			$respon['error'] = true;
			$respon['message'] = "Failed 2";
		}
	}
	else
	{
		$respon['error'] = true;
		$respon['message'] = "Invalid Request";
	}
	echo json_encode($respon);
?>