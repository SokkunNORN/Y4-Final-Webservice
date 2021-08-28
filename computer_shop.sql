-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Aug 28, 2021 at 11:52 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `computer_shop`
--

-- --------------------------------------------------------

--
-- Table structure for table `brand`
--

CREATE TABLE `brand` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `brand`
--

INSERT INTO `brand` (`id`, `name`) VALUES
(1, 'Apple'),
(2, 'MSI'),
(3, 'Dell'),
(4, 'Asus');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `description` varchar(200) NOT NULL,
  `image` varchar(100) NOT NULL,
  `price` decimal(10,0) NOT NULL,
  `discount` int(11) NOT NULL,
  `brand_id` int(11) NOT NULL,
  `uid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `name`, `description`, `image`, `price`, `discount`, `brand_id`, `uid`) VALUES
(2, 'Msi GF66 Katana 11UD-027FR dragon station', 'Avantages GF66-Katana-11UD-029FR-dragon-station Overclocking facile de la carte graphique avec MSI Center 2021 Technologie.', 'msigf66.jpeg', '1099', 10, 2, 2),
(4, 'Asus F550JX-DMO21D', 'Asus F550JX-DM021D este unul dintre cele mai performante laptopuri business de pe piață, configurați', 'asusf55.jpeg', '579', 10, 4, 2),
(5, 'Mac Book Air 13\"', 'Here are some quick first impressions of the new 13-inch MacBook Pro with Touch Bar.', 'mac13.jpeg', '1209', 10, 1, 2),
(6, 'Msi GF66 Katana 11UD-027FR dragon station', 'Avantages GF66-Katana-11UD-029FR-dragon-station Overclocking facile de la carte graphique avec MSI Center 2021 Technologie.', 'msigf66.jpeg', '1099', 10, 2, 2),
(7, 'Dell XPS 13', 'The Dell XPS 13 makes a great everyday laptop. It’s powerful, fast and ideal for bringing tons of possibility.', 'dellxps.jpeg', '795', 10, 3, 2),
(8, 'Asus F550JX-DMO21D', 'Asus F550JX-DM021D este unul dintre cele mai performante laptopuri business de pe piață, configurați', 'asusf55.jpeg', '579', 10, 4, 2),
(9, 'Mac Book Air 13\"', 'Here are some quick first impressions of the new 13-inch MacBook Pro with Touch Bar.', 'mac13.jpeg', '1209', 10, 1, 2),
(10, 'Msi GF66 Katana 11UD-027FR dragon station', 'Avantages GF66-Katana-11UD-029FR-dragon-station Overclocking facile de la carte graphique avec MSI Center 2021 Technologie.', 'msigf66.jpeg', '1099', 10, 2, 2),
(11, 'Dell XPS 13', 'The Dell XPS 13 makes a great everyday laptop. It’s powerful, fast and ideal for bringing tons of possibility.', 'dellxps.jpeg', '795', 10, 3, 2),
(12, 'Asus F550JX-DMO21D', 'Asus F550JX-DM021D este unul dintre cele mai performante laptopuri business de pe piață, configurați', 'asusf55.jpeg', '579', 10, 4, 2),
(13, 'Mac Book Air 13\"', 'Here are some quick first impressions of the new 13-inch MacBook Pro with Touch Bar.', 'mac13.jpeg', '1209', 10, 1, 2),
(14, 'Msi GF66 Katana 11UD-027FR dragon station', 'Avantages GF66-Katana-11UD-029FR-dragon-station Overclocking facile de la carte graphique avec MSI Center 2021 Technologie.', 'msigf66.jpeg', '1099', 10, 2, 2),
(15, 'Dell XPS 13', 'The Dell XPS 13 makes a great everyday laptop. It’s powerful, fast and ideal for bringing tons of possibility.', 'dellxps.jpeg', '795', 10, 3, 2),
(17, 'Mac Book Air 13\"', 'Here are some quick first impressions of the new 13-inch MacBook Pro with Touch Bar.', 'mac13.jpeg', '1209', 10, 1, 2),
(18, 'Msi GF66 Katana 11UD-027FR dragon station', 'Avantages GF66-Katana-11UD-029FR-dragon-station Overclocking facile de la carte graphique avec MSI Center 2021 Technologie.', 'msigf66.jpeg', '1099', 10, 2, 2),
(19, 'Dell XPS 13', 'The Dell XPS 13 makes a great everyday laptop. It’s powerful, fast and ideal for bringing tons of possibility.', 'dellxps.jpeg', '795', 10, 3, 2),
(20, 'Asus F550JX-DMO21D', 'Asus F550JX-DM021D este unul dintre cele mai performante laptopuri business de pe piață, configurați', 'asusf55.jpeg', '579', 10, 4, 2),
(21, 'Mac Book Air 13\"', 'Here are some quick first impressions of the new 13-inch MacBook Pro with Touch Bar.', 'mac13.jpeg', '1209', 10, 1, 2),
(22, 'Msi GF66 Katana 11UD-027FR dragon station', 'Avantages GF66-Katana-11UD-029FR-dragon-station Overclocking facile de la carte graphique avec MSI Center 2021 Technologie.', 'msigf66.jpeg', '1099', 10, 2, 2),
(23, 'Dell XPS 13', 'The Dell XPS 13 makes a great everyday laptop. It’s powerful, fast and ideal for bringing tons of possibility.', 'dellxps.jpeg', '795', 10, 3, 2),
(24, 'Asus F550JX-DMO21D', 'Asus F550JX-DM021D este unul dintre cele mai performante laptopuri business de pe piață, configurați', 'asusf55.jpeg', '579', 10, 4, 2),
(25, 'Mac Book Air 13\"', 'Here are some quick first impressions of the new 13-inch MacBook Pro with Touch Bar.', 'mac13.jpeg', '1209', 10, 1, 2),
(26, 'Msi GF66 Katana 11UD-027FR dragon station', 'Avantages GF66-Katana-11UD-029FR-dragon-station Overclocking facile de la carte graphique avec MSI Center 2021 Technologie.', 'msigf66.jpeg', '1099', 10, 2, 0),
(27, 'Dell XPS 13', 'The Dell XPS 13 makes a great everyday laptop. It’s powerful, fast and ideal for bringing tons of possibility.', 'dellxps.jpeg', '795', 10, 3, 0),
(28, 'Asus F550JX-DMO21D', 'Asus F550JX-DM021D este unul dintre cele mai performante laptopuri business de pe piață, configurați', 'asusf55.jpeg', '579', 10, 4, 0),
(29, 'Mac Book Air 13\"', 'Here are some quick first impressions of the new 13-inch MacBook Pro with Touch Bar.', 'mac13.jpeg', '1209', 10, 1, 0),
(30, 'Msi GF66 Katana 11UD-027FR dragon station', 'Avantages GF66-Katana-11UD-029FR-dragon-station Overclocking facile de la carte graphique avec MSI Center 2021 Technologie.', 'msigf66.jpeg', '1099', 10, 2, 0),
(31, 'Dell XPS 13', 'The Dell XPS 13 makes a great everyday laptop. It’s powerful, fast and ideal for bringing tons of possibility.', 'dellxps.jpeg', '795', 10, 3, 0),
(32, 'Asus F550JX-DMO21D', 'Asus F550JX-DM021D este unul dintre cele mai performante laptopuri business de pe piață, configurați', 'asusf55.jpeg', '579', 10, 4, 0),
(34, 'Macbook Air 2016', 'Jng sell', 'asus.jpeg', '550', 10, 1, 2);

-- --------------------------------------------------------

--
-- Table structure for table `product_process`
--

CREATE TABLE `product_process` (
  `id` int(11) NOT NULL,
  `buyer_id` int(11) NOT NULL,
  `pid` int(11) NOT NULL,
  `number_product` int(11) NOT NULL,
  `status_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product_process`
--

INSERT INTO `product_process` (`id`, `buyer_id`, `pid`, `number_product`, `status_id`) VALUES
(1, 1, 1, 12, 2),
(2, 1, 1, 10, 4),
(3, 1, 1, 2, 2),
(7, 1, 4, 1, 2),
(10, 1, 1, 1, 2),
(11, 1, 1, 7, 2),
(12, 1, 11, 1, 2),
(14, 1, 1, 1, 2),
(16, 1, 1, 1, 4),
(17, 1, 6, 1, 3);

-- --------------------------------------------------------

--
-- Table structure for table `status_product_process`
--

CREATE TABLE `status_product_process` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `status_product_process`
--

INSERT INTO `status_product_process` (`id`, `name`) VALUES
(2, 'Selected'),
(3, 'Ordering'),
(4, 'Sold');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `uname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `address` varchar(255) NOT NULL,
  `city` varchar(100) NOT NULL,
  `zip` int(11) NOT NULL,
  `state` varchar(100) NOT NULL,
  `country` varchar(100) NOT NULL,
  `cardNumber` int(20) NOT NULL,
  `expiryMonth` int(11) NOT NULL,
  `expiryYear` int(11) NOT NULL,
  `cvc` int(11) NOT NULL,
  `pass` varchar(100) NOT NULL,
  `role_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `uname`, `email`, `address`, `city`, `zip`, `state`, `country`, `cardNumber`, `expiryMonth`, `expiryYear`, `cvc`, `pass`, `role_id`) VALUES
(1, 'HeLoo', 'helo@email.com', 'Near you!', 'CamPIc', 11, 'CamPIc', 'COMPIY', 1222222121, 21, 1222, 122, 'passw0rd', 1),
(2, 'Miyya', 'miyya@email.com', 'Near you!', 'CamPIc', 11, 'CamPIc', 'COMPIY', 1222222121, 21, 1222, 122, 'passw0rd', 2);

-- --------------------------------------------------------

--
-- Table structure for table `user_role`
--

CREATE TABLE `user_role` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_role`
--

INSERT INTO `user_role` (`id`, `name`) VALUES
(1, 'Buyer'),
(2, 'Seller');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `brand`
--
ALTER TABLE `brand`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_process`
--
ALTER TABLE `product_process`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `status_product_process`
--
ALTER TABLE `status_product_process`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `brand`
--
ALTER TABLE `brand`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `product_process`
--
ALTER TABLE `product_process`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `status_product_process`
--
ALTER TABLE `status_product_process`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user_role`
--
ALTER TABLE `user_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
