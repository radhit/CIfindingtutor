<?php
	class Mtutor extends CI_Model
	{
		function __construct()
		{
			parent::__construct();
			$this->load->database();
		}
		function selectAll($bulan, $tahun)
   		{
			if(is_null($bulan) && is_null($tahun)){
   				$query = "SELECT * FROM `user` 
					  WHERE `jenis_user` = 'Pentutor' 
					  AND MONTH(tanggal_daftar) = '01'  
					  AND YEAR(tanggal_daftar) = '2017'";
            	$hasil = $this->db->query($query);
				return $hasil->result();
   			}else{
   				$query = "SELECT * FROM `user` 
					  WHERE `jenis_user` = 'Pentutor' 
					  AND MONTH(tanggal_daftar) = $bulan  
					  AND YEAR(tanggal_daftar) = $tahun";
            	$hasil = $this->db->query($query);
				return $hasil->result();
			}
   		}
	}
?>