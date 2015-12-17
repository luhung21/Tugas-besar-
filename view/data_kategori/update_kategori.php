<fieldset>
	<legend>Tambah Data Kategori</legend>
	<form method="POST" enctype="multipart/form-data">
		<table>
			<tr>
				<td>Kode Kategori</td>
				<td>:</td>
				<td><input type="text" name="kd_kategori" value="<?php echo $row['kd_kategori'];?>" readonly="readonly"></td>
			</tr>

			<tr>
				<td>Nama Kategori</td>
				<td>:</td>
				<td><input type="text" name="nama_kategori" value="<?php echo $row['nama_kategori'];?>"></td>
			</tr>

			<tr>
				<td></td>
				<td></td>
				<td>
					<input type="submit" name="edit" value="Edit">
					<input type="reset" name="reset" value="Reset">
				</td>
			</tr>
		</table>
	</form>
	<?php
	if(@$_POST['edit']){
		$main = new kategoriController();
		$main->edit();
	}
	?>
</fieldset>