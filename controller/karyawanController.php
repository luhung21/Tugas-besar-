<?php
include "model/karyawanModel.php";
class karyawanController{
	public $model;
	public function __construct(){
		$this->model = new karyawanModel();
	}

	public function view(){
		$data = $this->model->selectAll();
		include "view/data_karyawan/view_karyawan.php";
	}

	public function viewInsert(){
		$carikode = $this->model->cariCode();
		$datakode = $this->model->fetch($carikode);
		if($datakode){
			$nilaikode = substr($datakode[0], 1);
			$kode = (int) $nilaikode;
			$kode = $kode + 1;
			$hasilkode = "K".str_pad($kode, 5, "0", STR_PAD_LEFT);
		}else{
			$hasilkode = "K00001";
		}
		$data = $this->model->selectKat();
		include "view/data_karyawan/insert_karyawan.php";
	}

	public function viewUpdate($id){
		 $data = $this->model->select($id);
		 $row = $this->model->fetch($data);
		 $data2 = $this->model->selectKat();
		 include "view/data_karyawan/update_karyawan.php";
	}

	public function insert(){
		$kd_karyawan 	= @$_POST['kd_karyawan'];
		$no_ktp 		= @$_POST['no_ktp'];
		$nama 			= @$_POST['nama'];
		$jk				= @$_POST['jk'];
		$alamat 		= @$_POST['alamat'];
		$tempat_lahir 	= @$_POST['tempat_lahir'];
		$tanggal_lahir	= @$_POST['tanggal_lahir'];
		$no_hp			= @$_POST['no_hp'];
		$jabatan		= @$_POST['jabatan'];

		if($nama == ''){
			?>
			<script type="text/javascript">
			alert("Nama karyawan Tidak Boleh Kosong!");
			</script>
			<?php
		}else{
			$insert = $this->model->insert($kd_karyawan, $no_ktp, $nama, $jk, $alamat, $tempat_lahir, $tanggal_lahir, $no_hp, $jabatan);
			if($insert){
				?>
				<script type="text/javascript">
				alert("Data Berhasil di Tambahkan!");
				window.location.href="?page=data_karyawan";
				</script>
				<?php
			}else{
				?>
				<script type="text/javascript">
				alert("Data gagal di Tambahkan!");
				</script>
				<?php
			}
		}
	}

	public function edit(){
		$kd_karyawan 	= @$_POST['kd_karyawan'];
		$no_ktp 		= @$_POST['no_ktp'];
		$nama 			= @$_POST['nama'];
		$jk 			= @$_POST['jk'];
		$alamat 		= @$_POST['alamat'];
		$tempat_lahir 	= @$_POST['tempat_lahir'];
		$tanggal_lahir	= @$_POST['tanggal_lahir'];
		$no_hp			= @$_POST['no_hp'];
		$jabatan		= @$_POST['jabatan'];
		
			$pindah = move_uploaded_file($sumber, $target.$nama_gambar);
			if($pindah){
				$update = $this->model->update($kd_barang, $nama_barang, $kategori, $harga_jual, $harga_beli, $stock, $nama_gambar);
				?>
				<script type="text/javascript">
				alert("Data Berhasil di Edit!");
				window.location.href="?page=data_karyawan";
				</script>
				<?php
			}else{
				?>
				<script type="text/javascript">
				alert("Gambar gagal di Upload!");
				</script>
				<?php
			}

	}

	public function delete($id){
		$delete = $this->model->delete($id);
		?>
		<script type="text/javascript">
		alert("Data Berhasil di Hapus!");
		window.location.href="?page=data_karyawan";
		</script>
		<?php
	}

	public function __destruct(){

	}
}
?>