<?php 
session_start();
if(isset($_SESSION['user'])) {
    $user = $_SESSION['user'];
}else if (isset($_SESSION['admin'])) {
    $user = $_SESSION['admin'];
} else {
    header("location: ../toko/index.php");
}
require "../php/fungsi.php";


foreach(ambilKeranjang($user) as $data) {
    $test = "ubah".$data['id_keranjang'];
    if(isset($_GET[$test])) {
        $warna = $_GET['warna'];
        $jumlah = $_GET['jumlah'];
        $catatan = $_GET['catatan'];
        ubah($data['id_keranjang'],$warna,$jumlah,$catatan);
        header("location: ../toko/keranjang.php");
    } 
}

