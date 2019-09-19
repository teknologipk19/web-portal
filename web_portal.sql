-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 15 Sep 2019 pada 17.39
-- Versi server: 10.1.37-MariaDB
-- Versi PHP: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `web_portal`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `id_admin` int(11) NOT NULL,
  `username` varchar(40) NOT NULL,
  `nama_lengkap` varchar(25) NOT NULL,
  `email` varchar(40) NOT NULL,
  `password` varchar(100) NOT NULL,
  `notelepon` varchar(20) NOT NULL,
  `hak_akses` varchar(15) NOT NULL,
  `status` enum('0','1') NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_admin`
--

INSERT INTO `tbl_admin` (`id_admin`, `username`, `nama_lengkap`, `email`, `password`, `notelepon`, `hak_akses`, `status`, `tanggal`) VALUES
(1, 'admin', 'Dhymas Nanda Yusuf', 'dhymasnandayusuf@gmail.com', '938d8014cfbcd00942c7eb9add9c4a41', '085925395074', 'Super Admin', '1', '2019-09-09 07:41:00'),
(5, 'Katty', 'Katty Perry', 'kattyperry@gmail.com', '21232f297a57a5a743894a0e4a801fc3', '085925395074', 'Super Admin', '0', '2019-09-10 02:59:25'),
(6, 'Nella', 'Nella Kharisma', 'nellakharisma@yahoo.co.id', '21232f297a57a5a743894a0e4a801fc3', '43758375835835', 'Super Admin', '1', '2019-09-15 12:30:00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_identitaswebsite`
--

CREATE TABLE `tbl_identitaswebsite` (
  `id_identitaswebsite` int(11) NOT NULL,
  `namawebsite` varchar(100) NOT NULL,
  `urlwebsite` varchar(150) NOT NULL,
  `metadeskripsi` varchar(150) NOT NULL,
  `metakeyword` varchar(150) NOT NULL,
  `email` varchar(100) NOT NULL,
  `notelepon` varchar(15) NOT NULL,
  `googlemaps` varchar(300) NOT NULL,
  `norekening` int(25) NOT NULL,
  `gantifavicon` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_masterdataberita`
--

CREATE TABLE `tbl_masterdataberita` (
  `id_berita` int(11) NOT NULL,
  `judul_berita` varchar(100) NOT NULL,
  `author` varchar(15) NOT NULL,
  `kategori_berita` varchar(15) NOT NULL,
  `status_publish` varchar(8) NOT NULL,
  `gambar` varchar(250) NOT NULL,
  `isi_berita` text NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_masterdataberita`
--

INSERT INTO `tbl_masterdataberita` (`id_berita`, `judul_berita`, `author`, `kategori_berita`, `status_publish`, `gambar`, `isi_berita`, `tanggal`) VALUES
(9, 'Ada PHK Karyawan, Bagaimana Dampaknya ke Layanan Bukalapak?', 'Steven', 'Sport', 'Ya', 'ab107018dc132cc0b47c91cbdc90f991.jpeg', '<p>jfggdfjgkdgkdjg</p>\r\n', '2019-09-15 04:22:04');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_masterdataiklan`
--

CREATE TABLE `tbl_masterdataiklan` (
  `id_iklan` int(11) NOT NULL,
  `img_iklan` varchar(300) NOT NULL,
  `url_iklan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_masterdataiklan`
--

INSERT INTO `tbl_masterdataiklan` (`id_iklan`, `img_iklan`, `url_iklan`) VALUES
(1, 'Screenshot_(3)1.png', 'https://klikhost.com/perbedaan-ekstensi-gambar-jpg-gif-png-bmp-dan-tiff/'),
(2, 'Screenshot_(4).png', 'https://klikhost.com/perbedaan-ekstensi-gambar-jpg-gif-png-bmp-dan-tiff1234567/'),
(3, 'b9c3029a-68a5-4064-ad54-287cfa8b5948.jpg', 'https://klikhost.com/perbedaan-ekstensi-gambar-jpg-gif-png-bmp-dan-tiff1234567/');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_masterdatakategori`
--

CREATE TABLE `tbl_masterdatakategori` (
  `id_kategoriberita` int(11) NOT NULL,
  `kategori_berita` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_masterdatakategori`
--

INSERT INTO `tbl_masterdatakategori` (`id_kategoriberita`, `kategori_berita`) VALUES
(1, 'Sport'),
(2, 'Pendidikan'),
(3, 'Teknologi'),
(4, 'Otomotif');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indeks untuk tabel `tbl_identitaswebsite`
--
ALTER TABLE `tbl_identitaswebsite`
  ADD PRIMARY KEY (`id_identitaswebsite`);

--
-- Indeks untuk tabel `tbl_masterdataberita`
--
ALTER TABLE `tbl_masterdataberita`
  ADD PRIMARY KEY (`id_berita`);

--
-- Indeks untuk tabel `tbl_masterdataiklan`
--
ALTER TABLE `tbl_masterdataiklan`
  ADD PRIMARY KEY (`id_iklan`);

--
-- Indeks untuk tabel `tbl_masterdatakategori`
--
ALTER TABLE `tbl_masterdatakategori`
  ADD PRIMARY KEY (`id_kategoriberita`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `tbl_identitaswebsite`
--
ALTER TABLE `tbl_identitaswebsite`
  MODIFY `id_identitaswebsite` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tbl_masterdataberita`
--
ALTER TABLE `tbl_masterdataberita`
  MODIFY `id_berita` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `tbl_masterdataiklan`
--
ALTER TABLE `tbl_masterdataiklan`
  MODIFY `id_iklan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `tbl_masterdatakategori`
--
ALTER TABLE `tbl_masterdatakategori`
  MODIFY `id_kategoriberita` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
