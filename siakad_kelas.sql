-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 25, 2019 at 01:48 PM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `siakad_kelas`
--

-- --------------------------------------------------------

--
-- Table structure for table `guru`
--

CREATE TABLE `guru` (
  `nip` varchar(18) NOT NULL,
  `nama` varchar(128) NOT NULL,
  `kode_mapel` varchar(5) NOT NULL,
  `kode_jurusan` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `guru`
--

INSERT INTO `guru` (`nip`, `nama`, `kode_mapel`, `kode_jurusan`) VALUES
('1985033020', 'ardian setiawan', 'OR1', 'OTO'),
('198503302003121', 'Muhamad Zainal Arifin', 'MT1', 'OTO'),
('198503302003121243', 'adinda prilawati', 'MT1', 'OTO'),
('19850330232', 'Maulazamah', 'OR1', 'RPL'),
('19850331355', 'Hendra Agil', 'OR1', 'RPL');

-- --------------------------------------------------------

--
-- Table structure for table `jurusan`
--

CREATE TABLE `jurusan` (
  `kode_jurusan` varchar(5) NOT NULL,
  `nama_jurusan` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jurusan`
--

INSERT INTO `jurusan` (`kode_jurusan`, `nama_jurusan`) VALUES
('MSN', 'Teknik Mesin'),
('OTO', 'Teknik Ototronik'),
('RPL', 'Rekayasa Perangkat Lunak'),
('TBB', 'Busana Butik'),
('TBO', 'Teknik Body Otomotif');

-- --------------------------------------------------------

--
-- Table structure for table `kelas`
--

CREATE TABLE `kelas` (
  `kode_kelas` varchar(5) NOT NULL,
  `nama_kelas` varchar(5) NOT NULL,
  `kode_jurusan` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kelas`
--

INSERT INTO `kelas` (`kode_kelas`, `nama_kelas`, `kode_jurusan`) VALUES
('MSN1', 'XIIMA', 'OTO'),
('RPL1', 'XIIRA', 'RPL'),
('RPL4', 'XIRA', 'RPL'),
('RPL5', 'XI RB', 'RPL');

-- --------------------------------------------------------

--
-- Table structure for table `mapel`
--

CREATE TABLE `mapel` (
  `kode_mapel` varchar(5) NOT NULL,
  `nama_mapel` varchar(18) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mapel`
--

INSERT INTO `mapel` (`kode_mapel`, `nama_mapel`) VALUES
('MT1', 'Matematika'),
('OR1', 'Olahraga');

-- --------------------------------------------------------

--
-- Table structure for table `siswa`
--

CREATE TABLE `siswa` (
  `id` int(11) NOT NULL,
  `nis` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `kelas` char(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `siswa`
--

INSERT INTO `siswa` (`id`, `nis`, `nama`, `kelas`) VALUES
(3, '7869', 'Ardian setiawan', ' XIRA'),
(4, '7860', 'Muhammad Budiyanto', ' XIRA'),
(5, '7869', 'Hendra Agil Syahputra', ' XIRA');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(128) NOT NULL,
  `password` varchar(128) NOT NULL,
  `name` varchar(128) NOT NULL,
  `role_id` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `name`, `role_id`) VALUES
(1, 'admin', '$2y$10$874NcheT/j6GspwuIbPTpeJMFf7QueNPiPntI67/EXeWUgyXzUYD2', 'Muhamad Zainal Arifin', '1'),
(2, '6871', '$2y$10$1ZS/TXwK1Us442WfFyBM1.wvhK83itLLkww4jEFS5TCwXhulTNYUe', 'Muhammad Afin', '1'),
(3, '6872', '$2y$10$g7YrqIgS8huXaeZDqLKBaeBeruAqQfUpxmiZJttf1E8x3YwM5a5gK', 'Muhammad budiyanto', '1'),
(4, '6873', '$2y$10$vyBj3bYW1h8ihR2JHC/raeJaUKacqfiFu5WjPVkcY8mhFw2ekiMcG', 'Muhdani Boyrendi', '1'),
(5, '888', '$2y$10$Zwp2mN3ZGY8c8TlkIXKugeEji20Vy/7Z.9uFZtjyRzE.X2VSA7NvO', 'ardian setiawan', '1'),
(6, '6212', '$2y$10$zirDNMbrN8tAyaEYgeBFYOTymkOq.a84l.TehZFub29QnMiSMg99C', 'adinda prilawati', '1'),
(9, 'renobalap', '$2y$10$kpsqnzbeRfcJKXNprNekEOSaxSQ9D1enKJ2K6x.TgCg5vwuz9aw0a', 'reno', '1'),
(10, 'sinta', '$2y$10$a5cLsk.2TxJY9vOFmlIp6eg8AnvqdoSWTieBB2Vbnw3wvaLSbSkI2', 'Shinta Umi Maisaroh', '1'),
(11, 'esna', '$2y$10$OpxuqidZYTtfARL6Ga79M.cag..Q9XVUwBnRbt2dQzJ6fTlysz47O', 'esna Sahita', '1'),
(12, 'Tika', '$2y$10$A0ppdUAC29vHGyO3HeHN3um8v5I7yJC6DjOuWLdANx/f3I6dqQ6Vi', 'Fatikah Nur Azzahra', '1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `guru`
--
ALTER TABLE `guru`
  ADD PRIMARY KEY (`nip`);

--
-- Indexes for table `jurusan`
--
ALTER TABLE `jurusan`
  ADD PRIMARY KEY (`kode_jurusan`);

--
-- Indexes for table `kelas`
--
ALTER TABLE `kelas`
  ADD PRIMARY KEY (`kode_kelas`);

--
-- Indexes for table `mapel`
--
ALTER TABLE `mapel`
  ADD PRIMARY KEY (`kode_mapel`);

--
-- Indexes for table `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `siswa`
--
ALTER TABLE `siswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
