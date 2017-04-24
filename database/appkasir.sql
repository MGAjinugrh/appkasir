-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 24, 2017 at 07:45 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.5.37

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `appkasir`
--

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE `barang` (
  `kdbarang` varchar(11) NOT NULL,
  `nmbarang` varchar(20) DEFAULT NULL,
  `hgjual` decimal(15,0) DEFAULT NULL,
  `pajak` decimal(15,0) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`kdbarang`, `nmbarang`, `hgjual`, `pajak`) VALUES
('009895', 'Buku Tulis', '6300', '803'),
('018739', 'Envelope Air Mail', '9609', '471'),
('023074', 'Sampul Ckt Kcl', '5000', '642'),
('034923', 'Pensil rhoncus', '2000', '631'),
('055434', 'Buku Big Boss', '6000', '310'),
('093318', 'Plastic Bag', '0', '340'),
('098592', 'Rautan Fstr', '4000', '991'),
('103232', 'Penggaris 36', '5400', '136'),
('113007', 'Pilot c6', '4000', '751'),
('114320', 'Pkt USBN', '11000', '874'),
('412312', 'Erlangga UN 3 SMK', '54000', '1000');

-- --------------------------------------------------------

--
-- Table structure for table `pegawai`
--

CREATE TABLE `pegawai` (
  `id` varchar(11) NOT NULL,
  `password` varchar(50) NOT NULL,
  `nama` varchar(25) DEFAULT NULL,
  `notelp` varchar(15) DEFAULT NULL,
  `alamat` text,
  `jabatan` char(1) NOT NULL,
  `status` char(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pegawai`
--

INSERT INTO `pegawai` (`id`, `password`, `nama`, `notelp`, `alamat`, `jabatan`, `status`) VALUES
('00692709939', '123', 'Darry', '083943161767', 'P.O. Box 422, 1185 Ac St.', '2', '0'),
('01777759014', '123', 'Sacha', '086391533368', 'P.O. Box 972, 1637 Nunc Rd.', '2', '1'),
('11111111111', '123', 'Admin', '999999999999', 'Anywhere', '1', '1'),
('12312312312', '123', 'Guruh', '087171728612', 'Puri 3', '2', '1'),
('32143214321', '123', 'Anggi', '0872916371826', 'Margonda Raya', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `penjualan`
--

CREATE TABLE `penjualan` (
  `nmrpenjualan` varchar(21) NOT NULL,
  `kdtransaksi` varchar(21) NOT NULL,
  `kdbrg` varchar(11) NOT NULL,
  `idpegawai` varchar(11) NOT NULL,
  `jmlbrg` int(11) DEFAULT NULL,
  `hgtotal` decimal(15,2) DEFAULT NULL,
  `tglpenjualan` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `penjualan`
--

INSERT INTO `penjualan` (`nmrpenjualan`, `kdtransaksi`, `kdbrg`, `idpegawai`, `jmlbrg`, `hgtotal`, `tglpenjualan`) VALUES
('1111704231335491', '111-17/04/23-13:35:49', '055434', '11111111111', 1, '6310.00', '2017-04-23 16:59:54'),
('1111704231335492', '111-17/04/23-13:35:49', '103232', '11111111111', 1, '5536.00', '2017-04-23 16:59:54'),
('1111704231335493', '111-17/04/23-13:35:49', '009895', '11111111111', 1, '7103.00', '2017-04-23 16:59:54'),
('1111704232036111', '111-17/04/23-20:36:11', '018739', '11111111111', 1, '10080.00', '2017-04-23 20:37:45'),
('1111704232036112', '111-17/04/23-20:36:11', '093318', '11111111111', 1, '340.00', '2017-04-23 20:37:45'),
('1111704232036113', '111-17/04/23-20:36:11', '103232', '11111111111', 1, '5536.00', '2017-04-23 20:37:46'),
('1111704232036114', '111-17/04/23-20:36:11', '114320', '11111111111', 1, '11874.00', '2017-04-23 20:37:46'),
('1111704232121101', '111-17/04/23-21:21:10', '018739', '11111111111', 2, '20160.00', '2017-04-23 21:21:37'),
('1111704232121102', '111-17/04/23-21:21:10', '098592', '11111111111', 1, '4991.00', '2017-04-23 21:21:37'),
('1111704232121103', '111-17/04/23-21:21:10', '113007', '11111111111', 1, '4751.00', '2017-04-23 21:21:37'),
('1111704232121104', '111-17/04/23-21:21:10', '093318', '11111111111', 1, '340.00', '2017-04-23 21:21:38'),
('1111704240701541', '111-17/04/24-07:01:54', '009895', '11111111111', 1, '7103.00', '2017-04-24 07:02:55'),
('1111704240701542', '111-17/04/24-07:01:54', '098592', '11111111111', 1, '4991.00', '2017-04-24 07:02:55'),
('1111704240701543', '111-17/04/24-07:01:54', '114320', '11111111111', 1, '11874.00', '2017-04-24 07:02:55'),
('1111704240701544', '111-17/04/24-07:01:54', '034923', '11111111111', 1, '2631.00', '2017-04-24 07:02:55'),
('1111704240701545', '111-17/04/24-07:01:54', '093318', '11111111111', 1, '340.00', '2017-04-24 07:02:55'),
('1111704241244181', '111-17/04/24-12:44:18', '103232', '11111111111', 1, '5536.00', '2017-04-24 12:44:36'),
('1111704241244182', '111-17/04/24-12:44:18', '055434', '11111111111', 1, '6310.00', '2017-04-24 12:44:36'),
('1111704241244183', '111-17/04/24-12:44:18', '114320', '11111111111', 1, '11874.00', '2017-04-24 12:44:36');

-- --------------------------------------------------------

--
-- Table structure for table `stok`
--

CREATE TABLE `stok` (
  `id` varchar(11) NOT NULL,
  `kdbarang` varchar(11) DEFAULT NULL,
  `jstokawal` int(11) DEFAULT NULL,
  `jstokupdate` int(11) DEFAULT NULL,
  `tglawal` datetime DEFAULT NULL,
  `tglupdate` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stok`
--

INSERT INTO `stok` (`id`, `kdbarang`, `jstokawal`, `jstokupdate`, `tglawal`, `tglupdate`) VALUES
('00000000001', '009895', 500, 498, '2017-04-11 17:25:09', '2017-04-24 07:02:55'),
('00000000002', '018739', 250, 297, '2017-04-11 16:17:38', '2017-04-23 21:21:37'),
('00000000003', '023074', 350, 450, '2017-04-11 16:17:53', '2017-04-12 04:33:04'),
('00000000004', '034923', 412, 411, '2017-04-11 16:18:16', '2017-04-24 07:02:55'),
('00000000005', '055434', 500, 498, '2017-04-11 16:18:31', '2017-04-24 12:44:35'),
('00000000006', '093318', 999, 996, '2017-04-11 16:18:51', '2017-04-24 07:02:55'),
('00000000007', '098592', 700, 698, '2017-04-11 16:23:18', '2017-04-24 07:02:55'),
('00000000008', '103232', 2000, 1997, '2017-04-11 16:23:30', '2017-04-24 12:44:35'),
('00000000009', '113007', 400, 399, '2017-04-11 16:24:19', '2017-04-23 21:21:37'),
('00000000010', '114320', 300, 297, '2017-04-11 16:24:33', '2017-04-24 12:44:35'),
('00000000011', '412312', 400, 400, '2017-04-11 16:24:42', '2017-04-11 17:32:31');

-- --------------------------------------------------------

--
-- Table structure for table `toko`
--

CREATE TABLE `toko` (
  `NmToko` text,
  `Alamat` text,
  `NoTelp` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `toko`
--

INSERT INTO `toko` (`NmToko`, `Alamat`, `NoTelp`) VALUES
('GUNUNG AGUNG', 'Margo City Lt 1', '021-78871013');

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `kdtransaksi` varchar(21) NOT NULL,
  `totaljml` int(11) NOT NULL,
  `biaya` decimal(15,2) NOT NULL,
  `bayar` decimal(15,2) NOT NULL,
  `kembali` decimal(15,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`kdtransaksi`, `totaljml`, `biaya`, `bayar`, `kembali`) VALUES
('111-17/04/23-13:35:49', 3, '18949.00', '20000.00', '1051.00'),
('111-17/04/23-20:36:11', 4, '27830.00', '30000.00', '2170.00'),
('111-17/04/23-21:21:10', 5, '30242.00', '50000.00', '19758.00'),
('111-17/04/24-07:01:54', 5, '26939.00', '30000.00', '3061.00'),
('111-17/04/24-12:44:18', 3, '23720.00', '30000.00', '6280.00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`kdbarang`);

--
-- Indexes for table `pegawai`
--
ALTER TABLE `pegawai`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `penjualan`
--
ALTER TABLE `penjualan`
  ADD PRIMARY KEY (`nmrpenjualan`);

--
-- Indexes for table `stok`
--
ALTER TABLE `stok`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`kdtransaksi`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
