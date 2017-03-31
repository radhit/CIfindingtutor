<?php
	class login_controller extends CI_Controller
	{
		function __construct()
		{
			parent::__construct();
			$this->load->model('login_model');
		}
		public function index()
		{
			$this->load->database();
			
			if($this->input->post("username")!=NULL && $this->input->post("password")!=NULL)
			{
				
				if($this->login_model->userLogin($this->input->post("username"), $this->input->post("password"))>0)
				{
					$user = $this->login_model->getUser($_POST['username']);
					foreach ($user as $row) {
						$respon['id'] = $row->id_user;
						$respon['name'] = $row->nama_user;
						$respon['jenis'] = $row->jenis_user;
						$respon['alamat']=$row->alamat_user;
					}
					$respon['error'] = false;
					$respon['message'] = "success";	
				}
				else
				{
					$respon['error'] = true;
					$respon['message'] = "Wrong username or password";
				}
			}
			else
			{
				$respon['error'] = true;
				$respon['message'] = "Failed";
			}
			
			echo json_encode($respon);

		}
	}
?>