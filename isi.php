<?php
include "controller/loginController.php";
include "controller/barangController.php";
include "controller/kategoriController.php";
include "controller/karyawanController.php";
include "controller/transaksiController.php";
include "controller/pelangganController.php";

$login = new loginController();
$barang = new barangController();
$kategori = new kategoriController();
$karyawan = new karyawanController();
$transaksi = new transaksiController();
$pelanggan = new pelangganController();

$page = @$_GET['page'];
$act = @$_GET['act'];
$id = @$_GET['id'];

if(@$_SESSION['level'] == 'Admin'){
	if($page == ''){
		include "view/beranda.php";
	}else if($page == 'logout'){
		$login->logout();
	}else if($page == 'kategori'){
		if($act == ''){
			$kategori->view();
		}else if($act == 'tambah'){
			$kategori->viewInsert();
		}else if($act == 'edit'){
			$kategori->viewUpdate($id);
		}else if($act == 'delete'){
			$kategori->delete($id);
		}else{
			echo "Halaman Tidak Tersedia!";
		}
	}else if($page == 'data_barang'){
		if($act == ''){
			$barang->view();
		}else if($act == 'tambah'){
			$barang->viewInsert();
		}else if($act == 'edit'){
			$barang->viewUpdate($id);
		}else if($act == 'delete'){
			$barang->delete($id);
		}else{
			echo "Halaman Tidak Tersedia!";
		}
	}else if($page == 'data_karyawan'){
		if($act == ''){
			$karyawan->view();
		}else if($act == 'tambah'){
			$karyawan->viewInsert();
		}else if($act == 'edit'){
			$karyawan->viewUpdate($id);
		}else if($act == 'delete'){
			$karyawan->delete($id);
		}else{
			echo "Halaman Tidak Tersedia!";
		}
	}else{
		echo "Halaman Tidak Tersedia!";
	}
}else if(@$_SESSION['level'] == 'Pemilik'){
	if($page == ''){
		include "view/beranda.php";
	}else if($page == 'logout'){
		$login->logout();
	}else if($page == 'data_barang'){
		if($act == ''){
			$barang->view();
		}else if($act == 'tambah'){
			$barang->viewInsert();
		}else if($act == 'edit'){
			$barang->viewUpdate($id);
		}else if($act == 'delete'){
			$barang->delete($id);
		}else{
			echo "Halaman tidak Tersedia";
		}
	}else if($page == 'data_karyawan'){
		if($act == ''){
			$karyawan->view();
		}else if($act == 'tambah'){
			$karyawan->viewInsert();
		}else if($act == 'edit'){
			$karyawan->viewUpdate($id);
		}else if($act == 'delete'){
			$karyawan->delete($id);
		}else{
			echo "Halaman Tidak Tersedia!";
		}
	}else if($page == 'data_pelanggan'){
		if($act == ''){
			$pelanggan->view();
		}else if($act == 'delete'){
			$pelanggan->delete($id);
		}else{
			echo "Halaman Tidak Tersedia!";
		}
	}
}else if(@$_SESSION['level'] == 'Kasir'){
	if($page == ''){
		include "view/beranda.php";
	}else if($page == 'transaksi'){
		if($act == 'tambah'){
			$transaksi->viewInsert();
		}else if($act == 'detail'){
			$kd_pelanggan = @$_POST['kd_pelanggan'];
	        $nama = @$_POST['nama_pelanggan'];
	        $no_hp = @$_POST['no_hp'];
	        $kd_transaksi = @$_POST['kd_transaksi'];
	        $kd_barang = @$_POST['kd_barang'];
	        $banyak_barang = @$_POST['banyak_barang'];

	        $transaksi->detail($kd_pelanggan, $nama, $no_hp, $kd_transaksi, $kd_barang, $banyak_barang);
		}else if($act == 'insert'){
			$kd_pelanggan = @$_POST['kd_pelanggan'];
	        $nama = @$_POST['nama_pelanggan'];
	        $no_hp = @$_POST['no_hp'];
	        $kd_transaksi = @$_POST['kd_transaksi'];
	        $kd_barang = @$_POST['kd_barang'];
	        $banyak_barang = @$_POST['banyak_barang'];
	        $jumlah = @$_POST['jumlah'];

			$transaksi->insert($kd_pelanggan, $nama, $no_hp, $kd_transaksi, $kd_barang, $banyak_barang, $jumlah);
		}else{
			echo "Halaman Tidak Tersedia!";
		}

	}else if($page == 'logout'){
		$login->logout();
	}else{
			echo "Halaman Tidak Tersedia!";
	}
}else{
	echo "Session Salah!";
}

?>