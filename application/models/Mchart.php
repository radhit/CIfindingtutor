<?php
	class Mchart extends CI_Model
	{
		function __construct()
		{
			parent::__construct();
			$this->load->database();
		}
		function chartBulan()
   		{
   				$query = "SELECT monthname(tanggal_transaksi) as month, count(id_transaksi) as num 
   							FROM transaksi 
   							GROUP BY (extract(month FROM tanggal_transaksi))";
            	$hasil = $this->db->query($query);
				return $hasil->result();
   		}
   		function chartTahun()
   		{
   				$query = "SELECT year(tanggal_transaksi) as year, count(id_transaksi) as num 
   							FROM transaksi GROUP BY (extract(year FROM tanggal_transaksi))";
            	$hasil = $this->db->query($query);
				return $hasil->result();
   		}
	}
?>