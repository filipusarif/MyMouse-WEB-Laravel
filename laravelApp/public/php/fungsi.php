<?php
require_once __DIR__ . "./koneksi.php";

// Fungsi CRUD Produk Mulai

function ambilData() {
    $koneksi = koneksi();
    $sql ="SELECT * FROM tbproduk";
    $result = $koneksi->query($sql);
    return $result;
}

function hapusDataProduk($id){
    $koneksi = koneksi();
    $sql ="DELETE FROM `tbproduk` WHERE id_produk = $id";
    $result = $koneksi->exec($sql);
    return $result;
}

function tambahProduk($brand,$nama,$harga,$diskon,$jenis,$gambar,$gambar2,$gambar3,$gambar4,$stok,$deskripsi) {
    $koneksi = koneksi();
    $id = NULL;
    $gambar = uploadProduk($_FILES['gambarUtama']['name'],$_FILES['gambarUtama']['tmp_name'],$_FILES['gambarUtama']['size'],$_FILES['gambarUtama']['error'],$id);
    $gambar2 = uploadProduk($_FILES['gambar2']['name'],$_FILES['gambar2']['tmp_name'],$_FILES['gambar2']['size'],$_FILES['gambar2']['error'],$id);
    $gambar3 = uploadProduk($_FILES['gambar3']['name'],$_FILES['gambar3']['tmp_name'],$_FILES['gambar3']['size'],$_FILES['gambar3']['error'],$id);
    $gambar4 = uploadProduk($_FILES['gambar4']['name'],$_FILES['gambar4']['tmp_name'],$_FILES['gambar4']['size'],$_FILES['gambar4']['error'],$id);
    $sql ="INSERT INTO `tbproduk`(`brand`, `nama`, `harga`, `diskon`, `jenis`, `gambar`, `gambar2`, `gambar3`, `gambar4`, `stok`,`deskripsi`) VALUES ('$brand','$nama','$harga','$diskon','$jenis','$gambar','$gambar2','$gambar3','$gambar4','$stok','$deskripsi')";
    $result = $koneksi->query($sql);
    return true;
}

function ambil1Produk($id){
    $koneksi = koneksi1();
    $sql ="SELECT * FROM `tbproduk` WHERE id_produk='$id'";
    $result = $koneksi->query($sql);
    return $result;
}

function updateProduk($id,$nama,$brand,$harga,$diskon,$jenis,$gambarLama,$gambar2Lama,$gambar3Lama,$gambar4Lama,$stok,$deskripsi){
    $koneksi = koneksi();
    $gambar = $gambarLama;
    $gambar2 = $gambar2Lama;
    $gambar3 = $gambar3Lama;
    $gambar4 = $gambar4Lama;

    if($_FILES['gambarUtama1']['error'] != 4) {
        $gambar = uploadProduk($_FILES['gambarUtama1']['name'],$_FILES['gambarUtama1']['tmp_name'],$_FILES['gambarUtama1']['size'],$_FILES['gambarUtama1']['error'],$id);
    }
    if($_FILES['gambar21']['error'] != 4) {
        $gambar2 = uploadProduk($_FILES['gambar21']['name'],$_FILES['gambar21']['tmp_name'],$_FILES['gambar21']['size'],$_FILES['gambar21']['error'],$id);
    }
    if($_FILES['gambar31']['error'] != 4) {
        $gambar3 = uploadProduk($_FILES['gambar31']['name'],$_FILES['gambar31']['tmp_name'],$_FILES['gambar31']['size'],$_FILES['gambar31']['error'],$id);
    }
    if($_FILES['gambar41']['error'] != 4) {
        $gambar4 = uploadProduk($_FILES['gambar41']['name'],$_FILES['gambar41']['tmp_name'],$_FILES['gambar41']['size'],$_FILES['gambar41']['error'],$id);
    }

    if(!$gambar || !$gambar2 || !$gambar3 || !$gambar4) {
        return false;
    }
    $sql ="UPDATE `tbproduk` SET `brand`='$brand',`nama`='$nama',`harga`='$harga',`diskon`='$diskon',
    `jenis`='$jenis',`gambar`='$gambar',`gambar2`='$gambar2',`gambar3`='$gambar3',`gambar4`='$gambar4',
    `stok`='$stok',`deskripsi`='$deskripsi'WHERE id_produk ='$id'";
    $result = $koneksi->query($sql);
    return true;
}

