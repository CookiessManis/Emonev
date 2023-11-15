-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 15, 2023 at 07:14 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.1.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `emonev`
--

-- --------------------------------------------------------

--
-- Table structure for table `anggaran`
--

CREATE TABLE `anggaran` (
  `id_anggaran` int(11) NOT NULL,
  `tahun` year(4) NOT NULL,
  `jumlah` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `anggaran`
--

INSERT INTO `anggaran` (`id_anggaran`, `tahun`, `jumlah`) VALUES
(9, '2023', '1000000'),
(10, '2010', '4444');

-- --------------------------------------------------------

--
-- Table structure for table `belanja`
--

CREATE TABLE `belanja` (
  `id_belanja` int(11) NOT NULL,
  `no_rek` varchar(250) NOT NULL,
  `rincian` varchar(50) NOT NULL,
  `pagu` int(250) NOT NULL,
  `npd` int(250) NOT NULL,
  `realisasi` int(250) NOT NULL,
  `target` int(250) NOT NULL,
  `id_bulan` int(11) NOT NULL,
  `id_kegiatan` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `id_anggaran` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `belanja`
--

INSERT INTO `belanja` (`id_belanja`, `no_rek`, `rincian`, `pagu`, `npd`, `realisasi`, `target`, `id_bulan`, `id_kegiatan`, `username`, `id_anggaran`) VALUES
(47, 'bca', 'gelas12', 1000, 2000, 10000, 3000, 9, 26, 'malik', 0),
(48, '2323232323', 'gelas12', 1000, 1000, 4000, 4000, 9, 28, 'malik', 0),
(49, '2323232323', 'gelas12', 1000, 1000, 4500, 40000, 9, 28, 'umum', 0),
(50, '2323232323', 'gelas12', 1000, 1000, 1000, 2000, 1, 26, 'malik', 0),
(51, 'bca', 'gelas12', 1000, 1000, 1000, 2000, 2, 26, 'malik', 0),
(52, '2323232323', 'kopi', 1000, 1000, 1234, 4000, 2, 26, 'fajar', 9),
(53, '2323232323', 'gelas12', 200000, 200000, 1000000, 200000, 9, 26, 'fajar', 9);

-- --------------------------------------------------------

--
-- Table structure for table `bulan`
--

CREATE TABLE `bulan` (
  `id_bulan` int(11) NOT NULL,
  `nama_bulan` varchar(50) NOT NULL,
  `id_triwulan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `bulan`
--

INSERT INTO `bulan` (`id_bulan`, `nama_bulan`, `id_triwulan`) VALUES
(1, 'januari', 1),
(2, 'februari', 1),
(3, 'maret', 1),
(4, 'april', 2),
(5, 'mei', 2),
(6, 'juni', 2),
(7, 'juli', 3),
(8, 'agustus', 3),
(9, 'septermber', 3),
(10, 'oktober', 4),
(11, 'november', 4),
(12, 'desember', 4);

-- --------------------------------------------------------

--
-- Table structure for table `kegiatan`
--

CREATE TABLE `kegiatan` (
  `id_kegiatan` int(11) NOT NULL,
  `no_kegiatan` varchar(50) NOT NULL,
  `sub_kegiatan` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `id_anggaran` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `kegiatan`
--

INSERT INTO `kegiatan` (`id_kegiatan`, `no_kegiatan`, `sub_kegiatan`, `username`, `id_anggaran`) VALUES
(26, '123', 'jln', 'malik', 9),
(27, '456', 'kekampus', 'malik', 9),
(28, '123', 'jln', 'umum', 9);

-- --------------------------------------------------------

--
-- Table structure for table `program`
--

CREATE TABLE `program` (
  `id_program` int(11) NOT NULL,
  `program_kerja` varchar(50) NOT NULL,
  `id_anggaran` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `program`
--

INSERT INTO `program` (`id_program`, `program_kerja`, `id_anggaran`) VALUES
(37, 'kolaww', 9),
(38, 'bisnis', 9),
(39, 'perjalanan', 9),
(40, 'dinas222', 9),
(41, 'kola', 9),
(42, 'tes', 9),
(43, 're', 9);

-- --------------------------------------------------------

--
-- Table structure for table `triwulan`
--

CREATE TABLE `triwulan` (
  `id_triwulan` int(11) NOT NULL,
  `triwulan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `triwulan`
--

INSERT INTO `triwulan` (`id_triwulan`, `triwulan`) VALUES
(1, 1),
(2, 2),
(3, 3),
(4, 4);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `username` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`username`, `nama`, `password`, `status`) VALUES
('bangtas', 'seksi pengembangan kapasitas aparatur', 'e18a3ff7b241c95cb6ec9b08f48d69ee', 1),
('binpot', 'seksi bina potensi masyarakat', 'cd5a5d22bc50922142b6e61e4cea6013', 1),
('binwasluh', 'seksi pembinaan, pengawasan, dan pepenyuluhan', 'b0afac0917de442baef6ade31cc99814', 1),
('dalops', 'seksi pengendalian dan operasional', 'bd6a91d2789830237e2d7f55510281c0', 1),
('fajar', 'malik fajar', '81dc9bdb52d04dc20036dbd8313ed055', 2),
('gakdik', 'seksi penegakan dan penyidikan', 'e50dc5bc13b0f963676854595047e45d', 1),
('kerjasama', 'seksi kerja sama ketertiban umum dan ketenteraman', 'ba05fee6398055c37ee7351af51aa8ed', 1),
('keuangan', 'sub  bagian keuangan', '70d9ad2f46661a6e86cb4e1863bd709e', 2),
('linmas', 'seksi satuan perlindungan masyarakat', 'aaaacccf4f5863618e936a21d50f8475', 1),
('malik', 'malik', '81dc9bdb52d04dc20036dbd8313ed055', 1),
('pamwal', 'seksi pengamanan dan pengawalan', 'ee77094fa9e9c78d3b20ff24297e31b0', 1),
('program', 'sub bagian program', 'e952a8395a2d7bce527fcbc966bb881f', 2),
('umum', 'sub bagian umum', '88ba66158a2bba470ee8f258b53bf045', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `anggaran`
--
ALTER TABLE `anggaran`
  ADD PRIMARY KEY (`id_anggaran`);

--
-- Indexes for table `belanja`
--
ALTER TABLE `belanja`
  ADD PRIMARY KEY (`id_belanja`);

--
-- Indexes for table `bulan`
--
ALTER TABLE `bulan`
  ADD PRIMARY KEY (`id_bulan`),
  ADD KEY `id_triwulan` (`id_triwulan`);

--
-- Indexes for table `kegiatan`
--
ALTER TABLE `kegiatan`
  ADD PRIMARY KEY (`id_kegiatan`);

--
-- Indexes for table `program`
--
ALTER TABLE `program`
  ADD PRIMARY KEY (`id_program`);

--
-- Indexes for table `triwulan`
--
ALTER TABLE `triwulan`
  ADD PRIMARY KEY (`id_triwulan`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `anggaran`
--
ALTER TABLE `anggaran`
  MODIFY `id_anggaran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `belanja`
--
ALTER TABLE `belanja`
  MODIFY `id_belanja` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT for table `bulan`
--
ALTER TABLE `bulan`
  MODIFY `id_bulan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `kegiatan`
--
ALTER TABLE `kegiatan`
  MODIFY `id_kegiatan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `program`
--
ALTER TABLE `program`
  MODIFY `id_program` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `triwulan`
--
ALTER TABLE `triwulan`
  MODIFY `id_triwulan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `bulan`
--
ALTER TABLE `bulan`
  ADD CONSTRAINT `bulan_ibfk_1` FOREIGN KEY (`id_triwulan`) REFERENCES `triwulan` (`id_triwulan`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
