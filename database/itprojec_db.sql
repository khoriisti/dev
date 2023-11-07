-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 01, 2023 at 11:04 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `itprojec_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_barang`
--

CREATE TABLE `tb_barang` (
  `kd_barang` int(3) NOT NULL,
  `nama_barang` varchar(30) NOT NULL,
  `deskripsi` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_barang`
--

INSERT INTO `tb_barang` (`kd_barang`, `nama_barang`, `deskripsi`) VALUES
(1, 'Tinta HP 80 A', 'Untuk Printer'),
(2, 'Acer Veriton M481', 'Notebook1');

-- --------------------------------------------------------

--
-- Table structure for table `tb_departemen`
--

CREATE TABLE `tb_departemen` (
  `kd_departemen` int(3) NOT NULL,
  `nama_departemen` varchar(30) NOT NULL,
  `status` varchar(15) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_departemen`
--

INSERT INTO `tb_departemen` (`kd_departemen`, `nama_departemen`, `status`) VALUES
(1, 'IT', 'Aktif'),
(2, 'Accounting', 'Aktif'),
(3, 'Manufacturing', 'Aktif'),
(4, 'PPIC', 'Aktif'),
(5, 'Purchasing', 'Aktif'),
(6, 'Personalia', 'Aktif'),
(7, 'Produksi', 'Aktif'),
(8, 'Maintenance', 'Aktif'),
(9, 'WH RM', 'Aktif'),
(10, 'WH FG', 'Aktif'),
(11, 'QC', 'Aktif'),
(12, 'Sales C1A', 'Aktif'),
(13, 'Sales C1B', 'Aktif'),
(14, 'Sales C2', 'Aktif'),
(15, 'Distribusi', 'Aktif'),
(16, 'WH DC', 'Aktif');

-- --------------------------------------------------------

--
-- Table structure for table `tb_jenis`
--

CREATE TABLE `tb_jenis` (
  `kd_jenis` int(3) NOT NULL,
  `kd_kategori` int(2) NOT NULL,
  `kd_barang` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_jenis`
--

INSERT INTO `tb_jenis` (`kd_jenis`, `kd_kategori`, `kd_barang`) VALUES
(1, 1, 1),
(2, 5, 2);

-- --------------------------------------------------------

--
-- Table structure for table `tb_kategori`
--

CREATE TABLE `tb_kategori` (
  `kd_kategori` int(2) NOT NULL,
  `nama_kategori` varchar(50) NOT NULL,
  `status` varchar(15) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_kategori`
--

INSERT INTO `tb_kategori` (`kd_kategori`, `nama_kategori`, `status`) VALUES
(1, 'Tinta / Toner', 'Aktif'),
(2, 'Hardware', 'Aktif'),
(3, 'Software', 'Aktif'),
(4, 'Networking', 'Aktif'),
(5, 'PC / Notedbook', 'Aktif'),
(6, 'Monitor', 'Aktif');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pembelian`
--

CREATE TABLE `tb_pembelian` (
  `kd_pembelian` int(3) NOT NULL,
  `nomor_pr` varchar(10) NOT NULL,
  `tgl_pembelian` date NOT NULL,
  `periode` int(1) NOT NULL,
  `kd_departemen` int(3) NOT NULL,
  `nm_departemen` varchar(30) NOT NULL,
  `kd_barang` int(3) NOT NULL,
  `nm_barang` varchar(30) NOT NULL,
  `keterangan` varchar(15) NOT NULL,
  `qty` int(3) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_peminjaman`
--

CREATE TABLE `tb_peminjaman` (
  `kd_peminjaman` int(3) NOT NULL,
  `tgl_pinjam` date NOT NULL,
  `tgl_kembali` date NOT NULL,
  `kd_barang` int(3) NOT NULL,
  `nm_barang` varchar(30) NOT NULL,
  `keterangan` varchar(50) NOT NULL,
  `qty` int(3) NOT NULL,
  `status` varchar(15) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_pengambilan`
--

CREATE TABLE `tb_pengambilan` (
  `kd_pengambilan` int(3) NOT NULL,
  `tgl_ambil` date NOT NULL,
  `periode` varchar(2) NOT NULL,
  `nama_pengambilan` varchar(50) NOT NULL,
  `kd_departemen` int(3) NOT NULL,
  `nm_departemen` varchar(30) NOT NULL,
  `kd_barang` int(3) NOT NULL,
  `nm_barang` varchar(30) NOT NULL,
  `kd_kategori` int(3) NOT NULL,
  `nm_kategori` varchar(30) NOT NULL,
  `qty` int(3) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `userId` int(5) NOT NULL,
  `nama_user` varchar(25) NOT NULL,
  `kd_departemen` int(3) NOT NULL,
  `password` varchar(10) NOT NULL,
  `lvl` varchar(15) NOT NULL,
  `status` varchar(15) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`userId`, `nama_user`, `kd_departemen`, `password`, `lvl`, `status`) VALUES
(1, 'Tutuk Yoga', 1, '159753', 'Administrator', 'Aktif');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_barang`
--
ALTER TABLE `tb_barang`
  ADD PRIMARY KEY (`kd_barang`);

--
-- Indexes for table `tb_departemen`
--
ALTER TABLE `tb_departemen`
  ADD PRIMARY KEY (`kd_departemen`);

--
-- Indexes for table `tb_jenis`
--
ALTER TABLE `tb_jenis`
  ADD PRIMARY KEY (`kd_jenis`);

--
-- Indexes for table `tb_kategori`
--
ALTER TABLE `tb_kategori`
  ADD PRIMARY KEY (`kd_kategori`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`userId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_barang`
--
ALTER TABLE `tb_barang`
  MODIFY `kd_barang` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_departemen`
--
ALTER TABLE `tb_departemen`
  MODIFY `kd_departemen` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `tb_jenis`
--
ALTER TABLE `tb_jenis`
  MODIFY `kd_jenis` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_kategori`
--
ALTER TABLE `tb_kategori`
  MODIFY `kd_kategori` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `userId` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
