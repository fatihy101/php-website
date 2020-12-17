-- Adminer 4.7.7 MySQL dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

DROP TABLE IF EXISTS `AboutUs`;
CREATE TABLE `AboutUs` (
  `id` tinyint(1) NOT NULL,
  `paragraph` text CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `photo` longtext CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

TRUNCATE `AboutUs`;
INSERT INTO `AboutUs` (`id`, `paragraph`, `photo`) VALUES
(1,	'<p><span style=\"text-align: justify; font-size: 14px;\"><font color=\"#000000\" style=\"\"><span style=\"background-color: rgb(255, 255, 255);\">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. </span><span style=\"background-color: rgb(255, 0, 0);\">Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", comes from a line in secti</span></font></span><br></p>',	'');

DROP TABLE IF EXISTS `AdminInfo`;
CREATE TABLE `AdminInfo` (
  `username` varchar(64) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `password` varchar(64) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

TRUNCATE `AdminInfo`;
INSERT INTO `AdminInfo` (`username`, `password`) VALUES
('admin',	'b4b8daf4b8ea9d39568719e1e320076f');

DROP TABLE IF EXISTS `Article`;
CREATE TABLE `Article` (
  `article_no` int NOT NULL AUTO_INCREMENT,
  `title` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `photo` longtext CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `paragraph` text COLLATE utf8_turkish_ci NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`article_no`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;


DROP TABLE IF EXISTS `Forms`;
CREATE TABLE `Forms` (
  `id` int NOT NULL AUTO_INCREMENT,
  `email` varchar(64) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `message` varchar(1000) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `name` varchar(30) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `surname` varchar(30) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `datetime` timestamp NOT NULL,
  `archive` tinyint(1) NOT NULL DEFAULT '0',
  `has_read` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;


DROP TABLE IF EXISTS `Gallery`;
CREATE TABLE `Gallery` (
  `id` int NOT NULL AUTO_INCREMENT,
  `photo` longtext CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `order_no` int DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;


DROP TABLE IF EXISTS `InstagramPosts`;
CREATE TABLE `InstagramPosts` (
  `id` tinyint(1) NOT NULL,
  `url` varchar(400) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

TRUNCATE `InstagramPosts`;
INSERT INTO `InstagramPosts` (`id`, `url`) VALUES
(1,	'https://www.instagram.com/p/B-Zp33HjW6n/embed'),
(2,	'https://www.instagram.com/p/B5RTn6WjlA8/embed'),
(3,	'https://www.instagram.com/p/B-Zp33HjW6n/embed '),
(4,	'https://www.instagram.com/p/B5ppUyUB3m_/embed'),
(5,	'https://www.instagram.com/p/B-Zp33HjW6n/embed'),
(6,	'https://www.instagram.com/p/B-Zp33HjW6n/embed');

DROP TABLE IF EXISTS `SocialMedia`;
CREATE TABLE `SocialMedia` (
  `platform` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `url` varchar(400) COLLATE utf8_turkish_ci NOT NULL,
  `visibility` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

TRUNCATE `SocialMedia`;
INSERT INTO `SocialMedia` (`platform`, `url`, `visibility`) VALUES
('facebook',	'https://www.facebook.com',	1),
('instagram',	'https://www.instagram.com',	1),
('pinterest',	'',	1),
('twitter',	'',	0),
('google_plus',	'https://www.google.com',	0);

DROP TABLE IF EXISTS `StaticPhotos`;
CREATE TABLE `StaticPhotos` (
  `id` int NOT NULL,
  `photo_name` varchar(64) COLLATE utf8_turkish_ci NOT NULL,
  `attr_name` varchar(64) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `photo` longtext CHARACTER SET utf8 COLLATE utf8_turkish_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

TRUNCATE `StaticPhotos`;
INSERT INTO `StaticPhotos` (`id`, `photo_name`, `attr_name`, `photo`) VALUES
(1,	'Logo',	'logo',	''),
(2,	'Slayt 1',	'slayt_1',	''),
(3,	'Slayt 2',	'slayt_2',	''),
(4,	'Slayt 3',	'slayt_3',	''),
(5,	'Slayt 4',	'slayt_4',	'');

DROP TABLE IF EXISTS `Venue`;
CREATE TABLE `Venue` (
  `id` int NOT NULL AUTO_INCREMENT,
  `venue_name` varchar(40) CHARACTER SET utf32 COLLATE utf32_turkish_ci NOT NULL,
  `description` text CHARACTER SET utf32 COLLATE utf32_turkish_ci NOT NULL,
  `photo` longtext CHARACTER SET utf32 COLLATE utf32_turkish_ci NOT NULL,
  `order_no` int NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;


DROP TABLE IF EXISTS `ContactUs`;
CREATE TABLE `ContactUs` (
  `attr_name` varchar(150) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `cms_name` varchar(150) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `text` varchar(500) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `visibility` tinyint NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

TRUNCATE `ContactUs`;
INSERT INTO `ContactUs` (`attr_name`, `cms_name`, `text`, `visibility`) VALUES
('page_title',	'Sayfa Başlığı',	'İletişim Adreslerimiz',	1),
('page_text',	'Formun üstündeki Yazı',	'Merak ettiğiniz bir soru için bize mesaj bırakabilirsiniz.',	1),
('contact_info_title',	'İletişim Bilgilerinin Başlığı',	'HAYALLERİNİZDEKİ DÜĞÜNÜ YAŞAMANIZ İÇİN BURADAYIZ',	1),
('email_address_title',	'E-posta Alanı Başlığı',	'E-POSTA ADRESİMİZ',	1),
('email_address',	'E-posta Adresi',	'test@mail.com',	1),
('address_title',	'Adres Başlığı',	' ADRESİMİZ',	1),
('address',	'Adres',	'Silahtarağa, Üniversite 1.Sokak No:13, 59860 Çorlu/Tekirdağ',	1),
('phone_no_title',	'Telefon Numarası Başlığı',	'TELEFON NUMARAMIZ',	1),
('phone_no',	'Telefon Numarası',	'+90 555 999 4567',	1),
('location_title',	'Konum Başlığı',	'KONUMUMUZ',	1),
('location_html',	'Konum Bağlantısı',	'<iframe src=\"https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d6024.3657982346895!2d27.5138455!3d40.9774757!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14b48a9c04703891%3A0x7271e8ad4a41e84b!2sTekirda%C4%9F%20Sahil!5e0!3m2!1str!2str!4v1608200330722!5m2!1str!2str\" width=\"600\" height=\"450\" frameborder=\"0\" style=\"border:0;\" allowfullscreen=\"\" aria-hidden=\"false\" tabindex=\"0\"></iframe>',	1);

DROP TABLE IF EXISTS `HeaderElements`;
CREATE TABLE `HeaderElements` (
  `id` int NOT NULL,
  `attr_name` varchar(150) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `cms_name` varchar(150) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `text` varchar(150) COLLATE utf8_turkish_ci NOT NULL,
  `visibility` tinyint NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

TRUNCATE `HeaderElements`;
INSERT INTO `HeaderElements` (`id`, `attr_name`, `cms_name`, `text`, `visibility`) VALUES
(1,	'catchword',	'Slogan',	'1 NUMARALI EVLİLİK ADRESİ',	1),
(2,	'navbar-item',	'Ana Sayfa',	'ANA SAYFA',	1),
(3,	'navbar-item',	'Galeri',	'GALERİ',	1),
(4,	'navbar-item',	'Salonlar',	'SALONLARIMIZ',	1),
(5,	'navbar-item',	'Hakkımızda',	'HAKKIMIZDA',	1),
(6,	'navbar-item',	'İletişim',	'İLETİŞİM',	1),
(7,	'navbar-item',	'Tüm gönderiler',	'Tüm Gönderiler',	1);



-- 2020-12-14 22:51:38