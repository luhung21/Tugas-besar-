<?php
include "model/kategoriModel.php";
class kategoriController{
	public $model;
	public function __construct(){
		$this->model = new kategoriModel();
	}

	public function view(){
		$data = $this->model->selectAll();
		include "view/data_kategori/view_kategori.php";
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
		include "view/data_kategori/insert_kategori.php";
	}

	public function viewUpdate($id){
		$data = $this->model->select($id);
		$row = $this->model->fetch($data);
		include "view/data_kategori/update_kategori.php";
	}

	public function insert(){
		$kd_kategori = @$_POST['kd_kategori'];
		$nama_kategori = @$_POST['nama_kategori'];

		if($nama_kategori == ''){
			?>
			<script type="text/javascript">
			alert("Nama Kategori Tidak Boleh Kosong!");
			</script>
			<?php
		}else{
			$insert = $this->model->insert($kd_kategori, $nama_kategori);
			?>
			<script type="text/javascript">
			alert("Kategori Berhasil di tambahkan!");
			window.location.href="?page=kategori";
			</script>
			<?php
		}
	}

	public function edit(){
		$kd_kategori = @$_POST['kd_kategori'];
		$nama_kategori = @$_POST['nama_kategori'];

		if($nama_kategori == ''){
			?>
			<script type="text/javascript">
			alert("Nama Kategori Tidak Boleh Kosong!");
			</script>
			<?php
		}else{
			$update = $this->model->update($kd_kategori, $nama_kategori);
			?>
			<script type="text/javascript">
			alert("Kategori Berhasil di edit!");
			window.location.href="?page=kategori";
			</script>
			<?php
		}
	}

	public function delete($id){
		$delete = $this->model->delete($id);
		?>
		<script type="text/javascript">
		alert("Kategori Berhasil di hapus!");
		window.location.href="?page=kategori";
		</script>
		<?php
	}

	public function __destruct(){

	}
}
?>