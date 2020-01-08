-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 02 Des 2019 pada 04.41
-- Versi Server: 5.6.20-log
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_transportasi`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_admin`
--

CREATE TABLE IF NOT EXISTS `tbl_admin` (
`id_admin` int(11) NOT NULL,
  `username` varchar(34) NOT NULL,
  `password` varchar(45) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data untuk tabel `tbl_admin`
--

INSERT INTO `tbl_admin` (`id_admin`, `username`, `password`) VALUES
(2, 'admin', '12345'),
(3, 'retno', 'retno');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_histori`
--

CREATE TABLE IF NOT EXISTS `tbl_histori` (
`id_pesan` int(11) NOT NULL,
  `id_rute` int(11) NOT NULL,
  `id_penumpang` int(11) NOT NULL,
  `id_loket` int(11) NOT NULL,
  `no_pesan` varchar(100) NOT NULL,
  `jumlah_pesan` varchar(45) NOT NULL,
  `no_kursi` varchar(100) NOT NULL,
  `tanggal_pesan` date NOT NULL,
  `jumlah_bayar` int(11) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data untuk tabel `tbl_histori`
--

INSERT INTO `tbl_histori` (`id_pesan`, `id_rute`, `id_penumpang`, `id_loket`, `no_pesan`, `jumlah_pesan`, `no_kursi`, `tanggal_pesan`, `jumlah_bayar`) VALUES
(1, 3, 18, 1, 'NP-20190902111608', '2', '1,2', '2019-09-02', 500000),
(2, 6, 18, 3, 'NP-20190902111728', '4', '1,2,9,10', '2019-09-03', 1800000),
(3, 3, 18, 6, 'NP-20191130051257', '2', '1,2', '2019-11-30', 500000),
(4, 3, 18, 6, 'NP-20191130051558', '3', '1,2,3', '2019-11-18', 750000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_jadwal`
--

CREATE TABLE IF NOT EXISTS `tbl_jadwal` (
`id_jadwal` int(11) NOT NULL,
  `id_rute` int(11) NOT NULL,
  `id_loket` int(11) NOT NULL,
  `jam` varchar(100) NOT NULL,
  `harga` int(11) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data untuk tabel `tbl_jadwal`
--

INSERT INTO `tbl_jadwal` (`id_jadwal`, `id_rute`, `id_loket`, `jam`, `harga`) VALUES
(5, 1, 1, '06.00-09.00 WIB', 250000),
(6, 3, 1, '10.00-13.00 WIB', 250000),
(7, 4, 1, '13.00-15.00 WIB', 250000),
(8, 6, 2, '10.00-13.00 WIB', 450000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_komentar`
--

CREATE TABLE IF NOT EXISTS `tbl_komentar` (
`id_komentar` int(11) NOT NULL,
  `tgl_komentar` date NOT NULL,
  `nama_komentar` varchar(45) NOT NULL,
  `email` varchar(34) NOT NULL,
  `isi` longtext NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data untuk tabel `tbl_komentar`
--

INSERT INTO `tbl_komentar` (`id_komentar`, `tgl_komentar`, `nama_komentar`, `email`, `isi`) VALUES
(7, '2019-09-03', 'Charlie Chaplin', 'agus@gmail.com', 'â€œTidak ada yang abadi di dalam dunia ini, bahkan masalah yang kita hadapi juga tidak.â€'),
(8, '2019-09-03', 'Michael Jordan', 'susenoagus04@gmail.com', 'â€œBeberapa orang mau sesuatu untuk terjadi, beberapa orang lainnya berharap sesuatu untuk terjadi, sementara sebagian lainnya mewujudkan mimpi mereka.â€'),
(9, '2019-09-03', 'Power Of Dreams', 'aldi@gamil.com', '"Setiap hari adalah waktu yang tepat untuk mengatakan pada diri kita sendiri â€œBiarkan petualangan dimulaiâ€');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_loket`
--

CREATE TABLE IF NOT EXISTS `tbl_loket` (
`id_loket` int(11) NOT NULL,
  `nama_loket` varchar(56) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `latitude` varchar(100) NOT NULL,
  `longitude` varchar(100) NOT NULL,
  `informasi` text NOT NULL,
  `foto_loket` text NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data untuk tabel `tbl_loket`
--

INSERT INTO `tbl_loket` (`id_loket`, `nama_loket`, `alamat`, `latitude`, `longitude`, `informasi`, `foto_loket`) VALUES
(1, 'PT.ALS', 'Dekat  Lubuk Begalung Nan XX, Kec. Lubuk Begalung, Kota Padang', '-0.950499', '100.401047', 'merupakan bus yang mengangkut antar lintas sumatera', '001.png'),
(2, 'PT.Family Raya Cerita Sejati', 'Jalan Raya Padang-Painan lubuk begalung  Nan XX Kota Padang', '-0.950372', '100.400562', 'Merupakan bus antar pulau sumatra dan jawa', '007.png'),
(3, 'PO.Lorena', 'Jln.Padang - Painan Ps. Ambacang Kec. Kuranji Kota Padang', '-0.940436', '100.400182', 'sfdsfsdfsdfsdfsd', '010.png'),
(4, 'PT.Yoanda Prima', 'Jln.By Pass No.KM 7, Ps Ambacang', '-0.934809', '100.399166', 'gfgdfgdfgdfgdfgdfg', '007.png'),
(5, 'PT.Kurnia Anugrah', 'Ps.Ambacang Kec Kuranji Kota Padang', '-0.932004', '100.398973', 'dassdfsdfdsfsdfsdfsdf', '012.png'),
(6, 'PO.Grand Epa', 'Pasar Ambacang, Kuraji Kota Padang', '-0.926673', '100.398391', 'ssfsdfsdfsdfsdfsdfds', '011.png'),
(7, 'PO.Putra Pelangi', 'Pasar Ambacang Kecamatan Kuranji Kota Padang', '-0.926452', '100.398203', 'scgsfgfdgdfgdf', '011.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_pemesanan`
--

CREATE TABLE IF NOT EXISTS `tbl_pemesanan` (
`id_pesan` int(11) NOT NULL,
  `id_rute` int(11) NOT NULL,
  `id_penumpang` int(11) NOT NULL,
  `id_loket` int(11) NOT NULL,
  `no_pesan` varchar(100) NOT NULL,
  `jumlah_pesan` varchar(45) NOT NULL,
  `no_kursi` varchar(100) NOT NULL,
  `tanggal_pesan` date NOT NULL,
  `jumlah_bayar` int(11) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data untuk tabel `tbl_pemesanan`
--

INSERT INTO `tbl_pemesanan` (`id_pesan`, `id_rute`, `id_penumpang`, `id_loket`, `no_pesan`, `jumlah_pesan`, `no_kursi`, `tanggal_pesan`, `jumlah_bayar`) VALUES
(1, 3, 18, 1, 'NP-20190902111608', '2', '1,2', '2019-09-02', 500000),
(2, 6, 18, 3, 'NP-20190902111728', '4', '1,2,9,10', '2019-09-03', 1800000),
(3, 3, 18, 6, 'NP-20191130051257', '2', '1,2', '2019-11-30', 500000),
(4, 3, 18, 6, 'NP-20191130051558', '3', '1,2,3', '2019-11-18', 750000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_penumpang`
--

CREATE TABLE IF NOT EXISTS `tbl_penumpang` (
`id_penumpang` int(11) NOT NULL,
  `tgl_regis` date NOT NULL,
  `username` varchar(34) NOT NULL,
  `password` varchar(34) NOT NULL,
  `nama_penumpang` varchar(34) NOT NULL,
  `no_tlp` int(34) NOT NULL,
  `alamat` varchar(100) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

--
-- Dumping data untuk tabel `tbl_penumpang`
--

INSERT INTO `tbl_penumpang` (`id_penumpang`, `tgl_regis`, `username`, `password`, `nama_penumpang`, `no_tlp`, `alamat`) VALUES
(18, '2019-09-02', 'maseno', '827ccb0eea8a706c4c34a16891f84e7b', 'Retno Setianto', 123456778, 'Padang');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_rute`
--

CREATE TABLE IF NOT EXISTS `tbl_rute` (
`id_rute` int(11) NOT NULL,
  `jalur_rute` varchar(100) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data untuk tabel `tbl_rute`
--

INSERT INTO `tbl_rute` (`id_rute`, `jalur_rute`) VALUES
(1, 'Padang-Jakarta'),
(3, 'Padang-Medan'),
(4, 'Padang-Pekanbaru'),
(5, 'Padang-Jambi'),
(6, 'Padang-Surabaya');

--
-- Indexes for dumped tables
--

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
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tbl_histori`
--
ALTER TABLE `tbl_histori`
MODIFY `id_pesan` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tbl_jadwal`
--
ALTER TABLE `tbl_jadwal`
MODIFY `id_jadwal` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `tbl_komentar`
--
ALTER TABLE `tbl_komentar`
MODIFY `id_komentar` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `tbl_loket`
--
ALTER TABLE `tbl_loket`
MODIFY `id_loket` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `tbl_pemesanan`
--
ALTER TABLE `tbl_pemesanan`
MODIFY `id_pesan` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tbl_penumpang`
--
ALTER TABLE `tbl_penumpang`
MODIFY `id_penumpang` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `tbl_rute`
--
ALTER TABLE `tbl_rute`
MODIFY `id_rute` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
