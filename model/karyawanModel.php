<?php

class karyawanModel{
	public function execute($query){
		return mysql_query($query);
	}

	public function fetch($var){
		return mysql_fetch_array($var);
	}

	public function selectAll(){
		$query = "SELECT * FROM tb_karyawan";
		return $this->execute($query);
	}

	public function selectKat(){
		$query = "SELECT * FROM tb_karyawan";
		return $this->execute($query);
	}

	public function select($id){
		$query = "SELECT * FROM tb_karyawan WHERE kd_karyawan = '$id'";
		return $this->execute($query);
	}

	public function insert($kd_karyawan, $no_ktp, $nama, $jk, $alamat, $tempat_lahir, $tanggal_lahir, $no_hp, $jabatan){
		$query = "INSERT INTO tb_karyawan VALUES ('$kd_karyawan', '$no_ktp', '$nama', '$jk', '$alamat', '$tempat_lahir', '$tanggal_lahir', '$no_hp', '$jabatan')";
		return $this->execute($query);
	}


	public function update($kd_karyawan, $no_ktp, $nama, $jk, $alamat, $tempat_lahir, $tanggal_lahir, $no_hp, $jabatan){
		$query = "UPDATE tb_karyawan SET no_ktp = '$no_ktp', nama = '$nama', jk = '$jk', alamat = '$alamat', tempat_lahir = '$tempat_lahir', tanggal_lahir = '$tanggal_lahir', no_hp = '$no_hp', jabatan ='$jabatan' WHERE kd_karyawan = '$kd_karyawan'";
		return $this->execute($query);
	}

	public function delete($id){
		$query = "DELETE FROM tb_karyawan WHERE kd_karyawan = '$id'";
		return $this->execute($query);
	}

	public function cariCode(){
			$query = "SELECT MAX(kd_karyawan) FROM tb_karyawan";
			return $this->execute($query);
		}
}
?>