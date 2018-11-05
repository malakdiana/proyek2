
       <style type="text/css">
           * {margin:0; padding: 0;}

body {font-family: Arial, Helvetica, sans-serif;}

/* Tombol Button Pesan */
#button {margin: 5% auto; width: 100px; text-align: center;}
#button a {
    width: 100px;
    height: 30px;
    vertical-align: middle;
    background-color: #F00;
    color: #fff;
    text-decoration: none;
    padding: 10px;
    border-radius: 5px;
    border: 1px solid transparent;
}

/* Jendela Pop Up */
#popup {
    width: 100%;
    height: 100%;
    position: fixed;
    background: rgba(0,0,0,.7);
    top: 0;
    left: 0;
    z-index: 9999;
    visibility: hidden;
}

.window {
    width: 600px;
    height: 200px;
    background: #fff;
    border-radius: 10px;
    position: relative;
    padding: 10px;
    text-align: center;
    margin: 15% auto;
}
.window h2 {
    margin: 30px 0 0 0;
}
/* Button Close */
.close-button {
    width: 6%;
    height: 20%;
    line-height: 23px;
    background: #000;
    border-radius: 50%;
    border: 3px solid #fff;
    display: block;
    text-align: center;
    color: #fff;
    text-decoration: none;
    position: absolute;
    top: -10px;
    right: -10px;   
}

