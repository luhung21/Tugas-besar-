<fieldset>
	<legend>Tambah Data Barang</legend>
	<form method="POST" enctype="multipart/form-data">
		<table>
			<tr>
				<td>Kode Barang</td>
				<td>:</td>
				<td><input type="text" name="kd_barang" value="<?php echo $row['kd_barang']?>" readonly="readonly"></td>
			</tr>

			<tr>
				<td>Nama Barang</td>
				<td>:</td>
				<td><input type="text" name="nama_barang" value="<?php echo $row['nama_barang']?>"></td>
			</tr>

			<tr>
				<td>Kategori</td>
				<td>:</td>
				<td>
					<select name="kategori">
						<option value="">--Pilih--</option>
						<?php
						while($row = $this->model->fetch($data2)){
						?>
						<option value="<?php echo $row['kd_kategori']?>"><?php echo $row['nama_kategori']?></option>
						<?php
						}
						?>
					</select>
				</td>
			</tr>

			<tr>
				<td>Harga Jual</td>
				<td>:</td>
				<td><input type="text" name="harga_jual" value="<?php echo $row['harga_jual']?>"></td>
			</tr>

			<tr>
				<td>Harga Beli</td>
				<td>:</td>
				<td><input type="text" name="harga_beli" value="<?php echo $row['harga_beli']?>"></td>
			</tr>

			<tr>
				<td>Stock</td>
				<td>:</td>
				<td><input type="stock" name="stock"value="<?php echo $row['stock']?>"></td>
			</tr>

			<tr>
				<td>Gambar</td>
				<td>:</td>
				<td><input type="file" name="gambar"></td>
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
		$main = new barangController();
		$main->edit();
	}
	?>
</fieldset>