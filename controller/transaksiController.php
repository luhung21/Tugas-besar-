<?php 
include "model/transaksiModel.php";
class transaksiController{
    public $model;
    public function __construct(){
        $this->model = new transaksiModel();
    }
    
    public function viewInsert(){
        $carikode1 = $this->model->cariCode1();
        $datakode1 = $this->model->fetch($carikode1);
        if($datakode1){
            $nilaikode1 = substr($datakode1[0], 1);
            $kode1 = (int) $nilaikode1;
            $kode1 = $kode1 + 1;
            $hasilkode1 = "P".str_pad($kode1, 5, "0", STR_PAD_LEFT);
        }else{
            $hasilkode1 = "P00001";
        }
        
        $carikode2 = $this->model->cariCode2();
        $datakode2 = $this->model->fetch($carikode2);
        if($datakode2){
            $nilaikode2 = substr($datakode2[0], 1);
            $kode2 = (int) $nilaikode2;
            $kode2 = $kode2 + 1;
            $hasilkode2 = "T".str_pad($kode2, 5, "0", STR_PAD_LEFT);
        }else{
            $hasilkode2 = "T00001";
        }

        $data = $this->model->tmpTransaksi();        
        $barang = $this->model->selectBarang();
        include "view/data_transaksi/insert_transaksi.php";
    }

    
    public function detail($kd_pelanggan, $nama, $no_hp, $kd_transaksi, $kd_barang, $banyak_barang){
        $jumlah = 0;
        $datharga = $this->model->selectHarga($kd_barang);
        $row = $this->model->fetch($datharga);
        $jumlah = ($row['harga_jual'] * $banyak_barang);

        $selectstok = mysql_query("select stock from tb_barang where kd_barang = '$kd_barang' ");
        $rowstock = mysql_fetch_array($selectstok);
        $jumstokbarang = $rowstock['stock'];

        $selectstoktransaksi = mysql_query("select sum(banyak_barang) as banyak_barang from tb_transaksi where kd_barang = '$kd_barang' ");
        $rowstocktransaksi = mysql_fetch_array($selectstoktransaksi);
        $jumstoktransaksi = $rowstocktransaksi['banyak_barang'];

        $jumlahstock = $jumstokbarang - $jumstoktransaksi;

        if($jumlahstock < 1){
            ?>
            <script type="text/javascript">
            alert("Stock Barang Habis");
            window.location.href="?page=transaksi&act=tambah";
            </script>
            <?php
        }else{
           include "view/data_transaksi/detail_transaksi.php";   
        }
        
        return $jumlah;
    }
    
    public function insert($kd_pelanggan, $nama, $no_hp, $kd_transaksi, $kd_barang, $banyak_barang, $jumlah){
        
        $insert = $this->model->insertPelanggan($kd_pelanggan, $nama, $no_hp) AND $this->model->insertTransaksi($kd_transaksi, $kd_pelanggan, $kd_barang, $banyak_barang, $jumlah);
        if($insert){
            ?>
                       <script type="text/javascript">
            <!--
            alert("Data Berhasil di Tambahkan");
            window.location.href="?page=transaksi&act=tambah";
            //-->
            </script>
                        <?php
        }else{
            ?>
           <script type="text/javascript">
<!--
alert("Data Gagal di Tambahkan");
//-->
</script>
            <?php
        }
    }
}
?>