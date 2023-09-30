<!-- 
MYMOUSE WEBSITE(MOUSE WEB)
Dibuat Oleh : Filipus Arif Kristiyan
Tujuan Web : Untuk memenuhi Tugas,UTS,UAS Pemrograman Web Lanjut(Semester 2)
Github : github.com/filipusarif
Dibuat : 15 Maret 2023 - 25 April 2023
File : keranjang.php
-->

<?php
// session_start();
// require "../php/fungsi.php" ;
// $user = "Arif";
// $role = "Pengunjung";
// if(isset($_SESSION['user'])) {
//     $user = $_SESSION['user'];
//     $role = "Pengguna";
// } else if (isset($_SESSION['admin'])) {
//     $user = $_SESSION['admin'];
//     $role = "Admin";
// } else {
//     header("location: ../akun/masuk.php");
//     exit;
// }
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
        <a href="/" class="logo">
            <img class="logo" src="../gambar/logoWeb.png" alt="Mymouse" width="180px">
        </a>
        <nav class="">
            <ul class="navigation ">
                <li><a href="/" class="hover">beranda</a></li>
                <li><button id="btnDrop1" class="hover">Tetikus</button>
                    <ul class="dropdown1" id="drop1">
                        <li><a href="/#definitionPage">pengertian</a></li>
                        <li><a href="/#historyPage">sejarah</a></li>
                        <li><a href="/#functionPage">Fungsi</a></li>
                    </ul>
                </li>
                <li><a href="jenis" class="hover">jenis</a></li>
                <li><a href="berita" class="hover">berita</a></li>
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
            <a href="toko" class="shop" title="Toko"><img class="shopLogo" src="/gambar/Union.png" alt="" width="30px">
                <p id="notif" class="notifikasi"></p>
            </a>
            <!-- Profil Mulai -->
            <div class="profil">
                <button onclick="btnTetikus()" id="btnDrop3" class="prof">
                    <img src="../gambar/pp/user.jpg" alt="" title="{{$user}}">
                </button>
                <ul class="dropdown3" id="drop3">
                    <li><img src="../gambar/pp/user.jpg" alt="" class="pp" title="{{ $user }}"></li>
                    <li class="ketStatus">
                        <h1><?= $user ?> </h1>
                        <p>-----------------</p>
                        <p><?= $role ?></p>
                    </li>
                    <!-- <li><a href="../akun/" class="tip"><img src="../gambar/icon/User.png" alt="">Kelola Akun</a></li> -->
                    <li><a href="pesanan" class="tip"><img src="../gambar/icon/Shopping_Bag.png" alt="">Pesanan</a></li>
                    <!-- <li><a href="../akun/keluar.php" class="tip" onclick="return confirm('Apakah anda yakin ingin keluar?')" type="button"><img src="../gambar/icon/Exit.png" alt="">Keluar</a></li> -->
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
            $i = 1;
            $pembayaran = 0;
            // $kurir = 0;
            $data = 19999;
            // $total = 10000;
            $doc = 1000;
            $totalPembayaran = NULL;
            $Subtotal = 0;
            ?>
            @if($baris !=0)
            @foreach($keranjang as $row)
            <tr class="data">
                <td>{{$loop->iteration}}</td>
                <td>
                    <img class="gambar" src="../gambar/brand/{{$row->gambar}}" alt="brand">
                    <p class="nama">{{ $row->nama }}</p>
                </td>
                <td>{{ $row->warna }}</td>
                <td>Rp. <?= number_format($row->harga, 0, ',', '.') ?> </td>
                <td>{{ $row->jumlah }}</td>
                <td>Rp. <?= number_format($row->Tharga, 0, ',', '.') ?></td>
                <td>{{$row->catatan}}</td>
                <td class="flex">
                    <button data-target="#modal{{ $row->id }}"> <img src="../gambar/icon/Edit_Box.png" alt=""> Ubah</button></a>
                    <form action="{{url('keranjang/'.$row->id)}}" method="post" class="out  " onsubmit="return confirm('Apakah anda yakin akan menghapus produk ini?')">
                        @csrf
                        @method('DELETE')
                        <input type="hidden" name="txtid" value="{{$row->id}}">
                        <button type="submit" class="con but">
                            <img src="../gambar/icon/Bin.png" alt=""> Hapus
                        </button>
                    </form>
                </td>
            </tr>
            <?php $Subtotal += $row->Tharga ?>
            @endforeach
            @else
            <div class="container-kosong">
                <p>Belum ada produk yang ditambahkan</p>
            </div>
            @endif
        </table>
        <!-- Table Keranjang Selesai -->

        <!-- modal edit Mulai -->
        @foreach($keranjang as $mod)
        <div class="modal" id="modal{{$mod->id}}">
            <div class="header">
                <button class="btnc close-modal">&times;</button>
            </div>
            <div class="container-modal">
                <form method="post" action="{{url('keranjang/'.$mod->id)}}" class="ubah-modal">
                    @csrf
                    @method('PUT')
                    <div class="namaP">
                        <img src="../gambar/brand/{{ $mod->gambar }}" alt="">
                        <p>{{$mod->nama}}</p>
                    </div>
                    <input type="hidden" name="txtid" value='{{$mod->id}}'>
                    <input type="hidden" name="txtnama" value="{{$mod->nama}}">
                    <input type="hidden" name="txtgambar" value="{{$mod->gambar}}">
                    <input type="hidden" name="txttharga" value="{{$mod->Tharga}}">
                    <input type="hidden" name="txtharga" value="{{$mod->harga}}">
                    <input type="hidden" name="txtdiskon" value="{{$mod->diskon}}">
                    <input type="hidden" name="txtuser" value="{{ $user }}">
                    <div class="flexC">
                        <label for="warna">Warna</label>
                        <select name="txtwarna" id="txtwarna" class="selc">
                            <option value="{{ $mod->warna }}">{{ $mod->warna }}</option>
                            <?php
                            if ($mod->warna == "Putih") {
                                echo '<option value="Hitam">Hitam</option>';
                            } else {
                                echo '<option value="Putih">Putih</option>';
                            }
                            ?>
                        </select>
                    </div>
                    <div class="flexC">
                        <label for="txtjumlah">Kuantitas</label>
                        <input type="number" name="txtjumlah" id="" value="{{ $mod->jumlah }}">
                    </div>
                    <div class="flexC">
                        <label for="txtcatatan">Catatan</label>
                        <input type="text" name="txtcatatan" id="" value="{{ $mod->catatan }}">
                    </div>
                    <button type="submit" name="ubah{{ $mod->id }}" onclick="">Ubah</button>
                </form>
            </div>
        </div>
        @endforeach
        <!-- Modal edit Selesai -->

        <!-- container Info Pembayaran Mulai -->
        <div class="container-info">
            <h1>Pembayaran</h1>
            <!-- form Pembayaran Mulai -->
            <?php
            $alfa = substr(str_shuffle(str_repeat("0123456789abcdefghijklmnopqrstuvwxyz", 8)), 0, 8);;
            $indo = substr(str_shuffle(str_repeat("0123456789abcdefghijklmnopqrstuvwxyz", 8)), 0, 8);
            $dana = substr(str_shuffle(str_repeat("0123456789abcdefghijklmnopqrstuvwxyz", 8)), 0, 8);
            $provIn = '---------- pilih ----------';
            $alamatIn = '';
            $posIn = '';
            $hpIn = '';
            $kurirIn = "---------- pilih ----------";
            $bayar = "";
            $total = $Subtotal + $ongkir;
            ?>
            <form action="{{url('pesanan')}}" method="post" class="ketPesan">
                @csrf
                <!-- container label dan input Mulai -->
                <div class="container-dis">
                    <div class="display">
                        <div class="label">
                            <label for="provinsi">Masukkan Provinsi anda</label>
                            <label for="alamat">Alamat</label>
                            <label for="pos">Kode POS</label>
                        </div>
                        <div class="input">
                            <select name="txtprovinsi" id="provinsi">
                                <option value="{{old('txtprovinsi')}}"> {{old('txtprovinsi')}} </option>
                                @foreach($kurir as $prov)
                                <option value="{{$prov->provinsi}}"> {{ $prov->provinsi }} </option>
                                @endforeach
                            </select>
                            <input type="text" name="txtalamat" id="txtalamat" placeholder="Semarang,Jl nakula, no 12..." required value="{{old('txtalamat')}}">
                            <input type="text" name="txtpos" id="txtpos" required value="{{old('txtpos')}}">
                            <input type="hidden" name="txtsubtotal" value="{{$Subtotal}}">
                            <input type="hidden" name="txttotal" value="{{$total}}">
                            <input type="hidden" name="txtuser" value="{{$user}}">
                        </div>
                    </div>
                    <div class="display">
                        <div class="label">
                            <label for="hp">Masukkan no HP</label>
                            <label for="bayar">Metode Pembayaran</label>
                            <label for="kurir">Pilih kurir</label>
                        </div>
                        <div class="input">
                            <input type="number" name="txthp" id="txthp" required value="{{ old('txthp') }}">
                            <select name="txtbayar" id="txtbayar">
                                <option value="{{old('txtbayar')}}">{{old('txtbayar')}}</option>
                                <option value="COD">COD</option>
                                <option value="Dana(<?= $dana ?>)">Dana (<?= $dana ?>)</option>
                                <option value="Alfamart(<?= $alfa ?>)">Alfamart (<?= $alfa ?>)</option>
                                <option value="Indomart(<?= $indo ?>)">Indomart (<?= $indo ?>)</option>
                                <option value="Transfer(1443892467429)">Transfer (1443892467429)</option>
                            </select>
                            <select name="txtkurir" id="kurir">
                                <option value="{{ old('txtkurir') }}">{{ old('txtkurir') }}</option>
                                <option value="JNT Expres">JNT Expres</option>
                                <option value="POS Indonesia">POS Indonesia</option>
                                <option value="JNE">JNE</option>
                                <option value="SiCepat">SiCepat</option>
                            </select>
                        </div>
                    </div>
                </div>
                <button type="submit" name="terapkan" class="terapkan">terapkan</button>
                <!-- Container Label dan input Selesai -->

                <!-- Container Total Pembayaran Mulai -->
                <div class="total">
                    <p>Total Pembayaran</p>
                    @if($baris != 0)
                    <div class="bayarTotal">
                        <div class="kanan">
                            <h1>Rp. <?= number_format($Subtotal, 0, ',', '.') ?> </h1>
                            <h1>Rp. <?= number_format($ongkir, 0, ',', '.') ?></h1>
                            <p>----------------------- +</p>
                            <h1>Rp. <?= number_format($total, 0, ',', '.') ?></h1>
                        </div>
                        <div class="kiri">
                            <p>Subtotal</p>
                            <p>ongkir</p>
                            <p>Total</p>
                        </div>
                    </div>
                    @else
                    <div class="bayar">
                        <p>Belum ada Pembelian</p>
                    </div>
                    @endif

                    <?php
                    // cek ada pembayaran atau tidak
                    // if ($pembayaran == 0) {
                    //     echo ('
                    //     <div class="bayar">
                    //         <p>Belum ada Pembelian</p>
                    //     </div>
                    //     ');
                    // } else {
                    //     echo ('
                    //         <div class="bayarTotal">
                    //             <div class="kanan">
                    //                 <h1>' . number_format($pembayaran, 0, ',', '.') . '</h1>
                    //                 <h1>' . number_format($ongkir, 0, ",", ".") . '</h1>
                    //                 <p>----------------------- +</p>');
                    //     $hasilPem = $ongkir + $pembayaran;
                    //     $totalPembayaran = $hasilPem;
                    //     echo ('     <h1>' . number_format($hasilPem, 0, ',', '.') . '</h1>
                    //             </div>
                    //             <div class="kiri">
                    //                 <p>Subtotal</p>
                    //                 <p>ongkir</p>
                    //                 <p>Total</p>
                    //             </div>
                    //         </div>
                    //     ');
                    // } 
                    ?>
                </div>
                <!-- Container Total Pembayaran Selesai -->

                <button name="pesan" class="pesan" type="submit">Pesan</button>
            </form>
            <!-- Form Pembayaran Selesai -->

            <?php
            // isset button pesan Mulai
            if (isset($_POST['pesan'])) {
                // Pengulangan mengirim semua produk
                foreach (ambilKeranjang($user) as $data) {
                    // pengulangan update stok barang
                    foreach (ambil($data) as $res) {
                        $prov = $_POST['provinsi'];
                        $alamat = $_POST['alamat'];
                        $pos = $_POST['pos'];
                        $hp = $_POST['hp'];
                        $kurir = $_POST['kurir'];
                        $bayar = $_POST['bayar'];
                        $ongkir = ambilKurir($prov, $kurir);
                        $hasil = $ongkir + $pembayaran;
                        updateStok($data, $res['stok'], $res['terjual'], $data['jumlah']);
                        hapusKProduk($user, $data);
                        tambahPesan($user, $data, $hasilPem, $data['jumlah'], $data['warna'], $data['catatan'], $alamat, $pos, $hp, $ongkir, $bayar, $hasil, $data, $kurir, $prov, $data['Tharga']);
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
            <a href="https://www.facebook.com/mymouseofc/" target="_blank"><img src="../gambar/sosmed/facebook.png" alt="fb"></a>
            <a href="https://twitter.com/curvast" target="_blank"><img src="../gambar/sosmed/twitter.png" alt="twr"></a>
            <a href="https://www.instagram.com/mymouseofc/" target="_blank"><img src="../gambar/sosmed/instagram.png" alt="ig"></a>
            <a href="https://github.com/filipusarif" target="_blank"><img src="../gambar/sosmed/github.png" alt="gt"></a>
            <a href="https://discord.gg/TRsCsN86mB" target="_blank"><img src="../gambar/sosmed/discord.png" alt="dc"></a>
            <a href="https://www.linkedin.com/in/filipus-arif-kristiyan/" target="_blank"><img src="../gambar/sosmed/linkedin.png" alt="li"></a>
        </div>
    </footer>
    <!-- Footer Selesai -->

    <!-- Link File Javascript Mulai -->
    <script src="../javascript/dropdown.js"></script>
    <script src="../javascript/notifikasi.js"></script>
    <script src="../javascript/toko.js"></script>
    <script src="../javascript/main.js"></script>
    <!-- Link File Javascript Selesai -->
</body>

</html>