function uploadProduk($namaGambar,$tempGambar,$ukuranGambar,$error,$id) {
    //cek foto
    if( $error === 4 ) {
        return false;
    }

    //cek ekstensi foto
    $ekstensi = ['png','jpg','jpeg'];
    $eksGambar = explode('.',$namaGambar);
    $eksGambar = strtolower(end($eksGambar));
    if (!in_array($eksGambar, $ekstensi)){
        return false;
    }

    //cek ukuran
    if($ukuranGambar > 2000000) {
        return false;
    }

    //upload foto
    $namaBaru = uniqid();
    $namaBaru .= '.';
    $namaBaru .= $eksGambar;

    if($id == NULL) {
        if($namaGambar === $_FILES['gambarUtama']['name']){
            move_uploaded_file($tempGambar, '../gambar/brand/'.$namaBaru);
        }else {
            move_uploaded_file($tempGambar, '../gambar/subbrand/'.$namaBaru);
        }
    }else {
        if($namaGambar === $_FILES['gambarUtama1']['name']){
            move_uploaded_file($tempGambar, '../gambar/brand/'.$namaBaru);
        }else {
            move_uploaded_file($tempGambar, '../gambar/subbrand/'.$namaBaru);
        }
    }
    return $namaBaru;
}

function update($id,$terdiskon) {
    $koneksi = koneksi();
    $sql ="UPDATE `tbproduk` SET `terdiskon`='$terdiskon' WHERE id_produk = $id";
    $result = $koneksi->query($sql);
    return $result;
}
// Fungsi CRUD Produk Selesai

// Fungsi CRUD Keranjang Mulai
function ambilKeranjang($user) {
    $koneksi = koneksi1();
    $sql ="SELECT * FROM tbkeranjang WHERE user = '$user'";
    $result = $koneksi->query($sql);
    return $result;
}

function tambahKer($user,$nama,$harga,$diskon,$gambar,$Tharga,$jumlah,$warna,$catatan) {
    $koneksi = koneksi();
    $sql ="INSERT INTO `tbkeranjang`(`user`, `nama`,`harga`, `Tharga`, `jumlah`, `diskon`, `warna`, `catatan`,`gambar`) VALUES ('$user','$nama','$harga','$Tharga','$jumlah','$diskon','$warna','$catatan','$gambar')";
    $result = $koneksi->query($sql);
    return $result;
}

function hapusData($id){
    $koneksi = koneksi();
    $sql ="DELETE FROM `tbkeranjang` WHERE id_keranjang = $id";
    $result = $koneksi->exec($sql);
    return $result;
}

function data1($id){
    $koneksi = koneksi();
    $sql ="SELECT * FROM tbkeranjang WHERE id_keranjang=$id";
    $result = $koneksi->query($sql);
    return $result;
}

function ubah($id,$warna,$jumlah,$catatan) {
    $koneksi = koneksi();
    $sql = "UPDATE `tbkeranjang` SET `jumlah`='$jumlah',`warna`='$warna',`catatan`='$catatan' WHERE id_keranjang = $id";
    $result = $koneksi->exec($sql);
    return $result;
}

function ambilNama($user,$nama) {
    $koneksi = koneksi1();
    $sql ="SELECT * FROM tbkeranjang WHERE nama='$nama' AND user ='$user'";
    $result = $koneksi->query($sql);
    return $result;
}
// Fungsi CRUD Keranjang Selesai

// Fungsi Pencarian dan Kategori/Filter Mulai
function search($cari) {
    $koneksi = koneksi();
    $sql ="SELECT * FROM tbproduk WHERE nama LIKE '%".$cari."%'";
    $result = $koneksi->query($sql);
    return $result;
}

