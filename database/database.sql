-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 14, 2020 at 10:39 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `phpmvc`
--
CREATE DATABASE IF NOT EXISTS `phpmvc` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `phpmvc`;

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `id` int(11) NOT NULL,
  `nama` varchar(30) DEFAULT NULL,
  `nrp` varchar(20) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `jurusan` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`id`, `nama`, `nrp`, `email`, `jurusan`) VALUES
(1, 'M Adi Siswanto', '171810052', 'adi15siswanto@gmail.com', 'Tekhnik Informatika'),
(5, 'Abdul Goni Murod', '171810001', 'goni_murad@rocketmail.com', 'Tekhnik Informatika'),
(6, 'Chitoge Kirisaki', '171810023', 'chitogekoebito@gmail.com', 'Tekhnik Industri'),
(7, 'Ryan Azhari', '171810053', 'ryanazh12@gmail.com', 'Tekhnik Informatika'),
(8, 'Ramanda Maulana', '171810054', 'ramandagans@yahoo.co.id', 'Tekhnik Informatika'),
(10, 'Sahrial Hakiki', '171810099', 'kingblake18@gmail.com', 'Tekhnik Informatika');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
