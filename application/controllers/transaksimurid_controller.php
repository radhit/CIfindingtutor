<?php
	class transaksimurid_controller extends CI_Controller
	{
		function __construct()
		{
			parent::__construct();
			$this->load->model('transaksimurid_model');
		}
		public function index()
		{
			$this->load->database();

			$username = $_POST['username'];
			$cektransaksi = $this->transaksimurid_model->cekData($username);
			if ($cektransaksi>0) {
				$data = $this->transaksimurid_model->getData($username);
				$result = $data;
				$result['message'] = "Ada transaksi";
			}
			elseif ($cektransaksi<1) {
				$result['message'] = "Tidak ada transaksi sedang berjalan";
			}
			echo json_encode($result);
			
		}
	}
?>