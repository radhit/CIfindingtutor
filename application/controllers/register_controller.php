<?php
	class Register_controller extends CI_Controller
	{
		function __construct()
		{
			parent::__construct();
			$this->load->model('Register_model');
		}
		public function index()
		{
			$this->load->database();
			if(isset($_POST['nama']) and isset($_POST['alamat']) and isset($_POST['jeniskelamin']) and isset($_POST['usia']) and isset($_POST['telp']) and isset($_POST['email']) and isset($_POST['jenis']) and isset($_POST['username']) and isset($_POST['password']))
			{
				$cekuser = $this->Register_model->cekUser($_POST['username'],$_POST['email']);
				if($cekuser < 1)
				{
					$cek = $this->Register_model->createUser(
							$_POST['nama'],
							$_POST['alamat'],
							$_POST['jeniskelamin'],
							$_POST['usia'],
							$_POST['telp'],
							$_POST['email'],
							$_POST['jenis'],
							$_POST['username'],
							$_POST['password']);

					if($cek==true)
					{
						$respon['error'] = false;
						$respon['message'] = "Anda telah terdaftar";
					}
					else
					{
						$respon['error'] = true;
						$respon['message'] = "Ada masalah, Ulangi lagi!";
					}
				}
				else if ($cekuser > 0)
				{
					$respon['error'] = true;
					$respon['message'] = "Usernmae atau Email sudah terdaftar";
				}
			}
			else
			{
				$respon['error'] = true;
				$respon['message'] = "Failed 2";
			}
			echo json_encode($respon);
		}
	}
?>