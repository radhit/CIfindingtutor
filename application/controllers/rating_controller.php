<?php
	class rating_controller extends CI_Controller
	{
		function __construct()
		{
			parent::__construct();
			$this->load->model('rating_model');
		}
		public function index()
		{
			$this->load->database();
			if(isset($_POST['id']) and isset($_POST['rating']) and isset($_POST['komentar']))
			{
				$this->rating_model->updateRating($_POST['id'], $_POST['rating'], $_POST['komentar']);
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