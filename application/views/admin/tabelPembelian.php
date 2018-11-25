   <link href="<?php echo base_url()?>assets/user/lib/ionicons/css/ionicons.min.css" rel="stylesheet">
 <div class="page-wrapper">
  
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-12 d-flex no-block align-items-center">
                        <h4 class="page-title">Tabel Pembelian</h4>
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
                             <a href="" data-toggle="modal" data-target="#myModal"
                                <button class="btn btn-primary" style="align-self: right;width: 100px"><i class="ion ion-ios-printer"></i> save</button> </a><br><br>
                               
                                <div class="table-responsive">
                                    <table id="zero_config" class="table table-striped table-bordered">
                                        <thead>
                                            <tr>
                                    
                                               <td><b>No Pembelian</b></td>
                                               <td><b>QR</b></td>
                                    <td><b>Id User</b></td>
                                    <td><b>Tanggal Pesan</b></td>
                                    <td><b>Id Jadwal</b></td>
                                    <td><b>Total Harga</b></td>
                                    <td><b>Aksi</b></td>
                                               
                                            </tr>
                                        </thead>
                                        <tbody>
                                           <?php foreach ($daftarPembelian as $key ) { ?>
                                    <tr>
                                        <td><?php echo $key->noPembelian ?></td>
                                        <td><img src="<?php echo base_url()?>assets/images/<?php echo $key->noPembelian ?>.png" width=70 height=70></td>
                                        <td><?php echo $key->idUser ?></td>
                                        
                                        <td><?php echo $key->tanggalPesan ?></td>
                                        <td><?php echo $key->idJadwal ?></td>
                                        <td><?php echo $key->totalHarga ?></td>
                                        <td>
                                            
                                            <a href="<?php echo site_url()?>/TabelPembelian/delete/<?php echo $key->noPembelian; ?>" onclick="return confirm('Are you sure to delete this data permanently?');"><button class="btn btn-warning">Delete</button></a>
                                        </td>
                                    </tr>
                                    <?php } ?></tbody>
                                           
                                       <tfoot>
                                            <tr>
                                            <td><b>No Pembelian</b></td>
                                    <td><b>QR</b></td>
                                    <td><b>Id User</b></td>

                                    <td><b>Tanggal Pesan</b></td>
                                    <td><b>Id Jadwal</b></td>
                                    <td><b>Total Harga</b></td>
                                    <td><b>Aksi</b></td>
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
     <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModal" class="modal fade-in">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Save Data</h4>
                </div>
                <?php echo form_open('TabelPembelian/createpdf') ?>
                <div class="modal-body">
                     <div class="form-group">
                      <label for="">Tanggal awal</label>
                        <input class="form-control" id="datemulai" name="mulai" placeholder="YYYY-MM-DD" type="date"/>
                        </div>
                        <div class="form-group">
                      <label for="">Tanggal akhir</label>
                        <input class="form-control" id="dateselesai" name="selesai" placeholder="YYYY-MM-DD" type="date"/>
                        </div>
                        <div>  
                        <button type="submit" class="btn btn-primary">Save</button> 

                        </div>
                  <?php echo form_close(); ?>

            </div>
        </div>
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
     <script src="<?php echo base_url();?>assets/datatables/jquery-2.2.4.js"></script>
     <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css"/>
        <script src="<?php echo base_url();?>assets/datatables/jquery-2.2.4.min.js"></script>
        <script src="<?php echo base_url();?>assets/datatables/jquery.dataTables.min.js"></script>      
        <link rel="stylesheet" href="<?php echo base_url();?>assets/datatables/jquery.dataTables.min.css">
<script>
        /****************************************
         *       Basic Table                   *
         ****************************************/
        $('#zero_config').DataTable();
    </script>
</body>

</html>