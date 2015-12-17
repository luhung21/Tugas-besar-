<fieldset>
	<legend>Tambah Data Kategori</legend>
	<form method="POST" enctype="multipart/form-data">
		<table>
			<tr>
				<td>Kode Kategori</td>
				<td>:</td>
				<td><input type="text" name="kd_kategori" value="<?php echo $hasilkode;?>" readonly="readonly"></td>
			</tr>

			<tr>
				<td>Nama Kategori</td>
				<td>:</td>
				<td><input type="text" name="nama_kategori" placeholder="Nama Kategori .."></td>
			</tr>

			<tr>
				<td></td>
				<td></td>
				<td>
					<input type="submit" name="tambah" value="Tambah">
					<input type="reset" name="reset" value="Reset">
				</td>
			</tr>
		</table>
	</form>
	<?php
	if(@$_POST['tambah']){
		$main = new kategoriController();
		$main->insert();
	}
	?>
</fieldset>