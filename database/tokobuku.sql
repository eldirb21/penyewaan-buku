-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 23, 2020 at 12:43 AM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

-- --------------------------------------------------------

--
-- Table structure for table `sewa`
--
CREATE TABLE `sewa` (
  `id` INT(10) NOT NULL AUTO_INCREMENT,
  `judul` VARCHAR(50) NOT NULL,
  `penyewa` VARCHAR(50) NOT NULL,
  `tanggal_sewa` DATE NOT NULL,
  `tanggal_selesai` DATE NOT NULL,
  `durasi` INT(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sewa`
--
INSERT INTO `sewa` (`id`, `judul`, `penyewa`, `tanggal_sewa`, `tanggal_selesai`, `durasi`) VALUES
(1113670, 'Buku 1', 'Johan', '2020-11-23', '2020-11-24', 1),
(1113671, 'Buku 2', 'Jokowi', '2020-11-23', '2020-11-24', 1),
(1113672, 'Buku 3', 'Margaret', '2020-11-23', '2020-11-24', 1),
(1113673, 'Buku 4', 'Nency', '2020-11-23', '2020-11-24', 1);

--
-- Mengatur AUTO_INCREMENT agar id berikutnya tidak bentrok dengan data yang ada
--
ALTER TABLE `sewa`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `sewa` AUTO_INCREMENT = 1113674;


--
-- Indexes for table `sewa`
--


-- --------------------------------------------------------

--
-- Table structure for table `my_chart_data`
--

CREATE TABLE `my_chart_data` (
  `category` date NOT NULL,
  `value1` int(11) NOT NULL,
  `value2` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `my_chart_data`
--

INSERT INTO `my_chart_data` (`category`, `value1`, `value2`) VALUES
('2013-08-24', 417, 127),
('2013-08-25', 417, 356),
('2013-08-26', 531, 585),
('2013-08-27', 333, 910),
('2013-08-28', 552, 30),
('2013-08-29', 492, 371),
('2013-08-30', 379, 781),
('2013-08-31', 767, 494),
('2013-09-01', 169, 364),
('2013-09-02', 314, 476),
('2013-09-03', 437, 759);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(10) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `fullname` varchar(50) NOT NULL,
  `level` varchar(10) NOT NULL,
  `gambar` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `username`, `password`, `fullname`, `level`, `gambar`) VALUES
(1, 'admin@gmail.com', 'admin', 'Admin Buku', 'admin', 'gambar_admin/admin.jpg'),
(2, 'user@gmail.com', 'user', 'Jenifer', 'user', 'gambar_admin/admin.jpg'),
(3, 'user2@gmail.com', 'user2', 'Marry Riana', 'user', 'gambar_admin/admin.jpg'),
(4, 'user3@gmail.com', 'user3', 'Anthoni salim', 'user', 'gambar_admin/admin.jpg');

--
-- Indexes for dumped tables
--


--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
