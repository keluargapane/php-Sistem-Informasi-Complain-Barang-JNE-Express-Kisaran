-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 27, 2020 at 01:23 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbcomplain`
--

-- --------------------------------------------------------

--
-- Table structure for table `arsip_complain`
--

CREATE TABLE `arsip_complain` (
  `no` int(10) NOT NULL,
  `no_resi` varchar(50) NOT NULL,
  `tgl_masuk` date NOT NULL,
  `nama_pengirim` varchar(50) NOT NULL,
  `nama_penerima` varchar(100) NOT NULL,
  `alamat_penerima` varchar(200) NOT NULL,
  `isi_barang` varchar(100) NOT NULL,
  `keterangan` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `arsip_complain`
--

INSERT INTO `arsip_complain` (`no`, `no_resi`, `tgl_masuk`, `nama_pengirim`, `nama_penerima`, `alamat_penerima`, `isi_barang`, `keterangan`) VALUES
(5, 'JNCB-3800836031', '2020-01-24', 'LASTANA EXPRESS IND PT (LAZADA)', 'DIAN MARTIN', 'PT. JASA RAHARJA PERSERO. JL. COKROAMINOTO NO. 115 KISARAN', 'TEKO WINE BAJA ANTI KARAT', 'PAKET PECAH'),
(7, '0103941800002793', '2020-01-24', 'TRI HARTONO', 'M. MUKHLISIN', 'JL. SM RAJA NO. 304 KISARAN KEC. KISARAN BARAT', 'LAPTOP + CHARGER', 'LAPTOP PECAH DIBAGIAN UJUNG BAWAH'),
(8, '011500130707119', '2019-09-28', 'SONIC1010 OFFICIAL SHOP', 'BUDIMAN', 'CV. PANCA PRIMA ABADI, JL. COKROAMINOTO NO. 132 KISARAN BARAT', 'HP', 'ISI PAKET KOSONG'),
(9, '015080068457419', '2019-08-03', 'GREGGY ILCKEN', 'BUDI UTOMO WIJAYA', 'JALAN SISINGAMANGARAJA 142 KISARAN', 'LUKISAN TANPA KACA', 'LUKISAN PATAH DI BAGIAN UJUNG'),
(10, '040160037595319', '2019-10-24', 'QUANTUM CELL', 'ZULFAHRI RIDAMI MARPAUNG', 'JL. PROTOKOL BINJAI SERBANGAN LK. 2 PERUMAHAN FLAMBOYAN NO. B3A', 'ASUS ZENFONE 3', 'ISI PAKET KOSOSNG'),
(11, '171240006857819', '2019-05-24', 'RISMA BEAUTY STORE', 'ANGGI', 'TOKO OBAT SIMAS (SIMPANG REL) MERPATI LK II KEL. GAMBIR BARU', 'KOSMETIK', 'TIDAKK LOLOS XRAY ISI ADA PARFUME');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `username` varchar(30) NOT NULL,
  `level` int(4) NOT NULL,
  `password` varchar(50) NOT NULL,
  `nama_lengkap` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `keterangan` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`username`, `level`, `password`, `nama_lengkap`, `email`, `keterangan`) VALUES
('syafii', 1, '25d55ad283aa400af464c76d713c07ad', 'Muhammad Syafii', 'muhammadsyafii@gmail.com', 'Administrator');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `arsip_complain`
--
ALTER TABLE `arsip_complain`
  ADD PRIMARY KEY (`no`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `arsip_complain`
--
ALTER TABLE `arsip_complain`
  MODIFY `no` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
