<style>
  .btn-accordion{
  width: 100%;
  text-align:left;
  border-radius: 50px;
  background-color: grey;
  color: white;
  margin-top: 1.5px;
  margin-bottom: 1.5px;
  transition: all 0.5s ease;
  }
  .btn-accordion:hover{
    background-color: #3e7bbc;
  }
</style>
<div class="col-md-9"> 
  <div style="background:#202120; color: white; height: 241px; margin-left: -20px;min-height: 1000px"><br>
    <div class="container">
      <div class="title">BANTUAN</div><br>
      <p align="left"><a href="<?php echo site_url()?>/HomeUser"><i class="fa fa-arrow-left"></i> Beranda</a></p><br>
      <div class="row">
        <div class="col-md-12">
          <div class="accordion" id="accordionExample">
            <div class="">
              <div class="" id="headingOne">
                <h5 class="mb-0">
                  <button class="btn btn-accordion" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                    <i class="fa fa-plus-circle"></i> BAGAIMANA CARA MELAKUKAN TOPUP SALDO REGULER ?  
                  </button>
                </h5>
              </div>

              <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                <div class="card-body">
                  <ul>
                    <li>Pengisian saldo dengan cara TRANSFER ANTAR BANK pada nomer rekening yang disediakan
                    <li>Harap melakukan konfirmasi saldo dengan mengisi nominal yang ditranser dan menyertakan bukti transfer
                    <li>Harap pastikan email Anda sebelum melakukan topup,Anda akan menerima bukti topup dari kasir kami.</li>
                    <li>Jika saldo sudah terisi maka Anda dapat menggunakannya untuk melakukan pembelian tike</li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="">
              <div class="" id="headingTwo">
                <h5 class="mb-0">
                  <button class="btn btn-accordion collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                    <i class="fa fa-plus-circle"></i> BAGAIMANA CARA MENCETAK TIKET ONLINE YANG SUDAH SAYA BELI ?
                  </button>
                </h5>
              </div>
              <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                <div class="card-body">
                  <ol>
                  <li>Harap mengunjungi INICINEMA dimana Anda akan menonton,anda dapat datang kapanpun sebelum jam pertunjukkan dimulai. Anda dapat mengetahui lokasi Anda akan menonton dari daftar pembelian </li>
                  </li>
                  <li>Cari mesin e-ticket yang sudah disiapkan,tanyakan kepada pihak security INICINEMA apabila Anda mengalami kesulitan </li>
                  <li>Masukkan kode booking dan nomer telepon Anda yang terdaftar dengan akun Anda</li>
                  <li>Lalu klik next untuk melakukan pencetakan </li>
                  </ol>
                </div>
              </div>
            </div>
            <div class="">
              <div class="" id="headingThree">
                <h5 class="mb-0">
                  <button class="btn btn-accordion collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                    <i class="fa fa-plus-circle"></i> SAYA INGIN MEMBATALKAN PESANAN TIKET
                  </button>
                </h5>
              </div>
              <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                <div class="card-body">
                  <ol>
                    <li>Anda bisa melakukan pembatalan pesanan pada akun anda pada halaman daftar pesanan</li>
                    <li>Pembatalan dapat dilakukan maksimal 2 jam sebelum film tayang</li>
                    <li>Saldo Anda akan dipotong sebesar 20% dari total harga tiket</li>
                    </ol>

                 
                </div>
              </div>
            </div>
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
