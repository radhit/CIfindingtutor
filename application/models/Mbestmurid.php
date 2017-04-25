<?php
	class Mbestmurid extends CI_Model
	{
		function __construct()
		{
			parent::__construct();
			$this->load->database();
		}
		function selectAll($bulan, $tahun)
   		{
   			if(is_null($bulan) && is_null($tahun)){
   				$query = "SELECT  user.`username_user`, user.`alamat_user`, 
                            user.`jeniskelamin_user`, user.`usia_user`, user.`telp_user`, 
                            user.`email_user`, S 
                    FROM USER INNER JOIN 
                          ( SELECT `nameuser_pencarian`, COUNT(*) AS S 
                            FROM pencarian_tutor INNER JOIN history_transaksi
                            WHERE MONTH(tanggal) = '01'
                            AND YEAR(tanggal) = '2017'
                            AND `id_pencarian`= history_transaksi.`id_pencariantutor`
                            GROUP BY nameuser_pencarian) AS coba 
                    ON user.nama_user = coba.nameuser_pencarian ORDER BY S DESC LIMIT 5";
          $hasil = $this->db->query($query);
				  return $hasil->result();
   			}else{
   				$query = "SELECT  user.`username_user`, user.`alamat_user`, 
                            user.`jeniskelamin_user`, user.`usia_user`, user.`telp_user`, 
                            user.`email_user`, S 
                    FROM USER INNER JOIN 
                          ( SELECT `nameuser_pencarian`, COUNT(*) AS S 
                            FROM pencarian_tutor INNER JOIN history_transaksi
                            WHERE MONTH(tanggal) = $bulan
                            AND YEAR(tanggal) = $tahun
                            AND `id_pencarian`= history_transaksi.`id_pencariantutor`
                            GROUP BY nameuser_pencarian) AS coba 
                    ON user.nama_user = coba.nameuser_pencarian ORDER BY S DESC LIMIT 5";
          $hasil = $this->db->query($query);
				  return $hasil->result();
   			}
			
   		}
	}
?>