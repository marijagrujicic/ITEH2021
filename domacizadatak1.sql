-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 23, 2021 at 11:48 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `domacizadatak1`
--

-- --------------------------------------------------------

--
-- Table structure for table `dress`
--

CREATE TABLE `dress` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `fabric` varchar(20) NOT NULL,
  `size` varchar(10) NOT NULL,
  `color` varchar(10) NOT NULL,
  `length` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `url` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dress`
--

INSERT INTO `dress` (`id`, `name`, `fabric`, `size`, `color`, `length`, `price`, `url`) VALUES
(1, 'Haljina', 'materijal', 'M', 'boja', 55, 2000000, 'https://img.halooglasi.com/slike/oglasi/Thumbs/171120/l/haljina-feitong-s-m-l-xl-sl-a-5425626791156-71783981084.jpg'),
(2, 'Haljina 2', 'materijal 2', 'S', 'boja 2', 65, 52365, 'https://www.fashion-luna.com/files/thumbs/files/images/slike_proizvoda/thumbs_800/6837100_800_1200px.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `firstName` varchar(20) NOT NULL,
  `lastName` varchar(20) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `phoneNumber` int(11) NOT NULL,
  `address` varchar(50) NOT NULL,
  `city` varchar(20) NOT NULL,
  `admin` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `firstName`, `lastName`, `username`, `password`, `email`, `phoneNumber`, `address`, `city`, `admin`) VALUES
(1, 'Marija', 'Grujicic', 'marija', 'marija', 'marija@mail.com', 65898985, 'marija', 'marija', 1),
(2, 'Marijana', 'Grujicic', 'marijana', 'marijana', 'marijana@mail.com', 65889000, 'marijana', 'marijana', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dress`
--
ALTER TABLE `dress`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
