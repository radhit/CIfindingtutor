<?php
	class CancelTransaksi_controller extends CI_Controller
	{
		function __construct()
		{
			parent::__construct();
			$this->load->model('CancelTransaksi_model');
			$this->load->model('UpdatePencarianTutor_model');
		}
		public function index()
		{
			$response = array();
			$user = $this->CancelTransaksi_model->cancelByTransaksi($_POST['qr_codes']);

			if ($_POST['jenis_user']=="Pentutor") {
				$getId = $this->UpdatePencarianTutor_model->getId($_POST['qr_codes']);
				foreach ($getId as $key) {
					$id_pencarian = $key->id_pencariantutor;
				}
				$aa = $this->UpdatePencarianTutor_model->updatePencarian($id_pencarian);
			}

			$response['error'] = false;
			$response['message'] = "Data has been updated";
		
			echo json_encode($response);

		}
	}
?>