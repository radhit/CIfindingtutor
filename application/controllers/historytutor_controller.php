<?php
	class Historytutor_controller extends CI_Controller
	{
		function __construct()
		{
			parent::__construct();
			$this->load->model('Historytutor_model');
		}
		public function index()
		{
			$this->load->database();
			$username = $_POST['username'];
			$history = $this->Historytutor_model->getHistory($username);
			// $result = $history;
			$result = array();
			$penghubung="--";
			foreach ($history as $row ) {
				$tanggal=$row->tanggal_pencarian.$penghubung.$row->jam_pencarian;
				array_push($result,array(
		        'id_history'=>$row->id_historytransaksi,
		        'tanggal'=>$tanggal,
		        'rating'=>$row->rating_tutor,
		        'komentar'=>$row->komentar_tutor
		    	));
			}
			echo json_encode(array('result'=>$result));
		}
	}
?>