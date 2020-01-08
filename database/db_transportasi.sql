-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 08, 2020 at 09:43 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_transportasi`
--

-- --------------------------------------------------------

--
-- Table structure for table `jam`
--

CREATE TABLE `jam` (
  `id_jam` int(11) NOT NULL,
  `mobil` int(11) NOT NULL,
  `jam` varchar(191) NOT NULL,
  `harga` varchar(191) NOT NULL,
  `tujuan` varchar(191) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jam`
--

INSERT INTO `jam` (`id_jam`, `mobil`, `jam`, `harga`, `tujuan`) VALUES
(1, 1, '08.00 - 09.00', '160000', 'Padang - Sarolangun'),
(2, 2, '10.00 - 11.00', '180000', 'Padang - Bangko'),
(3, 3, '13.00 - 14.00', '140000', 'Padang - Muaro Bungo');

-- --------------------------------------------------------

--
-- Table structure for table `kursi`
--

CREATE TABLE `kursi` (
  `id_kursi` int(11) NOT NULL,
  `no_kursi` int(11) NOT NULL,
  `class` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kursi`
--

INSERT INTO `kursi` (`id_kursi`, `no_kursi`, `class`) VALUES
(1, 1, 'a'),
(2, 2, 'b'),
(3, 3, 'c'),
(4, 4, 'd'),
(5, 5, 'e'),
(6, 6, 'f'),
(7, 7, 'g');

-- --------------------------------------------------------

--
-- Table structure for table `mobil`
--

CREATE TABLE `mobil` (
  `id_mobil` int(11) NOT NULL,
  `plat` varchar(40) NOT NULL,
  `mobil` varchar(191) NOT NULL,
  `id_rute` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mobil`
--

INSERT INTO `mobil` (`id_mobil`, `plat`, `mobil`, `id_rute`) VALUES
(1, 'BA 1245 JQ', 'Avanza', 1),
(2, 'BA 9987 BI', 'Phanter', 2),
(3, 'BA 5423 QQ', 'Ertiga', 3);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `id_admin` int(11) NOT NULL,
  `username` varchar(34) NOT NULL,
  `password` varchar(45) NOT NULL,
  `lat` varchar(191) NOT NULL,
  `lng` varchar(191) NOT NULL,
  `is_aktif` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`id_admin`, `username`, `password`, `lat`, `lng`, `is_aktif`) VALUES
