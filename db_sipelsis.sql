-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 14, 2018 at 07:25 AM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 5.6.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_sipelsis`
--

-- --------------------------------------------------------

--
-- Table structure for table `TB_ADMIN`
--

CREATE TABLE `TB_ADMIN` (
  `IDADMIN` varchar(255) NOT NULL,
  `NIP` varchar(32) DEFAULT NULL,
  `NAMA_ADMIN` varchar(255) DEFAULT NULL,
  `EMAIL_ADMIN` varchar(255) DEFAULT NULL,
  `JK_ADMIN` varchar(20) DEFAULT NULL,
  `FOTO_ADMIN` text,
  `UNAME_ADMIN` varchar(32) DEFAULT NULL,
  `PASS_ADMIN` varchar(32) DEFAULT NULL,
  `ROLE` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `TB_ADMIN`
--

INSERT INTO `TB_ADMIN` (`IDADMIN`, `NIP`, `NAMA_ADMIN`, `EMAIL_ADMIN`, `JK_ADMIN`, `FOTO_ADMIN`, `UNAME_ADMIN`, `PASS_ADMIN`, `ROLE`) VALUES
('3436462', '53625363', 'Petugas 1', 'petugas1@smktelkom-mlg.sch.id', 'male', 'petugas1', 'petugas', 'petugas', 'Petugas'),
('345234243', '52513414', 'Admin 2', 'admin2@smktelkom-mlg.sch.id', 'male', 'aw3w32.png', 'admin2', 'admin2', 'Admin'),
('657879342', '65342324', 'Admin 1', 'admin@smktelkom-mlg.sch.id', 'male', 'aw3w3.png', 'admin', 'admin', 'Admin');

-- --------------------------------------------------------

--
-- Table structure for table `TB_CAPELSIS`
--

CREATE TABLE `TB_CAPELSIS` (
  `IDCAPELSIS` varchar(12) NOT NULL,
  `IDADMIN` varchar(255) DEFAULT NULL,
  `IDPELANGGARAN` varchar(12) DEFAULT NULL,
  `IDSISWA` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `TB_PELANGGARAN`
--

CREATE TABLE `TB_PELANGGARAN` (
  `IDPELANGGARAN` varchar(12) NOT NULL,
  `NAMA_PELANGGARAN` varchar(50) DEFAULT NULL,
  `POINT_PELANGGARAN` int(11) DEFAULT NULL,
  `KATEGORI_PELANGGARAN` varchar(12) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `TB_SISWA`
--

CREATE TABLE `TB_SISWA` (
  `IDSISWA` varchar(255) NOT NULL,
  `OAUTH_PROVIDER` varchar(255) DEFAULT NULL,
  `OAUTH_UID` varchar(255) DEFAULT NULL,
  `NIS` varchar(32) DEFAULT NULL,
  `NAMA_SISWA` varchar(255) DEFAULT NULL,
  `EMAIL_SISWA` varchar(255) DEFAULT NULL,
  `JK_SISWA` varchar(255) DEFAULT NULL,
  `JURUSAN` varchar(255) DEFAULT NULL,
  `ANGKATAN` varchar(10) DEFAULT NULL,
  `KELAS_SISWA` varchar(10) DEFAULT NULL,
  `NOABSEN_SISWA` int(11) DEFAULT NULL,
  `URL_FOTO_SISWA` varchar(255) DEFAULT NULL,
  `URL_PROFIL_SISWA` varchar(255) DEFAULT NULL,
  `UNAME_SISWA` varchar(32) DEFAULT NULL,
  `PASS_SISWA` varchar(32) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `TB_SISWA`
--

INSERT INTO `TB_SISWA` (`IDSISWA`, `OAUTH_PROVIDER`, `OAUTH_UID`, `NIS`, `NAMA_SISWA`, `EMAIL_SISWA`, `JK_SISWA`, `JURUSAN`, `ANGKATAN`, `KELAS_SISWA`, `NOABSEN_SISWA`, `URL_FOTO_SISWA`, `URL_PROFIL_SISWA`, `UNAME_SISWA`, `PASS_SISWA`) VALUES
('100226635222306593612', 'google', NULL, NULL, 'Qaisha Muhammada Devvara Rishivian', 'qaisha_rishivian_24rpl@student.smktelkom-mlg.sch.id', 'male', 'RPL', '24', NULL, NULL, 'https://lh4.googleusercontent.com/-7y6-czREqxs/AAAAAAAAAAI/AAAAAAAAAFU/IyD-DWPZxVc/photo.jpg', 'https://plus.google.com/100226635222306593612', 'qaisha_rishivian_24rpl', 'qaisha_rishivian'),
('101177830012522300057', 'google', NULL, NULL, 'SA\'ADATUL SHOLEHAH', 'saadatul_sholehah_24rpl@student.smktelkom-mlg.sch.id', '', 'RPL', '24', NULL, NULL, 'https://lh3.googleusercontent.com/-RbR16x9XKOw/AAAAAAAAAAI/AAAAAAAAADA/dcavwthgruk/photo.jpg', '', 'saadatul_sholehah_24rpl', 'saadatul_sholehah');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `TB_ADMIN`
--
ALTER TABLE `TB_ADMIN`
  ADD PRIMARY KEY (`IDADMIN`);

--
-- Indexes for table `TB_CAPELSIS`
--
ALTER TABLE `TB_CAPELSIS`
  ADD PRIMARY KEY (`IDCAPELSIS`),
  ADD KEY `FK_RELATIONSHIP_3` (`IDSISWA`),
  ADD KEY `FK_RELATIONSHIP_4` (`IDPELANGGARAN`),
  ADD KEY `FK_RELATIONSHIP_5` (`IDADMIN`);

--
-- Indexes for table `TB_PELANGGARAN`
--
ALTER TABLE `TB_PELANGGARAN`
  ADD PRIMARY KEY (`IDPELANGGARAN`);

--
-- Indexes for table `TB_SISWA`
--
ALTER TABLE `TB_SISWA`
  ADD PRIMARY KEY (`IDSISWA`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `TB_CAPELSIS`
--
ALTER TABLE `TB_CAPELSIS`
  ADD CONSTRAINT `FK_RELATIONSHIP_3` FOREIGN KEY (`IDSISWA`) REFERENCES `TB_SISWA` (`IDSISWA`),
  ADD CONSTRAINT `FK_RELATIONSHIP_4` FOREIGN KEY (`IDPELANGGARAN`) REFERENCES `TB_PELANGGARAN` (`IDPELANGGARAN`),
  ADD CONSTRAINT `FK_RELATIONSHIP_5` FOREIGN KEY (`IDADMIN`) REFERENCES `TB_ADMIN` (`IDADMIN`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
