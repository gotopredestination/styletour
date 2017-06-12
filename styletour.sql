-- phpMyAdmin SQL Dump
-- version 4.0.10.6
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1:3307
-- Generation Time: Jun 12, 2017 at 10:04 PM
-- Server version: 5.5.41-log
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `styletour`
--

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

CREATE TABLE IF NOT EXISTS `articles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nameArticle` varchar(255) NOT NULL,
  `descriptionArticle` text NOT NULL,
  `ImageForArticles` tinytext NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=23 ;

--
-- Dumping data for table `articles`
--

INSERT INTO `articles` (`id`, `nameArticle`, `descriptionArticle`, `ImageForArticles`) VALUES
(9, 'Лермонтов', 'И снилась ей долина Дагестана;\r\nЗнакомый труп лежал в долине той;\r\nВ его груди дымясь чернела рана,\r\nИ кровь лилась хладеющей струёй', ''),
(10, 'Михаил Юрьевич Лермонтов', 'И снилась ей долина Дагестана;\r\nЗнакомый труп лежал в долине той;\r\nВ его груди дымясь чернела рана,\r\nИ кровь лилась хладеющей струёй', ''),
(11, 'Лермонтов', 'И снилась ей долина Дагестана;\r\nЗнакомый труп лежал в долине той;\r\nВ его груди дымясь чернела рана,\r\nИ кровь лилась хладеющей струёй', ''),
(12, 'Audi A5 Sportback', 'Аудюха', ''),
(13, 'Audi A5 Sportback repeat', 'аудюха', ''),
(14, 'Audi A5 Sportback repeat 2', 'fsdfsdfsdf', ''),
(15, 'Audi A5 Sportback repeat 3', 'vsdfgdfgdfgdfg', '/uploads/035.png'),
(16, 'Audi A5 Sportback repeat 4', 'hkgjdfkflgj', '/uploads/035.png'),
(18, 'retertert', 'ertertertert', '/uploads/035.png');

-- --------------------------------------------------------

--
-- Table structure for table `maintexts`
--

CREATE TABLE IF NOT EXISTS `maintexts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` tinytext NOT NULL,
  `body` text NOT NULL,
  `url` tinytext NOT NULL,
  `showhide` enum('show','hide') NOT NULL,
  `lang` enum('ru','en') NOT NULL,
  `putdate` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `maintexts`
--

INSERT INTO `maintexts` (`id`, `name`, `body`, `url`, `showhide`, `lang`, `putdate`) VALUES
(1, 'Добро пожаловать на сайт', '<p>Добро пожаловать на сайт</p>', 'index', 'show', 'ru', '2017-05-31'),
(2, 'ЭТО С БАЗЫ ДАННЫХ', '<p>privet</p>', 'support', 'show', 'en', '2017-06-02'),
(3, 'Доставка', 'С доставки тело', 'shipping', 'show', 'ru', '2017-06-02');

-- --------------------------------------------------------

--
-- Table structure for table `support`
--

CREATE TABLE IF NOT EXISTS `support` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `support`
--

INSERT INTO `support` (`id`, `name`) VALUES
(1, '<p>Priver</p>');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `login` tinytext NOT NULL,
  `password` int(11) NOT NULL,
  `email` tinytext NOT NULL,
  `datereg` date NOT NULL,
  `lastvisit` datetime NOT NULL,
  `blockunblock` enum('unblock','block') NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=20 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `login`, `password`, `email`, `datereg`, `lastvisit`, `blockunblock`) VALUES
(14, 'lalalalalalala', 777, 'mail@mail.ru', '2017-06-07', '2017-06-07 20:37:31', 'unblock'),
(15, '', 0, '', '2017-06-07', '2017-06-07 20:38:33', 'unblock'),
(16, 'lalalalalalala4', 123, 'mail@mail.ru', '2017-06-07', '2017-06-07 20:38:53', 'unblock'),
(17, '', 0, '', '2017-06-07', '2017-06-07 20:40:15', 'unblock'),
(18, '', 0, '', '2017-06-07', '2017-06-07 20:40:23', 'unblock'),
(19, 'asdfation', 123, 'maail@mail.ruasdf', '2017-06-07', '2017-06-07 20:51:45', 'unblock');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
