<fieldset>
	<legend>Tambah Data Karyawan</legend>
	<form method="POST" enctype="multipart/form-data">
		<table>
			<tr>
				<td>Kode Karyawan</td>
				<td>:</td>
				<td><input type="text" name="kd_karyawan" value="<?php echo $row['kd_karyawan']?>" readonly="readonly"></td>
			</tr>

			<tr>
				<td>Nomor KTP</td>
				<td>:</td>
				<td><input type="text" name="no_ktp" value="<?php echo $row['no_ktp']?>"></td>
			</tr>

			<tr>
				<td>Nama Karyawan</td>
				<td>:</td>
				<td><input type="text" name="nama" value="<?php echo $row['nama']?>"></td>
			</tr>

			<tr>
				<td>Jenis Kelamin</td>
				<td>:</td>
				<td><input type="text" name="jk" value="<?php echo $row['jk']?>"></td>
			</tr>

			<tr>
				<td>Alamat</td>
				<td>:</td>
				<td><input type="text" name="alamat" value="<?php echo $row['alamat']?>"></td>
			</tr>

			<tr>
				<td>Tempat lahir</td>
				<td>:</td>
				<td><input type="text" name="tempat_lahir" value="<?php echo $row['tempat_lahir']?>"></td>
			</tr>

			<tr>
				<td>Tanggal Lahir</td>
				<td>:</td>
				<td><input type="date" name="tanggal_lahir" value="<?php echo $row['tanggal_lahir']?>"></td>
			</tr>

			<tr>
				<td>Nomor HP</td>
				<td>:</td>
				<td><input type="text" name="no_hp"value="<?php echo $row['no_hp']?>"></td>
			</tr>

			<tr>
				<td>Jabatan</td>
				<td>:</td>
				<td><input type="text" name="jabatan"value="<?php echo $row['jabatan']?>"></td>
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