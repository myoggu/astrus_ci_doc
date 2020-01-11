-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 11 Jan 2020 pada 07.03
-- Versi Server: 10.1.26-MariaDB
-- PHP Version: 7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tes_astrus`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel_form`
--

CREATE TABLE `tabel_form` (
  `id_form` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  `address` varchar(128) NOT NULL,
  `post_code` varchar(10) NOT NULL,
  `telephone` varchar(24) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tabel_form`
--

INSERT INTO `tabel_form` (`id_form`, `name`, `address`, `post_code`, `telephone`) VALUES
(1, 'PRABOWO', 'Jl bukirsari', '65141', '0258258258'),
(2, 'JOKO WIDODO', 'Jl kaliurang', '65145', '0123456789'),
(3, 'JOKO WIDODO SUBA ANGKORO', 'Jl. Joyo Agung No.13 Merjosari Malang', '00665', '+0341-333444'),
(4, 'JOKO WIDODO SUBA ANGKORO', 'Jl. Joyo Agung No.13 Merjosari Malang', '00665', '+0341-333444'),
(5, 'JOKO WIDODO SUBA ANGKORO', 'Jl. Joyo Agung No.13 Merjosari Malang', '00665', '+0341-333444123'),
(6, 'JOKO WIDODO SUBA ANGKORO', 'Jl. Joyo Agung No.13 Merjosari Malang', '00665', '+0341-333444123'),
(7, 'JOKO WIDODO SUBA ANGKORO', 'Jl. Joyo Agung No.13 Merjosari Malang', '00665', '+0341-333444'),
(8, 'JOKO WIDODO SUBA ANGKORO', 'Jl. Joyo Agung No.13 Merjosari Malang', '00665', '+0341-333444');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tabel_form`
--
ALTER TABLE `tabel_form`
  ADD PRIMARY KEY (`id_form`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tabel_form`
--
ALTER TABLE `tabel_form`
  MODIFY `id_form` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
