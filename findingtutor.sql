-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 09, 2017 at 06:40 PM
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
) ENGINE=InnoDB AUTO_INCREMENT=35 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `history_kriteria`
--

INSERT INTO `history_kriteria` (`id_kriteria`, `username_history`, `haripencarian_history`, `jam_history`, `jktutor_history`, `usiatutor_history`) VALUES
(25, 'cucup', 'Kamis', '00:30', 'Laki-laki', '25'),
(26, 'cucup', 'Kamis', '00:00', 'Laki-laki', '25'),
(27, 'cucup', 'Rabu', '00:00', 'Laki-laki', '25'),
(30, 'kentang', 'Rabu', '13:00', 'Laki-laki', '25'),
(31, 'kentang', 'Kamis', '12:30', 'Laki-laki', '25'),
(32, 'kentang', 'Kamis', '10:55', 'Laki-laki', '25'),
(33, 'kentang', 'Sabtu', '09:00', 'Laki-laki', '25'),
(34, 'kentang', 'Rabu', '13:00', 'Laki-laki', '25');

-- --------------------------------------------------------

--
-- Table structure for table `history_transaksi`
--

CREATE TABLE IF NOT EXISTS `history_transaksi` (
`id_historytransaksi` int(11) NOT NULL,
  `tanggal` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `id_pencariantutor` int(11) NOT NULL,
  `username_tutor` varchar(50) NOT NULL,
  `rating_tutor` varchar(3) NOT NULL DEFAULT '0',
  `komentar_tutor` text
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `history_transaksi`
--

INSERT INTO `history_transaksi` (`id_historytransaksi`, `tanggal`, `id_pencariantutor`, `username_tutor`, `rating_tutor`, `komentar_tutor`) VALUES
(7, '2017-04-04 15:17:27', 58, 'r_adhita', '4.5', 'Bagus'),
(8, '2017-04-09 14:58:12', 60, 'r_adhita', '0', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `keahlian_tutor`
--

CREATE TABLE IF NOT EXISTS `keahlian_tutor` (
`id_keahlian` int(11) NOT NULL,
  `username_keahlian` varchar(50) NOT NULL,
  `kelas_keahlian` varchar(25) NOT NULL,
  `pelajaran_keahlian` varchar(25) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=32 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `keahlian_tutor`
--

INSERT INTO `keahlian_tutor` (`id_keahlian`, `username_keahlian`, `kelas_keahlian`, `pelajaran_keahlian`) VALUES
(7, 'lino', 'SMP', 'matematika'),
(8, 'r_adhita', 'SD', 'fisika'),
(9, 'lino', 'SD', 'bilogi'),
(11, 'r_adhita', 'UMUM', 'Php'),
(31, 'r_adhita', 'SMP -', 'Sejarah');

-- --------------------------------------------------------

--
-- Table structure for table `ketersediaan_hari`
--

CREATE TABLE IF NOT EXISTS `ketersediaan_hari` (
  `hari_tutor` varchar(10) NOT NULL,
  `username_tutor` varchar(50) NOT NULL,
`id_ketersediaan` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=60 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ketersediaan_hari`
--

INSERT INTO `ketersediaan_hari` (`hari_tutor`, `username_tutor`, `id_ketersediaan`) VALUES
('NULL', 'kentang', 49),
('Senin', 'lino', 53),
('Selasa', 'lino', 54),
('Rabu', 'lino', 55),
('Kamis', 'lino', 56),
('Selasa', 'r_adhita', 57),
('Kamis', 'r_adhita', 58),
('Jumat', 'r_adhita', 59);

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
  `biayatutor_pencarian` varchar(10) NOT NULL,
  `status_pencarian` varchar(10) NOT NULL DEFAULT '0',
  `tanggal_transaksi` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=66 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pencarian_tutor`
--

INSERT INTO `pencarian_tutor` (`id_pencarian`, `username_pencarian`, `nameuser_pencarian`, `kelas_pencarian`, `pelajaran_pencarian`, `alamat_pencarian`, `tanggal_pencarian`, `hari_pencarian`, `jam_pencarian`, `durasi_pencarian`, `jktutor_pencarian`, `usiatutor_pencarian`, `biayatutor_pencarian`, `status_pencarian`, `tanggal_transaksi`) VALUES
(55, 'cucup', 'cucup', 'SD - Kelas 1', 'ad', 'Institut Teknologi Sepuluh Nopember', '8/4/2017', 'Sabtu', '21:18', 12, 'Laki-laki', '12', '0', '0', '2017-04-04 14:19:29'),
(56, 'cucup', 'cucup', 'SD - Kelas 1', 'Matematika', 'Teknik Kimia', '6/4/2017', 'Kamis', '00:30', 60, 'Laki-laki', '25', '0', '0', '2017-04-04 14:31:46'),
(57, 'cucup', 'cucup', 'SMP - Kelas 7', 'Olahraga', 'Teknik Kimia', '6/4/2017', 'Kamis', '00:00', 1, 'Laki-laki', '25', '0', '0', '2017-04-04 14:33:29'),
(58, 'cucup', 'cucup', 'SMP - Kelas 7', 'Sejarah', 'Teknik Kimia', '5/4/2017', 'Rabu', '00:00', 2, 'Laki-laki', '25', '60000', '1', '2017-04-04 15:00:59'),
(59, 'kentang', 'Adhita Riska', 'SD - Kelas 1', 'matematika', 'Teknik Informatika ITS', '6/4/2017', 'Kamis', '00:05', 2, 'Laki-laki', '22', '0', '0', '2017-04-05 03:01:55'),
(60, 'kentang', 'Adhita Riska', 'SD - Kelas 1', 'kimia', 'Teknik Elektro ITS', '14/4/2017', 'Jumat', '01:03', 2, 'Laki-laki', '22', '52000', '1', '2017-04-05 03:04:24'),
(61, 'kentang', 'Adhita Riska', 'UMUM', 'Android', 'Teknik Kimia', '12/4/2017', 'Rabu', '13:00', 30, 'Laki-laki', '25', '0', '0', '2017-04-09 15:50:28'),
(62, 'kentang', 'Adhita Riska', 'UMUM', 'Java', 'Teknik Lingkungan', '13/4/2017', 'Kamis', '12:30', 30, 'Laki-laki', '25', '0', '0', '2017-04-09 15:53:27'),
(63, 'kentang', 'Adhita Riska', 'UMUM', 'dota 2', 'Teknik Geomatika, FTSP', '20/4/2017', 'Kamis', '10:55', 30, 'Laki-laki', '25', '61000', '1', '2017-04-09 15:56:08'),
(64, 'kentang', 'Adhita Riska', 'UMUM', 'CS:GO', 'Desain Produk Industri ITS', '15/4/2017', 'Sabtu', '09:00', 90, 'Laki-laki', '25', '0', '0', '2017-04-09 15:57:05'),
(65, 'kentang', 'Adhita Riska', 'SMP - Kelas 7', 'Agama', 'Green Semanggi Mangrove', '12/4/2017', 'Rabu', '13:00', 60, 'Laki-laki', '25', '0', 'cancel', '2017-04-09 16:11:20');

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE IF NOT EXISTS `transaksi` (
`id_transaksi` int(11) NOT NULL,
  `id_pencariantutor` int(11) NOT NULL,
  `username_tutor` varchar(50) NOT NULL,
  `username_murid` varchar(50) NOT NULL,
  `status_transaksi` varchar(10) NOT NULL,
  `durasi_transaksi` int(11) NOT NULL,
  `qr_codes` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=46 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `tanggal_daftar` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
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
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`tanggal_daftar`, `id_user`, `nama_user`, `alamat_user`, `jeniskelamin_user`, `usia_user`, `telp_user`, `email_user`, `jenis_user`, `username_user`, `password_user`) VALUES
('2017-04-03 15:20:06', 8, 'Riska Adhita', 'Teknik Informatika ITS', 'Laki-laki', '21', '085640794801', 'risk.adhita@gmail.com', 'Pentutor', 'r_adhita', 'kentang'),
('2017-04-03 15:20:06', 9, 'Adhita Riska', 'Juwana', 'Laki-laki', '21', '085640794802', 'reizkardhitio@gmail.com', 'Murid', 'kentang', 'kentang'),
('2017-04-03 15:20:06', 15, 'lino', 'jakarta', 'Laki-laki', '20', '23908664846', 'lino@gmail.com', 'Pentutor', 'lino', 'lino'),
('2017-04-03 15:20:06', 16, 'Zaza', 'GSM', 'Perempuan', '21', '081357391436', 'alfonza@gmail.com', 'Pentutor', 'jaja', 'jaja123'),
('2017-04-03 15:20:06', 17, 'Naufal', 'Klaten', 'Laki-laki', '21', '081965879432', 'naufal@gmail.com', 'Murid', 'naufal', 'naufal'),
('2017-04-03 15:20:06', 18, 'Nay', 'Jakarta', 'Perempuan', '20', '085987645123', 'nay@yahoo.com', 'Murid', 'nay', 'nay'),
('2017-04-03 15:20:06', 19, 'Nyoman', 'Bekasi', 'Laki-laki', '21', '089654879132', 'nyom@gmail.com', 'Pentutor', 'nyom', 'nyom'),
('2017-04-03 15:20:06', 20, 'kaka', 'juwana', 'Laki-laki', '21', '086123123123', 'minggu@gmail.com', 'Murid', 'laki', 'laki'),
('2017-04-03 15:20:06', 21, 'kaka', 'juwana', 'Laki-laki', '21', '086123123123', 'mama@gmail.com', 'Murid', 'mama', 'laki'),
('2017-04-03 15:20:06', 22, 'laka', 'bsbs', 'Laki-laki', '97', '948400404', 'vava@haha.com', 'Pentutor', 'vV', 'vv'),
('2017-04-03 15:20:06', 23, 'coba', 'juwana', 'Laki-laki', '21', '08122532163', 'coba@gmail.com', 'Pentutor', 'coba', 'coba'),
('2017-04-03 15:20:06', 24, 'Kania', 'Jakarta Convention Center', 'Perempuan', '20', '086589746132', 'kania@gmail.com', 'Murid', 'kania', 'kania'),
('2017-04-03 15:20:06', 25, 'Pande', 'Keputih', 'Laki-laki', '22', '081234567890', 'pande@gmail.com', 'Murid', 'pande', 'pande'),
('2017-04-04 14:17:11', 26, 'cucup', 'Institut Teknologi Sepuluh Nopember', 'Perempuan', '17', '081234567890', 'cucup@gmail.com', 'Murid', 'cucup', 'cucup');

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
MODIFY `id_kriteria` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=35;
--
-- AUTO_INCREMENT for table `history_transaksi`
--
ALTER TABLE `history_transaksi`
MODIFY `id_historytransaksi` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `keahlian_tutor`
--
ALTER TABLE `keahlian_tutor`
MODIFY `id_keahlian` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=32;
--
-- AUTO_INCREMENT for table `ketersediaan_hari`
--
ALTER TABLE `ketersediaan_hari`
MODIFY `id_ketersediaan` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=60;
--
-- AUTO_INCREMENT for table `pencarian_tutor`
--
ALTER TABLE `pencarian_tutor`
MODIFY `id_pencarian` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=66;
--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
MODIFY `id_transaksi` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=46;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=27;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
