-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 08, 2023 at 02:48 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mymouse2`
--

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `keranjangs`
--

CREATE TABLE `keranjangs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `harga` int(11) NOT NULL,
  `Tharga` int(11) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `diskon` int(11) NOT NULL,
  `warna` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `catatan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gambar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal` datetime NOT NULL DEFAULT current_timestamp(),
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `keranjangs`
--

INSERT INTO `keranjangs` (`id`, `user`, `nama`, `harga`, `Tharga`, `jumlah`, `diskon`, `warna`, `catatan`, `gambar`, `tanggal`, `created_at`, `updated_at`) VALUES
(17, 'Arif', 'Logitech G402 Hyperion Fury Gaming Mouse - Black', 332000, 332000, 1, 20, 'Putih', 'dipacking rapi', 'brand (3).jpg', '2023-07-05 09:37:42', '2023-07-04 19:37:42', '2023-07-04 19:38:04'),
(18, 'Arif', 'Logitech M350 Wireless Silent Mouse Logitech', 278100, 278100, 1, 10, 'Putih', 'ini tes pangjang', 'brand (1).jpg', '2023-07-05 09:46:32', '2023-07-04 19:46:32', '2023-07-04 19:46:32');

-- --------------------------------------------------------

--
-- Table structure for table `kurirs`
--

