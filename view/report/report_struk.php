<html>
<head>
<style type="text/css" media="print">

	table {no border: solid 1px #000; no border-collapse: collapse; width: 100%}
	tr { no border: solid 1px #000; no page-break-inside: avoid;}
	td { padding: 7px 5px; font-size: 10px}
	th {
		font-family:Arial;
		color:black;
		font-size: 11px;
		background-color:lightgrey;
	}
	thead {
		display:table-header-group;
	}
	tbody {
		display:table-row-group;
	}
	h3 { margin-bottom: -17px }
	h2 { margin-bottom: 0px }
</style>
<style type="text/css" media="screen">
	table {border: solid 1px #000; no border-collapse: collapse; width: 100%}
	tr { border: solid 1px #000}
	th {
	font-family: "Times New Roman", Times, serif;
	color: black;
	font-size: 11px;
	background-color: #999;
	padding: 8px 0;
	}
	td { padding: 7px 5px;font-size: 10px}
	h3 { margin-bottom: -17px }
	h2 { margin-bottom: 0px }
</style>
<title>Laporan Petugas</title>
</head>

<body onLoad="window.print()">


	<center>
	<div align="center">
	  <center>
	  <b style="font-size: 20px">TOKO HOBBY SHOP</b></div>
	<center><p style="font-size: 16px">Sekretariat : jl.A.H Nasution <br>Tlp. 022-7809833 Kab. Bandung 40616</p>
	  <hr align="center" size="3" noshade="noshade">
	  <div align="left"><strong>Laporan Petugas</strong></div><br>
	</center>
	<table border="1" cellspacing="0" cellpadding="0">
		<thead>
			<tr>
			  <th width="3%">No</td>
		  	  <th width="5%">Kode</th>
				<th width="20%">Nama Barang</td>
				<th width="20%">Kategori</td>
				<th width="10%">Harga Jual</td>
				<th width="15%">Harga Beli</td>
				<th width="15%">Stok</td>
				<th width="5%">Gambar</td>
			</tr>
		</thead>
	  <tbody>
			<?php
				$no = 1;
				while($row = $this->model->fetch($data)){
				?>
					<tr class="odd gradeX">
						<td align="center"><?php echo $no++?></td>
						<td align="center"><?php echo $row['kd_barang'];?></td>
						<td><?php echo $row['nama_barang'];?></td>
						<td><?php echo $row['kategori'];?></td>
						<td><?php echo $row['harga_jual'];?></td>
						<td><?php echo $row['harga_beli'];?></td>
						<td><?php echo $row['stok'];?></td>
						<td><img src="asset/img/<?php echo $row['gambar']?>" width="50px;"></td>
					</tr>
				<?php
				}
				?>
	  </tbody>
</table><br><br>
</body>
</html>

