 <style>
     .fileUpload {
    position: relative;
    overflow: hidden;
    margin: 10px;
}
.fileUpload input.upload {
    position: absolute;
    top: 0;
    right: 0;
    margin: 0;
    padding: 0;
    font-size: 20px;
    cursor: pointer;
    opacity: 0;
    filter: alpha(opacity=0);
}

 </style>
 <div class="page-wrapper">
  
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-12 d-flex no-block align-items-center">
                        <h4 class="page-title">Profil</h4>
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
                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs" role="tablist">
                                <li class="nav-item"> <a class="nav-link active" data-toggle="tab" href="#home" role="tab"><span class="hidden-sm-up"></span> <span class="hidden-xs-down">Ubah profil</span></a> </li>
                                <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#profile" role="tab"><span class="hidden-sm-up"></span> <span class="hidden-xs-down">Ubah Password</span></a> </li>
                            </ul>
                            <!-- Tab panes -->
                            <div class="tab-content tabcontent-border">
                                <div class="tab-pane active" id="home" role="tabpanel">
                                    <div class="p-20">
                                   <div class="row">
                                    <div class="col-lg-4 col-xlg-3 col-md-5">
                                <div class="card">
                            <div class="card-block">
                                   <?=$this->session->flashdata('notif')?>
                                <center class="m-t-30">
                                        <?php foreach($daftarAdmin as $key ){?>

                                 <img src="<?php echo base_url()?>assets/upload/<?php echo $key->foto?>" class="img-circle" width="150" />
                 <?php };?>                
                                    <?php echo form_open_multipart('TabelProfil/updateFoto');?>
                                    <div>
                                    <input type="file" id="foto" name="foto" style="margin-left: 60px" />

                                    </div><br>
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                    <?php echo form_close();?>
                                </center>
                                <div class="custom-file-input">
  <span></span>
  <span>Browse<input type="file"></span>
</div>
                                
                            </div>
                        </div>
                    </div>          <?php foreach ($daftarAdmin as $key ) { ?>
                                        <div class="col-lg-8 col-xlg-9 col-md-7">
                        <div class="card">
                            <div class="card-block">
                                <?php echo form_open('TabelProfil/update');?>
                                <div class="form-group">
                                        <label class="col-md-12">Username</label>
                                        <div class="col-md-12">
                                            <input type="text" placeholder="" value="<?php echo $key->username?>" class="form-control form-control-line" name="username" id="username">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12">Nama</label>
                                        <div class="col-md-12">
                                            <input type="text" placeholder="" value="<?php echo $key->nama?>" class="form-control form-control-line" name="nama" id="nama">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="example-email" class="col-md-12">Alamat</label>
                                        <div class="col-md-12">
                                            <input type="text" value="<?php echo $key->alamat?>" class="form-control form-control-line" name="alamat" id="alamat">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12">Telepon</label>
                                        <div class="col-md-12">
                                            <input type="text" value="<?php echo $key->telepon?>" class="form-control form-control-line" name="telepon" id="telepon">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12">Email</label>
                                        <div class="col-md-12">
                                            <input type="email" name="email" id="email" value="<?php echo $key->email?>" class="form-control form-control-line">
                                        </div>
                                    </div>
                                   
                                    <div class="form-group">
                                        <div class="col-sm-12">
                                            <button class="btn btn-success">Update Profile</button>
                                        </div>
                                        <?php echo form_close();?>
                                        <?php }?>
                                    </div>
                             
                            </div>
                        </div>
                    </div></div>
                                    </div>
                                </div>
                                <div class="tab-pane  p-20" id="profile" role="tabpanel">
                                    <div class="p-20">
                                          <?=$this->session->flashdata('notif2')?>
                                       <div class="card">
                            <div class="card-block">
                           
                                <?php echo form_open('TabelProfil/updatePass');?>
                                <div class="form-group">
                                        <label class="col-md-12">Password Lama</label>
                                        <div class="col-md-12">
                                            <input type="Password" placeholder="" value="" class="form-control form-control-line" name="passLama" id="passLama">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12">Password Baru</label>
                                        <div class="col-md-12">
                                            <input type="Password" placeholder="" value="" class="form-control form-control-line" name="passBaru" id="passBaru">
                                        </div>

                                    </div>
                                    <button class="btn btn-danger" type="submit">Udah Password</button>
                                    <?php echo form_close();?>
                             
                                    </div>
                                    </div>

                                    </div>
                                </div>
                                <div class="tab-pane p-20" id="messages" role="tabpanel">
                                    <div class="p-20">
                                        <p>And is full of waffle to It has multiple paragraphs and is full of waffle to pad out the comment. Usually, you just wish these sorts of comments would come to an end.multiple paragraphs and is full of waffle to pad out the comment..</p>
                                       
                                    </div>
                                </div>
                            </div>
                        </div>
                            </div>
                            </div>
                            </div>
                            </div>
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
<script type="text/javascript">
    const realFileBtn = document.getElementById("foto");
const customBtn = document.getElementById("custom-button");
const customTxt = document.getElementById("custom-text");

customBtn.addEventListener("click", function() {
  realFileBtn.click();
});

realFileBtn.addEventListener("change", function() {
  if (realFileBtn.value) {
    customTxt.innerHTML = realFileBtn.value.match(
      /[\/\\]([\w\d\s\.\-\(\)]+)$/
    )[1];
  } else {
    customTxt.innerHTML = "No file chosen, yet.";
  }
});

</script>
</body>

</html>
                            