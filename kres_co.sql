-- phpMyAdmin SQL Dump
-- version 5.2.1-dev+20220519.9fafdbd082
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 09 Jun 2022 pada 07.28
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 8.1.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kres_co`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `barang`
--

CREATE TABLE `barang` (
  `id_barang` int(11) NOT NULL,
  `nama_barang` varchar(100) NOT NULL,
  `ukuran` varchar(10) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `harga` float NOT NULL,
  `foto_barang` blob NOT NULL,
  `pilihan` varchar(50) NOT NULL,
  `terjual` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `barang`
--

INSERT INTO `barang` (`id_barang`, `nama_barang`, `ukuran`, `jumlah`, `harga`, `foto_barang`, `pilihan`, `terjual`) VALUES
(1, 'Kerupuk Terasi Matang', '1', 5, 17500, 0x3733392d746572617369206d6174616e672e6a7067, 'Tersedia', 0),
(2, 'Kerupuk Terasi Mentah', '1', 5, 11000, 0x3434372d746572617369206d656e7461682e6a7067, 'Tersedia', 0),
(4, 'Kerupuk Terasi Mentah', '5', 7, 50000, 0x3839342d746572617369206d656e7461682e6a7067, 'Pre-Order', 1),
(5, 'Kerupuk Bawang Mentah ', '1', 7, 9000, 0x3437392d626177616e67206d656e7461682e6a7067, 'Tersedia', 1),
(6, 'Kerupuk Bawang Matang', '1', 4, 12000, 0x3934392d626177616e67206d6174616e672e6a7067, 'Tersedia', 2),
(7, 'Kerupuk Bawang Mentah ', '5', 7, 40000, 0x3433302d626177616e67206d656e7461682e6a7067, 'Tersedia', 1),
(8, 'Kerupuk Bawang Matang', '5', 6, 58000, 0x3833352d626177616e67206d6174616e672e6a7067, 'Tersedia', 2),
(9, 'Kerupuk Udang Matang', '1', 8, 16000, 0x3639302d7564616e67206d6174616e672e6a7067, 'Pre-Order', 0),
(10, 'Kerupuk Udang Mentah', '1', 8, 13000, 0x3130312d7564616e67206d656e7461682e6a7067, 'Pre-Order', 0),
(11, 'Kerupuk Udang Matang', '5', 8, 78000, 0x3536362d7564616e67206d6174616e672e6a7067, 'Tersedia', 0),
(12, 'Kerupuk Udang Mentah', '5', 3, 63000, 0x3931372d7564616e67206d656e7461682e6a7067, 'Tersedia', 7),
(16, 'Kerupuk nasi', '1', 8, 5000, 0x3237342d32303231303930355f3132303034382e6a7067, 'Tersedia', 0),
(17, 'Kerupuk nasi', '1', 5, 50000, 0x3637322d32303231303930355f3132303130342e6a7067, 'Tersedia', 3),
(18, 'asd', '1', 6, 3456, 0x3636322d32303231303930355f3132303035332e6a7067, 'Tersedia', 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `detail`
--

CREATE TABLE `detail` (
  `id_detail` bigint(20) UNSIGNED NOT NULL,
  `orderid` varchar(255) NOT NULL,
  `id_barang` int(11) NOT NULL,
  `qwe` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `detail`
--

INSERT INTO `detail` (`id_detail`, `orderid`, `id_barang`, `qwe`) VALUES
(188, '16f0JRHyn0sSQ', 6, 2),
(189, '16UrK6j2M129Q', 4, 1),
(190, '16wU6mNgPzlvg', 5, 1),
(191, '16673zFoZ4vtA', 12, 2),
(192, '16673zFoZ4vtA', 12, 2),
(193, '16Pbx4qx.1tsQ', 7, 1),
(194, '16iQYWk8YARDw', 8, 2),
(195, '16iQYWk8YARDw', 12, 3),
(196, '16Mvipj4L/ZKs', 17, 3),
(197, '16Mvipj4L/ZKs', 18, 2),
(198, '16hQuBEIGTWmA', 7, 1),
(199, '16hQuBEIGTWmA', 9, 1),
(200, '16hQuBEIGTWmA', 16, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `keranjang`
--

CREATE TABLE `keranjang` (
  `id_keranjang` bigint(20) UNSIGNED NOT NULL,
  `orderid` varchar(255) NOT NULL,
  `id_pelanggan` int(50) NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `status` varchar(255) NOT NULL,
  `id_ongkir` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `keranjang`
--

INSERT INTO `keranjang` (`id_keranjang`, `orderid`, `id_pelanggan`, `tanggal`, `status`, `id_ongkir`) VALUES
(157, '16f0JRHyn0sSQ', 16, '2022-07-22 04:24:26', 'Selesai', '14'),
(158, '16UrK6j2M129Q', 16, '2022-06-08 04:34:02', 'Selesai', '19'),
(159, '16wU6mNgPzlvg', 16, '2022-06-08 05:09:36', 'Selesai', '14'),
(160, '16673zFoZ4vtA', 16, '2022-06-08 05:09:48', 'Selesai', '17'),
(161, '16Pbx4qx.1tsQ', 16, '2022-06-08 05:49:53', 'Selesai', '19'),
(162, '16iQYWk8YARDw', 1, '2022-06-08 05:49:48', 'Selesai', '12'),
(163, '16Mvipj4L/ZKs', 1, '2022-06-08 05:50:16', 'Selesai', '16'),
(164, '16hQuBEIGTWmA', 1, '2022-06-09 05:24:54', 'Pembatalan', '8');

-- --------------------------------------------------------

--
-- Struktur dari tabel `konfirmasi`
--

CREATE TABLE `konfirmasi` (
  `id_konfirmasi` bigint(20) UNSIGNED NOT NULL,
  `orderid` varchar(255) NOT NULL,
  `id_pelanggan` int(255) NOT NULL,
  `payment` varchar(255) NOT NULL,
  `namarekening` varchar(255) NOT NULL,
  `tanggal_bayar` date NOT NULL,
  `tanggal_submit` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `gambar` longblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `konfirmasi`
--

INSERT INTO `konfirmasi` (`id_konfirmasi`, `orderid`, `id_pelanggan`, `payment`, `namarekening`, `tanggal_bayar`, `tanggal_submit`, `gambar`) VALUES
(19, '16f0JRHyn0sSQ', 16, 'BCA', 'asdas', '2022-06-06', '2022-06-06 13:36:24', 0x3539322d576861747341707020496d61676520323032322d30362d30352061742032312e32322e31382e6a706567),
(20, '16UrK6j2M129Q', 16, 'BCA', 'Mirzan', '2022-06-08', '2022-06-08 04:29:39', 0x3138352d576861747341707020496d61676520323032322d30362d30352061742032312e32322e31382e6a706567),
(21, '16wU6mNgPzlvg', 16, 'Mandiri', 'Rama', '2022-06-08', '2022-06-08 04:30:22', 0x3438342d576861747341707020496d61676520323032322d30362d30352061742032312e32322e31382e6a706567),
(22, '16673zFoZ4vtA', 16, 'BCA', 'Rama', '2022-08-08', '2022-06-08 04:31:20', 0x3132322d576861747341707020496d61676520323032322d30362d30352061742032312e32322e31382e6a706567),
(23, '16Pbx4qx.1tsQ', 16, 'BCA', 'Mirzan', '2022-06-08', '2022-06-08 05:31:32', 0x3433332d576861747341707020496d61676520323032322d30362d30352061742032312e32322e31382e6a706567),
(24, '16iQYWk8YARDw', 1, 'BRI', 'Mirzan', '2022-06-08', '2022-06-08 05:43:49', 0x38342d576861747341707020496d61676520323032322d30362d30352061742032312e32322e31382e6a706567),
(25, '16Mvipj4L/ZKs', 1, 'BCA', 'Rama', '2022-06-08', '2022-06-08 05:48:49', 0x3632302d576861747341707020496d61676520323032322d30362d30352061742032312e32322e31382e6a706567),
(26, '16hQuBEIGTWmA', 1, 'BCA', 'Mirzan', '2022-06-09', '2022-06-09 05:24:09', 0x3436322d576861747341707020496d61676520323032322d30362d30352061742032312e32322e31382e6a706567);

-- --------------------------------------------------------

--
-- Struktur dari tabel `metode_pembayaran`
--

CREATE TABLE `metode_pembayaran` (
  `id_metode` bigint(20) UNSIGNED NOT NULL,
  `metode` varchar(50) NOT NULL,
  `norek` varchar(50) NOT NULL,
  `atasnama` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `metode_pembayaran`
--

INSERT INTO `metode_pembayaran` (`id_metode`, `metode`, `norek`, `atasnama`) VALUES
(1, 'BCA', '0920191000', 'Tahta'),
(2, 'Mandiri', '109220192101', 'Tahta Nimas'),
(3, 'BRI', '109219821018', 'Tahta Nimas');

-- --------------------------------------------------------

--
-- Struktur dari tabel `ongkir`
--

CREATE TABLE `ongkir` (
  `id_ongkir` int(11) NOT NULL,
  `nama_kota` varchar(100) NOT NULL,
  `tarif` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `ongkir`
--

INSERT INTO `ongkir` (`id_ongkir`, `nama_kota`, `tarif`) VALUES
(1, 'Ambon', 45000),
(2, 'Balikpapan', 31000),
(3, 'Banda Aceh', 29000),
(4, 'Bandar Lampung', 15000),
(5, 'Bandung', 9000),
(6, 'Banjarmasin', 26000),
(7, 'Batam', 22000),
(8, 'Bekasi', 7000),
(9, 'Bengkulu', 19000),
(10, 'Bogor ', 7000),
(11, 'Cirebon', 9000),
(12, 'Denpasar', 17000),
(13, 'Depok', 7000),
(14, 'Jakarta', 7000),
(15, 'Jember', 17000),
(16, 'Kediri', 17000),
(17, 'Madiun', 17000),
(18, 'Magelang', 16000),
(19, 'Surabaya', 17000),
(20, 'Tulungagung', 22000),
(21, 'Yogyakarta', 16000),
(22, 'Solo', 16000),
(23, 'Semarang', 16000),
(24, 'Probolinggo ', 20000),
(25, 'Malang', 17000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pegawai`
--

