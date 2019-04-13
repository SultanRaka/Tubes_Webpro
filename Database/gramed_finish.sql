-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 13, 2019 at 06:31 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gramed`
--

-- --------------------------------------------------------

--
-- Table structure for table `buku`
--

CREATE TABLE `buku` (
  `id` int(11) NOT NULL,
  `judul` varchar(100) DEFAULT NULL,
  `author` varchar(100) DEFAULT NULL,
  `kategori` varchar(100) DEFAULT NULL,
  `deskripsi` text,
  `harga` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `buku`
--

INSERT INTO `buku` (`id`, `judul`, `author`, `kategori`, `deskripsi`, `harga`) VALUES
(11, 'Sieg Heil', 'Nino Oktorino', 'sejarah', 'Buku Sieg Heil Karya Nino Oktorino', 50000),
(12, 'Perang Terlama Belanda', 'Nino Oktorino', 'sejarah', 'Buku Perang Terlama Belanda Karya Nino Oktorino', 100000),
(13, 'Mesin Militer Hitler', 'Nino Oktorino', 'sejarah', 'Buku Mesin iliter Hitler Karya Nino Oktorino', 100000),
(21, 'Il Principe', 'Niccolo Machiaveli', 'politik', 'Buku karya Niccolo Machiaveli', 50000),
(22, 'Mary, Queen of Scots and the Murder of Lord Darnley', 'Alison Weir', 'politik', 'Buku karya Alison Weir', 75000),
(23, 'The Story of England', 'Michael Wood', 'politik', 'Buku karya Michael Wood', 100000),
(31, 'C++ High Performance', 'Viktor Sehr, Bjorn Andrist', 'teknologi', 'Buku C++', 150000),
(32, 'Beginning PHP', 'David Carr, Markus Gray', 'teknologi', 'Buku PHP', 150000),
(33, 'The Python book', 'Lupa Siapa', 'teknologi', 'Buku Python', 200000),
(41, 'Attack on Titan', 'Hajime Isayama', 'komik', 'Komik Attack on Titan', 50000),
(42, 'Naruto', 'Masashi Kishimoto', 'komik', 'Komik Naruto', 50000),
(43, 'The Amazing Spiderman', 'Peter Parker', 'komik', 'Komik Spiderman', 75000);

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `nama_kategori` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`nama_kategori`) VALUES
('komik'),
('politik'),
('sejarah'),
('teknologi');

-- --------------------------------------------------------

--
-- Table structure for table `orderan`
--

CREATE TABLE `orderan` (
  `id` int(11) NOT NULL,
  `judul` varchar(100) DEFAULT NULL,
  `harga` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pengguna`
--

CREATE TABLE `pengguna` (
  `email` varchar(250) NOT NULL,
  `pass` varchar(100) DEFAULT NULL,
  `nama` varchar(250) DEFAULT NULL,
  `alamat` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pengguna`
--

INSERT INTO `pengguna` (`email`, `pass`, `nama`, `alamat`) VALUES
('haha@hehe.net', 'lahkokgini', 'Suryadi', 'dimana yak'),
('walah@kepriben.net', 'asd', 'Jamet Bond', 'dimana yak');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `buku`
--
ALTER TABLE `buku`
  ADD PRIMARY KEY (`id`),
  ADD KEY `kategori` (`kategori`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`nama_kategori`);

--
-- Indexes for table `orderan`
--
ALTER TABLE `orderan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pengguna`
--
ALTER TABLE `pengguna`
  ADD PRIMARY KEY (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `orderan`
--
ALTER TABLE `orderan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `buku`
--
ALTER TABLE `buku`
  ADD CONSTRAINT `buku_ibfk_1` FOREIGN KEY (`kategori`) REFERENCES `kategori` (`nama_kategori`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
