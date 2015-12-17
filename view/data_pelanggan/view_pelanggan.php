<fieldset>
	<legend>Data Pelanggan</legend>
	<table width="100%" border="1px" style="border-collapse:collapse;">
		<thead style="background-color:#0635e5; color:#fff;">
			<tr>
				<th width="5%">No</th>
				<th>Kode Pelanggan</th>
				<th>Nama</th>
				<th>Nomor HP</th>
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
				<td align="center"><?php echo $row['kd_pelanggan'];?></td>
				<td align="center"><?php echo $row['nama'];?></td>
				<td><?php echo $row['no_hp'];?></td>
				<td  align="center">
					<a onclick="return confirm('Yakin Akan Menghapus?');" href="?page=data_pelanggan&act=delete&id=<?php echo $row['kd_pelanggan']?>"><button>hapus</button></a>
				</td>

			</tr>
			<?php
			}
			?>
		</tbody>
	</table>
</fieldset>