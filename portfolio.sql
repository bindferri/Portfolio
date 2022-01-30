-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 29, 2022 at 03:48 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `portfolio`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `contact_id` int(11) NOT NULL,
  `contact_text` varchar(255) NOT NULL,
  `contact_name` varchar(255) NOT NULL,
  `contact_address` varchar(255) NOT NULL,
  `contact_email` varchar(255) NOT NULL,
  `contact_createdby` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`contact_id`, `contact_text`, `contact_name`, `contact_address`, `contact_email`, `contact_createdby`) VALUES
(5, 'asdsadasdasdasdasdasd', 'Bind Ferri', 'Prishtine,Kosove', 'bindferri@gmail.com', 0);

-- --------------------------------------------------------

--
-- Table structure for table `footer`
--

CREATE TABLE `footer` (
  `footer_id` int(3) NOT NULL,
  `footer_text` varchar(255) NOT NULL,
  `footer_fb` text NOT NULL,
  `footer_instagram` text NOT NULL,
  `footer_github` text NOT NULL,
  `footer_createdby` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `footer`
--

INSERT INTO `footer` (`footer_id`, `footer_text`, `footer_fb`, `footer_instagram`, `footer_github`, `footer_createdby`) VALUES
(1, '2022 © BIND FERRI - ALL RIGHTS RESERVED', 'https://www.facebook.com/brindiii/', 'https://www.instagram.com/bindferri/', 'https://github.com/bindferri', 0),
(3, '2022 © BIND FERRI - ALL RIGHTS RESERVED', 'https://www.facebook.com/brindiii/', 'https://www.instagram.com/bindferri/', 'https://github.com/bindferri', 0);

-- --------------------------------------------------------

--
-- Table structure for table `hero`
--

CREATE TABLE `hero` (
  `hero_id` int(3) NOT NULL,
  `hero_text` varchar(255) NOT NULL,
  `hero_button_text` varchar(255) NOT NULL,
  `hero_cv` text NOT NULL,
  `hero_photo` text NOT NULL,
  `hero_createdby` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hero`
--

INSERT INTO `hero` (`hero_id`, `hero_text`, `hero_button_text`, `hero_cv`, `hero_photo`, `hero_createdby`) VALUES
(45, 'Bind Ferri Full Stack Developer', 'Check my work', 'CV-BIND_FERRI.pdf', 'bindferritransparent.png', 0);

-- --------------------------------------------------------

--
-- Table structure for table `project`
--

CREATE TABLE `project` (
  `project_id` int(3) NOT NULL,
  `project_name` varchar(255) NOT NULL,
  `project_excerpt` varchar(255) NOT NULL,
  `project_content` text NOT NULL,
  `project_main_photo` text NOT NULL,
  `project_second_photo` text NOT NULL,
  `project_third_photo` text NOT NULL,
  `project_createdby` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `project`
--

INSERT INTO `project` (`project_id`, `project_name`, `project_excerpt`, `project_content`, `project_main_photo`, `project_second_photo`, `project_third_photo`, `project_createdby`) VALUES
(4, 'Omni Food', 'Omni Food is the best food website', 'Omni Food is the best food websiteOmni Food is the best food websiteOmni Food is the best food websiteOmni Food is the best food websiteOmni Food is the best food websiteOmni Food is the best food website', 'omnifood-sc.png', 'omnifood-sc2.png', 'omnifood-sc3.png', 0),
(5, 'Omni Food', 'sadasd', 'aaaa', 'cms.png', 'cms1.png', 'cms2.png', 0);

-- --------------------------------------------------------

--
-- Table structure for table `skills`
--

CREATE TABLE `skills` (
  `skills_id` int(3) NOT NULL,
  `skills_image` text NOT NULL,
  `skills_name` varchar(255) NOT NULL,
  `skills_createdby` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `skills`
--

INSERT INTO `skills` (`skills_id`, `skills_image`, `skills_name`, `skills_createdby`) VALUES
(1, 'img/html.png', 'html5', 0),
(2, 'img/css.png', 'css3', 0),
(3, 'img/javascript.png', 'javascript', 0),
(5, 'php.png', 'php', 0);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(3) NOT NULL,
  `user_username` varchar(255) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `user_surname` varchar(255) NOT NULL,
  `user_password` varchar(255) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `user_created` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `user_username`, `user_name`, `user_surname`, `user_password`, `user_email`, `user_created`) VALUES
(2, 'bindferri', 'bind', 'ferri', '12345678', 'bindferri@gmail.com', '2022-01-29');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`contact_id`);

--
-- Indexes for table `footer`
--
ALTER TABLE `footer`
  ADD PRIMARY KEY (`footer_id`);

--
-- Indexes for table `hero`
--
ALTER TABLE `hero`
  ADD PRIMARY KEY (`hero_id`);

--
-- Indexes for table `project`
--
ALTER TABLE `project`
  ADD PRIMARY KEY (`project_id`);

--
-- Indexes for table `skills`
--
ALTER TABLE `skills`
  ADD PRIMARY KEY (`skills_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `contact_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `footer`
--
ALTER TABLE `footer`
  MODIFY `footer_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `hero`
--
ALTER TABLE `hero`
  MODIFY `hero_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `project`
--
ALTER TABLE `project`
  MODIFY `project_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `skills`
--
ALTER TABLE `skills`
  MODIFY `skills_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
