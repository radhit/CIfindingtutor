<?php
	class Editprofile_controller extends CI_Controller
	{
		function __construct()
		{
			parent::__construct();
			$this->load->model('Editprofile_model');
		}
		public function index()
		{
			$this->load->database();
			$hari=explode(",", $_POST['ketersediaanhari']);
			if(isset($_POST['id_user']) and isset($_POST['nama']) and isset($_POST['alamat']) and isset($_POST['telp']) and
				isset($_POST['email']) and isset($_POST['ketersediaanhari']))
			{
				$this->Editprofile_model->deleteHari($_POST['id_user']);

				for ($i=0; $i <sizeof($hari)-1 ; $i++) { 	
					$this->Editprofile_model->tambahHari(
						$_POST['id_user'],$hari[$i]);
				}	

				$this->Editprofile_model->updateProfile(
					$_POST['id_user'],
					$_POST['nama'],
					$_POST['alamat'],
					$_POST['telp'],
					$_POST['email']);
					$respon['error'] = false;
					$respon['message'] = "Profile telah di Ubah";
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