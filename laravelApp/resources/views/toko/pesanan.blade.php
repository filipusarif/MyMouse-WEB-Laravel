<!-- 
MYMOUSE WEBSITE(MOUSE WEB)
Dibuat Oleh : Filipus Arif Kristiyan
Tujuan Web : Untuk memenuhi Tugas,UTS,UAS Pemrograman Web Lanjut(Semester 2)
Github : github.com/filipusarif
Dibuat : 15 Maret 2023 - 25 April 2023
File : pesanan.php
-->

<?php
session_start();
require "../php/fungsi.php"; 

$user = "Tamu";
$role = "Pengunjung";
// Cek Session User Mulai
if(isset($_SESSION['user'])) {
    $user = $_SESSION['user'];
    $role = "Pengguna";
} else if(isset($_SESSION['admin'])) {
    $user = $_SESSION['admin'];
    $role = "Admin";
}else {
    header("location: ../akun/masuk.php");
}
// Cek Session User Selesai

// Cek Paket diterima Mulai
if(isset($_GET['id'])){
    $id = $_GET['id'];
    tambahPenjualan($id,$user);
    hapusPesanan($id,$user);
    header("location: pesanan.php");
}
// Cek Paket diterima Selesai
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../gambar/miniLogo.png">
    <link rel="stylesheet" href="../css/navbar.css">
    <link rel="stylesheet" href="../css/pesan.css">
    <link rel="stylesheet" href="../css/footer.css">
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <title>MyMouse ~ Pesanan</title>
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
        <a href="index.php" class="shop" title="Toko"><img class="shopLogo" src="../gambar/Union.png" alt="" width="30px"><p id="notif" class="notifikasi"></p></a>
        <!-- Profil Mulai -->
        <div class="profil">
                <button onclick="btnTetikus()" id="btnDrop3" class="prof">
                    <?php 
                    $temp = mysqli_fetch_assoc(ambilAkun($user));
                    if(isset($_SESSION['user'])) {
                        echo '
                        <img src="../gambar/pp/'.$temp['profil'].'" alt="" title="'. $user.'">
                        ';
                    } else if(isset($_SESSION['admin'])) {
                        echo '
                        <img src="../gambar/pp/'.$temp['profil'].'" alt="" title="'. $user .'">
                        ';
                    } else {
                        echo '
                        <img src="../gambar/pp/profile.jpeg" alt="" title="Pengunjung">
                        ';
                    }
                    ?>
                </button>
                <ul class="dropdown3" id="drop3">
                <?php 
                    if(isset($_SESSION['user'])) {
                        echo '
                        <li><img src="../gambar/pp/'.$temp['profil'].'" alt="" class="pp" title="'. $user.'"></li>
                        ';
                    } else if(isset($_SESSION['admin'])) {
                        echo '
                        <li><img src="../gambar/pp/'.$temp['profil'].'" alt="" class="pp" title="'. $user .'"></li>
                        ';
                    } else {
                        echo '
                        <li><img src="../gambar/pp/profile.jpeg" alt="" class="pp" title="Tamu"></li>
                        ';
                    }
                    ?>
                    <li class="ketStatus"><h1><?= $user ?> </h1>
                    <p>-----------------</p>
                    <p><?= $role ?></p></li>
                    <?php 
                    if(isset($_SESSION['user'])) {
                        echo '
                        <li><a href="../akun/" class="tip"><img src="../gambar/icon/User.png" alt="">Kelola Akun</a></li>
                        <li><a href="" class="tip"><img src="../gambar/icon/Shopping_Bag.png" alt="">Pesanan</a></li>
                        ';
                        ?>
                        <li><a href="../akun/keluar.php" class="tip" onclick="return confirm('Apakah anda yakin ingin keluar?')" type="button"><img src="../gambar/icon/Exit.png" alt="">Keluar</a></li>
                    <?php
                    } else if(isset($_SESSION['admin'])) {
                        echo '
                        <li><a href="admin.php" class="tip"><img src="../gambar/icon/Eye.png" alt="">Halaman Admin</a></li>
                        <li><a href="../akun/" class="tip"><img src="../gambar/icon/User.png" alt="">Kelola Akun</a></li>
                        <li><a href="" class="tip"><img src="../gambar/icon/Shopping_Bag.png" alt="">Pesanan</a></li>
                        ';
                        ?>
                        <li><a href="../akun/keluar.php" class="tip" onclick="return confirm('Apakah anda yakin ingin keluar?')" type="button"><img src="../gambar/icon/Exit.png" alt="">Keluar</a></li>
                    <?php
                    } else {
                        echo '
                        <li><a href="../akun/masuk.php" class="tip"><img src="../gambar/icon/Enter.png" alt="">Masuk</a></li>
                        <li><a href="../akun/daftar.php" class="tip"><img src="../gambar/icon/User_Add.png" alt="">Daftar</a></li>
                        ';
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
    <!-- header Selesai -->
    <a href="#main" class="keAtas"><img src="../gambar/keatas.png" alt="keatas" width="30px" height="auto"></a>

    <!-- Halaman Utama Mulai -->
    <section id="main">
        <h1>Pesanan</h1>
        <!-- Container Konten Mulai -->
        <div class="container-all">
            <?php 
            // Cek keranjang Mulai
            if ( ambilPesanan($user)->fetchColumn() > 0){
                // Penulangan Card Keranjang Mulai
                foreach(ambilPesanan($user) as $data) {
                echo ('
                <div class="container-pesan">');
                    // Pengulangan Produk Mulai
                    foreach (ambilPesanan1($user,$data['tanggal']) as $row) {
                    echo ('
                    <div class="container-atas">
                        <div class="wrapper-gambar">
                            <img src="../gambar/brand/'. $row['gambar'] .'" alt="">
                        </div>
                        <div class="wrapper-info">
                            <h1>'. $row['nama'] .'</h1>
                            <p>Jumlah : '. $row['jumlah'] .'</p>
                            <p>Warna : '. $row['warna'] .'</p>
                            <p>Catatan</p>
                            <p>'. $row['catatan'] .'</p>
                        </div>
                    </div>
                    ');
                    $alamat = $row['alamat'];
                    $pos = $row['pos'];
                    $metode = $row['Pembayaran'];
                    $hp = $row['hp'];
                    $jasa = $row['Hkurir'];
                    $total = $row['totalHar'];
                    };?>
                    <table>
                        <tr>
                            <th>Alamat</th>
                            <th>Kode Pos</th>
                            <th>Metode Pembayaran</th>
                            <th>No HP</th>
                            <th>Kurir</th>
                        </tr>
                        <tr>
                            <td><?= $alamat ?></td>
                            <td><?= $pos ?></td>
                            <td><?= $metode ?></td>
                            <td><?= $hp ?></td>
                            <td><?= $jasa?></td>
                        </tr>
                    </table>
                    <div class="flex">
                        <p>Barang yang dalam proses pengiriman tidak dapat dibatalkan</p>
                        <h1>Rp. <?= number_format($total,0,',','.'); ?></h1>
                    </div>
                    <a href="?id=<?= $row['tanggal'] ?>" onclick="return confirm('Apakah Paket sudah diterima?')" type="button"
                            class="sampai">Paket Diterima</a>
                </div>
                <?php };
            } else {
                echo ('
                <div class="belumPesan tes">
                    <p>belum ada pesanan</p>
                    <a href="index.php">pesan sekarang</a>
                </div>
                ');
            }
            // Cek Keranjang Selesai
            ?>
        </div>
        <!-- Container Konten Selesai -->
    </section>
    <!-- Halaman Utama Selesai -->

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
    <script src="../javascript/main.js"></script>
    <script src="../javascript/notifikasi.js"></script>
    <script src="../javascript/dropdown.js" ></script>
    <script src="../javascript/notifikasi.js"></script>
    <!-- Link File Javascript Selesai -->
</body>
</html>