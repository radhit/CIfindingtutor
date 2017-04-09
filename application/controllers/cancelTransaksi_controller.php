<?php
	class cancelTransaksi_controller extends CI_Controller
	{
		function __construct()
		{
			parent::__construct();
			$this->load->model('cancelTransaksi_model');
			$this->load->model('updatePencarianTutor_model');
		}
		public function index()
		{
			$response = array();
			$user = $this->cancelTransaksi_model->cancelByTransaksi($_POST['qr_codes']);

			if ($_POST['jenis_user']=="Pentutor") {
				$getId = $this->updatePencarianTutor_model->getId($_POST['qr_codes']);
				foreach ($getId as $key) {
					$id_pencarian = $key->id_pencariantutor;
				}
				$aa = $this->updatePencarianTutor_model->updatePencarian($id_pencarian);
			}

			$response['error'] = false;
			$response['message'] = "Data has been updated";
		
			echo json_encode($response);

		}
	}
?>