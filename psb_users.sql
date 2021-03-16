-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 06, 2021 at 06:54 AM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ysicalmazaya_web`
--

-- --------------------------------------------------------

--
-- Table structure for table `psb_users`
--

CREATE TABLE `psb_users` (
  `id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(50) NOT NULL,
  `level` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `psb_users`
--

INSERT INTO `psb_users` (`id`, `username`, `password`, `level`) VALUES
(1, '2022', '3a824154b16ed7dab899bf000b80ee', 'Calon Siswa'),
(2, '2022', '3a824154b16ed7dab899bf000b80ee', 'Calon Siswa'),
(3, '2022', '3a824154b16ed7dab899bf000b80ee', 'Calon Siswa'),
(4, '1', 'c4ca4238a0b923820dcc509a6f7584', 'Calon Siswa'),
(5, '1', 'c4ca4238a0b923820dcc509a6f7584', 'Calon Siswa'),
(6, '1', 'c4ca4238a0b923820dcc509a6f7584', 'Calon Siswa'),
(7, '1', 'c4ca4238a0b923820dcc509a6f7584', 'Calon Siswa'),
(8, '1', 'c4ca4238a0b923820dcc509a6f7584', 'Calon Siswa'),
(9, '1', 'c4ca4238a0b923820dcc509a6f7584', 'Calon Siswa'),
(10, '1', 'c4ca4238a0b923820dcc509a6f7584', 'Calon Siswa'),
(11, '2022', '3a824154b16ed7dab899bf000b80ee', 'Calon Siswa'),
(12, '2022', '3a824154b16ed7dab899bf000b80ee', 'Calon Siswa'),
(13, '2021001', '322c6cecbcb12f3357dfb372697532', 'Calon Siswa'),
(14, '20210014', 'd0b633de80b33b8f1e5d00ca2699a9', 'Calon Siswa'),
(15, '20210015', 'b85274fb256b72aef55448402636c3', 'Calon Siswa'),
(16, '20210016', 'b16e285cfd5906286f3d3cbbaa92e0', 'Calon Siswa'),
(17, '20210017', '4297f44b13955235245b2497399d7a93', 'Calon Siswa'),
(18, '20210018', '4297f44b13955235245b2497399d7a', 'Calon Siswa'),
(19, '20210019', 'a7be882bc1d07d40af4c1a2b20d1e5c5', 'Calon Siswa'),
(20, '20210020', 'cfb9bbec8b1c9c50f1e1bc3dc614d2ea', 'Calon Siswa');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `psb_users`
--
ALTER TABLE `psb_users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `psb_users`
--
ALTER TABLE `psb_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;


ALTER TABLE `registrants_junior` ADD `user_id` INT NOT NULL AFTER `id`, ADD INDEX (`user_id`);

ALTER TABLE `registrants_senior` ADD `user_id` INT NOT NULL AFTER `id`, ADD INDEX (`user_id`);