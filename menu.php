		<ul>
			<li class="utama"><a href="./">Beranda</a></li>
			<?php
			if(@$_SESSION['level'] == 'Admin'){
			?>
			<li class="utama"><a href="#">Kategori</a>
				<ul>
					<li><a href="?page=kategori&act=tambah">Tambah Kategori</a></li>
					<li><a href="?page=kategori">Lihat Kategori</a></li>
				</ul>
			</li>
			<li class="utama"><a href="#">Data Barang</a>
				<ul>
					<li><a href="?page=data_barang&act=tambah">Tambah Barang</a></li>
					<li><a href="?page=data_barang">Lihat Barang</a></li>
				</ul>
			</li>

			<li class="utama"><a href="#">Data Karyawan</a>
				<ul>
					<li><a href="?page=data_karyawan&act=tambah">Tambah Karyawan</a></li>
					<li><a href="?page=data_karyawan">Lihat Karyawan</a></li>
				</ul>
			</li>

			<li class="utama"><a href="#">Report</a>
				<ul>
					<li><a href="report.php?page=report_barang" target="_blank">Report Barang</a></li>
					<li><a href="report.php?page=report_karyawan" target="_blank">Report Karyawan</a></li>
					<li><a href="report.php?page=report_transaksi" target="_blank">Report Transaksi</a></li>
				</ul>
			</li>
			<?php
			}else if(@$_SESSION['level'] == 'Pemilik'){
			?>
			<li class="utama"><a href="#">Master Data</a>
				<ul>
					<li><a href="?page=data_barang">Data Barang</a></li>
					<li><a href="?page=data_karyawan">Data Karyawan</a></li>
					<li><a href="?page=data_pelanggan">Data Pelanggan</a></li>
				</ul>
			</li>

			<li class="utama"><a href="#">Report</a>
				<ul>
					<li><a href="report.php?page=report_barang" target="_blank">Report Barang</a></li>
					<li><a href="report.php?page=report_karyawan" target="_blank">Report Karyawan</a></li>
					<li><a href="report.php?page=report_transaksi" target="_blank">Report Transaksi</a></li>
				</ul>
			</li>
			<?php
			}else if(@$_SESSION['level'] == 'Kasir'){
			?>
			<li class="utama"><a href="#">Data Transaksi</a>
				<ul>
					<li><a href="?page=transaksi&act=tambah">Tambah Transaksi</a></li>
				</ul>
			</li>

			<li class="utama"><a href="#">Report</a>
				<ul>
					<li><a href="report.php?page=report_barang" target="_blank">Report Barang</a></li>
				</ul>
			</li>

			<?php
			}else{
				echo "Session Salah!";
			}
			?>
			<li class="utama2" style="float:right;"><a href="?page=logout">Logout</a></li>
		</ul>
	</div>
