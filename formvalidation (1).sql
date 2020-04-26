-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 26, 2020 at 02:10 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `form`
--

-- --------------------------------------------------------

--
-- Table structure for table `formvalidation`
--

CREATE TABLE `formvalidation` (
  `nama` varchar(50) NOT NULL,
  `jkel` varchar(12) NOT NULL,
  `nisn` varchar(10) NOT NULL,
  `nik` varchar(16) NOT NULL,
  `temlahir` varchar(25) NOT NULL,
  `tgllahir` date NOT NULL,
  `noregakte` varchar(32) NOT NULL,
  `agama` varchar(15) NOT NULL,
  `kwn` varchar(20) NOT NULL,
  `kebutuhan` varchar(6) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `rt` varchar(4) NOT NULL,
  `rw` varchar(4) NOT NULL,
  `dusun` varchar(25) NOT NULL,
  `kelurahan` varchar(25) NOT NULL,
  `kecamatan` varchar(25) NOT NULL,
  `kdpos` varchar(5) NOT NULL,
  `lintang` varchar(25) DEFAULT NULL,
  `bujur` varchar(25) DEFAULT NULL,
  `temtinggal` varchar(20) NOT NULL,
  `transport` varchar(20) NOT NULL,
  `nokks` varchar(6) DEFAULT NULL,
  `anakke` varchar(2) NOT NULL,
  `kps` varchar(6) NOT NULL,
  `nokps` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `formvalidation`
--

INSERT INTO `formvalidation` (`nama`, `jkel`, `nisn`, `nik`, `temlahir`, `tgllahir`, `noregakte`, `agama`, `kwn`, `kebutuhan`, `alamat`, `rt`, `rw`, `dusun`, `kelurahan`, `kecamatan`, `kdpos`, `lintang`, `bujur`, `temtinggal`, `transport`, `nokks`, `anakke`, `kps`, `nokps`) VALUES
('Ananda Lakunti Ardiatama', 'Laki-Laki', '1808201001', '182010101010', 'wonogiri', '1998-12-25', '51854841484', 'Islam', 'Indonesia', 'Tidak', 'bangsri rt 04/ rw 02', '04', '02', 'Bangsri', 'Bangsri', 'Sukodono', '61258', '852', '9552', 'Rumah Sendiri', 'kendaraan pribadi', '', '1', 'Tidak', ''),
('Mega Ambar Sari', 'Perempuan', '1111111111', '12121212121212', 'Jakarta', '2008-08-24', '776658799787', 'Islam', 'Indonesia', 'Tidak', 'bangsri rt 04/ rw 02', '04', '02', 'Bangsri', 'Bangsri', 'Sukodono', '61258', '852', '434', 'Rumah Sendiri', 'Angkutan umum', '', '2', 'Tidak', '');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
