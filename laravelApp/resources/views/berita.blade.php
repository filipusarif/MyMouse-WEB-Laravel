<!-- 
MYMOUSE WEBSITE(MOUSE WEB)
Dibuat Oleh : Filipus Arif Kristiyan
Tujuan Web : Untuk memenuhi Tugas,UTS,UAS Pemrograman Web Lanjut(Semester 2)
Github : github.com/filipusarif
Dibuat : 15 Maret 2023 - 25 April 2023
File : Index.php
-->

<?php 
session_start();
// require '../php/fungsi.php';
$user = "Arif";
$role = "Pengunjung";
// Cek Session User Mulai
// if(isset($_SESSION['user'])) {
//     $user = $_SESSION['user'];
//     $role = "Pengguna";
// } else if(isset($_SESSION['admin'])) {
//     $user = $_SESSION['admin'];
//     $role = "Admin";
// }
// Cek Session User Mulai
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/berita1.css">
    <link rel="stylesheet" href="../css/navbar.css">
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <link rel="icon" href="../gambar/miniLogo.png">
    <title>MyMouse ~ Berita</title>
</head>

<body>
    <!-- Header Mulai  -->
    @include('part/nav')
    <!-- header Selesai -->
    <a href="#news" class="keAtas"><img src="../gambar/keatas.png" alt="keatas" width="30px" height="auto"></a>

    <!-- Kontent Mulai -->
    <section id="news" class="newsPage1">
        <h1 class="newsHeader">berita</h1>
        <div class="containerAll">
            <!-- Container Card Berita Mulai -->
            <div class="containerNews">

                <div class="newsCard2">
                    <video width="100%" controls>
                        <source src="../gambar/News2.mp4" type="video/mp4">
                    </video>
                    <h4>Logitech Pop Mouse: Muncul Dengan Warna dan Emoji mencolok | The Gadgets 360 show</h4>
                </div>
                <div class="newsCard">
                    <a href="https://www.liputan6.com/disabilitas/read/4430079/perusahaan-ini-meluncurkan-mouse-komputer-khusus-untuk-anak-disabilitas"
                        target="_blank">
                        <img src="../gambar/news1.jpg" alt="" width="95%">
                        <h4>Perusahaan Ini Meluncurkan Mouse Komputer Khusus untuk Anak Disabilitas</h4>
                    </a>
                </div>

                <div class="newsCard">
                    <a href="https://inet.detik.com/review-produk/d-6135612/review-logitech-mx-master-3s-mouse-premium-yang-pendiam"
                        target="_blank">
                        <img src="../gambar/news2.jpeg" alt="mouse logitech MX Master 3S">
                        <h4>Review Logitech MX Master 3S, Mouse Premium yang Pendiam</h4>
                    </a>
                </div>

                <div class="newsCard">
                    <a href="https://inet.detik.com/review-produk/d-6096786/review-logitech-lift-mouse-vertikal-yang-unik"
                        target="_blank">
                        <img src="../gambar/news3.jpeg" alt="Mouse Logitech Lift">
                        <h4>Review Logitech Lift, Mouse Vertikal yang Unik</h4>
                    </a>
                </div>
                <div class="newsCard">
                    <a href="https://techno.okezone.com/read/2022/08/15/57/2647968/7-cara-sederhana-atasi-masalah-pada-wireless-mouse-dijamin-ampuh"
                        target="_blank">
                        <img src="../gambar/news4.jpeg" alt="Mouse Wireless">
                        <h4>7 Cara Sederhana Atasi Masalah pada Wireless Mouse, Dijamin Ampuh</h4>
                    </a>
                </div>

                <div class="newsCard">
                    <a href="https://techno.okezone.com/read/2022/10/17/326/2688572/6-mouse-gaming-terbaik-dari-razer-viper-ultimate-hingga-hyperx-pulsefire-haste"
                        target="_blank">
                        <img src="../gambar/news5.jfif" alt="Mouse Gaming">
                        <h4>6 Mouse Gaming Terbaik, dari Razer Viper Ultimate hingga HyperX Pulsefire Haste</h4>
                    </a>
                </div>

                <div class="newsCard">
                    <a href="https://www.liputan6.com/tekno/read/4858892/logitech-signature-m650-mouse-nirkabel-senyap-yang-ramah-lingkungan"
                        target="_blank">
                        <img src="../gambar/news6.jpg" alt="Logitech Signature M650">
                        <h4>Logitech Signature M650, Mouse Nirkabel Senyap yang Ramah Lingkungan</h4>
                    </a>
                </div>
                <div class="newsCard">
                    <a href="https://www.liputan6.com/tekno/read/3182791/setelah-35-tahun-microsoft-akhirnya-luncurkan-mouse-baru"
                        target="_blank">
                        <img src="../gambar/news7.jpg" alt="Microsoft">
                        <h4>Setelah 35 Tahun, Microsoft Akhirnya Luncurkan Mouse Baru</h4>
                    </a>
                </div>
                <div class="newsCard">
                    <a href="https://www.liputan6.com/tekno/read/3012348/lagi-logitech-rilis-mouse-untuk-kontrol-dua-perangkat-sekaligus"
                        target="_blank">
                        <img src="../gambar/news8.jpg" alt="Logitech ">
                        <h4>Lagi, Logitech Rilis Mouse untuk Kontrol Dua Perangkat Sekaligus</h4>
                    </a>
                </div>
            </div>
            <!-- Container Card Berita Selesai -->
        </div>
    </section>
    <!-- Konten Selesai -->

    <!-- Footer Mulai -->
    @include('part/foot')
    <!-- Footer Selesai -->

    <!-- Link File Javascript Mulai -->
    <script src="../javascript/slider.js"></script>
    <script src="../javascript/notifikasi.js"></script>
    <script src="../javascript/dropdown.js" ></script>
    <script src="../javascript/main.js"></script>
    <!-- Link File Javascript Selesai -->
</body>

</html>