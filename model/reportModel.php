<?php
class reportModel{

	public function __construct(){
		$connection = mysql_connect("localhost","root","");
		$db = mysql_select_db("action_gundam");
	}
	
	public function execute($query){
		return mysql_query($query);
	}

	public function fetch($data){
		return mysql_fetch_array($data);
	}

	public function selectBarang(){
		$query = "SELECT * FROM tb_barang";
		return $this->execute($query);
	}

	public function selectKaryawan(){
		$query = "SELECT * FROM tb_karyawan";
		return $this->execute($query);
	}
	public function selectTransaksi(){
		$query = "SELECT * FROM tb_transaksi";
		return $this->execute($query);
	}
}
?>