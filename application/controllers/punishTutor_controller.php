<?php
	class punishTutor_controller extends CI_Controller
	{
		function __construct()
		{
			parent::__construct();
			$this->load->model('punishTutor_model');
		}
		public function index()
		{
			$response = array(); 
			//$current_date = array();

			if($_SERVER['REQUEST_METHOD']=='POST')
			{
				
				if(isset($_POST['username'])) 
				{
					$user = $this->punishTutor_model->getstatus($_POST['username']);

					foreach ($user as $row ) {
						$response['status'] = $row->status_transaksi;
						$response['qr_codes'] = $row->qr_codes;
					}		
				}
			}
			else
			{
			   $response['error'] = true; 
			   $response['message'] = "Invalid Request";
			}
			echo json_encode($response);

		}
	}
?>