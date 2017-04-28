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

			$id_user = $_POST['id_user'];
			$jenis = $_POST['jenis'];
			if ($jenis=='Pentutor') {
				$profile = $this->Profile_model->getProfile($id_user);
				$result = $profile;
			}
			elseif ($jenis=='Murid') {
				$profile = $this->Profile_model->getProfileMurid($id_user);
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