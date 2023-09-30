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
// require "php/fungsi.php"; //memanggil file fungsi.php
$user = "Tamu";
$role = "Pengunjung";
// Cek Session Mulai
if(isset($_SESSION['user'])) {
    $user = $_SESSION['user'];
    $role = "Pengguna";
} else if(isset($_SESSION['admin'])) {
    $user = $_SESSION['admin'];
    $role = "Admin";
}
// Cek Session Selesai

// Cek id Mulai
if(isset($_GET['id'])) {
    $id = $_GET['id'];
    hapusDataProduk($id);
    header("location: index.php");
}
// Cek id Selesai
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../css/toko.css">
    <link rel="stylesheet" href="../css/navbar.css">
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <link rel="icon" href="../gambar/miniLogo.png">
    <title>MyMouse ~ Toko</title>
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
        <a href="keranjang.php" class="shop" title="keranjang"><img class="shopLogo" src="../gambar/Union.png" alt="" width="30px"><p id="notif" class="notifikasi"></p></a>
        <!-- Profil Mulai -->
        <div class="profil">
                <button onclick="btnTetikus()" id="btnDrop3" class="prof">
                    <?php 
                    // $temp = mysqli_fetch_assoc(ambilAkun($user));
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
                        <li><a href="pesanan.php" class="tip"><img src="../gambar/icon/Shopping_Bag.png" alt="">Pesanan</a></li>
                        ';
                        ?>
                        <li><a href="../akun/keluar.php" class="tip" onclick="return confirm('Apakah anda yakin ingin keluar?')" type="button"><img src="../gambar/icon/Exit.png" alt="">Keluar</a></li>
                    <?php
                    } else if(isset($_SESSION['admin'])) {
                        echo '
                        <li><a href="admin.php" class="tip"><img src="../gambar/icon/Eye.png" alt="">Halaman Admin</a></li>
                        <li><a href="../akun/" class="tip"><img src="../gambar/icon/User.png" alt="">Kelola Akun</a></li>
                        <li><a href="pesanan.php" class="tip"><img src="../gambar/icon/Shopping_Bag.png" alt="">Pesanan</a></li>
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
    <a href="#top" class="keAtas"><img src="../gambar/keatas.png" alt="keatas" width="30px" height="auto"></a>
    
    <!-- Carousel Mulai -->
    <section id="top">
        <div class="slide">
            <img src="../gambar/slide/5.svg" alt="gambar slide 1">
            <img src="../gambar/slide/2.svg" alt="gambar slide 2">
            <img src="../gambar/slide/1.svg" alt="gambar slide 3">
            <img src="../gambar/slide/4.svg" alt="gambar slide 4">
            <img src="../gambar/slide/3.svg" alt="gambar slide 5">
        </div>
        <div class="info-carousel">
            <h1>Our second hands</h1>
            <p>Temukan Mouse impian anda di sini</p>
            <a href="#home">Belanja di MyMouse<img src="../gambar/icon/Kiri.png" alt=""></a>
        </div>
    </section>
    <!-- Carousel selesai -->

    <!-- section content Mulai -->
    <Section id="home">
        <div class="grad"></div>
        <!-- Toko header Mulai -->
        <div class="head">
            <div class="head-atas">
                <h1>TOKO</h1>
                <div class="watermarkIcon">
                    <a href="https://www.facebook.com/mymouseofc/" target="_blank"><img src="../gambar/facebook1.png"
                            alt=""></a>
                    <a href="https://twitter.com/curvast" target="_blank"><img src="../gambar/twiter1.png" alt=""></a>
                    <a href="https://www.instagram.com/mymouseofc/" target="_blank"><img src="../gambar/instagram1.png"
                            alt=""></a>
                </div>
            </div>
            <div class="head-bawah">
                    <div class="garis"></div>
            </div>
        </div>
        <!-- Toko header selesai -->

        <!-- Brand logo mulai -->
        <h1 class="Hbrand">BRAND</h1>
        <div class="container-brand">
            <div class="brand-card">
                <a href="?brandL=logitech"><img src="../gambar/card/1.jpg" alt=""></a>
                <a href="?brandL=Razer"><img src="../gambar/card/2.jpg" alt=""></a>
                <a href="?brandL=SteelSeries"><img src="../gambar/card/3.jpg" alt=""></a>
                <a href="?brandL=Fantech"><img src="../gambar/card/4.jpg" alt=""></a>
                <a href="?brandL=Rexus"><img src="../gambar/card/5.jpg" alt=""></a>
                <a href="?brandL=Hyperx"><img src="../gambar/card/6.jpg" alt=""></a>
                <a href="?brandL=Glorious"><img src="../gambar/card/7.jpg" alt=""></a>
                <a href="?brandL=Corsair"><img src="../gambar/card/8.jpg" alt=""></a>
                <a href="?brandL=Roccat"><img src="../gambar/card/9.jpg" alt=""></a>
                <a href="?brandL=Robot"><img src="../gambar/card/10.jpg" alt=""></a>
                <a href="?brandL=Taffware"><img src="../gambar/card/11.jpg" alt=""></a>
            </div>
        </div>
        <!-- Brand logo Selesai -->

        <!-- Search bar Mulai -->
        <form action="" class="search-bar">
            <input type="search" name="search" id="" placeholder="Cari di MyMouse..">
            <button type="submit" name="sendSearch" title="cari" class="button"> <img src="../gambar/icon/Search.png" alt=""> cari</button>
        </form>
        <!-- Search bar Selesai -->
            
        <!-- Container Konten Utama Mulai -->
        <div class="container-content">

            <!-- Filter Mulai -->
            <form class="container-filter">
                <h1><img src="../gambar/icon/Options_3.png" alt=""> KATEGORI</h1>
                <h3>Brand</h3>
                <select name="brand" id="brand" class="brand">
                    <option value="">none</option>
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
                <h3>Harga</h3>
                <input type="number" name="dariHar" id="" class="dari" min="1" placeholder="Rp. 150.000">
                <p class="to">sampai</p>
                <input type="number" name="sampaiHar" id="" class="sampai" min="1" placeholder="Rp. 300.000">
                <h3>Diskon</h3>
                <div>
                    <input type="checkbox" name="filDiskon" id="50" value="50" class="diskon" name="inp[1][]">
                    <label for="50">50%</label><br>
                    <input type="checkbox" name="filDiskon" id="20" value="20" class="diskon" name="inp[1][]">
                    <label for="20">20%</label><br>
                    <input type="checkbox" name="filDiskon" id="10" value="10" class="diskon" name="inp[1][]">
                    <label for="10">10%</label><br>
                    <input type="checkbox" name="filDiskon" id="5" value="5" class="diskon" name="inp[1][]">
                    <label for="5">5%</label><br>
                </div>
                <h3>Jenis</h3>
                <div>
                    <input type="checkbox" name="filJenis" id="USB" value="USB" class="diskon" name="inp[2][]">
                    <label for="USB">Mouse USB</label><br>
                    <input type="checkbox" name="filJenis" id="Wireless" value="Wireless" class="diskon" name="inp[2][]">
                    <label for="Wireless">Mouse Wireless</label><br>
                    <input type="checkbox" name="filJenis" id="Serial" value="Serial" class="diskon" name="inp[2][]">
                    <label for="Serial">Mouse Serial</label><br>
                    <input type="checkbox" name="filJenis" id="PS2" value="PS2" class="diskon" name="inp[2][]">
                    <label for="PS2">Mouse PS/2</label><br>
                </div>
                
                <button type="submit" name="filKirim">Terapkan</button>
                <h3>ikuti kami</h3>
                <div class="watermarkIcon">
                    <a href="https://www.facebook.com/mymouseofc/" target="_blank"><img src="../gambar/facebook1.png"
                            alt=""></a>
                    <a href="https://twitter.com/curvast" target="_blank"><img src="../gambar/twiter1.png" alt=""></a>
                    <a href="https://www.instagram.com/mymouseofc/" target="_blank"><img src="../gambar/instagram1.png"
                            alt=""></a>
                </div>
            </form>
            <!-- Filter Selesai -->
            
            <!-- Container Card Mulai -->
            <div class="container-card">
                <?php 
                // Isset pencarian dan filter Mulai
                // $hasil = ambilData();
                if(isset($_GET['sendSearch'])) {
                    $cari = $_GET['search'];
                    $hasil = search($cari);
                }
                if(isset($_GET['filKirim'])) {
                    $brand = $_GET['brand'];
                    $dariHar = $_GET['dariHar'];
                    $sampaiHar = $_GET['sampaiHar'];
                    $filDiskon = NULL;
                    $filJenis = NULL;
                    if (!empty($_GET['filDiskon'])) {
                        $filDiskon = $_GET['filDiskon'];
                    }
                    if (!empty($_GET['filJenis'])) {
                        $filJenis = $_GET['filJenis'];
                    }
                    $hasil = filter($brand, $dariHar, $sampaiHar, $filDiskon, $filJenis);
                }
                
                if(isset($_GET['brandL'])){
                    $brand = $_GET['brandL'];
                    $hasil = brand($brand);
                }
                if(isset($_GET['show'])){
                    $hasil = all();
                }
                // $semua = $hasil -> rowCount();
                // Isset Pencarian dan Filter Selesai
                ?>

                <div class="container-hasil">
                    <!-- text pencarian Mulai -->
                    <?php 
                    if(!empty($_GET['search'])){
                        echo ('<p class="pencarian">Hasil pencarian dari "'.$_GET['search'].'"</p>');
                    }else if(!empty($_GET['brand']) && !empty($_GET['sampaiHar']) && !empty($_GET['filDiskon']) && !empty($_GET['filJenis'])) {
                        echo ('<p class="pencarian">Hasil dari "Kategori"</p>');
                    }else if(!empty($_GET['brand'])){
                        echo ('<p class="pencarian">Hasil Kategori dari "Brand '.$_GET['brand'].'"</p>');
                    } else if(!empty($_GET['sampaiHar'])){
                        echo ('<p class="pencarian">Hasil Kategori dari "Harga '.$_GET['dariHar'].' sampai '.$_GET['sampaiHar'].'"</p>');
                    }else if(!empty($_GET['filDiskon'])){
                        echo ('<p class="pencarian">Hasil Kategori dari "Diskon '.$_GET['filDiskon'].'%"</p>');
                    }else if(!empty($_GET['filJenis'])){
                        echo ('<p class="pencarian">Hasil Kategori dari "Jenis '.$_GET['filJenis'].'"</p>');
                    }else if (!empty($_GET['brandL'])){
                        echo ('<p class="pencarian">Hasil dari "Brand '.$_GET['brandL'].'"</p>');
                    }else {
                        echo ('<p class="pencarian">MyMouse</p>');
                    }
                    ?>
                    <!-- text pencarian Selesai -->
                    <p> Menampilkan 1-<? //$semua ?> dari <? //$semua ?> hasil<a href="?show=all">show all</a></p>
                </div>

                <!-- Container Card Mulai -->
                <div class="containerSh">
                    <?php 
                    foreach ($hasil as $data) {
                        $diskon = $data['harga'] - ($data['harga'] * $data['diskon'] / 100);
                        update($data['id_produk'],$diskon);
                        echo ('
                        <button class="btn card card-1" data-target="#modal'.$data['id_produk'].'">
                            <img src="../gambar/brand/'.$data['gambar'].'" alt="gambar brand">
                            <h1 class="disLog">'.$data['diskon'].'%OFF</h1>
                            <div class="wrapper-card">
                                <p>'.$data['nama'].'</p>
                                <div class="info">
                                    <h5>Rp'.number_format($diskon,0,',','.').'</h5>
                                    <h6>Rp'.number_format($data['harga'],0,',','.') .'</h6>
                                </div>
                                <p class="selengkap">lihat selengkapnya</p>
                            </div>
                        </button>
                        ');
                    }; ?>
                </div>
                <!-- Container Card Selesai -->
            </div>
            <!-- container card Selesai -->

        </div>
        <!-- Container Konten Utama Selesai -->

        <!-- modal Mulai -->
        <?php
        // foreach (ambilData() as $data){
            $diskon1 = $data['harga'] - ($data['harga'] * $data['diskon'] / 100);
            $nama = $data['nama'];
            echo ('
            <div class="modal" id="modal'.$data['id_produk'].'">
                <div class="header">
                    <button class="btnc close-modal">&times;</button>
                </div>
                <div class="container-data">
                    <div class="container-pesan">
                        <div class="wrapper-gambar">
                            <img id="gambar-utama'.$data['id_produk'].'" class="main-gambar" src="../gambar/brand/'.$data['gambar'].'" alt="">
                            <div class="gambar-kecil">
                                <img src="../gambar/brand/'.$data['gambar'].'" alt="" onclick ="galery(this,'.$data['id_produk'].')">
                                <img src="../gambar/subbrand/'.$data['gambar2'].'" alt="" onclick ="galery(this,'.$data['id_produk'].')">
                                <img src="../gambar/subbrand/'. $data['gambar3'].'" alt="" onclick ="galery(this,'.$data['id_produk'].')">
                                <img src="../gambar/subbrand/'.$data['gambar4'].'" alt="" onclick ="galery(this,'.$data['id_produk'].')">
                            </div>
                        </div>
                        <div class="wrapper-info">
                            <h2>'.$data['nama'].'</h2>
                            <p>Terjual '.$data['terjual'].'</p>
                            <h1>Rp.'.number_format($diskon1,2,',','.').'</h1>
                            <div class="terdiskon">
                                <p>'.$data['diskon'].'%</p>
                                <p>Rp.'.number_format($data['harga'],0,',','.').'</p>
                            </div>
                            <h3>Atur Jumlah dan Catatan</h3>
                            <form action="../php/tambahData.php">
                                <label for"jumlah" class="label">Kuantitas  </label>
                                <input type="number" name="jumlah" id="jumlah" class="jumlah" min="1" value="1" max="'.$data['stok'].'" required>
                                <label class="side" for="jumlah">stok : '.$data['stok'].' pcs</label>
                                <p class="side">maksimal pembelian '.$data['stok'].' pcs</p>
                                <label for="warna">Warna</label>
                                <select name="warna" id="warna">
                                <option value="Putih">Putih</option>
                                <option value="Hitam">Hitam</option>
                                </select>
                                <div class="cat-info">
                                    <input type="text" name="catatan" id="catatan" class="cat" maxlength="100" required></input><br>
                                    <span>Catatan</span>
                                </div>
                                <button type="submit" name="kirim'.$data['id_produk'].'">+ Keranjang</button>
                                ');
                                if(isset($_SESSION['admin'])) {?>
                                    <a href="?id=<?=$data['id_produk']?>" onclick="return confirm('Apakah anda yakin akan menghapus produk ini?')" type="button" class="del">hapus</a><?php
                                    echo '<a href="ubahProduk.php?id='.$data['id_produk'].'" class="editProduk">ubah</a>';
                                }
                                echo '
                            </form>
                            
                        </div>
                    </div>
                    <div class="container-deskripsi">
                        <h1>Deskripsi Produk</h1>
                        <p>'.nl2br($data['deskripsi']).'</p>
                    </div>
                </div>
            </div>
            ';
        // }; 
        ?>
        <!-- modal Selesai -->

        <!-- overlay -->
        <div id="overlay"></div> 
    </Section>
    <!-- section content End -->

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

    <!-- Script Checkbox Mulai -->
    <script>
        // Memilih semua input dengan tipe check box
        $("input:checkbox").on('click', function() {
        var $box = $(this);
        if ($box.is(":checked")) {
            var group = "input:checkbox[name='" + $box.attr("name") + "']";
            $(group).prop("checked", false);
            $box.prop("checked", true);
        } else {
            $box.prop("checked", false);
        }
        });
    </script>
    <!-- Script CheckBox Selesai -->

    <!-- Link File Javascript Mulai -->
    <script src="../javascript/main.js"></script>
    <script src="../javascript/notifikasi.js"></script>
    <script src="../javascript/dropdown.js" ></script>
    <script src="../javascript/toko.js"></script>
    <!-- Link File Javascript Selesai -->
</body>

</html>