-- phpMyAdmin SQL Dump
-- version 4.4.10
-- http://www.phpmyadmin.net
--
-- Host: localhost:3306
-- Generation Time: May 26, 2016 at 12:58 PM
-- Server version: 5.5.42
-- PHP Version: 5.6.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `ishop`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `memberid` tinyint(11) NOT NULL,
  `prodname` varchar(40) DEFAULT NULL,
  `unitprice` float DEFAULT NULL,
  `quantity` float DEFAULT NULL,
  `subtotal` float DEFAULT NULL,
  `taxes` mediumtext NOT NULL,
  `profit` mediumtext NOT NULL,
  `imglink` mediumtext NOT NULL,
  `sold` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`memberid`, `prodname`, `unitprice`, `quantity`, `subtotal`, `taxes`, `profit`, `imglink`, `sold`) VALUES
(39, 'Apple EarPods with Remote and Mic', 29, 1, 29, '2', '5', 'img/prod/earphones.jpg', 'S'),
(39, 'iMac', 1099, 1, 1099, '10', '350', 'img/prod/imacc.png', 'S'),
(39, 'Polaroid Zip Instant Mobile Printer', 129, 3, 387, '5', '20', 'img/prod/hjjt22.gif', 'S'),
(41, 'iPhone 6S', 649, 1, 649, '10', '200', 'img/prod/iphone.jpg', 'S'),
(41, 'Apple EarPods with Remote and Mic', 29, 2, 58, '2', '5', 'img/prod/earphones.jpg', 'S'),
(23, 'iMac', 1099, 1, 1099, '10', '350', 'img/prod/imacc.png', 'S'),
(23, 'iPad Pro', 599, 1, 599, '20', '800', 'img/prod/ipad.png', 'S'),
(14, 'VGA Adapter One', 100, 1, 100, '10', '5', 'img/newprod.jpg', ''),
(43, 'iMac', 1099, 1, 1099, '10', '350', 'img/prod/imacc.png', '');

-- --------------------------------------------------------

--
-- Table structure for table `items_sold`
--

CREATE TABLE `items_sold` (
  `memberid` tinyint(11) NOT NULL,
  `prodname` varchar(40) DEFAULT NULL,
  `unitprice` float DEFAULT NULL,
  `quantity` float DEFAULT NULL,
  `subtotal` float DEFAULT NULL,
  `taxes` mediumtext NOT NULL,
  `profit` mediumtext NOT NULL,
  `imglink` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE `members` (
  `memberid` tinyint(11) NOT NULL,
  `membertype` varchar(20) NOT NULL,
  `firstname` varchar(100) DEFAULT NULL,
  `lastname` varchar(150) DEFAULT NULL,
  `email` varchar(254) DEFAULT NULL,
  `pass` varchar(50) DEFAULT NULL,
  `phone` varchar(25) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=44 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`memberid`, `membertype`, `firstname`, `lastname`, `email`, `pass`, `phone`) VALUES
(3, 'Admin', 'Amr', 'Farouq', 'amr@ishop.com', 'root', '+961223344'),
(14, 'Cust', 'CustMaster', 'Mast', 'cust@ishop.com', 'cust123', '+96178899777'),
(15, 'Cust', 'ahmad', 'kheir', 'ahmad@ishop.com', 'kh123', '+9619990099'),
(16, 'Cust', 'Abdalla', 'Chakik', 'Abdala@ishop.com', 'ac123', '+961334455'),
(17, 'Cust', 'Abdala', 'Ghemrawi', 'ghemrawi@ishop.com', 'gh123', '+96177889990'),
(20, 'Deo', 'DeoMaster', 'Entry', 'deo@ishop.com', 'deo123', '+961789876'),
(23, 'Cust', 'Rabie', 'Khaled', 'cust1@ishop.com', 'cust123', '+961778899'),
(30, 'Cust', 'Julius', 'Ceasar', 'cust2@ishop.com', 'cust123', '+961789789789'),
(32, 'Cust', 'Ramy', 'Sabry', 'cust3@ishop.com', 'cust123', '+96111223322'),
(34, 'Admin', 'Amr', 'Farouq', 'amr@ishop.com', 'root', '+961223344'),
(35, 'Admin', 'Amr', 'Farouq', 'amr@ishop.com', 'root', '+961223344'),
(36, 'Deo', 'DataENtry', 'Operator', 'dataentry@ishop.com', 'deo123', '+9617766554433'),
(37, 'Deo', 'D1', 'D2', 'd@ishop.com', 'd321', '+96121'),
(38, 'Cust', 'Rafik', 'Marzouk', 'rafik@ishop.com', 'rf123', '+961009988'),
(39, 'Cust', 'MyCustomer', 'NumbrOne', 'my@ishop.com', 'my123', '+9610088997'),
(40, 'Cust', 'Rasha', 'Ghani', 'rasha@ishop.com', 'rs123', '+96111223311'),
(41, 'Cust', 'User', 'Name', 'user@ishop.com', 'u123', '+961223300'),
(42, 'Deo', 'Number', 'One', 'nbone@ishop.com', 'nb123', '+9617766'),
(43, 'Cust', 'Tarek', 'elhag', 'tarek@ishop.com', 'tr123', '+9610009887');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `orderprice` varchar(25) DEFAULT NULL,
  `ordertaxe` varchar(25) DEFAULT NULL,
  `orderprofit` varchar(25) DEFAULT NULL,
  `orderdate` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=50 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `orderprice`, `ordertaxe`, `orderprofit`, `orderdate`) VALUES
