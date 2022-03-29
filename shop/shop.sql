-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 29, 2022 at 08:12 PM
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
-- Database: `shop`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_table`
--

CREATE TABLE `admin_table` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin_table`
--

INSERT INTO `admin_table` (`id`, `email`, `password`) VALUES
(1, 'dlbrenakre17@gmail.com', 'bf5639c3403782c1d31e4bf1707a103a82bd84eeb91ddfd7e5359a0ae4324b8b');

-- --------------------------------------------------------

--
-- Table structure for table `ourbox`
--

CREATE TABLE `ourbox` (
  `id` int(11) NOT NULL,
  `box_number` varchar(255) NOT NULL,
  `captured_or_no` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ourbox`
--

INSERT INTO `ourbox` (`id`, `box_number`, `captured_or_no`) VALUES
(1, 'بۆکسی یەکەم', 'گیراوە'),
(2, 'بۆکسی دووەم', 'گیراوە'),
(3, 'بۆکسی سێیەم', 'بەتاڵە'),
(4, 'بۆکسی چوارەم', 'گیراوە'),
(5, 'بۆکسی پێنجەم', 'بەتاڵە'),
(6, 'بۆکسی شەشەم', 'بەتاڵە'),
(7, 'بۆکسی حەوتەم', 'گیراوە'),
(8, 'بۆکسی هەشتەم', 'بەتاڵە'),
(9, 'بۆکسی نۆیەم', 'بەتاڵە'),
(10, 'بۆکسی دەیەم', 'بەتاڵە'),
(11, 'بۆکسی یازدەیەم', 'بەتاڵە'),
(12, 'بۆکسی دوازدەم', 'بەتاڵە'),
(13, 'بۆکسی سێزدەم', 'بەتاڵە'),
(14, 'بۆکسی چواردەم', 'بەتاڵە'),
(15, 'بۆکسی پانزەیەم', 'بەتاڵە'),
(16, 'بۆکسی شانزەیەم', 'بەتاڵە'),
(17, 'بۆکسی حەڤدەیەم', 'بەتاڵە'),
(18, 'بۆکسی هەشدە', 'بەتاڵە'),
(19, 'بۆکسی نۆزدە', 'بەتاڵە'),
(20, 'بۆکسی بیست', 'بەتاڵە'),
(21, 'بۆکسی بیست و یە ک', 'گیراوە'),
(22, 'بۆکسی بیست و دوو', 'بەتاڵە'),
(23, 'بۆکسی بیست و سی', 'گیراوە');

-- --------------------------------------------------------

--
-- Table structure for table `sendbox`
--

CREATE TABLE `sendbox` (
  `id` int(11) NOT NULL,
  `numofbox` varchar(150) NOT NULL,
  `place` varchar(200) NOT NULL,
  `dateofcome` date NOT NULL,
  `weightofgoods` varchar(255) NOT NULL,
  `dateofrecived` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sendbox`
--

INSERT INTO `sendbox` (`id`, `numofbox`, `place`, `dateofcome`, `weightofgoods`, `dateofrecived`) VALUES
(3, 'بۆکسی چوارەم', 'dhok', '0000-00-00', '', '0000-00-00'),
(4, 'بۆکسی چوارەم', 'dho', '0000-00-00', '', '0000-00-00'),
(5, 'بۆکسی چوارەم', 'dh', '0000-00-00', '', '0000-00-00'),
(6, 'بۆکسی چوارەم', 'd', '0000-00-00', '', '0000-00-00'),
(9, 'بۆکسی چوارەم', 'کەنەدە', '2022-02-22', 'kg30', '2022-02-08'),
(11, 'بۆکسی چوارەم', 'dhok', '2022-02-05', 'kg30', '2022-02-06'),
(12, 'بۆکسی چوارەم', 'USA', '2022-02-02', '20', '2022-02-10'),
(13, 'بۆکسی چوارەم', 'کەنەدە', '2022-02-01', '50kg', '2022-02-06'),
(14, 'بۆکسی بیست و سی', 'کەنەدا', '2022-02-09', '50kg', '2022-02-06'),
(15, 'بۆکسی بیست و سی', 'کەرکوک', '2022-02-10', '50kg', '2022-02-06'),
(16, 'بۆکسی بیست و سی', 'کەنەدا', '2022-02-06', '50kg', '2022-02-06'),
(22, 'بۆکسی دووەم', 'کەنەدا', '2022-02-10', '50kg', '2022-02-18'),
(25, 'بۆکسی دووەم', 'کەرکوک', '2022-02-10', '50kg', '2022-02-10'),
(26, 'بۆکسی یەکەم', 'هەولێر', '2022-02-12', '٢٠کم', '2022-02-18');

-- --------------------------------------------------------

--
-- Table structure for table `usertable`
--

CREATE TABLE `usertable` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `box_num` varchar(150) NOT NULL,
  `password` bigint(20) NOT NULL,
  `name` varchar(255) NOT NULL,
  `phone` bigint(20) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `country` varchar(150) NOT NULL,
  `image` varchar(255) NOT NULL,
  `pending/accept` varchar(100) NOT NULL,
  `recorded` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `usertable`
--

INSERT INTO `usertable` (`id`, `email`, `box_num`, `password`, `name`, `phone`, `gender`, `country`, `image`, `pending/accept`, `recorded`) VALUES
(2, '', 'ژمارەی بۆکس', 0, '', 0, '', '', '', 'چاوەڕوانی', ''),
(4, '', 'ژمارەی بۆکس', 237415, '', 0, '', '', '', 'وەرگیرا', ''),
(5, 'hawzhin.azad22@charmouniversity.org', 'بۆکسی حەوتەم', 781073, 'hawzhin kawa', 7706756168, 'مێ', 'سلێمانی', '1383347464.jpg', 'وەرگیرا', 'بەلێ'),
(6, 'hawzhin.azad22@charmouniversity.org', 'بۆکسی چوارەم', 307171, 'hawzhin kawa', 7706756168, 'مێ', 'سلێمانی', '574629281.jpg', 'وەرگیرا', 'بەلێ'),
(7, 'hawzhin.azad22@charmouniversity.org', 'بۆکسی بیست و سی', 399940, 'narmin', 7706756168, 'مێ', 'دهۆک', '9398865.jpg', 'وەرگیرا', 'بەلێ'),
(8, 'hawzhin.azad22@charmouniversity.org', 'بۆکسی بیست و یە ک', 512216, 'hawzhen kawa azad', 7706756168, 'مێ', 'سلێمانی', '1222095864.jpg', 'وەرگیرا', 'بەلێ'),
(11, 'dlbrenakre@yahoo.com', 'بۆکسی دووەم', 130641, 'Dla Azad', 7514142252, 'نێر', 'دهۆک', '766149291.png', 'وەرگیرا', 'بەلێ'),
(12, 'dlbrenakre17@gmail.com', 'بۆکسی یەکەم', 803424, 'Dla Azad', 7514142252, 'نێر', 'دهۆک', '2123872022.png', 'وەرگیرا', 'بەلێ');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_table`
--
ALTER TABLE `admin_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ourbox`
--
ALTER TABLE `ourbox`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sendbox`
--
ALTER TABLE `sendbox`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `usertable`
--
ALTER TABLE `usertable`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_table`
--
ALTER TABLE `admin_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `ourbox`
--
ALTER TABLE `ourbox`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `sendbox`
--
ALTER TABLE `sendbox`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `usertable`
--
ALTER TABLE `usertable`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
