-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 09 Apr 2019 pada 06.50
-- Versi Server: 10.1.29-MariaDB
-- PHP Version: 7.2.0

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
-- Struktur dari tabel `laundrys`
--

CREATE TABLE `laundrys` (
  `id` int(10) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `alamat` varchar(100) DEFAULT NULL,
  `status` enum('open','close') NOT NULL,
  `time_open` varchar(10) NOT NULL,
  `time_close` varchar(10) NOT NULL,
  `service` enum('wash&fold','wash&iron','dryclean','') NOT NULL,
  `owner` varchar(100) NOT NULL,
  `harga` double NOT NULL,
  `nohp` int(100) DEFAULT NULL,
  `kota` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `laundrys`
--

INSERT INTO `laundrys` (`id`, `name`, `alamat`, `status`, `time_open`, `time_close`, `service`, `owner`, `harga`, `nohp`, `kota`) VALUES
(1, 'Zauhiung Laundry', 'Jln. dr. Wahidin No 54', 'open', '08:00', '21:00', 'wash&fold', 'Zauhiung', 5000, 822568860, 'Pontianak'),
(2, 'Ateng Laundry', 'Jl. Imam Bonjol No 20', 'close', '08:00', '20:00', 'wash&iron', 'Ateng', 6000, 94484884, 'Pontianak'),
(3, 'ChitozAno', 'Jln. Sungai Raya Dalam Komplek Villa Gading Raya 2 no.D6', 'open', '09:00', '22:00', 'wash&iron', 'Feliciano', 7000, 903390220, 'Pontianak'),
(4, 'Fleren Laundry', 'Jln. Veteran Gg. Syukur1 No 50D', 'close', '07:00', '21:00', 'wash&iron', 'Fleren Picestelia', 6000, 899295969, 'Pontianak');

-- --------------------------------------------------------

--
-- Struktur dari tabel `login_logs`
--

CREATE TABLE `login_logs` (
  `id` int(10) NOT NULL,
  `login_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `ip_address` varchar(100) DEFAULT NULL,
  `user_id` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `login_logs`
--

INSERT INTO `login_logs` (`id`, `login_time`, `ip_address`, `user_id`) VALUES
(1, '2019-03-18 07:02:59', '127.0.0.1', 1),
(2, '2019-03-18 07:28:15', '127.0.0.1', 2),
(3, '2019-03-18 19:19:26', '127.0.0.1', 1),
(4, '2019-03-19 21:48:10', '127.0.0.1', 1),
(5, '2019-03-19 21:48:27', '127.0.0.1', 1),
(6, '2019-03-19 21:48:58', '127.0.0.1', 1),
(7, '2019-03-19 21:51:56', '127.0.0.1', 1),
(8, '2019-03-19 22:15:37', '127.0.0.1', 1),
(9, '2019-03-19 22:18:13', '127.0.0.1', 1),
(10, '2019-03-19 22:19:19', '127.0.0.1', 1),
(11, '2019-03-19 22:34:06', '127.0.0.1', 1),
(12, '2019-03-19 22:34:56', '127.0.0.1', 1),
(13, '2019-03-19 22:39:02', '127.0.0.1', 1),
(14, '2019-03-19 22:45:12', '127.0.0.1', 1),
(15, '2019-03-19 22:49:46', '127.0.0.1', 1),
(16, '2019-03-20 23:27:16', '127.0.0.1', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `request_laundry`
--

CREATE TABLE `request_laundry` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `text_request` varchar(100) NOT NULL,
  `time_request` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(10) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `alamat` varchar(100) DEFAULT NULL,
  `nohp` int(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `name`, `alamat`, `nohp`) VALUES
(1, 'feliciano', 'jln sungai raya dalam', 393939019);

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(10) NOT NULL,
  `username` varchar(100) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `status` enum('user','laundry','admin') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `email`, `status`) VALUES
(1, 'feliciano', 'feliciano123', 'suryamarcello@gmail.com', 'user'),
(2, 'david', 'david123', 'davidleo@gmail.com', 'laundry'),
(3, 'admin', 'admin', 'washme@gmail.com', 'admin'),
(5, 'calvin', 'calvin123', 'calvin@gmail.com', 'user'),
(10, 'ChitozAno', 'ano123', NULL, 'laundry'),
(11, 'chitoz', '1234', NULL, 'laundry'),
(12, 'flerenlaundry', 'fleren123', NULL, 'laundry');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `laundrys`
--
ALTER TABLE `laundrys`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login_logs`
--
ALTER TABLE `login_logs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `request_laundry`
--
ALTER TABLE `request_laundry`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `laundrys`
--
ALTER TABLE `laundrys`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `login_logs`
--
ALTER TABLE `login_logs`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `request_laundry`
--
ALTER TABLE `request_laundry`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
