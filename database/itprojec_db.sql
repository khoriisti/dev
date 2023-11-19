-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 19, 2023 at 03:35 PM
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
('B002', 'Acer Veriton M480', 'Notebook'),
('B003', 'Canon 47', 'Untuk Printer'),
('B004', 'Canon 57', 'Untuk Printer'),
('B005', 'Canon 745', 'Untuk Printer'),
('B006', 'Canon 746', 'Untuk Printer'),
('B007', 'Epson LQ2190', 'Untuk Printer'),
('B008', 'Epson LQ311', 'Untuk Printer'),
('B009', 'Extender USB', 'Untuk USB'),
('B010', 'Finger Scan', 'Untuk Mesin Finger'),
('B011', 'HP 107A', 'Untuk Printer'),
('B012', 'HP 17A', 'Untuk Printer'),
('B013', 'HP 285AC/85A', 'Untuk Printer'),
('B014', 'HP 678 Black', 'Untuk Printer'),
('B015', 'HP 678 Color', 'Untuk Printer'),
('B016', 'HP 680 Black', 'Untuk Printer'),
('B017', 'HP 680 Color', 'Untuk Printer'),
('B018', 'HP 682 Black', 'Untuk Printer'),
('B019', 'HP 682 Color', 'Untuk Printer'),
('B020', 'HP 802 Black', 'Untuk Printer'),
('B021', 'HP 803', 'Untuk Printer'),
('B022', 'HP CF226X/26X', 'Untuk Printer'),
('B023', 'HP Laserjet 05A', 'Untuk Printer'),
('B024', 'HP Laserjet 80A/CF280A', 'Untuk Printer'),
('B025', 'Keyboard', 'Untuk PC'),
('B026', 'Microton MCF280A', 'Untuk Printer'),
('B027', 'Microton MCF325', 'Untuk Printer'),
('B028', 'Microton MDP225', 'Untuk Printer'),
('B029', 'Monitor', 'Untuk PC'),
('B030', 'Mouse', 'Untuk PC'),
('B031', 'OTG Dual Drive', 'Untuk USB'),
('B032', 'SSD', 'Untuk PC'),
('B033', 'Switch TP-LINK', 'Untuk Networking'),
('B034', 'Tablet', 'Untuk Tablet'),
('B035', 'UPS', 'Untuk PC');

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
('J002', 'K05', 'B002'),
('J003', 'K01', 'B003'),
('J004', 'K01', 'B004'),
('J005', 'K01', 'B005'),
('J006', 'K01', 'B006'),
('J007', 'K01', 'B007'),
('J008', 'K01', 'B008'),
('J009', 'K06', 'B009'),
('J010', 'K06', 'B010'),
('J011', 'K01', 'B011'),
('J012', 'K01', 'B012'),
('J013', 'K01', 'B013'),
('J014', 'K01', 'B014'),
('J015', 'K01', 'B015'),
('J016', 'K01', 'B016'),
('J017', 'K01', 'B017'),
('J018', 'K01', 'B018'),
('J019', 'K01', 'B019'),
('J020', 'K01', 'B020'),
('J021', 'K01', 'B021'),
('J022', 'K01', 'B022'),
('J023', 'K01', 'B023'),
('J024', 'K01', 'B024'),
('J025', 'K05', 'B025'),
('J026', 'K01', 'B026'),
('J027', 'K01', 'B027'),
('J028', 'K01', 'B028'),
('J029', 'K08', 'B029'),
('J030', 'K05', 'B030'),
('J031', 'K02', 'B031'),
('J032', 'K02', 'B032'),
('J033', 'K04', 'B033'),
('J034', 'K09', 'B034'),
('J035', 'K06', 'B035');

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
-- Table structure for table `tb_stok`
--

CREATE TABLE `tb_stok` (
  `kd_jenis` varchar(4) NOT NULL,
  `stok_minimal` int(2) NOT NULL,
  `stok_awal` int(2) NOT NULL,
  `stok_beli` int(2) NOT NULL,
  `stok_kembali` int(2) NOT NULL,
  `stok_ambil` int(2) NOT NULL,
  `stok_pinjam` int(2) NOT NULL,
  `stok_akhir` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_stok`
--

INSERT INTO `tb_stok` (`kd_jenis`, `stok_minimal`, `stok_awal`, `stok_beli`, `stok_kembali`, `stok_ambil`, `stok_pinjam`, `stok_akhir`) VALUES
('J016', 3, 5, 0, 0, 2, 0, 3),
('J017', 3, 5, 0, 0, 2, 0, 3),
('J024', 3, 5, 3, 0, 0, 0, 8),
('J027', 3, 5, 3, 0, 0, 0, 8),
('J028', 3, 5, 3, 0, 0, 0, 8);

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
-- Indexes for table `tb_stok`
--
ALTER TABLE `tb_stok`
  ADD PRIMARY KEY (`kd_jenis`);

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
