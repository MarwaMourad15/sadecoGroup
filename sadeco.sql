-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 05, 2016 at 07:58 PM
-- Server version: 5.7.15-0ubuntu0.16.04.1
-- PHP Version: 7.0.8-0ubuntu0.16.04.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sadeco`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE `about` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `description` text,
  `intro` text,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`id`, `title`, `image`, `description`, `intro`, `created_at`, `updated_at`) VALUES
(3, 'History', '', '<p><span style="color:rgb(116, 116, 116); font-family:open sans,sans-serif; font-size:14px">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don&#39;t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn&#39;t anything embarrassing hidden in the middle of text. There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don&#39;t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn&#39;t anything embarrassing hidden in the middle of text. There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don&#39;t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn&#39;t anything embarrassing hidden in the middle of text.</span></p>\r\n', '', 1474810642, 1474810642),
(4, 'vission-mission', '', '<p><span style="color:rgb(116, 116, 116); font-family:open sans,sans-serif; font-size:14px">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don&#39;t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn&#39;t anything embarrassing hidden in the middle of text. There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don&#39;t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn&#39;t anything embarrassing hidden in the middle of text. There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don&#39;t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn&#39;t anything embarrassing hidden in the middle of text. There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don&#39;t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn&#39;t anything embarrassing hidden in the middle of text.</span></p>\r\n', '', 1474810765, 1474810765),
(5, 'meeting standards', '', '<p><span style="color:rgb(116, 116, 116); font-family:open sans,sans-serif; font-size:14px">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don&#39;t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn&#39;t anything embarrassing hidden in the middle of text. There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don&#39;t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn&#39;t anything embarrassing hidden in the middle of text.</span></p>\r\n', '', 1474810793, 1474810793),
(6, 'market', '', '<p><span style="color:rgb(116, 116, 116); font-family:open sans,sans-serif; font-size:14px">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don&#39;t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn&#39;t anything embarrassing hidden in the middle of text.</span></p>\r\n', '', 1474810825, 1474810825),
(7, 'solution around the globe', '', '<p><span style="color:rgb(116, 116, 116); font-family:open sans,sans-serif; font-size:14px">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don&#39;t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn&#39;t anything embarrassing hidden in the middle of text. There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don&#39;t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn&#39;t anything embarrassing hidden in the middle of text.There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don&#39;t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn&#39;t anything embarrassing hidden in the middle of text.There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don&#39;t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn&#39;t anything embarrassing hidden in the middle of text.</span></p>\r\n', '', 1474810869, 1474810869),
(8, 'our clients', '', '<p><span style="color:rgb(116, 116, 116); font-family:open sans,sans-serif; font-size:14px">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don&#39;t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn&#39;t anything embarrassing hidden in the middle of text. There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don&#39;t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn&#39;t anything embarrassing hidden in the middle of text.There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don&#39;t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn&#39;t anything embarrassing hidden in the middle of text.There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don&#39;t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn&#39;t anything embarrassing hidden in the middle of text.</span></p>\r\n', '', 1474810900, 1474810900),
(9, 'terms and conditions', '', '<p><span style="color:rgb(116, 116, 116); font-family:open sans,sans-serif; font-size:14px">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don&#39;t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn&#39;t anything embarrassing hidden in the middle of text. There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don&#39;t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn&#39;t anything embarrassing hidden in the middle of text.There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don&#39;t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn&#39;t anything embarrassing hidden in the middle of text.There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don&#39;t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn&#39;t anything embarrassing hidden in the middle of text.</span></p>\r\n', '', 1474810928, 1474810928);

-- --------------------------------------------------------

--
-- Table structure for table `advertisment`
--

CREATE TABLE `advertisment` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `description` text,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL,
  `link` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `advertisment`
--

INSERT INTO `advertisment` (`id`, `title`, `image`, `description`, `created_at`, `updated_at`, `link`) VALUES
(1, 'Add1', '/uploads/adv/adds-1.jpg', '', 2147483647, 1474810373, ''),
(2, 'ADD2', '/uploads/adv/adds-2.jpg', '', 1474680141, 1474810394, '');

-- --------------------------------------------------------

--
-- Table structure for table `auth_assignment`
--

CREATE TABLE `auth_assignment` (
  `item_name` varchar(64) NOT NULL,
  `user_id` varchar(64) NOT NULL,
  `created_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `auth_assignment`
