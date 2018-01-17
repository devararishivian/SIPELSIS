-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 17, 2018 at 01:01 AM
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
  `NOABSEN` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `TB_ABSEN`
--

INSERT INTO `TB_ABSEN` (`IDABSEN`, `NOABSEN`) VALUES
('NOAB01', 1),
('NOAB02', 2),
('NOAB03', 3),
('NOAB04', 4),
('NOAB05', 5),
('NOAB06', 6),
('NOAB07', 7),
('NOAB08', 8),
('NOAB09', 9),
('NOAB10', 10),
('NOAB11', 11),
('NOAB12', 12),
('NOAB13', 13),
('NOAB14', 14),
('NOAB15', 15),
('NOAB16', 16),
('NOAB17', 17),
('NOAB18', 18),
('NOAB19', 19),
('NOAB20', 20),
('NOAB21', 21),
('NOAB22', 22),
('NOAB23', 23),
('NOAB24', 24),
('NOAB25', 25),
('NOAB26', 26),
('NOAB27', 27),
('NOAB28', 28),
('NOAB29', 29),
('NOAB30', 30),
('NOAB31', 31),
('NOAB32', 32),
('NOAB33', 33),
('NOAB34', 34),
('NOAB35', 35),
('NOAB36', 36),
('NOAB37', 37),
('NOAB38', 38),
('NOAB39', 39),
('NOAB40', 40);

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
(100002, '99999', 'Rofiqut Thoriq', 'thoriq@smktelkom-mlg.sch.id', 'Laki - Laki', 'thoriq8.jpeg', 'thoriq', 'thoriq', 'Admin'),
(100003, '235352', 'Petugas 1', 'petugas1@smktelkom-mlg.sch.id', 'Laki - laki', 'p1.jpg', 'petugas1', 'petugas1', 'Petugas'),
(100004, '111111', 'Petugas 2', 'petugas2@smktelkom-mlg.sch.id', 'Laki - Laki', 'sisworoso1.jpg', 'petugas2', 'petugas2', 'Petugas');

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

--
-- Dumping data for table `TB_CAPELSIS`
--

INSERT INTO `TB_CAPELSIS` (`IDCAPELSIS`, `IDADMIN`, `IDPELANGGARAN`, `IDSISWA`, `STATUS_CAPELSIS`) VALUES
(300001, 100003, 700003, '1231313131', NULL),
(300002, 100003, 700004, '1231313131', NULL),
(300003, 100003, 700004, '1231313131', NULL),
(300004, 100003, 700005, '100226635222306593612', NULL),
(300005, 100003, 700006, '100226635222306593612', NULL);

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
('NOKAPEL01', 'Ringan'),
('NOKAPEL02', 'Sedang'),
('NOKAPEL03', 'Berat');

-- --------------------------------------------------------

--
-- Table structure for table `TB_KELAS`
--

