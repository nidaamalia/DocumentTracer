-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 19 Nov 2016 pada 23.38
-- Versi Server: 10.1.9-MariaDB
-- PHP Version: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `document_tracer_db`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `akun`
--

CREATE TABLE `akun` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `username` varchar(10) NOT NULL,
  `password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `dokumen_masuk`
--

CREATE TABLE `dokumen_masuk` (
  `id` int(11) NOT NULL,
  `no_surat` varchar(50) NOT NULL,
  `masuk_dari` varchar(50) NOT NULL,
  `tanggal_surat` date NOT NULL,
  `perihal` varchar(150) NOT NULL,
  `tanggal_terima` date NOT NULL,
  `keluar_ekspedisi` date NOT NULL,
  `pemberi_disposisi` varchar(20) NOT NULL,
  `tindak_lanjut` tinyint(1) NOT NULL,
  `keluar_perwakilan` date NOT NULL,
  `disposisi_divisi` varchar(10) NOT NULL,
  `arahan` varchar(300) NOT NULL,
  `keluar_grup` date NOT NULL,
  `keluar_divisi` date NOT NULL,
  `pelaksana` varchar(10) NOT NULL,
  `batas` date NOT NULL,
  `referensi` varchar(50) NOT NULL,
  `tanggal_penyelesaian` date NOT NULL,
  `status` tinyint(1) NOT NULL,
  `hyperlink` varchar(70) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `dokumen_masuk`
--

INSERT INTO `dokumen_masuk` (`id`, `no_surat`, `masuk_dari`, `tanggal_surat`, `perihal`, `tanggal_terima`, `keluar_ekspedisi`, `pemberi_disposisi`, `tindak_lanjut`, `keluar_perwakilan`, `disposisi_divisi`, `arahan`, `keluar_grup`, `keluar_divisi`, `pelaksana`, `batas`, `referensi`, `tanggal_penyelesaian`, `status`, `hyperlink`) VALUES
(1, 'PJT/01/11/15/2016', 'Pemprov Jawa Timur', '2016-11-14', 'Permintaan Data Penyaluran Kredit Perbankan di Jatim', '2016-11-17', '2016-11-17', 'Kepala Perwakilan', 1, '2016-11-17', 'DAEK', 'Untuk diselesaikan sesuai ketentuan yang berlaku', '2016-11-17', '2016-11-18', 'FDSEK', '2016-11-25', '18/1/DAEK/Sb/B', '2016-11-27', 1, ''),
(2, 'PJT/02/11/15/2016', 'Gubernur Jawa Tengah', '2016-11-15', 'Data Kredit Perbankan di Jatim', '2016-11-18', '2016-11-18', 'Kepala Perwakilan', 1, '2016-11-18', 'DAEK', 'Untuk diselesaikan sesuai ketentuan yang berlaku', '2016-11-18', '2016-11-19', 'FDSEK', '2016-11-26', '18/1/DAEK/Sb/B', '2016-11-28', 1, '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `akun`
--
ALTER TABLE `akun`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dokumen_masuk`
--
ALTER TABLE `dokumen_masuk`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `akun`
--
ALTER TABLE `akun`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `dokumen_masuk`
--
ALTER TABLE `dokumen_masuk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

/*21/11/2016*/
ALTER TABLE `akun` ADD `role` VARCHAR(100) NOT NULL AFTER `password`;