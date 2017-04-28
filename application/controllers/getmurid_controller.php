<?php
	class Getmurid_controller extends CI_Controller
	{
		function __construct()
		{
			parent::__construct();
			$this->load->model('Getmurid_model');
		}
		public function index()
		{
			$this->load->database();
			$kriteria = $_POST['kriteria'];
			if ($kriteria=="jarak") {
				$murid = $this->Getmurid_model->getMuridByJarak();
			}

			elseif ($kriteria=="hari") {
				$hari = $this->Getmurid_model->getHari($_POST['id_user']);
				$arrayhari = array();
				foreach ($hari as $row) {
					array_push($arrayhari, $row->hari_tutor);
				}
				$hasil = implode("','",$arrayhari);
				$petik = "'";
				$hari = $petik.$hasil.$petik;
				// echo $hari;
				// exit();
				$murid = $this->Getmurid_model->getMuridByHari($hari);
			}

			elseif ($kriteria=="jenis kelamin") {
				$murid = $this->Getmurid_model->getMuridByJK($_POST['id_user']);
			}

			elseif ($kriteria=="pelajaran") {
				$pelajaran = $this->Getmurid_model->getPelajaran($_POST['id_user']);
				$arraypelajaran = array();
				foreach ($pelajaran as $row) {
					array_push($arraypelajaran, $row->pelajaran_keahlian);
				}
				$hasil = implode("','", $arraypelajaran);
				$petik = "'";
				$keahlian = $petik.$hasil.$petik;
				$murid = $this->Getmurid_model->getMuridByKeahlian($keahlian);
			}

			elseif ($kriteria=="kelas") {
				$kelas = $this->Getmurid_model->getKelas($_POST['id_user']);
				$arraykelas = array();
				foreach ($kelas as $row) {
					array_push($arraykelas, $row->kelas_keahlian);
				}
				$hasil = implode("','", $arraykelas);
				$petik = "'";
				$kelas = $petik.$hasil.$petik;
				$murid = $this->Getmurid_model->getMuridByKelas($kelas);
			}

			elseif ($kriteria=="usia") {
				$murid = $this->Getmurid_model->getMuridByUsia($_POST['id_user']);
			}

			elseif ($kriteria=="all") {
				$murid = $this->Getmurid_model->getMurid();
			}									

			$result = array();
			foreach ($murid as $row ) {
				array_push($result,array(
		        'id'=>$row->id_pencariantutor,
		        'id_user'=>$row->id_user,
		        'name'=>$row->nameuser_pencarian,
		        'kelas'=>$row->kelas_pencarian,
		        'pelajaran'=>$row->pelajaran_pencarian,
		        'alamat'=>$row->alamat_pencarian,
		        'tanggal'=>$row->tanggal_pencarian,
		        'hari'=>$row->hari_pencarian,
		        'jam'=>$row->jam_pencarian,
		        'biaya'=>$row->biayatutor_pencarian,
		        'durasi'=>$row->durasi_pencarian
		    	));
			}
			echo json_encode(array('result'=>$result));
		}
	}
?>