<?php
	class Mtransaksi extends CI_Model
	{
		function __construct()
		{
			parent::__construct();
			$this->load->database();
		}
		function selectAll($bulan, $tahun)
   		{
   			if(is_null($bulan) && is_null($tahun)){
   				$query = "SELECT `id_transaksi`, transaksi.`id_pencariantutor`, history_transaksi.`tanggal`, 
								 pencarian_tutor.`id_pencarian`, history_transaksi.`id_pencariantutor`,
		                         history_transaksi.`username_tutor`, `nameuser_pencarian` 
		                         `kelas_pencarian`, `pelajaran_pencarian`, `alamat_pencarian`,
 		                         `durasi_pencarian`, `biayatutor_pencarian`
						  FROM transaksi inner join pencarian_tutor inner JOIN history_transaksi
						  WHERE transaksi.`id_pencariantutor` = pencarian_tutor.`id_pencarian` 
                          AND pencarian_tutor.`id_pencarian` = history_transaksi.`id_pencariantutor`
                          AND MONTH(tanggal) = '01'
                          AND YEAR(tanggal) = '2017'";
            	$hasil = $this->db->query($query);
				return $hasil->result();
   			}else{
   				$query = "SELECT `id_transaksi`, transaksi.`id_pencariantutor`, history_transaksi.`tanggal`, 
								 pencarian_tutor.`id_pencarian`, history_transaksi.`id_pencariantutor`,
		                         history_transaksi.`username_tutor`, `nameuser_pencarian`, 
		                         `kelas_pencarian`, `pelajaran_pencarian`, `alamat_pencarian`,
 		                         `durasi_pencarian`, `biayatutor_pencarian`
						  FROM transaksi inner join pencarian_tutor inner JOIN history_transaksi
						  WHERE transaksi.`id_pencariantutor` = pencarian_tutor.`id_pencarian` 
                          AND pencarian_tutor.`id_pencarian` = history_transaksi.`id_pencariantutor`
                          AND MONTH(tanggal) = $bulan
                          AND YEAR(tanggal) = $tahun";
            	$hasil = $this->db->query($query);
				return $hasil->result();
			}
   		}
	}
?>