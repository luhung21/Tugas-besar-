<fieldset>
    <legend>Detail Transaksi</legend>
    <form method="POST" action="?page=transaksi&act=insert">
    <table>
        <tr>
            <td>Kode Pelanggan</td>
            <td>:</td>
            <td><input type="text" name="kd_pelanggan" readonly="readonly" value="<?php echo $kd_pelanggan?>"></td>
        </tr>
        
        <tr>
            <td>Nama Pelanggan</td>
            <td>:</td>
            <td><input type="text" name="nama_pelanggan" readonly="readonly" value="<?php echo $nama?>"></td>
        </tr>
        
        <tr>
            <td>No HP</td>
            <td>:</td>
            <td><input type="text" name="no_hp" readonly="readonly" value="<?php echo $no_hp?>"></td>
        </tr>
        
        <tr>
            <td>Kode Transaksi</td>
            <td>:</td>
            <td><input type="text" name="kd_transaksi" readonly="readonly" value="<?php echo $kd_transaksi?>"></td>
        </tr>
        
        <tr>
            <td>Kode Barang</td>
            <td>:</td>
            <td><input type="text" name="kd_barang" readonly="readonly" value="<?php echo $kd_barang?>"></td>
        </tr>
        
        <tr>
            <td>Banyaknya</td>
            <td>:</td>
            <td><input type="text" name="banyak_barang" readonly="readonly" value="<?php echo $banyak_barang?>"></td>
        </tr>
        
        <tr>
            <td>Jumlah</td>
            <td>:</td>
            <td><input type="text" name="jumlah" readonly="readonly" value="<?php echo $jumlah?>"</td>
        </tr>
        <tr>
				<td></td>
				<td></td>
				<td>
					<input type="submit" name="tambah" value="Tambah">
				</td>
			</tr>
    </table>
    </form>
</fieldset>