-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 18, 2019 at 04:45 AM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `washme`
--

-- --------------------------------------------------------

--
-- Table structure for table `driver`
--

CREATE TABLE `driver` (
  `username` varchar(100) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `alamat` varchar(200) NOT NULL,
  `nohp` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `driver`
--

INSERT INTO `driver` (`username`, `nama`, `alamat`, `nohp`) VALUES
('justin', 'Justin Laurenso', 'Jalan Tanjung Sari', '089654673011');

-- --------------------------------------------------------

--
-- Table structure for table `laundrys`
--

CREATE TABLE `laundrys` (
  `id` int(11) NOT NULL,
  `image` varchar(200) DEFAULT NULL,
  `name` varchar(100) DEFAULT NULL,
  `alamat` varchar(100) DEFAULT NULL,
  `status` enum('open','close') NOT NULL,
  `time_open` varchar(10) NOT NULL,
  `time_close` varchar(10) NOT NULL,
  `service` enum('wash&fold','wash&iron','dryclean','') NOT NULL,
  `owner` varchar(100) NOT NULL,
  `harga` double NOT NULL,
  `nohp` int(100) DEFAULT NULL,
  `kota` varchar(100) NOT NULL,
  `rating` int(10) DEFAULT '0',
  `username` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `laundrys`
--

INSERT INTO `laundrys` (`id`, `image`, `name`, `alamat`, `status`, `time_open`, `time_close`, `service`, `owner`, `harga`, `nohp`, `kota`, `rating`, `username`) VALUES
(1, '../asset/images/laundry-ateng.jpg', 'Azau Laundry', 'Jalan Dr. Wahidin Sudirohusodo No.82', 'open', '08:00', '19:00', 'wash&iron', 'Zauhiung Karyaten', 10000, 2147483647, 'Pontianak', 0, 'flyring111');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `kode_product` varchar(20) NOT NULL,
  `nama_product` varchar(100) NOT NULL,
  `kategori` varchar(100) NOT NULL,
  `harga` double NOT NULL,
  `stok` int(20) NOT NULL,
  `shop` varchar(100) NOT NULL,
  `rating` int(100) NOT NULL,
  `description` varchar(200) NOT NULL,
  `image` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`kode_product`, `nama_product`, `kategori`, `harga`, `stok`, `shop`, `rating`, `description`, `image`) VALUES
('P-1', 'Setrika Listrik Silver Star ES300 R20', 'Iron', 515000, 20, 'ChitozAno', 50, 'Barang Mahal. Yang beli harus orang kaya!!!', '../asset/images/setrika.jpg'),
('P-2', 'Mesin Cuci RZ-2000', 'Washing Machine', 2000000, 20, 'Fleren Laundry', 80, 'Mesin Cuci Kualitas terbaik. Harga terjangkau. Silahkan beli!!!', '../asset/images/mesincuci.png'),
('P-3', 'Rinso', '', 100000, 39, '', 0, 'rinso terbaik di bumi', '../asset/images/rinso.PNG'),
('P-4', 'Detergen Cair', '', 50000, 100, '', 0, 'detergen molto', '../asset/images/detergencair.PNG');

-- --------------------------------------------------------

--
-- Table structure for table `request_driver`
--

CREATE TABLE `request_driver` (
  `username` varchar(100) NOT NULL,
  `text_request` varchar(100) NOT NULL,
  `time_request` datetime NOT NULL,
  `nama` varchar(100) NOT NULL,
  `alamat` varchar(200) NOT NULL,
  `nohp` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `request_laundry`
--

CREATE TABLE `request_laundry` (
  `username` varchar(100) NOT NULL,
  `text_request` varchar(100) NOT NULL,
  `time_request` datetime NOT NULL,
  `owner` varchar(100) DEFAULT NULL,
  `laundryname` varchar(200) NOT NULL,
  `alamat` varchar(200) NOT NULL,
  `kota` varchar(100) NOT NULL,
  `nohp` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tempprogres`
--

CREATE TABLE `tempprogres` (
  `notemp` int(11) NOT NULL,
  `no` varchar(20) NOT NULL,
  `id` int(11) NOT NULL,
  `tgl_ambil` varchar(100) NOT NULL,
  `jam_ambil` varchar(10) NOT NULL,
  `batas_ambil` varchar(10) NOT NULL,
  `alamat_ambil` varchar(200) NOT NULL,
  `note_ambil` text NOT NULL,
  `jlh_kg` int(11) NOT NULL,
  `tgl_deliv` varchar(100) NOT NULL,
  `jam_deliv` varchar(10) NOT NULL,
  `batas_deliv` varchar(10) NOT NULL,
  `alamat_deliv` varchar(200) NOT NULL,
  `note_deliv` text NOT NULL,
  `service` enum('wash&fold','wash&iron','dryclean') NOT NULL,
  `harga` double NOT NULL,
  `total` double NOT NULL,
  `user` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `temptransaksi`
--

CREATE TABLE `temptransaksi` (
  `notemp` int(11) NOT NULL,
  `no` varchar(20) NOT NULL,
  `id` int(11) NOT NULL,
  `tgl_ambil` varchar(100) NOT NULL,
  `jam_ambil` varchar(10) NOT NULL,
  `batas_ambil` varchar(10) NOT NULL,
  `alamat_ambil` varchar(200) NOT NULL,
  `note_ambil` text NOT NULL,
  `jlh_kg` int(11) NOT NULL,
  `tgl_deliv` varchar(100) NOT NULL,
  `jam_deliv` varchar(10) NOT NULL,
  `batas_deliv` varchar(10) NOT NULL,
  `alamat_deliv` varchar(200) NOT NULL,
  `note_deliv` text NOT NULL,
  `service` enum('wash&fold','wash&iron','dryclean') NOT NULL,
  `harga` double NOT NULL,
  `total` double NOT NULL,
  `user` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `temptransaksi`
--

INSERT INTO `temptransaksi` (`notemp`, `no`, `id`, `tgl_ambil`, `jam_ambil`, `batas_ambil`, `alamat_ambil`, `note_ambil`, `jlh_kg`, `tgl_deliv`, `jam_deliv`, `batas_deliv`, `alamat_deliv`, `note_deliv`, `service`, `harga`, `total`, `user`) VALUES
(1, 'TL-1', 1, '2019-06-01', '08:00', '08:20', 'Jalan Suprapto', 'Jangan terlalu cepat', 4, '2019-06-04', '18:30', '18:40', 'Jalan Suprapto 1', 'Jangan terlalu lama', 'wash&iron', 10000, 40000, 'Fleren Picestelia'),
(2, 'TL-2', 1, '2019-06-03', '10:00', '11:00', 'Jalan Natakusuma', 'Jangan terlalu lama', 0, '', '', '', '', '', 'wash&fold', 0, 0, 'Naomi Ryohan');

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `no` int(11) NOT NULL,
  `id` int(11) DEFAULT NULL,
  `tgl` varchar(100) NOT NULL,
  `total` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `transaksidetil`
--

CREATE TABLE `transaksidetil` (
  `no` varchar(20) NOT NULL,
  `id` int(11) NOT NULL,
  `tgl_deliv` varchar(20) DEFAULT NULL,
  `tgl_ambil` varchar(20) DEFAULT NULL,
  `alamat_ambil` varchar(200) DEFAULT NULL,
  `jlh_kg` int(11) NOT NULL,
  `harga` double NOT NULL,
  `total` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `username` varchar(100) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `email` varchar(100) NOT NULL,
  `alamat` varchar(100) DEFAULT NULL,
  `nohp` varchar(20) DEFAULT NULL,
  `coin` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`username`, `name`, `email`, `alamat`, `nohp`, `coin`) VALUES
('fleren', 'Fleren Picestelia', 'flerenpices16@gmail.com', 'Jalan Suprapto', '+62 822-5688-6020', 0),
('lolox', NULL, 'firecall@gmail.com', NULL, NULL, 0),
('naomi', 'Naomi Ryohan', 'naomiryohan@gmail.com', 'Jalan Natakusuma', '089954279929', 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `username` varchar(100) NOT NULL,
  `password` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `status` enum('user','laundry','admin','driver') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`username`, `password`, `email`, `status`) VALUES
('admin', 'admin', 'washme@gmail.com', 'admin'),
('fleren', 'fleren16', 'flerenpices16@gmail.com', 'user'),
('flyring111', 'hacked12', 'emmanuel.karyaten@gmail.com', 'laundry'),
('justin', 'justin123', 'justinlaurenso@gmail.com', 'driver'),
('lolox', 'lalaland', 'firecall@gmail.com', 'user'),
('naomi', 'naomi', 'naomiryohan@gmail.com', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `driver`
--
ALTER TABLE `driver`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `laundrys`
--
ALTER TABLE `laundrys`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`kode_product`);

--
-- Indexes for table `request_driver`
--
ALTER TABLE `request_driver`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `request_laundry`
--
ALTER TABLE `request_laundry`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `tempprogres`
--
ALTER TABLE `tempprogres`
  ADD PRIMARY KEY (`notemp`);

--
-- Indexes for table `temptransaksi`
--
ALTER TABLE `temptransaksi`
  ADD PRIMARY KEY (`notemp`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`no`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `laundrys`
--
ALTER TABLE `laundrys`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tempprogres`
--
ALTER TABLE `tempprogres`
  MODIFY `notemp` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `temptransaksi`
--
ALTER TABLE `temptransaksi`
  MODIFY `notemp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
