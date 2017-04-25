<?php
	class Profile_controller extends CI_Controller
	{
		function __construct()
		{
			parent::__construct();
			$this->load->model('Profile_model');
		}
		public function index()
		{
			$this->load->database();

			$username = $_POST['username'];
			$jenis = $_POST['jenis'];
			if ($jenis=='Pentutor') {
				$profile = $this->Profile_model->getProfile($username);
				$result = $profile;
			}
			elseif ($jenis=='Murid') {
				$profile = $this->Profile_model->getProfileMurid($username);
				$result = array();
				foreach ($profile as $row ) {
					array_push($result,array(
			        'id'=>$row->id_user,
			        'nama'=>$row->nama_user,
			        'alamat'=>$row->alamat_user,
			        'telp'=>$row->telp_user,
			        'email'=>$row->email_user
			    	));
				}
			}
			echo json_encode(array('result'=>$result));
		}
	}
?>