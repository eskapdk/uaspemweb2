-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               8.0.30 - MySQL Community Server - GPL
-- Server OS:                    Win64
-- HeidiSQL Version:             12.1.0.6537
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Dumping database structure for uas_pemweb2
CREATE DATABASE IF NOT EXISTS `uas_pemweb2` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `uas_pemweb2`;

-- Dumping structure for table uas_pemweb2.article
CREATE TABLE IF NOT EXISTS `article` (
  `id` varchar(32) NOT NULL,
  `title` varchar(128) DEFAULT NULL,
  `slug` varchar(128) NOT NULL,
  `content` text,
  `draft` enum('true','false') NOT NULL DEFAULT 'true',
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_by` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table uas_pemweb2.article: ~7 rows (approximately)
INSERT INTO `article` (`id`, `title`, `slug`, `content`, `draft`, `created_at`, `created_by`) VALUES
	('1', 'Materi 1', 'materi', 'ini materi pertama yang sudah di update yaaa', 'false', '2024-07-29 21:44:33', 'admin'),
	('66a7b09aba49b7.16576538', 'materi 2', 'materi-2-66a7b09aba49b7.16576538', 'ini adalah materi yang ke 2', 'false', '2024-07-29 22:09:14', 'user'),
	('66a7b3b84216f2.99627872', 'materi 3', 'materi-3-66a7b3b84216f2.99627872', 'ini adalah materi ke 3 ya ya ya', 'false', '2024-07-29 22:22:32', 'user'),
	('66a90eeaa7c103.02879177', 'materi 4', 'materi-4-66a90eeaa7c103.02879177', 'materi 4 tentang web', 'true', '2024-07-30 23:03:54', 'user2'),
	('66a9f40627b7e5.92770255', 'mantap', 'mantap-66a9f40627b7e5.92770255', '<p>sudah bisa input materi</p>', 'true', '2024-07-31 15:21:26', 'user2'),
	('66ad1e865c77f9.42349552', 'materi eska', 'materi-eska-66ad1e865c77f9.42349552', '<p>ini adaah materi dari eska</p><p><br></p><p><span style="color: rgb(0, 0, 0);">Lorem Ipsum&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</span></p>', 'false', '2024-08-03 00:59:34', 'eska'),
	('66ad2044150439.90466144', 'Materi Admin', 'materi-admin-66ad2044150439.90466144', '<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn\'t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.</p>', 'true', '2024-08-03 01:07:00', 'admin');

-- Dumping structure for table uas_pemweb2.komentar
CREATE TABLE IF NOT EXISTS `komentar` (
  `id_komen` varchar(32) NOT NULL,
  `user` varchar(50) DEFAULT NULL,
  `isi` text,
  `article_id` varchar(50) DEFAULT NULL,
  `create_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_komen`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table uas_pemweb2.komentar: ~13 rows (approximately)
INSERT INTO `komentar` (`id_komen`, `user`, `isi`, `article_id`, `create_at`) VALUES
	('66acff4d059284.59139359', 'User', 'komen materi 3', '66a7b3b84216f2.99627872', '2024-08-02 15:46:21'),
	('66acff5829dc75.74772671', 'User', 'komen materi 3-1', '66a7b3b84216f2.99627872', '2024-08-02 15:46:32'),
	('66ad019b7041d5.98811642', 'User', 'terima kasih', '66a7b09aba49b7.16576538', '2024-08-02 15:56:11'),
	('66ad01d221d991.19902457', 'User', 'ini komen 1', '66a7b09aba49b7.16576538', '2024-08-02 15:57:06'),
	('66ad01da3381b1.28944928', 'User', 'komen materi 2', '66a7b09aba49b7.16576538', '2024-08-02 15:57:14'),
	('66ad05e9a5bae9.56317107', 'User2', 'Komen dahulu di sini', '1', '2024-08-02 16:14:33'),
	('66ad05f61861a1.06904293', 'User2', 'sudah bisa komen', '66a7b09aba49b7.16576538', '2024-08-02 16:14:46'),
	('66ad0bf2b66588.93560848', 'Administrator', 'ini komen dari admin', '1', '2024-08-02 16:40:18'),
	('66ad0c0cb55b10.98064081', 'Administrator', 'approved', '66ad05a068a880.48730848', '2024-08-02 16:40:44'),
	('66ad0fa2965285.14891121', 'User', 'oke siap', '66ad05a068a880.48730848', '2024-08-02 16:56:02'),
	('66ad0fca056448.10808274', 'User2', 'mantap', '66ad05a068a880.48730848', '2024-08-02 16:56:42'),
	('66ad1369e9d5d0.78591996', 'eska', 'aku bisa komen', '1', '2024-08-02 17:12:09'),
	('66ad20e6bd7b01.18493045', 'andi', 'ini komen dari andi', '66ad05a068a880.48730848', '2024-08-02 18:09:42');

-- Dumping structure for table uas_pemweb2.role
CREATE TABLE IF NOT EXISTS `role` (
  `id` int DEFAULT NULL,
  `role_name` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table uas_pemweb2.role: ~2 rows (approximately)
INSERT INTO `role` (`id`, `role_name`) VALUES
	(1, 'admin'),
	(2, 'user');

-- Dumping structure for table uas_pemweb2.user
CREATE TABLE IF NOT EXISTS `user` (
  `id` varchar(32) NOT NULL,
  `name` varchar(32) NOT NULL,
  `email` varchar(64) NOT NULL,
  `username` varchar(64) NOT NULL,
  `password` varchar(255) NOT NULL,
  `avatar` varchar(32) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `last_login` timestamp NULL DEFAULT NULL,
  `role` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- Dumping data for table uas_pemweb2.user: ~5 rows (approximately)
INSERT INTO `user` (`id`, `name`, `email`, `username`, `password`, `avatar`, `created_at`, `last_login`, `role`) VALUES
	('6118b21312wqe2.34223423', 'User', 'user@mail.com', 'user', '$2a$12$S9vtXHZKU4HMnHP.8ecibuqQ0PMxyy9s2MLipH/FTX4DOfvNZuRQ6', NULL, '2021-08-14 23:22:33', '2024-08-02 11:03:58', '2'),
	('6118b2a943acc2.234234234234', 'User2', 'user2@mail.com', 'user2', '$2a$12$ZRnnF3BI5q/QmjnE7mT4HenZ/c9jL4S/12dkTyMLfNvx057aSJvta', NULL, '2021-08-14 23:22:33', '2024-08-02 10:51:06', '2'),
	('6118b2a943acc2.78631959', 'Administrator', 'admin@mail.com', 'admin', '$2y$10$hRi1qju2KOeEPcBZ0wYfhu/PN5e9Wl.ddWeDTds8Uokad764X9D1a', NULL, '2021-08-14 23:22:33', '2024-08-02 23:18:53', '1'),
	('66ad134bee1fe1.72715105', 'eska', 'eska@gmail.com', 'eska', '$2y$10$kvLqZmEd.WdLKNp0eEF6W.VrP9SAwBdwZZnZQ3jzovvZeOECQEI1i', NULL, '2024-08-02 17:11:40', '2024-08-02 10:58:28', '2'),
	('66ad20ac039ea7.99603710', 'andi', 'andi@gmail.com', 'andi', '$2y$10$ThpUh38vaMK2rYUW6/i1TOLsXd6fVZOpc9lR9uEqgPTAX.vSICQcG', NULL, '2024-08-02 18:08:44', '2024-08-02 11:09:17', '2');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
