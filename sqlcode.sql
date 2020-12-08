-- Adminer 4.7.7 MySQL dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

SET NAMES utf8mb4;

DROP TABLE IF EXISTS `AboutUs`;
CREATE TABLE `AboutUs` (
  `title` int NOT NULL,
  `paragraph` varchar(1500) NOT NULL,
  `photo_dir` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8_turkish_ci;


DROP TABLE IF EXISTS `AdminInfo`;
CREATE TABLE `AdminInfo` (
  `username` varchar(64) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `password` varchar(64) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;


DROP TABLE IF EXISTS `Article`;
CREATE TABLE `Article` (
  `article_no` int NOT NULL AUTO_INCREMENT,
  `title` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `image_dir` varchar(64) COLLATE utf8_turkish_ci NOT NULL,
  `paragraph` text COLLATE utf8_turkish_ci NOT NULL,
  PRIMARY KEY (`article_no`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;


DROP TABLE IF EXISTS `Forms`;
CREATE TABLE `Forms` (
  `id` int NOT NULL AUTO_INCREMENT,
  `email` varchar(64) CHARACTER SET utf8mb4 COLLATE utf8_turkish_ci NOT NULL,
  `message` varchar(1000) CHARACTER SET utf8mb4 COLLATE utf8_turkish_ci NOT NULL,
  `name` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8_turkish_ci NOT NULL,
  `surname` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8_turkish_ci NOT NULL,
  `datetime` timestamp NOT NULL,
  `archive` tinyint(1) NOT NULL DEFAULT '0',
  `has_read` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;


DROP TABLE IF EXISTS `Gallery`;
CREATE TABLE `Gallery` (
  `id` int NOT NULL AUTO_INCREMENT,
  `photo_dir` int NOT NULL,
  `is_saloon_photo` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;


DROP TABLE IF EXISTS `Venue`;
CREATE TABLE `Venue` (
  `id` int NOT NULL,
  `description` varchar(1000) CHARACTER SET utf8mb4 COLLATE utf8_turkish_ci NOT NULL,
  `static_photo_dir` varchar(64) CHARACTER SET utf8mb4 COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;


DROP TABLE IF EXISTS `VenuePhotoMatch`;
CREATE TABLE `VenuePhotoMatch` (
  `venue_id` int NOT NULL,
  `photo_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8_turkish_ci;


-- 2020-12-07 23:55:32