-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 03, 2017 at 11:31 PM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `users`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `pwhash` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `pwhash`) VALUES
(5, 'me@abv.bg', '123'),
(6, 'Test', '$2y$10$nxPsCPTvYoEHrjlL/liX0.VQNJnwS.MOFi2JDJ85juk5FVYKs14Q2'),
(7, 'Test', '$2y$10$8J19/e48rQCNFzgm9i87zO3.GLeWclHxPZDEQMdI.IBAmBG63OiCO'),
(8, 'Test1', '$2y$10$jpR/NJpDVICLc.MyrOckWeWiFjoEflMoq.aFs5qVwYD40kv.yqfdK'),
(9, 'Test', '$2y$10$6NHsaRYGe7e1yWB2WyylmuBBQ8ZMYFGQ5KkJYBj/wf9xl84mjW3XC'),
(10, 'Test', '$2y$10$twZEhQBujwrQpa/Oropqtej48xjWbnCNujTI8WvqF9SHf3zE4apyq'),
(11, 'Test2', '$2y$10$z2r/ug.R7KHT8HQmFqleKe.6A70o6r55ahKMqA8CDhdlnt9eJkt7.'),
(12, 'Test.', '$2y$10$xz1sbWQz1OdH026PSV6dBe3a8yUM.Z8sYhhlP5kDRz2Xl1a25Sm.O'),
(13, 'Test.', '$2y$10$s0Qn2jsMv.sVhHkC5aO/NOXlwB8mwjAf6tVIrTe5zyMUChBmD/KJO'),
(14, 'Test', '$2y$10$IcuqnuiP0WQvqQsq/4zDEOWE7O3foNibXW6JmAtpS83ceBjVwfFx2');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
