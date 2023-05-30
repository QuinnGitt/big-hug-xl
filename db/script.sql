-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: May 30, 2023 at 06:37 AM
-- Server version: 8.0.27
-- PHP Version: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bighug`
CREATE DATABASE IF NOT EXISTS `bighug` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `bighug`;
--

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

DROP TABLE IF EXISTS `pages`;
CREATE TABLE IF NOT EXISTS `pages` (
  `ID` int NOT NULL,
  `TEXT` longtext CHARACTER SET swe7 COLLATE swe7_swedish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=swe7;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`ID`, `TEXT`) VALUES
(1, "Wat is de Big Hug?\r\nDe Big Hug is een infrarood warmtedeken met een zit- en rugverwarming en oplaadbare batterij.\r\n\r\nKies een van de 3 warmtestanden en geniet urenlang van behaaglijke warmte."),
(2, "Bighug.com is an innovative online store that specializes in selling high-quality heat cushions designed to provide comfort and relaxation to our valued customers. At Bighug.com, we strongly believe that heat therapy is one of the best ways to calm the body and promote overall wellness. As such, we offer a wide range of heat cushions to suit the unique needs and preferences of our diverse clientele. Our heat cushions are carefully crafted using only the finest materials, ensuring optimal durability and functionality. With ease of use and maximum comfort in mind, each cushion is designed to deliver soothing warmth and relaxation to various parts of the body, such as the neck, shoulders, back, and legs. At Bighug.com, our mission is to provide our customers with top-of-the-line products that help them relax and reduce their daily stress levels. We are committed to delivering the highest quality heat cushions that are not only effective but also affordable. With our user-friendly website and excellent customer service, shopping at Bighug.com is always a breeze. Whether you're looking to unwind after a long day at work, alleviate muscle pain.");
COMMIT;