CREATE TABLE `TB_KELAS` (
  `IDKELAS` varchar(255) NOT NULL,
  `KELAS` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `TB_KELAS`
--

INSERT INTO `TB_KELAS` (`IDKELAS`, `KELAS`) VALUES
('IDKELASXIIR1', 'XII RPL 1'),
('IDKELASXIIR2', 'XII RPL 2'),
('IDKELASXIIR3', 'XII RPL 3'),
('IDKELASXIIR4', 'XII RPL 4'),
('IDKELASXIIR5', 'XII RPL 5'),
('IDKELASXIIR6', 'XII RPL 6'),
('IDKELASXIIT1', 'XII TKJ 1'),
('IDKELASXIIT2', 'XII TKJ 2'),
('IDKELASXIIT3', 'XII TKJ 3'),
('IDKELASXIIT4', 'XII TKJ 4'),
('IDKELASXIIT5', 'XII TKJ 5'),
('IDKELASXIIT6', 'XII TKJ 6'),
('IDKELASXIR1', 'XI RPL 1'),
('IDKELASXIR2', 'XI RPL 2'),
('IDKELASXIR3', 'XI RPL 3'),
('IDKELASXIR4', 'XI RPL 4'),
('IDKELASXIR5', 'XI RPL 5'),
('IDKELASXIR6', 'XI RPL 6'),
('IDKELASXIT1', 'XI TKJ 1'),
('IDKELASXIT2', 'XI TKJ 2'),
('IDKELASXIT3', 'XI TKJ 3'),
('IDKELASXIT4', 'XI TKJ 4'),
('IDKELASXIT5', 'XI TKJ 5'),
('IDKELASXIT6', 'XI TKJ 6'),
('IDKELASXR1', 'X RPL 1'),
('IDKELASXR2', 'X RPL 2'),
('IDKELASXR3', 'X RPL 3'),
('IDKELASXR4', 'X RPL 4'),
('IDKELASXR5', 'X RPL 5'),
('IDKELASXR6', 'X RPL 6'),
('IDKELASXT1', 'X TKJ 1'),
('IDKELASXT2', 'X TKJ 2'),
('IDKELASXT3', 'X TKJ 3'),
('IDKELASXT4', 'X TKJ 4'),
('IDKELASXT5', 'X TKJ 5'),
('IDKELASXT6', 'X TKJ 6');

-- --------------------------------------------------------

--
-- Table structure for table `TB_PELANGGARAN`
--

CREATE TABLE `TB_PELANGGARAN` (
  `IDPELANGGARAN` int(11) NOT NULL,
  `IDKATEGORI` varchar(255) DEFAULT NULL,
  `NAMA_PELANGGARAN` varchar(50) DEFAULT NULL,
  `POINT_PELANGGARAN` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `TB_PELANGGARAN`
--

INSERT INTO `TB_PELANGGARAN` (`IDPELANGGARAN`, `IDKATEGORI`, `NAMA_PELANGGARAN`, `POINT_PELANGGARAN`) VALUES
(700001, 'NOKAPEL01', 'Atribut Tidak Lengkap', 10),
(700002, 'NOKAPEL02', 'Terlambat Masuk Sekolah', 15),
(700003, 'NOKAPEL03', 'Merokok di Sekolah', 45),
(700005, 'NOKAPEL01', 'Atribut Tidak Lengkap', 10),
(700006, 'NOKAPEL02', 'Atribut Tidak Lengkap', 40);

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
  `URL_FOTO_SISWA` varchar(255) DEFAULT NULL,
  `URL_PROFIL_SISWA` varchar(255) DEFAULT NULL,
  `UNAME_SISWA` varchar(32) DEFAULT NULL,
  `PASS_SISWA` varchar(32) DEFAULT NULL,
  `NOABSEN` int(11) NOT NULL,
  `KELAS` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `TB_SISWA`
--

INSERT INTO `TB_SISWA` (`IDSISWA`, `OAUTH_PROVIDER`, `NIS`, `NAMA_SISWA`, `EMAIL_SISWA`, `JK_SISWA`, `JURUSAN`, `ANGKATAN`, `URL_FOTO_SISWA`, `URL_PROFIL_SISWA`, `UNAME_SISWA`, `PASS_SISWA`, `NOABSEN`, `KELAS`) VALUES
('100226635222306593612', 'google', '48041523068', 'Qaisha Muhammada Devvara Rishivian', 'qaisha_rishivian_24rpl@student.smktelkom-mlg.sch.id', 'male', 'RPL', '24', 'https://lh4.googleusercontent.com/-7y6-czREqxs/AAAAAAAAAAI/AAAAAAAAAFU/IyD-DWPZxVc/photo.jpg', 'https://plus.google.com/100226635222306593612', 'qaisha_rishivian_24rpl', 'qaisha_rishivian', 25, 'XII RPL 1'),
('17252985295825289', 'google', '46691388070', 'Arik Nur Khoiriyah', 'arik_khoiriyah_24rpl@student.smktelkom-mlg.sch.id', 'female', 'RPL', '24', 'https://lh3.googleusercontent.com/7eelOUF6cePNeWb-poyDHC-NVAPlqce0ctotbtjOKnpUqwure7V8opKMFKVUOwpe8Uts7Q8HmmQp=s647-no', 'https://plus.google.com/u/1/105085156526066723725', 'arik_khoiriyah_24rpl', 'arik_khoiriyah', 2, 'XII RPL 1'),
('1897234234221', 'google', '47461465070', 'Maghrisya Amalia Wardana', 'maghrisya_wardana_24rpl@student.smktelkom-mlg.sch.id', 'female', 'RPL', '24', 'https://lh3.googleusercontent.com/icHg2svqvQUlFh-hl9MIAKscqtgoNZmMQkhw9XNYCJAEwpyU5vI8MEgg202XBu8NbAk84F5Lb82hjw=w963-h960-no', 'https://plus.google.com/u/1/114112256604064636627', 'maghrisya_wardana_24rpl', 'maghrisya_wardana', 19, 'XII RPL 1');

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
  ADD PRIMARY KEY (`IDSISWA`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `TB_ADMIN`
--
ALTER TABLE `TB_ADMIN`
  MODIFY `IDADMIN` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=100008;

--
-- AUTO_INCREMENT for table `TB_CAPELSIS`
--
ALTER TABLE `TB_CAPELSIS`
  MODIFY `IDCAPELSIS` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=300006;

--
-- AUTO_INCREMENT for table `TB_PELANGGARAN`
--
ALTER TABLE `TB_PELANGGARAN`
  MODIFY `IDPELANGGARAN` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=700007;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `TB_PELANGGARAN`
--
ALTER TABLE `TB_PELANGGARAN`
  ADD CONSTRAINT `FK_RELATIONSHIP_8` FOREIGN KEY (`IDKATEGORI`) REFERENCES `TB_KAPEL` (`IDKATEGORI`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
