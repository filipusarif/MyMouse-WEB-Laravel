<?php
require "fungsi.php";


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>admin</title>
</head>
<body>
    <?php
    if(isset($_POST['kirim'])) {
        $brand = $_POST['brand'];
        $nama = $_POST['nama'];
        $harga = $_POST['harga'];
        $diskon = $_POST['diskon'];
        $jenis = $_POST['jenis'];
        $gambar = $_POST['gambar'];
        $gambar2 = $_POST['gambar2'];
        $gambar3 = $_POST['gambar3'];
        $gambar4 = $_POST['gambar4'];
        $stok = $_POST['stok'];
        $deskripsi = $_POST['deskripsi'];
        tambahProduk($brand,$nama,$harga,$diskon,$jenis,$gambar,$gambar2,$gambar3,$gambar4,$stok,$deskripsi);
        echo '
                <script language ="javascript">
                    alert("Berhasil menambahkan produk");
                </script>
            ';
        header("location: ../toko/");
    }
    ?>
</body>
</html>