function all(){
    $koneksi = koneksi();
    $sql = "SELECT * FROM tbproduk";
    $result = $koneksi->query($sql);
    return $result;
}

function brand($brand) {
    $koneksi = koneksi();
    $sql = "SELECT * FROM tbproduk WHERE brand LIKE '%".$brand."%'";
    $result = $koneksi->query($sql);
    return $result;
}

function filter($brand, $dariHar, $sampaiHar, $filDiskon, $filJenis) {
    $koneksi = koneksi();
    $sql = "SELECT * FROM tbproduk WHERE ";
    if ($brand != NULL) {
        $sql .= "brand LIKE '%".$brand."%'";
        if ($sampaiHar != NULL || $filDiskon != NULL || $filJenis != NULL) {
            $sql .= " AND ";
        }
    }
    if ($dariHar != NULL && $sampaiHar != NULL) {
        $sql .= "terdiskon BETWEEN '$dariHar' AND '$sampaiHar'";
        if ($filDiskon != NULL || $filJenis != NULL) {
            $sql .= " AND ";
        }
    }
    if ($filDiskon != NULL) {
        $sql .= "diskon = $filDiskon";
        if($filJenis != NULL) {
            $sql .= " AND ";
        }
    }
    if ($filJenis != NULL) {
        $sql .= "jenis LIKE '%".$filJenis."%'";
    }
    if ($brand == NULL && $sampaiHar == NULL && $dariHar == NULL && $filDiskon == NULL && $filJenis == NULL) {
        $sql = "SELECT * FROM tbproduk";
    }
    $result = $koneksi->query($sql);
    return $result;
}
// Fungsi Pencarian dan Kategori/Filter Mulai

function konek() {
    return $koneksi = koneksi1();
}


function daftar($data) {
    $koneksi = koneksi1();
    $username = strtolower(stripslashes($data['username']));
    $password = mysqli_real_escape_string($koneksi,$data['password']);
    $hp = mysqli_real_escape_string($koneksi,$data['hp']);
    $email = $data['email'];
    $potemail = substr($email,-11);
    $emailAdmin = "mymouse.com";
    $status = "user";
    $profil = "user.jpg";
    //enkripsi password
    // $password = password_hash($password, PASSWORD_BCRYPT);

    //cek username
    $hasil = mysqli_query($koneksi, "SELECT username From tbpengguna WHERE username = '$username'");
    
    if($emailAdmin == $potemail) {
        $status = "admin";
        $profil = "miniLogo.png";
    }
    
    if(mysqli_fetch_assoc($hasil)) {
        echo '<script>
            alert("Username sudah terpakai");
            </script>';
            return false;
        }
        
        
        
        $sql ="INSERT INTO `tbpengguna`(`status`, `username`, `password`, `email`,`hp`,`profil`) VALUES ('$status','$username','$password','$email','$hp','$profil')";
    $result = $koneksi->query($sql);
    return mysqli_affected_rows($koneksi);
}

function ambil($nama) {
    $koneksi = koneksi1();
    // $id = $data['id_tugas'];
    $sql ="SELECT * FROM tbproduk WHERE nama ='$nama'";
    $result = $koneksi->query($sql);
    return $result;
}

function updateStok($nama,$stok,$terjual,$jumlah){
    $koneksi = koneksi();
    $stok -= $jumlah;
    $terjual += $jumlah;
    $sql ="UPDATE `tbproduk` SET `stok`='$stok',`terjual`='$terjual' WHERE nama = '$nama'";
    $result = $koneksi->query($sql);
    // return $result;
}

function hapusKProduk($user, $nama) {
    $koneksi = koneksi();
    $sql ="DELETE FROM `tbkeranjang` WHERE  user = '$user' AND nama = '$nama'";
    $result = $koneksi->exec($sql);
    return $result;
}

