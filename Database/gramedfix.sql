-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 24, 2019 at 01:26 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.3

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
  `id_buku` int(10) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `harga` int(255) NOT NULL,
  `deskripsi` varchar(255) NOT NULL,
  `cover` varchar(255) NOT NULL,
  `halaman` int(10) NOT NULL,
  `tanggal_terbit` varchar(15) NOT NULL,
  `ISBN` int(255) NOT NULL,
  `bahasa` varchar(255) NOT NULL,
  `penerbit` varchar(255) NOT NULL,
  `berat` float NOT NULL,
  `lebar` int(10) NOT NULL,
  `panjang` int(10) NOT NULL,
  `id_penulis` int(10) NOT NULL,
  `link_image` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `buku`
--

INSERT INTO `buku` (`id_buku`, `nama`, `harga`, `deskripsi`, `cover`, `halaman`, `tanggal_terbit`, `ISBN`, `bahasa`, `penerbit`, `berat`, `lebar`, `panjang`, `id_penulis`, `link_image`) VALUES
(1, 'Nicola Yoon: Sun Is Also A Star', 187000, 'Nicola Yoon: Sun Is Also A Star', 'soft', 384, '4 Nov 2019', 978152471, 'Indonesia', 'Sinar Star Book', 0.25, 14, 20, 1, 'https://cdn.gramedia.com/uploads/items/9781524716301__w414_hauto.jpg'),
(2, 'Masak Apa Hari Ini?', 141100, 'Bunda masih bingung mau masak apa hari ini?\r\n\r\nAtau masih punya bahan makanan yang tersisa di lemari es?\r\nJangan khawatir ya Bun, karena buku ini menyajikan resep-resepsimple masakan rumahan dan mudah diikuti dengan bahan yang murah meriah namun sehat. Re', 'Soft', 204, '14 Feb 2019', 978602612, 'Indonesia', 'Kubus Media', 0.552, 24, 17, 2, 'https://cdn.gramedia.com/uploads/items/9786026731210_Masak-Apa-Hari-Ini__w200_hauto.jpg'),
(3, 'Panduan Mudah Eating Clean', 83300, 'Pertanyaan ini sering terlontar dan sebagian besar dipertanyakan. Apakah kita benar benar sehat?', 'Soft', 264, '3 Mei 2017', 978979757, 'Indonesia', 'Kawan Pustaka', 0.3, 15, 23, 3, 'https://cdn.gramedia.com/uploads/items/9789797576509_Panduan-Mudah-Eating-Clean__w200_hauto.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `flash_sale`
--

CREATE TABLE `flash_sale` (
  `id_flash_sale` int(10) NOT NULL,
  `id_buku` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `flash_sale`
--

INSERT INTO `flash_sale` (`id_flash_sale`, `id_buku`) VALUES
(1, 1),
(2, 2),
(3, 3);

-- --------------------------------------------------------

--
-- Table structure for table `pengguna`
--

CREATE TABLE `pengguna` (
  `email` varchar(250) NOT NULL,
  `pass` varchar(100) DEFAULT NULL,
  `nama` varchar(250) DEFAULT NULL,
  `alamat` varchar(250) DEFAULT NULL,
  `gender` varchar(20) NOT NULL,
  `birthdate` date NOT NULL,
  `telp` int(50) NOT NULL,
  `job` varchar(50) NOT NULL,
  `hobi` varchar(1000) NOT NULL,
  `favbook` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pengguna`
--

INSERT INTO `pengguna` (`email`, `pass`, `nama`, `alamat`, `gender`, `birthdate`, `telp`, `job`, `hobi`, `favbook`) VALUES
('', NULL, NULL, 'Bojong Soang, Kab. Bandung', '', '0000-00-00', 0, '0', '', ''),
('ayu@gmail.com', 'ayu', 'ayu', NULL, '', '0000-00-00', 0, '', '', ''),
('haha@hehe.net', 'lahkokgini', 'Suryadi', 'dimana yak', '', '0000-00-00', 0, '0', '', ''),
('walah@kepriben.net', 'asd', 'Jamet Bond', 'dimana yak', '', '0000-00-00', 0, '0', '', ''),
('windaardiyanti99@gmail.com', 'winda12345', 'windaardiyanti', 'pesonabali', 'Perempuan', '1998-12-23', 123, 'Dokter', 'kecantikan', 'agama');

-- --------------------------------------------------------

--
-- Table structure for table `penulis`
--

CREATE TABLE `penulis` (
  `id_penulis` int(10) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `tentang` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `promo`
--

CREATE TABLE `promo` (
  `id_promo` int(10) NOT NULL,
  `title` varchar(255) NOT NULL,
  `periode` varchar(255) NOT NULL,
  `link_image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `promo`
--

INSERT INTO `promo` (`id_promo`, `title`, `periode`, `link_image`) VALUES
(1, 'Hari Buku Internasional', '23 April 2019 - 30 April 2019', 'https://cdn.gramedia.com/uploads/marketing/hari_buku_internasional_NonAds_Storefront_2x_So1F8am__wauto_h300.jpg'),
(2, 'DISKON SIDUYEF 2019', '21 Maret 2019 - 26 April 2019', 'https://cdn.gramedia.com/uploads/marketing/SIDU_STOREFRONT__PERPANJANGAN___wauto_h300.png'),
(3, 'DISKON KOMIK PENDIDIKAN', '23 Maret 2019 - 23 April 2019', 'https://cdn.gramedia.com/uploads/marketing/storefrontt_EoSH7kh__wauto_h300.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `buku`
--
ALTER TABLE `buku`
  ADD PRIMARY KEY (`id_buku`);

--
-- Indexes for table `pengguna`
--
ALTER TABLE `pengguna`
  ADD PRIMARY KEY (`email`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
