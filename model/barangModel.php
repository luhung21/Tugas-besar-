<?php

class barangModel{
	public function execute($query){
		return mysql_query($query);
	}

	public function fetch($var){
		return mysql_fetch_array($var);
	}

	public function selectAll(){
		$query = "SELECT * FROM tb_barang INNER JOIN tb_kategori ON kategori = kd_kategori";
		return $this->execute($query);
	}

	public function cari($cari){
		$query = "SELECT * FROM tb_barang WHERE nama_barang LIKE %$cari%";
		return $this->execute($query);
	}

	public function selectKat(){
		$query = "SELECT * FROM tb_kategori";
		return $this->execute($query);
	}

	public function select($id){
		$query = "SELECT * FROM tb_barang WHERE kd_barang = '$id'";
		return $this->execute($query);
	}

	public function insert($kd_barang, $nama_barang, $kategori, $harga_jual, $harga_beli, $stock, $gambar){
		$query = "INSERT INTO tb_barang VALUES ('$kd_barang', '$nama_barang', '$kategori', '$harga_jual', '$harga_beli', '$stock', '$gambar')";
		return $this->execute($query);
	}

	public function update($kd_barang, $nama_barang, $kategori, $harga_jual, $harga_beli, $stock, $gambar){
		$query = "UPDATE tb_barang SET nama_barang = '$nama_barang', kategori = '$kategori', harga_jual = '$harga_jual', harga_beli = '$harga_beli', harga_beli = '$harga_beli', stock = '$stock' WHERE kd_barang = '$kd_barang'";
		return $this->execute($query);
	}

	public function delete($id){
		$query = "DELETE FROM tb_barang WHERE kd_barang = '$id'";
		return $this->execute($query);
	}

	public function cariCode(){
			$query = "SELECT MAX(kd_barang) FROM tb_barang";
			return $this->execute($query);
		}
}
?>