-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 08, 2020 at 10:51 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.1.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `multi_upload`
--

-- --------------------------------------------------------

--
-- Table structure for table `gambar`
--

CREATE TABLE `gambar` (
  `id` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gambar`
--

INSERT INTO `gambar` (`id`, `judul`) VALUES
(24, 'pertemuan_dengan_juri_lomba_keagaman_220719_190722_0004.jpg'),
(25, 'pertemuan_dengan_juri_lomba_keagaman_220719_190722_0005.jpg'),
(26, 'pertemuan_dengan_juri_lomba_keagaman_220719_190722_0002.jpg'),
(27, 'pertemuan_dengan_juri_lomba_keagaman_220719_190722_00021.jpg'),
(28, 'pertemuan_dengan_juri_lomba_keagaman_220719_190722_00022.jpg'),
(29, 'pertemuan_dengan_juri_lomba_keagaman_220719_190722_00061.jpg'),
(30, 'pertemuan_dengan_juri_lomba_keagaman_220719_190722_00062.jpg'),
(31, 'pertemuan_dengan_juri_lomba_keagaman_220719_190722_00064.jpg'),
(32, 'pertemuan_dengan_juri_lomba_keagaman_220719_190722_00065.jpg'),
(33, 'pertemuan_dengan_juri_lomba_keagaman_220719_190722_00066.jpg'),
(34, 'pertemuan_dengan_juri_lomba_keagaman_220719_190722_0001.jpg'),
(35, 'pertemuan_dengan_juri_lomba_keagaman_220719_190722_00011.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `gambar`
--
ALTER TABLE `gambar`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `gambar`
--
ALTER TABLE `gambar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
