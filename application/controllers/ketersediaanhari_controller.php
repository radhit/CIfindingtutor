<?php
	class Ketersediaanhari_controller extends CI_Controller
	{
		function __construct()
		{
			parent::__construct();
			$this->load->model('Ketersediaanhari_model');
		}
		public function index()
		{
			$this->load->database();
			$cek = $this->Ketersediaanhari_model->cekHari($_POST['username']);
			if ($cek>0) 
			{
				$this->Ketersediaanhari_model->deleteHari($_POST['username']);
			}
			$hari=explode(",", $_POST['hari']);
			// var_dump($hari);
			// exit();
			if(isset($_POST['username']) and isset($_POST['hari']))
			{
				for ($i=0; $i <sizeof($hari)-1 ; $i++) { 	
					$this->Ketersediaanhari_model->tambahHari(
						$_POST['username'],$hari[$i]);
				}
					$respon['error'] = false;
					$respon['message'] = "Ketersediaan hari ditambah";
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