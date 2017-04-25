<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Finding Tutor</title>

    <!-- Bootstrap -->
    <link href="<?php echo base_url();?>bootstrap/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="<?php echo base_url();?>bootstrap/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="<?php echo base_url();?>bootstrap/vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="<?php echo base_url();?>bootstrap/vendors/iCheck/skins/flat/green.css" rel="stylesheet">
    <!-- Datatables -->
    <link href="<?php echo base_url();?>bootstrap/vendors/datatables.net-bs/css/dataTables.bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url();?>bootstrap/vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url();?>bootstrap/vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url();?>bootstrap/vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url();?>bootstrap/vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="<?php echo base_url();?>bootstrap/build/css/custom.min.css" rel="stylesheet">
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

        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Tutor Terbaik</h3>
              </div>
            </div>

              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title"> 
                    <h2>Rekap 5 Top Tutor of The Month</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
          
                    <div class="dropdown">
                        <form method="get">
                          <div class="col-md-2 col-sm-2 col-xs-2" align="center">Bulan
                            <select class="form-control" name="bulan">
                              <option value="01">Januari</option>
                              <option value="02">Februari</option>
                              <option value="03">Maret</option>
                              <option value="04">April</option>
                              <option value="05">Mei</option>
                              <option value="06">Juni</option>
                              <option value="07">Juli</option>
                              <option value="08">Agustus</option>
                              <option value="09">September</option>
                              <option value="10">Oktober</option>
                              <option value="12">November</option>
                              <option value="12">Desember</option>
                            </select>
                          </div>
                          <!--  -->
                          <div class="col-md-2 col-sm-2 col-xs-2" align="center">Tahun
                              <select class="form-control" name="tahun">
                                <?php
                                  $mulai= date('Y') - 50;
                                  for($i = $mulai;$i<$mulai + 100;$i++){
                                  $sel = $i == date('Y') ? ' selected="selected"' : '';
                                  echo '<option value="'.$i.'"'.$sel.'>'.$i.'</option>'; }
                                ?>
                              </select>
                          </div> 

                          <br><input type="submit" class="btn btn-primary" value="Tampilkan"></div> 
                        </form>
                    </div>

                    <table id="datatable-buttons" class="table table-striped table-bordered" action="<?php echo base_url();?>Welcome/tutor_terbaik">
                      <thead>
                        <tr>
                          <th>NAMA TUTOR</th>
                          <th>ALAMAT</th>
                          <th>JENIS KELAMIN</th>
                          <th>USIA</th>
                          <th>NOMOR TELPON</th>
                          <th>EMAIL</th>
                          <th>JUMLAH TRANSAKSI</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php $i=0; foreach ($query as $hasilUser) { ?>
                          <tr>
                           <td><?php echo $hasilUser->username_tutor?></td>
                           <td><?php echo $hasilUser->alamat_user?></td>
                           <td><?php echo $hasilUser->jeniskelamin_user?></td>
                           <td><?php echo $hasilUser->usia_user?></td>
                           <td><?php echo $hasilUser->telp_user?></td>
                           <td><?php echo $hasilUser->email_user?></td>
                           <td><?php echo $hasilUser->jumlah?></td>
                          </tr>
                        <?php }?>
                      </tbody>
                    </table>
          
          
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->

        <!-- footer content -->
        <footer>
          <div class="pull-right">
            Finding Tutor by <a href="https://colorlib.com">Syah Dia Putri</a>
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>

    <!-- jQuery -->
    <script src="<?php echo base_url();?>bootstrap/vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="<?php echo base_url();?>bootstrap/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="<?php echo base_url();?>bootstrap/vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="<?php echo base_url();?>bootstrap/vendors/nprogress/nprogress.js"></script>
    <!-- iCheck -->
    <script src="<?php echo base_url();?>bootstrap/vendors/iCheck/icheck.min.js"></script>
    <!-- Datatables -->
    <script src="<?php echo base_url();?>bootstrap/vendors/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="<?php echo base_url();?>bootstrap/vendors/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
    <script src="<?php echo base_url();?>bootstrap/vendors/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
    <script src="<?php echo base_url();?>bootstrap/vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js"></script>
    <script src="<?php echo base_url();?>bootstrap/vendors/datatables.net-buttons/js/buttons.flash.min.js"></script>
    <script src="<?php echo base_url();?>bootstrap/vendors/datatables.net-buttons/js/buttons.html5.min.js"></script>
    <script src="<?php echo base_url();?>bootstrap/vendors/datatables.net-buttons/js/buttons.print.min.js"></script>
    <script src="<?php echo base_url();?>bootstrap/vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js"></script>
    <script src="<?php echo base_url();?>bootstrap/vendors/datatables.net-keytable/js/dataTables.keyTable.min.js"></script>
    <script src="<?php echo base_url();?>bootstrap/vendors/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
    <script src="<?php echo base_url();?>bootstrap/vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js"></script>
    <script src="<?php echo base_url();?>bootstrap/vendors/datatables.net-scroller/js/dataTables.scroller.min.js"></script>
    <script src="<?php echo base_url();?>bootstrap/vendors/jszip/dist/jszip.min.js"></script>
    <script src="<?php echo base_url();?>bootstrap/vendors/pdfmake/build/pdfmake.min.js"></script>
    <script src="<?php echo base_url();?>bootstrap/vendors/pdfmake/build/vfs_fonts.js"></script>

    <!-- Custom Theme Scripts -->
    <script src="<?php echo base_url();?>bootstrap/build/js/custom.min.js"></script>

  </body>
</html>