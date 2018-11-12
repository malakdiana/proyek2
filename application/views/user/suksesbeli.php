<style type="text/css">

 @import url("http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,400italic");
    @import url("//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.css");

th,td{
  width: 200px;
  color: white;
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

</style> 
<!DOCTYPE html>
<html lang="en">
<div class="col-md-9"> 
<div style="background:#202120; color: white; height: 241px; text-align: center; margin-left: -20px;min-height: 1000px"><br>
<div class="container">
<div class="title">Pembelian Sukses</div><br>
<p align="left"><a href="<?php echo site_url()?>/HomeUser"><i class="fa fa-arrow-left"></i> Beranda</a></p><br>

<div class="row" style="padding: 5px; background: #181818;margin:5px" >
    <div class="col-md-2">
         <img src="<?php echo base_url().'assets/upload/'.$databeli[0]->foto?>" alt="" width="150px" height="200px">
    </div> 
    <div class="col-md-9"> 
        <p align="left">KODE BOOKING : <?php echo $databeli[0]->noPembelian; ?><br><font size="4px"><b><?php echo $databeli[0]->judulFilm; ?></b></font></p>
        <hr style="margin-top: -30px; color: #3e7bbc;border: 0;border-top: 2px solid #3e7bbc ;"">
        <table width="600px" style="margin-top: -20px">
          <tr>
            <td><b>KODE BOOKING</td></b>
            <td><?php echo $databeli[0]->noPembelian; ?></td>
            
            <td><b>STUDIO</td></b>
            <td>STUDIO <?php echo $databeli[0]->namaStudio; ?></td>
          </tr>

          <tr>
            <td><b>TANGGAL</td></b>
            <td><?php echo $databeli[0]->tanggalTayang; ?></td>
            
            <td><b>JAM TAYANG</td></b>
            <td><?php echo $databeli[0]->jadwalTayang; ?></td>
          </tr>
          <tr>

            <td><b>JUMLAH KURSI</td></b>
            <td><?php echo $databeli[0]->jumlah; ?></td>
            
            <td><b>TOTAL HARGA</td></b>
            <td><?php echo $databeli[0]->totalHarga; ?></td>
          </tr>
          
          
          
        </table>
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
