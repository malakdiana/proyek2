<style type="text/css">

 @import url("http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,400italic");
    @import url("//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.css");
.nama{
  font-size: 15px;

}
.form-group{
  font-size: 14px;
}
.form-control{
  font-size: 14px;
}
.saldo{
  border-left: 1px solid white;
   border-top: 1px solid white;
   border-right: 1px solid white;
   border-bottom: 1px solid white; 
   margin-left: 13px; margin-right: 11px;
  padding: 10px 12px;

}

.title{
  
  text-align: left;
  font-family: Quicksand,sans-serif;
  font-size:40px;

}
.ket{
   margin-left: 13px; margin-right: 11px;
   padding: 0 12px;
   background-color: #3e7bbc;
   font-size: 12px; padding-top: 10px;padding-bottom: 10px;


}
 .tombol{
  width:  100%;
  height: 50px;
border:0px;
    border-radius: 0;
    color: white;
    background:black;
    text-align: left;
    transition: all 0.5s ease;
  }
  .tombol:hover {
   background: grey;
   color: white;
}

</style> 
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>BizPage Bootstrap Template</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

 
  <!-- Favicons -->
  <link href="<?php echo base_url()?>assets/user/img/favicon.png" rel="icon">
  <link href="<?php echo base_url()?>assets/user/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Montserrat:300,400,500,700" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="<?php echo base_url()?>assets/user/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="<?php echo base_url()?>assets/user/lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="<?php echo base_url()?>assets/user/lib/animate/animate.min.css" rel="stylesheet">
  <link href="<?php echo base_url()?>assets/user/lib/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="<?php echo base_url()?>assets/user/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="<?php echo base_url()?>assets/user/lib/lightbox/css/lightbox.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="<?php echo base_url()?>assets/user/css/style.css" rel="stylesheet">

  <!-- =======================================================
    Theme Name: BizPage
    Theme URL: https://bootstrapmade.com/bizpage-bootstrap-business-template/
    Author: BootstrapMade.com
    License: https://bootstrapmade.com/license/
  ======================================================= -->
</head>
<body style="overflow-y:auto;">
<div style="background: url(<?php echo base_url()?>assets/user/img/bgproyek.jpg); padding-left: 90px;  height: auto;top: 0; left: 0; overflow-y:auto; min-height: 1000px; overflow-x: hidden; background-size: cover;">
<div class="row">
<div class="col-md-2"> 
<div style="background: black; color: white; height: 241px; text-align: left; min-height: 1000px; margin-right: -10px;">
  <img src="<?php echo base_url("assets/user/img/logoproyek.png") ?>" alt="" style="width: 100%">
    <img src="<?php echo base_url()?>assets/upload/<?php echo $this->session->userdata('logged_in')['foto'] ?>" alt="" style="width: 50%;margin: 0 25%; margin-top: 5%" class="rounded-circle"><br><br>
    <div align="center" class="nama">
      <?php echo $this->session->userdata('logged_in')['username'] ?>
      <p class="text-muted"><?php echo $this->session->userdata('logged_in')['email'] ?></p>
    </div>

    <div class="saldo">SALDO&nbsp;&nbsp;&nbsp;: Rp &nbsp;<?php echo $this->session->userdata('logged_in')['saldo'] ?></div><br>
    <div class="ket" align="center">HARAP ISI BALANCE/SALDO ANDA. PENGISIAN DAPAT DILAKUKAN DI SEMUA CABANG INI CINEMA </div><br>
   <hr color="#3e7bbc"  style="margin-bottom:1px">
    <a href="<?php echo site_url()?>/profiluser/profil"><button class="tombol">&nbsp;&nbsp;<i class="fa fa-user"></i>&nbsp;&nbsp;&nbsp;Profil </button> <hr color="#3e7bbc" style="margin-bottom:1px;margin-top: 1px"></a>
    <a href="<?php echo site_url()?>/profiluser/pesan">
    <button class="tombol">&nbsp;&nbsp;<i class="fa fa-play"></i>&nbsp;&nbsp;&nbsp;Pesan Tiket</button><hr color="#3e7bbc"  style="margin-bottom:1px;margin-top: 1px"></a>
   <a href="<?php echo site_url()?>/profiluser/daftarPembelian">  <button class="tombol">&nbsp;&nbsp;<i class="fa fa-table"></i>&nbsp;&nbsp;&nbsp;Daftar Pembelian</button></a><hr color="#3e7bbc" style="margin-bottom:1px;margin-top: 1px">
   <a href="<?php echo site_url()?>/profiluser/tambahsaldo">  <button class="tombol">&nbsp;&nbsp;<i class="fa fa-table"></i>&nbsp;&nbsp;&nbsp;Tambah Saldo</button></a><hr color="#3e7bbc" style="margin-bottom:1px;margin-top: 1px">
   <a href="<?php echo site_url()?>/profiluser/Bantuan"><button class="tombol">&nbsp;&nbsp;<i class="fa fa-question-circle"></i>&nbsp;&nbsp;&nbsp;Bantuan</button></a><hr color="#3e7bbc"  style="margin-bottom:1px;margin-top: 1px">
    <a href="<?php echo site_url()?>/login/logout"><button class="tombol">&nbsp;&nbsp;<i class="fa fa-sign-out"></i>&nbsp;&nbsp;&nbsp;Keluar</button></a><hr color="#3e7bbc"  style="margin-bottom:1px;margin-top: 1px">


</div></div>