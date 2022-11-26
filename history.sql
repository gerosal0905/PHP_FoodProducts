-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 04, 2022 at 04:27 AM
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
-- Database: `nutrilife`
--

-- --------------------------------------------------------

--
-- Table structure for table `history`
--

CREATE TABLE `history` (
  `id` int(50) NOT NULL,
  `username` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `datetime` timestamp(6) NOT NULL DEFAULT current_timestamp(6) ON UPDATE current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `history`
--

INSERT INTO `history` (`id`, `username`, `description`, `datetime`) VALUES
(1, 'Group 1', 'Added a Product', '2022-04-22 13:34:34.244017'),
(2, 'Group 1', 'Deleted a Product', '2022-04-22 13:39:00.819331'),
(3, 'GEQ', 'Added a Product', '2022-04-22 13:40:15.220439'),
(4, 'GEQ', 'Deleted a Product', '2022-04-22 13:40:30.162053'),
(5, 'GEQ', 'Updated a Product', '2022-04-22 13:46:43.130494'),
(6, 'GEQ', 'Updated a Product', '2022-04-22 13:47:01.875578'),
(7, 'Group 1', 'Deleted a Product', '2022-04-30 08:17:14.975138'),
(8, 'Group 1', 'Updated a Product', '2022-05-01 12:28:38.748814'),
(9, 'Group 1', 'Updated a Product', '2022-05-01 12:30:05.908398'),
(10, 'Group 1', 'Updated a Product', '2022-05-01 12:31:27.725035'),
(11, 'Group 1', 'Updated a Product', '2022-05-01 12:31:38.241306'),
(12, 'Group 1', 'Updated a Product', '2022-05-01 12:32:50.677769'),
(13, 'Group 1', 'Updated a Product', '2022-05-01 12:33:51.985083'),
(14, 'Group 1', 'Added a Product', '2022-05-02 10:15:58.660931'),
(15, 'Group 1', 'Added a Product', '2022-05-02 10:17:07.741437'),
(16, 'Group 1', 'Updated a Product', '2022-05-02 10:17:16.335317'),
(17, 'Group 1', 'Updated a Product', '2022-05-02 10:17:22.975502'),
(18, 'Group 1', 'Added a Product', '2022-05-02 10:18:00.460879'),
(19, 'Group 1', 'Added a Product', '2022-05-02 10:18:35.459221'),
(20, 'Group 1', 'Added a Product', '2022-05-02 10:19:12.453377'),
(21, 'Group 1', 'Updated a Product', '2022-05-02 10:26:44.119507'),
(22, 'Group 1', 'Updated a Product', '2022-05-02 10:26:51.075848'),
(23, 'Group 1', 'Updated a Product', '2022-05-02 10:26:57.196215'),
(24, 'Group 1', 'Updated a Product', '2022-05-02 10:27:04.190054'),
(25, 'Group 1', 'Updated a Product', '2022-05-02 10:27:10.728577');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `history`
--
ALTER TABLE `history`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `history`
--
ALTER TABLE `history`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
