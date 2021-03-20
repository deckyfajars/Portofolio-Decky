-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 15 Mar 2021 pada 10.08
-- Versi server: 10.1.32-MariaDB
-- Versi PHP: 5.6.36

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kp`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `hasil`
--

CREATE TABLE `hasil` (
  `id_hasil` int(11) NOT NULL,
  `primer` varchar(5) NOT NULL,
  `panjang` double DEFAULT NULL,
  `kapasitas` int(11) DEFAULT NULL,
  `LME` double DEFAULT NULL,
  `USD` double DEFAULT NULL,
  `diameter` double DEFAULT NULL,
  `tempat` varchar(20) NOT NULL,
  `berat` varchar(20) DEFAULT NULL,
  `profit` varchar(20) DEFAULT NULL,
  `tanggal` timestamp(6) NOT NULL DEFAULT CURRENT_TIMESTAMP(6)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `hasil`
--

INSERT INTO `hasil` (`id_hasil`, `primer`, `panjang`, `kapasitas`, `LME`, `USD`, `diameter`, `tempat`, `berat`, `profit`, `tanggal`) VALUES
(60, 'P.12', 12, 400, 2.6, 12000, 0.4, 'Sukanagara', '0.011 TON', '0.00088 Milyar', '2019-06-18 02:17:38.383156'),
(63, 'P.13', 12, 400, 2.6, 12000, 0.4, 'Sugaranten', '0.011 TON', '0.00088 Milyar', '2019-06-18 02:26:55.136227'),
(67, 'P.14', 12, 4200, 888, 14327, 0.8, 'Ciwidey', '0.452 TON', '15.12376 Milyar', '2019-06-18 06:08:35.695985'),
(69, 'P.15', 12, 400, 12, 14327, 0.6, 'Cikalong Kulok', '0.024 TON', '0.01095 Milyar', '2019-06-18 11:17:50.419047'),
(70, 'P.16', 3194, 600, 2.6418, 14327, 0.6, 'Ciranjang', '9.662 TON', '0.96233 Milyar', '2019-06-18 11:18:04.288238'),
(71, 'P.17', 12, 400, 2.6, 12000, 0.6, 'Kalapaktunggal', '0.024 TON', '0.00199 Milyar', '2019-06-19 02:05:57.762314'),
(72, 'P.18', 3194, 800, 2.70023, 14266, 0.8, 'Cicurug', '22.902 TON', '2.32161 Milyar', '2019-06-19 03:36:10.815149'),
(75, 'P.19', 3194, 1200, 2.6418, 14327, 0.8, 'Cibeber', '34.353 TON', '3.42162 Milyar', '2019-06-19 04:30:18.052858'),
(76, 'P.1', 12, 400, 2.6418, 14327, 0.6, 'Cibeber', '0.024 TON', '0.00241 Milyar', '2019-06-19 04:41:10.323956');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kapasitas`
--

CREATE TABLE `kapasitas` (
  `id_kapasitas` int(5) NOT NULL,
  `nilai_kapasitas` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kapasitas`
--

INSERT INTO `kapasitas` (`id_kapasitas`, `nilai_kapasitas`) VALUES
(1, 100),
(2, 400),
(3, 600),
(4, 1200),
(5, 2200),
(6, 2400),
(7, 4200);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `username` varchar(20) NOT NULL,
  `password` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`username`, `password`) VALUES
('admin', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `hasil`
--
ALTER TABLE `hasil`
  ADD PRIMARY KEY (`id_hasil`);

--
-- Indeks untuk tabel `kapasitas`
--
ALTER TABLE `kapasitas`
  ADD PRIMARY KEY (`id_kapasitas`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `hasil`
--
ALTER TABLE `hasil`
  MODIFY `id_hasil` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=77;

--
-- AUTO_INCREMENT untuk tabel `kapasitas`
--
ALTER TABLE `kapasitas`
  MODIFY `id_kapasitas` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
