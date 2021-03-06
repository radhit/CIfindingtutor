<?php
	class Transaksi_controller extends CI_Controller
	{
		function __construct()
		{
			parent::__construct();
			$this->load->model('Transaksi_model');
		}
		public function index()
		{
			$this->load->database();

			if(isset($_POST['id_pencarian']) and isset($_POST['username_tutor']) 
				and isset($_POST['durasi']) and
                isset($_POST['qr_codes']))
	        {	
	        	$result = $this->Transaksi_model->createTransaction($_POST['id_pencarian'],
			      	$_POST['username_tutor'],
			      	$_POST['durasi'],
			      	$_POST['qr_codes']);
	        	$this->Transaksi_model->updateStatusPermintaan($_POST['id_pencarian'], $_POST['biaya_final']);

		        if($result)
		        {
		            $respon['error'] = false; 
		            $respon['message'] = "Transaction registered successfully";
		        }		 
	    	}
		    else
		    {
		        $respon['error'] = true; 
		        $respon['message'] = "Required fields are missing";
		    }

			echo json_encode($respon);
		}
	}
?>