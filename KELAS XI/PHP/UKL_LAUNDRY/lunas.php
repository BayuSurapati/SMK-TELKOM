<?php
    include "koneksi.php";
    $update=mysqli_query($conn,"update transaksi set status_bayar = 'lunas',tgl_bayar = '".date('Y-m-d')."' where id_transaksi = '".$_GET['id_transaksi']."'") or die(mysqli_error($conn));
    if($update){
        echo "<script>alert('Sukses update transaksi');location.href='histori_transaksi.php';</script>";
    } else {
        echo "<script>alert('Gagal update transaksi');location.href='histori_transaksi.php';</script>";
    }
?>