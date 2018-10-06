
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
                                    <!-- column -->
                                    <div class="col-lg-9">
                                        <div class="flot-chart">
                                            <div class="flot-chart-content" id="flot-line-chart"></div>
                                        </div>
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
                                            <div class="col-6 m-t-15">
                                                <div class="bg-dark p-10 text-white text-center">
                                                   <i class="fa fa-globe m-b-5 font-16"></i>
                                                   <h5 class="m-b-0 m-t-5">8540</h5>
                                                   <small class="font-light">Online Orders</small>
                                                </div>
                                            </div>
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
                                            
                                            <a href="javascript:void(0);" onclick="showmodal('<?php echo $key->idTransaksi ?>','<?php echo $key->idUserAdmin ?>','<?php echo $key->jumlah ?>')" data-id="<?php echo $key->idTransaksi ?>" data-nama="<?php echo  $key->nama ?>" data-jumlah="<?php echo $key->jumlah ?>" data-toggle="modal" data-target="#edit-data">
                                            <button type="button" class="btn btn-cyan btn-sm">Konfirmasi</button>
                                            </a>
                                            <button type="button" class="btn btn-success btn-sm">Lihat Bukti</button>
                                            <button type="button" class="btn btn-danger btn-sm">Delete</button>
                                        </div>
                                    </div>
                                </div>
                                    <?php }?>
                                <!-- Comment Row -->
                                
                            </div>
                        </div>
                        <!-- Card -->
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">To Do List</h4>
                                <div class="todo-widget scrollable" style="height:450px;">
                                    <ul class="list-task todo-list list-group m-b-0" data-role="tasklist">
                                        <li class="list-group-item todo-item" data-role="task">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="customCheck">
                                                <label class="custom-control-label todo-label" for="customCheck">
                                                    <span class="todo-desc">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</span> <span class="badge badge-pill badge-danger float-right">Today</span>
                                                </label>
                                            </div>
                                            <ul class="list-style-none assignedto">
                                                <li class="assignee"><img class="rounded-circle" width="40" src="<?php echo base_url()?>/assets/admin/images/users/1.jpg" alt="user" data-toggle="tooltip" data-placement="top" title="" data-original-title="Steave"></li>
                                                <li class="assignee"><img class="rounded-circle" width="40" src="<?php echo base_url()?>/assets/admin/images/users/2.jpg" alt="user" data-toggle="tooltip" data-placement="top" title="" data-original-title="Jessica"></li>
                                                <li class="assignee"><img class="rounded-circle" width="40" src="<?php echo base_url()?>/assets/admin/images/users/3.jpg" alt="user" data-toggle="tooltip" data-placement="top" title="" data-original-title="Priyanka"></li>
                                                <li class="assignee"><img class="rounded-circle" width="40" src="<?php echo base_url()?>/assets/admin/images/users/4.jpg" alt="user" data-toggle="tooltip" data-placement="top" title="" data-original-title="Selina"></li>
                                            </ul>
                                        </li>
                                        <li class="list-group-item todo-item" data-role="task">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="customCheck1">
                                                <label class="custom-control-label todo-label" for="customCheck1">
                                                    <span class="todo-desc">Lorem Ipsum is simply dummy text of the printing</span><span class="badge badge-pill badge-primary float-right">1 week </span>
                                                </label>
                                            </div>
                                            <div class="item-date"> 26 jun 2017</div>
                                        </li>
                                        <li class="list-group-item todo-item" data-role="task">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="customCheck2">
                                                <label class="custom-control-label todo-label" for="customCheck2">
                                                    <span class="todo-desc">Give Purchase report to</span> <span class="badge badge-pill badge-info float-right">Yesterday</span>
                                                </label>
                                            </div>
                                            <ul class="list-style-none assignedto">
                                                <li class="assignee"><img class="rounded-circle" width="40" src="<?php echo base_url()?>/assets/admin/images/users/3.jpg" alt="user" data-toggle="tooltip" data-placement="top" title="" data-original-title="Priyanka"></li>
                                                <li class="assignee"><img class="rounded-circle" width="40" src="<?php echo base_url()?>/assets/admin/images/users/4.jpg" alt="user" data-toggle="tooltip" data-placement="top" title="" data-original-title="Selina"></li>
                                            </ul>
                                        </li>
                                        <li class="list-group-item todo-item" data-role="task">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="customCheck3">
                                                <label class="custom-control-label todo-label" for="customCheck3">
                                                    <span class="todo-desc">Lorem Ipsum is simply dummy text of the printing </span> <span class="badge badge-pill badge-warning float-right">2 weeks</span>
                                                </label>
                                            </div>
                                            <div class="item-date"> 26 jun 2017</div>
                                        </li>
                                        <li class="list-group-item todo-item" data-role="task">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="customCheck4">
                                                <label class="custom-control-label todo-label" for="customCheck4">
                                                    <span class="todo-desc">Give Purchase report to</span> <span class="badge badge-pill badge-info float-right">Yesterday</span>
                                                </label>
                                            </div>
                                            <ul class="list-style-none assignedto">
                                                <li class="assignee"><img class="rounded-circle" width="40" src="<?php echo base_url()?>/assets/admin/images/users/3.jpg" alt="user" data-toggle="tooltip" data-placement="top" title="" data-original-title="Priyanka"></li>
                                                <li class="assignee"><img class="rounded-circle" width="40" src="<?php echo base_url()?>/assets/admin/images/users/4.jpg" alt="user" data-toggle="tooltip" data-placement="top" title="" data-original-title="Selina"></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- card -->
                       
                        <!-- card new -->
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title m-b-0">News Updates</h4>
                            </div>
                            <ul class="list-style-none">
                                <li class="d-flex no-block card-body">
                                    <i class="fa fa-check-circle w-30px m-t-5"></i>
                                    <div>
                                        <a href="#" class="m-b-0 font-medium p-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</a>
                                        <span class="text-muted">dolor sit amet, consectetur adipiscing</span>
                                    </div>
                                    <div class="ml-auto">
                                        <div class="tetx-right">
                                            <h5 class="text-muted m-b-0">20</h5>
                                            <span class="text-muted font-16">Jan</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="d-flex no-block card-body border-top">
                                    <i class="fa fa-gift w-30px m-t-5"></i>
                                    <div>
                                        <a href="#" class="m-b-0 font-medium p-0">Congratulation Maruti, Happy Birthday</a>
                                        <span class="text-muted">many many happy returns of the day</span>
                                    </div>
                                    <div class="ml-auto">
                                        <div class="tetx-right">
                                            <h5 class="text-muted m-b-0">11</h5>
                                            <span class="text-muted font-16">Jan</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="d-flex no-block card-body border-top">
                                    <i class="fa fa-plus w-30px m-t-5"></i>
                                    <div>
                                        <a href="#" class="m-b-0 font-medium p-0">Maruti is a Responsive Admin theme</a>
                                        <span class="text-muted">But already everything was solved. It will ...</span>
                                    </div>
                                    <div class="ml-auto">
                                        <div class="tetx-right">
                                            <h5 class="text-muted m-b-0">19</h5>
                                            <span class="text-muted font-16">Jan</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="d-flex no-block card-body border-top">
                                    <i class="fa fa-leaf w-30px m-t-5"></i>
                                    <div>
                                        <a href="#" class="m-b-0 font-medium p-0">Envato approved Maruti Admin template</a>
                                        <span class="text-muted">i am very happy to approved by TF</span>
                                    </div>
                                    <div class="ml-auto">
                                        <div class="tetx-right">
                                            <h5 class="text-muted m-b-0">20</h5>
                                            <span class="text-muted font-16">Jan</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="d-flex no-block card-body border-top">
                                    <i class="fa fa-question-circle w-30px m-t-5"></i>
                                    <div>
                                        <a href="#" class="m-b-0 font-medium p-0"> I am alwayse here if you have any question</a>
                                        <span class="text-muted">we glad that you choose our template</span>
                                    </div>
                                    <div class="ml-auto">
                                        <div class="tetx-right">
                                            <h5 class="text-muted m-b-0">15</h5>
                                            <span class="text-muted font-16">Jan</span>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
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
                                        <span><?php echo $key->judulFilm;?></span>
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

</body>

</html>