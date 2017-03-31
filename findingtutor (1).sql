-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 31, 2017 at 11:06 AM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `findingtutor`
--

-- --------------------------------------------------------

--
-- Table structure for table `history_kriteria`
--

CREATE TABLE IF NOT EXISTS `history_kriteria` (
`id_kriteria` int(11) NOT NULL,
  `username_history` varchar(50) NOT NULL,
  `haripencarian_history` varchar(10) NOT NULL,
  `jam_history` varchar(5) NOT NULL,
  `jktutor_history` varchar(10) NOT NULL,
  `usiatutor_history` varchar(2) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `history_kriteria`
--

INSERT INTO `history_kriteria` (`id_kriteria`, `username_history`, `haripencarian_history`, `jam_history`, `jktutor_history`, `usiatutor_history`) VALUES
(4, 'naufal', 'Selasa', '12:15', 'Laki-laki', '21'),
(5, 'kentang', 'Kamis', '00:15', 'Laki-laki', '22'),
(6, 'kentang', 'Kamis', '00:15', 'Laki-laki', '22'),
(7, 'kentang', 'Selasa', '08:58', 'Laki-laki', '22'),
(8, 'kentang', 'Selasa', '00:25', 'Laki-laki', '22');

-- --------------------------------------------------------

--
-- Table structure for table `history_transaksi`
--

CREATE TABLE IF NOT EXISTS `history_transaksi` (
`id_historytransaksi` int(11) NOT NULL,
  `id_pencariantutor` int(11) NOT NULL,
  `username_tutor` varchar(50) NOT NULL,
  `rating_tutor` varchar(3) NOT NULL,
  `komentar_tutor` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `history_transaksi`
--

INSERT INTO `history_transaksi` (`id_historytransaksi`, `id_pencariantutor`, `username_tutor`, `rating_tutor`, `komentar_tutor`) VALUES
(2, 33, 'r_adhita', '4', 'Bagus'),
(3, 38, 'lino', '4', 'Bagus');

-- --------------------------------------------------------

--
-- Table structure for table `keahlian_tutor`
--

CREATE TABLE IF NOT EXISTS `keahlian_tutor` (
`id_keahlian` int(11) NOT NULL,
  `username_keahlian` varchar(50) NOT NULL,
  `kelas_keahlian` varchar(5) NOT NULL,
  `pelajaran_keahlian` varchar(25) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `keahlian_tutor`
--

INSERT INTO `keahlian_tutor` (`id_keahlian`, `username_keahlian`, `kelas_keahlian`, `pelajaran_keahlian`) VALUES
(7, 'lino', 'SMP', 'matematika'),
(8, 'r_adhita', 'SD', 'fisika'),
(9, 'lino', 'SD', 'bilogi'),
(10, 'coba', 'SD', 'Matematika'),
(11, 'r_adhita', 'UMUM', 'Php'),
(12, 'r_adhita', 'SMA', 'Olahraga'),
(13, 'r_adhita', 'SD', 'Coba'),
(14, 'r_adhita', 'SD', 'fjj'),
(15, 'r_adhita', 'SD', 'ghj'),
(16, 'r_adhita', 'SD', 'fjj'),
(17, 'r_adhita', 'SD', 'fhk'),
(18, 'r_adhita', 'SD', 'fjkk'),
(19, 'r_adhita', 'SD', 'fjo'),
(20, 'r_adhita', 'SD', 'ggg'),
(21, 'r_adhita', 'SD', 'fhj'),
(22, 'r_adhita', 'SD', 'fhji'),
(23, 'r_adhita', 'SD', 'gjk'),
(24, 'r_adhita', 'SD', 'gjj'),
(25, 'r_adhita', 'SD', 'Kimia'),
(26, 'r_adhita', 'SD', 'bilogi'),
(27, 'r_adhita', 'SMA', 'Lili'),
(28, 'r_adhita', 'SD', 'Kimak'),
(29, 'r_adhita', 'SMA', 'bilogi'),
(30, 'r_adhita', 'SMA', 'Bioogi');

-- --------------------------------------------------------

--
-- Table structure for table `ketersediaan_hari`
--

CREATE TABLE IF NOT EXISTS `ketersediaan_hari` (
  `hari_tutor` varchar(10) NOT NULL,
  `username_tutor` varchar(50) NOT NULL,
`id_ketersediaan` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=53 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ketersediaan_hari`
--

INSERT INTO `ketersediaan_hari` (`hari_tutor`, `username_tutor`, `id_ketersediaan`) VALUES
('NULL', 'kentang', 49),
('Senin', 'r_adhita', 50),
('Rabu', 'r_adhita', 51),
('Jumat', 'r_adhita', 52);

-- --------------------------------------------------------

--
-- Table structure for table `list_hari`
--

CREATE TABLE IF NOT EXISTS `list_hari` (
  `id_hari` int(11) NOT NULL,
  `hari` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `list_hari`
--

INSERT INTO `list_hari` (`id_hari`, `hari`) VALUES
(1, 'Minggu'),
(2, 'Senin'),
(3, 'Selasa'),
(4, 'Rabu'),
(5, 'Kamis'),
(6, 'Jumat'),
(7, 'Sabtu');

-- --------------------------------------------------------

--
-- Table structure for table `pencarian_tutor`
--

CREATE TABLE IF NOT EXISTS `pencarian_tutor` (
`id_pencarian` int(11) NOT NULL,
  `username_pencarian` varchar(50) NOT NULL,
  `nameuser_pencarian` varchar(50) NOT NULL,
  `kelas_pencarian` varchar(25) NOT NULL,
  `pelajaran_pencarian` varchar(25) NOT NULL,
  `alamat_pencarian` text NOT NULL,
  `tanggal_pencarian` varchar(15) NOT NULL,
  `hari_pencarian` varchar(10) NOT NULL,
  `jam_pencarian` varchar(5) NOT NULL,
  `durasi_pencarian` int(11) NOT NULL,
  `jktutor_pencarian` varchar(10) NOT NULL,
  `usiatutor_pencarian` varchar(2) NOT NULL,
  `biayatutor_pencarian` decimal(10,0) DEFAULT NULL,
  `status_pencarian` varchar(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB AUTO_INCREMENT=42 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pencarian_tutor`
--

INSERT INTO `pencarian_tutor` (`id_pencarian`, `username_pencarian`, `nameuser_pencarian`, `kelas_pencarian`, `pelajaran_pencarian`, `alamat_pencarian`, `tanggal_pencarian`, `hari_pencarian`, `jam_pencarian`, `durasi_pencarian`, `jktutor_pencarian`, `usiatutor_pencarian`, `biayatutor_pencarian`, `status_pencarian`) VALUES
(21, 'kentang', 'Adhita', 'UMUM', 'Biologi', 'Jalan Teknik Kimia', '10/2/2017', 'Jumat', '01:05', 0, 'Laki-laki', '19', NULL, '0'),
(26, 'kentang', 'Adhita Riska', 'UMUM', 'Android', 'Malang', '31/3/2017', 'Senin', '12:13', 2, 'Perempuan', '22', NULL, '0'),
(30, 'kentang', 'Adhita Riska', 'SD - Kelas 2', 'Matematika', 'Keputih Perintis I', '30/3/2017', 'Kamis', '00:01', 90, 'Laki-laki', '25', NULL, '0'),
(31, 'kentang', 'Adhita Riska', 'SMP - Kelas 7', 'bahasa', 'Tunjungan Plaza', '29/2/2017', 'Rabu', '20:30', 60, 'Laki-laki', '25', NULL, '0'),
(32, 'naufal', 'Naufal', 'SD - Kelas 3', 'Lalala', 'Keputih', '28/2/2017', 'Selasa', '12:15', 90, 'Laki-laki', '21', NULL, '0'),
(33, 'kentang', 'Adhita Riska', 'SD - Kelas 2', 'kaka', 'Keputih Perintis I', '30/3/2017', 'Kamis', '22:13', 90, 'Perempuan', '22', NULL, '1'),
(34, 'kentang', 'Adhita Riska', 'SMP - Kelas 7', 'Matematika', 'Teknik Informatika ITS', '2/4/2017', 'Kamis', '15:00', 2, 'Laki-laki', '22', NULL, '0'),
(35, 'kentang', 'Adhita Riska', 'SD - Kelas 1', 'Kkmia', 'Keputih', '31/2/2017', 'Jumat', '12:00', 30, 'Laki-laki', '90', NULL, '0'),
(36, 'kentang', 'Adhita Riska', 'SD - Kelas 1', 'haha', 'Juwana', '31/3/2017', 'Senin', '12:20', 30, 'Laki-laki', '66', NULL, '0'),
(37, 'kentang', 'Adhita Riska', 'SD - Kelas 1', 'Fisika', 'Teknik Industri', '31/3/2017', 'Senin', '16:00', 30, 'Laki-laki', '66', NULL, '0'),
(38, 'kentang', 'Adhita Riska', 'SMP - Kelas 8', 'Matematika', 'Juwana', '25/4/2017', 'Kamis', '00:15', 90, 'Laki-laki', '22', NULL, '0'),
(39, 'kentang', 'Adhita Riska', 'SMP - Kelas 8', 'Matematika', 'Juwana', '25/4/2017', 'Kamis', '00:15', 90, 'Laki-laki', '22', NULL, '0'),
(40, 'kentang', 'Adhita Riska', 'SD - Kelas 1', 'Kimia', 'Juwana Bahari PT Pelayaran Rakyat', '25/3/2017', 'Selasa', '08:58', 30, 'Laki-laki', '22', NULL, '0'),
(41, 'kentang', 'Adhita Riska', 'UMUM', 'lllb', 'Kudus Permata Hotel', '25/4/2017', 'Selasa', '00:25', 90, 'Laki-laki', '22', NULL, '0');

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE IF NOT EXISTS `transaksi` (
`id_transaksi` int(11) NOT NULL,
  `id_pencariantutor` int(11) NOT NULL,
  `username_tutor` varchar(50) NOT NULL,
  `username_murid` varchar(50) NOT NULL,
  `status_transaksi` varchar(2) NOT NULL,
  `durasi_transaksi` int(11) NOT NULL,
  `qr_codes` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`id_transaksi`, `id_pencariantutor`, `username_tutor`, `username_murid`, `status_transaksi`, `durasi_transaksi`, `qr_codes`) VALUES
(18, 34, 'r_adhita', 'kentang', '3', 2, '34-r_adhita'),
(19, 33, 'r_adhita', 'kentang', '0', 90, '33-r_adhita');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
`id_user` int(11) NOT NULL,
  `nama_user` varchar(50) NOT NULL,
  `alamat_user` text NOT NULL,
  `jeniskelamin_user` varchar(10) NOT NULL,
  `usia_user` varchar(2) NOT NULL,
  `telp_user` varchar(12) NOT NULL,
  `email_user` varchar(50) NOT NULL,
  `jenis_user` varchar(8) NOT NULL,
  `username_user` varchar(50) NOT NULL,
  `password_user` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `nama_user`, `alamat_user`, `jeniskelamin_user`, `usia_user`, `telp_user`, `email_user`, `jenis_user`, `username_user`, `password_user`) VALUES
(8, 'Riska Adhita', 'Teknik Informatika ITS', 'Laki-laki', '21', '085640794801', 'risk.adhita@gmail.com', 'Pentutor', 'r_adhita', 'kentang'),
(9, 'Adhita Riska', 'Juwana', 'Laki-laki', '21', '085640794802', 'reizkardhitio@gmail.com', 'Murid', 'kentang', 'kentang'),
(15, 'lino', 'jakarta', 'Laki-laki', '20', '23908664846', 'lino@gmail.com', 'Pentutor', 'lino', 'lino'),
(16, 'Zaza', 'GSM', 'Perempuan', '21', '081357391436', 'alfonza@gmail.com', 'Pentutor', 'jaja', 'jaja123'),
(17, 'Naufal', 'Klaten', 'Laki-laki', '21', '081965879432', 'naufal@gmail.com', 'Murid', 'naufal', 'naufal'),
(18, 'Nay', 'Jakarta', 'Perempuan', '20', '085987645123', 'nay@yahoo.com', 'Murid', 'nay', 'nay'),
(19, 'Nyoman', 'Bekasi', 'Laki-laki', '21', '089654879132', 'nyom@gmail.com', 'Pentutor', 'nyom', 'nyom'),
(20, 'kaka', 'juwana', 'Laki-laki', '21', '086123123123', 'minggu@gmail.com', 'Murid', 'laki', 'laki'),
(21, 'kaka', 'juwana', 'Laki-laki', '21', '086123123123', 'mama@gmail.com', 'Murid', 'mama', 'laki'),
(22, 'laka', 'bsbs', 'Laki-laki', '97', '948400404', 'vava@haha.com', 'Pentutor', 'vV', 'vv'),
(23, 'coba', 'juwana', 'Laki-laki', '21', '08122532163', 'coba@gmail.com', 'Pentutor', 'coba', 'coba'),
(24, 'Kania', 'Jakarta Convention Center', 'Perempuan', '20', '086589746132', 'kania@gmail.com', 'Murid', 'kania', 'kania'),
(25, 'Pande', 'Keputih', 'Laki-laki', '22', '081234567890', 'pande@gmail.com', 'Murid', 'pande', 'pande');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `history_kriteria`
--
ALTER TABLE `history_kriteria`
 ADD PRIMARY KEY (`id_kriteria`);

--
-- Indexes for table `history_transaksi`
--
ALTER TABLE `history_transaksi`
 ADD PRIMARY KEY (`id_historytransaksi`);

--
-- Indexes for table `keahlian_tutor`
--
ALTER TABLE `keahlian_tutor`
 ADD PRIMARY KEY (`id_keahlian`);

--
-- Indexes for table `ketersediaan_hari`
--
ALTER TABLE `ketersediaan_hari`
 ADD PRIMARY KEY (`id_ketersediaan`);

--
-- Indexes for table `list_hari`
--
ALTER TABLE `list_hari`
 ADD PRIMARY KEY (`id_hari`);

--
-- Indexes for table `pencarian_tutor`
--
ALTER TABLE `pencarian_tutor`
 ADD PRIMARY KEY (`id_pencarian`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
 ADD PRIMARY KEY (`id_transaksi`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
 ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `history_kriteria`
--
ALTER TABLE `history_kriteria`
MODIFY `id_kriteria` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `history_transaksi`
--
ALTER TABLE `history_transaksi`
MODIFY `id_historytransaksi` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `keahlian_tutor`
--
ALTER TABLE `keahlian_tutor`
MODIFY `id_keahlian` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=31;
--
-- AUTO_INCREMENT for table `ketersediaan_hari`
--
ALTER TABLE `ketersediaan_hari`
MODIFY `id_ketersediaan` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=53;
--
-- AUTO_INCREMENT for table `pencarian_tutor`
--
ALTER TABLE `pencarian_tutor`
MODIFY `id_pencarian` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=42;
--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
MODIFY `id_transaksi` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=26;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
