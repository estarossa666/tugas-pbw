-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 29 Apr 2022 pada 00.13
-- Versi server: 10.4.21-MariaDB
-- Versi PHP: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mahasiswa`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `mhs`
--

CREATE TABLE `mhs` (
  `npm` varchar(13) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `asal` varchar(50) NOT NULL,
  `jurusan` varchar(30) NOT NULL,
  `nilai_akhir` decimal(5,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `mhs`
--

INSERT INTO `mhs` (`npm`, `nama`, `asal`, `jurusan`, `nilai_akhir`) VALUES
('2010631170016', 'Roronoa Sanji', 'Bekasi', 'Fisika', '345.63'),
('2010631170023', 'Luffy D', 'West Blue', 'Ilmu Komputer', '360.85'),
('2010631170047', 'Nico Robin', 'Ohara', 'Hukum', '385.45'),
('2010631170058', 'Uzumaki Bayu', 'Konoha', 'Farmasi', '371.56'),
('2010631170076', 'Usop Ajah', 'Wanokuni', 'Kimia', '370.85'),
('2010631170099', 'Nami Suningsih', 'Las Vegas', 'Akuntansi', '398.50');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `mhs`
--
ALTER TABLE `mhs`
  ADD PRIMARY KEY (`npm`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