(47, '1515', '17', '375', '2016-05-25 17:33:15'),
(48, '707', '12', '205', '2016-05-26 06:31:12'),
(49, '1698', '30', '1150', '2016-05-26 06:32:03');

-- --------------------------------------------------------

--
-- Table structure for table `order_history`
--

CREATE TABLE `order_history` (
  `OrderID` int(11) NOT NULL,
  `memberid` tinyint(11) NOT NULL,
  `Date` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `Amount` varchar(25) DEFAULT NULL,
  `Status` varchar(25) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `order_history`
--

INSERT INTO `order_history` (`OrderID`, `memberid`, `Date`, `Amount`, `Status`) VALUES
(6, 39, '2016-05-25 17:33:15', '1515', 'Finalized'),
(7, 41, '2016-05-26 06:31:12', '707', 'Finalized'),
(8, 23, '2016-05-26 06:32:03', '1698', 'Finalized');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `prodid` int(11) NOT NULL,
  `prodname` varchar(40) DEFAULT NULL,
  `proddescripd` longtext,
  `price` float DEFAULT NULL,
  `qty` mediumtext NOT NULL,
  `taxes` float DEFAULT NULL,
  `profit` float DEFAULT NULL,
  `weblink` mediumtext NOT NULL,
  `imglink` mediumtext NOT NULL,
  `imglrglink` mediumtext NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`prodid`, `prodname`, `proddescripd`, `price`, `qty`, `taxes`, `profit`, `weblink`, `imglink`, `imglrglink`) VALUES
