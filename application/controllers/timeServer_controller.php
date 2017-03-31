<?php
	class timeServer_controller extends CI_Controller
	{
		function __construct()
		{
			parent::__construct();
			$this->load->model('timeServer_model');
		}
		public function index()
		{
			$response = array(); 
			$current_date = array();

			if($_SERVER['REQUEST_METHOD']=='POST')
			{
				if(isset($_POST['qr_codes']) ) 
				{
					$user = $this->timeServer_model->getDurasiByTransaksi($_POST['qr_codes']);
					foreach ($user as $row ) {
						$current_date['status'] = $row->status_transaksi;
					}
				}
			}
			else
			{
			   $current_date['error'] = true; 
			   $current_date['message'] = "Invalid Request";
			}
			echo json_encode($current_date);

		}
	}
?>