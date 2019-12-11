-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 11, 2019 at 05:31 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `parindex`
--

-- --------------------------------------------------------

--
-- Table structure for table `beroprasi`
--

CREATE TABLE `beroprasi` (
  `IDTEMPAT` char(10) NOT NULL,
  `IDJADWAL` char(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `beroprasi`
--

INSERT INTO `beroprasi` (`IDTEMPAT`, `IDJADWAL`) VALUES
('ID00001', 'IDJ0001'),
('ID00001', 'IDJ0002'),
('ID00001', 'IDJ0003'),
('ID00001', 'IDJ0004'),
('ID00001', 'IDJ0005'),
('ID00001', 'IDJ0006'),
('ID00001', 'IDJ0007'),
('ID00002', 'IDJ0008'),
('ID00002', 'IDJ0009'),
('ID00002', 'IDJ0010'),
('ID00002', 'IDJ0011'),
('ID00002', 'IDJ0012'),
('ID00002', 'IDJ0013'),
('ID00002', 'IDJ0014'),
('ID00003', 'IDJ0015'),
('ID00003', 'IDJ0016'),
('ID00003', 'IDJ0017'),
('ID00003', 'IDJ0018'),
('ID00003', 'IDJ0019'),
('ID00003', 'IDJ0020'),
('ID00003', 'IDJ0021'),
('ID00004', 'IDJ0022'),
('ID00004', 'IDJ0023'),
('ID00004', 'IDJ0024'),
('ID00004', 'IDJ0025'),
('ID00004', 'IDJ0026'),
('ID00004', 'IDJ0027'),
('ID00004', 'IDJ0028'),
('ID00005', 'IDJ0029'),
('ID00005', 'IDJ0030'),
('ID00005', 'IDJ0031'),
('ID00005', 'IDJ0032'),
('ID00005', 'IDJ0033'),
('ID00005', 'IDJ0034'),
('ID00005', 'IDJ0035'),
('ID00006', 'IDJ0036'),
('ID00006', 'IDJ0037'),
('ID00006', 'IDJ0038'),
('ID00006', 'IDJ0039'),
('ID00006', 'IDJ0040'),
('ID00006', 'IDJ0041'),
('ID00006', 'IDJ0042'),
('ID00007', 'IDJ0043'),
('ID00007', 'IDJ0044'),
('ID00007', 'IDJ0045'),
('ID00007', 'IDJ0046'),
('ID00007', 'IDJ0047'),
('ID00007', 'IDJ0048'),
('ID00007', 'IDJ0049'),
('ID00008', 'IDJ0050'),
('ID00008', 'IDJ0051'),
('ID00008', 'IDJ0052'),
('ID00008', 'IDJ0053'),
('ID00008', 'IDJ0054'),
('ID00008', 'IDJ0055'),
('ID00008', 'IDJ0056'),
('ID00009', 'IDJ0057'),
('ID00009', 'IDJ0058'),
('ID00009', 'IDJ0059'),
('ID00009', 'IDJ0060'),
('ID00009', 'IDJ0061'),
('ID00009', 'IDJ0062'),
('ID00009', 'IDJ0063'),
('ID00010', 'IDJ0064'),
('ID00010', 'IDJ0065'),
('ID00010', 'IDJ0066'),
('ID00010', 'IDJ0067'),
('ID00010', 'IDJ0068'),
('ID00010', 'IDJ0069'),
('ID00010', 'IDJ0070'),
('ID00011', 'IDJ0050'),
('ID00011', 'IDJ0051'),
('ID00011', 'IDJ0052'),
('ID00011', 'IDJ0053'),
('ID00011', 'IDJ0055'),
('ID00011', 'IDJ0056'),
('ID00011', 'IDJ0071'),
('ID00012', 'IDJ0072'),
('ID00012', 'IDJ0073'),
('ID00012', 'IDJ0074'),
('ID00012', 'IDJ0075'),
('ID00012', 'IDJ0076'),
('ID00012', 'IDJ0077'),
('ID00012', 'IDJ0078'),
('ID00013', 'IDJ0079'),
('ID00013', 'IDJ0080'),
('ID00013', 'IDJ0081'),
('ID00013', 'IDJ0082'),
('ID00013', 'IDJ0083'),
('ID00013', 'IDJ0084'),
('ID00013', 'IDJ0085'),
('ID00014', 'IDJ0086'),
('ID00014', 'IDJ0087'),
('ID00014', 'IDJ0088'),
('ID00014', 'IDJ0089'),
('ID00014', 'IDJ0090'),
('ID00014', 'IDJ0091'),
('ID00014', 'IDJ0092'),
('ID00015', 'IDJ0093'),
('ID00015', 'IDJ0094'),
('ID00015', 'IDJ0095'),
('ID00015', 'IDJ0096'),
('ID00015', 'IDJ0097'),
('ID00015', 'IDJ0098'),
('ID00015', 'IDJ0099'),
('ID00016', 'IDJ0100'),
('ID00016', 'IDJ0101'),
('ID00016', 'IDJ0102'),
('ID00016', 'IDJ0103'),
('ID00016', 'IDJ0104'),
('ID00016', 'IDJ0105'),
('ID00016', 'IDJ0106'),
('ID00017', 'IDJ0114'),
('ID00017', 'IDJ0115'),
('ID00017', 'IDJ0116'),
('ID00017', 'IDJ0117'),
('ID00017', 'IDJ0118'),
('ID00017', 'IDJ0119'),
('ID00017', 'IDJ0120'),
('ID00018', 'IDJ0107'),
('ID00018', 'IDJ0108'),
('ID00018', 'IDJ0109'),
('ID00018', 'IDJ0110'),
('ID00018', 'IDJ0111'),
('ID00018', 'IDJ0112'),
('ID00018', 'IDJ0113'),
('ID00019', 'IDJ0121'),
('ID00019', 'IDJ0122'),
('ID00019', 'IDJ0123'),
('ID00019', 'IDJ0124'),
('ID00019', 'IDJ0125'),
('ID00019', 'IDJ0126'),
('ID00019', 'IDJ0127'),
('ID00020', 'IDJ0128'),
('ID00020', 'IDJ0129'),
('ID00020', 'IDJ0130'),
('ID00020', 'IDJ0131'),
('ID00020', 'IDJ0132'),
('ID00020', 'IDJ0133');

-- --------------------------------------------------------

--
-- Table structure for table `fasilitas`
--

CREATE TABLE `fasilitas` (
  `IDFASILITAS` char(10) NOT NULL,
  `NAMAFASILITAS` varchar(50) NOT NULL,
  `BIAYA` decimal(14,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fasilitas`
--

INSERT INTO `fasilitas` (`IDFASILITAS`, `NAMAFASILITAS`, `BIAYA`) VALUES
('IDF001', 'Fasilitasi Tempat Acara', '5000000.00'),
('IDF002', 'Theater', '0.00'),
('IDF003', 'Paket Edukasi', '20000.00'),
('IDF004', 'Sewa Perahu', '10000.00'),
('IDF005', 'Naik Gajah, Kuda, dan Unta', '20000.00'),
('IDF006', 'Wahana Permainan', '0.00'),
('IDF007', 'Bronto Skylift', '0.00'),
('IDF008', 'Theater', '10000.00'),
('IDF009', 'Pantai Ancol', '25000.00'),
('IDF010', 'Schmutzer Primate Center', '6000.00'),
('IDF011', 'Sangkar satwa', '0.00'),
('IDF012', 'Dino Park', '100000.00'),
('IDF013', 'Galeri Musik', '50000.00'),
('IDF014', 'Angkutan Wisata', '18000.00'),
('IDF015', 'Sky Walk', '5000.00'),
('IDF016', 'Photo Spot', '0.00'),
('IDF017', 'Wahana', '0.00'),
('IDF018', 'Fast Track', '200000.00'),
('IDF019', 'Sewa Kostum', '75000.00');

-- --------------------------------------------------------

--
-- Table structure for table `fotolokasi`
--

CREATE TABLE `fotolokasi` (
  `FOTO` varchar(1024) NOT NULL,
  `IDTEMPAT` char(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fotolokasi`
--

INSERT INTO `fotolokasi` (`FOTO`, `IDTEMPAT`) VALUES
('a.jpg', 'ID00001'),
('b.jpg', 'ID00002'),
('c.jpg', 'ID00003'),
('c2.jpg', 'ID00003'),
('c3.jpg', 'ID00003'),
('d.jpg', 'ID00004'),
('e.jpg', 'ID00005'),
('f.jpg', 'ID00006'),
('g.jpg', 'ID00007'),
('h.jpg', 'ID00008'),
('i.jpg', 'ID00009'),
('j.jpg', 'ID00010'),
('k.jpg', 'ID00011'),
('l.jpg', 'ID00012'),
('m.jpg', 'ID00013'),
('n.jpg', 'ID00014'),
('o.jpg', 'ID00015'),
('p.jpg', 'ID00016'),
('TSB.jpg', 'ID00017'),
('KPC.jpg', 'ID00018'),
('FL.jpg', 'ID00019'),
('BT.jpg', 'ID00020');

-- --------------------------------------------------------

--
-- Table structure for table `jadwal`
--

CREATE TABLE `jadwal` (
  `IDJADWAL` char(10) NOT NULL,
  `HARI` varchar(10) NOT NULL,
  `JAMBUKA` time NOT NULL,
  `JAMTUTUP` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jadwal`
--

INSERT INTO `jadwal` (`IDJADWAL`, `HARI`, `JAMBUKA`, `JAMTUTUP`) VALUES
('IDJ0001', 'Senin', '08:00:00', '14:30:00'),
('IDJ0002', 'Selasa', '08:00:00', '14:30:00'),
('IDJ0003', 'Rabu', '08:00:00', '14:30:00'),
('IDJ0004', 'Kamis', '08:00:00', '14:30:00'),
('IDJ0005', 'Jumat', '08:00:00', '14:30:00'),
('IDJ0006', 'Sabtu', '08:00:00', '13:30:00'),
('IDJ0007', 'Minggu', '08:00:00', '13:30:00'),
('IDJ0008', 'Senin', '08:00:00', '21:00:00'),
('IDJ0009', 'Selasa', '08:00:00', '21:00:00'),
('IDJ0010', 'Rabu', '08:00:00', '21:00:00'),
('IDJ0011', 'Kamis', '08:00:00', '21:00:00'),
('IDJ0012', 'Jumat', '08:00:00', '21:00:00'),
('IDJ0013', 'Sabtu', '08:00:00', '21:00:00'),
('IDJ0014', 'Minggu', '08:00:00', '21:00:00'),
('IDJ0015', 'Senin', '08:00:00', '16:00:00'),
('IDJ0016', 'Selasa', '08:00:00', '16:00:00'),
('IDJ0017', 'Rabu', '08:00:00', '16:00:00'),
('IDJ0018', 'Kamis', '08:00:00', '16:00:00'),
('IDJ0019', 'Jumat', '08:00:00', '16:00:00'),
('IDJ0020', 'Sabtu', '07:30:00', '16:30:00'),
('IDJ0021', 'Minggu', '07:30:00', '16:30:00'),
('IDJ0022', 'Senin', '15:00:00', '23:00:00'),
('IDJ0023', 'Selasa', '15:00:00', '23:00:00'),
('IDJ0024', 'Rabu', '15:00:00', '23:00:00'),
('IDJ0025', 'Kamis', '15:00:00', '23:00:00'),
('IDJ0026', 'Jumat', '15:00:00', '23:00:00'),
('IDJ0027', 'Sabtu', '15:00:00', '23:00:00'),
('IDJ0028', 'Minggu', '15:00:00', '23:00:00'),
('IDJ0029', 'Senin', '08:00:00', '16:00:00'),
('IDJ0030', 'Selasa', '08:00:00', '16:00:00'),
('IDJ0031', 'Rabu', '08:00:00', '16:00:00'),
('IDJ0032', 'Kamis', '08:00:00', '16:00:00'),
('IDJ0033', 'Jumat', '08:00:00', '16:00:00'),
('IDJ0034', 'Sabtu', '08:00:00', '16:00:00'),
('IDJ0035', 'Minggu', '08:00:00', '16:00:00'),
('IDJ0036', 'Senin', '08:00:00', '17:00:00'),
('IDJ0037', 'Selasa', '08:00:00', '17:00:00'),
('IDJ0038', 'Rabu', '08:00:00', '17:00:00'),
('IDJ0039', 'Kamis', '08:00:00', '17:00:00'),
('IDJ0040', 'Jumat', '08:00:00', '17:00:00'),
('IDJ0041', 'Sabtu', '08:00:00', '17:00:00'),
('IDJ0042', 'Minggu', '08:00:00', '17:00:00'),
('IDJ0043', 'Senin', '00:00:00', '23:59:00'),
('IDJ0044', 'Selasa', '00:00:00', '23:59:00'),
('IDJ0045', 'Rabu', '00:00:00', '23:59:00'),
('IDJ0046', 'Kamis', '00:00:00', '23:59:00'),
('IDJ0047', 'Jumat', '00:00:00', '23:59:00'),
('IDJ0048', 'Sabtu', '00:00:00', '23:59:00'),
('IDJ0049', 'Minggu', '00:00:00', '23:59:00'),
('IDJ0050', 'Senin', '07:30:00', '16:00:00'),
('IDJ0051', 'Selasa', '07:30:00', '16:00:00'),
('IDJ0052', 'Rabu', '07:30:00', '16:00:00'),
('IDJ0053', 'Kamis', '07:30:00', '16:00:00'),
('IDJ0054', 'Jumat', '07:30:00', '16:00:00'),
('IDJ0055', 'Sabtu', '07:30:00', '16:00:00'),
('IDJ0056', 'Minggu', '07:30:00', '16:00:00'),
('IDJ0057', 'Senin', '09:00:00', '15:00:00'),
('IDJ0058', 'Selasa', '09:00:00', '15:00:00'),
('IDJ0059', 'Rabu', '09:00:00', '15:00:00'),
('IDJ0060', 'Kamis', '09:00:00', '15:00:00'),
('IDJ0061', 'Jumat', '09:00:00', '15:00:00'),
('IDJ0062', 'Sabtu', '09:00:00', '15:00:00'),
('IDJ0063', 'Minggu', '09:00:00', '15:00:00'),
('IDJ0064', 'Senin', '07:30:00', '17:30:00'),
('IDJ0065', 'Selasa', '07:30:00', '17:30:00'),
('IDJ0066', 'Rabu', '07:30:00', '17:30:00'),
('IDJ0067', 'Kamis', '07:30:00', '17:30:00'),
('IDJ0068', 'Jumat', '07:30:00', '17:30:00'),
('IDJ0069', 'Sabtu', '07:30:00', '17:30:00'),
('IDJ0070', 'Minggu', '07:30:00', '17:30:00'),
('IDJ0071', 'Jumat', '07:30:00', '16:30:00'),
('IDJ0072', 'Senin', '08:00:00', '14:00:00'),
('IDJ0073', 'Selasa', '08:00:00', '14:00:00'),
('IDJ0074', 'Rabu', '08:00:00', '14:00:00'),
('IDJ0075', 'Kamis', '08:00:00', '14:00:00'),
('IDJ0076', 'Jumat', '08:00:00', '12:00:00'),
('IDJ0077', 'Sabtu', '08:00:00', '14:00:00'),
('IDJ0078', 'Minggu', '08:00:00', '14:00:00'),
('IDJ0079', 'Senin', '18:00:00', '23:00:00'),
('IDJ0080', 'Selasa', '18:00:00', '23:00:00'),
('IDJ0081', 'Rabu', '18:00:00', '23:00:00'),
('IDJ0082', 'Kamis', '18:00:00', '23:00:00'),
('IDJ0083', 'Jumat', '18:00:00', '23:00:00'),
('IDJ0084', 'Sabtu', '18:00:00', '23:00:00'),
('IDJ0085', 'Minggu', '18:00:00', '23:00:00'),
('IDJ0086', 'Senin', '08:00:00', '19:00:00'),
('IDJ0087', 'Selasa', '08:00:00', '19:00:00'),
('IDJ0088', 'Rabu', '08:00:00', '19:00:00'),
('IDJ0089', 'Kamis', '08:00:00', '19:00:00'),
('IDJ0090', 'Jumat', '08:00:00', '19:00:00'),
('IDJ0091', 'Sabtu', '08:00:00', '19:00:00'),
('IDJ0092', 'Minggu', '08:00:00', '19:00:00'),
('IDJ0093', 'Senin', '06:00:00', '18:00:00'),
('IDJ0094', 'Selasa', '06:00:00', '18:00:00'),
('IDJ0095', 'Rabu', '06:00:00', '18:00:00'),
('IDJ0096', 'Kamis', '06:00:00', '18:00:00'),
('IDJ0097', 'Jumat', '06:00:00', '18:00:00'),
('IDJ0098', 'Sabtu', '06:00:00', '18:00:00'),
('IDJ0099', 'Minggu', '06:00:00', '18:00:00'),
('IDJ0100', 'Senin', '12:00:00', '21:00:00'),
('IDJ0101', 'Selasa', '12:00:00', '21:00:00'),
('IDJ0102', 'Rabu', '12:00:00', '21:00:00'),
('IDJ0103', 'Kamis', '12:00:00', '21:00:00'),
('IDJ0104', 'Jumat', '12:00:00', '21:00:00'),
('IDJ0105', 'Sabtu', '12:00:00', '21:00:00'),
('IDJ0106', 'Minggu', '12:00:00', '21:00:00'),
('IDJ0107', 'Senin', '07:00:00', '17:00:00'),
('IDJ0108', 'Selasa', '07:00:00', '17:00:00'),
('IDJ0109', 'Rabu', '07:00:00', '17:00:00'),
('IDJ0110', 'Kamis', '07:00:00', '17:00:00'),
('IDJ0111', 'Jumat', '07:00:00', '17:00:00'),
('IDJ0112', 'Sabtu', '07:00:00', '17:00:00'),
('IDJ0113', 'Minggu', '07:00:00', '17:00:00'),
('IDJ0114', 'Senin', '10:00:00', '18:00:00'),
('IDJ0115', 'Selasa', '10:00:00', '18:00:00'),
('IDJ0116', 'Rabu', '10:00:00', '18:00:00'),
('IDJ0117', 'Kamis', '10:00:00', '18:00:00'),
('IDJ0118', 'Jumat', '10:00:00', '18:00:00'),
('IDJ0119', 'Sabtu', '10:00:00', '19:00:00'),
('IDJ0120', 'Minggu', '10:00:00', '19:00:00'),
('IDJ0121', 'Senin', '08:00:00', '20:00:00'),
('IDJ0122', 'Selasa', '08:00:00', '20:00:00'),
('IDJ0123', 'Rabu', '08:00:00', '20:00:00'),
('IDJ0124', 'Kamis', '08:00:00', '20:00:00'),
('IDJ0125', 'Jumat', '08:00:00', '20:00:00'),
('IDJ0126', 'Sabtu', '08:00:00', '20:00:00'),
('IDJ0127', 'Minggu', '08:00:00', '20:00:20'),
('IDJ0128', 'Senin', '08:00:00', '16:00:00'),
('IDJ0129', 'Selasa', '08:00:00', '16:00:00'),
('IDJ0130', 'Rabu', '08:00:00', '16:00:00'),
('IDJ0131', 'Kamis', '08:00:00', '16:00:00'),
('IDJ0132', 'Jumat', '08:00:00', '16:00:00'),
('IDJ0133', 'Sabtu', '08:00:00', '16:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `kota`
--

CREATE TABLE `kota` (
  `IDKOTA` char(10) NOT NULL,
  `NAMAKOTA` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kota`
--

INSERT INTO `kota` (`IDKOTA`, `NAMAKOTA`) VALUES
('IDK001', 'Surabaya'),
('IDK002', 'Jakarta'),
('IDK003', 'Yogyakarta'),
('IDK004', 'Malang'),
('IDK005', 'Bandung');

-- --------------------------------------------------------

--
-- Table structure for table `memiliki`
--

CREATE TABLE `memiliki` (
  `IDTEMPAT` char(10) NOT NULL,
  `IDFASILITAS` char(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `memiliki`
--

INSERT INTO `memiliki` (`IDTEMPAT`, `IDFASILITAS`) VALUES
('ID00001', 'IDF001'),
('ID00002', 'IDF002'),
('ID00003', 'IDF003'),
('ID00003', 'IDF004'),
('ID00003', 'IDF005'),
('ID00004', 'IDF006'),
('ID00005', 'IDF007'),
('ID00006', 'IDF008'),
('ID00007', 'IDF009'),
('ID00008', 'IDF009'),
('ID00009', 'IDF016'),
('ID00010', 'IDF011'),
('ID00011', 'IDF016'),
('ID00012', 'IDF016'),
('ID00013', 'IDF016'),
('ID00014', 'IDF016'),
('ID00015', 'IDF016'),
('ID00016', 'IDF012'),
('ID00016', 'IDF013'),
('ID00017', 'IDF002'),
('ID00017', 'IDF017'),
('ID00017', 'IDF018'),
('ID00018', 'IDF014'),
('ID00018', 'IDF015'),
('ID00018', 'IDF016'),
('ID00019', 'IDF016'),
('ID00019', 'IDF019'),
('ID00020', 'IDF016'),
('ID00020', 'IDF017');

-- --------------------------------------------------------

--
-- Table structure for table `rating`
--

CREATE TABLE `rating` (
  `IDRATING` int(11) NOT NULL,
  `IDTEMPAT` char(10) NOT NULL,
  `NAMAPERATING` varchar(100) DEFAULT NULL,
  `KOMENTAR` longtext DEFAULT NULL,
  `SCORE` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rating`
--

INSERT INTO `rating` (`IDRATING`, `IDTEMPAT`, `NAMAPERATING`, `KOMENTAR`, `SCORE`) VALUES
(1, 'ID00001', 'namarate', 'komen', 3),
(2, 'ID00002', 'namarate', 'komen', 5),
(3, 'ID00003', NULL, 'Asik Asik Jos', 5),
(4, 'ID00004', 'namarate', 'komen', 5),
(5, 'ID00005', 'namarate', 'komen', 5),
(6, 'ID00006', 'namarate', 'komen', 5),
(7, 'ID00007', 'namarate', 'komen', 5),
(8, 'ID00008', 'namarate', 'komen', 4),
(9, 'ID00009', 'namarate', 'komen', 5),
(10, 'ID00010', 'namarate', 'komen', 5),
(11, 'ID00011', 'namarate', 'komen', 5),
(12, 'ID00012', 'namarate', 'komen', 5),
(13, 'ID00013', 'namarate', 'komen', 4),
(14, 'ID00014', 'namarate', 'komen', 4),
(15, 'ID00015', 'namarate', 'komen', 5),
(16, 'ID00016', 'namarate', 'komen', 5),
(17, 'ID00017', 'System', 'Base rating', 5),
(18, 'ID00018', 'System', 'Base rating', 5),
(19, 'ID00019', 'System', 'Base rating', 4),
(20, 'ID00020', 'System', 'Base rating', 4),
(21, 'ID00003', NULL, 'wah keren abis', 5),
(22, 'ID00003', 'Anthony Septianti', 'Surabaya Zoo contains many different kind of animals, and some of them are endemic species from Indonesia. This place has a decent option of food & beverages stall, also has museum, aquarium, and elephant rides. On a certain times a day there will be held local events with main purpose is to propagate idea and alertness about conserving natural habitat of endangered species held in Surabaya Zoo. To make visit more convenient, KBS (short term for Surabaya Zoo in Indonesian) also provided spacious parking lot that get crammed during weekend and holidays, but this always happened anywhere else in this country.', 4),
(23, 'ID00003', 'Berthold', NULL, 3),
(24, 'ID00003', 'Kinasihurrab M', 'Destinasi liburan bareng keluarga paling favorit. Banyak perubahan yg lebih baik dari terakhir berkunjung pas masih kecil dulu.hehehehe...', 4);

-- --------------------------------------------------------

--
-- Table structure for table `tag`
--

CREATE TABLE `tag` (
  `TAG` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tag`
--

INSERT INTO `tag` (`TAG`) VALUES
('Kampung Wisata'),
('Keraton'),
('Kuliner'),
('Monument'),
('Museum'),
('Pemandian'),
('Safari'),
('Taman Hiburan'),
('Wisata Alam');

-- --------------------------------------------------------

--
-- Table structure for table `tempatwisata`
--

CREATE TABLE `tempatwisata` (
  `IDTEMPAT` char(10) NOT NULL,
  `IDKOTA` char(10) NOT NULL,
  `NAMATEMPAT` varchar(50) NOT NULL,
  `HTM` decimal(14,2) NOT NULL,
  `LOKASI` varchar(300) NOT NULL,
  `NOTELP` varchar(12) DEFAULT NULL,
  `WEBSITE` varchar(1024) DEFAULT NULL,
  `DESKRIPSI` longtext DEFAULT NULL,
  `RERATARATING` decimal(2,1) DEFAULT NULL,
  `JMHRATING` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tempatwisata`
--

INSERT INTO `tempatwisata` (`IDTEMPAT`, `IDKOTA`, `NAMATEMPAT`, `HTM`, `LOKASI`, `NOTELP`, `WEBSITE`, `DESKRIPSI`, `RERATARATING`, `JMHRATING`) VALUES
('ID00001', 'IDK001', 'Tugu Pahlawan Surabaya', '5000.00', 'Kecamatan Bubutan', '81225432000', 'No Website', 'Tugu Pahlawan yang berlokasi di Surabaya', '3.0', 1),
('ID00002', 'IDK001', 'Monumen Kapal Selam', '15000.00', 'Embong Kaliasin, Kecamatan Genteng, Surabaya', '3415490410', 'No Website', 'Museum Kapal Selam', '5.0', 1),
('ID00003', 'IDK001', 'Kebun Binatang Surabaya', '20000.00', 'Jl. Setail No.1, Darmo, Kec. Wonokromo', '315678703', 'surabayazoo.co.id', 'Kebun Binatang yang Berlokasi di Surabaya', '4.2', 5),
('ID00004', 'IDK001', 'Suroboyo Carnival Park', '60000.00', 'Jl. Ahmad Yani No.333, Dukuh Menanggal, Kec. Gayungan', '318483131', 'No Website', 'Taman hiburan bernuansa karnaval dengan wahana untuk anak & dewasa, plus penjual makanan & suvenir', '5.0', 1),
('ID00005', 'IDK002', 'Monumen Nasional', '60000.00', 'Gambir, Jakarta Pusat', '213822255', 'No Website', 'Monumen Nasional sebagai pengingat perjuangan rakyat Indonesia', '5.0', 1),
('ID00006', 'IDK002', 'Taman Mini Nasional Indonesia Indah ', '20000.00', 'Kota Jakarta Timur, Jakarta', '2187792078', 'www.tamanmini.com', 'Taman Hiburan dengan berbagai fasilitas yang terletak di Jakarta Timur', '5.0', 1),
('ID00007', 'IDK002', 'Taman Impian Jaya Ancol', '25000.00', 'Jl. Lodan Timur No.7, RW.10, Ancol, Kec. Pademangan, Kota Jakarta Utara, Daerah Khusus Ibukota Jakarta', '212601680', 'www.ancol.com', 'Taman Hiburan dengan berbagai fasilitas yang terletak di Jakarta Utara', '5.0', 1),
('ID00008', 'IDK002', 'Kebun Binatang Ragunan', '6000.00', 'Jl. Harsono RM No.1, Ragunan, Kec. Ps. Minggu, Kota Jakarta Selatan, Daerah Khusus Ibukota Jakarta', '2178847114', 'ragunanzoo.jakarta.go.id', 'Kebun Binatang yang terletak pada daerah Jakarta Selatan', '4.0', 1),
('ID00009', 'IDK003', 'Taman Sari', '6000.00', 'Wisata Taman Sari Jalan Tamanan, Patehan, Kecamatan Kraton, Kota Yogyakarta, Daerah Istimewa Yogyakarta 55133', '0', 'No Website', 'Taman kerajaan yang dimiliki oleh Kesultanan Yogyakarta', '5.0', 1),
('ID00010', 'IDK003', 'Taman Safari Gembira Loka', '35000.00', 'Jl. Kebun Raya No.2, Rejowinangun, Kec. Kotagede, Kota Yogyakarta, Daerah Istimewa Yogyakarta 55171', '274373861', 'gembiralokazoo.com', 'Merupakan taman zoological yang terletak di daerah Yogyakarta', '5.0', 1),
('ID00011', 'IDK003', 'Benteng Vredeburg', '2000.00', ' Jl. Margo Mulyo No.6, Ngupasan, Kec. Gondomanan, Kota Yogyakarta, Daerah Istimewa Yogyakarta', '274586934', 'vredeburg.id', 'Museum yang merupakan eks benteng Belanda yang terletak di Yogyakarta', '5.0', 1),
('ID00012', 'IDK003', 'Kraton Ngayogyakarta', '7000.00', 'Jl. Rotowijayan Blok No. 1, Panembahan, Kecamatan Kraton, Kota Yogyakarta, Daerah Istimewa Yogyakarta', '274373721', 'No Website', 'Kompleks Kerajaan yang terletak di Daerah Yogyakarta', '5.0', 1),
('ID00013', 'IDK004', 'Malang Night Paradise', '50000.00', 'Jl. Graha Kencana Raya Jl. Raya Karanglo No.66, Karanglo, Balearjosari, Kec. Blimbing, Malang, Jawa Timur', '3414351795', 'No Website', 'Taman hiburan malam hari yang terletak di Kota Malang', '4.0', 1),
('ID00014', 'IDK004', 'Kampung Tridi', '3000.00', 'Jl. Temenggungan Ledok, Kesatrian, Kec. Blimbing, Kota Malang, Jawa Timur', '81336233017', 'No Website', ' kampung wisata pertama di Kota Malang berupa sederetan rumah warga di tepi Sungai Brantas yang menampilkan dinding dengan aneka warna yang menarik dan tidak monoton', '4.0', 1),
('ID00015', 'IDK004', 'Kampung Warna Warni Jodipan', '7000.00', 'Jodipan, Kec. Blimbing, Kota Malang, Jawa Timur', '89658689131', 'No Website', 'Kampung wisata di Kota Malang yang memiliki variasi warna dan bentuk pada tiap masing - masing rumah', '5.0', 1),
('ID00016', 'IDK004', 'Jawa Timur Park 3', '0.00', 'Jl. Ir. Soekarno No.144, Beji, Kec. Junrejo, Kota Batu, Jawa Timur 65236', '3415103030', 'jtp.id', 'Merupakan taman hiburan dengan berbagai variasi wahana yang terletak di daerah Malang', '5.0', 1),
('ID00017', 'IDK005', 'Trans Studio Bandung', '280000.00', 'Jl. Gatot Subroto 289, Bandung Jawa Barat 40273', '2286012555', 'www.transstudiobandung.com', 'TRANS STUDIO BANDUNG adalah Indoor Theme Park terbesar ke dua di Indonesia setelah Makassar. \r\nTrans Studio Bandung lebih spektakuler dan lebih dahsyat dari TransStudio yang ada di Makassar.\r\nTRANS STUDIO BANDUNG menyajikan 20 wahana permainan dalam berbagai bentuk', '5.0', 1),
('ID00018', 'IDK005', 'Kawah Putih Ciwidey', '25000.00', 'Jl.Ciwidey Rancabali KM 5 No.17 Kp.Panundaan Rt 01 Rw 05 Ciwidey Bandung Jawa Barat 40973', '2285924482', 'www.kawahputihciwidey.com', 'Kawah Putih adalah sebuah danau yang terbentuk akibat dari letusan Gunung Patuha.\r\nSesuai dengan namanya, tanah yang ada di kawasan ini berwarna putih akibat dari pencampuran unsur belerang.\r\nSelain tanahnya yang berwarna putih, air danau kawasan Kawah Putih juga mempunyai warna yang putih kehijauan dan dapat berubah warna.', '5.0', 1),
('ID00019', 'IDK005', 'Farmhouse Lembang', '25000.00', 'Jl. Raya Lembang No.108, Gudangkahuripan, Lembang Bandung Jawa Barat 40391', '81320922142', NULL, 'Wisata Alam dengan Bangunan khas European, dimana ada penyewaan kostum belanda, kebun binatang mini, dan restaurant unik', '4.0', 1),
('ID00020', 'IDK005', 'Bandung Treetop', '180000.00', 'Cikole Jaya Giri Resort Jalan Tangkuban Perahu Kilometer 28 Lembang Bandung Barat Jawa Barat 40391', '2282780672', 'www.bandungtreetop.com', 'Treetop Bandungg will strengthen your reasons for becoming new facilities for doing company outing and other special events.', '4.0', 1);

-- --------------------------------------------------------

--
-- Table structure for table `termasuk`
--

CREATE TABLE `termasuk` (
  `TAG` varchar(50) NOT NULL,
  `IDTEMPAT` char(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `termasuk`
--

INSERT INTO `termasuk` (`TAG`, `IDTEMPAT`) VALUES
('Kampung Wisata', 'ID00014'),
('Kampung Wisata', 'ID00015'),
('Keraton', 'ID00012'),
('Kuliner', 'ID00019'),
('Monument', 'ID00001'),
('Monument', 'ID00002'),
('Monument', 'ID00005'),
('Museum', 'ID00011'),
('Pemandian', 'ID00009'),
('Safari', 'ID00003'),
('Safari', 'ID00008'),
('Safari', 'ID00010'),
('Taman Hiburan', 'ID00004'),
('Taman Hiburan', 'ID00006'),
('Taman Hiburan', 'ID00007'),
('Taman Hiburan', 'ID00013'),
('Taman Hiburan', 'ID00016'),
('Taman Hiburan', 'ID00017'),
('Taman Hiburan', 'ID00020'),
('Wisata Alam', 'ID00018'),
('Wisata Alam', 'ID00019'),
('Wisata Alam', 'ID00020');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `beroprasi`
--
ALTER TABLE `beroprasi`
  ADD PRIMARY KEY (`IDTEMPAT`,`IDJADWAL`),
  ADD KEY `FK_BUKA_HARI3` (`IDJADWAL`);

--
-- Indexes for table `fasilitas`
--
ALTER TABLE `fasilitas`
  ADD PRIMARY KEY (`IDFASILITAS`);

--
-- Indexes for table `fotolokasi`
--
ALTER TABLE `fotolokasi`
  ADD PRIMARY KEY (`FOTO`),
  ADD KEY `FK_FOTONYA` (`IDTEMPAT`);

--
-- Indexes for table `jadwal`
--
ALTER TABLE `jadwal`
  ADD PRIMARY KEY (`IDJADWAL`);

--
-- Indexes for table `kota`
--
ALTER TABLE `kota`
  ADD PRIMARY KEY (`IDKOTA`);

--
-- Indexes for table `memiliki`
--
ALTER TABLE `memiliki`
  ADD PRIMARY KEY (`IDTEMPAT`,`IDFASILITAS`),
  ADD KEY `FK_MEMILIKI2` (`IDFASILITAS`);

--
-- Indexes for table `rating`
--
ALTER TABLE `rating`
  ADD PRIMARY KEY (`IDRATING`),
  ADD KEY `fkTW` (`IDTEMPAT`);

--
-- Indexes for table `tag`
--
ALTER TABLE `tag`
  ADD PRIMARY KEY (`TAG`);

--
-- Indexes for table `tempatwisata`
--
ALTER TABLE `tempatwisata`
  ADD PRIMARY KEY (`IDTEMPAT`),
  ADD KEY `FK_TERLETAKDI` (`IDKOTA`);

--
-- Indexes for table `termasuk`
--
ALTER TABLE `termasuk`
  ADD PRIMARY KEY (`TAG`,`IDTEMPAT`),
  ADD KEY `FK_TERMASUK2` (`IDTEMPAT`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `rating`
--
ALTER TABLE `rating`
  MODIFY `IDRATING` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `beroprasi`
--
ALTER TABLE `beroprasi`
  ADD CONSTRAINT `FK_BUKA_HARI2` FOREIGN KEY (`IDTEMPAT`) REFERENCES `tempatwisata` (`IDTEMPAT`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_BUKA_HARI3` FOREIGN KEY (`IDJADWAL`) REFERENCES `jadwal` (`IDJADWAL`) ON DELETE CASCADE;

--
-- Constraints for table `fotolokasi`
--
ALTER TABLE `fotolokasi`
  ADD CONSTRAINT `FK_FOTONYA` FOREIGN KEY (`IDTEMPAT`) REFERENCES `tempatwisata` (`IDTEMPAT`);

--
-- Constraints for table `memiliki`
--
ALTER TABLE `memiliki`
  ADD CONSTRAINT `FK_MEMILIKI` FOREIGN KEY (`IDTEMPAT`) REFERENCES `tempatwisata` (`IDTEMPAT`),
  ADD CONSTRAINT `FK_MEMILIKI2` FOREIGN KEY (`IDFASILITAS`) REFERENCES `fasilitas` (`IDFASILITAS`);

--
-- Constraints for table `rating`
--
ALTER TABLE `rating`
  ADD CONSTRAINT `fkTW` FOREIGN KEY (`IDTEMPAT`) REFERENCES `tempatwisata` (`IDTEMPAT`);

--
-- Constraints for table `tempatwisata`
--
ALTER TABLE `tempatwisata`
  ADD CONSTRAINT `FK_TERLETAKDI` FOREIGN KEY (`IDKOTA`) REFERENCES `kota` (`IDKOTA`);

--
-- Constraints for table `termasuk`
--
ALTER TABLE `termasuk`
  ADD CONSTRAINT `FK_TERMASUK` FOREIGN KEY (`TAG`) REFERENCES `tag` (`TAG`),
  ADD CONSTRAINT `FK_TERMASUK2` FOREIGN KEY (`IDTEMPAT`) REFERENCES `tempatwisata` (`IDTEMPAT`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
