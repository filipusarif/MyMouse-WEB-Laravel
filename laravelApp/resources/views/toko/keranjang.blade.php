<!-- 
MYMOUSE WEBSITE(MOUSE WEB)
Dibuat Oleh : Filipus Arif Kristiyan
Tujuan Web : Untuk memenuhi Tugas,UTS,UAS Pemrograman Web Lanjut(Semester 2)
Github : github.com/filipusarif
Dibuat : 15 Maret 2023 - 25 April 2023
File : keranjang.php
-->

<?php 
session_start();
require "../php/fungsi.php" ;
$user = "Tamu";
$role = "Pengunjung";
if(isset($_SESSION['user'])) {
    $user = $_SESSION['user'];
    $role = "Pengguna";
} else if (isset($_SESSION['admin'])) {
    $user = $_SESSION['admin'];
    $role = "Admin";
} else {
    header("location: ../akun/masuk.php");
    exit;
}

// menghapus Keranjang Mulai
if(isset($_GET['id'])){
    $id = $_GET['id'];
    hapusData($id);
    header("location: keranjang.php");
}
// menghapus Keranjang Selesai
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/keranjang.css">
    <link rel="stylesheet" href="../css/navbar.css">
    <link rel="icon" href="../gambar/miniLogo.png">
    <title>MyMouse ~ Keranjang</title>
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
    <a href="#main" class="keAtas"><img src="../gambar/keatas.png" alt="keatas" width="30px" height="auto"></a>

    <!-- Section Utama Mulai -->
    <section id="main">
        <!-- Tabel Keterangan Mulai -->
        <table class="tabel1">
            <tr class="ket">
                <th>no</th>
                <th>produk</th>
                <th>warna</th>
                <th>harga satuan</th>
                <th>kuantitas</th>
                <th>total harga</th>
                <th>catatan</th>
                <th>aksi</th>
            </tr>
        </table>
        <!-- Tabel Keterangan Selesai -->

        <!-- Table Keranjang Mulai -->
        <table class="tabel2">
            <?php 
            $i=1;
            $pembayaran=0;
            $kurir=0;
            $totalPembayaran = NULL;
            // Cek apakah ada produk di tabel tbkeranjang pada database
            if(ambilKeranjang($user)-> num_rows == 0) {
                echo ('
                <div class="container-kosong">
                    <p>Belum ada produk yang ditambahkan</p>
                </div>
                ');
            } else {
                foreach(ambilKeranjang($user) as $data) { 
                    $total = $data['jumlah'] * $data['harga'];
                    $pembayaran += $total;
                    echo ('
                    <tr class="data">
                        <td>'.$i.'</td>
                        <td>
                            <img class="gambar" src="../gambar/brand/'. $data['gambar'].'" alt="brand">
                            <p class="nama">'.$data['nama'].'</p>
                        </td>
                        <td>'.$data['warna'].'</td>
                        <td>Rp. '.number_format($data['harga'],0,',','.').'</td>
                        <td>'. $data['jumlah'].'</td>
                        <td>Rp.  '. number_format($total,0,',','.').'</td>
                        <td> '. $data['catatan'].'</td>
                        <td class="flex">
                            <button data-target="#modal'. $data['id_keranjang'].'" > <img src="../gambar/icon/Edit_Box.png" alt=""> Ubah</button></a>'); ?>
                            <a href="?id=<?=$data['id_keranjang']?>" onclick="return confirm('Apakah anda yakin akan menghapus produk ini?')" type="button"
                            class="btn btn-danger"><img src="../gambar/icon/Bin.png" alt=""> Hapus</a> <?php echo ('
                        </td>
                    </tr>
                    ');
                    $i++;
                };
            };
            ?>
        </table>
        <!-- Table Keranjang Selesai -->

        <!-- modal edit Mulai -->
        <?php 
        foreach(ambilKeranjang($user) as $data) {
            // ambil data yang akan diubah
            $doc = data1($data['id_keranjang'])->fetch();
            echo ('
            <div class="modal" id="modal'.$data['id_keranjang'].'">
                <div class="header">
                    <button class="btnc close-modal">&times;</button>
                </div>
                <div class="container-modal">
                    <form action="../php/ubah.php" class="ubah-modal">
                        <div class="namaP">
                            <img src="../gambar/brand/'.$doc['gambar'].'" alt="">
                            <p>'.$doc['nama'].'</p>
                        </div>
                        <div class="flexC">
                            <label for="warna">Warna</label>
                            <select name="warna" id="warna" class="selc">
                                <option value="'.$doc['warna'].'">'. $doc['warna'].'</option>
                                ');
                                if($doc['warna']== "Putih") {
                                        echo '<option value="Hitam">Hitam</option>';
                                    } else {
                                        echo '<option value="Putih">Putih</option>';
                                    }
                            echo ('
                            </select>
                        </div>
                        <div class="flexC">
                            <label for="jumlah">Kuantitas</label>
                            <input type="number" name="jumlah" id="" value="'. $doc['jumlah'].'">
                        </div>
                        <div class="flexC">
                            <label for="catatan">Catatan</label>
                            <input type="text" name="catatan" id="" value="'. $doc['catatan'] .'">
                        </div>
                        <button type="submit" name="ubah'.$data['id_keranjang'].'" onclick="">Ubah</button>
                    </form>
                </div>
            </div>
            ');
        }; ?>
        <!-- Modal edit Selesai -->

        <!-- container Info Pembayaran Mulai -->
        <div class="container-info">
            <h1>Pembayaran</h1>

            <!-- form Pembayaran Mulai -->
            <form action="" method="post" class="ketPesan">
                <?php 
                $alfa = codeRandom();
                $indo = codeRandom();
                $dana = codeRandom();
                $akun = mysqli_fetch_assoc(ambilAkun($user));
                $prov = $akun['prov_akun'];
                $alamat = $akun['alamat_akun'];
                $pos = $akun['kode_pos'];
                $hp = $akun['hp'];
                $kurir = "";
                $bayar = "";
                $ongkir = 0;
                // cek isset button terapkan Mulai
                if(isset($_POST['terapkan'])){
                    $prov = $_POST['provinsi'];
                    $alamat = $_POST['alamat'];
                    $pos = $_POST['pos'];
                    $hp = $_POST['hp'];
                    $kurir = $_POST['kurir'];
                    $bayar = $_POST['bayar'];
                    $ongkir = ambilKurir($prov,$kurir);
                    $hasil = $ongkir + $pembayaran;
                } 
                // Cek isset button terapkan selesai?>

                <!-- container label dan input Mulai -->
                <div class="container-dis">
                    <div class="display">
                        <div class="label">
                            <label for="provinsi">Masukkan Provinsi anda</label>
                            <label for="alamat">Alamat</label>
                            <label for="pos">Kode POS</label>
                        </div>
                        <div class="input"> 
                            <select name="provinsi" id="provinsi">
                                <option value="<?= $prov ?>"><?= $prov ?></option>
                                <?php 
                                foreach (prov() as $data) {
                                    echo ('
                                        <option value="'.$data['provinsi'].'">'.$data['provinsi'].'</option>
                                        ');
                                }?>
                            </select>
                            <input type="text" name="alamat" id="alamat" placeholder="Semarang,Jl nakula, no 12..." required value="<?= $alamat ?>">
                            <input type="text" name="pos" id="pos" required value="<?= $pos ?>">
                        </div>
                    </div>
                    <div class="display">
                        <div class="label">
                            <label for="hp">Masukkan no HP</label>
                            <label for="bayar">Metode Pembayaran</label>
                            <label for="kurir">Pilih kurir</label>
                        </div>
                        <div class="input">
                            <input type="number" name="hp" id="hp" required value="<?= $hp ?>">
                            <select name="bayar" id="bayar">
                                <option value="<?= $bayar ?>"><?= $bayar ?></option>
                                <option value="COD">COD</option>
                                <option value="Dana(<?= $dana ?>)">Dana (<?= $dana ?>)</option>
                                <option value="Alfamart(<?= $alfa ?>)">Alfamart (<?= $alfa ?>)</option>
                                <option value="Indomart(<?= $indo ?>)">Indomart (<?= $indo ?>)</option>
                                <option value="Transfer(1443892467429)">Transfer (1443892467429)</option>
                            </select>
                            <select name="kurir" id="kurir">
                                <option value="<?= $kurir ?>"><?= $kurir ?></option>
                                <option value="JNT Expres">JNT Expres</option>
                                <option value="POS Indonesia">POS Indonesia</option>
                                <option value="JNE">JNE</option>
                                <option value="SiCepat">SiCepat</option>
                            </select>
                        </div>
                    </div>
                </div>
                <!-- Container Label dan input Selesai -->

                <button type="submit" name="terapkan" class="terapkan">terapkan</button>

                <!-- Container Total Pembayaran Mulai -->
                <div class="total">
                    <p>Total Pembayaran</p>
                    <?php 
                    // cek ada pembayaran atau tidak
                    if($pembayaran == 0) {
                        echo ('
                        <div class="bayar">
                            <p>Belum ada Pembelian</p>
                        </div>
                        ');
                    } else {
                        echo ('
                            <div class="bayarTotal">
                                <div class="kanan">
                                    <h1>'. number_format($pembayaran,0,',','.').'</h1>
                                    <h1>'. number_format($ongkir,0,",",".") .'</h1>
                                    <p>----------------------- +</p>');
                                    $hasilPem = $ongkir + $pembayaran; 
                                    $totalPembayaran = $hasilPem;
                        echo ('     <h1>'.number_format($hasilPem,0,',','.').'</h1>
                                </div>
                                <div class="kiri">
                                    <p>Subtotal</p>
                                    <p>ongkir</p>
                                    <p>Total</p>
                                </div>
                            </div>
                        '); 
                    } ?>
                </div>
                <!-- Container Total Pembayaran Selesai -->

                <button name="pesan" class="pesan">Pesan</button>
            </form>
            <!-- Form Pembayaran Selesai -->

            <?php 
            // isset button pesan Mulai
            if(isset($_POST['pesan'])) {
                // Pengulangan mengirim semua produk
                foreach(ambilKeranjang($user) as $data) {
                    // pengulangan update stok barang
                    foreach(ambil($data['nama']) as $res) {
                        $prov = $_POST['provinsi'];
                        $alamat = $_POST['alamat'];
                        $pos = $_POST['pos'];
                        $hp = $_POST['hp'];
                        $kurir = $_POST['kurir'];
                        $bayar = $_POST['bayar'];
                        $ongkir = ambilKurir($prov,$kurir);
                        $hasil = $ongkir + $pembayaran;
                        updateStok($data['nama'],$res['stok'],$res['terjual'],$data['jumlah']);
                        hapusKProduk($user,$data['nama']);
                        tambahPesan($user,$data['nama'],$hasilPem,$data['jumlah'],$data['warna'],$data['catatan'],$alamat,$pos,$hp,$ongkir,$bayar,$hasil,$data['gambar'],$kurir,$prov,$data['Tharga']);
                        // header("location: pesanan.php");
                        echo ('
                            <script language ="javascript">
                                window.location.href="pesanan.php";
                            </script>
                            ');
                    }
                }
            }
            // isset Button pesan Selesai
            ?>
        </div>
        <!-- Container info pembayaran selesai -->

    </section>
    <!-- Section Utama Selesai -->

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
