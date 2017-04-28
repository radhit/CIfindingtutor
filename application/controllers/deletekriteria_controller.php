<?php
	class Deletekriteria_controller extends CI_Controller
	{
		function __construct()
		{
			parent::__construct();
			$this->load->model('Deletekriteria_model');
		}
		public function index()
		{
			$this->load->database();
			$jumlahKriteria = $this->Deletekriteria_model->getKriteria($_POST['id_user']);
			if ($jumlahKriteria>0) {
				$this->Deletekriteria_model->deleteKriteria($_POST['id_user']);
				$respon['error'] = false;
				$respon['message'] = "Kriteria anda akan diperbaharui setelah memesan kembali";
			}
			else{
				$respon['error'] = false;
				$respon['message'] = "Tidak ada history kriteria";
			}
			echo json_encode($respon);
		}
	}
?>