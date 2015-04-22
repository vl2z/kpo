-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1
-- Время создания: Апр 22 2015 г., 02:57
-- Версия сервера: 5.5.25
-- Версия PHP: 5.3.13

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База данных: `photoprint`
--

-- --------------------------------------------------------

--
-- Структура таблицы `clients`
--

CREATE TABLE IF NOT EXISTS `clients` (
  `clientId` int(11) NOT NULL AUTO_INCREMENT,
  `lastName` text NOT NULL,
  `firstName` text NOT NULL,
  `phone` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `amountOfAllorders` int(11) NOT NULL,
  PRIMARY KEY (`clientId`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Дамп данных таблицы `clients`
--

INSERT INTO `clients` (`clientId`, `lastName`, `firstName`, `phone`, `email`, `amountOfAllorders`) VALUES
(1, 'qwerty', 'ivan', '2443525767', 'sfgsdfs@sdff.ru', 2),
(2, 'poss', 'khan', '344643757', 'asgdfgsdgd@g.ru', 1);

-- --------------------------------------------------------

--
-- Структура таблицы `orders`
--

CREATE TABLE IF NOT EXISTS `orders` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `dateOfTheOrder` date NOT NULL,
  `status` text NOT NULL,
  `dateOfTheExecution` date DEFAULT NULL,
  `width` int(11) NOT NULL,
  `height` int(11) NOT NULL,
  `paperType` text NOT NULL,
  `sale` double NOT NULL,
  `price` double NOT NULL,
  `clientId` int(11) NOT NULL,
  `path` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Дамп данных таблицы `orders`
--

INSERT INTO `orders` (`id`, `dateOfTheOrder`, `status`, `dateOfTheExecution`, `width`, `height`, `paperType`, `sale`, `price`, `clientId`, `path`) VALUES
(1, '2015-04-01', 'done', '2015-04-02', 4, 9, 'glance', 0, 400, 1, 1),
(2, '2015-04-07', 'done', '2015-04-08', 4, 9, 'glance', 0, 800, 1, 2),
(3, '2015-04-22', 'await', '0000-00-00', 4, 9, 'glance', 0, 130, 2, 3);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
