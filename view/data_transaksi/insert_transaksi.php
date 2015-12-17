<fieldset>
	<legend>Tambah Data Transaksi</legend>
	<form method="POST" enctype="multipart/form-data" action="?page=transaksi&act=detail">
	   <fieldset>
	   <legend>Pelanggan</legend>
		<table>
			<tr>
				<td>Kode Pelanggan</td>
				<td>:</td>
				<td><input type="text" name="kd_pelanggan" value="<?php echo $hasilkode1;?>" readonly="readonly"></td>
			</tr>

			<tr>
				<td>Nama Pelanggan</td>
				<td>:</td>
				<td><input type="text" name="nama_pelanggan" placeholder="Nama Pelanggan .."></td>
			</tr>
			
			<tr>
				<td>No HP</td>
				<td>:</td>
				<td><input type="text" name="no_hp" placeholder="No HP .." ></td>
			</tr>
		</table>
    </fieldset>
    <fieldset>
        <legend>Transaksi</legend>
		<table>
		    <tr>
				<td>Kode Transaksi</td>
				<td>:</td>
				<td><input type="text" name="kd_transaksi" value="<?php echo $hasilkode2;?>" readonly="readonly"></td>
			</tr>
			
		    <tr>
				<td>Barang</td>
				<td>:</td>
				<td><select name="kd_barang">
	                   <option value="">--Pilih--</option>
	                   <?php while($row = $this->model->fetch($barang)){?>
	                   <option value="<?php echo $row['kd_barang']?>"><?php echo $row['nama_barang']?></option>
	                   <?php }?>
	               </select>
				 </td>
			</tr> 
			
			<tr>
				<td>Banyaknya</td>
				<td>:</td>
				<td><input type="text" name="banyak_barang" placeholder="Banyak Barang .."></td>
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
		</fieldset>
	</form>
	<!-- <fieldset>
		<legend>Data Transaksi</legend>
		<table width="100%" border="1px" style="border-collapse:collapse;">
			<thead style="background-color:#0635e5; color:#fff;">
				<th>No</th>
				<th>Kode Transaksi</th>
				<th>Nama Pelanggan</th>
				<th>Banyak Barang</th>
				<th>Jumlah</th>
				<th>Opsi</th>
			</thead>

			<tbody>
				<?php
				$no = 1;
				while($row = $this->model->fetch($data)){
				?>
				<tr>
					<td align="center"><?php echo $no++?></td>
					<td align="center"><?php echo $row['kd_transaksi']?></td>
					<td><?php echo $row['nama']?></td>
					<td><?php echo $row['nama_barang']?></td>
					<td><?php echo $row['banyak_barang']?></td>
					<td><?php echo $row['jumlah']?></td>
				</tr>
				<?php } ?>
			</tbody>
		</table>
	</fieldset> -->
</fieldset>