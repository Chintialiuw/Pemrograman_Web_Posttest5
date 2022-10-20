-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 20, 2022 at 04:57 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `posttest_5_prakpemweb`
--

-- --------------------------------------------------------

--
-- Table structure for table `menu_cupcakes`
--

CREATE TABLE `menu_cupcakes` (
  `id` int(11) NOT NULL,
  `nama` varchar(25) NOT NULL,
  `topping` varchar(20) NOT NULL,
  `gula` varchar(15) NOT NULL,
  `harga` int(20) NOT NULL,
  `stok` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `menu_cupcakes`
--

INSERT INTO `menu_cupcakes` (`id`, `nama`, `topping`, `gula`, `harga`, `stok`) VALUES
(5, 'Apple Cookies', 'Apel', 'Less Sugar', 23000, 20),
(8, 'Cookie Monster', 'Cookies', 'Normal Sugar', 25500, 18),
(11, 'Chocolate Caramel', 'Caramel', 'Normal Sugar', 35000, 15),
(12, 'Vanilla Cupcakes', 'Sprinkle', 'Normal Sugar', 28500, 19),
(13, 'Chocolate Butter', 'Butter Cream', 'Normal Sugar', 14500, 16),
(14, 'Avocado Cream', 'Avocado', 'Less Sugar', 35000, 5),
(15, 'Cherry and Cream', 'Cherry', 'Normal Sugar', 22000, 9),
(16, 'Red Velvet', 'Almond', 'Normal Sugar', 40000, 100),
(17, 'Strawberry Cream', 'Strawberry', 'Normal Sugar', 35000, 15);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `menu_cupcakes`
--
ALTER TABLE `menu_cupcakes`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `menu_cupcakes`
--
ALTER TABLE `menu_cupcakes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
