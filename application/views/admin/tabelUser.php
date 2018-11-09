 <div class="page-wrapper">
  
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-12 d-flex no-block align-items-center">
                        <h4 class="page-title">Tabel User</h4>
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
                                 <a href="" data-toggle="modal" data-target="#myModal">
                                 <button type="button" class="btn btn-success" style="margin-bottom: 20px" >Tambah</button></a>
                                <div class="table-responsive">
                                    <table id="zero_config" class="table table-striped table-bordered">
                                        <thead>
                                            <tr>
                                    <td><b>Id User</b></td>
                                    <td><b>Username</b></td>
                                    <td><b>Nama</b></td>
                                    <td><b>Alamat</b></td>
                                    <td><b>Telepon</b></td>
                                    <td><b>Email</b></td>
                                    <td><b>Saldo</b></td>

                                    <td><b>Aksi</b></td>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($daftarUser as $key ) { ?>
                                    <tr>
                                        <td><?php echo $key->idUserAdmin ?></td>
                                        <td><?php echo $key->username ?></td>
                                        <td><?php echo $key->nama ?></td>
                                        <td><?php echo $key->alamat ?></td>
                                        <td><?php echo $key->telepon ?></td>
                                        <td><?php echo $key->email ?></td>
                                        <td><?php echo $key->saldo ?></td>
                                        <td>
                                            <a href="javascript:void(0);" 
                                            onclick="showmodal('<?php echo $key->idUserAdmin ?>','<?php echo $key->username ?>','<?php echo $key->password ?>','<?php echo $key->nama ?>','<?php echo $key->alamat ?>','<?php echo $key->telepon ?>','<?php echo $key->email ?>','<?php echo $key->saldo ?>')"
                                                data-id="<?php echo $key->idUserAdmin ?>" 
                                                data-username="<?php echo $key->username ?>" 
                                                data-password="<?php echo $key->password ?>"
                                                data-nama="<?php echo $key->nama ?>" 
                                                data-alamat="<?php echo $key->alamat ?>"
                                                data-telepon="<?php echo $key->telepon ?>"
                                                data-email="<?php echo $key->email ?>"
                                                data-saldo="<?php echo $key->saldo ?>" 
                                                data-toggle="modal" 
                                                data-target="#myModalEdit"><button class="btn btn-secondary">Update</button></a>
                                            <a href="<?php echo site_url()?>/TabelUser/deleteUser/<?php echo $key->idUserAdmin; ?>" onclick="return confirm('Are you sure to delete this data permanently?');"><button class="btn btn-warning">Delete</button></a>
                                        </td>
                                    </tr>
                                    <?php } ?>
                            </tbody>
                                           
                                       <tfoot>
                                            <tr>
                                             <td><b>Id User</b></td>
                                    <td><b>Username</b></td>
                                    <td><b>Nama</b></td>
                                    <td><b>Alamat</b></td>
                                    <td><b>Telepon</b></td>
                                    <td><b>Email</b></td>
                                    <td><b>Saldo</b></td>

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
     <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModal" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
                    <h4 class="modal-title">Tambah User</h4>
                </div>
                    <?php echo form_open_multipart('TabelAdmin2/addUser');?>
                
                    <div class="modal-body">
                            <div class="form-group">
                                <label class="col-lg-2 col-sm-2 control-label">Username</label>
                                <div class="col-lg-10">
                                    <input type="text" class="form-control" name="username" placeholder="username">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-lg-2 col-sm-2 control-label">Password</label>
                                <div class="col-lg-10">
                                    <input type="password" class="form-control" name="password" placeholder="password">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-lg-2 col-sm-2 control-label">Nama</label>
                                <div class="col-lg-10">
                                    <input type="text" class="form-control" name="nama" placeholder="nama">
                                </div>
                            </div>
                             <div class="form-group">
                                <div class="form-group">
                                <label for="col-lg-2 col-sm-2 control-label">Foto</label>
                                <div class="col-lg-10">
                                <input type="file" class="form-control" name="foto" value="" placeholder="upload foto" >

                            </div>
                                <label class="col-lg-2 col-sm-2 control-label">Alamat</label>
                                <div class="col-lg-10">
                                    <textarea class="form-control" name="alamat" placeholder="alamat"></textarea>
                                </div>
                            </div>
                             <div class="form-group">
                                <label class="col-lg-2 col-sm-2 control-label">Telepon</label>
                                <div class="col-lg-10">
                                    <input class="form-control" name="telepon" placeholder="telepon">
                                </div>
                            </div>
                             <div class="form-group">
                                <label class="col-lg-2 col-sm-2 control-label">Email</label>
                                <div class="col-lg-10">
                                    <input type="text" class="form-control" name="email" placeholder="email">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-lg-2 col-sm-2 control-label">Saldo</label>
                                <div class="col-lg-10">
                                    <input type="text" class="form-control" name="saldo" placeholder="0">
                                </div>
                            </div>
                           
                        </div>
                        <div class="modal-footer">
                            <button class="btn btn-info" type="submit"> Simpan&nbsp;</button>
                            <button type="button" class="btn btn-warning" data-dismiss="modal"> Batal</button>
                        </div>
                     <?php echo form_close(); ?>
                </div>
            </div>
        </div></div>

        <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModalEdit" class="modal fade-in">
        <div class="modal-dialog">
            <div class="modal-content" style="padding: 20px">
                <div class="modal-header">
                    <h4 class="modal-title">Edit Data</h4>
                </div>
     <?php echo form_open_multipart('TabelUser/updateUser'); ?>
                <div class="form-group">
                <input type="text" name="idUserAdmin" id="idUserAdmin" hidden="">
                <input type="text" name="password2"  id="password2" hidden="">
                <label for="">Username</label>
                <input type="text" class="form-control" id="username" name="username" value="" placeholder="username" >
                </div>

                <div class="form-group">
                <label for="">Password</label>
                <input type="password" class="form-control" name="password" id="password" value="" placeholder="password" >
                </div>
                <div class="form-group">
                <label for="">Nama</label>
                <input type="text" class="form-control" name="nama" id="nama" value="" placeholder="password" >
                </div>
                <div class="form-group">
                <label for="">Alamat</label>
                <input type="text" class="form-control" id="alamat" name="alamat" value="" >
                </div>
                <div class="form-group">
                <label for="">Telepon</label>
                <input type="text" class="form-control" name="telepon" id="telepon" value="" >
                </div>
                <div class="form-group">
                <label for="">Email</label>
                <input type="text" class="form-control" name="email" id="email" value="">
                </div>
              
                <div class="form-group">
                <label for="col-lg-2 col-sm-2 control-label">Saldo</label>
                <input type="text" class="form-control" name="saldo" id="saldo" value="" placeholder="" >
                </div>
                <center><button type="submit" class="btn btn-primary">Submit</button></center>
                <?php echo form_close(); ?>
    </div>
    </div>
    </div>
</div>
        
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
     <script src="<?php echo base_url()?>assets/admin/libs/jquery/dist/jquery.min.js"></script>
<script type="text/javascript">
    function showmodal(id,username,password,nama,alamat,telepon,email,saldo){
        document.getElementById('idUserAdmin').value = id;
        document.getElementById('username').value=username;
        document.getElementById('nama').value=nama;
        document.getElementById('password').value=password;
        document.getElementById('password2').value=password;
        document.getElementById('email').value=email;      
        document.getElementById('alamat').value=alamat;
        document.getElementById('telepon').value=telepon;
         document.getElementById('saldo').value=saldo;

        
    }
</script>
  
  
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