/* Memunculkan Jendela Pop Up*/
#popup:target {
    visibility: visible;
}
       </style>
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
             <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-12 d-flex no-block align-items-center">
                        <h4 class="page-title">Dashboard</h4>
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
                <!-- Sales Cards  -->
                <!-- ============================================================== -->
                <div class="row">
                    <!-- Column -->
                    <div class="col-md-8 col-lg-4">
                        <div class="card card-hover">
                            <div class="box bg-cyan text-center" style="height: 100px">
                                
                                <h6 class="text-white" align="right">Penjualan Hari Ini</h6>
                                <?php foreach ($penjualan as $data) { ?>
                                <h2 class="text-white" align="right">Rp. <?php echo $data->total?></h2>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                    <div class="col-md-8 col-lg-4">
                        <div class="card card-hover">
                            <div class="box bg-success text-center" style="height: 100px">
                                <h6 class="text-white" align="right">Jumlah Tiket Terjual</h6>
                               <?php foreach ($tiket as $data) { ?>
                                <h2 class="text-white" align="right"><?php echo $data->total?></h2>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                     <!-- Column -->
                    <div class="col-md-8 col-lg-4">
                        <div class="card card-hover">
                            <div class="box bg-warning text-center" style="height: 100px">
                                <h6 class="text-white" align="right">Topup Saldo Hari Ini</h6>
                                 <?php foreach ($saldo as $data) { ?>
                                <h2 class="text-white" align="right">Rp <?php echo $data->total?></h2>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                   
                    <!-- Column -->
                </div>
                <!-- ============================================================== -->
                <!-- Sales chart -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-md-flex align-items-center">
                                    <div>
                                        <h4 class="card-title">Site Analysis</h4>
                                        <h5 class="card-subtitle">Overview of Latest Month</h5>
                                    </div>
                                </div>
                                <div class="row">
                                  
                                    <div class="col-lg-9">
                                    <?php foreach ($filmPersen as $key) {
                               
                                    $kursi[] = $key->total1;
                                    $judul[]=$key->judulFilm;} ?>
                                    <canvas id="canvas" width="800" height="280"></canvas>

    <!--Load chart js-->
    <script type="text/javascript" src="<?php echo base_url().'assets/chartjs/chart.min.js'?>"></script>
    <script>

            var lineChartData = {
                labels : <?php echo json_encode($judul);?>,
                datasets : [
                    
                    {
                        fillColor: "rgba(60,141,188,0.9)",
                        strokeColor: "rgba(60,141,188,0.8)",
                        pointColor: "#3b8bba",
                        pointStrokeColor: "#fff",
                        pointHighlightFill: "#fff",
                        pointHighlightStroke: "rgba(152,235,239,1)",
                        data : <?php echo json_encode($kursi);?>
                    }

                ]
                
            }

        var myLine = new Chart(document.getElementById("canvas").getContext("2d")).Bar(lineChartData);
        
    </script>
                                       <!-- <div class="flot-chart">
                                            <div class="flot-chart-content" id="flot-line-chart"></div>
                                        </div>-->
                                    </div> 
                                    <div class="col-lg-3">
                                        <div class="row">
                                            <div class="col-6">
                                                <div class="bg-dark p-10 text-white text-center">
                                                   <i class="fa fa-user m-b-5 font-16"></i>
                                                   <?php foreach ($user as $data) { ?>
                                                   <h5 class="m-b-0 m-t-5"><?php echo $data->total ?></h5>
                                                   <?php }?>
                                                   <small class="font-light">Total Users</small>
                                                </div>
                                            </div>
                                             <div class="col-6">
                                                <div class="bg-dark p-10 text-white text-center">
                                                   <i class="fa fa-users m-b-5 font-16"></i>
                                                   <?php foreach ($admin as $data) { ?>
                                                   <h5 class="m-b-0 m-t-5"><?php echo $data->total ?></h5>
                                                   <?php }?>
                                                   <small class="font-light">Total Admin</small>
                                                </div>
                                            </div>
                                            <div class="col-6 m-t-15">
                                                <div class="bg-dark p-10 text-white text-center">
                                                   <i class="fa fa-cart-plus m-b-5 font-16"></i>
                                                  <?php foreach ($tpenjualan as $data) { ?>
                                                   <h5 class="m-b-0 m-t-5"><?php echo $data->total ?></h5>
                                                   <?php }?>
                                                   <small class="font-light">Total Pembelian</small>
                                                </div>
                                            </div>
                                             <div class="col-6 m-t-15">
                                                <div class="bg-dark p-10 text-white text-center">
                                                   <i class="fa fa-tag m-b-5 font-16"></i>
                                                   <?php foreach ($film as $data) { ?>
                                                   <h5 class="m-b-0 m-t-5"><?php echo $data->total ?></h5>
                                                   <?php }?>
                                                   <small class="font-light">Total Film</small>
                                                </div>
                                            </div>
                                            <div class="col-6 m-t-15">
                                                <div class="bg-dark p-10 text-white text-center">
                                                   <i class="fa fa-table m-b-5 font-16"></i>
                                                    <?php foreach ($konf as $data) { ?>
                                                   <h5 class="m-b-0 m-t-5"><?php echo $data->total ?></h5>
                                                   <?php }?>                                                   <small class="font-light">Konfirmasi saldo</small>
                                                </div>
                                            </div>
                                           <!--  <div class="col-6 m-t-15">
                                                <div class="bg-dark p-10 text-white text-center">
                                                   <i class="fa fa-globe m-b-5 font-16"></i>
                                                   <h5 class="m-b-0 m-t-5">8540</h5>
                                                   <small class="font-light">Online Orders</small>
                                                </div>
                                            </div> -->
                                        </div>
                                    </div>
                                    <!-- column -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- Sales chart -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Recent comment and chats -->
                <!-- ============================================================== -->
                <div class="row">
                    <!-- column -->
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Konfirmasi Saldo</h4>
                            </div>
                            <div class="comment-widgets scrollable">
                                <!-- Comment Row -->
                                
                                <?php foreach ($konfirmasi as $key) {?>
                                
                                <div class="d-flex flex-row comment-row m-t-0">
                                    <div class="p-2"><img src="<?php echo base_url()?>/assets/upload/<?php echo $key->foto?>" alt="user" width="50" class="rounded-circle"></div>
                                    <div class="comment-text w-100">
                                        <h6 class="font-medium"><?php echo $key->nama?></h6>
                                        <span class="m-b-15 d-block">Top Up Saldo : Rp. <?php echo $key->jumlah?></span>
                                        <div class="comment-footer">
                                            <span class="text-muted float-right"><?php echo $key->tanggalBeli?></span> 
                                            
                                            <a href="javascript:void(0);" onclick="showmodal('<?php echo $key->idTransaksi ?>','<?php echo $key->idUserAdmin ?>','<?php echo $key->jumlah ?>','<?php echo $key->email ?>')" data-id="<?php echo $key->idTransaksi ?>" data-nama="<?php echo  $key->nama ?>" data-jumlah="<?php echo $key->jumlah ?>" data-toggle="modal" data-target="#edit-data">
                                            <button type="button" class="btn btn-cyan btn-sm">Konfirmasi</button>
                                            </a>
                                            <a class="btn default btn-outline image-popup-vertical-fit el-link" href="<?php echo base_url()?>assets/upload/buktisaldo/<?php echo $key->bukti?>">
                                            <button type="button" class="btn btn-success btn-sm image-popup-vertical-fit el-link">Lihat Bukti</button></a>
                                            <button type="button" class="btn btn-danger btn-sm">Delete</button>

                                        </div>
                                    </div>
                                </div>
                                 <div id="popup">
        <div class="window">
            <a href="#" class="close-button" title="Close">X</a>
           <img src="<?php echo base_url()?>assets/upload/buktisaldo/<?php echo $key->bukti?>" >
        </div>
    </div>
                                    <?php }?>
                                <!-- Comment Row -->
                                
                            </div>
                        </div>
                        <!-- Card -->
                        
                    </div>
                    <!-- column -->

                    <div class="col-lg-6">
                       
                         <div class="card">
                            <div class="card-body">
                                <h4 class="card-title m-b-0">Penjualan Film</h4>
                                <?php foreach ($filmPersen as $key) { ?>
                                <?php  foreach ($tayang as $data) {
                                    if(($key->noFilm)==($data->noFilm) && $data->total2>0){
                                    $kursi = $key->total1;
                                    $kursi2= $data->total2;
                                                $hasil = $kursi/$kursi2*100;?>
                                     
                                <div class="m-t-20">
                                    <div class="d-flex no-block align-items-center">
                                        <span><?php echo $key->judulFilm;?><br> terjual: <?php echo $kursi?></span>
                                        <div class="ml-auto">
                                            <span><?php echo $kursi2?></span>
                                        </div>
                                    </div>
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-striped bg-success" role="progressbar" style="width: <?php echo $hasil;?>%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                                <div>
                                <?php }}}?>
                                   
                            </div>
                        </div>
                       
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- Recent comment and chats -->
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
     <!-- Modal Ubah -->
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
                        <input type="text" hidden="true" id="email" name="email">
                    <div class="modal-footer">
                        <button class="btn btn-info" type="submit"> Konfirmasi&nbsp;</button>
                        <?php echo form_close(); ?>
                        <button type="button" class="btn btn-warning" data-dismiss="modal"> Batal</button>
                    </div>
                </div>
            
            </div>
        </div>
    </div>
</div>
 

<script type="text/javascript">
    function showmodal(id,user,jml,email){
        document.getElementById('id').value = id;
        document.getElementById('nama').value = user;
        document.getElementById('jumlah').value = jml;
        document.getElementById('email').value = email;
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

</body>

</html>