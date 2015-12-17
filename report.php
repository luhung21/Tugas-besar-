<?php
include "controller/reportController.php";
$report = new reportController();

$page = @$_GET['page'];
$id = @$_GET['id'];
$act = @$_GET['act'];

if($page == 'report_barang'){
		$report->viewReportBarang();
}else if($page == 'report_karyawan'){
		$report->viewReportKaryawan();
}else if($page == 'report_transaksi'){
		$report->viewReportTransaksi();
}else if($page == 'report_struk'){
		$report->viewReportStruk();
}


?>