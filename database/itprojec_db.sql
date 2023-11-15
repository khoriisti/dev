-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 15, 2023 at 04:09 PM
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
-- Table structure for table `tb_ambil`
--

CREATE TABLE `tb_ambil` (
  `kd_ambil` varchar(9) NOT NULL,
  `tgl_ambil` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `nama_ambil` varchar(30) NOT NULL,
  `ambil_barang` int(2) NOT NULL,
  `ambil_total` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_ambil`
--

INSERT INTO `tb_ambil` (`kd_ambil`, `tgl_ambil`, `nama_ambil`, `ambil_barang`, `ambil_total`) VALUES
('BA1023001', '2023-10-26 07:20:11', 'Azza', 2, 4);

-- --------------------------------------------------------

--
-- Table structure for table `tb_ambil_detail`
--

CREATE TABLE `tb_ambil_detail` (
  `kd_ambil` varchar(9) NOT NULL,
  `kd_jenis` varchar(4) NOT NULL,
  `kd_departemen` varchar(3) NOT NULL,
  `stok_ambil` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_ambil_detail`
--

INSERT INTO `tb_ambil_detail` (`kd_ambil`, `kd_jenis`, `kd_departemen`, `stok_ambil`) VALUES
('BA1023001', 'J016', 'D14', 2),
('BA1023001', 'J017', 'D14', 2);

-- --------------------------------------------------------

--
-- Table structure for table `tb_barang`
--

CREATE TABLE `tb_barang` (
  `kd_barang` varchar(4) NOT NULL,
  `nama_barang` varchar(30) NOT NULL,
  `deskripsi` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_barang`
--

INSERT INTO `tb_barang` (`kd_barang`, `nama_barang`, `deskripsi`) VALUES
('B001', 'Tinta HP 80 A Black', 'Untuk Printer'),
('B002', 'Acer Veriton M480', 'Notebook');

-- --------------------------------------------------------

--
-- Table structure for table `tb_datang`
--

CREATE TABLE `tb_datang` (
  `kd_datang` varchar(9) NOT NULL,
  `tgl_datang` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `no_pr` int(30) NOT NULL,
  `datang_barang` int(2) NOT NULL,
  `datang_total` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tb_datang_detail`
--

CREATE TABLE `tb_datang_detail` (
  `kd_datang` varchar(9) NOT NULL,
  `kd_jenis` varchar(4) NOT NULL,
  `kd_departemen` varchar(3) NOT NULL,
  `stok_datang` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tb_departemen`
--

CREATE TABLE `tb_departemen` (
  `kd_departemen` varchar(3) NOT NULL,
  `nama_departemen` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_departemen`
--

INSERT INTO `tb_departemen` (`kd_departemen`, `nama_departemen`) VALUES
('D01', 'IT'),
('D02', 'Accounting'),
('D03', 'Manufacturing'),
('D04', 'PPIC'),
('D05', 'Purchasing'),
('D06', 'Personalia'),
('D07', 'Produksi'),
('D08', 'Maintenance'),
('D09', 'WH RM'),
('D10', 'WH FG'),
('D11', 'QC'),
('D12', 'Sales C1A'),
('D13', 'Sales C1B'),
('D14', 'Sales C2'),
('D15', 'Distribusi'),
('D16', 'WH DC');

-- --------------------------------------------------------

--
-- Table structure for table `tb_jenis`
--

CREATE TABLE `tb_jenis` (
  `kd_jenis` varchar(4) CHARACTER SET latin1 NOT NULL,
  `kd_kategori` varchar(3) CHARACTER SET latin1 NOT NULL,
  `kd_barang` varchar(4) CHARACTER SET latin1 NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_jenis`
--

INSERT INTO `tb_jenis` (`kd_jenis`, `kd_kategori`, `kd_barang`) VALUES
('J001', 'K01', 'B001'),
('J002', 'K05', 'B002');

-- --------------------------------------------------------

--
-- Table structure for table `tb_kategori`
--

CREATE TABLE `tb_kategori` (
  `kd_kategori` varchar(3) NOT NULL,
  `nama_kategori` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_kategori`
--

INSERT INTO `tb_kategori` (`kd_kategori`, `nama_kategori`) VALUES
('K01', 'Tinta / Toner'),
('K02', 'Hardware'),
('K03', 'Software'),
('K04', 'Networking'),
('K05', 'PC / Notedbook'),
('K06', 'Monitor');

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
-- Indexes for table `tb_ambil`
--
ALTER TABLE `tb_ambil`
  ADD PRIMARY KEY (`kd_ambil`);

--
-- Indexes for table `tb_barang`
--
ALTER TABLE `tb_barang`
  ADD PRIMARY KEY (`kd_barang`);

--
-- Indexes for table `tb_datang`
--
ALTER TABLE `tb_datang`
  ADD PRIMARY KEY (`kd_datang`);

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
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `userId` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
