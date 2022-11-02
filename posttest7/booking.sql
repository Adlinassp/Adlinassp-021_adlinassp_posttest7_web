-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 02, 2022 at 10:07 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `book_cafe`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `id` int(11) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `tanda` int(10) NOT NULL,
  `email` varchar(30) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `tanggal` date NOT NULL,
  `gambar` varchar(100) NOT NULL,
  `tanggal_booking` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`id`, `nama`, `tanda`, `email`, `gender`, `tanggal`, `gambar`, `tanggal_booking`) VALUES
(35, 'adlina safa sephia putri', 2109106021, 'safasephia@gmail.com', 'perempuan', '2022-11-02', 'adlina safa sephia putri.jpeg', '27-10-2022'),
(36, 'M. Fadhal Akhmal', 2147483647, 'akhmal@gmail.com', 'laki-laki', '2022-11-02', 'M. Fadhal Akhmal.jpg', '27-10-2022'),
(37, 'Andi Nur Fadilah', 2109106015, 'andinurfadilah2203@gmail.com', 'perempuan', '2022-11-04', 'Andi Nur Fadilah.jpeg', '27-10-2022'),
(38, 'Al-fiana Nur Priyanti', 2109106022, 'alfiananurpriyanti@gmail.com', 'perempuan', '2022-11-02', 'Al-fiana Nur Priyanti.jpeg', '27-10-2022'),
(39, 'Shafira Octafia ', 2109106023, 'shafiraoctfa@gmail.com', 'perempuan', '2022-10-31', 'Shafira Octafia .jpeg', '27-10-2022');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
