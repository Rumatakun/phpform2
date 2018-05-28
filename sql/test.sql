-- --------------------------------------------------------
-- Хост:                         127.0.0.1
-- Версия сервера:               8.0.11 - MySQL Community Server - GPL
-- Операционная система:         Win64
-- HeidiSQL Версия:              9.5.0.5196
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Дамп структуры базы данных taskdb
CREATE DATABASE IF NOT EXISTS `taskdb` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */;
USE `taskdb`;

-- Дамп структуры для таблица taskdb.members
CREATE TABLE IF NOT EXISTS `members` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(60) NOT NULL,
  `lastname` varchar(60) NOT NULL,
  `birthdate` date NOT NULL,
  `country` enum('usa','uk','') NOT NULL,
  `phone` text NOT NULL,
  `email` varchar(255) NOT NULL,
  `company` varchar(60) DEFAULT NULL,
  `position` varchar(60) DEFAULT NULL,
  `about me` text,
  `photo` varchar(60) DEFAULT NULL,
  `report_subject` varchar(60) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `photo` (`photo`)
) ENGINE=InnoDB AUTO_INCREMENT=36 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Дамп данных таблицы taskdb.members: ~2 rows (приблизительно)
/*!40000 ALTER TABLE `members` DISABLE KEYS */;
INSERT INTO `members` (`id`, `firstname`, `lastname`, `birthdate`, `country`, `phone`, `email`, `company`, `position`, `about me`, `photo`, `report_subject`) VALUES
	(1, 'фыав', 'фыпа', '2018-05-16', 'uk', 'ыфмаф', 'ыфа', 'фыа', 'ыа', NULL, NULL, 'sadfsadf'),
	(2, 'аыпфывап', 'фывп', '2018-05-18', '', '+24512', 'па', NULL, NULL, NULL, NULL, 'gsgsgsg');
/*!40000 ALTER TABLE `members` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