(2, 'admin', 'admin', '-0.9542170999999999', '100.3935625', 0),
(3, 'retno', 'retno', '-0.9541786', '100.3936962', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_histori`
--

CREATE TABLE `tbl_histori` (
  `id_pesan` int(11) NOT NULL,
  `id_rute` int(11) NOT NULL,
  `id_penumpang` int(11) NOT NULL,
  `id_loket` int(11) NOT NULL,
  `no_pesan` varchar(100) NOT NULL,
  `jumlah_pesan` varchar(45) NOT NULL,
  `no_kursi` varchar(100) NOT NULL,
  `tanggal_pesan` date NOT NULL,
  `jumlah_bayar` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_histori`
--

INSERT INTO `tbl_histori` (`id_pesan`, `id_rute`, `id_penumpang`, `id_loket`, `no_pesan`, `jumlah_pesan`, `no_kursi`, `tanggal_pesan`, `jumlah_bayar`) VALUES
(1, 1, 18, 3, 'NP-20191203085752', '1', '1,2', '2019-12-04', 320000),
(2, 1, 18, 3, 'NP-20191203090211', '3', '3,4,5', '2019-12-05', 480000),
(3, 3, 18, 3, 'NP-20191203095633', '6', '1', '2019-12-03', 840000),
(4, 2, 18, 10, 'NP-20191204060812', '3', '1,2,3', '2019-12-04', 540000),
(5, 2, 18, 10, 'NP-20191204061150', '4', '1,2,3,4', '2019-12-18', 720000),
(6, 1, 18, 10, 'NP-20191204081211', '2', '', '2019-12-11', 320000),
(9, 2, 19, 11, 'NP-20191219053826', '1', '1,2', '2019-12-27', 180000),
(10, 1, 19, 11, 'NP-20191219055407', '1', '1', '2019-12-20', 160000),
(11, 3, 19, 11, 'NP-20191219060154', '3', '2,3,5', '2019-12-20', 420000),
(12, 3, 19, 11, 'NP-20191219072515', '2', '1,2', '2019-12-20', 280000),
(16, 1, 19, 11, 'NP-20191220104854', '4', '3,4,6,7', '2019-12-30', 640000),
(19, 3, 19, 11, 'NP-20191221054254', '9', '', '2020-01-01', 1260000),
(21, 1, 21, 11, 'NP-20191224074445', '1', '3', '2019-12-25', 160000),
(22, 1, 20, 8, 'NP-20191224082355', '1', '2', '2019-12-25', 160000),
(23, 2, 20, 8, 'NP-20200104020557', '2', '1,2', '2020-01-05', 360000);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_jadwal`
--

CREATE TABLE `tbl_jadwal` (
  `id_jadwal` int(11) NOT NULL,
  `id_rute` int(11) NOT NULL,
  `id_loket` int(11) NOT NULL,
  `jam` varchar(100) NOT NULL,
  `harga` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_komentar`
--

CREATE TABLE `tbl_komentar` (
  `id_komentar` int(11) NOT NULL,
  `tgl_komentar` date NOT NULL,
  `nama_komentar` varchar(45) NOT NULL,
  `email` varchar(34) NOT NULL,
  `isi` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_komentar`
--

INSERT INTO `tbl_komentar` (`id_komentar`, `tgl_komentar`, `nama_komentar`, `email`, `isi`) VALUES
(7, '2019-09-03', 'Charlie Chaplin', 'agus@gmail.com', 'â€œTidak ada yang abadi di dalam dunia ini, bahkan masalah yang kita hadapi juga tidak.â€'),
(8, '2019-09-03', 'Michael Jordan', 'susenoagus04@gmail.com', 'â€œBeberapa orang mau sesuatu untuk terjadi, beberapa orang lainnya berharap sesuatu untuk terjadi, sementara sebagian lainnya mewujudkan mimpi mereka.â€'),
(9, '2019-09-03', 'Power Of Dreams', 'aldi@gamil.com', '\"Setiap hari adalah waktu yang tepat untuk mengatakan pada diri kita sendiri â€œBiarkan petualangan dimulaiâ€');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_loket`
--

CREATE TABLE `tbl_loket` (
  `id_loket` int(11) NOT NULL,
  `nama_loket` varchar(56) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `latitude` varchar(100) NOT NULL,
  `longitude` varchar(100) NOT NULL,
  `informasi` text NOT NULL,
  `foto_loket` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_loket`
--

INSERT INTO `tbl_loket` (`id_loket`, `nama_loket`, `alamat`, `latitude`, `longitude`, `informasi`, `foto_loket`) VALUES
(8, 'Cv. Sokan Jaya Travel', 'Jl. Raya Padang - Painan, Lubuk Begalung Nan XX, Kec. Lubuk Begalung, Kota Padang, Sumatera Barat', '-0.956757', '100.403292', 'silahkan pesan', 'asokan.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pemesanan`
--

CREATE TABLE `tbl_pemesanan` (
  `id_pesan` int(11) NOT NULL,
  `id_rute` int(11) NOT NULL,
  `id_penumpang` int(11) NOT NULL,
  `id_loket` int(11) NOT NULL,
  `no_pesan` varchar(100) NOT NULL,
  `jumlah_pesan` varchar(45) NOT NULL,
  `tanggal_pesan` date NOT NULL,
  `jumlah_bayar` int(11) NOT NULL,
  `lat` varchar(191) DEFAULT NULL,
  `lng` varchar(191) DEFAULT NULL,
  `jam` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_pemesanan`
--

INSERT INTO `tbl_pemesanan` (`id_pesan`, `id_rute`, `id_penumpang`, `id_loket`, `no_pesan`, `jumlah_pesan`, `tanggal_pesan`, `jumlah_bayar`, `lat`, `lng`, `jam`) VALUES
(1, 1, 18, 8, 'NP-20200108094225', '2', '2020-01-08', 320000, '-0.9361976999999998', '100.3721052', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pemesanan_kursi`
--

CREATE TABLE `tbl_pemesanan_kursi` (
  `id` int(11) NOT NULL,
  `id_pesan` int(11) NOT NULL,
  `no_kursi` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_pemesanan_kursi`
--

INSERT INTO `tbl_pemesanan_kursi` (`id`, `id_pesan`, `no_kursi`) VALUES
(1, 1, 1),
(2, 1, 2);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_penumpang`
--

CREATE TABLE `tbl_penumpang` (
  `id_penumpang` int(11) NOT NULL,
  `tgl_regis` date NOT NULL,
  `username` varchar(34) NOT NULL,
  `password` varchar(34) NOT NULL,
  `nama_penumpang` varchar(34) NOT NULL,
  `no_tlp` int(34) NOT NULL,
  `alamat` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_penumpang`
--

INSERT INTO `tbl_penumpang` (`id_penumpang`, `tgl_regis`, `username`, `password`, `nama_penumpang`, `no_tlp`, `alamat`) VALUES
(18, '2019-09-02', 'maseno', '827ccb0eea8a706c4c34a16891f84e7b', 'Retno Setianto', 123456778, 'Padang'),
(19, '2019-12-19', 'regar', '3f20cc6d2be9ecae136d1a2c7929370e', 'Regar', 812334, 'Ajjshdhd'),
(20, '2019-12-20', 'Jeni', 'e8c9c132d620617aadef4ec5f51afa1d', 'Jeni', 2147483647, 'Jl. Aru indah'),
(21, '2019-12-24', 'J', '202cb962ac59075b964b07152d234b70', 'Je', 2147483647, 'Padang');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_rute`
--

CREATE TABLE `tbl_rute` (
  `id_rute` int(11) NOT NULL,
  `jalur_rute` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_rute`
--

INSERT INTO `tbl_rute` (`id_rute`, `jalur_rute`) VALUES
(1, 'Padang - Sarolangun'),
(2, 'Padang - Bangko'),
(3, 'Padang - Muaro Bungo');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `jam`
--
ALTER TABLE `jam`
  ADD PRIMARY KEY (`id_jam`);

--
-- Indexes for table `kursi`
--
ALTER TABLE `kursi`
  ADD PRIMARY KEY (`id_kursi`);

--
-- Indexes for table `mobil`
--
ALTER TABLE `mobil`
  ADD PRIMARY KEY (`id_mobil`);

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `tbl_histori`
--
ALTER TABLE `tbl_histori`
  ADD PRIMARY KEY (`id_pesan`);

--
-- Indexes for table `tbl_jadwal`
--
ALTER TABLE `tbl_jadwal`
  ADD PRIMARY KEY (`id_jadwal`);

--
-- Indexes for table `tbl_komentar`
--
ALTER TABLE `tbl_komentar`
  ADD PRIMARY KEY (`id_komentar`);

--
-- Indexes for table `tbl_loket`
--
ALTER TABLE `tbl_loket`
  ADD PRIMARY KEY (`id_loket`);

--
-- Indexes for table `tbl_pemesanan`
--
ALTER TABLE `tbl_pemesanan`
  ADD PRIMARY KEY (`id_pesan`);

--
-- Indexes for table `tbl_pemesanan_kursi`
--
ALTER TABLE `tbl_pemesanan_kursi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_penumpang`
--
ALTER TABLE `tbl_penumpang`
  ADD PRIMARY KEY (`id_penumpang`);

--
-- Indexes for table `tbl_rute`
--
ALTER TABLE `tbl_rute`
  ADD PRIMARY KEY (`id_rute`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `jam`
--
ALTER TABLE `jam`
  MODIFY `id_jam` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `kursi`
--
ALTER TABLE `kursi`
  MODIFY `id_kursi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `mobil`
--
ALTER TABLE `mobil`
  MODIFY `id_mobil` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_histori`
--
ALTER TABLE `tbl_histori`
  MODIFY `id_pesan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `tbl_jadwal`
--
ALTER TABLE `tbl_jadwal`
  MODIFY `id_jadwal` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_komentar`
--
ALTER TABLE `tbl_komentar`
  MODIFY `id_komentar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tbl_loket`
--
ALTER TABLE `tbl_loket`
  MODIFY `id_loket` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tbl_pemesanan`
--
ALTER TABLE `tbl_pemesanan`
  MODIFY `id_pesan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_pemesanan_kursi`
--
ALTER TABLE `tbl_pemesanan_kursi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_penumpang`
--
ALTER TABLE `tbl_penumpang`
  MODIFY `id_penumpang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `tbl_rute`
--
ALTER TABLE `tbl_rute`
  MODIFY `id_rute` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
