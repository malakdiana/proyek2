<style type="text/css">

 @import url("http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,400italic");
    @import url("//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.css");

hr{
  padding-top: -90px;
}
td{
  width: 400px;
  color: white;
  border-bottom: 1px solid grey;
  height: 50px;
  background-color: #363B42;
}



   .tombol2{
  width:  200px;
  height: 50px;
border:0px;
    border-radius: 0;
    color: white;
    background:#363B42;
    text-align: left}
  .tombol2:hover {
   background: #3e7bbc;
   color: white;


</style> 
<!DOCTYPE html>
<html lang="en">
<div class="col-md-9"> 
<div style="background:#202120; color: white; height: 241px; text-align: center; margin-left: -20px;min-height: 1000px"><br>
<div class="container">
<div class="title"> <?php echo $film[0]->judulFilm?></div><br>
<p align="left"><a href="<?php echo site_url()?>/ProfilUser/pesan"><i class="fa fa-arrow-left"></i> Kembali Pilih Film</a></p><br>
        <div class="row" align="left">
          <div class="col-md-3">
            <img src="<?php echo base_url()?>assets/upload/<?php  echo $film[0]->foto;?>" alt="" width="200px" height="250px">
          </div>
          <div class="col-md-9" style="padding-left: 48px;">
            
            <p> Cast &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: <?php echo  $film[0]->pemain?></p>
<p> Director &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: <?php echo  $film[0]->sutradara?></p>
<p> Producers &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: <?php echo  $film[0]->produser?> </p>
<p> Director &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: <?php echo  $film[0]->sutradara?></p>
<p> Release Date : <?php echo $film[0]->releaseDate?></p>
</div>
          </div>
          
</div><br><br>
<div class="container"> 
<div align="left" style="font-size: 23px;">PILIH JAM PERTUNJUKAN</div><hr color="#3e7bbc" width="270px" align="left"></div>
<table> 

<tr>
   <td class="text-center"><b>TANGGAL</b></td>
   <td class="text-center"><b>STUDIO</b></td>
   <td class="text-center"><b>JAM</b></td>
</tr>

<?php foreach ($datafilm as $key){ ?>  
  <tr class="bg-dark">
      <td class="text-center"><?php  echo $key->tanggalTayang; ?></td>
      <td class="text-center">STUDIO <?php echo $key->namaStudio;?></td>
    <td align="center"><a href="<?php echo site_url()?>/ProfilUser/pilihkursi/<?php echo $key->idJadwal;?>"><button class="btn tombol2 text-center"><?php 
    echo $key->jadwalTayang ?></button></a></td>
</tr>
<?php   } ?>
</table>

 

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
