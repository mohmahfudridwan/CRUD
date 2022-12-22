-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 22 Des 2022 pada 05.23
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rsud`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_pasien`
--

CREATE TABLE `data_pasien` (
  `id` int(11) NOT NULL,
  `nama_pasien` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `sakit` varchar(255) NOT NULL,
  `keterangan` enum('Rawat Inap','Periksa') NOT NULL,
  `nohp` varchar(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `data_pasien`
--

INSERT INTO `data_pasien` (`id`, `nama_pasien`, `alamat`, `sakit`, `keterangan`, `nohp`) VALUES
(1, '', '', '', '', '0');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `data_pasien`
--
ALTER TABLE `data_pasien`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `data_pasien`
--
ALTER TABLE `data_pasien`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
