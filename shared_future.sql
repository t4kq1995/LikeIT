-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Хост: localhost
-- Время создания: Мар 27 2017 г., 17:02
-- Версия сервера: 5.5.50-0ubuntu0.14.04.1
-- Версия PHP: 5.6.30-1+deb.sury.org~trusty+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База данных: `shared_future`
--

-- --------------------------------------------------------

--
-- Структура таблицы `_tasks`
--

CREATE TABLE IF NOT EXISTS `_tasks` (
  `id_task` int(11) NOT NULL AUTO_INCREMENT,
  `name_task` varchar(32) COLLATE utf8_bin NOT NULL,
  `user_id` int(11) NOT NULL,
  `status` int(1) NOT NULL DEFAULT '0',
  `date_creation` date NOT NULL,
  PRIMARY KEY (`id_task`),
  UNIQUE KEY `id_task` (`id_task`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=33 ;

--
-- Дамп данных таблицы `_tasks`
--

INSERT INTO `_tasks` (`id_task`, `name_task`, `user_id`, `status`, `date_creation`) VALUES
(1, 'Create test website for hakaton', 4, 0, '2017-03-27'),
(2, 'Fix chat settings', 5, 1, '2017-03-26'),
(3, 'Some task', 5, 0, '2017-03-27');

-- --------------------------------------------------------

--
-- Структура таблицы `_users`
--

CREATE TABLE IF NOT EXISTS `_users` (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(32) COLLATE utf8_bin NOT NULL,
  `password` varchar(32) COLLATE utf8_bin NOT NULL,
  `email` varchar(32) COLLATE utf8_bin NOT NULL,
  `access` int(1) NOT NULL DEFAULT '1',
  `img` varchar(32) COLLATE utf8_bin NOT NULL DEFAULT 'user.jpg',
  PRIMARY KEY (`id_user`),
  UNIQUE KEY `id_user` (`id_user`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=6 ;

--
-- Дамп данных таблицы `_users`
--

INSERT INTO `_users` (`id_user`, `username`, `password`, `email`, `access`, `img`) VALUES
(1, 'admin', 'fb469d7ef430b0baf0cab6c436e70375', 'oyn1973@gmail.com', 3, 'admin.jpg'),
(3, 'team', 'fb469d7ef430b0baf0cab6c436e70375', 'vlad13zp@yandex.ru', 2, 'team.jpg'),
(4, 'user', 'fb469d7ef430b0baf0cab6c436e70375', 'example@example.com', 1, 'user.jpg'),
(5, 'user2', 'fb469d7ef430b0baf0cab6c436e70375', 'example2@example.com', 1, 'user_2.jpg');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
