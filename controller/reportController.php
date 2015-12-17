<?php
include "model/reportModel.php";
class reportController{
	public $model;
	public function __construct(){
		$this->model = new reportModel();
	}

	public function viewReportBarang(){
		$data = $this->model->selectBarang();
		include "view/report/report_barang.php";
	}

	public function viewReportKaryawan(){
		$data = $this->model->selectKaryawan();
		include "view/report/report_karyawan.php";
	}

	public function viewReportTransaksi(){
		$data = $this->model->selectTransaksi();
		include "view/report/report_transaksi.php";
	}

}
?>