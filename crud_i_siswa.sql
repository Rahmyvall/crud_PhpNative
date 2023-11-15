-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 15, 2023 at 11:39 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `crud_i_siswa`
--

-- --------------------------------------------------------

--
-- Table structure for table `is_siswa`
--

CREATE TABLE `is_siswa` (
  `nis` varchar(10) NOT NULL,
  `partno` varchar(30) NOT NULL,
  `partname` varchar(30) NOT NULL,
  `qty` varchar(10) NOT NULL,
  `box` varchar(30) NOT NULL,
  `supp` enum('masuk','keluar') NOT NULL,
  `lp` enum('Laki-laki','Perempuan') NOT NULL,
  `iami` enum('masuk','keluar') NOT NULL,
  `qtyditerima` varchar(20) NOT NULL,
  `remarks` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `is_siswa`
--

INSERT INTO `is_siswa` (`nis`, `partno`, `partname`, `qty`, `box`, `supp`, `lp`, `iami`, `qtyditerima`, `remarks`) VALUES
('322', 'YT638', 'YFJ24', '10', '3', 'masuk', 'Perempuan', 'masuk', 'Yes', 'Yes'),
('323', 'YD324', 'JFAK5', '10', '3', 'masuk', 'Laki-laki', 'masuk', 'Yes', 'yes'),
('342', 'IDJF3', 'JDA4', '30', '10', 'masuk', 'Laki-laki', 'masuk', 'Yes', 'Yes'),
('655', 'UDJ53', 'ZAJD34', '10', '10', 'masuk', 'Perempuan', 'masuk', 'Yes', 'yes');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `is_siswa`
--
ALTER TABLE `is_siswa`
  ADD PRIMARY KEY (`nis`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
