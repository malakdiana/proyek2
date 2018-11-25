
<div class="col-md-9"> 
<div style="background:#202120; color: white; height: 241px; text-align: center; margin-left: -20px;min-height: 1000px"><br>
<div class="container"> 
<div class="title"> PROFIL</div><br>

<style>
  .tombolmu:hover{
    font-weight: underline;
  }
  .btn-blues{
    background-color: #3e7bbc;
    transition: all 0.5s ease;
    border-radius: 0px;font-size: 14px;
    color: white;
  }
  .btn-blues:hover{
    background-color: grey;

  }
</style>

<link rel="stylesheet" href="<?php echo base_url()?>assets/user/navtabs.css">

<div class="w3-container">

  <div class="w3-row">
    <a href="javascript:void(0)" onclick="openCity(event, 'profil');">
      <div class="w3-half tablink w3-bottombar w3-hover-light-grey w3-padding w3-show">Update Profil</div>
    </a>
    <a href="javascript:void(0)" onclick="openCity(event, 'password');">
      <div class="w3-half tablink w3-bottombar w3-hover-light-grey w3-padding">Update Password</div>
    </a>
   
  </div>

  <div id="profil" class="w3-container city" style="display:block">
    
    <Br><Br><div align="left" class="row"> 
    

<div class="col-md-3">
 <img src="<?php echo base_url()?>assets/upload/<?php echo $daftarprofil[0]->foto?>" class="img-circle" width="150" />
                             
                                    <?php echo form_open_multipart('TabelProfil/updateFoto');?>
                                    <div>
                                    <input type="file" id="foto" name="foto"  />

                                    </div><br>
                                    <button type="submit" class="btn btn-primary">Ganti Foto</button>
                                    <?php echo form_close();?> 
</div>
<div class="col-md-9"> 
    <?php echo form_open_multipart('ProfilUser/update'); ?>
                <div class="form-group">
                <label for="">ID </label>
                <input type="text" class="form-control xx" name="id" value="<?php echo $daftarprofil[0]->idUserAdmin ?>" readonly placeholder="username" style="border-radius: 0px; background-color: #161616;color: white">
                </div>
                <div class="form-group">
                <label for="">Username</label>
                <input type="text" class="form-control xx" name="username" value="<?php echo $daftarprofil[0]->username ?>" placeholder="username" style="border-radius: 0px; background-color: #161616;color: white">
                </div>
               
                <div class="form-group">
                <label for="">Nama</label>
                <input type="text" class="form-control" name="nama" value="<?php echo $daftarprofil[0]->nama?>" placeholder="nama" style="border-radius: 0px; background-color: #161616;color: white">
                </div>
                <div class="form-group">
                <label for="">Alamat</label>
                <input type="text" class="form-control" name="alamat" value="<?php echo $daftarprofil[0]->alamat?>" placeholder="alamat" style="border-radius: 0px; background-color: #161616;color: white" >
                </div>
                <div class="form-group">
                <label for="">Telepon</label>
                <input type="text" class="form-control" name="telepon" value="<?php echo $daftarprofil[0]->telepon?>" placeholder="telepon" style="border-radius: 0px; background-color: #161616;color: white" >
                </div>
                <div class="form-group">
                <label for="" >Email</label>
                <input type="text" class="form-control xx" name="email" value="<?php echo $daftarprofil[0]->email?>" placeholder="email" style="border-radius: 0px; background-color:#161616;color: white" >
                </div>
                
                <button type="submit" class="btn btn-blues">Update My Profil</button>
  <?php echo form_close(); ?>
            </div>
  </div>
</div>
  <div id="password" class="w3-container city" style="display:none">
    <div align="left">
  <br>
 <div class="form-group col-md-7">
  <?php echo form_open_multipart('ProfilUser/updatePass'); ?>
              <label for="">Password Lama</label>
                <input type="password" class="form-control" name="password1" value="" placeholder="password" style="border-radius: 0px; background-color: #161616;color: white" >
              
                <label for="">Password Baru</label>
                <input type="password" class="form-control" name="password" value="" placeholder="password" style="border-radius: 0px; background-color: #161616;color: white" >
                <br>
                <button type="submit" class="btn btn-blues" style="background-color: #3e7bbc; color: white; border-radius: 0px;font-size: 14px;">Update Password</button>
  <?php echo form_close(); ?>
</div>
</div>
</div>
<br><br>

 
</div>
<br><br><br>
 <?=$this->session->flashdata('notif2')?>
<script>
function openCity(evt, cityName) {
  var i, x, tablinks;
  x = document.getElementsByClassName("city");
  for (i = 0; i < x.length; i++) {
     x[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablink");
  for (i = 0; i < x.length; i++) {
     tablinks[i].className = tablinks[i].className.replace(" w3-border-green", "");
  }
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.firstElementChild.className += " w3-border-green";
}
</script>


 <div class="container">
   <script src="<?php echo base_url()?>assets/user/lib/jquery/jquery.min.js"></script>
  <script src="<?php echo base_url()?>assets/user/lib/jquery/jquery-migrate.min.js"></script>
  <script src="<?php echo base_url()?>assets/user/lib/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="<?php echo base_url()?>assets/user/lib/easing/easing.min.js"></script>
  <script src="<?php echo base_url()?>assets/user/lib/superfish/hoverIntent.js"></script>
  <script src="<?php echo base_url()?>assets/user/lib/superfish/superfish.min.js"></script>
  <script src="<?php echo base_url()?>assets/user/lib/wow/wow.min.js"></script>
  <script src="<?php echo base_url()?>assets/user/lib/waypoints/waypoints.min.js"></script>
  <script src="<?php echo base_url()?>assets/user/lib/counterup/counterup.min.js"></script>
  <script src="<?php echo base_url()?>assets/user/lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="<?php echo base_url()?>assets/user/lib/isotope/isotope.pkgd.min.js"></script>
  <script src="<?php echo base_url()?>assets/user/lib/lightbox/js/lightbox.min.js"></script>
  <script src="<?php echo base_url()?>assets/user/lib/touchSwipe/jquery.touchSwipe.min.js"></script>
  <!-- Contact Form JavaScript File -->
  <script src="<?php echo base_url()?>assets/user/contactform/contactform.js"></script>

  <!-- Template Main Javascript File -->
  <script src="<?php echo base_url()?>assets/user/js/main.js"></script>

</body>
</html>
