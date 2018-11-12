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
                    <li>Untuk saat ini pengisian saldo reguler hanya bisa dilakukan secara offline. 
                    <li>Pengisian dengan cara TRANSFER ANTAR BANK masih dalam tahap negosiasi dan akan segera hadir ke INICINEMA
                    <li>Dengan cara mengunjungi cabang INICINEMA terdekat.
                    <li>Pengisian saldo dapat dilakukan di kasir di INICINEMA 
                    <li>Harap pastikan email dan nomor telepon Anda sebelum melakukan topup,Anda akan menerima bukti topup dari kasir kami.</li>
                  </ul>
                  <ol>
                    <li>
                      Harap mengunjungi INICINEMA dimana Anda akan menonton
                    </li>
                    <li>
                      Lalu datang pada kasir untuk melakukan topup</li>
                    </li>
                    <li>
                      Jika topup selesai maka cek saldo dengan cara log in ke akun Anda yang sudah terdaftar di INICINEMA
                    </li>
                    <li>
                      Jika saldo sudah terisi maka Anda dapat menggunakannya untuk melakukan pembelian tiket</li>
                    </li> 
                      </ol>
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
                    <i class="fa fa-plus-circle"></i> SAYA TIDAK DAPAT LOG IN ATAU MASUK KE AKUN SAYA
                  </button>
                </h5>
              </div>
              <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                <div class="card-body">
                  <ol>
                    <li>Jika Anda mendaftar menggunakan akun Gmail(xxx@gmail.com) maka kemungkinan besar Anda dapat masuk menggunakan SIGN IN WITH GOOGLE</li>
                    <li>Jika Anda pengguna akun email lain atau akun gmail Anda tidak dapat masuk melalui SIGN IN WITH GOOGLE, maka masukkan email dan password Anda di kolom yang sudah disediakan pada halaman ORDER</li>
                    <li>Jika Anda masih tidak dapat masuk, gunakan nomor telepon dan password yang terdaftar pada INICINEMA</li>
                    <li>Jika lupa password gunakan menu LUPA PASSWORD pada menu ORDER, masukkan nomor telepon dan email Anda</li>
                    </ol>

                  <ol>
                    PERINGATAN : RESET PASSWORD
                    <li>Reset password akan mengirimkan password Anda yang baru melalui email dan sms.dalam kondisi apapun,HARAP TIDAK MEMBERIKAN PASSWORD ANDA KEPADA SIAPAPUN</li>
                    <li>Apabila Anda menerima sms maupun email berisikan password Anda,namun Anda merasa tidak pernah meminta pernggantian password,harap segera log in ke akun INICINEMA Anda menggunakan password tersebut dan gantilah password Anda melalui menu PROFIL</li>
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
