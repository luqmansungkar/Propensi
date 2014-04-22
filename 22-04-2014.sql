-- phpMyAdmin SQL Dump
-- version 4.1.6
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 22, 2014 at 11:48 AM
-- Server version: 5.6.16
-- PHP Version: 5.5.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `sikats`
--

-- --------------------------------------------------------

--
-- Table structure for table `donasi`
--

CREATE TABLE IF NOT EXISTS `donasi` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `ID_Donatur` int(11) NOT NULL,
  `Tanggal` date NOT NULL,
  `Nominal` double NOT NULL,
  `Jenis` varchar(50) NOT NULL,
  `Status` varchar(50) NOT NULL,
  `Tgl_konfirm` date NOT NULL DEFAULT '0000-00-00',
  `Link_bukti` varchar(50) NOT NULL,
  `Tgl_transfer` date NOT NULL DEFAULT '0000-00-00',
  PRIMARY KEY (`ID`),
  KEY `ID_Donatur` (`ID_Donatur`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 COMMENT='Tabel ini akan menyimpan data donasi dari muzakki' AUTO_INCREMENT=13 ;

--
-- Dumping data for table `donasi`
--

INSERT INTO `donasi` (`ID`, `ID_Donatur`, `Tanggal`, `Nominal`, `Jenis`, `Status`, `Tgl_konfirm`, `Link_bukti`, `Tgl_transfer`) VALUES
(1, 1, '2014-04-20', 500000, '1', '1', '2014-04-20', 'qda', '2014-04-20'),
(5, 5, '2014-04-20', 455000, '4', '1', '0000-00-00', '', '0000-00-00'),
(6, 11, '2014-04-20', 1000000, '7', '1', '0000-00-00', '', '0000-00-00'),
(7, 1, '2014-04-20', 5000000, '6', '1', '0000-00-00', '', '0000-00-00'),
(8, 11, '2014-04-20', 5000000, '6', '1', '0000-00-00', '', '0000-00-00'),
(9, 15, '2014-04-21', 500000, '3', '1', '0000-00-00', '', '0000-00-00'),
(10, 11, '2014-04-21', 7, '2', '1', '0000-00-00', '', '0000-00-00'),
(11, 11, '2014-04-21', 10000000, '1', '1', '0000-00-00', '', '0000-00-00'),
(12, 11, '2014-04-21', 10000000, '1', '1', '0000-00-00', '', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `history`
--

CREATE TABLE IF NOT EXISTS `history` (
  `ID_History` int(11) NOT NULL AUTO_INCREMENT,
  `Tgl_konfirm` date NOT NULL,
  `ID_Transaksi` int(11) NOT NULL,
  `Link_bukti` varchar(50) NOT NULL,
  `Status` varchar(20) NOT NULL,
  `Tgl_transfer` date NOT NULL,
  PRIMARY KEY (`ID_History`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `jenisdonasi`
--

CREATE TABLE IF NOT EXISTS `jenisdonasi` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `tipe` varchar(20) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `jenisdonasi`
--

INSERT INTO `jenisdonasi` (`ID`, `tipe`) VALUES
(1, 'Zakat Maal'),
(2, 'Zakat Profesi'),
(3, 'Zakat Fitrah'),
(4, 'Infaq Yatim'),
(5, 'Infaq Dunia Islam'),
(6, 'Infaq Beasiswa'),
(7, 'Shadaqah');

-- --------------------------------------------------------

--
-- Table structure for table `konfirmasi`
--

CREATE TABLE IF NOT EXISTS `konfirmasi` (
  `ID_Karyawan` int(11) NOT NULL,
  `ID_Donasi` int(11) NOT NULL,
  `ID_History` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pembayaran`
--

CREATE TABLE IF NOT EXISTS `pembayaran` (
  `ID_Pinjaman` int(11) NOT NULL,
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Tanggal` date NOT NULL,
  `Jumlah` double NOT NULL,
  `Cicilan ke-` int(11) NOT NULL,
  PRIMARY KEY (`ID`),
  KEY `ID_Pinjaman` (`ID_Pinjaman`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='Tabel ini menyimpan data riwayat pembayaran pinjaman yang dipinjam dari Yayasan ' AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `peminjam`
--

CREATE TABLE IF NOT EXISTS `peminjam` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Email` varchar(50) NOT NULL,
  `Jenis_Kelamin` varchar(20) NOT NULL,
  `Username` varchar(50) NOT NULL,
  `Nama` varchar(50) NOT NULL,
  `Alamat` varchar(80) NOT NULL,
  `NoHP` varchar(20) NOT NULL,
  `TglLahir` date NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 COMMENT='Tabel ini menyimpan data peminjam yang meminjam di Yayasan ZAKAT SUKSES' AUTO_INCREMENT=3 ;

--
-- Dumping data for table `peminjam`
--

INSERT INTO `peminjam` (`ID`, `Email`, `Jenis_Kelamin`, `Username`, `Nama`, `Alamat`, `NoHP`, `TglLahir`) VALUES
(1, 'tuki.@ye.m', 'F', 'tukiyem', 'tukiyem', 'gang kramat', '080989999', '1991-11-11'),
(2, 'pemin@ja.m', 'M', 'peminjam', 'peminjam', 'alamat', '080989999', '2014-04-21');

-- --------------------------------------------------------

--
-- Table structure for table `pinjaman`
--

CREATE TABLE IF NOT EXISTS `pinjaman` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `ID_Peminjam` int(11) NOT NULL,
  `Tanggal` date NOT NULL,
  `Jumlah` double NOT NULL,
  PRIMARY KEY (`ID`),
  KEY `ID_Peminjam` (`ID_Peminjam`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 COMMENT='Tabel ini menyimpan data pinjaman yang dipinjam dari Yayasan ZAKAT SUKSES' AUTO_INCREMENT=2 ;

--
-- Dumping data for table `pinjaman`
--

INSERT INTO `pinjaman` (`ID`, `ID_Peminjam`, `Tanggal`, `Jumlah`) VALUES
(1, 1, '2014-04-21', 1500000);

-- --------------------------------------------------------

--
-- Table structure for table `status`
--

CREATE TABLE IF NOT EXISTS `status` (
  `ID` int(11) NOT NULL,
  `Keterangan` varchar(30) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='Tabel ini akan berhubungan dengan  status yang ada di tabel HISTORY, berfungsi u';

--
-- Dumping data for table `status`
--

INSERT INTO `status` (`ID`, `Keterangan`) VALUES
(1, 'unconfirmed'),
(2, 'accepted'),
(3, 'rejected');

-- --------------------------------------------------------

--
-- Table structure for table `tipe`
--

CREATE TABLE IF NOT EXISTS `tipe` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tipe`
--

INSERT INTO `tipe` (`id`, `nama`) VALUES
(1, 'admin'),
(2, 'staff'),
(3, 'direktur'),
(4, 'donatur');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `ID` bigint(20) NOT NULL AUTO_INCREMENT,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `nohp` varchar(20) NOT NULL,
  `tanggalLahir` date NOT NULL,
  `alamat` varchar(80) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `tipe` int(11) NOT NULL,
  PRIMARY KEY (`ID`),
  KEY `tipe` (`tipe`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`ID`, `email`, `password`, `nohp`, `tanggalLahir`, `alamat`, `nama`, `username`, `tipe`) VALUES
(1, 'loekmansungkar@gmail.com', '85ea32ffad83eb3373e1bd696f2f4cf2', '08997495377', '1992-08-12', 'Taman Titian Indah', 'Luqman Sungkar', 'loekmansungkar', 1),
(5, 'joni@email.com', '653ab9994ac9b5dd972c247358309483', '080989999', '2014-03-23', 'rumah', 'joni', 'jonini', 1),
(6, 'jojon@jojon.com', 'a2cd7274579a94ca6f30d4d38c047b20', '080989999', '2014-03-13', 'depok', 'jojon', 'jojojon', 1),
(7, 'fsdfsdf@asda.com', '653ab9994ac9b5dd972c247358309483', '080989999', '1111-11-11', 'alamat', 'rifki', 'rifki', 1),
(8, 'haha@haha.com', 'b6287392ea18e48c6288839cc0111608', '080989999', '2014-03-30', 'rumah', 'dodi', 'jambulete', 2),
(9, 'email@email.com', '798f3e691177072a06d687521f788260', '13123123', '2014-04-13', '1231231', 'woakakakak', 'woak', 3),
(11, 'admin@cokelatcantik.com', '653ab9994ac9b5dd972c247358309483', '123123', '1992-08-12', 'bekasi', 'luqman', 'loekman', 1),
(12, 'a@a.com', 'b82b6c323bbe92686fdebc0344f64a87', '231238098', '1992-12-08', 'asda', 'bukanAdmin', 'nAdmin', 3),
(14, 'admin@cokelatcantik.com', 'bdaa5f5f2a6e16265b412f67af26da4e', '2312313', '2014-04-20', 'alamt', 'bejo', 'bejo', 4),
(15, 'admin@cokelatcantik.com', '8da808d504e090bdf57be2dd4a688035', '080989999', '2014-04-21', 'alamat', 'donatur', 'donatur', 4),
(16, 'david@ss.com', '8958e6ec084e1969b3601bead5b8263a', '1234567890', '1993-07-10', 'kober', 'david', 'davids', 4),
(17, 'admin@cokelatcantik.com', '653ab9994ac9b5dd972c247358309483', '12109120', '2014-04-21', 'rumah', 'staff', 'staff', 2),
(18, 'dewi@gmail.com', 'ea7834a2e801217755e484be41d3c393', '123456', '2014-04-24', 'rumah', 'dewi', 'dewi', 4);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`tipe`) REFERENCES `tipe` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
