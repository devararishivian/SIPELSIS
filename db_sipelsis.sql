-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 16, 2018 at 06:18 AM
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
-- Table structure for table `TB_ABSEN`
--

CREATE TABLE `TB_ABSEN` (
  `IDABSEN` varchar(255) NOT NULL,
  `NOMOR_ABSEN` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `TB_ABSEN`
--

INSERT INTO `TB_ABSEN` (`IDABSEN`, `NOMOR_ABSEN`) VALUES
('NOAB01', 1),
('NOAB02', 2);

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
(100003, '235352', 'Petugas 1', 'petugas1@smktelkom-mlg.sch.id', 'Laki - laki', 'p1.jpg', 'petugas1', 'petugas1', 'Petugas'),
(100004, '23423525114', 'Petugas 2', 'petugas2@smktelkom-mlg.sch.id', 'Perempuan', 'vito.jpg', 'petugas2', 'petugas2', 'Petugas');

-- --------------------------------------------------------

--
-- Table structure for table `TB_CAPELSIS`
--

CREATE TABLE `TB_CAPELSIS` (
  `IDCAPELSIS` int(11) NOT NULL,
  `IDADMIN` int(11) DEFAULT NULL,
  `IDPELANGGARAN` varchar(12) DEFAULT NULL,
  `IDSISWA` varchar(255) DEFAULT NULL,
  `STATUS_CAPELSIS` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `TB_KAPEL`
--

CREATE TABLE `TB_KAPEL` (
  `IDKATEGORI` varchar(255) NOT NULL,
  `KATEGORI_PELANGGARAN` varchar(12) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `TB_KAPEL`
--

INSERT INTO `TB_KAPEL` (`IDKATEGORI`, `KATEGORI_PELANGGARAN`) VALUES
('NOKAPEL01', 'Ringan');

-- --------------------------------------------------------

--
-- Table structure for table `TB_KELAS`
--

CREATE TABLE `TB_KELAS` (
  `IDKELAS` varchar(255) NOT NULL,
  `NAMA_KELAS` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `TB_KELAS`
--

INSERT INTO `TB_KELAS` (`IDKELAS`, `NAMA_KELAS`) VALUES
('IDKELAS01', 'XII RPL 1');

-- --------------------------------------------------------

--
-- Table structure for table `TB_PELANGGARAN`
--

CREATE TABLE `TB_PELANGGARAN` (
  `IDPELANGGARAN` varchar(12) NOT NULL,
  `IDKATEGORI` varchar(255) DEFAULT NULL,
  `NAMA_PELANGGARAN` varchar(50) DEFAULT NULL,
  `POINT_PELANGGARAN` int(11) DEFAULT NULL,
  `KATEGORI_PELANGGARAN` varchar(12) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `TB_PELANGGARAN`
--

INSERT INTO `TB_PELANGGARAN` (`IDPELANGGARAN`, `IDKATEGORI`, `NAMA_PELANGGARAN`, `POINT_PELANGGARAN`, `KATEGORI_PELANGGARAN`) VALUES
('1001', NULL, 'Datang Terlambat', 10, 'Ringan'),
('1002', NULL, 'Atribut Tidak Lengkap', 10, 'Ringan'),
('1003', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `TB_SISWA`
--

CREATE TABLE `TB_SISWA` (
  `IDSISWA` varchar(255) NOT NULL,
  `IDABSEN` varchar(255) DEFAULT NULL,
  `IDKELAS` varchar(255) DEFAULT NULL,
  `OAUTH_PROVIDER` varchar(255) DEFAULT NULL,
  `NIS` varchar(32) DEFAULT NULL,
  `NAMA_SISWA` varchar(255) DEFAULT NULL,
  `EMAIL_SISWA` varchar(255) DEFAULT NULL,
  `JK_SISWA` varchar(255) DEFAULT NULL,
  `JURUSAN` varchar(255) DEFAULT NULL,
  `ANGKATAN` varchar(10) DEFAULT NULL,
  `URL_FOTO_SISWA` varchar(255) DEFAULT NULL,
  `URL_PROFIL_SISWA` varchar(255) DEFAULT NULL,
  `UNAME_SISWA` varchar(32) DEFAULT NULL,
  `PASS_SISWA` varchar(32) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `TB_SISWA`
--

INSERT INTO `TB_SISWA` (`IDSISWA`, `IDABSEN`, `IDKELAS`, `OAUTH_PROVIDER`, `NIS`, `NAMA_SISWA`, `EMAIL_SISWA`, `JK_SISWA`, `JURUSAN`, `ANGKATAN`, `URL_FOTO_SISWA`, `URL_PROFIL_SISWA`, `UNAME_SISWA`, `PASS_SISWA`) VALUES
('100226635222306593612', 'NOAB01', 'IDKELAS01', 'google', '48041523070', 'Qaisha Muhammada Devvara Rishivian', 'qaisha_rishivian_24rpl@student.smktelkom-mlg.sch.id', 'male', 'RPL', '24', 'https://lh4.googleusercontent.com/-7y6-czREqxs/AAAAAAAAAAI/AAAAAAAAAFU/IyD-DWPZxVc/photo.jpg', 'https://plus.google.com/100226635222306593612', 'qaisha_rishivian_24rpl', 'qaisha_rishivian'),
('101177830012522300057', NULL, NULL, 'google', NULL, 'SA\'ADATUL SHOLEHAH', 'saadatul_sholehah_24rpl@student.smktelkom-mlg.sch.id', '', 'RPL', '24', 'https://lh3.googleusercontent.com/-RbR16x9XKOw/AAAAAAAAAAI/AAAAAAAAADA/dcavwthgruk/photo.jpg', '', 'saadatul_sholehah_24rpl', 'saadatul_sholehah'),
('6363633', NULL, NULL, 'google', '41414', 'Mangkurondo Limo', 'mangkuwanito@student.smktelkom-mlg.sch.id', 'female', 'TKJ', '24', 'hgdfasfafa', NULL, 'mangkuwanito', 'mangkuwanito');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `TB_ABSEN`
--
ALTER TABLE `TB_ABSEN`
  ADD PRIMARY KEY (`IDABSEN`);

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
-- Indexes for table `TB_KAPEL`
--
ALTER TABLE `TB_KAPEL`
  ADD PRIMARY KEY (`IDKATEGORI`);

--
-- Indexes for table `TB_KELAS`
--
ALTER TABLE `TB_KELAS`
  ADD PRIMARY KEY (`IDKELAS`);

--
-- Indexes for table `TB_PELANGGARAN`
--
ALTER TABLE `TB_PELANGGARAN`
  ADD PRIMARY KEY (`IDPELANGGARAN`),
  ADD KEY `FK_RELATIONSHIP_8` (`IDKATEGORI`);

--
-- Indexes for table `TB_SISWA`
--
ALTER TABLE `TB_SISWA`
  ADD PRIMARY KEY (`IDSISWA`),
  ADD KEY `FK_RELATIONSHIP_6` (`IDABSEN`),
  ADD KEY `FK_RELATIONSHIP_7` (`IDKELAS`);

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
-- Constraints for dumped tables
--

--
-- Constraints for table `TB_CAPELSIS`
--
ALTER TABLE `TB_CAPELSIS`
  ADD CONSTRAINT `FK_RELATIONSHIP_3` FOREIGN KEY (`IDSISWA`) REFERENCES `TB_SISWA` (`IDSISWA`),
  ADD CONSTRAINT `FK_RELATIONSHIP_5` FOREIGN KEY (`IDADMIN`) REFERENCES `TB_ADMIN` (`IDADMIN`);

--
-- Constraints for table `TB_PELANGGARAN`
--
ALTER TABLE `TB_PELANGGARAN`
  ADD CONSTRAINT `FK_RELATIONSHIP_8` FOREIGN KEY (`IDKATEGORI`) REFERENCES `TB_KAPEL` (`IDKATEGORI`);

--
-- Constraints for table `TB_SISWA`
--
ALTER TABLE `TB_SISWA`
  ADD CONSTRAINT `FK_RELATIONSHIP_6` FOREIGN KEY (`IDABSEN`) REFERENCES `TB_ABSEN` (`IDABSEN`),
  ADD CONSTRAINT `FK_RELATIONSHIP_7` FOREIGN KEY (`IDKELAS`) REFERENCES `TB_KELAS` (`IDKELAS`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
