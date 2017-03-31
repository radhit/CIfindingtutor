<?php
	require_once '../include/Operation.php';
	$respon = array();
	if($_SERVER['REQUEST_METHOD']=='POST')
	{
		if(isset($_POST['username']) and isset($_POST['password']))
		{
			$db = new Operation();
			if($db->userLogin($_POST['username'], $_POST['password']))
			{
				$user = $db->getUser($_POST['username']);
				$respon['error'] = false;
				$respon['id'] = $user['id_user'];
				$respon['jenis'] = $user['jenis_user'];
				$respon['message'] = "success";	
			}
			else
			{
				$respon['error'] = true;
				$respon['message'] = "Wrong username or password";
			}
		}
		else
		{
			$respon['error'] = true;
			$respon['message'] = "Failed";
		}
	}
	echo json_encode($respon);
?>