-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 15, 2018 at 05:52 AM
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
  `IDADMIN` int(11) NOT NULL,
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
(100001, '8869352', 'Sisworoso', 'sisworoso@smktelkom-mlg.sch.id', 'Laki - laki', 'sisworoso.jpg', 'sisworoso', 'sisworoso', 'Admin'),
(100002, '7543524', 'Rofiqut Thoriq', 'thoriq@smktelkom-mlg.sch.id', 'Laki - laki', 'thoriq.jpg', 'thoriq', 'thoriq', 'Admin'),
(100003, '235352', 'Petugas 1', 'petugas1@smktelkom-mlg.sch.id', 'Laki - laki', 'p1.jpg', 'petugas1', 'petugas1', 'Petugas');

-- --------------------------------------------------------

--
-- Table structure for table `TB_CAPELSIS`
--

CREATE TABLE `TB_CAPELSIS` (
  `IDCAPELSIS` int(11) NOT NULL,
  `IDADMIN` int(11) DEFAULT NULL,
  `IDPELANGGARAN` int(11) DEFAULT NULL,
  `IDSISWA` varchar(255) DEFAULT NULL,
  `STATUS_CAPELSIS` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `TB_PELANGGARAN`
--

CREATE TABLE `TB_PELANGGARAN` (
  `IDPELANGGARAN` int(11) NOT NULL,
  `NAMA_PELANGGARAN` varchar(50) DEFAULT NULL,
  `POINT_PELANGGARAN` int(11) DEFAULT NULL,
  `KATEGORI_PELANGGARAN` varchar(12) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `TB_PELANGGARAN`
--

INSERT INTO `TB_PELANGGARAN` (`IDPELANGGARAN`, `NAMA_PELANGGARAN`, `POINT_PELANGGARAN`, `KATEGORI_PELANGGARAN`) VALUES
(1001, 'Datang Terlambat', 10, 'Ringan');

-- --------------------------------------------------------

--
-- Table structure for table `TB_SISWA`
--

CREATE TABLE `TB_SISWA` (
  `IDSISWA` varchar(255) NOT NULL,
  `OAUTH_PROVIDER` varchar(255) DEFAULT NULL,
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
  ADD KEY `FK_RELATIONSHIP_5` (`IDADMIN`),
  ADD KEY `FK_RELATIONSHIP_4` (`IDPELANGGARAN`);

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
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `TB_ADMIN`
--
ALTER TABLE `TB_ADMIN`
  MODIFY `IDADMIN` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=100004;

--
-- AUTO_INCREMENT for table `TB_CAPELSIS`
--
ALTER TABLE `TB_CAPELSIS`
  MODIFY `IDCAPELSIS` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `TB_PELANGGARAN`
--
ALTER TABLE `TB_PELANGGARAN`
  MODIFY `IDPELANGGARAN` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1002;

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
