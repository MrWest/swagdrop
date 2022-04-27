-- phpMyAdmin SQL Dump
-- version 4.9.10
-- https://www.phpmyadmin.net/
--
-- Host: db778498889.hosting-data.io
-- Generation Time: Apr 27, 2022 at 06:24 PM
-- Server version: 5.7.33-log
-- PHP Version: 7.0.33-0+deb9u12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db778498889`
--

-- --------------------------------------------------------

--
-- Table structure for table `redeem`
--

CREATE TABLE `redeem` (
  `id` int(16) NOT NULL,
  `slug` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `company` varchar(100) NOT NULL,
  `company_id` int(16) NOT NULL,
  `product` varchar(500) NOT NULL,
  `products` varchar(2000) NOT NULL,
  `isInternational` int(1) NOT NULL,
  `logo` varchar(500) NOT NULL,
  `header` varchar(100) NOT NULL,
  `subtitle` varchar(500) NOT NULL,
  `button` varchar(50) NOT NULL,
  `status` varchar(20) NOT NULL,
  `theme` varchar(500) NOT NULL,
  `last_modified` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `redeem`
--

INSERT INTO `redeem` (`id`, `slug`, `name`, `company`, `company_id`, `product`, `products`, `isInternational`, `logo`, `header`, `subtitle`, `button`, `status`, `theme`, `last_modified`) VALUES
(7, 'weathervane-new-hire', 'New Hire', 'Weathervane', 3719, 'https://swagup-static.swagup.com/platform/media/form/packs/SwagUp_-_Fulfillment_Internal_Test_--_Pack_Executive_.png', '[{\"id\":19568,\"name\":\"H2Go Silo\",\"image\":\"https://swagup-static.swagup.com/platform-staging/media/accounts/account_3719/account-products/p19568-1622064870847.png\",\"quantity\":1,\"is_apparel\":false}]', 0, 'https://png.pngtree.com/element_pic/16/11/30/8e975ac01b5b5ba2bc21cc6fd0c4690b.jpg', 'Welcome to the Wild WildWest!', 'Fill the form and collect your swag', 'Redeem Here', 'draft', '{\"id\":99,\"background\":\"#340755\",\"color\":\"#ffffff\",\"fontFamily\":\"Gilroy\",\"accent\":\"#ffeb3b\"}', '04-25-22'),
(8, 'weathervane-client-appreciation', 'Client Appreciation', 'Weathervane', 3719, 'https://www.solutiontriangle.com/backend/uploads/leax.png', '[{\"id\":23864,\"name\":\"Pack 8/19/2021\",\"image\":\"https://swagup-static.swagup.com/platform-staging/media/accounts/account_3719/account-products/p23864-1629396454729.png\",\"quantity\":1,\"is_apparel\":true}]', 0, 'https://swagup-resource-uploader.s3.amazonaws.com/1650871631885-5a37e212d904a8.5091170115136117948889.png', 'Welcome to CompanyName', 'We like to welcome you to our company with some small gifts. Click the button below to redeem it.', 'Claim my gift', 'published', '{\"id\":1,\"background\":\"#000000\",\"color\":\"#ffffff\",\"accent\":\"#45D2B0\",\"fontFamily\":\"Gilroy\"}', '04-26-22'),
(9, 'weathervane-april-conference', 'April Conference', 'Weathervane', 3719, 'https://www.swagup.com/static/images/landingPagesSSR/group-143@3x.png', '[{\"id\":23864,\"name\":\"Pack 8/19/2021\",\"image\":\"https://swagup-static.swagup.com/platform-staging/media/accounts/account_3719/account-products/p23864-1629396454729.png\",\"quantity\":1,\"is_apparel\":true},{\"id\":18551,\"name\":\"Sleek Flash Drive\",\"image\":\"https://swagup-static.swagup.com/platform-staging/media/accounts/account_3719/account-products/p18551-1618341198981.png\",\"quantity\":1}]', 1, 'https://png.pngtree.com/png-vector/20190303/ourmid/pngtree-modern-abstract-3d-logo-png-image_771012.jpg', 'Weathervane SwagDrop', 'Fill the form and collect your swag', 'Take it!', 'published', '{\"id\":2,\"background\":\"#FFFFFF\",\"color\":\"#0b1829\",\"accent\":\"#9846DD\",\"fontFamily\":\"Futura\"}', '04-25-22'),
(10, 'weathervane-extravaganza', 'extravaganza', 'Weathervane', 3719, 'https://swagup-static.swagup.com/platform/media/form/packs/cha1.png', '[{\"id\":19568,\"name\":\"H2Go Silo\",\"image\":\"https://swagup-static.swagup.com/platform-staging/media/accounts/account_3719/account-products/p19568-1622064870847.png\",\"quantity\":1,\"is_apparel\":false},{\"id\":18551,\"name\":\"Sleek Flash Drive\",\"image\":\"https://swagup-static.swagup.com/platform-staging/media/accounts/account_3719/account-products/p18551-1618341198981.png\",\"quantity\":1,\"is_apparel\":false}]', 0, 'https://png.pngtree.com/png-vector/20190225/ourmid/pngtree-circuit-logo-template-vector-png-image_704226.jpg', 'Awesome Extravaganza', 'major announcements provide more certainty for Canadian immigration candidates. major announcements provide more certainty for Canadian immigration candidates.', 'Go for it!', 'published', '{\"id\":99,\"background\":\"#FFFFFF\",\"color\":\"#0b1829\",\"accent\":\"#9846DD\",\"fontFamily\":\"Gilroy\"}', '04-25-22'),
(11, 'weathervane-5th-anniversary', '5th Anniversary', 'Weathervane', 3719, 'https://swagup-static.swagup.com/platform-staging/media/accounts/account_3719/account-products/p19568-1622064870847.png', '[{\"id\":23864,\"name\":\"Pack 8/19/2021\",\"image\":\"https://swagup-static.swagup.com/platform-staging/media/accounts/account_3719/account-products/p23864-1629396454729.png\",\"quantity\":1,\"is_apparel\":true},{\"id\":19568,\"name\":\"H2Go Silo\",\"image\":\"https://swagup-static.swagup.com/platform-staging/media/accounts/account_3719/account-products/p19568-1622064870847.png\",\"quantity\":1,\"is_apparel\":false}]', 0, 'https://png.pngtree.com/element_pic/00/16/07/115783931601b5c.jpg', '5th Anniversary celebration', 'We like to welcome you to our company with some small gifts. Click the button below to redeem it.', 'Enjoy it', 'published', '{\"id\":99,\"background\":\"#FFFFFF\",\"color\":\"#0b1829\",\"accent\":\"#9846DD\",\"fontFamily\":\"Gilroy\"}', '04-25-22'),
(16, 'weathervane-new-swagdrop-mmxxii', 'New SwagDrop MMXXII', 'Weathervane', 3719, 'https://swagup-static.swagup.com/platform/media/form/packs/virtual.png', '[{\"id\":19568,\"name\":\"H2Go Silo\",\"image\":\"https://swagup-static.swagup.com/platform-staging/media/accounts/account_3719/account-products/p19568-1622064870847.png\",\"quantity\":1}]', 0, 'https://swagup-resource-uploader.s3.amazonaws.com/1650870635530-kisspng-amazon-com-brand-logo-e-commerce-customer-international-volunteering-5b534dc6015e31.6273062615321860540056.jpg', 'Welcome to Amazon', 'We like to welcome you to our company with some small gifts. Click the button below to redeem it.', 'Get it Now!', 'draft', '{\"id\":99,\"background\":\"#FFFFFF\",\"color\":\"#0b1829\",\"accent\":\"#9846DD\",\"fontFamily\":\"Gilroy\"}', '04-25-22'),
(21, 'walmart-ecommerce-new-hire-welcome', 'New Hire Welcome', 'Walmart eCommerce', 118, 'https://swagup-static.swagup.com/platform-staging/media/accounts/account_118/account-products/p18705-1618604968176.png', '[{\"id\":18705,\"name\":\"Pack 4/16/2021\",\"image\":\"https://swagup-static.swagup.com/platform-staging/media/accounts/account_118/account-products/p18705-1618604968176.png\",\"quantity\":1,\"is_apparel\":true}]', 0, 'https://swagup-resource-uploader.s3.amazonaws.com/1650898496121-kisspng-paypal-logo-brand-font-payment-paypal-logo-icon-paypal-icon-logo-png-and-vecto-5b7f273e45e8a9.9067728615350597742864.png', 'Welcome to Walmart', 'We like to welcome you to our company with some small gifts. Click the button below to redeem it.', 'Redeem Here', 'published', '{\"id\":99,\"background\":\"#FFFFFF\",\"color\":\"#0b1829\",\"accent\":\"#9846DD\",\"fontFamily\":\"Gilroy\"}', '04-25-22'),
(22, 'walmart-ecommerce-new-page', 'New page', 'Walmart eCommerce', 118, 'https://swagup-static.swagup.com/platform-staging/media/accounts/account_118/account-products/p18705-1618604968176.png', '[{\"id\":18705,\"name\":\"Pack 4/16/2021\",\"image\":\"https://swagup-static.swagup.com/platform-staging/media/accounts/account_118/account-products/p18705-1618604968176.png\",\"quantity\":1,\"is_apparel\":true}]', 0, 'https://swagup-resource-uploader.s3.amazonaws.com/1650904741740-kisspng-paypal-logo-brand-font-payment-paypal-logo-icon-paypal-icon-logo-png-and-vecto-5b7f273e45e8a9.9067728615350597742864.png', 'Welcome to MyCompany', 'We like to welcome you to our company with some small gifts. Click the button below to redeem it.', 'Get it Now', 'published', '{\"id\":99,\"background\":\"#FFFFFF\",\"color\":\"#0b1829\",\"accent\":\"#9846DD\",\"fontFamily\":\"Gilroy\"}', '04-25-22'),
(24, 'weathervane-5th-anniversary-2', '5th Anniversary-2', 'Weathervane', 3719, 'https://swagup-static.swagup.com/platform-staging/media/accounts/account_3719/account-products/p23864-1629396454729.png', '[{\"id\":23864,\"name\":\"Pack 8/19/2021\",\"image\":\"https://swagup-static.swagup.com/platform-staging/media/accounts/account_3719/account-products/p23864-1629396454729.png\",\"quantity\":2,\"is_apparel\":true},{\"id\":19568,\"name\":\"H2Go Silo\",\"image\":\"https://swagup-static.swagup.com/platform-staging/media/accounts/account_3719/account-products/p19568-1622064870847.png\",\"quantity\":1,\"is_apparel\":false}]', 1, 'https://swagup-resource-uploader.s3.amazonaws.com/1651072271537-kisspng-paypal-logo-brand-font-payment-paypal-logo-icon-paypal-icon-logo-png-and-vecto-5b7f273e45e8a9.9067728615350597742864.png', 'Congrats on our 5th Anniversary', 'We like to welcome you to our company with some small gifts. Click the button below to redeem it.', 'Enjoy it!', 'published', '{\"id\":99,\"background\":\"#FFFFFF\",\"color\":\"#0b1829\",\"accent\":\"#dd2c00\",\"fontFamily\":\"Helvetica\"}', '04-27-22');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `redeem`
--
ALTER TABLE `redeem`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `redeem`
--
ALTER TABLE `redeem`
  MODIFY `id` int(16) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
