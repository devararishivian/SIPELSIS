-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 16, 2018 at 03:05 AM
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

--
-- Dumping data for table `TB_ADMIN`
--

INSERT INTO `TB_ADMIN` (`IDADMIN`, `NIP`, `NAMA_ADMIN`, `EMAIL_ADMIN`, `JK_ADMIN`, `FOTO_ADMIN`, `UNAME_ADMIN`, `PASS_ADMIN`, `ROLE`) VALUES
(100001, '8869352', 'Sisworoso', 'sisworoso@smktelkom-mlg.sch.id', 'Laki - laki', 'sisworoso.jpg', 'sisworoso', 'sisworoso', 'Admin'),
(100002, '7543524', 'Rofiqut Thoriq', 'thoriq@smktelkom-mlg.sch.id', 'Laki - laki', 'thoriq.jpg', 'thoriq', 'thoriq', 'Admin'),
(100003, '235352', 'Petugas 1', 'petugas1@smktelkom-mlg.sch.id', 'Laki - laki', 'p1.jpg', 'petugas1', 'petugas1', 'Petugas');

--
-- Dumping data for table `TB_PELANGGARAN`
--

INSERT INTO `TB_PELANGGARAN` (`IDPELANGGARAN`, `NAMA_PELANGGARAN`, `POINT_PELANGGARAN`, `KATEGORI_PELANGGARAN`) VALUES
(1001, 'Datang Terlambat', 10, 'Ringan'),
(1002, 'Atribut Tidak Lengkap', 10, 'Ringan'),
(1003, NULL, NULL, NULL);

--
-- Dumping data for table `TB_SISWA`
--

INSERT INTO `TB_SISWA` (`IDSISWA`, `OAUTH_PROVIDER`, `NIS`, `NAMA_SISWA`, `EMAIL_SISWA`, `JK_SISWA`, `JURUSAN`, `ANGKATAN`, `KELAS_SISWA`, `NOABSEN_SISWA`, `URL_FOTO_SISWA`, `URL_PROFIL_SISWA`, `UNAME_SISWA`, `PASS_SISWA`) VALUES
('100226635222306593612', 'google', '48041523070', 'Qaisha Muhammada Devvara Rishivian', 'qaisha_rishivian_24rpl@student.smktelkom-mlg.sch.id', 'male', 'RPL', '24', 'XII RPL 1', 25, 'https://lh4.googleusercontent.com/-7y6-czREqxs/AAAAAAAAAAI/AAAAAAAAAFU/IyD-DWPZxVc/photo.jpg', 'https://plus.google.com/100226635222306593612', 'qaisha_rishivian_24rpl', 'qaisha_rishivian'),
('101177830012522300057', 'google', '47071523070', 'SA\'ADATUL SHOLEHAH', 'saadatul_sholehah_24rpl@student.smktelkom-mlg.sch.id', 'female', 'RPL', '24', 'XII RPL 1', 29, 'https://lh3.googleusercontent.com/-RbR16x9XKOw/AAAAAAAAAAI/AAAAAAAAADA/dcavwthgruk/photo.jpg', '', 'saadatul_sholehah_24rpl', 'saadatul_sholehah'),
('6363633', 'google', '41414', 'Mangkurondo Limo', 'mangkuwanito@student.smktelkom-mlg.sch.id', 'female', 'TKJ', '24', 'XII RPL 1', 32, 'hgdfasfafa', NULL, 'mangkuwanito', 'mangkuwanito');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
