-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Авг 31 2019 г., 20:22
-- Версия сервера: 10.4.6-MariaDB
-- Версия PHP: 7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `books`
--

-- --------------------------------------------------------

--
-- Структура таблицы `books_list`
--

CREATE TABLE `books_list` (
  `id` int(11) NOT NULL,
  `name` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `postDate` datetime NOT NULL,
  `numberOfPages` int(255) NOT NULL,
  `price` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `books_list`
--

INSERT INTO `books_list` (`id`, `name`, `description`, `postDate`, `numberOfPages`, `price`) VALUES
(23, 'ÐšÑ€Ð°ÑÐ½Ð°Ñ ÑˆÐ°Ð¿Ð¾Ñ‡ÐºÐ°', 'fdsfs', '2019-08-19 20:12:00', 213, 31),
(26, 'Ð’Ð¾Ð¹Ð½Ð° Ð¸ Ð¼Ð¸Ñ€', 'Ð²Ñ‹Ð²Ñ‹', '1212-02-21 00:00:00', 1231, 123),
(27, '1984', 'ÐžÑƒÑ€ÑÐ» Ð¾Ð± Ð°Ð½Ñ‚Ð¸ÑƒÑ‚Ð¾Ð¿Ð¸Ð¸', '2012-12-21 00:00:00', 12, 53543),
(28, 'Ð“Ð°Ñ€Ñ€Ð¸ Ð¿Ð¾Ñ‚Ñ‚ÐµÑ€', 'Ñ‚ÐµÑÑ‚Ð¾Ð²Ð¾Ðµ Ð¾Ð¿Ð¸ÑÐ°Ð½Ð¸Ðµ', '2019-08-31 00:00:00', 433, 11999);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `books_list`
--
ALTER TABLE `books_list`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `books_list`
--
ALTER TABLE `books_list`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
