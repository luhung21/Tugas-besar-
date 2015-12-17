<?php
include "model/pelangganModel.php";
class pelangganController{
	public $model;
	public function __construct(){
		$this->model = new pelangganModel();
	}

	public function view(){
		$data = $this->model->selectAll();
		include "view/data_pelanggan/view_pelanggan.php";
	}

	public function delete($id){
		$delete = $this->model->delete($id);
		?>
		<script type="text/javascript">
		alert("Data Berhasil di Hapus!");
		window.location.href="?page=data_pelanggan";
		</script>
		<?php
	}

	public function __destruct(){

	}
}
?>