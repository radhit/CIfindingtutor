<?php
	class deletekriteria_controller extends CI_Controller
	{
		function __construct()
		{
			parent::__construct();
			$this->load->model('deletekriteria_model');
		}
		public function index()
		{
			$this->load->database();
			$jumlahKriteria = $this->deletekriteria_model->getKriteria($_POST['username']);
			if ($jumlahKriteria>0) {
				$this->deletekriteria_model->deleteKriteria($_POST['username']);
				$respon['error'] = false;
				$respon['message'] = "Kriteria anda akan diperbaharui setelah memesan kembali";
			}
			else{
				$respon['error'] = false;
				$respon['message'] = "Anda pengguna baru";
			}
			echo json_encode($respon);
		}
	}
?>