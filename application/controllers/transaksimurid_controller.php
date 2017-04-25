<?php
	class Transaksimurid_controller extends CI_Controller
	{
		function __construct()
		{
			parent::__construct();
			$this->load->model('transaksimurid_model');
		}
		public function index()
		{
			$this->load->database();

			$id = $_POST['id'];
			$data = $this->Transaksimurid_model->getData($id);
			$result = $data;
			// $cektransaksi = $this->transaksimurid_model->cekData($id);
			// if ($cektransaksi>0) {
			// }
			// elseif ($cektransaksi<1) {
			// 	$result['message'] = "Tidak ada transaksi sedang berjalan";
			// }
			echo json_encode($result);
			
		}
	}
?>