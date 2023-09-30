<header class="container">
    <a href="/" class="logo">
        <img class="logo" src="gambar/logoWeb.png" alt="Mymouse" width="180px">
    </a>
    <nav class="">
        <ul class="navigation ">
            <li><a href="/" class="{{ (request()->segment('1')==''|| request()->segment('1')== '/' )? 'aktif':'' }} hover">beranda</a></li>
            <li><button id="btnDrop1" class="hover">Tetikus</button>
                <ul class="dropdown1" id="drop1">
                    <li><a href="/#definitionPage">pengertian</a></li>
                    <li><a href="/#historyPage">sejarah</a></li>
                    <li><a href="/#functionPage">Fungsi</a></li>
                </ul>
            </li>
            <li><a href="jenis" class="hover {{ (request()->segment('1')== 'jenis' )? 'aktif':'' }}">jenis</a></li>
            <li><a href="berita" class="hover  {{ (request()->segment('1')== 'berita' )? 'aktif':'' }}">berita</a></li>
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
            <li class="toko"><a href="/toko">toko</a></li>
        </ul>
    </nav>
    <div class="container-profile">
        <a href="toko" class="shop"><img class="shopLogo" src="gambar/Union.png" alt="" width="30px">
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