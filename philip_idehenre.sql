-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 08, 2022 at 12:41 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `philip_idehenre`
--

-- --------------------------------------------------------

--
-- Table structure for table `chats`
--

CREATE TABLE `chats` (
  `chat_id` int(11) NOT NULL,
  `sender` int(11) NOT NULL,
  `messages` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `chat_time` datetime NOT NULL DEFAULT current_timestamp(),
  `recipient` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `media_id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` varchar(1024) COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`media_id`, `title`, `photo`, `post_date`) VALUES
(10, 'Students', 'eagleflight_chaplain_helping_schools.jpg', '2022-10-26 08:59:58'),
(11, 'Children', 'happy_kids.jpg', '2022-10-26 09:00:11'),
(12, 'School Children Happy', 'school_children.jpg', '2022-10-26 09:01:46'),
(13, 'Helpin Women', 'women4.jpeg', '2022-10-26 09:02:14'),
(14, 'EMpowering Women', 'women2.jpg', '2022-10-26 14:53:20'),
(15, 'WOman And Child', 'eagleflight_chaplain_service.jpg', '2022-10-26 14:53:36'),
(16, 'Children And Water', 'p3.jpg', '2022-10-26 14:54:12'),
(17, 'Skill Training', 'skill_acquisition2.webp', '2022-10-26 14:54:39');

-- --------------------------------------------------------

--
-- Table structure for table `news_events`
--

CREATE TABLE `news_events` (
  `article_id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `details` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` varchar(1024) COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `news_events`
--

INSERT INTO `news_events` (`article_id`, `title`, `details`, `photo`, `post_date`) VALUES
(10, 'Flood Victims In Ikpoba', 'Lorem Ipsum Dolor Sit Amet Consectetur, Adipisicing Elit. Temporibus Cupiditate Ut Id Eveniet Illo Repudiandae Porro Facere, Maxime Deserunt Iste Dignissimos Impedit, Vel, Necessitatibus Magni Voluptate Commodi Autem Quo? Aperiam Adipisci Repellendus Maxime Distinctio Odio Explicabo Nostrum Ratione, Suscipit Aut? Jkshgklj Vfj Kljb;kljk;bkc;bk;lbk;lgk;lkb Kb;l Knfggbjk;bjkd;lbkd;fr Vfkjklbkbj;kldjbkjd;klbj;klc Jjn;klgjnklgjnj;gklbjd;gklbjd;gklbjd;gkldtlbjdjb;kd Jbdjh', 'woman_crying.jpg', '2022-10-26 09:10:38'),
(11, 'Feeding Programme', 'Lorem Ipsum Dolor Sit Amet Consectetur, Adipisicing Elit. Temporibus Cupiditate Ut Id Eveniet Illo Repudiandae Porro Facere, Maxime Deserunt Iste Dignissimos Impedit, Vel, Necessitatibus Magni Voluptate Commodi Autem Quo? Aperiam Adipisci Repellendus Maxime Distinctio Odio Explicabo Nostrum Ratione, Suscipit Aut?', 'childhood_nutrition.png', '2022-10-26 09:03:07');

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `project_id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `details` varchar(1024) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` varchar(1024) COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`project_id`, `title`, `details`, `photo`, `post_date`) VALUES
(8, 'School Feeding Project', 'Lorem Ipsum Dolor Sit Amet Consectetur, Adipisicing Elit. Temporibus Cupiditate Ut Id Eveniet Illo Repudiandae Porro Facere, Maxime Deserunt Iste Dignissimos Impedit, Vel, Necessitatibus Magni Voluptate Commodi Autem Quo? Aperiam Adipisci Repellendus Maxime Distinctio Odio Explicabo Nostrum Ratione, Suscipit Aut?', 'childhood_nutrition.png', '2022-10-26 08:53:59'),
(9, 'Helping Flood Victims', 'Lorem Ipsum Dolor Sit Amet Consectetur, Adipisicing Elit. Temporibus Cupiditate Ut Id Eveniet Illo Repudiandae Porro Facere, Maxime Deserunt Iste Dignissimos Impedit, Vel, Necessitatibus Magni Voluptate Commodi Autem Quo? Aperiam Adipisci Repellendus Maxime Distinctio Odio Explicabo Nostrum Ratione, Suscipit Aut?', 'help_children.jpg', '2022-10-26 08:55:00'),
(10, 'Empowering Women', 'Lorem Ipsum Dolor Sit Amet Consectetur, Adipisicing Elit. Temporibus Cupiditate Ut Id Eveniet Illo Repudiandae Porro Facere, Maxime Deserunt Iste Dignissimos Impedit, Vel, Necessitatibus Magni Voluptate Commodi Autem Quo? Aperiam Adipisci Repellendus Maxime Distinctio Odio Explicabo Nostrum Ratione, Suscipit Aut?', 'women2.jpg', '2022-10-26 08:56:33'),
(11, 'Skill Acquisition In Owan', 'Lorem Ipsum Dolor Sit Amet Consectetur, Adipisicing Elit. Temporibus Cupiditate Ut Id Eveniet Illo Repudiandae Porro Facere, Maxime Deserunt Iste Dignissimos Impedit, Vel, Necessitatibus Magni Voluptate Commodi Autem Quo? Aperiam Adipisci Repellendus Maxime Distinctio Odio Explicabo Nostrum Ratione, Suscipit Aut?', 'skill_acquisition2.webp', '2022-10-26 08:57:08');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `user_password`) VALUES
(1, 'Admin', '12345');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `chats`
--
ALTER TABLE `chats`
  ADD PRIMARY KEY (`chat_id`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`media_id`);

--
-- Indexes for table `news_events`
--
ALTER TABLE `news_events`
  ADD PRIMARY KEY (`article_id`);

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`project_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `chats`
--
ALTER TABLE `chats`
  MODIFY `chat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `media_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `news_events`
--
ALTER TABLE `news_events`
  MODIFY `article_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `project_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
