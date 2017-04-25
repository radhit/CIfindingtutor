<?php
	class Tambahkeahlian_controller extends CI_Controller
	{
		function __construct()
		{
			parent::__construct();
			$this->load->model('Tambahkeahlian_model');
		}
		public function index()
		{
			$this->load->database();
			if(isset($_POST['username']) and isset($_POST['kelas']) and isset($_POST['pelajaran']))
			{
				$this->Tambahkeahlian_model->tambahKeahlian(
					$_POST['username'],
					$_POST['kelas'],
					$_POST['pelajaran']);
					$respon['error'] = false;
					$respon['message'] = "Data keahlian telah ditambah";
			}
			else
			{
				$respon['error'] = true;
				$respon['message'] = "Something wrong";
			}
			echo json_encode($respon);
		}
	}
?>