<!-- 
MYMOUSE WEBSITE(MOUSE WEB)
Dibuat Oleh : Filipus Arif Kristiyan
Tujuan Web : Untuk memenuhi Tugas,UTS,UAS Pemrograman Web Lanjut(Semester 2)
Github : github.com/filipusarif
Dibuat : 15 Maret 2023 - 25 April 2023
File : Admin.php
-->

<?php 
session_start();
// require "../php/fungsi.php";
// Cek Session Mulai
// if(!isset($_SESSION['admin'])) {
//     header("location: index.php");
//     exit;
// }
// Cek Session Selesai
$user = $_SESSION['admin'];
$role = "admin";

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
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
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
        <a href="index.php" class="shop" title="Toko"><img class="shopLogo" src="../gambar/Union.png" alt="" width="30px"><p id="notif" class="notifikasi"></p></a>
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
    <!-- Header Selesai -->
    <a href="#" class="keAtas"><img src="../gambar/keatas.png" alt="keatas" width="30px" height="auto"></a>
    
    <?php
    // Pembagian Halaman Mulai
    if(isset($_GET['tambahProduk'])){
        halamanTambahProduk($user,$role,$foto);
    }else {
        halamanAdmin($user,$role,$foto);
    }
    // Pembagian Halaman Selesai
    
    // Fungsi Halaman Tambah Produk Mulai
    function halamanTambahProduk($user,$role,$foto){?>
    <section id="main">
        <!-- Side Bar Mulai -->
        <div class="side-bar">
            <div class="profile">
                <img src="../gambar/pp/<?= $foto ?>" alt="" class="pp" title="<?= $user ?>"></li>
                <h1><?= $user ?></h1>
            </div>
            <a href="../toko/admin.php"><img src="../gambar/icon/dasbor.png" alt="">  halaman Admin</a>
            <a href="?tambahProduk=<?= $user ?>"><img src="../gambar/icon/plus.png" alt=""> Tambah Produk</a>
            <a href="../akun/"><img src="../gambar/icon/User_Add.png" alt=""> Kelola Akun</a>
            <div class="watermarkIcon" style="margin-top:40px;">
                    <a href="https://www.facebook.com/mymouseofc/" target="_blank"><img src="../gambar/facebook1.png"
                            alt=""></a>
                    <a href="https://twitter.com/curvast" target="_blank"><img src="../gambar/twiter1.png" alt=""></a>
                    <a href="https://www.instagram.com/mymouseofc/" target="_blank"><img src="../gambar/instagram1.png"
                            alt=""></a>
            </div>
        </div>
        <!-- Side Bar Selesai -->

        <!-- Konten Utama Mulai -->
        <form action="../php/tambahProduk.php" method="post" class="container-input" enctype="multipart/form-data">
            <div class="kiri">
                <img src="../gambar/pp/user.jpg" alt="">
                <input type="file" name="gambarUtama" id="gambarUtama">
            </div>
            <div class="container-kanan">
                <h1>Tambah Produk</h1>
                <div class="kanan">
                    <label for="nama">Nama</label>
                    <input type="text" name="nama" id="nama" required placeholder="Logitech g74..">
                    <label for="brand">Brand</label>
                    <select name="brand" id="brand" required>
                        <option value="logitech">Logitech</option>
                        <option value="Razer">Razer</option>
                        <option value="SteelSeries">SteelSeries</option>
                        <option value="Fantech">Fantech</option>
                        <option value="Rexus">Rexus</option>
                        <option value="Hyperx">Hyperx</option>
                        <option value="Glorious">Glorious</option>
                        <option value="Corsair">Corsair</option>
                        <option value="Roccat">Roccat</option>
                        <option value="robot">Robot</option>
                        <option value="Taffware">Taffware</option>
                    </select>
                    <label for="harga">Harga</label>
                    <input type="number" name="harga" id="harga" required placeholder="300000">
                    <label for="diskon">Diskon</label>
                    <select name="diskon" id="diskon" required>
                        <option value="5">5%</option>
                        <option value="10">10%</option>
                        <option value="20">20%</option>
                        <option value="50">50%</option>
                    </select>
                    <label for="jenis">Jenis</label>
                    <select name="jenis" id="jenis" required>
                        <option value="USB">USB</option>
                        <option value="Wireless">Wireless</option>
                        <option value="Serial">Serial</option>
                        <option value="PS2">PS/2</option>
                    </select>
                    <label for="gambar2">Gambar kecil 1</label>
                    <input type="file" name="gambar2" id="gambar2">
                    <label for="gambar3">Gambar kecil 2</label>
                    <input type="file" name="gambar3" id="gambar3">
                    <label for="gambar4">Gambar kecil 3</label>
                    <input type="file" name="gambar4" id="gambar4">
                    <label for="stok">Stok</label>
                    <input type="number" name="stok" id="stok" required placeholder="156">
                    <label for="deskripsi">Deskripsi</label>
                    <input type="text" name="deskripsi" id="deskripsi" required placeholder="Spek..">
                    <button type="submit" name="kirim">kirim</button>
                </div>
            </div>
        </form>
        <!-- Konten Utama Selesai -->
    </section>
    <?php
    };
    // Fungsi Tambah Produk Selesai
    
    // Fungsi Halaman Admin Mulai
    function halamanAdmin($user,$role,$foto){
    ?>
    <section id="home" >
        <!-- Side Bar Mulai -->
        <div class="side-bar">
            <div class="profile">
                <img src="../gambar/pp/<?= $foto ?>" alt="" class="pp" title="<?= $user ?>"></li>
                <h1><?= $user ?></h1>
            </div>
            <a href="../toko/admin.php"><img src="../gambar/icon/dasbor.png" alt="">  halaman Admin</a>
            <a href="?tambahProduk=<?= $user ?>"><img src="../gambar/icon/plus.png" alt=""> Tambah Produk</a>
            <a href="../akun/"><img src="../gambar/icon/User_Add.png" alt=""> Kelola Akun</a>
            <div class="watermarkIcon" style="margin-top:40px;">
                    <a href="https://www.facebook.com/mymouseofc/" target="_blank"><img src="../gambar/facebook1.png"
                            alt=""></a>
                    <a href="https://twitter.com/curvast" target="_blank"><img src="../gambar/twiter1.png" alt=""></a>
                    <a href="https://www.instagram.com/mymouseofc/" target="_blank"><img src="../gambar/instagram1.png"
                            alt=""></a>
            </div>
        </div>
        <!-- Side Bar Selesai -->

        <!-- Konten Utama Mulai -->
        <div class="container-content">
            <h1>Admin</h1>
            <?php 
            $penjualan = mysqli_fetch_assoc(ambilPenjualan());
            $pengguna = ambilPengguna();
            ?>
            <!-- Container Laporan Card Mulai -->
            <div class="container-card">
                <div class="card">
                    <div class="bagian-kiri">
                        <p>pengguna</p>
                        <h1><?= number_format($pengguna,0,",",".")  ?></h1>
                        <p>total pengguna</p>
                    </div>
                    <div class="bagian-kanan">
                        <img src="../gambar/icon/Users1.png" alt="">
                    </div>
                </div>
                <div class="card">
                    <div class="bagian-kiri">
                        <p>terjual</p>
                        <h1><?= number_format($penjualan['terjual'],0,",",".")  ?></h1>
                        <p>Produk terjual</p>
                    </div>
                    <div class="bagian-kanan">
                        <img src="../gambar/icon/box.png" alt="">
                    </div>
                </div>
                <div class="card">
                    <div class="bagian-kiri">
                        <p>pendapatan</p>
                        <h1>Rp.<?= number_format($penjualan['pendapatan'],0,",",".") ?></h1>
                        <p>total pendapatan</p>
                    </div>
                    <div class="bagian-kanan">
                        <img src="../gambar/icon/Dollar.png" alt="">
                    </div>
                </div>
            </div>
            <!-- Container Laporan Card Selesai -->

            <!-- Diagram dan Riwayat Pembelian Mulai -->
            <div class="main-content">
                <div class="diagram">
                    <div class="diagram1">
                        <h1>Laporan Bulanan</h1>
                        <canvas id="myChart" ></canvas>
                    </div>
                    <div class="diagram2">
                        <h1>lapora produk terjual</h1>
                        <canvas id="produkChart" ></canvas>
                    </div>
                </div>
                <h1 class="head">Riwayat penjualan</h1>
                <table>
                    <tr>
                        <th>no</th>
                        <th>nama</th>
                        <th>jumlah</th>
                        <th>harga</th>
                        <th>pembeli</th>
                        <th>tanggal</th>
                    </tr>
                    <?php 
                    $no = 1;
                    foreach(ambilLaporan() as $laporan){ ?>
                    <tr>
                        <td><?= $no ?></td>
                        <td><?= $laporan['nama'] ?></td>
                        <td><?= $laporan['jumlah'] ?></td>
                        <td>Rp<?= number_format($laporan['harga_awal'],0,",",".")  ?></td>
                        <td><?= $laporan['user'] ?></td>
                        <td><?= $laporan['tanggal'] ?></td>
                    </tr>
                    <?php 
                    $no++;
                    }; ?>
                </table>
                <?php 
                // Mengambil data Laporan Bulanan Mulai
                foreach (ambilBulan() as $data){
                    $bulan[] = $data['bulan'];
                    $total[] = $data['total'];
                };
                // Mengambil data Laporan Bulanan Selesai

                // Mengambil data Produk terjual Mulai
                foreach(dataPenjualan() as $jual){
                    $produk[] = $jual['nama_produk'];
                    $produkTotal[] = $jual['total_produk'];
                }
                // Mengambil data Produk terjual Mulai
                ?>
            </div>
            <!-- Diagram dan Riwayat pembelian selesai -->
        </div>
    </section>

    <script>
        const ctx = document.getElementById('myChart');
        const produk = document.getElementById('produkChart');
                
        // Diagram Laporan Bulanan Mulai
        new Chart(ctx, {
            type: 'bar',
            data: {
            labels: <?php echo json_encode($bulan) ?>,
            datasets: [{
                label: 'laporan bulanan MyMouse',
                data: <?php echo json_encode($total) ?>,
                borderWidth: 1,
                backgroundColor: [
            'rgba(255, 99, 132, 0.2)',
            'rgba(255, 159, 64, 0.2)',
            'rgba(255, 205, 86, 0.2)',
            'rgba(75, 192, 192, 0.2)',
            'rgba(54, 162, 235, 0.2)',
            'rgba(153, 102, 255, 0.2)',
            'rgba(201, 203, 207, 0.2)'
            ],
            borderColor: [
            'rgb(255, 99, 132)',
            'rgb(255, 159, 64)',
            'rgb(255, 205, 86)',
            'rgb(75, 192, 192)',
            'rgb(54, 162, 235)',
            'rgb(153, 102, 255)',
            'rgb(201, 203, 207)'
            ],
            }]
            },
            options: {
            scales: {
                y: {
                beginAtZero: true
                }
            }
            }
        });
        // Diagram Laporan Bulanan Selesai

        // Diagram laporan Terjual Mulai
        new Chart(produk, {
            type: 'doughnut',
            data: {
            labels: <?php echo json_encode($produk) ?>,
            datasets: [{
                label: 'laporan Produk',
                data: <?php echo json_encode($produkTotal) ?>,
                borderWidth: 1,
                backgroundColor: [
            'rgba(255, 99, 132, 0.2)',
            'rgba(255, 159, 64, 0.2)',
            'rgba(255, 205, 86, 0.2)',
            'rgba(75, 192, 192, 0.2)',
            'rgba(54, 162, 235, 0.2)',
            'rgba(153, 102, 255, 0.2)',
            'rgba(201, 203, 207, 0.2)'
            ],
            borderColor: [
            'rgb(255, 99, 132)',
            'rgb(255, 159, 64)',
            'rgb(255, 205, 86)',
            'rgb(75, 192, 192)',
            'rgb(54, 162, 235)',
            'rgb(153, 102, 255)',
            'rgb(201, 203, 207)'
            ],
            }]
            },
            options: {
            scales: {
                y: {
                beginAtZero: true
                }
            }
            }
        });
        // Diagram Laporan Terjual Selesai
    </script>
    <?php
    };
    // Fungsi Halaman Admin Selesai
    ?>

    <!-- footer  Mulai-->
    <footer id="footerHome">
        <div class="containerFoot">
            <ul class="footMenu">
                <li><a href="../"><img src="../gambar/logoWeb.png" alt="MyMouse" width="150px"></a></li>
                <li><a href="../#homePage">beranda</a></li>
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