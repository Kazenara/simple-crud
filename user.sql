-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 27, 2022 at 01:59 PM
-- Server version: 5.7.33
-- PHP Version: 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `user`
--

-- --------------------------------------------------------

--
-- Table structure for table `level_detail`
--

CREATE TABLE `level_detail` (
  `id_level` tinyint(4) NOT NULL,
  `level` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `sample_jual`
--

CREATE TABLE `sample_jual` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `jml_jual` decimal(4,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sample_jual`
--

INSERT INTO `sample_jual` (`id`, `id_user`, `jml_jual`) VALUES
(1, 7, '55.00'),
(2, 20, '23.00'),
(3, 8, '11.00'),
(4, 10, '43.00'),
(5, 20, '90.00');

-- --------------------------------------------------------

--
-- Table structure for table `user_detail`
--

CREATE TABLE `user_detail` (
  `id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `level` enum('1','2') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_detail`
--

INSERT INTO `user_detail` (`id`, `email`, `password`, `username`, `level`) VALUES
(5, 'anjay@gmail.com', 'rizal', 'riza', '1'),
(7, 'root', 'root', 'root', '1'),
(8, 'root@gmail.com', 'root', 'administrator', '2'),
(9, '$userMail', '$userPass', '$userName', '2'),
(10, 'root@@skakdhkjas', 'rootskadhsha', 'dsjadjagsd', '2'),
(12, '$userMail', '$usesdsdrPass', '$userName', '2'),
(13, 'root', 'root', 'aoskd', '2'),
(14, 'root', 'root', 'aoskd', '2'),
(15, 'root', 'root', 'sdfsfdsf', '2'),
(20, 'anjayyyinsert', 'insertdonggg', 'okokook@gmail.com', '2'),
(21, 'root', 'root', 'sdsdsd', '2'),
(26, 'anjayyyinsert', 'insertdonggg', 'okokook@gmail.com', '2'),
(27, 'rootdsd', 'root', 'rizal', '2'),
(28, 'okoko@gmai', 'b73fdaa1fb7669da760b49600c45d9be', 'aokwoakow', '1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `level_detail`
--
ALTER TABLE `level_detail`
  ADD PRIMARY KEY (`id_level`);

--
-- Indexes for table `sample_jual`
--
ALTER TABLE `sample_jual`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `user_detail`
--
ALTER TABLE `user_detail`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `sample_jual`
--
ALTER TABLE `sample_jual`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `user_detail`
--
ALTER TABLE `user_detail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `sample_jual`
--
ALTER TABLE `sample_jual`
  ADD CONSTRAINT `sample_jual_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user_detail` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
