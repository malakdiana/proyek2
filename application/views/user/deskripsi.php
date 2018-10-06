<style type="text/css">

 @import url("http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,400italic");
    @import url("//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.css");
    body {
      
    
    background-color: rgb(220, 220, 220);
  }
  .list {
    color: #ffffff;
    transition: 0.5s;
}
::-webkit-scrollbar {
    width: 5px;
}
 
::-webkit-scrollbar-track {      
    background: #666;    
}
 
::-webkit-scrollbar-thumb {
    background: #232323;
}
hr{
  color: white;
}
.scroll{
  padding-right: 20px;
   overflow-y: scroll;
  height: 150px;
   overflow-x: hidden;

}
td{
  color: white;
  height: 40px;
  border-top: 2px;
}
    
    .event-list {
    list-style: none;
    font-family: 'Lato', sans-serif;
    margin: 0px;
    padding: 0px;

  }
  .event-list > li {
    background-color: rgb(255, 255, 255);
    box-shadow: 0px 0px 5px rgb(51, 51, 51);
    box-shadow: 0px 0px 5px rgba(51, 51, 51, 0.7);
    padding: 0px;
    margin: 0px 0px 20px;
  }
  .event-list > li > time {
    display: inline-block;
    width: 100%;
    color: rgb(255, 255, 255);
        background-color: rgb(0, 0, 0);
    padding: 5px;
    text-align: center;
    text-transform: uppercase;
  }
  .event-list > li:nth-child(even) > time {
    background-color: #17a2b8;
  }
  .event-list > li > time > span {
    display: none;
  }
  .event-list > li > time > .day {
    display: block;
    font-size: 56pt;
    font-weight: 100;
    line-height: 1;
  }
  .event-list > li time > .month {
    display: block;
    font-size: 18pt;
    font-weight: 900;
    line-height: 1;
    margin-top: 20px;
  }
  .event-list > li > img {
    width: 100%;
  }
  .event-list > li > .info {
    padding-top: 5px;
    text-align: center;
  }
  .event-list > li > .info > .title {
    font-size: 17pt;
    font-weight: 700;
    margin: 0px;
  }
  .event-list > li > .info > .desc {
    font-size: 13pt;
    font-weight: 300;
    margin: 0px;
  }
  .event-list > li > .info > ul,
  .event-list > li > .social > ul {
    display: table;
    list-style: none;
    margin: 10px 0px 0px;
    padding: 0px;
    width: 100%;
    text-align: center;
  }
  .event-list > li > .social > ul {
    margin: 0px;
  }
  .event-list > li > .info > ul > li,
  .event-list > li > .social > ul > li {
    display: table-cell;
    cursor: pointer;
    color: rgb(30, 30, 30);
    font-size: 11pt;
    font-weight: 300;
        padding: 3px 0px;
  }
    .event-list > li > .info > ul > li > a {
    display: block;
    width: 100%;
    color: rgb(30, 30, 30);
    text-decoration: none;
  } 
    .event-list > li > .social > ul > li {    
        padding: 0px;
    }
    .event-list > li > .social > ul > li > a {
        padding: 3px 0px;
  } 
  .event-list > li > .info > ul > li:hover,
  .event-list > li > .social > ul > li:hover {
    color: rgb(30, 30, 30);
    background-color: rgb(200, 200, 200);
  }
  .facebook a,
  .twitter a,
  .google-plus a {
    display: block;
    width: 100%;
    color: rgb(75, 110, 168) !important;
  }
  .twitter a {
    color: rgb(79, 213, 248) !important;
  }
  .google-plus a {
    color: rgb(221, 75, 57) !important;
  }
  .facebook:hover a {
    color: rgb(255, 255, 255) !important;
    background-color: rgb(75, 110, 168) !important;
  }
  .twitter:hover a {
    color: rgb(255, 255, 255) !important;
    background-color: rgb(79, 213, 248) !important;
  }
  .google-plus:hover a {
    color: rgb(255, 255, 255) !important;
    background-color: rgb(221, 75, 57) !important;
  }

  @media (min-width: 768px) {
    .event-list > li {
      position: relative;
      display: block;
      width: 100%;
      height: 150px;
      padding: 0px;
    }
    .event-list > li > time,
    .event-list > li > img  {
      display: inline-block;
    }
    .event-list > li > time,
    .event-list > li > img {
      width: 150px;
      float: left;
    }
    .sosmed {
    position: relative;
    color: #ddd;
    border: 1px solid #fff;
    padding: 15px;
    margin-bottom: 10px;

}
    .event-list > li > .info {
      background-color: rgb(245, 245, 245);
      overflow: hidden;
    }
    .event-list > li > time,
    .event-list > li > img {
      width: 120px;
      height: 150px;
      padding: 0px;
      margin: 0px;
    }
    .event-list > li > .info {
      position: relative;
      height: 150px;
      text-align: left;
      padding-right: 40px;
    } 
    .event-list > li > .info > .title, 
    .event-list > li > .info > .desc {
      padding: 0px 10px;
    }
    .event-list > li > .info > ul {
      position: absolute;
      left: 0px;
      bottom: 0px;
    }
    .event-list > li > .social {
      position: absolute;
      top: 0px;
      right: 0px;
      display: block;
      width: 40px;
    }
        .event-list > li > .social > ul {
            border-left: 1px solid rgb(230, 230, 230);
        }
    .event-list > li > .social > ul > li {      
      display: block;
            padding: 0px;
    }
    .event-list > li > .social > ul > li > a {
      display: block;
      width: 40px;
      padding: 10px 0px 9px;
    }
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

<body>
<div style="background: url(<?php echo base_url()?>assets/user/img/call-to-action-bg.jpg); padding: 90px;  min-height: 100%; min-width: 1024px; width: 100%; height: auto;top: 0;left: 0;">
<div style="background: rgba(0,0,0,.2); color: white; height: 1361px; padding: 50px; text-align: center; width: 1320px;  width: 100%; min-height: 100%;
        min-width: 1024px; height: auto;  ">
  <header id="header">
    <div class="container-fluid">
      <div id="logo" class="pull-left">
        <h1><a href="#intro" class="scrollto">IniCinema</a></h1>
      </div>

      <nav id="nav-menu-container">
        <ul class="nav-menu">
           <li class="menu-active"><a href="<?php echo site_url()?>/HomeUser">Home</a></li>
          <li><a href="<?php echo site_url()?>/jadwal">Schedule</a></li>
          <li><a href="<?php echo site_url()?>/ProfilUser/pesan">Order</a></li>
        <?php   if($this->session->userdata('logged_in')) { ?>
          <li class="menu-has-children"><a href=""><?php  echo $this->session->userdata('logged_in')['username'] ?></a>
            <ul>
              <li><a href="<?php echo site_url()?>/profiluser/profil/">Profil</a></li>
              <li><a href="<?php echo site_url()?>/login/logout">Logout</a></li>
          </li>
          <?php   }else{ ?>
          <li><a href="<?php echo site_url()?>/login">login</a></li>
          <?php   } ?>

        </ul>
      </nav>
    </div>
  </header>
 <div class="container">
    <div class="row">
      <div class="[ col-xs-6 col-sm-offset-1 col-sm-8 ]">
        <div class="row">
          <div class="col-md-3">
            <img src="<?php echo base_url()?>assets/upload/<?php echo  $daftarFilm[0]->foto ?>" alt="" width="200px" height="250px">
          </div>
          <div class="col-md-9" style="padding-left: 48px;">
            <h2 align="left"><?php echo $daftarFilm[0]->judulFilm?> </h2>
            <p align="left"> <?php echo $daftarFilm[0]->genre?></p>
            <div align="left" class="scroll"> <?php echo $daftarFilm[0]->deskripsiFilm?></div>
          </div>
          
        </div>
<br><br>
<div align="left"> 
<p> Cast &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: <?php echo  $daftarFilm[0]->pemain?></p><hr color="white">
<p> Director &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: <?php echo  $daftarFilm[0]->sutradara?></p><hr  color="white">
<p> Producers &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: <?php echo  $daftarFilm[0]->produser?> </p><hr  color="white">
<p> Director &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: <?php echo  $daftarFilm[0]->sutradara?></p><hr  color="white">
<p> Release Date : <?php echo $daftarFilm[0]->releaseDate?></p><hr color="white">
</div>
      

      </div>
       <div class="[ col-xs-3 col-sm-offset-2 col-sm-3 sosmed] ">
       <div style="border-left: 2px solid white; border-top: 2px solid white;border-right: 2px solid white;border-bottom: 2px solid white; padding-left: 10px; padding-top: 23px; margin-right: -75px;">  
       
<h5 align="left">Social</h5>
<p align="left">
<i class="fa fa-instagram"></i>&nbsp;Instagram : inicinema <br>
<i class="fa fa-twitter"></i>&nbsp;Twitter : @inicinema<br>
<i class="fa fa-phone"></i>&nbsp;Telepon : 087678987654</p>
  </div><br><br>
    <div style="padding-left: 10px; padding-top: 23px; margin-right: -75px;">  
       
<p align="center" ><font size="6px" >Now Playing</font></p><hr color="white" style="margin-bottom: 3px; margin-top: -23px;" >
<div class="row">
<?php   foreach ($daftarJadwal as $row) {
?>
<div class="col-md-3"><font size="24px"> <?php echo $row->namaStudio; ?></font></div>
<div class="col-md-8" style="margin-left: -32px; margin-top: 30px"> <?php  echo $row->judulFilm; ?></div>
<?php   } ?>
</div>
  </div>
    </div>
  </div>
 
  </div>

  </div>





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
