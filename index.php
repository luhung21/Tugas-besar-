<?php
session_start();
if (empty($_SESSION['username']) AND empty($_SESSION['password'])){
header("location:login.php");
} else {
?>
<!DOCTYPE html>
<html>
<head>
	<title>Aplikasi Penjualan Action Figure</title>
	<link rel="stylesheet" href="asset/css/main.css" type="text/css">
</head>
<body>
<div id="canvas">
	<div id="header">
		<img src="asset/img/header.png">
	</div>

	<div id="menu">
		<?php include "menu.php";?>
	<div id="isi">
	<?php include "isi.php";?>
	</div>

	<div id="footer">
		Aplikasi Penjualan Action Figure
	</div>
</div>
</body>
</html>
<?php
}
?>