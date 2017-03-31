<?php
	class getkeahlian_controller extends CI_Controller
	{
		function __construct()
		{
			parent::__construct();
			$this->load->model('getkeahlian_model');
		}
		public function index()
		{
			$this->load->database();
			$username = $_POST['username'];
			$keahlian = $this->getkeahlian_model->getKeahlian($username);
			$result = array();
			foreach ($keahlian as $row ) {
				array_push($result,array(
		        'id'=>$row->id_keahlian,
		        'username'=>$row->username_keahlian,
		        'kelas'=>$row->kelas_keahlian,
		        'pelajaran'=>$row->pelajaran_keahlian
		    	));
			}
			echo json_encode(array('result'=>$result));
		}
	}
?>