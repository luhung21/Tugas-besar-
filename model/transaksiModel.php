<?php
class transaksiModel{
	public function execute($query){
		return mysql_query($query);	
	}

	public function fetch($var){
		return mysql_fetch_array($var);
	}

	public function selectBarang(){
		$query = "SELECT * FROM tb_barang";
		return $this->execute($query);
	}

	public function selectHarga($id){
		$query = "SELECT * FROM tb_barang WHERE kd_barang = '$id'";
		return $this->execute($query);
	}

	public function insertTmpTransaksi($kd_transaksi, $kd_pelanggan, $kd_barang, $banyak_barang, $jumlah){
		$query = "INSERT INTO tmp_transaksi VALUES ('$kd_transaksi', '$kd_pelanggan', '$kd_barang', '$banyak_barang', '$jumlah')  ";
		return $this->execute($query); 
	}

	public function tmpTransaksi(){
		$query = "SELECT tb_transaksi.kd_transaksi, tb_pelanggan.nama, tb_barang.nama_barang, tb_transaksi.banyak_barang, tb_transaksi.jumlah FROM tb_transaksi INNER JOIN tb_pelanggan ON tb_pelanggan.kd_pelanggan = tb_transaksi.kd_pelanggan INNER JOIN tb_barang ON tb_barang.kd_barang = tb_transaksi.kd_barang";
		return $this->execute($query);
	}

	public function selectPelanggan(){
		$query = "SELECT * FROM tb_pelanggan";
		return $this->execute($query);
	}

	public function insertTransaksi($kd_transaksi, $kd_pelanggan, $kd_barang, $banyak_barang, $jumlah){
		$query = "INSERT INTO tb_transaksi VALUES ('$kd_transaksi', '$kd_pelanggan', '$kd_barang', '$banyak_barang', '$jumlah')  ";
		return $this->execute($query); 
	}

	public function insertPelanggan($kd_pelanggan, $nama, $no_hp){
		$query = "INSERT INTO tb_pelanggan VALUES ('$kd_pelanggan', '$nama', '$no_hp')  ";
		return $this->execute($query); 
	}

	public function cariCode1(){
			$query = "SELECT MAX(kd_transaksi) FROM tb_transaksi";
			return $this->execute($query);
	}

	public function cariCode2(){
			$query = "SELECT MAX(kd_pelanggan) FROM tb_pelanggan";
			return $this->execute($query);
	}
}
?>