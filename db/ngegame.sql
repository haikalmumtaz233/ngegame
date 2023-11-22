-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 22, 2023 at 02:35 AM
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
-- Database: `ngegame`
--

-- --------------------------------------------------------

--
-- Table structure for table `genshin`
--

CREATE TABLE `genshin` (
  `id_crystal` int(11) NOT NULL,
  `jumlah` varchar(25) NOT NULL,
  `harga` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `genshin`
--

INSERT INTO `genshin` (`id_crystal`, `jumlah`, `harga`) VALUES
(1, '360 GC', 54000),
(2, '780 GC', 102000),
(3, '1080 GC', 152500),
(4, '1440 GC', 212400),
(5, '2560 GC', 301000),
(6, '3260 GC', 425500);

-- --------------------------------------------------------

--
-- Table structure for table `mobile_legends`
--

CREATE TABLE `mobile_legends` (
  `id_diamond` int(11) NOT NULL,
  `jumlah` varchar(20) NOT NULL,
  `harga` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `mobile_legends`
--

INSERT INTO `mobile_legends` (`id_diamond`, `jumlah`, `harga`) VALUES
(1, '170 Diamonds', 65800),
(2, '229 Diamonds', 80727),
(3, '296 Diamonds', 114300),
(4, '466 Diamonds', 161454),
(5, '592 Diamonds', 201818),
(6, '875 Diamonds', 328300),
(7, '1142 Diamonds', 409200);

-- --------------------------------------------------------

--
-- Table structure for table `pembelian_genshin`
--

CREATE TABLE `pembelian_genshin` (
  `id_pembelian` int(11) NOT NULL,
  `id_cg` int(11) NOT NULL,
  `id_metode` int(11) NOT NULL,
  `game_id` varchar(50) NOT NULL,
  `no_wallet` varchar(50) NOT NULL,
  `ss_id` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pembelian_genshin`
--

INSERT INTO `pembelian_genshin` (`id_pembelian`, `id_cg`, `id_metode`, `game_id`, `no_wallet`, `ss_id`) VALUES
(3, 4, 4, 'xnkBpvaAZvGVlllhS++m7g==', '1C2KX79efhoElFIzwDe4Pg==', '+Q1PuPCSvIyu8E95NlbQWw==');

-- --------------------------------------------------------

--
-- Table structure for table `pembelian_ml`
--

CREATE TABLE `pembelian_ml` (
  `id_pembelian` int(11) NOT NULL,
  `id_diamond` int(11) NOT NULL,
  `id_metode` int(11) NOT NULL,
  `game_id` varchar(50) NOT NULL,
  `no_wallet` varchar(50) NOT NULL,
  `ss_id` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pembelian_ml`
--

INSERT INTO `pembelian_ml` (`id_pembelian`, `id_diamond`, `id_metode`, `game_id`, `no_wallet`, `ss_id`) VALUES
(12, 4, 3, 'MNB8NXX9K7CXhBcIpjewdgnr5hasp1GjCjVR7+iKkqc=', 'ACNkwh6p+gnciq2g5v4h+w==', 'm8287/og4n74btrbh1BPLIFBbdKZGkn6T2VH3YYMkZ0=');

-- --------------------------------------------------------

--
-- Table structure for table `pembelian_valorant`
--

CREATE TABLE `pembelian_valorant` (
  `id_pembelian` int(11) NOT NULL,
  `id_point` int(11) NOT NULL,
  `id_metode` int(11) NOT NULL,
  `game_id` varchar(50) NOT NULL,
  `no_wallet` varchar(50) NOT NULL,
  `ss_id` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pembelian_valorant`
--

INSERT INTO `pembelian_valorant` (`id_pembelian`, `id_point`, `id_metode`, `game_id`, `no_wallet`, `ss_id`) VALUES
(3, 6, 2, 'MNB8NXX9K7CXhBcIpjewdgnr5hasp1GjCjVR7+iKkqc=', '1C2KX79efhoElFIzwDe4Pg==', 'JG9+3Q0Jl8Ro3NxBFWqu/wsc/7Aox5yWvnm6gcDb+ow=');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `no_hp` varchar(12) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `nama`, `no_hp`, `email`, `password`) VALUES
(5, 'Muhammad Raditya Haikal Mumtaz', '+62852285184', 'haa@gmail.com', '$2y$10$/QMhzNAps52Px212qiO/KerHk8459lqXjbWViaUutdUdLVXOCOVxO');

-- --------------------------------------------------------

--
-- Table structure for table `valorant`
--

CREATE TABLE `valorant` (
  `id_points` int(11) NOT NULL,
  `jumlah` varchar(20) NOT NULL,
  `harga` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `valorant`
--

INSERT INTO `valorant` (`id_points`, `jumlah`, `harga`) VALUES
(1, '1075 Points', 107200),
(2, '1800 Points', 181300),
(3, '2400 Points', 231500),
(4, '3675 Points', 312500),
(5, '5175 Points', 452600),
(6, '7500 Points', 630000);

-- --------------------------------------------------------

--
-- Table structure for table `wallet`
--

CREATE TABLE `wallet` (
  `id_wallet` int(11) NOT NULL,
  `nama` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `wallet`
--

INSERT INTO `wallet` (`id_wallet`, `nama`) VALUES
(1, 'Telkomsel'),
(2, 'Dana'),
(3, 'Shopeepay'),
(4, 'Gopay');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `genshin`
--
ALTER TABLE `genshin`
  ADD PRIMARY KEY (`id_crystal`);

--
-- Indexes for table `mobile_legends`
--
ALTER TABLE `mobile_legends`
  ADD PRIMARY KEY (`id_diamond`);

--
-- Indexes for table `pembelian_genshin`
--
ALTER TABLE `pembelian_genshin`
  ADD PRIMARY KEY (`id_pembelian`),
  ADD KEY `id_cg` (`id_cg`),
  ADD KEY `id_metode` (`id_metode`);

--
-- Indexes for table `pembelian_ml`
--
ALTER TABLE `pembelian_ml`
  ADD PRIMARY KEY (`id_pembelian`),
  ADD KEY `id_diamond` (`id_diamond`),
  ADD KEY `id_metode` (`id_metode`);

--
-- Indexes for table `pembelian_valorant`
--
ALTER TABLE `pembelian_valorant`
  ADD PRIMARY KEY (`id_pembelian`),
  ADD KEY `id_point` (`id_point`),
  ADD KEY `id_metode` (`id_metode`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- Indexes for table `valorant`
--
ALTER TABLE `valorant`
  ADD PRIMARY KEY (`id_points`);

--
-- Indexes for table `wallet`
--
ALTER TABLE `wallet`
  ADD PRIMARY KEY (`id_wallet`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `genshin`
--
ALTER TABLE `genshin`
  MODIFY `id_crystal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `mobile_legends`
--
ALTER TABLE `mobile_legends`
  MODIFY `id_diamond` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `pembelian_genshin`
--
ALTER TABLE `pembelian_genshin`
  MODIFY `id_pembelian` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `pembelian_ml`
--
ALTER TABLE `pembelian_ml`
  MODIFY `id_pembelian` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `pembelian_valorant`
--
ALTER TABLE `pembelian_valorant`
  MODIFY `id_pembelian` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `valorant`
--
ALTER TABLE `valorant`
  MODIFY `id_points` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `wallet`
--
ALTER TABLE `wallet`
  MODIFY `id_wallet` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `pembelian_genshin`
--
ALTER TABLE `pembelian_genshin`
  ADD CONSTRAINT `pembelian_genshin_ibfk_1` FOREIGN KEY (`id_cg`) REFERENCES `genshin` (`id_crystal`),
  ADD CONSTRAINT `pembelian_genshin_ibfk_2` FOREIGN KEY (`id_metode`) REFERENCES `wallet` (`id_wallet`);

--
-- Constraints for table `pembelian_ml`
--
ALTER TABLE `pembelian_ml`
  ADD CONSTRAINT `pembelian_ml_ibfk_1` FOREIGN KEY (`id_diamond`) REFERENCES `mobile_legends` (`id_diamond`),
  ADD CONSTRAINT `pembelian_ml_ibfk_2` FOREIGN KEY (`id_metode`) REFERENCES `wallet` (`id_wallet`);

--
-- Constraints for table `pembelian_valorant`
--
ALTER TABLE `pembelian_valorant`
  ADD CONSTRAINT `pembelian_valorant_ibfk_1` FOREIGN KEY (`id_point`) REFERENCES `valorant` (`id_points`),
  ADD CONSTRAINT `pembelian_valorant_ibfk_2` FOREIGN KEY (`id_metode`) REFERENCES `wallet` (`id_wallet`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
