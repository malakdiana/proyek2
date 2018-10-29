 <div class="page-wrapper">
  
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-12 d-flex no-block align-items-center">
                        <h4 class="page-title">Tabel Jadwal</h4>
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
                                    
                                                <td><b>Film</b></td>
                                                <td><b>Studio</b></td>
                                                <td><b>Tanggal</b></td>
                                                <td><b>Jam</b></td>
                                                <td><b>Harga</b></td>
                                                <td><b>Aksi</td>
                                               
                                            </tr>
                                        </thead>
                                        <tbody>
                                          <?php foreach ($jadwal_list as $data) { ?>
                                             <tr>
                           
                                                <td><?php echo $data->noFilm ?>-<?php echo $data->judulFilm ?></td>
                                                <td><?php echo $data->idStudio ?>-<?php echo $data->namaStudio ?></td>
                                                <td><?php echo $data->tanggalTayang ?></td>
                                                <td><?php echo $data->jadwalTayang ?></td>
                                                <td><?php echo $data->harga ?></td>
                                                <td><a href="javascript:void(0);" onclick="showmodal('<?php echo $data->idJadwal ?>','<?php echo $data->noFilm ?>','<?php echo $data->idStudio ?>','<?php echo $data->tanggalTayang ?>','<?php echo $data->jadwalTayang ?>','<?php echo $data->harga ?>')" 
                                                    data-id="<?php echo $data->idJadwal ?>" 
                                                    data-film="<?php echo $data->noFilm ?>" 
                                                    data-studio="<?php echo $data->idStudio ?>"
                                                    data-tanggal="<?php echo $data->tanggalTayang ?>" 
                                                    data-jadwal="<?php echo $data->jadwalTayang ?>"
                                                    data-harga="<?php echo $data->harga ?>"
                                                    data-toggle="modal" 
                                                    data-target="#myModalEdit"><button class="btn btn-info">Update</button></a>
                                     <a href="<?php echo site_url()?>/TabelJadwal/deleteJadwal/<?php echo $data->idJadwal; ?>" onclick="return confirm('Are you sure to delete this data permanently?');"><button class="btn btn-warning">delete</button></a></td>


                                            </tr>
                                            <?php } ?>
                                           </tbody>
                                       <tfoot>
                                            <tr>
                                             
                                                <td><b>Film</b></td>
                                                <td><b>Studio</b></td>
                                                <td><b>Tanggal</b></td>
                                                <td><b>Jam</b></td>
                                                <td><b>Harga</b></td>
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
    
 <!-- modal tambah -->
<div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModal" class="modal fade-in">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Tambah Data</h4>
                </div>
    <?php echo form_open('TabelJadwal/addJadwal');?>
    <div class="modal-body">
        <div class="form-group">
              <label class="col-lg-2 col-sm-2 control-label">Film</label>
                <div class="col-lg-12">
                        <select class="form-control" name="film2">
                                <option  value="">Select Film</option>                   
                                <?php foreach($film_list as $row) { ?>
                                <option value="<?php echo $row->noFilm;?>"><?php echo $row->judulFilm;?></option>
                                <?php } ?>
                        </select>
                </div>
        </div>

        <div class="form-group">
                <label class="col-lg-2 col-sm-2 control-label">Studio</label>
                <div class="col-lg-12">
                    <select class="form-control" name="studio2">
                                <option  value="">Select Film</option>                   
                                <?php foreach($studio_list as $row) { ?>
                                <option value="<?php echo $row->idStudio;?>"><?php echo $row->namaStudio;?></option>
                                <?php } ?>
                    </select>
                </div>
        </div>
        
        <div class="form-group">
               <label class="col-lg-2 col-sm-2 control-label">Tanggal</label>
                                <div class="col-lg-12">
                <input type="date" class="form-control" name="tanggal2" value="" required="">
        </div>
        </div>
        <div class="form-group">
               <label class="col-lg-2 col-sm-2 control-label">Jam</label>
                                <div class="col-lg-12">
                <input type="time" class="form-control" name="jadwal2" value="" required="">
        </div>
        </div>
        <div class="form-group">
                <label class="col-lg-2 col-sm-2 control-label">Harga</label>
                                <div class="col-lg-12">
                <input type="text" class="form-control" name="harga2" value="" required="">
        </div>
        </div>
        <div align="right" style="margin-bottom: 20px; margin-right: 30px">
          <button class="btn-info" type="submit">Tambah</button>
            <a href=""><button class="btn-warning" data-dismiss="modal">Batal</button></a>
        </div>
        <?php echo form_close(); ?>
    </div>
    </div>
    </div>
</div>


    </div>



<div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModalEdit" class="modal fade-in">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Edit Data</h4>
                </div>
     <?php echo form_open('TabelJadwal/updateJadwalById')?>
     
        <div class="form-group">
        <input type="text" hidden="" name="idJadwal" id="idJadwal">
              <label class="col-lg-2 col-sm-2 control-label">Film</label>
                <div class="col-lg-12">
               
                        <select class="form-control" name="film" id="film" >
                                 <?php foreach($film_list as $row) { 
                                    $film=$row->noFilm;
                                    ?>
                                <option value="<?php echo $row->noFilm;?>"><?php echo $row->judulFilm;?></option>
                                <?php } ?>
                              
                        </select>
                </div>
        </div>

        <div class="form-group">
            <label class="col-lg-2 col-sm-2 control-label">Studio</label>
                <div class="col-lg-12">
                    <select class="form-control" name="studio" id="studio">
                             <?php foreach($studio_list as $row) { 
                                    $studio=$row->idStudio;
                                    ?>
                                <option value="<?php echo $row->idStudio;?>"><?php echo $row->namaStudio;?></option>
                                <?php } ?>
                    </select>
                </div>
        </div>
        <div class="form-group">
              <label class="col-lg-2 col-sm-2 control-label">Tanggal</label>
                                <div class="col-lg-12">
                <input type="date" class="form-control" name="tanggal" id="tanggal" value="" required="">
                </div>
        </div>
        <div class="form-group">
              <label class="col-lg-2 col-sm-2 control-label">Jam</label>
                                <div class="col-lg-12">
                <input type="time" class="form-control" name="jadwal" id="jadwal" value="" required="">
        </div>
        </div>
        <div class="form-group">
               <label class="col-lg-2 col-sm-2 control-label">Harga</label>
                                <div class="col-lg-12">
                <input type="text" class="form-control" name="harga" id="harga" value="" required="">
        </div>
        </div>
        <div align="right" style="margin-bottom: 20px; margin-right: 30px">
          <button class="btn-info" type="submit">Update</button>
            <a href=""><button class="btn-warning" data-dismiss="modal">Batal</button></a>
        </div>
    
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
     <script src="<?php echo base_url()?>/assets/admin/libs/jquery/dist/jquery.min.js"></script>
<script type="text/javascript">
    function showmodal(id,film,studio, tgl,jam, hrg){
        document.getElementById('idJadwal').value = id;
        document.getElementById('film').value = film;
        document.getElementById('studio').value = studio;
        document.getElementById('tanggal').value = tgl;
        document.getElementById('jadwal').value = jam;
        document.getElementById('harga').value = hrg;
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