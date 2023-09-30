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
// Cek Session User selesai
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/jenis1.css">
    <link rel="stylesheet" href="../css/navbar.css">
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <link rel="icon" href="../gambar/miniLogo.png">
    <title>MyMouse ~ Jenis</title>
</head>

<body>
    <!-- Header -->
    @include('part/nav')
    <!-- header End -->
    <a href="#top" class="keAtas1" ><img src="../gambar/keatas.png" alt="keatas" width="30px" height="auto"></a>


    <!-- Background Fixed Mulai -->
    <section id="product" class="product1">
        <div class="contentProduct1">
            <h1>What's up <span class="blue"> Everyone</span></h1>
        </div>
    </section>
    <!-- Background Fixed Selesai -->

    <!-- Konten Utama Mulai -->
    <section id="productPage2" class="product2">
        <h1 class="jenisHead">Jenis Jenis Mouse</h1>
        <p class="jenis">Jenis Mouse terbagi menjadi 2 yaitu dengan</p>
        <h3 class="jenisPort">1. Jenis portnya</h3>

        <!-- Container Card1 Mulai -->
        <div class="containerPort">
            <div class="cardPort fade">
                <img class="gam" src="../gambar/serial.jpg" alt="Mouse Serial">
                <div class="ket">
                    <h1>Mouse Serial</h1>
                    <p>Mouse Serial digunakan pada komputer jaman dahulu, pada era
                        Pentium 1, Pentium 3 atau lainnya yang berjenis AT. Dilihat dari bentuknya, mouse ini
                        memiliki port serial dengan beberapa pin di ujungnya, atau yang dikenal dengan port VGA.</p>
                    <a href="../toko/" class="toToko">Toko</a>
                </div>
            </div>
            <div class="cardPort fade">
                <img class="gam" src="../gambar/ps2.jpg" alt="Mouse PS/2">
                <div class="ket">
                    <h1>Mouse PS/2</h1>
                    <p>Mouse PS2 juga merupakan jenis mouse pada era pentium 1-4 namun sampai saat ini jenis mouse PS2
                        masih digunakan meski kini penggunanya mulai sedikit saja karena saat ini telah banyak jenis
                        mouse dengan tipe dan teknologi terbaru.</p>
                    <a href="../toko/" class="toToko">Toko</a>
                </div>
            </div>
            <div class="cardPort fade">
                <img class="gam" src="../gambar/usb.jpg" alt="Mouse Usb">
                <div class="ket">
                    <h1>Mouse USB</h1>
                    <p>Saat ini mouse USB adalah jenis mouse yang paling umum dan banyak digunakan, karena Mouse ini
                        adalah jenis mouse yang sangat kompatibel untuk model tipe komputer jaman sekarang yang memiliki
                        port USB. Mouse USB ini adalah salah satu jenis mouse yang mudah digunakan.</p>
                    <a href="../toko/" class="toToko">Toko</a>
                </div>
            </div>
            <div class="cardPort fade">
                <img class="gam" src="../gambar/wireless.jpg" alt="Mouse Wireless">
                <div class="ket">
                    <h1>Mouse Wireless</h1>
                    <p>jenis mouse teknologi terbaru yang penggunaannya menggunakan fitur wireless (tanpa kabel). Dengan
                        adanya fitur wireless penggunaan mouse menjadi lebih simple dan efisien bahkan mouse ini bisa di
                        gunakan dari
                        jarak jauh.</p>
                    <a href="../toko/" class="toToko">Toko</a>
                </div>
            </div>
        </div>
        <!-- Container Card1 Selesai -->

        <h3 class="jenisSensor">2. Jenis sensornya</h3>
        <!-- Container Card2 Mulai -->
        <div class="containerSensor">
            <div class="cardPort fade">
                <img class="gam" src="../gambar/mekanikal.jpg" alt="Mouse Serial">
                <div class="ket">
                    <h1>Mouse Mekanik</h1>
                    <p> Mouse mekanik juga Disebut mouse trackball karena pada bagian bawah mouse ini terdapat sebuah
                        bola yang dapat
                        menggerakkan kursor.
                        Bola ini dapat menggerakkan kursor dengan cara bergeser dan menyambungkan ke sensor yang ada
                        pada bagian dalam mouse.</p>
                        <a href="../toko/" class="toToko">Toko</a>
                </div>
            </div>
            <div class="cardPort fade">
                <img class="gam" src="../gambar/optikal.jpg" alt="Mouse Serial">
                <div class="ket">
                    <h1>Mouse optomekanik</h1>
                    <p> Optomechanical mouse ini jenis mouse yang memiliki prinsip hampir sama dengan mechanical mouse.
                        Memiliki komponen yang mirip dengan bola dan mouse jenis ini memiliki sensor sinar yang
                        merepresentasikan posisi koordinat pointer. Kelebihan dari mouse tipe ini memiliki keakuratan
                        yang lebih tinggi jika dibandingkan dengan mechanical mouse.</p>
                        <a href="../toko/" class="toToko">Toko</a>
                </div>
            </div>
            <div class="cardPort fade">
                <img class="gam" src="../gambar/laser.jpg" alt="Mouse Usb">
                <div class="ket">
                    <h1>Mouse Optik</h1>
                    <p>Mouse Optik atau Mouse Laser yaitu menggunakan sinar laser atau sinar LED (Light Emitting Diode)
                        untuk mendeteksi pergerakan mouse.
                    </p>
                    <a href="../toko/" class="toToko">Toko</a>
                </div>
            </div>
        </div>
        <!-- Container Card2 Selesai -->

        <!-- Table Mulai -->
        <h1 class="headKel">kekurangan dan kelebihan mouse</h1>
        <div class="containerTable">
            <table class="tabelKel">
                <tr>
                    <th class="jenisTable">Jenis Mouse</th>
                    <th class="kelebihan">Kelebihan</th>
                    <th class="Kekurangan"> Kekurangan</th>
                </tr>
                <tr>
                    <td rowspan="2">Serial Mouse</td>
                    <td>Mouse jenis ini cocok digunakan pada komputer jaman dahulu seperti komputer Pentium 1, 2
                        hingga
                        3.
                    </td>
                    <td>
                        Sudah jarang ditemukan karena perkembangan teknologi yang semakin berubah.
                    </td>
                </tr>
                <tr>
                    <td>Mouse lebih rapat dan tidak mudah goyang karena banyak pin yang menempel dan adanya
                        sekrup
                        pemutar untuk mengencangkan.</td>
                    <td>
                        Harus hati-hati memasang mouse karena jika salah atau terbalik, pin di komputer akan terdorong
                        ke belakang bahkan miring dan menyebabkan tidak bisa menggunakan mouse.
                    </td>
                </tr>
                <tr>
                    <td rowspan="2">Mouse PS/2</td>
                    <td>Lebih praktis tanpa harus memutar sekrup.</td>
                    <td>Harus hati-hati karena pin-pin pada komputer akan rusak jika terdorong ke belakang atau miring
                        disebabkan kesalahan atau terbaliknya pemasangan mouse.
                    </td>
                </tr>
                <tr>
                    <td>Banyak komputer tipe dulu menggunakan mouse jenis ini terutama pada Pentium 4.</td>
                    <td>Lambat dalam menggerakkan kursor.</td>
                </tr>
                <tr>
                    <td rowspan="2">Mouse USB</td>
                    <td>Pergerakan kursor lebih tinggi.</td>
                    <td>Membutuhkan port penghubung apabila ingin menggunakan pada komputer lama.</td>
                </tr>
                <tr>
                    <td>Banyak laptop maupun komputer yang saat ini cocok dengan jenis mouse USB.</td>
                    <td> Dalam beberapa kasus, mouse mudah goyang dan lepas apabila tersenggol.</td>
                </tr>
                <tr>
                    <td rowspan="2">Mouse Wireless</td>
                    <td>Lebih simpel dan fleksibel digunakan dimana saja.</td>
                    <td>Harus mengganti baterai jika habis.</td>
                </tr>
                <tr>
                    <td>Dapat digunakan dalam jangkauan area yang luas karena tidak terikat kabel.</td>
                    <td> Harga lebih mahal.</td>
                </tr>
                <tr>
                    <td rowspan="2">Mouse Mekanik</td>
                    <td>Harga murah.</td>
                    <td>Mouse menjadi lebih berat karena adanya bola.</td>
                </tr>
                <tr>
                    <td>Awet karena kerusakannya rata-rata hanya karena bola yang kotor dan hal ini bisa dengan mudah
                        dibersihkan.</td>
                    <td>Kurangnya sensitivitas pergerakan kursor pada komputer.</td>
                </tr>
                <tr>
                    <td>Mouse Optomekanik</td>
                    <td>keakuratan yang lebih tinggi jika dibandingkan dengan mechanical mouse.</td>
                    <td>Jika terlalu kotor akan membuat bola tidak bergerak dan mouse tidak berfungsi.</td>
                </tr>
                <tr>
                    <td rowspan="2">Mouse Optik</td>
                    <td>Tingkat keakuratan lebih tinggi</td>
                    <td>Jika rusak dan bagian cahaya laser susah menyala, akan sulit memperbaikinya.</td>
                </tr>
                <tr>
                    <td>Dapat digunakan meski tanpa mousepad (alas mouse).</td>
                    <td>Cahaya laser berbahaya bagi tubuh sehingga tidak disarankan meletakkan mouse di atas telapak
                        tangan atau bagian tubuh lainnya.</td>
                </tr>
            </table>
        </div>
        <!-- Table Selesai -->

    </section>
    <!-- Konten Utama Selesai -->

    <!-- footer Mulai -->
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

<!-- Develop By Filipus Arif -->