
<div class="col-md-9"> 
<div style="background:#202120; color: white; height: 241px; text-align: center; margin-left: -20px;min-height: 1000px"><br>
<div class="container">
<div class="title">DAFTAR PEMBELIAN</div><br>
<style>
  .tombolmu:hover{
    font-weight: underline;
  }
  .btn-blues{
    background-color: #3e7bbc;
    transition: all 0.5s ease;
    color: white;
  }
  .btn-blues:hover{
    background-color: grey;

  }
</style>
<p align="left"><a href="<?php echo site_url()?>/HomeUser" class="tombolmu"><i class="fa fa-arrow-left"></i> Beranda</a></p><br>
 <div class="row">
                    <!-- Column -->
                    <div class="table-responsive" style="margin: 15px; color: white !important;" >
                        <table class="table bg-dark text-white" cellspacing="0" id="example" width="100%">
                            <thead>
                                <tr>
                                    <td class="text-center"><b>Kode Booking</b></td>
                                    <td class="text-center"><b>Tanggal</b></td>
                                    <td class="text-center"><b>Judul Film</b></td>
                                    <td class="text-center"><b>Studio</b></td>
                                     
                                    <td class="text-center"><b>Total </b></td>
                                    <td class="text-center"><b>Tiket</b></td>
                                </tr>
                            </thead>
                            <tbody>
                                
                                <?php foreach ($datapembelian as $key ) { ?>
                                    <tr class="bg-dark">
                                        <td class="text-center"><?php echo $key->noPembelian ?></td>
                                        <td class="text-center"><?php echo $key->tanggalPesan ?></td>
                                        <td class="text-center"><?php echo $key->judulFilm ?></td>
                                        <td class="text-center"><?php echo $key->namaStudio ?></td>
                                        <td class="text-center"><?php echo $key->totalHarga?></td>
                                      <td class="text-center"><a href="<?php echo base_url()?>index.php/ProfilUser/createPdf/<?php echo $key->noPembelian?>"><button class="btn btn-blues" style="">Download Tiket</button></a></td>
                                        
                                    
                  
                                    </tr>
                                    <?php } ?>
                            </tbody>
                        </table>
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
 <script src="<?php echo base_url()?>assets/plugins/styleswitcher/jQuery.style.switcher.js"></script>

        <!-- <script type="text/css" src="//cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script> -->
        <script src="<?php echo base_url();?>assets/datatables/jquery-2.2.4.js"></script>
        <script src="<?php echo base_url();?>assets/datatables/jquery-2.2.4.min.js"></script>
        <script src="<?php echo base_url();?>assets/datatables/jquery.dataTables.min.js"></script>      
        <link rel="stylesheet" href="<?php echo base_url();?>assets/datatables/jquery.dataTables.min.css">
       
        <script type="text/javascript">
            $(document).ready(function(){
                $('#example').DataTable();
            });
        </script>
  <!-- Template Main Javascript File -->
  <script src="<?php echo base_url()?>assets/user/js/main.js"></script>

</body>
</html>
