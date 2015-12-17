<?php
include "model/barangModel.php";
class barangController{
	public $model;
	public function __construct(){
		$this->model = new barangModel();
	}

	public function view(){
		$cari = @$_POST['cari'];
		$tombol_cari = @$_POST['tombol_cari'];

		if($tombol_cari){
			if($cari != ""){
				$data = $this->model->cari($cari);
			}else{
				$data = $this->model->selectAll();
			}	
		}else{
			$data = $this->model->selectAll();
		}
		include "view/data_barang/view_barang.php";
	}

	public function viewInsert(){
		$carikode = $this->model->cariCode();
		$datakode = $this->model->fetch($carikode);
		if($datakode){
			$nilaikode = substr($datakode[0], 1);
			$kode = (int) $nilaikode;
			$kode = $kode + 1;
			$hasilkode = "B".str_pad($kode, 5, "0", STR_PAD_LEFT);
		}else{
			$hasilkode = "B00001";
		}
		$data = $this->model->selectKat();
		include "view/data_barang/insert_barang.php";
	}

	public function viewUpdate($id){
		 $data = $this->model->select($id);
		 $row = $this->model->fetch($data);
		 $data2 = $this->model->selectKat();
		 include "view/data_barang/update_barang.php";
	}

	public function insert(){
		$kd_barang 		= @$_POST['kd_barang'];
		$nama_barang 	= @$_POST['nama_barang'];
		$kategori 		= @$_POST['kategori'];
		$harga_jual 	= @$_POST['harga_jual'];
		$harga_beli 	= @$_POST['harga_beli'];
		$stock 			= @$_POST['stock'];

		$sumber			= @$_FILES['gambar']['tmp_name'];
		$target			= 'asset/img/';
		$nama_gambar	= @$_FILES['gambar']['name'];

		if($nama_barang == ''){
			?>
			<script type="text/javascript">
			alert("Nama Barang Tidak Boleh Kosong!");
			</script>
			<?php
		}else{
			$pindah = move_uploaded_file($sumber, $target.$nama_gambar);
			if($pindah){
				$insert = $this->model->insert($kd_barang, $nama_barang, $kategori, $harga_jual, $harga_beli, $stock, $nama_gambar);
				?>
				<script type="text/javascript">
				alert("Data Berhasil di Tambahkan!");
				window.location.href="?page=data_barang";
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
	}

	public function edit(){
		$kd_barang 		= @$_POST['kd_barang'];
		$nama_barang 	= @$_POST['nama_barang'];
		$kategori 		= @$_POST['kategori'];
		$harga_jual 	= @$_POST['harga_jual'];
		$harga_beli 	= @$_POST['harga_beli'];
		$stock 			= @$_POST['stock'];

		$sumber			= @$_FILES['gambar']['tmp_name'];
		$target			= 'asset/img/';
		$nama_gambar	= @$_FILES['gambar']['name'];

		if($nama_barang == ''){
			?>
			<script type="text/javascript">
			alert("Nama Barang Tidak Boleh Kosong!");
			</script>
			<?php
		}else{
			$pindah = move_uploaded_file($sumber, $target.$nama_gambar);
			if($pindah){
				$update = $this->model->update($kd_barang, $nama_barang, $kategori, $harga_jual, $harga_beli, $stock, $nama_gambar);
				?>
				<script type="text/javascript">
				alert("Data Berhasil di Edit!");
				window.location.href="?page=data_barang";
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

	}

	public function delete($id){
		$delete = $this->model->delete($id);
		?>
		<script type="text/javascript">
		alert("Data Berhasil di Hapus!");
		window.location.href="?page=data_barang";
		</script>
		<?php
	}

	public function __destruct(){

	}
}
?>