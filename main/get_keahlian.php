<?php 
	require dirname(__FILE__).'/../include/Connection.php';
	$db = new Connection;
	$con = $db->connect();

	$username = $_POST['username'];
	$sql = "SELECT * FROM keahlian_tutor where username_keahlian ='".$username."'";

	$r = mysqli_query($con,$sql);

	$result = array();

	while($row = mysqli_fetch_array($r))
	{
	    array_push($result,array(
	        'username'=>$row['username_keahlian'],
	        'kelas'=>$row['kelas_keahlian'],
	        'pelajaran'=>$row['pelajaran_keahlian'],
	        'keterbatasanhari'=>$row['keterbatasanhari_keahlian'],
	        'jam'=>$row['jam_keahlian'],
	        'biaya'=>$row['biaya_keahlian'],
	    ));
	}

	echo json_encode(array('result'=>$result));

	mysqli_close($con);

?>