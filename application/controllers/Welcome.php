<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->model('mchart');
		$data['bulan'] = $this->mchart->chartBulan();
   		$data['tahun'] = $this->mchart->chartTahun();
   		$this->load->view('welcome_message', $data);
	}
	public function data_tutor()
	{
        $bulan = $this->input->get('bulan');
		$tahun = $this->input->get('tahun');
		$this->load->model('mtutor');
        $data['query'] = $this->mtutor->selectAll($bulan, $tahun);
		$this->load->view('data_tutor', $data);
	}
	public function data_murid()
	{
		$bulan = $this->input->get('bulan');
		$tahun = $this->input->get('tahun');
		$this->load->model('mmurid');
        $data['query'] = $this->mmurid->selectAll($bulan, $tahun);
		$this->load->view('data_murid', $data);
	}
	public function tutor_terbaik()
	{
		$bulan = $this->input->get('bulan');
		$tahun = $this->input->get('tahun');
		$this->load->model('mbesttutor');
        $data['query'] = $this->mbesttutor->selectAll($bulan, $tahun);
		$this->load->view('tutor_terbaik', $data);
	}
	public function murid_terbaik()
	{
		$bulan = $this->input->get('bulan');
		$tahun = $this->input->get('tahun');
		$this->load->model('mbestmurid');
        $data['query'] = $this->mbestmurid->selectAll($bulan, $tahun);
		$this->load->view('murid_terbaik', $data);
	}
	public function transaksi()
	{
		$bulan = $this->input->get('bulan');
		$tahun = $this->input->get('tahun');
		$this->load->model('mtransaksi');
        $data['query'] = $this->mtransaksi->selectAll($bulan, $tahun);
		$this->load->view('transaksi', $data);
	}
}
