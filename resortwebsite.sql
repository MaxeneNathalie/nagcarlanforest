-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 23, 2024 at 07:35 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `resortwebsite`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_cred`
--

CREATE TABLE `admin_cred` (
  `sr_no` int(200) NOT NULL,
  `admin_name` varchar(200) NOT NULL,
  `admin_pass` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin_cred`
--

INSERT INTO `admin_cred` (`sr_no`, `admin_name`, `admin_pass`) VALUES
(1, 'maxenee', 'maxene123');

-- --------------------------------------------------------

--
-- Table structure for table `bookings`
--

CREATE TABLE `bookings` (
  `id` int(11) NOT NULL,
  `name` varchar(150) NOT NULL,
  `phone_number` varchar(50) NOT NULL,
  `address` varchar(150) NOT NULL,
  `check_in` varchar(100) NOT NULL,
  `check_out` varchar(100) NOT NULL,
  `room_id` varchar(100) NOT NULL,
  `payment` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `contact_details`
--

CREATE TABLE `contact_details` (
  `sr_no` int(11) NOT NULL,
  `address` varchar(150) NOT NULL,
  `gmap` varchar(250) NOT NULL,
  `pn1` varchar(100) NOT NULL,
  `pn2` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `fb` varchar(100) NOT NULL,
  `ig` varchar(100) NOT NULL,
  `iframe` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact_details`
--

INSERT INTO `contact_details` (`sr_no`, `address`, `gmap`, `pn1`, `pn2`, `email`, `fb`, `ig`, `iframe`) VALUES
(1, 'Nagcarlan, 4002 Laguna', 'https://maps.app.goo.gl/uXV6DWBNW4B5R1Ch6', '639953001098', '639187950923', 'nagcarlanforestresort@gmail.com', 'facebook.com/NagcarlanForestResort', 'instagram.com/nagcarlanforest', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3869.4033227218783!2d121.43045330000001!3d14.112362599999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x33bd5a132b501c9b:0xe7bacf7232a1bbaf!2sNagcarlan Forest Resort!5e0!3m2!1sen!2sph!4v1714292843320!5m2!1sen!2sph');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `PhoneNumber` bigint(20) NOT NULL,
  `Password` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `Name`, `Email`, `PhoneNumber`, `Password`) VALUES
(12, 'jomarie paterno', 'jomarie@gmail.com', 9978512460, '$2y$10$rCtqvkZubnMXDv2qG6NOue1CQ92tecxwJy2xWhIy4B.VAc1AhUpf.'),
(13, 'sam urrete', 'samurrete@gmail.com', 9876341652, '$2y$10$9kswDyirarGtibq28ucQ6.Jduyfcz/J/AluyqY4/NobahSxtJMHHu'),
(14, 'Maxene Urrete', 'nathaliemaxene15@gmail.com', 9179209493, '$2y$10$TPKa//ytvjVUQi6f/jneZO1PxTK8DJwoeVNaLlvzil4B7K1Vunoha'),
(15, 'jomarie', 'jomariepaterno@gmail.com', 9978512460, '$2y$10$Mz7y.PllDuCNlgxl8JF65OuggOjByarAhxrSfUc5XXXw5MXrj6q4S'),
(16, 'Donzi', 'donzi@gmail.com', 9393409555, '$2y$10$sRBODZup9Szc3JvUWHx72etTUbL1JNiH5ZRvVwf2AMhV91rZ8H4Qy');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `id` int(150) NOT NULL,
  `Name` varchar(150) NOT NULL,
  `Email` varchar(150) NOT NULL,
  `PhoneNumber` bigint(100) NOT NULL,
  `Address` varchar(100) NOT NULL,
  `Pin` bigint(10) NOT NULL,
  `dateOfBirth` date NOT NULL,
  `Password` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`id`, `Name`, `Email`, `PhoneNumber`, `Address`, `Pin`, `dateOfBirth`, `Password`) VALUES
(2, 'jom paterno', 'jomarie@gmail.com', 9978512460, 'cavite', 103, '2024-04-02', '$2y$10$G8loTfyj/KoAreRP7Bcwq.xPDXyk./Q3xcv1LIK1bGy'),
(19, 'yazmina', 'nathaliemaxene15@gmail.com', 9179209493, 'malaya', 1029, '2024-05-22', '$2y$10$ERxkUgtdMLwysQNXL1wLmeWHI0lxU1OjlBC.9u6gBXg'),
(20, 'jomarie', 'jomariepaterno0103@gmail.com', 9978512460, 'manila', 2093, '2024-04-30', '$2y$10$NPRTDmaQq.laLMxwsc5q1.6TElJF3xI15fHjyG4YabS'),
(22, 'Maxene', 'max@gmail.com', 9179209493, 'nagcarlan', 9201, '2024-05-07', '$2y$10$WjL46t7ZvWbswIYiHz7Gseo0YXRy1QM/kIjhstF2ypk'),
(24, 'jom', 'jomarie@gmail.com', 9978512460, 'molino', 2910, '2024-05-23', '$2y$10$2YowR8jg1SqqPfPicWFOte9EmCFN7HsMRukVUcWFNZPQ9EUFQy4Gy'),
(25, 'mina', 'mina@gmail.com', 9357063580, 'nagcarlan', 525, '2024-05-06', 'minaurrete');

-- --------------------------------------------------------

--
-- Table structure for table `setiings`
--

CREATE TABLE `setiings` (
  `sr_no` int(11) NOT NULL,
  `site_title` varchar(50) NOT NULL,
  `site_about` varchar(300) NOT NULL,
  `shutdown` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `setiings`
--

INSERT INTO `setiings` (`sr_no`, `site_title`, `site_about`, `shutdown`) VALUES
(1, 'NAGCARLAN FOREST RESORT', 'Nagcarlan Forest Resort is a “natural spring resort” located at Brgy Silangan Napapatid, Nagcarlan, Laguna. Our facilities include room accommodations, Maria’s Restaurante, swimming pools and “batis” running water straight from Mt. Banahaw.', 0);

-- --------------------------------------------------------

--
-- Table structure for table `staff_details`
--

CREATE TABLE `staff_details` (
  `sr_no` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `picture` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `staff_details`
--

INSERT INTO `staff_details` (`sr_no`, `name`, `picture`) VALUES
(4, 'max', 'IMG_45219.png');

-- --------------------------------------------------------

--
-- Table structure for table `user_queries`
--

CREATE TABLE `user_queries` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `subject` varchar(200) NOT NULL,
  `message` varchar(500) NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_queries`
--

INSERT INTO `user_queries` (`id`, `name`, `email`, `subject`, `message`, `date`) VALUES
(1, 'Maxene Nathalie', 'max@gmail.com', 'bookings', 'how to cancel bookings', '2024-05-04');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_cred`
--
ALTER TABLE `admin_cred`
  ADD PRIMARY KEY (`sr_no`);

--
-- Indexes for table `bookings`
--
ALTER TABLE `bookings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_details`
--
ALTER TABLE `contact_details`
  ADD PRIMARY KEY (`sr_no`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `setiings`
--
ALTER TABLE `setiings`
  ADD PRIMARY KEY (`sr_no`);

--
-- Indexes for table `staff_details`
--
ALTER TABLE `staff_details`
  ADD PRIMARY KEY (`sr_no`);

--
-- Indexes for table `user_queries`
--
ALTER TABLE `user_queries`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_cred`
--
ALTER TABLE `admin_cred`
  MODIFY `sr_no` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `bookings`
--
ALTER TABLE `bookings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `contact_details`
--
ALTER TABLE `contact_details`
  MODIFY `sr_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `id` int(150) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `setiings`
--
ALTER TABLE `setiings`
  MODIFY `sr_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `staff_details`
--
ALTER TABLE `staff_details`
  MODIFY `sr_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `user_queries`
--
ALTER TABLE `user_queries`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
