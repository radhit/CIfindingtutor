<?php
	class DeleteTransaksi_controller extends CI_Controller
	{
		function __construct()
		{
			parent::__construct();
			$this->load->model('DeleteTransaksi_model');
		}
		public function index()
		{
			$response = array();
			if($_SERVER['REQUEST_METHOD']=='POST')
			{

				if(isset($_POST['qr_codes'])) 
				{
		
					$user = $this->DeleteTransaksi_model->deleteByTransaksi($_POST['qr_codes']);
					$response['error'] = false;
					$response['message'] = "Data has been deleted";
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