function tambahPesan($user,$nama,$harga,$jumlah,$warna,$deskripsi,$alamat,$pos,$hp,$kurir,$bayar,$total,$gambar,$namaKurir,$prov,$hargaAwal) {
    $koneksi = koneksi1();
    $temp = $namaKurir . " Rp" . number_format($kurir,0,',','.');
    $tempAlamat = $prov .", ". $alamat; 
    $sql ="INSERT INTO `tbpesanan`(`user`, `nama`,`harga_awal`, `harga`,`totalHar`, `jumlah`,`warna`, `catatan`,`gambar` ,`alamat`, `pos`, `hp`, `Hkurir`,`Pembayaran`) VALUES ('$user','$nama','$hargaAwal','$harga','$total','$jumlah','$warna','$deskripsi','$gambar','$tempAlamat','$pos','$hp','$temp','$bayar')";
    $result = $koneksi->query($sql);
    return $result;
}

function ambilTanggal($user) {
    $koneksi = koneksi();
    $sql ="SELECT * FROM `tbpesanan` WHERE user = '$user'";
    $result = $koneksi->query($sql);
    $hasil = NULL;
    foreach($result as $data) {
        $hasil = $data['tanggal'];
    } 
    return $hasil;
}

function ambilPesanan($user) {
    $koneksi = koneksi();
    $sql ="SELECT DISTINCT tanggal FROM `tbpesanan` WHERE user = '$user' ORDER BY tanggal ";
    $result = $koneksi->query($sql);
    return $result;
}

function ambilPesanan1($user,$tanggal) {
    $koneksi = koneksi();
    $sql ="SELECT * FROM `tbpesanan` WHERE user = '$user' AND tanggal = '$tanggal'";
    $result = $koneksi->query($sql);
    return $result;
}

function tambahPenjualan($tanggal, $user){
    $koneksi = koneksi1();
    $sql ="SELECT * FROM `tbpesanan` WHERE user = '$user' AND tanggal = '$tanggal'";
    $result = $koneksi->query($sql);
    // $data = $result -> mysqli_fetch_assoc();
    //     $nama = $data['nama'];
    //     $harga = $data['harga'];
    //     $jumlah = $data['jumlah'];
    //     $catatan = $data['catatan'];
    //     $sql2= "INSERT INTO `tbpenjualan`(`user`, `nama`, `harga`,`jumlah`, `catatan`) VALUES ('$user','$nama','$harga','$jumlah','$catatan')";
    //     $koneksi->query($sql2);
    foreach($result as $data){
        $nama = $data['nama'];
        $hargaAwal = $data['harga_awal'];
        $harga = $data['totalHar'];
        $hargaBersih = $data['harga'];
        $jumlah = $data['jumlah'];
        $catatan = $data['catatan'];
        $sql2= "INSERT INTO `tbpenjualan`(`user`, `nama`,`harga_awal`, `harga_bersih`,`harga`,`jumlah`, `catatan`) VALUES ('$user','$nama','$hargaAwal','$hargaBersih','$harga','$jumlah','$catatan')";
        $koneksi->query($sql2);
    }
    // return $result2;
}

function hapusPesanan($id,$user){
    $koneksi = koneksi();
    $sql ="DELETE FROM `tbpesanan` WHERE user = '$user' AND tanggal = '$id'";
    $result = $koneksi->exec($sql);
    return $result;
}



function codeRandom() {
    $panjang = 10;
    $karakter = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz';
    $panjangKarakter = strlen($karakter);
    $randomString = '';
    for ($i = 0; $i < 10 ; $i++) {
        $randomString .= $karakter[rand(0,$panjangKarakter -1)];
    }
    return $randomString;
}

function prov() {
    $koneksi = koneksi();
    $sql ="SELECT * FROM `tbkurir` ORDER BY provinsi";
    $result = $koneksi->query($sql);
    return $result;
}

function ambilKurir($prov, $kurir) {
    $koneksi = koneksi1();
    $sql ="SELECT * FROM `tbkurir` WHERE provinsi = '$prov'";
    $result = $koneksi->query($sql);
    $data = mysqli_fetch_assoc($result);
    return $data[$kurir];
}

