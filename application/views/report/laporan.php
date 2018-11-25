<html>	
<head>	
</head>
<body>
<h1>Laporan Pembelian Tiket</h1>
		<table style="width: 100%" border="1">
			<thead >	
				<tr>	
				<td>Kode Pembelian</td>
				<td>Tanggal</td>
				<td>User</td>
				<td>total</td>
				</tr>
			</thead>
			<tbody>	
				<?php	foreach ($daftarPembelian as $key) {
				
				?>
				<tr>	
					<td><?php 	echo $key->noPembelian ?></td>
					<td><?php 	echo $key->tanggalPesan ?></td>
					<td><?php 	echo $key->idUser ?></td>
					<td><?php 	echo $key->totalHarga ?></td>
				</tr>
				<?php 	} ?>
			</tbody>
		</table>
</body>
</html>