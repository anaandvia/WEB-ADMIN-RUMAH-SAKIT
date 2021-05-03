-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 27, 2020 at 05:17 PM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 7.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbrumahsakit`
--

-- --------------------------------------------------------

--
-- Table structure for table `dokter`
--

CREATE TABLE `dokter` (
  `DokterID` varchar(10) NOT NULL,
  `Nama` varchar(30) NOT NULL,
  `Spesialis` varchar(30) NOT NULL,
  `NoTelp` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dokter`
--

INSERT INTO `dokter` (`DokterID`, `Nama`, `Spesialis`, `NoTelp`) VALUES
('D01', 'Dr.Yuliana.Sp.pd', 'Penyakit Dalam', '085376549086'),
('D02', 'Dr.Eko Yulisto.Spu', 'Umum', '081290001212'),
('D03', 'Dr.Nita Sari.Spu', 'Umum', '081312671010'),
('D04', 'Dr.Belia.SpA', 'Anak', '082378122332'),
('D05', 'Dr.Zaskia Nay.SpU', 'Umum', '087812781237');

-- --------------------------------------------------------

--
-- Table structure for table `fasilitas`
--

CREATE TABLE `fasilitas` (
  `FasilitasID` varchar(10) NOT NULL,
  `Nama` varchar(30) NOT NULL,
  `Harga` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `fasilitas`
--

INSERT INTO `fasilitas` (`FasilitasID`, `Nama`, `Harga`) VALUES
('F111', 'Dental X-Ray', '200.000'),
('F112', 'Fisioterapi', '100.000'),
('F113', 'Rawat Inap ', '200.000'),
('F114', 'ICU', '500.000'),
('F115', 'Ambulance', '250.000'),
('F116', 'USG', '150.000'),
('F117', 'Medical Check Up', '300.000'),
('F118', 'Rawat Jalan', '120.000'),
('F119', 'Unit Gawat Darurat', '230.000'),
('F120', 'RUANG VVIP PROMOTER 5', '1.250.000');

-- --------------------------------------------------------

--
-- Table structure for table `obat`
--

CREATE TABLE `obat` (
  `ObatID` varchar(10) NOT NULL,
  `Nama` varchar(30) NOT NULL,
  `JenisObat` varchar(30) NOT NULL,
  `TglKadarluasa` date NOT NULL,
  `Harga` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `obat`
--

INSERT INTO `obat` (`ObatID`, `Nama`, `JenisObat`, `TglKadarluasa`, `Harga`) VALUES
('O111', 'ABBOCATH 18	', 'Tablet', '2029-09-01', '14.950'),
('O112', 'ACETON 60ML	', 'Sirup', '2029-09-04', '6.750'),
('O113', 'AFIFLU TAB	', 'Tablet', '2030-01-01', '384'),
('O114', 'ALBIGURAA 25 KAPS ALBIRUNI	', 'Botol', '2025-09-01', '22.880'),
('O115', 'ALBOTHYL 10 ML', 'Botol', '2034-03-01', '30.993'),
('O116', 'BIOLYSIN SMART 60ML', 'Botol', '2024-08-01', '11.385'),
('O117', 'CEFIXIME 100MG HEX @50	', 'Pcs', '2023-01-01', '3.113'),
('O118', 'CENDO GENTAMYCIN EO 0,3%', 'Tube', '2029-04-01', '33.344'),
('O119', 'CHIL KID DHA 200 MD	', 'Pack', '2030-07-01', '32.427'),
('O120', 'DIPROGENTA OINT 5GR	', 'Tube', '2029-01-01', '51.321');

-- --------------------------------------------------------

--
-- Table structure for table `pasien`
--

CREATE TABLE `pasien` (
  `PasienID` varchar(11) NOT NULL,
  `NoKTP` varchar(11) NOT NULL,
  `Nama` varchar(30) NOT NULL,
  `Alamat` varchar(40) NOT NULL,
  `TglLahir` date NOT NULL,
  `NoTelp` varchar(15) NOT NULL,
  `RiwayatPenyakit` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pasien`
--

INSERT INTO `pasien` (`PasienID`, `NoKTP`, `Nama`, `Alamat`, `TglLahir`, `NoTelp`, `RiwayatPenyakit`) VALUES
('P01', '112233', 'Tasya Selvia', 'Batu Aji ', '2001-10-02', '081278561256', 'Alergi Kacang'),
('P02', '112231', 'Ana Jannatu', 'Sagulung', '2000-11-05', '081276787645', 'Alergi Dingin'),
('P03', '112345', 'Erna Nadira', 'Piayu', '2001-09-01', '081278675623', 'Asma'),
('P04', '221133', 'Willy Nabillah', 'Piayu', '2004-07-10', '081278126712', '-'),
('P05', '112334', 'Umi Nashinta', 'Kijang', '2001-09-01', '081267514124', 'Hipertensi'),
('P06', '112245', 'Annisa Nur', 'Perumnas', '1999-01-30', '087867124523', 'Anemia'),
('P07', '221289', 'Nubella Sari', 'Tanjung Unjang', '1998-09-19', '081278676512', 'Alergi Biotik'),
('P08', '229011', 'Mulyani', 'Batu Ampar', '1972-07-07', '087711414497', '-'),
('P09', '119023', 'Ela Diva', 'Belakang Padang', '2001-01-17', '081562712390', 'Asma'),
('P10', '221232', 'Cici Wirma', 'Sengkuang', '2002-07-13', '082389127812', 'Maag'),
('P11', '112239', 'Ajeng Kartika Puspa', 'Mitra Raya', '2000-04-17', '085315194081', 'Anemia');

-- --------------------------------------------------------

--
-- Table structure for table `pembayaran`
--

CREATE TABLE `pembayaran` (
  `PembayaranID` varchar(10) NOT NULL,
  `PemeriksaanID` varchar(10) NOT NULL,
  `Jumlah` varchar(15) NOT NULL,
  `CaraPembayaran` varchar(15) NOT NULL,
  `Tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pembayaran`
--

INSERT INTO `pembayaran` (`PembayaranID`, `PemeriksaanID`, `Jumlah`, `CaraPembayaran`, `Tanggal`) VALUES
('B111', 'M111', '150.000', 'Cash', '2020-02-07'),
('B112', 'M112', '350.000', 'Cash', '2020-03-31'),
('B113', 'M113', '300.000', 'Cash', '2020-03-05'),
('B114', 'M114', '250.000', 'Cash', '2020-04-01'),
('B115', 'M115', '190.000', 'Cash', '2020-04-16'),
('B116', 'M116', '500.000', 'Cash', '2020-04-29'),
('B117', 'M117', '1.000.000', 'Cash', '2020-05-02'),
('B118', 'M118', '650.000', 'Cash', '2020-05-16'),
('B119', 'M119', '90.000', 'Cash', '2019-09-09'),
('B120', 'M120', '320.000', 'Cash', '2020-06-14');

-- --------------------------------------------------------

--
-- Table structure for table `pemeriksaan`
--

CREATE TABLE `pemeriksaan` (
  `PemeriksaanID` varchar(10) NOT NULL,
  `PasienID` varchar(10) NOT NULL,
  `DokterID` varchar(10) NOT NULL,
  `ObatID` varchar(10) NOT NULL,
  `FasilitasID` varchar(10) NOT NULL,
  `Umur` int(4) NOT NULL,
  `BeratBadan` varchar(6) NOT NULL,
  `Keluhan` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pemeriksaan`
--

INSERT INTO `pemeriksaan` (`PemeriksaanID`, `PasienID`, `DokterID`, `ObatID`, `FasilitasID`, `Umur`, `BeratBadan`, `Keluhan`) VALUES
('M111', 'P01', 'D03', 'O119', 'F112', 34, '54', 'Diare'),
('M112', 'P02', 'D01', 'O120', 'F115', 24, '67', 'Keram Perut'),
('M113', 'P03', 'D05', 'O118', 'F112', 32, '66', 'Nyeri dada'),
('M114', 'P04', 'D03', 'O117', 'F112', 18, '48', 'Demam Tinggi'),
('M115', 'P05', 'D02', 'O112', 'F112', 33, '54', 'Pusing'),
('M116', 'P06', 'D01', 'O113', 'F112', 45, '66', 'Demam'),
('M117', 'P07', 'D04', 'O117', 'F117', 23, '55', 'Mutaber'),
('M118', 'P08', 'D03', 'O118', 'F118', 11, '34', 'Demam'),
('M119', 'P09', 'D01', 'O115', 'F115', 46, '55', 'Demam Tinggi'),
('M120', 'P08', 'D01', 'O118', 'F117', 44, '64', 'Pusing'),
('M121', 'P11', 'D03', 'O111', 'F111', 45, '60', 'Sakit Gigi');

-- --------------------------------------------------------

--
-- Table structure for table `pendaftaran`
--

CREATE TABLE `pendaftaran` (
  `PendaftaranID` varchar(11) NOT NULL,
  `PasienID` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pendaftaran`
--

INSERT INTO `pendaftaran` (`PendaftaranID`, `PasienID`) VALUES
('1', 'P01'),
('2', 'P02'),
('3', 'P03'),
('4', 'P04'),
('5', 'P05'),
('6', 'P06'),
('7', 'P07'),
('8', 'P08'),
('9', 'P09'),
('10', 'P10'),
('11', 'P11');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `no` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`no`, `username`, `password`) VALUES
(1, 'admin', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dokter`
--
ALTER TABLE `dokter`
  ADD PRIMARY KEY (`DokterID`);

--
-- Indexes for table `fasilitas`
--
ALTER TABLE `fasilitas`
  ADD PRIMARY KEY (`FasilitasID`);

--
-- Indexes for table `obat`
--
ALTER TABLE `obat`
  ADD PRIMARY KEY (`ObatID`);

--
-- Indexes for table `pasien`
--
ALTER TABLE `pasien`
  ADD PRIMARY KEY (`PasienID`);

--
-- Indexes for table `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD PRIMARY KEY (`PembayaranID`),
  ADD KEY `PemeriksaanID` (`PemeriksaanID`);

--
-- Indexes for table `pemeriksaan`
--
ALTER TABLE `pemeriksaan`
  ADD PRIMARY KEY (`PemeriksaanID`),
  ADD KEY `PasienID` (`PasienID`),
  ADD KEY `DokterID` (`DokterID`),
  ADD KEY `ObatID` (`ObatID`),
  ADD KEY `FasilitasID` (`FasilitasID`);

--
-- Indexes for table `pendaftaran`
--
ALTER TABLE `pendaftaran`
  ADD PRIMARY KEY (`PendaftaranID`),
  ADD KEY `PasienID` (`PasienID`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD CONSTRAINT `pembayaran_ibfk_1` FOREIGN KEY (`PemeriksaanID`) REFERENCES `pemeriksaan` (`PemeriksaanID`);

--
-- Constraints for table `pemeriksaan`
--
ALTER TABLE `pemeriksaan`
  ADD CONSTRAINT `pemeriksaan_ibfk_1` FOREIGN KEY (`PasienID`) REFERENCES `pasien` (`PasienID`),
  ADD CONSTRAINT `pemeriksaan_ibfk_2` FOREIGN KEY (`DokterID`) REFERENCES `dokter` (`DokterID`),
  ADD CONSTRAINT `pemeriksaan_ibfk_3` FOREIGN KEY (`ObatID`) REFERENCES `obat` (`ObatID`),
  ADD CONSTRAINT `pemeriksaan_ibfk_4` FOREIGN KEY (`FasilitasID`) REFERENCES `fasilitas` (`FasilitasID`);

--
-- Constraints for table `pendaftaran`
--
ALTER TABLE `pendaftaran`
  ADD CONSTRAINT `pendaftaran_ibfk_1` FOREIGN KEY (`PasienID`) REFERENCES `pasien` (`PasienID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