function ambilAkun($user) {
    $koneksi = koneksi1();
    $sql ="SELECT * FROM `tbpengguna` WHERE username ='$user'";
    $result = $koneksi->query($sql);
    return $result;
}

function updateAkun($user,$username,$email,$password,$hp,$prov,$pos,$alamat,$gambarLama){
    $koneksi = koneksi();

    if(isset($_SESSION['user'])) {
        $_SESSION['user'] = $username;
    } else if (isset($_SESSION['admin'])) {
        $_SESSION['admin'] = $username;
    }

    if($_FILES['gambar']['error'] == 4) {
        $gambar = $gambarLama;
    }else {
        $gambar = upload();
    }
    if(!$gambar) {
        return false;
    }
    $sql ="UPDATE `tbpengguna` SET `username`='$username',`password`='$password',`email`='$email',`hp`='$hp',`prov_akun`='$prov',`kode_pos`='$pos',`alamat_akun`='$alamat',`profil`='$gambar' WHERE username = '$user'";
    $result = $koneksi->query($sql);
    return true;
}

function upload() {
    $namaGambar = $_FILES['gambar']['name'];
    $tempGambar = $_FILES['gambar']['tmp_name'];
    $ukuranGambar = $_FILES['gambar']['size'];
    $error = $_FILES['gambar']['error'];

    //cek apakah ada foto yang diupload
    if( $error === 4 ) {
        return false;
    }

    //cek ada file tidak
    $ekstensi = ['png','jpg','jpeg'];
    $eksGambar = explode('.',$namaGambar);
    $eksGambar = strtolower(end($eksGambar));
    if (!in_array($eksGambar, $ekstensi)){
        return false;
    }

    //ukuran terlalu besar
    if($ukuranGambar > 2000000) {
        echo '
        <script>
            alert("ukuran gambar terlalu besar");
        </script>
        ';
        return false;
    }

    //upload gambar
    $namaBaru = uniqid();
    $namaBaru .= '.';
    $namaBaru .= $eksGambar;

    move_uploaded_file($tempGambar, '../gambar/pp/'.$namaBaru);
    return $namaBaru;
}

function ambilProvinsi() {
    $koneksi = koneksi();
    $sql ="SELECT * FROM `tbkurir` ORDER BY provinsi";
    $result = $koneksi->query($sql);
    return $result;
}

function hapusAkun($user) {
    $koneksi = koneksi();
    $sql ="DELETE FROM `tbpengguna` WHERE username ='$user'";
    $result = $koneksi->query($sql);
    return $result;
}


function ambilBulan() {
    $koneksi = koneksi();
    $sql ="SELECT MONTHNAME(tanggal) as bulan,
        sum(jumlah) as total FROM tbpenjualan 
        GROUP BY MONTH(tanggal)" ;
    $result = $koneksi->query($sql);
    return $result;
}

function dataPenjualan() {
    $koneksi = koneksi();
    $sql ="SELECT nama as nama_produk,
        sum(jumlah) as total_produk FROM tbpenjualan 
        GROUP BY nama" ;
    $result = $koneksi->query($sql);
    return $result;
}

function ambilLaporan() {
    $koneksi = koneksi();
    $sql ="SELECT * FROM `tbpenjualan`" ;
    $result = $koneksi->query($sql);
    return $result;
}

function ambilPenjualan() {
    $koneksi = koneksi1();
    // $sql ="SELECT  sum(DISTINCT harga_bersih ) as pendapatan,  sum(jumlah) as  terjual  FROM tbpenjualan ORDER BY tanggal" ;
    $sql ="SELECT sum( harga_awal) as pendapatan,  sum(jumlah) as  terjual  FROM tbpenjualan ORDER BY tanggal" ;
    $result = $koneksi->query($sql);
    return $result;
}
function ambilPengguna() {
    $koneksi = koneksi1();
    $sql ="SELECT * FROM tbpengguna";
    $temp = $koneksi->query($sql);
    $result = $temp -> num_rows;
    return $result;
}