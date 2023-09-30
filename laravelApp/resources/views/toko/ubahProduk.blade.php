<!-- 
MYMOUSE WEBSITE(MOUSE WEB)
Dibuat Oleh : Filipus Arif Kristiyan
Tujuan Web : Untuk memenuhi Tugas,UTS,UAS Pemrograman Web Lanjut(Semester 2)
Github : github.com/filipusarif
Dibuat : 15 Maret 2023 - 25 April 2023
File : ubahProduk.php
-->

<?php 
session_start();
require "../php/fungsi.php";
// Cek Session Admin Mulai
if(!isset($_SESSION['admin'])) {
    header("location: ../toko/");
    exit;
}
// Cek Session Admin Selesai
$user = $_SESSION['admin'];
$role = "admin";

// Mengambil Id Mulai
if(isset($_GET['id'])){
    $id = $_GET['id'];
}
// Mengambil Id Selesai
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/admin.css">
    <link rel="stylesheet" href="../css/navbar.css">
    <link rel="stylesheet" href="../css/footer.css">
    <link rel="icon" href="../gambar/miniLogo.png">
    <title>MyMouse ~ Admin</title>
</head>
<body>
<!-- Header Mulai -->
    <header class="container">
        <a href="../" class="logo">
            <img class="logo" src="../gambar/logoWeb.png" alt="Mymouse" width="180px">
        </a>
        <nav class="">
            <ul class="navigation ">
                <li><a href="../" class="hover" >beranda</a></li>
                <li><button id="btnDrop1" class="hover">Tetikus</button>
                    <ul class="dropdown1" id="drop1">
                        <li><a href="../#definitionPage">pengertian</a></li>
                        <li><a href="../#historyPage">sejarah</a></li>
                        <li><a href="../#functionPage">Fungsi</a></li>
                    </ul>
                </li>
                <li><a href="../jenis/" class="hover">jenis</a></li>
                <li><a href="../berita/" class="hover">berita</a></li>
                <li><button onclick="btnTetikus()" id="btnDrop2" class="hover">Kontak</button>
                    <ul class="dropdown2" id="drop2">
                        <li><a href="https://www.facebook.com/mymouseofc/" target="_blank">Facebook</a></li>
                        <li><a href="https://twitter.com/curvast" target="_blank">Twiter</a></li>
                        <li><a href="https://www.instagram.com/mymouseofc/" target="_blank">Instagram</a></li>
                        <li><a href="https://github.com/filipusarif" target="_blank">GitHub</a></li>
                        <li><a href="https://discord.gg/TRsCsN86mB" target="_blank">Discord</a></li>
                        <li><a href="https://www.linkedin.com/in/filipus-arif-kristiyan/" target="_blank">linkedin</a>
                        </li>
                    </ul>
                </li>
                <li class="toko"><a href="/">toko</a></li>
            </ul>
        </nav>
        <div class="container-profile">
        <a href="../toko/" class="shop" title="Toko"><img class="shopLogo" src="../gambar/Union.png" alt="" width="30px"><p id="notif" class="notifikasi"></p></a>
        <!-- Profil Mulai -->
        <div class="profil">
                <button onclick="btnTetikus()" id="btnDrop3" class="prof">
                    <?php 
                    $temp = mysqli_fetch_assoc(ambilAkun($user));
                    $foto = $temp['profil'];
                    if(isset($_SESSION['admin'])) {
                        echo '
                        <img src="../gambar/pp/'.$temp['profil'].'" alt="" title="'. $user .'">
                        ';
                    }
                    ?>
                </button>
                <ul class="dropdown3" id="drop3">
                <?php 
                    if(isset($_SESSION['admin'])) {
                        echo '
                        <li><img src="../gambar/pp/'.$temp['profil'].'" alt="" class="pp" title="'. $user .'"></li>
                        ';
                    }
                    ?>
                    <li class="ketStatus"><h1><?= $user ?> </h1>
                    <p>-----------------</p>
                    <p><?= $role ?></p></li>
                    <?php 
                    if(isset($_SESSION['admin'])) {
                        echo '
                        <li><a href="../toko/admin.php" class="tip"><img src="../gambar/icon/Eye.png" alt="">Halaman Admin</a></li>
                        <li><a href="../akun/" class="tip"><img src="../gambar/icon/User.png" alt="">Kelola Akun</a></li>
                        <li><a href="../toko/pesanan.php" class="tip"><img src="../gambar/icon/Shopping_Bag.png" alt="">Pesanan</a></li>
                        ';
                        ?>
                        <li><a href="../akun/keluar.php" class="tip" onclick="return confirm('Apakah anda yakin ingin keluar?')" type="button"><img src="../gambar/icon/Exit.png" alt="">Keluar</a></li>
                    <?php
                    }
                    ?>
                </ul>
            </div>
        </div>
        <!-- Profil Selesai -->
        <div class="hamburger">
            <input type="checkbox" name="" id="">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </header>

    <!-- Halaman Edit Mulai -->
    <section id="edit">
        <!-- Mengambil Data Yang akan diedit -->
        <?php $data = mysqli_fetch_assoc(ambil1Produk($id)); ?>

        <!-- Form Edit Mulai -->
        <form action="" method="post" class="container-edit edit" enctype="multipart/form-data">
            <div class="kiri">
                <img src="../gambar/brand/<?= $data['gambar'] ?>" alt="" class="mainGambar">
                <input type="file" name="gambarUtama1" id="gambarUtama1">
            </div>
            <div class="container-kanan">
                <h1>Tambah Produk</h1>
                <div class="kanan">
                    <label for="nama">Nama</label>
                    <input type="text" name="nama" id="nama" value="<?= $data['nama'] ?>" required >
                    <label for="brand">Brand</label>
                    <select name="brand" id="brand" required>
                        <option value="<?= $data['brand'] ?>"><?= $data['brand'] ?></option>
                        <option value="logitech">Logitech</option>
                        <option value="Razer">Razer</option>
                        <option value="robot">Robot</option>
                        <option value="Taffware">Taffware</option>
                        <option value="SteelSeries">SteelSeries</option>
                        <option value="Fantech">Fantech</option>
                    </select>
                    <label for="harga">Harga</label>
                    <input type="number" name="harga" id="harga" value="<?= $data['harga'] ?>" required >
                    <label for="diskon">Diskon</label>
                    <select name="diskon" id="diskon" required>
                        <option value="<?= $data['diskon'] ?>"><?= $data['diskon'] ?>%</option>
                        <option value="5">5%</option>
                        <option value="10">10%</option>
                        <option value="20">20%</option>
                        <option value="50">50%</option>
                    </select>
                    <label for="jenis">Jenis</label>
                    <select name="jenis" id="jenis" required>
                        <option value="<?= $data['jenis'] ?>"><?= $data['jenis'] ?></option>
                        <option value="USB">USB</option>
                        <option value="Wireless">Wireless</option>
                        <option value="Serial">Serial</option>
                        <option value="PS2">PS/2</option>
                    </select>
                    <label for="gambar2">Gambar kecil 1</label>
                    <input type="file" name="gambar21" id="gambar2">
                    <label for="gambar3">Gambar kecil 2</label>
                    <input type="file" name="gambar31" id="gambar3">
                    <label for="gambar4">Gambar kecil 3</label>
                    <input type="file" name="gambar41" id="gambar4">
                    <label for="stok">Stok</label>
                    <input type="number" name="stok" id="stok" value="<?= $data['stok'] ?>" required>
                    <label for="deskripsi">Deskripsi</label>
                    <input type="text" name="deskripsi" id="deskripsi" value="<?= $data['deskripsi'] ?>" required >
                    <button type="submit" name="kirim">kirim</button>
                </div>
            </div>
        </form>
        <!-- Form Edit Selesai -->

    </section>
    <!-- Halaman Edit Selesai -->

    <?php
    // Cek Set Button kirim Mulai
    if(isset($_POST['kirim'])){
        $nama = $_POST['nama'];
        $brand = $_POST['brand'];
        $harga = $_POST['harga'];
        $diskon = $_POST['diskon'];
        $jenis = $_POST['jenis'];
        $stok = $_POST['stok'];
        $deskripsi = $_POST['deskripsi'];
        // Melakukan Update
        $update = updateProduk($data['id_produk'],$nama,$brand,$harga,$diskon,$jenis,$data['gambar'],$data['gambar2'],$data['gambar3'],$data['gambar4'],$stok,$deskripsi);
        if (!$update){
            echo '
            <script>
                alert("Produk tidak berhasi diubah");
                // window.location.href="../php/ubahProduk.php?id='.$id.'";
            </script>
        ';
        }else {
            echo '
                <script language ="javascript">
                    alert("Berhasil melakukan update");
                    window.location.href="../toko/";
                </script>
            ';
        }
    }
    // Cek Set Button Kirim Selesai
    ?>

    <!-- footer  Mulai-->
    <footer id="footerHome">
        <div class="containerFoot">
            <ul class="footMenu">
                <li><a href="../"><img src="../gambar/logoWeb.png" alt="MyMouse" width="150px"></a></li>
                <li><a href="../">beranda</a></li>
                <li><a href="../#definitionPage">tetikus</a></li>
                <li><a href="../jenis/">jenis</a></li>
                <li><a href="../berita/">berita</a></li>
            </ul>
            <ul class="refrensi">
                <li>
                    <h3>refrensi</h3>
                </li>
                <li><a href="https://www.w3schools.com/" target="_blank">w3schools</a></li>
                <li><a href="https://stackoverflow.com/" target="_blank">stack overflow</a></li>
                <li><a href="https://html.com/" target="_blank">html.com</a></li>
            </ul>
            <ul>
                <li>
                    <h3>created by</h3>
                </li>
                <li>
                    <p>filipus arif kristiyan</p>
                </li>
                <li>
                    <p>a11.2022.14278</p>
                </li>
                <li>
                    <p>a11.4107</p>
                </li>
                <li>
                    <p>teknik informatika</p>
                </li>
            </ul>
        </div>
        <div class="footSosmed">
            <a href="https://www.facebook.com/mymouseofc/" target="_blank"><img src="../gambar/sosmed/facebook.png"
                    alt="fb"></a>
            <a href="https://twitter.com/curvast" target="_blank"><img src="../gambar/sosmed/twitter.png" alt="twr"></a>
            <a href="https://www.instagram.com/mymouseofc/" target="_blank"><img src="../gambar/sosmed/instagram.png"
                    alt="ig"></a>
            <a href="https://github.com/filipusarif" target="_blank"><img src="../gambar/sosmed/github.png"
                    alt="gt"></a>
            <a href="https://discord.gg/TRsCsN86mB" target="_blank"><img src="../gambar/sosmed/discord.png"
                    alt="dc"></a>
            <a href="https://www.linkedin.com/in/filipus-arif-kristiyan/" target="_blank"><img
                    src="../gambar/sosmed/linkedin.png" alt="li"></a>
        </div>
    </footer>
    <!-- Footer Selesai -->

    <!-- Link File Javascript Mulai -->
    <script src="../javascript/dropdown.js" ></script>
    <script src="../javascript/notifikasi.js" ></script>
    <script src="../javascript/toko.js"></script>
    <script src="../javascript/main.js"></script>
    <!-- Link File Javascript Selesai -->
</body>
</html>