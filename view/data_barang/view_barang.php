<fieldset>
	<legend>Data Kategori</legend>
	<div style="margin-botton:15px;" align="right">
	<form method="post">
			<tr>
				<td><input type="text" name="cari" placeholder="Cari .." style="width:200px; padding:5px;"></td>
				<td><input type="submit" name="tombol_cari" value="cari" style="padding:3px;" ></td>
			</tr>
	</form>
	</div>
	<table width="100%" border="1px" style="border-collapse:collapse;">
		<thead style="background-color:#0635e5; color:#fff;">
			<tr>
				<th width="5%">No</th>
				<th>Kategori</th>
				<th>Nama Barang</th>
				<th>Harga Jual</th>
				<th>Harga Beli</th>
				<th>Stock</th>
				<th>Gambar</th>
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
				<td align="center"><?php echo $row['nama_kategori'];?></td>
				<td><?php echo $row['nama_barang'];?></td>
				<td align="center"><?php echo $row['harga_jual'];?></td>
				<td align="center"><?php echo $row['harga_beli'];?></td>
				<td align="center"><?php echo $row['stock'];?></td>
				<td align="center"><img src="asset/img/<?php echo $row['gambar']?>" width="50px;"></td>
				<td  align="center">
					<a href="?page=data_barang&act=edit&id=<?php echo $row['kd_barang']?>"><button>edit</button></a>
					<a onclick="return confirm('Yakin Akan Menghapus?');" href="?page=data_barang&act=delete&id=<?php echo $row['kd_barang']?>"><button>hapus</button></a>
				</td>

			</tr>
			<?php
			}
			?>
		</tbody>
	</table>
</fieldset>