(10, 'iMac', '1.6GHz dual-core Intel Core i5 processor  Turbo Boost up to 2.7GHz  8GB of onboard memory, configurable up to 16GB  1TB hard drive1  Intel HD Graphics 6000  1920-by-1080 sRGB display', 1099, '999', 10, 350, 'prod-imac.php', 'img/prod/imacc.png', 'img/prodlarge/imac.jpg'),
(11, 'iPhone 6S', 'Available in gold, silver, space gray, and rose gold, iPhone 6s Plus features an A9 chip, 3D Touch, Touch ID, a 12MP iSight camera, and iOS 9.', 649, '888', 10, 200, 'prod-iphone-6s.php', 'img/prod/iphone.jpg', 'img/prodlarge/iphone6.jpg'),
(12, 'Macbook Pro 17"', '2.7GHz dual-core Intel Core i5  Turbo Boost up to 3.1GHz  8GB 1866MHz LPDDR3 memory  128GB PCIe-based flash storage1  Intel Iris Graphics 6100  Built-in battery (10 hours)2  Force Touch trackpad', 1299, '778', 15, 500, 'prod-macbook-pro.php', 'img/prod/macbook.jpg', 'img/prodlarge/MACBOOKPRO.JPG'),
(13, 'Apple Watch', 'The Apple Watch is a smartwatch developed by Apple Inc. It incorporates fitness tracking and health-oriented capabilities with integration with iOS and other Apple products and services.', 699, '1000', 10, 250, 'prod-watch.php', 'img/prod/watch.gif', 'img/prodlarge/watch.png'),
(14, 'iPad Pro', 'iPad Pro is more than the next generation of iPad â€” itâ€™s an uncompromising vision of personal computing for the modern world. It puts incredible power that leaps past most portable PCs at your fingertips.', 599, '690', 20, 800, 'prod-ipad.php', 'img/prod/ipad.png', 'img/prodlarge/ipadpro.jpg'),
(15, 'Mac Pro', 'The Mac Pro line is a series of Intel Xeon based workstation and server computers manufactured by Apple Inc. The Mac Pro, in most configurations and in terms of speed and performance, is the most powerful computer that Apple offers.', 4799, '666', 20, 800, 'prod-mac-pro.php', 'img/prod/macpro.jpg', 'img/prodlarge/macpro.jpg'),
(16, 'Polaroid Zip Instant Mobile Printer', 'Print photos in full colour directly from your iPhone or iPad with the Polaroid Zip Photo Printer. Works with 2x3 Zink Film for bright and fun sticky-back prints you can instantly share with friends and family.', 129, '567', 5, 20, 'prod-mob-printer.php', 'img/prod/hjjt22.gif', 'img/prodlarge/HJJT2.png'),
(17, 'iPod Touch', 'iPod touch is the perfect way to carry your music collection in your pocket. With the iTunes Store, the worldâ€™s largest music catalog â€” you can load up your iPod touch with your favorite songs.', 199, '898', 5, 20, 'prod-ipod-touch.php', 'img/prod/ipodtouch.png', 'img/prodlarge/ipodtouch.png'),
(18, 'iPod Nano', 'Tap to play your favorite songs. Or entire albums. Or everything by one artist. You can even browse by genres or composers.', 149, '998', 5, 20, 'prod-ipod-nano.php', 'img/prod/ipodnano.jpg', 'img/prodlarge/ipodnano.png'),
(19, 'Apple TV', 'Apple TV gives you access to the best content â€” blockbuster movies, TV shows, sports, your music and photos and more â€” right on your HDTV.', 69, '50', 3, 10, 'prod-appletv.php', 'img/prod/appletv.png', 'img/prodlarge/appl.png'),
(20, 'Apple EarPods with Remote and Mic', 'Unlike traditional, circular earbuds, the design of the Apple EarPods is defined by the geometry of the ear.', 29, '2000', 2, 5, 'prod-earphones.php', 'img/prod/earphones.jpg', 'img/prodlarge/earphones.jpg'),
(21, 'Beats Pill+ Speaker - Black', 'Beats Pill+ is designed to go wherever you do and fill the room with a rich clear sound field that has as much power as it does definition.', 29, '1500', 5, 10, 'prod-speakers.php', 'img/prod/beatss.png', 'img/prodlarge/Beatsd.png');

-- --------------------------------------------------------

--
-- Table structure for table `products_default`
--

