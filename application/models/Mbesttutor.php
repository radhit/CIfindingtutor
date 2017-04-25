<?php
	class Mbesttutor extends CI_Model
	{
		function __construct()
		{
			parent::__construct();
			$this->load->database();
		}
		function selectAll($bulan, $tahun)
   		{
   			if(is_null($bulan) && is_null($tahun)){
   				$query = "SELECT `username_tutor`, user.`alamat_user`, 
                            user.`jeniskelamin_user`, user.`usia_user`, user.`telp_user`, 
                            user.`email_user`, COUNT(*) AS jumlah 
                    FROM history_transaksi INNER JOIN user 
                    WHERE history_transaksi.`username_tutor`=user.`username_user`
                    AND MONTH(tanggal) = '01'
                    AND YEAR(tanggal) = '2017' 
                    GROUP BY username_tutor DESC LIMIT 5";
          $hasil = $this->db->query($query);
				  return $hasil->result();
   			}else{
   				$query = "SELECT `username_tutor`, user.`alamat_user`, 
                            user.`jeniskelamin_user`, user.`usia_user`, user.`telp_user`, 
                            user.`email_user`, COUNT(*) AS jumlah 
                    FROM history_transaksi INNER JOIN user 
                    WHERE history_transaksi.`username_tutor`=user.`username_user`
                    AND MONTH(tanggal) = $bulan
                    AND YEAR(tanggal) = $tahun 
                    GROUP BY username_tutor DESC LIMIT 5";
          $hasil = $this->db->query($query);
				  return $hasil->result();
   			}
			
   		}
	}
?>