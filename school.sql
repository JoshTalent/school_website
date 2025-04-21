-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 21, 2025 at 03:53 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `school`
--

-- --------------------------------------------------------

--
-- Table structure for table `archive`
--

CREATE TABLE `archive` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `image` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `archive`
--

INSERT INTO `archive` (`id`, `title`, `image`) VALUES
(19, 'student in dinning hall', './image/WhatsApp Image 2025-02-18 at 1.01.19 PM (1).jpeg'),
(22, 'in the class room', './image/WhatsApp Image 2025-02-18 at 1.07.06 PM (1).jpeg'),
(24, 'python', './image/pexels-allstar-photography-2149762130-30779856.jpg'),
(27, 'python', './image/SCHOLARSHIP PROGRAM FLYER - Made with PosterMyWall.jpg'),
(28, 'er', './image/leanwithgn.png'),
(29, 'sd', './image/leanwithgn.png'),
(30, 'send', './image/'),
(31, '2026', './image/');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `thumbnail` varchar(200) NOT NULL,
  `type` varchar(100) NOT NULL,
  `image` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

CREATE TABLE `notifications` (
  `id` int(11) NOT NULL,
  `title` varchar(250) NOT NULL,
  `notification` text NOT NULL,
  `created_at` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `notifications`
--

INSERT INTO `notifications` (`id`, `title`, `notification`, `created_at`) VALUES
(14, '2f', '2f3', '2025-02-22 08:07:50'),
(15, 'ccssac', 'you all student we are reminding that time learn will be on 29 February dont be late ', '2025-02-22 08:09:52'),
(16, 'hell', 'jnkf', '2025-04-17 13:23:21'),
(17, 'hello', 'asd', '2025-04-17 13:25:18');

-- --------------------------------------------------------

--
-- Table structure for table `report`
--

CREATE TABLE `report` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(250) NOT NULL,
  `subject` varchar(200) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `report`
--

INSERT INTO `report` (`id`, `name`, `email`, `subject`, `message`) VALUES
(11, 'kabaye', 'gatarepatrick05@gmail.com', 'letter', 'wertypoiuyhtfgdrsqwertyghujkl;lkjhmgfbdvsaASDFGH');

-- --------------------------------------------------------

--
-- Table structure for table `school_info`
--

CREATE TABLE `school_info` (
  `name` varchar(140) NOT NULL,
  `image` varchar(250) NOT NULL,
  `email` varchar(100) NOT NULL,
  `about` varchar(250) NOT NULL,
  `location` text NOT NULL,
  `phone` int(20) NOT NULL,
  `headmaster` varchar(100) NOT NULL,
  `pobox` varchar(30) NOT NULL,
  `facebook` varchar(250) NOT NULL,
  `instagram` varchar(250) NOT NULL,
  `x` varchar(250) NOT NULL,
  `linked` varchar(200) NOT NULL,
  `password` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `school_info`
--

INSERT INTO `school_info` (`name`, `image`, `email`, `about`, `location`, `phone`, `headmaster`, `pobox`, `facebook`, `instagram`, `x`, `linked`, `password`) VALUES
('GS DES PARENTS', './image/Online course Blog header - Made with PosterMyWall.jpg', 'gsphuye@yahoo.fr', 'Welcome To Gs des Parents a school dedicated to excellence in education , with qualified teachers , a strong curriculum and modern facilitates . we provide supportive and inclusive learning environment . we nurture creativity leadership and career ', 'RWANDA , HUYE', 89234567, 'Array', 'PO4U3U', 'JNFVJO', 'https://instagram.com/#', 'JVNDFJDFNVO', 'https://linkedin.com/#', '81dc9bdb52d04dc20036dbd8313ed055');

-- --------------------------------------------------------

--
-- Table structure for table `teachers`
--

CREATE TABLE `teachers` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `category` varchar(200) NOT NULL,
  `phone` int(40) NOT NULL,
  `gender` varchar(7) NOT NULL,
  `image` varchar(100) NOT NULL,
  `proffession` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `teachers`
--

INSERT INTO `teachers` (`id`, `name`, `email`, `category`, `phone`, `gender`, `image`, `proffession`) VALUES
(75, 'Etienne NIZEYIMANA', 'ntwarijosue5@gmail.com', 'administrator', 783937376, '', './image/trainer-2.jpg', 'Displine Master'),
(76, ' Marie Claire UMURERWA', 'ntwarijosue5@gmail.com', 'administrator', 785007972, '', './image/secretaire.jpg', 'Secretary'),
(77, 'Janviere UMULISA', 'ntwarijosue5@gmail.com', '', 780802721, '', './image/FB_IMG_16912516086008035.jpg', 'qwaesrdtfyuiokljhgvbcfxz');

-- --------------------------------------------------------

--
-- Table structure for table `uploads`
--

CREATE TABLE `uploads` (
  `id` int(11) NOT NULL,
  `title` varchar(250) NOT NULL,
  `discription` varchar(50) NOT NULL,
  `image` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `uploads`
--

INSERT INTO `uploads` (`id`, `title`, `discription`, `image`) VALUES
(50, 'python', 'sdfghjkl;kjhgfdfghjkl;lkjhgfdfghjk', './image/NodeJSNotesForProfessionals.pdf'),
(51, 'kabaye', 'qwertyuilkj,mhnfbgvdcsx', './image/ASOL BUSINESS.pdf'),
(54, 'UMWANA', 'SESE BEB', './image/');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `archive`
--
ALTER TABLE `archive`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `report`
--
ALTER TABLE `report`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `school_info`
--
ALTER TABLE `school_info`
  ADD PRIMARY KEY (`name`);

--
-- Indexes for table `teachers`
--
ALTER TABLE `teachers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `uploads`
--
ALTER TABLE `uploads`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `archive`
--
ALTER TABLE `archive`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `notifications`
--
ALTER TABLE `notifications`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `report`
--
ALTER TABLE `report`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `teachers`
--
ALTER TABLE `teachers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=81;

--
-- AUTO_INCREMENT for table `uploads`
--
ALTER TABLE `uploads`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
