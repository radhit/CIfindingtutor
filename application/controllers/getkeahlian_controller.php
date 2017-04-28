<?php
	class Getkeahlian_controller extends CI_Controller
	{
		function __construct()
		{
			parent::__construct();
			$this->load->model('Getkeahlian_model');
		}
		public function index()
		{
			$this->load->database();
			$id_user = $_POST['id_user'];
			$keahlian = $this->Getkeahlian_model->getKeahlian($id_user);
			$result = array();
			foreach ($keahlian as $row ) {
				array_push($result,array(
		        'id'=>$row->id_keahlian,
		        'kelas'=>$row->kelas_keahlian,
		        'pelajaran'=>$row->pelajaran_keahlian
		    	));
			}
			echo json_encode(array('result'=>$result));
		}
	}
?>