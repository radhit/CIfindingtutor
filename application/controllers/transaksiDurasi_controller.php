<?php
	class TransaksiDurasi_controller extends CI_Controller
	{
		function __construct()
		{
			parent::__construct();
			$this->load->model('TransaksiDurasi_model');
		}
		public function index()
		{
			$this->load->database();
			if(isset($_POST['qr_codes']) )
			{
				$this->TransaksiDurasi_model->updateStatus($_POST['qr_codes']);
		 		$user = $this->TransaksiDurasi_model->getDurasiByTransaksi($_POST['qr_codes']);
		        if($user){
		        	foreach ($user as $row ) {
		        		$response['durasi'] = $row->durasi_transaksi;
						$response['status'] = $row->status_transaksi;
					}
//		        	$response = $user;
		        }else{
		            $response['error'] = true; 
		            $response['message'] = "Invalid username or password";          
		        }
		 
		    }else{
		        $response['error'] = true; 
		        $response['message'] = "Required fields are missing";
		    }
		    echo json_encode($response);
		}
	}
?>