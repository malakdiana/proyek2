 <div class="page-wrapper">
  
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-12 d-flex no-block align-items-center">
                        <h4 class="page-title">Tables</h4>
                        <div class="ml-auto text-right">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Library</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-12">
                            
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Tabel Jadwal</h5>
                                <div class="table-responsive">
                                    <table id="zero_config" class="table table-striped table-bordered">
                                        <thead>
                                            <tr>
                                              <td><b>Id Jadwal</b></td>
                                                <td><b>Film</b></td>
                                                <td><b>Studio</b></td>
                                                <td><b>Tanggal</b></td>
                                                <td><b>Jam</b></td>
                                                <td><b>Harga</b></td>
                                                <td colspan="2"><b>Aksi</b></td>
                                            </tr>
                                        </thead>
                                        <tbody>
                                         <?php foreach ($jadwal_list as $data) { ?>
                                            <tr>
                                                <td><?php echo $data->idJadwal ?></td>
                                                <td><?php echo $data->noFilm ?>-<?php echo $data->judulFilm ?></td>
                                                <td><?php echo $data->idStudio ?>-<?php echo $data->namaStudio ?></td>
                                                <td><?php echo $data->tanggalTayang ?></td>
                                                <td><?php echo $data->jadwalTayang ?></td>
                                                <td><?php echo $data->harga ?></td>
                                              
                                    <td><a href="<?php echo site_url()?>/TabelJadwal/updateJadwalById/<?php echo $data->idJadwal; ?>"><button class="btn btn-info">Update</button></a>
                                     <a href="<?php echo site_url()?>/TabelJadwal/deleteJadwal/<?php echo $data->idJadwal; ?>" onclick="return confirm('Are you sure to delete this data permanently?');"><button class="btn btn-warning">delete</button></a></td>

                                            </tr>
                                            <?php }  ?>
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                 <td><b>Id Jadwal</b></td>
                                                <td><b>Film</b></td>
                                                <td><b>Studio</b></td>
                                                <td><b>Tanggal</b></td>
                                                <td><b>Jam</b></td>
                                                <td><b>Harga</b></td>
                                                <td colspan="2"><b>Aksi</b></td>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Right sidebar -->
                <!-- ============================================================== -->
                <!-- .right-sidebar -->
                <!-- ============================================================== -->
                <!-- End Right sidebar -->
                <!-- ============================================================== -->
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <footer class="footer text-center">
                All Rights Reserved by Matrix-admin. Designed and Developed by <a href="https://wrappixel.com">WrapPixel</a>.
            </footer>
            <!-- ============================================================== -->
            <!-- End footer -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
     <script src="<?php echo base_url()?>/assets/admin/libs/jquery/dist/jquery.min.js"></script>

  
    <!-- Bootstrap tether Core JavaScript -->
    <script src="<?php echo base_url()?>/assets/admin/libs/popper.js/dist/umd/popper.min.js"></script>
    <script src="<?php echo base_url()?>/assets/admin/libs/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url()?>/assets/admin/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js"></script>
    <script src="<?php echo base_url()?>/assets/admin/extra-libs/sparkline/sparkline.js"></script>
    <!--Wave Effects -->
    <script src="<?php echo base_url()?>/assets/admin/dist/js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="<?php echo base_url()?>/assets/admin/dist/js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="<?php echo base_url()?>/assets/admin/dist/js/custom.min.js"></script>
    <!--This page JavaScript -->
    <!-- <script src="../../dist/js/pages/dashboards/dashboard1.js"></script> -->
    <!-- Charts js Files -->
    <script src="<?php echo base_url()?>/assets/admin/libs/flot/excanvas.js"></script>
    <script src="<?php echo base_url()?>/assets/admin/libs/flot/jquery.flot.js"></script>
    <script src="<?php echo base_url()?>/assets/admin/libs/flot/jquery.flot.pie.js"></script>
    <script src="<?php echo base_url()?>/assets/admin/libs/flot/jquery.flot.time.js"></script>
    <script src="<?php echo base_url()?>/assets/admin/libs/flot/jquery.flot.stack.js"></script>
    <script src="<?php echo base_url()?>/assets/admin/libs/flot/jquery.flot.crosshair.js"></script>
    <script src="<?php echo base_url()?>/assets/admin/libs/flot.tooltip/js/jquery.flot.tooltip.min.js"></script>

    
    <script src="<?php echo base_url()?>/assets/admin/dist/js/pages/chart/chart-page-init.js"></script>
     <script src="<?php echo base_url()?>/assets/admin/extra-libs/multicheck/datatable-checkbox-init.js"></script>
    <script src="<?php echo base_url()?>/assets/admin/extra-libs/multicheck/jquery.multicheck.js"></script>
    <script src="<?php echo base_url()?>/assets/admin/extra-libs/DataTables/datatables.min.js"></script>
<script>
        /****************************************
         *       Basic Table                   *
         ****************************************/
        $('#zero_config').DataTable();
    </script>
</body>

</html>