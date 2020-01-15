-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 15, 2020 at 01:52 PM
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
('19850330232213', 'Muhamad Zainal Arifin', 'OR1', 'MSN');

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
('RPL', 'Rekayasa Perangkat Lunak'),
('TBB', 'Busana Butik'),
('TBO', 'Teknik Body Otomotif'),
('TBSM', 'Teknik Body Otomotif');

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
('RPL5', 'XI RB', 'RPL'),
('RRC', 'XIIRC', 'RPL');

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
  `role` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `name`, `role`) VALUES
(17, 'admin', '$2y$10$euQvFwKp.nTkoqp1O7FtEuglxN1vHjB8bMzvHO0AjFBKuDpOgjfLC', 'Muhamad Zainal Arifin', 'Admin'),
(18, 'hendraagil', '$2y$10$g0XX2.v/YsPKxKGHF.o6QuKqPTzVKR0wUOtIhpVATFucuYt8et3N.', 'Hendra Agil', 'Siswa'),
(19, 'adinda prilawati', '$2y$10$Cf5xTwVv5UD9uNXSJ9ldqekCl01mWzDXmQhf/31ImcXVQcq4jK3GW', 'adinda prilawati', 'Siswa'),
(20, 'maskur', '$2y$10$pUsBCKAVmwjovDpAB4zRnep.eZZUDUBKMz7ss/V4J9F8I4XnVURlm', 'maskur anam', 'Siswa'),
(21, 'sinta', '$2y$10$M2XJpGZ5BrtJZ/mbJqNQbupAVYHOOEG/J.kQU9hy5zZLJri6R2kxy', 'sinta umi maisaroh', 'Siswa'),
(22, 'Reno', '$2y$10$yGb6.PJmnKrKJf.TzqCgA.LSbz03Qq2cYfqcjDkk0E.23pJXKgy7m', 'Reno adrianto', 'Guru'),
(23, 'salam', '$2y$10$fcj8ziVZGtjJ1erH6IivpO1WCMcFzf67QnyNMIOhWDIrsQqIsHkx2', 'salam gento', 'Admin'),
(24, 'ardian', '$2y$10$5zUiLVYvvaeA46jz2b6rae8nhhSog9Kiuyhs7Z1pR1tS26m9lsw/K', 'ardian setiawan', 'Admin'),
(25, 'fatika', '$2y$10$UBHBOmsDcy4p0Nijdr/Ue.nzC1YP/Bo4kUynrZsj5L23UuxlO5f3K', 'Fatikah Nur Azzahra', 'Siswa'),
(26, 'esna', '$2y$10$ECm43qvwLyfSQuvCnuRwf.eeHGMXW1.qH5Trl229FhiHrCFKufsom', 'esna Sahita', 'Siswa'),
(27, 'mayasari', '$2y$10$AbUfyCPqk.mrePwn5HMLpueFAvWBv2z4.J1HbZTHRN4VZRuKxEbZi', 'mayasai j', 'Siswa');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
