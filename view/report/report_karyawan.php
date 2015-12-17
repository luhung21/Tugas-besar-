<html>
<head>
<style type="text/css" media="print">

	table {border: solid 1px #000; border-collapse: collapse; width: 100%}
	tr { border: solid 1px #000; page-break-inside: avoid;}
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
	table {border: solid 1px #000; border-collapse: collapse; width: 100%}
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
<title>Laporan Karyawan</title>
</head>

<body onLoad="window.print()">


	<center>
	<div align="center">
	  <center>
	  <b style="font-size: 20px">TOKO HOBBY SHOP</b></div>
	<center><p style="font-size: 16px">Sekretariat : jl.A.H Nasution <br>Tlp. 022-7809833 Kab. Bandung 40616</p>
	  <hr align="center" size="3" noshade="noshade">
	  <div align="left"><strong>Laporan Karyawan</strong></div><br>
	</center>
	<table border="1" cellspacing="0" cellpadding="0">
		<thead>
			<tr>
			  <th width="5%">No</th>
				<th>Kode Karyawan</th>
				<th>Nomor KTP</th>
				<th>Nama Karyawan</th>
				<th>Jenis Kelamin</th>
				<th>Alamat</th>
				<th>Tempat Lahir</th>
				<th>Tanggal Lahir</th>
				<th>Nomor HP</th>
				<th>Jabatan</th>
			</tr>
		</thead>
	  <tbody>
			<?php
				$no = 1;
				while($row = $this->model->fetch($data)){
				?>
					<tr class="odd gradeX">
						<td align="center"><?php echo $no++;?></td>
						<td align="center"><?php echo $row['kd_karyawan'];?></td>
						<td><?php echo $row['no_ktp'];?></td>
						<td align="center"><?php echo $row['nama'];?></td>
						<td align="center"><?php echo $row['jk'];?></td>
						<td align="center"><?php echo $row['alamat'];?></td>
						<td align="center"><?php echo $row['tempat_lahir'];?></td>
						<td align="center"><?php echo $row['tanggal_lahir'];?></td>
						<td align="center"><?php echo $row['no_hp'];?></td>
						<td align="center"><?php echo $row['jabatan'];?></td>
					</tr>
				<?php
				}
				?>
	  </tbody>
</table><br><br>
</body>
</html>

