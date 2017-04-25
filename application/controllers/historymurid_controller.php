<?php
	class Historymurid_controller extends CI_Controller
	{
		function __construct()
		{
			parent::__construct();
			$this->load->model('Historymurid_model');
		}
		public function index()
		{
			$this->load->database();
			$username = $_POST['username'];
			$history = $this->Historymurid_model->getHistory($username);
			// $result = $history;
			$result = array();
			$penghubung="--";
			foreach ($history as $row ) {
				$tanggal=$row->tanggal_pencarian.$penghubung.$row->jam_pencarian;
				array_push($result,array(
		        'id_history'=>$row->id_historytransaksi,
		        'id_pencariantutor'=>$row->id_pencarian,
		        'nama_tutor'=>$row->nama_user,
		        'telp_tutor'=>$row->telp_user,
		        'pelajaran'=>$row->pelajaran_pencarian,
		        'tanggal'=>$tanggal,
		        'biaya'=>$row->biayatutor_pencarian,
		        'rating'=>$row->rating_tutor,
		        'komentar'=>$row->komentar_tutor
		    	));
			}
			echo json_encode(array('result'=>$result));
		}
	}
?>