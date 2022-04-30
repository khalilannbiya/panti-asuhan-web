-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 01, 2022 at 12:59 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.4.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `panti_asuhan`
--

-- --------------------------------------------------------

--
-- Table structure for table `panti`
--

CREATE TABLE `panti` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `j_bank` enum('BCA','BNI','BRI','MANDIRI','CIMB NIAGA','BJB') NOT NULL,
  `nominal` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `panti`
--

INSERT INTO `panti` (`id`, `nama`, `alamat`, `j_bank`, `nominal`) VALUES
(26, 'ucup', 'perumnas', 'BNI', '12.000'),
(27, 'ucup', 'perumnas', 'BNI', '12.000'),
(28, 'ucup', 'perumahan', 'BCA', '50.000'),
(29, 'ucup', 'karawang wetan', 'BCA', '12.000'),
(30, 'ucup', 'perumnas telukjambe', 'BNI', '12.000'),
(31, 'm', 'm', 'BCA', '999999999999999'),
(32, 'syeui', 'karaan\r\n', 'BCA', '2001'),
(33, 'khalil', 'perum', 'BNI', 'Syeich Khalil'),
(34, 'Syeich Khalil', 'Perum Gading Mas', 'BCA', '1.000.000');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `panti`
--
ALTER TABLE `panti`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `panti`
--
ALTER TABLE `panti`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
