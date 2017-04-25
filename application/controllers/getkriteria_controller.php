<?php
	class Getkriteria_controller extends CI_Controller
	{
		function __construct()
		{
			parent::__construct();
			$this->load->model('Getkriteria_model');
		}
		public function index()
		{
			$this->load->database();
			$username = $_POST['username'];
			//$jumlahKriteria = $this->getkriteria_model->jumlahKriteria($username);
			$kriteria = $this->Getkriteria_model->getKriteria($username);
			$result = array();
			foreach ($kriteria as $row ) {
				array_push($result,array(
		        'id'=>$row->id_kriteria,
		        'username'=>$row->username_history,
		        'jeniskelamin'=>$row->jktutor_history,
		        'usia'=>$row->usiatutor_history
		    	));
			}
			echo json_encode(array('result'=>$result));

		}
	}
?>