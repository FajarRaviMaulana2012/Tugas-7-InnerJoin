-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 23 Jun 2021 pada 13.37
-- Versi server: 10.4.19-MariaDB
-- Versi PHP: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fajar_311810757`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `barang`
--

CREATE TABLE `barang` (
  `KODE_BARANG` int(11) NOT NULL,
  `NAMA_BARANG` varchar(50) DEFAULT NULL,
  `HARGA` int(11) DEFAULT NULL,
  `STOK` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `barang`
--

INSERT INTO `barang` (`KODE_BARANG`, `NAMA_BARANG`, `HARGA`, `STOK`) VALUES
(1, 'Premium Plate', 65000, 100),
(2, 'Shortplate', 60000, 100),
(3, 'Chicken Boneles', 35000, 50);

-- --------------------------------------------------------

--
-- Struktur dari tabel `customer`
--

CREATE TABLE `customer` (
  `ID_CUST` int(11) NOT NULL,
  `NAMA_CUST` varchar(40) DEFAULT NULL,
  `ALAMAT_CUST` varchar(40) DEFAULT NULL,
  `NO_TLP` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `customer`
--

INSERT INTO `customer` (`ID_CUST`, `NAMA_CUST`, `ALAMAT_CUST`, `NO_TLP`) VALUES
(101, 'Fajar', 'Cikarang Barat', '081292394421'),
(102, 'Danu', 'Cikarang Utara', '081213983212'),
(103, 'Sabar', 'Cibarusah', '085711238892');

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaksi`
--

CREATE TABLE `transaksi` (
  `ID_TRANSAKSI` int(11) NOT NULL,
  `KODE_BARANG` int(11) DEFAULT NULL,
  `ID_CUST` int(11) DEFAULT NULL,
  `TGL_TRANSAKSI` date DEFAULT NULL,
  `JMLH_BARANG` decimal(8,0) DEFAULT NULL,
  `KETERANGAN` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `transaksi`
--

INSERT INTO `transaksi` (`ID_TRANSAKSI`, `KODE_BARANG`, `ID_CUST`, `TGL_TRANSAKSI`, `JMLH_BARANG`, `KETERANGAN`) VALUES
(701, 1, 101, '2021-05-18', '2', 'Cash'),
(702, 2, 102, '2021-05-20', '2', 'Tempo'),
(703, 3, 103, '2021-05-21', '1', 'Cash');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`KODE_BARANG`);

--
-- Indeks untuk tabel `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`ID_CUST`);

--
-- Indeks untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`ID_TRANSAKSI`),
  ADD KEY `FK_MEMBERIKAN` (`KODE_BARANG`),
  ADD KEY `FK_MELAKUKAN` (`ID_CUST`);

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  ADD CONSTRAINT `FK_MELAKUKAN` FOREIGN KEY (`ID_CUST`) REFERENCES `customer` (`ID_CUST`),
  ADD CONSTRAINT `FK_MEMBERIKAN` FOREIGN KEY (`KODE_BARANG`) REFERENCES `barang` (`KODE_BARANG`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