--

INSERT INTO `auth_assignment` (`item_name`, `user_id`, `created_at`) VALUES
('admin', '1', 1461545971),
('admin', '2', 1467545184),
('user', '3', 1475012702),
('user', '4', 1475012747),
('user', '5', 1475012778),
('user', '6', 1475012817),
('user', '7', 1475014353);

-- --------------------------------------------------------

--
-- Table structure for table `auth_item`
--

CREATE TABLE `auth_item` (
  `name` varchar(64) NOT NULL,
  `type` int(11) NOT NULL,
  `description` text,
  `rule_name` varchar(64) DEFAULT NULL,
  `data` text,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `auth_item`
--

INSERT INTO `auth_item` (`name`, `type`, `description`, `rule_name`, `data`, `created_at`, `updated_at`) VALUES
('admin', 1, 'Administrator', NULL, NULL, 1461461263, 1461461263),
('guest', 1, 'Guest', NULL, NULL, 1461461263, 1461461263),
('user', 1, 'User', NULL, NULL, 1461461263, 1461461263);

-- --------------------------------------------------------

--
-- Table structure for table `auth_item_child`
--

CREATE TABLE `auth_item_child` (
  `parent` varchar(64) NOT NULL,
  `child` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `auth_rule`
--

CREATE TABLE `auth_rule` (
  `name` varchar(64) NOT NULL,
  `data` text,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `aviation`
--

CREATE TABLE `aviation` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `description` text,
  `intro` text,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `aviation`
--

INSERT INTO `aviation` (`id`, `title`, `image`, `description`, `intro`, `created_at`, `updated_at`) VALUES
(1, 'SAP Services ', '', '<p><strong>Lorem Ipsum</strong> is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.<strong>Lorem Ipsum</strong> is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.<strong>Lorem Ipsum</strong> is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n', '', NULL, 1474683415),
(2, 'SAP Products ', '/uploads/pages/content-bg.jpg', '<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don&#39;t look even,There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don&#39;t look even. There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don&#39;t look even,There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don&#39;t look even.</p>\r\n', '', NULL, 1474683443),
(3, 'Products Selection Guide', '', '<h2>Comming Soon</h2>\r\n', '', 1474683478, 1474683478),
(4, 'Cross Reference', '', '<p><span style="color:rgb(116, 116, 116); font-family:open sans,sans-serif; font-size:14px">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don&#39;t look even,There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don&#39;t look even. There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don&#39;t look even,There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don&#39;t look even.</span></p>\r\n', '', 1474683497, 1474811787),
(5, ' SAP Surveys', '', '<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don&#39;t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn&#39;t anything embarrassing hidden in the middle of text.</p>\r\n', '', 1474683515, 1474683515),
(6, 'Online Purchasing Solution ', '/uploads/pages/slider-4.jpg', '<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don&#39;t look even,There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don&#39;t look even......</p>\r\n\r\n<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don&#39;t look even,There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don&#39;t look even......</p>\r\n', '', 1474683554, 1474683554);

-- --------------------------------------------------------

--
-- Table structure for table `calibration`
--

CREATE TABLE `calibration` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `description` text,
  `intro` text,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `calibration`
--

INSERT INTO `calibration` (`id`, `title`, `image`, `description`, `intro`, `created_at`, `updated_at`) VALUES
(2, 'Quality', '/uploads/pages/slide3.jpg', '<p><span style="color:rgb(116, 116, 116); font-family:open sans,sans-serif; font-size:14px">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don&#39;t look even,There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don&#39;t look even.</span></p>\r\n', '', 1474811360, 1474811360),
(3, 'Certificates', '/uploads/pages/slider-1.jpg', '<p><span style="color:rgb(116, 116, 116); font-family:open sans,sans-serif; font-size:14px">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don&#39;t look even,There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don&#39;t look even.</span></p>\r\n', '', 1474811400, 1474811400);

-- --------------------------------------------------------

--
-- Table structure for table `download`
--

CREATE TABLE `download` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `description` text,
  `intro` text,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL,
  `file` varchar(255) DEFAULT NULL,
  `catalouge_id` int(10) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `download`
--

INSERT INTO `download` (`id`, `title`, `image`, `description`, `intro`, `created_at`, `updated_at`, `file`, `catalouge_id`) VALUES
(2, 'Download 1', '/uploads/download/images.jpeg', '<p>The widget is a wrapper for the Bootstrap FileInput JQuery plugin by Krajee. Refer plugin <a href="http://plugins.krajee.com/file-input" target="_blank">documentation</a> and <a href="http://plugins.krajee.com/file-input/demo" target="_blank">demos</a> for details. The widget supports all parameters that one would pass for any <a href="https://github.com/yiisoft/yii2/blob/master/framework/widgets/InputWidget.php" target="_blank"> Yii Input Widget</a>. The additional parameter settings specially available for the FileInput widget configuration are:</p>\r\n\r\n<ul>\r\n	<li>\r\n	<p><code>resizeImages</code>: <em>boolean</em>, whether to resize images on client side. Defaults to <code>false</code>. You must set this to <code>true</code> if you wish to configure the plugin to resize images and load the necessary dependent <code>CanvasBlobAsset</code>.</p>\r\n	</li>\r\n	<li>\r\n	<p><code>showMessage</code>: <em>boolean</em>, whether to display a warning message for browsers running IE9 and below. Defaults to <code>true</code>.</p>\r\n	</li>\r\n	<li>\r\n	<p><code>messageOptions</code>: <em>array</em>, HTML attributes for the container for the warning message for browsers running IE9 and below. Defaults to <code>[&#39;class&#39; =&gt; &#39;alert alert-warning&#39;]</code>.</p>\r\n	</li>\r\n	<li>\r\n	<p><code>disabled</code>: <em>boolean</em> whether the input widget is to be entirely disabled. Defaults to <code>false</code>.</p>\r\n	</li>\r\n	<li>\r\n	<p><code>readonly</code>: <em>boolean</em> whether the input widget is to be entirely readonly. Defaults to <code>false</code>.</p>\r\n	</li>\r\n	<li>\r\n	<p><code>options</code>: <em>array</em>, the HTML attributes for the file input.</p>\r\n	</li>\r\n</ul>\r\n', 'The widget is a wrapper for the Bootstrap FileInput JQuery plugin by Krajee. Refer plugin documentation and demos for details. The widget supports all parameters that one would pass for any Yii Input Widget. The additional parameter settings specially available for the FileInput widget ', 2147483647, 2147483647, '/uploads/download/PayMob - Merchant Integration Guide v2.0.pdf', 1);

-- --------------------------------------------------------

--
-- Table structure for table `down_catalouge`
--

CREATE TABLE `down_catalouge` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `down_catalouge`
--

INSERT INTO `down_catalouge` (`id`, `title`, `created_at`, `updated_at`) VALUES
(1, 'Catalog 1', 2147483647, 2147483647),
(2, 'Catalog 2', 2147483647, 2147483647);

-- --------------------------------------------------------

--
-- Table structure for table `home_slider`
--

CREATE TABLE `home_slider` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `description` text,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL,
  `link` varchar(255) DEFAULT NULL,
  `is_home` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `home_slider`
--

INSERT INTO `home_slider` (`id`, `title`, `image`, `description`, `created_at`, `updated_at`, `link`, `is_home`) VALUES
(1, 'Lorem Ipsum', '/uploads/adv/slide1.jpg', '<p>is simply dummy text of the printing an is simply dummy text of the printing an is simply dummy text of the printing an is simply dummy text of the printing an</p>\r\n', 1470744219, 1474809560, '', 1),
(2, 'Lorem Ipsum', '/uploads/adv/slide2.jpg', '<p>is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s</p>\r\n', 1470744229, 1474809694, '', 1),
(3, 'Lorem Ipsum', '/uploads/adv/slide3.jpg', '<p><span style="font-family:helvetica,arial,sans-serif; font-size:14px">is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s</span></p>\r\n', 1470744360, 1474809949, '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `library`
--

CREATE TABLE `library` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `description` text,
  `intro` text,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL,
  `link` varchar(255) DEFAULT NULL,
  `catalouge_id` int(10) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `library`
--

INSERT INTO `library` (`id`, `title`, `image`, `description`, `intro`, `created_at`, `updated_at`, `link`, `catalouge_id`) VALUES
(1, 'Book 1', '/uploads/library/media-3.jpg', 'hat a reader will be distracted by the readable content of a page when looking atm hat a reader will be distracted by the readable content of a page when looking at', 'How To Add Icons\r\n\r\nTo insert an icon, add the name of the icon class to any inline HTML element', 2147483647, 1474813181, 'http://www.w3schools.com/icons/fontawesome_icons_webapp.asp', 2),
(2, 'Book 2', '/uploads/library/media-3.jpg', 'hat a reader will be distracted by the readable content of a page when looking atm hat a reader will be distracted by the readable content of a page when looking at', 'How To Add Icons\r\n\r\nTo insert an icon, add the name of the icon class to any inline HTML element', 2147483647, 1474813206, 'http://www.w3schools.com/icons/fontawesome_icons_webapp.asp', 2),
(3, 'Book 3', '/uploads/library/media-3.jpg', 'hat a reader will be distracted by the readable content of a page when looking atm hat a reader will be distracted by the readable content of a page when looking at', NULL, 1474813249, 1474813249, 'http://www.w3schools.com/icons/fontawesome_icons_webapp.asp', 2),
(4, 'Book1', '/uploads/library/media-2.jpg', 'hat a reader will be distracted by the readable content of a page when looking atm hat a reader will be distracted by the readable content of a page when looking at', NULL, 1474813296, 1474813296, 'http://www.w3schools.com/icons/fontawesome_icons_webapp.asp', 1),
(5, 'Book 2', '/uploads/library/media-2.jpg', 'hat a reader will be distracted by the readable content of a page when looking atm hat a reader will be distracted by the readable content of a page when looking at', NULL, 1474813327, 1474813327, 'http://www.w3schools.com/icons/fontawesome_icons_webapp.asp', 1),
(6, 'Book 3', '/uploads/library/media-1.jpg', 'hat a reader will be distracted by the readable content of a page when looking atm hat a reader will be distracted by the readable content of a page when looking at', NULL, 1474813347, 1474813347, 'http://www.w3schools.com/icons/fontawesome_icons_webapp.asp', 1);

-- --------------------------------------------------------

--
-- Table structure for table `lib_catalouge`
--

CREATE TABLE `lib_catalouge` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `lib_catalouge`
--

INSERT INTO `lib_catalouge` (`id`, `title`, `created_at`, `updated_at`) VALUES
(1, 'Cat 1', 2147483647, 2147483647),
(2, 'Cat 2 c', 2147483647, 2147483647),
(3, 'Cat 3', 2016, 2016),
(4, 'Cat 4', 2016, 2016);

-- --------------------------------------------------------

--
-- Table structure for table `migration`
--

CREATE TABLE `migration` (
  `version` varchar(180) NOT NULL,
  `apply_time` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `migration`
--

INSERT INTO `migration` (`version`, `apply_time`) VALUES
('m000000_000000_base', 1461461258),
('m140608_201405_user_init', 1461461262),
('m140608_201406_rbac_init', 1461461263),
('m140708_201431_rbac_init', 1461735281);

-- --------------------------------------------------------

--
-- Table structure for table `newsletter`
--

CREATE TABLE `newsletter` (
  `id` int(10) UNSIGNED NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `newsletter`
--

INSERT INTO `newsletter` (`id`, `email`, `created_at`, `updated_at`) VALUES
(1, 'marwa_mourad_2011@yahoo.com', 2147483647, 2147483647);

-- --------------------------------------------------------

--
-- Table structure for table `news_event`
--

CREATE TABLE `news_event` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `description` text,
  `intro` text,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL,
  `event_date` varchar(255) DEFAULT NULL,
  `video` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `news_event`
--

INSERT INTO `news_event` (`id`, `title`, `image`, `description`, `intro`, `created_at`, `updated_at`, `event_date`, `video`) VALUES
(1, 'article tittle', '/uploads/events/result-1.jpg', '<h2><span style="color:rgb(116, 116, 116); font-family:open sans,sans-serif; font-size:14px">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don&#39;t look even,There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don&#39;t look even. There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don&#39;t look even,There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don&#39;t look even. There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don&#39;t look even,There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don&#39;t look even.</span></h2>\r\n', 'There are many variations of passages of Lorem Ipsum available\r\n                                    ', 2147483647, 1474812053, 'Friday 23-9-2016 at 6 pm', ''),
(2, 'article tittle 2', '/uploads/events/result-2.jpg', '<h2><span style="color:rgb(116, 116, 116); font-family:open sans,sans-serif; font-size:14px">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don&#39;t look even,There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don&#39;t look even. There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don&#39;t look even,There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don&#39;t look even. There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don&#39;t look even,There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don&#39;t look even.</span></h2>\r\n', 'There are many variations of passages of Lorem Ipsum available\r\n', 1474812368, 1474812368, 'Sunday 27-11-2016 at 4 pm', ''),
(3, 'article tittle 3', '/uploads/events/result-1.jpg', '<h2><span style="color:rgb(116, 116, 116); font-family:open sans,sans-serif; font-size:14px">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don&#39;t look even,There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don&#39;t look even. There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don&#39;t look even,There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don&#39;t look even. There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don&#39;t look even,There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don&#39;t look even.</span></h2>\r\n', 'There are many variations of passages of Lorem Ipsum available\r\n', 1474812462, 1474812462, 'Thursday 15-2-2016 at 9 pm', ''),
(4, 'article tittle 4', '/uploads/events/result-2.jpg', '<h2><span style="color:rgb(116, 116, 116); font-family:open sans,sans-serif; font-size:14px">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don&#39;t look even,There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don&#39;t look even. There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don&#39;t look even,There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don&#39;t look even. There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don&#39;t look even,There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don&#39;t look even.</span></h2>\r\n', 'There are many variations of passages of Lorem Ipsum available\r\n', 1474812547, 1474812547, 'Saturday 7-5-2014 at 4 am', ''),
(5, 'article tittle 5', '/uploads/events/result-2.jpg', '<h2><span style="color:rgb(116, 116, 116); font-family:open sans,sans-serif; font-size:14px">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don&#39;t look even,There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don&#39;t look even. There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don&#39;t look even,There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don&#39;t look even. There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don&#39;t look even,There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don&#39;t look even.</span></h2>\r\n', 'There are many variations of passages of Lorem Ipsum available\r\n', 1474812651, 1474812651, 'Friday 2-1-2013 at 4 pm', ''),
(6, 'article tittle 6', '/uploads/events/result-1.jpg', '<h2><span style="color:rgb(116, 116, 116); font-family:open sans,sans-serif; font-size:14px">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don&#39;t look even,There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don&#39;t look even. There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don&#39;t look even,There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don&#39;t look even. There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don&#39;t look even,There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don&#39;t look even.</span></h2>\r\n', 'There are many variations of passages of Lorem Ipsum available\r\n', 1474812736, 1474812736, 'Monday 9-3-2016 at 1 pm', ''),
(7, 'article tittle 7', '/uploads/events/result-2.jpg', '<h2><span style="color:rgb(116, 116, 116); font-family:open sans,sans-serif; font-size:14px">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don&#39;t look even,There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don&#39;t look even. There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don&#39;t look even,There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don&#39;t look even. There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don&#39;t look even,There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don&#39;t look even.</span></h2>\r\n', 'There are many variations of passages of Lorem Ipsum available\r\n', 1474812833, 1474812833, 'Thursday 8-2-2002 at 10 pm', ''),
(8, 'article tittle 8', '/uploads/events/result-1.jpg', '<h2><span style="color:rgb(116, 116, 116); font-family:open sans,sans-serif; font-size:14px">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don&#39;t look even,There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don&#39;t look even. There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don&#39;t look even,There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don&#39;t look even. There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don&#39;t look even,There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don&#39;t look even.</span></h2>\r\n', 'There are many variations of passages of Lorem Ipsum available\r\n', 1474812920, 1474812920, 'Saturday 12-7-2011 at 4 pm', '');

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `description` text,
  `intro` text,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `title`, `image`, `description`, `intro`, `created_at`, `updated_at`) VALUES
(1, 'SADECO', '', '<p><span style="color:rgb(116, 116, 116); font-family:open sans,sans-serif; font-size:14px">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don&#39;t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn&#39;t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. sure there isn&#39;t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don&#39;t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn&#39;t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. sure there isn&#39;t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don&#39;t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn&#39;t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. sure there isn&#39;t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet.</span></p>\r\n', '', 2147483647, 1474810014),
(2, 'Online Purchasing solution', '', '', '', 2147483647, 2147483647),
(3, 'Contact us', '', '', '', 2147483647, 2147483647),
(4, 'Library', '', '<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form.</p>\r\n', '', 2147483647, 1474813078),
(5, 'Download', '', '<p><span style="color:rgb(166, 166, 166); font-family:open sans,sans-serif; font-size:14px">hat a reader will be distracted by the readable content of a page when looking atm hat a reader will be distracted by the readable content of a page when looking at</span></p>\r\n', '', 2147483647, 1474816502),
(6, 'Training', '', '', '', 2147483647, 2147483647),
(7, 'SCS Services ', '/uploads/pages/slide3.jpg', '<p><strong>Lorem Ipsum</strong> is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.<strong>Lorem Ipsum</strong> is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n', '', 2147483647, 1474811493);

-- --------------------------------------------------------

--
-- Table structure for table `partner`
--

CREATE TABLE `partner` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `description` text,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL,
  `link` varchar(255) DEFAULT NULL,
  `is_home` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `partner`
--

INSERT INTO `partner` (`id`, `title`, `image`, `description`, `created_at`, `updated_at`, `link`, `is_home`) VALUES
(1, '', '/uploads/adv/partner-logo1.png', NULL, 1474677901, 1474810063, NULL, 1),
(2, '', '/uploads/adv/partner-logo2.png', NULL, 1474678057, 1474810079, NULL, 1),
(3, '', '/uploads/adv/partner-logo3.png', NULL, 1474810095, 1474810095, NULL, 1),
(4, '', '/uploads/adv/partner-logo4.png', NULL, 1474810113, 1474810113, NULL, 1),
(5, '', '/uploads/adv/partner-logo5.png', NULL, 1474810125, 1474810125, NULL, 1),
(6, '', '/uploads/adv/partner-logo1.png', NULL, 1474810161, 1474810161, NULL, 1),
(7, '', '/uploads/adv/partner-logo2.png', NULL, 1474810173, 1474810173, NULL, 1),
(8, '', '/uploads/adv/partner-logo3.png', NULL, 1474810186, 1474810186, NULL, 1),
(9, '', '/uploads/adv/partner-logo4.png', NULL, 1474810201, 1474810201, NULL, 1),
(10, '', '/uploads/adv/partner-logo5.png', NULL, 1474810213, 1474810213, NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `related_section`
--

CREATE TABLE `related_section` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `description` text,
  `intro` text,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `setting`
--

CREATE TABLE `setting` (
  `id` int(10) UNSIGNED NOT NULL,
  `facebook` varchar(255) DEFAULT NULL,
  `twitter` varchar(255) DEFAULT NULL,
  `google_plus` varchar(255) DEFAULT NULL,
  `linkedin` varchar(255) DEFAULT NULL,
  `phone_number` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `map_lat` varchar(255) DEFAULT NULL,
  `map_lng` varchar(255) DEFAULT NULL,
  `email_scs` varchar(255) DEFAULT NULL,
  `email_sap` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `setting`
--

INSERT INTO `setting` (`id`, `facebook`, `twitter`, `google_plus`, `linkedin`, `phone_number`, `address`, `map_lat`, `map_lng`, `email_scs`, `email_sap`) VALUES
(1, 'facebook.com', 'twitter.com', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `auth_key` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `password_hash` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password_reset_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `role` varchar(64) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'user',
  `status` smallint(6) NOT NULL DEFAULT '10',
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL,
  `first_name` varchar(80) COLLATE utf8_unicode_ci DEFAULT NULL,
  `last_name` varchar(80) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mobile` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `office_phone` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `fax` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `account_id` int(19) DEFAULT NULL,
  `other_account_name` varchar(150) COLLATE utf8_unicode_ci DEFAULT NULL,
  `account_website` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `title` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mailing_country_id` int(19) DEFAULT NULL,
  `mailing_city` varchar(40) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mailing_address` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL,
  `interest_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `auth_key`, `password_hash`, `password_reset_token`, `email`, `role`, `status`, `created_at`, `updated_at`, `first_name`, `last_name`, `mobile`, `office_phone`, `fax`, `account_id`, `other_account_name`, `account_website`, `title`, `mailing_country_id`, `mailing_city`, `mailing_address`, `interest_id`) VALUES
(1, 'marwa', 'BX1D-yctoZxe6uI5e2UWc7TsnH7MYYDb', '$2y$13$ttyh5/ElRhrmTR6evwE5L.B0DRBkcXxQiVFLMRr/../DLQj3RsqTC', 'QW-EUdGhehpXh1tW3bhqOfBci3Ow54a7_1461545971', 'marwa_mourad_201s1@yahoo.com', 'admin', 1, 1461461261, 1461545971, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(2, 'admin', '50zkWZd3v0tK4QYbmIRjcLlWGYkVNFuX', '$2y$13$H2dtYafXjYHJWw4eQ1KLcuM4LZL.PC9DdcMRVelFHdA6siBPDQBM6', '0qZu1n2_TsquTwiu75Bp5divYJZp48Xa_1467545184', 'admin@sadeco.com', 'admin', 1, 1461722373, 1467545183, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(7, '', 'qWQdS_Y9ggkSckdYoFprPi2XwXJiayil', '$2y$13$GzY8nz8d41qCBCeSyJTIR.3rXELWP9b4drghSTQvBxb8qT4w8qsE.', 'rxbAXUuIDjfVH3-d9-s4yqbeCG3yWtej_1475013299', 'marwa_mourad_2011@yahoo.com', 'user', 0, 1475013298, 1475014353, 'marwa', 'mourad', '01065072298', '01065072298', '', 0, 'Fumestudio', 'http://www.fumestudio.com', 'PHP developer', NULL, 'cairo', '17 taqaa st nasr city', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `advertisment`
--
ALTER TABLE `advertisment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `auth_assignment`
--
ALTER TABLE `auth_assignment`
  ADD PRIMARY KEY (`item_name`,`user_id`);

--
-- Indexes for table `auth_item`
--
ALTER TABLE `auth_item`
  ADD PRIMARY KEY (`name`),
  ADD KEY `rule_name` (`rule_name`),
  ADD KEY `idx-auth_item-type` (`type`);

--
-- Indexes for table `auth_item_child`
--
ALTER TABLE `auth_item_child`
  ADD PRIMARY KEY (`parent`,`child`),
  ADD KEY `child` (`child`);

--
-- Indexes for table `auth_rule`
--
ALTER TABLE `auth_rule`
  ADD PRIMARY KEY (`name`);

--
-- Indexes for table `aviation`
--
ALTER TABLE `aviation`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `calibration`
--
ALTER TABLE `calibration`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `download`
--
ALTER TABLE `download`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `down_catalouge`
--
ALTER TABLE `down_catalouge`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `home_slider`
--
ALTER TABLE `home_slider`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `library`
--
ALTER TABLE `library`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lib_catalouge`
--
ALTER TABLE `lib_catalouge`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migration`
--
ALTER TABLE `migration`
  ADD PRIMARY KEY (`version`);

--
-- Indexes for table `newsletter`
--
ALTER TABLE `newsletter`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news_event`
--
ALTER TABLE `news_event`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `partner`
--
ALTER TABLE `partner`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `related_section`
--
ALTER TABLE `related_section`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `setting`
--
ALTER TABLE `setting`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD KEY `role` (`role`),
  ADD KEY `status` (`status`),
  ADD KEY `created_at` (`created_at`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about`
--
ALTER TABLE `about`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `advertisment`
--
ALTER TABLE `advertisment`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `aviation`
--
ALTER TABLE `aviation`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `calibration`
--
ALTER TABLE `calibration`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `download`
--
ALTER TABLE `download`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `down_catalouge`
--
ALTER TABLE `down_catalouge`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `home_slider`
--
ALTER TABLE `home_slider`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `library`
--
ALTER TABLE `library`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `lib_catalouge`
--
ALTER TABLE `lib_catalouge`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `newsletter`
--
ALTER TABLE `newsletter`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `news_event`
--
ALTER TABLE `news_event`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `partner`
--
ALTER TABLE `partner`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `related_section`
--
ALTER TABLE `related_section`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `setting`
--
ALTER TABLE `setting`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `auth_assignment`
--
ALTER TABLE `auth_assignment`
  ADD CONSTRAINT `auth_assignment_ibfk_1` FOREIGN KEY (`item_name`) REFERENCES `auth_item` (`name`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `auth_item`
--
ALTER TABLE `auth_item`
  ADD CONSTRAINT `auth_item_ibfk_1` FOREIGN KEY (`rule_name`) REFERENCES `auth_rule` (`name`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Constraints for table `auth_item_child`
--
ALTER TABLE `auth_item_child`
  ADD CONSTRAINT `auth_item_child_ibfk_1` FOREIGN KEY (`parent`) REFERENCES `auth_item` (`name`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `auth_item_child_ibfk_2` FOREIGN KEY (`child`) REFERENCES `auth_item` (`name`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
