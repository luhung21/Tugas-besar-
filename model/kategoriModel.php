<?php

class kategoriModel{
	public function execute($query){
		return mysql_query($query);
	}

	public function fetch($var){
		return mysql_fetch_array($var);
	}

	public function selectAll(){
		$query = "SELECT * FROM tb_kategori";
		return $this->execute($query);
	}

	public function select($id){
		$query = "SELECT * FROM tb_kategori WHERE kd_kategori = '$id'";
		return $this->execute($query);
	}

	public function insert($kd_kategori, $nama_kategori){
		$query = "INSERT INTO tb_kategori VALUES ('$kd_kategori', '$nama_kategori')";
		return $this->execute($query);
	}

	public function update($kd_kategori, $nama_kategori){
		$query = "UPDATE tb_kategori SET nama_kategori = '$nama_kategori' WHERE kd_kategori = '$kd_kategori'";
		return $this->execute($query);
	}

	public function delete($id){
		$query = "DELETE FROM tb_kategori WHERE kd_kategori = '$id'";
		return $this->execute($query);
	}

	public function cariCode(){
			$query = "SELECT MAX(kd_kategori) FROM tb_kategori";
			return $this->execute($query);
		}
}
?>