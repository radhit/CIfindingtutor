<?php
	class Addhistory_controller extends CI_Controller
	{
		function __construct()
		{
			parent::__construct();
			$this->load->model('Addhistory_model');
		}
		public function index()
		{
			$this->load->database();
			if(isset($_POST['qr_codes']))
			{
				$user = $this->Addhistory_model->getUsernameTutor($_POST['qr_codes']);
		        if($user)
		        {
		        	foreach ($user as $row )
		        	{
		        		$id = $row->id_pencariantutor;
		        		$username= $row->username_tutor;

						$this->Addhistory_model->tambahHistory($id, $username);
						$respon['error'] = false;
					}
				}
				$respon['message'] = "History pencarian tutor terupdate";
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