<?php
defined('BASEPATH') OR exit('No direct script access allowed');

    $catBulan = array() ; $dataBulan = array();
    $catTahun = array() ; $dataTahun = array();

    foreach ($bulan as $key) {
        $catBulan[] = $key->month;
        $dataBulan[] = $key->num;
    }

    foreach ($tahun as $key) {
        $catTahun[] = $key->year;
        $dataTahun[] = $key->num;
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Finding Tutor </title>

    <!-- Bootstrap -->
    <link href="<?php echo base_url();?>bootstrap/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="<?php echo base_url();?>bootstrap/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="<?php echo base_url();?>bootstrap/vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- bootstrap-daterangepicker -->
    <link href="<?php echo base_url();?>bootstrap/vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="<?php echo base_url();?>bootstrap/build/css/custom.min.css" rel="stylesheet">

    <script src="<?php echo base_url();?>bootstrap/vendors/jquery/dist/jquery.min.js"></script>
    <script src="http://code.highcharts.com/highcharts.js"></script>
    <script src="http://code.highcharts.com/modules/exporting.js"></script>
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="index.html" class="site_title"><i class="fa fa-graduation-cap"></i> <span>Finding Tutor</span></a>
            </div>

            <div class="clearfix"></div>

            <br />
 
            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
              	<ul class="nav side-menu">
                  <li><a href="<?php echo base_url();?>"><i class="fa fa-home"></i> Home</span></a><br /></li>
                </ul>
                <h3>Tutor</h3>
                <ul class="nav side-menu">
                  <li><a href="<?php echo base_url();?>Welcome/data_tutor"><i class="fa fa-edit"></i> Pendaftaran Tutor</span></a></li>
                  <li><a href="<?php echo base_url();?>Welcome/tutor_terbaik"><i class="fa fa-star"></i> Tutor Terbaik</a></li>
                </ul>
              </div>
              <div class="menu_section">
                <h3>Murid</h3>
                <ul class="nav side-menu">
                  <li><a href="<?php echo base_url();?>Welcome/data_murid"><i class="fa fa-edit"></i> Pendaftaran Murid</a></li>
                  <li><a href="<?php echo base_url();?>Welcome/murid_terbaik"><i class="fa fa-star"></i> Murid Terbaik</a></li>
                </ul>
              </div>
              <ul class="nav side-menu">
                  <li><a href="<?php echo base_url();?>Welcome/transaksi"><i class="fa fa-bar-chart-o"></i> Laporan Transaksi</a></li>
              </ul>

            </div>
            <!-- /sidebar menu -->

          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
            <nav>
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>
            </nav>
          </div>
        </div>
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="row top_tiles">
              <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="tile-stats">
                  <div class="icon"><i class="	fa fa-user-plus"></i></div>
                  <div class="count">
                      <?php  $hostname="localhost";  
                              $username="root";  
                              $password="";  
                              $db = "findingtutor";  
                              $dbh = new PDO("mysql:host=$hostname;dbname=$db", $username, $password);

                              foreach($dbh->query('SELECT COUNT(*) 
                                                   FROM user 
                                                   WHERE date(tanggal_daftar) = CURDATE() 
                                                   AND jenis_user = "Pentutor"') as $row) {    
                              echo $row['COUNT(*)'];  }
                      ?>
                  </div>
                  <h3>Tutor Baru</h3>
                  <p>Pendaftaran Tutor Baru Hari Ini.</p>
                </div>
              </div>
              <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="tile-stats">
                  <div class="icon"><i class="	fa fa-user-plus"></i></div>
                  <div class="count">
                      <?php  $hostname="localhost";  
                              $username="root";  
                              $password="";  
                              $db = "findingtutor";  
                              $dbh = new PDO("mysql:host=$hostname;dbname=$db", $username, $password);

                              foreach($dbh->query('SELECT COUNT(*) 
                                                   FROM user 
                                                   WHERE date(tanggal_daftar) = CURDATE() 
                                                   AND jenis_user = "Murid"') as $row) {    
                              echo $row['COUNT(*)'];  }
                      ?>
                  </div>
                  <h3>Murid Baru</h3>
                  <p>Pendaftaran Murid Baru Hari Ini.</p>
                </div>
              </div>
              <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="tile-stats">
                  <div class="icon"><i class="fa fa-bar-chart-o"></i></div>
                  <div class="count">
                      <?php  $hostname="localhost";  
                              $username="root";  
                              $password="";  
                              $db = "findingtutor";  
                              $dbh = new PDO("mysql:host=$hostname;dbname=$db", $username, $password);

                              foreach($dbh->query('SELECT COUNT(*) 
                                                   FROM transaksi 
                                                   WHERE date(tanggal_transaksi) = CURDATE()') as $row) {    
                              echo $row['COUNT(*)'];  }
                      ?>
                  </div>
                  <h3>Transaksi</h3>
                  <p>Jumlah Transaksi Hari Ini.</p>
                </div>
              </div>
              <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="tile-stats">
                  <div class="icon"><i class="fa fa-usd"></i></div>
                  <div class="count">
                      <?php  $hostname="localhost";  
                              $username="root";  
                              $password="";  
                              $db = "findingtutor";  
                              $dbh = new PDO("mysql:host=$hostname;dbname=$db", $username, $password);

                              foreach($dbh->query('SELECT SUM(biayatutor_pencarian)
                                                   FROM pencarian_tutor 
                                                   WHERE date(tanggal_transaksi) = CURDATE()') as $row) {
                                  if ($row['SUM(biayatutor_pencarian)'] > 0){
                                      echo $row['SUM(biayatutor_pencarian)'];
                                  } else{
                                      echo 0;
                                  }   
                              }
                      ?>
                  </div>
                  <h3>Pemasukan</h3>
                  <p>Jumlah Pemasukan Hari Ini.</p>
                </div>
              </div>

            <div class="row">
              <div class="col-md-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Ringkasan Transaksi</h2>

                    <script type="text/javascript">
                          $(function () {
    
                          var categoriesBulan = <?php echo json_encode($catBulan); ?>;
                          var dataBulan = <?php print json_encode($dataBulan, JSON_NUMERIC_CHECK); ?>;

                          var categoriesTahun = <?php echo json_encode($catTahun); ?>;
                          var dataTahun = <?php print json_encode($dataTahun, JSON_NUMERIC_CHECK); ?>;


                          $('#chart-bulan').highcharts({
                              chart: { type: 'column' },
                              title: { text: 'Transaksi Per-Bulan' },
                              xAxis: { categories: categoriesBulan },
                              yAxis: { title: 
                                        { text: 'Jumlah' } },
                              tooltip: {
                                            headerFormat: '<span style="font-size:14px">{point.key}</span><table>',
                                            pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
                                                            '<td style="padding:0"><b>{point.y}</b></td></tr>',
                              footerFormat: '</table>',
                              shared: true,
                              useHTML: true },
                              series: [{
                                            name: 'Bulan',
                                            data: dataBulan }]
                          });

                          $('#chart-tahun').highcharts({
                              chart: { type: 'column' },
                              title: { text: 'Transaksi Per-Tahun' },
                              xAxis: { categories: categoriesTahun },
                              yAxis: { title: 
                                        { text: 'Jumlah' } },
                              tooltip: {
                                            headerFormat: '<span style="font-size:14px">{point.key}</span><table>',
                                            pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
                                                            '<td style="padding:0"><b>{point.y}</b></td></tr>',
                              footerFormat: '</table>',
                              shared: true,
                              useHTML: true },
                              series: [{
                                            name: 'Tahun',
                                            data: dataTahun }]
                          });
                        });
                    </script>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <div class="col-md-9 col-sm-12 col-xs-12">
                      <div class="demo-container" style="height:280px">
                        <div id="chart-bulan" class="demo-placeholder"></div>
                      </div>
                      <div class="demo-container" style="height:280px">
                        <div id="chart-tahun" class="demo-placeholder"></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->

      </div>
    </div>

    <!-- jQuery -->
    
    <!-- Bootstrap -->
    <script src="<?php echo base_url();?>bootstrap/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="<?php echo base_url();?>bootstrap/vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="<?php echo base_url();?>bootstrap/vendors/nprogress/nprogress.js"></script>
    <!-- Chart.js -->
    <script src="<?php echo base_url();?>bootstrap/vendors/Chart.js/dist/Chart.min.js"></script>
    <!-- jQuery Sparklines -->
    <script src="<?php echo base_url();?>bootstrap/vendors/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
    <!-- Flot -->
    <script src="<?php echo base_url();?>bootstrap/vendors/Flot/jquery.flot.js"></script>
    <script src="<?php echo base_url();?>bootstrap/vendors/Flot/jquery.flot.pie.js"></script>
    <script src="<?php echo base_url();?>bootstrap/vendors/Flot/jquery.flot.time.js"></script>
    <script src="<?php echo base_url();?>bootstrap/vendors/Flot/jquery.flot.stack.js"></script>
    <script src="<?php echo base_url();?>bootstrap/vendors/Flot/jquery.flot.resize.js"></script>
    <!-- Flot plugins -->
    <script src="<?php echo base_url();?>bootstrap/vendors/flot.orderbars/js/jquery.flot.orderBars.js"></script>
    <script src="<?php echo base_url();?>bootstrap/vendors/flot-spline/js/jquery.flot.spline.min.js"></script>
    <script src="<?php echo base_url();?>bootstrap/vendors/flot.curvedlines/curvedLines.js"></script>
    <!-- DateJS -->
    <script src="<?php echo base_url();?>bootstrap/vendors/DateJS/build/date.js"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="<?php echo base_url();?>bootstrap/vendors/moment/min/moment.min.js"></script>
    <script src="<?php echo base_url();?>bootstrap/vendors/bootstrap-daterangepicker/daterangepicker.js"></script>
    
    <!-- Custom Theme Scripts -->
    <script src="<?php echo base_url();?>bootstrap/build/js/custom.min.js"></script>
  </body>
</html>