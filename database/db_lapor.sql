-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 14 Des 2019 pada 17.17
-- Versi server: 10.1.35-MariaDB
-- Versi PHP: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_lapor`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `laporan`
--

CREATE TABLE `laporan` (
  `ID` int(20) NOT NULL,
  `author` varchar(35) NOT NULL,
  `isi` varchar(10240) NOT NULL,
  `kategori` varchar(20) NOT NULL,
  `waktu` datetime NOT NULL,
  `lampiran` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `laporan`
--

INSERT INTO `laporan` (`ID`, `author`, `isi`, `kategori`, `waktu`, `lampiran`) VALUES
(6, 'Proggramer', 'Pada awalnya PHP merupakan singkatan dari Personal Home Page. Sesuai dengan namanya, PHP digunakan untuk membuat website pribadi. Dalam beberapa tahun perkembangannya.', 'staff', '2019-12-14 21:50:53', 'KONSEP_MOL_DAN_PERHITUNGAN_KIMIA_istiistiqomah085.pdf'),
(7, 'Wixsoon', 'Vukan Kutacane adalah ibu kota Kabupaten Aceh Tenggara, Provinsi Aceh, Indonesia. Kutacane merupakan pintu masuk ke Taman Nasional Gunung Leuser dari wilayah Aceh, dapat dicapai lebih kurang 6-8 jam lewat darat melalui Kabupaten Karo dari Medan, Sumatra Utara. 	', 'mahasiswa', '2019-12-14 23:15:19', 'uts2_mtk_20162.pdf'),
(8, 'Anonymous', 'Institut Teknologi Sumatera (disingkat ITERA) adalah sebuah perguruan tinggi negeri yang terdapat di Provinsi Lampung. Lokasinya di antara wilayah Kabupaten Lampung Selatan dengan Kota Bandar Lampung. ITERA didirikan berdasarkan Peraturan Presiden Nomor 124 Tahun 2014 tentang Pendirian Institut Teknologi Sumatra (Lembaran Negara Republik Indonesia Tahun 2014 Nomor 253) yang ditetapkan Presiden Republik Indonesia Dr. H. Susilo Bambang Yudhoyono pada tanggal 6 Oktober 2014 dan diundangkan tanggal 9 Oktober 2014. Walaupun peresmiannya dilaksanakan pada tahun 2014, tetapi Itera sudah memulai kegiatan akademik dengan menerima mahasiswa baru sejak tahun 2012-2013. Selain ITB dan ITS, dengan dibukanya ITERA dan Institut Teknologi Kalimantan, kini pemerintah Indonesia memiliki empat institut teknologi. ', 'infrastruktur', '2019-12-14 23:16:21', 'KONSEP_MOL_DAN_PERHITUNGAN_KIMIA_istiistiqomah0852.pdf');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `laporan`
--
ALTER TABLE `laporan`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `laporan`
--
ALTER TABLE `laporan`
  MODIFY `ID` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
