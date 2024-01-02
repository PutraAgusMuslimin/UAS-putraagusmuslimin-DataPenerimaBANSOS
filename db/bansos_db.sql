-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 02 Jan 2024 pada 05.14
-- Versi server: 10.4.32-MariaDB
-- Versi PHP: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bansos_db`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `akun`
--

CREATE TABLE `akun` (
  `id_akun` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `level` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `akun`
--

INSERT INTO `akun` (`id_akun`, `nama`, `username`, `email`, `password`, `level`) VALUES
(1, 'Agus', 'ketua', 'putra@gmail.com', '$2y$10$Auu7pJAE3pyDYqJHltiwGuoCzFD6Gt7axEh9yPLC1K0gh2RvWpG4C', '2'),
(4, 'putra agus muslimin', 'admin', 'admin@gmail.com', '$2y$10$jRF/P0b.pWjyhqny.0GgO.RcvWkFehxBrx9erxe/TxriegYfjrV7G', '1'),
(5, 'Muslimin', 'staf', 'staf@gmail.com', '$2y$10$7STehgJa.oIO6PDTmVqUFuFrks0PKBuR2JwGSHZVZSxUUCZYIVaRe', '3');

-- --------------------------------------------------------

--
-- Struktur dari tabel `barang`
--

CREATE TABLE `barang` (
  `id_barang` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `stok` varchar(100) NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `barang`
--

INSERT INTO `barang` (`id_barang`, `nama`, `stok`, `tanggal`) VALUES
(1, 'Beras', '1 Ton', '2023-12-25 08:59:36'),
(2, 'Minyak', '50 Liter', '2023-12-25 09:53:46'),
(6, 'Gula', '20 kilo', '2024-01-01 10:42:23'),
(7, 'Tepung', '50 kilo', '2024-01-01 10:45:08'),
(8, 'Telur', '30 pck', '2024-01-01 10:50:00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_bansos`
--

CREATE TABLE `data_bansos` (
  `id_bansos` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `jk` enum('Laki-laki','Perempuan','','') NOT NULL,
  `telepon` varchar(25) NOT NULL,
  `email` varchar(50) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `golongan` enum('Kurang mampu','Lansia','Pelajar','') NOT NULL,
  `pekerjaan` varchar(100) NOT NULL,
  `gambar` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `data_bansos`
--

INSERT INTO `data_bansos` (`id_bansos`, `nama`, `jk`, `telepon`, `email`, `tanggal_lahir`, `alamat`, `golongan`, `pekerjaan`, `gambar`) VALUES
(8, 'Ahmad Firdaus', 'Laki-laki', '0867483763', 'daus@gmail.com', '2005-06-12', 'jambi', 'Pelajar', 'Mahasiswa', '6592992c0aab0.jpg'),
(9, 'Siti Jubaidah', 'Perempuan', '08747637688', 'siti@gmail.com', '1979-09-12', 'Jambi', 'Lansia', 'Ibu Rumah Tangga', '65929ab00bee9.jpg'),
(10, 'Muhammad Paryono', 'Laki-laki', '0875874635', 'paryon@gmail.com', '1989-06-12', 'Jambi', 'Kurang mampu', 'Sopir', '65929b2958a35.jpg'),
(11, 'Abdul Panjaitan', 'Laki-laki', '0819913383', 'bedul@gmail.com', '1999-08-12', 'Mendalo', 'Kurang mampu', 'Petani', '65929d75c88f9.jpg'),
(12, 'Sumiati', 'Perempuan', '08281739122', 'miati@gmail.com', '1993-09-20', 'Sungai duren', 'Kurang mampu', 'Ibu Rumah Tangga', '65929e49881e0.jpg'),
(13, 'Ahmad Saroji', 'Laki-laki', '0874349439244', 'roji@gmail.com', '1992-04-12', 'Jambi', 'Lansia', 'Sopir', '659380b803bca.jpeg');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `akun`
--
ALTER TABLE `akun`
  ADD PRIMARY KEY (`id_akun`);

--
-- Indeks untuk tabel `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`id_barang`);

--
-- Indeks untuk tabel `data_bansos`
--
ALTER TABLE `data_bansos`
  ADD PRIMARY KEY (`id_bansos`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `akun`
--
ALTER TABLE `akun`
  MODIFY `id_akun` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `barang`
--
ALTER TABLE `barang`
  MODIFY `id_barang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `data_bansos`
--
ALTER TABLE `data_bansos`
  MODIFY `id_bansos` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
