<?php
	class Listtransaksimurid_controller extends CI_Controller
	{
		function __construct()
		{
			parent::__construct();
			$this->load->model('Listtransaksimurid_model');
		}
		public function index()
		{
			$this->load->database();
			$username = $_POST['username'];
			$cektransaksi = $this->Listtransaksimurid_model->cekData($username);
			if ($cektransaksi>0) {
				$list = $this->Listtransaksimurid_model->getTransaksi($username);
				$result = array();
				$tampung = array();
				foreach ($list as $row ) {
					array_push($tampung,array(
			        'id_transaksi'=>$row->id_transaksi,
			        'id_pencariantutor'=>$row->id_pencariantutor,
			        'pelajaran'=>$row->pelajaran_pencarian,
			        'nama_tutor'=>$row->nama_user,
			        'username_murid'=>$row->username_pencarian
			    	));
				}
				$result['list'] = $tampung;
				$result['message'] = "Terdapat beberapa transaksi";
			}
			elseif ($cektransaksi<1) {
				$result['message'] = "Tidak ada transaksi sedang berjalan";
			}
			
			echo json_encode(array('result'=>$result));
		}
	}
?>