-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 12, 2021 at 12:35 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_pendataan_dosen`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_dosen`
--

CREATE TABLE `tb_dosen` (
  `id_dosen` varchar(128) NOT NULL,
  `nama_dosen` varchar(255) NOT NULL,
  `nama_panggilan` varchar(128) NOT NULL,
  `jenis_kelamin` varchar(128) NOT NULL,
  `agama` varchar(255) NOT NULL,
  `tmpt_lahir` varchar(255) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `no_telp` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `nama_matkul` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_dosen`
--

INSERT INTO `tb_dosen` (`id_dosen`, `nama_dosen`, `nama_panggilan`, `jenis_kelamin`, `agama`, `tmpt_lahir`, `tanggal_lahir`, `alamat`, `no_telp`, `image`, `email`, `nama_matkul`) VALUES
('0201071925', 'Pak Dosen 1', 'Dosen', 'Laki - Laki', 'Kristen', 'Bogor', '2020-07-03', 'Bogor', '08221861221', '596848.jpg', 'Dosen02@dosentazkia.ac.id', 'Kewarganegaraan'),
('0202071914', 'Mba Dosen 1', 'Mba Dsn 1', 'Laki - Laki', 'Kristen', 'Bogor', '2020-07-09', 'Bogor', '08221861428', 'Capture.PNG', 'MbaDsn07@dosentazkia.ac.id', 'Bahasa Indonesia'),
('2210102', 'Raina', 'Rain', 'Perempuan', 'Kristen', 'Bogor', '2021-12-31', 'Bogor', '08221861421', '596848.jpg', 'Rain12@gmail.com', 'PPKN');

-- --------------------------------------------------------

--
-- Table structure for table `tb_mahasiswa`
--

CREATE TABLE `tb_mahasiswa` (
  `nim_mhs` int(11) NOT NULL,
  `image` varchar(128) NOT NULL,
  `nama` varchar(128) NOT NULL,
  `nama_panggilan` varchar(128) NOT NULL,
  `jenis_kelamin` varchar(32) NOT NULL,
  `agama` varchar(128) NOT NULL,
  `tmpt_lahir` varchar(128) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `alamat` text NOT NULL,
  `email` varchar(128) NOT NULL,
  `no_telp` varchar(20) NOT NULL,
  `nama_jurusan` varchar(128) NOT NULL,
  `nama_tahun_akademik` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_mahasiswa`
--

INSERT INTO `tb_mahasiswa` (`nim_mhs`, `image`, `nama`, `nama_panggilan`, `jenis_kelamin`, `agama`, `tmpt_lahir`, `tanggal_lahir`, `alamat`, `email`, `no_telp`, `nama_jurusan`, `nama_tahun_akademik`) VALUES
(4210102, '1.PNG', 'Nadya Tsana', 'Tsana', 'Perempuan', 'Islam', 'Tiongkok', '2019-08-07', 'Bogor', 'sana013@gmail.com', '08221861212', 'Farmasi', '2020'),
(100909205, '596848.jpg', 'Muhammad Fahmi', 'Fahmi', 'Laki - Laki', 'Islam', 'Bogor', '2003-12-31', 'Bogor', 'Fahmi012@tazkia.ac.id', '08229303193', 'Managemen Bisinis', '2020/2021'),
(101907202, '3.PNG', 'Muhammad Akbar Maulana ', 'Akbar', '', '', 'Bogor', '2003-10-09', 'Bogor', 'Akbar04@tazkia.ac.id', '081238923823', 'Sistem Informasi', '2020/2021'),
(102407203, 'Eko_Muchamad_Haryono-25-07-20.jpg', 'Eko Muchamad Haryono', 'Eko', 'Laki-Laki', 'Islam', 'Bogor', '2003-12-11', 'Bogor', 'Eko011@tazkia.ac.id', '082246105463', 'Akutansi', '2020/2021');

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `idUser` int(11) NOT NULL,
  `nama` varchar(128) NOT NULL,
  `username` varchar(128) NOT NULL,
  `password` varchar(128) NOT NULL,
  `level` enum('Admin','Pembimbing','Magang') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`idUser`, `nama`, `username`, `password`, `level`) VALUES
(1, 'Eko Muchamad Haryono', 'Eko ', '81dc9bdb52d04dc20036dbd8313ed055', 'Admin'),
(2, 'Muhammad Fahmi ', 'Fahmi', '827ccb0eea8a706c4c34a16891f84e7b', 'Magang'),
(3, 'Yeskiel Kevin Sinaga', 'Kevin', '827ccb0eea8a706c4c34a16891f84e7b', 'Magang'),
(4, 'Reni Azahra', 'Azahra', '827ccb0eea8a706c4c34a16891f84e7b', 'Pembimbing'),
(5, 'Pendy Saputra ', 'Pendy ', '827ccb0eea8a706c4c34a16891f84e7b', 'Magang'),
(21, 'Andrew Hackor', 'Andrew ', '827ccb0eea8a706c4c34a16891f84e7b', 'Admin'),
(22, 'Susi Purwaningsih', 'Susi', '827ccb0eea8a706c4c34a16891f84e7b', 'Pembimbing'),
(23, 'Raka ParahMen', 'Raka07', '827ccb0eea8a706c4c34a16891f84e7b', 'Magang');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_dosen`
--
ALTER TABLE `tb_dosen`
  ADD PRIMARY KEY (`id_dosen`);

--
-- Indexes for table `tb_mahasiswa`
--
ALTER TABLE `tb_mahasiswa`
  ADD PRIMARY KEY (`nim_mhs`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`idUser`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `idUser` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
