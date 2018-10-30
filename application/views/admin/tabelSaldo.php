 <div class="page-wrapper">
  
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-12 d-flex no-block align-items-center">
                        <h4 class="page-title">Tables Jadwal</h4>
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
                                
                                <div class="table-responsive">
                                    <table id="zero_config" class="table table-striped table-bordered">
                                        <thead>
                                            <tr>
                                    
                                               <td><b>Id User</b></td>
                                               <td><b>Nama User</b></td>
                                    <td><b>Tanggal Transaksi</b></td>
                                    <td><b>Bukti Transfer</b></td>
                                    <td><b>Status</b></td>
                                    <td><b>Jumlah Saldo</b></td>
                                    <td><b>Aksi</b></td>
                                               
                                            </tr>
                                        </thead>
                                        <tbody>
                                         <?php foreach ($daftarSaldo as $key) {?>
                                    <tr>

                                        <td><?php echo $key->username ?></td>
                                        <td><?php echo $key->namaUser ?></td>
                                        <td><?php echo date('d-n-Y', strtotime($key->tanggalBeli)) ?></td>
                                        <td>
                                        <div class="portfolio-wrap"><figure><a href="<?php echo base_url()?>assets/upload/buktisaldo/<?php echo $key->bukti;?>" data-lightbox="portfolio" data-title="<?php echo $key->username ?>" class="link-preview" title="Preview">
                                        <?php echo $key->bukti;?>
                                            </a></figure></div></td>
                                        <td><?php echo $key->status ?></td>
                                        <td><?php echo $key->jumlah ?></td>
                                        <td>
                                            <!-- <a href="<?php// echo site_url()?>/TabelSaldo/update/<?php //echo $key->idTransaksi; ?>"><button class="btn btn-secondary">Update</button></a> -->
                                            <a href="<?php echo site_url()?>/TabelSaldo/delete/<?php echo $key->idTransaksi; ?>" onclick="return confirm('Are you sure to delete this data permanently?');"><button class="btn btn-warning">Delete</button></a>
                                        </td>
                                    </tr>
                                    <?php } ?></tbody>
                                           
                                       <tfoot>
                                            <tr>
                                             
                                              <td><b>Id User</b></td>
                                    <td><b>Tanggal Transaksi</b></td>
                                    <td><b>Bukti Transfer</b></td>
                                    <td><b>Status</b></td>
                                    <td><b>Jumlah Saldo</b></td>
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
    <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="edit-data" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
               
                <h4 class="modal-title">Konfirmasi Top Up Saldo</h4>
            </div>
            <?php echo form_open_multipart('TabelSaldo/konfirmasi'); ?>
                <div class="modal-body">
                        <div class="form-group">
                            <label class="col-lg-2 col-sm-2 control-label">User
                            </label>
                            <div class="col-lg-10">
                                <input type="hidden" id="id" name="id">
                                <input type="text" class="form-control" id="nama" name="nama">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-lg-2 col-sm-2 control-label">Jumlah</label>
                            <div class="col-lg-10">
                                <textarea class="form-control" id="jumlah" 
                                name="jumlah" ></textarea>
                            </div>
                        </div>
                    <div class="modal-footer">
                        <button class="btn btn-info" type="submit"> Simpan&nbsp;</button>
                        <?php echo form_close(); ?>
                        <button type="button" class="btn btn-warning" data-dismiss="modal"> Batal</button>
                    </div>
                </div>
            
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    function showmodal(id,user,jml){
        document.getElementById('id').value = id;
        document.getElementById('nama').value = user;
        document.getElementById('jumlah').value = jml;
    }
</script>
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