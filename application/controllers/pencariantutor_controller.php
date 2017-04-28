<?php
	class pencariantutor_controller extends CI_Controller
	{
		function __construct()
		{
			parent::__construct();
			$this->load->model('Pencariantutor_model');
		}
		public function index()
		{
			$this->load->database();

			if(isset($_POST['id_user']) and isset($_POST['name']) and isset($_POST['kelas']) and isset($_POST['pelajaran']) and isset($_POST['alamat']) 
				and isset($_POST['tanggal']) and isset($_POST['hari']) and isset($_POST['jam']) and isset($_POST['durasi']) and isset($_POST['jeniskelamin']))
			{
				$this->Pencariantutor_model->pencarianTutor(
					$_POST['id_user'],
					$_POST['name'],
					$_POST['kelas'],
					$_POST['pelajaran'],
					$_POST['alamat'],
					$_POST['tanggal'],
					$_POST['hari'],
					$_POST['jam'],
					$_POST['durasi'],
					$_POST['jeniskelamin'],
					$_POST['usia'],
					$_POST['biaya']);

				$this->Pencariantutor_model->historyPencarian(
					$_POST['id_user'],
					$_POST['hari'],
					$_POST['jam'],
					$_POST['jeniskelamin'],
					$_POST['usia']);

					$respon['error'] = false;
					$respon['message'] = "Data pencarian telah ditambah";
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