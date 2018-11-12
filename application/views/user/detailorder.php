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
th{
  background-color: grey;
}

.title{
  
  text-align: left;
  font-family: Quicksand,sans-serif;
  font-size:40px;

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
<!DOCTYPE html>
<html lang="en">
<div class="col-md-9"> 
<div style="background:#202120; color: white; height: 241px; text-align: center; margin-left: -20px;min-height: 1000px"><br>
<div class="container">
<div class="title">Detail Pembelian</div><br>
<p align="left"><a href="<?php echo site_url()?>/ProfilUser/pesan"><i class="fa fa-arrow-left"></i> Kembali Pilih Film</a></p><br>
<?php echo form_open('ProfilUser/order'); ?>
<input type="text" hidden="" name="id" value="<?php echo $datafilm[0]->idJadwal; ?>">
<input type="text" hidden="" name="kursi" value="<?php echo $datafilm[0]->jumlahKursi; ?>">
<table>

<tr>  
  <td class="text-center"><b>Judul Film</b></td>
  <td class="text-center"><b>Tanggal</b></td>
  <td class="text-center"><b>Teater</b></td>
  <td class="text-center"><b>Jam</b></td>
  <td class="text-center"><b>Kursi</b></td>
  <td class="text-center"><b>Harga</b></td>
</tr>

<?php     
$jumlah = 0;
foreach ($object as $key){ ?>

<tr>  
    <td class="text-center"><b><?php echo $datafilm[0]->judulFilm; ?></td></b>
    <td class="text-center"><b><?php echo $datafilm[0]->tanggalTayang; ?></td></b>
    <td class="text-center"><b>Studio <?php echo $datafilm[0]->namaStudio; ?></td></b>
    <td class="text-center"><b><?php echo $datafilm[0]->jadwalTayang; ?></td></b>
    <td class="text-center"><b>Kursi<input type="text" name="<?php echo $key ?>" value="<?php echo $key ?>"></td></b>
    <td class="text-center"><b><?php echo $datafilm[0]->harga; $jumlah+=$datafilm[0]->harga; ?></td></b>
</tr>
  
<?php }?>
<tr>
    <td colspan="5" ><b> Jumlah </td></b>
    <td><input type="text" name="jumlah" value="<?php echo $jumlah ?>"></td>
</tr>

  </table><br>
  <input type="submit" style="width: 150px" class="btn btn-blues" hr-color="#3e7bbc" value="KIRIM"><?php echo form_close(); ?>
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