CREATE TABLE `products_default` (
  `prodid` int(11) NOT NULL,
  `prodname` varchar(40) DEFAULT NULL,
  `proddescripd` longtext,
  `price` mediumtext,
  `taxes` float DEFAULT NULL,
  `profit` float DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products_default`
--

INSERT INTO `products_default` (`prodid`, `prodname`, `proddescripd`, `price`, `taxes`, `profit`) VALUES
(10, 'iMac', '1.6GHz dual-core Intel Core i5 processor  Turbo Boost up to 2.7GHz  8GB of onboard memory, configurable up to 16GB  1TB hard drive1  Intel HD Graphics 6000  1920-by-1080 sRGB display', '1099', 10, 350),
(11, 'iPhone 6S', 'Available in gold, silver, space gray, and rose gold, iPhone 6s Plus features an A9 chip, 3D Touch, Touch ID, a 12MP iSight camera, and iOS 9.', '649$', 10, 200),
(12, 'Macbook Pro 17"', '2.7GHz dual-core Intel Core i5  Turbo Boost up to 3.1GHz  8GB 1866MHz LPDDR3 memory  128GB PCIe-based flash storage1  Intel Iris Graphics 6100  Built-in battery (10 hours)2  Force Touch trackpad', '1299', 15, 500),
(13, 'Apple Watch', 'The Apple Watch is a smartwatch developed by Apple Inc. It incorporates fitness tracking and health-oriented capabilities with integration with iOS and other Apple products and services.', '699', 10, 250),
(14, 'iPad Pro', 'iPad Pro is more than the next generation of iPad â€” itâ€™s an uncompromising vision of personal computing for the modern world. It puts incredible power that leaps past most portable PCs at your fingertips.', '599', 10, 250),
(15, 'Mac Pro', 'The Mac Pro line is a series of Intel Xeonâ€“based workstation and server computers manufactured by Apple Inc. The Mac Pro, in most configurations and in terms of speed and performance, is the most powerful computer that Apple offers.', '4799', 20, 800),
(16, 'Polaroid Zip Instant Mobile Printer', 'Print photos in full colour directly from your iPhone or iPad with the Polaroid Zip Photo Printer. Works with 2x3 Zink Film for bright and fun sticky-back prints you can instantly share with friends and family.', '129', 5, 20),
(17, 'iPod Touch', 'iPod touch is the perfect way to carry your music collection in your pocket. With the iTunes Store, the worldâ€™s largest music catalog â€” you can load up your iPod touch with your favorite songs.', '199', 5, 20),
(18, 'iPod Nano', 'Tap to play your favorite songs. Or entire albums. Or everything by one artist. You can even browse by genres or composers.', '149', 5, 20),
(19, 'Apple TV', 'Apple TV gives you access to the best content â€” blockbuster movies, TV shows, sports, your music and photos and more â€” right on your HDTV.', '69', 3, 10),
(20, 'Apple EarPods with Remote and Mic', 'Unlike traditional, circular earbuds, the design of the Apple EarPods is defined by the geometry of the ear.', '29', 2, 5),
(21, 'Beats Pill+ Speaker - Black', 'Beats Pill+ is designed to go wherever you do and fill the room with a rich clear sound field that has as much power as it does definition.', '29', 5, 10);

-- --------------------------------------------------------

--
-- Table structure for table `welcome`
--

CREATE TABLE `welcome` (
  `firstname` varchar(30) NOT NULL,
  `membertype` varchar(20) NOT NULL,
  `memberid` tinyint(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `wishlist`
--

CREATE TABLE `wishlist` (
  `memberid` tinyint(11) NOT NULL,
  `prodname` varchar(40) DEFAULT NULL,
  `unitprice` float DEFAULT NULL,
  `quantity` float DEFAULT NULL,
  `subtotal` float DEFAULT NULL,
  `taxes` mediumtext NOT NULL,
  `profit` mediumtext NOT NULL,
  `imglink` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `wishlist`
--

INSERT INTO `wishlist` (`memberid`, `prodname`, `unitprice`, `quantity`, `subtotal`, `taxes`, `profit`, `imglink`) VALUES
(39, 'iPhone 6S', 649, 1, 649, '10', '200', 'img/prod/iphone.jpg'),
(14, 'iPad Pro', 599, 1, 599, '20', '800', 'img/prod/ipad.png'),
(41, 'Mac Pro', 4799, 1, 4799, '20', '800', 'img/prod/macpro.jpg'),
(23, 'iPod Nano', 149, 1, 149, '5', '20', 'img/prod/ipodnano.jpg'),
(43, 'Mac Pro', 4799, 1, 4799, '20', '800', 'img/prod/macpro.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`memberid`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_history`
--
ALTER TABLE `order_history`
  ADD PRIMARY KEY (`OrderID`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`prodid`);

--
-- Indexes for table `products_default`
--
ALTER TABLE `products_default`
  ADD PRIMARY KEY (`prodid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `members`
--
ALTER TABLE `members`
  MODIFY `memberid` tinyint(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=44;
--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=50;
--
-- AUTO_INCREMENT for table `order_history`
--
ALTER TABLE `order_history`
  MODIFY `OrderID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `prodid` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `products_default`
--
ALTER TABLE `products_default`
  MODIFY `prodid` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=22;
