-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 13, 2017 at 04:43 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wisata`
--

-- --------------------------------------------------------

--
-- Table structure for table `pengunjuang`
--

CREATE TABLE `pengunjuang` (
  `id_pengunjung` int(11) NOT NULL,
  `kode_tiket` varchar(30) NOT NULL,
  `id_wisata` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `tgl` date NOT NULL,
  `jumlah` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pengunjuang`
--

INSERT INTO `pengunjuang` (`id_pengunjung`, `kode_tiket`, `id_wisata`, `id_user`, `tgl`, `jumlah`) VALUES
(64, '1712122002', 29, 1, '2017-12-12', 2),
(65, '171212163', 29, 1, '2017-12-12', 4),
(66, '1712128096', 29, 1, '2017-12-12', 1),
(67, '17121226457', 29, 1, '2017-12-12', 5),
(68, '17121231701', 29, 1, '2017-12-12', 3),
(69, '17121224859', 29, 1, '2017-12-12', 5),
(70, '17121217080', 29, 1, '2017-12-13', 2),
(71, '17121210385', 29, 1, '2017-12-13', 2),
(72, '1712122662', 29, 1, '2017-12-13', 2);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(5) NOT NULL,
  `nama_user` varchar(30) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(15) NOT NULL,
  `id_wisata` int(10) NOT NULL,
  `status` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `nama_user`, `username`, `password`, `id_wisata`, `status`) VALUES
(1, 'sidiq fisamalaka', 'sidiq', '123', 29, 'pegawai'),
(4, 'kafsd', 'lasndldak', 'klsdcdk', 19, 'klsdfs'),
(5, 'ongga paicana', 'ongga', '12345', 27, 'admin'),
(7, 'hhh', 'ggggg', '123', 29, 'pegawai');

-- --------------------------------------------------------

--
-- Table structure for table `wisata`
--

CREATE TABLE `wisata` (
  `id_wisata` int(11) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `harga_tiket` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `wisata`
--

INSERT INTO `wisata` (`id_wisata`, `nama`, `harga_tiket`) VALUES
(19, 'gili lebur', 3000),
(27, 'pantai ping', 5000),
(29, 'gili kondo', 3000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pengunjuang`
--
ALTER TABLE `pengunjuang`
  ADD PRIMARY KEY (`id_pengunjung`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- Indexes for table `wisata`
--
ALTER TABLE `wisata`
  ADD PRIMARY KEY (`id_wisata`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pengunjuang`
--
ALTER TABLE `pengunjuang`
  MODIFY `id_pengunjung` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `wisata`
--
ALTER TABLE `wisata`
  MODIFY `id_wisata` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
