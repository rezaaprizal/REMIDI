-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 30 Jul 2020 pada 01.55
-- Versi server: 10.4.8-MariaDB
-- Versi PHP: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `uas_ganjill`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel_gajil`
--

CREATE TABLE `tabel_gajil` (
  `id_039` int(11) NOT NULL,
  `nim_039` varchar(10) NOT NULL,
  `nama_039` varchar(50) NOT NULL,
  `alamat_039` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tabel_gajil`
--

INSERT INTO `tabel_gajil` (`id_039`, `nim_039`, `nama_039`, `alamat_039`) VALUES
(12, '12', 'ihsan', 'kediri'),
(13, '1810330033', 'subhan', 'gebang'),
(14, '1810330066', 'rehan', 'mekaki'),
(16, '1810330035', 'izomi', 'narmada'),
(17, '1810330031', 'sabrina', 'kekalek'),
(18, '1810330012', 'intan', 'puyung'),
(19, '1810330039', 'reza', 'gerung'),
(20, '1810330015', 'rara', 'jakem'),
(21, 'rere', 'sasa', 'Alamat'),
(22, '12121', 'sasa', 'Alamat'),
(23, '039', 'reza', 'Alamat'),
(25, '123', 'bcbc', 'Alamat'),
(26, '123', 'bcbc', 'Alamat'),
(27, '033', 'arlan', 'kekalek');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tabel_gajil`
--
ALTER TABLE `tabel_gajil`
  ADD PRIMARY KEY (`id_039`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tabel_gajil`
--
ALTER TABLE `tabel_gajil`
  MODIFY `id_039` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