CREATE TABLE `kurirs` (
  `id_kurir` int(11) NOT NULL,
  `provinsi` varchar(50) NOT NULL,
  `JNT_Expres` int(11) NOT NULL,
  `POS_Indonesia` int(11) NOT NULL,
  `JNE` int(11) NOT NULL,
  `SiCepat` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kurirs`
--

INSERT INTO `kurirs` (`id_kurir`, `provinsi`, `JNT_Expres`, `POS_Indonesia`, `JNE`, `SiCepat`, `created_at`, `updated_at`) VALUES
(1, 'Aceh', 67000, 52000, 66000, 84000, NULL, NULL),
(2, 'Sumatra Utara', 47000, 37000, 43000, 50000, NULL, NULL),
(3, 'Sumatra Selatan', 37000, 30000, 35000, 40000, NULL, NULL),
(4, 'Sumatra Barat', 41000, 37000, 40000, 43000, NULL, NULL),
(5, 'Bengkulu', 40000, 34000, 41000, 43000, NULL, NULL),
(6, 'Riau', 39000, 35000, 40000, 43000, NULL, NULL),
(7, 'Kepulauan Riau', 36000, 32000, 34000, 38000, NULL, NULL),
(8, 'Jambi', 32000, 29000, 33000, 35000, NULL, NULL),
(9, 'Lampung', 34000, 30000, 32000, 35000, NULL, NULL),
(10, 'Bangka Belitung', 32000, 30000, 32000, 34000, NULL, NULL),
(11, 'Banten', 25000, 24000, 27000, 30000, NULL, NULL),
(12, 'DKI Jakarta', 24000, 20000, 21000, 26000, NULL, NULL),
(13, 'Jawa Barat', 19000, 16000, 17000, 19000, NULL, NULL),
(14, 'Jawa Tengah', 11000, 7000, 9000, 12000, NULL, NULL),
(15, 'DI Yogyakarta', 16000, 13000, 14000, 15000, NULL, NULL),
(16, 'Jawa Timur', 18000, 15000, 19000, 19000, NULL, NULL),
(17, 'Kalimantan Timur', 52000, 49000, 53000, 54000, NULL, NULL),
(18, 'Kalimantan Barat', 51000, 50000, 53000, 55000, NULL, NULL),
(19, 'Kalimantan Tengah', 54000, 50000, 55000, 57000, NULL, NULL),
(20, 'Kalimantan Selatan', 52000, 48000, 51000, 54000, NULL, NULL),
(21, 'Kalimantan Utara', 57000, 50000, 54000, 60000, NULL, NULL),
(22, 'Bali', 30000, 28000, 29000, 32000, NULL, NULL),
(23, 'Nusa Tenggara Timur', 50000, 49000, 51000, 52000, NULL, NULL),
(24, 'Nusa Tenggara Barat', 39000, 38000, 40000, 41000, NULL, NULL),
(25, 'Gorontalo', 69000, 65000, 70000, 71000, NULL, NULL),
(26, 'Sulawesi Barat', 68000, 65000, 69000, 70000, NULL, NULL),
(27, 'Sulawesi Tengah', 68000, 67000, 69000, 71000, NULL, NULL),
(28, 'Sulawesi Utara', 71000, 69000, 72000, 71000, NULL, NULL),
(29, 'Sulawesi Tenggara', 70000, 70000, 71000, 720000, NULL, NULL),
(30, 'Sulawesi Selatan', 71000, 70000, 74000, 78000, NULL, NULL),
(31, 'Maluku', 72000, 70000, 76000, 77000, NULL, NULL),
(32, 'Papua Barat', 154000, 144000, 149000, 160000, NULL, NULL),
(33, 'Papua', 160000, 158000, 178000, 189000, NULL, NULL),
(34, 'Papua Selatan', 210000, 190000, 213000, 220000, NULL, NULL),
(35, 'Papua Tengah', 230000, 220000, 234000, 240000, NULL, NULL),
(36, 'Papua Pegunungan', 258000, 247000, 275000, 289000, NULL, NULL),
(37, 'Papua Barat Daya', 210000, 197000, 214000, 225000, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `kurirsori`
--

CREATE TABLE `kurirsori` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_07_01_080429_create_keranjangs_table', 1),
(6, '2023_07_01_132136_create_produks_table', 1),
(7, '2023_07_02_124240_create_kurirs_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pesanans`
--

CREATE TABLE `pesanans` (
  `id_pesan` int(11) NOT NULL,
  `user` varchar(50) NOT NULL,
  `nama` text NOT NULL,
  `harga_awal` int(11) NOT NULL,
  `harga` int(11) NOT NULL,
  `totalHar` int(11) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `warna` varchar(10) NOT NULL,
  `catatan` text NOT NULL,
  `gambar` varchar(100) NOT NULL,
  `alamat` text NOT NULL,
  `pos` varchar(10) NOT NULL,
  `hp` varchar(15) NOT NULL,
  `Hkurir` varchar(50) NOT NULL,
  `Pembayaran` varchar(100) NOT NULL,
  `tanggal` datetime NOT NULL DEFAULT current_timestamp(),
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `produks`
--

CREATE TABLE `produks` (
  `id_produk` int(11) NOT NULL,
  `brand` varchar(15) NOT NULL,
  `nama` varchar(500) NOT NULL,
  `harga` int(15) NOT NULL,
  `diskon` int(4) NOT NULL,
  `terdiskon` int(11) NOT NULL,
  `jenis` varchar(10) NOT NULL,
  `gambar` varchar(20) NOT NULL,
  `gambar2` varchar(20) NOT NULL,
  `gambar3` varchar(20) NOT NULL,
  `gambar4` varchar(20) NOT NULL,
  `stok` int(11) NOT NULL,
  `terjual` int(11) NOT NULL,
  `deskripsi` text NOT NULL,
  `tanggal` datetime NOT NULL DEFAULT current_timestamp(),
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `produks`
--

INSERT INTO `produks` (`id_produk`, `brand`, `nama`, `harga`, `diskon`, `terdiskon`, `jenis`, `gambar`, `gambar2`, `gambar3`, `gambar4`, `stok`, `terjual`, `deskripsi`, `tanggal`, `created_at`, `updated_at`) VALUES
(1, 'logitech', 'Logitech M350 Wireless Silent Mouse Logitech', 309000, 10, 278100, 'Wireless', 'brand (1).jpg', 'brand1 (1).jpg', 'brand1 (2).jpg', 'brand1 (3).jpg', 47, 601, 'Logitech Pebble Wireless Bluetooth Mouse M350\n(UNTUK FREE POUCH DARI LOGITECH SUDAH TIDAK DIBERIKAN)\n\nSENDIRI RUANG ANDA\nBuat ruang apa pun menjadi minimalis, modern, dan hening dengan Logitech Pebble - mouse portabel yang sesuai dengan gaya hidup Anda yang dikuratori dan kemana pun Anda pergi\n\nBentuk organik yang halus pas di saku Anda, tas, dan terasa hebat di tangan Anda\n\nDengan mengklik diam dan menggulir, Anda dapat masuk tanpa mengganggu siapa pun di sekitar Anda\n\n\nMODERN, SLIM, DAN INDAH\nLogitech Pebble M350 desain modern cocok dengan gaya hidup Anda yang dikuratori, aksen pengaturan meja Anda, dan cukup ramping untuk dilemparkan ke dalam tas Anda dan dibawa ke kedai kopi\n\n\nBENTUK ORGANIK, COCOK ALAMI\nLogitech Pebble M350 telah dirancang untuk menjadi lebih ramping, sementara masih pas secara alami di telapak tangan Anda\n\nSisi bundar yang lembut sangat nyaman, Anda tidak akan pernah mau melepaskannya\n\n\nWARNA YANG TEPAT UNTUK ANDA\nPilih Logitech Pebble M350 dalam warna putih pudar, grafit, atau merah muda agar sesuai dengan aksesori Anda\n\n', '2023-03-24 11:22:48', NULL, NULL),
(2, 'robot', 'Mouse Wireless ROBOT M205 2.4G 1600DPI', 75000, 20, 60000, 'Wireless', 'brand (2).jpg', 'brand2 (1).jpg', 'brand2 (2).jpg', 'brand2 (2).jpg', 124, 262, 'Keunggulan:\r\n1\r\n\r\nDesain ergonomis, kecil dan portable, 1600DPI\r\n2\r\n\r\nSensor optik 1600 DPI\r\n3\r\n\r\nTetap efektif hingga jangkauan 10 meter\r\n4\r\n\r\nTerdapat power switch\r\n5\r\n\r\nPlug & play pasang dan pakai\r\n\r\n\r\nSpesifikasi:\r\nNumber of keys : 4\r\nDPI : 800-1200-1600\r\nReport Rate :125Hz\r\nSwitch rating : Over 2 million clicks\r\nSize : 99\r\n8*60\r\n5*32mm\r\nWeight : 45\r\n5g (Without battery）\r\nBattery Specifications :1*AA\r\n\r\n\r\nKelengkapan\r\n1 x ROBOT ROBOT M205 Wireless Mouse 800-1200-1600 DPI Black', '2023-03-24 11:27:00', NULL, NULL),
(3, 'logitech', 'Logitech G402 Hyperion Fury Gaming Mouse - Black', 415000, 20, 332000, 'USB', 'brand (3).jpg', 'brand3 (1).jpg', 'brand3 (2).jpg', 'brand3 (3).jpg', 39, 759, 'Mouse gaming G402 hadir dengan bentuk yang diperbarui untuk meningkatkan fungsi dan kenyamanan Anda para gamers sejati saat bermain\r\n\r\nTak ketinggalan sensor optik yang memungkinkan kecepatan penelusuran melampaui 500 IPS\r\n\r\nAnda pun akan mendapatkan mouse dengan 8 tombol yang dapat diprogram, 4 pengaturan DPI, dan report rate 1 milidetik\r\n\r\nRasakan kenyamanan bermain selama berjam-jam dengan kontrol mouse yang luar biasa\r\n\r\n\r\nFitur\r\nDesain Nyaman tuk Main Berjam-jam\r\nPembaruan pada bentuk G400s klasik dilakukan untuk meningkatkan fungsi dan kenyamanan\r\n\r\nPaduan bahan ringan dan pegangan karet akan memastikan sesi permainan Anda berlangsung selama mungkin\r\n\r\nMouse gaming akan berikan kenyamanan maksimum untuk waktu bermain yang maksimum\r\n\r\n1 x Logitech G402 Hyperion Fury Gaming Mouse Ultra-Fast FPS 250 & 4000 DPI\r\n\r\nSpesifikasi\r\nTipe Mouse\r\nMouse Wired\r\nTipe Prosesor\r\n32-bit\r\nTipe Sensor\r\nFusion Engine Hybrid\r\nMax DPI\r\n240 hingga 4000 DPI\r\nJumlah Tombol\r\n1 tombol kiri, 1 tombol kanan, dan 8 program\r\nKoneksi\r\nUSB wired\r\nDimensi\r\nTinggi: 136 mm\r\nLebar: 72 mm\r\nTebal: 41 mm\r\nPanjang Kabel: 2\r\n1 m\r\nBerat Bersih', '2023-03-24 11:30:07', NULL, NULL),
(4, 'logitech', 'Logitech G502 HERO High Performance Gaming Mouse', 1199000, 50, 599500, 'USB', 'brand (4).jpg', 'brand4 (1).jpg', 'brand4 (2).jpg', 'brand4 (3).jfif', 241, 185, 'G502 HERO HIGH PERFORMANCE GAMING MOUSE\r\n\r\nHERO YANG DILAHIRKAN KEMBALI\r\n\r\nG502 HERO dilengkapi sensor optik terbaik untuk akurasi penelusuran maksimum, pencahayaan RGB yang disesuaikan, profil game khusus, dari 200 hingga 25\r\n600 DPI, dan pemberat yang dapat diposisikan ulang\r\n\r\n\r\nSENSOR HERO 25K\r\n\r\nHERO 25K adalah gaming sensor yang paling akurat dengan presisi generasi berikutnya dan arsitektur dari dasar\r\n\r\nDengan pemrosesan frame rate tercepat, HERO mampu mencapai 400+ IPS pada seluruh kisaran 100 - 25,600 DPI dengan zero smoothing, memfilter, atau akselerasi\r\n\r\nHERO 25K mencapai presisi level kompetisi dan ketanggapan yang paling konsisten\r\n\r\nPastikan untuk mengkustomisasi dan menyesuaikan pengaturan DPI Anda dengan menggunakan Logitech G HUB\r\n\r\n\r\nKENDALI DI UJUNG JEMARI ANDA\r\n11 TOMBOL YANG DAPAT DIPROGRAM\r\n\r\nGunakan Logitech G HUB untuk memprogram perintah dan makro favorit Anda pada ke-11 tombol yang ada\r\n\r\nMembangun, membungkuk, menyerang, menyembuhkan … letakkan semua gerakan andalan di ujung jemari Anda\r\n\r\nSimpan profil siap-main langsung di mouse sehingga Anda bisa membawa pengaturan ini ke mana pun juga\r\n\r\n\r\nPEMBERAT YANG DAPAT DISESUAIKAN\r\n\r\nSempurnakan nuansa mouse dan menggelincir untuk keunggulan Anda\r\n\r\nLima pemberat 3,6 g disertakan dengan G502 HERO dan dapat dikonfigurasi dalam aneka konfigurasi pemberat di bagian depan, belakang, kiri, kanan, dan tengah mouse\r\n\r\nBereksperimen dengan penyelarasan dan keseimbangan agar menemukan kombinasi paling cocok guna mengoptimalkan kinerja gaming Anda\r\n\r\n\r\n\r\nISI KEMASAN\r\nG502 HERO Gaming Mouse\r\nPemberat 5x 3,6 g opsional dan Case\r\nDokumentasi pengguna\r\n\r\nFITUR LAIN\r\nMemori on-board: Hingga 5 profil (memerlukan firmware 127\r\n1\r\n7)\r\nLIGHTSYNC RGB: 1 zona', '2023-03-24 11:33:05', NULL, NULL),
(5, 'logitech', 'Logitech G304 Lightspeed Wireless Gaming Mouse', 699000, 20, 559200, 'Wireless', 'brand (5).jpg', 'brand5 (1).jfif', 'brand5 (2).jpg', 'brand5 (3).jpg', 82, 708, 'G304 LIGHTSPEED WIRELESS GAMING MOUSE\r\n\r\nLIGHTSPEED WIRELESS UNTUK SEMUA\r\n\r\nG304 adalah LIGHTSPEED wireless gaming mouse yang dirancang untuk kinerja serius dengan inovasi teknologi terbaru dengan harga yang terjangkau\r\n\r\n\r\nSENSOR HERO\r\n\r\nHERO adalah sensor optik baru yang revolusioner dirancang oleh Logitech G untuk menghadirkan kinerja terunggul di kelasnya dan efisiensi daya hingga 10 kali (dibandingkan dengan generasi sebelumnya)\r\n\r\nSensor HERO menghadirkan kinerja yang konsisten dan sangat akurat dengan zero smoothing, filtering, atau akselerasi dari 200 hingga 12\r\n000 DPI\r\n\r\nG304 dapat menyimpan hingga 5 profil dengan maksimal 5 level DPI di onboard memory\r\n\r\n\r\nDAYA TAHAN BATERAI SANGAT PANJANG\r\n\r\nSensor HERO dan LIGHTSPEED wireless menghadirkan efisiensi ekstrem yang memungkinkanmu bermain berbulan-bulan lamanya\r\n\r\nSensor ini bisa digunakan 250 jam hanya dengan satu baterai AA\r\n\r\nIa bisa disesuaikan hingga bertahan sampai 9 bulan dengan mode Endurance, yang bisa dipilih via Logitech Gaming Software\r\n\r\n\r\nSANGAT RINGAN\r\n\r\nDi Logitech G, wireless gaming mouse tidak harus berat\r\n\r\nG304 sangat ringan, hanya dengan berat 99 gram, dimungkinkan berkat desain mechanical ringan dan penggunaan baterai yang sangat efisien\r\n\r\n\r\n6 TOMBOL YANG DAPAT DIPROGRAM\r\n\r\nSwitch utama G304, kiri dan kanan, dapat digunakan hingga 10 juta klik\r\n\r\nG304 juga dilengkapi tombol klik tengah, tombol DPI, dan dua tombol samping yang dapat diprogram sesuai preferensimu dengan menggunakan Logitech Gaming Software (LGS)\r\n\r\n\r\nISI KEMASAN\r\nG304 Gaming Mouse\r\nReceiver USB LIGHTSPEED™\r\nDokumentasi pengguna\r\n\r\nDAYA TAHAN BATERAI\r\n250 jam\r\n\r\nFITUR LAIN\r\nOnboard memory: 1 profil\r\nSistem Pengencangan Tombol Mekanik', '2023-03-24 11:35:46', NULL, NULL),
(6, 'Taffware', 'Taffware Mouse Bluetooth Rechargeable - M8120G', 76300, 20, 61040, 'Wireless', 'brand (6).jpg', 'brand6 (1).jpg', 'brand6 (2).jpg', 'brand6 (3).jpg', 466, 392, 'Taffware Mouse Bluetooth 5\r\n2 Rechargeable - M8120G\r\nBerbekal koneksi Bluetooth 5\r\n2, Mouse ini dapat dengan mudah terhubung ke laptop maupun PC dekstop Anda\r\n\r\nHadir dengan desain yang minimalis, simpel, dengan balutan warna simple yang terlihat elegan\r\n\r\n\r\n\r\nSpesifikasi:\r\n- Ukuran : 112 x 60 x 25 mm\r\n- Tipe : M8120G\r\n- Kapasitas : -\r\n- Warna Tersedia : Hitam\r\n\r\n\r\nFitur:\r\n✔️ Bluetooth Mouse\r\nMouse ini menggunakan koneksi bluetooth 5\r\n2 dengan jarak hingga 10m\r\n\r\nDapat dipakai untuk semua jenis laptop/pc yang mendukung penggunaan koneksi bluetooth\r\n\r\n\r\n✔️ Desain Elegan\r\nMouse ini terlihat elegan bukan, dengan warna metalic yang memikat mata\r\n\r\nSangat cocok bagi Anda yang begitu peduli dengan gadget berdesain menarik\r\n\r\n\r\n✔️ Baterai Isi Ulang\r\nMouse ini tak perlu pakai pakai baterai eksternal seperti AA/AAA\r\n\r\nCukup colokan saja kabel USB dari adapter/laptop/power bank ke mouse ini, dan baterai akan terisi kembali\r\n\r\n\r\n✔️ Suara Sunyi\r\nMouse wireless tidak akan menimbulkan suara-suara yang mengganggu konsentrasi Anda saat kerja di depan laptop\r\n\r\n\r\n✔️ Desain Ergonomis\r\nMouse ini sangat kompatible dengan OS terbaru seperti WIndows 8/10 dan juga Mac OX 10\r\n0 dan terbaru\r\n\r\n\r\n\r\nKelengkapan Produk:\r\nRincian yang Anda dapatkan untuk pembelian produk ini:\r\n- 1 x Taffware Mouse Bluetooth 5\r\n2 Rechargeable - M8120G\r\n- 1 x Kabel Micro USB', '2023-03-24 11:38:00', NULL, NULL),
(7, 'Razer', 'Mouse Gaming RAZER Viper Ambidextrous Esports', 1086000, 10, 977400, 'USB', 'brand (7).jpg', 'brand7 (1).jpg', 'brand7 (2).jpg', 'brand7 (3).jpg', 50, 261, 'FETURED :\r\nRAZER VIPER 8KHz Ambidextrous Esports - Gaming Mouse\r\n\r\n➡️ Razer™ 8000Hz HyperPolling Technology\r\n➡️ Razer™ Focus+ 20K DPI Optical Sensor\r\n➡️ 2nd-gen Razer™ Optical Mouse Switch\r\n\r\nSPESIFICATIONS :\r\n➡️ FORM FACTOR : True-Ambidextrous\r\n➡️ CONNECTIVITY : Wired - Speedflex Cable\r\n➡️ BATTERY LIFE : None\r\n➡️ RGB LIGHTING : Razer Chroma™ RGB\r\n➡️ SENSOR : Optical\r\n➡️ MAX SENSITIVITY (DPI) : 20000\r\n➡️ MAX SPEED (IPS) : 650\r\n➡️ MAX ACCELERATION (G) : 50\r\n➡️ PROGRAMMABLE BUTTONS : 7+1\r\n➡️ SWITCH TYPE : 2nd-gen Razer™ Optical Mouse Switch\r\n➡️ SWITCH LIFECYCLE : 70 Million Clicks\r\n➡️ ON-BOARD MEMORY PROFILES : 5\r\n➡️ MOUSE FEET : 100% PTFE Mouse Feet\r\n➡️ CABLE : Razer™ Speedflex Cable\r\n➡️ TILT SCROLL WHEEL : No\r\n➡️ SIZES : Length: 126\r\n73 mm / 4\r\n99 in // Width: 57\r\n6 mm / 2\r\n27 in // Height: 37\r\n81 mm / 1\r\n49 in\r\n➡️ WEIGHT : 71 g / 2\r\n5 oz (Excluding cable)\r\n➡️ DOCK COMPATIBILITY : None', '2023-03-24 11:41:01', NULL, NULL),
(8, 'Razer', 'Razer Viper Ultimate Hyper speed Wireless Gaming Mouse', 1295000, 20, 1036000, 'Wireless', 'brand (8).jpg', 'brand8 (1).jpg', 'brand8 (2).jpg', 'brand8 (3).jpg', 77, 160, 'GARANSI RESMI RAZER 2 TAHUN\r\n\r\nFeatures :\r\n- Razer Hyperspeed Wireless technology\r\n- Razer Focus+ Optical Sensor\r\n- Razer™ Optical Mouse Switches\r\n- 74g lightweight design\r\n- 70 hours of battery life\r\n- True 20,000 DPI Focus+ optical sensor with 99\r\n6% resolution accuracy\r\n- Up to 650 inches per second (IPS) / 50 G acceleration\r\n- Advanced Lift-off/Landing distance customization\r\n- HyperSpeed wireless technology\r\n- Eight independently programmable buttons\r\n- Razer™ Optical Mouse Switches rated for 70M clicks\r\n- True Ambidextrous shape\r\n- Gaming-grade tactile scroll wheel\r\n- On-The-Fly Sensitivity Adjustment (Default stages : 400/800/1600/2400/3200)\r\n- Hybrid On-board and Cloud Storage (4+1 profiles)\r\n- Razer Synapse 3 enabled\r\n- Razer Chroma™ lighting with true 16\r\n8 million customizable color options\r\n- Inter-device color synchronization\r\n- Wired and Wireless usage modes\r\n- 2\r\n4 GHz dongle\r\n- 1\r\n8 m / 6 ft Speedflex cable for charging and wired use\r\n- Razer Mouse charging dock compatible\r\n- Battery life: Approximately 70 hours (without lighting) (Battery life depends on usage settings)\r\n- Approximate size: 126\r\n7 mm / 4\r\n99 in (Length) X 66\r\n2 mm / 2\r\n61 in (Width) X 37\r\n8 mm / 1\r\n49 in (Height)\r\n- Approximate weight: 74 g / 2\r\n61 oz (Excluding cable)\r\n- Compatible with Xbox One for basic input\r\n', '2023-03-24 11:42:57', NULL, NULL),
(9, 'Razer', 'RAZER Basilisk X Hyper Speed Wireless Gaming Mouse', 1168000, 10, 1051200, 'Wireless', 'brand (9).jpg', 'brand9 (1).jpg', 'brand9 (2).jpg', 'brand9 (3).jpg', 38, 289, 'Deskripsi Produk :Wireless Gaming Mouse with Razer™ HyperSpeed TechnologyRazer™ HyperSpeed WirelessRazer™ 5g Advanced Optical SensorUltra-Long Battery LifeTech Specs:FORM FACTOR: Right-HandedCONNECTIVITY: Razer™ HyperSpeed Wireless BluetoothBATTERY LIFE: Up to 450 HoursRGB LIGHTING: -SENSOR: OpticalMAX SENSITIVITY (DPI): 16000MAX SPEED (IPS): 450MAX ACCELERATION (G): 40PROGRAMMABLE BUTTONS: 6SWITCH TYPE: MechanicalSWITCH LIFECYCLE: 50 Million ClicksON-BOARD MEMORY PROFILES: 1MOUSE FEET: Standard Stock FeetCABLE: -TILT SCROLL WHEEL: NoSIZES: 130mm / 511 in (Length) x 60mm / 236 in (Grip Width) x 42mm / 165 in (Height)WEIGHT: 018 lbs / 83 gDOCK COMPATIBILITY: -', '2023-03-24 11:45:03', NULL, NULL),
(10, 'SteelSeries', 'Mouse SteelSeries Rival 3 - Mouse Gaming', 998000, 50, 499000, 'USB', 'brand (10).jpg', 'brand10 (1).jpg', 'brand10 (2).jpg', 'brand10 (3).jpg', 452, 975, 'Specifications :\r\n\r\nSensor\r\n\r\nSensor SteelSeries TrueMove Core\r\nSensor Type Optical\r\nCPI 1008,500 in 100 CPI Increments\r\nIPS 300, on SteelSeries QcK surfaces\r\nAcceleration 35G\r\nPolling Rate 1000Hz 1 ms\r\nHardware Acceleration None (Zero Hardware Acceleration)\r\nDesign\r\n\r\nBack Cover Material Black Matte Finish\r\nCore Construction ABS Plastic\r\nShape Ergonomic, Right-Handed\r\nGrip Style Claw or Fingertip\r\nNumber of Buttons 6\r\nSwitch Type SteelSeries mechanical switches, rated for 60 million clicks\r\nIllumination 3 RGB Zones, Independently Controlled\r\nWeight 77g (2\r\n7oz) without cable\r\nLength 120\r\n60mm / 4\r\n75 inches\r\nWidth 58\r\n30mm / 2\r\n30 inches (front), 67\r\n00mm / 2\r\n64 inches (back)\r\nHeight 21\r\n50mm / 0\r\n85 inches (front), 37\r\n90mm / 1\r\n49 inches (back)\r\nRubber Cable Length 1\r\n8m / 6 feet\r\nCompatibility\r\n\r\nOS Windows, Mac, Xbox, and Linux\r\n\r\nUSB port required\r\n\r\nSoftware SteelSeries Engine 3\r\n15\r\n1+, for Windows (7 or newer) and Mac OSX (10\r\n12 or newer)\r\n', '2023-03-24 11:47:23', NULL, NULL),
(11, 'SteelSeries', 'Mouse SteelSeries Rival 650 Wireless - Gaming', 1847000, 20, 1477600, 'Wireless', 'brand (11).jpg', 'brand11 (1).jpg', 'brand11 (2).jpg', 'brand11 (3).jpg', 78, 470, 'SteelSeries Rival 650 Quantum Wireless Gaming Mouse\r\n-Mouse gaming nirkabel kinerja nyata pertama ada di sini\r\n\r\nRival 650 Wireless memiliki fitur performa lossless Quantum Wireless ™ 1ms, kemampuan pengisian daya yang cepat, dan sensor game paling tepat yang pernah dibuat\r\n\r\n-Exclusive Quantum WirelessTM menawarkan game 1000Hz (1ms) lag-free\r\n-15-menit pengisian cepat memberikan 10 + jam bermain game\r\n-Karena presisi 1 hingga 1 pelacakan dengan sensor optik TrueMove3\r\n-Didirikan sensor kedalaman sekunder untuk deteksi lepas instan\r\n-256 konfigurasi berat tuning gravitasi\r\n\r\nSpesifikasi:\r\nSistem Sensor: SteelSeries TrueMove3 + Sistem Sensor Ganda\r\nSensor Utama: TrueMove 3 Optical Gaming Sensor\r\n\r\nSensor Sekunder: Deteksi Deteksi Linear Optik Kedalaman\r\n\r\nCPI: 100–12000 dalam 100 CPI\r\nIPS: 350+, pada permukaan QcK SteelSeries\r\nAkselerasi: 50G\r\nAkselerasi Hardware: Tidak Ada (Zero Hardware Acceleration)\r\nJarak Angkat: Dapat disesuaikan, 0,5–2 mm\r\nBahan Atas: Sentuhan Lembut Hitam\r\nKonstruksi Inti: Fiber-Reinforced Plastic\r\nBentuk: Ergonomis, Tangan Kanan\r\nGaya Pegangan: Universal\r\nJumlah Tombol: 7\r\nJenis Saklar: Sakelar SteelSeries, diberi nilai untuk 60 juta klik\r\nIluminasi: 8 Zona RGB, Terkendali Secara Independen\r\n\r\nBerat: 121 g / 4\r\n2 ons tanpa kabel\r\n\r\nDapat disesuaikan hingga 153 g / 5,4 ons\r\nPanjang: 131 mm / 5,2 inci\r\nLebar: 62 mm (depan), 62 mm (tengah), 69 mm (belakang)\r\n2,4 inci (depan), 2,4 inci (tengah), 2,7 inci (belakang)\r\nTinggi: 27 mm (depan), 43 mm (belakang)\r\n1,1 inci (depan), 1,7 inci (belakang)\r\nTipe Kabel: Dilepas, Karet Lunak\r\nPanjang Kabel: 2 m / 6,5 ft', '2023-03-24 11:49:21', NULL, NULL),
(12, 'Fantech', 'Mouse Gaming HERO UX1', 365000, 5, 346750, 'USB', 'brand (12).jpg', 'brand12 (1).jpg', 'brand12 (2).jpg', 'brand12 (3).jpg', 49, 689, 'Garansi Resmi 1 Tahun Fantech Indonesia\n\nFantech UX1 HERO Ultimate RGB Gaming Mouse\n\nDidesain khusus bagi para Expert Professional Gamer yang mengedepankan akurasi, stabilitas, performa serta RGB Light\n\nUX1 Hero telah dipersenjatai dengan Sensor kelas atas PIXART 3389 yang sudah menjadi spesifikasi wajib para Gamers untuk tetap berada di level kompetitif tertinggi\n\nLift of Distance (LOD) UX1 Hero mencapai angka 3mm agar perpindahan mouse tetap stabil dan didukung dengan IPS 400, DPI 50-16\n000 dan akselerasi 50g\n\nAnda juga bisa Customize Gaming Mouse UX1 Hero ini melalui software yang bisa di download di www•fantech•id\n\n\nSpesifikasi UX1 Hero :\n- PIXART 3389 Sensor\n- 16                    8 Juta RGB Color\n- 7 Spectrum Mode RGB\n- 1\n8m Nylon Braided Cable\n- Omron Switch 50M\n- LOD 3mm\n- IPS 400 | Acceleration 50G\n- 50 - 16\n000 DPI\n- Onboard memory\n- 8 tombol Macro dengan Software\n', '2023-03-24 11:51:36', NULL, NULL),
(13, 'Fantech', 'Mouse Gaming HELIOS XD3', 1199000, 50, 599500, 'Wireless', 'brand (13).jpg', 'brand13 (1).jpg', 'brand13 (2).jpg', 'brand13 (3).jpg', 540, 858, 'Perkenalkan Mouse Premium Fantech HELIOS Series yang mengedepankan kenyamanan dan performa yang maksimal\n\nDiciptakan untuk seorang JUARA Sejati !\n\nNOTE : untuk MODE WIRED, colok kabel sampai mentok karena terdapat 2 mode\n- colok setengah = mode charge doang, nyala tidak bisa di gunakan\n- colok full = mode wired berjalan\n\nUNGGUL SEGALANYA !\n- Menggunakan Huano BLUE 50M Click Switch di click kiri dan kanan yang sudah sangat terjamin ketahanan nya !\n\n- Mousefeet di HELIOS SERIES tidak tanggung-tanggung, yaitu Pure PTFE White Curve Premium Mousefeet dengan tebal 0\n8mm\n\nTidak perlu khawatir mouse gaming kalian bakal mulus di mousepad apapun !\n\n- Berat Mouse 83gr tanpa perlu membuat body mouse menjadi bolong-bolong\n\n- Baterai sebesar 730mAH yang sanggup bertahan hingga 7 hari dalam penggunaan mode ECO\n\nSpesifikasi\n\n- Sensor Gaming PIXART 3335\n- 1000Hz Polling Rate\n- DPI 400-16\n000\n- 400IPS / 40G\n- USB Type-C Paracord 1\n8m\n- Size 120mm x 58mm x 38mm\n- 83gr\n- PTFE White Curve Premium Mousefeet = tebal 0\n8mm\n- OnBoard Memory\n- 730mAH Baterry Dual Mode (Wireless & Wired Mode)\n- Customable Software\n\nGaransi Resmi Fantech Care 1 Tahun\n', '2023-03-24 11:53:19', NULL, NULL),
(14, 'Fantech', 'Mouse Fantech Macro RGB Gaming X9 THOR', 220000, 50, 110000, 'USB', 'brand (14).jpg', 'brand14 (1).jpg', 'brand14 (2).jpg', 'brand14 (3).jpg', 532, 956, 'SENSOR KELAS GAMING GENERASI BARU\r\nMemperkenalkan Fantech X9 Thor yang dipersenjatai dengan sensor generasi ketiga dari Fantech\r\n\r\nSensor 4800DPI yang telah disempurnakan untuk mendukung kecepatan tangan gamers dengan akselerasi 15g\r\n\r\nkemampuan untuk mengolah 6000 frame per detik dan kemampuan jelajah hingga 60 inch per detik untuk membantu gamer yang memakai layar monitor besar\r\n\r\n\r\n-LAMPU RGB DENGAN 16\r\n8 JUTA WARNA\r\nFantech X9 Thor dilengkapi dengan pencahayaan RGB dengan pilihan hingga 16\r\n8 juta kombinasi warna dan 3 pilihan mode yang bisa di edit dari perangkat lunak\r\n\r\nX9 juga mendukung setelan nyata lampu manual dengan menekan DPI 3 detik\r\n\r\n\r\n-PERSONALISASI PLUS+\r\nFantech X series selalu memberikan personalisasi yang lebih melalui perangkat lunaknya\r\n\r\nMengedit skrip macro, setelan tombol, lampu, multimedia dan menyimpan setelan profil ke dalam komputer anda untuk akses yang lebih cepat\r\n\r\n\r\nID:\r\n- Sensor Optik Gaming\r\n- DPI yang bisa diatur dalam game (1200-2400-3200-4800)\r\n- Kecepatan/ekselerasi: 60ips/15g\r\n- Polling rate: 125hz\r\n- FPS: max 6000fps\r\n- Klik tahan lebih dari 10\r\n000\r\n000 kali\r\n- Kabel nylon 1\r\n8m\r\n- Roda Silikon\r\n- RGB Chroma Luminous light\r\n- Ukuran: 128mm x 68mm x 41mm\r\n\r\n\r\nGaransi Resmi 1 Tahun Fantech Care', '2023-03-24 11:54:36', NULL, NULL),
(15, 'logitech', 'Logitech MX Vertical Ergonomic Wireless Mouse', 5754000, 10, 5178600, 'Wireless', 'brand (15).jpg', 'brand15 (1).jpg', 'brand15 (2).jpg', 'brand15 (3).jpg', 52, 584, 'Mx vertical is an advanced ergonomic mouse that combines science-driven design with the elevated performance of Logitech MX Series\r\n\r\nthe natural handshake position of MX vertical is designed to reduce wrist pressure and forearm strain associated with repetitive stress Injury (RSI) and carpal tunnel syndrome (CTS)\r\n\r\nThe unique 57° vertical angle has been optimized for an ergonomic posture without compromising a pixel of performance\r\n\r\nMx vertical features a 4000 DPI high-precision sensor, resulting in 4x less hand movement and reducing fatigue\r\n\r\nand the cursor speed switch allows you to instantly adjust DPI speed and accuracy with the touch of a button\r\n\r\nMx vertical stays powered for up to four months on a full charge - and gets three hours of use From a one-minute quick charge\r\n\r\n(As compared with a traditional non-vertical mouse\r\n\r\nas compared with a traditional mouse with 000 dpi sensor\r\n\r\nBattery life may vary based on user and computing conditions\r\n)\r\n', '2023-03-24 11:56:44', NULL, NULL),
(180, 'Rexus', 'Mouse Gaming Rexus Xierra X8 RGB - Body Ergonomis ', 142000, 10, 127800, 'USB', '64513e946f907.jpg', '645149d9509cf.jpg', '645149d951613.jpg', '645149d951aa8.jpg', 256, 96, 'FEATURES:- Level DPI Lengkap: Xierra X8 mempunyai level atau tingkatan DPI lengkap, 800 7200, yang bisa di-upgrade menjadi 800-7200 dengan menggunakan perangkat lunak. Fitur ini akan memudahkan pengguna dalam mengoperasikan mouse saat digunakan bermain gim atau pekerjaan lain karena pengguna dapat memilih mode game atau mode multimedia.- Macro Software: Xierra X8 didukung software yang bisa digunakan untuk mengatur fitur Macro. Software ini dapat diunduh dan tersimpan di komputer pengguna. Dengan software ini, berbagai fitur pengaturan permainan dapat dilakukan secara mudah dalam beberapa pilihan konfigurasi.- Running LED RGB: Xierra X8 dilengkapi dengan Running LED RGB yang akan berpendar secara halus mengutari garis LED yang ada di samping badan mouse.- Comfortable Design: Xierra X8 didesain secara sempurna untuk kenyamanan dan ketepatan penggunaan. Dilengkapi dengan thumb-rest yang menyangga jempol saat hendak menekan tombol next-previous.TECH SPECS:- Akselerasi: 20G- Kecepatan Rata-rata per frame: 7000 Fps- Kecepatan gerak: 60 Ips- Polling Rate : up to 1000Hz- Resolusi: 800 - 7200 DPI (dengan menggunakan software)- Jumlah tombol: 6 tombol- LED: 5 mode pencahayaan- Panjang kabel: 1,75 meter- Dimensi: 129 x 75,8 x 34mm- Berat: 98 gram- Koneksi: USB- Platform: Win7/ Win8/ Win 10/ Window Vista/ Window XP- Memory Onboard', '2023-05-02 23:47:16', NULL, NULL),
(181, 'Rexus', 'Mouse Gaming Rexus Xierra G10 Mouse Gaming', 136000, 5, 129200, 'USB', '64513f444ee69.jpg', '64514a89bf6cc.jpg', '64514a89bfd43.jpg', '64514a89c5b09.jpg', 147, 161, 'TOMBOL HUANO 5 JUTA KLIKRexus Gaming Mouse Xierra G10, meski belum dilengkapi dengan fitur software Macro, mouse ini sudah menggunakan tombol yang biasa digunakan oleh beberapa tipe mouse gaming. Tombol Huano yang digunakan mouse ini mempunyai durabilitas hingga 5 juta klik.DESAIN DAN BERAT IDEALRexus Gaming Mouse Xierra G10 didesain secara sempurna untuk kenyamanan dan ketepatan penggunaan. Mouse gaming Xierra G10 ini memiliki berat sekitar 90gram, lebih berat dibanding mouse sekelasnya, sehingga membuat mantap saat menggerakkannya.SPESIFIKASITombol : 7Sensor : INSTANT A704EPolling Rate : 125HzKecepatan : 60ipsAkselerasi : 15gMaterial kabel : KepangPanjang kabel : 1.8mSoftware macro : NoLED : 7 Warna LEDDimensi : 130*65*40mm', '2023-05-02 23:50:12', NULL, NULL),
(182, 'Hyperx', 'Mouse HyperX Pulsefire RAID RGB | Ergonomic Mouse Gaming', 687000, 20, 549600, 'USB', '64513fec13f1b.jpg', '64514af6e28f9.jpg', '64514af6e2d00.jpg', '64514af6e2f88.jpg', 241, 183, 'Spesifikasi :Lightweight 11-button programmable mousePremium Pixart 3389 SensorAdvanced customization using HyperX NGENUITY softwareErgonomic design with comfortable side gripsSplit-button design for extreme responsivenessCustomizable RGB lightingLarge skates and flexible braided cableMulti-platform compatibilityShape : ErgonomicSensor : Premium Pixart PMW3389Resolution : up to 16,000 DPIDPI presets : 800 / 1600 / 3200 DPISpeed : 450 IPSAcceleration : 50GButtons : 11Left / Right button switches : OmronLeft / Right button durability : 20 million clicksBacklight : RGB (16,777,216 colors)Light effects : 2 RGB lighting zonesOn board memory : 1 profileConnection type : USB 2.0Polling rate : 1000HzCable type : BraidedDimensions : L: 127.8 mm , W: 71.0mm , H: 41.5 mmCable length : 1.8mWeight (without cable) : Approximately 95gWeight (with cable) : Approximately 125gSoftware : HyperX NGENUITY', '2023-05-02 23:53:00', NULL, NULL),
(183, 'Glorious', 'Glorious Model D Wireless Mouse Gaming', 1379000, 10, 1241100, 'Wireless', '64514080e307c.jpg', '64514bcbc2f1b.jpg', '64514bcbc33ad.jpg', '64514bcbc360f.jpg', 131, 71, 'BAMF SENSORThe proprietary BAMF Sensor redefines what is possible in a gaming mouse. Made in collaboration with Pixart, BAMF is optimized for unrivaled performance with a lower power draw - allowing you to game harder and longer than ever before. The sensor provides pinpoint precision with its 400 IPS tracking speed, 19,000 programmable DPI, and up to 1000 Hz polling rate.Features:• Next-gen BAMF Sensor• Super light at 69g• Up to 71 Hours of battery life• Fast & Responsive wireless connectivitySpecification:- Weight: 69 g +/- 1.5 grams- Sensor: Glorious BAMF Sensor- DPI: 100 – 19,000- Switch: Omron® Mechanical- Numbers of button: 6- Max. acceleration: 50 g- Max. speed: 400 IPS- Polling rate 1,000hz(1ms)- Lift off distance: 7 - 1.7 mmContent:1 x Glorious Model D Wireless1 x Ascended USB-C Cable1 x Dongle1 x Adapter1 x Glorious G-Skates', '2023-05-02 23:55:28', NULL, NULL),
(184, 'Glorious', 'Glorious Model O Wireless Mouse Gaming', 2393000, 10, 2153700, 'Wireless', '645140f0c9db2.jpg', '64514b7550590.jpg', '64514b7550dee.jpg', '64514b755149d.jpg', 94, 174, 'Glorious Model O Wireless - Gaming mouseFeatures :- Fast & Responsive 2.4Ghz Wireless Connectivity- BAMF Sensor Next-Gen Propriety- Super Light Build only 69g- Baterry Life up to 71 Hours- Wired & Wireless Mode- 6 Progammable Buttons- Full RGB 16.8M Custom Colors- G-Skates 100% pure PTFE untuk return', '2023-05-02 23:57:20', NULL, NULL),
(185, 'Corsair', 'Corsair DARK CORE RGB Wireless Mouse CH-9315011-NA', 1674000, 20, 1339200, 'Wireless', '6451417425d5d.jpg', '64514c22a29a6.jpg', '64514c22a2c5a.jpg', '64514c22a2ea6.jpg', 54, 13, 'Deskripsi Corsair Dark Core RGB Pro SE FPS / MOBA Wireless Gaming MouseFeatures :- Three ways to connect: sub-1ms SLIPSTREAM WIRELESS technology, low-latency Bluetooth wireless technology, or USB wired.- Play with pinpoint accuracy and precision thanks to a custom PixArt PAW3392 native 18, 000 DPI optical sensor, optimized for wireless mice with extremely low power consumption and customizable in 1 DPI resolution steps.- Hyper-polling technology communicates with your PC at up to 2, 000Hz, twice the speed of standard gaming mice, ensuring blazingly fast response times.- Charges with an easy-to-use, reversible USB-C connector, or wirelessly with any Qi-compatible charging device such as the CORSAIR MM1000 mouse pad.- Comfortable contoured shape with two included interchangeable side grips for a tailored fit.- Nine-zonedynamic RGB backlighting, including an integrated light bar with five individually addressable - RGB LEDs, offers near endless customization of colors and lighting effects.- Get an in-game advantage with eight buttons, fully programmable with custom macros and button remaps.- Up to 50 hours of continuous battery-powered wireless gaming, or plug in for wired mode to continue gameplay while charging.- High-performance Omron switches rated for more than 50 million clicks- Powerful CORSAIR iCUE software lets you assign macros, adjust polling rate, customize RGB lighting effects synchronized across all of your iCUE-compatible devices, and much more.', '2023-05-02 23:59:32', NULL, NULL),
(186, 'Corsair', 'Corsair NightSword RGB FPS/MoBA Optical Mouse Gaming', 1489000, 10, 1340100, 'USB', '645141e501371.jpg', '64514c7cb394c.jpg', '64514c7cb3bfb.jpg', '64514c7cb3ec0.png', 89, 79, 'Features :- Corsair-exclusive software automatically detects the center of gravity in real time, allowing you to adjust weight between 115G and 137G and fine-tune balance to perfectly fit your grip.- A custom PixArt PMW3391 native 18, 000 DPI optical sensor, adjustable in 1 DPI resolution steps, gives you total sensitivity customization and ultra-accurate tracking.- Built with a comfortable contoured shape that naturally fits your hand, with high-performance rubber grips inspired by Pro sports equipment.- Ten fully programmable buttons let you customize your gaming, with the in-game advantage of powerful macros and key Remaps.- Includes two sets of weights with six mounting locations, Offering 120 different weight and balance configurations for a precisely calibrated gaming experience.', '2023-05-03 00:01:25', NULL, NULL),
(187, 'Roccat', 'ROCCAT Kone EMP Mouse Gaming ROC-11-812 ', 1328000, 5, 1261600, 'Wireless', '64514325c80cd.jpg', '64514d1f826de.jpg', '64514d1f82c4b.png', '64514d1f82efa.jpg', 66, 81, 'Features :- Ultra-light, ergonomic - The Kone pure Ultra retains the much-loved shape of its predecessor but presents it in a low-weight 66.5 gram package; as an ultra-light mouse, It is an industry-first in Also being ergonomic- Evolutionary performance coating - grippy, durable and dirt-resistant thanks to a hybrid anti-wear coating; The performance finish helps you keep a firm hold of the Kone pure Ultra during even the most frantic of gaming sessions- Roccat owl-eye sensor - experience deadly pointer precision with the all-new 16, 000DPI Roccat owl-eye Optical sensor; The sensor is adjustable in 50DPI increments and is characterized by exceptionally sharp accuracy and tracking capabilities- The basics done to perfection - the Kone pure Ultra features 2D Titan wheel, improved click mechanics, extra-large mouse feet with rounded edges and a lighter, more flexible cable making for a lighter-than-air gliding feel with exceptional click accuracy- Aimo illumination - AIMO is the living illumination eco-system from ROCCAT; Its functionality grows exponentially based on your computing behavior and the number of aimo-enabled devices connected', '2023-05-03 00:06:45', NULL, NULL),
(189, 'Roccat', 'ROCCAT Burst Pro Extreme Lightweight Optical Mouse Gaming', 999000, 5, 949050, 'USB', '645144e960f3c.jpg', '64514db0b536a.jpg', '64514db0b572e.jpg', '64514db0b597e.png', 77, 21, '- Ultra-light, ergonomic - The Kone pure Ultra retains the much-loved shape of its predecessor but presents it in a low-weight 66.5 gram package; as an ultra-light mouse, It is an industry-first in Also being ergonomic - Evolutionary performance coating - grippy, durable and dirt-resistant thanks to a hybrid anti-wear coating; The performance finish helps you keep a firm hold of the Kone pure Ultra during even the most frantic of gaming sessions - Roccat owl-eye sensor - experience deadly pointer precision with the all-new 16, 000DPI Roccat owl-eye Optical sensor; The sensor is adjustable in 50DPI increments and is characterized by exceptionally sharp accuracy and tracking capabilities', '2023-05-03 00:14:17', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `produks111`
--

CREATE TABLE `produks111` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `brand` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `harga` int(11) NOT NULL,
  `diskon` int(11) NOT NULL,
  `terdiskon` int(11) NOT NULL,
  `jenis` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gambar` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gambar2` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gambar3` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gambar4` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `stok` int(11) NOT NULL,
  `terjual` int(11) NOT NULL,
  `deskripsi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal` datetime NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `keranjangs`
--
ALTER TABLE `keranjangs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kurirs`
--
ALTER TABLE `kurirs`
  ADD PRIMARY KEY (`id_kurir`);

--
-- Indexes for table `kurirsori`
--
ALTER TABLE `kurirsori`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `pesanans`
--
ALTER TABLE `pesanans`
  ADD PRIMARY KEY (`id_pesan`);

--
-- Indexes for table `produks`
--
ALTER TABLE `produks`
  ADD PRIMARY KEY (`id_produk`);

--
-- Indexes for table `produks111`
--
ALTER TABLE `produks111`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `keranjangs`
--
ALTER TABLE `keranjangs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `kurirs`
--
ALTER TABLE `kurirs`
  MODIFY `id_kurir` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;

--
-- AUTO_INCREMENT for table `kurirsori`
--
ALTER TABLE `kurirsori`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pesanans`
--
ALTER TABLE `pesanans`
  MODIFY `id_pesan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=141;

--
-- AUTO_INCREMENT for table `produks`
--
ALTER TABLE `produks`
  MODIFY `id_produk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=193;

--
-- AUTO_INCREMENT for table `produks111`
--
ALTER TABLE `produks111`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
