<fieldset>
	<legend>Data Karyawan</legend>
	<table width="100%" border="1px" style="border-collapse:collapse;">
		<thead style="background-color:#0635e5; color:#fff;">
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
				<th width="12%">Opsi</th>
			</tr>
		</thead>
		<tbody>
			<?php
			$no = 1;
			while($row = $this->model->fetch($data)){
			?>
			<tr>
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
				<td  align="center">
					<a href="?page=data_karyawan&act=edit&id=<?php echo $row['kd_karyawan']?>"><button>edit</button></a>
					<a onclick="return confirm('Yakin Akan Menghapus?');" href="?page=data_karyawan&act=delete&id=<?php echo $row['kd_karyawan']?>"><button>hapus</button></a>
				</td>

			</tr>
			<?php
			}
			?>
		</tbody>
	</table>
</fieldset>