<style type="text/css">

 @import url("http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,400italic");
    @import url("//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.css");


hr{
  padding-top: -90px;
}
th,td{
  width: 200px;
  color: white;
  border-bottom: 1px solid white;
  height: 50px;

}

.btn{
  width:53px;
  margin-bottom: 30px

}

</style> 
<!DOCTYPE html>
<html lang="en">
<div class="col-md-9"> 
<div style="background:#202120; color: white; height: auto; text-align: center; margin-left: -20px;min-height: 1000px"><br>
<div class="container">
<div class="title">Black Panter</div><br>
<p align="left"><a href="<?php echo site_url()?>/ProfilUser/pesan"><i class="fa fa-arrow-left"></i> Kembali Pilih Film</a></p><br>
        <div class="row" align="left">
          <div class="col-md-3">
            <img src="<?php echo base_url()?>assets/upload/<?php echo $datafilm[0]->foto ?>" alt="" width="200px" height="250px">
          </div>
          <div class="col-md-9" style="padding-left: 48px;">
            
            <table>
              <tr>
                <td>Teater </td>
                <td>Studio<?php echo $datafilm[0]->namaStudio ?></td>
                <td>Jam Show </td>
                <td><?php echo $datafilm[0]->jadwalTayang ?></td>
              </tr>
              <tr>
                <td>HTM</td>
                <td><?php echo $datafilm[0]->harga?></td>
                <td>Durasi</td>
                <td><?php echo $datafilm[0]->durasi ?></td>
              </tr>
              <tr>
                <td>Genre</td>
                <td><?php echo $datafilm[0]->genre?></td>
                <td>Cast</td>
                <td><?php echo $datafilm[0]->pemain?></td>
              </tr>
            </table><br><br>
            

          </div>
          <div align="left" class="container"><br><br> Pilih kursi<br><br>
          <div style="margin-left: 30px; margin-right: 50px">
          <div style="background: #3e7bbc; color: white; text-align: center;">Layar Bioskop</div><br>




<?php 
$kursi=$datafilm[0]->jumlahKursi;
echo form_open('profiluser/pilihkursi2/'.$kursi);
$x=false;
for($i=1;$i<=$kursi ;$i++){ 
 foreach ($datakursi as $key) {
  if ($i == $key->noKursi){ 
    $x=true;
    break;
  }else{
    $x=false;
  
  }
  }if($i%7==0 && !($i%14==0)){
    ?>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <?php
  }
    if ($x==true){?>

      <input  class="btn" style="margin-bottom: 30px; background: red">
  }
<?php }else{?>
      <input name="<?php echo $i?>" class="btn" value="<?php echo "$i"; ?>" id="blue<?php echo $i?>" readonly class="btn" onclick="document.getElementById('blue<?php echo $i?>').style.background = 'blue';value='ok'" style="">
<?php }} ?><br>
<input type="text" hidden="" name="id" value="<?php echo $datafilm[0]->idJadwal ?>">
<input type="submit" class="btn btn-primary" style="border-radius: 0; width: 200px">
<?php echo form_close(); ?>
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