CREATE TABLE `pegawai` (
  `id_pegawai` int(11) NOT NULL,
  `nama_lengkap` varchar(100) NOT NULL,
  `alamat` varchar(150) NOT NULL,
  `no_hp` varchar(12) NOT NULL,
  `email` varchar(50) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pegawai`
--

INSERT INTO `pegawai` (`id_pegawai`, `nama_lengkap`, `alamat`, `no_hp`, `email`, `username`, `password`) VALUES
(1, 'Arief', 'JL. KACA PIRING NO. 23 GEBANG JEMBER', '088765731255', 'Arief@gmail.com', 'Arief', 'guHO120'),
(2, 'Agung', 'Jl. Danau Toba No. 4g RT.oo2/004 Kelurahan Tegalgede,. Kecamatan Su m bersari, Kab.Jem ber.', '088765732334', 'Agung@gmail.com', 'Agung', 'teleTubiezzz'),
(3, 'Ardiyanto', 'JL.KH. AGUS SALIM NO. 15-17 KENCONG, Kencong, Kec. Kencong\r\nKab. Jember', '088765731250', 'Ardiyanto@gmail.com', 'Ardiyanto', 'awMalubangeT'),
(4, 'Wahyu', 'JL. UMBULSARI NO 03 KREBET, Gumukmas, Kec. Gumuk Mas', '088765731251', 'Wahyu@gmail.com', 'Wahyu', 'bubuLcuMcuM'),
(6, 'Nurhayati', 'Jl. Pantai Selatan No. 17 Kalimalang, Mojomulyo, Kec. Puger\r\nKab. Jember', '088765731253', 'Nurhayati@gmail.com', 'Nurhayati', 'D112223456'),
(7, 'Sakinah', 'JL. MUH. SERUJI NO. 16 KASIYAN TIMUR, Kasiyan, Kec. Puger Kab. Jember', '088765731254', 'Sakinah@gmail.com', 'Sakinah', 'Bwi2707juju'),
(13, 'Tahta Nimas Putri Rahayu', 'Jl. Raya Kediri Nganjuk, Tarokan, Tarokan, Kediri', '085331216544', 'tahtanimas02@gmail.com', 'tahta_nimas', 'asdf'),
(14, 'Citra Yunita', 'Jl. Raya Kediri Nganjuk, Tarokan, Tarokan, Kediri', '089331216544', 'citra@gmail.com', 'turaturuu_', 'asdf'),
(15, 'Tahta Nimas Putri Rahayu', 'Jl. Raya Kediri Nganjuk, Tarokan, Tarokan, Kediri', '085331216544', 'tahtanimas02@gmail.com', 'yeyeye', 'asdf');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pelanggan`
--

CREATE TABLE `pelanggan` (
  `id_pelanggan` int(11) NOT NULL,
  `nama_lengkap` varchar(100) NOT NULL,
  `alamat` varchar(150) NOT NULL,
  `no_hp` varchar(12) NOT NULL,
  `email` varchar(50) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pelanggan`
--

INSERT INTO `pelanggan` (`id_pelanggan`, `nama_lengkap`, `alamat`, `no_hp`, `email`, `username`, `password`) VALUES
(1, 'Dino', 'Jl. Mumbulsari No 45 Krebet, Gumukmas, Kec. Gumuk Mas', '08223678909', 'donii@gmail.com', 'donipp', 'doniganteng'),
(2, 'Desti', 'Jl. Sawo No 19 Baratan, Kec Patrang', '082256765289', 'Destii@gmail.com', 'Destiiaa', 'Destiindahh'),
(3, 'Sella', 'Jl. Kaca Piring No.32, Gebang, Patrang, Kabupaten Jember, Jawa Timur 68117, Indonesia', '089765431244', 'Sellasi@gmail.com', 'Sellasi', 'HTFX'),
(6, 'Joko', 'Jl. Mangga Dua No 3 Genteng Wetan,  Kec Genteng', '089675435267', 'Jokokendir@gmail.com', 'jokoihh', 'jokoduluu'),
(7, 'Dinda', 'Jl. Kudus No 7 Gunungsari, Kec Grujukan', '085676453789', 'Dindaaini@gmail.com', 'Dindaa', 'Dindaaini'),
(15, 'Tahta Nimas Putri Rahayu', 'Jl. Raya Kediri Nganjuk, Tarokan, Tarokan, Kediri', '085331216544', 'tahtanimas02@gmail.com', 'tahta_nimas', 'asdf'),
(16, 'Tahta Nimas Putri Rahayu', 'Jl. Raya Kediri Nganjuk, Tarokan, Tarokan, Kediri', '085331216544', 'tahtanimas02@gmail.com', 'tahtanm', 'asdf'),
(17, 'Tahta Nimas Putri Rahayu', 'Jl. Raya Kediri Nganjuk, Tarokan, Tarokan, Kediri', '085331216544', 'tahtanimas02@gmail.com', 'turaturuu_', 'asdf');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pemilik`
--

CREATE TABLE `pemilik` (
  `id_pemilik` int(11) NOT NULL,
  `nama_lengkap` varchar(100) NOT NULL,
  `alamat` varchar(150) NOT NULL,
  `no_hp` varchar(12) NOT NULL,
  `email` varchar(50) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pemilik`
--

INSERT INTO `pemilik` (`id_pemilik`, `nama_lengkap`, `alamat`, `no_hp`, `email`, `username`, `password`) VALUES
(1, 'Bagus Furqon', 'Desa Dukuh, RT03/RW05, Wuluhan, Jember', '081234345457', 'bagusAlfurqon02@gmail.com', 'gudangBenih1', 'gudangBenih1'),
(2, 'Dienisa Amalia', 'Desa Dukuh, RT03/RW05, Wuluhan, Jember', '081249789679', 'dienisAmalia07@gmail.com', 'gudangBenih2', 'dhiens07'),
(3, 'asdas', 'adasda', '1312312312', 'asadas@gmail.com', 'admin', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`id_barang`);

--
-- Indeks untuk tabel `detail`
--
ALTER TABLE `detail`
  ADD UNIQUE KEY `id_detail` (`id_detail`);

--
-- Indeks untuk tabel `keranjang`
--
ALTER TABLE `keranjang`
  ADD UNIQUE KEY `id_keranjang` (`id_keranjang`);

--
-- Indeks untuk tabel `konfirmasi`
--
ALTER TABLE `konfirmasi`
  ADD UNIQUE KEY `id_konfirmasi` (`id_konfirmasi`);

--
-- Indeks untuk tabel `metode_pembayaran`
--
ALTER TABLE `metode_pembayaran`
  ADD UNIQUE KEY `id_metode` (`id_metode`);

--
-- Indeks untuk tabel `ongkir`
--
ALTER TABLE `ongkir`
  ADD PRIMARY KEY (`id_ongkir`);

--
-- Indeks untuk tabel `pegawai`
--
ALTER TABLE `pegawai`
  ADD PRIMARY KEY (`id_pegawai`);

--
-- Indeks untuk tabel `pelanggan`
--
ALTER TABLE `pelanggan`
  ADD PRIMARY KEY (`id_pelanggan`);

--
-- Indeks untuk tabel `pemilik`
--
ALTER TABLE `pemilik`
  ADD PRIMARY KEY (`id_pemilik`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `barang`
--
ALTER TABLE `barang`
  MODIFY `id_barang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT untuk tabel `detail`
--
ALTER TABLE `detail`
  MODIFY `id_detail` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=201;

--
-- AUTO_INCREMENT untuk tabel `keranjang`
--
ALTER TABLE `keranjang`
  MODIFY `id_keranjang` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=165;

--
-- AUTO_INCREMENT untuk tabel `konfirmasi`
--
ALTER TABLE `konfirmasi`
  MODIFY `id_konfirmasi` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT untuk tabel `metode_pembayaran`
--
ALTER TABLE `metode_pembayaran`
  MODIFY `id_metode` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `ongkir`
--
ALTER TABLE `ongkir`
  MODIFY `id_ongkir` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT untuk tabel `pegawai`
--
ALTER TABLE `pegawai`
  MODIFY `id_pegawai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT untuk tabel `pelanggan`
--
ALTER TABLE `pelanggan`
  MODIFY `id_pelanggan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT untuk tabel `pemilik`
--
ALTER TABLE `pemilik`
  MODIFY `id_pemilik` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
