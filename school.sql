-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 28, 2025 at 10:02 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

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
-- Table structure for table `dos_out_rep`
--

CREATE TABLE `dos_out_rep` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(250) NOT NULL,
  `subject` varchar(200) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `dos_out_rep`
--

INSERT INTO `dos_out_rep` (`id`, `name`, `email`, `subject`, `message`) VALUES
(9, 'tjeice', 'rwishyuraserge@gmail.com', 'letter', 'nbm,.');

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

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`id`, `title`, `thumbnail`, `type`, `image`) VALUES
(4, 'python', './image/pexels-alamin-teslim-ayomide-429127959-30124996.jpg', 'gallery', './image/WhatsApp Video 2025-02-19 at 7.22.34 AM.mp4'),
(5, 'python', './image/pexels-alipli-24206767.jpg', 'best', './image/WhatsApp Video 2025-02-19 at 7.22.46 AM.mp4'),
(6, 'python', './image/pexels-allstar-photography-2149762130-30779856.jpg', 'best', './image/pexels-allstar-photography-2149762130-30779856.jpg'),
(7, 'python', './image/WhatsApp Image 2025-02-18 at 11.29.15 AM.jpeg', 'gallery', './image/WhatsApp Image 2025-02-18 at 11.29.15 AM.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `school`
--

CREATE TABLE `school` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `image` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `school`
--

INSERT INTO `school` (`id`, `title`, `image`) VALUES
(19, 'student in dinning hall', './image/WhatsApp Image 2025-02-18 at 1.01.19 PM (1).jpeg'),
(22, 'in the class room', './image/WhatsApp Image 2025-02-18 at 1.07.06 PM (1).jpeg'),
(24, 'python', './image/pexels-allstar-photography-2149762130-30779856.jpg'),
(27, 'python', './image/SCHOLARSHIP PROGRAM FLYER - Made with PosterMyWall.jpg');

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
('GS DES PARENTS', './image/Online course Blog header - Made with PosterMyWall.jpg', 'gsphuye@yahoo.fr', 'Welcome To Gs des Parents a school dedicated to excellence in education , with qualified teachers , a strong curriculum and modern facilitates . we provide supportive and inclusive learning environment . we nurture creativity leadership and career ', 'RWANDA , HUYE', 89234567, 'Array', 'PO4U3U', 'JNFVJO', 'https://instagram.com/#', 'JVNDFJDFNVO', 'https://linkedin.com/#', '9de37a0627c25684fdd519ca84073e34');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` int(11) NOT NULL,
  `f_name` varchar(250) NOT NULL,
  `l_name` varchar(250) NOT NULL,
  `class` varchar(200) NOT NULL,
  `email` varchar(20) NOT NULL,
  `address` varchar(100) NOT NULL,
  `gender` varchar(30) NOT NULL,
  `password` varchar(232) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `f_name`, `l_name`, `class`, `email`, `address`, `gender`, `password`) VALUES
(10, 'ntwari', 'josue', 'l5sod', 'ntwarijosue5@gmail.c', 'kimisagara', 'male', '1234'),
(11, 'ntwari', 'josue', 'l3dod', 'ntwarijosue5@gmail.c', 'kimisagara', 'male', '123'),
(12, 'gary', 'glacker', 'l4sod', 'gary@gmail.com', 'kigali', 'male', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `st_info`
--

CREATE TABLE `st_info` (
  `id` int(11) NOT NULL,
  `title` varchar(250) NOT NULL,
  `notification` text NOT NULL,
  `created_at` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `st_info`
--

INSERT INTO `st_info` (`id`, `title`, `notification`, `created_at`) VALUES
(14, '2f', '2f3', '2025-02-22 08:07:50'),
(15, 'ccssac', 'you all student we are reminding that time learn will be on 29 February dont be late ', '2025-02-22 08:09:52');

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
(77, 'Janviere UMULISA', 'ntwarijosue5@gmail.com', 'administrator', 780802721, '', './image/comptable.jpg', 'Accountant'),
(78, 'Donathile MUKAYIRANGA', 'ntwarijosue5@gmail.com', 'administrator', 786003991, '', './image/HM (2).jpg', 'School Manager');

-- --------------------------------------------------------

--
-- Table structure for table `tea_st_rep`
--

CREATE TABLE `tea_st_rep` (
  `id` int(11) NOT NULL,
  `title` varchar(250) NOT NULL,
  `report` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tea_st_rep`
--

INSERT INTO `tea_st_rep` (`id`, `title`, `report`) VALUES
(1, 'dd', 'cdcd dd s sd sd d s xs sd  df'),
(2, 'hello ', 'dos am josue');

-- --------------------------------------------------------

--
-- Table structure for table `uploads`
--

CREATE TABLE `uploads` (
  `id` int(11) NOT NULL,
  `title` varchar(250) NOT NULL,
  `discription` varchar(250) NOT NULL,
  `image` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `uploads`
--

INSERT INTO `uploads` (`id`, `title`, `discription`, `image`) VALUES
(49, 'python', '    Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates eius quibusdam soluta possimus vero hic nisi nihil doloremque quia facilis! Ad nemo, nesciunt beatae quae cum ipsa debitis. Aperiam, natus?    Lorem ipsum dolor sit amet consecte', './image/JavaScriptNotesForProfessionals.pdf'),
(50, 'python', 'sdfghjkl;kjhgfdfghjkl;lkjhgfdfghjk', './image/NodeJSNotesForProfessionals.pdf');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dos_out_rep`
--
ALTER TABLE `dos_out_rep`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `school`
--
ALTER TABLE `school`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `school_info`
--
ALTER TABLE `school_info`
  ADD PRIMARY KEY (`name`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `st_info`
--
ALTER TABLE `st_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teachers`
--
ALTER TABLE `teachers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tea_st_rep`
--
ALTER TABLE `tea_st_rep`
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
-- AUTO_INCREMENT for table `dos_out_rep`
--
ALTER TABLE `dos_out_rep`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `school`
--
ALTER TABLE `school`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `st_info`
--
ALTER TABLE `st_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `teachers`
--
ALTER TABLE `teachers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=80;

--
-- AUTO_INCREMENT for table `tea_st_rep`
--
ALTER TABLE `tea_st_rep`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `uploads`
--
ALTER TABLE `uploads`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
