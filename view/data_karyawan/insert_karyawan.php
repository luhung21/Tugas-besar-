<fieldset>
	<legend>Tambah Data Karyawan</legend>
	<form method="POST" enctype="multipart/form-data">
		<table>
			<tr>
				<td>Kode Karyawan</td>
				<td>:</td>
				<td><input type="text" name="kd_karyawan" value="<?php echo $hasilkode;?>" readonly="readonly"></td>
			</tr>

			<tr>
				<td>No KTP</td>
				<td>:</td>
				<td><input type="text" name="no_ktp" placeholder="No KTP .."></td>
			</tr>

			<tr>
				
				<td>Nama</td>
				<td>:</td>
				<td><input type="text" name="nama" placeholder="nama.."></td>
			</tr>

			<tr>
				<td>Jenis Kelamin</td>
				<td>:</td>
				<td><select name="jk">
					<option value="Laki-Laki">Laki - Laki</option>
					<option value="Perempuan">Perempuan</option>
				</select></td>
			</tr>

			<tr>
				<td>alamat</td>
				<td>:</td>
				<td><input type="text" name="alamat" placeholder="alamat"></td>
			</tr>

			<tr>
				<td>Tempat lahir</td>
				<td>:</td>
				<td><input type="text" name="tempat_lahir" placeholder="Tempat lahir"></td>
			</tr>


			<tr>
				<td>Tanggal lahir</td>
				<td>:</td>
				<td><input type="date" name="tanggal_lahir" placeholder="datetime"></td>
			</tr>
	
		<tr>
				<td>Nomor HP</td>
				<td>:</td>
				<td><input type="text" name="no_hp" placeholder="No hp"></td>
			</tr>
	<tr>
				<td>Jabatan</td>
				<td>:</td>
				<td><input type="text" name="jabatan" placeholder="Jabatan"></td>
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
		$main = new karyawanController();
		$main->insert();
	}
	?>
</fieldset>