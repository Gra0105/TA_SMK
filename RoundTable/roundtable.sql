-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 02, 2022 at 09:07 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `roundtable`
--

-- --------------------------------------------------------

--
-- Table structure for table `userrt`
--

CREATE TABLE `userrt` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `userrt`
--

INSERT INTO `userrt` (`id`, `username`, `email`, `password`) VALUES
(1, 'sola', 'graciad1101@gmail.com', '$2y$10$XdRpGySh5hGcC78gnDtD6u1emEEkITE8e0CDAdy815x07iaL.iUqm'),
(4, 'devano', 'devanoalfarizy04@gmail.com', '$2y$10$Q5fmCcNK/8dAkD4lqQvzuekvMBndRsKVA2EHKzSHU/rD4ITdxB6k6'),
(5, 'avalent21', 'avalent21txt@gmail.com', '$2y$10$4XKmP7pTdfU5ynYsV/mJMebtoLNBmlJjAdl1AnDvbcqf2Z6Iy7OIW'),
(8, 'avalent', '', '$2y$10$KCLKSMOS7GhK774Rq6usmOBwM/MtP4SIW6KUwLjAqVXM62Uy1.yGS'),
(9, 'avalent divasea', 'avalentdivasea@smkn2-solo.net', '$2y$10$8A4Z.uehc0gP8AC4hpMgne0NvEU4ugbd8EoPB7UTtetlcEQVDs/LG'),
(10, 'divasea', 'avalent211@gmail.com', '$2y$10$aCvD6.wodTByYWOei2I3WeIR/4CULSz2L5WVAPlcdYc/ZRzePkhYW');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `userrt`
--
ALTER TABLE `userrt`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `userrt`
--
ALTER TABLE `userrt`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
