-- Adminer 4.7.7 MySQL dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

CREATE DATABASE `bookstore` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `bookstore`;

SET NAMES utf8mb4;

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `users` (`id`, `name`, `contact`, `email`, `password`) VALUES
(16,	'jhon',	'1111111111',	'surendradkdev@gmail.com',	'$2y$10$Uoll7Hp2EwCg5a9cWrYK8.3CdU9ZfEmPuAq44J2WOGR3sTZKIzn0y'),
(19,	'sanket',	'8754875487',	'testdat@gmail.com',	'$2y$10$HnZFm5bbX/.w3Q81LYl/FeMDVPrDh1jgykf0a6Mro5I/X94LXGypW');

-- 2021-11-07 12:50:34
