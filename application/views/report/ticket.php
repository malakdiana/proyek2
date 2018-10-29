<!DOCTYPE html>
<html>
<head>
  <title>HTML event tickets</title>
 
  <!-- <link rel="stylesheet" href="styles/main.css" media="screen" charset="utf-8"/> -->
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta http-equiv="content-type" content="text-html; charset=utf-8">
</head>

<body>
 
  <div class="container" style="padding-right: 400px">
  <?php foreach ($list as $data) { $no=0;?>

    <section>
      <div class="card" style="border: 2px solid black">
        <div class="container" style="padding-left: 10px;padding-bottom: 5px">
        <div class="row">
          <div class="col-2">
        <pre><h3>Tanggal Pesan : <?php 	echo $data->tanggalPesan; ?></h3></pre></div>
        <div class="col-4">
        <img src="<?php base_url()?>assets/images/logo.PNG" width="120" height="40" alt="" align="right" style="margin-right: 10px; margin-top: -40px"></div></div>
        <font size="30px"><?php echo $data->judulFilm; ?></font></div><hr>
        
        
<div class="row">	
         <div class="col-6" style="margin-left: 20px">
       <pre>Cinema : IniCinema</pre>
       <pre>Studio : <?php 	echo $data->namaStudio; ?></pre>
       <pre>Jadwal Tayang :<?php 	echo $data->tanggalTayang; ?>, <?php 	echo $data->jadwalTayang; ?></pre>
      
       <pre>Kursi : <?php foreach ($kursi as $key) { ?> <?php echo "$key->noKursi, "; $no++; }?></pre>
       <pre>Tiket : <?php echo "$no"?>;</pre>
       <pre>Total : <?php 	echo $data->totalHarga; ?></pre>
       <pre>Kode Booking : <?php 	echo $data->noPembelian; ?></pre> </div>
       <div class="col-md-3" align="right" style="margin-top: -200px; margin-right: 5px; margin-bottom: 5px">
       
         <img src="<?php base_url()?>assets/images/<?php echo $data->noPembelian?>.png" width="200" height="200"></div>
    </div>
    <?php  } ?>
    </div>
  </div>
  </section>
  <br><br><br><br>
 
  </div>
</body>

</html>