
    <ul class="event-list">
<?php   foreach ($daftarFilm as $key ) {
  ?>
          <li>
        
              <time>
              
            <span class="month">Studio</span>
              <span class="day"><a href="<?php echo site_url()?>/jadwal/studio/<?php echo $key->idStudio?>" class="list"><?php echo $key->namaStudio ?></a></span>
            </time>

            </a>
            <img alt="My 24th Birthday!" src="<?php echo base_url()?>/assets/upload/<?php echo $key->foto ?>" />
            <div class="info">
              <h2 class="title" style="color: #17a2b8"><?php echo $key->judulFilm ?></h2>
              <hr style="margin-top: 0px; margin-bottom: 2; margin-left: 10; border: 0;border-top: 2px solid rgba(25, 24, 24, 0.5);"> 
              <p class="desc"  style="color: #17a2b8">Tanggal : <?php echo $key->tanggalTayang ?> </p> 
              <p class="desc"  style="color: #17a2b8">HTM : Rp <?php echo $key->harga ?> </p>
              <p class="desc"  style="color: #17a2b8"><?php echo $key->genre?> | <?php echo $key->durasi ?> MENIT</p>
              <div align="right">
               &nbsp;&nbsp;<?php foreach ($jamtayang as $row) {

                if( $key->noFilm == $row->noFilm && $key->idStudio == $row->idStudio && $key->tanggalTayang == $row->tanggalTayang ){
                 ?><button  type="button" class="btn tombol" style=" border-radius: 0;"><?php echo $row->jadwalTayang ?></button>
               <?php }}?>
               </div>
            </div>
            
          </li>
          <?php }?>


          
        </ul>
