<?php 
session_start();
require "../php/fungsi.php";

?>
<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
</head>
<body style="background-color:#161616;">
<?php 

foreach (ambilData() as $data){
        $tes = "kirim".$data['id_produk'];
        $nama = $data['nama'];
        $diskon1 = $data['harga'] - ($data['harga'] * $data['diskon'] / 100);
        // $ambil = ambilNama($nama);
        if(isset($_SESSION['user'])) {
                $user = $_SESSION['user'];
                if(isset($_GET[$tes])) {
                        $jumlah = $_GET['jumlah'];
                        $warna = $_GET['warna'];
                        $catatan = $_GET['catatan'];
                        $hargaAkhir = $jumlah * $diskon1;
        
                        $cek = mysqli_num_rows(ambilNama($user,$nama));
                        if($cek == 0) {
                                tambahKer($user, $nama,$diskon1,$data['diskon'],$data['gambar'],$hargaAkhir,$jumlah,$warna,$catatan);
                                // header("location: ../toko/index.php"); ?>
                                <script language ="javascript">
                                        window.location.href="../toko/";
                                        // alert('Produk berhasil ditambahkan di keranjang');
                                </script>
                                <?php 
                        } else {
                                ?>
                                <script language ="javascript">
                                        window.location.href="../toko/";
                                        alert('Produk sudah ada di keranjang');
                                </script>
                                <?php
                                // header("location: ../toko/index.php");
                        }
                        
                        
                } 
        } else if (isset($_SESSION['admin'])) {
                $user = $_SESSION['admin'];
                if(isset($_GET[$tes])) {
                        $jumlah = $_GET['jumlah'];
                        $warna = $_GET['warna'];
                        $catatan = $_GET['catatan'];
                        $hargaAkhir = $jumlah * $diskon1;
        
                        $cek = mysqli_num_rows(ambilNama($user,$nama));
                        if($cek == 0) {
                                tambahKer($user, $nama,$diskon1,$data['diskon'],$data['gambar'],$hargaAkhir,$jumlah,$warna,$catatan);
                                // header("location: ../toko/index.php"); ?>
                                <script language ="javascript">
                                        window.location.href="../toko/";
                                        // alert('Produk berhasil ditambahkan di keranjang');
                                </script>
                                <?php 
                        } else {
                                ?>
                                <script language ="javascript">
                                        window.location.href="../toko/";
                                        alert('Produk sudah ada di keranjang');
                                </script>
                                <?php
                                // header("location: ../toko/index.php");
                        }
                }
        } else {
                // header("../toko/index.php");
                ?>
                        <script language ="javascript">
                                alert('Silahkan Login terlebih dahulu untuk memesan produk');
                                window.location.href="../akun/masuk.php";
                        </script>
                <?php
                exit;
        }
        
}?>
</body>
</html>



