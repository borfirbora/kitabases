-- Adminer 4.8.1 MySQL 8.0.31 dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

SET NAMES utf8mb4;

DROP DATABASE IF EXISTS `kitabases`;
CREATE DATABASE `kitabases` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `kitabases`;

DROP TABLE IF EXISTS `bookcategories`;
CREATE TABLE `bookcategories` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `category` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;


DROP TABLE IF EXISTS `books`;
CREATE TABLE `books` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(150) NOT NULL,
  `description` longtext NOT NULL,
  `author` varchar(300) NOT NULL,
  `bookCategoryId` int unsigned NOT NULL,
  `classId` int unsigned NOT NULL,
  `memberId` int unsigned NOT NULL,
  `format` enum('normal','daisy') NOT NULL,
  `path` text NOT NULL,
  PRIMARY KEY (`id`),
  KEY `classId` (`classId`),
  KEY `bookCategoryId` (`bookCategoryId`),
  KEY `memberId` (`memberId`),
  CONSTRAINT `books_ibfk_1` FOREIGN KEY (`classId`) REFERENCES `classes` (`id`),
  CONSTRAINT `books_ibfk_2` FOREIGN KEY (`bookCategoryId`) REFERENCES `bookcategories` (`id`),
  CONSTRAINT `books_ibfk_3` FOREIGN KEY (`memberId`) REFERENCES `members` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;


DROP TABLE IF EXISTS `classes`;
CREATE TABLE `classes` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `classNumber` int NOT NULL,
  `className` varchar(30) NOT NULL,
  `classDescription` varchar(250) NOT NULL,
  `classLevel` enum('İlköğretim','Ortaöğretim','Lise') NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;


DROP TABLE IF EXISTS `details`;
CREATE TABLE `details` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `label` varchar(100) NOT NULL,
  `description` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;


DROP TABLE IF EXISTS `members`;
CREATE TABLE `members` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(30) NOT NULL,
  `email` varchar(130) NOT NULL,
  `firstName` varchar(30) NOT NULL,
  `lastName` varchar(30) NOT NULL,
  `blindDocument` varchar(120) NOT NULL,
  `memberType` enum('blind','reader','admin','superUser') NOT NULL,
  `status` enum('passive','active','moderated') NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;


DROP VIEW IF EXISTS `testbookview`;
CREATE TABLE `testbookview` (`firstName` varchar(30), `lastName` varchar(30), `title` varchar(150), `description` longtext, `category` varchar(100));


DROP TABLE IF EXISTS `testbookview`;
CREATE ALGORITHM=UNDEFINED SQL SECURITY DEFINER VIEW `testbookview` AS select `m`.`firstName` AS `firstName`,`m`.`lastName` AS `lastName`,`b`.`title` AS `title`,`b`.`description` AS `description`,`c`.`category` AS `category` from ((`members` `m` join `books` `b`) join `bookcategories` `c`) where ((`b`.`memberId` = `m`.`id`) and (`b`.`bookCategoryId` = `c`.`id`));

-- 2023-05-12 17:32:20
