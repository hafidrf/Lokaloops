-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jul 01, 2019 at 01:56 PM
-- Server version: 10.3.15-MariaDB
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lokaloops`
--

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `id` int(11) NOT NULL,
  `barcode` varchar(55) NOT NULL,
  `name` varchar(50) NOT NULL,
  `description` varchar(100) NOT NULL,
  `foto` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`id`, `barcode`, `name`, `description`, `foto`) VALUES
(1, '5c0ff80', 'Fanta', 'fanta 1,5 liter dengan banyak varian rasa', 'gb1.jpg'),
(2, '5c11103', 'Aqua 260ml', 'aqua dengan kesegaran alam', 'gb2.jpg'),
(3, '5c13d75', 'Biskuat', 'hhjhj', 'gb3.jpg'),
(4, '5c13e5b', 'Oreo', 'aaa', 'gb4.jpg'),
(5, '5c144b7', 'Pecel', 'asddsdsd', 'gb5.jpg'),
(6, '5c14bda', 'Temulawak', 'ssss', 'gb6.jpg'),
(7, '5c14f27', 'Kopiko', 'small', 'gb7.jpg'),
(8, '5c159de', 'Milo', 'jack', 'gb8.jpg'),
(9, '5c174be', 'Roma Kelapa', 'ASASAS', 'gb9.jpg'),
(10, '5c18a7e', 'Sanco', 'test', 'gb10.jpg'),
(11, '5c18c5d', 'Philips lamp', 'Really Testy', 'gb11.jpg'),
(12, '5c18c7d', 'Ale-ale', 'Test', 'gb12.jpg'),
(13, '5c18c7f', 'Relaxa', 'Test', 'gb13.jpg'),
(14, '5c19adb', 'Jeruk', 'Hdh', 'gb14.jpg'),
(15, '5c1ce8b', 'Baigon', 'sdvczdsvzdfv', 'gb15.jpg'),
(16, '5c255ec', 'Fix 44dt', 'pasta\r\n', 'gb16.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `id_role` int(11) NOT NULL,
  `id_owner` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `username`, `password`, `id_role`, `id_owner`) VALUES
(1, 'hafidrf', 'coba123', 1, 1),
(2, 'rahma', 'coba123', 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `owner`
--

CREATE TABLE `owner` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `owner`
--

INSERT INTO `owner` (`id`, `nama`) VALUES
(1, 'Hafid Cafe'),
(2, 'Tegar Shop');

-- --------------------------------------------------------

--
-- Table structure for table `pelanggan`
--

CREATE TABLE `pelanggan` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `nohp` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pembeli`
--

CREATE TABLE `pembeli` (
  `id` int(11) NOT NULL,
  `nama_pembeli` varchar(255) NOT NULL,
  `total_bayar` varchar(200) NOT NULL,
  `uang_bayar` varchar(200) NOT NULL,
  `uang_kembali` varchar(200) NOT NULL,
  `tanggal` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pembeli`
--

INSERT INTO `pembeli` (`id`, `nama_pembeli`, `total_bayar`, `uang_bayar`, `uang_kembali`, `tanggal`) VALUES
(1, 'hafid', '12500', '20000', '7500', '21-04-2019'),
(2, 'tegar', '26000', '50000', '24000', '21-04-2019'),
(3, 'Rahma', '5500', '10000', '4500', '17-05-2019'),
(4, 'Dinar', '7000', '20000', '13000', '16-05-2019'),
(7, 'budi', '8000', '50000', '42000', '31-05-2019 13:00'),
(6, 'tegar', '5000', '13000', '8000', '31-05-2019 12:59'),
(5, 'hafidrf', '10500', '50000', '39500', '31-05-2019 12:59'),
(8, 'agus', '4000', '100000', '96000', '31-05-2019 13:01'),
(9, 'julia', '20000', '50000', '30000', '31-05-2019 13:01'),
(10, 'shomad', '8000', '70000', '62000', '31-05-2019 15:54'),
(11, 'test', '3000', '100000', '97000', '31-05-2019 16:08'),
(12, 'testing', '3000', '100000', '97000', '31-05-2019 16:22');

-- --------------------------------------------------------

--
-- Table structure for table `pesanan`
--

CREATE TABLE `pesanan` (
  `id` int(11) NOT NULL,
  `item` varchar(200) NOT NULL,
  `harga` varchar(200) NOT NULL,
  `jumlah_pesan` varchar(100) NOT NULL,
  `total_harga` varchar(200) NOT NULL,
  `id_pembeli` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pesanan`
--

INSERT INTO `pesanan` (`id`, `item`, `harga`, `jumlah_pesan`, `total_harga`, `id_pembeli`) VALUES
(1, 'Fanta', '4000', '2', '8000', 1),
(2, 'Aqua 260ml', '1500', '3', '4500', 1),
(3, 'Aqua 260ml', '1500', '4', '6000', 2),
(4, 'Fanta', '4000', '5', '20000', 2),
(5, 'Pecel', '5000', '1', '5000', 3),
(6, 'Temulawak', '500', '1', '500', 3),
(7, 'Oreo', '2000', '1', '2000', 4),
(8, 'Pecel', '5000', '1', '5000', 4),
(28, 'Oreo', '2000', '4', '8000', 7),
(27, 'Biskuat', '1000', '5', '5000', 6),
(26, 'Aqua 260ml', '1500', '7', '10500', 5),
(29, 'Fanta', '4000', '1', '4000', 8),
(30, 'Pecel', '5000', '4', '20000', 9),
(31, 'Fanta', '4000', '2', '8000', 10),
(32, 'Biskuat', '1000', '3', '3000', 11),
(33, 'Aqua 260ml', '1500', '2', '3000', 12);

-- --------------------------------------------------------

--
-- Table structure for table `quantity`
--

CREATE TABLE `quantity` (
  `id` int(11) NOT NULL,
  `quantity` varchar(100) NOT NULL,
  `id_items` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE `role` (
  `id` int(11) NOT NULL,
  `role` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`id`, `role`) VALUES
(1, 'owner'),
(2, 'kasir'),
(3, 'kitchen'),
(4, 'investor');

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `id` int(11) NOT NULL,
  `id_pembeli` int(11) NOT NULL,
  `id_barang` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`id`, `id_pembeli`, `id_barang`) VALUES
(1, 1, 1),
(2, 1, 2),
(3, 2, 1),
(4, 2, 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `barcode_2` (`barcode`),
  ADD KEY `barcode` (`barcode`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `owner`
--
ALTER TABLE `owner`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pelanggan`
--
ALTER TABLE `pelanggan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pembeli`
--
ALTER TABLE `pembeli`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pesanan`
--
ALTER TABLE `pesanan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `quantity`
--
ALTER TABLE `quantity`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=253;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `owner`
--
ALTER TABLE `owner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `pelanggan`
--
ALTER TABLE `pelanggan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pembeli`
--
ALTER TABLE `pembeli`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `pesanan`
--
ALTER TABLE `pesanan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `quantity`
--
ALTER TABLE `quantity`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `role`
--
ALTER TABLE `role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
