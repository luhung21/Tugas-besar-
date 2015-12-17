<fieldset>
	<legend>Data Kategori</legend>
	<table width="100%" border="1px" style="border-collapse:collapse;">
		<thead style="background-color:#0635e5; color:#fff;">
			<tr>
				<th width="5%">No</th>
				<th>Kode</th>
				<th>Nama</th>
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
				<td align="center"><?php echo $row['kd_kategori'];?></td>
				<td><?php echo $row['nama_kategori'];?></td>
				<td  align="center">
					<a href="?page=kategori&act=edit&id=<?php echo $row['kd_kategori']?>"><button>edit</button></a>
					<a onclick="return confirm('Yakin Akan Menghapus?');" href="?page=kategori&act=delete&id=<?php echo $row['kd_kategori']?>"><button>hapus</button></a>
				</td>

			</tr>
			<?php
			}
			?>
		</tbody>
	</table>
</fieldset>