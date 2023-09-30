<!-- 
MYMOUSE WEBSITE(MOUSE WEB)
Dibuat Oleh : Filipus Arif Kristiyan
Tujuan Web : Untuk memenuhi Tugas,UTS,UAS Pemrograman Web Lanjut(Semester 2)
Github : github.com/filipusarif
Dibuat : 15 Maret 2023 - 25 April 2023
File : Index.php
-->

<?php 
// session_start();
// require 'php/fungsi.php';
$user = "Arif";
$role = "Pengunjung";
// Cek Session Mulai
// if(isset($_SESSION['user'])) {
//     $user = $_SESSION['user'];
//     $role = "Pengguna";
// } else if(isset($_SESSION['admin'])) {
//     $user = $_SESSION['admin'];
//     $role = "Admin";
// }
// Cek Session Selesai
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/navbar.css">
    <link rel="stylesheet" href="css/footer.css">
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <link rel="icon" href="gambar/miniLogo.png">
    <title>MyMouse</title>
</head>
<body>
    <!-- Header Mulai -->
    @include('part/nav')
    <!-- Header Selesai -->
    <a href="#" class="keAtas"><img src="gambar/keatas.png" alt="keatas" width="30px" height="auto"></a>
    <!-- Home Page Mulai -->
    <section id="homePage" class="home">
        <img src="gambar/vector.png" alt="" class="vektor">
        <div class="row">
            <div class="col-2">
                <h3>Welcome to <span class="blue">My</span>Mouse</h3>
                <h1><span class="blue">OUR</span> SECOND <br> HANDS</h1>
                <p> MyMouse merupakan website menyediakan mouse dari berbagai brand serta membahas tentang Mouse, dan juga berisi pembahasan seputar mouse.
                    dari
                    pengertian, sejarah, hingga jenis dari mouse. dengan adanya MyMouse diharapkan dapat membantu orang
                    yang
                    sedang mencari informasi mengenai mouse (Tetikus).
                </p>
                <div class="login">
                    <a href="akun/daftar.php"><img src="gambar/icon/User_Add.png" alt="">Daftar</a>
                    <a href="akun/masuk.php"><img src="gambar/icon/Enter.png" alt="">Masuk</a>
                </div>
                <div class="watermarkIcon">
                    <a href="https://www.facebook.com/mymouseofc/" target="_blank"><img src="gambar/facebook1.png"
                            alt=""></a>
                    <a href="https://twitter.com/curvast" target="_blank"><img src="gambar/twiter1.png" alt=""></a>
                    <a href="https://www.instagram.com/mymouseofc/" target="_blank"><img src="gambar/instagram1.png"
                            alt=""></a>
                </div>
            </div>
            <div class="col-1">
                <img src="gambar/mouseHome.png" alt="Mouse">
            </div>
        </div>
    </section>
    <!-- Home page Selesai -->

    <!-- Definition Page Mulai -->
    <section id="definitionPage" class="about1">
        <h1 class="heading fade">TETIKUS</h1>
        <div class="row2">
            <div class="col-3 gotop">
                <span></span>
                <img src="gambar/mouse4.png" alt="Mouse??" width="100%" height="auto">
            </div>
            <div class="col-4 right">
                <h1>Apa itu Mouse?</h1>
                <p>Bagi pengguna komputer pasti tak asing
                    lagi dengan
                    Mouse. Mouse merupakan salah satu
                    perangkat inputan pada komputer berupa gerakan, tekanan tombol (click), dan penggulungan (scroll)
                    yang dapat digunakan untuk memilih teks, ikon, file, dan folder. Mouse dapat diterjemahkan dalam
                    bahasa Indonesia menjadi "Tetikus". Disebut seperti itu karena memang bentuknya menyerupai seperti
                    tikus yang kecil, menggembung besar di bagian belakan, dan meruncing di bagian depan.</p>
                <a href="toko/" class="button">Toko</a>
            </div>
        </div>
    </section>
    <!-- Definition Page Selesai -->

    <!-- History Page Mulai -->
    <section id="historyPage" class="about2">
        <h1 class="heading fade">SEJARAH TETIKUS</h1>
        <!-- Content mulai -->
        <div class="row3">
            <div class="col-5 right">
            <!-- <object data="gambar/penemuMouse.jpg" type=""
                        style="float: right; width: 150px; margin: 60px; margin-top: 0;"></object> -->
                <h1>Siapa Penemu Tetikus?</h1>
                        <p class="par"> Mouse
                    partama kali dibuat pada tahun
                    1963,
                    oleh Douglas Engelbart seorang peneliti
                    dari Stanford Research Institute. Pada saat itu fisik mouse belum seperti sekarang. Mouse pertama yaitu
                    terbuat dari kayu, satu tombol kecil di bagian atasnya dan menggunakan dua gerigi roda dari logam yang
                    posisinya tegak lurus satu sama lain, serta sebuah lampu berwarna merah. karena memiliki kabel yang
                    panjang
                    sehingga bentuknya menerupai tikus, kemudian alat tersebut diberi nama "mouse"(Tikus). dan ternyata
                    cursor
                    yang berada pada layar memiliki nama yaitu "Bug" (Serangga).
                </p>
                <p class="par2">
                    Mouse dioperasikan dengan menghubungkan ke komputer dan ditampilkan di layar merupakan ide dari Bill
                    English, seorang kolega Douglas Engelbart. Bill English pula yang menyempurnakan bentuk mouse dan
                    menciptakan prototipe pertamanya. Pada tahun 1972. kemudian dikembangkan oleh perusahaan komputer Apple,
                    Inc. (Pengembang system operasi Macintosh). Maka dari itu, Apple-lah yang akhirnya mendapatkan paten
                    dari
                    penggunaan mouse.
                </p>
                <a href="toko/" class="button">Toko</a>
            </div>
            <div class="col-6 right">
                <img src="gambar/penemu.png" alt="">
            </div>
        </div>
        <!-- Content Selesai -->

        <!-- Wave mulai -->
        <div class="container-wave">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320" class="wave1">
                <path fill="#282828" fill-opacity="1" d="M0,224L40,208C80,192,160,160,240,154.7C320,149,400,171,480,197.3C560,224,640,256,720,256C800,256,880,224,960,202.7C1040,181,1120,171,1200,181.3C1280,192,1360,224,1400,240L1440,256L1440,320L1400,320C1360,320,1280,320,1200,320C1120,320,1040,320,960,320C880,320,800,320,720,320C640,320,560,320,480,320C400,320,320,320,240,320C160,320,80,320,40,320L0,320Z"></path>
            </svg>
            <div class="wave-content">
                <a href="#">
                    <img src="gambar/logoWeb.png" alt="">
                </a>
                <div class="info-sosmed">
                    <a href="https://www.facebook.com/mymouseofc/" target="_blank"><img src="gambar/sosmed/facebook.png"
                            alt="fb"></a>
                    <a href="https://twitter.com/curvast" target="_blank"><img src="gambar/sosmed/twitter.png" alt="twr"></a>
                    <a href="https://www.instagram.com/mymouseofc/" target="_blank"><img src="gambar/sosmed/instagram.png"
                            alt="ig"></a>
                    <a href="https://github.com/filipusarif" target="_blank"><img src="gambar/sosmed/github.png" alt="gt"></a>
                    <a href="https://discord.gg/TRsCsN86mB" target="_blank"><img src="gambar/sosmed/discord.png" alt="dc"></a>
                    <a href="https://www.linkedin.com/in/filipus-arif-kristiyan/" target="_blank"><img
                            src="gambar/sosmed/linkedin.png" alt="li"></a>
                </div>
                <a href="toko/">Belanja di MyMouse<img src="gambar/icon/Kiri.png" alt=""></a>
            </div>
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320" class="wave2">
                <path fill="#282828" fill-opacity="1" d="M0,128L60,122.7C120,117,240,107,360,106.7C480,107,600,117,720,133.3C840,149,960,171,1080,181.3C1200,192,1320,192,1380,192L1440,192L1440,0L1380,0C1320,0,1200,0,1080,0C960,0,840,0,720,0C600,0,480,0,360,0C240,0,120,0,60,0L0,0Z"></path>
            </svg>
        </div>
        <!-- Wave Selsai -->
    </section>
    <!-- History Page Selesai -->

    <!-- Function Page Mulai -->
    <section id="functionPage" class="about3">
        <div class="containerFung">
            <h1 class="fade">FUNGSI</h1>
            <div class="containerElement right">
                <h2>Apa Fungsi Tetikus?</h2>
                <ul class="fungsi">
                    <li>
                        <p>Memasukkan perintah kepada komputer dimana cara kerja dari mouse ini adalah dengan cara
                            menggeser-
                            geser mouse di permukaan papan yang datar.</p>
                    </li>
                    <li>
                        <p>Penggerak pointer untuk menunjukkan lokasi tertentu di layar monitor.</p>
                    </li>
                    <li>
                        <p>Berfungsi untuk menggulung (scrolling) layar dengan menggunakan roda scroll.</p>
                    </li>
                    <li>
                        <p>Digunakan untuk melakukan kegiatan yang disebut dengan: klik (memilih item), double klik
                            (membuka
                            file), klik tahan dan geser / drag drop (memindahkan item) dan klik kanan (menampilkan
                            pilihan
                            menu perintah).</p>
                    </li>
                    <li>
                        <p>Membuat pekerjaan menjadi lebih mudah dan cepat. Terlebih bagi kita yang sering melakukan
                            aktivitas mengedit foto atau membuat desain.</p>
                    </li>
                </ul>
                <a href="toko/" class="button position">Toko</a>
            </div>
        </div>
    </section>
    <!-- Function Page Selesai -->

    <!-- Footer Mulai -->
    @include('part.foot')
    <!-- Footer Selesai -->
    
    <!-- Link File Javascript Mulai -->
    <script src="javascript/slider.js"></script>
    <script src="javascript/notifikasi.js"></script>
    <script src="javascript/dropdown.js" ></script>
    <script src="javascript/main.js"></script>
    <!-- Link File Javascript Selesai -->
</body>

</html>
<!-- Develop By Filipus Arif -->