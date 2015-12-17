<?php

class pelangganModel{
	public function execute($query){
		return mysql_query($query);
	}

	public function fetch($var){
		return mysql_fetch_array($var);
	}

	public function selectAll(){
		$query = "SELECT * FROM tb_pelanggan";
		return $this->execute($query);
	}

	public function select($id){
		$query = "SELECT * FROM tb_pelanggan WHERE kd_pelanggan = '$id'";
		return $this->execute($query);
	}

	public function delete($id){
		$query = "DELETE FROM tb_pelanggan WHERE kd_pelanggan = '$id'";
		return $this->execute($query);
	}

	public function cariCode(){
			$query = "SELECT MAX(kd_pelanggan) FROM tb_pelanggan";
			return $this->execute($query);
		}
}
?>